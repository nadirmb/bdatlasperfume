<?php
// datos de la conexión a la base de datos
$host = "localhost"; //localhoostt
$user = "usuario"; //este es el usuario de la base de datos 
$password = "1234"; //contraseña de la base de datos
$db = "atlas_perfume"; // aqui ponemos el nombre de la base de datos

$conn = new mysqli($host, $user, $password, $db);

// comprobar que la conexion es correcta
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error); //esto mostrara un mensaje de error si la conexion falla
}
?>