<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Sobre nosotros</title>


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
      <br>
      <!-- Main container -->
      <div id ="body" class="container">
        <div class="container legal">
          <div class="row ">
            <div class="col-sm-6 col-md-3">
              <img src="assets/img/miembros/andres.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <h3 class="centrar">Andrés Herranz</h3><br>
              <p class = "justificar">Apasionado de la seguridad informática y el pentesting, obsesionado con la seguridad:
              ¡Nos están vigilando!. Me gustan los juegos de mesa y los juegos de rol.
              En mis ratos libres juego al baloncesto. Me gusta ayudar a la gente.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="assets/img/miembros/axel.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <h3 class="centrar">Axel Junestrand</h3><br>
              <p class = "justificar">Me gusta recorrer el mundo en barco, he visitado más de 100 paises diferentes.
              Me gusta conocer gente y descubir culturas. Me apasiona la programación web sobre todo el diseño front end
              y el desarrollo de aplicaciones web y móvil.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="assets/img/miembros/borja.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <h3 class="centrar">Borja Lorenzo</h3><br>
              <p class = "justificar"> Diseñador gráfico, apasionado por la programación en todo tipo de lenguajes, me encanta diseñar
              y arreglar mis propias cosas. En mi tiempo libres me dedico a aprender, investigar y leer.
              Me encanta viajar, conocer gente y hacer nuevos amigos.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="assets/img/miembros/guille.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <h3 class="centrar">Guillermo Rius</h3><br>
              <p class = "justificar">Interesado en la BIG DATA y el machine learning, dedico mis horas al desarrollo de algoritmos inteligentes,
              me gusta el internet de las cosas (IOT) sobretodo si la puedo relacionar con los coches: Mi gran pasión.
              Amante de la velocidad y los coches rápidos.</p>
            </div>
          <!-- row -->
          </div>
        </div>
        <br><br>
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
