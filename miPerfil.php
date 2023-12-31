﻿<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

include __DIR__."/clases/abrirConexion.php";
include __DIR__."/clases/funciones.php";

?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Mi Perfil</title>
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
          <span></span> Mi Perfil
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row flex-row-reverse">
              <div class="row mb-3">
                <div class="col">
                    <label for="txtClaveActual" class="form-label">Contraseña Actual *</label>
                    <input type="password" class="form-control" id="txtClaveActual">
                </div>
              </div>
              <div class="row mb-3">
                  <div class="col">
                      <label for="txtClaveNueva" class="form-label">Contraseña Nueva *</label>
                      <input type="password" class="form-control" id="txtClaveNueva">
                  </div>
              </div>
              <div class="row mb-3">
                  <div class="col">
                      <label for="txtClaveNueva2" class="form-label">Repetir Contraseña Nueva *</label>
                      <input type="password" class="form-control" id="txtClaveNueva2">
                  </div>
              </div>
              <div class="row mb-3">
                <a href="#" class="btn btn-sm btn-default"><i class="fi-rs-filter mr-5"></i> Guardar</a>
              </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
</body>

</html>