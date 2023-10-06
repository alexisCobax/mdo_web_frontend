documentReady(() => {
    obtenerProductosPaginados(1, glbFiltro);
});




function obtenerProductosPaginados(pagina, filtro) {

    var urlActual = window.location.href;
    var urlData = urlActual.split("=");
    var marca = '';

    if (urlData.length === 2) {
        marca = urlData[1];
    }

    pagina = pagina ? pagina : 1;

    var token = localStorage.getItem('token');

    if(filtro){
    var url = `${api}/web/producto?pagina=${pagina}` + filtro;
    }else{
    var url = `${api}/web/producto?pagina=${pagina}&idmarca=` + marca + filtro; 
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
            renderPaginationHtml(paginador);
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

            html += `<div class="col-4">
            <div class="product-card card">
                <div class="product-img-action-wrap card-img-top">
                    <div class="product-img product-img-zoom">
                        <div class="product-img-inner">
                            <a href="producto.php?id=${producto.id}">
                                <img class="hover-img px-4" src="${img + producto.imagenPrincipal}" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="card-body position-relative">
                    <h4 class="mt-1">
                        <a href="producto.php?id=${producto.id}">${producto.nombre}.</a>
                    </h4>
                    <div class="product-category">
                        <a href="producto.php?id=${producto.id}">${producto.nombreMarca}</a>
                    </div>
                    ${token ?
                    `<div class="product-price mt-1">
                            <span class="fs-5">U$S ${producto.precio} </span>
                            ${producto.precioPromocional ? `<span class="old-price" style="text-decoration: line-through">U$S ${producto.precioLista}</span>` : ''}
                        </div>`
                    : ''}
                    <div class="mt-2 product-cart">
                        <a aria-label="Buy now" class="action-btn" href="#" onclick="agregarProducto(${producto.id},${producto.precioPromocional})">
                            <i class="fi-rs-shopping-bag-add btn btn-primary"></i>
                        </a>
                    </div>
                </div>
                
                </div>
            </div>
        </div>`;
        });


        html += `

<div class="pagination-area mt-15 mb-sm-5 mb-lg-0" id="pagination-area">
    
</div>`;




        $("#product-list").append(html);
    }
}

function renderPaginationHtml(response) {
    const totalPages = Math.ceil(response.cantidad_total / response.cantidad_por_pagina);
    const currentPage = response.pagina;
    const maxDisplayedPages = 12;
    let html = '';

    html += `<nav aria-label="Page navigation example">
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

    html += `<li class="page-item">
    <a id="next-page" class="page-link" href="#"><i class="fi-rs-angle-double-small-right"></i></a>
</li>

    </ul>
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
