-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 12, 2025 at 07:45 AM
-- Server version: 10.6.21-MariaDB-cll-lve-log
-- PHP Version: 8.3.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vimerkba_najifunza`
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
(2, 'FUMBUKA', 'LIMBU', 'MATALU', 'SHAABAN ROBERT SEC SCHOOL', '0765334612', 'MR LIMBU', 'limbufumbuka@gmail.com', 'fumbuka@1998', 1, 'TEA', 194384423, 148511, 'media/images/prof_pics/login.png', '41.59.194.176'),
(3, 'Edmund', 'E', 'Eberhard', 'Shaaban Robert Secondary School', '0656144795', 'edmund.eberhard', 'najifunza@gmail.com', 'hapakazitu', 1, 'TEA', 895375998, 202260, 'media/images/prof_pics/login.png', 'out'),
(4, 'Karishma', 'Punit', 'Chhatbar', 'Shaaban Robert Secondary School', '0745520501', 'karishma', 'karishmachhatbartz@gmail.com', '123456', 1, 'TEA', 554156717, 816474, 'media/images/prof_pics/login.png', '41.59.194.176'),
(5, 'ramadhani', 'said', 'chimbanga', 'shaaban robert secondary school', '0718010540', 'chimbanga', 'chimbanga2011@gmail.com', 'chimbanga', 1, 'TEA', 843879395, 886467, 'media/images/prof_pics/login.png', '41.59.194.176'),
(9, 'George', 'Godson', 'Maphole', 'Shaaban Robert Secondary School', '0626303582', 'gmaph__001', 'gmaph001@gmail.com', '2212241718', 404, 'ADM', 403991094, 555674, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', 'out');

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
(3, 'mr  limbu', 194384423, 'COMPUTER SCIENCE', 'media/documents/notes/form 01 notes 2.pdf', '2', 'secular', 1, 'introduction to computer science', 111264329),
(4, 'mr limbu', 194384423, 'COMPUTER SCIENCE', 'media/documents/notes/forn two 2025.pdf', '2', 'secular', 2, 'word & excel notes', 965980282),
(5, 'MR LIMBU', 194384423, 'COMPUTER SCIENCE', 'media/documents/notes/COMPUTER SCIENCE FOR ORDINARY LEVEL_FORM 1.pdf', '2', 'secular', 1, 'notes for chapter 1 - 3', 529385658),
(6, 'MR EDMUND', 554156717, 'COMPUTER SCIENCE', 'media/documents/notes/Computer System & Hardware.pdf', '2', 'secular', 1, 'Form 1 Notes', 601783952),
(7, 'Mr. Edmund', 895375998, 'COMPUTER SCIENCE', 'media/documents/notes/Computer Science Notes 2025.pdf', '2', 'secular', 1, 'Form 1 Notes', 789986120),
(8, 'chimbanga', 843879395, 'HISTORY', 'media/documents/notes/HISTORY FORM 3-2025.pptx', '2', 'secular', 3, 'write the notes given in your exercise book', 488032186),
(9, 'chimbanga', 843879395, 'GEOGRAPHY', 'media/documents/notes/Theories of the shape of the Earth.pptx', '2', 'secular', 5, 'write the notes  given in your exercise book', 662508023),
(10, 'Mr. Edmund', 895375998, 'COMPUTER SCIENCE', 'media/documents/notes/2. WEB DEVELOPMENT PDF.pdf', '2', 'secular', 3, 'FORM THREE WEB DEVELOPMENT', 358085241),
(13, 'Mr. Edmund', 895375998, 'COMPUTER SCIENCE', 'media/documents/notes/2. SPREAD SHEET FINAL PDF.pdf', '2', 'secular', 2, 'FORM TWO- SPREADSHEET NOTES', 311772636),
(14, 'Mr. Edmund', 895375998, 'COMPUTER SCIENCE', 'media/documents/notes/COMPUTER HARDWARE.pdf', '2', 'secular', 1, 'COMPUTER HARDWARE NOTES', 694707495);

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
(3, 'notes', 759461116, 111264329),
(4, 'notes', 194384423, 111264329),
(8, 'notes', 759461116, 601783952),
(9, 'notes', 759461116, 529385658),
(15, 'notes', 403991094, 694707495),
(16, 'notes', 403991094, 311772636),
(17, 'notes', 403991094, 662508023),
(18, 'notes', 403991094, 488032186);

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
(2, 'MR LIMBU', 'limbufumbuka@gmail.com', 'fumbuka@1998', 194384423, 'media/images/prof_pics/login.png', '41.59.194.176'),
(3, 'edmund.eberhard', 'najifunza@gmail.com', 'hapakazitu', 895375998, 'media/images/prof_pics/login.png', 'out'),
(4, 'karishma', 'karishmachhatbartz@gmail.com', '123456', 554156717, 'media/images/prof_pics/login.png', '41.59.194.176'),
(5, 'chimbanga', 'chimbanga2011@gmail.com', 'chimbanga', 843879395, 'media/images/prof_pics/login.png', '41.59.194.176'),
(6, 'Salha', 'salha.islam@gmail.com', 'shangazi', 714761398, 'media/images/prof_pics/login.png', '41.222.181.72'),
(7, 'processor', 'gmaph001@gmail.com', '123456', 597694546, 'media/images/prof_pics/login.png', 'out'),
(8, 'Ma', 'ffahima@gmail.com', '23', 327295246, 'media/images/prof_pics/login.png', '41.59.234.32'),
(9, 'Eirean Apiyo', 'daileirean21@gmail.com', 'monalisaapiyo', 562600278, 'media/images/prof_pics/login.png', '41.207.242.18'),
(10, 'Henry JR', 'henryrusasa@gmail.com', 'Nakatunga,5', 214086831, 'media/images/prof_pics/login.png', '41.59.194.176'),
(11, 'Salha Suleyman Hassan', 'ismailmwamtoro@gmail.com', 'rolha0911', 121107086, 'media/images/prof_pics/login.png', '102.211.34.222'),
(12, 'nick_john', 'nickisjohn@gmail.com', '10651206512a', 155010518, 'media/images/prof_pics/login.png', '41.59.194.176'),
(13, 'gmaph__001', 'gmaph001@gmail.com', '2212241718', 403991094, 'media/images/prof_pics/wallpaperflare.com_wallpaper (3).jpg', 'out'),
(14, 'SULEIMAN HASSAN', 'suleimanommar11@gmail.com', 'srss123srss', 509838249, 'media/images/prof_pics/login.png', '41.59.194.176'),
(15, '56u', 'mohammedsk5318@gmail.com', '675', 603192235, 'media/images/prof_pics/login.png', '41.59.194.176');

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
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
  MODIFY `notes_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `saved`
--
ALTER TABLE `saved`
  MODIFY `act_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
