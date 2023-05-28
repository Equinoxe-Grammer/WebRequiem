<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica la conexión
if ($conn->connect_error) {
  die("Conexión fallida: " . $conn->connect_error);
}

// Procesa la imagen subida
if(isset($_POST["submit"])) {
  $nombre_imagen = $_FILES["fileToUpload"]["name"];
  $tipo_imagen = $_FILES["fileToUpload"]["type"];
  $tamaño_imagen = $_FILES["fileToUpload"]["size"];
  $contenido_imagen = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);

  // Guarda la imagen en la base de datos
  $sql = "INSERT INTO imagenes (nombre_imagen, tipo_imagen, tamaño_imagen, contenido_imagen) VALUES ('$nombre_imagen', '$tipo_imagen', '$tamaño_imagen', '$contenido_imagen')";
  if ($conn->query($sql) === TRUE) {
    echo "Imagen subida correctamente.";
  } else {
    echo "Error al subir la imagen: " . $conn->error;
  }
}

$conn->close();
?>