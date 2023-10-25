<?php
// Conectarse a la base de datos
$conn = mysqli_connect("localhost", "root", "Teteradegas69/", "proyectof");

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Obtener el ID del botón
$id = $_POST['id'];

// Eliminar la fila
$sql = "DELETE FROM producto WHERE IdProducto = $id";

if (mysqli_query($conn, $sql)) {
    echo "Fila eliminada correctamente";
} else {
    echo "Error al eliminar fila: " . mysqli_error($conn);
}

mysqli_close($conn);
?>