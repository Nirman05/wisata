<?php

session_start();
$koneksi = mysqli_connect('localhost', 'root', '', 'wsbuol');

//daftar
if (isset($_POST['register'])) {

	$username = $_POST['username'];
	$password  = $_POST['password']; //pure pass belum di engripsi
	$email		= $_POST['email'];

	//fungsi engripsi
	$epassword = password_hash($password, PASSWORD_DEFAULT);

	$insert = mysqli_query($koneksi, "INSERT INTO user (username,password,email,level) values ('$username','$epassword','$email','user')");
	if ($insert) {

		header('location:index.php?page=simpan');
	} else {
		echo '<script>
		alert("resgister gagal");
		window.localtion.href="regitser.php";
		</script>';
	}
}
//login
if (isset($_POST['login'])) {

	$username = $_POST['username'];
	$password  = $_POST['password']; //pure pass belum di engripsi

	//fungsi engripsi

	$cekdb = mysqli_query($koneksi, "SELECT * FROM user where username='$username'");
	$hitung = mysqli_num_rows($cekdb);

	if ($hitung > 0) {
		$pw = mysqli_fetch_array($cekdb);
		$passekarang = $pw['password'];
		if (password_verify($password, $passekarang)) {

			$_SESSION['id_user'] = $pw['id_user'];
			$_SESSION['username'] = $username;
			$_SESSION['status'] = "login";
			$_SESSION['level'] = $pw['level'];

			header('location:administrator/home.php');
		} else {
			echo '<script>
		alert("login gagal");
		window.localtion.href="regitser.php";
		</script>';
		}
	} else {
		echo '<script>
		alert("username atau passsword salah ");
		window.localtion.href="regitser.php";
		</script>';
	}
}
