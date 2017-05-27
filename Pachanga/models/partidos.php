<?php
  class Partidos extends EntityBase
  {

    private $id;
    private $nombre;
    private $polideportivo;
    private $fecha;
    private $creador;
    private $goles1;
    private $goles2;
    private $skill;

    public function __construct() {
      $this->table = "partidos";
      $class = "Partidos";
      parent::__construct($this->table, $class);
    }

  public function create() {
      $insert = $this->db()->prepare("INSERT INTO partidos (id, nombre, polideportivo, fecha, creador, goles1, goles2, skill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

      $insert->bindParam(1, $this->id);
      $insert->bindParam(2, $this->nombre);
      $insert->bindParam(3, $this->polideportivo);
      $insert->bindParam(4, $this->fecha);
      $insert->bindParam(5, $this->creador);
      $insert->bindParam(6, $this->goles1);
      $insert->bindParam(7, $this->goles2);
      $insert->bindParam(8, $this->skill);

      //Ejecutar la sentencia preparada
      $insert->execute();
  }

  /*Métodos get() y set()*/

  // Id
  public function getId(){
      return $this->id;
  }

  public function setId($id){
      $this->id = $id;
  }

  // Nombre
  public function getNombre(){
      return $this->nombre;
  }

  public function setNombre($nombre){
      $this->nombre = $nombre;
  }

  // Polideportivo
  public function getPolideportivo(){
      return $this->polideportivo;
  }

  public function setPolideportivo($polideportivo){
      $this->polideportivo = $polideportivo;
  }

  // fecha
  public function getFecha(){
      return $this->fecha;
  }

  public function setFecha($fecha){
      $this->fecha = $fecha;
  }

  // creador
  public function getCreador(){
      return $this->creador;
  }

  public function setCreador($creador){
      $this->creador = $creador;
  }

  // GolesEquipo1
  public function getGoles1(){
      return $this->goles1;
  }

  public function setGoles1($goles1){
      $this->goles1 = $goles1;
  }

  // GolesEquipo2
  public function getGoles2(){
      return $this->goles2;
  }

  public function setGoles2($goles2){
      $this->goles2 = $goles2;
  }

  // GolesEquipo2
  public function getSkill(){
      return $this->skill;
  }

  public function setSkill($skill){
      $this->skill = $skill;
  }

  }


 ?>
