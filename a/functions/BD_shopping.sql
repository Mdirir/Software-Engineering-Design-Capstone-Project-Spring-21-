-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2021 at 06:57 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mogadishu_shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_country` text NOT NULL,
  `admin_about` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_job` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_country`, `admin_about`, `admin_contact`, `admin_job`) VALUES
(9, 'Dirir', 'moodirir@gmail.com', '123', 'LOGO.PNG', 'Bangladeshh', 'I AM Coool', 'at Mars', 'Front-end Dev'),
(12, '', 'Zannatun@gmail.com', '123', 'zaytuna.jpg', 'Bangladesh', 'I do modeling and a software Engineer student', '1234456', 'Model');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'men', 'men\'s clothes are clothes that worn bymen. All kind of men\'\'s clothes are available'),
(2, 'Women', 'women\'s clothes are clothes that worn by women. All kind of women\'\'s clothes are available'),
(3, 'Kids', 'Kid\'\'s clothes are clothes that worn by kids. All kind of kid\'\'s clothes are available'),
(4, 'Others', 'Other product like electronic may also available in the clickor online store');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_region` text NOT NULL,
  `customer_dist` text NOT NULL,
  `customer_contact` text NOT NULL,
  `customer_adress` text NOT NULL,
  `customer_gender` varchar(10) NOT NULL,
  `customer_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_region`, `customer_dist`, `customer_contact`, `customer_adress`, `customer_gender`, `customer_ip`) VALUES
