-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2025 at 02:44 PM
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
-- Database: `praktikum_iot`
--

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `temp_act` decimal(5,2) DEFAULT NULL,
  `temp_min` decimal(5,2) DEFAULT NULL,
  `temp_max` decimal(5,2) DEFAULT NULL,
  `temp_avg` decimal(5,2) DEFAULT NULL,
  `hum_act` decimal(5,2) DEFAULT NULL,
  `hum_min` decimal(5,2) DEFAULT NULL,
  `hum_max` decimal(5,2) DEFAULT NULL,
  `hum_avg` decimal(5,2) DEFAULT NULL,
  `last_measurement` datetime DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `temp_act`, `temp_min`, `temp_max`, `temp_avg`, `hum_act`, `hum_min`, `hum_max`, `hum_avg`, `last_measurement`, `ip_address`) VALUES
('1', 'device 1', 30.45, 30.45, 32.45, 31.45, 60.45, 60.45, 60.45, 60.45, '2024-09-16 20:12:06', '161.92.21.12'),
('2', 'device 2', 23.50, 23.50, 31.45, 27.64, 68.34, 68.34, 68.34, 65.12, '2024-09-16 20:46:47', '161.92.21.12'),
('3', 'device 3', 31.00, 31.00, 31.00, 31.00, 60.00, 60.00, 60.00, 60.00, '2024-09-13 14:53:01', '161.92.21.12');

-- --------------------------------------------------------

--
-- Table structure for table `device_records`
--

CREATE TABLE `device_records` (
  `id` varchar(20) NOT NULL,
  `device_id` varchar(20) NOT NULL,
  `temp` decimal(5,2) NOT NULL,
  `hum` decimal(5,2) NOT NULL,
  `measurement_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `device_records`
--

INSERT INTO `device_records` (`id`, `device_id`, `temp`, `hum`, `measurement_time`) VALUES
('202409092203042', '2', 25.50, 51.00, '2024-09-09 22:03:04'),
('202409092203252', '2', 26.00, 51.00, '2024-09-09 22:03:25'),
('202409092207032', '2', 26.00, 51.00, '2024-09-09 22:07:03'),
('202409092207222', '2', 28.00, 51.00, '2024-09-09 22:07:22'),
('202409092207491', '1', 28.00, 51.00, '2024-09-09 22:07:49'),
('202409101423231', '1', 28.00, 51.00, '2024-09-10 14:23:23'),
('202409101423411', '1', 28.00, 51.00, '2024-09-10 14:23:41'),
('202409101423522', '2', 28.00, 51.00, '2024-09-10 14:23:52'),
('202409101424321', '1', 28.00, 51.00, '2024-09-10 14:24:32'),
('202409101424532', '2', 28.00, 51.00, '2024-09-10 14:24:53'),
('202409101428071', '1', 28.00, 51.00, '2024-09-10 14:28:07'),
('202409101619242', '2', 25.00, 67.00, '2024-09-10 16:19:24'),
('202409101620501', '1', 25.00, 67.00, '2024-09-10 16:20:50'),
('202409111503291', '1', 25.00, 67.00, '2024-09-11 15:03:29'),
('202409111505171', '1', 25.00, 67.00, '2024-09-11 15:05:17'),
('202409111505323', '3', 25.00, 67.00, '2024-09-11 15:05:32'),
('202409111507582', '2', 25.00, 67.00, '2024-09-11 15:07:58'),
('202409111634012', '2', 25.00, 67.00, '2024-09-11 16:34:01'),
('202409111636501', '1', 27.00, 67.00, '2024-09-11 16:36:50'),
('202409131451171', '1', 27.00, 67.00, '2024-09-13 14:51:17'),
('202409131453013', '3', 31.00, 60.00, '2024-09-13 14:53:01'),
('202409162011311', '1', 31.45, 60.45, '2024-09-16 20:11:31'),
('202409162011481', '1', 32.45, 60.45, '2024-09-16 20:11:48'),
('202409162012061', '1', 30.45, 60.45, '2024-09-16 20:12:06'),
('202409162039412', '2', 31.45, 60.45, '2024-09-16 20:39:41'),
('202409162041322', '2', 31.45, 60.45, '2024-09-16 20:41:32'),
('202409162041442', '2', 31.45, 65.45, '2024-09-16 20:41:44'),
('202409162046092', '2', 24.50, 68.00, '2024-09-16 20:46:09'),
('202409162046272', '2', 23.50, 68.00, '2024-09-16 20:46:27'),
('202409162046472', '2', 23.50, 68.34, '2024-09-16 20:46:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_records`
--
ALTER TABLE `device_records`
  ADD PRIMARY KEY (`id`),
  ADD KEY `device_id` (`device_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `device_records`
--
ALTER TABLE `device_records`
  ADD CONSTRAINT `device_records_ibfk_1` FOREIGN KEY (`device_id`) REFERENCES `devices` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
