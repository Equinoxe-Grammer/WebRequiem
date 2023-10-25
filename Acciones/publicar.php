<?php
// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "Teteradegas69/";
$dbname = "proyectof";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario
$Titulo = $_POST['Titulo'];
$Descripcion = $_POST['Descripcion'];
$imagen = $_FILES['imagen']['tmp_name'];

// Convertir la imagen en binario
$imagen_binario = addslashes(file_get_contents($imagen));

// Insertar los datos en la tabla
$sql = "INSERT INTO publicacion (IdUsuario, Titulo, Descripcion, Imagen, Visibilidad) VALUES ('$_SESSION[IdUsuario]',  '$Titulo', '$Descripcion', '$imagen_binario','1')";

if ($conn->query($sql) === TRUE) {
  echo "Los datos se han insertado correctamente.";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>