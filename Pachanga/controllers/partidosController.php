<?php

/**
 * Class PagesController
 */
class PartidosController extends BaseController {

    private $entity;
    private $distrito;

    function __construct() {
        parent::__construct();
        $this->entity = "Partidos";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
        $this->distrito = new Distritos();

    }

    public function inicio(){
      $distritos = $this->distrito->getAll();
      session_start();
      $this->view("inicio", "", array(
        "distritos" => $distritos
      ));
    }


    public function crear()
    {
      # code...
      session_start();
      $distritos = $this->distrito->getAll();
      $this->view("crear", $this->entity, array(
        "distritos" => $distritos
      ));
    }

}
