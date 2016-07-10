-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 01:42 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmaw`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE IF NOT EXISTS `bookings` (
  `booking_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `class_id`, `user_id`) VALUES
(3, 3, 3),
(5, 0, 2),
(6, 0, 2),
(7, 14, 8);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `Day` varchar(20) DEFAULT NULL,
  `Class` varchar(30) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Coach` varchar(40) DEFAULT NULL,
  `class_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`Day`, `Class`, `Time`, `Coach`, `class_id`) VALUES
('Monday', 'Womens Self-Defence', '10:00:00', 'Brian', 1),
('Monday', 'Little Kicks', '04:00:00', 'Jack', 2),
('Monday', 'Jiu Jitsu', '05:30:00', 'Brian', 3),
('Monday', 'Sinn Mo Hapkido (Men & Women', '06:30:00', 'Brian', 4),
('Monday', 'Muay Thai (Men & Women', '07:30:00', 'Jack', 5),
('Monday', 'Adult Sparring', '08:30:00', 'Jack', 6),
('Tuesday', 'Womens Muay Thai', '10:00:00', 'Brian', 7),
('Tuesday', 'Teenage Hapkido', '05:00:00', 'Brian', 8),
('Tuesday', 'Self Defence (Men & Women)', '06:30:00', 'Brian & Jack', 9),
('Tuesday', 'Jiu Jitsu (Men & Women', '07:30:00', 'Brian & Jack', 10),
('Tuesday', 'Adult Sparring', '08:30:00', 'Jack', 11),
('Wednesday', 'Little Kicks', '04:00:00', 'Jack', 12),
('Wednesday', 'Jiu Jitsu', '06:00:00', 'Brian', 13),
('Wednesday', 'Adult Sparring', '07:00:00', 'Brian & Jack', 14),
('Thursday', 'Self Defence', '10:00:00', 'Jack', 15),
('Thursday', 'Teenage Hapkido', '05:00:00', 'Jack', 16),
('Thursday', 'Sinn Mo Hapkido (Men & Women)', '07:00:00', 'Jack', 17),
('Thursday', 'Adult Sparing', '08:00:00', 'Brian', 18),
('Friday', 'Self Defence', '10:00:00', 'Brian', 19),
('Friday', 'Little Kicks', '04:00:00', 'Jack', 20),
('Friday', 'Muay Thai', '06:00:00', 'Jack', 21),
('Friday', 'Sinn Mo Hapkido (Men & Women', '07:00:00', 'Brian & Jack', 22),
('Friday', 'Jiu Jitsu', '08:00:00', 'Brian & Jack', 23),
('Friday', 'Adult Sparring', '09:00:00', 'Brian & Jack', 24),
('Saturday', 'Little Kicks', '10:00:00', 'Jack', 25),
('Saturday', 'Open Gym', '11:00:00', 'Jack', 26);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `FirstName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Username` varchar(20) DEFAULT NULL,
  `P_Word` varchar(20) DEFAULT NULL,
  `Email` varchar(60) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`FirstName`, `LastName`, `Username`, `P_Word`, `Email`, `user_id`) VALUES
('Siobhan', 'Gavin', 'sgavin', 'liverpool', 'gavinsiobhan@gmail.com', 1),
('', '', '', '', '', 2),
('Michael', 'Murphy', 'mmurphy', 'hello', 'mmurphy@mail.com', 3),
('mary', 'Murphy', 'mMmurphy', 'MMM', 'mmmurphy@mail.com', 4),
('Laura', 'OShea', 'los', 'laura', 'los@mail.com', 5),
('Maeve', 'Murphy', 'Maevemurphy', 'Maeve', 'Maeve@mail.com', 6),
('Aisling', 'obrien', 'aob', 'password', 'aob@mail.com', 7),
('Sam', 'Gibson', 'sgibson', 'samg', 'sgibson@mail.com', 8);

-- --------------------------------------------------------

--
-- Table structure for table `queries`
--

CREATE TABLE IF NOT EXISTS `queries` (
  `Firstname` varchar(50) DEFAULT NULL,
  `Lastname` varchar(50) DEFAULT NULL,
  `Email` varchar(350) DEFAULT NULL,
  `Query` varchar(500) DEFAULT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=120 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `queries`
--

INSERT INTO `queries` (`Firstname`, `Lastname`, `Email`, `Query`, `ID`) VALUES
('Siobhan', 'gavin', 'gavin@gmail.com', 'jhkj', 118),
('Siobhan ', 'Gavin', 'gavin@mail.com', 'Hello', 119);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `queries`
--
ALTER TABLE `queries`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `queries`
--
ALTER TABLE `queries`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=120;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
