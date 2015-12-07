-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 07, 2015 at 07:42 PM
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
