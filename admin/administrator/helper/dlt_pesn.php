<?php 
include '../config/koneksi.php';
	$id = $_GET['id'];
	mysqli_query($config, "DELETE FROM t_rating WHERE id_user ='$id'");

	header('location: ../../administrator/home.php?page=forumkontak');
