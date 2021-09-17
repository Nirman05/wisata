<?php
require 'function.php';

?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Login Wisata Buol </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Buat Akun Baru </h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Register</h3>
		      	

			<form method="post" class="login-form">
		      		<div class="form-group">
		      			<label for="username">Nama</label>
		      			<input type="text" name="username" id="username" class="form-control rounded-left" placeholder="Username" required>
		      		</div>
		      		<div class="form-group">
		      			<label for="email">Email</label>
		      			<input type="email" name="email" id="email" class="form-control rounded-left" placeholder="contoh@gmail.com" required>
		      		</div>
	            <div class="form-group ">
	            	<label for="password">Password</label>
	              <input type="password" name="password" id="password" class="form-control rounded-left" placeholder="Password" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" name="register" class="form-control btn btn-primary rounded submit px-3">Register</button>
	            </div>
	            <div class="form-group d-md-flex">
	            	<div class="w-50">
	            		<label >Sudah Punya Akun?
									  <!-- <input type="checkbox" checked>
									  <span class="checkmark"></span> -->
									</label>
								</div>
								<div class="w-50 text-md-right">
									Silahkan <a href="index.php">-><u><b>Login</b></u></a>
								</div>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

