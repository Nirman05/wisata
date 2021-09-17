<?php
include '../assets/template/header.php';
?>
<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($config, "SELECT * FROM df_informasi WHERE id_informasi='$id'");
while ($d = mysqli_fetch_array($data)) {
  # code...
?>
  <h4 class="modal-title"> Edit Data Informasi</h4>
  <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label">Nama Lokasi</label>
      <input type="hidden" name="id_informasi" value="<?php echo $d['id_informasi']; ?>">
      <input type="text" name="nm_infokasi" class="form-control" value="<?php echo $d['nm_infokasi']; ?>" required>
    </div>

    
     <div class="form-group">
      <label>Informasi</label>
      <textarea name="info_wst" class="form-control" type="text" rows="6" cols="80" style="text-align: justify;" >
       <?php echo $d['info_wst']; ?>
      </textarea>
    </div>

    <div class="form-group">
      <label class="control-label" for="gambar">Gambar</label>
      <div style="padding-bottom: 5px">
        <img src="<?php echo '../assets/img/foto_wisata/' . $d['gambar']; ?>" width="80" id="pict">
      </div>
      <input type="file" name="gambar" required="">
      <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar']; ?>">
    </div>

    <div class="modal-footer">
      <a href="../../administrator/home.php?page=berita_info" class="btn btn-primary">Kembali</a>
      <button type="submit" class="btn btn-success" name="berita_info">Simpan</button>
    </div>
  </form>
<?php
}
?>


<!-- <?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($config, "SELECT * FROM penginapan WHERE id_penginapan='$id'");
while ($d = mysqli_fetch_array($data)) {
  # code...
?>
  <h4 class="modal-title"> Edit Data Informasi</h4>
  <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label">Nama Lokasi</label>
      <input type="hidden" name="id_penginapan" value="<?php echo $d['id_penginapan']; ?>">
      <input type="text" name="nm_penginapan" class="form-control" value="<?php echo $d['nm_penginapan']; ?>" required>
    </div>

    <div class="form-group">
      <label>Informasi</label>
      <div class="box-body pad">
        <input name="info_pn" class="form-control" type="text" rows="2" cols="80" value="<?php echo $d['info_pn']; ?>" required>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label">Garis Lintang</label>
      <input type="text" name="lintang" class="form-control" value="<?php echo $d['lintang']; ?>" required>
    </div>
    <div class="form-group">
      <label class="control-label">Garis Bujur</label>
      <input type="text" name="bujur" class="form-control" value="<?php echo $d['bujur']; ?>" required>
    </div>


    <div class="form-group">
      <label class="control-label" for="gambar">Gambar</label>
      <div style="padding-bottom: 5px">
        <img src=" " width="80" id="pict">
      </div>
      <input type="file" name="gambar" required="">
      <input type="hidden" name="gambar_lama" value="<?php echo $d['gambar']; ?>">
    </div>

    <div class="modal-footer">
      <a href="../../administrator/home.php?page=berita_info" class="btn btn-primary">Kembali</a>
      <button type="submit" class="btn btn-success" name="pn">Simpaan</button>
    </div>
  </form>
<?php
}
?>
 -->
<?php
include '../assets/template/footer.php';
?>