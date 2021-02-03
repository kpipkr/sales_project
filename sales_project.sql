-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 12:36 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sales_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(100) NOT NULL,
  `nama_perusahaan` varchar(500) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `contact_no_perusahaan` varchar(100) NOT NULL,
  `nama_pic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no_pic` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `wa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `nama_perusahaan`, `alamat`, `contact_no_perusahaan`, `nama_pic`, `email`, `contact_no_pic`, `twitter`, `fb`, `wa`) VALUES
(1, 'PT. Maju Bersama', 'Jln. Ngimbangan no. 70 Pungging, Kab. Mojokerto 64157Jln. Ngimbangan no. 70 Pungging, Kab. Mojokerto 64157', '081234567890', 'James Wu', 'jameswu@gmail.com', '081234567890', 'jameswu', 'jameswu', '081234567890'),
(2, 'PT. Sentosa Selamanya', 'Jln. Prambon no. 50 Surabaya 62145', '081234567890', 'Melani Atma', 'melaniatma@gmail.com', '081234567890', 'melaniatma', 'melaniatma', '081234567890'),
(3, 'PT Jaya Bangsa Sentosa', 'jl kemutih no 17', '08571245231', 'Stephanie Hwang', 'stephaniew@gmail.com', '08571245231', 'stephaniewang', 'stephaniewang', '08571245231'),
(4, 'PT Maju Anak Bangsa', 'Jl Kuningan merah jambu no 17', '08512543223', 'Gilbert Giovani', 'gilbertgiovani@gmail.com', '08512543223', 'glbrt', 'Gilbert Giovani', '08512543223');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `kunjungan_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `target` int(20) NOT NULL,
  `tanggal` int(20) NOT NULL,
  `bulan` int(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `waktu_kunjungan` date NOT NULL,
  `nama_pic` varchar(100) NOT NULL,
  `contact_no_pic` int(50) NOT NULL,
  `produk` varchar(100) NOT NULL,
  `harga` int(255) NOT NULL,
  `waktu_pembelian` date NOT NULL,
  `lainlain` varchar(1000) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `alasan` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `target`
--

CREATE TABLE `target` (
  `id` int(5) NOT NULL,
  `target` int(5) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `target`
--

INSERT INTO `target` (`id`, `target`, `updated_at`) VALUES
(1, 3, '2021-01-29 21:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `tipe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `tipe`) VALUES
(1, 'dicha putra', '123', 'sales'),
(2, 'evi oktavia', '123', 'sales'),
(3, 'anton efendi', '123', 'sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`kunjungan_id`),
  ADD KEY `user_ID` (`user_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `target`
--
ALTER TABLE `target`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `kunjungan_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `target`
--
ALTER TABLE `target`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `customer_id` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`),
  ADD CONSTRAINT `user_ID` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
