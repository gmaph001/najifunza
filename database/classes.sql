-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 10:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `najifunza`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_ID` int(11) NOT NULL,
  `creator` int(9) NOT NULL,
  `class_name` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `class_photo` varchar(1000) NOT NULL,
  `class_key` int(9) NOT NULL,
  `no_users` int(100) NOT NULL,
  `create_date` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_ID`, `creator`, `class_name`, `password`, `class_photo`, `class_key`, `no_users`, `create_date`) VALUES
(3, 696921611, 'Gmaph Class', '$2y$10$1oU4Cl0ZhTfwW4B2yQ22Iexr1fxxLxePVkFMN4NMeAobop0HMYucm', 'media/classes/images/584055864.jpg', 584055864, 0, '2025-05-19'),
(5, 696921611, 'Anonymous', '$2y$10$GE46r0OERTxZU61tUtkTgORFbdcygd8O8X1PYcpvM4EU/c2HVMO76', 'media/classes/images/235573918.jpg', 235573918, 0, '2025-05-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
