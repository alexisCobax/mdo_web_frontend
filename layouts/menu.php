<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

use app\helpers\ApiHelper;

$api = new ApiHelper;
$categoriasProductos = $api->get($url . '/api/web/marcaproducto?cantidad=5');
$categoriasProductos = $categoriasProductos['data']["original"]["results"];

?>

<div class="header-bottom header-bottom-bg-color sticky-bar">
  <div class="container">
    <div class="header-wrap header-space-between position-relative">
      <div class="logo logo-width-1 d-block d-lg-none">
        <a href="index.php"><img src="assets/imgs/opticam/logo-mid.png" alt="logo" /></a>
      </div>
      <div class="header-nav d-none d-lg-flex">
        <div class="main-categori-wrap d-none d-lg-block">
          <a class="categori-button-active" href="#" >
            <span class="fi-rs-apps"></span> Nuestras Marcas
          </a>
          <div id="" class="categori-dropdown-wrap categori-dropdown-active-large">
              <ul>
                <?php foreach($categoriasProductos as $c){ ?>
                  <li><a href="tienda.php?idMarca=<?= $c['id']; ?>"><i class="evara-font-diamond"></i><?= $c['nombre']; ?></a></li>
                  <?php } ?>
                <li><a href="marcas.php">Ver mas +</a></li>
              </ul>
          </div>
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
              <li class="position-static">
              <a href="tienda.php">Tienda </a>
                <!-- <a href="#">Tienda <i class="fi-rs-angle-down"></i></a>
                <ul class="mega-menu">
                  <li class="sub-mega-menu sub-mega-menu-width-22">
                    <a class="menu-title" href="#">Armazones de Diseñadores Famosos</a>
                    <ul>
                      <li>
                        <a href="producto.php">Brimstone Eyewear</a>
                      </li>
                      <li>
                        <a href="producto.php">Dolabany Eyewear Liquidacion</a>
                      </li>
                      <li>
                        <a href="producto.php">Freedom Colors Eyewear</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-mega-menu sub-mega-menu-width-22">
                    <a class="menu-title" href="#">Gafas de Sol de Diseñadores Famosos</a>
                    <ul>
                      <li>
                        <a href="producto.php">Mario Galbatti Liquidacion</a>
                      </li>
                      <li>
                        <a href="producto.php">Plume Paris Liquidacion</a>
                      </li>
                      <li>
                        <a href="producto.php">Rayban eyewear</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-mega-menu sub-mega-menu-width-22">
                    <a class="menu-title" href="#">Gafas para usos Especiales<br />
                      y de Trabajo</a>
                    <ul>
                      <li>
                        <a href="producto.php">Pregraduados para Lectura</a>
                      </li>
                      <li>
                        <a href="producto.php">Proteccion Deportiva</a>
                      </li>
                      <li>
                        <a href="producto.php">Seguridad Industrial</a>
                      </li>
                    </ul>
                  </li>
                  <li class="sub-mega-menu sub-mega-menu-width-34">
                    <div class="menu-banner-wrap">
                      <a href="producto.php"><img src="assets/imgs/banner/menu-banner.jpg" alt="Evara" /></a>
                      <div class="menu-banner-content">
                        <h4>VENTAS DEL DIA</h4>
                        <h3>
                          No te pierdas<br />
                          nuestro outlet
                        </h3>
                        <div class="menu-banner-price">
                          <span class="new-price text-success">Ahorra en cantidad</span>
                        </div>
                        <div class="menu-banner-btn">
                          <a href="#">Ver más</a>
                        </div>
                      </div>
                      <div class="menu-banner-discount">
                        <h3>
                          <span>35%</span>
                          Desc.
                        </h3>
                      </div>
                    </div>
                  </li>
                </ul> -->
              </li>
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
        <div class="header-action-2">
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
        </div>
      </div>
    </div>
  </div>
</div>

