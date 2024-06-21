-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2024 at 06:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_name` varchar(50) DEFAULT NULL,
  `course_code` varchar(20) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `instructor` varchar(30) NOT NULL,
  `semister` varchar(3) NOT NULL,
  `yos` tinyint(4) NOT NULL,
  `grade` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_name`, `course_code`, `description`, `department`, `instructor`, `semister`, `yos`, `grade`) VALUES
('[communication skills for engineers]', 'CL 111', '[Provides necessary communication skills]', 'CoHu', 'DR. MDOE, K', 'I', 1, 'B+'),
('Development studies I', 'DS112', 'development issues', 'institute of Development studi', 'Dr.Minja', 'I', 1, 'B+'),
('Development studies II', 'DS113', 'development issues', 'institute of Development studi', 'Dr.Nuhu', 'II', 1, 'not set for exam yet'),
('Foundation of analysis', 'MT100', 'mathematical analysis', 'Department of Mathematics', 'Dr.Mlay', 'I', 1, 'B+'),
('Programming in java', 'CS 175', 'Object oriented programming with java', 'Department of computer science', 'Dr.Juma Rungo', 'II', 1, 'not set for exam yet'),
('programming in C', 'CS 175', 'introduction to c programming', 'Department of computer science', 'Dr.Mahundi', 'I', 1, 'A'),
('Computer Hardware and System Maintainance', 'IS 158', 'computer troubleshooting', 'Department of computer science', 'Dr..Diana', 'II', 1, 'not set for exam yet');

-- --------------------------------------------------------

--
-- Table structure for table `registrant_info`
--

CREATE TABLE `registrant_info` (
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(576) NOT NULL,
  `cv` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrant_info`
--

INSERT INTO `registrant_info` (`first_name`, `middle_name`, `surname`, `username`, `password`, `cv`, `email`, `phone`, `facebook`, `twitter`, `instagram`) VALUES
('thadei', 'claud', 'msemwa', 'msemwathadei@gmail.com', 'Msemwa@2002', 'cvUploads/thadei.doc', 'msemwathadei@gmail.com', '0676102957', 'thadei.msemwa.12', 'MsemwaThadei', 'thadeimsemwa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
