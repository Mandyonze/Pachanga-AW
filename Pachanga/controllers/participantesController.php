<?php

/**
 * Class PagesController
 */
class ParticipantesController extends BaseController {

    private $participante;

    function __construct() {
        parent::__construct();
        $this->entity = "Participantes";

        require_once('models/participantes.php');

        $this->participante = new Participantes();
    }

    public function insertParticipante(){

      session_start();
      echo "caca";
      if(isset($_POST['partido']) && isset($_POST['usuario']) && isset($_POST['equipo'])){

        $partido = $_POST['partido'];
        $usuario = $_POST['usuario'];
        $equipo = $_POST['equipo'];


        // echo "<br>";
        // echo $partido;
        // echo "<br>";
        // echo $usuario;
        // echo "<br>";
        // echo $equipo;

        $this->participante->insertParticipante($partido, $usuario, $equipo);
        header('Location:index.php?controller=partidos&action=datos&id='. $_POST['partido']);
      }
      else {
        header('Location:index.php?controller=partidos&action=inicio');
      }
    }
}
?>
