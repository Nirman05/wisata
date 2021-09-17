<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($config, "DELETE FROM df_wisata WHERE id_lokasi='$id'");

header('location: ../../administrator/home.php?page=wisata');
// header('location: ../../administrator/home.php?page=forumkontak');
