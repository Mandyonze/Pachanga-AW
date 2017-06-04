<!DOCTYPE html>
<html lang="es">

  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Registro</title>
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

            <form action="<?php echo $helper->url('usuarios' , 'register'); ?>" method="post">

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" title="El nombre de usuario debe tener más de 4 caracteres" class="form-control " name="username" id ="username" placeholder="Username" onchange="checkUser(this, 'Register')" required autofocus>
                  <span id="usernameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameErrorRegister" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                  <input type="text" class="form-control " name="nombre" id ="nombre" placeholder="Nombre Completo" onchange="checkName(this, 'Register')" required>
                  <span id="nameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                  <span id="nameErrorRegister" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group ">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                  <select name="distrito" class="form-control buscar-partido-distrito" required>
                    <option selected disabled hidden value="">Distrito</option>
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
                  <input type="text" class="form-control" name="mail" id ="email" placeholder="Correo electrónico" onchange="checkEmail(this, 'Register')" required>
                  <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                  <span id="emailError" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>


      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name="password" id ="pass" placeholder="Contraseña" onchange="checkPass(this, 'Register')" required>
                  <span id="passSuccesRegister" class="glyphicon glyphicon-ok"></span>
                  <span id="passErrorRegister" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

      					<div class="input-group">
      						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
      						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name="password2" id ="pass2" placeholder="Repetir Contraseña" onchange="checkPass2(this, 'Register')" required>
                  <span id="pass2Succes" class="glyphicon glyphicon-ok"></span>
                  <span id="pass2Error" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <!-- <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div> -->

                <br>

                <div class="links">
                    ¿Ya tienes cuenta?<br><a href="<?php echo $helper->url('view', 'login'); ?>"> Iniciar Sesión</a>
                </div>

                <br>

                <div class = "centrar"><a href="<?php echo $helper->url('view', 'home'); ?>'" class="btn btn-danger button-ver-sin-float">Cancel</a>
                <button  id = "submit"  type="submit" class="btn btn-warning button-ver-sin-float mouse-over"> Entrar </button></div>
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
