-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 2, 2015 at 02:28 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `histogram2`
--

CREATE TABLE IF NOT EXISTS `histogram2` (
  `week` varchar(10) NOT NULL,
  `pos_exercise` int(10) NOT NULL,
  `mot_exercise` int(10) NOT NULL,
  `pos_diet` int(10) NOT NULL,
  `neg_diet` int(10) NOT NULL,
  `mot_diet` int(10) NOT NULL,
  `pos_alcohol` int(10) NOT NULL,
  `quit_alcohol` int(10) NOT NULL,
  `pos_smoking` int(10) NOT NULL,
  `quit_smoking` int(10) NOT NULL,
  `total` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histogram2`
--

INSERT INTO `histogram2` (`week`, `pos_exercise`, `mot_exercise`, `pos_diet`, `neg_diet`, `mot_diet`, `pos_alcohol`, `quit_alcohol`, `pos_smoking`, `quit_smoking`, `total`) VALUES
('1', 31051, 789, 4138, 1137, 1269, 19807, 565, 2415, 1165, 410838),
('2', 26029, 688, 3449, 919, 1004, 16296, 481, 1992, 993, 344791),
('3', 26832, 657, 3707, 964, 1052, 16421, 505, 2003, 960, 355881),
('4', 15649, 384, 2126, 565, 653, 9645, 272, 1154, 563, 207116);

-- --------------------------------------------------------

--
-- Table structure for table `histogram5`
--

CREATE TABLE IF NOT EXISTS `histogram5` (
  `week` varchar(10) NOT NULL,
  `pos_exercise` varchar(10) NOT NULL,
  `mot_exercise` varchar(10) NOT NULL,
  `pos_diet` varchar(10) NOT NULL,
  `neg_diet` varchar(10) NOT NULL,
  `mot_diet` varchar(10) NOT NULL,
  `pos_alcohol` varchar(10) NOT NULL,
  `quit_alcohol` varchar(10) NOT NULL,
  `pos_smoking` varchar(10) NOT NULL,
  `quit_smoking` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histogram5`
--

INSERT INTO `histogram5` (`week`, `pos_exercise`, `mot_exercise`, `pos_diet`, `neg_diet`, `mot_diet`, `pos_alcohol`, `quit_alcohol`, `pos_smoking`, `quit_smoking`, `total`) VALUES
('1', '3004', '30', '322', '80', '72', '1792', '34', '164', '92', '20698'),
('2', '3160', '30', '308', '90', '56', '1966', '46', '156', '104', '21828'),
('3', '1956', '14', '248', '46', '68', '1142', '20', '120', '60', '13266'),
('4', '1378', '14', '142', '34', '32', '946', '18', '90', '48', '9944');

-- --------------------------------------------------------

--
-- Table structure for table `histogram6`
--

CREATE TABLE IF NOT EXISTS `histogram6` (
  `week` varchar(10) NOT NULL,
  `pos_exercise` varchar(10) NOT NULL,
  `mot_exercise` varchar(10) NOT NULL,
  `pos_diet` varchar(10) NOT NULL,
  `neg_diet` varchar(10) NOT NULL,
  `mot_diet` varchar(10) NOT NULL,
  `pos_alcohol` varchar(10) NOT NULL,
  `quit_alcohol` varchar(10) NOT NULL,
  `pos_smoking` varchar(10) NOT NULL,
  `quit_smoking` varchar(10) NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `histogram6`
--

INSERT INTO `histogram6` (`week`, `pos_exercise`, `mot_exercise`, `pos_diet`, `neg_diet`, `mot_diet`, `pos_alcohol`, `quit_alcohol`, `pos_smoking`, `quit_smoking`, `total`) VALUES
('1', '2844', '30', '302', '72', '54', '1968', '50', '224', '88', '20738'),
('2', '2836', '16', '274', '96', '60', '1820', '36', '196', '96', '20766'),
('3', '1936', '14', '152', '68', '56', '1430', '40', '152', '54', '14224'),
('4', '1268', '14', '140', '40', '26', '852', '22', '76', '38', '9702');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
