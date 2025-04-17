-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2025 at 10:41 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `secondname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `school` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(700) NOT NULL,
  `password` varchar(9) NOT NULL,
  `rank` int(5) NOT NULL,
  `codename` varchar(20) NOT NULL,
  `userkey` int(9) NOT NULL,
  `OTP` int(6) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `firstname`, `secondname`, `lastname`, `school`, `phone`, `username`, `email`, `password`, `rank`, `codename`, `userkey`, `OTP`, `photo`, `security`) VALUES
(1, 'GEORGE', 'GODSON', 'MAPHOLE', 'SHAABAN ROBERT SECONDARY SCHOOL', '0748554514', 'gmaph__001', 'gmaph001@gmail.com', 'SRSS14552', 1, 'TEA', 215441274, 730851, 'media/images/prof_pics/pexels-picturemechaniq-1749303.jpg', '::1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
