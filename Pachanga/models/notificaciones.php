<?php


/**
 *
 */
class Notificaciones extends EntityBase
{

  private $id;
  private $partido;
  private $receptor;
  private $tipo;
  private $emisor;

  function __construct()
  {
    $this->table = 'notificaciones';
    $this->class = "Notificaciones";
    parent::__construct($this->table, $this->class);
  }

  public function create() {

      $insert = $this->db()->prepare("INSERT INTO notificaciones (id, partido, receptor, tipo, emisor) VALUES (?, ?, ?, ?, ?)");

      $insert->bindParam(1, $this->id);
      $insert->bindParam(2, $this->partido);
      $insert->bindParam(3, $this->receptor);
      $insert->bindParam(4, $this->tipo);
      $insert->bindParam(5, $this->emisor);

      //Ejecutar la sentencia preparada
      $insert->execute();
  }

  public function insertNotificacion($partido, $receptor, $tipo, $emisor){

    $this->setPartido($partido);
    $this->setReceptor($receptor);
    $this->setTipo($tipo);
    $this->setEmisor($emisor);

    $this->create();
  }

  public function misCompartidos($usuario){

    $query=$this->db()->query("SELECT * FROM $this->table WHERE receptor = '$usuario' and tipo = '2'");
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
  }

  public function misFinalizados($usuario){

    $query=$this->db()->query("SELECT * FROM $this->table WHERE receptor = '$usuario' and tipo = '1'");
    $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
    return $resultSet;
  }

  public function borrarNotificacion($receptor, $partido){

    $sql = "DELETE FROM $this->table WHERE partido = '$partido' and receptor = '$receptor'";
    $stmt =  $this->db()->prepare($sql);
    $stmt->execute();
  }

  //GETTERS
  public function getId() {
    return $this->id;
  }
  //SETTERS
  public function setId($id) {
    $this->id = $id;
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
  public function getReceptor() {
    return $this->receptor;
  }
  //SETTERS
  public function setReceptor($receptor) {
    $this->receptor = $receptor;
  }

  //GETTERS
  public function getEmisor() {
    return $this->emisor;
  }
  //SETTERS
  public function setEmisor($emisor) {
    $this->emisor = $emisor;
  }

  //GETTERS
  public function getTipo() {
    return $this->tipo;
  }
  //SETTERS
  public function setTipo($tipo) {
    $this->tipo = $tipo;
  }
}
 ?>
