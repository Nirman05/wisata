<?php
//include koneksi
require_once('../admin/administrator/config/koneksi.php');



if (isset($_POST['rate']) && is_numeric($_POST['rate']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
    //tampung value yang dikirim melalui ajax
    $rate = $config->real_escape_string($_POST['rate']);
    $id = $config->real_escape_string($_POST['id']);

    //ambil komentar
    $get_komentar = $config->query("SELECT * FROM p_rating WHERE id_pantai = '" . $id . "' AND rating = '" . $rate . "'");

    $return = '';
    if ($get_komentar->num_rows > 0) {
        //buat looping untuk rating
        while ($d = $get_komentar->fetch_assoc()) {
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

            //tampilkan komentar
            $return .= '<div class="col-md-12">
                ' .'<h5><hr>'.$d['nama_user'].'<br /></h5>'. $star . '<br />' .   $d['komentar'] . '
                </div>';
        }
    } else {
        $return = '<div class="col-md-12">Komentar tidak tersedia</div>';
    }

    echo $return;
}
