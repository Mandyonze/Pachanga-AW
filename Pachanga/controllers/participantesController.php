<?php

/**
 * Class PagesController
 */
class ParticipantesController extends BaseController {

    private $participante;
    private $partidos;
    function __construct() {
        parent::__construct();
        $this->entity = "Participantes";

        require_once('models/participantes.php');
        require_once('models/partidos.php');

        $this->participante = new Participantes();
        $this->partidos = new Partidos();
    }

    public function insertParticipante(){

      session_start();

      if(isset($_POST['partido']) && isset($_POST['usuario']) && isset($_POST['equipo'])){

        $partido = $_POST['partido'];
        $usuario = $_POST['usuario'];
        $equipo = $_POST['equipo'];

        $this->participante->insertParticipante($partido, $usuario, $equipo);
        $partido = $this->partidos->getById($partido);
        $participantes = $partido[0]->getParticipantes() + 1;
        $this->partidos->updateParticipantes($partido[0]->getId() , $participantes);

        header('Location:index.php?controller=partidos&action=datos&id='. $_POST['partido']);
      }
      else {
        header('Location:index.php?controller=partidos&action=inicio');
      }
    }
}
?>
