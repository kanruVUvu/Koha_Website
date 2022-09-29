-- phpMyAdmin SQL Dump
-- version 5.1.1deb3+bionic1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 24, 2022 at 09:13 AM
-- Server version: 5.7.39-0ubuntu0.18.04.2
-- PHP Version: 7.2.34-28+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Koha_php`
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
(1, 'Dheeraj Rao P', 'dheeraj@bleamtech.com', 'ntoGNTe5@4', 'unknownman.png', '7348816820', 'India', 'Technical Lead', 'An Enthusiastic Software Developer who is well versed in creating responsive , user - friendly web applications.'),
(2, 'Pavan Rajanna', 'pavan.rajanna@thekoha.com', 'testpavan1234@', 'unknownman.png', '9916299016', 'India', 'Koha Admin', 'B.E. Mechanical, MSc. Aerospace Engineering (University of Sydney, Australia)'),
(3, 'Prayag Bellur', 'prayag.bellur@thekoha.com', 'adminkoha', 'unknownman.png', '7676869730', 'India', 'Koha Admin', ' B.E. Mechanical, MSc. Production Engineering (Chalmers University, Sweden) ');

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

--
-- Dumping data for table `bundle_product_relation`
--

INSERT INTO `bundle_product_relation` (`rel_id`, `rel_title`, `product_id`, `bundle_id`) VALUES
(14, 'Ironman_OverallMP_Bundle', 1, 10032),
(15, 'Joker_OverallMP_Bundle', 2, 10032),
(16, 'AL_OverallMP_Bundle', 3, 10032),
(17, 'Buddha_OverallMP_Bundle', 4, 10032),
(18, 'Lady_OverallMP_Bundle', 5, 10032),
(19, 'BlackDog_OverallMP_Bundle', 6, 10032),
(20, 'MarilynMonroe_OverallMP_Bundle', 7, 10032),
(21, 'Ojos_OverallMP_Bundle', 8, 10032),
(22, 'Rudra_OverallMP_Bundle', 9, 10032),
(23, 'Leo_OverallMP_Bundle', 10, 10032),
(27, 'LED-Backlight_accbundle', 12, 10033),
(28, 'Wallmount_accbundle', 11, 10033);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cust_email` varchar(500) NOT NULL,
  `p_id` int(10) NOT NULL,
  `p_type` varchar(500) NOT NULL,
  `p_title` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `u_price` int(255) NOT NULL,
  `size` text NOT NULL,
  `uploaded_image` varchar(500) NOT NULL,
  `bg_1` varchar(500) NOT NULL,
  `bg_2` varchar(500) NOT NULL,
  `bg_3` varchar(500) NOT NULL,
  `bg_4` varchar(500) NOT NULL,
  `bg_5` varchar(500) NOT NULL,
  `bg_6` varchar(500) NOT NULL,
  `color_code` varchar(500) NOT NULL,
  `csv` varchar(500) NOT NULL,
  `lego` varchar(500) NOT NULL,
  `lego_gap` varchar(500) NOT NULL,
  `output_images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cust_email`, `p_id`, `p_type`, `p_title`, `image`, `ip_add`, `qty`, `p_price`, `u_price`, `size`, `uploaded_image`, `bg_1`, `bg_2`, `bg_3`, `bg_4`, `bg_5`, `bg_6`, `color_code`, `csv`, `lego`, `lego_gap`, `output_images`) VALUES
