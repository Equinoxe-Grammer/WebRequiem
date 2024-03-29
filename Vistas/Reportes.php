<?php session_start();
if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Contraseña']) ){



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reportes</title>
  <link rel="stylesheet" href="../fontawesome/css/all.css">
  <link rel="stylesheet" href="../CSS/Estilo-Reportes.css">
  <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 384 512'%3E%3Cpath d='M32 32c17.7 0 32 14.3 32 32V288c0 70.7 57.3 128 128 128s128-57.3 128-128V64c0-17.7 14.3-32 32-32s32 14.3 32 32V288c0 106-86 192-192 192S0 394 0 288V64C0 46.3 14.3 32 32 32z'/%3E%3C/svg%3E" type="image/svg+xml">
    
</head>

<body>
  <!-- MENÚ DE NAVEGACIÓN -->
  <?php
  include '../Acciones/navbar.php'
  ?>

  <!-- Header -->
  <h1 class="formulario">Formulario de Contacto</h1>

  <div class="form-container">
    <div class="datos1">
      <label for="username">Nombre de Usuario:</label>
      <input type="text" id="username" name="username" required>
      <br>
      <form onsubmit="return validarEmail()">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <button type="submit" class="btn-envi">Enviar</button>
      </form>
    </div>

    <div class="datos2">
      <label for="phone">Teléfono:</label>
      <button>+1 555-123-4567</button>
      <br>
      <label for="address">Dirección:</label>
      <button>Pedro de Alba SN, Niños Héroes, Ciudad Universitaria, San Nicolás de los Garza, N.L..
        Facultad de Ingeniería Mecánica y Eléctrica
      </button>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8069.095789912563!2d-100.31850086736901!3d25.72515195927383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86629452551ea79f%3A0x66e03550ec5730cb!2sFacultad%20de%20Ingenier%C3%ADa%20Mec%C3%A1nica%20y%20El%C3%A9ctrica!5e0!3m2!1ses!2smx!4v1684612252672!5m2!1ses!2smx" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="mapaf"></iframe>
    </div>
  </div>
  <div class="formulario2">
    <h1 class="formulario">¿Que deseas enviar?</h1>

    <label for="opciones" class="formulario">Seleccione una opción:</label>
    <div class="barra">
      <select id="opciones" name="opciones">
        <option value="mensaje">Mensaje</option>
        <option value="reporte">Reporte</option>
      </select>
    </div>
  </div>
  <h1 class="repotext">Escribe aqui lo que tienes que decir:</h1>
  <form onsubmit="limpiarTexto();" class="repotext">
    <textarea id="texto" rows="4" cols="50" placeholder="Escribe tu texto aquí..."></textarea>
    <br>
    <input type="submit" value="Enviar" class="btn-envi">
  </form>
</body>

</html>
<?php 
}else {
  header('location:../Vistas/inicio.php');
}
?>