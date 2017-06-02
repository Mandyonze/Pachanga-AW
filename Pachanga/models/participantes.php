<?php


/**
 *
 */
class Participantes extends EntityBase
{

  private $partido;
  private $usuario;
  private $equipo;

  function __construct()
  {
    $this->table = 'participantes';
    $this->class = "Participantes";
    parent::__construct($this->table, $this->class);
  }

  public function create() {

      $insert = $this->db()->prepare("INSERT INTO participantes (partido, usuario, equipo) VALUES (?, ?, ?)");

      $insert->bindParam(1, $this->partido);
      $insert->bindParam(2, $this->usuario);
      $insert->bindParam(3, $this->equipo);

      //Ejecutar la sentencia preparada
      $insert->execute();
  }

  public function insertParticipante($partido, $usuario, $equipo){

    $this->setPartido($partido);
    $this->setUsuario($usuario);
    $this->setEquipo($equipo);

    $this->create();
  }

  public function deleteParticipante($partido, $usuario){

    $sql = "DELETE FROM $this->table WHERE partido = '$partido' and usuario = '$usuario'";
    $stmt =  $this->db()->prepare($sql);
    $stmt->execute();
  }

  public function getEquipo1($id){
    $query=$this->db()->query("SELECT * FROM $this->table WHERE partido = '$id' and equipo = '1'"); //ORDER BY id DESC
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
  }

  public function getEquipo2($id){
    $query=$this->db()->query("SELECT * FROM $this->table WHERE partido = '$id' and equipo = '2'"); //ORDER BY id DESC
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
  }

  public function getInscrito($username, $equipo)
  {
    $query=$this->db()->query("SELECT * FROM $this->table WHERE partido = $equipo and usuario = '$username'"); //ORDER BY id DESC
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);

    if (!empty($resultSet)) {
      return $resultSet[0]->getEquipo();
    } else {
      return 0;
    }
    // return $resultSet;
  }

  //GETTERS
  public function getPartido() {
    return $this->partido;
  }
  //SETTERS
  public function setPartido($partido) {
    $this->partido = $partido;
  }

  //GETTERS
  public function getUsuario() {
    return $this->usuario;
  }
  //SETTERS
  public function setUsuario($usuario) {
    $this->usuario = $usuario;
  }

  //GETTERS
  public function getEquipo() {
    return $this->equipo;
  }
  //SETTERS
  public function setEquipo($equipo) {
    $this->equipo = $equipo;
  }
}
 ?>
