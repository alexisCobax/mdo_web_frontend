<?php

require_once __DIR__.'/helpers/ApiHelper.php'; 
require_once __DIR__."/clases/funciones.php";

use app\helpers\ApiHelper;

$idProducto = 0;
if(isset($_REQUEST['id'])){ $idProducto = $_REQUEST['id'];}

if($idProducto==0){
  header("Location: index.php");
}

$api = new ApiHelper;
$producto = $api->get($url.'/api/web/producto/'.$idProducto);

$nombreProducto = $producto['data']['message'][0]['nombre'];
$precioProducto = $producto['data']['message'][0]['precio']; 
$precioPromocionProducto = $producto['data']['message'][0]['precioPromocional'];
$imagenProducto = $URLimagen.$producto['data']['message'][0]['imagenPrincipal'];
$descripcionProducto = $producto['data']['message'][0]['descripcion'];
$stock= $producto['data']['message'][0]['stock'];
$urlDom = $URLDominio."productos/".$idProducto."/".$nombreProducto."";
$marca = $producto['data']['message'][0]['nombreMarca'];
$estuche = $producto['data']['message'][0]['estuche'];
$codigo = $producto['data']['message'][0]['codigo'];
$nombreCategoria = $producto['data']['message'][0]['nombreCategoria'];
$nombreMaterial = $producto['data']['message'][0]['nombreMaterial'];
$nombreColor = $producto['data']['message'][0]['nombreColor'];
$nombreTamaño = $producto['data']['message'][0]['tamano'];

?>

<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - <?=$nombreProducto;?></title>
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <meta name="description" content="Venta al por mayor de opticas" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta property="og:title" content="<?=$marca.'-'.$nombreProducto;?>" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="<?=$urlDom;?>" />
  <meta property="og:image" content="<?= $imagenProducto;?>" />
  <meta name="theme-color" content="#ae2a69" />
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="assets/imgs/theme/favicon.svg" />
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/main.css?v=3.4" />
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
      <div class="container" id="nav-menu">
          <div class="breadcrumb">
              <a href="index.php" rel="nofollow">Inicio</a>
              <span></span> <?=$nombreCategoria;?> <span></span> <?=$nombreProducto;?>
          </div>

      </div>
    </div>
    <section class="mt-50 mb-50">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="product-detail accordion-detail">
              <div class="row mb-50">
                <div class="col-md-6 col-sm-12 col-xs-12">
                  <div class="detail-gallery">
                    <span class="zoom-icon"><i class="fi-rs-search"></i></span>
                    <!-- MAIN SLIDES -->
                    <div id="main-slides">
                        <div class="product-image-slider">
                              <img id="img-slide" src="<?=$imagenProducto;?>" alt="<?=$nombreProducto;?>" />
                        </div>
                    </div>
                  </div>
                  <!-- End Gallery -->
                </div>
                  <!-- Detail Info -->
                <div class="col-md-6 col-sm-12 col-xs-12" id="detail-container">
                <div class="detail-info">
                        <h2 class="title-detail"><?=$nombreProducto;?></h2>
                        <div class="product-detail-rating">
                          <div class="pro-details-brand">
                            <span>
                              Categoria:
                              <a href="shop-grid-right.php"><?=$nombreCategoria;?></a></span>
                          </div>
                        </div>
                        <?php if($usuarioLogueado){ ?>
                          <div class="clearfix product-price-cover">
                          <div class="product-price primary-color float-left">
                            <ins><span class="text-brand">U$S <?=$precioProducto;?></span></ins>
                            <?php if($precioPromocionProducto!=0&&$precioPromocionProducto>$precioProducto){ ?><ins><span class="old-price font-md ml-15">U$S <?=$precioPromocionProducto;?></span></ins> <?php } ?>
                            <span class="save-price font-md color3 ml-15"></span>
                          </div>
                        </div> <?php } ?>
                        <div class="bt-1 border-color-1 mt-15 mb-15"></div>
                        <div class="short-desc mb-30">
                          <p>Descripcion:<?=$descripcionProducto;?></p>
                          <p>Marca: <?=$marca;?></p>
                          <p>Producto: <?=$nombreProducto;?></p>
                          <p>Categoria: <?=$nombreCategoria;?>.</p>
                          <p>Material:<?=$nombreMaterial;?>.</p>
                          <p>Tamaño: <?=$nombreTamaño;?></p>
                          <p>Estuche: <?=$estuche;?></p>
                          <p>Color: <?=$nombreColor;?></p>
                          <p>Código: <?=$codigo;?></p>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <?php if($usuarioLogueado){ ?>
                        <div class="detail-extralink">
                          <div class="">
                              <input type="number" class="form-control detail-qty border radius" min="1"  max="<?=$stock;?>" step="1" id="Cantidad" name="Cantidad" value="1">
                          </div>
                          <div class="product-extra-link2">
                            <button type="button" onclick="agregarProducto(<?=$idProducto;?>);" class="button button-add-to-cart">
                              Agregar al carrito
                            </button>
                          </div>
                        </div>
                        <ul class="product-meta font-xs color-grey mt-50">
                          <li>
                            En Stock:<span class="in-stock text-success ml-5"><?=$stock;?></span>
                          </li>
                        </ul>
                      </div>
                      <?php }?>
                </div>
              </div>
              <?php include "./layouts/productos-relacionados.php"; ?>
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
