<?php

include __DIR__ . "/clases/funciones.php";
require_once __DIR__.'/helpers/ApiHelper.php'; 

use app\helpers\ApiHelper;

$api = new ApiHelper;
$categorias = $api->get($url . '/api/web/marcaproducto');
$categorias = $categorias['data']["original"]["results"];

?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Tienda</title>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Venta al por mayor para opticas" />
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
  <style>
    .card {
      width: 200px;
      height: 200px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .square-card {
      width: 100%;
      height: 100%;
    }

    .centered-text {
      font-size: 24px;
      text-align: center;
      margin-top: 50px;
    }
  </style>
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

  <!-- Inicio contenido de la web -->
  <main class="main">
    <div class="page-header breadcrumb-wrap">
      <div class="container">
        <div class="breadcrumb">
          <a href="index.php" rel="nofollow">Inicio</a>
          <span></span> Envio
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row flex-row-reverse" style="transform: none;">

          <div class="col-lg-12">
            <div id="product-list" class="product-list mb-50 row g-3">

              <!-- Inicio del bucle -->
              <?php foreach($categorias as $c) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6">
                  <div class="product-card card">
                    <div class="card-body text-center square-card">
                      <div class="centered-text">
                      <?= $c['nombre']; ?>
                      </div>
                    </div>
                  </div>


                </div>
              <?php } ?>
              <!-- Fin del bucle -->
            </div>
          </div>

        </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
  <script src="assets/js/src/paginas/envioHandler.js"></script>
</body>

</html>