('dheeraj@bleamtech.com', 6, 'Marketplace', 'Manâ€™s best friend', 'Marketplace', '49.205.150.228', 1, '5994', 5994, 'Medium', 'MBB2', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA', 'NA');

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
(1, 'Marketplace', 'yes', 'accessories.jpg'),
(2, 'Accesories', 'yes', '');

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
(1, 'CrytoDuh', 'erickson1720@comcast.net', '89038181288', 'This robot can bring you money 24/7.', 'CrytoDuh', 'Let the Robot bring you money while you rest. http://go.tazalus.com/096s');

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
(4, 1, 'Ironman Coupon', '3', 'IM123 ', 100, 29),
(5, 2, 'Joker Coupon', '5', 'JK123', 100, 9),
(7, 4, 'Buddha Coupon', '10', 'BU123', 100, 0),
(8, 5, 'Lady Coupon', '10', 'LD123', 100, 0),
(11, 3, 'Animated Lion Coupon', '7', 'ALION123', 100, 1),
(12, 6, 'Dog Coupon', '10', 'DG123', 100, 0),
(16, 7, 'Marilyn Monroe Coupon', '10', 'MM123 ', 100, 0),
(17, 8, 'Eye Coupon', '10', 'EY123 ', 100, 0),
(18, 12, 'LED Backlight Coupon', '5', 'LB123 ', 100, 15),
(19, 10001, 'Custom Image Coupon', '50', 'CM123', 100, 4),
(21, 10032, 'Overall MP Coupon', '5', 'OVMP123', 100, 3),
(22, 10033, 'Overall Accessories Coupon', '5', 'OVAC123', 1000, 3),
(23, 9, 'Rudra Coupon', '100', 'RC123', 100, 0),
(24, 10, 'Leo Coupon', '100', 'LC123', 100, 0),
(25, 11, 'WallMount Coupon', '100', 'WC123', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_lname` text NOT NULL,
  `customer_email` text NOT NULL,
  `customer_contact` text NOT NULL,
  `customer_address` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_state` text NOT NULL,
  `customer_country` text NOT NULL,
  `customer_pincode` text NOT NULL,
  `customer_pass` text NOT NULL,
  `customer_ip` text NOT NULL,
  `customer_confirm_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_lname`, `customer_email`, `customer_contact`, `customer_address`, `customer_city`, `customer_state`, `customer_country`, `customer_pincode`, `customer_pass`, `customer_ip`, `customer_confirm_code`) VALUES
(1, 'Dheeraj', 'Rao P', 'dheeraj@bleamtech.com', '7348816820', '#F-9 , Sai Gokul Apartments , 14th Main Road', 'Bangalore', 'Karnataka', 'India', '560011', 'ftoGNTe5@4', '49.205.128.141', '1422279722'),
(2, 'Prayag', 'Bellur', 'prayag.bellur@thekoha.com', '7676869730', 'SB road VV Puram ', 'Bangalore South', 'KARNATAKA', 'India', '560004', 'adminkoha', '49.37.186.101', '582998441'),
(3, 'Pramod', 'S', 'pramod.shendige@gmail.com', '7411401948', '#172 11th main 4th cross R.B.I layout J.P nagar 7th phase ', 'Bengaluru', 'Karnataka', 'India', '560078', '123', '49.205.128.141', '876831100'),
(4, 'Dilip', 'Mohite', 'Diliprmohite@gmail.com', '8056867780', 'Akd', 'Fusi', 'Hejs', 'Heia', 'Vshsh', 'Dilip@1997', '49.205.128.141', '1129985069'),
(5, 'Jithin', 'Kumar', 'j11@yopmail.com', '9876543215', 'JP nagar', 'Bangalore', 'Karnataka', 'India', '560099', 'jithin1011', '103.86.2.225', '1507519517'),
(6, 'Lolo', 'Hshhssh', 'anjing@gmail.com', '9999999999999', '7777777', 'Kontol', 'Kontol lu', 'Isjsbdb', '66666', 'harizhariz', '103.115.164.24', '950254511'),
(7, 'Dheeraj', 'Rao P', 'dheerajraopathur@gmail.com', '7348816820', '#F-9 , Sai Gokul Apartments , 14th Main Road', 'Bangalore', 'Karnataka', 'India', '560011', 'mtoGNTe5@4', '49.205.146.27', '1654857786'),
(8, 'Aryan', 'Dadheech', 'aryan.prince999@gmail.com', '9571114139', 'B-23', 'CHITTORGARH', 'Rajasthan', 'India', '312001', 'aryan.prince999@gmail.com', '103.158.140.4', '1738453232'),
(9, 'ZeroGans', '994400522631', 'zerogans@gmail.com ', '994400522656', 'Jakarta, Selatan', 'Jakarta', 'Jawa Barat', 'Indonesia', '78888', 'BusedCuk045', '103.105.34.106', '513982617'),
(10, 'ZeroGans', '994400522645', 'lolajg@gmail.com', '994400522645', 'Jakarta, Selatan', 'Jakarta', 'Jawa Barat', 'Indonesia', '78888', '06 november 2021', '103.105.34.106', '633961051'),
(11, 'pavan', 'rajanna', 'pavan.rajanna@thekoha.com', '9916299016', 'no 1094', 'blore', 'ka', 'in', '560078', 'aero1122', '106.51.143.139', '555839879'),
(12, 'Hshsh', 'Nsjssj', 'shhssh@gmail.com', '02837267', 'Hshshauu', 'Hjsia', 'Hshs', 'Ysyssh', '02827', 'xnxx12345', '114.142.170.44', '1057565276'),
(13, 'Nidhi', 'Rathore', 'nidhirathore2023@gmail.com', '9027908651', 'DEHRADUN,UTTARAKHAND', 'Dehradun', 'Uttarakhand', 'India', '248142', 'nidhi', '49.36.231.76', '717666430'),
(14, 'Hshsb', 'Hshss', 'sjsj@gmail.com', '82726737388', '7273737', '7273737', '983883', '7272772', '2772727', 'harizhari', '167.71.170.188', '1558948863'),
(15, '01', 'starsxploit', 'idwrs5537@gamil.com', '085727828261', 'id', 'San Juan City', 'NCR-Metro Manila', 'Philippines', 'wdw', 'kerjokerjo123', '110.136.160.72', '1872127974'),
(16, 'ZeroGans', '994400522631', 'tndarksider@gmail.com', '994400522631', 'Jakarta, Selatan', 'Jakarta', 'Jawa Barat', 'Indonesia', '78888', 'LILAJG', '103.105.33.108', '1275943576'),
(17, 'Apex', 'Apex', 'dorlex@gmail.com', '0180383037', 'Dorlex ', 'Dorlex ', 'Dorlex', 'Dorlex ', '88120', 'apex99', '41.142.158.240', '164227243'),
(18, 'Apex', 'Apex', 'dorlexo@gmail.com', '0180383037', 'Dorlex ', 'Dorlex ', 'Dorlex', 'Dorlex ', '88120', 'apex99', '41.142.158.240', '1321013577'),
(19, 'Test', '123', 'test123@gmail.com', 'test456', 'Jayanagar 4th Block ,14th Main Road, F-9 , Sai Gokul Apartments', 'Bangalore', 'Karnataka', 'India', '560011', 'addd', '49.205.150.118', '421446404'),
(20, 'Koha', 'Admin', 'koha95034@gmail.com', '9916299016', '703, 1st floor, 19th Main Rd, Siddanna Layout, Banashankari Stage II, Banashankari', 'Bangalore', 'Karnataka', 'India', '560070', 'kohaadmin123@', '49.205.147.89', '738773623'),
(21, 'dsfdsf', 'dsfdsf', 'xploiterteam@gmail.com', '0934324324', '324234', '2342343', '2423423', '234234', '234234', '12345', '210.185.177.124', '900000452'),
(22, 'wrs01', 'wrs', 'angga@gamil.com', '085726885805', '01', 'Taguig City', 'NCR-Metro Manila', 'Philippines', 'wdwhh', 'kerjokerjo123', '114.10.64.184', '2129121171'),
(23, 'Mendoza', 'Martinez', 'rdickensg_n425o@xedmi.com', '13056476852', '8610 NW 56ND ST', 'MIAMI, FL', 'FL', 'Estados Unidos', '33195', 'panama123', '190.35.109.244', '75403989'),
(24, 'Nannaba', 'Bsbsnbs', '', '888263', '<script/onload=alert(1)</script>', 'Angels', 'New year ', 'Jersey ', '22389', 'kontil0', '158.69.60.73', '1209902098'),
(25, 'Pp', 'Pp', 'anon33862@gmail.com', '028183728373', 'Mmk', 'Mmk', 'Mmk', 'Mmk', 'Mmkbasah77 ', 'mmkbasah77', '8.30.234.162', '1009512508'),
(26, 'Grims', 'Henvker', 'Gee828i2wh@gmail.com', '838384', 'Hwuwueu', 'Eyeyye', 'Wyeyeye', 'Whhehe', '4577777', 'jancok123', '114.10.10.168', '1309630590'),
(27, 'BijiGueh', 'biji', 'bilixa@kellychibale-researchgroup-uct.com', '9827627846822', 'Pakistan NAbert', 'JUhin', 'memek', 'Pakistan', 'memek12345', 'memek12345', '124.158.189.85', '293195382'),
(28, 'Koha Test', 'Test', 'info@thekoha.com', '9916299016', 'No 1094, 42nd Cross, KS Layout', 'Bangalore', 'KARNATAKA', 'India', '560078', 'kohatest', '106.51.240.126', '23483986'),
(29, 'admin', 'admin', 'support@thekoha.com', '7676869730', '703, 19th Main Rd, Siddanna Layout, Banashankari Stage II, Banashankari', 'Bengaluru', 'karnataka', 'India', '560070', 'adminkoha', '49.37.191.252', '1087854341'),
(30, 'Ndnfnd', 'Ff', 'Jjfjf', 'Jdjfjjf', 'Kfkfkkf', 'Jdjjfd', 'Jfjfjf', 'Jfjfj', 'Kfjfjf', 'rifi', '139.99.97.224', '2856112'),
(31, 'Ndnfnd', 'Ff', 'Jjfjfnsjdjdjdk', 'Jdjfjjf', 'Kfkfkkf', 'Jdjjfd', 'Jfjfjf', 'Jfjfj', 'Kfjfjf', 'lala88', '139.99.97.224', '142929128'),
(32, 'Hayl', 'Hayl', 'Madin@gmail.com', '191949767', 'Ksjd', 'India', 'India', 'India', '1346', 'harimau', '139.99.97.224', '284741539'),
(33, 'jehehshshs', 'auwuiwns', 'ajsbhs@gamil.com', 'sjwnbwnw', 'susjsjjs', 'sjsjuwksms', 'jensnsjs', 'nsjsjsn', 'sjjsjsjs', 'MaXEuScRJcL4vzM', '103.172.70.27', '147401087');

-- --------------------------------------------------------

--
-- Table structure for table `customer_custom_orders`
--

CREATE TABLE `customer_custom_orders` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `p_id` int(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `uploaded_image` varchar(500) NOT NULL,
  `bg_1` varchar(500) NOT NULL,
  `bg_2` varchar(500) NOT NULL,
  `bg_3` varchar(500) NOT NULL,
  `bg_4` varchar(500) NOT NULL,
  `bg_5` varchar(500) NOT NULL,
  `bg_6` varchar(500) NOT NULL,
  `color_code` varchar(500) NOT NULL,
  `csv` varchar(500) NOT NULL,
  `lego` varchar(500) NOT NULL,
  `lego_gap` varchar(500) NOT NULL,
  `output_images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `order_id` int(255) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `p_id` int(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `order_status` text NOT NULL,
  `product_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jwt_auth`
--

CREATE TABLE `jwt_auth` (
  `id` int(255) NOT NULL,
  `token` varchar(700) NOT NULL,
  `email` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jwt_auth`
--

INSERT INTO `jwt_auth` (`id`, `token`, `email`) VALUES
(1, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImRoZWVyYWpAYmxlYW10ZWNoLmNvbSIsImV4cCI6MTY1NTcyMTU3NH0.NErdPPzyPt6kc14d7sHpGm98drCoJnOgWMmzk-GrYWw', 'dheeraj@bleamtech.com'),
(2, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InByYXlhZy5iZWxsdXJAdGhla29oYS5jb20iLCJleHAiOjE2NTU3MzM5ODN9.viX96Mf2kQh3ejbc47YrRVWCYNTQY6pC15E9aAfHd8Y', 'prayag.bellur@thekoha.com'),
(3, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InByYW1vZC5zaGVuZGlnZUBnbWFpbC5jb20iLCJleHAiOjE2NTU4MDI4Njl9.UU4BqbK7OUH8IiDsi0OtzDYeqjar8oXSHju9TZCz5aI', 'pramod.shendige@gmail.com'),
(4, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6IkRpbGlwcm1vaGl0ZUBnbWFpbC5jb20iLCJleHAiOjE2NTU4MDI4Nzd9.IFCjsDOiSxEziM-GTuKQGG3cIwh44Z92rg5l3UdwEXE', 'Diliprmohite@gmail.com'),
(5, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImoxMUB5b3BtYWlsLmNvbSIsImV4cCI6MTY1NTgwMzQyOH0.LkMZLLEHVVG5DB3oHi73nlrwPt5Br42uH5zAhViZGq0', 'j11@yopmail.com'),
(6, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImFuamluZ0BnbWFpbC5jb20iLCJleHAiOjE2NTU4MTAyMjl9.-voNhAgGLT1r9jamxsxEMtFD4VFsFbK_m-t1OadDop8', 'anjing@gmail.com'),
(7, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImRoZWVyYWpyYW9wYXRodXJAZ21haWwuY29tIiwiZXhwIjoxNjU1ODk4ODU2fQ.xQRTZldP-l4cSHuJ71DXyEbG0g_qv9q2yi7HpoWtc6w', 'dheerajraopathur@gmail.com'),
(8, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImFyeWFuLnByaW5jZTk5OUBnbWFpbC5jb20iLCJleHAiOjE2NTU5OTgyODV9._iBfi7HTmI6wHIQ3bpxvJfG2QnZHvhycCfmAKlwIBwg', 'aryan.prince999@gmail.com'),
(9, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6Inplcm9nYW5zQGdtYWlsLmNvbSAiLCJleHAiOjE2NTYwNzQwMTd9.oIbzlKfCivmYC_r14c9nCwLqCUaBL0jYhBBA2Z1Cpms', 'zerogans@gmail.com '),
(10, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImxvbGFqZ0BnbWFpbC5jb20iLCJleHAiOjE2NTYwNzQwOTd9.0Xn9wb8q4LPIKArIUoaDvMwzFpuPcmypYOlcy7n-BQs', 'lolajg@gmail.com'),
(11, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InBhdmFuLnJhamFubmFAdGhla29oYS5jb20iLCJleHAiOjE2NTYxMzMxMDF9.Wq4-SfUKYpRa_pNzhuy9dx7zbMi5MMcb1kqG618_vq8', 'pavan.rajanna@thekoha.com'),
(12, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InNoaHNzaEBnbWFpbC5jb20iLCJleHAiOjE2NTY0MDQ4NjV9.bfzqtU9UKKYRvB6ca6gbxyVUvRKDhYhlne5RmGAxJ4s', 'shhssh@gmail.com'),
(13, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6Im5pZGhpcmF0aG9yZTIwMjNAZ21haWwuY29tIiwiZXhwIjoxNjU2NjAxNDc0fQ.yJtZFyYOq645wjdG3alG0HmnfvJrEEf0P_7GbMi_8cI', 'nidhirathore2023@gmail.com'),
(14, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InNqc2pAZ21haWwuY29tIiwiZXhwIjoxNjU3MDEyMjQ0fQ.f1nAcE9iKPNFQYOMmdVdMo2a15WuCa9ePkgnXVAyXRY', 'sjsj@gmail.com'),
(15, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6Imlkd3JzNTUzN0BnYW1pbC5jb20iLCJleHAiOjE2NTcyNjQxNjh9.JlNQe9LiGOM1dLnILI-QYfr_znVVAlX1g7wPFgQsJwg', 'idwrs5537@gamil.com'),
(16, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InRuZGFya3NpZGVyQGdtYWlsLmNvbSIsImV4cCI6MTY1NzMzOTUzN30.MlDff1H459lHOqs6pmbFsezyGcZFY-eSTmU4MKGMFtI', 'tndarksider@gmail.com'),
(17, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImRvcmxleEBnbWFpbC5jb20iLCJleHAiOjE2NTczNzc4MTJ9.hnaqfIhC-uovDaG6qm9SJA10O0bUQ0rNNG4SAE-aGuc', 'dorlex@gmail.com'),
(18, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImRvcmxleG9AZ21haWwuY29tIiwiZXhwIjoxNjU3Mzc3ODM0fQ.PfPws_POm7jeSqBudxCi1clb_8LY-Sfw3P-MYvFAROs', 'dorlexo@gmail.com'),
(19, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InRlc3QxMjNAZ21haWwuY29tIiwiZXhwIjoxNjU3OTc0ODA5fQ.ugef93BbnL3_z9kdBomghlegKDlZfUWYiuUIbNwtQGQ', 'test123@gmail.com'),
(20, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImtvaGE5NTAzNEBnbWFpbC5jb20iLCJleHAiOjE2NTgwNTQ1Nzh9.aoo9vvvg4fFHw5QkYI1a7XPrQVZLm0qFZK2zR--dsoM', 'koha95034@gmail.com'),
(21, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InhwbG9pdGVydGVhbUBnbWFpbC5jb20iLCJleHAiOjE2NTgwNTQ5Mjd9.keglTHzOEBCVZBbNES3ZGCu4_sGKb7AEzNPAOkH9SUk', 'xploiterteam@gmail.com'),
(22, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImFuZ2dhQGdhbWlsLmNvbSIsImV4cCI6MTY1ODM0NTQwNX0.DywA08LKfJh5Q5FecvG3HRzgaBChk_eMhQ1GEqGovqE', 'angga@gamil.com'),
(23, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InJkaWNrZW5zZ19uNDI1b0B4ZWRtaS5jb20iLCJleHAiOjE2NTg1MTg2MTN9.YXk5h6m3FGMnuQquiC3-yQJMjwW1HYDiP5AYKdABoAo', 'rdickensg_n425o@xedmi.com'),
(24, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6Im9rbm9mZml2d2FAYXJ4eHdhbGxzLmNvbSIsImV4cCI6MTY1OTEwMzM1Nn0.q_reYCRK6e12MUhNshnArzteO7zPPZaJSPjEQGeFc8E', 'oknoffivwa@arxxwalls.com'),
(25, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImFub24zMzg2MkBnbWFpbC5jb20iLCJleHAiOjE2NTkxOTI3NDJ9.I3o0WiusZAoQU7ARIzBCK8xgCFJJOzQXgl8PsgYbqTo', 'anon33862@gmail.com'),
(26, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImV0YW4ua2VsbGV5QGlmeW91cm9jay5jb20iLCJleHAiOjE2NTkyODgzMDZ9.L-1tqqQw7B_cBlNl9zST9fOmzUBNp4cLudnmeNvlBEE', 'etan.kelley@ifyourock.com'),
(27, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6IkdlZTgyOGkyd2hAZ21haWwuY29tIiwiZXhwIjoxNjU5NzE2MzU0fQ.SqEHe582_jAjwlr8Dsz2nY_St7_Gzmg94pXgg3BYt4w', 'Gee828i2wh@gmail.com'),
(28, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImJpbGl4YUBrZWxseWNoaWJhbGUtcmVzZWFyY2hncm91cC11Y3QuY29tIiwiZXhwIjoxNjU5NzcwOTM1fQ.4Mlue5t9i3fJDyWfE2FoekX-G-1E-GIX4uiI9oHPvkM', 'bilixa@kellychibale-researchgroup-uct.com'),
(29, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImluZm9AdGhla29oYS5jb20iLCJleHAiOjE2NTk5NTk2Nzd9.UH4GFcelUrH_ixoAGbZTs7dFznfxRQa2HHgCj5lLxl4', 'info@thekoha.com'),
(30, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6InN1cHBvcnRAdGhla29oYS5jb20iLCJleHAiOjE2NTk5NzcyNjR9.FtRvxzVwRJVul3o2J69q-ZI3bE947NHFNswjFeJUClA', 'support@thekoha.com'),
(31, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6IkpqZmpmIiwiZXhwIjoxNjYwMjEyNjk0fQ.u8LlBczxu9y2EZMdwq63IFnqzmq7VF8XialhPTckxYY', 'Jjfjf'),
(32, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6IkpqZmpmbnNqZGpkamRrIiwiZXhwIjoxNjYwMjEyNzM2fQ.Ln2w9QVVO2QrmtRUDiBjvQysU8nZ6pSmmeqnr48RliU', 'Jjfjfnsjdjdjdk'),
(33, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6Ik1hZGluQGdtYWlsLmNvbSIsImV4cCI6MTY2MDIxMjc3Mn0.IM8jh_lxEWDkmcq2JtnIV1FCryrruTzTZ1t4WHJCxOg', 'Madin@gmail.com'),
(34, 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCIsImlzcyI6Imh0dHBzOlwvXC93d3cudGhla29oYS5jb20iLCJhdWQiOiJodHRwOlwvXC9jcmVhdGUudGhla29oYS5jb20ifQ.eyJlbWFpbCI6ImFqc2Joc0BnYW1pbC5jb20iLCJleHAiOjE2NjAzOTM3NzR9.42ODMBI_-CH4K_gtNiIo90tSqTfNOQK3wTK4s_MxcX8', 'ajsbhs@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `lego_images`
--

CREATE TABLE `lego_images` (
  `cust_email` varchar(500) NOT NULL,
  `p_id` int(10) NOT NULL,
  `p_type` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `u_price` int(255) NOT NULL,
  `size` text NOT NULL,
  `uploaded_image` varchar(500) NOT NULL,
  `bg_1` varchar(500) NOT NULL,
  `bg_2` varchar(500) NOT NULL,
  `bg_3` varchar(500) NOT NULL,
  `bg_4` varchar(500) NOT NULL,
  `bg_5` varchar(500) NOT NULL,
  `bg_6` varchar(500) NOT NULL,
  `color_code` varchar(500) NOT NULL,
  `csv` varchar(500) NOT NULL,
  `lego` varchar(500) NOT NULL,
  `lego_gap` varchar(500) NOT NULL,
  `output_images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'Koha ', 'yes', 'mnstore.jpg'),
(2, 'Koha Manufacturer', '', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `productdetailsqueries`
--

CREATE TABLE `productdetailsqueries` (
  `ID` int(255) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `product_type` varchar(500) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `manufacturer_id` int(10) NOT NULL,
  `v_size` int(10) NOT NULL,
  `h_size` int(10) NOT NULL,
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

INSERT INTO `products` (`product_id`, `product_type`, `p_cat_id`, `cat_id`, `manufacturer_id`, `v_size`, `h_size`, `product_title`, `product_url`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_psp_price`, `product_desc`, `product_features`, `product_video`, `product_keywords`, `product_label`, `status`) VALUES
(1, 'Marketplace', 9, 1, 1, 3, 2, 'Ironman', 'iron-man', 'ironman22.png', 'ironman32.png', 'ironman43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the Iron man image\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'iron,man,ironman', 'New', 'product'),
(2, 'Marketplace', 9, 1, 1, 3, 2, 'The Joker', 'the-joker', 'joker22.png', 'joker32.png', 'joker43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the Joker Image\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'joker,joker image', 'New', 'product'),
(3, 'Marketplace', 9, 1, 1, 3, 2, 'King of the Jungle', 'king-of-the-jungle', 'animatedlion22.png', 'animatedlion32.png', 'animatedlion43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the King of the Jungle\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'King , King of the Jungle', 'New', 'product'),
(4, 'Marketplace', 9, 1, 1, 3, 2, 'Gowthama', 'gowthama-image', 'buddha22.png', 'buddha32.png', 'buddha43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the Gowthama Image\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'gowthama , gowthama - image', 'New', 'product'),
(5, 'Marketplace', 9, 1, 1, 3, 2, 'Eye of the Storm', 'eye-of-the-storm', 'lady22.png', 'lady32.png', 'lady43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the Eye of the Storm Image\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Eye of the Storm', 'New', 'product'),
(6, 'Marketplace', 9, 1, 1, 3, 2, 'Manâ€™s best friend', 'mans-best-friend', 'blackdog22.png', 'blackdog32.png', 'blackdog33.png', 5994, 5994, '\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 3 * 3 ) of the Mans best friend image\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'mans best friend', 'New', 'product'),
(7, 'Marketplace', 9, 1, 1, 3, 2, 'Marilyn Monroe', 'marilyn-monroe', 'marilynmonroe32.png', 'marilynmonroe32.png', 'marilynmonroe43.png', 5994, 5994, '\r\nPixelated Image Breakdowns ( 3 * 2 , 4 * 3 ) of the Marilyn Monroe Image\r\n\r\n', '\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n', 'Marilyn Monroe,Marilyn,Monroe,Marilyn-Monroe', 'New', 'product'),
(8, 'Marketplace', 9, 1, 1, 3, 3, 'Ojos', 'ojos-image', 'eye22.png', 'ojosnew33.png', 'ojosnew34.png', 8991, 8991, '\r\nPixelated Image breakdowns ( 2 * 2, 3 * 3 , 3 * 4 ) of the Ojos Image\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Ojos , Ojos - Image', 'New', 'product'),
(9, 'Marketplace', 9, 1, 1, 3, 2, 'Leo', 'leo-image', 'lion22.png', 'lion32.png', 'lion43.png', 5994, 5994, '\r\n\r\n\r\n\r\n\r\n\r\n\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 2 and 4 * 3 ) of the Leo Image\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Leo , Leo - Image', 'New', 'product'),
(10, 'Marketplace', 9, 1, 1, 4, 4, 'Rudra', 'rudra-image', 'mahesha22.png', 'rudra34.png', 'rudra44.png', 15984, 15984, '\r\nPixelated Image breakdowns ( 2 * 2 , 3 * 4 and 4 * 4 ) of the Rudra Image\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Rudra , Rudra-image', 'New', 'product'),
(11, 'Accessories', 10, 2, 2, 0, 0, 'WallMount', 'wallmount', '@OsumWalls Desktop Guardian.png', '@OsumWalls Desktop Odyssey.png', '@OsumWalls Desktop Soul Of The Arctic.jpg', 99, 99, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'WallMountWallMountWallMount', 'New', 'product'),
(12, 'Accessories', 10, 2, 2, 0, 0, 'LED Backlight', 'ledbacklight', '@OsumWalls Desktop Sunset Drive.jpg', '2e61c67.jpg', '2436c68.jpg', 499, 499, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'LEDBacklight', 'New', 'product'),
(10001, 'Custom', 11, 3, 3, 0, 0, 'Custom Image', 'https://create.thekoha.com', 'NULL', 'NULL', 'NULL', 0, 0, 'Custom Image', 'Custom Image', 'Custom Image', 'Custom Image', 'Custom Image', 'Custom Image'),
(10032, 'Marketplace', 9, 1, 1, 3, 2, 'OverallMP_Bundle', 'overallmp-bundle', 'testimage2.jpg', 'testimage.png', 'testimage3.png', 72927, 72927, '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'mp , overallmp , bundle', 'New', 'bundle'),
(10033, 'Accessories', 10, 2, 2, 0, 0, 'Accessories_Bundle', 'acc-bundle', '@OsumWalls Desktop Guardian.png', '@OsumWalls Desktop Soul Of The Arctic.jpg', '@OsumWalls Desktop Sunset Drive.jpg', 587, 587, '\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n', '\r\n\r\n\r\n\r\n\r\n\r\n', 'acc , accessories , bundle', 'New', 'bundle');

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
(9, 'All Marketplace Items', 'yes', ''),
(10, 'Accessories', 'yes', '[need2befree].jpg');

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
-- Table structure for table `shippinginfodata`
--

CREATE TABLE `shippinginfodata` (
  `ID` int(255) NOT NULL,
  `customer_email` text NOT NULL,
  `country` text NOT NULL,
  `sfname` text NOT NULL,
  `slname` text NOT NULL,
  `saddress` text NOT NULL,
  `sapartment` text NOT NULL,
  `scity` text NOT NULL,
  `sstate` text NOT NULL,
  `spincode` text NOT NULL,
  `sphone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shiprocket_token`
--

CREATE TABLE `shiprocket_token` (
  `id` int(255) NOT NULL,
  `token` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_on` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shiprocket_token`
--

INSERT INTO `shiprocket_token` (`id`, `token`, `added_on`) VALUES
(2, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjIzMDkyNTksImlzcyI6Imh0dHBzOi8vYXBpdjIuc2hpcHJvY2tldC5pbi92MS9leHRlcm5hbC9hdXRoL2xvZ2luIiwiaWF0IjoxNjYxMTQ2MjQxLCJleHAiOjE2NjIwMTAyNDEsIm5iZiI6MTY2MTE0NjI0MSwianRpIjoicWxnOGR1MlVDdzQwWTd6VSJ9.2Rw6iYOD9_pCALhmXHwEWaNG2VSpMwhAJsD_npD7wqU', '2022-08-22 11:00:41.000000');

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
(10, 'MN Images', 'mnstore.jpg', '\r\n<center>\r\nKoramangala , Bangalore â€“ 560089\r\n</center>\r\n<br/>\r\n<center>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.\r\n</center>\r\n', 'View Map', 'https://www.thekoha.com/shop.php'),
(11, 'TY Photography Stores', 'mnstore.jpg', '\r\n<center>\r\nJayanagar , Bangalore â€“ 560089\r\n</center>\r\n<br/>\r\n<center>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.\r\n</center>\r\n\r\n\r\n\r\n', 'View Map', 'https://www.thekoha.com/shop.php'),
(12, 'sadsad', 'mnstore.jpg', '<center>\r\nHSR Layout , Bangalore â€“ 560089\r\n</center>\r\n<br/>\r\n<center>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero erat, aliquet eget mauris ut, dictum sagittis libero. Nam at dui dapibus, semper dolor ac, malesuada mi. Duis quis lobortis arcu. Vivamus sed sodales orci, non varius dolor.\r\n</center>\r\n\r\n\r\n', 'View Map', 'https://www.thekoha.com/shop.php');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `ID` int(255) NOT NULL,
  `email_id` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wishlist_id`, `customer_id`, `product_id`) VALUES
(1, 11, 1),
(2, 11, 3),
(3, 11, 7);

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
-- Indexes for table `jwt_auth`
--
ALTER TABLE `jwt_auth`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `productdetailsqueries`
--
ALTER TABLE `productdetailsqueries`
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `shippinginfodata`
--
ALTER TABLE `shippinginfodata`
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
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bundle_product_relation`
--
ALTER TABLE `bundle_product_relation`
  MODIFY `rel_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `coupon_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `jwt_auth`
--
ALTER TABLE `jwt_auth`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `manufacturers`
--
ALTER TABLE `manufacturers`
  MODIFY `manufacturer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productdetailsqueries`
--
ALTER TABLE `productdetailsqueries`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10034;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shippinginfodata`
--
ALTER TABLE `shippinginfodata`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shiprocket_token`
--
ALTER TABLE `shiprocket_token`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `store_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wishlist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
