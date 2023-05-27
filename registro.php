<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "proyectof");

// Consulta SQL
$sql = "SELECT IdFacultad, Facultad FROM facultad";

// Ejecutar consulta y obtener resultados
$resultado = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="CSS/registro-style.css">
</head>
<body>
    <section>
        <div class="container">
        <!-- Form -->
            <div class="form">
                <h2>Registrarse WebRequiem</h2>
                <div class="form-box">
                    <div class="input-box w50">
                        <input type="text" required>
                        <span>Nombre</span>
                    </div>

                    <div class="input-box w50">
                        <input type="text" required>
                        <span>Apellido</span>
                    </div>

                    <div class="input-box w50">
                        <input type="text" required>
                        <span>Matricula</span>
                    </div>

                    <div class="input-box w50">
                        <input type="text" required>
                        <span>Email</span>
                    </div>

                    <div class="input-box w50">
                        <input type="password" required>
                        <span>Contraseña</span>
                    </div>

                    <div class="input-box w50">
                        <input type="password" required>
                        <span>Confirmar contraseña</span>
                    </div>

                    <div class="input-box w50">
                        <h3>Facultad</h3>
                        <?php
                    // Generar opciones del select
echo "<select name='facultad'>";
while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "<option value='" . $fila['IdFacultad'] . "'>" . $fila['Facultad'] . "</option>";
}
echo "</select>";
?>
                    </div>

                    <div>
                        <label for="cliente">Usuario</label>
                        <input id="cliente" type="radio" name="tipo" value="cliente">
                    </div>
    
                    <div>
                        <label for="proveedor">Administrador</label>
                        <input id="proveedor" type="radio" name="tipo" value="proveedor">
                    </div>

                    <div class="input-box w100 btn">
                        <input type="submit" value="Enviar">
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php



// Cerrar conexión a la base de datos
mysqli_close($conexion);
?>
</body>
</html>