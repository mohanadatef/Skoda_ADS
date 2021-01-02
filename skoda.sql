-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2020 at 02:34 PM
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
-- Database: `skoda`
--

-- --------------------------------------------------------

--
-- Table structure for table `request_ads`
--

CREATE TABLE `request_ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` text NOT NULL,
  `mobile` text NOT NULL,
  `city` text NOT NULL,
  `car_model` text NOT NULL,
  `kind_request` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request_ads`
--

INSERT INTO `request_ads` (`id`, `first_name`, `last_name`, `email`, `mobile`, `city`, `car_model`, `kind_request`, `created_at`, `updated_at`) VALUES
(1, 'mohanad', 'atef', 'mohanad.atef@fekretyonline.com', '01063904738', 'Giza', 'Kodiaq', 'Book Test Drive', '2020-02-06 09:02:32', '2020-02-06 09:02:32'),
(2, 'mohanad', 'atef', 'mohanad.atef@fekretyonline.com', '01063904738', 'Cairo', 'Octavia', 'Receive Sales Call', '2020-02-06 09:02:59', '2020-02-06 09:02:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `remember_token`, `updated_at`) VALUES
(1, 'skoda', 'skoda@fekretyonline.com', '$2y$10$m99/llKmxVoy7dvHGOPLT.3w5bofTQRnTuQd11j50WDx7QPm5u/xe', '2020-02-19 12:24:53', 'IFHvOM4UsrkHMNOzk1OM1iExWSsdEaLOqFdT0RWxUJXHODsgTDOEdv1QIcmV', '2020-02-19 11:33:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `request_ads`
--
ALTER TABLE `request_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `request_ads`
--
ALTER TABLE `request_ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
