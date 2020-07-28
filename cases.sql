-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 12:03 PM
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
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `state` varchar(30) NOT NULL,
  `confirmed` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `recovered` int(11) NOT NULL,
  `death` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`state`, `confirmed`, `active`, `recovered`, `death`) VALUES
('WEST BENGAL', 134, 110, 319, 5),
('UTTARAKHAND', 35, 30, 5, 0),
('UTTAR PRADESH', 452, 402, 45, 5),
('TRIPURA', 2, 2, 0, 0),
('TELANGANA', 503, 393, 96, 14),
('TAMIL NADU', 969, 915, 44, 10),
('RAJASTHAN', 700, 575, 116, 9),
('PUNJAB', 158, 126, 20, 12),
('PUDUCHERRY', 7, 6, 1, 0),
('ODISHA', 54, 41, 12, 1),
('MIZORAM', 1, 1, 0, 0),
('MANIPUR', 2, 1, 1, 0),
('MAHARASHTRA', 1895, 1560, 208, 127),
('MADHYA PRADESH', 529, 451, 38, 40),
('LADAKH', 15, 4, 11, 0),
('KERALA', 373, 228, 143, 2),
('KARNATAKA', 226, 173, 847, 6),
('JHARKHAND', 17, 16, 0, 1),
('JAMMU AND KASHMIR', 224, 214, 6, 4),
('HIMACHAL PRADESH', 32, 22, 8, 2),
('HARYANA', 179, 141, 36, 2),
('GUJARAT', 468, 401, 44, 123),
('GOA', 7, 2, 5, 0),
('DELHI', 1069, 1023, 27, 19),
('DADRA AND NAGAR HAVELI', 1, 1, 0, 0),
('CHHATTISGARH', 25, 16, 9, 0),
('CHANDIGARH', 19, 12, 7, 0),
('BIHAR', 64, 48, 15, 1),
('ASSAM', 29, 28, 0, 1),
('ARUNACHAL PRADESH', 1, 1, 0, 0),
('ANDHRA PRADESH', 405, 389, 10, 6),
('ANDAMAN AND NICOBAR ISLANDS', 11, 1, 10, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
