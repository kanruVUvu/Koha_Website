-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 03, 2022 at 06:42 PM
-- Server version: 10.5.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_`
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
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(3, 'Dheeraj Rao Pathur', 'dheeraj@bleamtech.com', 'dtoGNTe5@4', 'Dheeraj.jpg', '+91 - 7348816820', 'India', 'Technical Lead', '  A Enthusiastic Software Developer bound to develop new Software things frequently with ease and pleasure.. '),
(5, 'Pavan Rajanna', 'pavan.rajanna93@gmail.com', 'pavanpavagada1234', 'man.png', '9886745518', 'India', 'CEO', ' A Enthusiastic CEO looking to build Koha');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_product_relation`
--

CREATE TABLE `bundle_product_relation` (
  `rel_id` int(10) NOT NULL,
  `rel_title` varchar(255) NOT NULL,
  `product_id` int(10) NOT NULL,
  `bundle_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `p_price`, `size`) VALUES
(27, '49.206.11.93', 2, '1000', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(10) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_top` text NOT NULL,
  `cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_top`, `cat_image`) VALUES
(1, 'Marketplace', 'yes', 'accessories.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contactusformtable`
--

CREATE TABLE `contactusformtable` (
  `ID` int(255) NOT NULL,
  `full_name` text NOT NULL,
  `mail_address` text NOT NULL,
  `phone_number` text NOT NULL,
  `subject_info` text NOT NULL,
  `best_time` text NOT NULL,
  `queries_info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactusformtable`
--

INSERT INTO `contactusformtable` (`ID`, `full_name`, `mail_address`, `phone_number`, `subject_info`, `best_time`, `queries_info`) VALUES
(1, 'Dheeraj Rao Pathur', 'dheerajraopathur@gmail.com', '+917348816820', 'test', '5:30', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `coupon_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `coupon_title` varchar(255) NOT NULL,
  `coupon_price` varchar(255) NOT NULL,
  `coupon_code` varchar(255) NOT NULL,
  `coupon_limit` int(100) NOT NULL,
  `coupon_used` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`coupon_id`, `product_id`, `coupon_title`, `coupon_price`, `coupon_code`, `coupon_limit`, `coupon_used`) VALUES
(1, 4, 'Koha 1st Coupon Code', '1000', 'KC100', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`, `customer_confirm_code`) VALUES
(1, 'Dheeraj Rao Pathur', 'dheerajraopathur@gmail.com', 'dtoGNTe5@4', 'India', 'Bangalore', '7348816820', '#F-9 , Sai Gokul Apartments , 14th Main Road , Jayanagar 4th Block , Bangalore - 560011', 'Dheeraj.jpg', '2', '122'),
(3, 'Dheeraj Rao Pathur', 'dheeraj@bleamtech.com', 'htoGNTe5@4', 'India', 'Bangalore', '9886745518', 'F-9,Sai Gokul Apartments,Jayanagar 4th Block', 'Dheeraj.jpg', '::1', '1382192111'),
(4, 'Dheeraj Rao Pathur', 'dheerajraopathur@yahoo.com', 'test1234', 'India', 'Bangalore', '9886745518', '#F-9 , Sai Gokul Apartments', 'pradeepimage.jpg', '49.206.14.100', '440822633');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_orders`
--

INSERT INTO `customer_orders` (`order_id`, `customer_id`, `due_amount`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(1600, 4, 1000, 438907808, 2, 'Small', '2022-01-24 16:04:47', 'pending'),
(1601, 4, 500, 899088655, 1, 'Small', '2022-01-24 16:06:53', 'pending'),
(1600, 1, 1500, 111861783, 3, 'Large', '2022-02-02 10:22:15', 'pending'),
(1600, 1, 600, 111861783, 2, 'Small', '2022-02-02 10:22:15', 'pending'),
(1600, 1, 1000, 111861783, 1, 'Medium', '2022-02-02 10:22:15', 'pending'),
(1600, 1, 1500, 111861783, 3, 'Medium', '2022-02-02 10:22:15', 'pending'),
(1604, 1, 5000, 78559002, 5, 'Large', '2022-02-02 11:28:04', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturers`
--

CREATE TABLE `manufacturers` (
  `manufacturer_id` int(10) NOT NULL,
  `manufacturer_title` text NOT NULL,
  `manufacturer_top` text NOT NULL,
  `manufacturer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturers`
--

INSERT INTO `manufacturers` (`manufacturer_id`, `manufacturer_title`, `manufacturer_top`, `manufacturer_image`) VALUES
(1, 'Koha ', 'yes', 'mnstore.jpg');

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
(4, 100, 1000, 'Easy paisa', 0, 370953, '24/01/2022');

-- --------------------------------------------------------

--
-- Table structure for table `pending_orders`
--

CREATE TABLE `pending_orders` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `invoice_no` int(10) NOT NULL,
  `product_id` text NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_orders`
--

INSERT INTO `pending_orders` (`order_id`, `customer_id`, `invoice_no`, `product_id`, `qty`, `size`, `order_status`) VALUES
(1600, 4, 438907808, '18', 2, 'Small', 'pending'),
(1601, 4, 899088655, '18', 1, 'Small', 'pending'),
(1600, 1, 111861783, '29', 3, 'Large', 'pending'),
(1600, 1, 111861783, '32', 2, 'Small', 'pending'),
(1600, 1, 111861783, '33', 1, 'Medium', 'pending'),
(1600, 1, 111861783, '34', 3, 'Medium', 'pending'),
(1604, 1, 78559002, '33', 5, 'Large', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_url` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_psp_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_features` text NOT NULL,
  `product_video` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_label` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `manufacturer_id`, `date`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`) VALUES
(27, 9, 1, 1, '2022-01-29 07:29:05', 'Black Dog', 'black-dog', 'blackdog22.png', 'blackdog33.png', 'blackdog44.png', 1000, 500, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Black Dog Image', '\r\n\r\n', '\r\n\r\n', 'Black Dog , Dog', 'New', 'product'),
(28, 9, 1, 1, '2022-01-29 07:30:12', 'Buddha', 'buddha-image', 'buddha22.png', 'buddha33.png', 'buddha44.png', 1000, 500, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Buddha Image', '\r\n\r\n', '\r\n\r\n', 'Buddha statue', 'New', 'product'),
(29, 9, 1, 1, '2022-01-29 07:32:30', 'White Dog', 'white-dog', 'whitedog22.png', 'whitedog33.png', 'whitedog44.png', 500, 200, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the White Dog Image', '\r\n\r\n', '\r\n\r\n', 'white dog', 'New', 'product'),
(30, 9, 1, 1, '2022-01-29 07:34:06', 'Fish', 'fish-image', 'koi22.png', 'koi33.png', 'koi44.png', 500, 200, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Fish Image', '\r\n\r\n', '\r\n\r\n', 'koi image', 'New', 'product'),
(31, 9, 1, 1, '2022-01-29 07:35:13', 'Shiva Statue', 'shiva-statue', 'shiva22.png', 'shiva33.png', 'shiva44.png', 400, 100, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Shiva Statue\r\n\r\n', '\r\n\r\n', '\r\n\r\n', 'Shiva statue', 'New', 'product'),
(32, 9, 1, 1, '2022-01-29 07:37:11', 'Ironman', 'iron-man', 'ironman22.png', 'ironman33.png', 'ironman44.png', 300, 100, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Iron man image', '\r\n\r\n', '\r\n\r\n', 'iron man', 'New', 'product'),
(33, 9, 1, 1, '2022-01-29 07:38:18', 'Joker', 'joker-image', 'joker22.png', 'joker33.png', 'joker44.png', 1000, 200, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Joker Image', '\r\n\r\n', '\r\n\r\n', 'joker image', 'New', 'product'),
(34, 9, 1, 1, '2022-01-29 07:39:35', 'Eye', 'eye-image', 'eye22.png', 'eye33.png', 'eye44.png', 500, 100, 'Pixelated Image breakdowns ( 2 * 2 , 3 * 3 and 4 * 4 ) of the Eye Image\r\n', '\r\n\r\n', '\r\n\r\n', 'eye image', 'New', 'product');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_top` text NOT NULL,
  `p_cat_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_top`, `p_cat_image`) VALUES
(9, 'All Marketplace Items', 'yes', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `ID` int(255) NOT NULL,
  `Name` text NOT NULL,
  `Login_type` text NOT NULL,
  `Email` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`ID`, `Name`, `Login_type`, `Email`, `Password`) VALUES
(1, 'Rathan Kumar Rao Pathur', 'Customer', 'pathur3333@gmail.com', 'test123'),
(2, 'Dheeraj Rao Pathur', 'Customer', 'dheerajraopathur@gmail.com', 'etoGNTe5@4');

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(255) NOT NULL,
  `token` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIzMDkyNTksImlzcyI6Imh0dHBzOi8vYXBpdjIuc2hpcHJvY2tldC5pbi92MS9leHRlcm5hbC9hdXRoL2xvZ2luIiwiaWF0IjoxNjQzNzk3MzM2LCJleHAiOjE2NDQ2NjEzMzYsIm5iZiI6MTY0Mzc5NzMzNiwianRpIjoiMUF5MGVzWXljUEo1OVBoNSJ9.91qgbDueeIm0E9qqKBlJ5HkLgGslsmLn6Y5SplfqwJA', '2022-02-02 03:52:16.000000');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `store_id` int(10) NOT NULL,
  `store_title` varchar(255) NOT NULL,
  `store_image` varchar(255) NOT NULL,
  `store_desc` text NOT NULL,
  `store_button` varchar(255) NOT NULL,
  `store_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`store_id`, `store_title`, `store_image`, `store_desc`, `store_button`, `store_url`) VALUES
(4, 'MN Images', 'mnstore.jpg', '\r\n\r\n\r\n<p style=\"text-align: center;\"><strong>Koramangala , Bangalore - 560089</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>\r\n\r\n\r\n', 'View Map', 'http://www.thedailylux.com/ecommerce'),
(5, 'TY Photography Stores', 'mnstore.jpg', '\r\n<p style=\"text-align: center;\"><strong>Jayanagar 4th Block , Bangalore - 567890</strong></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.</p>\r\n', 'View Map', 'http://www.thedailylux.com/ecommerce');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `ID` int(255) NOT NULL,
  `email_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`ID`, `email_id`) VALUES
(1, 'dheerajraopathur@gmail.com'),
(2, 'dheerajraopathur@gmail.com'),
(3, 'dheerajraopathur@gmail.com'),
(4, 'dheerajraopathur@gmail.com'),
(5, 'dheerajraopathur@gmail.com'),
(6, 'dheerajraopathur@gmail.com'),
(7, 'dheerajraopathur@gmail.com'),
(8, 'dheerajraopathur@gmail.com'),
(9, 'dheerajraopathur@gmail.com'),
(10, 'dheerajraopathur@gmail.com'),
(11, 'dheerajraopathur@gmail.com'),
(12, 'dheerajraopathur@gmail.com'),
(13, 'dheerajraopathur@gmail.com'),
(14, 'dheerajraopathur@gmail.com'),
(15, 'dheerajraopathur@gmail.com'),
(16, 'dheerajraopathur@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wishlist_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  ADD PRIMARY KEY (`rel_id`);

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
-- Indexes for table `contactusformtable`
--
ALTER TABLE `contactusformtable`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `manufacturers`
--
ALTER TABLE `manufacturers`
  ADD PRIMARY KEY (`manufacturer_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

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
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`store_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wishlist_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactusformtable`
--
ALTER TABLE `contactusformtable`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
