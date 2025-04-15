-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2025 at 10:46 PM
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
-- Database: `students_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rank` int(1) NOT NULL,
  `codename` varchar(500) NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `OTP` int(6) DEFAULT NULL,
  `userkey` int(9) NOT NULL,
  `subject` text DEFAULT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `username`, `email`, `password`, `rank`, `codename`, `photo`, `OTP`, `userkey`, `subject`, `security`) VALUES
(29, '@_muhyy', 'muhy@gmail.com', 'muhadditha100%', 6, 'PRF', 'media/images/prof_pics/wp3998050-5k-wallpapers.jpg', NULL, 362587771, NULL, ''),
(40, 'ann_mosha', 'annmosha02@gmail.com', 'MOSHA1970', 5, 'TEA', 'media/images/prof_pics/login.png', NULL, 565854186, NULL, ''),
(8, 'deni_dube', 'denisdube@gmail.com', '123456789', 5, 'TEA', 'media/images/prof_pics/wp3998050-5k-wallpapers.jpg', NULL, 892439796, 'MATHEMATICS', '::1'),
(44, 'gmaph001', 'gmaph001@gmail.com', '123456789', 6, 'PRF', 'media/images/prof_pics/MacOS Hello 4K.jpeg', NULL, 803236010, NULL, ''),
(49, 'gmaph__001', 'gmaph001@gmail.com', 'SRSS14552', 7, 'PRGM', 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', NULL, 657806248, NULL, '::1'),
(20, 'joe_nchimbi', 'joenchimbi@gmail.com', '987654321', 3, 'AM', 'media/images/prof_pics/chris-barbalis-KyuNQkQacLE-unsplash.jpg', NULL, 283369292, NULL, ''),
(36, 'kalu_G', 'kalugabasililo@gmail.com', 'sililo_kalu', 5, 'TEA', 'media/images/prof_pics/wallpaperflare.com_wallpaper (26).jpg', NULL, 964841902, 'MATHEMATICS', ''),
(50, 'kari_punit', 'karishma@gmail.com', 'kari_punit', 7, 'PRGM', 'media/images/prof_pics/peakpx (1).jpg', NULL, 525855277, NULL, ''),
(30, 'nahir_nazir', 'nahirvirsam@gmail.com', 'nahir_nazir', 6, 'PRF', 'media/images/prof_pics/red-car.jpg', NULL, 720861492, NULL, ''),
(27, 'omz', 'coolomar42@gmail.com', 'oozers12345', 7, 'PRGM', 'media/images/prof_pics/wallpaperflare.com_wallpaper (4).jpg', NULL, 959152665, NULL, '::1'),
(37, 'prud_nyaru', 'gmaph001@gmail.com', '123456789', 5, 'TEA', 'media/images/prof_pics/login.png', NULL, 989735618, NULL, ''),
(9, 'S.D.Ramji', 'ramjisrss@gmail.com', 's.d.ramji', 1, 'HM', 'media/images/prof_pics/wallpaperflare.com_wallpaper (15).jpg', NULL, 449277543, NULL, '::1'),
(21, 'salim_kibwana', 'salimkibwana05@gmail.com', '123456789', 5, 'TEA', 'media/images/prof_pics/peakpx (6).jpg', NULL, 204413985, 'PHYSICS', '');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assign_ID` int(11) NOT NULL,
  `teacher` text NOT NULL,
  `subject` text NOT NULL,
  `assignment` text NOT NULL,
  `class` int(1) NOT NULL,
  `stream` text NOT NULL,
  `assign_date` date NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assign_ID`, `teacher`, `subject`, `assignment`, `class`, `stream`, `assign_date`, `due_date`) VALUES
