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
}
?>
