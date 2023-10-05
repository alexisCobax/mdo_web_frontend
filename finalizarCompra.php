
<?php

require_once __DIR__.'/helpers/ApiHelper.php'; 
include __DIR__."/clases/funciones.php";

use app\helpers\ApiHelper;


$api = new ApiHelper;
$cliente = $api->get($url.'/api/web/cliente');

$nombre = $cliente['data']['nombre'];
$direccion = $cliente['data']['direccion']; 
$pais = $cliente['data']['pais'];

$ciudad = $cliente['data']['ciudad'];
$CP= $cliente['data']['codigoPostal'];
$email = $cliente['data']['email'];
$telefono= $cliente['data']['telefono'];

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
  <meta property="og:type" content="e-commerce" />
  <meta property="og:url" content="www.MayoristasDeOpticas.com" />
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
        <div class="row flex-row-reverse">
        <div class="row mb-3">
          <div class="col">
              <label for="txtNombre" class="form-label">NOMBRE DE LA COMPANIA *</label>
              <input type="text" class="form-control" id="txtNombre" value="<?= $nombre ?>">
          </div>
        </div>
          <div class="row mb-3">
          <div class="col">
              <label for="txtDireccion" class="form-label">DIRECCIÓN *</label>
              <textarea class="form-control" id="txtDireccion" rows="3"><?= $direccion ?></textarea>
          </div>
          </div>
            <div class="row mb-3">
              <div class="col">
                <label for="txtPais" class="form-label">PAIS *</label>
                <input type="text" class="form-control" id="txtPais" value="<?= $pais ?>">
              </div>
              <div class="col">
                <label for="txtCiudad" class="form-label">CIUDAD *</label>
                <input type="text" class="form-control" id="txtCiudad" value="<?= $ciudad ?>">
              </div>
              <div class="col">
                <label for="txtCodigoPostal" class="form-label">CODIGO POSTAL *</label>
                <input type="text" class="form-control" id="txtCodigoPostal" value="<?= $CP ?>">
              </div>
            </div>
            <div class="row mb-3">
            <div class="col">
                <label for="txtEmail" class="form-label">EMAIL *</label>
                <input type="text" class="form-control" id="txtEmail" value="<?= $email ?>">
            </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label for="txtTelefono" class="form-label">TELEFONO *</label>
                <input type="text" class="form-control" id="txtTelefono" value="<?= $telefono ?>">
              </div>
              
            </div>
            <div class="row mb-3">
              <div class="col" style="text-align:right">
                <button class="btn btn-success" id="btnSiguiente" onclick="guardarDatosCliente();">SIGUIENTE</button>
              </div>
            </div>
          </div>

         
        </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
  <script src="assets/js/src/paginas/finalizarCompraHandler.js"></script>
</body>

</html>