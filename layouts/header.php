<?php

require_once __DIR__ . '/../clases/funciones.php';

$nombreCliente = "";
if (isset($usuarioLogueado) && $usuarioLogueado && isset($_COOKIE['cliente'])) {
  $nombreCliente = json_decode($_COOKIE['cliente'])->nombre;
}

require_once __DIR__ . '/../helpers/ApiHelper.php';

use app\helpers\ApiHelper;

$api = new ApiHelper;
$categoriasProductos = $api->get($url . '/api/web/vistamarca');
$categoriasProductos = $categoriasProductos['data'];
$marcaSeleccionada = isset($_REQUEST['idMarca']) && !empty($_REQUEST['idMarca']) ? $_REQUEST['idMarca'] : 476;

?>
<div class="header-middle header-middle-ptb-1 d-none d-lg-block background-secondary-color2">
  <div class="container">
    <div class="header-wrap">
      <div class="logo logo-width-2">
        <a href="index.php"><img src="assets/imgs/logos/logo-ngo.png" alt="logo" /></a>
      </div>
      <div class="header-right">
        <div class="search-style-2">
          <form action="#">
            <select class="select-active">
              <?php foreach ($categoriasProductos as $c) { ?>
                <option value="<?= $c['id']; ?>" <?php if ($c['id'] == $marcaSeleccionada) echo 'selected'; ?>><?= $c['NombreMarca']; ?></option>
              <?php } ?>
            </select>
            <!-- <input type="text" placeholder="Buscar..." /> -->
            <div class="input-group">
              <input type="text" class="form-control" id="buscar" placeholder="Buscar..." aria-label="Buscar...">
              <div class="input-group-append">
                <button class="btn" type="button" onclick="buscarCategorias();" style="background-color: #ba417c; color: white;">
                  <i class="fas fa-search"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="dropdown" style="width: 20%;">
          <div id="myDiv" class="dropdown-trigger"><i class="fa-regular fa-user ml-5 fs-4" style="color: #353c44"></i>&nbsp;&nbsp;<?= $nombreCliente ?></div>
          <div class="dropdown-content">
            <?php if ($usuarioLogueado) { ?>
              <a href="intranet.php">Mi cuenta</a>
              <a href="cotizaciones.php">Cotizaciones</a>
              <a href="invoices.php">Invoices</a>
              <a href="#" onclick="logout();">Cerrar sesión</a>
            <?php  } else { ?>
              <a href="login.php">Iniciar sesión</a>
              <a href="registro.php">Registrarse</a>
            <?php } ?>


          </div>
        </div>
        <div class="header-action-right">
          <div class="header-action-2">
            <div class="header-action-icon-2"></div>
            <div class="header-action-icon-2">
              <a class="mini-cart-icon" href="shop-cart.php">
                <i class="fa-solid fa-cart-shopping"></i>
                <span class="pro-count blue" id="cart-count">0</span>
              </a>
              <div class="cart-dropdown-wrap cart-dropdown-hm2">
                <div class="shopping-cart-footer">
                  <div class="shopping-cart-total">
                    <h4>Total <span id="totalCalculadoHeader">U$S 0.00</span></h4>
                  </div>
                  <div class="shopping-cart-button">
                    <a href="shop-cart.php" class="outline">Ver carrito</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function buscarCategorias() {
    var select = document.querySelector(".select-active");
    var input = document.getElementById("buscar");
    var selectedOption = select.options[select.selectedIndex];
    var categoria = selectedOption.value;
    var optionText = selectedOption.text;
    var searchText = input.value;

    location.href = 'tienda.php?idMarca=' + categoria + '&buscador=' + searchText + '';

  }
</script>