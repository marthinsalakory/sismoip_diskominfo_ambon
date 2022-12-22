-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `id` int(11) NOT NULL,
  `isi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_ip`
--

CREATE TABLE `daftar_ip` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `pembaruan_terakhir` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar_ip`
--

INSERT INTO `daftar_ip` (`id`, `nama`, `ip`, `lokasi`, `pembaruan_terakhir`) VALUES
(14, 'AKSES 2', '192.168.56.1', '1', '13-12-2022 09:32:02'),
(17, 'AKSES 1', '192.168.1.6', '1', '13-12-2022 06:41:29'),
(19, 'KOMINFO PAK AGUS', '192.168.3.12', '3', '14-12-2022 10:47:41'),
(20, 'PAK LUCAN', '192.168.3.14', '3', '14-12-2022 12:36:07'),
(21, 'ROG 247', '192.1681.247', '3', '15-12-2022 03:07:03'),
(22, 'ROG 248 GEDUNG A', '192.168.1.248', '1', '15-12-2022 03:07:56'),
(23, 'KOMINFO PA HENDRA G2', '192.168.2.6', '3', '15-12-2022 03:09:52'),
(24, 'WIFI MECE', '192.168.2.245', '3', '15-12-2022 03:12:00'),
(25, 'KOMINFO 3', '192.168.3.3', '3', '15-12-2022 03:14:11'),
(26, 'PAK SEKDIS', '192.168.3.4', '3', '15-12-2022 03:17:05'),
(27, 'KOMINFO PA HEND', '191.168.3.6', '3', '15-12-2022 03:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id`, `nama`) VALUES
(1, 'GEDUNG 1'),
(2, 'GEDUNG 2'),
(3, 'GEDUNG 3'),
(4, 'GEDUNG 4');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
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
`id` int(11)
,`nama` varchar(255)
,`ip` varchar(255)
,`lokasi` varchar(255)
,`pembaruan_terakhir` varchar(255)
,`id_lokasi` int(11)
,`nama_lokasi` varchar(255)
);

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tb_ip`  AS  select `daftar_ip`.`id` AS `id`,`daftar_ip`.`nama` AS `nama`,`daftar_ip`.`ip` AS `ip`,`daftar_ip`.`lokasi` AS `lokasi`,`daftar_ip`.`pembaruan_terakhir` AS `pembaruan_terakhir`,`lokasi`.`id` AS `id_lokasi`,`lokasi`.`nama` AS `nama_lokasi` from (`daftar_ip` join `lokasi` on(`lokasi`.`id` = `daftar_ip`.`lokasi`)) ;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftar_ip`
--
ALTER TABLE `daftar_ip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
