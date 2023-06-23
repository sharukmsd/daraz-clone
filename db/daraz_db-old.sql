-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 11:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daraz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_name`) VALUES
('Automotive & Moterbike'),
('Babies & Toys'),
('Electronic Accessories'),
('Electronic Devices'),
('Groceries & Pets'),
('Health & Beauty'),
('Home & Lifestyle'),
('Men Fashion'),
('Sports & Outdoor'),
('TV & Home Appliances'),
('Watches, Badges & Jewelry'),
('Women Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(30) NOT NULL,
  `c_address` varchar(255) DEFAULT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_password` varchar(50) NOT NULL,
  `c_dob` date DEFAULT NULL,
  `c_gender` varchar(6) NOT NULL,
  `c_image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_name`, `c_address`, `c_email`, `c_password`, `c_dob`, `c_gender`, `c_image`) VALUES
(1, 'Ali', 'House 123, Street ABC, LHR', 'email@edu.com', 'myPass', '2012-12-12', 'MALE', ''),
(2, 'cvghdsf', 'sdfsdf', '', 'myfaceback', '2020-01-07', 'on', 'Capture.PNG'),
(3, 'sadsad', 'sdkvjk sdjfjhs', '', 'mypass', '2020-01-15', 'on', 'Capture.PNG'),
(4, 'sdfsdfsdfdsfsd', 'sdfsdfsdfsdf', '', 'myfaceback', '2020-01-15', 'on', 'Capture.PNG'),
(6, 'sadsad', 'sadf', '', 'myfaceback', '2020-01-21', 'on', 'Capture.PNG'),
(7, 'czxsdf', 'dzfsdfsd', '', 'myfaceback', '2020-01-07', 'on', 'Capture.PNG'),
(8, 'dsaasd', '', '', '', '0000-00-00', 'on', 'Capture.PNG'),
(9, 'fdgsadas', '', '', '', '0000-00-00', 'on', 'Capture.PNG'),
(10, 'sdfsdsdfsd', 'sdfsdfsdfsdfsdfsdf', '', 'mypass', '2020-01-14', 'on', ''),
(11, '', '', '', '', '0000-00-00', 'on', ''),
(12, 'wdsadfsdf', 'sdfsdfdsfsdfsdfdsf', '', 'myfaceback', '2020-01-14', 'on', ''),
(13, 'sadfsdsdfds', '', '', '', '0000-00-00', 'on', ''),
(14, '', '', '', '', '0000-00-00', 'on', ''),
(15, '', '', '', '', '0000-00-00', 'on', ''),
(16, '', '', 'james.den4@yahoo.com', 'myfaceback', '0000-00-00', 'on', ''),
(17, '', '', '', '', '0000-00-00', '', ''),
(18, '', '', '', '', '0000-00-00', 'on', ''),
(19, '', '', '', '', '0000-00-00', 'on', ''),
(20, '', '', '', '', '0000-00-00', 'on', ''),
(21, '', '', '', '', '0000-00-00', 'on', ''),
(22, '', '', '', '', '0000-00-00', 'on', ''),
(23, 'asdsasad', 'tryrty', 'email@edu.com', 'myPass', '2020-01-22', 'on', ''),
(24, '', '', '', '', '0000-00-00', 'on', ''),
(25, '', '', '', '', '0000-00-00', 'on', ''),
(26, '', '', '', '', '0000-00-00', 'on', ''),
(27, '', '', '', '', '0000-00-00', 'on', ''),
(28, '', '', '', '', '0000-00-00', 'on', ''),
(29, '', '', '', '', '0000-00-00', 'on', ''),
(30, '', '', '', '', '0000-00-00', 'on', ''),
(31, '', '', '', '', '0000-00-00', 'on', ''),
(32, '', '', '', '', '0000-00-00', 'on', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `c_id`, `p_id`) VALUES
(5, 1, 46),
(6, 1, 46),
(7, 1, 46),
(8, 1, 46),
(9, 1, 46),
(10, 1, 46),
(11, 1, 46),
(12, 1, 46),
(13, 1, 46),
(14, 1, 46),
(15, 1, 46),
(23, 1, 46),
(24, 1, 46),
(25, 1, 46),
(37, 1, 46),
(39, 1, 46),
(41, 23, 65),
(42, 23, 46);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_description` varchar(255) DEFAULT NULL,
  `p_price` int(11) NOT NULL,
  `p_image` varchar(100) NOT NULL,
  `p_quantity` int(11) NOT NULL,
  `p_category` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `p_name`, `p_description`, `p_price`, `p_image`, `p_quantity`, `p_category`) VALUES
(46, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, B', ' EVA hard shell three-dimensional shape, pressure shock absorption\r\nLarge space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding\r\nThe built-in net bag is stored in order to prevent the quality inspection from scratching eac', 1700, 'uploads/bikebag.jpg', 129, 'Sports & Outdoor'),
(65, 'Ipods', '45645 nwefg dfg gdfg dg', 10098, 'uploads/ipods.jpg', 45644, 'Sports & Outdoor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD KEY `fk` (`c_id`),
  ADD KEY `fk_p_id` (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `fk_CID` (`c_id`),
  ADD KEY `fk_PID` (`p_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `fk_prod_cat` (`p_category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_CID` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`),
  ADD CONSTRAINT `fk_PID` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_prod_cat` FOREIGN KEY (`p_category`) REFERENCES `categories` (`cat_name`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
