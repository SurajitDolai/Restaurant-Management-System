-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 10:57 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email_id` varchar(250) NOT NULL,
  `pass` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `email_id`, `pass`) VALUES
(1, 'Abhishek Prasad', 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `area_id` int(11) NOT NULL,
  `area_name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`area_id`, `area_name`) VALUES
(1, 'Saltlake'),
(2, 'Kestopur'),
(7, 'Metropolitan');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `ct_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `c_date` date NOT NULL,
  `qty` varchar(3) NOT NULL,
  `c_price` varchar(4) NOT NULL,
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`ct_id`, `item_id`, `id`, `c_date`, `qty`, `c_price`, `status`) VALUES
(10, 27, 1, '2018-05-09', '18', '85', '1'),
(11, 16, 1, '2018-05-09', '3', '110', '1'),
(12, 21, 1, '2018-05-09', '1', '130', '1'),
(13, 27, 2, '2018-05-10', '1', '85', '0'),
(15, 25, 1, '2018-05-11', '1', '150', '1'),
(16, 14, 1, '2018-05-11', '3', '180', '1'),
(18, 25, 7, '2018-05-25', '3', '150', '1'),
(19, 15, 8, '2018-06-22', '1', '140', '1'),
(20, 16, 8, '2018-06-22', '2', '110', '1'),
(21, 12, 1, '2018-07-09', '2', '110', '1'),
(25, 14, 9, '2018-07-11', '1', '180', '1'),
(26, 15, 9, '2018-07-11', '2', '140', '1'),
(27, 16, 9, '2018-07-11', '2', '110', '1'),
(28, 20, 1, '2018-07-12', '2', '150', '1'),
(29, 15, 11, '2018-07-23', '2', '140', '0'),
(30, 27, 12, '2018-07-27', '1', '85', '1'),
(32, 15, 12, '2018-07-27', '3', '140', '1'),
(33, 14, 12, '2018-07-27', '5', '180', '0'),
(34, 25, 12, '2018-07-27', '2', '150', '0'),
(35, 23, 1, '2023-06-29', '2', '140', '0'),
(36, 8, 1, '2023-06-29', '1', '100', '0');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `c_name` varchar(220) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL,
  `contact_no` varchar(200) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `c_name`, `email_id`, `password`, `contact_no`, `address`) VALUES
(1, 'Saumitra Das', 'sau@gmail.com', '123456', '987543210', 'sfgfdsf'),
(2, 'Rohan Banerjee', 'rohan@gmail.com', '123456', '9876543210', 'Saltlake'),
(6, 'Avishek Prasad', 'avi@gmail.com', '123456', '9876543210', 'Saltlake'),
(7, 'Ranjib Sahoo', 'ranjib@gmail.com', '123456', '9876543210', 'Kolkata'),
(8, 'Malay Bera', 'malay@gmail.com', '123456', '9876543210', 'Shyambazar'),
(9, 'Puja Pal', 'puja@gmail.com', '123456', '9876543210', 'Saltlake'),
(10, 'Avik Dey', 'avik@gmil.com', '123456', '9876543210', 'Birati'),
(11, 'Arunita Mukherjee', 'arunita@gmail.com', '123456', '7890123456', 'Kolkata'),
(12, 'Partha Maondal', 'partha@gmail.com', '123456', '7894561230', 'Kolkata');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `spicy` varchar(200) NOT NULL,
  `price` varchar(220) NOT NULL,
  `f_path` varchar(220) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `name`, `spicy`, `price`, `f_path`, `menu_id`) VALUES
(4, 'Chicken Chow', 'medium', '150', 'item_image/84318310chicken chow.jpg', 8),
(5, 'Chicken Kassa', 'yes', '110', 'item_image/44953937chicken kassa.jpg', 6),
(8, 'Veg chow', 'medium', '100', 'item_image/82659813veg chow.jpg', 7),
(10, 'Chicken Chow', 'medium', '150', 'item_image/95342050chick friedrice.jpg', 8),
(11, 'Chicken Cutlet Sandwich', 'no', '85', 'item_image/55260515chicken cutlet sandwich.jpeg', 12),
(12, 'Chicken Salad', 'no', '110', 'item_image/827868chicken salad.jpg', 14),
(13, 'Chicken Soup', 'medium', '90', 'item_image/2616590chicken soup.jpg', 3),
(14, 'Tandoori Chicken', 'medium', '180', 'item_image/29127076chicken tandoori.jpg', 16),
(15, 'Chicken Tikka', 'yes', '140', 'item_image/38780859chicken tikka.jpg', 16),
(16, 'Chicken Biryani', 'medium', '110', 'item_image/18365590Chicken-Biryani3.jpg', 6),
(17, 'Chicken Chow', 'medium', '150', 'item_image/92091852Chicken-Manchurian.jpg', 8),
(18, 'Chicken Chow', 'medium', '150', 'item_image/58895926EGG.FRIED.RICE.44(1).jpg', 8),
(19, 'Hara Bhara Kabab', 'medium', '90', 'item_image/39408681hara-bhara-kabab.jpg', 11),
(20, 'Kadhai Chicken', 'yes', '150', 'item_image/98657614kadhai chicken.jpg', 6),
(21, 'Mutton Biryani', 'medium', '130', 'item_image/7705574mutton biryani.jpg', 6),
(22, 'Paneer Tikka', 'yes', '120', 'item_image/40538082paneer tikka.jpeg', 11),
(23, 'Paneer Manchurian', 'medium', '140', 'item_image/5904235panner manchurian.jpg', 7),
(24, 'Green Salad', 'no', '50', 'item_image/14513178salads.jpg', 13),
(25, 'Tangri Tandoor', 'medium', '150', 'item_image/22273038tangri tandoor.jpg', 16),
(26, 'Veg Fried Rice', 'medium', '100', 'item_image/11095186veg fried rice.jpg', 7),
(27, 'Veg Soup', 'no', '85', 'item_image/35425804veg soup.jpg', 2),
(28, 'Veg Cutlet', 'medium', '75', 'item_image/81201876veg-cutlet-recipe.jpg', 9),
(29, 'Chicken_Cutlets', 'medium', '100', 'item_image/57061015chicken-cutlets.jpg', 10),
(30, 'toast', 'medium', '55', 'item_image/99702572toast.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(250) NOT NULL,
  `category` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `category`) VALUES
(2, 'Soup', 'Veg'),
(3, 'Soup', 'Non-veg'),
(5, 'Indian', 'Veg'),
(6, 'Indian', 'Non-veg'),
(7, 'Chinese', 'Veg'),
(8, 'Chinese', 'Non-veg'),
(9, 'Snacks', 'Veg'),
(10, 'Snacks', 'Non-veg'),
(11, 'Starters', 'Veg'),
(12, 'Starters', 'Non-veg'),
(13, 'Salads', 'Veg'),
(14, 'Salads', 'Non-veg'),
(15, 'Tandoor', 'Veg'),
(16, 'Tandoor', 'Non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `contact_no` varchar(250) NOT NULL,
  `delivery_address` varchar(250) NOT NULL,
  `order_date` date NOT NULL,
  `ct_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `sub_id`, `contact_no`, `delivery_address`, `order_date`, `ct_id`, `id`) VALUES
