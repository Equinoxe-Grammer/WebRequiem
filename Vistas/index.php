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
  <link rel="stylesheet" href="../CSS/Estilo-Reportes.css">

  <title>WebRequiem</title>
</head>

<body>
  <!-- MENÚ DE NAVEGACIÓN -->
  <?php
  include '../Acciones/navbar.php'
  ?>


  <!-- Header -->
  <header>
    <div class="contenido">
      <h2 class="titulo-centrado">Web Requiem</h2>
      <p>¡Bienvenido a Web Requiem!. Somos una plataforma de comercio electrónico diseñada especialmente para la comunidad de la Universidad Autónoma de Nuevo León (UANL). Aquí puedes publicar y vender todo lo que desees, desde libros de texto, material escolar, comida productos artesanales, ropa, etc.</p>

      <p>En Web Requiem, nos enfocamos en brindarte una experiencia de compra y venta fácil, rápida y segura. Nuestro sistema de pago en línea es confiable y garantiza la protección de tus datos y transacciones.</p>

      <p>Además, ofrecemos una amplia variedad de categorías para que puedas encontrar lo que estás buscando de manera sencilla. Y si eres vendedor, nuestra plataforma te permite publicar tus productos de manera gratuita y llegar a una audiencia local y relevante.</p>

      <p>¡Explora nuestra tienda en línea hoy mismo y descubre todo lo que Web Requiem tiene para ofrecerte!</p>

      <a href="../Vistas/publicaciones.php"><button class="btn-ini">Ver publicaciones</button></a>
    </div>

    <div class="imagen-header"></div>
  </header>
  <style>
    /* Estilos para el pie de página */
    footer {
      background-color: lightslategray;
      padding: 20px;
      text-align: center;
    }

    /* Estilos para el enlace */
    footer a {
      color: red;
      text-decoration: none;
      font-size: 30px;
    }

    .textorep {
      color: white;
    }
  </style>
  </head>

  <body>
    <!-- Contenido del sitio web -->

    <footer>
      <p class="textorep">¿Tienes comentarios para nosotros? o quizá</p>
      <p class="textorep">¿Viste algo indebido? aqui puedes hacer tu reporte:</p>
      <div class="botonrepo">
        <a href="../Vistas/Reportes.php"><button class="btn first"><img src="../img/reporte logo.png" alt="" width="20px"> Reportes</button></a>
      </div>
    </footer>
  </body>

</html>
<?php 
}else {
  header('location:../Vistas/inicio.php');
}
?>