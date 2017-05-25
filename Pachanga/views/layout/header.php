<?php echo "<!-- HEADER HTML -->" ?>
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
