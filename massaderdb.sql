-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2019 at 07:48 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massaderdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(1, 'Rima_rhaim', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `ID` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `objectives` text NOT NULL,
  `trainerID` int(11) NOT NULL,
  `price` int(70) NOT NULL,
  `duration` varchar(70) NOT NULL,
  `startDate` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`ID`, `name`, `description`, `objectives`, `trainerID`, `price`, `duration`, `startDate`) VALUES
(1, 'course 1', 'description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 description 1 ', 'objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 objectives 1 ', 1, 600, '3 months', '2 may 2019'),
(2, 'course 2 ', 'description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 description 2 ', 'objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 objectives 2 ', 1, 699, '8 weeks', '16-11-2019'),
(3, 'course 3', 'desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc desc ', 'objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives objectives', 2, 700, '7 months', '2019-03-16');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment`
--

CREATE TABLE `enrollment` (
  `ID` int(11) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `depName` varchar(255) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(70) NOT NULL,
  `address` varchar(70) NOT NULL,
  `trainees` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `ID` int(11) NOT NULL,
  `fullName` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`ID`, `fullName`, `email`, `phone`) VALUES
(1, 'Lazord El-Fizga', 'l.el-fizga@uot.edu.ly', '0940000000'),
(2, 'Muna Al-Boashi', 'muna@gmail.com', '0950000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `trainerID` (`trainerID`);

--
-- Indexes for table `enrollment`
--
ALTER TABLE `enrollment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `enrollment`
--
ALTER TABLE `enrollment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`trainerID`) REFERENCES `trainer` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
