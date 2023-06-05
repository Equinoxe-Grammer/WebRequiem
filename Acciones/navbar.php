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
        <a href="crear.php">Crear publicación</a>
        <a href="mis-publicaciones.php#slide1">Mis publicaciones</a>
        <a class="input-container">
        <a href="../Acciones/cerrarsesion.php"> Cerrar Sesion </a>
           
        </a>
    </div>
</nav>