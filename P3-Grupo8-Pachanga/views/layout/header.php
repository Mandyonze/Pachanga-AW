<?php echo "<!-- HEADER HTML -->" ?>

<nav class="navbar navbar-default navbar-fixed-top topnav">
  <div class="container">
    <div class="hidden-md hidden-lg hidden-xl dropdown burguer-menu">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="burgerMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="glyphicon glyphicon-menu-hamburger"></span>
      </button>

      <div class="dropdown-menu" aria-labelledby="burgerMenu">
        <div class="container ">
          <?php
            include('menu.php');
          ?>
        </div>
      </div>
    </div>

    <a href="<?php  echo $helper->url('partidos' , 'inicio'); ?>"><img id = "logo" src="assets/img/logos/Logo-blanco.png" alt="Logo Pachanga"> </a>

    <div class="dropdown alertas-menu">
      <button class="btn btn-secondary dropdown-toggle notifications" type="button" data-toggle="dropdown">
            <span class="glyphicon glyphicon-bell"></span>
            <?php
            if(sizeof($terminados) != 0 || sizeof($compartidos) != 0){
              $cant = sizeof($terminados) + sizeof($compartidos);
              echo "<span class='badge badge-bell'>$cant</span>";
            }
             ?>
          </button>

      <ul class="dropdown-menu dropdown-menu-right">
        <?php
        if(sizeof($terminados) == 0 && sizeof($compartidos) == 0){
          echo "<li>No tienes notificaciones</li>";
        }
        else{
          $pendientes = sizeof($terminados);
          $udm = $data[0]->getId();
          if($pendientes != 0){
            echo "<li><a href='index.php?controller=usuarios&action=perfil&id=$udm'> Tienes $pendientes partidos pendientes por puntuar </a></li>";
          }
          foreach($compartidos as $compartido){
            $idpartido = $compartido->getPartido();
            $idemisor = $compartido->getEmisor();
            echo "<li><a href='index.php?controller=partidos&action=datos&id=$idpartido&visto=1'>El usuario $idemisor te ha compartido un partido.</a></li>";
          }
        }
         ?>
      </ul>
      <!-- div alertas menu -->
    </div>

  </div>
</nav>
