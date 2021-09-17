<?php 
include '../config/koneksi.php';
  
   
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM pantai WHERE id_pantai='$id'");

	header('location: ../../administrator/home.php?page=wisata_pantai');
