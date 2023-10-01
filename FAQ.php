
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
          <span></span> FAQ
        </div>
      </div>
    </div>
    <section class="mt-50 mb-50">
     	<!-- CONTAINER -->
			<div class="container">
			
      <!-- ROW -->
      <div class="row">
        
        <!-- FAQ BLOCK -->
        <div class="col-lg-10 col-md-10 col-sm-10 padbot30">
          <div class="title2">
            <p>Por favor, seleccione el área a la que pertenece su pregunta.</p>
            
          </div>
          
          <!-- Accordion -->
          <div id="accordion">
            
            <h4 class="accordion_title">CONTACTO</h4>
            <div class="accordion_content">
                                          <p>1. Cuál es su horario de Oficina?<br>
                          Nuestra oficina esa abierta de 8:30AM  a 4:30PM., de Lunes a Viernes.</p>
                                          <p>2. Cómo puedo contactarlos?<br>
                          Puedes contactarnos fácilmente por Whastapp a los Tel +1/786-800-0990 y +1/305-316-8267. <br>
                          También por e-mail: ventas@mayoristasdeopticas.com o al  Teléfono: +1 (305) 513-9177<br>
                          <p>3. ¿Cuál es su dirección? Nuestra dirección es 2618 NW 112 Ave. Miami, FL 33172, USA <br />
                          (A 35  minutos del Aeropuerto Internacional de Miami  y 4 cuadras del Dolphin Mall)
                          </p>
                          <p>4. Cuáles son los números de teléfono, en caso que me encuentre en Miami y quiera conectarme directamente con Ustedes? <br>
                          Puedes contactarnos a los siguientes teléfonos:  Fijo: 305-513-9177, Celulares +1/786-800-0990 ó +1/305-316-8267
                          </p>
                          <p>5. Puedo llamar del aeropuerto para comprar en su bodega?<br>
                          A fin de poder brindarte  una mejor experiencia, organizamos siempre a nuestros clientes con citas previas que ellos realizan con anticipación desde nuestro <a href="https://calendly.com/mdoinc">Calendario Público</a>. Sin embargo con gusto intentaremos acomodar tu visita en nuestra sala de muestras con un corto aviso.
                          </p>
                          <p>6. Debo hacer una cita desde mi país para asegurarme que estén atendiendo y que no sea feriado en USA? <br />
                          A fin de poder brindarte  una mejor experiencia, organizamos siempre a nuestros clientes con citas previas que ellos realizan con anticipación desde nuestro <a href="https://calendly.com/mdoinc">Calendario Público</a>. Ante la duda de si estaremos abiertos en un día festivo, siempre es buena idea contactarnos con anterioridad a los Whatsapp +1/786-800-0990 & 305-316-8267 o al e-mail <a href="mailto:clientes@mayoristasdeopticas.com"> clientes@mayoristasdeopticas.com</a>  para confirmar ese detalle con nosotros antes de tu visita.
                          </p>
                          <p>7. Para visitarlos a Ustedes cuál es la mejor opción: ir a Miami o a las Ferias? <br />
                          Para visitarnos la mejor opción es venir a nuestra Sala de Muestras en Miami, ya que podrás realizar tu compra en un ambiente más relajado y personalizado. La feria del Bascom Palmer es también una buena oportunidad para  aprovechar tu asistencia al Congreso de Oftalmología y realizar una compra directamente desde nuestro stand, sólo por favor nota que allí no podremos brindarte una atención tan personalizada como lo haríamos en nuestra sala de muestras, debido al mismo ritmo que la feria genera.
                          </p>

            </div>
            <h4 class="accordion_title">PAGO</h4>
            <div class="accordion_content">
              <p> ¿Qué formas de pago aceptan? <br />

                              Aceptamos los siguientes métodos de pago:<br />

                               - Transferencia Bancaria 
                               
                               - Western Union.<br />
                              </p>
            </div>
            <h4 class="accordion_title">MARCAS</h4>
            <div class="accordion_content">
              <p>1. Qué productos me ofrece?<br>
Armazones Oftálmicos y de Sol de marcas reconocidas mundialmente,  Lentes Oftálmicas Accesorios para Ópticas,  Exhibidores… Y mucho más.
                              </p>
              <p>2. Cuáles son las colecciones que Ustedes producen? <br />
Nuestras colecciones exclusivas son <b>Verona Love, Brimstone & Snowberry</b>.
                              </p>
            <p>3. ¿Todos sus productos son originales?  <br />
Sí, todos nuestros productos son originales. Algunos son saldos y otros,  de colecciones actuales</p>
<p>4. ¿Cada cuánto llegan nuevos modelos y marcas? <br />
Nuestro stock esta en constante reposición. Aconsejamos a nuestros clientes visitar nuestra tienda virtual al menos una vez a la semana, para no perderse de ningún arribo. Si deseas recibir nuestro e-mail Newsletter con el aviso de todo lo último que vayamos recibiendo, por favor háznoslo saber a clientes@mayoristasdeopticas.com, con gusto te agregaremos a nuestra lista para que no te pierdas de ninguna novedad!</p>

