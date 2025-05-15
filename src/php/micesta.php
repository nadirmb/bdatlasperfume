<?php
session_start();
include '../php/bdconexion.php';

// si no hay productos
if (!isset($_SESSION['cesta']) || empty($_SESSION['cesta'])) {
    $productosHTML = "<p>No hay productos en tu cesta.</p>";
    $total = 0;
} else {
    $productosHTML = "";
    $total = 0;

    foreach ($_SESSION['cesta'] as $id_perfume => $cantidad) {
        $sql = "SELECT nombre, precio FROM perfume WHERE id_perfume = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_perfume);
        $stmt->execute();
        $res = $stmt->get_result()->fetch_assoc();


        $stock = $res['stock'];
        $nombre = $res['nombre'];
        $precio = $res['precio'];
        $subtotal = $precio * $cantidad;
        $total += $subtotal;

        // añadimos cada perfume al HTML
        $productosHTML .= "
        <div class='list-group-item d-flex justify-content-between align-items-center border-bottom py-3'>
            <span class='font-weight-bold'>{$nombre} x{$cantidad}</span>
            <span class='text-primary'>{$subtotal} euros</span>
        </div>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión en Atlas Perfume</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/micestastyles.css">
</head>

<body>
    
    <?php
        include "../includes/header2.php";
    ?>


    <main class="mt-5 container-cesta ">
        <h2 id="h2" class="text-center ">Revisa tus productos antes de pagar</h2>

        <!-- Lista de productos -->
        <div class="card p-3 mb-3 shadow-sm">
            <h5 class="mb-3 font-weight-bold">Productos en tu carrito</h5>
            <div id="lista-productos" class="list-group">
                <!-- Producto de ejemplo -->
             <?php echo $productosHTML; ?>
            </div>
        </div>

        <!-- Total y finalizar compra -->
        <div class="card p-4 text-center shadow-sm">
            <h5 class="mb-3 font-weight-bold">Total de la compra:</h5>
            <p id="total-precio" class="font-weight-bold text-danger"><?php echo number_format($total, 2); ?> euros</p>
            <form action="/php/finalizar_compra.php" method="POST">
                <button id="finalizar-compra" class="btn btn-success btn-lg">Finalizar Compra</button>
            </form>

        </div>
    </main>

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

    <script src="#"></script>
</body>

</html>