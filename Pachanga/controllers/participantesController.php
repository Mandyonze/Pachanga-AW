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
      if(isset($_POST['partido']) && isset($_POST['usuario']) &&isset($_POST['equipo'])){
        echo $_POST['partido'], $_POST['usuario'], $_POST['equipo'];
        $this->participante->insertParticipante($_POST['partido'], $_POST['usuario'], $_POST['equipo']);
        header('Location:index.php?controller=partidos&action=datos&id='. $_POST['partido']);
      }
      else {
        header('Location:index.php?controller=partidos&action=inicio');
      }
    }
}
?>
