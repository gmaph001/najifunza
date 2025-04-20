-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2025 at 01:24 PM
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
  `password` varchar(100) NOT NULL,
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
(1, 'GEORGE', 'GODSON', 'MAPHOLE', 'SHAABAN ROBERT SECONDARY SCHOOL', '0748554514', 'gmaph__001', 'mapholegeorge@gmail.com', '2212241718', 404, 'ADM', 215441274, 742625, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', 'out');

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
  `class_name` varchar(500) NOT NULL,
  `password` varchar(9) NOT NULL,
  `class_key` int(9) NOT NULL,
  `no_users` int(5) NOT NULL
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
(1, 'GEORGE MAPHOLE', 215441274, 'COMPUTER SCIENCE', 'media/documents/notes/DATA STRUCTURE AND ALGORITHMS.pdf', '2', 'secular', 6, 'Data Structure and Algorithms', 989377870),
(2, 'MR Limbu', 215441274, 'COMPUTER SCIENCE', 'media/documents/notes/web development.pdf', '2', 'secular', 5, 'Web Development Notes', 385858181),
(3, 'MR LIMBU', 215441274, 'COMPUTER SCIENCE', 'media/documents/notes/C++ notes.pdf', '2', 'secular', 5, 'C++ Notes\' for Form 5', 745666954),
(4, 'MR NYARUKA', 215441274, 'PHYSICS', 'media/documents/notes/CIRCULAR MOTION.pdf', '2', 'secular', 5, 'Circular Motion', 875387829),
(5, 'MR SALIM', 215441274, 'PHYSICS', 'media/documents/notes/Class Notes - Surface tension.pdf', '2', 'secular', 5, 'Surface Tension notes', 733063990),
(6, 'MR MKALI', 215441274, 'PHYSICS', 'media/documents/notes/Chambilo  Heat & Thermodynamics.pdf', '2', 'secular', 5, 'Heat and Thermodynamics Notes', 395452663),
(7, 'MR JOANES', 215441274, 'BIOLOGY', 'media/documents/notes/Biology f 3 Study notes.pdf', '2', 'secular', 3, 'Biology notes for Form 3. All chapters.', 370960529),
(8, 'MR JOANES', 215441274, 'BIOLOGY', 'media/documents/notes/FORM IV COMPLETE NOTES.pdf', '2', 'secular', 4, 'Biology Form 4 notes. All chapters.', 591162495),
(9, 'MR GEORGE', 215441274, 'GEOGRAPHY', 'media/documents/notes/MY PAMPHLATE GEOGRAPHY.pdf', '2', 'secular', 3, 'Geography notes for Form 3.', 998396969),
(10, 'MR DASTAN', 215441274, 'BIOLOGY', 'media/documents/notes/NUTRITION.pptx', '2', 'secular', 2, 'Biology notes for Form 2. Nutrition', 368716200),
(11, 'MR DASTAN', 215441274, 'BIOLOGY', 'media/documents/notes/CELL STRUCTURE AND ORGANIZATION O-Level(1).docx', '2', 'secular', 1, 'Cell Structure and Organization.', 518480222),
(12, 'MR SALIM', 215441274, 'PHYSICS', 'media/documents/notes/SIMPLE HARMONIC MOTION.pdf', '2', 'secular', 5, 'Simple Harmonic Motion', 848189197);

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

--
-- Dumping data for table `saved`
--

INSERT INTO `saved` (`act_ID`, `category`, `saver`, `saved_key`) VALUES
(2, 'notes', 326534617, 395452663),
(3, 'notes', 215441274, 989377870),
(4, 'notes', 293882265, 395452663),
(6, 'notes', 293882265, 385858181),
(7, 'notes', 215441274, 745666954),
(8, 'notes', 293882265, 875387829),
(9, 'notes', 293882265, 848189197),
(11, 'notes', 984950354, 518480222),
(12, 'notes', 984950354, 395452663),
(13, 'notes', 984950354, 733063990),
(14, 'notes', 984950354, 848189197),
(15, 'notes', 984950354, 989377870),
(16, 'notes', 984950354, 370960529);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(700) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userkey` int(9) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `security` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `username`, `email`, `password`, `userkey`, `photo`, `security`) VALUES
(1, 'gmaph__001', 'mapholegeorge@gmail.com', '2212241718', 215441274, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', 'out'),
(3, 'omz', 'gmaph001@gmail.com', '14552', 293882265, 'media/images/prof_pics/wallpaperflare.com_wallpaper.jpg', 'out'),
(4, '@muhy', 'annmosha02@gmail.com', 'MOSHA1970', 984950354, 'media/images/prof_pics/wallpaperflare-cropped.jpg', 'out');

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
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `assignment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `notes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `act_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
