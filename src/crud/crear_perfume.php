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
    echo "guardado";
} catch (Exception $e) {
    $conn->rollback(); // si hay error
    echo "error: " . $e->getMessage();
}
?>
