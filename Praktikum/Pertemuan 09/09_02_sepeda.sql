-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 07:41 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `outlet_sepeda_05`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id` bigint(20) NOT NULL,
  `nomor_seri_sepeda` varchar(50) NOT NULL,
  `merk_sepeda` varchar(50) NOT NULL,
  `jenis_sepeda` varchar(50) NOT NULL,
  `harga_sepeda` int(100) NOT NULL,
  `ukuran_sepeda` enum('X','M','S','L') NOT NULL,
  `ketersedian_sepeda` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id`, `nomor_seri_sepeda`, `merk_sepeda`, `jenis_sepeda`, `harga_sepeda`, `ukuran_sepeda`, `ketersedian_sepeda`) VALUES
(1, 'PG 21 4 50194', 'Polygon Cascade 2', 'MTB', 2600000, 'S', '2020-10-26 13:23:06'),
(2, 'PG 38 3 51198', 'Polygon Cascade 1', 'MTB', 2300000, 'M', '2020-04-07 13:26:57'),
(3, 'DT 44 5 00310', 'Detroit 1.0', 'MTB', 3500000, 'S', '2020-08-13 13:27:52'),
(4, 'DT 74 2 00885', 'Detroit 2.0', 'MTB', 4000000, 'S', '2020-10-07 13:27:52'),
(5, 'UT 74 2 05912', 'United 3', 'Road Bike', 6000000, 'S', '2020-10-30 13:29:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomor_seri_sepeda` (`nomor_seri_sepeda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
