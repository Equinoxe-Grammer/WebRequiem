
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/registro-style.css">
    <title>Crear publicaciones</title>
</head>
<body>
    <!-- MENÚ DE NAVEGACIÓN -->
<nav>
    
    <div>
    <a href="index.html"></a><img src="img/logo.jpg" alt="">
    </div>

    <div class="enlaces">
        <a href="index.html">Inicio</a>
        <a href="crear.php">Crear publicación</a>
        <a href="mis-publicaciones.html">Mis publicaciones</a>
        <a href="inicio.php">Iniciar Sesión</a>
        <a class="input-container">
            <input type="text" placeholder="Buscar">
            <i class="fas fa-search"></i>
        </a>
    </div>
</nav>
<!-- CREAR PUBLICACION -->
<section>
    <div class="container">
    <form class="form"action="upload.php" method="post" enctype="multipart/form-data">
  <div class="input-box w50">
    <input type="text" name="Nombre" required>
    <span>Nombre del Producto (s)</span>
  </div>
  <div class="input-box w50">
    <input type="number" name="Precio" required>
    <span>Precio</span>
  </div>
  <div class="input-box w50">
    <input type="number" name="Existencias" required>
    <span>Existencias</span>
  </div>
  <div class="input-box w50">
    <input type="text" name="Descripcion" required>
    <span>Descripción</span>
  </div>
  <div class="imagen">
    Selecciona una imagen para subir:
    <input type="file" name="imagen" id="imagen">
  </div>
  <div class="input-box w100 btn">
    <input type="submit" value="Enviar">
  </div>
</form>
    </div>
</section>

</body>
</html>