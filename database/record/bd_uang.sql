-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 03:00 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_uang`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_pemakaian`
--

CREATE TABLE `t_pemakaian` (
  `id` int(11) NOT NULL,
  `tgl_pemakaian` date NOT NULL,
  `id_pemasukan` int(11) NOT NULL,
  `jml_pemakaian` int(11) NOT NULL,
  `nama_pemakaian` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pemakaian`
--

INSERT INTO `t_pemakaian` (`id`, `tgl_pemakaian`, `id_pemasukan`, `jml_pemakaian`, `nama_pemakaian`, `created_at`, `updated_at`) VALUES
(2, '2023-07-13', 1, 100000, 'Bensin Motor Vixion', '2023-07-16 15:32:10', '2023-07-16 15:32:58'),
(3, '2023-07-15', 1, 50000, 'Ondangn k Nida (PPIC)', '2023-07-16 15:33:22', '2023-07-16 15:33:58'),
(4, '2023-07-15', 1, 160000, 'Jajan', '2023-07-16 15:37:20', '2023-07-16 15:38:16'),
(5, '2023-07-17', 1, 10000, 'Jajan', '2023-07-20 21:09:52', '2023-07-20 21:10:15'),
(6, '2023-07-18', 1, 10000, 'Jajan', '2023-07-20 21:10:21', '2023-07-20 21:10:55'),
(7, '2023-07-20', 1, 400, 'Nabung Celengan', '2023-07-20 21:18:43', '2023-07-20 21:19:06'),
(10, '2023-07-22', 1, 10000, 'Jajan di wbk', '2023-07-22 16:04:58', '2023-07-22 21:04:58'),
(11, '2023-07-23', 1, 50000, 'Saldo DANA', '2023-07-23 10:10:02', '2023-07-23 15:10:02'),
(12, '2023-07-24', 1, 15000, 'Jajan', '2023-07-26 00:22:16', '2023-07-26 05:22:16'),
(13, '2023-07-25', 1, 18500, 'Jajan', '2023-07-26 00:23:55', '2023-07-26 05:23:55'),
(14, '2023-07-27', 1, 27500, 'Jajan + 2 Materai', '2023-07-28 00:58:05', '2023-07-28 05:58:05'),
(15, '2023-07-26', 1, 6000, 'Jajan', '2023-07-28 00:59:01', '2023-07-28 05:59:01'),
(16, '2023-07-28', 1, 100000, 'Bensin PCX', '2023-07-28 15:15:29', '2023-07-28 20:15:29'),
(17, '2023-07-28', 1, 13000, 'Jajan', '2023-07-28 15:16:26', '2023-07-28 20:16:26'),
(18, '2023-07-30', 1, 3000, 'Jajan', '2023-07-30 07:29:23', '2023-07-30 12:29:23'),
(19, '2023-08-01', 1, 19000, 'Jajan', '2023-08-01 13:49:38', '2023-08-01 18:49:38'),
(20, '2023-07-31', 1, 14000, 'Jajan', '2023-08-01 14:07:21', '2023-08-01 19:07:21'),
(21, '2023-07-29', 1, 20000, 'Jajan', '2023-08-01 14:10:33', '2023-08-01 19:10:33'),
(22, '2023-07-31', 1, 1000, 'Nabung Celengan', '2023-08-01 14:11:00', '2023-08-01 19:11:00'),
(23, '2023-08-02', 1, 15000, 'Jajan', '2023-08-03 14:48:03', '2023-08-03 19:48:03'),
(26, '2023-08-03', 1, 8000, 'Jajan', '2023-08-03 15:16:52', '2023-08-03 20:16:52'),
(27, '2023-08-03', 1, 100000, 'Bensin Vixion', '2023-08-03 15:17:23', '2023-08-03 20:17:23'),
(28, '2023-08-04', 1, 20000, 'Jajan', '2023-08-04 14:48:56', '2023-08-04 19:48:56'),
(29, '2023-08-05', 1, 21000, 'Jajan', '2023-08-05 13:02:11', '2023-08-05 18:02:11'),
(31, '2023-08-07', 1, 10000, 'Jajan', '2023-08-08 13:02:05', '2023-08-08 18:02:05'),
(32, '2023-08-08', 1, 29000, 'Jajan', '2023-08-08 13:02:35', '2023-08-08 18:02:35'),
(34, '2023-08-02', 7, 8500, 'BNI', '2023-08-08 13:30:38', '2023-08-08 18:30:38'),
(35, '2023-08-09', 1, 24500, 'Jajan', '2023-08-10 16:07:07', '2023-08-10 21:07:07'),
(36, '2023-08-10', 1, 28000, 'Jajan', '2023-08-10 16:08:19', '2023-08-10 21:08:19'),
(37, '2023-08-11', 1, 100000, 'Bensin Vixion', '2023-08-11 15:50:08', '2023-08-11 20:50:08'),
(38, '2023-08-11', 1, 19500, 'Jajan', '2023-08-11 15:50:26', '2023-08-11 20:50:26'),
(39, '2023-08-12', 1, 29500, 'Jajan', '2023-08-13 03:54:03', '2023-08-13 08:54:03'),
(40, '2023-08-13', 1, 50000, 'Saldo DANA', '2023-08-13 12:33:12', '2023-08-13 17:33:12'),
(41, '2023-08-13', 1, 15000, 'Steam Vixion', '2023-08-13 12:34:09', '2023-08-13 17:34:09'),
(42, '2023-08-13', 1, 30000, 'Jajan', '2023-08-13 12:36:13', '2023-08-13 17:36:13'),
(43, '2023-08-14', 1, 18500, 'Jajan', '2023-08-15 16:09:58', '2023-08-15 21:09:58'),
(44, '2023-08-15', 1, 11000, 'Jajan', '2023-08-15 16:10:22', '2023-08-15 21:10:22');

-- --------------------------------------------------------

--
-- Table structure for table `t_pemasukan`
--

CREATE TABLE `t_pemasukan` (
  `id` int(11) NOT NULL,
  `tgl_pemasukan` date NOT NULL,
  `jml_pemasukan` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pemasukan`
--

INSERT INTO `t_pemasukan` (`id`, `tgl_pemasukan`, `jml_pemasukan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, '2023-07-07', 2330400, 'GAJI PERTAMA', '2023-07-07 20:35:06', '2023-07-07 20:35:06'),
(7, '2023-08-01', 2540357, 'GAJI KEDUA', '2023-08-08 13:30:10', '2023-08-08 18:30:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_pemakaian`
--
ALTER TABLE `t_pemakaian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pemasukan`
--
ALTER TABLE `t_pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_pemakaian`
--
ALTER TABLE `t_pemakaian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `t_pemasukan`
--
ALTER TABLE `t_pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
