<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../index.php?pesan=belum_login");
}
?>
<?php

ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wisata Kabupaten Buol</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="../css/bootstrap.css" rel="stylesheet"> -->
  <link href="../assets/css/bootstrap.css" rel="stylesheet">

  <!-- Add custom CSS here -->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
  <!-- <link href="../css/sb-admin.css" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css"> -->
  <script src="https://kit.fontawesome.com/4d616e33a4.js" crossorigin="anonymous"></script>
  <style>
    .foto-profil {
      width: 3cm;
      height: 4cm;
    }
  </style>
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
          <li><a href="../home.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Input Data <b class="caret"></b></a>
            <ul class="dropdown-menu">

              <li><a href="../home.php?page=wisata">Wisata Alam</a></li>
              <li><a href="../home.php?page=wisata_pantai">Wisata Pantai</a></li>
              <li><a href="../home.php?page=wisata_kuliner">Wisata Kuliner</a></li>

              <?php if ($_SESSION['level'] == 'admin') : ?>
                <li><a href="../home.php?page=berita_info">Berita Informasi</a></li>
                <li><a href="../home.php?page=penginapan">Penginapan</a></li>
                <li><a href="../home.php?page=aboutus">About Us</a></li>
              <?php endif; ?>
            </ul>
          </li>

          <?php if ($_SESSION['level'] == 'admin') : ?>
            <li><a href="../home.php?page=data_user"><i class="fa fa-users"></i> Data User</a></li>
            <li><a href="../home.php?page=forumkontak"><i class="fa fa-envelope"></i> Pesan</a></li>
          <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="../home.php?page=profil"><i class="fa fa-user"></i> Profile</a></li>
              <!-- <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li> -->
              <li class="divider"></li>
              <li><a href="../../logout.php"><i class="fa fa-power-off" close></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>



    <div id="page-wrapper">