-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2020 at 12:20 AM
-- Server version: 8.0.16
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `student_id` int(11) NOT NULL,
  `code` varchar(40) NOT NULL,
  `Grade` char(10) DEFAULT NULL,
  PRIMARY KEY (`student_id`,`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`student_id`, `code`, `Grade`) VALUES
(1, 'csc1113', 'B'),
(1, 'csc1142', 'B'),
(1, 'csc1213', 'B'),
(1, 'csc1233', 'B'),
(1, 'csc2122', 'B'),
(2, 'csc1113', 'A'),
(2, 'csc1142', 'B'),
(3, 'csc1113', 'A'),
(3, 'csc1142', 'A-'),
(3, 'csc1213', 'B'),
(3, 'csc1233', 'B'),
(3, 'csc2123', 'B'),
(3, 'csc2133', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `sem`
--

DROP TABLE IF EXISTS `sem`;
CREATE TABLE IF NOT EXISTS `sem` (
  `sem_id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sem`
--

INSERT INTO `sem` (`sem_id`, `year`, `semester`) VALUES
(11, 1, 1),
(12, 1, 2),
(21, 2, 1),
(22, 2, 2),
(31, 3, 1),
(32, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `name` varchar(60) DEFAULT NULL,
  `sem_id` int(11) NOT NULL,
  `email` char(30) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `username`, `password`, `name`, `sem_id`, `email`) VALUES
(1, 'SC9904', '5e5545d38a68148a2d5bd5ec9a89e327', 'K.D.T Kumarasinghe', 22, NULL),
(2, 'SC10294', '213ee683360d88249109c2f92789dbc3', 'M.A.M.K Weerasinghe', 12, NULL),
(3, 'SC10280', '8e4947690532bc44a8e41e9fb365b76a', 'A.K.N Priyadarshni', 22, NULL),
(4, 'SC10299', '166a50c910e390d922db4696e4c7747b', 'ishara', 1, NULL),
(5, 'SC10281', '9fd9280a7aa3578c8e853745a5fcc18a', 'Kavi', 2, 'kavi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `sem_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` varchar(40) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sem_id`, `name`, `code`, `credit`) VALUES
(11, 'Programming Techniques', 'csc1113', 3),
(11, 'System Analyst & Design', 'csc1142', 2),
(12, 'Database Management Systems', 'csc1213', 3),
(12, 'software Engineering', 'csc1233', 3),
(21, 'Object Oriented Programming', 'csc2123', 3),
(21, 'Operating Systems', 'csc2133', 3),
(21, 'Rapid', 'csc2122', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
