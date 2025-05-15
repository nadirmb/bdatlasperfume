<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROYECTO2</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/perfumeinfo.css">
</head>

<body>
    
    <?php
        include "../includes/header3.php";
    ?>

    <br><br>
    <main class="mt-5 container perfume-section">
        <!-- Sección de detalles del perfume -->
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/assets/img/Dolce&Gabbana.png" alt="Dolce & Gabbana" class="perfume-image">
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center align-items-md-start">
                <h2 class="perfume-title">Dolce & Gabbana</h2>
                <p class="perfume-subtitle">La fragancia que te transporta a las playas marinas, donde vas a sentir la
                    frescura de cada brisa.</p>
                <p><strong>Precio:</strong> <span class="new-price">84,95€</span></p>
                <a href="/php/añadir_a_cesta.php?id=5" class="btn btn-primary perfume-button">
                    Añadir a la cesta </a>
            </div>
        </div>

        <!-- Descripción del perfume -->
        <section class="mt-5">
            <h3>Descripción</h3>
            <p>Dolce & Gabbana es una fragancia de la familia olfativa Aromática Acuática para Hombres.
                Esta fragrancia es nueva.
                Las Notas de Salida son Notas marinas, lavanda y pimienta rosa; las Notas de Corazón son Jabón, hojas de
                violeta y mirto;
                las Notas de Fondo son almizcle, cachemira y sándalo.</p>
        </section>

        <!-- Sección de aromas -->
        <section class="mt-5">
            <h3>Aromas Principales</h3>
            <div class="aromas-container">
                <div style=" background-color: #8B4513;" class="aroma aroma-1">
                    <p class="aroma-title">Aromático</p>
                </div>
                <div style=" background-color: #b8825b;" class="aroma aroma-2">
                    <p class="aroma-title">Almizclado</p>
                </div>
                <div style=" background-color: #120e95cd;" class="aroma aroma-3">
                    <p class="aroma-title">Marino</p>
                </div>
                <div style=" background-color: #3c928f;" class="aroma aroma-4">
                    <p class="aroma-title">Jabonoso</p>
                </div>
                <div style=" background-color: #3e6b29;" class="aroma aroma-5">
                    <p class="aroma-title">Atalcado</p>
                </div>
                <div style=" background-color: #b72bb0;" class="aroma aroma-6">
                    <p class="aroma-title">Lavanda</p>
                </div>
            </div>
        </section>

        <!-- Sección de ingredientes -->
        <section class="mt-5">
            <h3>Ingredientes</h3>
            <p>Notas de salida: Mango, Cítricos<br>Notas de corazón: Flor de Tiaré, Frutas tropicales<br>Notas de fondo:
                Almizcle, Madera</p>
        </section>

        <!-- Botones de navegación -->
        <section class="mt-5 text-center">
            <a href="/php/perfume.php"><button class="btn btn-secondary">Ver otros perfumes</button></a>
        </section>
    </main>

    <br><br>
    <?php
        include "../includes/footer.php";
    ?>

    <!-- Bootstrap JS (jQuery, Popper.js, Bootstrap JS) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <!-- JS  -->
    <script src="/js/main.js"></script>
</body>

</html>