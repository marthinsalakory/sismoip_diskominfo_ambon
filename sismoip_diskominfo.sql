-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 11:54 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sismoip_diskominfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ip`
--

CREATE TABLE `daftar_ip` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `upload_max_limit` varchar(255) NOT NULL,
  `download_max_limit` varchar(255) NOT NULL,
  `after_upload_max_limit` varchar(255) NOT NULL,
  `after_download_max_limit` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pembaruan_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ip`
--

INSERT INTO `daftar_ip` (`id`, `nama`, `ip`, `upload_max_limit`, `download_max_limit`, `after_upload_max_limit`, `after_download_max_limit`, `lokasi`, `pembaruan_terakhir`) VALUES
(14, 'AKSES 2', '192.168.56.1', '10', '5', '3', '5', '1', '22-12-2022 08:32:50'),
(17, 'AKSES 1', '192.168.1.6', '8', '4', '5', '4', '1', '22-12-2022 08:10:21'),
(19, 'KOMINFO PAK AGUS', '192.168.3.12', '6', '7', '5', '9', '3', '22-12-2022 08:10:38'),
(20, 'PAK LUCAN', '192.168.3.14', '3', '8', '10', '6', '3', '22-12-2022 08:10:55'),
(21, 'ROG 247', '192.1681.247', '8', '9', '4', '7', '3', '22-12-2022 08:11:08'),
(22, 'ROG 248 GEDUNG A', '192.168.1.248', '7', '6', '9', '6', '1', '22-12-2022 08:11:22'),
(23, 'KOMINFO PA HENDRA G2', '192.168.2.6', '3', '5', '8', '6', '3', '22-12-2022 08:11:36'),
(24, 'WIFI MECE', '192.168.2.245', '8', '4', '9', '10', '3', '22-12-2022 08:11:50'),
(25, 'KOMINFO 3', '192.168.3.3', '9', '7', '5', '7', '3', '22-12-2022 08:12:05'),
(26, 'PAK SEKDIS', '192.168.3.4', '9', '5', '7', '10', '3', '22-12-2022 08:12:18'),
(27, 'KOMINFO PA HEND', '191.168.3.6', '9', '7', '9', '10', '3', '22-12-2022 08:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`) VALUES
(1, 'GEDUNG A'),
(2, 'GEDUNG B'),
(3, 'GEDUNG C'),
(4, 'GEDUNG D');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `pesan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama`, `email`, `judul`, `pesan`) VALUES
(2, 'MARTHIN ALFREINSCO SALAKORY', 'MARTHINSALAKORY11@GMAIL.COM', 'UJI COBA PESAN', 'NATOQUE FAUCIBUS LITORA HABITANT TORTOR MALESUADA TEMPUS FACILISIS PEDE AENEAN FINIBUS. PURUS ULTRICES AUCTOR NEC VIVERRA VESTIBULUM. FAUCIBUS CLASS ERAT VIVAMUS AT PRIMIS ACCUMSAN FUSCE CONDIMENTUM CONVALLIS. PARTURIENT METUS UT AENEAN SED VESTIBULUM.\r\n\r\nSI CLASS GRAVIDA VENENATIS NATOQUE SAGITTIS ARCU. VELIT ERAT RIDICULUS HABITANT ET EGESTAS JUSTO PURUS. PRIMIS EST NEC SODALES AUCTOR NAM. SOCIOSQU DIS SAPIEN LECTUS ULTRICIES VELIT PEDE MORBI DOLOR. FEUGIAT MAGNA LIBERO RUTRUM EU MATTIS PULVINAR. CONSEQUAT LUCTUS CUBILIA ID RUTRUM PULVINAR CONVALLIS SI NOSTRA EST VULPUTATE. NIBH DICTUM TORQUENT PER TEMPOR AUGUE URNA. CONSECTETUER VESTIBULUM VEL NISI NIBH NON PRAESENT AUGUE MAGNIS CURAE NEQUE.\r\n\r\nDONEC INTERDUM PROIN DOLOR ALIQUET CONUBIA. SEMPER ORNARE PLATEA HENDRERIT PLACERAT ELIT LAOREET IPSUM ACCUMSAN APTENT. HIMENAEOS ULTRICIES CUBILIA TURPIS FEUGIAT AENEAN SIT SEMPER VITAE TELLUS SENECTUS. VOLUTPAT MAGNA MALESUADA DONEC ENIM VULPUTATE AT.\r\n\r\nADIPISCING MAGNIS SODALES ANTE MAGNA FAUCIBUS. NISI QUIS ELEIFEND FINIBUS SED NULLA PURUS PENATIBUS PRAESENT EX LACINIA. RISUS VIVERRA ERAT QUISQUE DAPIBUS MONTES NISI LETIUS SEM CRAS. ULTRICES EU PULVINAR FAUCIBUS MOLESTIE IPSUM IACULIS DICTUM SI DAPIBUS RUTRUM ACCUMSAN. PHASELLUS LOREM SUSCIPIT ULTRICIES SI ID SAPIEN PHARETRA PRAESENT. GRAVIDA SED NATOQUE ACCUMSAN NEQUE SOCIOSQU PRAESENT.\r\n\r\nIACULIS RISUS ADIPISCING NAM SUSCIPIT SI FACILISI DOLOR ULTRICES QUISQUE EU. AMET LACINIA URNA TEMPOR SAPIEN MAURIS NON MAGNIS. SOCIOSQU TINCIDUNT LACUS JUSTO ADIPISCING FACILISIS GRAVIDA PRAESENT PELLENTESQUE MORBI. PHASELLUS MAGNIS PORTA ARCU PEDE VITAE ADIPISCING PURUS DAPIBUS PROIN. TINCIDUNT MAXIMUS PLATEA EX SEMPER SED DICTUMST.\r\n\r\nDOLOR NATOQUE MONTES RIDICULUS FELIS SIT NISI. NASCETUR VIVAMUS TEMPOR POSUERE LOBORTIS SAGITTIS MONTES PULVINAR MAECENAS FAMES APTENT ODIO. SENECTUS BIBENDUM NIBH COMMODO PURUS ELEIFEND LIGULA. FELIS VENENATIS EFFICITUR EUISMOD EX RIDICULUS ELEMENTUM DUIS IACULIS URNA PLATEA. ETIAM QUISQUE PLACERAT MAXIMUS EGESTAS AENEAN TEMPUS SCELERISQUE MALESUADA PENATIBUS URNA. ORCI COMMODO JUSTO NEQUE PRETIUM NIBH EGESTAS SI MAGNIS.'),
(3, 'ROMAHDONA', 'WIJAYARAMA@GMAIL.COM', 'SERVER DOWN PADA DINAS PARIWISATA', 'SERVER DARI WEB INI TIDAK BISA DI AKSES');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tb_ip`
-- (See below for the actual view)
--
CREATE TABLE `tb_ip` (
`id` int
,`nama` varchar(255)
,`ip` varchar(255)
,`upload_max_limit` varchar(255)
,`download_max_limit` varchar(255)
,`after_upload_max_limit` varchar(255)
,`after_download_max_limit` varchar(255)
,`lokasi` varchar(255)
,`pembaruan_terakhir` varchar(255)
,`id_lokasi` int
,`nama_lokasi` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int NOT NULL,
  `tentang` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `tentang`) VALUES
(1, '          SISMOJAR ADALAH KEPANJANGAN DARI SISTEM MONITORING JARINGAN YANG BERFUNGSI UNTUK MEMONITORING SETIAP IP YANG DI DAFTARKAN. SISMOJAR DINAS KOMINFO KOTA AMBON DIKHUSUSKAN UNTUK PEMANTAUAN IP KOMPUTER PEGAWAI, AKSES POINT, WEB, ATAU YANG LAINNYA YANG BERADA DALAM LINGKUP PEMANTAUAN DINAS KOMINFO KOTA AMBON.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `password`) VALUES
('635e55a06b039', 'ADMIN', 'ADMIN', '$2y$10$yN/HaCi5do4jQaj/xXs6Duh9jiqwgNbPb6Cf01PdzCX2/A14c1JDy'),
('635e58fb11a09', 'PEGAWAI', 'PEGAWAI', '$2y$10$7/UJOW4jF5Q/F1W79A5WtejYy2tOxCPKTLcENQlTZtyWszzJKw.sW');

-- --------------------------------------------------------

--
-- Structure for view `tb_ip`
--
DROP TABLE IF EXISTS `tb_ip`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_ip`  AS SELECT `daftar_ip`.`id` AS `id`, `daftar_ip`.`nama` AS `nama`, `daftar_ip`.`ip` AS `ip`, `daftar_ip`.`upload_max_limit` AS `upload_max_limit`, `daftar_ip`.`download_max_limit` AS `download_max_limit`, `daftar_ip`.`after_upload_max_limit` AS `after_upload_max_limit`, `daftar_ip`.`after_download_max_limit` AS `after_download_max_limit`, `daftar_ip`.`lokasi` AS `lokasi`, `daftar_ip`.`pembaruan_terakhir` AS `pembaruan_terakhir`, `lokasi`.`id` AS `id_lokasi`, `lokasi`.`nama` AS `nama_lokasi` FROM (`daftar_ip` join `lokasi` on((`lokasi`.`id` = `daftar_ip`.`lokasi`)))  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftar_ip`
--
ALTER TABLE `daftar_ip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_ip`
--
ALTER TABLE `daftar_ip`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
