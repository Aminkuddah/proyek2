-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 11:00 AM
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
(1, 'Admin', 0.3, 0.25, 0.25, 0.15, 0.05),
(2, 'Designer Web', 0.25, 0.25, 0.1, 0.2, 0.2),
(3, 'Database Analyst', 0.3, 0.25, 0.15, 0.15, 0.15),
(4, 'Database Engineer', 0.3, 0.25, 0.15, 0.15, 0.15),
(5, 'Programmer Mobile', 0.2, 0.3, 0.2, 0.2, 0.1),
(6, 'Programmer Web', 0.2, 0.35, 0.15, 0.2, 0.1),
(7, 'Programmer Game', 0.2, 0.25, 0.2, 0.25, 0.1),
(8, 'System Analyst', 0.2, 0.4, 0.1, 0.2, 0.1),
(9, 'Quality Assurance', 0.3, 0.3, 0.1, 0.2, 0.1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(45) DEFAULT NULL,
  `pekerjaan1` int(11) DEFAULT NULL,
  `pekerjaan2` int(11) DEFAULT NULL,
  `pekerjaan3` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `pekerjaan1`, `pekerjaan2`, `pekerjaan3`) VALUES
(1, 'Telkom Indonesia', 1, 3, 4),
(2, 'Ericsson', 7, 1, 2),
(3, 'Google Indonesia', 5, 7, 8),
(4, 'XL Axiata Tbk PT', 1, 6, 2),
(5, 'Nokia Solution and Networks PT', 9, 5, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id_perusahaan`),
  ADD KEY `fk_kategori_pekerjaan1` (`pekerjaan1`),
  ADD KEY `fk_kategori_pekerjaan2` (`pekerjaan2`),
  ADD KEY `fk_kategori_pekerjaan3` (`pekerjaan3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pekerjaan`
--
ALTER TABLE `tb_pekerjaan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD CONSTRAINT `fk_kategori_pekerjaan1` FOREIGN KEY (`pekerjaan1`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kategori_pekerjaan2` FOREIGN KEY (`pekerjaan2`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_kategori_pekerjaan3` FOREIGN KEY (`pekerjaan3`) REFERENCES `tb_pekerjaan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
