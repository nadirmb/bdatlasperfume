<?php
include '/php/bdconexion.php'; // conectar a bd

// consulta para ver perfumes y su stock
$sql = "SELECT p.id_perfume, p.nombre, p.precio, s.stock_actual 
        FROM perfume p 
        LEFT JOIN stock s ON p.id_perfume = s.id_perfume";

$result = $conn->query($sql);

// empezamos la tabla
echo "<h2>Perfumes</h2>";
echo "<table border='1'>
<tr><th>ID</th><th>Nombre</th><th>Precio</th><th>Stock</th><th>Acción</th></tr>";

// mostrar perfumes uno a uno
while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id_perfume']}</td>
        <td>{$row['nombre']}</td>
        <td>{$row['precio']}</td>
        <td>{$row['stock_actual']}</td>
        <td><a href='/crud/eliminar_perfume.php?id={$row['id_perfume']}'>Eliminar</a></td>
    </tr>";
}

// cerramos tabla
echo "</table>";
?>
