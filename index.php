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
  <link rel="stylesheet" href="assets/css/custom.css" />
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Login -->
  <link rel="stylesheet" href="assets/css/loginIcon.css" />
</head>

<body>
  <!-- Cabecera Top menu y menu -->
  <header class="header-area header-style-4 header-height-2">

    <!-- Cabecera Top -->
    <?php include __DIR__."/layouts/header.php"; ?>

    <!-- Menu -->
    <?php include __DIR__."/layouts/menu.php"; ?>

  </header>
  <!-- Menu de celular -->
  <?php include __DIR__."/layouts/menu-celular.php"; ?>

  <!-- Inicio contenido de la web -->
  <main class="main">
    <!-- Slide -->
    <section class="home-slider position-relative mb-30">
      <div class="container-fluid" style="padding: 0px">
        <div class="home-slide-cover-np">
          <div class="hero-slider-1 style-4 dot-style-1 dot-style-1-position-1">
            <div class="single-hero-slider single-animation-wrap" style="
                  background-image: url(assets/imgs/opticam/slide/slide-01.jpg);
                ">
              <div class="container">
                <div class="row align-items-center slider-animated-1">
                  <div class="col-lg-5 col-md-6">
                    <div class="hero-slider-content-2">
                      <h4 class="animated">Del 15/01 al 31/01</h4>
                      <h3 class="animated fw-900">Venta anual</h3>
                      <h2 class="animated fw-900 text-brand">
                        Descuentos en todos los productos
                      </h2>
                      <p class="animated">Ahorra un 10%</p>
                      <a class="animated btn btn-primary btn-brush-3" style="border-radius: 30px; border-style: none" href="producto.php" tabindex="0">
                        Ver más
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-6">
                    <div class="single-slider-img single-slider-img-1">
                      <img class="animated" src="" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-hero-slider single-animation-wrap" style="
                  background-image: url(assets/imgs/banner/banner-mo-2.jpg);
                  background-size: cover;
                ">
              <div class="container">
                <div class="row align-items-center slider-animated-1">
                  <div class="col-lg-5 col-md-6">
                    <div class="hero-slider-content-2">
                      <h4 class="animated">Sistema de ventas</h4>
                      <h3 class="animated fw-900">Hace que</h3>
                      <h2 class="animated fw-900 text-brand">
                        Emprender sea simple para todos
                      </h2>
                      <p class="animated">Consulta hoy mismo.</p>
                      <a class="animated btn btn-primary btn-brush-1" style="border-radius: 30px; border-style: none" href="producto.php" tabindex="0">
                        1+ (305) 316- 8267
                      </a>
                    </div>
                  </div>
                  <div class="col-lg-7 col-md-6">
                    <div class="single-slider-img single-slider-img-1">
                      <img class="animated" src="" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="slider-arrow hero-slider-1-arrow"></div>
        </div>
      </div>
    </section>
    <!-- Titulo bajo slide -->
    <section class="pt-25 pb-20 fadeIn animated">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="" style="text-align: center">
              <h5>Solo por Mayor</h5>
              <h2>Conseguí todos nuestros modelos</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Tabs con los productos -->
    <section class="product-tabs pt-25 pb-20 wow fadeIn animated">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="tab-header">
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="nav-tab-one" data-bs-toggle="tab" data-bs-target="#tab-one" type="button" role="tab" aria-controls="tab-one" aria-selected="true">
                    Destacados
                  </button>
                </li>
                <li class="nav-item" role="presentation">
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                    Nuevos
                  </button>
                </li>
              </ul>
              <a href="#" class="view-more d-none d-md-flex btn btn-primary" style="border-radius: 30px; border: none">Ver más<i class="fi-rs-angle-double-small-right"></i></a>
            </div>
            <!--End nav-tabs-->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
              <!--Tab (Featured)-->
              <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/opticam/products/product-3-1.jpg" alt="" />
                          </a>
                        </div>
                        <!-- <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div> -->
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Destacado</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Anteojo</a>
                        </div>
                        <h2>
                          <a href="producto.php">Brimstone</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-2.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/opticam/products/product-2-2.jpg" alt="" />
                          </a>
                        </div>
                        <!-- <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div> -->
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Destacado</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Anteojos</a>
                        </div>
                        <h2>
                          <a href="producto.php">Snowberrys</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$255.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-3.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/opticam/products/product-2-3.jpg" alt="" />
                          </a>
                        </div>
                        <!-- <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div> -->
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Destacado</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Anteojos</a>
                        </div>
                        <h2>
                          <a href="producto.php">Verona love</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$338.85 </span>
                          <span class="old-price">$445.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--Tab (Popular)-->
              <!-- <div
                  class="tab-pane fade"
                  id="tab-two"
                  role="tabpanel"
                  aria-labelledby="tab-two"
                >
                  <div class="row product-grid-4">
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                      <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                          <div class="product-img product-img-zoom">
                            <a href="producto.php">
                              <img
                                class="default-img"
                                src="assets/imgs/opticam/products/product-2-4.jpg"
                                alt=""
                              />
                              <img
                                class="hover-img"
                                src="assets/imgs/opticam/products/product-2-4.jpg"
                                alt=""
                              />
                            </a>
                          </div>
                          <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div>
                          <div
                            class="product-badges product-badges-position product-badges-mrg"
                          >
                            <span class="best">Mas vendido</span>
                          </div>
                        </div>
                        <div class="product-content-wrap">
                          <div class="product-category">
                            <a href="shop-list-left.php">Donec </a>
                          </div>
                          <h2>
                            <a href="producto.php"
                              >Lorem ipsum dolor</a
                            >
                          </h2>
                          <div class="subtitle"></div>
                          <div class="product-price">
                            <span>$238.85 </span>
                            <span class="old-price">$245.8</span>
                          </div>
                          <div class="product-action-1 show">
                            <a
                              aria-label="Agregar al carrito"
                              class="action-btn hover-up"
                              href="shop-cart.php"
                              ><i class="fi-rs-shopping-bag-add"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                      <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                          <div class="product-img product-img-zoom">
                            <a href="producto.php">
                              <img
                                class="default-img"
                                src="assets/imgs/opticam/products/product-2-5.jpg"
                                alt=""
                              />
                              <img
                                class="hover-img"
                                src="assets/imgs/opticam/products/product-2-5.jpg"
                                alt=""
                              />
                            </a>
                          </div>
                          <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div>
                          <div
                            class="product-badges product-badges-position product-badges-mrg"
                          >
                            <span class="best">Mas vendido</span>
                          </div>
                        </div>
                        <div class="product-content-wrap">
                          <div class="product-category">
                            <a href="shop-list-left.php">Music</a>
                          </div>
                          <h2>
                            <a href="producto.php"
                              >Sed tincidunt interdum</a
                            >
                          </h2>
                          <div class="subtitle"></div>
                          <div class="product-price">
                            <span>$138.85 </span>
                            <span class="old-price">$255.8</span>
                          </div>
                          <div class="product-action-1 show">
                            <a
                              aria-label="Agregar al carrito"
                              class="action-btn hover-up"
                              href="shop-cart.php"
                              ><i class="fi-rs-shopping-bag-add"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                      <div class="product-cart-wrap mb-30">
                        <div class="product-img-action-wrap">
                          <div class="product-img product-img-zoom">
                            <a href="producto.php">
                              <img
                                class="default-img"
                                src="assets/imgs/opticam/products/product-2-6.jpg"
                                alt=""
                              />
                              <img
                                class="hover-img"
                                src="assets/imgs/opticam/products/product-2-6.jpg"
                                alt=""
                              />
                            </a>
                          </div>
                          <div class="product-action-1">
                            <a
                              aria-label="Vista rapida"
                              class="action-btn hover-up"
                              data-bs-toggle="modal"
                              data-bs-target="#quickViewModal"
                              ><i class="fi-rs-eye"></i
                            ></a>
                          </div>
                          <div
                            class="product-badges product-badges-position product-badges-mrg"
                          >
                            <span class="best">Mas vendido</span>
                          </div>
                        </div>
                        <div class="product-content-wrap">
                          <div class="product-category">
                            <a href="shop-list-left.php">Watch</a>
                          </div>
                          <h2>
                            <a href="producto.php"
                              >Fusce metus orci</a
                            >
                          </h2>
                          <div class="subtitle"></div>
                          <div class="product-price">
                            <span>$338.85 </span>
                            <span class="old-price">$445.8</span>
                          </div>
                          <div class="product-action-1 show">
                            <a
                              aria-label="Agregar al carrito"
                              class="action-btn hover-up"
                              href="shop-cart.php"
                              ><i class="fi-rs-shopping-bag-add"></i
                            ></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              <!--Tab (New)-->
              <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row product-grid-4">
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-1.jpg" alt="" />
                            <img class="hover-img" src="assets/imgs/opticam/products/product-2-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Vista rapida" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">Nuevo</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Music</a>
                        </div>
                        <h2>
                          <a href="producto.php">Donec ut nisl rutrum</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$238.85 </span>
                          <span class="old-price">$245.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="hover-img" src="assets/imgs/opticam/products/product-2-2.jpg" alt="" />
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-2.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Vista rapida" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">Nuevo</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Music</a>
                        </div>
                        <h2>
                          <a href="producto.php">Nullam dapibus pharetra</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$255.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php">
                            <img class="hover-img" src="assets/imgs/opticam/products/product-2-3.jpg" alt="" />
                            <img class="default-img" src="assets/imgs/opticam/products/product-2-3.jpg" alt="" />
                          </a>
                        </div>
                        <div class="product-action-1">
                          <a aria-label="Vista rapida" class="action-btn hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-eye"></i></a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="new">Nuevo</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="shop-list-left.php">Music</a>
                        </div>
                        <h2>
                          <a href="producto.php">Nullam dapibus pharetra</a>
                        </h2>
                        <div class="subtitle"></div>
                        <div class="product-price">
                          <span>$138.85 </span>
                          <span class="old-price">$255.8</span>
                        </div>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--End tab-content-->
          </div>
        </div>
      </div>
    </section>
    <hr />
    <!-- Categorias -->
    <section class="popular-categories section-padding mt-15">
      <div class="container wow fadeIn animated">
        <h3 class="section-title mb-20">
          <span>Categorías</span> más vistas
        </h3>
        <div class="carausel-6-columns-cover position-relative">
          <div class="slider-arrow slider-arrow-2 carausel-6-columns-arrow" id="carausel-6-columns-arrows"></div>
          <div class="carausel-6-columns" id="carausel-6-columns">
            <div class="card-1">
              <h5><a href="tienda.php?marca=24">Accesorios</a></h5>
            </div>
            <div class="card-1">
              <h5><a href="tienda.php?marca=24">Brimstone Eyewear</a></h5>
            </div>
            <div class="card-1">
              <h5><a href="tienda.php?marca=18">Dolabany Eyewear</a></h5>
            </div>
            <div class="card-1">
              <h5>
                <a href="tienda.php?marca=21">Freedom Colors</a>
              </h5>
            </div>
            <div class="card-1">
              <h5><a href="tienda.php?marca=18">Mario Galbatti</a></h5>
            </div>
            <div class="card-1">
              <h5><a href="tienda.php?marca=22">Verona Love</a></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Banners con contador -->
    <section class="deals section-padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 deal-co">
            <div class="deal wow fadeIn animated mb-md-4 mb-sm-4 mb-lg-0 borded" style="
                  background-image: url('assets/imgs/opticam/banners/banner-promo-5.jpg');
                "></div>
          </div>
          <div class="col-lg-6 deal-co">
            <div class="background-primary-color deal wow fadeIn animated borded">
              <div class="deal-top">
                <h2>SNOWBERRY Eyewear.</h2>
                <h5>Sumamos una nueva marca</h5>
              </div>
              <div class="deal-content">
                <h6 class="product-title">
                  <a href="tienda.php?marca=24">Armazones Originales de Metal con acetato</a>
                </h6>
                <div class="product-price">
                  <span class="new-price"></span><span class="old-price"></span>
                </div>
              </div>
              <div class="deal-bottom">
                <a href="#" class="view-more d-none d-md-flex btn bg-white w-auto" style="border-radius: 30px; border: none">Ver más<i class="fi-rs-angle-double-small-right"></i></a>
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
                24/7 Compras
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
            <img src="assets/imgs/brands/Captura_de_pantalla__2_-removebg-preview.png" alt="Brand 1" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="assets/imgs/brands/Dolabany_Eyewear_Logo_White-1.svg" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="assets/imgs/brands/transparent-brimstone.png" alt="Brand 1" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="assets/imgs/brands/transparent-freedom.png" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
            <img src="assets/imgs/brands/transparent-snowberry.png" alt="Brand 2" style="filter: grayscale(100%) brightness(0%); padding: 20px;" />
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php include __DIR__."/layouts/footer.php"; ?>
</body>

</html>