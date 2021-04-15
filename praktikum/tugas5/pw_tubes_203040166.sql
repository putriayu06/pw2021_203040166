-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:31 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040166`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `picture` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, '1.jpg', 'Backpack Women', 'Zalora', 'Women\'s backpack that is comfortable to use and has a large space and also has a beautiful color', 'Backpack Bag', '279.000'),
(2, '2.jpg', 'Clutch Bag', 'Zara', 'Lightweight and simple bag with premium materials', 'Clutch Bag', '650.000'),
(3, '3.jpg', 'Drawstring Bag', 'Zara', 'Has a very light weight when it is empty, but can accommodate quite a lot of luggage which is quite ', 'Drawstring Bag', '200.000	'),
(4, '4.jpg', 'Halfmoon Bag', 'Zalora', 'Zippered pastel leather sling bag Detachable and adjustable strap', 'Halfmoon Bag', '700.000'),
(5, '5.jpg', 'Hand Bag', 'Coach', 'A pebble textured handbag in a chic vintage feelin different colors Top cover with twist lock', 'Hand Bag', '500.000'),
(6, '6.jpg', 'Mini Backpack', 'Zara', 'A cool bag for young people who want to hang out', 'Mini Backpack', '400.000'),
(7, '7.jpg', 'Paper Bag', 'Lokal', 'Paper bags of various colors that are made of thick material and can be used as gift bags', 'Paper Bag', '15.000'),
(8, '8.jpg', 'Shoping Bag', 'Lokal', 'Shoping bags are bags that are designed with fabrics', 'Shoping Bag', '13.000'),
(9, '9.jpg', 'Sling Bag', 'Consina', 'High Quality Fabric, Black Size: 25 x 16 x 5 cm, simple bag, beautiful color, suitable for young ', 'Sling Bag', '250.000	'),
(10, '10.jpg', 'Tote Bag', 'Lokal', 'A bag that is simple and suitable for college use', 'Tote Bag', '35.000	'),
(38, '6.jpg', 'Simple Bag', 'zalora', 'tas simple untuk remaja', 'simple bag', '120.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
