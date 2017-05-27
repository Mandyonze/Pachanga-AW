<?php
  require_once('models/entityBase.php');
  require_once('models/polideportivos.php'); // Class polideportivos

  /**
   * Class PartidosController
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


      public function crear(){
        session_start();
        $this->partidos->setNombre($_POST["nombre"]);
        $this->partidos->setPolideportivo($_POST["polideportivo"]);
        //Convertir fecha elegida en un string para el datetime
        $datetime = $_POST["fecha"] . $_POST["hora"] . ":" . $_POST["minutos"] . ":00";
        $this->partidos->setFecha($datetime);
        $creador = "";
        $usuarios = $this->usuario->getBy("id", $_SESSION["username"]);
        foreach ($usuarios as $usuario) {
          $creador = $usuario->getId();
        }
        $this->partidos->setCreador($creador);
        $this->partidos->setGoles1(NULL);
        $this->partidos->setGoles2(NULL);

        //Crear partido
        $this->partidos->create();

        $data = $this->usuario->getBy("id", $_SESSION["username"]);
        $distritos = $this->distrito->getAll();
        $info = "Partido creado correctamente";
        $this->view("crear", $this->entity, array(
          "distritos" => $distritos,
          "data" => $data,
          "info" => $info
        ));
      }

      public function elegirPolideportivo(){
        session_start();
        $data = $this->usuario->getBy("id", $_SESSION["username"]);
        $nombre = $_POST["nombre"];
        $fecha = $_POST["fecha"];
        $hora = $_POST["hora"];
        $minutos = $_POST["minutos"];
        $distrito = $_POST["distrito"];
        $polideportivo = new Polideportivos();
        $polideportivos = $polideportivo->getByDistrito($distrito);
        //Llamada a la vista para elegir el polideportivo según el distrito
        $this->view("elegir", "Polideportivo", array(
          "polideportivos" => $polideportivos,
          "nombre" => $nombre,
          "fecha" => $fecha,
          "hora" => $hora,
          "minutos" => $minutos,
          "distrito" => $distrito,
          "data" => $data
        ));
      }

      public function registrar()
      {
        session_start();
        $data = $this->usuario->getBy("id", $_SESSION["username"]);
        $distritos = $this->distrito->getAll();
        $this->view("crear", $this->entity, array(
          "distritos" => $distritos,
          "data" => $data
        ));
      }

  }

?>
