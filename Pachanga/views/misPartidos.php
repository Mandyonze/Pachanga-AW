<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
  <link rel="stylesheet" href="assets/css/inicio.css">
  <link rel="stylesheet" href="assets/css/listaPartidos.css">
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

          <?php //print_r($misPartidosNoJugados)

            ?>


            <!-- ************************************************************************************** -->


                        <hr>
                        <h3> Partidos no jugados </h3>
                        <hr>


                      <div class='panel panel-default back-orange2'>
                        <div class='panel-heading back-orange2'>
                          <div class='panel-title'>
                            <div class='hidden-xs hidden-sm row white'>
                              <div class='col-md-3'>Nombre</div>
                              <div class='col-md-3'>Distrito</div>
                              <div class='col-md-2'>Hora</div>
                              <div class='col-md-2'>Fecha</div>
                              <div class='col-md-1'><span class='glyphicon glyphicon-star'></span></div>
                              <div class='col-md-1'><span class='glyphicon glyphicon-user'></span></div>
                            </div>
                            <div class='hidden-md hidden-lg hidden-xl row white'>
                              <div class="centrar">
                                Partidos
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='panel panel-default'>

                      <?php
                        $aux = 1;
                        foreach ($misPartidosNoJugados as $partido) {

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
                                    echo "/10";
                                    echo "</p>";
                                    echo "</div>";

                                  echo "</div>";
                                echo "</a>";
                              echo "</div>";
                            echo "</div>";


                            echo "<div id='collapse$aux' class='panel-collapse collapse'>";
                              echo "<div class='panel-body back-white back-white'>";
                                echo "<div class='row'>";
                                  echo "<div class='col-xs-6 col-md-6'><a href='' class='btn btn-warning button-ver mouse-over' role='button'>Ver</a></div>";
                                  echo "<div class='col-xs-6 col-md-6'><a href='' class='btn btn-warning back-orange mouse-over' onclick='changeCompartir('compartir')' role='button'>Compartir</a></div>";
                                echo "</div>";
                              echo "</div>";
                            echo "</div>";
                            $aux++;

                        }
                       ?>

                       </div>

            <!-- ********************************************************************************* -->
            <!-- ************************************************************************************** -->


                        <hr>
                        <h3> Partidos jugados </h3>
                        <hr>


                      <div class='panel panel-default back-orange2'>
                        <div class='panel-heading back-orange2'>
                          <div class='panel-title'>
                            <div class='hidden-xs hidden-sm row white'>
                              <div class='col-md-3'>Nombre</div>
                              <div class='col-md-3'>Distrito</div>
                              <div class='col-md-2'>Hora</div>
                              <div class='col-md-2'>Fecha</div>
                              <div class='col-md-1'><span class='glyphicon glyphicon-star'></span></div>
                              <div class='col-md-1'><span class='glyphicon glyphicon-user'></span></div>
                            </div>
                            <div class='hidden-md hidden-lg hidden-xl row white'>
                              <div class="centrar">
                                Partidos
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class='panel panel-default'>

                      <?php
                        
                        foreach ($misPartidosJugados as $partido) {

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
                                    echo "/10";
                                    echo "</p>";
                                    echo "</div>";

                                  echo "</div>";
                                echo "</a>";
                              echo "</div>";
                            echo "</div>";


                            echo "<div id='collapse$aux' class='panel-collapse collapse'>";
                              echo "<div class='panel-body back-white back-white'>";
                                echo "<div class='row'>";
                                  echo "<div class='col-xs-6 col-md-6'><a href='' class='btn btn-warning button-ver mouse-over' role='button'>Ver</a></div>";
                                  echo "<div class='col-xs-6 col-md-6'><a href='' class='btn btn-warning back-orange mouse-over' onclick='changeCompartir('compartir')' role='button'>Compartir</a></div>";
                                echo "</div>";
                              echo "</div>";
                            echo "</div>";
                            $aux++;

                        }
                       ?>

                       </div>

            <!-- ********************************************************************************* -->


        </div>
      </div>
    </div>
  </div>



  <?php require_once('layout/footer.php'); ?>
  <?php require_once('layout/script.php'); ?>
  <script src='assets/js/datepicker.js'></script>

  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

</body>

</html>
