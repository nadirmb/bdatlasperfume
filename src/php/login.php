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

    // verificamos si se encuentra un usuario con ese correo
    if ($resultado->num_rows === 1) {
        $row = $resultado->fetch_assoc(); //obtenemos datos del usuario

        // verificamos si la contraseña ingresada coincida con la almacenada
        if (password_verify($clave, $row['password'])) {
            // si la contraseña es correcta pues se guarda la sesion y nos rediriigmos a perfuee.html
            $_SESSION['usuario'] = $usuario;
            header("Location: /html/perfume.html");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
// cerramos consulta y la conexion
    $stmt->close();
    $conn->close();
}
?>
