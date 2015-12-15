-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 11:09 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hpvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_pre`
--

CREATE TABLE IF NOT EXISTS `vehicle_pre` (
  `team_name` varchar(50) NOT NULL,
  `q1` int(3) NOT NULL,
  `q2` int(3) NOT NULL,
  `q3` int(3) NOT NULL,
  `q4` int(3) NOT NULL,
  `email` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
