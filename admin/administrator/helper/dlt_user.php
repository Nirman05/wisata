<?php
include '../config/koneksi.php';
$id = $_GET['id'];
mysqli_query($config, "DELETE FROM user WHERE id_user ='$id'");

header('location: ../../administrator/home.php?page=data_user');
