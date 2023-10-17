<?php
// Conectarse a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyectof";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Obtener los datos del formulario
$Nombre = $_POST['Nombre'];
$Matricula = $_POST['Matricula'];
$Correo= $_POST['Correo'];
$password = $_POST['password'];

if (isset($_POST['facultad'])) {
    $facultad = $_POST['facultad'];
}

// Insertar los datos en la tabla
$sql = "INSERT INTO usuario (Nombre, Matricula, Correo, Contraseña, IdFacultad, IdRol) VALUES ('$Nombre', '$Matricula', '$Correo', '$password', '$facultad','1')";

if ($conn->query($sql) === TRUE) {
    echo "Los datos se han insertado correctamente.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
  ?>