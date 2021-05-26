-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2021 at 04:18 PM
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
  `description` varchar(900) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, '1.jpg', 'Backpack Women', 'Zalora', 'Women backpack with beautiful color', 'Backpack Bag', '279.000'),
(2, '2.jpg', 'Clutch Bag', 'Zara', 'Lightweight and simple bag with premium materials', 'Clutch Bag', '500.000'),
(3, '3.jpg', 'Drawstring Bag', 'Zara', 'Has a light weight and simple for formal events', 'Drawstring Bag', '300.000	'),
(4, '4.jpg', 'Halfmoon Bag', 'Zalora', 'Black zippered leather sling bag, a bag that can be removed and adjusted', 'Halfmoon Bag', '500.000'),
(5, '5.jpg', 'Hand Bag', 'Coach', 'A pebble textured handbag in a chic vintage feelin different colors Top cover with twist lock', 'Hand Bag', '500.000'),
(6, '6.jpg', 'Mini Backpack', 'Zara', 'A cool bag for young people who want to hang out', 'Mini Backpack', '400.000'),
(7, '7.jpg', 'Paper Bag', 'Lokal', 'A paper bag made of thick material and can be used as a gift bag', 'Paper Bag', '15.000'),
(8, '8.jpg', 'Shoping Bag', 'Lokal', 'A shopping bag is a bag designed with fabric that can carry various items', 'Shoping Bag', '20.000'),
(9, '9.jpg', 'Sling Bag', 'Consina', 'High Quality Material, Pink, with a size that is not too big, suitable for young people', 'Sling Bag', '250.000'),
(10, '10.jpg', 'Tote Bag', 'Lokal', 'A bag that is simple and suitable for use on campus with space that can store a laptop', 'Tote Bag', '35.000	'),
(61, '8.jpg', 'Tote bag ', 'Zara', 'Simple cute bag for college wear', 'Tote bag', '100.000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'ayu', '$2y$10$pl1vyDExvi5pMwbNbTwU9.vVcVsesGeTACliIdXUcRgjAXzRDMskG'),
(3, 'ayu putri', '$2y$10$kGwy3SxcvweSKq/g0y/YROYupqP6.OwZcy1iGl3E2y.CwGj3.xy2C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
