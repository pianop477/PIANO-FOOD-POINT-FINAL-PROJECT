-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2022 at 11:26 AM
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
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `street` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `directory` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `phone`, `street`, `email`, `password`, `directory`) VALUES
(7, 'Frank', 'Piano', '0628390107', 'Kikuyu', 'frank@piano.com', '$2y$10$fKGKBra0l5ixQ.zKL5yZ6uyA1TbGAxwuRpk4xdPRGmT8xK0BpZ5sC', 1),
(14, 'Diti', 'Geraz', '0678693443', 'Nzugun', 'ditric10@gmail.com', '$2y$10$pPAMUtMspRpI/MvGcDJvG.DqPun4NOnl7eEfbNAkmfNtXfdDpniBi', 0),
(15, 'Suse', 'Emma', '0787105597', 'Four Ways', 'reubenwamilika@gmail.com', '$2y$10$ApIOI0EqPoqsGzSlktHJu.Sj7gRN0fB8XoUoGrisyu59JrWyMeso2', 0),
(16, 'Annie', 'David', '0672007713', 'Kibaigwa', 'annie@gmail.com', '$2y$10$CGvVDqp0AoYH.Qu6pXqbGuW3uEjluglXcPCo7VJWAQ4W.p09G/2k6', 0),
(17, 'Tiffany', 'Frank', '0654706688', 'Image', 'tiffany@gmail', '$2y$10$2ETvk0Nu4Kxn4547LdhNY.ghQPyXO7/BYn5O8BXBZ.jYueTLZxRP6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `menu_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_price`) VALUES
(18, 'SAUSAGE', '3000.00'),
(20, 'PILAU KUKU', '4000.00'),
(21, 'COFEE', '1500.00'),
(22, 'BIRIANI KUKU', '5000.00'),
(23, 'PIZZA', '4000.00'),
(24, 'JUICE', '1000.00'),
(25, 'WALI SAMAKI', '10000.00'),
(26, 'BURGER', '8000.00'),
(27, 'MTOLI ', '5000.00'),
(28, 'CHIPS KUKU', '10000.00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_name` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` datetime DEFAULT current_timestamp(),
  `total_price` decimal(10,2) DEFAULT NULL,
  `reply` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
