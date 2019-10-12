-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2018 at 09:22 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tornado super shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `biscuits`
--

CREATE TABLE `biscuits` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chocolates`
--

CREATE TABLE `chocolates` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dairy_products`
--

CREATE TABLE `dairy_products` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` int(11) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `featured` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`SL`, `Product_Name`, `Product_Code`, `In_Stock`, `Price`, `featured`) VALUES
(1, 'Green Apples', 1, 500, 170, 0),
(1, 'Red Apples', 2, 500, 120, 0),
(3, 'Oranges', 3, 50, 200, 0),
(4, 'Green Grapes', 4, 100, 300, 0);

-- --------------------------------------------------------

--
-- Table structure for table `meats`
--

CREATE TABLE `meats` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `SL` int(11) DEFAULT NULL,
  `Product_Name` varchar(255) DEFAULT NULL,
  `Product_Code` varchar(255) DEFAULT NULL,
  `In_Stock` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
