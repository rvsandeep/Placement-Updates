-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 22, 2013 at 12:43 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `fname` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `Address` varchar(30) DEFAULT NULL,
  `10` varchar(5) DEFAULT NULL,
  `12` varchar(5) DEFAULT NULL,
  `Dip` varchar(5) DEFAULT NULL,
  `s1` varchar(4) DEFAULT NULL,
  `s2` varchar(4) DEFAULT NULL,
  `s3` varchar(4) DEFAULT NULL,
  `s4` varchar(4) DEFAULT NULL,
  `s5` varchar(4) DEFAULT NULL,
  `s6` varchar(4) DEFAULT NULL,
  `s7` varchar(4) DEFAULT NULL,
  `cgpa` varchar(4) NOT NULL,
  `back` int(2) NOT NULL,
  PRIMARY KEY (`fname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`fname`, `email`, `pass`, `phone`, `Address`, `10`, `12`, `Dip`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `cgpa`, `back`) VALUES
('abc', 'abc@gmail.com', '123', '9945653198', '123,bangalore', '75', '75', 'NA', '8.0', '8.1', '8.2', '8.3', '8.4', '8.5', '8.6', '8.35', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
