<?php

class PDOConnection
{
    public $connection;
    static $_instance;

    private function __construct() {
        include_once('dbconfig.php');
        $dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME;//.';charset=latin1';
        $this->connection = new PDO($dsn, DB_USER, DB_PASS);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    private function __clone(){}

    public static function getInstance() {
        if (!(self::$_instance instanceof self)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

}
?>