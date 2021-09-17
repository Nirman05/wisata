<?php
// class Wisata {

	// private $mysqli;

	// function __construct($conn){
		$this->mysqli = $conn;
	//}
	// public function tampil($id = null){
		$db = $this->mysqli->conn;
		$sql = "SELECT * FROM df_wisata";
		if($id != null) {
			$sql .= " WHERE id_lokasi = $id";
		}
		$query = $db->query($sql) or die ($db->error);
		return  $query;
	//}

	// public function tambah ($nm_lokasi, $gr_lintang, $gr_bujur, $informasi, $gambar) {
	// 	 $db = $this->mysqli->conn;
	// 	 $db->query("INSERT INTO df_wisata values('','$nm_lokasi', '$gr_lintang', '$gr_bujur', '$informasi', '$gambar')") or die ($db->erorr);
	// }
	// public function editt ($sqlx){
	// 	$db = $this->mysqli->conn;
	// 	$db->query($sql)  or die ($db->error);
	// }
//}