(4, 4, '9876543210', 'BD-90', '2018-05-10', 10, 1),
(5, 4, '9876543210', 'BD-90', '2018-05-10', 11, 1),
(6, 4, '9876543210', 'BD-90', '2018-05-10', 12, 1),
(7, 4, '7894561230', 'BD 57, Sector 1, Kolkata -67', '2018-05-11', 15, 1),
(8, 4, '7894561230', 'BD 57, Sector 1, Kolkata -67', '2018-05-11', 16, 1),
(9, 4, '9876543210', 'BD-99, Kolkata-64', '2018-05-25', 18, 7),
(10, 4, '7894561230', 'BD-33, Saltlake, Sector 1', '2018-06-22', 19, 8),
(11, 4, '7894561230', 'BD-33, Saltlake, Sector 1', '2018-06-22', 20, 8),
(12, 4, '9876543210', 'BD-41, Sector 1, Saltlake', '2018-07-11', 25, 9),
(13, 4, '9876543210', 'BD-41, Sector 1, Saltlake', '2018-07-11', 26, 9),
(14, 4, '9876543210', 'BD-41, Sector 1, Saltlake', '2018-07-11', 27, 9),
(15, 4, '6543210789', 'BB-36, Sector 1', '2018-07-27', 30, 12),
(16, 4, '6543210789', 'BB-36, Sector 1', '2018-07-27', 32, 12),
(17, 9, '9876543210', 'BD-23, Sector-1, Saltlake', '2023-06-29', 21, 1),
(18, 9, '9876543210', 'BD-23, Sector-1, Saltlake', '2023-06-29', 28, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_area`
--

CREATE TABLE `sub_area` (
  `sub_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `sub_name` varchar(220) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_area`
--

INSERT INTO `sub_area` (`sub_id`, `area_id`, `sub_name`) VALUES
(4, 1, 'BB Block'),
(8, 2, 'Keshtopur Bazar'),
(9, 1, 'BD Block'),
(10, 1, 'BC Block'),
(11, 1, 'AB Block');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sub_area`
--
ALTER TABLE `sub_area`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sub_area`
--
ALTER TABLE `sub_area`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
