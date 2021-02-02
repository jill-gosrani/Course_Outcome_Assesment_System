-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2021 at 04:35 PM
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
-- Table structure for table `po_pso`
--

CREATE TABLE `po_pso` (
  `course_id` varchar(15) NOT NULL,
  `pso1` int(3) NOT NULL,
  `pso2` int(3) NOT NULL,
  `po1` int(3) NOT NULL,
  `po2` int(3) NOT NULL,
  `po3` int(3) NOT NULL,
  `po4` int(3) NOT NULL,
  `po5` int(3) NOT NULL,
  `po6` int(3) NOT NULL,
  `po7` int(3) NOT NULL,
  `po8` int(3) NOT NULL,
  `po9` int(3) NOT NULL,
  `po10` int(3) NOT NULL,
  `po11` int(3) NOT NULL,
  `po12` int(3) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `po_pso`
--

INSERT INTO `po_pso` (`course_id`, `pso1`, `pso2`, `po1`, `po2`, `po3`, `po4`, `po5`, `po6`, `po7`, `po8`, `po9`, `po10`, `po11`, `po12`, `term`) VALUES
('ITC303', 1, 2, 3, 3, 2, 1, 1, 2, 3, 3, 2, 1, 1, 2, 'SH-2019'),
('ITC501', 3, 2, 1, 2, 3, 2, 1, 2, 3, 2, 1, 2, 3, 2, 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
