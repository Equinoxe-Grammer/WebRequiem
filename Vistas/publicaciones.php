<?php session_start();
if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Contraseña']) ){



?>
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


    <main class="contenido-principal contenedor ">
        <h2 class="titulo-centrado">Nuestras Públicaciones</h2>

        <div class="listado-productos">
            <div class="producto">
                <img src="../img/producto1.jpg" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Tacos de picadillo</h2>
                    <p class="justificado">¡Deliciosos tacos de picadillo! Nuestros tacos de picadillo son una combinación perfecta de sabores y texturas que te harán agua la boca. Cada taco está relleno con una jugosa mezcla de carne de res sazonada con especias tradicionales, cebolla caramelizada, pimientos frescos y papas tiernas, todo cocinado a fuego lento para resaltar los sabores.</p>
                    <p class="precio">Precio: $55.00</p>
                    <h3 class="centro">Nombre del vendedor: Jorge Martinez Machuca</h3>

                    <div class="ubicacion">
                        <h3 class="centro">Ubicación:</h3>
                        <H3 class="centro">Facultad de Ingeniería Mecánica y Eléctrica</H3>
                    </div>
                </div>
            </div>

            <div class="producto">
                <img src="../img/producto2.webp" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Blusa blanca de vestir</h2>
                    <p class="justificado">Camisa de Vestir Mujer, Camisa para Mujer Manga Larga, Blusa, Color Blanca, con Cuello, Tallas variadas, de Vestir, Uniforme.</p>
                    <p class="precio">Precio: $320.00</p>
                    <h3 class="centro">Nombre del vendedor: Alondra Elizabeth Hidalgo Ortiz</h3>

                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Arquitecturaz</H3>
                </div>
            </div>

            <div class="producto">
                <img src="../img/producto3.avif" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Calculadora Cientifica Casio</h2>
                    <p class="justificado">Excelente calculadora, posee Pantalla de 4 líneas, puedes realizar cálculos fraccionarios, estadística, combinación y permutación, comandos en español, factorización prima, funciones estándar, 9 variables, función de repetición múltiple, conversión estándar decimal</p>
                    <p class="precio">Precio: $370.00</p>
                    <h3 class="centro">Nombre del vendedor: Laura Torres Garcia</h3>

                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Ciencias Físico-Matemáticos</H3>
                </div>
            </div>

            <div class="producto">
                <img src="../img/producto4.jpg" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Bata Medica</h2>
                    <p class="justificado">Bata Medica Blanca Para Hombre, Repelente De Agua Y Líquidos, Tres Bolsas Al frente, Tela De Tacto Suave De Alta Calidad Premium, Tecnología Antifluido, Uniforme Marca Lazzar, Hecho En México, es 100% poliéster</p>
                    <p class="precio">Precio: $400.00</p>
                    <h3 class="centro">Nombre del vendedor: Francisco Ramírez Hernandez</h3>


                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Medicina</H3>
                </div>
            </div>

            <div class="producto">
                <img src="../img/producto5.jpg" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Guitarra</h2>
                    <p class="justificado">Guitarra de Instrumento, Modelo de Guitarra clásica Musical en Miniatura, Adorno para Amigos, Familiares, compañeros de Clase.</p>
                    <p class="precio">Precio: $361.00</p>
                    <h3>Nombre del vendedor: Jose Juan García Lopez</h3>


                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Música</H3>
                </div>
            </div>

            <div class="producto">
                <img src="../img/producto6.jpg" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Arduino UNO</h2>
                    <p class="justificado">Se vende Arduino UNO Compatible Placa de Microcontrolador con Cable USB.</p>
                    <p class="precio">Precio: $240.00</p>
                    <h3>Nombre del Vendedor: Luis Martínez Ibarra</h3>

                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Ingeniería Mecánica y Eléctrica</H3>
                </div>
            </div>


            <div class="producto">
                <img src="../img/producto7.webp" alt="Imagen Producto">

                <div class="texto-producto">
                    <h2 class="titulo-centrado">Papitas</h2>
                    <p class="justificado">Se venden papas fritas clásicas de Lay, Cheetos crujientes, Fritos de queso con chile, papas fritas BBQ de Lay’s, Funyuns originales, Queso Doritos Nacho, Fritos originales y Chips de queso cheddar y crema agria con volantes.</p>
                    <p class="precio">Precio: $7.00</p>
                    <h3>Nombre del vendedor: Melany García Valle</h3>

                    <h3 class="centro">Ubicación:</h3>
                    <H3 class="centro">Facultad de Contaduría Pública y Administración</H3>
                </div>
            </div>
        </div>
    </main>


</body>

</html>
<?php 
}else {
  header('location:../Vistas/inicio.php');
}
?>