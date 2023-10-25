<?php
session_start();

if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Contraseña'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    
    <title>Publicaciones</title>
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <?php include '../Acciones/navbar.php'; ?>

    <main class="contenido-principal contenedor">
        <h2 class="titulo-centrado">Nuestras Publicaciones</h2>

        <div class="listado-productos">
            <?php
            // Utilizar un bucle para mostrar productos
            $productos = [
                [
                    "imagen" => "../img/producto1.jpg",
                    "nombre" => "Tacos de picadillo",
                    "descripcion" => "¡Deliciosos tacos de picadillo! Nuestros tacos de picadillo son una combinación perfecta de sabores y texturas que te harán agua la boca. Cada taco está relleno con una jugosa mezcla de carne de res sazonada con especias tradicionales, cebolla caramelizada, pimientos frescos y papas tiernas, todo cocinado a fuego lento para resaltar los sabores.",
                    "precio" => "$55.00",
                    "vendedor" => "Jorge Martinez Machuca",
                    "ubicacion" => "Facultad de Ingeniería Mecánica y Eléctrica"
                ],
                // Agregar más productos aquí
            ];

            foreach ($productos as $producto) {
            ?>
                <div class="producto">
                    <img src="<?= $producto['imagen'] ?>" alt="Imagen Producto">

                    <div class="texto-producto">
                        <h2 class="titulo-centrado"><?= $producto['nombre'] ?></h2>
                        <p class="justificado"><?= $producto['descripcion'] ?></p>
                        <p class="precio">Precio: <?= $producto['precio'] ?></p>
                        <h3 class="centro">Nombre del vendedor: <?= $producto['vendedor'] ?></h3>

                        <div class="ubicacion">
                            <h3 class="centro">Ubicación:</h3>
                            <h3 class="centro"><?= $producto['ubicacion'] ?></h3>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </main>

</body>
</html>

<?php 
} else {
    header('Location: ../Vistas/inicio.php');
}
?>
