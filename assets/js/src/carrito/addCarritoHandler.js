
function generateCarrito(id) {

    const url = api + "/carrito";

    const fecha = new Date();
    const anio = fecha.getFullYear();
    const mes = (fecha.getMonth() + 1).toString().padStart(2, '0');
    const dia = fecha.getDate().toString().padStart(2, '0');
  
    var raw = JSON.stringify({
      "fecha": anio + '-' + mes + '-' + dia,
      "cliente": id,
      "estado": "0",
      "vendedor": "1",
      "formaDePago": "1",
      "session": "",
      "observaciones": ""
    });

    var token = localStorage.getItem('token');

    var requestOptions = {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Authorization": "Bearer " + token
    },
      body: raw,
      redirect: 'follow'
    };
    
    fetch(url, requestOptions)
      .then(response => response.text())
      .then(result => console.log(result))
      .catch(error => console.log('error', error));

}