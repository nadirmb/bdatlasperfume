<?php
// iniciamos sesión para acceder a la cesta
session_start();
if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Debes iniciar sesión para finalizar la compra'); window.location.href = '/html/iniciarsesion.html';</script>";
    exit();
}
include 'bdconexion.php'; // conexión a la base de datos

// comprobamos si hay productos en la cesta
if (!isset($_SESSION['cesta']) || empty($_SESSION['cesta'])) {
    echo "Tu cesta está vacía.";
    exit;
}

// obtenemos el usuario desde la sesión (puede ser correo o DNI según tu login)
$cliente = $_SESSION['usuario'] ?? 'desconocido';

// insertamos pedido en la tabla pedidos
$sql_pedido = "INSERT INTO pedidos (cliente) VALUES (?)";
$stmt = $conn->prepare($sql_pedido);
$stmt->bind_param("s", $cliente);
$stmt->execute();
$id_pedido = $stmt->insert_id; // id generado

// recorremos la cesta
foreach ($_SESSION['cesta'] as $id_perfume => $cantidad) {
    // obtenemos nombre, precio y stock actual del perfume
    $sql = "SELECT nombre, precio, stock_actual 
            FROM perfume 
            JOIN stock ON perfume.id_perfume = stock.id_perfume 
            WHERE perfume.id_perfume = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id_perfume);
    $stmt->execute();
    $res = $stmt->get_result();
    $fila = $res->fetch_assoc();

    $nombre = $fila['nombre'];
    $precio = $fila['precio'];
    $stock_actual = $fila['stock_actual'];

    // verificar si hay suficiente stock
    if ($stock_actual < $cantidad) {
        echo "<script>
            alert('No hay suficiente stock de \"$nombre\". Solo quedan $stock_actual unidades.');
            window.location.href = '/php/micesta.php';
        </script>";
        exit();
    }

    // insertamos en linea_pedido
    $sql_linea = "INSERT INTO linea_pedido (id_pedido, id_perfume, cantidad, precio_unidad)
                  VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql_linea);
    $stmt->bind_param("iiid", $id_pedido, $id_perfume, $cantidad, $precio);
    $stmt->execute();

    // restamos stock
    $sql_stock = "UPDATE stock SET stock_actual = stock_actual - ? WHERE id_perfume = ?";
    $stmt = $conn->prepare($sql_stock);
    $stmt->bind_param("ii", $cantidad, $id_perfume);
    $stmt->execute();
}

// vaciamos la cesta después de finalizar compra
unset($_SESSION['cesta']);

// mostramos mensaje de confirmación con sweetalert
echo '<script type="text/javascript">
    alert("¡Gracias por tu compra!, tu pedido se ha registrado correctamente.");
    window.location.href = "/php/perfume.php";
    </script>';

?>