<?php
include '/php/bdconexion.php'; // conectar a bd

// consulta para ver perfumes y su stock
$sql = "SELECT p.id_perfume, p.nombre, p.precio, s.stock_actual 
        FROM perfume p 
        LEFT JOIN stock s ON p.id_perfume = s.id_perfume";

$result = $conn->query($sql);
?>
