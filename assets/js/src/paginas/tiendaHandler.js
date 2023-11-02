documentReady(() => {
    obtenerProductosPaginados(1, glbFiltro);
});




function obtenerProductosPaginados(pagina, filtro) {


    var url = window.location.href;
    var urlData = url.split("=");
    var marca = '';
    var grupo = '';

    if (url.includes('?grupo=')) {

        if (urlData.length === 2) {
            grupo = urlData[1];
        }

        pagina = pagina ? pagina : 1;

        var token = localStorage.getItem('token');

        if (filtro) {
            var url = `${api}/web/producto?pagina=${pagina}` + filtro;
        } else {
            var url = `${api}/web/producto?pagina=${pagina}&grupo=` + grupo + filtro;
        }

    } else if (url.includes('?idMarca=')) {

        if (urlData.length === 2) {
            marca = urlData[1];
        }

        pagina = pagina ? pagina : 1;

        var token = localStorage.getItem('token');

        if (filtro) {
            var url = `${api}/web/producto?pagina=${pagina}` + filtro;
        } else {
            var url = `${api}/web/producto?pagina=${pagina}&marca=` + marca + filtro;
        }

    }

    const requestOptions = {
        method: "GET",
        headers: {
            "Content-Type": "application/json",
            "Authorization": "Bearer " + token
        },
    };

    fetch(url, requestOptions)
        .then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Error en la solicitud');
        })
        .then((data) => {
            const { original } = data.data;
            const producto = original.results;
            const paginador = original;

            renderBodyHtml(producto, token);
            renderPaginationHtml(paginador, token);
        })
        .catch((error) => {
            console.log('Error:', error);
        });
}

function generarFiltro() {
    glbFiltro = "";
    if (document.getElementById('modelo').value != '') { glbFiltro = glbFiltro + '&nombre=' + document.getElementById('modelo').value; }
    if (document.getElementById('marca').value != '') { glbFiltro = glbFiltro + '&marca=' + document.getElementById('marca').value; }
    //if(document.getElementById('categoria').value!=''){glbFiltro = glbFiltro + '&categoria=' + document.getElementById('categoria').value;}
    if (document.getElementById('color').value != '' && document.getElementById('color').value != '0') { glbFiltro = glbFiltro + '&color=' + document.getElementById('color').value; }
    if (document.getElementById('amount-from').value != '') { glbFiltro = glbFiltro + '&precioDesde=' + document.getElementById('amount-from').value; }
    if (document.getElementById('amount-to').value != '') { glbFiltro = glbFiltro + '&precioHasta=' + document.getElementById('amount-to').value; }
    obtenerProductosPaginados(1, glbFiltro);
}

