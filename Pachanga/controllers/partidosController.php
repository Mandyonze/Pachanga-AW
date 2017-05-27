<?php

/**
 * Class PagesController
 */
class PartidosController extends BaseController {

    private $entity;
    private $distrito;
    private $usuario;
    private $partidos;

    function __construct() {
        parent::__construct();
        $this->entity = "Partidos";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
        require_once('models/partidos.php');

        $this->distrito = new Distritos();
        $this->usuario = new Usuarios();
        $this->partidos = new Partidos();

    }

    public function inicio(){

      session_start();
      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $partidos = $this->partidos->getAll();
      $distritos = $this->distrito->getAll();
      $this->view("inicio", "", array(
        "distritos" => $distritos,
        "data" => $data,
        "partidos" => $partidos
      ));
    }


    public function crear()
    {
      # code...
      session_start();
      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $distritos = $this->distrito->getAll();
      $this->view("crear", $this->entity, array(
        "distritos" => $distritos,
        "data" => $data
      ));
    }

}
