<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "wsbuol";



$config = mysqli_connect($host, $user, $pass, $database);
if (mysqli_connect_errno()) {
	echo "gagal koneksi";
}
