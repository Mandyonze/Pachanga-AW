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
  private $participantes;
  private $skill;

  public function __construct() {
    $this->table = "partidos";
    $this->class = "Partidos";
    parent::__construct($this->table,   $this->class);
  }

public function create() {


    $insert = $this->db()->prepare("INSERT INTO partidos (id, nombre, polideportivo, fecha, creador, goles1, goles2, participantes, skill) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $insert->bindParam(1, $this->id);
    $insert->bindParam(2, $this->nombre);
    $insert->bindParam(3, $this->polideportivo);
    $insert->bindParam(4, $this->fecha);
    $insert->bindParam(5, $this->creador);
    $insert->bindParam(6, $this->goles1);
    $insert->bindParam(7, $this->goles2);
    $insert->bindParam(8, $this->participantes);
    $insert->bindParam(9, $this->skill);

    //Ejecutar la sentencia preparada
    $insert->execute();

    $id = $this->getBy("nombre", $this->nombre);

    $this->addParticipantes($id[0]->getId(), $this->creador, 1);
}

public function updateParticipantes($partido, $participantes)
{
  $sql = "UPDATE partidos SET participantes='$participantes' WHERE id = '$partido'";
  $stmt =  $this->db()->prepare($sql);
  $stmt->execute();
}


public function addParticipantes($partido, $usuario, $equipo) {

      $add = $this->db()->prepare("INSERT INTO participantes (partido, usuario, equipo) VALUES (?, ?, ?)");

      $add->bindParam(1, $partido);
      $add->bindParam(2, $usuario);
      $add->bindParam(3, $equipo);

      //Ejecutar la sentencia preparada
      $add->execute();
}

public function misCreados($usu){

  $usuario = $usu;
  $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito   FROM $this->table p inner join polideportivos d WHERE  p.polideportivo = d.id and  creador = '$usuario' ORDER BY fecha DESC"); //ORDER BY id DESC
  $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
  return $resultSet;
}

public function partidosActivos(){

    $now = new DateTime();
    // echo "$this->class";
    // echo "$this->table";
    $fecha =  $now->format('Y-m-d H:i:s');
    // echo "$fecha";

    $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito   FROM $this->table p inner join polideportivos d WHERE  p.polideportivo = d.id and fecha > '$fecha' ORDER BY fecha"); //ORDER BY id DESC
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
}

public function valorar($id, $goles1, $goles2){

  $sql = "UPDATE partidos SET goles1='$goles1', goles2 = $goles2 WHERE id = '$id'";
  $stmt =  $this->db()->prepare($sql);
  $stmt->execute();
}

public function filtro($name, $distrito, $fecha){


  if($name != "" && $distrito != "" && $fecha != ""){
    $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito FROM $this->table p inner join polideportivos d  WHERE p.polideportivo = d.id and nombre like '%$name%' and cast(fecha as date) >= '$fecha' and d.distrito = '$distrito' ORDER BY fecha");
  }
  elseif($distrito != "" && $fecha != ""){
    $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito FROM $this->table p inner join polideportivos d WHERE p.polideportivo = d.id and cast(fecha as date) >= '$fecha' and d.distrito = '$distrito'");
  }
  elseif($name != "" && $fecha != ""){
    $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito FROM $this->table p inner join polideportivos d WHERE p.polideportivo = d.id and nombre like '%$name%'");
  }
  else{
    $query=$this->db()->query("SELECT p.id, p.nombre, d.id as polideportivo, p.fecha, p.creador, p.goles1, p.goles2, p.participantes, p.skill, d.distrito FROM $this->table p inner join polideportivos d WHERE p.polideportivo = d.id and fecha > '$fecha' ORDER BY fecha"); //ORDER BY id DESC
  }

  $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
  return $resultSet;
}



public function ckPartidos($nombre,$fecha,$hora,$minutos,$skill,$polideportivo, $creador)
{

  $fecha=date("Y-m-d",strtotime($fecha));

  $datetime = $fecha ." ". $hora . ":" . $minutos . ":00";

  $pruebas = $this->getBy("nombre", $nombre);

  if (!empty($pruebas)) {
    return 1;
  }

  if ($datetime < date('Y-m-d H:i:s')) {
    return 2;
  }

  $this->setNombre($nombre);
  $this->setPolideportivo($polideportivo);
  $this->setFecha($datetime);
  $this->setCreador($creador);
  $this->setSkill($skill);
  $this->setParticipantes(1);

  $this->create();

  return 0;
}

public function comprobarNotificaciones($usuario){ //Tipo 1 son de partido finalizado

  $now = new DateTime();
  $fecha =  date_format($now, 'Y-m-d H:i:s');

  $query=$this->db()->query("SELECT * FROM partidos WHERE id NOT IN (SELECT partido FROM notificaciones WHERE tipo = '1') and creador = '$usuario' and fecha < '$fecha' and goles1 is NULL");
  $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
  return $resultSet;
}

public function misPartidosJugados($usuario){

    $query=$this->db()->query("SELECT p.id, p.nombre, p.fecha, p.creador, p.participantes, p.skill,d.distrito FROM partidos p inner join participantes m inner join polideportivos d on p.id = m.partido and d.id = p.polideportivo  WHERE m.usuario = '$usuario' and p.goles1 is not null ORDER BY p.fecha");
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
}

public function misPartidosNoJugados($usuario){

    $query=$this->db()->query("SELECT p.id, p.nombre, p.fecha, p.creador, p.participantes, p.skill, d.distrito FROM partidos p inner join participantes m inner join polideportivos d on p.id = m.partido and d.id = p.polideportivo  WHERE m.usuario = '$usuario' and p.goles1 is null ORDER BY p.fecha");
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
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


// Participantes
public function getParticipantes(){
    return $this->participantes;
}

public function setParticipantes($participantes){
    $this->participantes = $participantes;
}

// Skill
public function getSkill(){
    return $this->skill;
}

public function setSkill($skill){
    $this->skill = $skill;
}


// Distrito
public function getDistrito(){
    return $this->distrito;
}

public function setDistrito($distrito){
    $this->distrito = $distrito;
}

}


 ?>
