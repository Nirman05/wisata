<div class="row">

  <body bgcolor="dark">
    <div class="col-lg-12">
      <h1>Dashboard <small>Admin</small></h1>
      <ol class="breadcrumb">
        <li style="color: #222s;"><i class="icon-dashboard"></i> Dashboard |  <b style="margin-left: 800px;"><?php echo date('l, d-m-Y');?></hb></li>

      </ol>
    </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div id="wisata">

    </div>
  </div>
</div>
<style>
  @import url(../../fonts/font-awesome/css/font-awesome.css);


  .rating {
    border: none;
    float: left;
  }

  .rating>input {
    display: none;
  }

  .rating>label::before {
    margin: 5px;
    font-size: 1.25em;
    font-family: FontAwesome;
    display: inline-block;
    content: "\f005";
  }

  .rating>label {
    color: #ddd;
    float: right;
  }

  .rating>input:checked~label,
  .rating:not(:checked)>label:hover,
  .rating:not(:checked)>label:hover~label {
    color: #f7d106;
  }

  .rating>input:checked+label:hover,
  .rating>input:checked~label:hover,
  .rating>label:hover~input:checked~label,
  .rating>input:checked~label:hover~label {
    color: #fce873;
  }

  h4 {
    font-weight: normal;
    margin-top: 40px;
    margin-bottom: 0px;
  }

  #hasil {
    font-size: 50px;
  }

  #star {
    float: left;
    padding-right: 20px;
  }

  #star span {
    padding: 3px;
    font-size: 20px;
  }

  .on {
    color: #f7d106
  }

  .off {
    color: #ddd;
  }
</style>
<div class="row">
  <h4 style="text-align: center;">Grafik Rating Tempat Wisata</h4>
  <hr />
  <div class="col-md-4 col-sm-12">
    <div id="container-alam"></div>
  </div>

  <div class="col-md-4 col-sm-12">
    <div id="container-pantai"></div>
  </div>

  <div class="col-md-4 col-sm-12">
    <div id="container-kuliner"></div>
  </div>
