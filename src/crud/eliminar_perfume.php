<?php
include '../php/bdconexion.php'; // conectar bd

$id = $_GET['id']; // id del perfume

// borrar stock primero
$stmt1 = $conn->prepare("DELETE FROM stock WHERE id_perfume = ?");
$stmt1->bind_param("i", $id);
$stmt1->execute();

// borrar perfume
$stmt2 = $conn->prepare("DELETE FROM perfume WHERE id_perfume = ?");
$stmt2->bind_param("i", $id);
$stmt2->execute();

echo "eliminado<br><a href='/crud/listar_perfumes.php'>volver</a>";
?>

