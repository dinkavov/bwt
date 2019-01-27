<?php
class DB
{
	private static $instance;
	public $conn;// идентификатор соединения
	
	private function __construct() {
	    $this->conn = new PDO(host,user,pass,dbname);
	    $this->conn->query("SET lc_time_names = 'ru_RU'");
	    $this->conn->query("SET NAMES 'utf8'");
	  }
	
	public static function getInstanceDB(){
        if (!isset(self::$instance)){
            //self::$db = new Model;
            self::$instance =  new self;

        }
        return self::$instance;
	}
}