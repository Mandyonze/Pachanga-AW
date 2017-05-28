<?php

/**
 * Class PagesController
 */
class ViewController extends BaseController {

    private $entity;
    private $distrito;
    private $usuarios;

    function __construct() {
        parent::__construct();
        $this->entity = "";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
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

    public function contacto(){
      $this->view("contacto", "", array(
      ));
    }

    public function about(){
      $this->view("about", "", array(
      ));
    }

    public function faq(){
      $this->view("faq", "", array(
      ));
    }

    public function legal(){
      $this->view("legal", "", array(
      ));
    }
}
