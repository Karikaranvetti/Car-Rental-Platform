-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 23, 2020 at 02:22 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `ANAME` varchar(150) NOT NULL,
  `APASS` varchar(150) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AID`, `ANAME`, `APASS`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

DROP TABLE IF EXISTS `advertisement`;
CREATE TABLE IF NOT EXISTS `advertisement` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(20) NOT NULL,
  `PNO` varchar(20) NOT NULL,
  `PRICE` varchar(20) NOT NULL,
  `IMG` varchar(200) NOT NULL,
  `MAIL` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`ID`, `NAME`, `PNO`, `PRICE`, `IMG`, `MAIL`) VALUES
(6, 'lamborghini', '07712344', '30000000rs', 'a1.jpg', 'giriinnsys@gmail.com'),
(7, 'lancer', '0772333233', '40000000rs', 'a3.jpg', 'giriinnsys@gmail.com'),
(8, 'Jaguar', '07139243', '450000000', 'a2.jpg', 'giriinnsys@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `NAME` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASS` varchar(20) NOT NULL,
  PRIMARY KEY (`EMAIL`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NAME`, `EMAIL`, `PASS`) VALUES
('giri', 'giriinnsys@gmail.com', '1234'),
('bragu', 'bragu55@hotmail.com', '12345'),
('kari', 'karikaran@gmail.com', '789'),
('jana', 'jana@gmail.com', 'jana123');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `NO` varchar(30) NOT NULL,
  `CUSTOMER` varchar(30) NOT NULL,
  `DATE` varchar(20) NOT NULL,
  `TIME` varchar(20) NOT NULL,
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`NO`, `CUSTOMER`, `DATE`, `TIME`, `ID`) VALUES
('CAR EP 1234', 'giriinnsys@gmail.com', '2020-01-16', '06:22:01pm', 12),
('CAB EP 2314', 'giriinnsys@gmail.com', '2020-01-16', '01:06:09pm', 11),
('CAR EP 1234', 'giriinnsys@gmail.com', '2020-01-16', '06:23:59pm', 13),
('CAB EP 2314', 'bragu55@hotmail.com', '2020-01-24', '06:20:52am', 14),
('EP BCW 2543', 'giriinnsys@gmail.com', '2020-02-07', '07:35:21am', 15),
('EP CAR 1234', 'giriinnsys@gmail.com', '2020-02-07', '07:35:29am', 16),
('EP FIR 4667', 'bragu55@hotmail.com', '2020-02-08', '04:43:34am', 17),
('EP CDF 4567', 'bragu55@hotmail.com', '2020-02-08', '05:18:13am', 18),
('EP ADR 2302', 'bragu55@hotmail.com', '2020-02-08', '05:58:50am', 19);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `NO` varchar(30) NOT NULL,
  `TYPE` varchar(30) NOT NULL,
  `AVAILABLE` varchar(30) NOT NULL,
  `DRIVER` varchar(30) NOT NULL,
  `RENT` varchar(30) NOT NULL,
  `IMG` varchar(30) NOT NULL,
  PRIMARY KEY (`NO`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`NO`, `TYPE`, `AVAILABLE`, `DRIVER`, `RENT`, `IMG`) VALUES
('EP FIR 4667', 'van', 'not available', 'Karan', '2000 per day', '1374599927.jpg'),
('CAR EP 1234', 'car', 'notavailable', 'manickam', '1000 per day', 'b1.jpg'),
('CAB EP 2314', 'car', 'notavailable', 'Vinayak', '2000 per day', 'Z1.jpg'),
('EP BCW 2543', 'mini bus', 'notavailable', 'manickam', '1000 per day', 'Z2.jpg'),
('EP CAR 1234', 'car', 'notavailable', 'kari', '2000 per day', 'a.jpg'),
('EP CDF 4567', 'van', 'not available', 'Jana', '3000 per day', '1374599927.jpg'),
('EP VCG 6768', 'car', 'available', 'kari', '2000 per day', 'b2.jpg'),
('EP ABC 5674', 'car', 'available', 'manickam', '1000 per day', 'b2.jpg'),
('EP ADR 2302', 'van', 'not available', 'Batsha', '2000 per day', '1374599927.jpg'),
('EP ADS 4567', 'mini bus', 'available', 'Batsha', '2000 per day', 'Z2.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
