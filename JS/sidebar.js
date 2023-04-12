// Seleccionar el botón "Create an account"
var createAccountBtn = document.querySelector('#create-account-btn');

// Agregar un controlador de eventos para el clic en el botón "Crear una cuenta"
createAccountBtn.addEventListener('click', function() {
  // Crear un objeto XMLHttpRequest para cargar el contenido de registro.html
  var xhttp = new XMLHttpRequest();

  // Agregar un controlador de eventos para cuando el contenido se cargue correctamente
  xhttp.addEventListener('load', function() {
    // Obtener el contenido de registro.html y cargarlo en el sidebar
    document.querySelector('#sidebar').innerHTML = this.responseText;
  });

  // Enviar una solicitud para obtener el contenido de registro.html
  xhttp.open('GET', 'form_registro.php');
  xhttp.send();
});