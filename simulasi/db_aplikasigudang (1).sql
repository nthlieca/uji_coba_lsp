-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 08:43 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_aplikasigudang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nomor_id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kontak` int(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nomor_id`, `nama`, `kontak`, `email`) VALUES
(1, 'nathalie25', 896160920, 'nathalie25@gmail.com'),
(2, 'clarissa25', 896160920, 'clarissa25@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `nama_barang` varchar(100) NOT NULL,
  `jenis_barang` varchar(100) NOT NULL,
  `kuantitas_stok` int(100) NOT NULL,
  `id_inventory` int(5) NOT NULL,
  `barcode` int(5) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `harga_barang` int(5) NOT NULL,
  `id_storage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`nama_barang`, `jenis_barang`, `kuantitas_stok`, `id_inventory`, `barcode`, `id_vendor`, `harga_barang`, `id_storage`) VALUES
('lip stain hanasui', 'kosmetik', 100, 3, 1313, 3, 29500, 2),
('bayam', 'sayur', 0, 4, 1111, 2, 100000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `storage_unit`
--

CREATE TABLE `storage_unit` (
  `nama_gudang` varchar(100) NOT NULL,
  `lokasi_gudang` varchar(100) NOT NULL,
  `id_storage` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `storage_unit`
--

INSERT INTO `storage_unit` (`nama_gudang`, `lokasi_gudang`, `id_storage`) VALUES
('tanjung 1', 'tanjung', 1),
('anggrek 2', 'anggrek', 2),
('mangga 3', 'mangga 3', 5),
('mangga 1', 'mangga 1', 6),
('anggrek 2', 'anggrek 2', 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(10) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `level`, `email`, `kontak`) VALUES
(1, 'nathalie', 'nathalie25', '12345', 'admin', 'nathalie25@gmail.com', 896160920),
(2, 'Budi Doremi', 'budi_doremi', '12345', 'user', 'budi_doremi25@gmail.com', 896160920);

-- --------------------------------------------------------

--
-- Table structure for table `vendor_supplier`
--

CREATE TABLE `vendor_supplier` (
  `nama` varchar(100) NOT NULL,
  `kontak` int(12) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `id_vendor` int(5) NOT NULL,
  `nomor_invoice` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vendor_supplier`
--

INSERT INTO `vendor_supplier` (`nama`, `kontak`, `nama_barang`, `id_vendor`, `nomor_invoice`) VALUES
('angelina', 896160920, 'bayam', 2, 1111),
('nana', 8567439, 'hanasui', 3, 1313),
('nathalie', 81347338, 'cimory', 4, 1212),
('johanna', 82737467, 'lip matte omg', 6, 1414);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nomor_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id_inventory`),
  ADD UNIQUE KEY `id_storage` (`id_storage`),
  ADD KEY `id_vendor` (`id_vendor`);

--
-- Indexes for table `storage_unit`
--
ALTER TABLE `storage_unit`
  ADD PRIMARY KEY (`id_storage`),
  ADD UNIQUE KEY `lokasi_gudang` (`lokasi_gudang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `vendor_supplier`
--
ALTER TABLE `vendor_supplier`
  ADD PRIMARY KEY (`id_vendor`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id_inventory` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `storage_unit`
--
ALTER TABLE `storage_unit`
  MODIFY `id_storage` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendor_supplier`
--
ALTER TABLE `vendor_supplier`
  MODIFY `id_vendor` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `inventory_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor_supplier` (`id_vendor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inventory_ibfk_2` FOREIGN KEY (`id_storage`) REFERENCES `storage_unit` (`id_storage`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
