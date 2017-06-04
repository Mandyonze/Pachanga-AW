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
    private $notificacion;

    function __construct() {
        parent::__construct();
        $this->entity = "Partidos";
        require_once('models/distritos.php');
        require_once('models/usuarios.php');
        require_once('models/partidos.php');
        require_once('models/polideportivos.php');
        require_once('models/participantes.php');
        require_once('models/notificaciones.php');

        $this->distrito = new Distritos();
        $this->usuario = new Usuarios();
        $this->partido = new Partidos();
        $this->polideportivo = new Polideportivos();
        $this->participante = new Participantes();
        $this->notificacion = new Notificaciones();
    }

    public function inicio(){


      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $partidos = $this->partido->partidosActivos();
      $distritos = $this->distrito->getAll();
      $this->view("inicio", "", array(
        "distritos" => $distritos,
        "data" => $data,
        "partidos" => $partidos
      ));
    }

    public function crear(){


      $data = $this->usuario->getBy("id", $_SESSION["username"]);
      $distritos = $this->distrito->getAll();
      $this->view("crear", $this->entity, array(
        "distritos" => $distritos,
        "data" => $data
      ));
    }

    public function filtro() {

        
        $data = $this->usuario->getBy("id", $_SESSION["username"]);
        $distritos = $this->distrito->getAll();


        $name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : "";
        $distrito = isset($_POST['distrito']) ? filter_var($_POST['distrito'], FILTER_SANITIZE_STRING) : "";
        $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : "";

        $partidos = $this->partido->filtro($name, $distrito, $fecha);

        $this->view("inicio", "", array(
            "data" => $data,
          "partidos" => $partidos,
          "distritos" => $distritos

        ));
      }

      public function valorarPartido(){

        if(isset($_GET['id'])){


          $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $partidos = $this->partido->getBy("id", $id);
          $this->view("resultado", $this->entity, array(
            "data" => $data,
            "partidos" => $partidos
          ));
        }
        else{
          header('Location:index.php?controller=partidos&action=inicio');
        }
      }

      public function puntuar(){


        if(isset($_GET['id']) && isset($_POST['goles1']) && isset($_POST['goles2'])){
          $id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
          $goles1 = filter_var($_POST['goles1'], FILTER_SANITIZE_NUMBER_INT);
          $goles2 = filter_var($_POST['goles2'], FILTER_SANITIZE_NUMBER_INT);

          $this->notificacion->borrarNotificacion($_SESSION["username"], $id);

          $this->partido->valorar($id, $goles1, $goles2);
          $equipo1 = $this->participante->getEquipo1($id);
          $equipo2 = $this->participante->getEquipo2($id);
          if($goles1 > $goles2){
            $p1 = 10;
            $p2 = -10;
            foreach($equipo1 as $jugador){
              $this->usuario->ajustePuntes($jugador->getUsuario(), $p1);
            }
            foreach($equipo2 as $jugador){
              $this->usuario->ajustePuntes($jugador->getUsuario(), $p2);
            }
          }else {
            $p1 = 10;
            $p2 = -10;
            foreach($equipo1 as $jugador){
              $this->usuario->ajustePuntes($jugador->getUsuario(), $p2);
            }
            foreach($equipo2 as $jugador){
              $this->usuario->ajustePuntes($jugador->getUsuario(), $p1);
            }
          }
        }
        header('Location:index.php?controller=partidos&action=inicio');
      }

      public function elegirPolideportivo(){

          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $distrito = filter_var($_GET['distrito'], FILTER_SANITIZE_STRING);
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

          $nombre = filter_var($_POST['nombre'], FILTER_SANITIZE_STRING);
          $fecha = $_POST["fecha"];
          $hora =  filter_var($_POST['hora'], FILTER_SANITIZE_NUMBER_INT);
          $minutos =  filter_var($_POST['minutos'], FILTER_SANITIZE_NUMBER_INT);
          $skill =  filter_var($_POST['skill'], FILTER_SANITIZE_NUMBER_INT);
          $polideportivo = filter_var($_POST['polideportivo'], FILTER_SANITIZE_STRING);
          $creador = filter_var($_SESSION['username'], FILTER_SANITIZE_STRING);

          $ckPartidos = $this->partido->ckPartidos($nombre,$fecha,$hora,$minutos,$skill,$polideportivo, $creador);

          $id = $this->partido->getBy("nombre", $nombre);
          // print_r($id);
          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $distritos = $this->distrito->getAll();

          if ($ckPartidos == 0) {
              header('Location:index.php?controller=partidos&action=datos&info=0&id='.$id[0]->getId());
          }else {
            $this->view("crear", $this->entity, array(
              "distritos" => $distritos,
              "data" => $data,
              "info" => $ckPartidos
            ));
          }

        }

        public function datos(){

          $data = $this->usuario->getBy("id", $_SESSION["username"]);

          if(isset($_GET['id'])){
            $info = -1;
            if (isset($_GET['info'])) {
              $info = 0;
            }

            $obj = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
            if(isset($_GET['visto'])){
              $this->notificacion->borrarNotificacion($_SESSION["username"], $obj);
            }

            $partidoobj = $this->partido->getById($obj);
            $ahora= $partidoobj[0]->getPolideportivo();
            $poli = $this->polideportivo->getBy("id", $ahora);
            $equipo1 = $this->participante->getEquipo1($obj);
            $equipo2 = $this->participante->getEquipo2($obj);
            $miequipo = $this->participante->getInscrito($_SESSION["username"], $partidoobj[0]->getId());
            $this->view("datos", $this->entity, array(
              "data" => $data,
              "partidoobj" => $partidoobj,
              "poli" => $poli,
              "equipo1" => $equipo1,
              "equipo2" => $equipo2,
              "miequipo" => $miequipo,
              "info" => $info
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
        }

        public function mis()
        {


          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $misPartidosJugados = $this->partido->misPartidosJugados($_SESSION["username"]);
          $misPartidosNoJugados =  $this->partido->misPartidosNoJugados($_SESSION["username"]);
          $this->view("mis", $this->entity, array(
              "data" => $data,
              "misPartidosJugados" => $misPartidosJugados,
              "misPartidosNoJugados" => $misPartidosNoJugados
          ));
        }

        public function mapa() {

          $data = $this->usuario->getBy("id", $_SESSION["username"]);
          $polideportivo = filter_var($_GET['polideportivo'], FILTER_SANITIZE_STRING);
          $polideportivos = $this->polideportivo->getBy("id", $polideportivo);
          // $distrito = $this->distrito->getBy("id", $distrito);
          //Llamada a la vista para elegir el polideportivo según el distrito
          $this->view("mapa", "", array(
            "polideportivos" => $polideportivos,
            "data" => $data
            // "distrito" => $distrito
          ));
        }


}
