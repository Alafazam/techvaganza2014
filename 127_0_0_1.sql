-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2014 at 09:07 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `event_id` varchar(30) NOT NULL,
  `name` varchar(30) CHARACTER SET ascii NOT NULL,
  `view_name` varchar(30) CHARACTER SET ascii NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category` varchar(20) CHARACTER SET ascii NOT NULL,
  `description` varchar(160) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_id`, `name`, `view_name`, `time`, `category`, `description`) VALUES
(1, 'create', 'Creatives 1', 'view_create ', '2014-05-25 07:30:00', 'creatives', NULL),
(2, 'codemania', 'Code Mania', 'view_codemania', '2014-05-26 11:00:00', 'creatives', NULL),
(3, 'smackdown', 'Smack Down', 'view_smack', '2014-05-26 18:30:00', 'robonoid', 'Robo wars');

-- --------------------------------------------------------

--
-- Table structure for table `events_registration`
--

CREATE TABLE IF NOT EXISTS `events_registration` (
  `username` varchar(10) NOT NULL,
  `event_id` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events_registration`
--

INSERT INTO `events_registration` (`username`, `event_id`, `time`) VALUES
('ankit', 'create', '2014-04-30 19:05:03');

-- --------------------------------------------------------

--
-- Table structure for table `pwd_reset`
--

CREATE TABLE IF NOT EXISTS `pwd_reset` (
  `email` varchar(128) NOT NULL,
  `v_id` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(128) NOT NULL,
  `cell` varchar(13) DEFAULT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `college` varchar(128) NOT NULL,
  `batch` varchar(4) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `accomodation` enum('y','n') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=113 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `cell`, `gender`, `college`, `batch`, `branch`, `accomodation`) VALUES
(112, 'ibnbatuta', 'e10adc3949ba59abbe56e057f20f883e', 'ankitbc', 'mc', 'tanayabh@gmail.com', '9876543212', 'Male', 'nit jhand', '2011', 'chodu science', 'y'),
(111, 'ankit2', 'd518b92738257b1840880b40287ad389', 'Ankit', 'Verma', 'ankitstarski@gmail.com', '9858577847', 'Male', 'NIT Srinagar', '2011', 'CSE', 'n'),
(105, 'ankit', 'd518b92738257b1840880b40287ad389', 'Ankit', 'Ankit', 'ankitstarski@gmail.com', '9858577847', 'Male', 'NIT Srinagar', '2011', 'CSE', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `verification_queue`
--

CREATE TABLE IF NOT EXISTS `verification_queue` (
  `username` varchar(50) NOT NULL,
  `v_code` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `verification_queue`
--

INSERT INTO `verification_queue` (`username`, `v_code`) VALUES
('ankit2', 'ca49ba2164f62830825069f5abb60459');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
