<?php
//inicaamos la sesion para guardar datos del usuario
session_start();
include 'bdconexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //recuperamos datos enviados desde el formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    //consulta sql asin buscamos el usuario en la base de datos
    $sql = "SELECT * FROM cliente WHERE correo = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario); // nos protegemos contra inyeqccion sql
    $stmt->execute();
    $resultado = $stmt->get_result();
    }
?>