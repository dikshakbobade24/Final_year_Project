-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2023 at 05:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ceh`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `event_price` int(11) DEFAULT NULL,
  `participents` int(100) DEFAULT 0,
  `img_link` varchar(255) NOT NULL,
  `type_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_title`, `event_price`, `participents`, `img_link`, `type_id`) VALUES
(1, 'SHARK TANK', 100, 7, 'images/SharkTank.png', 1),
(2, 'CAMPUS EXPERIA', 50, 2, 'images/CampusExperia.png', 1),
(3, 'CODETHON', 50, 4, 'images/Codethon.png', 1),
(4, 'Pubg', 50, 2, 'images/pubg.jpg', 2),
(5, 'MINI-MILITIA', 100, 3, 'images/MiniMilitia.png\r\n', 2),
(7, 'JOLLYWOOD', 50, 0, 'images/Jollywood.png', 3),
(8, 'GAME MINDSTER', 200, 2, 'images/GameMindster.png', 3),
(9, 'Mini Militia', 19, 0, 'uploads/', 1),
(78, 'Lavda', 300, 0, 'images/WIN_20230517_13_31_13_Pro.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_id` int(10) NOT NULL,
  `Date` date DEFAULT NULL,
  `time` varchar(20) NOT NULL,
  `location` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_id`, `Date`, `time`, `location`) VALUES
(1, '0000-00-00', '3.00pm', 'CM Department'),
(2, '2023-02-16', '1.00pm', 'Khatri sir,s Lab'),
(3, '2023-02-16', '11.00am', 'CM Department'),
(4, '2023-02-16', '9.30am', 'CM Department'),
(5, '2023-02-17', '10.00am', 'CM Department'),
(6, '2023-02-17', '11.00am', 'CM Department'),
(7, '2023-02-17', '9.30pm', 'ON Stage'),
(8, '2023-02-17', '7.00pm', 'ON Stage'),
(9, '2023-04-05', '10:00 am', 'CM Department'),
(78, '2023-05-24', '10:00 am', 'CM Department');

-- --------------------------------------------------------

--
-- Table structure for table `event_type`
--

CREATE TABLE `event_type` (
  `type_id` int(10) NOT NULL,
  `type_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_type`
--

INSERT INTO `event_type` (`type_id`, `type_title`) VALUES
(1, 'Technical Events'),
(2, 'Gaming Events'),
(3, 'On Stage Events');

-- --------------------------------------------------------

--
-- Table structure for table `participent`
--

CREATE TABLE `participent` (
  `Roll_number` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(11) NOT NULL,
  `sem` int(11) NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `college` varchar(20) NOT NULL,
  `event_id` int(255) NOT NULL,
  `Auto inc` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `participent`
--

INSERT INTO `participent` (`Roll_number`, `name`, `branch`, `sem`, `email`, `phone`, `college`, `event_id`, `Auto inc`) VALUES
('1092', 'piyush pise\r\n', 'Computer En', 3, 'devidasnaphade5@gmail.com', '1234567890', 'Government Polytechn', 6, 11),
('1092', 'dikshak bobde\r\n', 'Mechanical ', 3, 'pisepiyush39@gmail.com', '9876543324', 'Government Polytechn', 8, 19),
('1092', 'Aryan Moon', 'Mechanical ', 3, 'pisepiyush39@gmail.com', '9876543324', 'Government Polytechn', 1, 20),
('2013048', 'Harsh Dubey', 'Computer En', 6, 'harsh123@gmail.com', '9322451385', 'Government Polytechn', 1, 22),
('2013048', 'PIYUSH PISE', 'Computer En', 6, 'pisepiyush39@gmail.com', '9322451385', 'Government Polytechn', 3, 23),
('32', 'ABC', 'Information', 4, 'abc@gmail.com', '9876543324', 'BCCI', 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `rid` int(11) NOT NULL,
  `Roll_number` varchar(20) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`rid`, `Roll_number`, `event_id`) VALUES
(40, '2013048', 2),
(42, '2013048', 1),
(43, '2013049', 1),
(45, '91', 8),
(46, '91', 5),
(47, '2013048', 5),
(48, '2013049', 0),
(49, '91', 0),
(50, '109', 0),
(51, '1092', 0),
(52, '2013048', 2),
(53, '2013048', 4),
(54, '2013049', 3),
(55, '91', 1),
(56, '91', 2),
(57, '1092', 5),
(58, '1092', 3),
(59, '1092', 8),
(60, '1092', 1),
(61, '1092', 4),
(62, '2013048', 1),
(63, '2013048', 3),
(64, '32', 1);

--
-- Triggers `registered`
--
DELIMITER $$
CREATE TRIGGER `count` AFTER INSERT ON `registered` FOR EACH ROW update events
set events.participents=events.participents+1
WHERE events.event_id=new.event_id
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `staff_coordinator`
--

CREATE TABLE `staff_coordinator` (
  `stid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff_coordinator`
--

INSERT INTO `staff_coordinator` (`stid`, `name`, `phone`, `event_id`) VALUES
(1, 'Mamatha.s', '9956436610', 1),
(2, 'Mamatha', '9956436123', 2),
(3, 'Suparna.A', '9956436456', 3),
(4, 'Geetha', '9956436789', 4),
(5, 'Radha', '9956436101', 5),
(6, 'Usha.D.R', '9123436610', 6),
(7, 'Deeksha.G', '9456436610', 7),
(8, 'Deeksha.Patgar', '9789436610', 8),
(9, 'Vedant Chaudhari', NULL, 9),
(78, 'tanmay Bhure', NULL, 78);

-- --------------------------------------------------------

--
-- Table structure for table `student_coordinator`
--

CREATE TABLE `student_coordinator` (
  `sid` int(11) NOT NULL,
  `st_name` varchar(100) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_coordinator`
--

INSERT INTO `student_coordinator` (`sid`, `st_name`, `phone`, `event_id`) VALUES
(1, 'Aryan Moon', '8485875731', 1),
(2, 'Rakesh Mariyappa', '7956436123', 2),
(3, 'Arjun.A', '8956436456', 3),
(4, 'Sanjana', '6956436789', 4),
(5, 'NIkhil Bhat', '7956436101', 5),
(6, 'Pruthvi P', '8123436610', 6),
(7, 'Anshuman.A.N', '6456436610', 7),
(8, 'Abhinandhan.A', '7789436610', 8),
(9, 'k Chaudhari', NULL, 9),
(78, 'aryan moon', NULL, 78);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_type`
--
ALTER TABLE `event_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `participent`
--
ALTER TABLE `participent`
  ADD PRIMARY KEY (`Auto inc`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `staff_coordinator`
--
ALTER TABLE `staff_coordinator`
  ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `student_coordinator`
--
ALTER TABLE `student_coordinator`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `participent`
--
ALTER TABLE `participent`
  MODIFY `Auto inc` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `staff_coordinator`
--
ALTER TABLE `staff_coordinator`
  MODIFY `stid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `student_coordinator`
--
ALTER TABLE `student_coordinator`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
