<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Contacto</title>


  <?php
    // Mostramos distinto header si el usuario ha iniciado sesión
    if(isset($_SESSION['loggedin'])){
        echo "<link rel='stylesheet' href='assets/css/inicio.css'>";
    }else{
        echo "<link rel='stylesheet' href='assets/css/index.css'>";
    }
  ?>

<link rel='stylesheet' href='assets/css/auxiliary.css'>

</head>

<body>

  <header>
    <?php
      // Mostramos distinto header si el usuario ha iniciado sesión
      if(isset($_SESSION['loggedin'])){
          require_once('layout/header.php');
      }else{
          require_once('layout/headerIndex.php');
      }
    ?>
  </header>


    <!-- Used to define the background part -->
    <div id = "cabecera" >

    </div>


    <div id = "contenedor">

      <!-- Contain for the shadow -->
      <div id = "sombra" class="container">
      <!-- contendor/sombra -->
      </div>

      <!-- Main container -->
      <div id ="body" class="container">
        <a id ="contacto"></a>
        <br><br>
        <div class="centrar">
          <h1>Contacto</h1>
        </div>
        <br>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
              <form class="form-contacto" action="MAILTO:borjalor@ucm.es" method="post" enctype="text/plain">
                <fieldset>


                <br />Nombre:<br />
                <label for="username"></label>
                <input type="text" id="username" name="name" placeholder="Nombre Completo" required><br>
                <br />E-mail:<br />
                <input type="text" name="mail" placeholder="Email de contacto" required><br>

                <br />Tipo de consulta:<br />
                <label for="evaluacion"></label>
                <input type="radio" id="evaluacion" name="consulta" value="evaluacion" required> Evaluación <br />
                <label for="sugerencias"></label>
                <input type="radio" id="sugerencias" name="consulta" value="sugerencias" required> Sugerencias <br />
                <label for="criticas"></label>
                <input type="radio" id="criticas" name="consulta" value="criticas" required> Críticas <br />



                <br />Consulta<br />
                <label for="comment"></label>
                <input type="text" id="comment" name="comment" placeholder="Escriba aquí su consulta." ><br /><br />

                <label for="verify"></label>
                <input name="java" id="verify" type="checkbox" value="on" required> Marque esta casilla para verificar que ha leído
                nuestros términos y condiciones del servicio.  <br /><br />

                <div class="centrar">
                  <label for="borrar"></label>
                  <input type="reset" id="borrar" class="btn btn-danger button-ver-sin-float" value="Borrar">
                  <label for="enviar"></label>
                  <input type="submit" id="enviar" class="btn btn-warning button-ver-sin-float" value="Enviar">
                </div>

                </fieldset>
              </form>
            </div>
          </div>

        </div>
        <br><br>

        <br>
        <!-- body -->
      </div>
    </div>

  <!-- ******************************************LOGIN******************************************-->

    <div  id = "login" class="container backgroundFormulario">
        <div class="formulario formulario-container animateFormulario">
          <div class="header-formulario">
            <div class="centrar">
              <a href="<?php echo $helper->url('view', 'home'); ?>"><img class="logo-formulario" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"></a>
            </div>

                  <span onclick="changeFormulario('login')" class="closeFormulario" title="Close">&times;</span>
          </div>

          <div class="body-formulario">

            <div class="centrar">
                <h3>Iniciar Sesión</h3>
            </div>

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
                    ¿Todavía no eres miembro?<br><a onclick="changeFormulario('signUp')">Regístrate ahora</a>
                </div>

                <br>

                <div class="centrar">
                  <button onclick="changeFormulario('login')" type="button" class="btn btn-danger">Cancel</button>
                  <button type = "submit" class="btn btn-warning"> Entrar </button>
                </div>

            </form>
          <!-- formulario-container -->
          </div>
        <!-- login formulario-container -->
        </div>
    <!-- container -->
    </div>

        <div  id = "signUp" class="container backgroundFormulario">
            <div class="formulario formulario-container animateFormulario">
              <div class="header-formulario">
                <div class="centrar">
                  <a href="<?php echo $helper->url('view', 'home'); ?>"><img class = "logo-formulario" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>
                </div>

                <span onclick="changeFormulario('signUp')" class ="closeFormulario" title="Close">&times;</span>
              </div>

              <div class="body-formulario">
                <div class="centrar">
                    <h3>Registrarse</h3>
                </div>

                <form action="<?php echo $helper->url('usuarios' , 'register') ?>" method="post">

                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <label for="username"></label>
                      <input type="text" title="El nombre de usuario debe tener más de 4 caracteres" class="form-control" id="username" name="username" placeholder="Username" onchange="checkUser(this, 'Register')" required>
                      <span id="usernameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="usernameErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                      <label for="name"></label>
                      <input type="text" class="form-control" id="name" name="nombre" placeholder="Nombre Completo" onchange="checkNombre(this, 'Register')" required>
                      <span id="nombreSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="nombreErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>
                    <br>
                    <div class="input-group ">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <label for="distrito"></label>
                      <select name="distrito" id="distrito" class="form-control buscar-partido-distrito" required>
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
                    <br>

                    <!-- distrito -->

                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <label for="email"></label>
                      <input type="text" class="form-control" id ="email" name="mail" placeholder="Correo electrónico" onchange="checkEmail()" required>
                      <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                      <span id="emailError" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <label for="pass"></label>
          						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name="password" id="pass" placeholder="Contraseña" onchange="checkPass(this, 'Register')" required>
                      <span id="passSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="passErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <label for="pass2"></label>
          						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name="password2" id="pass2" placeholder="Repetir Contraseña" onchange="checkPass2()">
                      <span id="pass2Succes" class="glyphicon glyphicon-ok"></span>
                      <span id="pass2Error" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

                    <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div>

                    <br>

                    <div class="links">
                        ¿Ya tienes cuenta?<br><a onclick="changeFormulario('login')"> Iniciar Sesión</a>
                    </div>

                    <br>

                    <div class="centrar">
                      <button  onclick="changeFormulario('signUp')" type="button" class="btn-formulario cancelbtn">Cancel</button>
                      <button type = "submit" class="btn-formulario sendbtn"> Entrar </button>
                    </div>

                </form>
              <!-- formulario-container -->
              </div>
            <!-- register formulario-container -->
            </div>
        <!-- container -->
  </div>

  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
  </body>

</html>
