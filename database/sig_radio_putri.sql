-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 02:55 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sig_radio_putri`
--

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
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
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

INSERT INTO `lokasi` (`id`, `nama_stasiun`, `latitude`, `longitude`, `alamat`, `telepon`, `id_kecamatan`, `frekuensi`, `id_servis`, `id_subservis`, `id_klien`, `id_ikon_marker`) VALUES
(1, 'TEREMPA', 3.22335, 106.22335, 'JL. PASIR MERAH KEL. TAREMPA', '+6281122223333', 26, 674, 1, 1, 1, 1),
(2, 'MUX SCTV BATAM', 1.17916667, 104.0133333, 'JL. TENGGIRI - BUKIT GIRANG, KEL. BATU MERAH', '+6281122223333', 60, 674, 1, 1, 3, 1),
(3, 'TVRI BATAM', 1.12333333, 103.9455556, 'Jl. Palapa VIII Bukit Dangas', '+6281122223333', 69, 687.25, 1, 1, 1, 1),
(4, 'TRANS TV BATAM', 1.12297222, 103.9455278, 'Jl. Palapa 7 Bukit Dangas Sekupang, Kel Tanjung Pinggir', '+6281122223333', 6, 674, 1, 1, 35, 1),
(5, 'MUX SCTV TANJUNG PINANG', 0.95084167, 104.4608361, 'Jl. Kampung Sungai Ladi RT.2 RW.3, Kel. Kampung Bugis', '+6281122223333', 72, 642, 1, 1, 3, 1),
(6, 'BINTAN RADIO', 0.99722222, 104.5127778, 'Jl.Raya Tanjung Pinang-Tg. Uban KM.42, Kel. Bintan Buyu, Kec. Teluk Bintan, Kab. Bintan, Kepulauan R', '+6281122223333', 9, 96.5, 1, 1, 4, 1),
(7, 'CANGGAI PUTRI FM', 1.00594167, 103.4353611, 'Jl. Pertambangan No. 8 Gedung Dispenda Lt.3 TG. Balai Karimun', '+6281122223333', 14, 105.3, 1, 1, 5, 1),
(8, 'AZAM FM', 0.99623056, 103.4293028, 'Jl. Angkat, Tanjung Balai Karimun, Karimun, Kepulauan Riau', '+6281122223333', 14, 103.5, 1, 1, 6, 1),
(9, 'Senandung 100.2 FM', 3.21694444, 106.2161111, 'Jl. Tanjung Lambai Desa Sri Tanjung, Tarempa, Kabupaten Kepulauan Anambas, Kepri', '+6281122223333', 26, 91.3, 1, 1, 7, 1),
(10, 'Stasiun Pemancar Relay RRI Tarempa', 3.21772778, 106.217794, 'Jl. Pasir Merah', '+6281122223333', 26, 97.5, 1, 1, 8, 1),
(11, 'SING FM', 1.15286111, 104.0246111, 'Jl. Raja Ali Haji, Planet Holiday Hotel Lt. 20, Sei Jodoh Batam', '+6281122223333', 58, 106.5, 1, 1, 9, 1),
(12, 'BIGS FM', 1.1125, 104.03, 'Komp. Badar Mas Blok F No. 3A Batam Centre Batam', '+6281122223333', 58, 104.7, 1, 1, 10, 1),
(13, 'JUAN FM', 1.13333333, 104.0247194, 'Jl. Laksamana Bintan, Komplek Pertokoan Seruni, Blok A No. 25, Sei Panas', '+6281122223333', 58, 103.2, 1, 1, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `id_stasiun` int(11) NOT NULL,
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
  `level3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pengukuran`
--

INSERT INTO `pengukuran` (`id`, `tanggal`, `id_stasiun`, `kanal`, `frekuensi_terukur`, `pergeseran`, `level`, `bandwith`, `field_strength`, `daya_terukur`, `kedalaman_modulasi`, `deviasi_frekuensi`, `erp`, `frekuensi1`, `level1`, `frekuensi2`, `level2`, `frekuensi3`, `level3`) VALUES
(1, '2021-07-01', 1, 333, 444, 34, 22, 34, 344, 3455, 55, 65, 23, 45, 34565, 54, 34, 70, 70);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `nip` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `jenjang_pendidikan` varchar(50) NOT NULL,
  `golongan` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `nip`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `jenjang_pendidikan`, `golongan`, `jabatan`, `alamat`) VALUES
(0, 1111, 'Putrin', '2001-04-29', 'Perempuan', 'Islam', 'SMA', 'IIA', 'nothing', 'Jl.Elang Sakti');

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
-- Table structure for table `towerradio`
--

CREATE TABLE `towerradio` (
  `id` int(11) NOT NULL,
  `nama_tower` varchar(200) NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `id_radio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ikon`
--
ALTER TABLE `ikon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kota` (`id_kota`);

--
-- Indexes for table `klien`
--
ALTER TABLE `klien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_klien` (`id_klien`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kecamatan` (`id_kecamatan`),
  ADD KEY `id_servis` (`id_servis`),
  ADD KEY `id_subservis` (`id_subservis`),
  ADD KEY `id_klien` (`id_klien`),
  ADD KEY `id_ikon_marker` (`id_ikon_marker`);

--
-- Indexes for table `pengukuran`
--
ALTER TABLE `pengukuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `towerradio`
--
ALTER TABLE `towerradio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ikon`
--
ALTER TABLE `ikon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `klien`
--
ALTER TABLE `klien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pengukuran`
--
ALTER TABLE `pengukuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT for table `towerradio`
--
ALTER TABLE `towerradio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD CONSTRAINT `kecamatan_ibfk_1` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id`);

--
-- Constraints for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD CONSTRAINT `lokasi_ibfk_1` FOREIGN KEY (`id_subservis`) REFERENCES `subservis` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_3` FOREIGN KEY (`id_kecamatan`) REFERENCES `kecamatan` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_4` FOREIGN KEY (`id_servis`) REFERENCES `servis` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_5` FOREIGN KEY (`id_klien`) REFERENCES `klien` (`id`),
  ADD CONSTRAINT `lokasi_ibfk_6` FOREIGN KEY (`id_ikon_marker`) REFERENCES `ikon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
