<?php

class Matkul{

	function listMatkul(){

		require_once "koneksi.php";

		$db = new Database();
		$mysqli = $db->connect();

		$sql = "SELECT*FROM matkul ORDER BY no ASC";

		$result = $mysqli->query($sql);

		while ($data = $result->fetch_assoc()) {
			$hasil[] = $data;
		}

		$mysqli->close();

		return $hasil;
	}
}

?>