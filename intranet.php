﻿<?php
error_reporting(E_ALL);
ini_set('display_errors', 0);

include __DIR__ . "/clases/funciones.php";
$json_url = './assets/js/src/categorias/categorias.json';
$json_data = file_get_contents($json_url);
$categorias = json_decode($json_data, true);
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
  <script>
    var glbFiltro = "";

  </script>
  <style >


   .minus,  .plus {
        width: 35px;
        height: 35px;
        background: #fff;
        border-radius: 6px;
        padding: 8px 5px 8px 5px;
        border: 1px solid #333F48;
        display: inline-block;
        text-align: center;
        color: #333F48;
        position: relative;
        cursor: pointer;
        -webkit-touch-callout: none;
        /* iOS Safari */
        -webkit-user-select: none;
        /* Safari */
        -khtml-user-select: none;
        /* Konqueror HTML */
        -moz-user-select: none;
        /* Old versions of Firefox */
        -ms-user-select: none;
        /* Internet Explorer/Edge */
        user-select: none;
        /* Non-prefixed version, currently
                                      supported by Chrome, Opera and Firefox */
    }
input {
    outline: none;
}

 .number .minus em,  .number .plus em {
    position: relative;
    top: -2px;
    font-style: normal;
    font-size: 1.8rem;
}

 .number input {
    height: 35px;
    width: 35px;
    text-align: center;
    font-size: 1.4rem;
    border-radius: 6px;
    border: 1px solid #333F48;
    /* border-radius: 4px; */
    display: inline-block;
    vertical-align: middle;
    position: relative;
    top: -10px;
    padding-left: 0px;
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
          <span></span> Tienda
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row flex-row-reverse">

        <div class="col-lg-9">
            <div id="product-list" class="product-list mb-50 row g-3">
              <?php include __DIR__. "/layouts/tienda-grilla.php"; ?>
            </div></div>
          <div class="col-lg-3 primary-sidebar sticky-sidebar">
            <div class="widget-category mb-30">
<!--               <a class="collapsed" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <h5 class="section-title style-1 mb-30 wow fadeIn animated">
                  Categoria
                </h5>
              </a>
              <div class="collapse" id="collapseExample">
                <div class="categoriesMain"></div>
                <ul class="categories">
                  <?php foreach ($categorias as $c) { ?>
                    <li>
                      <a href="producto.php"><?= $c['nombre'] ?></a>
                    </li>
                  <?php } ?>
                  
                </ul>
              </div>
            </div> -->
            <!-- Fillter By Price -->
            <div class="sidebar-widget price_range range mb-30">
              <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">Modelo</h5>
                <div class="bt-1 border-color-1"></div>
              </div>
              <div class="price-filter mb-20">
                <div class="price-filter-inner">
                  <div class="price_slider_amount">

                    <div class="label-input d-flex">
                      <input type="text" id="modelo" name="modelo" class="border rounded px-3" style="margin-right: 10px" placeholder="" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">Marca</h5>
                <div class="bt-1 border-color-1"></div>
              </div>
              <div class="price-filter mb-20">
                <div class="price-filter-inner">
                  <div class="price_slider_amount">

                    <div class="label-input d-flex">
                      <input type="text" id="marca" name="marca" class="border rounded px-3" style="margin-right: 10px" placeholder="" />

                    </div>
                  </div>
                </div>
              </div>

              <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">Color</h5>
                <div class="bt-1 border-color-1"></div>
              </div>
              <div class="price-filter mb-20">
                <div class="price-filter-inner">
                  <div class="price_slider_amount">

                    <div class="label-input d-flex">
                      <select id="color" name="color">
                        <option value="0">Todos</option>
                        <option value="1">Negro</option>
                        <option value="2">Rojo</option>
                        <option value="7">Rosa</option>
                        <option value="8">Amarillo</option>
                        <option value="9">Dorado</option>
                        <option value="10">Plateado</option>
                        <option value="3">Azul</option>
                        <option value="4">Verde</option>
                        <option value="5">Varios</option>
                        <option value="6">Marron</option>
                      </select>

                    </div>
                  </div>
                </div>
              </div>
              <div class="widget-header position-relative mb-20 pb-10">
                <h5 class="widget-title mb-10">Filtrar por precio</h5>
                <div class="bt-1 border-color-1"></div>
              </div>
              <div class="price-filter mb-20">
                <div class="price-filter-inner">
                  <div class="price_slider_amount">
                    <span>Rango:</span>
                    <div class="label-input d-flex">
                      <input type="number" id="amount-from" name="price-from" class="border rounded px-3" style="margin-right: 10px" placeholder="Desde.." />
                      <input type="number" id="amount-to" name="price-to" class="border rounded px-3" style="margin-left: 10px" placeholder="Hasta.." />
                    </div>
                  </div>
                </div>
              </div>
              <a href="#" class="btn btn-sm btn-default" onClick="generarFiltro();"><i class="fi-rs-filter mr-5"></i> Filtrar</a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Pie de pagina -->
  <?php include __DIR__."/layouts/footer.php"; ?>
  <script src="assets/js/src/paginas/tiendaHandler.js"></script>
</body>

</html>