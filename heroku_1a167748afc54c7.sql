-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: us-cdbr-east-05.cleardb.net
-- Generation Time: Feb 03, 2022 at 07:48 PM
-- Server version: 5.6.50-log
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_1a167748afc54c7`
--

-- --------------------------------------------------------

--
-- Table structure for table `lego_images`
--

CREATE TABLE `lego_images` (
  `id` int(255) NOT NULL,
  `uploaded_image` varchar(500) NOT NULL,
  `bg_1` varchar(500) NOT NULL,
  `bg_2` varchar(500) NOT NULL,
  `bg_3` varchar(500) NOT NULL,
  `bg_4` varchar(500) NOT NULL,
  `bg_5` varchar(500) NOT NULL,
  `bg_6` varchar(500) NOT NULL,
  `bg_7` varchar(500) NOT NULL,
  `color_code` varchar(500) NOT NULL,
  `csv` varchar(500) NOT NULL,
  `lego` varchar(500) NOT NULL,
  `lego_gap` varchar(500) NOT NULL,
  `output_images` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lego_images`
--

INSERT INTO `lego_images` (`id`, `uploaded_image`, `bg_1`, `bg_2`, `bg_3`, `bg_4`, `bg_5`, `bg_6`, `bg_7`, `color_code`, `csv`, `lego`, `lego_gap`, `output_images`) VALUES
(4, 'kidimage.jpeg', 'kidimage._bg1.png', 'kidimage._bg2.png', 'kidimage._bg3.png', 'kidimage._bg4.png', 'kidimage._bg5.png', 'outputs/kidimage._bg6.png', 'kidimage._bg7.png', 'kidimage._color_code.png', 'kidimage._csv.csv', 'kidimage._lego.png', 'kidimage._lego_gap.png', 'kidimage._output.png'),
(14, 'KOHA HD logo 2.png', 'KOHA HD logo 2_bg1.png', 'KOHA HD logo 2_bg2.png', 'KOHA HD logo 2_bg3.png', 'KOHA HD logo 2_bg4.png', 'KOHA HD logo 2_bg5.png', 'outputs/KOHA HD logo 2_bg6.png', 'KOHA HD logo 2_bg7.png', 'KOHA HD logo 2_color_code.png', 'KOHA HD logo 2_csv.csv', 'KOHA HD logo 2_lego.png', 'KOHA HD logo 2_lego_gap.png', 'KOHA HD logo 2_output.png'),
(24, '2.png', '2_bg1.png', '2_bg2.png', '2_bg3.png', '2_bg4.png', '2_bg5.png', 'outputs/2_bg6.png', '2_bg7.png', '2_color_code.png', '2_csv.csv', '2_lego.png', '2_lego_gap.png', '2_output.png'),
(34, 'wholelogo.png', 'wholelogo_bg1.png', 'wholelogo_bg2.png', 'wholelogo_bg3.png', 'wholelogo_bg4.png', 'wholelogo_bg5.png', 'outputs/wholelogo_bg6.png', 'wholelogo_bg7.png', 'wholelogo_color_code.png', 'wholelogo_csv.csv', 'wholelogo_lego.png', 'wholelogo_lego_gap.png', 'wholelogo_output.png'),
(44, '20200606_111414.jpg', '20200606_111414_bg1.png', '20200606_111414_bg2.png', '20200606_111414_bg3.png', '20200606_111414_bg4.png', '20200606_111414_bg5.png', 'outputs/20200606_111414_bg6.png', '20200606_111414_bg7.png', '20200606_111414_color_code.png', '20200606_111414_csv.csv', '20200606_111414_lego.png', '20200606_111414_lego_gap.png', '20200606_111414_output.png'),
(54, '20200531_162726.jpg', '20200531_162726_bg1.png', '20200531_162726_bg2.png', '20200531_162726_bg3.png', '20200531_162726_bg4.png', '20200531_162726_bg5.png', 'outputs/20200531_162726_bg6.png', '20200531_162726_bg7.png', '20200531_162726_color_code.png', '20200531_162726_csv.csv', '20200531_162726_lego.png', '20200531_162726_lego_gap.png', '20200531_162726_output.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lego_images`
--
ALTER TABLE `lego_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lego_images`
--
ALTER TABLE `lego_images`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
