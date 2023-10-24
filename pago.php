<?php 
require_once __DIR__.'/helpers/ApiHelper.php'; 
require_once __DIR__."/clases/funciones.php";

use app\helpers\ApiHelper;


$api = new ApiHelper;
$cliente = $api->get($url.'/api/web/cliente');
$nombre = $cliente['data']['nombre'];
$carrito = $api->post($url.'/api/web/carrito/status',[]);
$total= $carrito['data']['total'];
$envio= $carrito['data']['totalEnvio'];
$subtotal= $carrito['data']['subtotal']; 

?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Tienda</title>
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
  <link rel="stylesheet" href="./assets/css/main.css?v=3.4" />
  <link rel="stylesheet" href="./assets/css/custom.css" />

  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Login -->
  <link rel="stylesheet" href="./assets/css/loginIcon.css" />
  <style>
    #PagoConTarjeta {
      background-color: #FFFFFF;
      border-top-left-radius: 15px;
      border-top-right-radius: 15px;
      box-shadow: 0 0 6px 0 rgba(141, 151, 158, 0.2);
      padding: 24px;
      max-width: 500px;
    }

    #PagoConTarjeta * {
      font-family: Roboto, "Open Sans", sans-serif;
      font-size: 16px;
    }

    #PagoConTarjeta .form-row {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: space-between;
    }

    #PagoConTarjeta .form-row.top-row {
      margin-top: 16px;
    }

    .input-errors {
      font-size: 12px;
      position: absolute;
      margin-left: 5px;
      margin-top: 54px;
      color: red;
    }

    #PagoConTarjeta .form-row .field {
      box-sizing: border-box;
      border: 1px solid #DEE0E1;
      border-radius: 3px;
      height: 55px;
      margin-bottom: 30px;
      padding: 14px;
      width: 100%;
    }

    #PagoConTarjeta .button-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
    }

    #PagoConTarjeta .button-container button {
      background-color: #228800;
      border: none;
      border-radius: 3px;
      color: #FFFFFF;
      display: block;
      height: 47px;
      width: 300px;
    }

    #payment-request-button {
      width: 160px;
      height: 40px;
      margin: 0 auto;
    }


    .hr {
      width: 100%;
      height: 10px;
      border-bottom: 1px solid black;
      text-align: center;
      margin: 20px 0;
    }

    .hr span {
      font-size: 10px;
      background-color: #FFF;
      padding: 0 10px;
    }
  </style>
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

  <!-- Inicio contenido de la web -->
  <main class="main">
    <div class="page-header breadcrumb-wrap">
      <div class="container">
        <div class="breadcrumb">
          <a href="index.php" rel="nofollow">Inicio</a>
          <span></span> Facturación
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="row"> <label class="form-label"><B style="font-weight: 800;">Cliente: </B><?=$nombre?></label></div>
          <div class="row"> <label class="form-label"><B style="font-weight: 800;">Total Pedido:</B> U$S <?=$subtotal?></label></div>
          <div class="row"> <label class="form-label"><B style="font-weight: 800;">Gastos de envio:</B> U$S <?=$envio?></label></div>
          <div class="row"> <label class="form-label"><B style="font-weight: 800;">TOTAL:</B> U$S <?=$total?></label></div>

          <div class="container">
            <form action="#" method="post" id="payment-form">
              <div id="PagoConTarjeta">
                <label for="razonsocial">
                  <h3> Ingrese su tarjeta de Credito </h3>
                </label>
                <div class="form-row top-row">
                  Numero de tarjeta
                  <div id="card-number" class="field full-width"></div>
                  <div class="input-errors" id="card-number-errors" role="alert"></div>
                </div>
                 <div class="form-row">
                       Nombre(como figura en el frente de la tarjeta)
                       <input type="text" class="field third-width"> 
                      <!-- <div id="card-name" class="field third-width"></div> -->
                      <div class="input-errors" id="card-name-errors" role="alert"></div>
                </div> 

                <div class="form-row">
                  Vencimiento de la tarjeta (MM/YY)
                  <div id="card-date" class="field third-width"></div>
                  <div class="input-errors" id="card-date-errors" role="alert"></div>
                </div>

                <div class="form-row">
                  Codigo de Seguridad
                  <div id="card-cvv" class="field third-width"></div>
                  <div class="input-errors" id="card-cvv-errors" role="alert"></div>
                </div>

                <div class="form-row">
                Codigo Postal <b>(Para tarjetas con direccion de facturacion fuera de EE.UU. por favor ingrese 00000)</b>
                  <div id="card-postal-code" class="field third-width"></div>
                  <div class="input-errors" id="card-postal-code-errors" role="alert"></div>
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>

                <!-- Testing -->
                <div id="card-response" role="alert"></div>
                <div class="button-container">
                  <button id="btnPago" class="btn btn-success">Pagar</button>
                </div>
                <div id="autorizando"> <h2>Autorizadondo transaccion, por favor aguarde un momento</h2> <img src="assets/imgs/icons/preloader.gif" alt="" /></div>
              </div>
            </form>
          </div>
        </div>
      

      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>

  <script src="https://checkout.sandbox.dev.clover.com/sdk.js"></script>
  <script src="assets/js/src/paginas/pagoHandler.js"></script>


</body>

</html>