</div>
<div style="margin-bottom: 100px;">&nbsp;</div>
<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title"> FeedBack Rating User Wisata Alam </h3>
      </div>
      <div class="panel-body" style="height: 300px; overflow: scroll;">


        <div class="table-responsive">
          <!-- <table class="table table-hover  table-striped table-bordered table-sm tablesorter"> -->
          <table class="table table-bordered table-hover tablesorter">
            <thead>
            <tr>
              <th class="info">
                <div align="center">No.</div>
              </th>
              <th class="info">
                <div align="center">Wisata Alam</div>
              </th>
              <th class="info">
                <div align="center">Total Rating</div>
              </th>
            </tr>
            </thead>
            <tbody>
              <?php
              include 'config/koneksi.php';
              $no = 1;
              //ambil data
              if ($_SESSION['level'] == 'admin') {
                $get = $config->query("SELECT c.id_lokasi AS id_lokasi, nm_lokasi, AVG(rating) AS rating, nama_user,komentar,r.id_user AS id_user FROM df_wisata c LEFT JOIN t_rating r ON(c.id_lokasi = r.id_lokasi) GROUP BY c.id_lokasi ORDER BY rating DESC");
              } else {
                $get = $config->query("SELECT c.id_lokasi AS id_lokasi, nm_lokasi, AVG(rating) AS rating, nama_user,komentar,r.id_user AS id_user FROM df_wisata c LEFT JOIN t_rating r ON(c.id_lokasi = r.id_lokasi) WHERE c.id_user = '$_SESSION[id_user]' GROUP BY c.id_lokasi ORDER BY rating DESC");
              }

              //cek jumlah data
              if ($get->num_rows > 0) {

                //looping untuk membaca data
                while ($d = $get->fetch_assoc()) {
                  //buat looping untuk rating
                  $star = '';

                  for ($i = 1; $i <= 5; $i++) {
                    if ($i <= ceil($d['rating'])) {
                      //masukkan rating ke variabel $star
                      $star .= '<span class="on"><i class="fa fa-star"></i></span>';
                    } else {
                      //masukkan rating ke variabel $star
                      $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                    }
                  } ?>



                  <tr>
                    <td align="center"><?php echo $no++; ?></td>
                    <td>
                      <div align="LEFT"><?php echo $d['nm_lokasi']; ?></div>
                    </td>
                    <td>
                      <div align="justify">
                        <div class="star">
                          <?php echo $star; ?> <small>(<?php echo ($d['rating'] != '') ? (int)$d['rating'] : 0; ?>/5)</small>

                        </div>
                      </div>
                    </td>


                    <!-- Akhir rate wisata Alam -->

                  </tr>
              <?php
                }
              }
              ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </div>


  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title"> FeedBack Rating User Wisata Pantai</h3>
      </div>
      <div class="panel-body " style="height: 300px; overflow: scroll;">



        <div class="table-responsive">
          <table class="table table-hover table-striped table-bordered table-sm">
            <tr>
              <th class="info">
                <div align="center">No.</div>
              </th>
              <th class="info">
                <div align="center">Wisata Pantai</div>
              </th>

              <th class="info">
                <div align="center">Total Rating</div>
              </th>


            </tr>

            <?php
            include 'config/koneksi.php';
            $no = 1;
            //ambil data
            if ($_SESSION['level'] == 'admin') {
              $get = $config->query("SELECT c.id_pantai AS id_pantai, nm_pantai,  AVG(rating) AS rating, nama_user,komentar, r.id_user AS id_user FROM pantai c LEFT JOIN p_rating r ON(c.id_pantai = r.id_pantai) GROUP BY c.id_pantai ORDER BY rating DESC");
            } else {
              $get = $config->query("SELECT c.id_pantai AS id_pantai, nm_pantai,  AVG(rating) AS rating, nama_user,komentar, r.id_user AS id_user FROM pantai c LEFT JOIN p_rating r ON(c.id_pantai = r.id_pantai) WHERE c.id_user = '$_SESSION[id_user]' GROUP BY c.id_pantai ORDER BY rating DESC");
            }
            //cek jumlah data
            if ($get->num_rows > 0) {

              //looping untuk membaca data
              while ($d = $get->fetch_assoc()) {
                //buat looping untuk rating
                $star = '';

                for ($i = 1; $i <= 5; $i++) {
                  if ($i <= ceil($d['rating'])) {
                    //masukkan rating ke variabel $star
                    $star .= '<span class="on"><i class="fa fa-star"></i></span>';
                  } else {
                    //masukkan rating ke variabel $star
                    $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                  }
                } ?>



                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td>
                    <div align="LEFT"><?php echo $d['nm_pantai']; ?></div>
                  </td>
                  <td>
                    <div align="justify">
                      <div align="justify">
                        <div class="star">
                          <?php echo $star; ?> <small>(<?php echo ($d['rating'] != '') ? (int)$d['rating'] : 0; ?>/5)</small>

                        </div>
                      </div>
                  </td>



                </tr>
            <?php
              }
            }
            ?>

          </table>
        </div>
      </div>
    </div>
  </div>


  <div class="col-lg-4">
    <div class="panel panel-danger">
      <div class="panel-heading">
        <h3 class="panel-title"> FeedBack Rating User Wisata Kuliner</h3>
      </div>
      <div class="panel-body" style="height: 300px; overflow: scroll; ">


        <div class="table-responsive">
          <table class="table table-hover table-striped table-bordered table-sm">
            <tr>
              <th class="info">
                <div align="center">No.</div>
              </th>
              <th class="info">
                <div align="center">Wisata Kuliner</div>
              </th>

              <th class="info">
                <div align="center">Total Rating</div>
              </th>


            </tr>

            <?php
            include 'config/koneksi.php';
            $no = 1;
            //ambil data
            if ($_SESSION['level'] == 'admin') {
              $get = $config->query("SELECT c.id_kuliner AS id_kuliner, nm_kuliner,  AVG(rating) AS rating, nama_user,komentar, r.id_user AS id_user FROM df_kuliner c LEFT JOIN k_rating r ON(c.id_kuliner = r.id_kuliner) GROUP BY c.id_kuliner ORDER BY rating DESC");
            } else {
              $get = $config->query("SELECT c.id_kuliner AS id_kuliner, nm_kuliner,  AVG(rating) AS rating, nama_user,komentar, r.id_user AS id_user FROM df_kuliner c LEFT JOIN k_rating r ON(c.id_kuliner = r.id_kuliner) WHERE c.id_user = '$_SESSION[id_user]' GROUP BY c.id_kuliner ORDER BY rating DESC");
            }

            //cek jumlah data
            if ($get->num_rows > 0) {

              //looping untuk membaca data
              while ($d = $get->fetch_assoc()) {
                //buat looping untuk rating
                $star = '';

                for ($i = 1; $i <= 5; $i++) {
                  if ($i <= ceil($d['rating'])) {
                    //masukkan rating ke variabel $star
                    $star .= '<span class="on"><i class="fa fa-star"></i></span>';
                  } else {
                    //masukkan rating ke variabel $star
                    $star .= '<span class="off"><i class="fa fa-star"></i></span>';
                  }
                } ?>



                <tr>
                  <td align="center"><?php echo $no++; ?></td>
                  <td>
                    <div align="LEFT"><?php echo $d['nm_kuliner']; ?></div>
                  </td>
                  <td>
                    <div align="justify">
                      <div class="star">
                        <?php echo $star; ?> <small>(<?php echo ($d['rating'] != '') ? (int)$d['rating'] : 0; ?>/5)</small>

                      </div>
                    </div>
                  </td>



                </tr>
            <?php
              }
            }
            ?>



          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<br><br><br><br><br><br><br><br>
<hr>
<?php
include 'assets/template/footer.php';
?>