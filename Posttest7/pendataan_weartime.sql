-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2022 at 11:55 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendataan_weartime`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_weartime`
--

CREATE TABLE `data_weartime` (
  `Nama_Admin` text NOT NULL,
  `Nomer_Telepon` int(12) NOT NULL,
  `Merek_SmartWatch` varchar(25) NOT NULL,
  `Jumlah_Stock` int(200) NOT NULL,
  `Jumlah_Terjual` int(200) NOT NULL,
  `Warna_Tersedia` text NOT NULL,
  `kode_SmartWatch` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_weartime`
--

INSERT INTO `data_weartime` (`Nama_Admin`, `Nomer_Telepon`, `Merek_SmartWatch`, `Jumlah_Stock`, `Jumlah_Terjual`, `Warna_Tersedia`, `kode_SmartWatch`, `gambar`, `keterangan`) VALUES
('tina', 7658943, 'samsung', 122, 100, 'black', 11, '', ''),
('darel', 131726192, 'samsung', 100, 89, 'black', 15, '', ''),
('arzan', 2147483647, 'xiaomi', 125, 150, 'black', 38, 'arzan.jpg', '29-10-22 19:51:42 pm'),
('reynand', 2147483647, 'samsung', 190, 185, 'hijau army', 39, 'reynand.jpg', '29-10-22 19:48:19 pm'),
('tasya', 2147483647, 'apple', 190, 188, 'white', 40, 'tasya.jpg', '29-10-22 19:52:10 pm'),
('sayekti', 264816, 'samsung', 123, 12, 'pink', 42, 'sayekti.jpg', '04-11-22 20:09:52 pm');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `regis_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `psw` varchar(255) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`regis_id`, `email`, `username`, `psw`, `alamat`) VALUES
(2, 'saye@gmail.com', 'sasa', '$2y$10$t6sdM/IZ.irjD1PlE3zQY.8VqCorRWJM7uJiW3IT3LbM6Ba35hyfS', 'mawar'),
(4, 'dani@gmail.com', 'danii', '$2y$10$Q07n4F1Fkh69DGR1QE/10.4SR/RcKTytSgKM9ljozGtQAe9otax92', 'mawar'),
(9, 'budii', 'budiw', '$2y$10$sl/hDpg2JnxOmceMTE1WyuTlZKfANCJEaF328xQ5Ke5lzmym6nCVe', 'Jalan Sudirman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_weartime`
--
ALTER TABLE `data_weartime`
  ADD PRIMARY KEY (`kode_SmartWatch`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`regis_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_weartime`
--
ALTER TABLE `data_weartime`
  MODIFY `kode_SmartWatch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `regis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
