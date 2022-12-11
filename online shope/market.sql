-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `market`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `YourName` varchar(20) NOT NULL,
  `Country` varchar(20) NOT NULL,
  `AccountNumber` int(10) NOT NULL,
  `Currency` varchar(10) NOT NULL,
  `BrandName` varchar(20) NOT NULL,
  `YourOrder` varchar(20) NOT NULL,
  `OrderCount` int(10) NOT NULL,
  `Address` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`YourName`, `Country`, `AccountNumber`, `Currency`, `BrandName`, `YourOrder`, `OrderCount`, `Address`) VALUES
('dgszg', ' ', 35, 'USD', ' Mac', 'lipglos', 5652, ' gdruyio'),
('dgszg', ' USA', 35, 'USD', ' Mac', 'lipglos', 5652, ' gdruyio'),
('czc', ' USA', 44, 'USD', ' Mac', 'xvv', 55, ' xb'),
('gjjudtjyf', ' USA', 5542346, 'USD', ' Mac', 'l;joi', 5, ' ;igiygiuj'),
('MSM,', ' USA', 12346, 'USD', ' Mac', 'GHHKL', 4, ' MANARA'),
('dw', ' USA', 144, 'USD', ' Mac', 'wewdr', 0, ' wewd'),
('dw', ' USA', 144, 'USD', ' Mac', 'wewdr', 0, ' wewd');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `Name` varchar(20) NOT NULL,
  `E-mail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
