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
  <link rel="stylesheet" href="../CSS/Estilo-Reportes.css">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    
  <title>WebRequiem</title>
</head>

<body>
  <!-- MENÚ DE NAVEGACIÓN -->
  <?php include '../Acciones/navbar.php'; ?>
  
  <!-- Header -->
  <header>
    <div class="contenido">
      <h1 class="titulo-centrado">Web Requiem</h1>
      <p>¡Bienvenido a Web Requiem! Somos una plataforma de comercio electrónico diseñada especialmente para la comunidad de la Universidad Autónoma de Nuevo León (UANL). Aquí puedes publicar y vender todo lo que desees, desde libros de texto, material escolar, comida, productos artesanales, ropa, etc.</p>

      <p>En Web Requiem, nos enfocamos en brindarte una experiencia de compra y venta fácil, rápida y segura. Nuestro sistema de pago en línea es confiable y garantiza la protección de tus datos y transacciones.</p>

      <p>Además, ofrecemos una amplia variedad de categorías para que puedas encontrar lo que estás buscando de manera sencilla. Y si eres vendedor, nuestra plataforma te permite publicar tus productos de manera gratuita y llegar a una audiencia local y relevante.</p>

      <p>¡Explora nuestra tienda en línea hoy mismo y descubre todo lo que Web Requiem tiene para ofrecerte!</p>
    </div>

    <div class="imagen-header"></div>
  </header>
</body>
</html>
<?php 
} else {
  header('Location: ../Vistas/inicio.php');
}
?>
