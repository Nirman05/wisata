-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Sep 2021 pada 09.18
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wsbuol`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about_us`
--

CREATE TABLE `about_us` (
  `id_ab` int(6) NOT NULL,
  `informasi` longtext NOT NULL,
  `gambar_ab` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `about_us`
--

INSERT INTO `about_us` (`id_ab`, `informasi`, `gambar_ab`) VALUES
(6, 'Website  ini dibuat untuk menyelesaikan tugas skripsi di kampus STMIK AKBA Makassar ', 'brg-1623805429.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `df_informasi`
--

CREATE TABLE `df_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nm_infokasi` varchar(50) NOT NULL,
  `info_wst` longtext NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `df_informasi`
--

INSERT INTO `df_informasi` (`id_informasi`, `nm_infokasi`, `info_wst`, `gambar`) VALUES
(9, ' Sejarah Wisata Kabupaten Buol ', 'Wisata Sejarah Kabupaten Buol mulai dikenal sekitar tahun 1380 M, pada pemerintahan NDUBU I dengan permaisurinya bernama SAKILATO. Saat ini Kerajaan Buol dipimpin oleh seorang raja bernama SAFRI ABDULAH T. TURUNGKU. Beberapa situs-situs peninggalan sejarah seperti Rumah Adat Istana Raja, Kuburan Keramat Raja DAI BOLRE, Tugu Sejarah ID AWUY, dan Rumah Peninggalan Belanda yang terletak di Pulau Lesman.', '0001.jpg'),
(10, 'Letak Luas dan batas wilayah Kabupaten Buol', 'Kabupaten Buol adalah wilayah kabupaten di provinsi Sulawesi Tengah, sebelah Utara berbatasan dengan Laut Sulawesi sekaligus bersebelahan dengan Negara Philipina, sebelah Timur berbatasan dengan Kabupaten Gorontalo Utara Propinsi Gorontalo, sebelah Selatan berbatasan dengan Kabupaten Tolitoli dan Kabupaten Parigi Moutong dan sebelah Barat berbatasan dengan Kabupaten Tolitoli. Secara geografis terletak antara 0,350-1,200 Lintang Utara serta 1200 â€“ 122,090 Bujur Timur. Luas wilayah Kabupaten Buol keseluruhan 4.043,57 km2. Wilayah administrasi Kabupaten Buol adalah 11 (sebelas) wilayah yaitu Kecamatan Biau, Karamat, Lakea, Momunu, Tiloan, Bokat, Bukal, Bunobogu, Gadung, Paleleh Barat dan Paleleh terbagi dalam 125 desa/kelurahan.', 'brg-1623940979.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `df_kuliner`
--

CREATE TABLE `df_kuliner` (
  `id_kuliner` int(6) NOT NULL,
  `nm_kuliner` varchar(100) NOT NULL,
  `gr_lintang` varchar(30) NOT NULL,
  `gr_bujur` varchar(30) NOT NULL,
  `info_kuliner` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `df_kuliner`
--

INSERT INTO `df_kuliner` (`id_kuliner`, `nm_kuliner`, `gr_lintang`, `gr_bujur`, `info_kuliner`, `gambar`, `id_user`) VALUES
(1, 'Warung Ambal', '1.16128', '121.42891', 'AmbalMakanan yang satu ini terbuat dari beberapa ikan dan di campur dengan sagu di dalam nya, makanan ini sangat populer di Buol. Makanan ini sangat unik karena ambal di buat dengan sagu lalu di campur dengan ikan segar yang sudah di bersihkan lalu di  proses dalam bentuk pencampuran dengan sagu.Makanan Ambal biasanya di sebut oleh masyarakat di Buol yaitu Pizza nya yang ada di Buol, makanan ini sangatlah enak dan sangat unik ketika di makan, Ambal merupakan gabungan ikan dan sagu sangat lah menggugah selera para penikmatnya, ketika anda memakan ambal dengan satu suapan saja dijamin anda akan di buatnya ketagihan dengan makanan yang satu ini.TombouatTombouat merupakan makanan yang cara dibuatnya melalui di bakar, makanan yang satu ini sangat unik karena dari segi masaknya saja sudah terlihat enak. Tombouat berbahan dasar olahan ayam yang dibungkus di dalam daun pisang yang hijau, kenapa tombouat memakai daun pisang hijau karena makanan ini sangat mengutamakan wangi dari daun pisang tersebut, lalu di masukkan sagu ke dalam daun pisang bersama olahan ayam yang sudah di beri bumbu dan rempah-rempah lainnya.Ketika sudah di masukkan ke dalam daun pisang, lalu siapkan tempat pembakaran karena Tombouat cara masakanya harus di bakar dan bisa membuat makanan ini menjadi lebih enak dan menarik, setelah selesai membuat tempat pembakaran lalu letakkan daun pisang yang berisi sagu dan olahan ayam tersebut ke tempat pembakaran tersebut, kita tunggu hingga matang dan kita bisa melihat dari daun pisang nya ketika sudah berwarna agak kecokelatan baru kita bisa angkat dan bisa di hidangkan.Boid (Jepa)Makanan yang khas dari Buol lainnya yaitu Boid atau jepa, makanan ini sangat banyak digemari dan banyak di cari oleh pengunjung baik itu dari masyarakat Buol maupun masyarakat luar dari buol seperti Manado dan yang lainnya.Mmakanan Boid ini sangatlah unik dan sangat lah enak ketika dimakan, Boid berbahan dasar Sagu yang di olah menjadi tumbang sagu, lalu Boid di kukus dalam wajan dan tunggu beberapa menit ketika sudah matang Boid langsung di potong tipis-tipis dan dibentuk sesuai yang kita mau, makanan boid ini sangat wajib anda coba ketika berada di Boul karena rasa nya unik dari olahan sagu sehingga menarik sekali untuk di coba.Makanan-makanan khas Boul rata-rata berbahan sagu, karena sagu lah yang membuat makanan dari Boul ini menarik dan sangat enak ketika di makan, anda harus mencoba makanan khas Boul ini karena kalau tidak mencoba anda tidak akan tau rasa dari makanan khas Buol ini', 'Makanan-Khas-di-Buol.png', 1),
(3, 'bakos', '1.1774426', '121.3267389', 'okok', 'brg-1630334279.png', 1),
(5, 'Zolda West', '21387238', '129382178', 'sajdhsjadkjhdsad', 'brg-1630460601.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `df_user`
--

CREATE TABLE `df_user` (
  `id` int(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `df_user`
--

INSERT INTO `df_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', 'ganteng', ''),
(2, 'admin', '$2y$10$kjj3t0Mt.UjKHyFQIt5CFeu/.aBa9Vw9b', 'niramn jr 97'),
(3, 'admin', '$2y$10$JH25m2WiaqqmIvxHCK2B7u1NiaidgNId/', 'admin'),
(4, 'mohnirman', '', ''),
(5, 'admin', 'ga', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `df_wisata`
--

CREATE TABLE `df_wisata` (
  `id_lokasi` int(6) NOT NULL,
  `nm_lokasi` varchar(30) NOT NULL,
  `gr_lintang` varchar(20) NOT NULL,
  `gr_bujur` varchar(30) NOT NULL,
  `informasi` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `df_wisata`
--

INSERT INTO `df_wisata` (`id_lokasi`, `nm_lokasi`, `gr_lintang`, `gr_bujur`, `informasi`, `gambar`, `id_user`) VALUES
(3, 'Pemandian Tertaria', '1.151029', '121.403562', 'Selain Pemandian  Kumaligon, Anda pun juga bisa untuk mengunjungi Pemandian Tertaria yang terletak di Kelurahan Kulango ini. Berada di dataran tinggi, maka tak heran jika pemandian ini pun juga memiliki air yang cukup dingin. Untuk bisa masuk ke tempat ini pun Anda cukup mengeluarkan uang dengan harga yang terjangkau dan Anda pun akan bisa untuk menikmati pemandian ini selama seharian penuh.', 'Pemandian-Tertaria.jpg', 1),
(4, 'Pemandian Kumaligon', '1.223556', '121.408018', 'Bagi Anda yang ingin pergi ke pemandian, maka Anda pun bisa dengan mengunjungi pemandian Kumaligon yang terletak di Desa Kumaligin, Kecamatan Biau ini. Untuk menuju tempat ini pun tak terlalu susah karena Anda hanya menempuh perjalanan sekitar 10 menit dari Keluarahan Leok. Meskipun memiliki kondisi air yang cukup dingin, akan tetapi hal tersebut tak menyurutkan warga sekitar untuk menghabiskan akhir pekannya di tempat satu ini.', 'qr-scan-icon-10.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fr_kontak`
--

CREATE TABLE `fr_kontak` (
  `id` int(6) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pesan` longtext NOT NULL,
  `rate` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fr_kontak`
--

INSERT INTO `fr_kontak` (`id`, `nama`, `email`, `pesan`, `rate`) VALUES
(22, 'Moh Nirman', 'nirmanjr97@gmail.com', 'mnm', 3),
(26, 'NURLELA RAHIM DAEPAWALA', 'nurainrdaepawala99@gmail.com', 'mmmm', 3),
(28, 'fadel', 'fadel@gmail.com', 'mmnmnmnm', 4),
(29, 'NURLELA RAHIM DAEPAWALA', 'nurainrdaepawala99@gmail.com', 'mn', 3),
(30, 'NURLELA RAHIM DAEPAWALA', 'nurlelahrdaepawala@gmail.com', 'mn', 3),
(34, 'niramn jr 97', 'nirman@gmail.com', 'ok', 3),
(35, 'niramn jr 97', 'nirman@gmail.com', 'km', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `k_rating`
--

CREATE TABLE `k_rating` (
  `id_user` varchar(15) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `perbaikan` varchar(255) NOT NULL,
  `id_kuliner` varchar(30) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `komentar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `k_rating`
--

INSERT INTO `k_rating` (`id_user`, `rating`, `perbaikan`, `id_kuliner`, `nama_user`, `komentar`) VALUES
('::1', 4, '', '1', 'Moh', 'ok'),
('127.0.0.1', 2, '', '1', 'Novan', 'sadjkhasdhjsahdja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pantai`
--

CREATE TABLE `pantai` (
  `id_pantai` int(6) NOT NULL,
  `nm_pantai` varchar(30) NOT NULL,
  `gr_lintang` varchar(30) NOT NULL,
  `gr_bujur` varchar(30) NOT NULL,
  `inf_pantai` longtext NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pantai`
--

INSERT INTO `pantai` (`id_pantai`, `nm_pantai`, `gr_lintang`, `gr_bujur`, `inf_pantai`, `gambar`, `id_user`) VALUES
(2, 'Pantai Doulann', '1.0815131', '121.5265929 ', 'Tempat Cocok untuk keluaraga untuk menikmati suasan pantai yang nyaman', 'Pantai Doulan.png', 0),
(3, 'Pulau Busak', '1.270323', '121.362629', 'Pulau Busak adalah pulau yang Terletak di Desa Busak Kecamatan Karamat, di Kabupaten Buol, Sulawesi Tengah. Pulau ini terletak di sisi utara daratan Sulawesi. Hamparan terumbu karang indah menjadi daya tarik wisatawan penyuka wisata bahari di Pulau Busak. Berjarak 15 km dari ibu kota kabupaten atau 10 menit waktu tempuh dengan menggunakan perahu nelayan. Pengunjung dapat melakukan aktivitas wisata seperti swimming, snorkling, dan diving, pengalaman wisata bahari di sini sangat mengesankan Alamnya yang masih asri menjadikan pulau ini selalu menjadi kunjungan wisatawan lokal, nusantara dan mancanegara dan merupakan salah satu daya tarik wisata unggulan yang dikelola oleh Dinas Pemuda Olahraga dan Pariwisata Kabupaten Buol. Wikipedia', 'pulau-busak1.jpg', 0),
(4, 'Pantai Laut Batu Tiga', '1.2222807265608053', ' 121.4438322883991', 'Untuk Anda yang ingin mencari wisata laut, maka Anda pun bisa mengunjungi tempat satu ini. Berada di Kelurahan Leok, Kabupaten Buol maka Anda pun akan bisa untuk menemukan wisata eksotis satu ini. Keunikan dari tempat wisata satu ini adalah sebuah pulau yang memiliki keberadaan tiga batu karang. Uniknya lagi, ketiga batu karang tersebut memiliki bentuk yang mirip dan juga berdiri dengan kokoh di tepi pantai.Selain itu, Anda pun juga bisa berenang di pantai satu ini. Hal tersebut dikarenakan laut di pulau satu ini memiliki ombak yang tenang. Sehingga Anda pun akan bisa berenang dengan aman. Tak hanya itu saja, jernihnya air laut pun akan membuat Anda mampu untuk melihat bongkahan bebatuan yang terdapat di dalam air tersebut. Sangat cantik bukan?Lokasi: Leok I, Kec. Biau, Kab. Buol.', 'Wisata-Laut-Batu-Tiga.jpg', 0),
(5, 'Pulau Panjang Palele', '1.060343', '121.970876', 'Bagi Anda yang sedang mengunjungi daerah Buol, maka Anda pun perlu untuk singgah ke tempat satu ini. Hal ini dikarenakan Anda akan mendapatkan view dan pemandangan yang akan menarik perhatian anda. Dimana ketika Anda sedang berada di tempat satu ini, maka Anda pun akan menemukan hamparan bukit hijau yang membentang luas.Sehingga ketika Anda berada disini pun, Anda akan bisa memanjakan mata dengan pemandangan yang sangat indah. Dinamakan Pulau Panjang dikarenakan pulau tersebut memiliki bentuk yang memanjang. Disini, Anda pun akan menikmati hamparan bukit yang diselimuti oleh hijaunya pohon dan rerumputan yang akan memanjakan mata anda. Dari atas sini, Anda pun bisa melihat laut dan pulau lain yang ada di sekitarnya.Lokasi: Paleleh, Kec. Paleleh, Kab. Buol.', 'pulau-boki.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(30) NOT NULL,
  `nm_penginapan` varchar(100) NOT NULL,
  `info_pn` longtext NOT NULL,
  `lintang` varchar(60) NOT NULL,
  `bujur` varchar(60) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `nm_penginapan`, `info_pn`, `lintang`, `bujur`, `gambar`) VALUES
(11, 'Hotel Surya Wisata Buol', 'Penginapan yang nyaman dan tenang.Hotel Surya Wisata sebuah penginapan yang berlokasi di Jalan P. Marhum No.5, Kali, Biau, Kabupaten Buol, Sulawesi Tengah. Suasana ruangan yang bersih dan nyaman, cocok bagi Anda yang akan berlibur atau mengadakan kunjungan. Lokasi yang strategis sehingga mudah untuk diakses, dan harga yang terjangkau bisa menjadi pilihan akomodasi perjalanan Anda.Detail Hotel Surya Wisata BuolAlamat Jl. P. Marhum No.5, Kali, Biau, Kabupaten Buol, Sulawesi Tengah, IndonesiaWaktu check-in standar 14:00 * Waktu check-in dari plan mempunyai prioritas lebih besarWaktu check-out standar 12:00 * Waktu check-out dari plan mempunyai prioritas lebih besar.Jumlah kamar 21 (Single: 0, Double: 0, Twin: 0, Suite: 0,Lainnya: 0)', '1.1625868024131212', '121.43112427645374', 'brg-1623407390.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `p_rating`
--

CREATE TABLE `p_rating` (
  `id_user` varchar(11) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `perbaikan` varchar(255) NOT NULL,
  `id_pantai` varchar(11) NOT NULL,
  `nama_user` varchar(11) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `p_rating`
--

INSERT INTO `p_rating` (`id_user`, `rating`, `perbaikan`, `id_pantai`, `nama_user`, `komentar`) VALUES
('::1', 4, '', '6', 'Nirman', 'm'),
('::1', 4, '', '1', 'Ni', 'bgus'),
('::1', 4, '', '2', 'Moh ', 'tes'),
('::1', 3, '', '4', 'Moh Nirman', 'Bagus'),
('127.0.0.1', 2, '', '2', 'Yiga', 'aksjdhsjadhkjasd fdgfdg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_rating`
--

CREATE TABLE `t_rating` (
  `id_user` varchar(35) NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `perbaikan` varchar(255) NOT NULL,
  `id_lokasi` varchar(11) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `komentar` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `t_rating`
--

INSERT INTO `t_rating` (`id_user`, `rating`, `perbaikan`, `id_lokasi`, `nama_user`, `komentar`) VALUES
('::1', 1, '', '4', 'Tes', 'kedua'),
('2', 4, '', '4', 'Fitrawani', 'tempat nya bagus '),
('3', 3, '', '4', 'Fatriani', 'Tempat nya lumayan bagus'),
('::1', 2, '', '3', 'Nirman', 'kurang bagus tempat nya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(99) NOT NULL,
  `email` varchar(60) NOT NULL,
  `tgl_daftar` timestamp NOT NULL DEFAULT current_timestamp(),
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `email`, `tgl_daftar`, `alamat`, `foto`, `level`) VALUES
(1, 'admin', '$2y$10$6/mWT4CZi93WQQCOcP3DvOCCvDS9si5sAWNDdorExR.C/grYdA7jq', 'nirman@gmail.com', '2021-08-29 14:19:47', 'Jl. Semeru', 'book-168824_1920.jpg', 'admin'),
(3, 'zolda', '$2y$10$vwyy8Ia4VvQBUBgeBm8XXu2uuAGfLhWkCQlkOGISPdkcncLQRdx2C', 'zoldas@gmail.com', '2021-08-31 19:01:14', 'kasdjkadjasd', 'book-168824_1920.jpg', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id_ab`);

--
-- Indeks untuk tabel `df_informasi`
--
ALTER TABLE `df_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indeks untuk tabel `df_kuliner`
--
ALTER TABLE `df_kuliner`
  ADD PRIMARY KEY (`id_kuliner`);

--
-- Indeks untuk tabel `df_user`
--
ALTER TABLE `df_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `df_wisata`
--
ALTER TABLE `df_wisata`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indeks untuk tabel `fr_kontak`
--
ALTER TABLE `fr_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pantai`
--
ALTER TABLE `pantai`
  ADD PRIMARY KEY (`id_pantai`);

--
-- Indeks untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id_ab` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `df_informasi`
--
ALTER TABLE `df_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `df_kuliner`
--
ALTER TABLE `df_kuliner`
  MODIFY `id_kuliner` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `df_user`
--
ALTER TABLE `df_user`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `df_wisata`
--
ALTER TABLE `df_wisata`
  MODIFY `id_lokasi` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `fr_kontak`
--
ALTER TABLE `fr_kontak`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `pantai`
--
ALTER TABLE `pantai`
  MODIFY `id_pantai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
