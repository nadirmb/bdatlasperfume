<?php
session_start(); // iniciar sesión

// si no hay cesta aún, la creamos
if (!isset($_SESSION['cesta'])) {
    $_SESSION['cesta'] = [];
}

// recogemos el id del perfume desde la URL
$id_perfume = $_GET['id'] ?? null;

if ($id_perfume) {
    // si ya está en la cesta, sumamos 1
    if (isset($_SESSION['cesta'][$id_perfume])) {
        $_SESSION['cesta'][$id_perfume]++;
    } else {
        // si no está, lo añadimos con 1 unidad
        $_SESSION['cesta'][$id_perfume] = 1;
    }
}

// volvemos a la página principal o a micesta.php
header("Location: /php/micesta.php");
exit();
?>
