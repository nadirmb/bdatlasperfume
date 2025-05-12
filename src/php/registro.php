<?php
include "../php/bdconexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$edad = $_POST["edad"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // hashearemos la contraseña por seguridad 
// para nuestros usuario asin nosotors no podemos ver sus contraseñsa
}
?> 