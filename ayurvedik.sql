-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2024 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayurvedik`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_data`
--

CREATE TABLE `add_data` (
  `Sr no.` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `year` int(2) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `mobile no` bigint(10) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `dob` date NOT NULL,
  `course` varchar(45) NOT NULL,
  `image` longblob NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_data`
--

INSERT INTO `add_data` (`Sr no.`, `id`, `year`, `name`, `email`, `mobile no`, `gender`, `dob`, `course`, `image`, `password`, `time`) VALUES
(29, 2147483647, 2, 'user', 'user@gmail.com', 9685743625, 'female', '2009-04-17', 'Ayurvedic Pharmacology and Formulation', 0x75706c6f6164732f757365725f313730342e6a7067, '$2y$10$iz0HslMfcxt.vMtVEcFUUuiAkpwWC6clmaHPXvAw2GouDAm6qrbk6', '2024-05-21 20:51:33'),
(30, 2147483647, 2, 'rohan', 'rohan2@gmail.com', 8574963214, 'female', '2024-04-29', 'Ayurvedic Pharmacology and Formulation', 0x75706c6f6164732f726f68616e5f323930342e6a7067, '$2y$10$ED2ofZrHXQIpJqbXhKxCWu/xM8U5NI6AG2lfFHuj876p3jdKoqLRm', '2024-05-21 21:52:08'),
(31, 2147483647, 1, 'abc', 'abc1@gmail.com', 4585963254, 'male', '2024-05-03', 'Ayurvedic Nutrition and Dietetics', 0x75706c6f6164732f6162635f303330352e706e67, '$2y$10$diixcHs2HT2HxaCEIXrWFefDXrNZW1dEOzYqWerT8Ozmguh0E.P7S', '2024-05-21 22:11:03'),
(32, 2147483647, 1, 'abc', 'abc@gmail.com', 324569824, 'male', '2024-05-03', 'Ayurvedic Nutrition and Dietetics', 0x75706c6f6164732f6162635f303330352e6a7067, '$2y$10$CD/dJu18ICbAbAo5PmH5QeJfM3iFhxsR8OpEmS2CP9kvR0rHHgTsa', '2024-05-31 22:44:05'),
(33, 2147483647, 1, 'rohan', 'rohan123@gmail.com', 1235649878, 'female', '2024-07-01', 'Ayurvedic Medicine and Rasayana', 0x75706c6f6164732f726f68616e5f303130372e6a7067, '$2y$10$Oclp56RO63jiFo28zQ/7peTvVPeQ2uW6BWZnwrswHulY46iyL0aSK', '2024-07-04 18:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `login_record`
--

CREATE TABLE `login_record` (
  `sr no` int(3) NOT NULL,
  `email` varchar(45) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_record`
--

INSERT INTO `login_record` (`sr no`, `email`, `time`) VALUES
(12, 'shubham22844@gmail.com', '2024-05-18 17:33:01'),
(13, 'shubham22844@gmail.com', '2024-05-18 17:36:20'),
(14, 'shubham22844@gmail.com', '2024-05-18 22:36:52'),
(15, 'shubham22844@gmail.com', '2024-05-18 22:42:08'),
(16, 'shubham22844@gmail.com', '2024-05-19 11:52:46'),
(17, 'shubham22844@gmail.com', '2024-05-19 11:59:19'),
(18, 'shubham22844@gmail.com', '2024-05-19 12:00:32'),
(19, 'dan@gmail.com', '2024-05-20 16:08:26'),
(20, 'abc1@gmail.com', '2024-05-20 20:31:03'),
(21, 'abc1@gmail.com', '2024-05-20 20:42:39'),
(22, 'user@gmail.com', '2024-05-20 21:40:35'),
(23, 'user1@gmail.com', '2024-05-20 21:51:31'),
(24, 'abc1@gmail.com', '2024-05-21 11:31:48'),
(25, 'abc1@gmail.com', '2024-05-21 11:39:20'),
(26, 'abc1@gmail.com', '2024-05-21 20:10:50'),
(27, 'abc1@gmail.com', '2024-05-21 20:40:17'),
(28, 'user@gmail.com', '2024-05-21 20:51:49'),
(29, 'user@gmail.com', '2024-05-21 21:33:12'),
(30, 'rohan2@gmail.com', '2024-05-21 21:52:21'),
(31, 'abc1@gmail.com', '2024-05-21 22:11:46'),
(32, 'abc1@gmail.com', '2024-05-22 12:28:59'),
(33, 'abc1@gmail.com', '2024-05-22 12:40:06'),
(34, 'user@gmail.com', '2024-05-22 12:41:23'),
(35, 'rohan2@gmail.com', '2024-05-31 22:42:49'),
(36, 'abc@gmail.com', '2024-05-31 22:44:18'),
(37, 'rohan123@gmail.com', '2024-07-04 18:14:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_data`
--
ALTER TABLE `add_data`
  ADD PRIMARY KEY (`Sr no.`),
  ADD KEY `fees_idx` (`id`);

--
-- Indexes for table `login_record`
--
ALTER TABLE `login_record`
  ADD PRIMARY KEY (`sr no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_data`
--
ALTER TABLE `add_data`
  MODIFY `Sr no.` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `login_record`
--
ALTER TABLE `login_record`
  MODIFY `sr no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
