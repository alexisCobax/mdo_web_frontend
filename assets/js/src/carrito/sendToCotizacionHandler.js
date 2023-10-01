function GenerarCotizacion() {

    const url = api + "/web/carrito/cotizacion";
   

    var token = localStorage.getItem('token');

    var requestOptions = {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Authorization": "Bearer " + token
    },
    
      redirect: 'follow'
    };
    
    fetch(url, requestOptions)
      .then(response => response.text())
      .then( 
            result => {
                console.log(result);
                if(result){
                    window.location.href = "cotizaciones.php";
                }
                else{
                    alert("No se pudo generar la cotización");
                }
            }
      )
      .catch(error => console.log('error', error));

}