function actualizarProducto(cantidad) {

  detalle = cantidad.closest('tr');


  producto = detalle.querySelector("#idProducto").value;
  cantidadProducto = cantidad.value;
  const url = api + "/web/carritodetalle/" + producto;

  //var carrito = localStorage.getItem('carrito');
  var token = localStorage.getItem('token');

  var raw = JSON.stringify({
    //"carrito": carrito,
    "producto": producto,
    "cantidad": cantidadProducto
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
      return response.json();
    })
    .then(result => {

      if (!result.stockStatus) {
        noStock(result.stockMaximo);
        obtenerCarrito();
      } else {
        detalle.querySelector("#subtotal").innerHTML = 'U$S ' + result.total;
        obtenerTotalesCarrito();
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
    text: "Usted ya alcanzo el maximo de stock disponible para este producto, cantidad disponible:" + stock,
    icon: "warning",
    confirmButtonText: "Continuar",
    confirmButtonColor: "#ba417c"
  });

  var inputCantidad = document.getElementById("cantidad");
  inputCantidad.value = stock;
}