<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);


// include __DIR__."/clases/abrirConexion.php";
require_once __DIR__."/clases/funciones.php";

?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas2 - Inicio</title>
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
  <!-- Login -->
  <link rel="stylesheet" href="./assets/css/loginIcon.css" />
  <style>
    h1{
    color: var(--primary-color);
    line-height: 60px;
    font-weight: bold;
    padding: 0 30px;
    }

    .main{
        height: 500px;
    }

    .row-style{
    padding-top: 200px;
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

<div class="row row-style">
<div class="col">&nbsp;</div>
<div class="col text-center"><h1>Gracias por registrarse!</h1></div>
<div class="col">&nbsp;</div>
</div>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
</body>

</html>
