<?php

class UsuariosController extends BaseController{

    private $usuario;
    private $distrito;

    public function __construct() {
        parent::__construct();
        require_once('models/usuarios.php');
        require_once('models/distritos.php');
        $this->usuario = new Usuarios();
        $this->distrito = new Distritos();
        $this->entity = "Usuarios";

    }

    public function index() {
        // we store all the posts in a variable
        $posts = $this->pc->getAll();
        $this->view("index", $this->entity, array(
            "first_name" => "Estudiante",
            "last_name" => "UCM",
            "posts" => $posts
        ));
    }

    public function login()
    {
      # code...
      $username = $_POST["username"];
      $password = md5($_POST["password"]);
      $ckLogin = $this->usuario->ckLogin($username, $password);

      if ( $ckLogin == 0) {
        header('Location:index.php?controller=Partidos&action=inicio&success=' . $ckLogin );
      } else {
        header('Location:index.php?controller=View&action=login');
      }

    }

    public function register()
    {
      $username = $_POST["username"];
      $nombre = $_POST["nombre"];
      $distrito = $_POST["distrito"];
      $mail = $_POST["mail"];
      $password = md5($_POST["password"]);
      $password2 = md5($_POST["password2"]);
      $ckRegister = $this->usuario->ckRegister($username, $nombre, $distrito, $mail, $password, $password2);

      if ( $ckRegister == 0) {
        header('Location:index.php?controller=Partidos&action=inicio&success=' . $ckRegister );
      } else {
        header('Location:index.php?controller=View&action=register&error=' . $ckRegister);
      }

    }

    public function perfil() {
      session_start();

      $usuario = $_GET["id"];
      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $user = $this->usuario->getBy("id", $usuario);

      $this->view("perfil", $this->entity, array(
          "data" => $data,
          "user" => $user
      ));


    }

    public function mejores(){
      session_start();

      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $mejores = $this->usuario->mejores($data[0]->getDistrito());
      $miDistrito = $this->distrito->getBy("id", $data[0]->getDistrito());
      $this->view("mejores", $this->entity, array(
          "data" => $data,
          "miDistrito" => $miDistrito,
          "mejores" => $mejores
      ));
    }


}

?>
