-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2020 at 06:13 AM
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
(2, 'Muhammad Asif', 'Street No 88, LHR', 'asif@gmail.com', 'myPass', '1995-01-12', 'on', '');

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
(45, 2, 78);

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
(74, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption\r\nLarge space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(75, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(76, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(77, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(78, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 39, 'Men Fashion'),
(79, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(80, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(81, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(82, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(83, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(84, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(85, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(86, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(87, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(88, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(89, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(90, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(91, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(92, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(93, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(94, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(95, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(96, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(97, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(98, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(99, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(100, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(101, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(102, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(103, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(104, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(105, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(106, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(107, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(108, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(109, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(110, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(111, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(112, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(113, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(114, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(115, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(116, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(117, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor'),
(118, ' Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear ', '1x Vintage Unisex Eyeglass Frame Glasses Retro Spectacles Clear Lens Eyewear', 6000, 'images/Glasses.jpg', 400, 'Men Fashion'),
(119, 'Waterproof Bike Frame Bag, Multi-Function Frame Top Tube Pannier Bag, Bicycle Rear Seat Trunk Bag, Bicycle Saddle Bag for Mountain Cycling', ' EVA hard shell three-dimensional shape, pressure shock absorption Large space to meet daily needs, carbon grain PU, water repellent, no touch legs when riding', 10000, 'images/bikebag.jpg', 300, 'Men Fashion'),
(120, 'Winter Sports Gloves,Touchscreen Warm Windproof Thermal Imported Glove', ' \r\n\r\nHigh Quality Material\r\n\r\nNon-slip wear\r\n\r\nWaterproof and windproof, warm and comfortable', 500, 'images/Gloves.jpg', 30, 'Sports & Outdoor'),
(121, 'GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L Black', 'The GEM GM5162 Business Casual Travel Multi-functional Laptop Backpack 28L is great for business or travel, definitely a great option! It is built with a large capacity main compartment for your laptop and smaller zipped pockets for daily essentials.', 4000, 'images/bagpack.jpg', 40, 'Men Fashion'),
(122, 'i7S TWS Bluetooth Connectivity Earbuds - White', 'Powerful noise de-noising circuit (active noise reduction)\r\n\r\nBluetooth use band: 2.4GHz\r\n\r\nOutput power: 30mW\r\n\r\nBluetooth distance: 6/8 meters\r\n\r\nIntelligent noise reduction.', 900, 'images/ipods.jpg', 4000, 'Sports & Outdoor');

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
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_p_id` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_CID` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_PID` FOREIGN KEY (`p_id`) REFERENCES `products` (`p_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_prod_cat` FOREIGN KEY (`p_category`) REFERENCES `categories` (`cat_name`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
