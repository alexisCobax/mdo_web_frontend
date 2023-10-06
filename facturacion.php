<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

include __DIR__."/clases/abrirConexion.php";
include __DIR__."/clases/funciones.php";

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
        <div class="row mb-3">
          <div class="col">
            <label for="nombre_compania" class="form-label">NOMBRE DE LA COMPANIA *</label>
            <input type="compania" class="form-control" id="nombre_compania">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="direccion" class="form-label">DIRECCIÓN *</label>
            <input type="direccion_compania" class="form-control" id="direccion">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="pais" class="form-label">PAIS *</label>
            <input type="pais" class="form-control" id="pais">
          </div>
          <div class="col">
            <label for="ciudad" class="form-label">CIUDAD *</label>
            <input type="ciudad" class="form-control" id="ciudad">
          </div>
          <div class="col">
            <label for="codigo_postal" class="form-label">CODIGO POSTAL *</label>
            <input type="codigo_postal" class="form-control" id="codigo_postal">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="email" class="form-label">EMAIL *</label>
            <input type="email" class="form-control" id="email">
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <label for="telefono" class="form-label">TELEFONO *</label>
            <input type="telefono" class="form-control" id="telefono">
          </div>
          <div class="col">
            <label for="fax" class="form-label">FAX *</label>
            <input type="fax" class="form-control" id="fax">
          </div>
        </div>
        <hr style="margin-top: 50px; margin-bottom: 10px;" />
        <div class="row mt-4">
          <div class="col" style="text-align:left">
            <p class="mt-2">Todos los campos marcados con (*) son requeridos</p>
          </div>
          <div class="col" style="text-align:right">
            <a type="button" href="envio.php" class="btn btn-success">SIGUIENTE</a>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
</body>

</html>