-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 12:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `state` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`state`, `password`) VALUES
('MAHARASHTRA', 'admin'),
('TAMIL NADU', 'admin'),
('DELHI', 'admin'),
('RAJASTHAN', 'admin'),
('TELANGANA', 'admin'),
('MADHYA PRADESH', 'admin'),
('UTTAR PRADESH', 'admin'),
('ANDHRA PRADESH', 'admin'),
('KERALA', 'admin'),
('GUJARAT', 'admin'),
('KARNATAKA', 'admin'),
('JAMMU AND KASHMIR', 'admin'),
('HARYANA', 'admin'),
('PUNJAB', 'admin'),
('WEST BENGAL', 'admin'),
('BIHAR', 'admin'),
('ODISHA', 'admin'),
('UTTARAKHAND', 'admin'),
('ASSAM', 'admin'),
('HIMACHAL PRADESH', 'admin'),
('CHANDIGARH', 'admin'),
('CHHATTISGARH', 'admin'),
('LADAKH', 'admin'),
('JHARKHAND', 'admin'),
('ANDAMAN AND NICOBAR ISLANDS', 'admin'),
('GOA', 'admin'),
('PUDUCHERRY', 'admin'),
('MANIPUR', 'admin'),
('ARUNACHAL PRADESH', 'admin'),
('DADRA AND NAGAR HAVELI', 'admin'),
('MIZORAM', 'admin'),
('TRIPURA', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
