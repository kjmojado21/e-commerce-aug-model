-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 02:11 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aug-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'NOT PAID'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `item_id`, `user_id`, `status`) VALUES
(1, 1, 6, 'PAID'),
(2, 1, 6, 'PAID'),
(3, 2, 6, 'PAID'),
(4, 3, 6, 'PAID'),
(5, 4, 6, 'PAID'),
(6, 3, 6, 'PAID'),
(7, 2, 6, 'PAID'),
(8, 1, 6, 'PAID'),
(9, 2, 6, 'PAID'),
(10, 2, 6, 'PAID'),
(11, 2, 6, 'PAID'),
(12, 3, 6, 'PAID'),
(13, 1, 6, 'PAID'),
(14, 1, 6, 'PAID'),
(15, 2, 6, 'PAID'),
(16, 3, 6, 'PAID'),
(17, 4, 6, 'PAID'),
(18, 2, 6, 'PAID'),
(19, 3, 6, 'PAID'),
(20, 4, 6, 'PAID'),
(21, 1, 6, 'NOT PAID'),
(22, 2, 6, 'NOT PAID'),
(23, 2, 6, 'NOT PAID');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_desc`) VALUES
(1, 'sample_item_1', '300', 'sample_item_desc'),
(2, 'sample_item_2', '500', 'sample_item_desc'),
(3, 'sample_item_1', '300', 'sample_item_desc'),
(4, 'sample_item_2', '500', 'sample_item_desc'),
(5, 'a noisy keyboard', '1200000', 'a really noisy keyboard'),
(6, 'a heavy mouse', '500000', 'a really heavy mouse');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `lname`, `username`, `password`, `role`) VALUES
(5, 'Kurt John', 'Mojado', 'handsome', 'teacher', 'U'),
(6, 'use_kurt', 'user', 'user_3', 'ee11cbb19052e40b07aac0ca060c23ee', 'U');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
