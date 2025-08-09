function validarEmail() {
      var email = document.getElementById("email").value;
      var emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
      if (!emailRegex.test(email)) {
        alert("La dirección de correo electrónico no es válida.");
        return false;
      }
      return true;
}
function limpiarTexto() {
      var textarea = document.getElementById('texto');
      textarea.value = '';
}
if (typeof module !== 'undefined') {
  module.exports = { validarEmail, limpiarTexto };
}
