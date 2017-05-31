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

      session_start();
      $this->view("login", $this->entity, array(
        "error" => "User or password invalid"
      ));
    }

    public function register() {

      session_start();
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
      session_start();
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
        $this->view("contacto", "", array(
        ));
      }
    }

    public function about(){
      session_start();
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
        $this->view("about", "", array(
        ));
      }
    }

    public function faq(){
      session_start();
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
        $this->view("faq", "", array(
        ));
      }
    }

    public function legal(){
      session_start();
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
        $this->view("legal", "", array(
        ));
      }
    }
}
