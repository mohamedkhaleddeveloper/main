-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2016 at 09:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `subtain`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `date`) VALUES
(1, 'ØªØ§Ø±ÙˆØª', '2016-11-08 15:09:10'),
(2, 'ØªØ§Ø±ÙˆØª', '2016-11-08 15:09:10'),
(3, 'Ø³Ù†Ø§Ø¨Ø³', '2016-11-08 15:10:55'),
(4, 'Ø§Ù„Ø±Ø¨ÙŠØ¹Ù‡', '2016-11-08 15:11:42'),
(5, 'Ø¯Ø§Ø±ÙŠÙ†', '2016-11-08 15:12:11'),
(6, 'Ø§Ù„Ø´Ø§Ø·Ø¦', '2016-11-08 15:12:26'),
(7, 'Ø§Ù„Ø¯Ø®Ù„ Ø§Ù„Ù…Ø­Ø¯ÙˆØ¯', '2016-11-08 15:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `castumer-reapair`
--

CREATE TABLE `castumer-reapair` (
  `idc` int(11) NOT NULL,
  `namec` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `castumer-reapair`
--

INSERT INTO `castumer-reapair` (`idc`, `namec`, `phone`, `address`, `date`) VALUES
(1, '', 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', 507452132, '2016-11-07 15:48:50'),
(2, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0562233441', 1, '2016-11-07 15:49:28'),
(3, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0507452132', 1, '2016-11-07 15:58:42'),
(4, 'asdasdas', '0541215412', 1, '2016-11-07 17:26:17'),
(5, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0509988665', 1, '2016-11-07 17:27:29'),
(6, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0501241241', 1, '2016-11-07 17:29:54'),
(7, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0505541241', 1, '2016-11-07 17:30:18'),
(8, 'sdfsdf', '0501241211', 1, '2016-11-08 06:30:25'),
(9, 'mohamed', '0506644885', 1, '2016-11-08 06:37:16'),
(10, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0521417441', 2, '2016-11-09 15:08:23'),
(11, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0551417441', 2, '2016-11-09 15:09:21'),
(12, 'Ù…Ø­Ù…Ø¯ Ø®Ø§Ù„Ø¯', '0509977665', 4, '2016-11-09 15:12:24'),
(13, 'Ø­Ø³ÙŠÙ† Ø§Ù„Ø¹Ù„ÙˆÙŠ', '0521425212', 3, '2016-11-09 17:19:57');

-- --------------------------------------------------------

--
-- Table structure for table `doubleo`
--

CREATE TABLE `doubleo` (
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doubleo`
--

INSERT INTO `doubleo` (`price`) VALUES
(12),
(12.5);

-- --------------------------------------------------------

--
-- Table structure for table `factor`
--

CREATE TABLE `factor` (
  `id` int(11) NOT NULL,
  `namef` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `occupation` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `factor`
--

INSERT INTO `factor` (`id`, `namef`, `phone`, `occupation`, `date`) VALUES
(1, 'Ø¬Ø§Ù†ÙŠ', '0599944885', '', '2016-11-08 08:11:21'),
(2, 'Ø¬Ø§Ù†ÙŠ', '0599944885', '', '2016-11-08 08:11:30'),
(3, 'Ø¬Ø§Ù†ÙŠ', '0599944885', '', '2016-11-08 08:11:59'),
(4, 'Ø¬Ø§Ù†ÙŠ', '0599944885', '', '2016-11-08 08:12:06'),
(5, 'Ø¬Ø§Ù†ÙŠ', '0599944885', 'ÙÙ†ÙŠ ØªÙƒÙŠÙŠÙØ§Øª', '2016-11-08 08:13:16');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idi` int(11) NOT NULL,
  `bill` varchar(300) NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `expenses` double NOT NULL,
  `totalc` double NOT NULL,
  `totalm` double NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `note` text NOT NULL,
  `orderid` int(11) NOT NULL,
  `invdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`idi`, `bill`, `price`, `discount`, `expenses`, `totalc`, `totalm`, `payment`, `note`, `orderid`, `invdate`) VALUES
(1, '0690/B', 200, 0, 30, 170, 170, 1, '', 1, '2016-11-12 16:19:30'),
(2, '0690/B', 200, 0, 30, 170, 170, 1, '', 1, '2016-11-12 16:20:45'),
(3, '55', 400, 200, 50, 150, 140, 2, 'new', 1, '2016-11-12 17:26:14'),
(4, '0962/B', 600, 50, 30, 520, 507, 2, '', 0, '2016-11-12 17:26:54'),
(5, '0962/B', 600, 50, 3, 547, 533.325, 2, '', 0, '2016-11-12 17:27:49');

-- --------------------------------------------------------

--
-- Table structure for table `order-repair`
--

CREATE TABLE `order-repair` (
  `ido` int(11) NOT NULL,
  `castumerid` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `device` varchar(300) NOT NULL,
  `day` varchar(150) NOT NULL,
  `dateo` date NOT NULL,
  `timeo` int(2) NOT NULL,
  `timing` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `factorid` int(11) NOT NULL,
  `enterdata` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order-repair`
--

INSERT INTO `order-repair` (`ido`, `castumerid`, `area`, `device`, `day`, `dateo`, `timeo`, `timing`, `active`, `factorid`, `enterdata`) VALUES
(1, 7, 1, 'machine', 'saturday', '2016-11-16', 8, 'am', 1, 3, '2016-11-09 08:21:31'),
(2, 1, 1, 'machine', 'saturady', '2016-11-16', 3, 'am', 0, 0, '2016-11-09 08:21:31'),
(3, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø³Ø¨Øª', '2016-11-12', 8, 'pm', 0, 0, '2016-11-09 08:21:31'),
(4, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø³Ø¨Øª', '2016-11-12', 8, 'am', 0, 5, '2016-11-09 08:21:31'),
(5, 6, 1, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø³Ø¨Øª', '2016-11-12', 4, 'am', 0, 8, '2016-11-09 08:21:31'),
(6, 6, 1, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø³Ø¨Øª', '0000-00-00', 4, 'pm', 0, 0, '2016-11-09 08:21:31'),
(7, 6, 1, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø³Ø¨Øª', '0000-00-00', 4, 'pm', 0, 0, '2016-11-09 08:21:31'),
(8, 6, 3, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '0000-00-00', 2, 'pm', 0, 0, '2016-11-09 08:21:31'),
(9, 6, 3, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '0000-00-00', 2, 'pm', 0, 0, '2016-11-09 08:21:31'),
(10, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-17', 5, 'pm', 0, 0, '2016-11-09 08:21:31'),
(11, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø­Ø¯', '0000-00-00', 4, 'pm', 0, 0, '2016-11-09 08:21:31'),
(12, 0, 0, '', '', '2016-11-05', 0, '', 0, 0, '2016-11-09 08:21:31'),
(13, 6, 4, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '0000-00-00', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(14, 6, 4, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '0000-00-00', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(15, 6, 4, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '0000-00-00', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(16, 6, 2, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '0000-00-00', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(17, 6, 2, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '0000-00-00', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(18, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '0000-00-00', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(19, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø³Ø¨Øª', '0000-00-00', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(20, 6, 2, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '0000-00-00', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(21, 6, 1, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-16', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(22, 6, 3, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-15', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(23, 6, 1, ' Ù…ÙƒÙŠÙ Ø³Ø¨Ù„Øª', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(24, 6, 5, ' Ù…ÙƒÙŠÙ Ø³Ø¨Ù„Øª', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(25, 6, 5, ' Ù…ÙƒÙŠÙ Ø³Ø¨Ù„Øª', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-09', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(26, 6, 5, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-16', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(27, 6, 5, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-16', 0, 'am', 0, 0, '2016-11-09 08:21:31'),
(28, 6, 5, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-16', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(29, 6, 3, ' Ø¨ÙˆØªØ§Ø¬Ø§Ø²', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(30, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(31, 6, 1, ' ØºØ³Ø§Ù„Ù‡', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 0, 'pm', 0, 0, '2016-11-09 08:21:31'),
(32, 6, 2, ' Ù…ÙƒÙŠÙ Ø´Ø¨Ø§Ùƒ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-17', 3, 'pm', 0, 0, '2016-11-09 08:21:31'),
(33, 2, 1, ' ÙØ±ÙŠØ²Ø±', 'Ø§Ù„Ø§Ø±Ø¨Ø¹Ø§Ø¡', '2016-11-09', 6, 'pm', 1, 0, '2016-11-09 08:21:31'),
(34, 3, 5, ' ØªÙ„Ø§Ø¬Ù‡', 'Ø§Ù„Ø§Ø±Ø¨Ø¹Ø§Ø¡', '2016-11-09', 7, 'pm', 0, 0, '2016-11-09 13:10:33'),
(35, 0, 0, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-17', 7, 'am', 0, 0, '2016-11-09 17:02:33'),
(36, 5, 1, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-10', 3, 'pm', 0, 20, '2016-11-09 17:02:38'),
(37, 3, 1, ' ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-10', 7, 'pm', 0, 0, '2016-11-09 17:03:22'),
(38, 0, 5, ' ', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '2016-11-17', 2, 'pm', 0, 0, '2016-11-09 17:06:11'),
(39, 0, 3, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-14', 2, 'pm', 0, 0, '2016-11-09 17:07:07'),
(40, 6, 3, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-17', 4, 'pm', 0, 0, '2016-11-09 17:09:02'),
(41, 6, 1, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-16', 2, 'pm', 0, 0, '2016-11-09 17:11:33'),
(42, 6, 1, ' ', 'Ø§Ù„Ø§Ø­Ø¯', '2016-11-16', 2, 'pm', 0, 0, '2016-11-09 17:11:38'),
(43, 0, 0, ' ', '10', '0000-00-00', 0, '', 0, 0, '2016-11-09 17:12:48'),
(44, 6, 1, ' ', 'Ø§Ù„Ø³Ø¨Øª', '2016-11-18', 1, 'pm', 0, 0, '2016-11-09 17:13:49'),
(45, 6, 1, ' ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-15', 4, 'pm', 0, 0, '2016-11-09 17:14:21'),
(46, 3, 1, ' ', 'Ø§Ù„Ø§Ø«Ù†ÙŠÙ†', '2016-11-17', 3, 'pm', 0, 0, '2016-11-09 17:20:47'),
(47, 3, 1, ' ', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '2016-11-09', 9, 'pm', 0, 0, '2016-11-09 17:22:33'),
(48, 3, 0, ' ', '', '0000-00-00', 0, '', 0, 0, '2016-11-09 17:25:33'),
(49, 3, 0, ' ', '', '0000-00-00', 0, '', 0, 0, '2016-11-09 17:26:18'),
(50, 3, 0, ' ÙØ±ÙŠØ²Ø±', 'Ø§Ù„Ø«Ù„Ø§Ø«Ø§Ø¡', '2016-11-11', 8, 'pm', 0, 0, '2016-11-09 17:27:23'),
(51, 2, 5, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø§Ø±Ø¨Ø¹Ø§Ø¡', '2016-11-10', 7, 'pm', 0, 0, '2016-11-09 17:28:10'),
(52, 0, 0, ' ', '11', '0000-00-00', 0, '', 0, 0, '2016-11-10 12:28:29'),
(53, 6, 4, ' Ù†Ø´Ø§ÙÙ‡', 'Ø§Ù„Ø®Ù…ÙŠØ³', '2016-11-10', 9, 'pm', 0, 0, '2016-11-10 17:25:10'),
(54, 2, 5, ' ÙØ±ÙŠØ²Ø±', 'Ø§Ù„Ø®Ù…ÙŠØ³', '2016-11-10', 10, 'pm', 0, 0, '2016-11-10 17:29:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `castumer-reapair`
--
ALTER TABLE `castumer-reapair`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `factor`
--
ALTER TABLE `factor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idi`);

--
-- Indexes for table `order-repair`
--
ALTER TABLE `order-repair`
  ADD PRIMARY KEY (`ido`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `castumer-reapair`
--
ALTER TABLE `castumer-reapair`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `factor`
--
ALTER TABLE `factor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order-repair`
--
ALTER TABLE `order-repair`
  MODIFY `ido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
