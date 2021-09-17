<?php
include 'admin/administrator/config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$rate = $_POST['rate'];

$con = mysqli_query($config, "INSERT into fr_kontak set  nama='$nama', email='$email', pesan='$pesan', rate='$rate'");

if ($con) {
  header('location: index.php?page=hubngi_km&status=success');
} else {
  header('location: index.php?page=hubngi_km&status=failed');
}