<p>5. Todos los armazones y gafas vienen con sus estuches? <br />
La mayoría de nuestros armazones oftalmicos  y gafas solares vienen con su estuche original. Sin embargo, existen muy pocos casos en los que no lo tienen, o tienen estuches genéricos. Siempre podrás confirmar esto prestando atención a la descripción del producto.</p>
<p>6. ¿Tienen material promocional para los modelos de sus colecciones?  <br />
Si, tenemos material POP  publicitario para que luzcas en tu óptica.</p>
<p>7. ¿Ofrecerán más Marcas Famosas? ¿Y  las que tienen ahora siempre estarán disponibles?  <br />
Sí, somos un Outlet con más de 30 años de experiencia. Siempre introducimos marcas nuevas y reconocidas. Las marcas que tenemos actualmente difícilmente se agoten; si bien los modelos van cambiando. Constantemente llegan nuevos modelos.</p>

<p>8¿.Como cliente puedo sugerirles algunas marcas que me interesan en el futuro?  <br />
Si, todas tus  sugerencias son extremadamente importantes para nosotros, y son muy tomadas en cuenta.</p>
<p>9. En las gafas y monturas de Marcas Famosas ¿Porqué algunas marcas son tan económicas?  <br />
Algunas de las marcas están de oferta porque son modelos descontinuados recientes. Nuestra misión es  poder brindarte las mejores marcas, al mejor  precio Outlet.</p>
<p>10. En las gafas y monturas de Marcas Famosas el inventario varía mucho. ¿Tienen todo lo que aparece en la tienda virtual? <br />
Si, La tienda se actualiza automáticamente segundo a segundo, el inventario varía dependiendo de la demanda del mercado.</p>
<p>11. Los cristales que venden son genéricos?  <br />
Ofrecemos lentes genéricos y también de marcas reconocidas.</p>

<p>12. ¿Dónde estan fabricados sus productos?:  <br />
Si bien el origen de nuestros productos es variado, gran parte de ellos están fabricados en Asia, Italia y Francia.</p>

            </div>
            
          
            
            <h4 class="accordion_title">ENVIO</h4>
            <div class="accordion_content">
              <p>1. ¿Me pueden dar idea de cuánto me cuesta el envío?<br />
                                  El costo de tu envío dependerá  del peso y  dimensión del mismo, y  también de su destino. Por favor contáctanos directamente para poder brindarte un estimado del mismo al Whatsapp +1/786-800-0990.</p>
                                  <p>2. ¿Los precios incluyen impuestos?<br />
                                  Los precios que ves publicados en nuestra tienda ya son netos, y no se les aplica ningún impuesto de venta extra.</p>
                                  <p>3. Los precios incluyen el costo de envío?<br />
                                  No, los precios  de los productos no incluyen el costo de envío. El mismo es calculado aparte y depende del peso, dimensión y destino de tu carga.</p>
                                  <p>4. ¿Cómo se realizan los envíos?<br />
                                  El tipo de envío utilizado depende del país hacia donde necesites el servicio. Hacia muchos destinos utilizamos el servicio de EMS (Express Mail Service) Sin embargo, existen ciertos países hacia los cuales es más simple enviar con un transportista. Por favor contáctanos directamente por Whastapp para poder asistirte mejor con esta consulta: +1/786-800-0990.</p>
                                  <p>5. Pueden enviar mi mercancía a una dirección en los EEUU?<br />
                                  Si, podemos enviarla a cualquier dirección dentro de USA que nos indiques.</p>
                                  <p>6. ¿Cuánto cuesta el envío dentro de los EEUU.?<br />
                                  El envío dentro de los Estados Unidos tiene los siguientes costos<br />
                                  ► US$15 dentro de Miami por cada caja de hasta 125 piezas<br />
                                  ► US$30 hacia el resto de USA Continental, por cada caja de hasta 125 piezas.</p>
                                  <p>7. ¿Puedo enviar a alguien de mi confianza a retirar mi paquete?<br />
                                  Si, puedes enviar a alguien a retirar tu paquete. Sólo necesitaremos  que nos envíes una autorización por e-mail para entregar el paquete.</p>
                                  <p>8. ¿Le pueden enviar la mercancía a mi agente de transporte en Miami?<br />
                                  Si, podemos enviar tu paquete hacia tu transportista en Miami (El costo de este envío es como detallado anteriormente). </p>

            </div>
            
            <h4 class="accordion_title">PEDIDOS</h4>
            <div class="accordion_content">
              <p>1. ¿Puedo realizar una compra al por menor?<br />
                                  Lo sentimos, nuestra venta es unicamente al por mayor.</p>
                                  <p>2. ¿Cuál es el  mínimo de compra?<br />
                                  El mínimo de compra es de 30 unidades (iguales o mixtas)</p>
                                  <p>3. ¿Cuánto es el mínimo para compra en los lentes oftálmicos terminados o semiterminados?<br />
                                  El mínimo de compra para lentes oftálmicos es de 200 pares.</p>
                                  <p>4. Cuál es el proceso de compra para armazones , gafas y demás productos en su tienda?<br />
                                  <b>Realizar una compra es super sencillo.</b> Solo sigue los siguientes pasos<br />
                                  -ABRE la pagina de nuestra tienda virtual www.mayoristasdeopticas.net<br />
                                  -INGRESA tu usuario y contraseña (Si aún no tienes cuenta, deberás crearla haciendo clic en “Registrarse”.)<br />
                                  -CARGA las piezas que deseas a tu carrito virtual. Una vez tengas tu selección lista...<br />
                                  -Comenzaremos a procesar tu pedido apenas recibamos tu pago y lo enviaremos a la dirección de USA que hayas confirmado durante el proceso de compra(*en caso de ser un envío directo a tu pais, cotizamos el mismo una vez hayamos empacado tu pedido y te enviaremos la proforma con el valor del mismo para puedas puedas realizar el pago.)</p>

                                  <p>5. En los lentes oftálmicos el proceso es el mismo?<br />
                                  No, para realizar una orden de lentes oftálmicos, por favor contáctanos directamente al Whatsapp: +1/786-800-0990 o al e-mail: <a href="mailto:clientes@mayoristasdeopticas.com">clientes@mayoristasdeopticas.com</a> para poder coordinar tu pedido.</p>
                                  <p>6. Venden lentes intraoculares?<br />
                                  Lo sentimos, no ofrecemos lentes intraoculares.</p>
                                  <p>7. Que tipo de venta realiza Mayoristas de Opticas? <br />
                                  Nuestro tipo de venta es FOB MIAMI- Depósito MDO INC </p>

            </div>
            
          
            
            
          
            
            
            
          </div><!-- //Accordion -->
          
        </div><!-- //FAQ BLOCK -->
     </div>   
    </section>
  </main>
  <!-- Pie de pagina -->
  <?php require "./layouts/footer.php"; ?>
  <script src="assets/js/src/paginas/envioHandler.js"></script>
  <style>