(10, 'm d', 'moodirir@gmail.com', '123', 'Bangladesh', '123', '123', '18/G Tallbag, Indra Rd, Shukrabad, Dhaka', 'Male', '::1'),
(15, 'Zannatun', 'Zannatun@gmail.com', '123', 'Dhaka', 'Dhanmondhi', '1234456', 'Centre of Mars', 'female', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(2, 1, 24, 1955852541, 2, 'Small', '2020-09-02', 'pending'),
(4, 5, 40, 1775153178, 2, 'Small', '2020-09-02', 'Complete'),
(71, 10, 27, 298211, 1, 'medium', 'Sunday-March-2021', 'Complete'),
(75, 10, 50, 478679, 1, 'small', 'Saturday-April-2021', 'pending'),
(76, 10, 50, 218863, 1, 'small', 'Saturday-April-2021', 'Complete'),
(77, 10, 35, 964226, 5, 'large', 'Friday-April-2021', 'pending'),
(79, 10, 20, 597158, 2, 'small', 'Saturday-April-2021', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `kid_categories`
--

CREATE TABLE `kid_categories` (
  `k_cat_id` int(10) NOT NULL,
  `k_cat_title` text NOT NULL,
  `k_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kid_categories`
--

INSERT INTO `kid_categories` (`k_cat_id`, `k_cat_title`, `k_cat_desc`) VALUES
(1, 'Jackets', 'A jacket is a mid-stomach length garment for the upper body'),
(2, 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot'),
(3, 'T-Shirt', 'A T-shirt is a style of fabric shirt named after the T shape of its body and sleeves'),
(4, 'Shirts', 'A shirt is a cloth garment for the upper body (from the neck to the waist).'),
(5, 'Trouser', 'Trousers or pants  are an item of clothing that worn from the waist to the ankles, covering both legs separately.'),
(6, 'Dress', 'A dress  is a garment traditionally worn by women or girls consisting of a skirt with an attached bodice');

-- --------------------------------------------------------

--
-- Table structure for table `men_categories`
--

CREATE TABLE `men_categories` (
  `m_cat_id` int(10) NOT NULL,
  `m_cat_title` text NOT NULL,
  `m_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `men_categories`
--

INSERT INTO `men_categories` (`m_cat_id`, `m_cat_title`, `m_cat_desc`) VALUES
(1, 'Jackets', 'A jacket is a mid-stomach length garment for the upper body'),
(2, 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot'),
(3, 'T-Shirt', 'A T-shirt is a style of fabric shirt named after the T shape of its body and sleeves'),
(4, 'Shirts', 'A shirt is a cloth garment for the upper body (from the neck to the waist).'),
(5, 'Trouser', 'Trousers or pants  are an item of clothing that worn from the waist to the ankles, covering both legs separately.');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(10) NOT NULL,
  `code` int(10) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_no`, `amount`, `payment_mode`, `ref_no`, `code`, `payment_date`) VALUES
(2, 401090842, 20, 'Dahabshill bank', 828680, 28064, '10/7/2020'),
(3, 1775153178, 40, 'EVCPlus', 464747, 42322, '2/1/2020'),
(4, 1021183066, 30, 'EVCPlus', 323242, 64454, '4/12/2020'),
(5, 669237565, 24, 'Priemer Bank', 236433, 463432, '09/12/2020'),
(6, 59351747, 24, 'Priemer Bank', 345465, 2432, '09/12/2020'),
(7, 59351747, 24, 'Priemer Bank', 345465, 2432, '09/12/2020'),
(15, 1111, 56, 'Western Union', 11, 11, '2021-03-04'),
(16, 222, 56, 'Premier Bank', 22, 222, '2021-03-03'),
(17, 222, 56, 'Premier Bank', 222, 222, '2021-03-03'),
(18, 222, 56, 'Dabshiil Bank', 222, 222, '2021-03-03'),
(19, 222, 56, 'Dabshiil Bank', 222, 222, '2021-03-03'),
(20, 222, 56, 'EVC-Plus', 22, 222, '2021-03-03'),
(21, 222, 56, 'EVC-Plus', 22, 222, '2021-03-03'),
(22, 0, 56, 'Dabshiil Bank', 0, 0, '2021-03-03'),
(23, 0, 56, 'Dabshiil Bank', 0, 0, '2021-03-03'),
(24, 255, 56, 'Dabshiil Bank', 22, 11, '2021-03-03'),
(25, 555, 30, 'Western Union', 55, 555, '2021-03-05'),
(26, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(27, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(28, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(29, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(30, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(31, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(32, 1111, 30, 'Dabshiil Bank', 111, 111, '2021-03-03'),
(33, 555, 30, 'Western Union', 111, 555, '2021-03-05'),
(34, 11, 30, 'Dabshiil Bank', 11, 11, '2021-03-03'),
(35, 11, 30, 'Dabshiil Bank', 11, 11, '2021-03-03'),
(36, 255, 30, 'Premier Bank', 111, 111, '2021-03-03'),
(37, 111, 30, 'Dabshiil Bank', 11, 11, '2021-03-03'),
(38, 11, 30, 'EVC-Plus', 11, 11, '2021-03-03'),
(39, 111, 30, 'EVC-Plus', 11, 11, '2021-03-03'),
(40, 1, 0, 'Dabshiil Bank', 11, 11, '2021-03-28'),
(41, 11, 0, 'Dabshiil Bank', 11, 11, '2021-03-29'),
(42, 1111, 25, 'Premier Bank', 111, 11, '2021-04-23');

-- --------------------------------------------------------

--
-- Table structure for table `pending_order`
--

CREATE TABLE `pending_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_order`
--

INSERT INTO `pending_order` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(21, 7, 59351747, '49', 2, 'Medium', 'Complete'),
(22, 7, 2020120353, '78', 3, 'Small', 'pending'),
(23, 8, 2010218534, '53', 2, 'Small', 'Complete'),
(24, 5, 1038679057, '58', 1, 'Small', 'pending'),
(25, 8, 53549602, '58', 1, 'Medium', 'pending'),
(26, 8, 53549602, '81', 1, 'Small', 'pending'),
(27, 8, 658156434, '28', 1, 'Medium', 'pending'),
(28, 8, 2075739642, '84', 1, 'Small', 'pending'),
(29, 8, 1027504758, '8', 1, 'Small', 'pending'),
(30, 0, 1001233337, '58', 1, 'Small', 'pending'),
(31, 8, 1579529041, '59', 1, 'Medium', 'pending'),
(32, 8, 382242917, '51', 1, 'Small', 'pending'),
(33, 8, 382242917, '81', 2, 'Medium', 'pending'),
(34, 10, 753506617, '26', 1, 'Medium', 'Complete'),
(35, 10, 826635838, '57', 5, 'Small', 'pending'),
(36, 10, 83691435, '44', 1, 'Small', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `m_cat_id` int(10) NOT NULL,
  `w_cat_id` int(11) NOT NULL,
  `k_cat_id` int(10) NOT NULL,
  `p_cat_id` int(100) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keyword` text NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `m_cat_id`, `w_cat_id`, `k_cat_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keyword`, `stock`) VALUES
(1, 1, 1, 1, 1, 2, '2021-04-10 15:34:21', 'ladies jackets', 'jac1.jpg', 'jac2.jpg', 'jac3.jpg', 25, '<p>leader jakect</p>', 'ladies jacket', 10),
(2, 1, 1, 1, 1, 3, '2021-04-10 15:34:21', 'boys-jacket', 'ja4.jpg', 'ja2.jpg', 'ja3.jpg', 12, '<p>kids jacket</p>', 'kids jacket', 10),
(3, 2, 2, 2, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'sss.jpg', 'FB_IMG_1578070542277.jpg', 's22.jpg', 25, '<p>men shoes</p>', 'men shoes', 10),
(4, 3, 3, 3, 3, 2, '2021-04-10 15:34:21', 'Ladies T-shirt', 'top21.webp', 'top22.webp', 'top20.webp', 15, '<p>ladies T-shirt</p>', 'ladies T-shirt', 10),
(5, 3, 3, 3, 3, 1, '2021-04-10 15:34:21', 'levis T-shirt', 'p22.jpg', 'p21.jpg', 'p24.jpg', 15, '<p>men T-shirt</p>', 'men T-shirt', 10),
(6, 2, 2, 2, 2, 2, '2021-04-10 15:34:21', 'ladies shoes', 'lsho1.webp', 'lsho.webp', 'lsho2.webp', 25, '<p>women shoes</p>', 'ladies shoes', 10),
(7, 5, 5, 5, 5, 1, '2021-04-10 15:34:21', 'Men trouser', 't6.jpg', 't7.jpg', 't8.jpg', 20, '<p>men trouser</p>', 'men trouser', 10),
(8, 4, 4, 4, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht21.webp', 'sht22.webp', 'sht23.webp', 10, '<p>ladies shirt</p>\n<p>100% original</p>\n<p>100% new brand</p>\n<p><strong>colors:</strong></p>\n<p style=\"padding-left: 30px;\">White</p>\n<p style=\"padding-left: 30px;\">Blue</p>\n<p style=\"padding-left: 30px;\">Brown</p>', 'ladies shirt', 10),
(9, 2, 2, 2, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'ss1.jpg', 'ss2.jpg', 'ss3.jpg', 35, '<p>men shoes</p>', 'men shoes', 10),
(10, 2, 2, 2, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'ss4.jpg', 'ss5.jpg', 'ss7.jpg', 30, '<p>men shoes</p>', 'men shoes', 10),
(11, 2, 2, 2, 2, 3, '2021-04-10 15:34:21', 'kid shoes', 'kisho1.jpg', 'kisho2.jpg', 'kisho3.jpg', 15, '<p>kid shoes</p>', 'kid shoes', 10),
(12, 2, 2, 2, 2, 2, '2021-04-10 15:34:21', 'ladies shoes', 'l2.jpg', 'l1.jpg', 'l3.jpg', 20, '<p>ladies shoes</p>', 'ladies shoes', 10),
(13, 2, 2, 2, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'sh3.jpg', 'sh2.jpg', 'sh1.jpg', 25, '<p>men shoes</p>', 'men shoes', 10),
(14, 5, 5, 5, 5, 1, '2021-04-10 15:34:21', 'Men trouser', 'tr2.jpg', 'tr1.jpg', 'tr3.jpg', 12, '<p>men trouser</p>', 'men trouser', 10),
(15, 3, 3, 3, 3, 1, '2021-04-10 15:34:21', 'men t-shirt', 'ts3.jpg', 'ts2.jpg', 'ts1.jpg', 10, '<p>men T-shirt</p>', 'men T-shirt', 10),
(16, 6, 6, 6, 6, 3, '2021-04-10 15:34:21', 'kids dress', 'kid1.jpg', 'kid.jpg', 'kid1.jpg', 15, '<p>kids dress</p>', 'kids dress', 10),
(17, 6, 6, 6, 6, 3, '2021-04-10 15:34:21', 'kids dress', 'kid4.jpg', 'kid3.jpg', 'kid4.jpg', 10, '<p>kids dress</p>', 'kids dress', 10),
(18, 2, 2, 2, 2, 3, '2021-04-10 15:34:21', 'kid shoes', 'kidsh1.jpg', 'kidsh2.jpg', 'kidsh3.jpg', 20, '<p>kid shoes</p>', 'kid shoes', 10),
(19, 3, 3, 0, 3, 1, '2021-04-10 15:34:21', 'Gucci men T-shirt', 'T-shirt13.webp', 'T-shirt14.webp', 'T-shirt15.webp', 15, '<p>Gucci men T-shirt</p>\r\n<p>100% original</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Grey</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Yellow</p>\r\n<p style=\"padding-left: 30px;\">Red</p>', 'men T-shirt', 10),
(20, 2, 2, 0, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'sss11.jpg', 'sss9.jpg', 'sss10.jpg', 25, '<p>men shoes</p>', 'men shoes', 10),
(21, 2, 2, 2, 2, 3, '2021-04-10 15:34:21', 'kid shoes', 'kidsh4.jpg', 'kidsh6.jpg', 'kidsh5.jpg', 10, '<p>kid shoes</p>', 'kid shoes', 10),
(22, 3, 3, 0, 3, 1, '2021-04-10 15:34:21', 'Men T-shirt', 'T-shirt1.jpg', 'T-shirt2.jpg', 'T-shirt3.jpg', 10, '<p>men T-shirt</p>', 'men T-shirt', 10),
(23, 4, 4, 0, 4, 1, '2021-04-10 15:34:21', 'Men shirt', 'hmgoepprod (3).jpg', 'hmgoepprod (7).jpg', 'hmgoepprod (8).jpg', 15, '<p>men shirt</p>', 'men shirt', 10),
(24, 1, 1, 0, 1, 1, '2021-04-10 15:34:21', 'men  jacket', 'men jacket1.jpg', 'men jackket2.jpg', 'men jacket1.jpg', 14, '<p>Black&nbsp;men jacket</p>', 'men jacket', 10),
(25, 4, 4, 0, 4, 1, '2021-04-10 15:34:21', 'Men shirt', 'hmgoepprod (1).jpg', 'hmgoepprod (10).jpg', 'hmgoepprod (11).jpg', 12, '<p>Men shirt</p>', 'Men shirt', 10),
(26, 3, 3, 0, 3, 1, '2021-04-10 15:34:21', 'Men T-shirt', 'T-shirt4.jpg', 'T-shirt5.jpg', 'T-shirt6.jpg', 10, '<p>Men T-shirt</p>', 'Men T-shirt', 10),
(27, 5, 5, 0, 5, 1, '2021-04-10 15:34:21', 'Men trouser', 't5.jpg', 't9.jpg', 't4.jpg', 17, '<p>men trouser</p>', '', 10),
(28, 3, 3, 0, 3, 1, '2021-04-10 15:34:21', 'Men T-shirt', 'T-shirt7.jpg', 'T-shirt8.jpg', 'T-shirt9.jpg', 8, '<p>Green Men T-shirt</p>', 'Men T-shirt', 10),
(29, 1, 1, 0, 1, 1, '2021-04-10 15:34:21', 'men jacket', 'jacket4.jpg', 'jacket5.jpg', 'jacket4.jpg', 12, '<p>Mixed&nbsp;men jacket</p>', 'men jacket', 10),
(30, 5, 5, 0, 5, 1, '2021-04-10 15:34:21', 'Men trouser', 't1.jpg', 't2.jpg', 't1.jpg', 13, '<p>Men trouser</p>', 'Men trouser', 10),
(31, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'shirt10.png', 'shirt11.png', 'shirt10.png', 15, '<p>ladies Shirt</p>', 'ladies Shirt', 10),
(32, 3, 3, 0, 3, 1, '2021-04-10 15:34:21', 'Men T-shirt', 'T-shirt10.jpg', 'T-shirt11.jpg', 'T-shirt12.jpg', 10, '<p>Men T-shirt</p>', 'Men T-shirt', 10),
(33, 1, 1, 0, 1, 2, '2021-04-10 15:34:21', 'ladies jackets', 'jacket3.jpg', 'jacket2.jpg', 'jacket1.jpg', 12, '<p>ladies jacket</p>', 'ladies jacket', 10),
(34, 6, 6, 0, 6, 2, '2021-04-10 15:34:21', 'dirac bacweyne', 'diraca4.jpg', 'dirac5.jpg', 'dirac8.jpg', 20, '<p>ladies diraca</p>', 'ladies diraca', 10),
(35, 6, 6, 0, 6, 2, '2021-04-10 15:34:21', 'Dirac bacweyne', 'dira11.jpg', 'dirac9.jpg', 'dira11.jpg', 18, '<p>ladies dress</p>', 'ladies dress', 10),
(36, 6, 6, 0, 6, 2, '2021-04-10 15:34:21', 'Dirac bacweyne', 'dirac13.jpg', 'dirac12.jpg', 'dirac13.jpg', 15, '<p>ladies dress</p>', 'ladies dress', 10),
(37, 6, 6, 0, 6, 2, '2021-04-10 15:34:21', 'Dirac cabayad', 'd3.jpg', 'd2.jpg', 'd1.jpg', 12, '<p>ladies dress</p>', 'ladies dress', 10),
(38, 2, 2, 2, 2, 3, '2021-04-10 15:34:21', 'Baby shoes', 'kidshh.JPG', 'kidsh0.JPG', 'kidsh.JPG', 8, '<p>kid sneakers shoes</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p>Leather shoes</p>\r\n<p>Shinny sneakers children</p>\r\n<p><strong>Colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>', 'kid shoes', 10),
(39, 4, 4, 0, 4, 1, '2021-04-10 15:34:21', 'men shirt', 's3.jpg', 's1.jpg', 's2.jpg', 10, '<p>men shirt</p>\r\n<p>Jeans Men shirt</p>\r\n<p>very smooth</p>', 'men shirt', 10),
(40, 1, 1, 0, 1, 1, '2021-04-10 15:34:21', 'men jacket', 'men jacket3.jpg', 'men jacket4.jpg', 'men jacket3.jpg', 25, '<p>Men jacket</p>\r\n<p>100% original product</p>\r\n<p>100% leather</p>\r\n<p>Available color:</p>\r\n<p>Gray</p>\r\n<p>Black</p>\r\n<p>White</p>', 'men jacket', 10),
(41, 1, 1, 0, 1, 1, '2021-04-10 15:34:21', 'Black Jacket', 'men jacket5.jpg', 'men jacket6.jpg', 'men jacket5.jpg', 20, '<p>Black men jacket</p>\r\n<p>100% original product</p>\r\n<p>100% leather</p>\r\n<p>Available color:</p>\r\n<p>Gray</p>\r\n<p>brown</p>\r\n<p>White</p>', 'men jacket', 10),
(42, 2, 2, 0, 2, 1, '2021-04-10 15:34:21', 'men shoes', 'sh4.jpg', 'sh6.jpg', 'sh8.jpg', 12, '<p>Men shoes</p>\r\n<p>100% original product</p>\r\n<p>100% new brand</p>\r\n<p>Available color:</p>\r\n<p>Red</p>\r\n<p>Black</p>\r\n<p>White</p>', 'men shoes', 10),
(43, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'ladies top', 'top1.webp', 'top0.webp', 'top2.webp', 10, '<p>ladies Top</p>\r\n<p>100% original</p>\r\n<p><strong>Color:</strong></p>\r\n<p>Black</p>\r\n<p>pink</p>\r\n<p>Brown</p>\r\n<p>Blue</p>', 'ladies T-shirt', 10),
(44, 3, 3, 0, 3, 0, '2021-04-10 15:34:21', 'ladies t-shirt', 'top3.jpg', 'top4.webp', 'top5.jpg', 9, '<p>ladies T-shirt</p>\n<p>100% original</p>\n<p><strong>color:</strong></p>\n<p style=\"text-align: justify; padding-left: 30px;\">Blue</p>\n<p style=\"text-align: justify; padding-left: 30px;\">Light blue</p>\n<p style=\"text-align: justify; padding-left: 30px;\">Red</p>\n<p style=\"text-align: justify; padding-left: 30px;\">orange</p>', 'ladies T-shirt', 10),
(45, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'ladies top', 'top6.webp', 'top6.webp', 'top6.webp', 8, '<p>ladies Top</p>\r\n<p>100% original</p>\r\n<p>100% new Brand</p>\r\n<p><strong>Colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">white</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p>&nbsp;</p>', 'ladies T-shirt', 10),
(46, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'ladies T-Shirt', 'top7.webp', 'top7.webp', 'top7.webp', 9, '<p>ladies T-shirt</p>\n<p>100% original</p>\n<p>100%&nbsp; new brand</p>\n<p><strong>Color:</strong></p>\n<p style=\"padding-left: 30px;\">White</p>\n<p style=\"padding-left: 30px;\">Black</p>\n<p style=\"padding-left: 30px;\">Red</p>\n<p style=\"padding-left: 30px;\">Yellow</p>', 'ladies T-shirt', 10),
(47, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'Mom T-shirt', 'top9.webp', 'top10.webp', 'top8.webp', 10, '<p>ladies T-shirt</p>\n<p>100% original</p>\n<p>100% new brand</p>\n<p><strong>Color:</strong></p>\n<p style=\"padding-left: 30px;\">Whilte</p>\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies T-shirt', 10),
(48, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'Love T-shirt', 'top12.webp', 'top13.webp', 'top11.webp', 10, '<p>Love T-shirt</p>\r\n<p>100% original</p>\r\n<p>100% new Brand</p>\r\n<p>Color:</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies T-shirt', 10),
(49, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'ladies T-Shirt', 'top15.webp', 'top16.webp', 'top14.webp', 12, '<p>Ladies T-shirt</p>\r\n<p>100% original</p>\r\n<p>100% new Brand</p>\r\n<p>Coliors:</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>\r\n<p style=\"padding-left: 30px;\">Orange</p>', 'ladies T-shirt', 10),
(50, 3, 3, 0, 3, 2, '2021-04-10 15:34:21', 'ladies T-Shirt', 'top18.webp', 'top19.webp', 'top17.webp', 13, '<p>ladies T-Shirt</p>\r\n<p>Long sleeve</p>\r\n<p>100% original</p>\r\n<p><strong>color:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>\r\n<p>&nbsp;</p>', 'ladies T-shirt', 10),
(51, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'Jeans Shirts', 'sht3.webp', 'sht4.webp', 'sht5.webp', 15, '<p>Jeans Shirt&nbsp;</p>\r\n<p>100% original</p>\r\n<p>100% jeans</p>\r\n<p><strong>Colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Dark Blue</p>\r\n<p style=\"padding-left: 30px;\">Black</p>', 'ladies shirt', 10),
(52, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht0.webp', 'sht1.webp', 'sht2.webp', 12, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>', 'ladies shirt', 10),
(53, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht7.webp', 'sht8.webp', 'sht6.webp', 10, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>', 'ladies shirt', 10),
(54, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht9.webp', 'sht10.webp', 'sht11.webp', 12, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>', 'ladies shirt', 10),
(55, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht13.webp', 'sht12.webp', 'sht14.webp', 10, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>', 'ladies shirt', 10),
(56, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht17.webp', 'sht16.webp', 'sht15.webp', 8, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Yellow</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>', 'ladies shirt', 10),
(57, 4, 4, 0, 4, 2, '2021-04-10 15:34:21', 'ladies Shirt', 'sht20.webp', 'sht19.webp', 'sht18.webp', 15, '<p>ladies shirt</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Green</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>', 'ladies shirt', 10),
(58, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'ladies trouser', 'tro0.webp', 'tro1.webp', 'tro2.webp', 15, '\r\n\r\n<p>ladies trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong style=\"background-color:white\">colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies trousers', 10),
(59, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'Jeans trousers', 'tro6.webp', 'tro7.webp', 'tro8.webp', 15, '<p>ladies jeans trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Dark blue</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies trousers', 10),
(60, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'ladies trousers', 'tro4.webp', 'trp3.webp', 'tro5.webp', 8, '<p>ladies trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies trousers', 10),
(61, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'Fashion Jeans', 'tro9.webp', 'tro10.webp', 'tro12.webp', 14, '<p>Fashion ladies trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies trousers', 10),
(62, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'Jeans trousers', 'tro13.webp', 'tro14.webp', 'tro15.webp', 16, '<p>New Fashin ladies trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies trousers', 10),
(63, 5, 5, 0, 5, 2, '2021-04-10 15:34:21', 'Jeans trousers', 'tro16.jpg', 'tro17.jpg', 'tro18.jpg', 12, '<p>Jeans ladies trousers</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Dark blue</p>\r\n<p style=\"padding-left: 30px;\">Light Blue</p>', 'ladies trousers', 10),
(64, 2, 2, 0, 2, 2, '2021-04-10 15:34:21', 'ladies boot', 'lsho3.webp', 'lsho4.webp', 'lsho5.webp', 8, '<p>ladies shoes</p>\r\n<p>100% original</p>\r\n<p>warm snow boots</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Green</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies shoes', 10),
(65, 2, 2, 0, 2, 2, '2021-04-10 15:34:21', 'ladies office shoes', 'lsho7.webp', 'lsho8.webp', 'lsho6.webp', 10, '<p>ladies shoes</p>\r\n<p>100% original</p>\r\n<p>Office ladies shoes</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Green</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies shoes', 10),
(66, 2, 2, 0, 2, 2, '2021-04-10 15:34:21', 'Elegant ladies shoes', 'lsho12.webp', 'lsho13.webp', 'lsho14.webp', 25, '<p>Elegant ladies shoes</p>\r\n<p>100% original</p>\r\n<p>African style Elegent ladies shoes</p>\r\n<p>High heel ladies shoes</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Ble</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>', 'ladies shoes', 10),
(67, 0, 2, 2, 2, 2, '2021-04-10 15:34:21', 'ladies boot', 'lsho9.webp', 'lsho10.webp', 'lsho11.webp', 20, '<p>ladies boot shoes</p>\r\n<p>100% original</p>\r\n<p>Ladies shoes waterproof Genuine leather&nbsp;</p>\r\n<p>High heeled ladies shoes quality</p>\r\n<p><strong>colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Brown</p>\r\n<p style=\"padding-left: 30px;\">Gray</p>', 'ladies shoes', 10),
(68, 0, 0, 2, 2, 3, '2021-04-10 15:34:21', 'kid sneakers shoes', 'ksh0.webp', 'ksh2.webp', 'ksh1.webp', 7, '<p>kid sneakers shoes</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p>Leather shoes</p>\r\n<p><strong>Colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>', 'kid shoes', 10),
(69, 0, 0, 2, 2, 3, '2021-04-10 15:34:21', 'Glowing Sneakers', 'ksh4.jpg', 'ksh3.jpg', 'ksh5.jpg', 15, '<p>kid sneakers shoes</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p>Leather shoes</p>\r\n<p>Glowing sneakers children</p>\r\n<p><strong>Colors:</strong></p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">White</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>', 'kid shoes', 10),
(70, 0, 0, 2, 2, 3, '2021-04-10 15:34:21', 'kid shoes', 'ksh6.webp', 'ksh8.webp', 'ksh7.webp', 12, '<p>kid shoes</p>\r\n<p>100% original</p>\r\n<p>100% new brand</p>\r\n<p>soft sport shoes</p>\r\n<p>colors:</p>\r\n<p style=\"padding-left: 30px;\">Black</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Pink</p>', 'kid shoes', 10),
(71, 0, 0, 4, 4, 3, '2021-04-10 15:34:21', 'kid shirts', 'kshirt3.jpg', 'kshirt1.jpg', 'kshirt2.jpg', 10, '<p>kid shirts</p>\r\n<p>cute lovely shirts</p>\r\n<p>100% original&nbsp;</p>\r\n<p><strong>color:</strong></p>\r\n<p style=\"padding-left: 30px;\">Red</p>\r\n<p style=\"padding-left: 30px;\">Blue</p>\r\n<p style=\"padding-left: 30px;\">Green</p>', 'kid shirts', 10),
(72, 0, 0, 3, 3, 3, '2021-04-10 15:34:21', 'cartoon T-shirt', 'ktsh0.webp', 'ktsh1.webp', 'ktsh2.webp', 8, '<p>cartoon T-shirt</p>\r\n<p>Boys and girl 3D cat T-shirt</p>\r\n<p>Cute cat T-shirt</p>\r\n<p>100% original</p>', 'kid t-shirt', 10),
(73, 0, 0, 3, 3, 3, '2021-04-10 15:34:21', 'Girls T-shirt', 'ktsh3.webp', 'ktsh4.webp', 'ktsh5.webp', 12, '<p>Girls T-shirt</p>\r\n<p>100% original</p>\r\n<p>Cute&nbsp; T-shirt</p>', 'kid t-shirt', 10),
(74, 0, 0, 3, 3, 3, '2021-04-10 15:34:21', 'cartoon T-shirt', 'ktsh6.webp', 'ktsh7.webp', 'ktsh8.webp', 7, '<p>cartoon T-shirt</p>\r\n<p>Boys and girls 3D cartoon T-shirt</p>\r\n<p>Cute cat T-shirt</p>', 'kid t-shirt', 10),
(75, 0, 0, 3, 3, 3, '2021-04-23 16:25:53', 'Print T-shirt', 'ktsh9.webp', 'ktsh11.webp', 'ktsh10.webp', 7, '<p>Print T-shirt</p>\r\n<p>Number children T-shirt</p>', 'kid t-shirt', 5),
(76, 0, 0, 3, 3, 2, '2021-04-10 15:34:21', 'Love T-shirt', 'ktsh12.webp', 'ktsh13.webp', 'ktsh14.webp', 8, '<p>Love T-shirt</p>\r\n<p>I Love My Sister/Brother kid T-shirt</p>\r\n<p>short sleeve T-shirt</p>\r\n<p>100% original T0shirt</p>\r\n<p>&nbsp;</p>', 'kid t-shirt', 10),
(77, 0, 0, 4, 4, 3, '2021-04-10 15:34:21', 'kid shirts', 'ksht0.webp', 'ksht1.webp', 'ksht2.webp', 6, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 10),
(78, 0, 0, 4, 4, 3, '2021-04-10 15:34:21', 'kid shirts', 'ksht3.webp', 'ksht4.webp', 'ksht5.webp', 8, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 10),
(79, 0, 0, 4, 4, 3, '2021-04-10 15:34:21', 'kid shirts', 'ksht6.webp', 'ksht7.webp', 'ksht8.webp', 7, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 10),
(80, 0, 0, 4, 4, 3, '2021-04-10 15:34:21', 'kid shirts', 'ksht9.webp', 'ksht10.webp', 'ksht11.webp', 6, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 10),
(81, 0, 0, 4, 4, 3, '2021-04-24 09:57:38', 'kid shirts', 'kshirt4.jpg', 'kishirt2.jpg', 'kishirt3.jpg', 10, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 8),
(82, 0, 0, 4, 4, 3, '2021-04-24 09:37:54', 'kid shirts', 'ksht12.webp', 'ksht13.jpg', 'ksht15.jpg', 5, '<p>Kids shirt</p>\r\n<p>Lovely kid Shirt</p>\r\n<p>Long sleeve kid shirt</p>\r\n<p>We are all Freinds kid shirt</p>\r\n<p>100% original shirt</p>', 'kid shirts', 5),
(89, 5, 5, 5, 0, 4, '2021-04-10 18:24:18', 'Striker', 'PANTS AIRSOFT 0000000.png', 'PANTS AIRSOFT 000000.png', 'PANTS AIRSOFT 00000.png', 50, 'striker xt pants tactical pants', 'striker xt pants', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, ' Jackets', '      A jacket is a mid-stomach length garment for the upper body'),
(2, 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot'),
(3, 'T-Shirt', 'A T-shirt is a style of fabric shirt named after the T shape of its body and sleeves'),
(4, 'Shirts', 'A shirt is a cloth garment for the upper body (from the neck to the waist).'),
(5, 'Trouser', 'Trousers or pants  are an item of clothing that worn from the waist to the ankles, covering both legs separately.'),
(6, 'Dress', ' A dress  is a garment traditionally worn by women or girls consisting of a skirt with an attached body');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slide_id` int(10) NOT NULL,
  `slide_name` varchar(255) NOT NULL,
  `slide_images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slide_id`, `slide_name`, `slide_images`) VALUES
(1, 'slider number 1', 'slider-2.jpg'),
(2, 'slider number 2', 'slide-5.jpg'),
(3, 'slider number 3', 'slider-8.jpg'),
(5, 'slider number 4', 'slider-5.jpg'),
(8, 'slide no 5', 'slider-number-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `women_categories`
--

CREATE TABLE `women_categories` (
  `w_cat_id` int(10) NOT NULL,
  `w_cat_title` text NOT NULL,
  `w_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `women_categories`
--

INSERT INTO `women_categories` (`w_cat_id`, `w_cat_title`, `w_cat_desc`) VALUES
(1, 'Jackets', 'A jacket is a mid-stomach length garment for the upper body'),
(2, 'Shoes', 'A shoe is an item of footwear intended to protect and comfort the human foot'),
(3, 'T-Shirt', 'A T-shirt is a style of fabric shirt named after the T shape of its body and sleeves'),
(4, 'Shirts', 'A shirt is a cloth garment for the upper body (from the neck to the waist).'),
(5, 'Trouser', 'Trousers or pants  are an item of clothing that worn from the waist to the ankles, covering both legs separately.'),
(6, 'Dress', 'A dress  is a garment traditionally worn by women or girls consisting of a skirt with an attached bodice');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `kid_categories`
--
ALTER TABLE `kid_categories`
  ADD PRIMARY KEY (`k_cat_id`);

--
-- Indexes for table `men_categories`
--
ALTER TABLE `men_categories`
  ADD PRIMARY KEY (`m_cat_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `pending_order`
--
ALTER TABLE `pending_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slide_id`);

--
-- Indexes for table `women_categories`
--
ALTER TABLE `women_categories`
  ADD PRIMARY KEY (`w_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `kid_categories`
--
ALTER TABLE `kid_categories`
  MODIFY `k_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `men_categories`
--
ALTER TABLE `men_categories`
  MODIFY `m_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `pending_order`
--
ALTER TABLE `pending_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slide_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `women_categories`
--
ALTER TABLE `women_categories`
  MODIFY `w_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
