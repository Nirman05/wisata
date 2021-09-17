<?php
if ($_SESSION['level'] != "admin") {
  header("location:./home.php?page=dashboard");
}
?>
<div class="row">
  <div class="col-lg-12">
    <h1>Pesan <small>info</small></h1>
    <ol class="breadcrumb">

    </ol>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <h2>Data Pesan </h2>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive table-center">
      <div style="height: 450px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-md " id="example1">
        <thead>
        <tr>

          <th>
            <div align="center" >No. </div>
          </th>
          <th>
            <div align="center">Nama User </div>
          </th>
          <th>
            <div align="center">Email </div>
          </th>
          <th>
            <div align="center">Pesan </div>
          </th>
          <th>
            <div align="center">Rating  </div>
          </th>
          <th >
            <div align="center">Aksi</div>
          </th>

        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sql = mysqli_query($config, "SELECT * FROM fr_kontak");
         // $nomor = $halaman_awal+1;
        while ($data = mysqli_fetch_array($sql)) {
        ?>

          <tr>
            <td align="center" ><?php echo $no++ . "."; ?></td>
            <td>
              <div align="rights"><?php echo $data['nama']; ?></div>
            </td>
            <td>
              <div align="rights"><?php echo $data['email']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['pesan']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['rate']; ?></div>
            </td>

            <td>
              <div align="center">
                <!-- <a class="btn btn-info btn-xs" href="views/balas_pesan.php">Balas</a></td><td> -->

                <a class="btn btn-danger btn-xs" href="models/deltfr_kontak.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Hapus data?')" class="alert alert-danger" role="alert">Hapus
                </a>
              </div>
            </td>
          </tr>
       



        <?php
        } ?>
        </tbody>
      </table>
     
      </div>
    </div>
  </div>
</div>
<hr>
<div class="row">
  <div class="col-lg-12">
    <h2>Data Pesan Wisata Alam</h2>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <div style="height: 450px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-sm tablesorter " id="walam">
        <thead>
        <tr>
          <th>
            <div align="center">No.<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Nama User<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Pesan<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Saran Perbaikan/Feedback<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Lokasi<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Rating<i class="fa fa-sort" > </i></div>
          </th>
          <th >
            <div align="center">Aksi</div>
          </th>

        </tr>
      </thead>
        <?php
        $no = 1;
        $sql = mysqli_query($config, "SELECT r.id_user AS id_user, nama_user, rating, perbaikan, komentar, nm_lokasi, r.id_lokasi AS id_wisata FROM t_rating r JOIN df_wisata d ON(r.id_lokasi = d.id_lokasi)") or die(mysqli_error($config));
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <td align="center"><?php echo $no++ . "."; ?></td>
            <td>
              <div align="rights"><?php echo $data['nama_user']; ?></div>
            </td>
            <td>
              <div align="rights"><?php echo $data['komentar']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['perbaikan']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['nm_lokasi']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['rating']; ?></div>
            </td>

            <td>
              <div align="center">
                <!-- <a class="btn btn-info btn-xs" href="views/balas_pesan.php">Balas</a></td><td> -->

                <a class="btn btn-danger btn-xs" href="models/delt_alam.php?id=<?php echo $data['id_user']; ?>&wisata=<?php echo $data['id_wisata']; ?>" onclick="return confirm('Hapus data?')" class="alert alert-danger" role="alert">Hapus
                </a>
              </div>
            </td>
          </tr>

        <?php
        } ?>
      </table>
    </div>
    </div>
  </div>
</div>


<div class="row">
  <div class="col-lg-12">
    <hr><h2>Data Pesan Wisata Pantai</h2>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <div style="height: 450px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-sm " id="pantai">
        <thead>
            <tr>
              <th>
                <div align="center">No.</div>
              </th>
              <th>
                <div align="center">Nama User</div>
              </th>
              <th>
                <div align="center">Pesan</div>
              </th>
              <th>
                <div align="center">Saran Perbaikan / Feedback</div>
              </th>
              <th>
                <div align="center">Lokasi</div>
              </th>
              <th>
                <div align="center">Rating</div>
              </th>
              <th>
                <div align="center">Aksi</div>
              </th>

            </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $sql = mysqli_query($config, "SELECT p.id_user AS id_user, rating, perbaikan, nama_user, komentar, nm_pantai, p.id_pantai AS id_pantai FROM p_rating p JOIN pantai pa ON(p.id_pantai = pa.id_pantai) ");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
                <td align="center"><?php echo $no++ . "."; ?></td>
                <td>
                  <div align="rights"><?php echo $data['nama_user']; ?></div>
                </td>
                <td>
                  <div align="rights"><?php echo $data['komentar']; ?></div>
                </td>
                <td>
                  <div align="justify"><?php echo $data['perbaikan']; ?></div>
                </td>
                <td>
                  <div align="justify"><?php echo $data['nm_pantai']; ?></div>
                </td>
                <td>
                  <div align="justify"><?php echo $data['rating']; ?></div>
                </td>

                <td>
                  <div align="center">
                    <!-- <a class="btn btn-info btn-xs" href="views/balas_pesan.php">Balas</a></td><td> -->

                    <a class="btn btn-danger btn-xs" href="models/delt_pantai.php?id=<?php echo $data['id_user']; ?>&pantai=<?php echo $data['id_pantai']; ?>" onclick="return confirm('Hapus data?')" class="alert alert-danger" role="alert">Hapus
                    </a>
                  </div>
                </td>
          </tr>
        
        <?php
        } ?>
        </tbody>
      </table>
     </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12"><hr>
    <h2>Data Pesan Wisata Kuliner</h2>
  </div>
</div>

<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <div style="height: 450px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-sm " id="example">
        <thead>
        <tr>
          <th>
            <div align="center">No.<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Nama User<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Pesan<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Saran Perbaikan / Feedback<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Lokasi<i class="fa fa-sort" > </i></div>
          </th>
          <th>
            <div align="center">Rating<i class="fa fa-sort" > </i></div>
          </th>
          
          <th >
            <div align="center">Aksi</div>
          </th>

        </tr>
      </thead>
      <tbody>
        <?php



        $no = 1;
        $sql = mysqli_query($config, "SELECT r.id_user AS id_user, rating, nama_user, perbaikan, komentar, nm_kuliner, r.id_kuliner AS id_kuliner FROM k_rating r JOIN df_kuliner k ON(r.id_kuliner = k.id_kuliner)");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <td align="center"><?php echo $no++ . "."; ?></td>
            <td>
              <div align="rights"><?php echo $data['nama_user']; ?></div>
            </td>
            <td>
              <div align="rights"><?php echo $data['komentar']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['perbaikan']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['nm_kuliner']; ?></div>
            </td>
            <td>
              <div align="justify"><?php echo $data['rating']; ?></div>
            </td>

            <td>
              <div align="center">
                <!-- <a class="btn btn-info btn-xs" href="views/balas_pesan.php">Balas</a></td><td> -->

                <a class="btn btn-danger btn-xs" href="models/delt_kuliner.php?id=<?php echo $data['id_user']; ?>&kuliner=<?php echo $data['id_kuliner']; ?>" onclick="return confirm('Hapus data?')" class="alert alert-danger" role="alert">Hapus
                </a>
              </div>
                </td>
          </tr>
        <?php
        } ?>
      </tbody>
      </table>

      </div>
    </div>
  </div>
</div>