/* __________ Accordion __________ */
#accordion {padding-top:11px;}
#accordion h4.accordion_title {
	position:relative;
	margin:0;
	padding:16px 0 17px 50px;
	text-transform:none;
	line-height:26px;
	font-size:15px;
	color:#83217a;
	font-weight:900;
	border-top:1px solid #e9e9e9;
	cursor:pointer;
	transition: color 0.3s ease-in-out;
	-webkit-transition: color 0.3s ease-in-out;
}
#accordion h4.accordion_title:hover {color:#242424;}
#accordion h4.accordion_title.active {border-top:2px solid #333;}
#accordion h4.accordion_title:before {
	content: "\f105";
	position:absolute;
	left:2px;
	top:12px;
	width:35px;
	height:35px;
	font-family: "Font Awesome 5 Free";
	font-weight:bold;
	text-indent:2px;
	line-height:30px;
	text-align:center;
	font-size:20px;
	color:#83217a;
	border:2px solid #83217a;
	border-radius:50%;
	transition: all 0.3s ease-in-out;
	-webkit-transition: all 0.3s ease-in-out;
}
#accordion h4.accordion_title:hover:before {
	color:#333;
	border-color:#333;
}
#accordion h4.accordion_title.active:before {
	color:#fff;
	border-color:#333;
	background-color:#333;
	transform:rotate(90deg);
	-o-transform:rotate(90deg);
	-ms-transform:rotate(90deg);
	-webkit-transform:rotate(90deg);
}

#accordion .accordion_content {
	display:none;
	padding:13px 0 3px 50px;
	line-height:24px;
	font-size:12px;
}
#accordion .accordion_content p {margin-bottom:24px;}


.title2 p {
    line-height: 24px;
    font-size: 13px;
    background-color: #83217a;
    padding: 20px;
    color: #fff;
    text-transform: uppercase;
  }










  </style>
  <script>
/*-----------------------------------------------------------------------------------*/
/*	ACCORDION TOGGLES
/*-----------------------------------------------------------------------------------*/
$(document).ready(function(){
	
	$("#accordion h4").eq(0).addClass("active");
	$("#accordion .accordion_content").eq(0).show();

	$("#accordion h4").click(function(){
		$(this).next(".accordion_content").slideToggle("slow")
		.siblings(".accordion_content:visible").slideUp("slow");
		$(this).toggleClass("active");
		$(this).siblings("h4").removeClass("active");
	});

});

  </script>
</body>

</html>