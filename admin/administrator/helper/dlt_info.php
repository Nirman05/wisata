<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM penginapan WHERE id_penginapan='$id'");

	header('location: ../../administrator/home.php?page=penginapan');
