<?php
include '../assets/template/header.php';
?>
<?php
include '../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($config, "SELECT * FROM user WHERE id_user='$id'");
while ($d = mysqli_fetch_array($data)) {
?>
    <h4 class="modal-title"> Edit Data User</h4>
    <div class="alert alert-info">
        Biarkan <b>Password</b> tetap kosong jika tidak ingin mengubahnya
    </div>
    <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3 col-xs-5" style="text-align: center;">
                <img src="../assets/img/foto_profil/<?= $d['foto']; ?>" class="foto-profil img-thumbnail">
            </div>

            <div class="col-md-6 col-xs-7">
                <input type="hidden" name="id_user" value="<?php echo $d['id_user']; ?>" />
                <input type="hidden" name="pw" value="<?php echo $d['password']; ?>" />
                <div class="form-group">
                    <label for="username">Nama</label>
                    <input type="text" name="username" id="username" class="form-control" placeholder="Username" required value="<?php echo $d['username']; ?>">
                </div>
                <div class="form-group">
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="contoh@gmail.com" required value="<?php echo $d['email']; ?>">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?= $d['alamat']; ?></textarea>
                </div>
                <div class="form-group ">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>foto</label>
                    <input type="file" class="form-control" name="foto" />
                    <input type="hidden" name="fotoLama" value="<?= $d['foto']; ?>">
                </div>
                <div class="form-group ">
                    <label for="level">Level</label>
                    <select name="level" id="level" class="form-control" required>
                        <option value="admin" <?= ($d['level'] == 'admin') ? 'selected' : ''; ?>>Admin</option>
                        <option value="user" <?= ($d['level'] == 'user') ? 'selected' : ''; ?>>User</option>
                    </select>
                </div>

                <div class="modal-footer">
                    <a href="../../administrator/home.php?page=data_user" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-success" name="us">Simpan</button>
                </div>
            </div>
        </div>
    </form>
<?php
}
?>

<?php
include '../assets/template/footer.php';
?>