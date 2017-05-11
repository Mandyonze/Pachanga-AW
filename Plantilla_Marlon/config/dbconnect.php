<?php

class ConnDB {

    /**
     * @var null
     */
    private static $conn = NULL;

    /**
     * ConnDB constructor.
     */
    public function __construct() {

    }

    /**
     *
     */
    private function __clone() {

    }

    public static function getConn() {
        if (!isset(self::$conn)) {
            $dbparam = require_once 'database.php';
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$conn = new PDO($dbparam["driver"].':host='.$dbparam["host"].';dbname='.$dbparam["database"], $dbparam["user"], $dbparam["pass"], $pdo_options);
        }
        return self::$conn;
    }
}

?>