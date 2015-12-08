-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2015 at 08:17 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hpvciks8_2015`
--

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `refno` int(4) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `college` varchar(50) DEFAULT NULL,
  `teamname` varchar(30) DEFAULT NULL,
  `colreg` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`refno`, `name`, `college`, `teamname`, `colreg`, `email`, `phone`, `amount`) VALUES
(2000, 'ac', 'vit', 'code', 'as', 'asd', 522, 0),
(2001, 'Himanshu Gupta', 'vit', 'code', 'bcb', 'himanshu199586@gmail.com', 2147483647, 0),
(2001, 'Himanshu Gupta', 'vit', 'code', 'bcb', 'himanshu199586@gmail.com', 2147483647, 0),
(2002, 'mozilla mozilla', 'vit', 'code', 'bcb', 'ghimanshu8680@gmail.com', 8680950524, 0),
(2002, 'Himanshu Gupta', 'vit', 'code', 'bcb', 'himanshu199586@gmail.com', 8680950524, 0),
(2002, 'Himanshu Gupta', 'vit', 'code', 'bcb', 'himanshu199586@gmail.com', 8680950524, 0),
(2003, 'mozilla mozilla', 'vit', 'code', 'bcb', 'himanshu199586@gmail.com', 8680950524, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `password`) VALUES
('Himanshu', 'Himanshu', 'abc');
