function guardarDatosCliente() {

    const url = api + "/web/cliente";
    var token = localStorage.getItem('token');
  
    var raw = JSON.stringify({
      "nombre": $('#compania').val(),
      "direccion": $('#direccion').val(),
      "telefono": $('#telefono').val(),
        "email": $('#email').val(),
        "ciudad": $('#ciudad').val(),
        "pais": $('#pais').val(),
        "codigoPostal": $('#codigo-postal').val(),



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
          window.location.href = "envio.php" ;
      })
      .catch(error => console.log('error', error))
      

  }