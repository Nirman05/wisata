<?php
include '../config/koneksi.php';
if (isset($_POST['edit'])) {
  $id_lokasi = $_POST['id_lokasi'];
  $nm_lokasi = $_POST['nm_lokasi'];
  $gr_lintang = $_POST['gr_lintang'];
  $gr_bujur = $_POST['gr_bujur'];
  $informasi = $_POST['informasi'];
  $gambar = $_FILES['gambar']['name'];
  $lama = $_POST['gambar_lama'];
  if (empty($gambar)) {
    if (empty($gambar)) {
      echo "foto tidak boleh kosong!";
    }
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['gambar']['tmp_name'];
    unlink('../assets/img/foto_wisata/' . $lama);
    $folder = '../assets/img/foto_wisata/';
    move_uploaded_file($tmp, $folder . $gambar);
    mysqli_query($config, "UPDATE df_wisata set nm_lokasi='$nm_lokasi', gr_lintang='$gr_lintang', gr_bujur='$gr_bujur', informasi='$informasi', gambar='$gambar' WHERE id_lokasi='$id_lokasi'");

    header('location: ../../administrator/home.php?page=wisata');
  }
} elseif (isset($_POST['berita_info'])) {
  $id_informasi = $_POST['id_informasi'];
  $nm_infokasi = $_POST['nm_infokasi'];
  $info_wst = $_POST['info_wst'];
  $gambar = $_FILES['gambar']['name'];
  $lama = $_POST['gambar_lama'];
  if (empty($gambar)) {
    if (empty($gambar)) {
      echo "foto tidak boleh kosong!";
    }
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['gambar']['tmp_name'];
    unlink('../assets/img/foto_wisata/' . $lama);
    $folder = '../assets/img/foto_wisata/';
    move_uploaded_file($tmp, $folder . $gambar);
    mysqli_query($config, "UPDATE df_informasi set nm_infokasi='$nm_infokasi',  info_wst='$info_wst', gambar='$gambar' WHERE id_informasi='$id_informasi'");

    header('location: ../../administrator/home.php?page=berita_info');
  }
} elseif (isset($_POST['edit_pantai'])) {
  $id_pantai = $_POST['id_pantai'];
  $nm_pantai = $_POST['nm_pantai'];
  $gr_lintang = $_POST['gr_lintang'];
  $gr_bujur = $_POST['gr_bujur'];
  $inf_pantai = $_POST['inf_pantai'];
  $gambar = $_FILES['gambar']['name'];
  $lama = $_POST['gambar_lama'];
  if (empty($gambar)) {
    if (empty($gambar)) {
      echo "foto tidak boleh kosong!";
    }
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['gambar']['tmp_name'];
    unlink('../assets/img/foto_wisata/' . $lama);
    $folder = '../assets/img/foto_wisata/';
    move_uploaded_file($tmp, $folder . $gambar);
    mysqli_query($config, "UPDATE pantai set nm_pantai='$nm_pantai',  gr_lintang='$gr_lintang', gr_bujur='$gr_bujur', inf_pantai='$inf_pantai', gambar='$gambar' WHERE id_pantai='$id_pantai'");

    header('location: ../../administrator/home.php?page=wisata_pantai');
  }
} elseif (isset($_POST['edit_kuliner'])) {
  $id_kuliner = $_POST['id_kuliner'];
  $nm_kuliner = $_POST['nm_kuliner'];
  $gr_lintang = $_POST['gr_lintang'];
  $gr_bujur = $_POST['gr_bujur'];
  $info_kuliner = $_POST['info_kuliner'];
  $gambar = $_FILES['gambar']['name'];
  $lama = $_POST['gambar_lama'];
  if (empty($gambar)) {
    if (empty($gambar)) {
      echo "foto tidak boleh kosong!";
    }
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['gambar']['tmp_name'];
    unlink('../assets/img/foto_wisata/' . $lama);
    $folder = '../assets/img/foto_wisata/';
    move_uploaded_file($tmp, $folder . $gambar);
    mysqli_query($config, "UPDATE df_kuliner set nm_kuliner='$nm_kuliner',  gr_lintang='$gr_lintang', gr_bujur='$gr_bujur',  info_kuliner='$info_kuliner', gambar='$gambar' WHERE id_kuliner='$id_kuliner'");

    header('location: ../../administrator/home.php?page=wisata_kuliner');
  }
} elseif (isset($_POST['pn'])) {
  $id_kuliner = $_POST['id_penginapan'];
  $nm_kuliner = $_POST['nm_penginapan'];
  $info_pn = $_POST['info_pn'];
  $lintang = $_POST['lintang'];
  $bujur = $_POST['bujur'];

  $gambar = $_FILES['gambar']['name'];
  $lama = $_POST['gambar_lama'];
  if (empty($gambar)) {
    if (empty($gambar)) {
      echo "foto tidak boleh kosong!";
    }
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['gambar']['tmp_name'];
    unlink('../assets/img/foto_wisata/' . $lama);
    $folder = '../assets/img/foto_wisata/';
    move_uploaded_file($tmp, $folder . $gambar);
    mysqli_query($config, "UPDATE penginapan set nm_penginapan='$nm_penginapan',info_pn='$info_pn', lintang='$lintang', bujur='$bujur', gambar='$gambar' WHERE id_kuliner='$id_kuliner'");

    header('location: ../../administrator/home.php?page=penginapan');
  }
} elseif (isset($_POST['us'])) {
  $id_user = $_POST['id_user'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $passLama = $_POST['pw'];
  $passBaru = $_POST['password'];
  $level = $_POST['level'];
  $password = ($passBaru != '') ? password_hash($passBaru, PASSWORD_DEFAULT) : $passLama;

  $gambar = $_FILES['foto']['name'];
  $lama = $_POST['fotoLama'];
  $alamat = $_POST['alamat'];

  if (empty($gambar)) {
    $foto = $lama;
  } else {
    $extension = pathinfo($gambar, PATHINFO_EXTENSION);
    $tmp = $_FILES['foto']['tmp_name'];
    unlink('../assets/img/foto_profil/' . $lama);
    $folder = '../assets/img/foto_profil/';
    move_uploaded_file($tmp, $folder . $gambar);
    $foto = $gambar;
  }

  mysqli_query($config, "UPDATE user set username='$username', email='$email', password='$password',level='$level', alamat='$alamat', foto='$foto' WHERE id_user='$id_user'");

  header('location: ../../administrator/home.php?page=data_user');
}
