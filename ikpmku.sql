-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 15 Bulan Mei 2020 pada 14.38
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10328029_ikpmku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `id` int(11) NOT NULL,
  `profil` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id`, `profil`) VALUES
(1, 'IKPMKU DIY yang merupakan singkatan dari Ikatan Keluarga Pelajar Mahasiswa Kalimantan Utara Daerah Istimewa Yogyakarta. IKPMKU DIY mewadahi seluruh  pelajar dan mahasiswa yang menuntut ilmu dan berasal dari Provinsi Kalimantan Utara sebagai organisasi yang menyediakan wahana bagi pelajar dan mahasiswa yang ingin mengenal orang-orang yang berasal dari Kalimantan Utara. Dimana atas dasar itulah organisasi IKPMKU DIY dibangun guna mempereratan rasa kekeluargaan antar sesama daerah.\r\n\r\nDidalam organisasi IKPMKU sendiri terdapat beberapa divisi. Tujuan dibentuknya divisi ini adalah sebagai media yang memberikan segala informasi yang terkait dengan hal yang bersangkutan dikaltara seperti beasiswa, event, kegiatan Bersama dll . Yang dimana divisi yang dinaungi didalam IKPMKU sendiri ada 3 divisi yaitu Jarmedkom (Jaringan Media dan Komunikasi), Humsos (Humas dan Sosial), Pendikbud (Pendidikan dan Kebudayaan), Keolahragaan dan Keagamaan.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `saran_kritik`
--

CREATE TABLE `saran_kritik` (
  `id` int(2) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `message` text NOT NULL,
  `tgl_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_asrama`
--

CREATE TABLE `tb_asrama` (
  `id` int(2) NOT NULL,
  `asrama` varchar(128) NOT NULL,
  `ketua` varchar(128) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `alamat` varchar(280) NOT NULL,
  `daya_tampung` int(2) NOT NULL,
  `j_kamar_kosong` int(2) NOT NULL,
  `map` longtext NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_asrama`
--

INSERT INTO `tb_asrama` (`id`, `asrama`, `ketua`, `no_hp`, `alamat`, `daya_tampung`, `j_kamar_kosong`, `map`, `image`) VALUES
(5, 'Asrama Putri Kabupaten Malinau', 'Fera Novani', '082350210358', 'Jl. Utama No. 18 Rt. 03, Rw. 09 Maguharjo, Depok, Sleman, DIY', 10, 5, 'https://goo.gl/maps/RdgaX8rnWTH41Dsy8', 'asrama_putri_malinau1.jpg'),
(6, 'Asrama Intimung Kabupaten Malinau', 'Yudanles', '082255444351', 'Jl. Lawu 3 Seturan Kec. Depok Kab. Sleman, DIY', 23, 2, 'https://goo.gl/maps/XQdKi3ShGpeRGb6L7', 'asrama_intimung_1.jpg'),
(7, 'Asrama Pelajar Mahasiswa Kabupaten Bulungan ', ' Muhammad Risky', '081373185741', 'Jl. Gelagah Sari/Gg.Manggis Uh Iv-354 Kec. Umbulharjo. DIY', 23, 2, '', 'asrama_putra_bulungan.jpg'),
(8, 'Asrama Mahasiswa Pelajar Kota Tarakan “Paguntaka”', 'Yoktan Parisa', '082351688587', 'Jl. Lasda Adi Sucipto, Km 7, Gang Oinus No.1, Catur Tunggal, Depok, Delman, DIY', 44, 3, '', 'asrama_paguntaka.jpg'),
(9, 'Asrama Putra Kabupaten Nunukan', 'Novensius Payong', '085326076484', 'Jl. Rukun Pertiwi Gendeng Gk Iv Rt. 84, Rw. 20, Baciro Gondukusuman, DIY', 23, 2, 'https://goo.gl/maps/eMKVVmeKq8VuSxdk9', 'asrama_putra_nunukan_(3).jpg'),
(10, 'Asrama Putri Kabupaten Nunukan', 'Mayang Asri Sepyunita', '081348336817', 'Jl. Garuda No.432, Rt.09, Rw. 025, Kel. Banguntapan, Kec. Wonocatur, Kab. Bantul. DIY', 45, 4, '', 'asrama_putri_nunkan_2.jpg'),
(11, 'Asrama Mahasiswi  Kaltara Lemlai Suri ', 'Ibtihal Zahidah', '085226124752', 'Jl. Kauman Gm I 172, Ngupasan, Gonodmanan, Kota Yogyakarta, DIY', 55, 5, '', 'asrama_lemlai_suri_2_(1).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(2) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(128) NOT NULL,
  `view` int(11) NOT NULL,
  `image` varchar(128) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `judul`, `isi`, `penulis`, `view`, `image`, `tanggal`) VALUES
