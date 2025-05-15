<?php
// iniciamos sesión para acceder a la cesta
session_start();
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
    // obtenemos precio actual del perfume
    $sql_precio = "SELECT precio FROM perfume WHERE id_perfume = ?";
    $stmt = $conn->prepare($sql_precio);
    $stmt->bind_param("i", $id_perfume);
    $stmt->execute();
    $res = $stmt->get_result();
    $fila = $res->fetch_assoc();
    $precio = $fila['precio'];

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

// mostramos mensaje de confirmación
echo "<h2>¡Gracias por tu compra!</h2>";
echo "<p>Tu pedido se ha registrado correctamente.</p>";
echo "<a href='/php/perfume.php'>Volver a la tienda</a>";
?>


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
    // obtenemos precio actual del perfume
    $sql_precio = "SELECT precio FROM perfume WHERE id_perfume = ?";
    $stmt = $conn->prepare($sql_precio);
    $stmt->bind_param("i", $id_perfume);
    $stmt->execute();
    $res = $stmt->get_result();
    $fila = $res->fetch_assoc();
    $precio = $fila['precio'];

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

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas Perfume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/crud.css">
</head>
</html>

