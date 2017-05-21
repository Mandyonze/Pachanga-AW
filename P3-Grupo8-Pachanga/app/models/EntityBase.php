<?php
  /**
  * Main model class
  */
  class EntityBase{
      private $table;
      private $class;

      private $db;

      /**
       * Base Model constructor
       */
      public function __construct($table, $class) {
          $this->table=(string) $table;
          $this->class=(string) $class;
          $this->db = DAO::getConn();
      }

      public function getClass() {
          return $this->class;
      }

      public function db() {
          return $this->db;
      }

      public function getAll(){
          $query=$this->db()->query("SELECT * FROM $this->table ORDER BY id DESC");
          $resultSet = $query->fetchAll(PDO::FETCH_CLASS, $this->class);
          return $resultSet;
      }

      public function getById($id){
          $req = $this->db()->prepare("SELECT * FROM $this->table  WHERE id = :id");
          $req->execute(array('id' => $id));
          $result = $req->fetchAll(PDO::FETCH_CLASS, $this->class);
          return $result;
      }

      public function getBy($column, $value){
          $req = $this->db()->prepare("SELECT * FROM $this->table WHERE $column = :value");
          $req->execute(array('value' => $value));
          $result = $req->fetchAll(PDO::FETCH_CLASS, $this->class);
          return $result;
      }

      public function deleteById($id){
          $id = intval($id);
          $query=$this->db()->query("DELETE FROM $this->table WHERE id = $id");
          return $query;
      }

      public function deleteBy($column,$value){
          $query=$this->db()->query("DELETE FROM $this->table WHERE $column = '$value'");
          return $query;
      }

      /**
      * Checks if the entity exists in the database
      */
      public function exists(){
        //Check if query returns anything
        if(count($this->getById($this->getId())) > 0){
          return True;
        }
        return False;
      }

  }
?>
