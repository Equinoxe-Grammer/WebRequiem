<?php
session_start();
// Conecta a tu base de datos
$conexion = mysqli_connect("localhost", "root", "Teteradegas69/", "proyectof");

// Verifica si hay errores en la conexión
if (mysqli_connect_errno()) {
    echo "Error al conectar a MySQL: " . mysqli_connect_error();
    exit;
}

// Obtiene los valores del formulario
$matricula = $_POST["matricula"];
$contraseña = $_POST["contraseña"];


// Escapa los valores para evitar inyección SQL
$matricula = mysqli_real_escape_string($conexion, $matricula);
$contraseña = mysqli_real_escape_string($conexion, $contraseña);

// Crea una consulta SQL para seleccionar el usuario y la contraseña de la tabla de usuarios
$sql = "SELECT * FROM usuario WHERE matricula = '$matricula' AND contraseña = '$contraseña'";
$query = $conexion->query($sql);
// Ejecuta la consulta SQL
$resultado = mysqli_query($conexion, $sql);

// Verifica si hay errores en la consulta SQL
if (!$resultado) {
    echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
    exit;
}

// Verifica si el número de filas devueltas por la consulta es igual a 1
if (mysqli_num_rows($resultado) == 1) {
    $usuario = $query->fetch_assoc();
    $Id=  $usuario['IdUsuario'];
    $_SESSION['IdUsuario'] = $Id;
    $_SESSION['Contraseña'] = $contraseña;
    echo "<script>
    location.href = '../Vistas/index.php'
    </script>";
} else {
    echo "Usuario o contraseña inválidos";
}

// Cierra la conexión a la base de datos
mysqli_close($conexion);
?>
