<?php

  /**
   * Clase Grupo
   * @
   */
  class Polideportivo extends EntityBase {
      private $id;
      private $distrito;

      public function __construct() {
          $this->table = "polideportivos";
          $class = "Polideportivo";
          parent::__construct($this->table, $class);
      }

      /**
       * Crear Partido
       */
      public function create() {
          $insert = $this->db()->prepare("INSERT INTO partidos (id, distrito) VALUES (?, ?)");

          //Variables a insertar
          $id = $this->getId();
          $distrito = $this->getDistrito();

          $insert->bindParam(1, $id, PDO::PARAM_STR);
          $insert->bindParam(2, $distrito, PDO::PARAM_STR);

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

      // distrito
      public function getDistrito(){
          return $this->distrito;
      }

      public function setDistrito($distrito){
          $this->distrito = $distrito;
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
