-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2017 at 11:59 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesan_tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `kd_bus` int(10) NOT NULL,
  `nm_bus` varchar(50) NOT NULL,
  `nmr_bus` varchar(10) NOT NULL,
  `no_duduk` int(4) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`kd_bus`, `nm_bus`, `nmr_bus`, `no_duduk`, `status`) VALUES
(1, 'Putra Remaja', 'B01', 20, 1),
(4, 'Handoyo', 'B02', 40, 1),
(5, 'Budiman', 'B08', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `nm_pelanggan` varchar(30) NOT NULL,
  `alamat` text NOT NULL,
  `jns_kelamin` enum('1','2') NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `no_ktp`, `nm_pelanggan`, `alamat`, `jns_kelamin`, `no_telp`, `status`) VALUES
(31, '000000000000000', 'indra', 'emarang', '1', '0909300', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `kd_bayar` int(12) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `kd_tiket` int(12) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `rek_asal` int(20) NOT NULL,
  `bank_tujuan` varchar(30) NOT NULL,
  `total` int(12) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`kd_bayar`, `no_ktp`, `kd_tiket`, `tanggal`, `rek_asal`, `bank_tujuan`, `total`, `status`) VALUES
(6, '000000000000000', 104, '30/07/2017', 923232, '3', 60000, '2');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `kd_pesan` int(12) NOT NULL,
  `kd_tiket` int(12) NOT NULL,
  `no_ktp` varchar(30) NOT NULL,
  `kd_bus` int(10) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `status` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`kd_pesan`, `kd_tiket`, `no_ktp`, `kd_bus`, `tanggal`, `status`) VALUES
(21, 104, '000000000000000', 1, '30/07/2017', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kd_tiket` int(12) NOT NULL,
  `kd_bus` int(5) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `jam` varchar(5) NOT NULL,
  `no_duduk` varchar(6) NOT NULL,
  `harga` int(7) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kd_tiket`, `kd_bus`, `tujuan`, `tanggal`, `jam`, `no_duduk`, `harga`, `status`) VALUES
(102, 1, 'Surabaya', '31/07/2017', '18.00', '1', 60000, 1),
(103, 1, 'Surabaya', '31/07/2017', '18.00', '2', 60000, 0),
(104, 1, 'Surabaya', '31/07/2017', '18.00', '3', 60000, 3),
(105, 1, 'Surabaya', '31/07/2017', '18.00', '4', 60000, 1),
(106, 1, 'Surabaya', '31/07/2017', '18.00', '5', 60000, 1),
(107, 1, 'Surabaya', '31/07/2017', '18.00', '6', 60000, 1),
(108, 1, 'Surabaya', '31/07/2017', '18.00', '7', 60000, 1),
(109, 1, 'Surabaya', '31/07/2017', '18.00', '8', 60000, 1),
(110, 1, 'Surabaya', '31/07/2017', '18.00', '9', 60000, 1),
(111, 1, 'Surabaya', '31/07/2017', '18.00', '10', 60000, 1),
(112, 1, 'Surabaya', '31/07/2017', '18.00', '11', 60000, 1),
(113, 1, 'Surabaya', '31/07/2017', '18.00', '12', 60000, 1),
(114, 1, 'Surabaya', '31/07/2017', '18.00', '13', 60000, 1),
(115, 1, 'Surabaya', '31/07/2017', '18.00', '14', 60000, 1),
(116, 1, 'Surabaya', '31/07/2017', '18.00', '15', 60000, 1),
(117, 1, 'Surabaya', '31/07/2017', '18.00', '16', 60000, 1),
(118, 1, 'Surabaya', '31/07/2017', '18.00', '17', 60000, 1),
(119, 1, 'Surabaya', '31/07/2017', '18.00', '18', 60000, 1),
(120, 1, 'Surabaya', '31/07/2017', '18.00', '19', 60000, 1),
(121, 1, 'Surabaya', '31/07/2017', '18.00', '20', 60000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `sandi` varchar(30) NOT NULL,
  `level_akses` enum('1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `namauser`, `sandi`, `level_akses`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'andi', 'andi', '3'),
(3, 'kaka', '1', '1'),
(4, 'ika', '123', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`kd_bus`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`kd_bayar`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`kd_pesan`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kd_tiket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `kd_bus` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `kd_bayar` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `kd_pesan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `kd_tiket` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
