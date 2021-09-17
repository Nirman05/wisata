<?php
session_start();
include '../config/koneksi.php';
$id = $_GET['id'];
$id_kuliner = $_GET['kuliner'];
mysqli_query($config, "DELETE FROM k_rating WHERE id_user='$id' AND id_kuliner='$id_kuliner'");

if ($_SESSION['level'] == 'admin') {
    header('location: ../../administrator/home.php?page=forumkontak');
} else {
    header('location: ../../administrator/home.php?page=forumuser');
}
