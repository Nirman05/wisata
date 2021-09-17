<?php
//validasi url, jika tidak ada id maka kembalikan ke index
if (!is_numeric($_GET['id'])) {
    header('location:./');
}
//include koneksi
require_once('admin/administrator/config/koneksi.php');

//ambil data content
$get = $config->query("SELECT c.id_pantai AS id_pantai, nm_pantai, inf_pantai, AVG(rating) AS rating, gambar FROM pantai c LEFT JOIN p_rating r ON(c.id_pantai = r.id_pantai) WHERE c.id_pantai = '" . $_GET['id'] . "'");

//cek apakah Content ditemukan, jika tidak maka kembalikan ke index
if ($get->num_rows < 1) {
    header('location:./');
}

//fetch data untuk content
$d = $get->fetch_assoc();

//buat looping untuk rating
$star = '';

for ($i = 1; $i <= 5; $i++) {
    if ($i <= ceil($d['rating'])) {
        //masukkan rating ke variabel $star
        $star .= '<span class="on"><i class="fa fa-star"></i></span>';
    } else {
        //masukkan rating ke variabel $star
        $star .= '<span class="off"><i class="fa fa-star"></i></span>';
    }
}

//cek rating yang diberikan user berdasarkan id user
$id_user = $_SERVER['REMOTE_ADDR'];
$cek    = $config->query("SELECT * FROM `p_rating` WHERE  id_pantai = '" . $_GET['id'] . "' AND id_user = '" . $id_user . "'");

$fasilitas = '';
$tempat = '';

