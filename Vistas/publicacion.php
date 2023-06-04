<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../CSS/registro-style.css">
  <title>Crear publicaciones</title>
</head>

<body>
  <!-- MENÚ DE NAVEGACIÓN -->
  <?php
  include '../Acciones/navbar.php'
  ?>
  <!-- CREAR PUBLICACION -->
  <section>
    <div class="container">
      <form class="form" action="../Acciones/publicar.php" method="post" enctype="multipart/form-data">
        <div class="input-box w50">
          <input type="text" name="Titulo" required>
          <span>Titulo de la publicacion (s)</span>
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