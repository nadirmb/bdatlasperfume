<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atlas Perfume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    
    <?php
        include "../includes/header.php";
    ?>


    <br><br>
    <main id="main" class="mt-5 container perfume-section">
        <!-- Hero Section: Perfume Principal -->
        <div class="row">
            <div class="col-md-6 text-center">
                <a href="/perfumes/FraganceEiffel.php">
                    <img src="/assets/img/FraganceEiffel.png" alt="Perfume Principal" class="perfume-image">
                </a>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center align-items-md-start">
                <h2 class="perfume-title">Descubre tu Fragancia Única</h2>
                <p class="perfume-subtitle">La esencia que te define</p>
                <a href="/perfumes/FraganceEiffel.php">
                    <button class="btn btn-primary perfume-button">Ver Colección</button>
                </a>
            </div>
        </div>

        <!-- Sección de Productos -->
        <section class="products-section mt-5">
            <h3 class="text-center mb-4">Nuestros Perfumes</h3>
            <div class="row carousel" id="carousel">
                <!-- Producto 1 -->
                <div class="col-md-3 col-12 product-card">
                    <a href="/perfumes/EscadaParadise.php">
                        <img src="/assets/img/EscadaParadise.png" alt="Escada Paradise" class="product-image">
                        <h4>Escada Paradise</h4>
                    </a>
                    <p>Tropical Island</p>
                    <p><span class="new-price">59,95€</span></p>
                    <div class="size-options">
                        <button class="active">100 ml</button>
                    </div>
                </div>

                <!-- Producto 2 -->
                <div class="col-md-3 product-card">
                    <a href="/perfumes/IrohaNature.php">
                        <img src="/assets/img/IrohaNature.png" alt="Iroha Nature " class="product-image">
                        <h4>Iroha Nature</h4>
                    </a>
                    <p>Prevent & Correct</p>
                    <p><span class="new-price">28,95€</span></p>
                    <div class="size-options">
                        <button>30 ml</button>
                    </div>
                </div>

                <!-- Producto 3 -->
                <div class="col-md-3 product-card">
                    <a href="/perfumes/Dolce&Gabbana.php">
                        <img src="/assets/img/Dolce&Gabbana.png" alt="Dolce & Gabbana" class="product-image">
                        <h4>Dolce & Gabbana</h4>
                    </a>
                    <p>Devotion Male Pour Homme</p>
                    <p><span class="new-price">84,95€</span></p>
                    <div class="size-options">
                        <button>50 ml</button>
                    </div>
                </div>

                <!-- Producto 5 (oculto inicialmente) -->
                <div class="col-md-3 product-card ocult-product">
                    <a href="/perfumes/TalianiPizzini.php">
                        <img src="/assets/img/TalianiPizzini.jpg" alt="Taliani Pizzini" class="product-image">
                        <h4>Taliani Pizzini</h4>
                    </a>
                    <p>Perfumini Only Men</p>
                    <p><span class="new-price">37,99€</span></p>
                    <div class="size-options">
                        <button>70 ml</button>
                    </div>
                </div>

                <!-- Producto 6 (oculto inicialmente) -->
                <div class="col-md-3 product-card ocult-product">
                    <a href="/perfumes/PerfumSalam.php">
                        <img src="/assets/img/PerfumSalam.png" alt="PerfumSalam" class="product-image">
                        <h4>Perfum Salam </h4>
                    </a>
                    <p>Jabl atlas Tng</p>
                    <p><span class="new-price">35,99€</span></p>
                    <div class="size-options">
                        <button>55 ml</button>
                    </div>
                </div>
            </div>

            <!-- Flechas de Navegación -->
            <div class="carousel-nav">
                <button id="IzquierdaBtn" disabled class="carousel-btn">←</button>
                <button id="DerechaBtn" class="carousel-btn">→</button>
            </div>
        </section>

        <!-- Botones de Países -->
        <section id="country-buttons-section" class="mt-5 text-center">
            <h3>Explora por Países</h3>
            <!-- Botones circulares -->
            <button class="btn-country" data-country="francia">🇫🇷</button>
            <button class="btn-country" data-country="italia">🇮🇹</button>
            <button class="btn-country" data-country="japon">🇯🇵</button>
            <button class="btn-country" data-country="marroc">🇲🇦</button>
        </section>

        <!-- Sección de perfumes de Francia -->
        <section class="country-section" data-country="francia">
            <h3>Perfumes de Francia</h3>
            <section class="contenedor-pais">
                <!-- Aquí agregarías los productos de Francia -->
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/FraganceEiffel.php">
                        <img src="/assets/img/FraganceEiffel.png" alt="Fragance Eiffel" class="product-image">
                        <h4>Fragance Eiffel</h4>
                    </a>
                    <p><span class="new-price">52,99€</span></p>
                    <div class="size-options">
                        <button class="active">50 ml</button>
                    </div>
                </div>
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/EscadaParadise.php">
                        <img src="/assets/img/EscadaParadise.png" alt="Escada Paradise" class="product-image">
                        <h4>Escada Paradise</h4>
                    </a>
                    <p><span class="new-price">59,95€</span></p>
                    <div class="size-options">
                        <button class="active">100 ml</button>
                    </div>
                </div>
            </section>
        </section>

        <!-- Sección de perfumes de Italia -->
        <section class="country-section" data-country="italia">
            <h3>Perfumes de Italia</h3>
            <section class="contenedor-pais">
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/TalianiPizzini.php">
                        <img src="/assets/img/TalianiPizzini.jpg" alt="Taliani Pizzini" class="product-image">
                        <h4>Taliani Pizzini</h4>
                    </a>
                    <p><span class="new-price">37,99€</span></p>
                    <div class="size-options">
                        <button>70 ml</button>
                    </div>
                </div>

                <div class="col-md-3 product-card2">
                    <a href="/perfumes/Dolce&Gabbana.php">
                        <img src="/assets/img/Dolce&Gabbana.png" alt="Dolce & Gabbana" class="product-image">
                        <h4>Dolce & Gabbana</h4>
                    </a>
                    <p><span class="new-price">84,95€</span></p>
                    <div class="size-options">
                        <button>50 ml</button>
                    </div>
                </div>
            </section>
        </section>

        <section class="country-section" data-country="japon">
            <h3>Perfumes de Japón</h3>
            <section class="contenedor-pais">
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/Pirin-kun.php">
                        <img src="/assets/img/Pirin-kun.png" alt="Pirin-kun" class="product-image">
                        <h4>Pirin-kun</h4>
                    </a>
                    <p><span class="new-price">43,99€</span></p>
                    <div class="size-options">
                        <button>50 ml</button>
                    </div>
                </div>

                <div class="col-md-3 product-card2">
                    <a href="/perfumes/IrohaNature.php">
                        <img src="/assets/img/IrohaNature.png" alt="Iroha Nature " class="product-image">
                        <h4>Iroha Nature</h4>
                    </a>
                    <p><span class="new-price">28,95€</span></p>
                    <div class="size-options">
                        <button>30 ml</button>
                    </div>
                </div>
            </section>
        </section>

        <section class="country-section" data-country="marroc">
            <h3>Perfumes de Marruecos</h3>
            <section class="contenedor-pais">
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/BlackPolice.php">
                        <img src="/assets/img/BlackPolice.png" alt="Black Police" class="product-image">
                        <h4>Black Police</h4>
                    </a>
                    <p><span class="new-price">55,99€</span></p>
                    <div class="size-options">
                        <button>60 ml</button>
                    </div>
                </div>
                <div class="col-md-3 product-card2">
                    <a href="/perfumes/PerfumSalam.php">
                        <img src="/assets/img/PerfumSalam.png" alt="PerfumSalam" class="product-image">
                        <h4>Perfum Salam</h4>
                    </a>
                    <p><span class="new-price">35,99€</span></p>
                    <div class="size-options">
                        <button>55 ml</button>
                    </div>
                </div>
            </section>
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