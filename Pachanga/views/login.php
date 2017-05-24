<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
  <link rel="stylesheet" href="assets/css/login.css">
</head>

  <body class="back">




    <div class="container">
        <div class="formulario formulario-container">
          <div class="header-formulario">
            <div class = "centrar"><a href="index.html"><img class = "logo-formulario" src="img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a></div>
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
                  <input type="text" name = "username" class="form-control " id ="username" placeholder="Username" onchange="checkUser()" autofocus required>
                  <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>


                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" name = "password" class="form-control" id ="pass" placeholder="Contraseña" onchange="checkPass()" required>
                  <span id="passSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="passError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div>

                <br>

                <div class="links">
                    ¿Todavía no eres miembro?<br><a href="signUp.html">Regístrate ahora</a>
                </div>

                <br>

                <div class = "centrar"><button type="button"  onclick="window.location.href='index.html'" class="btn-formulario cancelbtn">Cancel</button>
                <button type="submit" class="btn-formulario sendbtn"> Entrar </button></div>
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
