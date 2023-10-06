<?php

error_reporting(E_ALL);
ini_set('display_errors', 0);

// include __DIR__."/clases/abrirConexion.php";
include __DIR__."/clases/funciones.php";

?>
<!DOCTYPE html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8" />
  <title>Mayorista de opticas - Inicio</title>
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
  <link rel="stylesheet" href="./assets/css/login.css" />
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

    <!-- Login -->
    <section class="pt-100 pb-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 m-auto">
            <div class="row">
              <div class="col-lg-5">
                <div class="login_wrap widget-taber-content p-30 background-white border-radius-10 mb-md-5 mb-lg-0 mb-sm-5">
                  <div class="padding_eight_all bg-white">
                    <div class="heading_s1">
                      <h3 class="mb-30">Iniciar sesión</h3>
                    </div>
                      <div class="form-group">
                        <input type="text" required name="email" placeholder="Ingresa tu email" id="user" value="admin@admin.com" />
                      </div>
                      <div class="form-group">
                        <input required="" type="password" name="password" placeholder="Ingresa tu contraseña" id="pass" value="administrador" />
                      </div>
                      <div class="login_footer form-group">
                        <div class="chek-form">
                          <div class="custome-checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="recordarContrasena" value="" />
                            <label class="form-check-label" for="recordarContrasena"><span>Recordarme</span></label>
                          </div>
                        </div>
                        <a class="text-muted" href="#">¿Olvidaste tu contraseña?</a>
                      </div>
                      <div class="form-group">
                        <button type="button" class="btn btn-fill-out w-100 hover-up" name="login" onclick="login();">
                          Ingresar
                        </button>
                      </div>
                      <div class="form-group text-center">
                        ¿No tenés cuenta?
                        <a class="text-muted" href="page-register.html">Registrate</a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-1"></div>
              <div class="col-lg-6">
                <img src="./assets/imgs/banner/banner-mo-2.jpg" alt="" class="h-100 border-radius-10">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Iconos de servicio -->
    <section class="featured section-padding">
      <div class="container pb-25">
        <div class="row">
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-4.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                Envio internacional
              </h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-3.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                Compra Online
              </h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-5.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                Descuentos
              </h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-1.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                Promos
              </h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-2.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                Mayoristas
              </h4>
            </div>
          </div>
          <div class="col-lg-2 col-md-4 mb-md-3 mb-lg-0">
            <div class="banner-features wow fadeIn animated hover-up">
              <img src="assets/imgs/icons/icon-6.png" alt="" />
              <h4 class="bg-white text-dark border" style="border-radius: 30px">
                24/7 Asistencia
              </h4>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="container">
      <div class="carousel-container">
        <div class="carousel-wrapper">
          <div class="carousel-slide">
            <img src="./assets/imgs/brands/Captura_de_pantalla__2_-removebg-preview.png" alt="Brand 1" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="./assets/imgs/brands/Dolabany_Eyewear_Logo_White-1.svg" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="./assets/imgs/brands/transparent-brimstone.png" alt="Brand 1" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="./assets/imgs/brands/transparent-freedom.png" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="./assets/imgs/brands/transparent-snowberry.png" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
</body>

</html>