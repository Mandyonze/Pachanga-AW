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
        $this->usuarios = new Usuarios();

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


      $error = isset($_GET['error']) ? filter_var($_GET['error'], FILTER_SANITIZE_NUMBER_INT) : 0;
      $this->view("login", $this->entity, array(
        "error" => $error
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

    public function teacher(){

      if(isset($_SESSION['loggedin'])){
        $usuario = $_SESSION['username'];
        $data = $this->usuarios->getBy("id", $usuario);
        $user = $this->usuarios->getBy("id", $usuario);

        $this->view("teacher", "", array(
            "data" => $data,
            "user" => $user
        ));
      }
      else{
        $distritos = $this->distrito->getAll();
        $this->view("teacher", "", array(
          "distritos" => $distritos
        ));
      }
    }

    public function contacto(){

      if(isset($_SESSION['loggedin'])){
        $usuario = $_SESSION['username'];
        $data = $this->usuarios->getBy("id", $usuario);
        $user = $this->usuarios->getBy("id", $usuario);

        $this->view("contacto", "", array(
            "data" => $data,
            "user" => $user
        ));
      }
      else{
        $distritos = $this->distrito->getAll();
        $this->view("contacto", "", array(
          "distritos" => $distritos
        ));
      }
    }

    public function about(){

      if(isset($_SESSION['loggedin'])){
        $usuario = $_SESSION['username'];
        $data = $this->usuarios->getBy("id", $usuario);
        $user = $this->usuarios->getBy("id", $usuario);

        $this->view("about", "", array(
            "data" => $data,
            "user" => $user
        ));
      }
      else{
        $distritos = $this->distrito->getAll();
        $this->view("about", "", array(
          "distritos" => $distritos
        ));
      }
    }

    public function faq(){

      if(isset($_SESSION['loggedin'])){
        $usuario = $_SESSION['username'];
        $data = $this->usuarios->getBy("id", $usuario);
        $user = $this->usuarios->getBy("id", $usuario);

        $this->view("faq", "", array(
            "data" => $data,
            "user" => $user
        ));
      }
      else{
        $distritos = $this->distrito->getAll();
        $this->view("faq", "", array(
          "distritos" => $distritos
        ));
      }
    }

    public function legal(){

      if(isset($_SESSION['loggedin'])){
        $usuario = $_SESSION['username'];
        $data = $this->usuarios->getBy("id", $usuario);
        $user = $this->usuarios->getBy("id", $usuario);

        $this->view("legal", "", array(
            "data" => $data,
            "user" => $user
        ));
      }
      else{
        $distritos = $this->distrito->getAll();
        $this->view("legal", "", array(
          "distritos" => $distritos
        ));
      }
    }
}
