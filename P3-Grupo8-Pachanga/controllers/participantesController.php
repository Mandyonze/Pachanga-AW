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



      if(isset($_POST['partido']) && isset($_POST['usuario']) && isset($_POST['equipo'])){


        $partido = filter_var($_POST['partido'], FILTER_SANITIZE_STRING);
        $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);
        $equipo = filter_var($_POST['equipo'], FILTER_SANITIZE_NUMBER_INT);

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

    public function deleteParticipante(){

      $partido = filter_var($_POST['partido'], FILTER_SANITIZE_STRING);
      $usuario = filter_var($_POST['usuario'], FILTER_SANITIZE_STRING);

      $this->participante->deleteParticipante($partido, $usuario);
      $partido = $this->partidos->getById($partido);
      $participantes = $partido[0]->getParticipantes() - 1;
      $this->partidos->updateParticipantes($partido[0]->getId() , $participantes);

      header('Location:index.php?controller=partidos&action=datos&id='. $_POST['partido']);
    }
}
?>
