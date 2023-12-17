-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 04:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_pemweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `nama`, `password`) VALUES
(1, 'admin', '4c32e786e200376f562647ecaff24378b1faccf0', 'd033e22ae348aeb5660fc2140aec35850c4da997');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_tabel`
--

CREATE TABLE `halaman_tabel` (
  `Nama` varchar(255) NOT NULL,
  `NIM` int(11) NOT NULL,
  `Program_Studi` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `Tanggal_Lahir` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `halaman_tabel`
--

INSERT INTO `halaman_tabel` (`Nama`, `NIM`, `Program_Studi`, `Email`, `Jenis_Kelamin`, `Tanggal_Lahir`, `Alamat`) VALUES
('Nabila Dian', 119865156, 'Teknik Geomatika	', 'nabila@gmail.com', 'Perempuan', '2023-12-13', 'Jl. Nin aja dulu No.6'),
('Yusuf Fadilla', 120119234, 'Teknik Biomedis', 'yusuf@gmail.com', 'Laki-laki', '2002-09-10', 'Jl. Mawar No.13'),
('Ahmad Sumbul', 120567123, 'Teknik Sipil', 'sumbul@gmail.com', 'Laki-laki', '1999-07-13', 'Jl. Senopati No.14'),
('Rio Aditya', 121140140, 'Teknik Informatika', 'rio@gmail.com', 'Laki-laki', '2003-05-16', 'Jl. Melati No.2'),
('Ayu Ningsih', 121897034, 'Teknik Elektro', 'ayu@gmail.com', 'Perempuan', '2004-11-10', 'Jl. Anggrek No.7'),
('Muhammad Fathan', 122098045, 'Teknik Industri', 'fathan@gmail.com', 'Laki-laki', '2001-01-14', 'Jl. Mangga No.4'),
('Shanks', 123123123, 'Teknik Informatika', 'Shanks@gmail.com', 'Perempuan', '2023-12-14', 'Jln. Yukss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `halaman_tabel`
--
ALTER TABLE `halaman_tabel`
  ADD PRIMARY KEY (`NIM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
