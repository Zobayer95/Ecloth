-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 06:30 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `adminid` int(100) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile`, `adminid`, `location`) VALUES
(1, 'fahad', '01866746065', 12345, 'khulna');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Addidas'),
(2, 'Armani'),
(3, 'Denim'),
(4, 'Easy'),
(5, 'Gussi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(7, 1, '::1', 4, 1),
(8, 6, '::1', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'T-Shirt'),
(2, 'Shirt'),
(3, 'Jeans'),
(4, 'Three Quarter'),
(5, 'Trowser'),
(6, 'Shorts');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL,
  `delivery_status` varchar(100) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`, `delivery_status`) VALUES
(1, 2, 1, 1, '07M47684BS5725041', 'Completed', 'Delivered'),
(2, 2, 1, 1, '07M47684BS5725041', 'Completed', 'Delivered'),
(8, 9, 7, 2, '23erghnhtre2', 'ldfmgnb', 'Pending'),
(9, 9, 7, 2, '23erghnhtre2', 'ldfmgnb', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `subadmin` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `subadmin`) VALUES
(1, 1, 1, 'Men TShirt', 320, 'Good', 'item1.jpg', '1001', 'Anik Store'),
(3, 3, 3, 'Casual Jeans', 1100, 'Good', 'item4.jpg', '1011', 'Vip Store'),
(4, 4, 4, 'Three quarter', 380, 'Good', 'item3.jpg', '1013', 'Anik Store'),
(5, 5, 5, 'Trowser', 290, 'Good', 'item5.jpg', '1015', 'Vip Store'),
(6, 1, 1, 'Black stylish tshirt for men', 280, 'good', 'item6.jpg', '1018', 'Zisan Store'),
(7, 1, 1, 'Half sleeve tshirt', 290, 'good', 'item7.jpg', '1019', 'Roman Store'),
(8, 1, 2, 'Can you escape', 320, 'good', 'item8.jpg', '1020', 'Roman Store'),
(9, 1, 3, 'Black Ash Tshirt', 300, 'good', 'item9.jpg', '1026', 'Roman Store'),
(10, 1, 3, 'Amazing Tshirt', 320, 'high', 'item10.jpg', '1027', 'Zisan Store'),
(11, 1, 4, 'Blue Tshirt', 260, 'good', 'item11.jpg', '1028', 'Roman Store'),
(12, 1, 4, 'Graphic Designer T-Shirt', 300, 'good', 'item12.jpg', '1030', 'Vip Store'),
(13, 6, 0, 'Stylish short for men', 220, 'Good', 'item45.jpg', '1031', 'Zisan Store'),
(14, 3, 0, 'Stylish Jeans', 1100, 'Good', 'item28.jpg', '1051', 'Vip Store'),
(15, 3, 0, 'Jeans for men', 920, 'very good', 'item24.jpg', '1050', 'Roman Store'),
(17, 2, 0, 'Men TShirt high', 320, 'Good', 'item13.jpg', '1004', 'Vip Store'),
(18, 6, 0, 'Sports Shorts For Men', 220, 'Good', 'item47.jpg', '1024', 'VIP Store'),
(19, 5, 0, 'Sporty Trowser ', 550, 'Stylish and soft trowser', 'item42.jpg', '1025', 'VIP Store'),
(21, 2, 2, 'Men Casual Shirt', 750, 'Good', 'item2.jpg', '1010', 'Anik Store'),
(22, 5, 380, 'Trowser for men', 320, 'High Quality', 'item39.jpg', '2002', 'VIP Store'),
(23, 1, 220, 'fahad', 1, 'Good', 'gents-formal-250x250.jpg', '10033', 'VIP Store'),
(24, 1, 900, 'Black Jeans for men', 1, 'High Quality', 'item28.jpg', '10002', 'VIP Store'),
(25, 1, 860, 'Black Jeans for men', 900, 'High Quality', 'item25.jpg', '10023', 'VIP Store');

-- --------------------------------------------------------

--
-- Table structure for table `subadmin`
--

CREATE TABLE IF NOT EXISTS `subadmin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `adminid` varchar(70) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subadmin`
--

INSERT INTO `subadmin` (`id`, `name`, `mobile`, `adminid`, `location`) VALUES
(11, 'VIP Store', '01752174924', '123456', 'khulna'),
(12, 'Zisan Store', '01752174924', '123456', 'khulna'),
(13, 'Roman Store', '01866746065', '123456', 'khulna'),
(10, 'Anik Store', '01866746065', '12345', 'khulna');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'ed', 'wr', 'khan.faha@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1866746065', 'e', 'g'),
(4, 'fahad', 'mahmud', 'mahmudfahad7@gmail.com', 'f7f89fc94516e64f26476e35a737c6da', '1866746065', 'Dargapara', 'khulna'),
(5, 'Rahul', 'Biswas', 'fazhad.cse0@gmail.com', 'f7f89fc94516e64f26476e35a737c6da', '1866746065', 'Dargapara', 'khulna'),
(6, 'Anik', 'Rahman', 'anik7@gmail.com', 'f7f89fc94516e64f26476e35a737c6da', '0186674606', 'Dargapara,khulna', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `subadmin`
--
ALTER TABLE `subadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `subadmin`
--
ALTER TABLE `subadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
