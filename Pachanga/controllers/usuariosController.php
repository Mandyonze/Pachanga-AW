<?php

class UsuariosController extends BaseController{

    private $usuario;

    public function __construct() {
        parent::__construct();
        require_once('models/usuarios.php');

        $this->pc = new Usuarios();
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
      $ckLogin = $this->pc->ckLogin($username, $password);

      if ( $ckLogin == 0) {
        header('Location:index.php?controller=View&action=inicio&success=' . $ckLogin );
      } else {
        header('Location:index.php?controller=View&action=login');
      }

    }


}

?>
