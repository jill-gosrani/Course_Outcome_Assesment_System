-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 03:45 PM
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
-- Table structure for table `assignment_co`
--

CREATE TABLE `assignment_co` (
  `co_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `A1_1` int(10) NOT NULL,
  `A1_2` int(10) NOT NULL,
  `A1_3` int(10) NOT NULL,
  `A1_4` int(10) NOT NULL,
  `A1_5` int(10) NOT NULL,
  `A2_1` int(10) NOT NULL,
  `A2_2` int(10) NOT NULL,
  `A2_3` int(10) NOT NULL,
  `A2_4` int(10) NOT NULL,
  `A2_5` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_co`
--

INSERT INTO `assignment_co` (`co_id`, `course_id`, `A1_1`, `A1_2`, `A1_3`, `A1_4`, `A1_5`, `A2_1`, `A2_2`, `A2_3`, `A2_4`, `A2_5`, `total`, `term`) VALUES
('ITC502.1', 'ITC502', 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 100, 'SH-2019'),
('ITC502.2', 'ITC502', 0, 100, 0, 0, 0, 0, 0, 0, 0, 0, 100, 'SH-2019'),
('ITC502.3', 'ITC502', 0, 0, 80, 20, 0, 0, 0, 0, 0, 0, 100, 'SH-2019'),
('ITC502.4', 'ITC502', 0, 0, 0, 0, 100, 0, 0, 0, 0, 0, 100, 'SH-2019'),
('ITC502.5', 'ITC502', 0, 0, 0, 0, 0, 70, 30, 0, 0, 0, 100, 'SH-2019'),
('ITC502.6', 'ITC502', 0, 0, 0, 0, 0, 0, 0, 60, 20, 20, 100, 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
