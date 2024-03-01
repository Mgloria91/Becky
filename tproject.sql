-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2024 at 08:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(100) NOT NULL,
  `name` int(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(100) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `name`, `email`, `password_hash`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(3, 0, 'becky@gmail.com', '$2y$10$RO5/rAK8hLO/nxINl.aBHe66YpFm1IO/GcP5/5CbIilug9cSCs8kK', NULL, NULL),
(4, 0, 'becky12@gmail.com', '$2y$10$.WBYPeKCmtMdMxB64m60BO5T9tTN0FNch3tWKodNxnir7uDdWVTB6', NULL, NULL),
(5, 0, 'becky@gmail.com', '$2y$10$zVYL5tTvfe1KrCG0X6tjW.e9OUMCAH6YXSiuUAyRF8ZN4e6s6E2y2', NULL, NULL),
(6, 0, 'ogendibecky14@gmail.com', '$2y$10$zdxq7RJDZ7buuXS9bMrN7.SbOnhSNGZsJzehOl6L9UzT89x3thiHe', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `complain` varchar(1000) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `name`, `email`, `complain`, `phone`) VALUES
(1, 'becky wekesa', 'ogendibecky14@gmail.com', 'shenzi', 0),
(2, 'becky wekesa', 'ogendibecky14@gmail.com', 'sedrtyu9', 1123456789);

-- --------------------------------------------------------

--
-- Table structure for table `pozze`
--

CREATE TABLE `becky` (
  `id` int(11) NOT NULL,
  `first_name` varchar(244) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data fo]r table `pozze`
--

INSERT INTO `becky` (`id`, `first_name`, `last_name`, `age`) VALUES
(2, 'becky', 'wekesa', 22),
(3, 'becky', 'w', 22);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `email`, `address`) VALUES
(1, 'becky wekesa', 'ogendibecky14@gmail.com', 'kampi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_token_hash` varchar(64) DEFAULT NULL,
  `reset_token_expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password_hash`, `reset_token_hash`, `reset_token_expires_at`) VALUES
(10, 'becky wekesa', 'ogendibecky14@gmail.com', '$2y$10$zkYxBp1ausrfwTkivZ9eVuvjDlOdc6hCX60j54gSZ8q2haMn.dcde', '40627fa105e96278de0f4899592a3b7619d6a77a3a926e6826ee8b071daf13c6', '2024-02-01 12:14:25'),
(11, 'gloria', 'glorimoraa@gmail.com', '$2y$10$LkMrpx0xiWMVWLYEdTV2b.TzNkUvwpbfbBK6feRrQniXhFwJHTaCC', NULL, NULL),
(12, 'ogendibecky14', 'ogendibecky143@gmail.comm', '$2y$10$i.EIvBDfnup42uH6urJgw.FXi8ws0MMN92MBnvnKrm/Yc2J/dUgNK', NULL, NULL),
(14, 'ogendibecky14', 'ogendibecky14@gmail.com', '$2y$10$DQCkpzbSvq8mPBNNgLfrCOoxQ4UF.O2dzd9IIeZVUVd42rMyfcF/W', NULL, NULL),
(15, 'ogendibecky14', 'ogendibecky1470@gmail.com', '$2y$10$bG/IUePM37GzVmtJxeVl3evgdqCH5qSHkIbZ0dWLPSlAKUYb2ycE.', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pozze`
--
ALTER TABLE `becky`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `reset_token_hash` (`reset_token_hash`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pozze`
--
ALTER TABLE `becky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
