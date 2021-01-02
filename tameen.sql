-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 01:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tameen`
--

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text,
  `mobile` varchar(15) NOT NULL,
  `question` text NOT NULL,
  `budget` text NOT NULL,
  `service` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `email`, `mobile`, `question`, `budget`, `service`, `created_at`, `updated_at`) VALUES
(1, 'test', 'mohanad@fekretyonline.com', '01000000000', 'yes', '100-200', 'd', '2019-12-12 07:38:24', '2019-12-12 07:38:24'),
(2, 'test', 'mohanad@fekretyonline.com', '01000000000', 'yes', '100-200', 'd', '2019-12-12 07:38:49', '2019-12-12 07:38:49'),
(3, 'test', 'mohanad@fekretyonline.com', '01000000000', 'yes', '100-200', 'd', '2019-12-12 07:38:52', '2019-12-12 07:38:52'),
(4, 'test', 'mohanad@fekretyonline.com', '01000000000', 'yes', '100-200', 'd', '2019-12-12 07:43:33', '2019-12-12 07:43:33'),
(5, 'test', 'mohanad.atef@fekretyonline.com', '01000000000', 'no', '300-400', 's', '2019-12-12 07:44:52', '2019-12-12 07:44:52'),
(6, 's', 'hager.emad@fekretyonline.com', '01000000000', 'no', '100-200', 'ss', '2019-12-12 07:46:39', '2019-12-12 07:46:39'),
(7, 's', 'hager.emad@fekretyonline.com', '01000000000', 'no', '100-200', 'ss', '2019-12-12 07:46:58', '2019-12-12 07:46:58'),
(8, 's', 'hager.emad@fekretyonline.com', '01000000000', 'no', '100-200', 'ss', '2019-12-12 07:47:16', '2019-12-12 07:47:16'),
(9, 's', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:04:04', '2019-12-12 08:04:04'),
(10, 's', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:04:42', '2019-12-12 08:04:42'),
(11, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:05:23', '2019-12-12 08:05:23'),
(12, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:05:40', '2019-12-12 08:05:40'),
(13, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:05:51', '2019-12-12 08:05:51'),
(14, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:06:06', '2019-12-12 08:06:06'),
(15, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:06:16', '2019-12-12 08:06:16'),
(16, 'test', 'mohanad@admin.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:11:13', '2019-12-12 08:11:13'),
(17, 'test', 'mohanad.atef@fekretyonline.com', '01000000000', 'no', '100-200', 's', '2019-12-12 08:23:47', '2019-12-12 08:23:47'),
(18, 'cuth T-shirt', '', '01000000000', 'لا', '44', 'sss', '2019-12-12 10:04:26', '2019-12-12 10:04:26'),
(19, 'cuth T-shirt', '', '01000000000', 'لا', '44', 'sss', '2019-12-12 10:04:51', '2019-12-12 10:04:51'),
(20, 'cuth T-shirt', '', '01000000000', 'لا', '44', 'sss', '2019-12-12 10:05:22', '2019-12-12 10:05:22'),
(21, 'T-shirt', 'admin@creativeindmena.com', '01000000000', 'نعم', '200-300', 's', '2019-12-12 10:10:24', '2019-12-12 10:10:24'),
(22, 'T-shirt', 'admin@creativeindmena.com', '01000000000', 'نعم', 'ss', 's', '2019-12-12 10:10:40', '2019-12-12 10:10:40'),
(23, 'T-shirt', 'mohanad@fekretyonline.com', '01000000000', 'نعم', '300-400', 'dd', '2019-12-12 10:14:35', '2019-12-12 10:14:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
