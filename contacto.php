
<?php

require_once __DIR__.'/helpers/ApiHelper.php'; 
include __DIR__."/clases/funciones.php";

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
     	
			<!-- CONTAINER -->
			<div class="container">
				
				<!-- ROW -->
				<div class="row padbot30">
					<div class="col-lg-6 col-md-6 padbot30">
					                    
						<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.160538954254!2d-80.37991605667595!3d25.79827724974558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9beba002b58f5%3A0xd4131d77fe2e3246!2sMayoristas+de+Opticas!5e0!3m2!1ses-419!2sar!4v1500728178710" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div>
					
					<div class="col-lg-3 col-md-3 col-sm-6 padbot30">
						<ul class="contact_info_block">
							<li>
								<h3><i class="fa-solid fa-location-dot"></i><b>Locación</b></h3>
								
								<span>2618 NW 112th Ave. Miami, FL, 33172. EE.UU.</span>
							</li>
							<li>
								<h3><i class="fa-solid fa-phone"></i><b>Teléfonos</b></h3>
								<p class="phone">+ 1 (305) 513-9177</p>
								<p class="phone">+ 1 (305) 513-9191</p>
                                <p class="phone">+ 1 (305) 513-9199</p>
							</li>
							<li>
								<h3><i class="fab fa-whatsapp"></i><b>WhatsApp</b></h3>
								<p class="phone">+1 305 315 8267​</p>
							</li>
							<li>
								<h3><i class="fa-solid fa-envelope"></i><b>E-mail</b></h3>
								
								<a href="mailto:doralice@mayoristasdeopticas.com">doralice@mayoristasdeopticas.com</a>
							</li>
						</ul>
					</div>
					
					<div class=" col-md-3 col-sm-6 padbot30">
					<div class="_form_7"></div><script src="https://mdo.activehosted.com/f/embed.php?id=7" type="text/javascript" charset="utf-8"></script>

					</div>
				</div><!-- //ROW -->
			</div><!-- //CONTAINER -->
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
  <script src="assets/js/src/paginas/envioHandler.js"></script>
  <style>
.contact_info_block li {
    margin-bottom: 17px;
    padding-bottom: 14px;
    border-bottom: 1px solid #e9e9e9;
}

  </style>
</body>

</html>