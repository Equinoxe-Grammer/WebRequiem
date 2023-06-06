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
      echo "<section class='publicaciones slide'>";
      echo "<ul>";

      echo "<li><h2 class='titulo'>Nombre del producto: " . $row["Nombre"] . "</h2></li>";
      
      echo "<li><p class='texto'>Descripción: " . $row["Descripcion"] . "</p></li>";
      
      echo "<li><p class='texto'>Precio: " . $row["Precio"] . "$</p></li>";
      
      echo "<li><img src='data:image/png;base64," . base64_encode($row['Imagen']) . "' class='imagen' /></li>";
      
      echo "</ul>"; echo "</section>";

      echo "<buttom class='btn'>Mentiras</buttom>";
  }
} else {
  echo "0 resultados";
}
   // Cerrar conexión a la base de datos
   mysqli_close($conn);
?>