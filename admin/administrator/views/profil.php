<?php
$get = mysqli_query($config, "SELECT * FROM user WHERE id_user = '$_SESSION[id_user]'");

if (mysqli_num_rows($get) != 1) {
    header('location:./home.php?page=dashboard');
}

$r = mysqli_fetch_array($get);
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Profil <small><?= $_SESSION['username']; ?></small></h1>
        <div class="alert alert-info">
            Biarkan <b>Password</b> kosong jika tidak ingin mengubahnya
        </div>
    </div>
</div>
      <hr>  
<div class="row">
    <div class="col-sm-12 col-md-8">
        <?php
        if (isset($_POST['simpan'])) {
            $id = $_POST['id'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $passLama = $_POST['pw'];
            $passBaru = $_POST['password'];
            $password = ($passBaru != '') ? password_hash($passBaru, PASSWORD_DEFAULT) : $passLama;
            $gambar = $_FILES['foto']['name'];
            $lama = $_POST['fotoLama'];
            $alamat = $_POST['alamat'];

            if (empty($gambar)) {
                $foto = $lama;
            } else {
                $extension = pathinfo($gambar, PATHINFO_EXTENSION);
                $tmp = $_FILES['foto']['tmp_name'];
                unlink('assets/img/foto_profil/' . $lama);
                $folder = 'assets/img/foto_profil/';
                move_uploaded_file($tmp, $folder . $gambar);
                $foto = $gambar;
            }
            mysqli_query($config, "UPDATE user SET username='$username',email='$email',password='$password',foto='$foto',alamat='$alamat' WHERE id_user='$id'");

            //update session
            $_SESSION['username'] = $username;

            header("location: ?page=profil");
        }
        ?>
        <form method="POST" action="" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $r['id_user']; ?>">
            <div class="row">
                <div class="col-md-4 col-xs-5" style="text-align: center;">
                   <br> <img src="assets/img/foto_profil/<?= $r['foto']; ?>" class="foto-profil img-thumbnail">
                </div>
                <div class="col-md-8 col-xs-7">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $r['username']; ?>" required placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $r['email']; ?>" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"><?= $r['alamat']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password Baru" />
                        <input type="hidden" name="pw" value="<?= $r['password']; ?>">
                    </div>
                    <div class="form-group">
                        <label>foto</label>
                        <input type="file" class="form-control" name="foto" />
                        <input type="hidden" name="fotoLama" value="<?= $r['foto']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger">resest</button>
                        <button type="submit" class="btn btn-success" name="simpan" value="simpan">Update</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <br>
        <div class="col-lg-4  ">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-6">
                    <img src="assets/img/foto_profil/<?= $r['foto']; ?>" class="foto-profil img-thumbnail">
                  </div>
                  <div class="col-xs-6 text-left">
                    <h3><b><?= $r['username']; ?></b></h3>
                    <p>Email : <?= $r['email']; ?></p>
                     <p><small >Alamat   : <?= $r['alamat']; ?></small></p>
                  </div>
                </div>
              </div>
              
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                      Anda Login Sebagai :
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-user"></i>  <?= $r['level']; ?>
                    </div>
                  </div>
                </div>
              
            </div>
        </div>
</div>