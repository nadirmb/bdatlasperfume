<?php
include '../php/bdconexion.php'; // conectar a bd

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$id_pais = $_POST['id_pais'];
$stock = $_POST['stock'];

$conn->begin_transaction(); // iniciar transaccion

try {
    // guardar perfume
    $stmt = $conn->prepare("INSERT INTO perfume (nombre, precio, id_pais) VALUES (?, ?, ?)");
    $stmt->bind_param("sdi", $nombre, $precio, $id_pais);
    $stmt->execute();
    $id_perfume = $stmt->insert_id;

    // guardar stock
    $stmt2 = $conn->prepare("INSERT INTO stock (id_perfume, stock_actual) VALUES (?, ?)");
    $stmt2->bind_param("ii", $id_perfume, $stock);
    $stmt2->execute();

    $conn->commit(); // confirmar
    echo '<script type="text/javascript">
        alert("Guardado con éxito!");
        </script>';

} catch (Exception $e) {
    $conn->rollback(); // si hay error
    echo '<script type="text/javascript">
        alert("error: ' . $e->getMessage().'");
        </script>';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATLASPERFUME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/crud.css">
</head>
<body>
    <h2>Añadir perfume</h2>

    <!-- este formulario envia el perfume al php -->
    <form action="/crud/crear_perfume.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br>
        Precio: <input type="number" step="0.01" name="precio" required><br>
        País (ID): <input type="number" name="id_pais" required><br>
        Stock: <input type="number" name="stock" required><br>
        <button type="submit">Guardar</button>
    </form>

</body>
</html>