
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Mejores jugadores</title>
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
                        <h2>Mejores Jugadores de: <?php echo $miDistrito[0]->getId(); ?></h2>
                      </div>

                        <div class="panel panel-default back-orange2">
                            <div class="panel-heading back-orange2">
                              <div class="row white">
                                  <div class="col-xs-3 col-md-4">Jugador</div>
                                  <div class="col-xs-4 col-md-4">Skill</div>
                        </div>
                        </div>
                      </div>

                      <div class="panel-group">
                        <?php foreach ($mejores as $mejor): ?>
                          <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="row" >
                                  <div class="col-xs-12 col-md-4">
                                    <p class="apartado">
                                    <span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-tag'></span>
                                    <?php echo $mejor->getId(); ?></div>
                                    </p>
                                  <div class="col-xs-12 col-md-4 ">
                                    <div class="flotante_izq" >
                                      <p class="apartado">
                                      <span class='hidden-md hidden-lg hidden-xl glyphicon glyphicon-fire'></span>
                                        <?php $skill = $mejor->getSkill();
                                        echo $skill . " ";
                                        echo "<span class='glyphicon glyphicon-star'></span>";
                                        if ($skill > 100 && $skill < 100) {
                                          echo "<span class='glyphicon glyphicon-star'></span>";
                                        } elseif ($skill >=500) {
                                          echo "<span class='glyphicon glyphicon-star'></span>";
                                          echo "<span class='glyphicon glyphicon-star'></span>";
                                        }
                                        ?>
                                      </p>
                                 </div>
                              </div>
                              <div class="col-xs-12 col-md-1"></div>
                              <div class="col-xs-12 col-md-3 centrar"><a href="<?php  echo $helper->url('usuarios' , 'perfil')?>&id=<?php echo $mejor->getId();?>" class="btn button-less mouse-over white" role="button">Ver Perfil</a></div>
                                </div>
                            </div>
                          </div>
                        <?php endforeach; ?>
                      </div>

                      <iframe title="Mapa" src="<?php echo $miDistrito[0]->getUrl(); ?>" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                        <!-- <hr> -->

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
