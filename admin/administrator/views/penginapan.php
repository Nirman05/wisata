<?php
if ($_SESSION['level'] != "admin") {
  header("location:./home.php?page=dashboard");
}
?>
<div class="row">
  <div class="col-lg-12">
    <h1>Tempat Penginapan <small>Buol</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="icon-dashboard"></i> </a></li>
    </ol>
  </div>

</div>
<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <div style="height: 500px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-sm">
        <thead>
            <tr>
                  <th>
                    <div align="center">No.</div>
                  </th>
                  <th>
                    <div align="center" style="width: 100px;">Nama Hotel</div>
                  </th>
                  <th>
                    <div align="center" >garis lintang</div>
                  </th>
                  <th>
                    <div align="center">garis bujur</div>
                  </th>
                  <th>
                    <div align="center" style="width: 400px">Informasi</div>
                  </th>
                  <th>
                    <div align="center">Gambar</div>
                  </th>
                  <th colspan="2">
                    <div align="center">Aksi</div>
                  </th>
                </tr>
            </thead>
        <?php
        include 'config/koneksi.php';
        $no = 1;
        $sql = mysqli_query($config, "SELECT * FROM penginapan");
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <td align="center"><?php echo $no++ . "."; ?></td>
            <td>
              <div align="center"  ><?php echo $data['nm_penginapan']; ?></div>
            </td>
            <td>
              <div align="center"><?php echo $data['lintang']; ?></div>
            </td>
            <td>
              <div align="center"><?php echo $data['bujur']; ?></div>
            </td>
            <td>
              <div align="justify" style="height: 200px; overflow: scroll;"><?php echo $data['info_pn']; ?></div>
            </td>
            <td>
              <div align="center">
                <img src="assets/img/foto_wisata/<?php echo $data['gambar']; ?>" width="70px">
              </div>
            </td>
    
            <td>
              <div align="center">
                <a class="btn btn-info btn-xs" href="helper/edit_pn.php?id=<?php echo $data['id_penginapan']; ?>">Edit</a></div>
            </td>
            <td>
              <div align="center">
              <a class="btn btn-danger btn-xs" href="helper/dlt_info.php?id=<?php echo $data['id_penginapan']; ?>">Hapus
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
<br>
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#tambah"> Tambah Data</button>
<div id="tambah" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"> Input Data</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label" for="nm_infokasi">Nama Lokasi</label>
            <input type="text" name="nm_penginapan" class="form-control" id="nm_penginapan" required>
          </div>

          <div class="form-group">
            <label>Informasi</label>
            <div class="box-body pad">
              <textarea id="info_pn" name="info_pn" class="form_control" type="text" rows="2" cols="80" required></textarea>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label" for="lintang">Garis Lintang</label>
            <input type="text" name="lintang" class="form-control" id="lintang" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="bujur">Garis Bujur</label>
            <input type="text" name="bujur" class="form-control" id="bujur" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="gambar">Gambar</label>
            <input type="file" name="gambar" class="form-control" required>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-danger">resest</button>
            <button type="submit" class="btn btn-success" name="tambah" value="simpan">simpan</button>
          </div>
        </div>
      </form>
      <?php
      if (isset($_POST['tambah'])) {
        $nm_penginapan = $_POST['nm_penginapan'];

        $info_pn = $_POST['info_pn'];
        $lintang = $_POST['lintang'];
        $bujur = $_POST['bujur'];


        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = "brg-" . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, "assets/img/foto_wisata/" . $gambar);
        if ($upload) {
          mysqli_query($config, "INSERT INTO penginapan VALUES ('','$nm_penginapan','$info_pn','$lintang','$bujur','$gambar')");
          header("location: ?page=penginapan");
        } else {
          echo "<script> alert('upload gambar gagal!')</script> ";
        }
      }
      ?>
    </div>
  </div>
</div>




<?php
include 'assets/template/footer.php';
?>