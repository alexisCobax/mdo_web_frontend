<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

// include __DIR__."/clases/abrirConexion.php";
include __DIR__."/clases/funciones.php";

?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Carrito</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Venta al por mayor de opticas" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:title" content="Mayorista de opticas" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta name="theme-color" content="#ae2a69" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/opticam/favicon.svg" />
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/main.css?v=3.4" />
  <link rel="stylesheet" href="./assets/css/custom.css" />
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.12/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- Login -->
  <link rel="stylesheet" href="./assets/css/loginIcon.css" />
</head>

<body>
  <!-- Cabecera Top menu y menu -->
  <header class="header-area header-style-4 header-height-2">
    <!-- Cabecera Top -->
    <?php require "./layouts/header.php"; ?>

    <!-- Menu -->
    <?php require "./layouts/menu.php"; ?>

  </header>
  <!-- Menu de celular -->
  <?php require "./layouts/menu-celular.php"; ?>

  <!-- Inicio contenido del carrito -->
  <main class="main">
    <section class="mt-50 mb-50">
      <div class="container">
        <h3 class="mb-3">Carrito</h3>
        <div class="row">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table shopping-summery text-center clean">
                <thead>
                  <tr class="main-heading">
                    <th scope="col">Imagen</th>
                    <th scope="col">Nombre</th>
                    <th scope="col" style="text-align:right">Precio</th>
                    <th scope="col" style="text-align:left">Cantidad</th>
                    <th scope="col" style="text-align:right">Subtotal</th>
                    <th scope="col">Borrar</th>
                  </tr>
                </thead>
                <!-- <tbody id="carrito"> -->
                <tbody>
                <?php require __DIR__ . '/layouts/carrito-grilla.php'; ?>
                </tbody>
              </table>
            </div>
<!--             <div class="cart-action text-end">
              <a class="btn "><i class="fi-rs-shopping-bag mr-10"></i>Continuar comprando</a>
            </div> -->
            <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
            <div class="row mb-50">
              <div class="col-lg-6 col-md-12">
                <div class="heading_s1 mb-3 d-flex align-items-center gap-3">
                  <div class="mb-30 mt-30">
                    <div class="heading_s1 mb-3">
                      <h4>Aplicar cupon</h4>
                    </div>
                    <div class="total-amount">
                      <div class="left">
                        <div class="coupon">
                          <form action="#" target="_blank">
                            <div class="form-row row justify-content-center">
                              <div class="form-group col-lg-6">
                                <input class="font-medium" name="Coupon" placeholder="Ingresá tu cupon">
                              </div>
                              <div class="form-group col-lg-6">
                                <button class="btn  btn-sm"><i class="fi-rs-label mr-10"></i>Aplicar</button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <div class="col-lg-6 col-md-12">
                  <div class="border p-md-4 p-30 border-radius cart-totals">
                    <div class="heading_s1 mb-3">
                      <h4>Totales</h4>
                    </div>
                    <div class="table-responsive">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="cart_total_label">Subtotal</td>
                            <td class="cart_total_amount"><span class="font-lg fw-900 text-brand" id="subtotalCarrito">U$S 0.00</span></td>
                          </tr>
                          <tr>
                            <td class="cart_total_label">Descuentos</td>
                            <td class="cart_total_amount" ><i class="ti-gift mr-5"></i><span id="descuentoCarrito">U$S 0.00</span></td>
                          </tr>
                          <tr>
                            <td class="cart_total_label">Total</td>
                            <td class="cart_total_amount"><strong><span class="font-xl fw-900 text-brand" id="totalCarrito">U$S 0.00</span></strong></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <Div id="OpcionesTerminarCompra">
                        <a href="#" class="btn" id="btnCotizacion" onclick="GenerarCotizacion();" > <i class="fi-rs-disk mr-10"></i>Guardar Cotizacion</a>
                        <a href="finalizarCompra.php" class="btn" id="btnFinalizarCompra" style="float:right"> <i class="fi-rs-box-alt mr-10"></i>Proceder al pago</a>
                    </Div>
                    <div id="MensajeCantidadMinima">
                        COMPAR MINIMA 30 UNIDADES
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require __DIR__ . '/layouts/dependencias-js.php'; ?>
</body>

</html>