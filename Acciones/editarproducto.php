<?php
// Conectarse a la base de datos
$conn = mysqli_connect("localhost", "root", "Teteradegas69/", "proyectof");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Recuperar los datos del formulario
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$existencias = $_POST['existencias'];

// Actualizar la fila correspondiente en la base de datos
$sql = "UPDATE producto SET Nombre='$nombre', Descripcion='$descripcion', Precio='$precio', Existencia='$existencias' WHERE IdProducto=$id";

if (mysqli_query($conn, $sql)) {
  echo "Los datos se actualizaron correctamente.";
} else {
  echo "Error al actualizar los datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>