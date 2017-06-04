
<!DOCTYPE html>
<html lang="es">

<head>
  <?php require_once('layout/library.php'); ?>
  <title>Resultado</title>
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


          <div class="container-fluid miperfil">

          </div>

          <div class="container-fluid miperfil-informacion">
            <!-- <div class="jumbotron"> -->
            <div class="container details-titulo" >
              <h2>Valorar: <?php echo $partidos[0]->getNombre(); ?></h2>
            </div>
              <div class="row">

                <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-4 col-sm-10 col-sm-offset-1 col-xs-12">

                  <form class="" action="<?php echo $helper->url('partidos', 'puntuar') . '&id= ' . $_GET['id']; ?>" method="post">
                    <h3>¿Cuál ha sido el resultado del partido?</h3>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-circle-arrow-right"></span></span>
                      <input type="number" min="0" name="goles1" class="form-control" placeholder="Equipo 1" onchange="checkScore()">
                    </div>
                    <br>
                    <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-circle-arrow-left"></span></span>
                      <input type="number" min="0" name="goles2" class="form-control" placeholder="Equipo 2" onchange="checkScore()">
                    </div>
                    <h3>¿Te ha gustado el partido?</h3>
                    <div class="checkbox  ">
                      <label><input type="checkbox" value=""><span class="glyphicon glyphicon-thumbs-up"></span></label>
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" value=""><span class="glyphicon glyphicon-thumbs-down"></span></label>
                    </div>
                    <br>
                    <div class="centrar">
                      <button href="" type="submit" class="btn btn-warning button-ver-sin-float"> Enviar </button>
                    </div>
                  </form>

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
