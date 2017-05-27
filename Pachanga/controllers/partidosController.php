<?php

/**
 * Class PagesController
 */
class PartidosController extends BaseController {

    private $entity;
    private $distrito;
    private $usuario;
    private $partido;
    private $polideportivo;

    function __construct() {
        parent::__construct();
        $this->entity = "Partidos";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
        require_once('models/partidos.php');
        require_once('models/polideportivos.php');

        $this->distrito = new Distritos();
        $this->usuario = new Usuarios();
        $this->partido = new Partidos();
        $this->polideportivo = new Polideportivos();

    }

    public function inicio(){

      session_start();
      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $partidos = $this->partido->partidosActivos();
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


    public function filtro() {
        # code...
        session_start();
        $data = $this->usuario->getBy("id", $_SESSION["username"]);
        $distritos = $this->distrito->getAll();
        //
        $name = isset($_POST['name']) ? $_POST['name'] : "";
        $distrito = isset($_POST['distrito']) ? $_POST['distrito'] : "";
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";

        $partidos = $this->partido->filtro($name, $distrito, $fecha);

        // print_r($partidos);
        $this->view("inicio", "", array(
            "data" => $data,
          "partidos" => $partidos,
          "distritos" => $distritos

        ));
      }


      public function elegirPolideportivo(){
          session_start();
          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $distrito = $_POST["distrito"];
          $polideportivos = $this->polideportivo->getByDistrito($distrito);
          //Llamada a la vista para elegir el polideportivo según el distrito
          $this->view("elegir", "Polideportivo", array(
            "polideportivos" => $polideportivos,
            "data" => $data
          ));
        }

        public function nuevoPartido() {
          session_start();
          $nombre = $_POST["nombre"];
          $fecha = $_POST["fecha"];
          $hora = $_POST["hora"];
          $minutos = $_POST["minutos"];
          $skill = $_POST["skill"];
          $polideportivo = $_POST["polideportivo"];
          $creador = $_SESSION["username"];

          $ckPartidos = $this->partido->ckPartidos($nombre,$fecha,$hora,$minutos,$skill,$polideportivo, $creador);
          //'2017-05-17 10:24:33'

          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $distritos = $this->distrito->getAll();
          $this->view("crear", $this->entity, array(
            "distritos" => $distritos,
            "data" => $data,
            "info" => $ckPartidos
          ));
        }
}
