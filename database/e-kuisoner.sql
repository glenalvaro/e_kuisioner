SET foreign_key_checks = 0;
#
# TABLE STRUCTURE FOR: detail_survey
#

CREATE TABLE `detail_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_survey` int(11) NOT NULL,
  `no_soal` int(11) NOT NULL,
  `jawaban` varchar(100) NOT NULL,
  `type` varchar(1) NOT NULL,
  `skor` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=189 DEFAULT CHARSET=utf8mb4;

INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (171, 118, 1, 'Tidak sesuai', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (172, 118, 2, 'Tidak mudah', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (173, 118, 3, 'Kurang cepat', 'B', 2);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (174, 118, 4, 'Cukup mahal', 'B', 2);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (175, 118, 5, 'Tidak sesuai', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (176, 118, 6, 'Sangat kompeten', 'D', 4);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (177, 118, 7, 'Sangat sopan dan ramah', 'D', 4);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (178, 118, 8, 'Sangat baik', 'D', 4);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (179, 118, 9, 'Dikelola dengan baik', 'D', 4);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (180, 119, 1, 'Tidak sesuai', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (181, 119, 2, 'Tidak mudah', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (182, 119, 3, 'Tidak cepat', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (183, 119, 4, 'Sangat mahal', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (184, 119, 5, 'Tidak sesuai', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (185, 119, 6, 'Tidak kompeten', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (186, 119, 7, 'Tidak sopan dan ramah', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (187, 119, 8, 'Buruk', 'A', 1);
INSERT INTO `detail_survey` (`id`, `id_survey`, `no_soal`, `jawaban`, `type`, `skor`) VALUES (188, 119, 9, 'Tidak ada', 'A', 1);


#
# TABLE STRUCTURE FOR: t_nilai
#

CREATE TABLE `t_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(10) NOT NULL,
  `nilai` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_nilai` (`id`, `type`, `nilai`) VALUES (1, 'A', 4);
INSERT INTO `t_nilai` (`id`, `type`, `nilai`) VALUES (2, 'B', 3);
INSERT INTO `t_nilai` (`id`, `type`, `nilai`) VALUES (3, 'C', 2);
INSERT INTO `t_nilai` (`id`, `type`, `nilai`) VALUES (4, 'D', 1);


#
# TABLE STRUCTURE FOR: t_responden
#

CREATE TABLE `t_responden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `pendidikan` varchar(11) NOT NULL,
  `usia` varchar(10) NOT NULL,
  `tanggal_survei` varchar(500) NOT NULL,
  `jam_survei` varchar(500) NOT NULL,
  `jenis_layanan` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_responden` (`id`, `nama`, `nomor_hp`, `jenis_kelamin`, `pekerjaan`, `pendidikan`, `usia`, `tanggal_survei`, `jam_survei`, `jenis_layanan`) VALUES (118, 'Glen Alvaro', '08xxxxxxxx', 'Laki-laki', 'Mahasiswa', 'S1', '20 Tahun', '2021-12-02', '19:33:38', 'Usaha komputer');
INSERT INTO `t_responden` (`id`, `nama`, `nomor_hp`, `jenis_kelamin`, `pekerjaan`, `pendidikan`, `usia`, `tanggal_survei`, `jam_survei`, `jenis_layanan`) VALUES (119, 'Pegawai ', '08xxxxxxxx', 'Perempuan', 'Mahasiswa', 'S1', '22 Tahun', '2021-12-03', '19:36:29', 'Usaha');


#
# TABLE STRUCTURE FOR: t_setting
#

CREATE TABLE `t_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_identitas` varchar(30) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `nama_app` varchar(200) NOT NULL,
  `nama_dinas` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `warna_sistem` varchar(30) NOT NULL,
  `image` varchar(500) NOT NULL,
  `jadwal_kuisioner` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_setting` (`id`, `no_identitas`, `kode_pos`, `nama_app`, `nama_dinas`, `alamat`, `email`, `no_telepon`, `warna_sistem`, `image`, `jadwal_kuisioner`) VALUES (1, 'ptsp', '95619', 'SURVEI KEPUASAN MASYARAKAT', 'DINAS PENAMAMAN MODAL DAN PELAYANAN TERPADU SATU PINTU DAERAH', 'PROVINSI SULAWESI UTARA KOTA MANADO', 'dinas@gmail.co.id', '+62-8124-229-1179', 'skin-red', 'assets/img/logo/ptsp.jpg', 'enabled');


#
# TABLE STRUCTURE FOR: t_skins
#

CREATE TABLE `t_skins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `warna_sistem` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (1, 'skin-blue');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (2, 'skin-red');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (3, 'skin-purple');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (4, 'skin-yellow');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (5, 'skin-green');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (6, 'skin-blue-light');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (7, 'skin-purple-light');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (8, 'skin-yellow-light');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (9, 'skin-red-light');
INSERT INTO `t_skins` (`id`, `warna_sistem`) VALUES (10, 'skin-green-light');


#
# TABLE STRUCTURE FOR: t_survei
#

CREATE TABLE `t_survei` (
  `id` int(11) NOT NULL,
  `pertanyaan` varchar(500) NOT NULL,
  `A` varchar(200) NOT NULL,
  `B` varchar(200) NOT NULL,
  `C` varchar(200) NOT NULL,
  `D` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (1, 'Bagaimana pendapat saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya', 'Tidak sesuai', 'Kurang sesuai', 'Sesuai', 'Sangat sesuai');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (2, 'Bagaimana pemahaman saudara tentang kemudahan prosedur pelayanan di unit ini\r\n', 'Tidak mudah', 'Kurang mudah', 'Mudah', 'Sangat mudah');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (3, 'Bagaimana pendapat saudara tentang kecepatan waktu dalam memberikan pelayanan', 'Tidak cepat', 'Kurang cepat', 'Cepat', 'Sangat cepat');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (4, 'Bagaimana pendapat saudara tentang kewajaran biaya/tarif dalam pelayanan', 'Sangat mahal', 'Cukup mahal', 'Murah', 'Gratis');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (5, 'Bagaimana pendapat saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan', 'Tidak sesuai', 'Kurang sesuai', 'Sesuai', 'Sangat sesuai');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (6, 'Bagaimana pendapat saudara tentang kompetensi/kemampuan petugas dalam pelayanan', 'Tidak kompeten', 'Kurang kompeten', 'Kompeten', 'Sangat kompeten');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (7, 'Bagaimana pendapat saudara tentang perilaku petugas dalam pelayanan terkait kesopanan dan keramahan', 'Tidak sopan dan ramah', 'Kurang sopan dan ramah', 'Sopan dan ramah', 'Sangat sopan dan ramah');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (8, 'Bagaimana pendapat saudara tentang kualitas sarana dan prasarana ', 'Buruk', 'Cukup', 'Baik', 'Sangat baik');
INSERT INTO `t_survei` (`id`, `pertanyaan`, `A`, `B`, `C`, `D`) VALUES (9, 'Bagaimana pendapat saudara tentang penanganan pengaduan pengguna layanan', 'Tidak ada', 'Ada tetapi tidak berfungsi', 'Berfungsi kurang maksimal', 'Dikelola dengan baik');


#
# TABLE STRUCTURE FOR: t_unsur
#

CREATE TABLE `t_unsur` (
  `id` int(12) NOT NULL AUTO_INCREMENT,
  `id_soal` int(11) NOT NULL,
  `id_unsur` varchar(20) NOT NULL,
  `nama_unsur` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (1, 1, 'U1', 'Persyaratan');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (2, 2, 'U2', 'Prosedur');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (3, 3, 'U3', 'Waktu Pelayanan');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (4, 4, 'U4', 'Biaya Tarif');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (5, 5, 'U5', 'Produk Layanan');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (6, 6, 'U6', 'Komptensi Pelaksana');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (7, 7, 'U7', 'Perilaku Pelaksana');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (8, 8, 'U8', 'Penanganan pengaduan, saran dan masukan');
INSERT INTO `t_unsur` (`id`, `id_soal`, `id_unsur`, `nama_unsur`) VALUES (9, 9, 'U9', 'Sarana & Prasarana');


#
# TABLE STRUCTURE FOR: tb_user
#

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `usia` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL,
  `image` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `usia`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (14, '2001', 'Glen Alvaro', '18208040@unima.ac.id', 'Tondano', '2001-02-04', '20 Tahun', 'Manado', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'admin1', 'admin', 'upload/img/profile/2001.jpg');
INSERT INTO `tb_user` (`id`, `nip`, `nama`, `email`, `tempat_lahir`, `tgl_lahir`, `usia`, `alamat`, `username`, `password`, `pass`, `level`, `image`) VALUES (21, '1999', 'Pegawai ', 'pegawai5@gmail.com', 'Tomohon 1', '1970-01-01', '21 Tahun', 'Manado', 'pegawai', '202cb962ac59075b964b07152d234b70', '123', 'pegawai', 'upload/img/profile/1999.jpg');


SET foreign_key_checks = 1;
