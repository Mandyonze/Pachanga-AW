<?php

/**
 * Class PagesController
 */
class ViewController extends BaseController {

    private $entity;
    private $distrito;

    function __construct() {
        parent::__construct();
        $this->entity = "";
        require_once('models/distritos.php');
        $this->distrito = new Distritos();
    }

    public function alert($msg) {
      echo "<script type='text/javascript'>alert('$msg');</script>";
    }


    public function home() {

      $distritos = $this->distrito->getAll();

        $this->view("home", $this->entity, array(
          "distritos" => $distritos
        ));
    }

    public function login() {


      $this->view("login", $this->entity, array(
        "error" => "User or password invalid"
      ));
    }

    public function register() {

      $distritos = $this->distrito->getAll();

      $this->view("signUp", $this->entity, array(
        "distritos" => $distritos
      ));
    }

    public function error() {
        $this->view("error", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM"
        ));
    }

}
