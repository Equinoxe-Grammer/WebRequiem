<?php
$Idusuario=$_SESSION['IdUsuario'];
?>
<nav>
    <style>
#logo {
  position: relative;
  left: 5%;
  top: 5%;
}
    </style>
    <div>
    <a href="index.php"></a><img src="../img/logo.jpg" id="logo" alt="">
    </div>

    <div class="enlaces">
        <a href="index.php">Inicio</a>
        <a href="crear.php">Registrar productos</a>
        <a href="mis-publicaciones.php#slide1">Mis productos</a>
        <a href="../Vistas/publicaciones.php">Ver publicaciones</a>
        <a class="input-container">
        <a href="../Acciones/cerrarsesion.php"> Cerrar Sesion </a>
    </div>
</nav>