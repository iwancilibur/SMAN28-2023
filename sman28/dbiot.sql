-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 02:21 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbiot`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_control`
--

CREATE TABLE `tb_control` (
  `control1` varchar(100) NOT NULL,
  `control2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_control`
--

INSERT INTO `tb_control` (`control1`, `control2`) VALUES
('0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_monitoring`
--

CREATE TABLE `tb_monitoring` (
  `waktu` datetime NOT NULL,
  `namadevice` varchar(100) NOT NULL,
  `sensor1` varchar(100) NOT NULL,
  `sensor2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_monitoring`
--

INSERT INTO `tb_monitoring` (`waktu`, `namadevice`, `sensor1`, `sensor2`) VALUES
('2021-10-15 04:58:30', 'iwancilibur', '49.00', '33.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_save`
--

CREATE TABLE `tb_save` (
  `id` int(11) NOT NULL,
  `waktu` datetime NOT NULL,
  `namadevice` varchar(100) NOT NULL,
  `sensor1` varchar(100) NOT NULL,
  `sensor2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_save`
--
ALTER TABLE `tb_save`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_save`
--
ALTER TABLE `tb_save`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2855;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
