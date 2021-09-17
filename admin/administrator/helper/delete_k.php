<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM df_kuliner WHERE id_kuliner='$id'");

	header('location: ../../administrator/home.php?page=wisata_kuliner');
