<?php
// datos de la conexión a la base de datos
$host = "localhost"; //localhoostt
$user = "root"; //este es el usuario de la base de datos 
$password = ""; //contraseña de la base de datos
$dbname = "atlas_perfume"; // aqui ponemos el nombre de la base de datos

// comprobar que la conexion es correcta
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error); //esto mostrara un mensaje de error si la conexion falla
} else {
    echo "Conexión exitosa a la base de datos."; // Confirmacio!!!!! de conexión exitosa
}

$email = $_POST['email']; //  correo electrónico
$pass = $_POST['password']; // contraseña

// encriptar la contraseña para mayor seguridad
$pass_hashed = password_hash($pass, PASSWORD_DEFAULT);
?>