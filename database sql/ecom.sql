-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2023 at 01:58 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Kitchen Utensils'),
(2, 'Grocery'),
(3, 'Makeup'),
(4, 'Electronics'),
(5, 'Clothes');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_details` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `img_url`, `category_id`, `product_details`, `price`) VALUES
(4, 'iPhone', 'iphone.jpg', 4, 'Protect skin from UV rays.', '10000'),
(5, 'Macbook', 'macbook.jpeg', 4, 'Apple 2020 MacBook Air Laptop M1 chip, 13.3-inch/33.74 cm Retina Display, 8GB RAM, 256GB SSD Storage, Backlit Keyboard, FaceTime HD Camera, Touch ID.', '200000'),
(6, 'Maggi', 'maggi.jpg', 2, 'Maggi is an international brand of seasonings, instant soups, and noodles that originated in Switzerland in the late 19th century. The Maggi company was acquired by Nestlé in 1947.', '120'),
(13, 'Rice', 'rice.jpeg', 2, 'Rice is the seed of the grass species Oryza sativa or, less commonly, O. glaberrima. The name wild rice is usually used for species of the genera Zizania and Porteresia, both wild and domesticated, although the term may also be used for primitive or uncul', '100'),
(15, 'Sunscreen spf 30', 'Lakme-sunscreen.jpeg', 3, 'Protect from UV rays.', '350'),
(16, 'Headset ', 'headset.jpeg', 4, '🎶 ', '10000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
