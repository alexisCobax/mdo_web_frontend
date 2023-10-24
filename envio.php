<?php

require_once __DIR__.'/helpers/ApiHelper.php'; 
require_once __DIR__."/clases/funciones.php";

use app\helpers\ApiHelper;


$api = new ApiHelper;
$cliente = $api->get($url.'/api/web/cliente');

$tipoDeEnvio = $cliente['data']['tipoDeEnvio'];
$nombrEnvio = $cliente['data']['nombreEnvio']; 

$direccionEnvio = $cliente['data']['direccionShape'];
$regionEnvio = $cliente['data']['regionEnvio'];
$ciudadEnvio = $cliente['data']['ciudadEnvio'];
$CPEnvio= $cliente['data']['cpShape'];
$paisEnvio= $cliente['data']['paisShape'];


$telefonoTransportadora= $cliente['data']['telefonoTransportadora'];
$transportadora= $cliente['data']['transportadora'];
$comentarios= $cliente['data']['observaciones'];

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
        <div class="row">
          <div class="col">
            <p class="mb-4" style="font-weight:bold;">DIRECCIÓN DE ENVIO</p>
            <p class="mb-4" style="font-weight:bold; color:red; font-size: 14px;">POR FAVOR REVISE DETALLADAMENTE LOS DATOS EN SU DIRECCION DE ENVIO. NO SE PODRÁN REALIZAR CAMBIOS UNA VEZ CONFIRMADO ESTE CAMPO</p>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="MetodoEnvio" id="retira_transportista" value="1" <?php if ($tipoDeEnvio==1){ echo "checked";}?> >
              <label class="form-check-label" for="retira_transportista">
                Retira mi transportista
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="MetodoEnvio" id="envio_usa" value="2" <?php if ($tipoDeEnvio==2){ echo "checked";}?> >
              <label class="form-check-label" for="envio_usa">
                Envio dentro de USA
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="MetodoEnvio" id="envio_pais" value="3" <?php if ($tipoDeEnvio==3){ echo "checked";}?> >
              <label class="form-check-label" for="envio_pais">
                Enviar directamente a mi pais (SE COTIZARÁ EL COSTO DE ENVIO UNA VEZ REALIZADO EL PEDIDO)
              </label>
            </div>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col" style="font-weight: bold; font-size: 16px; border: 1px solid; text-align: center;">
              <b>SI SU PAQUETE DEBE SER ENVIADO A SU TRANSPORTISTA DENTRO DE  USA COLOQUE AQUI LA DIRECCION DEL MISMO</b>
          </div>
        </div>
        <div class="row mb-2">
          <div class="col">
            <label for="nombre" class="form-label">Nombre*</label>
            <input type="text" class="form-control" id="nombre" value="<?=$nombrEnvio?>" >
          </div>
        </div>
        <div class="row mb-2">
          <div class="col">
            <label for="direccion_envio" class="form-label">Direccion de envio* (Calle y numero)   </label>
            <input type="text" class="form-control" id="direccion_envio" value="<?=$direccionEnvio?>">
          </div>
        </div>
        <div class="row mb-2">
          <div class="col">
            <label for="pais" class="form-label">Pais *</label>
            <input type="text" class="form-control" id="pais" value="<?=$paisEnvio?>">
          </div>
          <div class="col">
            <label for="estado" class="form-label">Estado/Provincia/Region *</label>
            <input type="text" class="form-control" id="estado" value="<?=$regionEnvio?>">
          </div>
          <div class="col">
            <label for="ciudad" class="form-label">Ciudad *</label>
            <input type="text" class="form-control" id="ciudad" value="<?=$ciudadEnvio?>">
          </div>
        </div>
        <div class="row mb-2">
          <div class="col col-xl-3">
            <label for="codigo_postal" class="form-label">Codigo postal/ ZIP Code *</label>
            <input type="text" class="form-control" id="codigo_postal" value="<?=$CPEnvio?>">
          </div>
        </div>
        <div class="row mb-2">
          <div class="col">
            <label for="transportadora" class="form-label">Nombre Transportadora *</label>
            <input type="text" class="form-control" id="transportadora" value="<?=$transportadora?>">
          </div>
          <div class="col">
            <label for="telefono_transportadora" class="form-label">Teléfono Transportadora *</label>
            <input type="text" class="form-control" id="telefono_transportadora" value="<?=$telefonoTransportadora?>">
          </div>
        </div> 
         <div class="row mb-2">
              <div class="col">
                <label for="Comentarios" class="form-label">Comentarios </label>
                <textarea class="form-control" id="comentarios" rows="3"><?=$comentarios?></textarea>
              </div>
            </div>
          <hr style="margin-top: 50px; margin-bottom: 10px;" />
          <div class="row mt-4">
            <div class="col" style="text-align:left">
              <p class="mt-2">Todos los campos marcados con (*) son requeridos</p>
            </div>
            <div class="col" style="text-align:right">
              <button class="btn btn-success" onclick="guardarDatosEnvio();">SIGUIENTE</button>
            </div>
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