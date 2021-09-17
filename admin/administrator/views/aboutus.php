<?php
if ($_SESSION['level'] != "admin") {
  header("location:./home.php?page=dashboard");
}
?>

  <div class="row">
    <div class="col-lg-4">        
      <div class="panel panel-default">
            <!-- panel body -->
            <div class="panel-body">
                Basic panel
                <div class="table-responsive-sm">
                  <!-- <div class="table table-bordered table-hover table-striped"> -->
                    <table class="table table-bordered  table-striped table-hover">
                    <tr>
                      <!-- <th>
                        <div align="center">No.</div>
                      </th> -->
                      <th>
                        <div align="center">About US</div>
                      </th>
                      <th>
                        <div align="center">Gambar</div>
                      </th>
                      <th colspan="2">
                        <div align="center">Aksi</div>
                      </th>
                    </tr>
          <?php
            include 'config/koneksi.php';
            $no = 1;
            $sql = mysqli_query($config, "SELECT * FROM about_us");
            while ($data = mysqli_fetch_array($sql)) {
            ?>
                      <tr>
                        <!-- <td align="center"><?php echo $no++ . "."; ?></td> -->
                        
                        <td>
                          <div align="justify"><?php echo $data['informasi']; ?></div>
                        </td>
                        <td>
                          <div align="center">
                            <img src="assets/img/foto_wisata/<?php echo $data['gambar_ab']; ?>" width="70px">
                          </div>
                        </td>
                        <td>
                          <div align="center">
                            <a class="btn btn-info btn-xs" href="">Edit</a></div>
                        </td>
                        <td>
                          <div align="center">
                            <a class="btn btn-danger btn-xs" href="models/delt_about.php?id=<?php echo $data['id_ab']; ?>">Hapus</a></div>
                        </td>
          
                      </tr>
                      <?php }?>
                      </table>
                  </div>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah" > Tambah Data</button>
                </div>
            
            <!-- akhir body -->
    




  <div id="tambah" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"> Input Data About</h4>
        </div>
        <form action="" method="post" enctype="multipart/form-data">
          <div class="modal-body">
            <div class="form-group">
              <label>Informasi</label>
              <div class="box-body pad">
                <textarea id="informasi" name="informasi" class="form_control" type="text" rows="2" cols="80" required></textarea>
              </div>
            </div>
            <div class="form-group">
              <label class="control-label" for="gambar">Gambar</label>
              <input type="file" name="gambar_ab" class="form-control" required>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-danger">resest</button>
              <button type="submit" class="btn btn-success" name="tambah" value="simpan">simpan</button>
            </div>
          </div>
        </form>
        <?php
        if (isset($_POST['tambah'])) {

          $informasi = $_POST['informasi'];

          $extensi = explode(".", $_FILES['gambar_ab']['name']);
          $gambar_ab = "brg-" . round(microtime(true)) . "." . end($extensi);
          $sumber = $_FILES['gambar_ab']['tmp_name'];
          $upload = move_uploaded_file($sumber, "assets/img/foto_wisata/" . $gambar_ab);
          if ($upload) {
            mysqli_query($config, "INSERT INTO about_us VALUES ('','$informasi','$gambar_ab')");
            header("location: ?page=aboutus");
          } else {
            echo "<script> alert('upload gambar gagal!')</script> ";
          }
        }
        ?>
      </div>
    </div>
  </div>
</div>
</div>

<div id="About"><?php
                include 'config/koneksi.php';
                $sql = mysqli_query($config, 'SELECT * FROM about_us');
                while ($d = mysqli_fetch_array($sql)) {
                  # code...
                ?>

    <div class="col-lg-8">
      <div class="panel panel-success">

        <div class="panel-body">
          <div class="jumbotron mt-1 " align="center" style="max-width: 100%;">

            <h4 class="" align="center"> About Us</h4>
            <hr class="my-4">
            <div align="center">
              <img src="assets/img/foto_wisata/<?php echo $d['gambar_ab']; ?>" style="height: 250px;" class="card-img" alt="...">
            </div>
            <br>
            <section>
              <div class="row">
                <div class="col-md-12">
                  <p align="center" align="justify"><?php echo $d['informasi']; ?></p>
                </div>
              </div>
            </section>
          </div>
        <?php
                } ?>
        </div>
      </div>
    </div>
</div>


<br><br><br>
<?php
include 'assets/template/footer.php';
?>