<?php
session_start();
if ($_SESSION['status'] != "login") {
  header("location:../index.php?pesan=belum_login");
}
?>
<?php

ob_start();
require_once('config/koneksi.php');
require_once('models/database.php');

$connection = new Database($host, $user, $pass, $database);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title> Admin Wisata Kabupaten Buol</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/ajaxtabel/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/ajaxtabel/datatables.min.css"/>

  <!-- Add custom CSS here -->
  <link href="assets/css/sb-admin.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/4d616e33a4.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.1.0.js"></script>



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
        <a class="navbar-brand" href="home.php?page=dashboard">Wisata Kabupaten Buol</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-ex1-collapse  navbar-dark">
        <ul class="nav navbar-nav side-nav">
          <li><a href="home.php?page=dashboard"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-caret-square-o-down"></i> Input Data <b class="caret"></b></a>
            <ul class="dropdown-menu">

              <li><a href="home.php?page=wisata">Wisata Alam</a></li>
              <li><a href="home.php?page=wisata_pantai">Wisata Pantai</a></li>
              <li><a href="home.php?page=wisata_kuliner">Wisata Kuliner</a></li>

              <?php if ($_SESSION['level'] == 'admin') : ?>
                <li><a href="home.php?page=berita_info">Berita Informasi</a></li>
                <li><a href="home.php?page=penginapan">Penginapan</a></li>
                <li><a href="home.php?page=aboutus">About Us</a></li>
              <?php endif; ?>

            </ul>
          </li>
          <?php if ($_SESSION['level'] == 'admin') : ?>
            <li><a href="home.php?page=data_user"><i class="fa fa-users"></i> Data User</a></li>
            <li><a href="home.php?page=forumkontak"><i class="fa fa-envelope"></i> Pesan</a></li>
          <?php endif; ?>
          <?php if ($_SESSION['level'] == 'user') : ?>
            <li><a href="home.php?page=forumuser"><i class="fa fa-envelope"></i> Pesan</a></li>
          <?php endif; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right navbar-user">
          <li class="dropdown user-dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?= $_SESSION['username']; ?> <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="home.php?page=profil"><i class="fa fa-user"></i> Profile</a></li>
              <!-- <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li> -->
              <li class="divider"></li>
              <li><a href="../logout.php"><i class="fa fa-power-off" close></i> Log Out</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </nav>


    <div id="page-wrapper">

      <?php
      if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') {
        include "views/dashboard.php";
      } else if (@$_GET['page'] == 'wisata') {
        include "views/wisata.php";
      } else if (@$_GET['page'] == 'wisata_pantai') {
        include "views/wisata_pantai.php";
      } else if (@$_GET['page'] == 'wisata_kuliner') {
        include "views/wisata_kuliner.php";
      }
      if (@$_GET['page'] == 'berita_info') {
        include "views/Berita_info.php";
      }
      if (@$_GET['page'] == 'penginapan') {
        include "views/penginapan.php";
      }
      if (@$_GET['page'] == 'forumkontak') {
        include "views/forumkontak.php";
      }
      if (@$_GET['page'] == 'aboutus') {
        include "views/aboutus.php";
      }
      if (@$_GET['page'] == 'Maps') {
        include "views/Maps.php";
      }
      if (@$_GET['page'] == 'balas_pesan') {
        include "views/balas_pesan.php";
      }
      if (@$_GET['page'] == 'data_user') {
        include "views/data_user.php";
      }
      if (@$_GET['page'] == 'profil') {
        include "views/profil.php";
      }
      if (@$_GET['page'] == 'forumuser') {
        include "views/forumuser.php";
      }
      ?>

    </div><!-- /#page-wrapper -->

  </div><!-- /#wrapper -->

  <!-- JavaScript -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <script src="assets/js/bootstrap.js"></script>

  <!-- <script src="assets/ajaxtabel/js/jquery-3.5.1.js"></script> -->
    
    <script src="assets/ajaxtabel/js/jquery.dataTables.min.js"></script>
    <script src="assets/ajaxtabel/js/dataTables.bootstrap.min.js"></script>
<!-- <script src="assets/js/tablesorter/jquery.tablesorter.js"></script>
    <script src="assets/js/tablesorter/tables.js"></script>
  <script src="assets/js/tablesorter/jquery.tablesorter.js"></script>
