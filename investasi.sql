-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. Desember 2013 jam 13:41
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nurhadi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `user_id`, `judul`, `isi`, `gambar`) VALUES
(1, 'admin', 'Berita Pertamaasasasa', '<p>Gunung Sinabung (bahasa Karo: Deleng Sinabung) adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatera Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatera Utara dan menjadi puncak tertinggi di provinsi itu. Ketinggian gunung ini adalah 2.460 meter. Gunung ini tidak pernah tercatat meletus sejak tahun 1600[3] tetapi mendadak aktif kembali dengan meletus pada tahun 2010. Sejak 27 Agustus 2010, gunung ini mengeluarkan asap dan abu vulkanis.[4] Pada tanggal 29 Agustus 2010 dini hari sekitar pukul 00.15 WIB (28 Agustus 2010, 17.15 UTC), gunung Sinabung mengeluarkan lava.[5][6][7] Status gunung ini dinaikkan menjadi "Awas".[4] Dua belas ribu warga disekitarnya dievakuasi dan ditampung di 8 lokasi.[8][9] Abu Gunung Sinabung cenderung meluncur dari arah barat daya menuju timur laut.[10] Sebagian Kota Medan juga terselimuti abu dari Gunung Sinabung.[10] Bandar Udara Polonia di Kota Medan dilaporkan tidak mengalami gangguan perjalanan udara.[11] Satu orang dilaporkan meninggal dunia karena gangguan pernapasan ketika mengungsi dari rumahnya.[12]</p>', 'sinabung.jpg'),
(2, 'admin', 'Berita Keduaaaaaaaaaa', '<p>Gunung Sinabung (bahasa Karo: Deleng Sinabung) adalah gunung api di Dataran Tinggi Karo, Kabupaten Karo, Sumatera Utara, Indonesia. Sinabung bersama Gunung Sibayak di dekatnya adalah dua gunung berapi aktif di Sumatera Utara dan menjadi puncak tertinggi di provinsi itu. Ketinggian gunung ini adalah 2.460 meter. Gunung ini tidak pernah tercatat meletus sejak tahun 1600[3] tetapi mendadak aktif kembali dengan meletus pada tahun 2010. Sejak 27 Agustus 2010, gunung ini mengeluarkan asap dan abu vulkanis.[4] Pada tanggal 29 Agustus 2010 dini hari sekitar pukul 00.15 WIB (28 Agustus 2010, 17.15 UTC), gunung Sinabung mengeluarkan lava.[5][6][7] Status gunung ini dinaikkan menjadi "Awas".[4] Dua belas ribu warga disekitarnya dievakuasi dan ditampung di 8 lokasi.[8][9] Abu Gunung Sinabung cenderung meluncur dari arah barat daya menuju timur laut.[10] Sebagian Kota Medan juga terselimuti abu dari Gunung Sinabung.[10] Bandar Udara Polonia di Kota Medan dilaporkan tidak mengalami gangguan perjalanan udara.[11] Satu orang dilaporkan meninggal dunia karena gangguan pernapasan ketika mengungsi dari rumahnya.[12]</p>', '791.png'),
(7, 'admin', 'lknk', '<p>knlk</p>', 'Callalily.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `donasi`
--

CREATE TABLE IF NOT EXISTS `donasi` (
  `id_donasi` int(5) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jlh_donasi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_donasi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `nama`, `alamat`, `jlh_donasi`) VALUES
(3, 'budi anduk', 'Surabaya', '200000000'),
(2, 'maraya', 'medan', '90000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_prof` int(11) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_prof`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_prof`, `isi`, `gambar`) VALUES
(1, '<p>Semua tentang profil Investasi Akhirat..</p>', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblfeedback`
--

CREATE TABLE IF NOT EXISTS `tblfeedback` (
  `f_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(150) NOT NULL,
  `message` varchar(250) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`f_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data untuk tabel `tblfeedback`
--

INSERT INTO `tblfeedback` (`f_id`, `name`, `email`, `address`, `message`, `status`) VALUES
(31, 'maraya brutalz', 'mamarayandu@gmail.com', 'medan', 'kjdskgjdskfjdlk', 0),
(44, 'Anonymous', 'a@mail.com', 'London', 'investasi akhirat adalah sangat baik untuk masyarakat umum lainnya, semoga lanjutkan kedepannya.', 0),
(30, 'gundaling cyber', 'mamarayandu@gmail.com', 'medan', 'nejkmdnsvkjndkjvndf', 0),
(45, 'Enos Maraya', 'mamarayandu@gmail.com', 'medan', 'investasi akhirat adalah sangat baik untuk masyarakat umum lainnya, semoga lanjutkan kedepannya.investasi akhirat adalah sangat baik untuk masyarakat umum lainnya, semoga lanjutkan kedepannya.investasi akhirat adalah sangat baik untuk masyarakat umum', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblip`
--

CREATE TABLE IF NOT EXISTS `tblip` (
  `ip_id` int(100) NOT NULL AUTO_INCREMENT,
  `ip` varchar(50) NOT NULL,
  `time` varchar(60) NOT NULL,
  PRIMARY KEY (`ip_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data untuk tabel `tblip`
--

INSERT INTO `tblip` (`ip_id`, `ip`, `time`) VALUES
(56, '127.0.0.1', '1330586719'),
(57, '127.0.0.1', '1331066469'),
(58, '127.0.0.1', '1331170565'),
(59, '127.0.0.1', '1355904608'),
(60, '127.0.0.1', '1356076870'),
(61, '127.0.0.1', '1356489054'),
(62, '::1', '1357337430'),
(63, '::1', '1387302387');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblusers`
--

CREATE TABLE IF NOT EXISTS `tblusers` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `tblusers`
--

INSERT INTO `tblusers` (`user_id`, `name`, `username`, `password`) VALUES
(1, 'Investasi Akhirat', 'admin', 'admin'),
(17, 'ma', 'ma', 'ma');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tblvotes`
--

CREATE TABLE IF NOT EXISTS `tblvotes` (
  `vid` int(10) NOT NULL AUTO_INCREMENT,
  `vname` varchar(50) NOT NULL,
  `vpoints` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`vid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tblvotes`
--

INSERT INTO `tblvotes` (`vid`, `vname`, `vpoints`) VALUES
(7, 'Sangat Bagus', 15),
(6, 'Bagus', 51),
(5, 'Kurang Bagus', 35),
(8, 'Tidak Penting', 40);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
