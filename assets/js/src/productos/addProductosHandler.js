function agregarProducto(producto) {

  const url = api + "/web/carritodetalle";
  var cantidadProducto = 0;

    cantidadProducto = $('#Cantidad').val();
  
    if (typeof cantidadProducto === 'undefined') {
      cantidadProducto = 1;
    }

  var token = localStorage.getItem('token');

  var raw = JSON.stringify({
    "producto": producto,
    "cantidad": cantidadProducto
  });

  if (!token) {
    location.href = "login.php";
    return;
  }

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
    .then(response => {
      if (!response.ok) {
        throw new Error("Network response was not ok");
      }
      return response.json();
    })
    .then(result => {
      if(!result.stockStatus){
      noStock(result.stockMaximo);;
      obtenerCarrito();
      }else{
      obtenerCarrito();
      success();
      }
    })
    .catch(error => console.log('error', error));
}

function success() {
  Swal.fire({
    title: "",
    text: "El producto fue agregado con exito!",
    icon: "success",
    confirmButtonText: "Continuar",
    confirmButtonColor: "#ba417c"
  });
}

function noStock(stock) {
  Swal.fire({
    title: "",
    text: "Usted ya alcanzo el maximo de stock disponible para este producto, cantidad disponible:"+stock,
    icon: "warning",
    confirmButtonText: "Continuar",
    confirmButtonColor: "#ba417c"
  });
}