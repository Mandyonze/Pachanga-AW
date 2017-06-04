
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Perfil</title>
  <link rel="stylesheet" href="assets/css/listaPartidos.css">
  <link rel="stylesheet" href="assets/css/miPerfil.css">
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
      <div class = "col-xs-12 col-sm-12 col-md-9">
        <div class="profile-content">

          <?php if (isset($error)) {
            echo "<div class='alert alert-danger'>";
            echo "<strong>ERROR!</strong> $error";
            echo "</div>";
          }
          ?>
          <?php if (isset($_GET["success"])) {
            echo "<div class='alert alert-success alert-dismissable' data-dismiss='alert'>";
            echo "<button type='button' class='close' data-dismiss='alert'>&times;</button>";
            if ($_GET["success"] == 0) {
              echo "¡<strong>Bienvenido</strong>  a pachanga!";
            }
            echo "</div>";
          }
          ?>


                    <!-- /********************************************************************/ -->
          <div class="container-fluid miperfil">

          </div>

          <div class="container-fluid miperfil-informacion">
            <!-- <div class="jumbotron"> -->
              <div class="row">
                  <div class="col-xs-12">
                      <div class="container details-titulo" >
                        <h2><?php echo $user[0]->getNombre(); ?></h2>
                      </div>
                        <!-- <hr> -->
                      <ul class="container details">
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-user">
                              Username
                            </span>
                            <?php echo $user[0]->getId(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-envelope">
                              E-Mail
                            </span>
                          <?php echo $user[0]->getCorreo(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-map-marker">
                            Distrito
                            </span>
                        <?php echo $user[0]->getDistrito(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-star">
                            Skill
                            </span>
                        <?php echo $user[0]->getSkill(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-heart">
                            Valoración
                            </span>
                        <?php echo $user[0]->getValoracion(); ?>
                          </p>
                        </li>
                      </ul>
                  </div>
                  <div class="col-xs-12">
                      <div class="container details-titulo" >
                        <?php
                        if(isset($_GET['id']) && strtoupper($_GET['id']) == strtoupper($_SESSION['username']))
                          echo "<h2> Mis partidos</h2>";
                        else {
                          echo "<h2> Sus partidos</h2>";
                        }
                         ?>

                      </div>

                      <div class='panel panel-default'>
                      <?php
                      $aux = 1;
                      foreach ($partidos as $partido) {

                          echo "<div class='panel-heading'>";
                            echo "<div class='panel-title'>";
                              echo "<a data-toggle='collapse' data-parent='#accordion' href='#collapse$aux'>";
                                echo "<div class='row'>";

                                  echo "<div class='col-md-3'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-tag'>";
                                  echo " ";
                                  echo "</span>";
                                  echo $partido->getNombre();
                                  echo "</p>";
                                  echo "</div>";

                                  echo "<div class='col-md-3'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-map-marker'>";
                                  echo " ";
                                  echo "</span>";
                                  echo $partido->getDistrito();
                                  echo "</p>";
                                  echo "</div>";

                                  echo "<div class='col-md-2'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-time'>";
                                  echo " ";
                                  echo "</span>";
                                  $fecha=date("H:i",strtotime($partido->getFecha()));
                                  echo "$fecha";
                                  echo "</p>";
                                  echo "</div>";

                                  echo "<div class='col-md-2'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-calendar'>";
                                  echo " ";
                                  echo "</span>";
                                  $fecha=date("d-m-Y",strtotime($partido->getFecha()));
                                  echo "$fecha";
                                  echo "</p>";
                                  echo "</div>";

                                  echo "<div class='col-md-1'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-fire'>";
                                  echo " ";
                                  echo "</span>";
                                  echo $partido->getSkill();
                                  echo "</p>";
                                  echo "</div>";

                                  echo "<div class='col-md-1'>";
                                  echo "<p class = 'apartado'>";
                                  echo "<span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-user'>";
                                  echo " ";
                                  echo "</span>";
                                  echo $partido->getParticipantes();
                                  echo "/14";
                                  echo "</p>";
                                  echo "</div>";

                                echo "</div>";
                              echo "</a>";
                            echo "</div>";
                          echo "</div>";


                          echo "<div id='collapse$aux' class='panel-collapse collapse'>";
                            echo "<div class='panel-body back-white back-white'>";
                              echo "<div class='row'>";
                                $now = new DateTime();
                                $fecha =  $now->format('Y-m-d H:i:s');
                                if($partido->getFecha() < $fecha && $partido->getGoles1() == NULL && $partido->getCreador() == $_SESSION['username']){?>
                                  <div class='col-xs-6 col-md-6'><a href='index.php?controller=partidos&action=datos&id=<?php echo $partido->getId(); ?>' class='btn btn-warning button-ver mouse-over' role='button'>Ver</a></div>
                                  <div class='col-xs-6 col-md-6'><a href='<?php echo $helper->url('partidos', 'valorarPartido') . '&id=' . $partido->getId();?>' class='btn btn-warning back-orange mouse-over' onclick='changeCompartir('compartir')' role='button'>Puntuar</a></div>
                                  <?php
                                }
                                else{?>
                                  <div class='col-xs-12 col-md-12 centrar'><a href='index.php?controller=partidos&action=datos&id=<?php echo $partido->getId(); ?>' class='btn btn-warning button-ver-sin-float back-orange mouse-over centrar' role='button'>Ver</a></div>
                                  <?php
                                }
                              echo "</div>";
                            echo "</div>";
                          echo "</div>";
                          $aux++;

                      }
                     ?>
                   </div>
                  </div>

              </div>
          </div>



          <!-- /********************************************************************/ -->

        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
</body>

</html>
