<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

use app\helpers\ApiHelper;

$api = new ApiHelper;
$categoriasProductos = $api->get($url . '/api/web/vistamarca');

$nuevoElemento = [
  "id" => 7,
  "MostrarEnWeb" => "",
  "NombreMarca" => "Accesorios",
  "CantidadProductos" => ""
];

$categoriasProductos['data'][] = $nuevoElemento;

?>

<div class="header-bottom header-bottom-bg-color sticky-bar">
  <div class="container">
    <div class="header-wrap header-space-between position-relative">
      <div class="logo logo-width-1 d-block d-lg-none">
        <a href="index.php"><img src="assets/imgs/opticam/logo-mid.png" alt="logo" /></a>
      </div>
      <div class="header-nav d-none d-lg-flex">
        <div class="main-categori-wrap d-none d-lg-block">
          <a class="categori-button" href="marcas.php">
            <span class="fi-rs-apps"></span> Ver marcas
          </a>

        </div>
        <div class="main-menu main-menu-padding-1 main-menu-lh-2 d-none d-lg-block">
          <nav>
            <ul>
              <li>
                <a href="index.php">Inicio</a>
              </li>
              <li>
                <a href="nosotros.php">Nosotros</a>
              </li>
              <!-- <li class="position-static">
                <a href="tienda.php">Tienda </a>
              </li> -->
              <li>
                <a href="FAQ.php">FAQ</a>
              </li>
              <li>
                <a href="contacto.php">Contacto</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="hotline d-none d-lg-block">
        <p>
          <i class="fi-rs-headset"></i><span>Agendar visita</span>
          <a href="https://calendly.com/mdoinc">Click aqui</a>
        </p>
      </div>

      <div class="header-action-right d-block d-lg-none">
        <!-- <div class="header-action-2">
          <div class="header-action-icon-2">
            <a class="mini-cart-icon" href="#">
              <img alt="Evara" src="assets/imgs/theme/icons/icon-cart.svg" />
              <span class="pro-count white">2</span>
            </a>
            <div class="cart-dropdown-wrap cart-dropdown-hm2">
              <ul>
                <li>
                  <div class="shopping-cart-img">
                    <a href="#"><img alt="Evara" src="assets/imgs/opticam/products/thumbnail-3.jpg" /></a>
                  </div>
                  <div class="shopping-cart-title">
                    <h4><a href="#">Anteojos 1</a></h4>
                    <h3><span>1 × </span>$800.00</h3>
                  </div>
                  <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                  </div>
                </li>
                <li>
                  <div class="shopping-cart-img">
                    <a href="#"><img alt="anteojos 2" src="assets/imgs/opticam/products/thumbnail-4.jpg" /></a>
                  </div>
                  <div class="shopping-cart-title">
                    <h4><a href="#">Anteojos 2</a></h4>
                    <h3><span>1 × </span>$3500.00</h3>
                  </div>
                  <div class="shopping-cart-delete">
                    <a href="#"><i class="fi-rs-cross-small"></i></a>
                  </div>
                </li>
              </ul>
              <div class="shopping-cart-footer">
                <div class="shopping-cart-total">
                  <h4>Total <span>$383.00</span></h4>
                </div>
                <div class="shopping-cart-button">
                  <a href="shop-cart.php">Ver carrito</a>
                  <a href="shop-checkout.php">Finalizar compra</a>
                </div>
              </div>
            </div>
          </div>
          <div class="header-action-icon-2 d-block d-lg-none">
            <div class="burger-icon burger-icon-white">
              <span class="burger-icon-top"></span>
              <span class="burger-icon-mid"></span>
              <span class="burger-icon-bottom"></span>
            </div>
          </div>
        </div> -->
        <div class="header-action-right">
          <div class="header-action-2">
            <div class="header-action-icon-2"></div>
            <div class="header-action-icon-2" style="margin-right: 10px;">
              <a class="mini-cart-icon" href="shop-cart.php">
                <i class="fa-solid fa-cart-shopping" style="color:black !important;"></i>
                <span class="pro-count blue" id="cart-count2">0</span>
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
          <div class="header-action-icon-2 d-block d-lg-none">
            <div class="burger-icon burger-icon-white">
              <span class="burger-icon-top"></span>
              <span class="burger-icon-mid"></span>
              <span class="burger-icon-bottom"></span>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>