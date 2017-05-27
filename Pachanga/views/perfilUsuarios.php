
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title> PACHANGA </title>
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
                        <h2><?php echo $data[0]->getNombre(); ?></h2>
                      </div>
                        <!-- <hr> -->
                      <ul class="container details">
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-user">
                              Username
                            </span>
                            <?php echo $data[0]->getId(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-envelope">
                              E-Mail
                            </span>
                          <?php echo $data[0]->getCorreo(); ?>
                          </p>
                        </li>
                        <li>
                          <p>
                            <span class="glyphicon glyphicon-map-marker">
                            Distrito
                            </span>
                        <?php echo $data[0]->getDistrito(); ?>
                          </p>
                        </li>
                      </ul>
                  </div>
                  <div class="col-xs-12">
                      <div class="container details-titulo" >
                        <h2> Mis partidos</h2>
                      </div>
                        <!-- <hr> -->
                        <!-- //INSERTAR PARTIDOS -->
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
