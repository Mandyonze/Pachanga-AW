<?php

class UsuariosController extends BaseController{

    private $entity;
    private $usuario;
    private $distrito;
    private $partido;
    private $notificacion;

    public function __construct() {
        parent::__construct();
        require_once('models/usuarios.php');
        require_once('models/distritos.php');
        require_once('models/partidos.php');
        require_once('models/notificaciones.php');

        $this->usuario = new Usuarios();
        $this->distrito = new Distritos();
        $this->partido = new Partidos();
        $this->notificacion = new Notificaciones();
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
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
      $ckLogin = $this->usuario->ckLogin($username, $password);

      if ( $ckLogin == 0) {
        $nuevos = $this->partido->comprobarNotificaciones($username);
        foreach($nuevos as $nuevo){
          $this->notificacion->insertNotificacion($nuevo->getId(), $username, 1, NULL);
        }
        header('Location:index.php?controller=Partidos&action=inicio&success=' . $ckLogin );
      } else {
        header('Location:index.php?controller=View&action=login&error=' . $ckLogin);
      }

    }

    public function register()
    {
      $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
      $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
      $distrito = filter_var($_POST['distrito'], FILTER_SANITIZE_STRING);
      $mail = filter_var($_POST['mail'], FILTER_SANITIZE_STRING);

      $salt = substr(str_replace('+','.',base64_encode(md5(mt_rand(), true))),0,16);
      $rounds = 10000;

      $password = crypt(filter_var($_POST['password'], FILTER_SANITIZE_STRING), sprintf('$5$rounds=%d$%s$', $rounds, $salt));;
      $password2 = crypt(filter_var($_POST['password2'], FILTER_SANITIZE_STRING), sprintf('$5$rounds=%d$%s$', $rounds, $salt));;


      $ckRegister = $this->usuario->ckRegister($username, $nombre, $distrito, $mail, $password, $password2);

      if ( $ckRegister == 0) {
        header('Location:index.php?controller=Partidos&action=inicio&success=' . $ckRegister );
      } else {
        header('Location:index.php?controller=View&action=register&error=' . $ckRegister);
      }

    }

    public function perfil() {


      $usuario = $_GET["id"];
      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $user = $this->usuario->getBy("id", $usuario);
      $partidos = $this->partido->misCreados($usuario);

      $this->view("perfil", $this->entity, array(
          "data" => $data,
          "user" => $user,
          "partidos" => $partidos
      ));
    }

    public function mejores(){


      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $mejores = $this->usuario->mejores($data[0]->getDistrito());
      $miDistrito = $this->distrito->getBy("id", $data[0]->getDistrito());
      $this->view("mejores", $this->entity, array(
          "data" => $data,
          "miDistrito" => $miDistrito,
          "mejores" => $mejores
      ));
    }


    public function recaptchaLogin()
    {
      # code...
      $recaptcha = $_POST["g-recaptcha-response"];

      if ($recaptcha == "") {
        header('Location:index.php?controller=View&action=login&error=2');
      } else {
        $secret = "6LdVVRsUAAAAABeoFjd4KPujUS598jXeDHHPmIfQ";
        $ip = $_SERVER["REMOTE_ADDR"];
        $var =file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
        $array = json_decode($var, true);
        if ($array['success']){
          $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
          $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
          $ckLogin = $this->usuario->ckLogin($username, $password);

          if ( $ckLogin == 0) {
            $nuevos = $this->partido->comprobarNotificaciones($username);
            foreach($nuevos as $nuevo){
              $this->notificacion->insertNotificacion($nuevo->getId(), $username, 1, NULL);
            }
            header('Location:index.php?controller=Partidos&action=inicio&success=' . $ckLogin );
          } else {
            header('Location:index.php?controller=View&action=login&error=' . $ckLogin);
          }
        }else {
          header('Location:index.php?controller=View&action=login&error=2');
        }
      }

    }


}

?>
