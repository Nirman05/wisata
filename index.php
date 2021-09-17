<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="css2.css">

  <title>Wisata</title>
</head>
<header>
<body id="page-top">
  <nav class="navbar navbar-expand-lg  shadow p-3  navbar-dark bg-dark  fixed-top " id="mainNav">
    <div class="container">
      <a class="navbar-brand " href="./">
        <img src="image/logo.jpg" width="40" height="40" class="rounded mr-3" class="d-inline-block align-top " alt="wisata" loading="lazy">Wisata Kabupaten Buol</a>
          <button class="navbar-toggler navbar-toggler-right ml-auto " type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link  js-scroll-trigger ml-2" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <p>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=informasi">Informasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=hubngi_km">Hubungi Kami</a>

            </li>
            <li class="nav-item">
              <a class="nav-link  js-scroll-trigger ml-2" href="?page=About">About</a>
            </li>
          </p>
        </ul>
      </div>
  </nav>
</header>
  <br>
<main role="main">  
  <div class="container">
    <div id="wisatabuol" class="carousel slide" data-ride="carousel" style=" margin-top: 60px;">
        <ol class="carousel-indicators">
          <li data-target="#wisatabuol" data-slide-to="0" class="active"></li>
          <li data-target="#wisatabuol" data-slide-to="1"></li>
          <li data-target="#wisatabuol" data-slide-to="2"></li>
        </ol>
      <div class="carousel-inner ">
          <div class="carousel-item active">
            <img src="image/pulau-boki-min.jpg" class="d-block w-100" alt="Gambar">
                <div class="carousel-caption d-none d-lg-block">
                  <h1>Pulau Panjang</h1>
                  <p>Pulau Panjang Yang Terkenl Di Pulau Palele</p>
                </div>
          </div>
        <div class="carousel-item">
          <img src="image/pulau-busakk-min.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-lg-block">
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

<!-- col2 tes -->

<!-- akhir -->
<!-- navbar 2 -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-4 shadow p-3 mb-4" class="nav2">
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
              <a class="dropdown-item" href="?page=wisata_alam">Wisata Alam</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?page=wisata_pantai">Wisata Pantai</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="?page=wisata_kuliner">Wisata Kuliner</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=peta">Peta Lokasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="?page=penginapan">Penginapan</a>
          </li>


        </ul>
      </div>
    </nav>
  <!-- </div> -->

    <div id="page-wrapper">

      <?php
      if (@$_GET['page'] == 'home' || @$_GET['page'] == '') {
        include "user/home.php";
      } else if (@$_GET['page'] == 'wisata_alam') {
        include "user/wisata_alam.php";
      } else if (@$_GET['page'] == 'wisata_pantai') {
        include "pantai/wisata_pantai.php";
      } else if (@$_GET['page'] == 'wisata_kuliner') {
        include "kuliner/wisata_kuliner.php";
      } else if (@$_GET['page'] == 'informasi') {
        include "user/Informasi.php";
      } else if (@$_GET['page'] == 'hubngi_km') {
        include "./hubngi_km.php";
      } else if (@$_GET['page'] == 'About') {
        include "user/About.php";
      } else if (@$_GET['page'] == 'peta') {
        include "user/peta.php";
      } else if (@$_GET['page'] == 'penginapan') {
        include "user/penginapan.php";
      } else if (@$_GET['page'] == 'detail') {
        include "user/detail.php";
      } else if (@$_GET['page'] == 'detail_p') {
        include "pantai/detail_p.php";
      } else if (@$_GET['page'] == 'detail_k') {
        include "kuliner/detail_k.php";
      } else if (@$_GET['page'] == 'rute') {
        include "user/rute.php";
      } else if (@$_GET['page'] == 'rute_pantai') {
        include "pantai/rute.php";
      } else if (@$_GET['page'] == 'rute_k') {
        include "kuliner/rute_k.php";
      } else if (@$_GET['page'] == 'rute_pn') {
        include "user/rute_pn.php";
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
  </main>
</body>

<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {

    $('.rate').click(function() {
      if ($(this).val() == 5) {
        $('.perbaikan').hide();
        $('.feedback').show();
      } else {
        $('.perbaikan').show();
        $('.feedback').hide();
      }
    });

    $("#button-submit").click(function() {
      var rating = $('input[name="rating"]:checked').val();

      $.ajax({
        url: "pantai/proses_p.php",
        method: "POST",
        data: {
          rate: rating,
          id: $('#IDContent').val(),
          komentar: $('#komentar').val()
        },
        success: function(obj) {
          alert("terima kasih atas penilaian anda");
          location.href = 'detail_p.php?id=' + $('#IDContent').val();
        }
      });
    });

    //proses ajax untuk melakukan filter jika button di klik
    $('.rating-filter').click(function() {
      var id = $('#IDContent').val();
      var rate = $(this).val();
       
      $.ajax({
        url: "./pantai/proses_ajxp.php", //ini mengarah ke file proses_ajax
        method: "POST",
        data: {
          rate: rate,
          id: id
        },
        success: function(obj) {
          //ganti tampilan yang ada diantara div dengan id komentar-list
          $('#komentar-list').html(obj);
        }
      });
    });
  });
</script>
<!-- akhir ajax pantai-->

<!-- ajax wisata alam -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#button-submit").click(function() {
      var rating = $('input[name="rating"]:checked').val();

      $.ajax({
        url: "./rate/proses.php",
        method: "POST",
        data: {
          rate: rating,
          id: $('#IDContent').val(),
          komentar: $('#komentar').val()
        },
        success: function(obj) {
          alert("terima kasih atas penilaian anda");
          location.href = 'detail.php?id=' + $('#IDContent').val();
        }
      });
    });

    //proses ajax untuk melakukan filter jika button di klik
    $('.rating-filter').click(function() {
      var id = $('#IDContent').val();
      var rate = $(this).val();

      $.ajax({
        url: "./rate/proses_ajxa.php", //ini mengarah ke file proses_ajax
        method: "POST",
        data: {
          rate: rate,
          id: id
        },
        success: function(obj) {
          //ganti tampilan yang ada diantara div dengan id komentar-list
          $('#komentar-lista').html(obj);
        }
      });
    });
  });

</script>
<!-- Akhir -->
<!-- Awal -->
<script type="text/javascript">
  $(document).ready(function() {
    $("#button-submit").click(function() {
      var rating = $('input[name="rating"]:checked').val();

      $.ajax({
        url: "kuliner/proses.php",
        method: "POST",
        data: {
          rate: rating,
          id: $('#IDContent').val(),
          komentar: $('#komentar').val()
        },
        success: function(obj) {
          alert("terima kasih atas penilaian anda");
          location.href = 'detail.php?id=' + $('#IDContent').val();
        }
      });
    });

    //proses ajax untuk melakukan filter jika button di klik
    $('.rating-filter').click(function() {
      var id = $('#IDContent').val();
      var rate = $(this).val();

      $.ajax({
        url: "./kuliner/proses_ajaxk.php", //ini mengarah ke file proses_ajax
        method: "POST",
        data: {
          rate: rate,
          id: id
        },
        success: function(obj) {
          //ganti tampilan yang ada diantara div dengan id komentar-list
          $('#komentar-kuliner').html(obj);
        }
      });
    });
  });
</script>

</html>
<!-- js ofline -->



<!-- js online -->
<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> -->