
function borrarPublicacion(id) {
   
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
            var section = document.getElementById(id);
            section.remove();
        }
    };
    xhttp.open("POST", "../Acciones/eliminarproducto.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
}

function editarPublicacion(id) {
    var popup = document.createElement("div");
    popup.id = "popup-bg";
    popup.innerHTML = "<div id='popup-div-principal'><input type='text' id='input1' placeholder='Input 1'><br><input type='text' id='input2' placeholder='Input 2'><br><input type='text' id='input3' placeholder='Input 3'><br><input type='text' id='input4' placeholder='Input 4'><br><button onclick='cerrarPopup()'>Cerrar</button></div>";
    document.body.appendChild(popup);
  }
  
  function cerrarPopup() {
    var popup = document.getElementById("popup-bg");
    popup.parentNode.removeChild(popup);
  }

  function mostrarVentanaEmergente() {
    var ventana = document.getElementById("ventanaEmergente");
    if (ventana.style.display === "none") {
      ventana.style.display = "block";
    } else {
      ventana.style.display = "none";
    }
  }
  
  function editar() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
    xhttp.open("POST", "../Acciones/editarproducto.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id=" + id);
  }