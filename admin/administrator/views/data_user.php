<?php
if ($_SESSION['level'] != "admin") {
    header("location:./home.php?page=dashboard");
}

if (isset($_POST['tambah'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $tgl_tambah = date('Y-m-d H:i:s');
    $level = $_POST['level'];
    $gambar = $_FILES['foto']['name'];
    $alamat = $_POST['alamat'];

    if (empty($gambar)) {
        if (empty($gambar)) {
            echo "foto tidak boleh kosong!";
        }
    } else {
        $extension = pathinfo($gambar, PATHINFO_EXTENSION);
        $tmp = $_FILES['foto']['tmp_name'];
        $folder = 'assets/img/foto_profil/';

        if (move_uploaded_file($tmp, $folder . $gambar)) {

            mysqli_query($config, "INSERT INTO user VALUES ('', '$username','$password','$email','$tgl_tambah', '$alamat', '$gambar', '$level')");

            header("location: ?page=data_user");
        } else {
            echo $_FILES['foto']['error'];
            exit;
        }
    }
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1>Data User</h1>
        <ol class="breadcrumb">
            <li><a href="index.html"><i class="icon-dashboard"></i> </a></li>
        </ol>
    </div>

</div>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered table-sm">
                <tr>
                    <th>
                        <div align="center">No.</div>
                    </th>
                    <th>
                        <div align="center">Username</div>
                    </th>
                    <th>
                        <div align="center">Email</div>
                    </th>
                    <th>
                        <div align="center">Level</div>
                    </th>
                   <!--  <th>
                        <div align="center">tgl-daftar</div>
                    </th> -->
                    <th colspan="2">
                        <div align="center">Aksi</div>
                    </th>

                </tr>


                <?php
                include 'config/koneksi.php';
                $no = 1;
                $sql = mysqli_query($config, "SELECT * FROM user WHERE id_user != '$_SESSION[id_user]' ORDER BY id_user DESC");
                while ($data = mysqli_fetch_array($sql)) {
                ?>
                    <tr>
                        <td align="center"><?php echo $no++ . "."; ?></td>
                        <td>
                            <div align="center"><?php echo $data['username']; ?></div>
                        </td>

                        <td>
                            <div align="center"><?php echo $data['email']; ?>  </div>
                        </td>
                        <td>
                            <div align="center"><?php echo ucfirst($data['level']); ?></div>
                        </td>
                        <!-- <td>
                            <div align="center"> <?php echo $data['tgl_daftar'];   ?></div>
                        </td> -->
                        <td>
                            <div align="center">
                                <a class="btn btn-info btn-xs" href="helper/edit_user.php?id=<?php echo $data['id_user']; ?>">Edit</a>
                            </div>
                        <td>
                            <a class="btn btn-danger btn-xs" href="helper/dlt_user.php?id=<?php echo $data['id_user']; ?>">Hapus
                            </a>
                        </td>
                    </tr>
                <?php
                } ?>
            </table>
        </div>
    </div>
</div>
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
                        <label for="username">Nama</label>
                        <input type="text" name="username" id="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="contoh@gmail.com" required>
                    </div>
                    <div class="form-group ">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" id="alamat" class="form-control" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto" />
                    </div>
                    <div class="form-group ">
                        <label for="level">Level</label>
                        <select name="level" id="level" class="form-control" required>
                            <option value="admin">Admin</option>
                            <option value="user">User</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger">resest</button>
                        <button type="submit" class="btn btn-success" name="tambah" value="simpan">simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


</div>
</div>

<?php
include 'assets/template/footer.php';
?>