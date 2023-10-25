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
    <link rel="stylesheet" href="../CSS/registro-style.css">
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    <title>Crear publicaciones</title>
</head>

<body>
    <!-- MENÚ DE NAVEGACIÓN -->
    <?php
    include '../Acciones/navbar.php';
    ?>
    <!-- CREAR PUBLICACIÓN -->
    <section>
        <div class="container">
            <form class="form" id="miFormulario"  action="../Acciones/upload.php" method="post" enctype="multipart/form-data">
                <h2 class="titulo-centrado"><i class="fas fa-pen"></i> Crear Publicación</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <label for="Nombre"><i class="fas fa-tag"></i> Nombre del Producto(s)</label>
                        <input type="text" name="Nombre" required>
                    </div>
                    <div class="input-box w50">
                        <label for="Precio"><i class="fas fa-dollar-sign"></i> Precio</label>
                        <input type="number" name="Precio" required>
                    </div>
                    <div class="input-box w50">
                        <label for="Existencias"><i class="fas fa-box"></i> Existencias</label>
                        <input type="number" name="Existencias" required>
                    </div>
                    <div class="input-box w50">
                        <label for="Descripcion"><i class="fas fa-info-circle"></i> Descripción</label>
                        <input type="text" name="Descripcion" required>
                    </div>
                    <div class="imagen">
                        <label for="imagen"><i class="fas fa-image"></i> Selecciona una imagen para subir:</label>
                        <input type="file" name="imagen" id="imagen" accept="image/*" required>
                    </div>
                    <div class="input-box w100 btn">
                        <button type="submit" id="enviar"><i class="fas fa-upload"></i> Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
   

 </script>
</body>

</html>

<?php 
} else {
  header('Location: ../Vistas/inicio.php');
}
?>
