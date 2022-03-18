-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 12:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`fname`, `lname`, `email`, `password`) VALUES
('Mujtaba', 'Ali', 'mujtaba@gmail.com', 'Aaa@!2345'),
('Arshad ', 'malik', 'malik@gmail.com', 'Aa@12334'),
('Arshad ', 'malik', 'malik@gmail.com', 'Aa@12334'),
('Arshad ', 'malik', 'malik@gmail.com', 'Aa@12334'),
('Arshad ', 'malik', 'malik@gmail.com', 'Aa@12334'),
('Arshad ', 'malik', 'malik@gmail.com', 'Aa@12334'),
('Mujtaba', 'Ali', 'alimujtaba9012@gmail.com', 'Aaa@12345'),
('rahil', 'Ali', 'alirahil@gmail.com', 'Assdrahil22'),
('zadeja', 'singh', 'singh@gmail.com', 'Aaa@12345jadeja'),
('Major', 'Kashyap', 'kashyap@gmail.com', 'Aaa@12334'),
('', '', '', ''),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