function renderBodyHtml(productos, token) {

    if (productos.length !== 0) {

        let html = '';

        $("#product-list").empty();

        productos.forEach((producto) => {
            const hideOldPrice = producto.precioLista === producto.precio;

            html += `
        <div class="col-12 h-100">
            <div class="product-card card h-100">
                <div class="row h-100 g-0">
                    <div class="col-md-4">
                        <div class="product-img-action-wrap card-img h-100">
                            <div class="product-img product-img-zoom h-100">
                                <div class="product-img-inner h-100">
                                    <a href="producto.php?id=${producto.id}">
                                        <img class="hover-img px-4 w-100 h-100 object-fit-cover productPic" src="${img + producto.imagenPrincipal}" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body position-relative h-100 d-flex flex-column justify-content-between">
                            <div>
                                <div class="col-md-9">
                                    <h4 class="mt-1">
                                        <a href="producto.php?id=${producto.id}">${decodeURIComponent(escape(producto.nombre))}.</a>
                                    </h4>
                                    <div class="product-category">
                                        <a href="producto.php?id=${producto.id}">${decodeURIComponent(escape(producto.nombreMarca))}</a>
                                        <div class="product-category">
                                        <div>${(typeof producto.UPCreal !== "undefined") ? producto.UPCreal : ""}</div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                ${token ?
                    `<div class="mt-2 product-cart">
            <div class="product-price mt-1">
                <span class="fs-5">$ ${producto.precio} </span>
                ${!hideOldPrice ? `<span class="old-price" style="text-decoration: line-through">${producto.precioLista}</span>` : ''}
            </div>
            <div class="number">
                <span class="minus" onclick="Descontar(this);"><em>-</em></span>
                <input size="2" type="text" autocomplete="off" class="cart_quantity_input" value="0" name="cantidad">
                <span class="plus" onclick="Aumentar(this);"><em>+</em></span>
            </div>
            <button class="btn btn-sm btn-default" onclick="agregarProducto(${producto.id},${producto.precioPromocional})"><em>+</em> Agregar al carro</button>
        </div>`
                    :
                    `<div class="mt-2 product-cart">
            <button class="btn btn-sm btn-default" onclick="agregarProducto(${producto.id},${producto.precioPromocional})"><em>+</em> Agregar al carro</button>
        </div>
    </div>`
                }
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
        });

        html += `<div class="pagination-area mt-15 mb-sm-5 mb-lg-0" id="pagination-area"></div>`;
        $("#product-list").append(html);


        //     let html = '';

        //     $("#product-list").empty();

        //     productos.forEach((producto) => {

        //         html += `
        //     <div class="col-12 h-100">
        //         <div class="product-card card h-100">
        //             <div class="row h-100 g-0">
        //                 <div class="col-md-4">
        //                     <div class="product-img-action-wrap card-img h-100">
        //                         <div class="product-img product-img-zoom h-100">
        //                             <div class="product-img-inner h-100">
        //                                 <a href="producto.php?id=${producto.id}">
        //                                     <img class="hover-img px-4 w-100 h-100 object-fit-cover productPic" src="${img + producto.imagenPrincipal}" alt="" />
        //                                 </a>
        //                             </div>
        //                         </div>
        //                     </div>
        //                 </div>
        //                 <div class="col-md-8">
        //                     <div class="card-body position-relative h-100 d-flex flex-column justify-content-between">
        //                         <div>
        //                         <div class="col-md-9">
        //                             <h4 class="mt-1">
        //                                 <a href="producto.php?id=${producto.id}">${decodeURIComponent(escape(producto.nombre))}.</a> 
        //                             </h4>
        //                             <div class="product-category">
        //                                 <a href="producto.php?id=${producto.id}">${decodeURIComponent(escape(producto.nombreMarca))}</a>
        //                             </div>
        //                             </div>
        //                         </div>
        //                         <div class="col">
        //                         ${token ?
        //                 `<div class="mt-2 product-cart">
        //                             <div class="product-price mt-1">
        //                                 <span class="fs-5">$ ${producto.precioLista} </span>
        //                                 <span class="old-price"  style="text-decoration: line-through">${producto.precio}</span>
        //                             </div>
        //                             <div class="number">
        //                             <span class="minus" onclick="Descontar(this);"><em>-</em></span>
        //                             <input size="2" type="text" autocomplete="off" class="cart_quantity_input" value="0" name="cantidad">
        //                             <span class="plus" onclick="Aumentar(this);"><em>+</em></span>
        //                             </div>
        //                             <button class="btn btn-sm btn-default" onclick="agregarProducto(${producto.id},${producto.precioPromocional})"><em>+</em> Agregar al carro</button>
        //                             </div>
        //                         </div>`
        //                 :
        //                 `<div class="mt-2 product-cart">
        //                         <button class="btn btn-sm btn-default" onclick="agregarProducto(${producto.id},${producto.precioPromocional})"><em>+</em> Agregar al carro</button>
        //                 </div>
        //                 </div>`
        //             }
        //             </div>
        //         </div>
        //         </div>
        //     </div>
        // </div>`;
        // });
        //     html += `<div class="pagination-area mt-15 mb-sm-5 mb-lg-0" id="pagination-area"></div>`;
        //     $("#product-list").append(html);
    }
}

function renderPaginationHtml(response, token) {


    const resultadosPorPagina = 16;
    let paginaActual = 1;
    let marca = "";
    let grupo = "";

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('cantidad')) {
        resultadosPorPagina = parseInt(urlParams.get('cantidad'));
    }
    if (urlParams.has('pagina')) {
        paginaActual = parseInt(urlParams.get('pagina'));
    }
    if (urlParams.has('idMarca')) {
        marca = urlParams.get('idMarca');
    }

    if (urlParams.has('grupo')) {
        grupo = urlParams.get('grupo');
    }



    const totalPages = Math.ceil(response.cantidad_total / response.cantidad_por_pagina);
    const currentPage = response.pagina;
    const maxDisplayedPages = 6;
    let html = '';

    html += `<nav aria-label="Page navigation example">
    <div class="d-flex justify-content-start">
        <ul class="pagination justify-content-start">
        <li class="page-item">
        <a id="previous-page" class="page-link" href="#"><i class="fi-rs-angle-double-small-left"></i></a>
    </li>`;

    if (currentPage <= maxDisplayedPages - 5) {
        for (let i = 1; i <= Math.min(maxDisplayedPages, totalPages); i++) {
            html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#">${addLeadingZero(i)}</a>
            </li>`;
        }
    } else if (currentPage >= totalPages - 4) {
        html += `<li class="page-item">
                <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
                <a class="page-link dot" href="#">...</a>
            </li>`;

        for (let i = totalPages - maxDisplayedPages + 3; i <= totalPages; i++) {
            html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#">${addLeadingZero(i)}</a>
            </li>`;
        }
    } else {
        const startPage = currentPage - Math.floor(maxDisplayedPages / 2) + 2;
        const endPage = currentPage + Math.floor(maxDisplayedPages / 2) - 2;

        for (let i = startPage; i <= endPage; i++) {
            html += `<li class="page-item ${i === currentPage ? 'active' : ''}">
                <a class="page-link" href="#">${addLeadingZero(i)}</a>
            </li>`;
        }

        if (endPage < totalPages - 1) {
            html += `<li class="page-item">
                <a class="page-link dot" href="#">...</a>
            </li>`;
        }

        html += `<li class="page-item">
            <a class="page-link" href="#">${totalPages}</a>
        </li>`;
    }

    html += html = `<li class="page-item">
    <a id="next-page" class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a>
</li>
</ul>`;

    if (token) {
        html += `<a id="custom-button" href="${api}/web/generar-productos-csv?idmarca=${marca}" class="btn btn-sm btn-default" style="margin-right: 10px;">Descargar excel</a>`;
    }

    html += `</div>
</nav>`;

    const paginationContainer = document.getElementById('pagination-area');
    if (paginationContainer) {
        paginationContainer.innerHTML = html;
    }
}

$(document).on('click', '.page-link', function (e) {
    e.preventDefault();
    const nuevaPagina = parseInt($(this).text());
    obtenerProductosPaginados(nuevaPagina, glbFiltro);
    $('html, body').animate({ scrollTop: 0 }, 'slow');
});

function addLeadingZero(number) {
    return number < 10 ? '0' + number : number;
}


function Descontar(boton) {
    var inputElement = boton.parentNode.querySelector('input[name="cantidad"]');
    var valorActual = parseInt(inputElement.value, 10);

    if (valorActual > 0) {
        var nuevoValor = valorActual - 1;
        inputElement.value = nuevoValor;
    }
}

function Aumentar(boton) {
    var inputElement = boton.parentNode.querySelector('input[name="cantidad"]');
    var valorActual = parseInt(inputElement.value, 10);
    var nuevoValor = valorActual + 1;
    inputElement.value = nuevoValor;
}