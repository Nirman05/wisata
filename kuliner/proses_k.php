
<?php
//include connect

include '../admin/administrator/config/koneksi.php';


if (isset($_POST['rating']) && is_numeric($_POST['rating']) && isset($_POST['id']) && is_numeric($_POST['id'])) {
    //tampung value yang dikirim melalui ajax
    $rating     = $config->real_escape_string($_POST['rating']);
    $id         = $config->real_escape_string($_POST['id']);
    $nama_user  = $config->real_escape_string($_POST['nama_user']);
    $komentar   = $config->real_escape_string($_POST['komentar']);
    $fas = '';
    if (isset($_POST['perbaikan'])) {
        $fas = implode(', ', $_POST['perbaikan']);
    }
    //ambil ip user

    $id_user = $_SERVER['REMOTE_ADDR'];
    //cek apakah user telah memberi penilaian terhadap content tersebut
    $sql = $config->query("SELECT * FROM `k_rating` WHERE id_kuliner = '" . $id . "' AND id_user = '" . $id_user . "'");

    //hitung row
    if ($sql->num_rows > 0) {

        //lakukan update jika user sudah pernah menilai sesuai id content
        $config->query("UPDATE `k_rating`   SET  `rating` = '" . $rating . "', `nama_user` = '" . $nama_user . "', `komentar` = '" . $komentar . "',  `perbaikan` = '" . $fas . "'  WHERE id_user = '" . $id_user . "' AND id_kuliner = '" . $id . "'");
    } else {
        //simpan jika user belum pernah menilai
        $config->query("INSERT INTO `k_rating` VALUES ('" . $id_user . "', '" . $rating . "', '" . $fas . "', '" . $id . "', '" . $nama_user . "','" . $komentar . "')");
    }


    //redirect ke halaman detail sebelumnya
    header('location: ../?page=detail_k&id=' . $id);
} else {
    //jika user mengakses file ini secara langsung maka redirect ke halaman index
    header('location:../?page=detail_k&id= ' . $id);
}
