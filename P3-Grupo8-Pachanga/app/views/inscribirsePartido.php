<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Inscripción Partido</title>



  <!--Metadatos-->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="Grupo 08: Borja Lorenzo, Guillermo Rius, Andrés Herranz y Axel Junestrand">
  <meta name="description" content="Proyecto 'Pachanga'">

  <!--Links-->
  <!-- FavIcon -->
  <link rel="icon" href="img/logos/Icono-Naranja.png" type="image/x-icon"/>
  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/inicio.css">
  <link rel="stylesheet" href="css/inscribirsePartido.css">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
  <body>

<header>
  <nav id = 'nav' class="navbar navbar-default navbar-fixed-top topnav"  >
    <div class="container">
      <div class="dropdown burguer-menu">
                 <button class="btn btn-secondary dropdown-toggle" type="button" id="burgerMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   <span class="glyphicon glyphicon-menu-hamburger"></span>

                 </button>

                 <div class="dropdown-menu" aria-labelledby="burgerMenu">
                   <div class="container ">
                       <div class="profile-sidebar">
                         <!-- SIDEBAR USERPIC -->
                         <div class="profile-userpic">
                           <img src="img/iconos/huevo.png" class="img-responsive" alt="">
                         </div>
                         <!-- END SIDEBAR USERPIC -->
                         <!-- SIDEBAR USER TITLE -->
                         <div class="profile-usertitle">
                           <div class="profile-usertitle-name">
                             Cristiano Ronaldo
                           </div>
                         </div>
                         <!-- END SIDEBAR USER TITLE -->
                         <!-- SIDEBAR BUTTONS -->
                         <div class="profile-userbuttons">
                           <button type="button" class="btn btn-success btn-sm" onclick="window.location.href='miPerfil.html'">Mi perfil</button>
                           <button type="button" class="btn btn-danger btn-sm" onclick="window.location.href='index.html'">Logout</button>
                         </div>
                         <!-- END SIDEBAR BUTTONS -->
                         <!-- SIDEBAR MENU -->
                         <div class="profile-usermenu">
                           <ul class="nav">
                             <li>
                               <a href="inicio.html">
                               <i class="glyphicon glyphicon-home"></i>
                               Inicio </a>
                             </li>
                             <li>
                               <a href="crearPartido.html">
                               <i class="glyphicon glyphicon-plus"></i>
                               Crear Partido </a>
                             </li>
                              <li>
                                <a href="listaPartidos.html">
                                <i class="glyphicon glyphicon-ok-circle"></i>
                                Mis partidos </a>
                              </li>
                              <li>
                                <a href="ranking.html">
                                <i class="glyphicon glyphicon-heart-empty"></i>
                                Mejores Jugadores </a>
                              </li>
                           </ul>
                         </div>
                         <!-- END MENU -->
                       </div>
                     <!-- </div> -->
                   </div>
                 </div>
      </div>

      <a href="inicio.html"><img id = "logo" src="img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>

      <div class="dropdown alertas-menu">
          <button class="btn btn-secondary dropdown-toggle notifications" type="button"  data-toggle="dropdown">
            <span class="glyphicon glyphicon-bell"></span>
          </button>

          <ul class="dropdown-menu dropdown-menu-right">
                <li class="unir"><a href="aceptarJugador.html">Un jugador se quiere unir a tu partido</a></li>
                <li><a href="resultadoPartido.html">Has terminado un partido. Envía el resultado</a></li>
                <li><a href="valoracionJugadores.html">Valora a los jugadores del partido</a></li>
          </ul>
      <!-- div alertas menu -->
      </div>

    </div>
  </nav>
</header>

  <div id = "contenidoPagina" class="container ">
    <br><br>
      <div class="row">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-4">
          <div class="jumbotron">
            <h3>INSCRIPCIÓN</h3>
            <br>
            <p>
              Estás a punto de inscribirte en el partido del día 15-04-2017 a las 15:30 en el distrito 28001.
            </p>
                        <div class="row justify-content-center">
                            <div class="col-xs-6 col-md-3 col-md-offset-3 cuadro_naranja">Seleciona equipo:</div>
                            <select class="col-xs-6 col-md-3 cuadro_negro">
                              <option value="volvo">Equipo 1</option>
                              <option value="saab">Equipo 2</option>
                            </select>
                        </div>

                        <div class="btn-group">
              <button type="button" class="btn btn-primary btn-lg boton" >Aceptar</button>
            </div>
            <div class="btn-group">
              <button type="button" class="btn btn-primary btn-lg boton">Cancelar</button>
            </div>
          </div>
        </div>
      </div>
  </div>

    <!-- ******************************************footer******************************************-->
    <footer >
          <br><br>
          <div class="container">
            <div class="row">
              <div class="col-sm-4">
                 <div class = "centrar"><b>Join us</b> </div>
                <hr>
                <a href="signUp.html">Registrarse</a>
                <br>
                <a href="login.html">Iniciar Sesión</a>
              </div>
              <div class="col-sm-4">
                 <div class = "centrar"><b>Sobre Pachanga</b> </div>
                <hr>
                <a href="info.html">¿Qué es Pachanga?</a>
                <br>
                Preguntas Frecuentes
                <br>
                Aviso Legal
              </div>

              <div class="col-sm-4">
                 <div class = "centrar"><b>¿Quiénes somos?</b> </div>
                <hr>
                <a href="info.html">Sobre Nosotros</a>
                <br>
                <a href="info.html">Contacto</a>
                <br><br>
                <a href="#" class="fa fa-facebook"></a> &nbsp;
                <a href="#" class="fa fa-twitter"></a> &nbsp;

              </div>

            <!-- row -->
            </div>
          </div>




          <br><br><br><br><br><br>
        </footer>
      <!--*********************************JAVASCRIPT*********************************-->

      <!-- jQuery -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.js"></script>

      <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>



    </body>
</html>
