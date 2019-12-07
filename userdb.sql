-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 11:22 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagestore`
--

CREATE TABLE `imagestore` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `image_type` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `imagestore`
--

INSERT INTO `imagestore` (`id`, `username`, `image`, `image_type`, `description`) VALUES
(1, 'jami', '309436.jpg', 'cars', 'shelby Mustang'),
(2, 'jami', 'img_11.jpg', 'cars', 'Controllable as hell'),
(3, 'jami', 'img_10.jpg', 'boats', 'Testing purpose'),
(4, 'jami', 'nature_big_1.jpg', 'nature', 'trees'),
(5, 'jami', 'nature_big_2.jpg', 'nature', 'trees'),
(6, 'jami', 'nature_big_3.jpg', 'nature', 'trees'),
(7, 'jami', 'nature_big_4.jpg', 'nature', 'trees'),
(8, 'jami', 'nature_big_5.jpg', 'nature', 'trees'),
(9, 'asif', 'img_1.jpg', 'nature', 'asdfa'),
(10, 'jami', 'img_13.jpg', 'trucks', 'Semi Truck'),
(11, 'jami', 'img_9.jpg', 'cars', 'sports car'),
(12, 'jami', 'hero_bg_1.jpg', 'people', '1'),
(13, 'jami', 'img_2.jpg', 'people', '2'),
(14, 'jami', 'img_3.jpg', 'people', '3'),
(15, 'jami', 'hero_bg_2.jpg', 'people', '4');

-- --------------------------------------------------------

--
-- Table structure for table `layout`
--

CREATE TABLE `layout` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `layout` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `layout`
--

INSERT INTO `layout` (`id`, `username`, `layout`) VALUES
(1, 'polin', 'standard'),
(3, 'asif', 'img'),
(4, 'jami', 'standard');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`) VALUES
(1, 'polin', '123', 'admin'),
(2, 'jami', '1234', 'customer'),
(3, 'fuzail', '123', 'customer'),
(4, 'habib123', '123', 'customer'),
(5, 'sarah', '123', 'customer'),
(6, 'asif', '123', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagestore`
--
ALTER TABLE `imagestore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layout`
--
ALTER TABLE `layout`
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
-- AUTO_INCREMENT for table `imagestore`
--
ALTER TABLE `imagestore`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
