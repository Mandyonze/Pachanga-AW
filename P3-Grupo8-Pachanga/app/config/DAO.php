<?php
  /**
  * Data Acces Object class
  * Connects with the database
  */
  class DAO {
      /**
       * @var null
       */
      private static $connection = NULL;

      /**
       * ConnDB constructor.
       */
      public function __construct() {

      }

      private function __clone() {

      }

      /**
      * Method that connects with database
      */
      public static function getConn() {
          if (!isset(self::$connection)) {
              $dbparams = require_once 'database.php';
              $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
              self::$connection = new PDO($dbparams["driver"].':host='.$dbparams["host"].';dbname='.$dbparams["database"], $dbparams["user"], $dbparams["pass"], $pdo_options);
          }
          return self::$connection;
      }
  }
?>
