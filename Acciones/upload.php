<?php session_start();
if (isset($_SESSION['IdUsuario']) && isset($_SESSION['Contraseña']) ){



?>
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
$Nombre = $_POST['Nombre'];
$Precio = $_POST['Precio'];
$Existencias = $_POST['Existencias'];
$Descripcion = $_POST['Descripcion'];
$imagen = $_FILES['imagen']['tmp_name'];
$Id = $_SESSION['IdUsuario'];

// Convertir la imagen en binario
$imagen_binario = addslashes(file_get_contents($imagen));

// Insertar los datos en la tabla
$sql = "INSERT INTO producto (Nombre, Precio, Existencia, Descripcion, imagen,idUsuario) VALUES ('$Nombre', '$Precio', '$Existencias', '$Descripcion', '$imagen_binario','$Id')";

if ($conn->query($sql) === TRUE) {
  
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
