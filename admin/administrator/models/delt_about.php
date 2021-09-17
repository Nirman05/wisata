<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM about_us WHERE id_ab='$id'");

	header('location: ../../administrator/home.php?page=aboutus');
