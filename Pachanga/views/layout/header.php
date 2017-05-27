<?php echo "<!-- HEADER HTML -->" ?>

<nav class="navbar navbar-default navbar-fixed-top topnav">
  <div class="container">
    <div class="hidden-md hidden-lg hidden-xl dropdown burguer-menu">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="burgerMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>

      <div class="dropdown-menu" aria-labelledby="burgerMenu">
        <div class="container ">
          <?php include('menu.php'); ?>
        </div>
      </div>
    </div>

    <a href="<?php  echo $helper->url('partidos' , 'inicio')?>"><img id = "logo" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>

    <div class="dropdown alertas-menu">
      <button class="btn btn-secondary dropdown-toggle notifications" type="button" data-toggle="dropdown">
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
