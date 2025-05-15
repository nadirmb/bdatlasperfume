<?php session_start(); ?>
<!DOCTYPE html>
<html>

<body>
<header>
    <nav style="border-radius: 20px; background-color: #dce0e3f2;" class="navbar navbar-expand-lg navbar-light ">
        <div class="navbar-brand">
            <a href="/php/perfume.php"><img src="/assets/img/logo.png" id="logo" alt="Logo"></a>
        </div>

        <!-- Título en móvil -->
        <h1 class="titulo-movil d-lg-none mx-auto">Atlas Perfume</h1>

        <!-- Botón para colapsar en dispositivos móviles -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Título y enlaces de navegación -->
            <ul class="navbar-nav ml-auto">

                <li class="nav-item d-lg-none">
                    <a class="nav-link" href="/php/micesta.php">Mi Cesta</a>
                </li>

                <?php if (isset($_SESSION['usuario'])): ?>
                    <!-- Mostrar cerrar sesión si hay sesión -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/php/cerrar_sesion.php">Cerrar sesión</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="/php/micesta.php">Mi Cesta</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="/php/cerrar_sesion.php">Cerrar sesión</a>
                    </li>
                <?php else: ?>
                    <!-- Si no ha iniciado sesión -->
                    <li class="nav-item d-lg-none">
                        <a class="nav-link" href="/html/iniciarsesion.html">Entrar/Registrarse</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="/php/micesta.php">Mi Cesta</a>
                    </li>
                    <li class="nav-item d-none d-lg-block">
                        <a class="nav-link" href="/html/iniciarsesion.html">Entrar/Registrarse</a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>

        <!-- Título para escritorio -->
        <h1 class="d-none d-lg-block">Atlas Perfume</h1>
    </nav>
</header>
