-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2015 at 07:41 PM
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
-- Table structure for table `food`
--

CREATE TABLE IF NOT EXISTS `food` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `food_type` varchar(50) NOT NULL,
  `acc_type` varchar(50) NOT NULL,
  `number` varchar(2) NOT NULL,
  `food_total` int(5) NOT NULL,
  `acc_total` int(5) NOT NULL,
  `total` int(5) NOT NULL,
  `reference_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
