<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM df_informasi WHERE id_informasi='$id'");

	header('location: ../../administrator/home.php?page=berita_info');
