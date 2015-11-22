-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 07:19 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `advocon`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eventID` int(11) NOT NULL,
  `eventFoundation` int(11) NOT NULL,
  `eventDetails` text NOT NULL,
  `eventName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foundation`
--

CREATE TABLE IF NOT EXISTS `foundation` (
  `foundID` int(11) NOT NULL,
  `foundUserID` int(11) NOT NULL,
  `foundName` varchar(30) NOT NULL,
  `foundAdvoc` varchar(30) NOT NULL,
  `foundEmail` varchar(30) NOT NULL,
  `foundLocation` varchar(50) NOT NULL,
  `foundRegion` varchar(4) NOT NULL,
  `foundMobile` varchar(13) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foundation`
--

INSERT INTO `foundation` (`foundID`, `foundUserID`, `foundName`, `foundAdvoc`, `foundEmail`, `foundLocation`, `foundRegion`, `foundMobile`) VALUES
(1, 1, 'Unang Hakbang', 'Street children', 'unanghakbang@yahoo.com', 'Quezon', 'NCR', '0456789873');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE IF NOT EXISTS `team` (
  `teamID` int(11) NOT NULL,
  `teamName` varchar(20) NOT NULL,
  `teamMembers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userID` int(11) NOT NULL,
  `userLname` varchar(20) NOT NULL,
  `userFname` varchar(20) NOT NULL,
  `userBdate` date NOT NULL,
  `userLocation` varchar(20) NOT NULL,
  `userEmail` varchar(30) NOT NULL,
  `userPassword` varchar(20) NOT NULL,
  `userMobile` varchar(13) NOT NULL,
  `userType` varchar(5) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userLname`, `userFname`, `userBdate`, `userLocation`, `userEmail`, `userPassword`, `userMobile`, `userType`) VALUES
(1, '', '', '0000-00-00', '', 'unanghakbang@yahoo.com', '123', '3456568', 'Found'),
(2, 'Silva', 'Raven', '1996-06-11', 'Makati', 'rasilva@gmail.com', '123', '09178778022', 'User'),
(3, 'Mars', 'Bruno', '1980-07-18', 'Dark Pits', 'rstorrejos123@student.apc.edu.', '123', '0966699', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventID`);

--
-- Indexes for table `foundation`
--
ALTER TABLE `foundation`
  ADD PRIMARY KEY (`foundID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`teamID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `foundation`
--
ALTER TABLE `foundation`
  MODIFY `foundID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `teamID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
