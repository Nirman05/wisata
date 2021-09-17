<?php
session_start();
include '../config/koneksi.php';
$id = $_GET['id'];
$id_wisata = $_GET['wisata'];

mysqli_query($config, "DELETE FROM t_rating WHERE id_user='$id' AND id_lokasi='$id_wisata'");

if ($_SESSION['level'] == 'admin') {
    header('location: ../../administrator/home.php?page=forumkontak');
} else {
    header('location: ../../administrator/home.php?page=forumuser');
}