<script src="assets/js/tablesorter/tables.js"></script>
 -->
   
  
    
  <!-- script untuk chart -->
  <?php
  if (@$_GET['page'] == 'dashboard' || @$_GET['page'] == '') :

    //cek apakah yang login admin atau user
    $arr_alam = '';
    $arr_pantai = '';
    $arr_kuliner = '';

    if (@$_SESSION['level'] == 'admin') {
      $alam = mysqli_query($config, "SELECT nm_lokasi, AVG(rating) AS rating FROM df_wisata LEFT JOIN t_rating ON(df_wisata.id_lokasi = t_rating.id_lokasi) GROUP BY df_wisata.id_lokasi");

      $pantai = mysqli_query($config, "SELECT nm_pantai, AVG(rating) AS rating FROM pantai LEFT JOIN p_rating ON(pantai.id_pantai = p_rating.id_pantai) GROUP BY pantai.id_pantai");

      $kuliner = mysqli_query($config, "SELECT nm_kuliner, AVG(rating) AS rating FROM df_kuliner LEFT JOIN k_rating ON(df_kuliner.id_kuliner = k_rating.id_kuliner) GROUP BY df_kuliner.id_kuliner");
    } else {
      $alam = mysqli_query($config, "SELECT nm_lokasi, AVG(rating) AS rating FROM df_wisata LEFT JOIN t_rating ON(df_wisata.id_lokasi = t_rating.id_lokasi) WHERE df_wisata.id_user = '$_SESSION[id_user]' GROUP BY df_wisata.id_lokasi");

      $pantai = mysqli_query($config, "SELECT nm_pantai, AVG(rating) AS rating FROM pantai LEFT JOIN p_rating ON(pantai.id_pantai = p_rating.id_pantai) WHERE pantai.id_user = '$_SESSION[id_user]' GROUP BY pantai.id_pantai");

      $kuliner = mysqli_query($config, "SELECT nm_kuliner, AVG(rating) AS rating FROM df_kuliner LEFT JOIN k_rating ON(df_kuliner.id_kuliner = k_rating.id_kuliner) WHERE df_kuliner.id_user = '$_SESSION[id_user]' GROUP BY df_kuliner.id_kuliner");
    }


    if (mysqli_num_rows($alam) > 0) {
      while ($a = mysqli_fetch_array($alam)) {
        $rate_alam = ($a['rating'] != null) ? $a['rating'] : 0;
        $arr_alam .= '[\'' . $a['nm_lokasi'] . '\',' . $rate_alam . '],';
      }
    }

    if (mysqli_num_rows($pantai) > 0) {
      while ($p = mysqli_fetch_array($pantai)) {
        $rate_pantai = ($p['rating'] != null) ? $p['rating'] : 0;
        $arr_pantai .= '[\'' . $p['nm_pantai'] . '\',' . $rate_pantai . '],';
      }
    }

    if (mysqli_num_rows($kuliner) > 0) {
      while ($k = mysqli_fetch_array($kuliner)) {
        $rate_kuliner = ($k['rating'] != null) ? $k['rating'] : 0;
        $arr_kuliner .= '[\'' . $k['nm_kuliner'] . '\',' . $rate_kuliner . '],';
      }
    }

  ?>
    <script src="assets/js/highcharts.js"></script>
    <script>
      Highcharts.chart('container-alam', {
        chart: {
          type: 'column'
        },
        title: {
          text: 'Rating Wisata Alam'
        },
        xAxis: {
          type: 'category',
          labels: {
            rotation: -45,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Rating'
          }
        },
        legend: {
          enabled: false
        },
        series: [{
          name: 'Rating',
          data: [
            <?= $arr_alam; ?>
          ],
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}',
            y: 10,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        }]
      });

      Highcharts.chart('container-pantai', {
        chart: {
          type: 'column'
        },
        title: {
          text: 'Rating Wisata Pantai'
        },
        xAxis: {
          type: 'category',
          labels: {
            rotation: -45,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Rating'
          }
        },
        legend: {
          enabled: false
        },
        series: [{
          name: 'Rating',
          data: [
            <?= $arr_pantai; ?>
          ],
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}',
            y: 10,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        }]
      });

      Highcharts.chart('container-kuliner', {
        chart: {
          type: 'column'
        },
        title: {
          text: 'Rating Wisata Kuliner'
        },
        xAxis: {
          type: 'category',
          labels: {
            rotation: -45,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        },
        yAxis: {
          min: 0,
          title: {
            text: 'Rating'
          }
        },
        legend: {
          enabled: false
        },
        series: [{
          name: 'Rating',
          data: [
            <?= $arr_kuliner; ?>
          ],
          dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}',
            y: 10,
            style: {
              fontSize: '13px',
              fontFamily: 'Verdana, sans-serif'
            }
          }
        }]
      });
      // baru
      
    </script>
  <?php endif; ?>

    

</body>

 
<script type="text/javascript" src="assets/ajaxtabel/datatables.min.js"></script>
 <script >
        $(document).ready(function() {
    $('#example').DataTable();
        } );
    </script>
    <script >
        $(document).ready(function() {
    $('#example1').DataTable();
        } );
    </script>
    <script >
        $(document).ready(function() {
    $('#pantai').DataTable();
        } );
    </script>
    <script >
        $(document).ready(function() {
    $('#walam').DataTable();
        } );
    </script>
    
<!-- user -->
    <script >
        $(document).ready(function() {
    $('#ualam').DataTable();
        } );
    </script>
     <script >
        $(document).ready(function() {
    $('#upantai').DataTable();
        } );
    </script>
     <script >
        $(document).ready(function() {
    $('#upantai').DataTable();
        } );
    </script>
     <script >
        $(document).ready(function() {
    $('#ukuliner').DataTable();
        } );
    </script>

<!-- <script src="assets/js/tablesorter/tables.js"></script> -->

</html>