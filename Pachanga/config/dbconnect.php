<?php


/**
 *
 */
class ConnDB
{

  private static $conn = NULL;

  function __construct()
  {

  }

  public static function getConn() {

    if (!isset(self::$conn)) {
      $dbparam = require_once 'database.php';
      $pdo_options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES  \'UTF8\'');
      
      self::$conn = new PDO($dbparam["DB_DRIVER"].':host='.$dbparam["DB_SERVER"].';dbname='.$dbparam["DB_NAME"], $dbparam["DB_USER"], $dbparam["DB_PASS"], $pdo_options);
    }

    return self::$conn;
  }
}


 ?>
