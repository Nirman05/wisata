<?php
include '../assets/template/header.php';
?>
<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($config, "SELECT * FROM df_wisata WHERE id_lokasi='$id'");
while ($d = mysqli_fetch_array($data)) {
  # code...
?>
  <h4 class="modal-title"> Edit Data Wisata Alam</h4>
  <form action="../helper/proses_edit.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label class="control-label">Nama Lokasi</label>
      <input type="hidden" name="id_lokasi" value="<?php echo $d['id_lokasi']; ?>">
      <input type="text" name="nm_lokasi" class="form-control" value="<?php echo $d['nm_lokasi']; ?>" required>
    </div>
    <div class="form-group">
      <label class="control-label">Garis Lintang</label>
      <input type="text" name="gr_lintang" class="form-control" value="<?php echo $d['gr_lintang']; ?>" required>
    </div>
    <div class="form-group">
      <label class="control-label">Garis Bujur</label>
      <input type="text" name="gr_bujur" class="form-control" value="<?php echo $d['gr_bujur']; ?>" required>
    </div>
    <div class="form-group">
      <label>Informasi</label>
      <textarea name="informasi" class="form-control" type="text" rows="6" cols="80" style="text-align: justify;" >
       <?php echo $d['informasi']; ?>
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
      <a href="../../administrator/home.php?page=wisata" class="btn btn-primary">Kembali</a>
      <button type="submit" class="btn btn-success" name="edit">Simpan</button>
    </div>
  </form>
<?php
}
?>


<?php
include '../assets/template/footer.php';
?>