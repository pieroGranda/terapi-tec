<?php
class Database {
	public static $db;
	public static $con;
	function Database(){
		$this->user="u0thcxplfmevrru7";$this->pass="WeIkfnhdTLKkPlOOF063";$this->host="bmdar308xw1kdotmya0m-mysql.services.clever-cloud.com";$this->ddbb="bmdar308xw1kdotmya0m";
	}

	function connect(){
		$con = new mysqli($this->host,$this->user,$this->pass,$this->ddbb);
		$con->query("set sql_mode=''");
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
