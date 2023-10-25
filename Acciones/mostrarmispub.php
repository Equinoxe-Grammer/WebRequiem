<?php

// Conexión a la base de datos
$conn = mysqli_connect("localhost", "root", "Teteradegas69/", "proyectof");

$id= $_SESSION['IdUsuario'];
// Consulta SQL para seleccionar todas las filas de la tabla productos con el Idusuario 1 

$sql = "SELECT * FROM producto WHERE IdUsuario = $id"; $result = $conn->query($sql);

// Si hay resultados
if ($result->num_rows > 0) {
    // Recorrer los resultados y mostrar una slide por cada fila
    while($row = $result->fetch_assoc()) {
      echo "<section class='publicaciones slide' id='" . $row["IdProducto"] . "'>";
      echo "<ul>";

      echo "<li><h2 class='titulo'>Nombre del producto: " . $row["Nombre"] . "</h2></li>";
      
      echo "<li><p class='texto'>Descripción: " . $row["Descripcion"] . "</p></li>";
      
      echo "<li><p class='texto'>Precio: " . $row["Precio"] . "$</p></li>";
      
      echo "<li><img src='data:image/png;base64," . base64_encode($row['Imagen']) . "' class='imagen' /></li>";
      echo "<li><button class='btn' onclick='borrarPublicacion(".$row["IdProducto"].")'>Eliminar Producto</button> </li>";
      $codigo = '<button class="btn2" onclick="mostrarVentanaEmergente()">Editar Producto</button>

<div id="ventanaEmergente" style="display:none;">
  <form action="../Acciones/editarproducto.php" method="POST" id=' . $row["IdProducto"] . '>
  <input type="hidden" name="id" value=' . $row["IdProducto"] . '>
    <label for="nombre">Nombre del producto:</label>
    <input type="text" id="nombre" name="nombre"><br><br>
    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion"><br><br>
    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio"><br><br>
    <label for="Existencia">Existencias:</label>
    <input type="number" id="Existencias" name="existencias"><br><br>
  
    <input type="submit" value="Enviar">
  </form>
</div>';

echo $codigo;
      echo "</ul>";
       echo "</section>";

      
  }
} else {
  echo "0 resultados";
}
   // Cerrar conexión a la base de datos
   mysqli_close($conn);
?>