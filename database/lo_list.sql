-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 01:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college_db1`
--

-- --------------------------------------------------------

--
-- Table structure for table `lo_list`
--

CREATE TABLE `lo_list` (
  `trans_id` varchar(30) NOT NULL,
  `lo_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `lo_no` varchar(3) NOT NULL,
  `sem` int(2) NOT NULL,
  `lo_statement` varchar(1000) NOT NULL,
  `bl_level` varchar(3) NOT NULL,
  `weightage` float NOT NULL,
  `pso` varchar(50) NOT NULL,
  `pi_po` varchar(200) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lo_list`
--

INSERT INTO `lo_list` (`trans_id`, `lo_id`, `course_id`, `lo_no`, `sem`, `lo_statement`, `bl_level`, `weightage`, `pso`, `pi_po`, `term`) VALUES
('sakec601936763f0795.77149237', 'ITL301.1', 'ITL301', 'LO1', 3, 'This is Lo1', '3', 10, 'IT_PSO1', '1.1.1', 'SH-2019'),
('sakec601936cc63ccd9.91503344', 'ITL301.2', 'ITL301', 'LO2', 3, 'This is LO2', '4', 15, 'IT_PSO1, IT_PSO2', '1.2.3.4.5', 'SH-2019'),
('sakec601936f3bfcb11.96277604', 'ITL301.3', 'ITL301', 'LO3', 3, 'This is LO3', '2', 20, 'IT_PSO1, IT_PSO2', '2.3.1', 'SH-2019'),
('sakec60193706aa7ed3.68196357', 'ITL301.4', 'ITL301', 'LO4', 3, 'This is LO4', '1', 30, 'IT_PSO1', '1.5.8', 'SH-2019'),
('sakec6019371dc39790.39538656', 'ITL301.5', 'ITL301', 'LO5', 3, 'This is LO5', '5', 40, 'IT_PSO1, IT_PSO2', '3.6.4', 'SH-2019'),
('sakec601937376f1d93.76986942', 'ITL301.6', 'ITL301', 'LO6', 3, 'This is LO6', '4', 50, 'IT_PSO2', '3.3.3.2', 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
