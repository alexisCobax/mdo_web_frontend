function guardarDatosEnvio () {

    const url = api + "/web/cliente";
    var token = localStorage.getItem('token');
  
    var raw = JSON.stringify({
      "nombreEnvio": $('#nombre').val(),
      "tipoDeEnvio": document.querySelector('input[name="MetodoEnvio"]:checked').value,
      "direccionShape": $('#direccion_envio').val(),
      "paisShape": $('#pais').val(),
      "regionEnvio": $('#estado').val(),
      "ciudadEnvio": $('#ciudad').val(),
      "cpShape": $('#codigo_postal').val(),
      "transportadora": $('#transportadora').val(),
      "telefonoTransportadora": $('#telefono_transportadora').val(),
      "observaciones": $('#comentarios').val(),
    });
  
    if (!token) {
      location.href = "login.php";
      return;
    }
  
    var requestOptions = {
      method: 'PUT',
      headers: {
        "Content-Type": "application/json",
        "Authorization": "Bearer " + token
      },
      body: raw,
      redirect: 'follow'
    };
  
    fetch(url, requestOptions)
      .then(response => {
        if (!response.ok) {
          throw new Error("Network response was not ok");
        }
        return response.text();
      })
      .then(result => {
           window.location.href = "pago.php" ; 
      })
      .catch(error => console.log('error', error))
      .finally(() => { /* window.location.href = "pago.php"; */ });

  }