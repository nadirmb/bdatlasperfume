<?php
include "../php/bdconexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
}
?> 