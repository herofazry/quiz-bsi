<?php

class Database{

	private $dbHost = "localhost";
	private $dbUser = "root";
	private $dbPass = "herofazry";
	private $dbName = "db_mahasiwa";

	function connect(){

		$mysqli = new mysqli($this->dbHost,$this->dbUser,$this->dbPass,$this->dbName);

		if ($mysqli->connect_error) {
			echo "GAGAL TERSAMBUNG DATABASE";
		}

		return $mysqli;
	}
}

?>