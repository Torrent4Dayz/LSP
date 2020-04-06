-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2020 at 05:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengeluhan`
--

CREATE TABLE `pengeluhan` (
  `id_pengeluhan` varchar(8) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `keluhan` text NOT NULL,
  `lokasi` varchar(30) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(20) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengeluhan`
--

INSERT INTO `pengeluhan` (`id_pengeluhan`, `nik`, `jenis`, `keluhan`, `lokasi`, `tanggal`, `status`, `feedback`) VALUES
('06032073', '2017765483923305', 'Keamanan', 'banyak terjadi pembegalan di sekitar smp 111', 'smpn 111 jakarta barat', '2020-02-06 03:46:20', 'Diproses', 'Belum Diberi Feedback');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengeluhan`
--
ALTER TABLE `pengeluhan`
  ADD PRIMARY KEY (`id_pengeluhan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `jenis` (`jenis`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pengeluhan`
--
ALTER TABLE `pengeluhan`
  ADD CONSTRAINT `nik` FOREIGN KEY (`nik`) REFERENCES `penduduk` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
