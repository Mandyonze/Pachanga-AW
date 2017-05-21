<?php
  require_once(BASE_PATH . '/app/models/EntityBase.php');

  class UsuarioController extends BaseController{

      private $usuario;
      private $entity;

      public function __construct() {
          parent::__construct();
          require_once(BASE_PATH . '/app/models/Usuario.php');

          $this->usuario = new Usuario();
          $this->entity = "Usuarios";
      }

      /**
      * Mostrar todos los usuarios registrados
      */
      public function lista() {
          // Guardar el usuario en un array
          $usuarios = $this->usuario->getAll();
          $this->view("lista", $this->entity, array(
              "usuarios" => $usuarios
          ));
      }

      /**
      * Mostrar un usuario en concreto
      */
      public function mostrar() {
          if (!isset($_GET['id'])) {
              $this->view("error", "", "");
          }
          else{
            $usuarios = $this->usuario->getById($_GET['id']);
            $this->view("mostrar", $this->entity, array(
                "usuarios" => $usuarios
            ));
          }
      }

      /**
      * Inicio de sesión de la aplicación
      */
      public function login(){
        $this->usuario->setId($_POST['id']);
        //Comprobar si el usuario existe
        if($this->usuario->exists()){
          $this->usuario->setPassword($_POST['password']);
          //Comparar los datos proporcionados con los de la BD
          $usuarios = $this->usuario->getById($this->usuario->getId());
          if($usuarios[0]->getPassword() == $this->usuario->getPassword()){
            //Si la contraseña coincide
            if($this->usuario->getId() == 'admin'){
              //Si es administrador
              $this->view("admin", "", array(
                  "usuarios" => $usuarios
              ));
            }
            else{
              //Si es un usuario normal
              $this->view("perfil", "", array(
                  "usuarios" => $usuarios
              ));
            }
          }
          else {
            //La contraseña no coincide con la del usuario registrado
            $message = "Nombre de usuario o contraseña incorrectos!";
            $this->view("login", "", "");
          }
        }
        else{
          //Usuario no existe
          $message = "Nombre de usuario o contraseña incorrectos!";
          $this->view("login", "", array(
              "message" => $message
          ));
        }
      }

      /**
      * Registro de la aplicación
      */
      public function signup(){
        $this->usuario->setId($_POST['id']);

        //Mirar si el usuario ya existe
        if(!$this->usuario->exists()){
          //Comprobar si las contraseñas coinciden
          if($_POST['pass1'] == $_POST['pass2']){
            //Las contraseñas son iguales
            $this->usuario->setPassword($_POST['pass1']);
            $this->usuario->setAge($_POST['age']);
            $this->usuario->setMusic($_POST['music']);

            //Insertar en la base de datos con los datos proporcionados
            $this->usuario->create();
            $this->usuario->addToGroups($this->usuario->getId(), $this->usuario->getAge(), $this->usuario->getMusic());

            //Redirigir al perfil
            $usuarios = $this->usuario->getById($this->usuario->getId());
            $this->view("profile", "", array(
                "usuarios" => $usuarios
            ));
          }
          else{
            //Las contraseñas no son iguales
            $message = "Las contraseñas no son iguales!";
            $this->view("signup", "", "");
          }
        }
        else{
          //Usuario ya registrado en la base de datos
          $message = "Ese nombre de usuario ya existe!";
          $this->view("signup", "", "");
        }
      }
  }

?>
