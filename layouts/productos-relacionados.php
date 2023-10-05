<?php

require_once dirname(__DIR__).'/helpers/ApiHelper.php'; 

use app\helpers\ApiHelper;

?>

<div class="row mt-60">
                <div class="col-12">
                  <h3 class="section-title style-1 mb-30">
                    Productos relacionados
                  </h3>
                </div>
                <div class="col-12">
                  <div class="row related-products">
<?php 
        $api = new ApiHelper;
        $payload = [
          "categoria"=>57,
          "producto"=>9
        ];
        $producto = $api->post($url.'/api/producto/related',$payload);

        foreach($producto as $p){
?>  
                    <div class="col-lg-3 col-md-4 col-12 col-sm-6">
                      <div class="product-cart-wrap small hover-up">
                        <div class="product-img-action-wrap">
                          <div class="product-img product-img-zoom">
                            <a href="producto.php?id=<?= $p['id'] ;?>" tabindex="0">
                              <img class="default-img" src="<?= $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                              <img class="hover-img" src="<?= $URLimagen.$p['imagenPrincipal'].".jpg" ;?>" alt="" />
                            </a>
                          </div>
                          <div class="product-action-1">
                            <a aria-label="Vista rápida" class="action-btn small hover-up" data-bs-toggle="modal" data-bs-target="#quickViewModal"><i class="fi-rs-search"></i></a>
                          </div>
                          <div class="product-badges product-badges-position product-badges-mrg">
                            <span class="hot">Destacado</span>
                          </div>
                        </div>
                        <div class="product-content-wrap">
                          <h2>
                            <a href="producto.php?id=<?= $p['id'] ;?>" tabindex="0"><?= $p['nombre'] ;?></a>
                          </h2>
                          <div class="subtitle">
                            <span>
                              <a href="producto.php?id=<?= $p['id'] ;?>">Ver mas</a>
                            </span>
                          </div>
                          <?php if($usuarioLogueado){ ?>
                            
                          <div class="product-price">
                            <?php if($p['precioPromocional'] != 0){ ?>
                                    <span>U$S<?= $p['precioPromocional'] ;?> </span>
                                    <span class="old-price">U$S <?= $p['precio'] ;?></span>
                            <?php }else{ ?>
                                    <span>U$S <?= $p['precio'] ;?></span>
                            <?php } ?>

                          </div>
                            <?php } ?>
                        </div>
                      </div>
                    </div>
<?php } ?>



                  </div>
                </div>
              </div>