<?php
include "../php/bdconexion.php"; // incluimos ya el archivo de conexion de bd.conexion.php para poderhacear el registro

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$dni = $_POST["dni"];
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direccion"];
$edad = $_POST["edad"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // hashearemos la contraseña por seguridad 
// para nuestros usuario asin nosotors no podemos ver sus contraseñsa

$sql = "INSERT INTO cliente (dni, nombre, correo, telefono, direccion, edad, password)
VALUES (?, ?, ?, ?, ?, ?, ?)"; // dejamos los espacios reservados para el sql 
$stmt = $conn->prepare($..sql);
$stmt->bind_param("sssssis", $dni, $nombre, $correo, $telefono, $direccion, $edad, $password); //
// sssssis para deicr de que es cada tipo por ejemplo s de string o i de entero

if ($stmt->execute()) {
echo "Registro exitoso.";
} else {
echo "Error al registrar: " . $conn->error;
}

//cerrar la consulta
$stmt->close();

//cerrar la conexión 
$conn->close();
}
?>