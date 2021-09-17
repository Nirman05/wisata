<?php
session_start();
include '../config/koneksi.php';
$id = $_GET['id'];
$id_pantai = $_GET['pantai'];

mysqli_query($config, "DELETE FROM p_rating WHERE id_user='$id' AND id_pantai = '$id_pantai'");

if ($_SESSION['level'] == 'admin') {
    header('location: ../../administrator/home.php?page=forumkontak');
} else {
    header('location: ../../administrator/home.php?page=forumuser');
}
