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
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/productos-style.css">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    
    <title>Publicaciones</title>
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <?php
    include '../Acciones/navbar.php';
    ?>
    <!-- Publicaciones -->
    <section>
        <?php
        include '../Acciones/mostrarmispub.php';
        ?>
    </section>
    <script src="../js/eliminareditarproducto.js"></script>
</body>

</html>
<?php 
} else {
    header('Location: ../Vistas/inicio.php');
    exit; // Agregamos una salida inmediata después de redireccionar
}
?>
