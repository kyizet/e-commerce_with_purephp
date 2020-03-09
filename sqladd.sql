-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 09, 2020 at 01:41 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `acom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_firstName` varchar(50) NOT NULL,
  `admin_lastName` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_firstName`, `admin_lastName`, `admin_username`, `admin_password`, `admin_email`, `reg_date`) VALUES
(1, 'Kyi', 'Zin', 'kyizin', '123', 'zet11zet@icloud.com', '2020-03-07 02:32:37');

-- --------------------------------------------------------

--
-- Table structure for table `chibis`
--

CREATE TABLE `chibis` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chibis`
--

INSERT INTO `chibis` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(2, 'Kirito Chibi', 'SAO', 6.99, 8, 'Made in England', '1583752052.png'),
(3, 'Grimmjow Chibi', 'Bleach', 7.99, 8, 'Made in England', '1583752153.png'),
(4, 'Kakashi Chibi', 'Naruto', 8.99, 14, 'Made in England', '1583752193.png'),
(5, 'Naruto Chibi', 'Naruto Shippuden', 11.99, 2, 'Made in Vietnam', '1583752532.png');

-- --------------------------------------------------------

--
-- Table structure for table `costumes`
--

CREATE TABLE `costumes` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `costumes`
--

INSERT INTO `costumes` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(1, 'Harley Quinn ', 'Suicide Squad', 24.99, 2, 'Made in England\r\n100% Cotten', '1583746941.png'),
(2, 'Joker', 'Personna5', 27.99, 2, 'Made in England', '1583752314.png'),
(3, 'Kizuna Ai', 'Virtual Youtuber', 28.99, 9, 'Made in England', '1583752367.png'),
(4, 'Nezuko Costume', 'Demon Slayer', 49.99, 7, 'Made in England', '1583752411.png'),
(5, 'Rachel Costume', 'Satsuriku no Tenshi', 28.99, 3, 'Made in England', '1583752443.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_firstName` varchar(50) DEFAULT NULL,
  `customer_lastName` varchar(50) DEFAULT NULL,
  `customer_username` varchar(50) NOT NULL,
  `customer_email` varchar(100) DEFAULT NULL,
  `customer_password` varchar(50) NOT NULL,
  `customer_address` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(20) DEFAULT NULL,
  `customer_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_firstName`, `customer_lastName`, `customer_username`, `customer_email`, `customer_password`, `customer_address`, `customer_phone`, `customer_photo`) VALUES
(1, 'testfirst', 'testlast', 'testusername', 'test@gmail.com', 'test', 'test', '09123', NULL),
(2, '', '', '1', '', '2', '', '', '1583550759.png'),
(3, 'Thant', 'Sin Soe', 'thantsinsoe', 'thantsinsoe@gmail.com', '123', 'Yangon, Myanmar', '09123456789', '1583752908.png'),
(4, 'Htoo Lel', 'Moo', 'htoo', 'hlm@gmail.com', '123', 'Yangon, Myanmar', '09976', '1583760540.png');

-- --------------------------------------------------------

--
-- Table structure for table `figures`
--

CREATE TABLE `figures` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `figures`
--

INSERT INTO `figures` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(9, 'Sasuke Figure', 'Naruto', 49.99, 6, 'Made in England\r\nMade of Good Quality Plastic', '1583746879.png'),
(10, 'Roronoa Zoro Figure', 'One Piece', 29.99, 3, 'Made in England', '1583752500.png'),
(12, 'Kakashi Figure', 'Naruto Shippuden', 48.99, 12, 'Made in Singapore', '1583752673.png');

-- --------------------------------------------------------

--
-- Table structure for table `glasses`
--

CREATE TABLE `glasses` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `glasses`
--

INSERT INTO `glasses` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(1, 'asdfsad', 'asdfasdf', 14, 123, 'asdfasdf', '1583760670.png');

-- --------------------------------------------------------

--
-- Table structure for table `keychains`
--

CREATE TABLE `keychains` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keychains`
--

INSERT INTO `keychains` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(6, 'Kimetsu No Yaiba Characters', 'Demon Slayer', 9.99, 18, 'Made from good quality plastic\r\n100% Authentic\r\nMade in England', '1583747160.png'),
(7, 'SAO Characters', 'Sword Art Online', 9.99, 19, 'Made in England\r\n100% Authentic', '1583747258.png');

-- --------------------------------------------------------

--
-- Table structure for table `mugs`
--

CREATE TABLE `mugs` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mugs`
--

INSERT INTO `mugs` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(3, 'Pokeball Mug', 'Pokemon', 14.99, 4, 'Mug with Pokeball\r\nGood Quality\r\nMade in England', '1583746863.png'),
(4, 'L Mug', 'Death Note', 24.99, 8, 'Made in England', '1583746991.png'),
(5, 'Luffy Mug', 'One Piece', 19.99, 8, 'Made in England\r\n100% Authentic\r\nMade from plastic', '1583747378.png');

-- --------------------------------------------------------

--
-- Table structure for table `shirts`
--

CREATE TABLE `shirts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `anime` varchar(100) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `detail` text,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shirts`
--

INSERT INTO `shirts` (`id`, `name`, `anime`, `price`, `quantity`, `detail`, `photo`) VALUES
(1, 'Naruto Shirt', 'Naruto', 14.99, 8, '100% Cotton\r\nMade in England', '1583747497.png'),
(2, 'Lelouch Shirt', 'Code Geass', 18.99, 2, 'Made in England\r\n100% Authentic', '1583747571.png'),
(3, 'Yato Shirt', 'Noragami', 18.99, 2, 'Made in England\r\n100% Authentic', '1583747622.png'),
(4, 'Rem & Ram', 'ReZero', 19.99, 8, 'Made in England\r\n100% Authentic', '1583747661.png'),
(5, 'Danganronpa Shirt', 'Danganronpa', 19.99, 4, 'Made in England\r\n100% Authentic', '1583747702.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `chibis`
--
ALTER TABLE `chibis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `costumes`
--
ALTER TABLE `costumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `figures`
--
ALTER TABLE `figures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glasses`
--
ALTER TABLE `glasses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keychains`
--
ALTER TABLE `keychains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mugs`
--
ALTER TABLE `mugs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shirts`
--
ALTER TABLE `shirts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chibis`
--
ALTER TABLE `chibis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `costumes`
--
ALTER TABLE `costumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `figures`
--
ALTER TABLE `figures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `glasses`
--
ALTER TABLE `glasses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keychains`
--
ALTER TABLE `keychains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mugs`
--
ALTER TABLE `mugs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `shirts`
--
ALTER TABLE `shirts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

