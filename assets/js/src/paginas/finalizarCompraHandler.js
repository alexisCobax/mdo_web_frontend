function guardarDatosCliente() {

    const url = api + "/web/cliente";
    var token = localStorage.getItem('token');
  
    var raw = JSON.stringify({
      "nombre": $('#txtNombre').val(),
      "direccion": $('#txtDireccion').val(),
      "telefono": $('#txtTelefono').val(),
        "email": $('#txtEmail').val(),
        "ciudad": $('#txtCiudad').val(),
        "pais": $('#txtPais').val(),
        "codigoPostal": $('#txtCodigoPostal').val(),



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