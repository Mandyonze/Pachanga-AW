<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Datos Partido</title>
  <link rel="stylesheet" href="assets/css/inicio.css">
  <link rel="stylesheet" href="assets/css/miPerfil.css">
  <link rel="stylesheet" href="assets/css/datosPartido.css">

</head>

<body>
  <header>
    <?php require_once('layout/header.php'); ?>
  </header>


  <div class="container  profile-container">
    <div class="row profile">
      <div class="hidden-xs hidden-sm col-md-3">
        <?php include('layout/menu.php'); ?>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9">
        <div class="profile-content">

          <?php if (isset($info) && $info == 0) {
            echo "<div class='alert alert-success alert-dismissable' data-dismiss='alert'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            echo "¡<strong>Enhorabuena</strong> Has creado un partido!";
            echo "</div>";
          }
          ?>

          <div class="container-fluid partido_detalle">

            <?php //echo $miequipo; ?>
            <div class="container-fluid miperfil">

            </div>

            <div class="container-fluid miperfil-informacion">
              <!-- <div class="jumbotron"> -->
              <div class="row">
                <div class="col-xs-12">
                  <div class="container-fluid details-titulo">
                    <h2>Detalles del partido: <?php echo $partidoobj[0]->getNombre(); ?></h2>
                  </div>

                  <?php
                  if($partidoobj[0]->getGoles1() != null){
                   ?>
                  <div class="container-fluid  tam">

                    <?php
                      $goles1 = $partidoobj[0]->getGoles1();
                      $goles2 = $partidoobj[0]->getGoles2();
                      echo"$goles1 - $goles2 <br>";
                    ?>
                  </div>

                  <div class="container-fluid tam2">
                    <?php
                      echo"Partido Finalizado"
                    ?>
                    <br>
                  </div>
                <?php } ?>

                  <!-- <hr> -->
                  <ul class="container details">

                    <li>
                      <p>
                        <span class="glyphicon glyphicon-user">
                                Creador
                              </span>
                        <?php echo $partidoobj[0]->getCreador(); ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-map-marker">
                                Distrito

                              </span>
                        <?php echo $poli[0]->getDistrito(); ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-map-marker">
                                Polideportivo

                              </span>
                        <?php echo $poli[0]->getId(); ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-star">
                                Skill

                              </span>
                        <?php echo $partidoobj[0]->getSkill(); ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-calendar">
                                Fecha

                              </span>
                        <?php
                              $fecha=date("d-m-Y",strtotime($partidoobj[0]->getFecha()));
                              echo "$fecha";
                              // echo ; ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-time">
                                Hora

                              </span>
                        <?php
                              $fecha=date("H:i",strtotime($partidoobj[0]->getFecha()));
                              echo "$fecha";
                              // echo ; ?>
                      </p>
                    </li>
                    <li>
                      <p>
                        <span class="glyphicon glyphicon-user">
                                Participantes:

                              </span>
                      </p>
                    </li>
                  </ul>
                </div>

              </div>
            </div>

            <table class="table table-condensed margen_top_title">
              <thead>
                <tr>
                  <th>Equipo 1</th>
                  <th>Equipo 2</th>
                </tr>
              </thead>
              <tbody>
                <?php
                for ($x = 0; $x < 7; $x++) {
                  echo "<tr>";
                  if($x < sizeof($equipo1)){
                    echo "<td>";
                    echo $equipo1[$x]->getUsuario();
                    echo "</td>";
                  }
                  else{
                    echo "<td> - </td>";
                  }
                  if($x < sizeof($equipo2)){
                    echo "<td>";
                    echo $equipo2[$x]->getUsuario();
                    echo "</td>";
                  }
                  else{
                    echo "<td> - </td>";
                  }
                  echo "</tr>";
                }
                 ?>
              </tbody>
            </table>
            <?php if($miequipo == 0 || $partidoobj[0]->getCreador() == $_SESSION['username'] || $partidoobj[0]->getGoles1() != NULL){ ?>
            <div class="container-fluid margen_top_title">
              <form class="" action="<?php echo $helper->url('participantes', 'insertParticipante'); ?>" method="post">
                <input name="partido" value="<?php echo $partidoobj[0]->getId(); ?>" type="text" required hidden>
                <input name="usuario" value="<?php echo $_SESSION['username']; ?>" type="text" required hidden>
                <input name="equipo" value="1" type="text" required hidden>
                <div class="col-xs-6 col-md-6"><button type="submit" class="btn btn-warning back-orange flota-derecha" <?php  echo  ($miequipo != 0 || sizeof($equipo1) == 7 || $partidoobj[0]->getGoles1() != NULL) ? "disabled" : ""; ?>> Jugar equipo 1 </button></div>
              </form>
              <form class="" action="<?php echo $helper->url('participantes', 'insertParticipante'); ?>" method="post">
                <input name="partido" value="<?php echo $partidoobj[0]->getId(); ?>" type="text" required hidden>
                <input name="usuario" value="<?php echo $_SESSION['username']; ?>" type="text" required hidden>
                <input name="equipo" value="2" type="text" required hidden>
                <div class="col-xs-6 col-md-6"><button type="submit" class="btn btn-warning back-orange" <?php  echo  ($miequipo != 0 || sizeof($equipo2) == 7 || $partidoobj[0]->getGoles1() != NULL) ? "disabled" : ""; ?>> Jugar equipo 2 </button></div>
              </form>
              <!-- <div class="col-xs-6 col-md-6"><a href="#" class="btn btn-warning back-orange mouse-over" onclick="changeCompartir('compartir')" role="button">Compartir</a></div> -->
            </div>
            <?php
            }
            else {
            ?>
            <div class="container-fluid margen_top_title">
              <form class="" action="<?php echo $helper->url('participantes', 'deleteParticipante'); ?>" method="post">
                <input name="partido" value="<?php echo $partidoobj[0]->getId(); ?>" type="text" required hidden>
                <input name="usuario" value="<?php echo $_SESSION['username']; ?>" type="text" required hidden>
                <div class="col-xs-12 col-md-12 centrar"><button type="submit" class="btn btn-warning back-orange button-ver-sin-float"> Salir </button></div>
              </form>
            </div>
            <?php
            }
            ?>
            <div class="map-responsive margen_top_title">
              <iframe title="Mapa" src="<?php echo $poli[0]->getUrl(); ?>" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
</body>

</html>
