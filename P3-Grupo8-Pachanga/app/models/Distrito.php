<?php

  /**
   * Clase Grupo
   * @
   */
  class Distrito extends EntityBase {
      private $id;

      public function __construct() {
          $this->table = "distritos";
          $class = "Distrito";
          parent::__construct($this->table, $class);
      }

      /**
       * Crear Partido
       */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO partidos (id) VALUES (?)");

          //Variables a insertar
          $id = $this->getId();

          $insert->bindParam(1, $id, PDO::PARAM_STR);

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

      // Tabla de la BD
      public function getTable(){
          return $this->table;
      }

      function setTable($table){
          $this->table = $table;
      }
  }
?>
