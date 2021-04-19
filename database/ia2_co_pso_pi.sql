-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2021 at 11:13 AM
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
-- Table structure for table `ia2_co_pso_pi`
--

CREATE TABLE `ia2_co_pso_pi` (
  `co_id` varchar(30) NOT NULL,
  `course_id` varchar(15) NOT NULL,
  `ia_questions` varchar(7) NOT NULL,
  `marks` int(3) NOT NULL,
  `bl_level` varchar(3) NOT NULL,
  `co_no` varchar(3) NOT NULL,
  `pso` varchar(50) NOT NULL,
  `pi_po` varchar(200) NOT NULL,
  `term` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ia2_co_pso_pi`
--

INSERT INTO `ia2_co_pso_pi` (`co_id`, `course_id`, `ia_questions`, `marks`, `bl_level`, `co_no`, `pso`, `pi_po`, `term`) VALUES
('ITC502.3', 'ITC303', 'IA2_1a', 2, 'BL2', 'CO3', 'IT_PSO1', '1', 'SH-2019'),
('ITC502.5', 'ITC303', 'IA2_1b', 2, 'BL2', 'CO5', 'IT_PSO2', '2', 'SH-2019'),
('ITC303.2', 'ITC303', 'IA2_1c', 2, 'BL1', 'CO2', 'IT_PSO2', '3', 'SH-2019'),
('ITC303.1', 'ITC303', 'IA2_1d', 2, 'BL3', 'CO1', 'IT_PSO1', '4', 'SH-2019'),
('ITC502.5', 'ITC303', 'IA2_1e', 2, 'BL3', 'CO5', 'IT_PSO2', '5', 'SH-2019'),
('ITC502.4', 'ITC303', 'IA2_1f', 2, 'BL3', 'CO4', 'IT_PSO1', '6', 'SH-2019'),
('ITC502.6', 'ITC303', 'IA2_2a', 5, 'BL6', 'CO6', 'IT_PSO2', '7', 'SH-2019'),
('ITC502.3', 'ITC303', 'IA2_2b', 5, 'BL4', 'CO3', 'IT_PSO1', '8', 'SH-2019'),
('ITC303.2', 'ITC303', 'IA2_3a', 5, 'BL5', 'CO2', 'IT_PSO1', '9', 'SH-2019'),
('ITC502.3', 'ITC303', 'IA2_3b', 5, 'BL1', 'CO3', 'IT_PSO2', '11', 'SH-2019');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
