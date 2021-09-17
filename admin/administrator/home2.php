<?php
session_start();
if($_SESSION['status']!="login"){
  header("location:index.php?pesan=belum_login");
}
?>
<?php

ob_start();
require_once('config/koneksi.php');
require_once('models/database.php');

$connection = new Database ($host, $user, $pass, $database);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title> Admin Wisata Kabupaten Buol</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="assets/css/sb-admin.css" rel="stylesheet">
    <link rel="assets/stylesheet" href="font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/4d616e33a4.js" crossorigin="anonymous"></script>

  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="">Wisata Kabupaten Buol</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse  navbar-dark">
          <ul class="nav navbar-nav side-nav">
            <li><a href="?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Input Data <b class="caret"></b></a>
              <ul class="dropdown-menu">
                
                <li><a href="?page=wisata">Wisata Alam</a></li>
                <li><a href="?page=wisata_pantai">Wisata Pantai</a></li>
                <li><a href="?page=wisata_kuliner">Wisata Kuliner</a></li>
                <li><a href="?page=berita_info">Berita Informasi</a></li>
                <li><a href="?page=penginapan">Penginapan</a></li>
                
                <li><a href="?page=aboutus">About Us</a></li>
              </ul>
            <li><li><a href="?page=forumkontak">Pesan</a></li>
            </li>
          </ul>
          <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="?page=aboutus"><i class="fa fa-user"></i> Profile</a></li>
                <!-- <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li> -->
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-power-off" close></i> Log Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </nav>
    

      <div id="page-wrapper">
        
       <?php
       if(@$_GET['page'] == 'dashboard' || @$_GET['page'] == '' ) {
          include "views/dashboard.php";
       } else if (@$_GET['page'] == 'wisata') {
         include "views/wisata.php";
       } else if (@$_GET['page'] == 'wisata_pantai') {
         include "views/wisata_pantai.php";
       } else if (@$_GET['page'] == 'wisata_kuliner') {
         include "views/wisata_kuliner.php";
       } if (@$_GET['page'] == 'berita_info') {
         include "views/Berita_info.php";
       } if (@$_GET['page'] == 'penginapan') {
         include "views/penginapan.php";
       }if (@$_GET['page'] == 'forumkontak') {
         include "views/forumkontak.php";
       }if (@$_GET['page'] == 'aboutus') {
         include "views/aboutus.php";
       }if (@$_GET['page'] == 'Maps') {
         include "views/Maps.php";
       } if (@$_GET['page'] == 'balas_pesan') {
         include "views/balas_pesan.php";
       }

       ?>
        
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>

  </body>
</html>