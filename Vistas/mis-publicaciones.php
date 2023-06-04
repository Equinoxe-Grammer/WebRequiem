<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <title>Públicaciones</title>
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <?php
    include '../Acciones/navbar.php'
    ?>
    <!-- Publicaciones -->
    <section class="publicaciones">
        <h2 class="titulo-centrado">Mis publicaciones</h2>
        <div class="slider">
            <div class="slider" id="slide1">
                <h1>Producto: Gomitas con chamoy</h1>
                <h2>Precio: $12.00</h2>
                <h3>Descripcion: ¡Deléitate con nuestras irresistibles gomitas con chamoy! Estas deliciosas golosinas combinan el dulce sabor de las gomitas con la intensidad y el toque picante del chamoy. Cada mordisco es una explosión de sabores que te dejará con ganas de más.</h3>
                <img src="../img/slider1.jpg" />
            </div>

            <div id="slide2">
                <h1>Producto: Memoria Ram 8GB</h1>
                <h2>Precio: $450.00</h2>
                <h3 class="texto-justificado">Descripcion: La Memoria Kingston FURY Beast DDR4 RGB ofrece un impulso de rendimiento y estilo con velocidades de hasta 3200MHz, estilo agresivo e iluminación RGB que se extiende a lo largo del módulo para lograr efectos suaves y sorprendentes. Capacidad de módulo único de 8GB.</h3>
                <img src="../img/slider2.jpg" />
            </div>

            <div id="slide3">
                <h1>Producto: Camiseta Manga Corta Negra</h1>
                <h2>Precio: $150.00</h2>
                <h3>Descripcion: Camiseta de manga corta, confeccionada con tejido en galga fina y acabado compactado. Cuello redondo con 4 capas, cubre costuras reforzado en cuello y hombros y costuras laterales.</h3>
                <img src="../img/slider3.jpg" alt="">
            </div>

            <div id="slide4">
                <h1>Producto: Audifonos Inalambricos Bluetooth</h1>
                <h2>Precio: $190.00</h2>
                <h3>Descripcion: Audifonos inalambricos, la duración de su bateria es de 18h, el tiempo de carga es de 1.5h. Y posee una capacidad de la batería: 43 mAh (auricular);300 mAh (estuche de carga)</h3>
                <img src="../img/slider4.jpg" alt="">
            </div>

            <div id="slide5">
                <h1>Producto: Pulsera de bola de fútbol</h1>
                <h2>Precio: $30.00</h2>
                <h3>Descripcion: Pulsera de bola de fútbol de Color dorado y cobre para hombre y mujer, brazalete de cuentas potentes de piedra de ónix de 6mm, joyería</h3>
                <img src="../img/slider5.jpg" alt="">
            </div>
        </div>

        <ul class="menu">
            <li>
                <a href="#slide1">1</a>
            </li>

            <li>
                <a href="#slide2">2</a>
            </li>

            <li>
                <a href="#slide3">3</a>
            </li>

            <li>
                <a href="#slide4">4</a>
            </li>

            <li>
                <a href="#slide5">5</a>
            </li>
        </ul>
    </section>
</body>

</html>