if ($cek->num_rows > 0) {
    $cek = $cek->fetch_assoc();
    $c   = $cek['rating'];
    $nama = $cek['nama_user'];
    $ulasan = $cek['komentar'];

    //cek apakah user menginputkan perbaikan atau tidak,
    //jika diinputkan maka lakukan explode data
    if ($cek['perbaikan'] != null || $cek['perbaikan'] != '') {
        $exp_perbaikan = explode(', ', $cek['perbaikan']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Content</title>
    <!-- bootstrap css versi 4 -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <!-- custom css -->
    <style>
        @import url(./fonts/font-awesome/css/font-awesome.css);


        form,
        label {
            margin: 0;
            padding: 0;
        }

        .rating {
            border: none;
            float: left;
        }

        .rating>input {
            display: none;
        }

        .rating>label::before {
            margin: 5px;
            font-size: 1.25em;
            font-family: FontAwesome;
            display: inline-block;
            content: "\f005";
        }

        .rating>label {
            color: #ddd;
            float: right;
        }

        .rating>input:checked~label,
        .rating:not(:checked)>label:hover,
        .rating:not(:checked)>label:hover~label {
            color: #f7d106;
        }

        .rating>input:checked+label:hover,
        .rating>input:checked~label:hover,
        .rating>label:hover~input:checked~label,
        .rating>input:checked~label:hover~label {
            color: #fce873;
        }

        .star {
            float: left;
            padding-right: 20px;
        }

        .star span {
            padding: 3px;
            font-size: 20px;
        }

        .on {
            color: #f7d106
        }

        .off {
            color: #ddd;
        }
    </style>
</head>

<body>
    <div class="container">

        <div class="row mt-5">
            <div class="col-md-4">
                <img src="admin/administrator/assets/img/foto_wisata/<?php echo $d['gambar']; ?>" width="100%">
            </div>
            <div class="col-md-7">
                <h4><?php echo $d['nm_pantai']; ?></h4>
                <div class="star">
                    <?php echo $star; ?> (<?php echo ($d['rating'] != '') ? (int)$d['rating'] : 0; ?>/5)
                </div>
                <div class="clearfix"></div>
                <p align="justify" class="lead"><?php echo $d['inf_pantai']; ?></p>
            </div>


            <div class="col-lg-10">
                <h4>Ulasan</h4>

                <!-- tampilkan komentar -->
                
                <button class="btn-primary"><a onClick="window.location.reload()">Semua</a></button>
                <button type="button" value="1" class="rating-filter" style="color: gold; background-color: #3366FF; border-radius: 5px; " title="Buruk - 1 Bintang"><i class="fa fa-star"></i> 1</button>
                <button type="button" value="2" class="rating-filter" style="color: gold; background-color: #3366FF; border-radius: 5px; " title="Tidak Buruk - 2 Bintang"><i class="fa fa-star"></i> 2</button>
                <button type="button" value="3" class="rating-filter" style="color: gold; background-color: #3366FF; border-radius: 5px; " title="Bagus - 3 Bintang"><i class="fa fa-star"></i> 3</button>
                <button type="button" value="4" class="rating-filter" style="color: gold; background-color: #3366FF; border-radius: 5px; " title="Sangat Bagus - 4 Bintang"><i class="fa fa-star"></i> 4</button>
                <button type="button" value="5" class="rating-filter" style="color: gold; background-color: #3366FF; border-radius: 5px; " title="Sempurna - 5 Bintang"><i class="fa fa-star"></i> 5</button>
                <div style="border-bottom:1px dotted #000">&nbsp;</div>
                <h4>Komentar</h4>
                <div id="komentar-list" class="row">

                    <?php
                    $komentar = mysqli_query($config, "SELECT rating, komentar, nama_user FROM p_rating  WHERE id_pantai = '" . $_GET['id'] . "'");

                    while ($komen = $komentar->fetch_assoc()) {
                        //buat looping untuk rating
                        $star_rating = '';
                        //menghitung nila rata-rata
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= ceil($komen['rating'])) {
                                //masukkan rating ke variabel $star
                                $star_rating .= '<span class="on"><i class="fa fa-star"></i></span>';
                            } else {
                                //masukkan rating ke variabel $star
                                $star_rating .= '<span class="off"><i class="fa fa-star"></i></span>';
                            }
                        }
                         echo '<div class="col-md-12">
                                '.'<h5><hr>'. $komen['nama_user']. '<br /></h5>' . $star_rating . '<br />' . $komen['komentar'] . '
                                </div>';
                        // echo '<ul class="list-unstyled">
                        //       <li class="media">
                        //        <div class="media-body">';
                        // echo     '<h5 class="mt-0 mb-1"><hr>' . $komen['nama_user'] . '</h5>';
                        // echo '    <div class="star">' . $star_rating . '';

                        // echo ' <p> ' . $komen['komentar'] . '</p> </div> </li>';
                    }
                    ?>
                </div>
            </div>

            <div class="text-right mt-4">
                <a href="?page=wisata_pantai" class="btn btn-secondary">Kembali</a>
                <a href="?page=rute_pantai&id=<?= $d['id_pantai'] ?>" class="btn btn-primary">Rute</a>
            </div>
        </div>
 
    <hr>
  

    <div class="row mt-4">
        <h4>Silahkan Berikan penilaian anda</h4>
    </div>

    <div  class="row ">
        <form method="POST" action="pantai/proses_p.php">
            <input type="hidden" name="id" id="IDContent" value="<?php echo $d['id_pantai']; ?>">

            <div class="rating">
                <input type="radio" class="rate" id="star5" name="rating" value="5" <?= (isset($c) && $c == '5') ? 'checked' : '' ?> />
                <label for="star5" title="Sempurna - 5 Bintang"></label>

                <input type="radio" class="rate" id="star4" name="rating" value="4" <?= (isset($c) && $c == '4') ? 'checked' : '' ?> />
                <label for="star4" title="Sangat Bagus - 4 Bintang"></label>

                <input type="radio" class="rate" id="star3" name="rating" value="3" <?= (isset($c) && $c == '3') ? 'checked' : '' ?> />
                <label for="star3" title="Bagus - 3 Bintang"></label>

                <input type="radio" class="rate" id="star2" name="rating" value="2" <?= (isset($c) && $c == '2') ? 'checked' : '' ?> />
                <label for="star2" title="Tidak Buruk - 2 Bintang"></label>

                <input type="radio" class="rate" id="star1" name="rating" value="1" <?= (isset($c) && $c == '1') ? 'checked' : '' ?> />
                <label for="star1" title="Buruk - 1 Bintang"></label>
            </div>

            <div class="clearfix"></div>
            <div class="form-group perbaikan" style="display: none;">
                <label>Apa yang harus kami perbaiki ?</label>
                <div class="checkbox my-1">
                    <label>
                        <input type="checkbox" name="perbaikan[]" value="Perbaikan Fasilitas" <?= (isset($exp_perbaikan) && in_array('Perbaikan Fasilitas', $exp_perbaikan)) ? 'checked' : ''; ?>> Fasilitasnya
                    </label>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="perbaikan[]" value="Perbaikan Tempat" <?= (isset($exp_perbaikan) && in_array('Perbaikan Tempat', $exp_perbaikan)) ? 'checked' : ''; ?>> Tempatnya
                    </label>
                </div>
                  <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="perbaikan[]" value="Lainya" <?= (isset($exp_perbaikan) && in_array('Lainya', $exp_perbaikan)) ? 'checked' : ''; ?>> Lainya
                                </label>
                 </div>
            </div>

            <div class="form-group feedback" style="display: none;">
                <label>Gimana perjalanan wisatanya tadi? Beritahu admin yuk..</label>
                <div class="checkbox my-1">
                    <label>
                        <input type="checkbox" name="perbaikan[]" value="Fasilitasnya Lengkap" <?= (isset($exp_perbaikan) && in_array('Fasilitasnya Lengkap', $exp_perbaikan)) ? 'checked' : ''; ?>> Fasilitasnya Lengkap
                    </label>
                </div>
                <div class="checkbox my-1">
                    <label>
                        <input type="checkbox" name="perbaikan[]" value="Perjalanannya Seru" <?= (isset($exp_perbaikan) && in_array('Perjalanannya Seru', $exp_perbaikan)) ? 'checked' : ''; ?>> Perjalanannya Seru
                    </label>
                </div>
                <div class="checkbox my-1">
                    <label>
                        <input type="checkbox" name="perbaikan[]" value="Tempatnya Sangat Bagus" <?= (isset($exp_perbaikan) && in_array('Tempatnya Sangat Bagus', $exp_perbaikan)) ? 'checked' : ''; ?>> Tempatnya Sangat Bagus
                    </label>
                </div>
                <div class="checkbox my-1">
                                <label>
                                    <input type="checkbox" name="perbaikan[]" value="Lainnya" <?= (isset($exp_perbaikan) && in_array('Lainnya', $exp_perbaikan)) ? 'checked' : ''; ?>> Lainnya
                                </label>
                </div>
            </div>
            <div class="form-group">
                <label for="nama_user">Nama</label>
                <input type="text" name="nama_user" id="nama_user" class="form-control" value="<?= (isset($nama)) ? $nama : ''; ?>">
                <label for="ulasan">Komentar</label>
                <textarea name="komentar" id="komentar" class="form-control" cols="50" rows="3"><?= (isset($ulasan)) ? $ulasan : ''; ?></textarea>
            </div>
            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary" value="Submit">Kirim</button>
            </div>
        </form>
    </div>
    </div> <!-- end container -->

</body>

</html>