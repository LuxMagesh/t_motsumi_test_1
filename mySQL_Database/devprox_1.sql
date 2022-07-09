-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2022 at 02:47 AM
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
-- Database: `devprox_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(150) NOT NULL,
  `f_name` varchar(600) NOT NULL,
  `l_name` varchar(600) NOT NULL,
  `id_num` varchar(13) NOT NULL,
  `reg_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `f_name`, `l_name`, `id_num`, `reg_date`) VALUES
(1, 'Lux', 'Test', '3333455555544', '2022-07-13'),
(3, 'Luq', 'King', '777909535367', '0000-00-00'),
(4, 'Lu', 'Test', '88766666868', '0000-00-00'),
(5, 'Lux', 'Magesh', '7784634646466', '0000-00-00'),
(6, 'King', 'Magesh', '556685885687', '0000-00-00'),
(8, 'Lux', 'Magsesh', '99577474747', '0000-00-00'),
(9, 'Lux', 'Magesh', '2424535353535', '0000-00-00'),
(10, 'Lux', 'Magesh', '2424535353557', '0000-00-00'),
(11, 'Lux', 'Magesh', '2424535353544', '0000-00-00'),
(12, 'Lux', 'Magesh', '8854757575773', '0000-00-00'),
(13, 'Lux', 'Magesh', '8854757575776', '0000-00-00'),
(14, 'Lux', 'Magesh', '8854757575745', '0000-00-00'),
(15, 'Lux', 'Magesh', '8854757575743', '20/05/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
