-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 07:13 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `tutorial_co`
--

CREATE TABLE `tutorial_co` (
  `co_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `tut1` int(10) NOT NULL,
  `tut2` int(10) NOT NULL,
  `tut3` int(10) NOT NULL,
  `tut4` int(10) NOT NULL,
  `tut5` int(10) NOT NULL,
  `tut6` int(10) NOT NULL,
  `tut7` int(10) NOT NULL,
  `tut8` int(10) NOT NULL,
  `tut9` int(10) NOT NULL,
  `tut10` int(10) NOT NULL,
  `tut11` int(10) NOT NULL,
  `tut12` int(10) NOT NULL,
  `tut13` int(10) NOT NULL,
  `total` int(10) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
