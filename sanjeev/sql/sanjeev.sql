-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 02:31 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanjeev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Cueblocks_Admin', 'CBphp#test2019');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `services` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `status` varchar(30) DEFAULT 'pending',
  `ip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `email`, `phone`, `services`, `created_at`, `status`, `ip`) VALUES
(1, 'sanjeev', 'abc@gmail.com', '8527118433', 'abc', '2020-04-14 23:53:03', 'pending', '::1'),
(2, 'Sanjeev Singla', 'sanjvsingla@gmail.com', '8527118432', 'adsda', '2020-04-15 00:15:40', 'pending', '::1'),
(3, 'Sanjeev Singla', 'sanjvsinglas@gmail.com', '8527118432', 'adsda', '2020-04-15 00:16:49', 'pending', '::1'),
(4, 'Sanjeev Singla', 'sanjvsingla@gmail.coms', '8527118433', 'adsda', '2020-04-15 00:17:30', 'pending', '::1'),
(5, 'Sanjeev Singla', 'sanjvsinsdgla@gmail.com', '8527118433', 'adsda', '2020-04-15 00:17:58', 'pending', '::1'),
(6, 'Sanjeev Singla', 'sanjvssdingla@gmail.com', '8527118433', 'adsda,asas,asass', '2020-04-15 00:18:38', 'pending', '::1'),
(7, 'Sanjeev Singla', 'sanjvsingla@gmail.comac', '8527118433', 'adsda', '2020-04-15 00:24:34', 'pending', '::1'),
(8, 'Sanjeev Singla', 'sanjvsingla@gmail.com', '8527118433', 'adsda', '2020-04-15 11:49:01', 'pending', '::1'),
(9, 'Sanjeev Singla', 'sanjvsingla@gmail.com', '8527118433', 'adsda', '2020-04-15 11:52:50', 'pending', '::1'),
(10, 'Sanjeev', 'sanjvsingla@gmail.com', '8527118433', 'adsda', '2020-04-15 14:55:30', 'pending', '::1'),
(11, '32232', 'sanjvsingla@gmail.com', '8527118433', 'adsda', '2020-04-15 14:56:36', 'pending', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
