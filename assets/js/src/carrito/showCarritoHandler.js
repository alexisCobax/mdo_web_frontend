documentReady(() => {
    obtenerCarrito();
    obtenerTotalesCarrito() ;
});

function obtenerTotalesCarrito() {

    var cliente = localStorage.getItem('cliente');
    var token = localStorage.getItem('token');

    if (token&&cliente) {

            const url = api + '/web/carrito/status';

            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + token
                },
            };

            fetch(url, requestOptions)
                .then(response => response.json())
                .then(data => {
                    const cartCountElement = document.getElementById('cart-count');
                    document.getElementById('totalCarrito').innerHTML = 'U$S ' + data.data.total.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    document.getElementById('descuentoCarrito').innerHTML = 'U$S ' + data.data.descuentos.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    document.getElementById('subtotalCarrito').innerHTML = 'U$S ' + data.data.subtotal.toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });
                    if(data.data.montoMaximoDePago==null || data.data.montoMaximoDePago <= data.data.total){
                        $('#btnFinalizarCompra').hide();
                    }else{
                        $('#btnFinalizarCompra').show();
                    }
                    if (data.data['cantidadUnidades']< 30) {
                        $('#OpcionesTerminarCompra').hide();
                        $('#MensajeCantidadMinima').show();
                    } else {
                        $('#OpcionesTerminarCompra').show();
                        $('#MensajeCantidadMinima').hide();
                    }
                    
                })
                .catch(error => {
                    return JSON.stringify({ status: 500, error: "Error" });
                });
        
    }

}



function obtenerCarrito() {

    var cliente = localStorage.getItem('cliente');
    var token = localStorage.getItem('token');

    if (token) {

        if (cliente) {

            //cliente = JSON.parse(cliente);

            //const url = api + "/web/carrito/status/" ;

            const url = api + '/web/carrito/status';

            const requestOptions = {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "Authorization": "Bearer " + token
                },
            };

            fetch(url, requestOptions)
                .then(response => response.json())
                .then(data => {
                    const cartCountElement = document.getElementById('cart-count');
                    const cartCountElement2 = document.getElementById('cart-count2');

                    if (data.data['detalles'].length) {
                        cartCountElement.textContent = data.data['detalles'].length;
                        cartCountElement2.textContent = data.data['detalles'].length;
                    } else {
                        cartCountElement.textContent = 0;
                        cartCountElement2.textContent = 0;
                    }

                    if (data.data['carrito']) {
                        localStorage.setItem('carrito', data.data['carrito']);
                    }
                    renderHtml(data);
                })
                .catch(error => {
                    return JSON.stringify({ status: 500, error: "Error" });
                });
        }
    }

}

function renderHtml(carro) {

    var html = '';
    var productos = '';

    if (carro.data['detalles'][0]['producto']) {

        productos = Object.keys(carro.data['detalles']).length;

        $("#carrito").empty();

        for (var i = 0; i < productos; i++) {

            html += `<tr>
        <td class="image product-thumbnail"><img src="${img}${carro.data['detalles'][i]['producto']['imagen']}.jpg" alt="#"></td>
        <td class="product-des product-name">
        <h5 class="product-name"><a href="shop-product-right.html">${carro.data['detalles'][i]['producto']['nombre']}</a></h5>
        <p class="font-xs">${carro.data['detalles'][i]['producto']['marcaNombre']}<br> ${carro.data['detalles'][i]['producto']['tamano']} | ${carro.data['detalles'][i]['producto']['color']}
        </p>
        </td>
        <td class="price" data-title="Price"><span>U$S${carro.data['detalles'][i]['producto']['precio'].toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })} </span></td>
        <td class="" data-title="Stock">
        <input type="number" class="form-control detail-qty border radius" min="1" step="1" onchange="actualizarProducto(${i},${carro.data['detalles'][i]['id']})" max="100" step="1" id="Cantidad${i}" name="Cantidad${i}" value="${carro.data['detalles'][i]['cantidad']}">
        </td>
        <td class="text-right" data-title="Cart">
        <span>U$S${carro.data['detalles'][i]['subTotal'].toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 })} </span>
        </td>
        <td class="action" data-title="Remove"><a href="#" onclick="remove(${carro.data['detalles'][i]['id']});" class="text-muted"><i class="fi-rs-trash"></i></a></td>
    </tr>`;

        }
    }
    $("#carrito").append(html);

    document.getElementById('totalCalculadoHeader').innerHTML = 'U$S ' + carro.data['total'].toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });;
    document.getElementById('totalCalculado').innerHTML = 'U$S ' + carro.data['total'].toLocaleString(undefined, { minimumFractionDigits: 2, maximumFractionDigits: 2 });;

}
