<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Iniciar Sesión</title>
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/listaPartidos.css">
</head>

  <body class="back">


    <?php session_destroy() ?>

    <div class="container">
        <div class="formulario formulario-container">
          <div class="header-formulario">
            <div class = "centrar"><a href="<?php echo $helper->url('view', 'home'); ?>"><img class = "logo-formulario" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a></div>
          </div>

          <div class="body-formulario">
            <?php if (isset($error) && $error[0] == 1) {
              echo "<div class='alert alert-danger'>";
              echo "<strong> ERROR! </strong> Usuario o contraseña incorrecta!";
              echo "</div>";
            }
            if (isset($error) && $error[0] == 2) {
              echo "<div class='alert alert-danger'>";
              echo "<strong> ERROR! </strong> Rellene el captcha!";
              echo "</div>";
            }
            ?>
            <div class = "centrar"><h3>Iniciar Sesión</h3></div>

              <form action="<?php echo $helper->url('usuarios' , 'recaptchaLogin') ?>" method="post">
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" name = "username" class="form-control " placeholder="Username" autofocus required>
                  <span id="usernameSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name = "password" class="form-control" placeholder="Contraseña" required>
                  <span id="passSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="passErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>
                <br>
                <div class="g-recaptcha" data-sitekey="6LdVVRsUAAAAAJ51aHWOVGeTwQ7_TzJIU_bi-fjo" data-callback="recaptcha1"></div>
                <br>
                <div class="links">
                    ¿Todavía no eres miembro?<br><a href="<?php echo $helper->url('view', 'register'); ?>">Regístrate ahora</a>
                </div>

                <br>

                <div class="centrar">
                  <a href="<?php echo $helper->url('view', 'home'); ?>" class="btn btn-danger button-ver-sin-float">Cancel</a>

                  <!-- <button type = "submit" id="submitLogin" class="btn btn-warning button-ver-sin-float mouse-over"> Entrar </button> -->

                  <button type = "submit" id="submitLogin" class="btn btn-warning button-ver-sin-float mouse-over"> Entrar </button>

                </div>
            </form>
          <!-- formulario-container -->
          </div>
        <!-- login formulario-container -->
        </div>
    <!-- container -->
    </div>


  <?php require_once('layout/script.php'); ?>
  <script src='https://www.google.com/recaptcha/api.js'></script>

  </body>
</html>
