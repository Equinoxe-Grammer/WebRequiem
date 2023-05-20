 function validarEmail() {
      var email = document.getElementById("email").value;
      var atPos = email.indexOf("@");
      if (atPos === -1) {
        alert("La dirección de correo electrónico debe contener el símbolo '@'.");
        return false;
      }
      return true;
    }
    function limpiarTexto() {
      var textarea = document.getElementById('texto');
      textarea.value = '';
    }