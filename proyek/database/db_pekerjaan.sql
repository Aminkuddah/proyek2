-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2019 at 05:57 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pekerjaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_fk_perusahaan_kerja`
--

CREATE TABLE `tb_fk_perusahaan_kerja` (
  `id_tabel` int(11) NOT NULL,
  `fk_pekerjaan` int(11) NOT NULL,
  `fk_perusahaan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_fk_perusahaan_kerja`
--

INSERT INTO `tb_fk_perusahaan_kerja` (`id_tabel`, `fk_pekerjaan`, `fk_perusahaan`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 3, 9),
(10, 3, 10),
(11, 3, 6),
(12, 3, 12),
(13, 4, 13),
(14, 4, 14),
(15, 4, 15),
(16, 4, 16),
(17, 5, 17),
(18, 5, 18),
(19, 5, 19),
(20, 5, 20),
(21, 6, 21),
(22, 6, 22),
(23, 6, 23),
(24, 7, 24),
(25, 7, 25),
(26, 8, 26),
(27, 8, 27),
(28, 8, 28),
(29, 8, 29),
(30, 9, 30),
(31, 9, 31),
(32, 9, 32),
(33, 9, 33);

-- --------------------------------------------------------

--
-- Table structure for table `tb_history`
--

CREATE TABLE `tb_history` (
  `id_history` int(11) NOT NULL,
  `nama` varchar(80) DEFAULT NULL,
  `hasil1` varchar(5) DEFAULT NULL,
  `hasil2` varchar(5) DEFAULT NULL,
  `hasil3` varchar(5) DEFAULT NULL,
  `usia` int(5) DEFAULT NULL,
  `gender` enum('0','1') DEFAULT NULL,
  `b_inggris` enum('0','1') DEFAULT NULL,
  `ipk` varchar(5) DEFAULT NULL,
  `penTerakhir` varchar(5) DEFAULT NULL,
  `akreditasi` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pekerjaan`
--

CREATE TABLE `tb_pekerjaan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL,
  `pendidikan_terkahir` double DEFAULT NULL,
  `ipk` double DEFAULT NULL,
  `usia` double DEFAULT NULL,
  `akreditasi` double DEFAULT NULL,
  `b_inggris` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pekerjaan`
--

INSERT INTO `tb_pekerjaan` (`id_kategori`, `nama_kategori`, `pendidikan_terkahir`, `ipk`, `usia`, `akreditasi`, `b_inggris`) VALUES
(1, 'UI/UX Designer', 0.3, 0.25, 0.25, 0.15, 0.05),
(2, 'Website Programmer', 0.25, 0.25, 0.1, 0.2, 0.2),
(3, 'Programmer', 0.3, 0.25, 0.15, 0.15, 0.15),
(4, 'Java Programmer', 0.3, 0.25, 0.15, 0.15, 0.15),
(5, 'Business Intelligence Analyst', 0.2, 0.3, 0.2, 0.2, 0.1),
(6, 'Database Engineer', 0.2, 0.35, 0.15, 0.2, 0.1),
(7, 'Trainer Animation', 0.2, 0.25, 0.2, 0.25, 0.1),
(8, 'Information Security Specialist', 0.2, 0.4, 0.1, 0.2, 0.1),
(9, 'System Engineer', 0.3, 0.3, 0.1, 0.2, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) DEFAULT NULL,
  `lokasi` varchar(20) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `lokasi`, `link`) VALUES
