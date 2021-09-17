<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM fr_kontak WHERE id='$id'");

	header('location: ../../administrator/home.php?page=forumkontak');
