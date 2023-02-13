-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 13, 2023 at 04:09 AM
-- Server version: 10.6.11-MariaDB-0ubuntu0.22.04.1
-- PHP Version: 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `randigro_apotekupdate`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_obat`
--

CREATE TABLE `tabel_obat` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `jenis` varchar(25) NOT NULL,
  `harga_beli` int(25) NOT NULL,
  `harga_jual` int(25) NOT NULL,
  `jumlah` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabel_obat`
--

INSERT INTO `tabel_obat` (`id`, `kode`, `nama`, `kategori`, `jenis`, `harga_beli`, `harga_jual`, `jumlah`) VALUES
(2, 'a1234', 'Paramex', 'Sedang', 'Sakit Kepala', 3000, 3500, 5),
(3, 'a1111', 'Paramex', 'Sedang', 'Sakit Kepala', 3000, 3500, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  ADD PRIMARY KEY (`id`,`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_obat`
--
ALTER TABLE `tabel_obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
