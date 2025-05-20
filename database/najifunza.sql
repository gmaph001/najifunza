-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2025 at 10:40 AM
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
  `password` varchar(1000) NOT NULL,
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
(7, 'George', 'Godson', 'Maphole', 'Shaaban Robert Secondary School', '0748554514', 'gmaph__001', 'gmaph001@gmail.com', '$2y$10$j5EdUu6pgo9IdoF5EzVKa.P3AJ8B0qEmns9Gl1KKaWJTaaCvr11X.', 404, 'ADM', 696921611, 986204, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `assignment_ID` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `assign_name` varchar(500) NOT NULL,
  `assignment` varchar(500) NOT NULL,
  `poster` varchar(500) NOT NULL,
  `poster_ID` int(9) NOT NULL,
  `assign_key` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `class_activity`
--

CREATE TABLE `class_activity` (
  `act_ID` int(11) NOT NULL,
  `class_key` int(9) NOT NULL,
  `userkey` int(9) NOT NULL,
  `type` varchar(20) NOT NULL,
  `mat_name` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `mat_key` int(9) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `exam_ID` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `exam_name` varchar(500) NOT NULL,
  `exam` varchar(500) NOT NULL,
  `poster` varchar(500) NOT NULL,
  `poster_ID` int(9) NOT NULL,
  `exam_key` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `my_classes`
--

CREATE TABLE `my_classes` (
  `class_key` int(11) NOT NULL,
  `userkey` int(9) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `join_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_ID` int(11) NOT NULL,
  `poster` varchar(500) NOT NULL,
  `poster_ID` int(9) NOT NULL,
  `category` varchar(50) NOT NULL,
  `news` varchar(1000) NOT NULL,
  `news_photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `notes_ID` int(11) NOT NULL,
  `poster` varchar(400) NOT NULL,
  `poster_ID` int(9) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `notes` varchar(500) NOT NULL,
  `level` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `class` int(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `notes_key` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`notes_ID`, `poster`, `poster_ID`, `subject`, `notes`, `level`, `category`, `class`, `description`, `notes_key`) VALUES
(3, 'MR LIMBU', 215441274, 'COMPUTER SCIENCE', 'media/documents/notes/C++ notes.pdf', '2', 'secular', 5, 'C++ Notes\' for Form 5', 745666954),
(5, 'MR SALIM', 215441274, 'PHYSICS', 'media/documents/notes/Class Notes - Surface tension.pdf', '2', 'secular', 5, 'Surface Tension notes', 733063990),
(7, 'MR JOANES', 215441274, 'BIOLOGY', 'media/documents/notes/Biology f 3 Study notes.pdf', '2', 'secular', 3, 'Biology notes for Form 3. All chapters.', 370960529),
(9, 'MR GEORGE', 215441274, 'GEOGRAPHY', 'media/documents/notes/MY PAMPHLATE GEOGRAPHY.pdf', '2', 'secular', 3, 'Geography notes for Form 3.', 998396969),
(11, 'MR JOANES', 215441274, 'BIOLOGY', 'media/documents/notes/CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', '2', 'secular', 1, 'Cell structure and organization.', 518480222),
(16, 'MR SALIM', 215441274, 'PHYSICS', 'media/documents/notes/CIRCULAR MOTION.pdf', '2', 'secular', 5, 'Circular Motion', 619390235),
(19, 'SYS-ADMIN', 516708124, 'COMPUTER SCIENCE', 'media/documents/notes/notes_136406560', '2', 'secular', 5, 'Web Development.', 136406560),
(21, 'SYS-ADMIN', 516708124, 'COMPUTER SCIENCE', 'media/documents/notes/notes_301307611', '2', 'secular', 6, 'Data Structures and Algorithms', 301307611),
(22, 'SYS-ADMIN', 696921611, 'COMPUTER SCIENCE', 'media/documents/notes/notes_565682642', '2', 'secular', 6, 'Networking', 565682642);

-- --------------------------------------------------------

--
-- Table structure for table `saved`
--

CREATE TABLE `saved` (
  `act_ID` int(11) NOT NULL,
  `category` varchar(500) NOT NULL,
  `saver` int(9) NOT NULL,
  `saved_key` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(700) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `userkey` int(9) NOT NULL,
  `OTP` int(6) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `email`, `password`, `userkey`, `OTP`, `photo`, `security`) VALUES
(8, 'gmaph__001', 'gmaph001@gmail.com', '$2y$10$j5EdUu6pgo9IdoF5EzVKa.P3AJ8B0qEmns9Gl1KKaWJTaaCvr11X.', 696921611, 784824, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', '::1'),
(9, '@muhy', 'moshaagnes1968@gmail.com', '$2y$10$MZeyBs7N.dIvdh7hTosYpuai4rKHmBs3vMbe2bzMPXjpj2/Y8cHtq', 974310072, 0, 'media/images/prof_pics/wallpaperflare.com_wallpaper (25).jpg', 'out');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`assignment_ID`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_ID`);

--
-- Indexes for table `class_activity`
--
ALTER TABLE `class_activity`
  ADD PRIMARY KEY (`act_ID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`exam_ID`);

--
-- Indexes for table `my_classes`
--
ALTER TABLE `my_classes`
  ADD PRIMARY KEY (`class_key`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_ID`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`notes_ID`);

--
-- Indexes for table `saved`
--
ALTER TABLE `saved`
  ADD PRIMARY KEY (`act_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `class_activity`
--
ALTER TABLE `class_activity`
  MODIFY `act_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `exam_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `my_classes`
--
ALTER TABLE `my_classes`
  MODIFY `class_key` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `notes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `act_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
