<?php

error_reporting(E_ALL);
ini_set('display_errors', '0');

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
              <form class="row g-3 needs-validation" novalidate>
                <div class="form-group">
                  <label for="compania">Nombre de la compañía</label>
                  <input type="text" class="form-control" id="compania" value="<?= $cliente['data']['nombre']; ?>" required>
                  <div class="invalid-feedback">
                    Ingrese el nombre de la compañia.
                  </div>
                </div>
                <div class="form-group">
                  <label for="direccion">Dirección</label>
                  <input type="text" class="form-control" id="direccion" value="<?= $cliente['data']['direccion']; ?>" required>
                  <div class="invalid-feedback">
                    Ingrese la Dirección.
                  </div>
                </div>
                <div class="row">
                  <div class="col-4">
                    <div class="form-group">
                      <label for="pais">País</label>
                      <input type="text" class="form-control" id="pais" value="<?= $cliente['data']['pais']; ?>" required>
                      <div class="invalid-feedback">
                        Ingrese el País.
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="ciudad">Ciudad</label>
                      <input type="text" class="form-control" id="ciudad" value="<?= $cliente['data']['ciudad']; ?>" required>
                      <div class="invalid-feedback">
                        Ingrese la Ciudad.
                      </div>
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="form-group">
                      <label for="codigo-postal">Código Postal</label>
                      <input type="text" class="form-control" id="codigo-postal" value="<?= $cliente['data']['codigoPostal']; ?>" required>
                      <div class="invalid-feedback">
                        Ingrese el Código Postal.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" value="<?= $cliente['data']['email']; ?>" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}" title="Por favor, ingrese un formato de correo electrónico válido" required>
                  <div class="invalid-feedback">
                    Por favor, ingrese un formato de correo electrónico válido.
                  </div>
                </div>
                <div class="form-group">
                  <label for="telefono">Teléfono</label>
                  <input type="tel" class="form-control" id="telefono" value="<?= $cliente['data']['telefono']; ?>" required>
                  <div class="invalid-feedback">
                    Ingrese el Teléfono.
                  </div>
                </div>
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" class="form-control" id="usuario" value="" autocomplete="new-password" required>
                  <div class="invalid-feedback">
                    Ingrese el Usuario.
                  </div>
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" value="" autocomplete="new-password" required>
                  <div class="invalid-feedback">
                    La contraseña debe tener al menos 10 caracteres.
                  </div>
                </div>
                <div class="form-group">
                  <label for="confirm-password">Repetir Contraseña</label>
                  <input type="password" class="form-control" id="confirm-password" value="" autocomplete="new-password" required>
                  <div class="invalid-feedback">Las contraseñas no coinciden</div>
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
  <script>
    // Función para mostrar el preloader
    function showPreloader() {
      $('#preloader-active').fadeIn('slow');
    }

    // Función para ocultar el preloader
    function hidePreloader() {
      $('#preloader-active').fadeOut('slow');
    }

    (function() {
  'use strict';

  var forms = document.querySelectorAll('.needs-validation');

  Array.prototype.slice.call(forms).forEach(function(form) {
    form.addEventListener('submit', function(event) {
      var passwordField = form.querySelector('#password');
      var confirmPasswordField = form.querySelector('#confirm-password');

      if (passwordField.value !== confirmPasswordField.value) {
        event.preventDefault();
        event.stopPropagation();
        confirmPasswordField.setCustomValidity('Las contraseñas no coinciden');
      } else {
        confirmPasswordField.setCustomValidity('');
      }

      if (passwordField.value.length < 10) {
        event.preventDefault();
        event.stopPropagation();
        passwordField.setCustomValidity('La contraseña debe tener al menos 10 caracteres');
      } else {
        passwordField.setCustomValidity('');
      }

      if (confirmPasswordField.value.length < 10) {
        event.preventDefault();
        event.stopPropagation();
        confirmPasswordField.setCustomValidity('La confirmación de contraseña debe tener al menos 10 caracteres');
      } else {
        confirmPasswordField.setCustomValidity('');
      }

      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      } else {
        event.preventDefault();

        showPreloader();

        // Crear un objeto con los datos del formulario
        var formData = {
          nombre: document.querySelector('#compania').value,
          direccion: document.querySelector('#direccion').value,
          pais: document.querySelector('#pais').value,
          ciudad: document.querySelector('#ciudad').value,
          codigoPostal: document.querySelector('#codigo-postal').value,
          email: document.querySelector('#email').value,
          telefono: document.querySelector('#telefono').value,
          usuario: document.querySelector('#usuario').value,
          clave: document.querySelector('#password').value
        };

        // Convertir el objeto a JSON
        var jsonData = JSON.stringify(formData);

        fetch(api + '/web/cliente', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json' // Establecer el tipo de contenido como JSON
          },
          body: jsonData
        })
        .then(function(response) {
          if (response.ok) {
            window.location.href = "/graciasAlta.php";
          } else {
            console.error('Error en la solicitud POST');
          }
          hidePreloader();
        })
        .catch(function(error) {
          console.error('Error en la solicitud POST', error);
          hidePreloader();
        });
      }

      form.classList.add('was-validated');
    }, false);
  });
})();
  </script>


</body>

</html>