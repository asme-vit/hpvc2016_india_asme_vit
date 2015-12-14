-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 10, 2015 at 08:16 AM
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
  `food_type` varchar(50) NOT NULL,
  `acc_type` varchar(50) NOT NULL,
  `number` varchar(2) NOT NULL,
  `food_total` int(5) NOT NULL,
  `acc_total` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `reference_no` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE IF NOT EXISTS `participant` (
  `reference_no` int(4) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `college_name` varchar(50) DEFAULT NULL,
  `team_name` varchar(30) DEFAULT NULL,
  `colreg` varchar(25) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` bigint(11) DEFAULT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `college_name` varchar(50) NOT NULL,
  `college_regno` varchar(50) NOT NULL,
  `asme_id` varchar(50) NOT NULL,
  `reference_no` int(4) NOT NULL,
  `amount` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `yes_payment`
--

CREATE TABLE IF NOT EXISTS `yes_payment` (
  `ref no` varchar(8) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tpsltranid` varchar(60) NOT NULL,
  `bank_refno` varchar(60) NOT NULL,
  `ststus` int(5) NOT NULL,
  `amount` int(5) NOT NULL,
  `txndate` varchar(10) NOT NULL,
  `login` int(4) NOT NULL,
  PRIMARY KEY (`ref no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
