documentReady(() => {
  obtenerProducto();
});

function obtenerProducto() {

  var id = obtenerValorParametro(window.location.href, "id");

  if (id) {

    var url = `${api}/producto/` + id;
    var token = localStorage.getItem('token');


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

        const producto = data.data.message[0];

        //renderPrincipalHtml(producto, token);
        renderNavHtml(producto);
        //renderImagenHtml(producto);
      })
      .catch((error) => {
        console.log('Error:', error);
      });
  }
}

function renderPrincipalHtml(producto, token) {

  let html = '';

  $("#detail-container").empty();

  html = `<div class="detail-info">
    <h2 class="title-detail">${producto.nombre}</h2>
    <div class="product-detail-rating">
      <div class="pro-details-brand">
        <span>
          Categoria:
          <a href="shop-grid-right.php">${producto.nombreCategoria}</a></span>
      </div>
    </div>
    ${token ?
      `<div class="clearfix product-price-cover">
      <div class="product-price primary-color float-left">
        <ins><span class="text-brand">${producto.precio}</span></ins>
        ${producto.precioPromocional ? `<ins><span class="old-price font-md ml-15">U$S ${producto.precioLista}</span></ins>` : ''}
        <span class="save-price font-md color3 ml-15">25% De descuento</span>
      </div>
    </div>` : ''}
    <div class="bt-1 border-color-1 mt-15 mb-15"></div>
    <div class="short-desc mb-30">
      <p>Descripcion: ${producto.descripcion}</p>
      <p>Producto: Monturas o Marcos.</p>
      <p>Categoria: ${producto.nombreCategoria}.</p>
      <p>Material:${producto.nombreMaterial}.</p>
      <p>Tamaño: ${producto.tamano}</p>
      <p>Estuche: ${producto.estuche}</p>
      <p>Color: ${producto.nombreColor}</p>
      <p>Código: ${producto.codigo}</p>
    </div>
    <div class="bt-1 border-color-1 mt-30 mb-30"></div>
    <div class="detail-extralink">
      <div class="detail-qty border radius">
        <a onclick="down()" class="qty-down"><i class="fi-rs-angle-small-down"></i></a>
        <span class="qty-val">1</span>
        <a onclick="up()" class="qty-up"><i class="fi-rs-angle-small-up"></i></a>
      </div>
      <div class="product-extra-link2">
        <button type="button" onclick="agregarProducto(${producto.id},${producto.precio})" class="button button-add-to-cart">
          Agregar al carrito
        </button>
      </div>
    </div>
    <ul class="product-meta font-xs color-grey mt-50">
      <li>
        En Stock:<span class="in-stock text-success ml-5">${producto.stock}</span>
      </li>
    </ul>
  </div>`;

  $("#detail-container").append(html);
}

function renderNavHtml(producto) {

  let html = '';

  $("#nav-menu").empty();

  html = `<div class="breadcrumb">
    <a href="index.php" rel="nofollow">Inicio</a>
    <span></span> ${producto.nombreCategoria} <span></span> ${producto.nombre}
    </div>`;

  $("#nav-menu").append(html);
}

function renderDescripcionHtml(producto) {


  let html = '';

  $("#description-container").empty();

  html = `<p>${producto.descripcionLarga}</p>`;

  $("#description-container").append(html);

}

function renderImagenHtml(producto) {

  let html = '';

  $("#main-slides").empty();

  html = `<div class="product-image-slider">
    <figure class="border-radius-10">
      <img id="img-slide" src="${img}${producto.imagenPrincipal}" alt="product image" />
    </figure>
  `;
  $("#main-slides").append(html);

  $('#img-slide').elevateZoom();
}