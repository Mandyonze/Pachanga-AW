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
    private $participante;

    function __construct() {
        parent::__construct();
        $this->entity = "Partidos";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
        require_once('models/partidos.php');
        require_once('models/polideportivos.php');
        require_once('models/participantes.php');

        $this->distrito = new Distritos();
        $this->usuario = new Usuarios();
        $this->partido = new Partidos();
        $this->polideportivo = new Polideportivos();
        $this->participante = new Participantes();
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
          $distrito = $this->distrito->getBy("id", $distrito);
          //Llamada a la vista para elegir el polideportivo según el distrito
          $this->view("elegir", "Polideportivo", array(
            "polideportivos" => $polideportivos,
            "data" => $data,
            "distrito" => $distrito
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

<<<<<<< HEAD
        public function datos(){
          session_start();
          $data = $this->usuario->getBy("id", $_SESSION["username"]);

          if(isset($_GET['id'])){
            $obj = $_GET['id'];
            $partidoobj = $this->partido->getById($obj);
            $ahora= $partidoobj[0]->getPolideportivo();
            $poli = $this->polideportivo->getBy("id", $ahora);
            $equipo1 = $this->participante->getEquipo1($obj);
            $equipo2 = $this->participante->getEquipo2($obj);

            $this->view("datos", $this->entity, array(
              "data" => $data,
              "partidoobj" => $partidoobj,
              "poli" => $poli,
              "equipo1" => $equipo1,
              "equipo2" => $equipo2
            ));
          }
          else{
            $partidos = $this->partido->partidosActivos();
            $distritos = $this->distrito->getAll();
            $this->view("inicio", "", array(
              "distritos" => $distritos,
              "data" => $data,
              "partidos" => $partidos
            ));
          }
=======

        public function mis()
        {
          session_start();

          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $misPartidosJugados = $this->partido->misPartidosJugados($_SESSION["username"]);
          $misPartidosNoJugados =  $this->partido->misPartidosNoJugados($_SESSION["username"]);
          $this->view("mis", $this->entity, array(
              "data" => $data,
              "misPartidosJugados" => $misPartidosJugados,
              "misPartidosNoJugados" => $misPartidosNoJugados
          ));
>>>>>>> 2e99f31acfa7fe1db55dfd0b03dd8b3e85770635
        }
}
