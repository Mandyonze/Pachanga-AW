<!DOCTYPE html>
<html lang="es">


  <head>
    <?php require_once('layout/library.php'); ?>
    <title>Home</title>

  </head>


  <body>
    <!-- Header -->
    <?php require_once('layout/headerIndex.php'); ?>

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
                <img class="" src="public/img/carousel/1.jpg" alt="...">
                <div class="carousel-caption">
                  <h3>Pachanga es una aplicación para amantes del fútbol, que permite jugar partidos con otras personas.</h3>
                </div>
              </div>
              <div class="item">
                <img class="" src="public/img/carousel/2.jpg" alt="...">
                <div class="carousel-caption">
                  <h3>Pachanga participa en proyectos para reducir la obesidad infantil mediante el deporte.</h3>
                </div>
              </div>
              <div class="item">
                <img class="" src="public/img/carousel/3.jpg" alt="...">
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
        <br>
        <div class="centrar">
          <h1>¿Qué es Pachanga?</h1>
        </div>
        <hr><br>

        <div class="container-fluid">
          <div class="row ">
            <div class="col-sm-6 col-md-3 col-lg-3 ">
              <img src="public/img/info/campo.png"  class="img-responsive imagen-info" alt="">
              <br>
              Es una manera divertida de organizar pachangas de fútbol y conocer gente nueva.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="public/img/info/heart.png"  class="img-responsive imagen-info " alt="">
              <br>
              Te mantiene en forma practicando tu deporte favorito.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="public/img/info/friends.png"  class="img-responsive imagen-info" alt="">
              <br>
              Es una buenísima forma de pasártelo bien con tus amigos.
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <img src="public/img/info/ball.png"  class="img-responsive imagen-info" alt="">
              <br>
              Te permite mejorar como jugador y como persona, con un sistema de rating de usuarios.
            </div>
          <!-- row -->
          </div>
        <!-- container-fluid 1 -->
        </div>

        <a id ="miembros"></a>
        <br><br>
        <div class="centrar">
          <h1>Sobre Nosotros</h1>
        </div>
        <hr><br>

        <div class="container-fluid">
          <div class="row ">
            <div class="col-sm-6 col-md-3">
              <img src="public/img/miembros/andres.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <p class = "justificar">Apasionado de la seguridad informática y el pentesting, obsesionado con la seguridad:
              ¡Nos están vigilando!. Me gustan los juegos de mesa y los juegos de rol.
              En mis ratos libres juego al baloncesto. Me gusta ayudar a la gente.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="public/img/miembros/axel.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <p class = "justificar">Me gusta recorrer el mundo en barco, he visitado más de 100 paises diferentes.
              Me gusta conocer gente y descubir culturas. Me apasiona la programación web sobre todo el diseño front end
              y el desarrollo de aplicaciones web y móvil.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="public/img/miembros/borja.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <p class = "justificar"> Diseñador gráfico, apasionado por la programación en todo tipo de lenguajes, me encanta diseñar
              y arreglar mis propias cosas. En mi tiempo libres me dedico a aprender, investigar y leer.
              Me encanta viajar, conocer gente y hacer nuevos amigos.</p>
            </div>
            <div class="col-sm-6 col-md-3">
              <img src="public/img/miembros/guille.jpg"  class="img-responsive img-circle imagen" alt=""> <br>
              <p class = "justificar">Interesado en la BIG DATA y el machine learning, dedico mis horas al desarrollo de algoritmos inteligentes,
              me gusta el internet de las cosas (IOT) sobretodo si la puedo relacionar con los coches: Mi gran pasión.
              Amante de la velocidad y los coches rápidos.</p>
            </div>
          <!-- row -->
          </div>
        </div>

        <a id ="contacto"></a>
        <br><br>
        <div class="centrar">
          <h1>Contacto</h1>
        </div>

        <hr>
        <br>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
              <form class="form-contacto" action="MAILTO:borjalor@ucm.es" method="post" enctype="text/plain">
                <fieldset>


                <br />Nombre:<br />
                <input type="text" name="name" placeholder="Nombre Completo" ><br>
                <br />E-mail:<br />
                <input type="text" name="mail" placeholder="Email de contacto" ><br>

                <br />Tipo de consulta:<br />
                <input type="radio" name="consulta" value="evaluacion"/> Evaluación <br />
                <input type="radio" name="consulta" value="sugerencias"/> Sugerencias <br />
                <input type="radio" name="consulta" value="criticas"/> Críticas <br />



                <br />Consulta<br />
                <input type="text" name="comment" placeholder="Escriba aquí su consulta." ><br /><br />

                <input name="java" type="checkbox" value="on"/> Marque esta casilla para verificar que ha leído
                nuestros términos y condiciones del servicio.  <br /><br />

                <div class="centrar">
                  <input type="reset" class="btn-formulario cancelbtn" value="Borrar">
                  <input type="submit" class="btn-formulario sendbtn" value="Enviar">
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
              <a href="index.html"><img class="logo-formulario" src="public/img/logos/Logo-blanco.png" alt="Logo Pachanga"></a>
            </div>

                  <span onclick="changeFormulario('login')" class="closeFormulario" title="Close">&times;</span>
          </div>

          <div class="body-formulario">

            <div class="centrar">
                <h3>Iniciar Sesión</h3>
            </div>
            <form>

                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                  <input type="text" class="form-control " placeholder="Username" onchange="checkUser(this, 'login')">
                  <span id="usernameSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="usernameErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>


                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input type="password" class="form-control" placeholder="Contraseña" onchange="checkPass(this, 'login')">
                  <span id="passSuccesLogin" class="glyphicon glyphicon-ok"></span>
                  <span id="passErrorLogin" class="glyphicon glyphicon-remove"></span>
                </div>

                <br>

                <div class="g-recaptcha" data-sitekey="6LdLhxsUAAAAAGKP4We-p1QlE9S7Wpf1eUc9UDa2"></div>

                <br>

                <div class="links">
                    ¿Todavía no eres miembro?<br><a onclick="changeFormulario('signUp')">Regístrate ahora</a>
                </div>

                <br>

                <div class="centrar">
                  <button onclick="changeFormulario('login')" type="button" class="btn-formulario cancelbtn">Cancel</button>
                  <button type = "button"  onclick="window.location.href='inicio.html'" class="btn-formulario sendbtn"> Entrar </button>
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
                  <a href="index.html"><img class = "logo-formulario" src="public/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>
                </div>

                <span onclick="changeFormulario('signUp')" class ="closeFormulario" title="Close">&times;</span>
              </div>

              <div class="body-formulario">
                <div class="centrar">
                    <h3>Registrarse</h3>
                </div>

                <form >

                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" class="form-control" placeholder="Username" onchange="checkUser(this, 'Register')">
                      <span id="usernameSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="usernameErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

                    <div class="input-group ">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                      <select class="form-control buscar-partido-distrito">
                        <option selected disabled hidden>Distrito</option>
                        <option>Fuencarral-El Pardo</option>
                        <option>Moncloa-Aravaca</option>
                        <option>Tetuán</option>
                        <option>Hortaleza</option>
                        <option>Chamartín</option>
                        <option>Ciudad Lineal</option>
                        <option>Chamberí</option>
                        <option>Barrio de Salamanca</option>
                        <option>San Blas</option>
                        <option>Barajas</option>
                        <option>Centro</option>
                        <option>Retiro</option>
                        <option>Arganzuela</option>
                        <option>Moratalaz</option>
                        <option>Villaverde</option>
                        <option>Usera</option>
                        <option>Latina</option>
                        <option>Carabanchel</option>
                        <option>Vicálvaro</option>
                        <option>Puente de Vallecas</option>
                        <option>Villa de Vallecas</option>
                      </select>
                    </div>
                    <br>

                    <!-- distrito -->

                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="text" class="form-control" id ="email" placeholder="Correo electrónico" onchange="checkEmail()">
                      <span id="emailSucces" class="glyphicon glyphicon-ok"></span>
                      <span id="emailError" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          						<input type="password" class="form-control" name = "pass" id = "pass" placeholder="Contraseña" onchange="checkPass(this, 'Register')">
                      <span id="passSuccesRegister" class="glyphicon glyphicon-ok"></span>
                      <span id="passErrorRegister" class="glyphicon glyphicon-remove"></span>
                    </div>

                    <br>

          					<div class="input-group">
          						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
          						<input type="password" class="form-control" name = "pass" id ="pass2" placeholder="Repetir Contraseña" onchange="checkPass2()">
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
                      <button type = "button" onclick="window.location.href='inicio.html'" class="btn-formulario sendbtn"> Entrar </button>
                    </div>

                </form>
              <!-- formulario-container -->
              </div>
            <!-- register formulario-container -->
            </div>
        <!-- container -->
  </div>
  <!-- Footer -->
  <?php require_once('layout/footer.php'); ?>
  <!-- Javascript -->
  <?php require_once('layout/scripts.php'); ?>

  </body>

</html>
