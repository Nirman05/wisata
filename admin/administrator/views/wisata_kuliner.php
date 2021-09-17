<div class="row">
  <div class="col-lg-12">
    <h1>Daftar Wisata <small>Kuliner Buol</small></h1>
    <ol class="breadcrumb">
      <li><a href="index.html"><i class="icon-dashboard"></i> </a></li>
    </ol>
  </div>
</div>
<div class="row">
  <div class="col-sm-12">
    <div class="table-responsive">
      <div style="height: 600px; overflow: scroll;">
      <table class="table table-hover table-striped table-bordered table-sm">
        <tr>
          <th>
            <div align="center">No.</div>
          </th>
          <th>
            <div align="center">Nama Lokasi</div>
          </th>
          <th>
            <div align="center">Garis Lintang</div>
          </th>
          <th>
            <div align="center">Garis Bujur</div>
          </th>
          <th>
            <div align="center" style="width: 400px;">Informasi</div>
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
        if ($_SESSION['level'] == 'admin') {
          $sql = mysqli_query($config, "SELECT * FROM df_kuliner");
        } else {
          $sql = mysqli_query($config, "SELECT * FROM df_kuliner WHERE id_user = '$_SESSION[id_user]'");
        }
        while ($data = mysqli_fetch_array($sql)) {
        ?>
          <tr>
            <td align="center"><?php echo $no++ . "."; ?></td>
            <td>
              <div align="center" style="width: 200px;"><?php echo $data['nm_kuliner']; ?></div>
            </td>
            <td>
              <div align="center"><?php echo $data['gr_lintang']; ?></div>
            </td>
            <td>
              <div align="center"><?php echo $data['gr_bujur']; ?></div>
            </td>
            <td>
              <div align="justify" style="height: 200px; overflow: scroll;"><?php echo $data['info_kuliner']; ?></div>
            </td>
            <td>
              <div align="center">
                <img src="assets/img/foto_wisata/<?php echo $data['gambar']; ?>" width="70px">
              </div>
            </td>
   
          <td>
            <div align="center">
            <a class="btn btn-info btn-xs" href="helper/edit_k.php?id=<?php echo $data['id_kuliner']; ?>">Edit</a>
            </div>
          </td>
          <td>
            <div align="center">
            <a class="btn btn-danger btn-xs" href="helper/delete_k.php?id=<?php echo $data['id_kuliner']; ?>" onclick="return confirm('Hapus data?')" class="alert alert-danger" role="alert">Hapus
            </a>
            <!-- <a class="btn btn-danger btn-xs" href="helper/delete_k.php?id=<?php echo $data['id_kuliner']; ?>" name="delete">Hapus
            </a> -->
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
        <h4 class="modal-title"> Input Data Kuliner</h4>
      </div>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label class="control-label" for="nm_kuliner">Nama Lokasi</label>
            <input type="text" name="nm_kuliner" class="form-control" id="nm_kuliner" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="gr_lintang">Garis Lintang</label>
            <input type="text" name="gr_lintang" class="form-control" required>
          </div>
          <div class="form-group">
            <label class="control-label" for="gr_bujur">Garis Bujur</label>
            <input type="text" name="gr_bujur" class="form-control" id="gr_bujur" required>
          </div>
          <div class="form-group">
            <label>Informasi Kuliner</label>
            <div class="box-body pad">
              <textarea id="info_kuliner" name="info_kuliner" class="form_control" type="text" rows="4" cols="77" required></textarea>
            </div>
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
        $nm_kuliner = $_POST['nm_kuliner'];
        $gr_lintang = $_POST['gr_lintang'];
        $gr_bujur = $_POST['gr_bujur'];
        $info_kuliner = $_POST['info_kuliner'];
        $id = $_SESSION['id_user'];

        $extensi = explode(".", $_FILES['gambar']['name']);
        $gambar = "brg-" . round(microtime(true)) . "." . end($extensi);
        $sumber = $_FILES['gambar']['tmp_name'];
        $upload = move_uploaded_file($sumber, "assets/img/foto_wisata/" . $gambar);
        if ($upload) {
          mysqli_query($config, "INSERT INTO df_kuliner VALUES ('','$nm_kuliner','$gr_lintang','$gr_bujur','$info_kuliner','$gambar','$id')");
          header("location: ?page=wisata_kuliner");
        } else {
          echo "<script> alert('upload gambar gagal!')</script> ";
        }
      }
      ?>
    </div>
  </div>
</div>

<!--<script src="assets/js/jquery-1.10.2.js"></script>
             <script type="text/javascript">
               $(document). on ("click", "#edit_dt", function(){
                var idlokasi = $(this) .data ('id');
                var nmlokasi = $(this) .data ('nama'); 
                var garis = $(this) .data ('garis');
                var bujur = $(this) .data ('bj');
                var brta = $(this) .data ('info');
                var fff = $(this) .data ('picture');
                $("#modal-edit #id_lokasi").val(idlokasi);
                $("#modal-edit #nm_lokasi").val(nmlokasi);
                $("#modal-edit #gr_lintang").val(garis);
                $("#modal-edit #gr_bujur").val(bujur);
                $("#modal-edit #informasi").val(brta);
                $("#moadl-edit #pict") .attr ( "src","/assets/img/foto_wisata/"+fff);
               })
               $(document).ready(function(e){
                  $('#form') .on("submit", (function(e){
                      e.preventDefault();
                      $.ajax({
                          url : 'models/proses_edit.php',
                          type : 'POST',
                          data : new FormData(this),
                          contenType :false,
                          cache : false,
                          processData : false,
                          success : function(msg){
                              $('.table').html(msg);
                          }
                      })
                  }))
               })

               
             </script>-->



<?php
include 'assets/template/footer.php';
?>