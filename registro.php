<?php

error_reporting(E_ALL);
ini_set('display_errors', '0');

//include __DIR__."/clases/abrirConexion.php";
require_once __DIR__ . '/helpers/ApiHelper.php';
include __DIR__ . "/clases/funciones.php";

use app\helpers\ApiHelper;

$api = new ApiHelper;
$cliente = $api->get($url . '/api/web/cliente');

$tipoDeEnvio = $cliente['data']['tipoDeEnvio'];
$nombrEnvio = $cliente['data']['nombreEnvio'];

$direccionEnvio = $cliente['data']['direccionShape'];
$regionEnvio = $cliente['data']['regionEnvio'];
$ciudadEnvio = $cliente['data']['ciudadEnvio'];
$CPEnvio = $cliente['data']['cpShape'];
$paisEnvio = $cliente['data']['paisShape'];


$telefonoTransportadora = $cliente['data']['telefonoTransportadora'];
$transportadora = $cliente['data']['transportadora'];
$comentarios = $cliente['data']['observaciones'];


?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Intranet</title>
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
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />


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
          <span></span> Registrarse
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row flex-row-reverse">
          <div class="row mb-3">
            <div class="col">
              <form>
                <div class="form-group">
                  <label for="compania">Nombre de la compañía</label>
                  <input type="text" class="form-control" id="compania" value="<?= $cliente['data']['nombre']; ?>">
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" class="form-control" id="direccion" value="<?= $cliente['data']['direccion']; ?>">
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="pais">País</label>
                      <input type="text" class="form-control" id="pais" value="<?= $cliente['data']['pais']; ?>">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="ciudad">Ciudad</label>
                      <input type="text" class="form-control" id="ciudad" value="<?= $cliente['data']['ciudad']; ?>">
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="codigo-postal">Código Postal</label>
                      <input type="text" class="form-control" id="codigo-postal" value="<?= $cliente['data']['codigoPostal']; ?>">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="<?= $cliente['data']['email']; ?>">
                </div>
                <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="tel" class="form-control" id="telefono" value="<?= $cliente['data']['telefono']; ?>">
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario" value="" autocomplete="new-password">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" value="" autocomplete="new-password">
                </div>
                <div class="form-group">
                  <label for="password">Repetir Contraseña</label>
                  <input type="password" class="form-control" id="password" value="" autocomplete="new-password">
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-sm ml-2">Guardar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
  <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="assets/js/src/paginas/intranetHandler.js"></script>



</body>

</html>