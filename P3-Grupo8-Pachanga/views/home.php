<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <meta name="google-site-verification" content="taAz-qIoH9i4z1K32g29Quxdz_u6LqyTWc1MaJmHpvs" />
  <title>Pachanga</title>
  <link rel="stylesheet" href="assets/css/index.css">
  <link rel="stylesheet" href="assets/css/datosPartido.css">
</head>

<body>

    <header>
      <?php require_once('layout/headerIndex.php'); ?>
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

        <div class="container-fluid">
          <div id="carousel-home" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-home" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-home" data-slide-to="1"></li>
              <li data-target="#carousel-home" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">
              <div class="item active">
                <img class="" src="./assets/img/carousel/1.jpg" alt="...">
                <div class="carousel-caption">
                  <h3>Pachanga es una aplicación para amantes del fútbol, que permite jugar partidos con otras personas.</h3>
                </div>
              </div>
              <div class="item">
                <img class="" src="./assets/img/carousel/2.jpg" alt="...">
                <div class="carousel-caption">
                  <h3>Pachanga participa en proyectos para reducir la obesidad infantil mediante el deporte.</h3>
                </div>
              </div>
              <div class="item">
                <img class="" src="./assets/img/carousel/3.jpg" alt="...">
                <div class="carousel-caption">
                  <h3>Realiza una donación para la construcción de canchas de fútbol en los barrios más pobres de Myanmar, Tailandia, Vietnam y Camboya.</h3>
                </div>
              </div>

              <!-- Controls -->
              <a class="left carousel-control" href="#carousel-home" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
              </a>
              <a class="right carousel-control" href="#carousel-home" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
              </a>
            </div>
          </div> <!-- Carousel -->
        </div>

        <a id ="info"></a>
        <div class="centrar">
          <h1>¿Qué es Pachanga?</h1>
        </div>
        <hr><br>
        <div class="container-fluid">
          <h4 class="centrar">
            Pachanga es una red social para unir a la gente en el deporte, en especial el fútbol.
            Los usuarios pueden crear partidos y jugar con otras personas. La aplicación tiene registrados
            52 polideportivos en los 21 distritos de Madrid.
          </h4>
          <br><br>
          <div class="map-responsive margen_top_title">
            <iframe title="Mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d97173.97825985964!2d-3.749575949246259!3d40.43793316652326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a3c81%3A0xc436dec1618c2269!2sMadrid!5e0!3m2!1ses!2ses!4v1496408285824" width="1000" height="450" style="border:0" allowfullscreen></iframe>
          </div>
          <br><br>
        </div>
        <div class="container-fluid">
          <div class="row ">
            <div class="col-sm-6 col-md-3 col-lg-3 ">
              <img src="assets/img/info/campo.png"  class="img-responsive imagen-info" alt="">
              <br>
              Es una manera divertida de organizar pachangas de fútbol y conocer gente nueva.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="assets/img/info/heart.png"  class="img-responsive imagen-info " alt="">
              <br>
              Te mantiene en forma practicando tu deporte favorito.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="assets/img/info/friends.png"  class="img-responsive imagen-info" alt="">
              <br>
              Es una buenísima forma de pasártelo bien con tus amigos.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="assets/img/info/ball.png"  class="img-responsive imagen-info" alt="">
              <br>
              Te permite mejorar como jugador y como persona, con un sistema de rating de usuarios.
            </div>
          <!-- row -->
          </div>
          <br><br>
          <a href="http://www.newbalance.es"><img class="img-responsive" src="assets/img/resources/banner1.jpg" alt="Banner"></a>
          <br><br>
        <!-- container-fluid 1 -->
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

                  <span onclick="changeFormulario('login')" onkeypress="changeFormulario('login')" class="closeFormulario" title="Close">&times;</span>
          </div>

          <div class="body-formulario">

            <div class="centrar">
                <h3>Iniciar Sesión</h3>
            </div>

            <form action="<?php echo $helper->url('usuarios' , 'login') ?>" method="post">

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" title="" name="username" class="form-control" placeholder="Username" autofocus required>
                  <span id="usernameSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" title="" name = "password" class="form-control" placeholder="Contraseña" required>
                  <span id="passSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="passErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>
                <br>
                <div class="links">
                    ¿Todavía no eres miembro?<br><a onclick="changeFormulario('signUp')">Regístrate ahora</a>
                </div>

                <br>

                <div class="centrar">
                  <button type="reset" onclick="changeFormulario('login')" onkeypress="changeFormulario('login')" class="btn btn-danger button-ver-sin-float">Cancel</button>
                  <button type = "submit" class="btn btn-warning button-ver-sin-float"> Entrar </button>
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

                <span onclick="changeFormulario('signUp')" onkeypress="changeFormulario('login')" class ="closeFormulario" title="Close">&times;</span>
              </div>

              <div class="body-formulario">
                <div class="centrar">
                    <h3>Registrarse</h3>
                </div>

                <form action="<?php echo $helper->url('usuarios' , 'register') ?>" method="post">

                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" class="form-control" title="El nombre de usuario debe tener más de 4 caracteres" name="username" placeholder="Username" onchange="checkUser(this, 'Register')" required>
                      <span id="usernameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="usernameErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-tag"></span></span>
                      <input type="text" class="form-control" title="" name="nombre" placeholder="Nombre Completo" onchange="checkName(this, 'Register')" required>
                      <span id="nameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="nameErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>
                    <br>
                    <div class="input-group ">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <select title="" name="distrito" class="form-control buscar-partido-distrito" required>
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
                      <input type="text" title="" class="form-control" id ="email" name="mail" placeholder="Correo electrónico" onchange="checkEmail()" required>
                      <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                      <span id="emailError" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name = "password" id = "pass" placeholder="Contraseña" onchange="checkPass(this, 'Register')" required>
                      <span id="passSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="passErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          						<input type="password" title="La contraseña debe tener más de 4 caracteres" class="form-control" name = "password2" id ="pass2" placeholder="Repetir Contraseña" onchange="checkPass2()">
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
                      <button  type="reset" onclick="changeFormulario('signUp')" class="btn btn-danger button-ver-sin-float">Cancel</button>
                      <button id = "submit"  type = "submit" class="btn btn-warning button-ver-sin-float"> Entrar </button>
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
