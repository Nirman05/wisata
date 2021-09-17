<?php
if ($_SESSION['level'] != "user") {
    header("location:./home.php?page=dashboard");
}
?>
<hr>
<div class="row">
    <div class="col-lg-12">
        <h3>Data Pesan Wisata Alam</h3>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <div style="height: 500px; overflow: scroll;">
            <table class="table table-hover table-striped table-bordered  table-sm" id="ualam">
                <thead>
                <tr>
                    <th>
                        <div align="center">No.<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Nama User<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Pesan<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Saran Perbaikan/Feedback<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Lokasi<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Rating<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Aksi</div>
                    </th>

                </tr>
            </thead>
                <?php



                $no = 1;
                $sql = mysqli_query($config, "SELECT r.id_user AS id_user, nama_user, rating, perbaikan, komentar, nm_lokasi, r.id_lokasi AS id_wisata FROM t_rating r JOIN df_wisata d ON(r.id_lokasi = d.id_lokasi) WHERE d.id_user = '$_SESSION[id_user]'");
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
<hr>
<div class="row">
    <div class="col-lg-12">
        <h3>Data Pesan Wisata Pantai</h3>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <div style="height: 500px; overflow: scroll;">
            <table class="table table-hover table-striped table-bordered  table-sm" id="upantai">
                <thead>
                <tr>
                    <th>
                        <div align="center">No.<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Nama User<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Pesan<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Saran Perbaikan / Feedback<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Lokasi<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Rating<i class="fa fa-sort"></i></div>
                    </th>
                    <th >
                        <div align="center">Aksi</div>
                    </th>

                </tr>
            </thead>
                <?php



                $no = 1;
                $sql = mysqli_query($config, "SELECT p.id_user AS id_user, rating, perbaikan, nama_user, komentar, nm_pantai, p.id_pantai AS id_pantai FROM p_rating p JOIN pantai pa ON(p.id_pantai = pa.id_pantai) WHERE pa.id_user = '$_SESSION[id_user]'");
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
            </table>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-lg-12">
        <h3>Data Pesan Wisata Kuliner</h3>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <div style="height: 500px; overflow: scroll;">
            <table class="table table-hover table-striped table-bordered table-sm" id="ukuliner">
               <thead>
                <tr>
                    <th>
                        <div align="center">No.<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Nama User<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Pesan<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Saran Perbaikan / Feedback<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Lokasi<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Rating<i class="fa fa-sort"></i></div>
                    </th>
                    <th>
                        <div align="center">Aksi</div>
                    </th>

                </tr>
            </thead>
                <?php



                $no = 1;
                $sql = mysqli_query($config, "SELECT r.id_user AS id_user, rating, nama_user, perbaikan, komentar, nm_kuliner, r.id_kuliner AS id_kuliner FROM k_rating r JOIN df_kuliner k ON(r.id_kuliner = k.id_kuliner) WHERE k.id_user = '$_SESSION[id_user]'");
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
            </table>
            </div>
        </div>
    </div>
</div>
<?php
include 'assets/template/footer.php';
?>