(1, 'Radya Labs', 'Bandung', 'http://radyalabs.com/'),
(2, 'Promanufacture Indonesia PT', 'Semarang', 'https://sik.promanufacture.co.id/'),
(3, 'GML Performance Consulting', 'Jakarta Raya', 'http://www.gmlperformance.com/'),
(4, 'JMC IT Consultant', 'Yogyakarta', 'https://www.jmc.co.id/'),
(5, 'Kristamedia Pratama PT', 'Jakarta Barat', 'https://kristamedia.com/'),
(6, 'Bisnis Usaha Prima PT', 'Surabaya', 'https://www.google.com/search?q=Bisnis+Usaha+Prima+PT&rlz=1C1CHBF_enID812ID812&oq=Bisnis+Usaha+Prima+PT&aqs=chrome..69i57j69i59j0j69i60l3.1116j0j9&sourceid=chrome&ie=UTF-8'),
(7, 'Reservasi Indonesia Sejahtera PT', 'Denpasar', 'http://www.kutaraya.com/'),
(8, 'Ufirst', 'Surabaya', 'https://www.google.com/search?q=Ufirst+surabaya&rlz=1C1CHBF_enID812ID812&oq=uf&aqs=chrome.1.69i57j69i59l3j69i60l2.2844j0j9&sourceid=chrome&ie=UTF-8'),
(9, 'Mitra Digital Futuristik PT', 'Jakarta Pusat', 'http://mitradigitalfuturistik.com/'),
(10, 'Primavisi Globalindo', 'Surabaya', 'http://primavisiglobalindo.com/'),
(12, 'Avega Wisata Global PT', 'Jakarta Raya', 'http://www.global-wisata.com/'),
(13, 'Mitracomm Ekasarana PT', 'Jakarta Raya', 'http://www.mitracomm.com/'),
(14, 'Myindo Cyber Media PT', 'Jakarta Raya', 'https://myindo.co.id/'),
(15, 'Smartfren Telecom Tbk PT', 'Semarang', 'https://www.smartfren.com/'),
(16, 'Walden Global Services PT', 'Bandung', 'https://www.wgs.co.id/'),
(17, 'Halodoc', 'Jakarta Selatan', 'https://www.halodoc.com/'),
(18, 'PT Suparma Tbk', 'Surabaya', 'http://www.ptsuparmatbk.com/'),
(19, 'PT SMART,Tbk', 'Jakarta Raya', 'https://www.smart-tbk.com/'),
(20, 'Reeracoen Indonesia PT', 'Jakarta Selatan', 'https://www.reeracoen.co.id/'),
(21, 'PT IT Group Indonesia', 'Jakarta Raya', 'https://www.itgroupinc.asia/'),
(22, 'Nusantara Berkah Digital PT', 'Yogyakarta', 'https://www.google.com/search?q=Nusantara+Berkah+Digital+PT&rlz=1C1CHBF_enID812ID812&oq=Nusantara+Berkah+Digital+PT&aqs=chrome..69i57j69i59j0j69i60l3.260j0j4&sourceid=chrome&ie=UTF-8'),
(23, 'Telmark Integrasi Indonesia PT', 'Jakarta Barat', 'http://telmark.co.id/'),
(24, 'ISLS-binus Center', 'Jakarta', 'http://binuscenter.com/'),
(25, 'Belogix Indonesia PT', 'Semarang', 'https://belogix.com/'),
(26, 'ASIA PULP AND PAPER', 'Jawa Barat', 'https://www.asiapulppaper.com/'),
(27, 'PT NEC Indonesia', 'Jakarta Selatan', 'https://id.nec.com/'),
(28, 'PT Lion Super Indo', 'Jakarta Selatan', 'https://www.superindo.co.id/'),
(29, 'Gudang Garam Tbk', 'Sidoarjo', 'https://www.gudanggaramtbk.com/'),
(30, 'PT Buana Varia Komputama', 'Jakarta Selatan', 'http://www.bvk.co.id/'),
(31, 'PT Dinamika Kreasi Teknologi', 'Jakarta Utara', 'http://www.dkreasi.co.id/'),
(32, 'PT Nusantara Compnet Integrator', 'Jakarta Barat', 'https://www.compnet.co.id/'),
(33, 'PT Aero Systems Indonesia', 'Tangerang', 'https://www.asyst.co.id/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  ADD PRIMARY KEY (`id_tabel`),
  ADD KEY `fk_pekerjaan` (`fk_pekerjaan`),
  ADD KEY `fk_perusahaan` (`fk_perusahaan`);

--
-- Indexes for table `tb_history`
--
ALTER TABLE `tb_history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  MODIFY `id_tabel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_history`
--
ALTER TABLE `tb_history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_fk_perusahaan_kerja`
--
ALTER TABLE `tb_fk_perusahaan_kerja`
  ADD CONSTRAINT `fk_pekerjaan` FOREIGN KEY (`fk_pekerjaan`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_perusahaan` FOREIGN KEY (`fk_perusahaan`) REFERENCES `tb_perusahaan` (`id_perusahaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
