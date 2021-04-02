-- phpMyAdmin SQL Dump
-- version 5.1.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 05, 2021 at 04:13 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `subject`, `status`) VALUES
(1, '', '', 1),
(2, 'hi', '08160263660', 1),
(3, 'hi', 'hello', 1),
(4, 'hi', '09071123433', 1),
(5, 'hi', '09071123433', 1),
(6, 'hi', '09071123433', 1),
(7, 'hi', '09071123433', 1),
(8, 'hi', '09071123433', 1),
(9, 'hi', '09071123433', 1),
(10, 'hi', '09071123433', 1),
(11, 'hi', '09071123433', 1),
(12, 'hi', '09071123433', 1),
(13, 'hi', '09071123433', 1),
(14, 'hi', '09071123433', 1),
(15, 'hi', '09071123433', 1),
(16, 'hi', '09071123433', 1),
(17, 'hi', '09071123433', 1),
(18, 'Hi', '09071123433', 1),
(19, 'Hi', '09071123433', 1),
(20, 'hi', '09071123433', 1),
(21, 'hi', '09071123433', 1),
(22, 'hi', '09071123433', 1),
(23, 'hi', '09071123433', 1),
(24, 'hi', 'q', 1),
(25, 'hi', '09071123433', 1),
(26, 'hi', '08160263660', 1),
(27, 'hi', '08160263660', 1),
(28, 'hu\r\n', 'q', 1),
(29, 'dg', '09071123433', 1),
(30, 'Hi', 'hello', 1),
(31, 'Hhhhh', 'Ow far', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
