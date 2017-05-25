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
            <div class = "centrar"><a href="index.html"><img class = "logo-formulario" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a></div>
          </div>

          <div class="body-formulario">
            <?php if (isset($_GET["error"])) {
              $error = $_GET["error"];
              echo "<div class='alert alert-danger'>";
              if($error == 1){
                echo "<strong> ERROR! </strong> El usuario ya está registrado";
              }
              elseif ($error == 2) {
                echo "<strong> ERROR! </strong> Las contraseñas no coinciden";
              }
              echo "</div>";
            }
            ?>
            <div class = "centrar"><h3>Registrarse</h3></div>

            <form action="<?php echo $helper->url('usuarios' , 'register') ?>" method="post">

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control " name="username" id ="username" placeholder="Username" onchange="checkUser()">
                  <span id="usernameSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                  <select name="distrito" class="form-control buscar-partido-distrito" required>
                    <option selected disabled hidden>Distrito</option>
                    <?php
                      foreach ($distritos as $distrito) {
                        echo "<option>";
                        echo $distrito->getId();
                        echo "</option>";
                      }
                     ?>
                  </select>
                </div>

                <!-- distrito -->

                <br>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input type="text" class="form-control" name="id" id ="email" placeholder="Correo electrónico" onchange="checkEmail()">
                  <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="emailError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>


      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" class="form-control" name = "password" id ="pass" placeholder="Contraseña" onchange="checkPass()">
                  <span id="passSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="passError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" class="form-control" name = "password2" id ="pass2" placeholder="Repetir Contraseña" onchange="checkPass2()">
                  <span id="pass2Succes" class="glyphicon glyphicon-ok"></span>
                  <span id="pass2Error" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div>

                <br>

                <div class="links">
                    ¿Ya tienes cuenta?<br><a href="index.html"> Iniciar Sesión</a>
                </div>

                <br>

                <div class = "centrar"><button type="button" onclick="window.location.href='index.html'" class="btn-formulario cancelbtn">Cancel</button>
                <button type="button" onclick="window.location.href='inicio.html'" class="btn-formulario sendbtn"> Entrar </button></div>
            </form>
          <!-- formulario-container -->
          </div>
        <!-- register formulario-container -->
        </div>
    <!-- container -->
    </div>

    <?php require_once('layout/script.php'); ?>
  </body>
</html>
