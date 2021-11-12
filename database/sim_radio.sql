-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 11, 2021 at 06:28 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_radio`
--

-- --------------------------------------------------------

--
-- Table structure for table `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Kristen'),
(3, 'Katolik'),
(4, 'Hindu'),
(5, 'Budha'),
(6, 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `golongan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `golongan`
--

INSERT INTO `golongan` (`id`, `golongan`) VALUES
(1, 'IA'),
(2, 'IB'),
(3, 'IC'),
(4, 'ID'),
(5, 'IIA'),
(6, 'IIB'),
(7, 'IIC'),
(8, 'IID'),
(9, 'IIIA'),
(10, 'IIIB'),
(11, 'IIIC'),
(12, 'IIID'),
(13, 'IVA'),
(14, 'IVB'),
(15, 'IVC'),
(16, 'IVD'),
(17, 'IVE');

-- --------------------------------------------------------

--
-- Table structure for table `ikon`
--

CREATE TABLE `ikon` (
  `id` int(11) NOT NULL,
  `path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ikon`
--

INSERT INTO `ikon` (`id`, `path`) VALUES
(1, 'dist/img/beachflag.png');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`) VALUES
(1, 'Kepala Balmon'),
(2, 'Kepala Divisi'),
(3, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `tanggal_penugasan` date NOT NULL,
  `id_tim` int(11) NOT NULL,
  `tim` varchar(200) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kelamin`
--

CREATE TABLE `jenis_kelamin` (
  `id` int(11) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis_kelamin`
--

INSERT INTO `jenis_kelamin` (`id`, `jenis_kelamin`) VALUES
(1, 'Laki-laki'),
(2, 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id` int(11) NOT NULL,
  `nama_kecamatan` varchar(100) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id`, `nama_kecamatan`, `id_kota`) VALUES
(1, 'Bintan Pesisir', 1),
(2, 'Bintan Timur', 1),
(3, 'Bintan Utara', 1),
(4, 'Gunung Kijang', 1),
(5, 'Mantang', 1),
(6, 'Seri Kuala Lobam', 1),
(7, 'Tambelan', 1),
(8, 'Teluk Sebong', 1),
(9, 'Teluk Bintan', 1),
(10, 'Toapaya', 1),
(11, 'Belat', 2),
(12, 'Buru', 2),
(13, 'Durai', 2),
(14, 'Karimun', 2),
(15, 'Kundur', 2),
(16, 'Kundur Barat', 2),
(17, 'Kundur Utara', 2),
(18, 'Meral', 2),
(19, 'Meral Barat', 2),
(20, 'Moro', 2),
(21, 'Tebing', 2),
(22, 'Ungar', 2),
(23, 'Jemaja', 3),
(24, 'Jemaja Timur', 3),
(25, 'Palmatak', 3),
(26, 'Siantan', 3),
(27, 'Siantan Selatan', 3),
(28, 'Siantan Tengah', 3),
(29, 'Siantan Timur', 3),
(30, 'Bakung Serumpun', 4),
(31, 'Katang Bidare', 4),
(32, 'Kepulauan Posek', 4),
(33, 'Lingga', 4),
(34, 'Lingga Timur', 4),
(35, 'Lingga Utara', 4),
(36, 'Selayar', 4),
(37, 'Senayang', 4),
(38, 'Singkep', 4),
(39, 'Singkep Barat', 4),
(40, 'Singkep Pesisir', 4),
(41, 'Singkep Selatan', 4),
(42, 'Temiang Pesisir', 4),
(43, 'Bunguran Barat', 5),
(44, 'Bunguran Batubi', 5),
(45, 'Bunguran Selatan', 5),
(46, 'Bunguran Tengah', 5),
(47, 'Bunguran Timur', 5),
(48, 'Bunguran Timur Laut', 5),
(49, 'Bunguran Utara', 5),
(50, 'Midai', 5),
(51, 'Pulau Laut', 5),
(52, 'Pulau Tiga', 5),
(53, 'Pulau Tiga Barat', 5),
(54, 'Serasan', 5),
(55, 'Serasan Timur', 5),
(56, 'Suak Midai', 5),
(57, 'Subi', 5),
(58, 'Batam Kota', 6),
(59, 'Batu Aji', 6),
(60, 'Batu Ampar', 6),
(61, 'Belakang Padang', 6),
(62, 'Bengkong', 6),
(63, 'Bulang', 6),
(64, 'Galang', 6),
(65, 'Lubuk Baja', 6),
(66, 'Nongsa', 6),
(67, 'Sagulung', 6),
(68, 'Sei Beduk', 6),
(69, 'Sekupang', 6),
(70, 'Bukit Bestari', 7),
(71, 'Tanjung Pinang Barat', 7),
(72, 'Tanjung Pinang Kota', 7),
(73, 'Tanjung Pinang Timur', 7);

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` int(11) NOT NULL,
  `nama_penilai` varchar(100) NOT NULL,
  `tanggal_penugasan` varchar(50) DEFAULT NULL,
  `id_tim` int(11) NOT NULL,
  `id_koordinator` int(11) NOT NULL,
  `ketepatan` int(11) NOT NULL,
  `inisiatif` int(11) NOT NULL,
  `penerimaan` int(11) NOT NULL,
  `atur` int(11) NOT NULL,
  `kemampuan` int(11) NOT NULL,
  `disiplin` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `tanggung_jawab` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `grade` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `nama_penilai`, `tanggal_penugasan`, `id_tim`, `id_koordinator`, `ketepatan`, `inisiatif`, `penerimaan`, `atur`, `kemampuan`, `disiplin`, `kualitas`, `tanggung_jawab`, `nilai`, `grade`, `keterangan`) VALUES
(121, 'Eko Pradana', '--29-12-2021', 111, 2147483647, 9, 9, 9, 9, 9, 9, 9, 9, 9, 'A', 'Sangat Baik'),
(122, 'Eko Pradana', '-30-11-2021-', 112, 2147483647, 4, 3, 3, 3, 3, 3, 3, 6, 4, 'C', 'Cukup'),
(123, 'Eko Pradana', '-26-11-2021-', 111, 2147483647, 3, 9, 9, 9, 9, 9, 9, 9, 8, 'A', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `klien`
--

CREATE TABLE `klien` (
  `id` int(11) NOT NULL,
  `id_klien` int(11) NOT NULL,
  `nama_klien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien`
--

INSERT INTO `klien` (`id`, `id_klien`, `nama_klien`) VALUES
(1, 2073, 'LEMBAGA PENYIARAN PUBLIK TELEVISI REPUBLIK INDONESIA'),
(3, 113156, 'SURYA CITRA PESONA MEDIA'),
(4, 105175, 'LPPL RADIO BINTAN'),
(5, 103742, 'LPPL RADIO SIARAN DAERAH KABUPATEN KARIMUN'),
(6, 104493, 'RADIO AZAM MITRA UMAT'),
(7, 114928, 'RADIO ANAMBAS BERTUAH'),
(8, 1035, 'DIREKTORAT RADIO/ RRI'),
(9, 105147, 'RADIO SUARA MARGA SEMESTA'),
(10, 101564, 'RADIO BATAM INDAH GELORA SUARA'),
(11, 102723, 'RADIO ARTHA MEDIA JUANESHA'),
(12, 102731, 'RADIO MEDIA HANG BATAM'),
(13, 101232, 'RADIO DISCOVERY MINANG'),
(14, 101522, 'RADIO ALJABAR'),
(15, 113342, 'RADIO HIJRAH BATAM MADANI'),
(16, 9431, 'RADIO GEMA BENTARA'),
(17, 102783, 'PERKUMPULAN RADIO KOMUNITAS PELAYANAN ALFA OMEGA'),
(18, 5854, 'RADIO RAMAKO BATAM, PT.'),
(19, 6287, 'RADIO BATAM INDONESIA (RAMAKO), PT.'),
(20, 101212, 'LINTAS SEI LADI, PT.'),
(21, 115870, 'PRO KOMUNIKASI MEDIA, PT.'),
(22, 114490, 'PERKUMPULAN RADIO KOMUNITAS MYHOME'),
(23, 105746, 'RADIO DIVA RUBY SWARINDO, PT.'),
(24, 105576, 'LPP LOKAL RADIO BUNDA TANAH MELAYU FM'),
(25, 110916, 'LEMBAGA PENYIARAN KOMUNITAS RADIO KOMUNITAS STUDENT FM'),
(26, 113291, 'RADIO SUARA LINGGA SEHAT, PT.'),
(27, 114239, 'RADIO PRATAMA NATUNA, PT.'),
(28, 104494, 'RADIO SUARA AVICOM MANDIRI, PT.'),
(29, 105202, 'MERCY DIAN MANDIRI, PT.'),
(30, 114971, 'TPI ENAM, PT.'),
(31, 112102, 'INDOSIAR BATAM TELEVISI, PT.'),
(32, 101245, 'BATAM MULTIMEDIA TELEVISI, PT.'),
(33, 101246, 'SEMENANJUNG TELEVISI BATAM, PT.'),
(34, 104355, 'RCTI SEPULUH, PT.'),
(35, 112194, 'TRANS TV BATAM KENDARI, PT.'),
(36, 101657, 'DUTA BATAM TELEVISINDO, PT.'),
(37, 102237, 'URBAN TELEVISI, PT.'),
(38, 115323, 'INDRASAKTI MEDIA TELEVISI, PT.');

-- --------------------------------------------------------

--
-- Table structure for table `klien_baru`
--

CREATE TABLE `klien_baru` (
  `id_klien` int(11) NOT NULL,
  `nama_klien` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klien_baru`
--

INSERT INTO `klien_baru` (`id_klien`, `nama_klien`) VALUES
(1035, 'DIREKTORAT RADIO/RRI'),
(2073, 'LEMBAGA PENYIARAN PUBLIK TELEVISI REPUBLIK INDONESIA '),
(5854, 'RADIO RAMAKO BATAM, PT.'),
(6287, 'RADIO BATAM INDONESIA (RAMAKO), PT.'),
(9431, 'RADIO GEMA BENTARA'),
(101212, 'LINTAS SEI LADI, PT.'),
(101232, 'RADIO DISCOVERY MINANG, PT'),
(101245, 'BATAM MULTIMEDIA TELEVISI, PT.'),
(101246, 'SEMENANJUNG TELEVISI BATAM, PT.'),
(101522, 'RADIO ALJABAR, PT.'),
(101564, 'RADIO BATAM INDAH GELORA SUARA, PT (BIGS FM), PT.'),
(101657, 'DUTA BATAM TELEVISINDO, PT.\r\n'),
(102237, 'URBAN TELEVISI, PT.'),
(102723, 'RADIO ARTHA MEDIA JUANESHA, PT.'),
(102731, 'RADIO MEDIA HANG BATAM, PT.'),
(102783, 'PERKUMPULAN RADIO KOMUNITAS PELAYANAN ALFA OMEGA'),
(103742, 'LPPL RADIO SIARAN DAERAH KABUPATEN KARIMUN'),
(104355, 'RCTI SEPULUH, PT.'),
(104493, 'RADIO AZAM MITRA UMAT, PT.'),
(104494, 'RADIO SUARA AVICOM MANDIRI, PT.'),
(105147, 'RADIO SUARA MARGA SEMESTA, PT.'),
(105175, 'LPPL RADIO BINTAN'),
(105202, 'MERCY DIAN MANDIRI, PT.'),
(105576, 'LPP LOKAL RADIO BUNDA TANAH MELAYU FM'),
(105746, 'RADIO DIVA RUBY SWARINDO, PT.'),
(110916, 'LEMBAGA PENYIARAN KOMUNITAS RADIO KOMUNITAS STUDENT FM'),
(112102, 'INDOSIAR BATAM TELEVISI, PT.'),
(112194, 'TRANS TV BATAM KENDARI, PT.'),
(113156, 'SURYA CITRA PESONA MEDIA, PT.'),
(113291, 'RADIO SUARA LINGGA SEHAT, PT.'),
(113342, 'RADIO HIJRAH BATAM MADANI, PT.'),
(114239, 'RADIO PRATAM NATUNA, PT.'),
(114490, 'PERKUMPULAN RADIO KOMUNITAS MYHOME'),
(114928, 'RADIO ANAMBAS BERTUAH, PT.'),
(114971, 'TPI ENAM, PT'),
(115323, 'INDRASAKTI MEDIA TELEVISI, PT.\r\n'),
(115870, 'PRO KOMUNITAS MEDIA, PT.');

-- --------------------------------------------------------

--
-- Table structure for table `koordinator`
--

CREATE TABLE `koordinator` (
  `nip` bigint(20) NOT NULL,
  `nama_koordinator` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `koordinator`
--

INSERT INTO `koordinator` (`nip`, `nama_koordinator`) VALUES
(199801012018052999, 'Dayra Virginia'),
(197211292003141201, 'Nanda Saputra');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kota`
--

INSERT INTO `kota` (`id`, `nama_kota`) VALUES
(1, 'Kab. Bintan'),
(2, 'Kab. Karimun'),
(3, 'Kab. Kepulauan Anambas'),
(4, 'Kab. Lingga'),
(5, 'Kab. Natuna'),
(6, 'Kota Batam'),
(7, 'Kota Tanjung Pinang');

-- --------------------------------------------------------

--
-- Table structure for table `level_user`
--

CREATE TABLE `level_user` (
  `id` int(11) NOT NULL,
  `level_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level_user`
--

INSERT INTO `level_user` (`id`, `level_user`) VALUES
(1, 'admin'),
(2, 'kepala divisi'),
(3, 'koordinator'),
(4, 'karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'putri', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_stasiun` int(11) NOT NULL,
  `nama_stasiun` varchar(120) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `frekuensi` double NOT NULL,
  `id_servis` int(11) NOT NULL,
  `id_subservis` int(11) NOT NULL,
  `id_klien` int(11) NOT NULL,
  `id_ikon_marker` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_stasiun`, `nama_stasiun`, `latitude`, `longitude`, `alamat`, `telepon`, `id_kecamatan`, `frekuensi`, `id_servis`, `id_subservis`, `id_klien`, `id_ikon_marker`) VALUES
(101, 'TAREMPA', 3.22335, 106.22335, 'Jl. Pasir Merah Kel. Tarempa  ', '', 26, 674, 1, 1, 2073, 1),
(102, 'MUX SCTV BATAM', 1.17916667, 104.0133333, 'Jl. Tenggiri-Bukit Girang, Kel. Batu Merah', '', 60, 687.25, 1, 1, 113156, 1),
(103, 'TVRI BATAM ', 1.12333333, 103.9455556, 'Jl. Palapa VIII Bukit Dangas', '', 69, 687.25, 1, 1, 2073, 1),
(104, 'TRANS TV BATAM ', 1.12297222, 103.9455278, 'Jl. Palapa 7 Bukit Dangas Sekupang, Kel Tanjung Pinggir ', '', 69, 674, 1, 1, 112194, 1),
(105, 'MUX SCTV TANJUNG  PINANG ', 0.95084167, 104.4608361, 'Jl. Kampung Sungai Ladi RT.2 RW.3, Kel. Kampung Bugis ', '', 72, 642, 1, 1, 113156, 1),
(106, 'BINTAN RADIO ', 0.99722222, 104.5127778, 'Jl. Raya Tanjung Pinang-Tg. Uban KM.42, Kel. Bintan Buyu, Kec. Teluk Bintan, Kab. Bintan, Kepulauan ', '', 9, 96.5, 1, 2, 105175, 1),
(107, 'CANGGAI PUTRI FM ', 1.00594167, 103.4353611, 'Jl. Pertambangan No. 8 Gedung Dispenda Lt.3 TG. Balai Karimun ', '', 14, 105.3, 1, 2, 103742, 1),
(108, 'AZAM FM ', 0.99623056, 103.4293028, 'Jl. Angkasa, Tanjung Balai Karimun, Karimun, Kepulauan Riau', '', 14, 103.5, 1, 2, 104493, 1),
(109, 'Senandung 100.2 FM ', 3.21694444, 106.2161111, 'Jl. Tanjung Lambai Desa Sri Tanjung, Tarempa, Kabupaten Kepulauan Anambas, Kepri ', '', 26, 91.3, 1, 2, 114928, 1),
(110, 'STASIUN PEMANCAR RELAY RRI TAREMPA', 3.21772778, 106.217794, ' Jl. Pasir Merah', '', 26, 97.5, 1, 2, 1035, 1),
(111, 'SING FM ', 1.15286111, 104.0246111, 'Jl. Raja Ali Haji, Planet Holiday Hotel Lt. 20, Sei Jodoh Batam ', '', 58, 106.5, 1, 2, 105147, 1),
(112, 'BIGS FM ', 1.1125, 104.03, 'Komp. Badar Mas Blok F No. 3A Batam Centre Batam ', '', 58, 104.7, 1, 2, 101564, 1),
(113, 'JUAN FM ', 1.13333333, 104.0247194, 'Jl. Laksamana Bintan, Komplek Pertokoan Seruni, Blok A No. 25, Sei Panas ', '', 58, 103.2, 1, 2, 102723, 1),
(114, 'RADIO HANG FM', 1.15722222, 104.0125, 'Jl. Borobudur-Bukit Senyum, Kel. Seraya', '', 60, 106, 1, 2, 102731, 1),
(115, 'DISCOVERY MINANG', 1.14916667, 104.0241667, 'Komplek Bengkong Aljabar Blok. A No.2', '', 62, 87.6, 1, 2, 101232, 1),
(116, 'Serumpun Radio', 1.15, 104.0252778, 'Komp. Ruku Aljabar Blok C No.1 Kel. Bengkong, Kec. Bengkong, Kota Batam, Kep. Riau 29432', '', 62, 91.7, 1, 2, 101522, 1),
(117, 'Radio Hijrah Batam', 1.14538889, 104.038138, 'Jl. Ruko Mini Cahaya Garden, Blok B 3, No. 27, Lantai 2', '', 62, 102.3, 1, 2, 113342, 1),
(118, 'BE 107 FM', 0.98583333, 103.8719444, 'Bukit Indah, Kec. Belakang Padang, Batam, Kepulauan Riau 294111', '', 63, 107, 1, 2, 9431, 1),
(119, 'RADIO ALFA OMEGA', 1.13991667, 104.0035, 'Jl. Komplek Dian Center Block C. No. 10, Kel. Batu Selicin, Kec. Lubuk Baja, Kota Batam', '', 65, 107.7, 1, 2, 114490, 1),
(120, 'Zoo FM', 1.11277778, 103.9661111, 'Jl. Kolonel Sugiono, Tanjung Pinggir, Sekupang, Batam 29428, Kepulauan Riau', '', 69, 101.5, 1, 2, 5854, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orang`
--

CREATE TABLE `orang` (
  `id` int(11) NOT NULL,
  `tanggal_penugasan` varchar(50) DEFAULT NULL,
  `id_lokasi` int(11) NOT NULL,
  `id_koordinator` bigint(20) NOT NULL,
  `id_profile` bigint(20) DEFAULT NULL,
  `id_tim` int(11) NOT NULL,
  `kerajinan` int(11) NOT NULL,
  `disiplin` int(11) NOT NULL,
  `etika` int(11) NOT NULL,
  `inisiatif` int(11) NOT NULL,
  `cerdas` int(11) NOT NULL,
  `kualitas` int(11) NOT NULL,
  `penguasaan` int(11) NOT NULL,
  `komunikasi` int(11) NOT NULL,
  `kerjasama` int(11) NOT NULL,
  `kejujuran` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orang`
--

INSERT INTO `orang` (`id`, `tanggal_penugasan`, `id_lokasi`, `id_koordinator`, `id_profile`, `id_tim`, `kerajinan`, `disiplin`, `etika`, `inisiatif`, `cerdas`, `kualitas`, `penguasaan`, `komunikasi`, `kerjasama`, `kejujuran`, `nilai`, `grade`, `ket`) VALUES
(121, '--31-08-2021', 119, 199801012018052999, 198503302003121002, 111, 8, 8, 8, 9, 8, 9, 7, 10, 9, 10, 9, 'A', 'Sangat Baik'),
(122, '20-09-2021', 112, 197211292003141201, 199901022019051388, 112, 8, 10, 9, 9, 9, 9, 9, 9, 9, 9, 9, 'A', 'Sangat Baik');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE `pendidikan` (
  `id` int(11) NOT NULL,
  `jenjang_pendidikan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id`, `jenjang_pendidikan`) VALUES
(1, 'SD'),
(2, 'SMP'),
(3, 'SMA/SMK'),
(4, 'D3'),
(5, 'S1'),
(6, 'S2'),
(7, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `id_stasiun` int(11) NOT NULL,
  `id_tim` int(11) NOT NULL,
  `kanal` int(11) NOT NULL,
  `frekuensi_terukur` int(11) NOT NULL,
  `pergeseran` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `bandwith` int(11) NOT NULL,
  `field_strength` int(11) NOT NULL,
  `daya_terukur` int(11) NOT NULL,
  `kedalaman_modulasi` int(11) NOT NULL,
  `deviasi_frekuensi` int(11) NOT NULL,
  `erp` int(11) NOT NULL,
  `frekuensi1` int(11) NOT NULL,
  `level1` int(11) NOT NULL,
  `frekuensi2` int(11) NOT NULL,
  `level2` int(11) NOT NULL,
  `frekuensi3` int(11) NOT NULL,
  `level3` int(11) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengukuran`
--

INSERT INTO `pengukuran` (`id`, `tanggal`, `id_stasiun`, `id_tim`, `kanal`, `frekuensi_terukur`, `pergeseran`, `level`, `bandwith`, `field_strength`, `daya_terukur`, `kedalaman_modulasi`, `deviasi_frekuensi`, `erp`, `frekuensi1`, `level1`, `frekuensi2`, `level2`, `frekuensi3`, `level3`, `status`) VALUES
(221, '20-09-2021', 113, 111, 157, 103, 0, -16, 122, 80, 400, 0, 45, 54, 206, 60, 310, 76, 413, 80, 'warning');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `nip` bigint(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `id_jenis_kelamin` int(11) NOT NULL,
  `id_agama` int(11) NOT NULL,
  `id_pendidikan` int(11) NOT NULL,
  `id_golongan` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`nip`, `nama`, `tanggal_lahir`, `id_jenis_kelamin`, `id_agama`, `id_pendidikan`, `id_golongan`, `id_jabatan`, `alamat`) VALUES
(197004012015181001, 'Eko Pradana', '12-09-2021', 2, 1, 5, 9, 2, 'Bida Asri Blok B2 No.59, Batam Kota'),
(197211292003141201, 'Nanda Saputra', '10-03-2021', 1, 2, 4, 7, 3, 'Jl. Diponegoro, Tiban Baru, Kec. Sekupang, Kota Batam, Kepulauan Riau '),
(198503302003121002, 'Muhammad Fauzan ', '08-12-2021', 1, 1, 5, 7, 3, 'Jl. Ir. Sutami, Tj. Pinggir, Kec. Sekupang, Kota Batam, Kepulauan Riau '),
(199801012018052999, 'Dayra Virginia', '01-01-1998', 2, 1, 5, 9, 3, 'Tiban Baru, Sekupang, Tiban Baru, Kec. Sekupang, Kota Batam, Kepulauan Riau '),
(199901022019051388, 'Dwi Putri', '01-02-1999', 2, 1, 5, 8, 3, 'Blk. C-D No.01, Tiban Baru, Kec. Sekupang, Kota Batam, Kepulauan Riau');

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id` int(11) NOT NULL,
  `servis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id`, `servis`) VALUES
(1, 'Broadcast');

-- --------------------------------------------------------

--
-- Table structure for table `subservis`
--

CREATE TABLE `subservis` (
  `id` int(11) NOT NULL,
  `subservis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subservis`
--

INSERT INTO `subservis` (`id`, `subservis`) VALUES
(1, 'DVB-T'),
(2, 'FM'),
(3, 'TV');

-- --------------------------------------------------------

--
-- Table structure for table `tim`
--

CREATE TABLE `tim` (
  `id_profile` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_penugasan` date NOT NULL,
  `tim` varchar(50) NOT NULL,
  `id_koordinator` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tim_baru`
--

CREATE TABLE `tim_baru` (
  `id_tim` int(11) NOT NULL,
  `id_profile` bigint(20) NOT NULL,
  `tanggal_penugasan` varchar(50) DEFAULT NULL,
  `tim` varchar(50) NOT NULL,
  `id_koordinator` bigint(20) NOT NULL,
  `id_lokasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tim_baru`
--

INSERT INTO `tim_baru` (`id_tim`, `id_profile`, `tanggal_penugasan`, `tim`, `id_koordinator`, `id_lokasi`) VALUES
(111, 198503302003121002, '03-11-2021', 'A', 199801012018052999, 113),
(112, 199901022019051388, '20-09-2021', 'B', 197211292003141201, 112);

-- --------------------------------------------------------

--
-- Table structure for table `towerradio`
--

CREATE TABLE `towerradio` (
  `id` int(11) NOT NULL,
  `nama_tower` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `id_radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `password` varchar(70) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user_new`
--

CREATE TABLE `user_new` (
  `id_profile` bigint(20) NOT NULL,
  `nama_karyawan` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `id_level_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_new`
--

INSERT INTO `user_new` (`id_profile`, `nama_karyawan`, `password`, `id_level_user`) VALUES
(198503302003121002, 'Muhammad Fauzan ', 'fauzan123 ', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ikon`
--
ALTER TABLE `ikon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `jenis_kelamin`
--
ALTER TABLE `jenis_kelamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `id_koordinator` (`id_koordinator`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_klien` (`id_klien`);

--
-- Indexes for table `klien_baru`
--
ALTER TABLE `klien_baru`
  ADD PRIMARY KEY (`id_klien`),
  ADD KEY `id_klien` (`id_klien`);

--
-- Indexes for table `koordinator`
--
ALTER TABLE `koordinator`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_profile` (`nama_koordinator`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level_user`
--
ALTER TABLE `level_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_stasiun`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_servis` (`id_servis`),
  ADD KEY `id_subservis` (`id_subservis`),
  ADD KEY `id_klien` (`id_klien`),
  ADD KEY `id_ikon_marker` (`id_ikon_marker`);

--
-- Indexes for table `orang`
--
ALTER TABLE `orang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nip` (`id_profile`),
  ADD KEY `id_koordinator` (`id_koordinator`),
  ADD KEY `id_tim` (`id_tim`),
  ADD KEY `id_lokasi` (`id_lokasi`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_stasiun` (`id_stasiun`),
  ADD KEY `id_tim` (`id_tim`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_jenis_kelamin` (`id_jenis_kelamin`),
  ADD KEY `id_agama` (`id_agama`),
  ADD KEY `id_jenjang_pendidikan` (`id_pendidikan`),
  ADD KEY `id_golongan` (`id_golongan`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subservis`
--
ALTER TABLE `subservis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id_profile`),
  ADD UNIQUE KEY `id_profile` (`id_profile`),
  ADD KEY `id_koordinator` (`id_koordinator`);

--
-- Indexes for table `tim_baru`
--
ALTER TABLE `tim_baru`
  ADD PRIMARY KEY (`id_tim`),
  ADD KEY `id_koordinator` (`id_koordinator`),
  ADD KEY `id_lokasi` (`id_lokasi`),
  ADD KEY `id_profile` (`id_profile`);

--
-- Indexes for table `towerradio`
--
ALTER TABLE `towerradio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_level_user` (`id_level_user`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user_new`
--
ALTER TABLE `user_new`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_profile` (`id_profile`),
  ADD KEY `id_level_user` (`id_level_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ikon`
--
ALTER TABLE `ikon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `koordinator`
--
ALTER TABLE `koordinator`
  MODIFY `nip` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `level_user`
--
ALTER TABLE `level_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_stasiun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
--
-- AUTO_INCREMENT for table `orang`
--
ALTER TABLE `orang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;
--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `subservis`
--
ALTER TABLE `subservis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tim`
--
ALTER TABLE `tim`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `towerradio`
--
ALTER TABLE `towerradio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_3` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_stasiun`),
  ADD CONSTRAINT `jadwal_ibfk_4` FOREIGN KEY (`id_tim`) REFERENCES `tim_baru` (`id_tim`);

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`);

--
-- Constraints for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD CONSTRAINT `kelompok_ibfk_1` FOREIGN KEY (`id_tim`) REFERENCES `tim_baru` (`id_tim`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_subservis`) REFERENCES `subservis` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_3` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_4` FOREIGN KEY (`id_servis`) REFERENCES `servis` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_6` FOREIGN KEY (`id_ikon_marker`) REFERENCES `ikon` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_7` FOREIGN KEY (`id_klien`) REFERENCES `klien_baru` (`id_klien`);

--
-- Constraints for table `orang`
--
ALTER TABLE `orang`
  ADD CONSTRAINT `orang_ibfk_3` FOREIGN KEY (`id_tim`) REFERENCES `tim_baru` (`id_tim`),
  ADD CONSTRAINT `orang_ibfk_4` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_stasiun`),
  ADD CONSTRAINT `orang_ibfk_5` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`nip`),
  ADD CONSTRAINT `orang_ibfk_6` FOREIGN KEY (`id_koordinator`) REFERENCES `koordinator` (`nip`);

--
-- Constraints for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD CONSTRAINT `pengukuran_ibfk_1` FOREIGN KEY (`id_stasiun`) REFERENCES `lokasi` (`id_stasiun`),
  ADD CONSTRAINT `pengukuran_ibfk_2` FOREIGN KEY (`id_tim`) REFERENCES `tim_baru` (`id_tim`);

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `profile_ibfk_1` FOREIGN KEY (`id_jenis_kelamin`) REFERENCES `jenis_kelamin` (`id`),
  ADD CONSTRAINT `profile_ibfk_2` FOREIGN KEY (`id_agama`) REFERENCES `agama` (`id`),
  ADD CONSTRAINT `profile_ibfk_3` FOREIGN KEY (`id_pendidikan`) REFERENCES `pendidikan` (`id`),
  ADD CONSTRAINT `profile_ibfk_4` FOREIGN KEY (`id_golongan`) REFERENCES `golongan` (`id`),
  ADD CONSTRAINT `profile_ibfk_5` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`);

--
-- Constraints for table `tim_baru`
--
ALTER TABLE `tim_baru`
  ADD CONSTRAINT `tim_baru_ibfk_3` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_stasiun`),
  ADD CONSTRAINT `tim_baru_ibfk_4` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`nip`),
  ADD CONSTRAINT `tim_baru_ibfk_5` FOREIGN KEY (`id_koordinator`) REFERENCES `koordinator` (`nip`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id`);

--
-- Constraints for table `user_new`
--
ALTER TABLE `user_new`
  ADD CONSTRAINT `user_new_ibfk_2` FOREIGN KEY (`id_level_user`) REFERENCES `level_user` (`id`),
  ADD CONSTRAINT `user_new_ibfk_3` FOREIGN KEY (`id_profile`) REFERENCES `profile` (`nip`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