(8, 'Peduli Musibah Gempa Tsunami Palu &amp; Donggala, Sulawesi Tengah', 'IKPMKU-DIY Sejumlah mahasiswa Kalimantan Utara yang sedang berkuliah di Daerah Istimewa Yogyakarta menggelar Penggalangan dana untuk korban tsunami dan gempa bumi yang terjadi di Palu dan Donggala, Sulawesi Tengah di Tugu Jogja pada, hari kamis - jum\'at (4-5/10/2018).\r\n\r\nBerbekal kardus disertai spanduk yang bertuliskan \'Peduli Sulteng, Palu, Donggala\', mereka menghampiri setiap pengendara yang berhenti saat lampu merah.\r\n\r\nDalam aksi solidaritas galang dana tersebut terlihat para mahasiswa Kalimantan Utara sangat bersemangat dan antusias, itu terbukti dengan jumlah relawan yang hadir dan mereka rela ikut aksi penggalangan dana sampai selesai yang diadakan mulai dari 16.00 – 20.00 WIB.\r\n\r\nDari aksi galang dana yang diadakan 2 hari tersebut, terkumpul dana total Rp.11.063.000 dengan rincian pada hari pertama terkumpul Rp.5.839.000, hari kedua Rp.5.024.000 dan tambahan dana hibah sebesar Rp.200.000. Adapun dana yang terkumpul akan diserahkan kepada asrama putra Sulawesi Tengah yang nantinya disalurkan kepada saudaara kita yang terkena musibah disana.', 'Admin1', 0, 'berita1561139937.jpg', '2018-11-07'),
(9, 'Ramadan Project 2018', 'IKPMKU-DIY - Ramadan Project 2018 atau biasa disingkat RP.2018 adalah sebuah kegiatan yang menjadi salah satu program kerja divisi kerohanian di Ikatan Keluarga Pelajar Mahasiswa Kalimantan Utara (IKPMKU) Daerah Isitimewa Yogyakarta yang dilaksanakan di bulan ramadan . Ramadan Project 2018 melibatkan seluruh mahasiswa Kalimantan Utara yang berkuliah di DIY  yang berperan sebagai panitia, pengisi acara, dan peserta. Semuanya bahu membahu dalam mensukseskan acara ini. Akhir dari acara Ramadan project 2018 dilaksanakan ditempat yang sama seperti tahun sebelumnya yaitu halaman asrama putra mahasiswa provinsi Kalimantan Utara “AMKU Benuanta” sekaligus sekretariat IKPMKU DIY yang beralamat di Jl. Jembatan Merah No.103A Soropadan, Condong Catur, Depok, Sleman, Daerah Istimewa Yogyakarta.\r\n\r\n\r\nRamadan Project 2018 terdiri dari 3 kegiatan utama yaitu berbagi ke Panti Asuhan (nama panti asuhan), bagi-bagi takjil dan buka bersama seluruh mahasiswa Kalimantan Utara yang berkuliah di Daerah Istimewa Yogyakarta. Pada Kegiatan pertama yaitu berbagi ke panti asuhan, panitia dan pengurus IKPMKU DIY melakukan beberapa kegiatan yaitu perkenalan, games, berbagi sembako, dan penyerahan kenang-kenangan kepada panti asuhan. Pada kegiatan kedua yaitu bagi-bagi takjil, yang mana takjil tersebut di bagikan ke para pengendara di lampu merah persimpangan UNY. Sampai pada kegiatan yang terakhir, yang menjadi penutup kegiatan Ramadan Project 2018 yaitu buka bersama dengan seluruh mahasiswa Kalimantan Utara yang berkuliah di DIY dengan rangkaian acara sambutan ketua panitia RP. 2018 sdr.Rismauji, sambutan ketua IKPMKU DIY sdr. Roypison, Tausiyah Oleh Ust. Muh. Darmawi Arsyad, buka puasa bersama, solat maghrib berjamaah, hiburan yang di isi oleh sdr (nama talent) dan diakhiri dengan halal bihalal serta foto bersama.\r\n\r\nDilihat dari rangkan acara yang telah dilaksanakan, Ramadan Project diharapkan dapat menjadi salah satu wadah bagi mahasiswa Kalimantan Utara untuk bersilaturahmi satu sama lain dan jika kita cermati tradisi ini juga dapat menumbuhkan rasa untuk saling berbagi kepada sesama.  Dengan demikian, kegiatan ini sangatlah bermanfaat dan diharapkan bisa terus eksis dengan kualitas yang terus ditingkatkan di tahun berikutnya.\r\n', 'Admin', 0, 'berita1561492761.jpg', '2018-11-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_devisi`
--

CREATE TABLE `tb_devisi` (
  `id` int(11) NOT NULL,
  `devisi` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_devisi`
--

INSERT INTO `tb_devisi` (`id`, `devisi`) VALUES
(1, 'SDM & KEBUDAYAAN'),
(2, 'HUMAS'),
(3, 'JARMEDKOM');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_galeri`
--

CREATE TABLE `tb_galeri` (
  `id` int(2) NOT NULL,
  `kegiatan` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_galeri`
--

INSERT INTO `tb_galeri` (`id`, `kegiatan`, `image`) VALUES
(1, 'Pelantikan Pengurus IKPMKU-DIY Tahun 2019/2020', 'tes1234.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int(11) NOT NULL,
  `kabupaten` varchar(128) NOT NULL,
  `jumlah` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `kabupaten`, `jumlah`) VALUES
(1, 'Tarakan', 90),
(3, 'Malinau', 70),
(4, 'Tanah Tidung', 60),
(6, 'Nunukan', 80),
(7, 'Bulungan', 99);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_programkerja`
--

CREATE TABLE `tb_programkerja` (
  `id` int(11) NOT NULL,
  `program_kerja` varchar(128) NOT NULL,
  `tujuan` text NOT NULL,
  `sasaran` varchar(300) NOT NULL,
  `mitra` varchar(128) NOT NULL,
  `pj` varchar(128) NOT NULL,
  `tanggal_pelaksanaan` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `class` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_programkerja`
--

INSERT INTO `tb_programkerja` (`id`, `program_kerja`, `tujuan`, `sasaran`, `mitra`, `pj`, `tanggal_pelaksanaan`, `status`, `class`) VALUES
(7, 'Anniversary IKPMKU-DIY Ke-4 dan Seminar', 'Membangkitkan jiwa dan semangat juang sportivitas untuk berprestasi dalam bidang olahraga.', 'Mahasiswa kalimantan utara di Yogyakarta', 'Mahasiswa kalimantan utara di Yogyakarta', 'SDM Kebudayaan, HUMAS dan JARMEDKOM', '2019-11-23', 'TERLAKSANAKAN', 'badge badge-success');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_status`
--

CREATE TABLE `tb_status` (
  `id` int(1) NOT NULL,
  `status` varchar(128) NOT NULL,
  `class` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_status`
--

INSERT INTO `tb_status` (`id`, `status`, `class`) VALUES
(1, 'TERLAKSANAKAN', 'badge badge-success'),
(2, 'BELUM TERLAKSANAKAN', 'badge badge-danger');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_struktur`
--

CREATE TABLE `tb_struktur` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_struktur`
--

INSERT INTO `tb_struktur` (`id`, `nama`, `jabatan`, `image`) VALUES
(43, 'Deny Indra Haryanto', 'Wakil Ketua', 'deny.png'),
(44, 'Desiani Rahayu', 'Sekretaris', 'desy.png'),
(45, 'Olivia Intan Permata Sari', 'Bendahara', 'oliv.png'),
(47, 'Jery Hardianto', 'Koor Jarmedkom', 'jery.png'),
(48, 'Chairani Ramadhani', 'Anggota Jarmedkom', 'karin.png'),
(49, 'Choreson Luther', 'Anggota Humas', 'man-2.png'),
(50, 'Marko Vambasten', 'Koor Humas', 'man-3.png'),
(51, 'Atek Anggara', 'Anggota Humas', 'man-42.png'),
(52, 'Vebi Veronika', 'Anggota SDM & Kebudayaan', 'girl-13.png'),
(53, 'Javika', 'Anggota SDM & Kebudayaan', 'girl-14.png'),
(54, 'Ari Bayu Saputra', 'Koor SDM & Kebudayaan', 'man-1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

-- Seed account for local development only. Password: admin123
INSERT INTO `user` (`id`, `nama`, `email`, `password`) VALUES
(4, 'Admin', 'admin@example.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(1) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id` int(11) NOT NULL,
  `visi` text NOT NULL,
  `misi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`id`, `visi`, `misi`) VALUES
(1, 'Terwujudnya keharmonisan dalam beroganisasi, kemandirian, serta kegigihan sebagai intelektual yang berkompeten dan berbudaya', 'Melibatkan pelajar mahasiswa yang berasal dari kalimanta utara untuk berperan aktif dalam berorganisasi disatu wadah yaitu IKPMKU DIY.'),
(11, '', 'Membina kesadaran pelajar mahasiswa selaku generasi penerus dalam bermasyarakat berbangsa dan bernegara. '),
(13, '', 'Meningkatkan Kualitas Sumber daya manusia untuk kemajuan kalimantan utara.');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `saran_kritik`
--
ALTER TABLE `saran_kritik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_asrama`
--
ALTER TABLE `tb_asrama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_devisi`
--
ALTER TABLE `tb_devisi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_programkerja`
--
ALTER TABLE `tb_programkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `profil`
--
ALTER TABLE `profil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `saran_kritik`
--
ALTER TABLE `saran_kritik`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_asrama`
--
ALTER TABLE `tb_asrama`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_devisi`
--
ALTER TABLE `tb_devisi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_galeri`
--
ALTER TABLE `tb_galeri`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_programkerja`
--
ALTER TABLE `tb_programkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_struktur`
--
ALTER TABLE `tb_struktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
