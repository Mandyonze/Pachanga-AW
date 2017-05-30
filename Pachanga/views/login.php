<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
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
            <?php if (isset($error)) {
              echo "<div class='alert alert-danger'>";
              echo "<strong> ERROR! </strong> $error";
              echo "</div>";
            }
            ?>
            <div class = "centrar"><h3>Iniciar Sesión</h3></div>

              <form action="<?php echo $helper->url('usuarios' , 'login') ?>" method="post">
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
                <div class="links">
                    ¿Todavía no eres miembro?<br><a href="<?php echo $helper->url('view', 'register'); ?>">Regístrate ahora</a>
                </div>

                <br>

                <div class="centrar">
                  <a href="<?php echo $helper->url('view', 'home'); ?>" type="button" class="btn btn-danger button-ver-sin-float">Cancel</a>
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
  </body>
</html>
