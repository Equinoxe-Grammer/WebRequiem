<?php

// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "", "proyectof");

$id= $_SESSION['IdUsuario'];
// Consulta SQL para seleccionar todas las filas de la tabla productos con el Idusuario 1 

$sql = "SELECT * FROM producto WHERE IdUsuario = $id"; $result = $conn->query($sql);

// Si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar una slide por cada fila
    while($row = $result->fetch_assoc()) {
      echo "<div class='slide'>";
      echo "<h2>" . $row["Nombre"] . "</h2>";
      echo "<p>" . $row["Descripcion"] . "</p>";
    echo  '<img src = "data:image/png;base64,' . base64_encode($row['Imagen']) . '" style="display:block; margin:auto; width = "500px" height = "300px"/>'
    . '</td>';
    echo "</div>";
  }
} else {
  echo "0 resultados";
}
   // Cerrar conexión a la base de datos
   mysqli_close($conn);
?>