<?php session_start();
if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Contraseña']) ){



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../CSS/productos-style.css">
    <title>Públicaciones</title>
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <?php
    include '../Acciones/navbar.php'
    ?>
    <!-- Publicaciones -->
    
       
        <?php
  include '../Acciones/mostrarmispub.php'
  ?>

    </section>
    <script src="../js/eliminareditarproducto.js"></script>
</body>

</html>
<?php 
}else {
  header('location:../Vistas/inicio.php');
}
?>