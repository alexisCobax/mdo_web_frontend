<?php

require_once dirname(__DIR__).'/helpers/ApiHelper.php'; 

use app\helpers\ApiHelper;

?>
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
                  <button class="nav-link" id="nav-tab-three" data-bs-toggle="tab" data-bs-target="#tab-three" type="button" role="tab" aria-controls="tab-three" aria-selected="false">
                    Nuevos
                  </button>
                </li>
              </ul>
              <!-- <a href="#" class="view-more d-none d-md-flex btn btn-primary" style="border-radius: 30px; border: none">Ver más<i class="fi-rs-angle-double-small-right"></i></a> -->
            </div>
            <!--End nav-tabs-->
            <div class="tab-content wow fadeIn animated" id="myTabContent">
              <!--Tab (Featured)-->
              <div class="tab-pane fade show active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                <div class="row product-grid-4">
<?php 
$api = new ApiHelper;

$producto = $api->get($url.'api/web/producto?destacado=1');
foreach($producto as $p){

?>                    
                  <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php?id=<?php echo $p['id']; ?>">
                            <img class="default-img" src="<?php echo $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                              <img class="hover-img" src="<?php echo $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                          </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Destacado</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="tienda.php?categoria=<?php echo $p['categoria']; ?>"><?php echo $p['categoria']; ?></a>
                          <a href="tienda.php?marca=<?php echo $p['marca']; ?>"><?php echo $p['marca']; ?></a>
                        </div>
                        <h2>
                          <a href="producto.php?id=<?php echo $p['id']; ?>"><?php echo $p['nombre']; ?></a>
                        </h2>
                        <div class="subtitle"></div>
                        <?php if($usuarioLogueado){ ?>
                        <div class="product-price">
                            <?php if($p['precioPromocional'] != 0){ $precio=$p['precioPromocional']; ?>
                                    <span>U$S<?php echo $p['precioPromocional'] ;?> </span>
                                    <span class="old-price">U$S <?php echo $p['precio'] ;?></span>
                            <?php }else{ $precio=$p['precio']?>
                                    <span>U$S <?php echo $p['precio'] ;?></span>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php" onclick="agregarProducto(<?= $p['id']; ?>,<?= $precio?>)"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

            <?php } ?>

                </div>
              </div>
            
            
              <!--Tab (New)-->
              <div class="tab-pane fade" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                <div class="row product-grid-4">
<?php        
$api = new ApiHelper;


$producto = $api->get($url.'api/web/producto?estado=nuevo');
foreach($producto as $p){                   
?>
            <div class="col-lg-4 col-md-4 col-12 col-sm-6">
                    <div class="product-cart-wrap mb-30">
                      <div class="product-img-action-wrap">
                        <div class="product-img product-img-zoom">
                          <a href="producto.php?id=<?php echo $p['id']; ?>">
                            <img class="default-img" src="<?php echo $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                              <img class="hover-img" src="<?php echo $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                          </a>
                        </div>
                        <div class="product-badges product-badges-position product-badges-mrg">
                          <span class="hot">Nuevo</span>
                        </div>
                      </div>
                      <div class="product-content-wrap">
                        <div class="product-category">
                          <a href="tienda.php?categoria=<?php echo $p['categoria']; ?>"><?php echo $p['categoria']; ?></a>
                          <a href="tienda.php?marca=<?php echo $p['marca']; ?>"><?php echo $p['marca']; ?></a>
                        </div>
                        <h2>
                          <a href="producto.php?id=<?php echo $p['id']; ?>"><?php echo $p['nombre']; ?></a>
                        </h2>
                        <div class="subtitle"></div>
                        <?php if($usuarioLogueado){ ?>
                        <div class="product-price">
                            <?php if($p['precioPromocional'] != 0){ ?>
                                    <span>U$S<?php echo $p['precioPromocional'] ;?> </span>
                                    <span class="old-price">U$S <?php echo $p['precio'] ;?></span>
                            <?php }else{ ?>
                                    <span>U$S <?php echo $p['precio'] ;?></span>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="product-action-1 show">
                          <a aria-label="Agregar al carrito" class="action-btn hover-up bg-white" href="shop-cart.php"><i class="fi-rs-shopping-bag-add"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>

            <?php } ?>
                </div>
              </div>
            </div>
            <!--End tab-content-->
          </div>
        </div>
      </div>
    </section>