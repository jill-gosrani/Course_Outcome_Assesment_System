-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 02:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `quiz_co`
--

CREATE TABLE `quiz_co` (
  `co_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `quiz_1` int(100) NOT NULL,
  `quiz_2` int(100) NOT NULL,
  `quiz_3` int(100) NOT NULL,
  `quiz_4` int(100) NOT NULL,
  `quiz_5` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_co`
--

INSERT INTO `quiz_co` (`co_id`, `course_id`, `quiz_1`, `quiz_2`, `quiz_3`, `quiz_4`, `quiz_5`, `total`, `term`) VALUES
('ITC303.1', 'ITC303', 20, 10, 40, 30, 0, 100, 'SH-2019'),
('ITC303.2', 'ITC303', 10, 10, 10, 10, 60, 100, 'SH-2019'),
('ITC501.1', 'ITC501', 10, 20, 30, 40, 0, 100, 'SH-2019'),
('ITC501.2', 'ITC501', 100, 0, 0, 0, 0, 100, 'SH-2019'),
('ITC501.3', 'ITC501', 0, 100, 0, 0, 0, 100, 'SH-2019'),
('ITC501.4', 'ITC501', 0, 0, 100, 0, 0, 100, 'SH-2019'),
('ITC501.5', 'ITC501', 0, 0, 0, 100, 0, 100, 'SH-2019'),
('ITC501.6', 'ITC501', 0, 0, 0, 0, 100, 100, 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
