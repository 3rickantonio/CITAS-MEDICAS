<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="cristoes";$this->pass="5k7YLp3q9i";$this->host="localhost";$this->ddbb="cristoes_bookmedik";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$db==null){
			self::$db = new Database();
			self::$con = self::$db->connect();
		}
		return self::$con;
	}
	
}
?>