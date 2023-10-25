<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "Teteradegas69/", "proyectof");

// Consulta SQL
$sql = "SELECT IdFacultad, Facultad FROM facultad";

// Ejecutar consulta y obtener resultados
$resultado = mysqli_query($conexion, $sql);

   // Generar opciones del select
   echo "<select name='facultad'>";
   while ($fila = mysqli_fetch_assoc($resultado)) {
       echo "<option value='" . $fila['IdFacultad'] . "'>" . $fila['Facultad'] . "</option>";
   }
   echo "</select>";

   // Cerrar conexión a la base de datos
   mysqli_close($conexion);
?>