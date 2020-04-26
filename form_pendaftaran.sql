-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26 Apr 2020 pada 14.09
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form_pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata_siswa`
--

CREATE TABLE `biodata_siswa` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jk` varchar(10) DEFAULT NULL,
  `nisn` int(20) DEFAULT NULL,
  `nik` int(20) DEFAULT NULL,
  `tmplahir` varchar(20) DEFAULT NULL,
  `tgllahir` int(10) DEFAULT NULL,
  `akta` int(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `kwn` varchar(20) DEFAULT NULL,
  `kebkhusus` varchar(20) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `rt` int(5) DEFAULT NULL,
  `rw` int(5) DEFAULT NULL,
  `dusun` varchar(20) DEFAULT NULL,
  `desa` varchar(20) DEFAULT NULL,
  `kec` varchar(20) DEFAULT NULL,
  `pos` int(10) DEFAULT NULL,
  `lintang` varchar(20) DEFAULT NULL,
  `bujur` varchar(20) DEFAULT NULL,
  `tmptinggal` varchar(20) DEFAULT NULL,
  `transportasi` varchar(20) DEFAULT NULL,
  `kks` int(20) DEFAULT NULL,
  `anakke` int(5) DEFAULT NULL,
  `penerimakps` varchar(10) DEFAULT NULL,
  `nokps` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata_siswa`
--

INSERT INTO `biodata_siswa` (`id`, `nama`, `jk`, `nisn`, `nik`, `tmplahir`, `tgllahir`, `akta`, `agama`, `kwn`, `kebkhusus`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kec`, `pos`, `lintang`, `bujur`, `tmptinggal`, `transportasi`, `kks`, `anakke`, `penerimakps`, `nokps`) VALUES
(0, '', '', 0, 0, '', 0, 0, '', '', '', '', 0, 0, '', '', '', 0, '', '', '', '', 0, 0, '', 0),
(1, 'Tiara Karunia Miranti', 'P', 1808201014, 672636269, 'Lamongan', 28062000, 87923723, 'Islam', 'WNI', 'tidak', 'Gang Buntu', 2, 1, 'Windu', 'Windu', 'Karangbinangun', 62293, 'a', 'b', 'Asrama Putri', 'Sepeda Motor', 736634, 1, 'ya', 122345),
(2, 'M Cahyo Kriswantoro', 'L', 1808201020, 908637254, 'Lamongan', 15062000, 80980253, 'Islam', 'WNI', 'tidak', 'Kauman', 3, 2, 'Kauman', 'Turi', 'Turi', 62295, 'c', 'd', 'Kos', 'Sepeda Motor', 96994, 1, 'tidak', NULL),
(3, 'Dimas Adiyat Eka Ananto', 'L', 88376872, 378636862, 'Lamongan', 2032005, 76876832, 'Islam', 'WNI', 'tidak', 'Platuk Buntu', 2, 1, 'Platuk', 'Sidotopo', 'Kenjeran', 62245, 'e', 'f', 'Rumah', 'Sepeda Motor', 89378, 1, 'tidak', NULL),
(4, 'Zevan Agil Arba Ananta', 'P', 68762234, 789378923, 'Surabaya', 9022012, 862686242, 'Islam', 'WNI', 'tidak', 'Platuk Buntu', 2, 5, 'Platuk', 'Sidotopo', 'Kenjeran', 62245, 'e', 'f', 'Rumah', 'Sepeda Motor', 89378, 4, 'tidak', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_siswa`
--
ALTER TABLE `biodata_siswa`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
