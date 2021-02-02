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
-- Table structure for table `co_po_pso`
--

CREATE TABLE `co_po_pso` (
  `co_no` varchar(3) NOT NULL,
  `co_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `pso1` int(11) NOT NULL,
  `pso2` int(11) NOT NULL,
  `po1` int(11) NOT NULL,
  `po2` int(11) NOT NULL,
  `po3` int(11) NOT NULL,
  `po4` int(11) NOT NULL,
  `po5` int(11) NOT NULL,
  `po6` int(11) NOT NULL,
  `po7` int(11) NOT NULL,
  `po8` int(11) NOT NULL,
  `po9` int(11) NOT NULL,
  `po10` int(11) NOT NULL,
  `po11` int(11) NOT NULL,
  `po12` int(11) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `co_po_pso`
--

INSERT INTO `co_po_pso` (`co_no`, `co_id`, `course_id`, `pso1`, `pso2`, `po1`, `po2`, `po3`, `po4`, `po5`, `po6`, `po7`, `po8`, `po9`, `po10`, `po11`, `po12`, `term`) VALUES
('CO1', 'ITC501.1', 'ITC501', 2, 0, 0, 3, 0, 0, 0, 1, 0, 0, 0, 0, 0, 2, 'SH-2019'),
('CO2', 'ITC501.2', 'ITC501', 0, 2, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 'SH-2019'),
('CO3', 'ITC501.3', 'ITC501', 0, 0, 1, 0, 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 'SH-2019'),
('CO4', 'ITC501.4', 'ITC501', 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'SH-2019'),
('CO5', 'ITC501.5', 'ITC501', 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 2, 0, 0, 'SH-2019'),
('CO6', 'ITC501.6', 'ITC501', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 3, 0, 'SH-2019'),
('CO1', 'ITC303.1', 'ITC303', 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 'SH-2019'),
('CO2', 'ITC303.2', 'ITC303', 0, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0, 0, 'SH-2019'),
('CO3', 'ITC303.3', 'ITC303', 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 3, 0, 'SH-2019'),
('CO4', 'ITC303.4', 'ITC303', 0, 0, 0, 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, 'SH-2019'),
('CO5', 'ITC303.5', 'ITC303', 0, 0, 0, 0, 2, 0, 3, 0, 0, 0, 0, 0, 0, 0, 'SH-2019'),
('CO6', 'ITC303.6', 'ITC303', 0, 0, 0, 0, 0, 3, 0, 0, 0, 0, 0, 0, 0, 0, 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
