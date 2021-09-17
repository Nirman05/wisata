<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="rate/stylem.css">

  <title>Wisata</title>
</head>

<body id="page-top">
  <nav class="navbar navbar-expand-sm  shadow p-3 mb-5 navbar-dark bg-dark  rounded fixed-top " id="mainNav">
    <div class="container">
      <a class="navbar-brand " href="#wisata">
        <img src="image/logo.jpg" width="40" height="40" class="rounded mr-3" class="d-inline-block align-top " alt="wisata" loading="lazy">Wisata Kabupaten Buol</a>
      <button class="navbar-toggler navbar-toggler-right ml-auto mt-2" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link  js-scroll-trigger ml-2" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <p>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=Informasi">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=hubngi_km">Hubungi Kami</a>

            </li>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=About">About</a>
            </li>
        </ul>
        </p>
      </div>

  </nav>
  </div><br>
  <div class="container mt-5 ">
    <div id="wisatabuo" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#wisatabuol" data-slide-to="0" class="active"></li>
        <li data-target="#wisatabuol" data-slide-to="1"></li>
        <li data-target="#wisatabuol" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner ">
        <div class="carousel-item active">
          <img src="image/pulau-boki.jpg" class="d-block w-100" alt="Gambar">
          <div class="carousel-caption d-none d-sm-block">
            <h1>Pulau Panjang</h1>
            <p>Pulau Panjang Yang Terkenl Di Pulau Palele</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/pulau-busakk.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-sm-block">
            <h1>Pulau Busak</h1>
            <p>Pulau Busak Yang Sering Dikunjungi Wisatawan</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="image/pulau-bokii.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-sm-block">
            <h1>Pulau Boki</h1>
            <p>Pesona Pulau Boki Yang Sangat Memukau</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#wisatabuol" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#wisatabuol" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-4 shadow p-3 mb-4">
      <a class="navbar-brand " href="index.php">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Daftar Wisata
            </a>
            <div class="dropdown-menu " aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="?page=wisata_alam"> wisat Alam</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?page=ws1">Wisata Pantai</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Wisata Kuliner</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=halamanrat">Peta Lokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"></a>
          </li>

        </ul>
      </div>
    </nav>

    <div id="page-wrapper">

      <?php
      if (@$_GET['page'] == 'home' || @$_GET['page'] == '') {
        include "user/home.php";
      } else if (@$_GET['page'] == 'wisata_alam') {
        include "user/wisata_alam.php";
      } else if (@$_GET['page'] == 'Informasi') {
        include "user/Informasi.php";
      } else if (@$_GET['page'] == 'hubngi_km') {
        include "user/hubngi_km.php";
      } else if (@$_GET['page'] == 'About') {
        include "user/About.php";
      } else if (@$_GET['page'] == 'detail') {
        include "user/detail.php";
      } else {
        echo "<center> <h1> Maaf Halaman Tidak Ditemukan! </h1>";
      }

      ?>

    </div><!-- /#page-wrapper -->


    <footer class="fixed-botom">
      <hr>
      <div class="row">
        <div class="col-lg-12 text-center">

          <strong>Copyright &copy; 2020 | Moh Nirman R </strong> <small>20152205051</small> All rights
          reserved.
        </div>
      </div>

    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="../js/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <!-- rating.js file -->
    <script src="../Buol/_halaman/rating.js"></script>
</body>

</html>