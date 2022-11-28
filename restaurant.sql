-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2022 at 06:50 PM
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
(7, 'Frank', 'Piano', '0678669000', 'Kikuyu', 'frank@piano.com', '$2y$10$mtbPJCCuF86q8Bx6ZqfQqelpcF.cdTs5fQyF4s5fJHxJg4uTkH22.', 1),
(14, 'Diti', 'Geraz', '0678693443', 'Nzugun', 'ditric10@gmail.com', '$2y$10$pPAMUtMspRpI/MvGcDJvG.DqPun4NOnl7eEfbNAkmfNtXfdDpniBi', 0),
(16, 'Annie', 'David', '0672007713', 'Kibaigwa', 'annie@gmail.com', '$2y$10$CGvVDqp0AoYH.Qu6pXqbGuW3uEjluglXcPCo7VJWAQ4W.p09G/2k6', 0),
(17, 'Tiffany', 'Frank', '0786943883', 'Image', 'tiffany@gmail', '$2y$10$RWha6RhRJWkItFEWbjeHFerOIcu7hk0mUsMPw9OX2nr9FdCz7hLmO', 0),
(19, 'nelly', 'magoti', '0710079482', 'Image', 'nelly@gmail.com', '$2y$10$Exvkpjpgf8Xt.ZfxLGKJeO4JS9Jt938moYWMwADm51SZCYKp7Di4C', 0),
(20, 'orpa', 'paul', '0788631164', 'kikuyu', 'olipahpaul@gmail.com', '$2y$10$HUd6dgTbzk9TWrcGIcJlkeemboObobKdK6V9jbCL9nTFdbuT0nHRK', 0);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(30) NOT NULL,
  `menu_price` decimal(10,2) NOT NULL,
  `food_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `menu_price`, `food_img`) VALUES
(3, 'PIZZA', '8000.00', 'pizza.jpg'),
(4, 'BIRIANI', '10000.00', 'biriyani.jpg'),
(5, 'STRAWBERRY JUICE', '5000.00', 'STRAWBERY JUICE.jpg'),
(6, 'BARGER', '10000.00', 'BARGER.jpg'),
(7, 'DONAT', '3000.00', 'DONAT.jpg'),
(8, 'MILK COFFEE', '4000.00', 'COFFEE.jpg'),
(9, 'CHICKEN CHIPS', '10000.00', 'chips.jpg'),
(10, 'UGALI SAMAKI', '5000.00', 'UGALI FISH.jpg');

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
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_name`, `quantity`, `order_date`, `total_price`, `reply`) VALUES
(41, 17, 'STRAWBERRY JUICE', 1, '2022-11-16 09:33:39', '5000.00', 1),
(42, 19, 'MILK COFFEE', 2, '2022-11-17 00:14:11', '8000.00', 0),
(43, 17, 'DONAT', 1, '2022-11-21 21:59:17', '3000.00', 0),
(44, 17, 'UGALI SAMAKI', 1, '2022-11-27 18:53:31', '5000.00', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
