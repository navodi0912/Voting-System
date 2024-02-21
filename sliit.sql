-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 22, 2022 at 06:57 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sliit`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `id` int(11) NOT NULL,
  `First_name` varchar(30) DEFAULT NULL,
  `Last_name` varchar(30) DEFAULT NULL,
  `Admin_Email` varchar(30) DEFAULT NULL,
  `Admin_Password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`id`, `First_name`, `Last_name`, `Admin_Email`, `Admin_Password`) VALUES
(1, 'shan', 'jathu', 'shan@gmail..com', 'de9f508e8182c0b4b566304bd747d3c4'),
(2, 'navodi', 'perera', 'navodi@gmail..com', 'de9f508e8182c0b4b566304bd747d3c4'),
(3, 'kisal', 'mendis', 'misal@gmail..com', 'de9f508e8182c0b4b566304bd747d3c4'),
(5, 'Admin', 'mail', 'admin@gmail.com', '061bc042c014b1c9bb0be70a96ebe457'),
(6, 'Jathurshan', 'shan', 'jathurshanm3@gmail.com', 'de9f508e8182c0b4b566304bd747d3c4');

-- --------------------------------------------------------

--
-- Table structure for table `Contestant`
--

CREATE TABLE `Contestant` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `votes` int(11) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Contestant`
--

INSERT INTO `Contestant` (`id`, `first_name`, `last_name`, `city`, `age`, `votes`, `image`) VALUES
(10, 'Jathurshan', 'manistar', 'Jaffna', '24', 232, 'contestant-62183-user2.jpeg'),
(14, 'Navodi', 'tharika', 'Colombo', '21', 43, 'contestant-67600-photo-1604072366595-e75dc92d6bdc.jpeg'),
(17, 'kisal', 'kisal', 'Mathale', '22', 21, 'contestant-26415-coach2.jpeg'),
(18, 'Hashan', 'Madushanka', 'Colombo', '34', 321, 'contestant-85289-coach3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `Feed`
--

CREATE TABLE `Feed` (
  `id` int(11) NOT NULL,
  `category` varchar(30) DEFAULT NULL,
  `description` varchar(30) DEFAULT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `videoId` int(30) DEFAULT NULL,
  `adminId` int(30) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Feed`
--

INSERT INTO `Feed` (`id`, `category`, `description`, `Title`, `videoId`, `adminId`, `image`) VALUES
(11, 'video', 'Awesome singer from srilanka', 'sarindu', 3, 1, 'feed-51212-279375185_358980096201820_461045970148839955_n.mp4'),
(12, 'Music', 'Best singer in srilanka', 'Industry baby', 1, 1, 'feed-95340-270293626_1279114862555787_2819624091804536783_n.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `Feedback`
--

CREATE TABLE `Feedback` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Feedback`
--

INSERT INTO `Feedback` (`id`, `username`, `email`, `message`) VALUES
(26, 'it21246296', 'jathurshanm3@gmail.com', 'jathurshanm3@gmail.com'),
(27, 'it21246296', 'jathurshanm3@gmail.com', 'jathurshanm3@gmail.com'),
(28, 'it21246296', 'jathurshanm3@gmail.com', 'jathurshanm3@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Report`
--

CREATE TABLE `Report` (
  `id` int(11) NOT NULL,
  `type` varchar(30) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  `adminId` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Report`
--

INSERT INTO `Report` (`id`, `type`, `date`, `adminId`) VALUES
(1, 'seo', '12.3.2022', 1),
(2, 'seo', '16.3.2022', 1),
(3, 'marketing', '12.3.2022', 1),
(4, 'users', '22.3.2022', 1);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `phoneNumber` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `DOB` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `first_name`, `last_name`, `phoneNumber`, `gender`, `address`, `DOB`, `email`, `password`, `image`) VALUES
(33, 'Jathurshan', 'manistar', '0773640636', 'male', 'suthumalai north,, manipay\r\nmanipay', '2022-05-13', 'jathurshanm3@gmail.com', 'de9f508e8182c0b4b566304bd747d3c4', 'images-90759-user2.jpeg'),
(35, 'shan', 'test', '0772340636', 'male', 'suthumalai north,\r\nmanipay', '2022-05-13', 'shan@gmail.com', 'cb22cd6a5e2611b068b0a80fa7750334', 'images-88436-280287516_325188189730650_2522672327249623779_n.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Contestant`
--
ALTER TABLE `Contestant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Feed`
--
ALTER TABLE `Feed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Feedback`
--
ALTER TABLE `Feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Report`
--
ALTER TABLE `Report`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Report_FK` (`adminId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `Contestant`
--
ALTER TABLE `Contestant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `Feed`
--
ALTER TABLE `Feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `Feedback`
--
ALTER TABLE `Feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `Report`
--
ALTER TABLE `Report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Report`
--
ALTER TABLE `Report`
  ADD CONSTRAINT `Report_FK` FOREIGN KEY (`adminId`) REFERENCES `Admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