(1, 'THOMAS', 'MATHEMATICS', 'media/documents/assignments/joint_mth_1.pdf', 6, 'PMC', '2024-07-25', '2024-09-26'),
(2, 'THOMAS', 'MATHEMATICS', 'media/documents/assignments/joint_mth_1.pdf', 6, 'PCM', '2024-07-10', '2024-07-26'),
(3, 'THOMAS', 'MATHEMATICS', 'media/documents/assignments/joint_mth_1.pdf', 6, 'PGM', '2024-07-10', '2024-07-26'),
(4, 'THOMAS', 'MATHEMATICS', 'media/documents/assignments/joint_mth_1.pdf', 6, 'EGM', '2024-07-10', '2024-07-26'),
(5, 'SALIM', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PMC', '2024-07-10', '2024-07-26'),
(6, 'SALIM', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCM', '2024-07-10', '2024-07-26'),
(7, 'SALIM', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCB', '2024-07-10', '2024-07-26'),
(8, 'SALIM', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PGM', '2024-07-10', '2024-07-26'),
(9, 'MSESE', 'COMPUTER', 'media/documents/assignments/ComputerScience1-F6-2021.pdf', 6, 'PMC', '2024-07-17', '2024-07-26'),
(10, 'MR. KALUGABA', 'MATHEMATICS', 'media/documents/assignments/ADVANCED MATHEMATICS-1-MOCK-2024.pdf', 6, 'PMC', '2024-08-22', '2024-08-31'),
(11, 'MR. KALUGABA', 'MATHEMATICS', 'media/documents/assignments/ADVANCED MATHEMATICS-1-MOCK-2024.pdf', 6, 'PCM', '2024-08-22', '2024-08-31'),
(12, 'MR. KALUGABA', 'MATHEMATICS', 'media/documents/assignments/ADVANCED MATHEMATICS-1-MOCK-2024.pdf', 6, 'PGM', '2024-08-22', '2024-08-31'),
(13, 'MR. KALUGABA', 'MATHEMATICS', 'media/documents/assignments/ADVANCED MATHEMATICS-1-MOCK-2024.pdf', 6, 'EGM', '2024-08-22', '2024-08-31'),
(14, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PMC', '2024-08-22', '2024-08-31'),
(15, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCM', '2024-08-22', '2024-08-31'),
(16, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCB', '2024-08-22', '2024-08-31'),
(17, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PGM', '2024-08-22', '2024-08-31'),
(18, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PMC', '2024-08-22', '2024-08-31'),
(19, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCM', '2024-08-22', '2024-08-31'),
(20, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCB', '2024-08-22', '2024-08-31'),
(21, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PGM', '2024-08-22', '2024-08-31'),
(22, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PMC', '2024-08-22', '2024-08-31'),
(23, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCM', '2024-08-22', '2024-08-31'),
(24, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCB', '2024-08-22', '2024-08-31'),
(25, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PGM', '2024-08-22', '2024-08-31'),
(26, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PMC', '2024-08-22', '2024-08-31'),
(27, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCM', '2024-08-22', '2024-08-31'),
(28, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PCB', '2024-08-22', '2024-08-31'),
(29, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/joint_phy_1.pdf', 6, 'PGM', '2024-08-22', '2024-08-31'),
(30, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(31, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(32, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(33, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(34, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(35, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(36, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(37, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(38, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(39, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(40, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(41, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(42, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(43, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(44, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(45, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(46, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(47, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(48, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(49, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(50, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(51, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(52, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(53, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(54, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(55, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(56, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(57, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(58, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(59, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(60, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(61, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(62, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(63, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(64, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(65, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(66, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(67, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(68, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(69, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(70, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(71, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(72, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(73, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(74, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(75, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(76, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(77, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(78, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(79, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(80, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(81, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(82, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(83, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(84, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(85, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(86, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(87, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(88, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(89, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'Array', '2024-08-28', '2024-08-30'),
(90, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(91, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(92, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(93, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(94, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(95, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(96, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(97, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(98, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(99, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'Array', '2024-08-28', '2024-08-30'),
(100, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(101, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(102, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(103, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(104, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(105, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(106, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(107, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(108, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(109, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(110, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, '', '2024-08-28', '2024-08-30'),
(111, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(112, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(113, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(114, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(115, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(116, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(117, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(118, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(119, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(120, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(121, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(122, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(123, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(124, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(125, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(126, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(127, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(128, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(129, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(130, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(131, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PMC', '2024-08-28', '2024-08-30'),
(132, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PCM', '2024-08-28', '2024-08-30'),
(133, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'PGM', '2024-08-28', '2024-08-30'),
(134, 'MR. NYARUKA', 'MATHEMATICS', 'media/documents/assignments/Physics1-F6-1999.pdf', 6, 'EGM', '2024-08-28', '2024-08-30'),
(135, 'MR. SALIM', 'PHYSICS', 'media/documents/assignments/Physics1-F6-2004.pdf', 6, 'PMC', '2024-08-28', '2024-08-31'),
(136, 'MR. SALIM', 'PHYSICS', 'media/documents/assignments/Physics1-F6-2004.pdf', 6, 'PCM', '2024-08-28', '2024-08-31'),
(137, 'MR. SALIM', 'PHYSICS', 'media/documents/assignments/Physics1-F6-2004.pdf', 6, 'PCB', '2024-08-28', '2024-08-31'),
(138, 'MR. SALIM', 'PHYSICS', 'media/documents/assignments/Physics1-F6-2004.pdf', 6, 'PGM', '2024-08-28', '2024-08-31'),
(139, 'MR. JOANES', 'BIOLOGY', 'media/documents/assignments/CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', 1, 'T', '2024-09-02', '2024-09-30'),
(140, 'MR. JOANES', 'BIOLOGY', 'media/documents/assignments/CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', 1, 'K', '2024-09-02', '2024-09-30'),
(141, 'MR. JOANES', 'BIOLOGY', 'media/documents/assignments/CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', 1, 'U', '2024-09-02', '2024-09-30'),
(151, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/001-PHYSICS-1-SERIES-1.pdf', 6, 'PMC', '2024-11-29', '2025-01-06'),
(152, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/001-PHYSICS-1-SERIES-1.pdf', 6, 'PCM', '2024-11-29', '2025-01-06'),
(153, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/001-PHYSICS-1-SERIES-1.pdf', 6, 'PCB', '2024-11-29', '2025-01-06'),
(154, 'MR. NYARUKA', 'PHYSICS', 'media/documents/assignments/001-PHYSICS-1-SERIES-1.pdf', 6, 'PGM', '2024-11-29', '2025-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `kutoka` text NOT NULL,
  `ujumbe` text NOT NULL,
  `kwenda` text NOT NULL,
  `muda` varchar(50) DEFAULT NULL,
  `tarehe` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `kutoka`, `ujumbe`, `kwenda`, `muda`, `tarehe`) VALUES
(1, 'gmaph__001', 'hi', 'S.D.Ramji', '01:28 pm', 20240809),
(3, 'gmaph__001', 'how are you', 'S.D.Ramji', '02:52 pm', 20240809),
(4, 'gmaph__001', 'I am fine', 'S.D.Ramji', '02:52 pm', 20240809),
(5, 'gmaph__001', 'br solved it', 'S.D.Ramji', '02:54 pm', 20240809);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_no` int(255) NOT NULL,
  `announcer_rank` varchar(255) NOT NULL,
  `announcer_name` varchar(255) NOT NULL,
  `news_class` varchar(255) NOT NULL,
  `headline` varchar(500) NOT NULL,
  `news_main` varchar(1000) NOT NULL,
  `news_date` varchar(50) NOT NULL,
  `news_updates` varchar(1000) NOT NULL,
  `news_photo` varchar(10000) NOT NULL,
  `announcer_ID` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_no`, `announcer_rank`, `announcer_name`, `news_class`, `headline`, `news_main`, `news_date`, `news_updates`, `news_photo`, `announcer_ID`) VALUES
(13, '1', 'SURYAKANT RAMJI', 'events', 'Welcome to Talent Night!', 'Good morning dear students! I am very delighted to announce to you the coming of Talent night event. It will be a spectacular event that will be visited by many people from outside the country. Please, I urge you all to attend. The entrance fees will be Tshs. 10,000/=, per each person. You can also invite your parents also to attend. You are all welcome!', '2024-08-23', 'important', 'media/images/news/IMG-20221203-WA0118.jpg', 449277543),
(15, '7', 'GEORGE MAPHOLE', 'events', 'Welcome to the ICT week!', 'It is a wonderful day! I am glad to welcome you all to the great technological week. This week will be the Shaaban Robert ICT week! You are all welcome to enjoy the week. The week will be accompanied by very many delightful funny moments, such as games and many others. Also, the launching of official Shaaban Robert\'s student\'s <a href=\"https://shaabanrobertsystem.infinityfreeapp.com\" target=\"_blank\">website</a>)! Please, get ready to enjoy! \r\n\r\nFor any questions, please query <a href=\'form.php\'>here!</a>', '2024-08-28', 'important', 'media/images/news/wallpaperflare.com_wallpaper (11).jpg', 657806248),
(16, '3', 'JOSEPH NCHIMBI', 'academics', 'Form Four Achievements!', 'It\'s my honor to announce the outstanding achievements of our Form Four students, providing us with outstanding performance in their NECTA examinations. We will be awarding them on the next Thursday\'s Assembly! Please attend to learn', '2024-09-01', 'important', 'media/images/news/IMG-20220521-WA0001.jpg', 283369292),
(23, '1', 'S.D.Ramji', 'academics', 'Exam Time', 'You are all reminded to get ready for the exams which are expected to commence from Thu, 03/04/25. Get ready! And I wish you all success!!', '2025-03-31', 'important', 'media/images/news/wallpaperflare-cropped.jpg', 449277543);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_ID` int(11) NOT NULL,
  `teachername` varchar(500) NOT NULL,
  `subjectname` varchar(100) NOT NULL,
  `topic` varchar(500) NOT NULL,
  `notes` varchar(1000) NOT NULL,
  `class` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_ID`, `teachername`, `subjectname`, `topic`, `notes`, `class`) VALUES
(1, 'MR. LIMBU', 'COMPUTER', 'DATA STRUCTURE AND ALGORITHMS', 'DATA STRUCTURE AND ALGORITHMS.pdf', 6),
(2, 'MR. EDMUND', 'COMPUTER', 'DBMS', '3. Database as information systems.pptx', 3),
(3, 'MS. STUMAI', 'GEOGRAPHY', 'ALL TOPICS', 'MY PAMPHLATE GEOGRAPHY.pdf', 3),
(4, 'MR. JOANES', 'BIOLOGY', 'CELL STRUCTURE AND ORGANIZATION', 'CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', 1),
(5, 'MR. DASTAN', 'BIOLOGY', 'CLASSIFICATION', 'KINGDOM FUNGI O LEVEL.pptx', 2),
(6, 'MR. MSESE', 'COMPUTER', 'DBMS', '1. DBMS.pptx', 4),
(7, 'MR. JOANES', 'BIOLOGY', 'GROWTH', 'GROWTH AND DEVELOPMENT O-LEVEL.docx', 4),
(8, 'MR. MKWAMA', 'GEOGRAPHY', 'RESEARCH', 'RESEARCH.pdf', 4),
(9, 'MR. LIMBU', 'COMPUTER', 'WEB DEVELOPMENT', 'web development.pdf', 5),
(10, 'MR. LIMBU', 'COMPUTER', 'C++', 'C++ notes.pdf', 5),
(11, 'MR. LIMBU', 'COMPUTER', 'SDLC', 'SYSTEM DEVELOPMENT 2.pdf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `seckeys`
--

CREATE TABLE `seckeys` (
  `key_ID` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `OTP` int(9) NOT NULL,
  `id` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seckeys`
--

INSERT INTO `seckeys` (`key_ID`, `username`, `OTP`, `id`) VALUES
(1, 'kari_punit', 434138213, 525855277),
(2, 'gmaph__001', 316090202, 657806248);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Students_ID` int(255) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `form` int(1) NOT NULL,
  `stream` varchar(3) NOT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `OTP` int(6) DEFAULT NULL,
  `userkey` int(20) NOT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Students_ID`, `username`, `email`, `password`, `form`, `stream`, `photo`, `OTP`, `userkey`, `security`) VALUES
(3, '@_muhyy', 'muhy@gmail.com', 'muhadditha100%', 6, 'PCM', 'media/images/prof_pics/wp3998050-5k-wallpapers.jpg', NULL, 362587771, '::1'),
(24, 'gmaph001', 'gmaph001@gmail.com', '123456789', 5, 'PMC', 'media/images/prof_pics/MacOS Hello 4K.jpeg', NULL, 803236010, '::1'),
(1, 'gmaph__001', 'gmaph001@gmail.com', 'SRSS14552', 6, 'PMC', 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', 287313, 657806248, '::1'),
(6, 'inno_math', 'innocent@gmail.com', 'inno_math', 6, 'PCM', 'media/images/prof_pics/earth.jpg', NULL, 315285343, '::1'),
(7, 'joshua_john', 'joshua@gmail.com', 'joshua_john', 6, 'PMC', 'media/images/prof_pics/wallpaperflare.com_wallpaper (28).jpg', NULL, 636558955, ''),
(22, 'kari_punit', 'karishma@gmail.com', 'kari_punit', 6, 'PMC', 'media/images/prof_pics/peakpx (1).jpg', NULL, 525855277, '::1'),
(5, 'marc_sam', 'marcelosamwel@gmail.com', 'marcelosamwel', 6, 'PCM', 'media/images/prof_pics/wallpaperflare.com_wallpaper (25).jpg', NULL, 500111943, ''),
(4, 'nahir_nazir', 'nahirvirsam@gmail.com', 'nahir_nazir', 6, 'PCM', 'media/images/prof_pics/red-car.jpg', NULL, 720861492, ''),
(23, 'nassor_munir', 'nassor@gmail.com', 'nassor_munir', 6, 'PCM', 'media/images/prof_pics/pexels-azim-islam-460924-1188037.jpg', NULL, 558984056, ''),
(2, 'omz', 'coolomar42@gmail.com', 'oozers12345', 6, 'PMC', 'media/images/prof_pics/wallpaperflare.com_wallpaper (4).jpg', NULL, 959152665, '::1');

-- --------------------------------------------------------

--
-- Table structure for table `suggestions`
--

CREATE TABLE `suggestions` (
  `suggest_ID` int(11) NOT NULL,
  `user_ID` int(9) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `suggestions` text NOT NULL,
  `privacy` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suggestions`
--

INSERT INTO `suggestions` (`suggest_ID`, `user_ID`, `username`, `suggestions`, `privacy`) VALUES
(1, 657806248, 'gmaph__001', 'Can you improve the timings of the Friday break?', 'public'),
(2, 657806248, 'gmaph__001', 'I suggest that the student\'s council of our school should be reelcted! I am not subtle with this year\'s student\'s council!', 'private'),
(3, 657806248, 'gmaph__001', 'I suggest that the student\'s council of our school should be reelcted! I am not subtle with this year\'s student\'s council!', 'private');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`admin_ID`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assign_ID`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_no`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_ID`);

--
-- Indexes for table `seckeys`
--
ALTER TABLE `seckeys`
  ADD PRIMARY KEY (`key_ID`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `id` (`Students_ID`);

--
-- Indexes for table `suggestions`
--
ALTER TABLE `suggestions`
  ADD PRIMARY KEY (`suggest_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assign_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `seckeys`
--
ALTER TABLE `seckeys`
  MODIFY `key_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `Students_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `suggestions`
--
ALTER TABLE `suggestions`
  MODIFY `suggest_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
