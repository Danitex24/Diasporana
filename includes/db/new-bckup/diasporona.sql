-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2021 at 08:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diasporona`
--

-- --------------------------------------------------------

--
-- Table structure for table `diasporaplus`
--

CREATE TABLE `diasporaplus` (
  `id` int(10) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `propID` varchar(25) NOT NULL,
  `product` varchar(100) NOT NULL DEFAULT 'diasporanaPlus',
  `addDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `freshland`
--

CREATE TABLE `freshland` (
  `id` int(10) NOT NULL,
  `uID` varchar(25) NOT NULL,
  `landSize` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `location` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `landImage` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `description` varchar(250) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `addBy` varchar(50) NOT NULL,
  `addedDate` varchar(25) NOT NULL,
  `approveDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freshland`
--

INSERT INTO `freshland` (`id`, `uID`, `landSize`, `title`, `purpose`, `location`, `price`, `landImage`, `image1`, `image2`, `image3`, `image4`, `description`, `status`, `addBy`, `addedDate`, `approveDate`) VALUES
(19, '19', '501.10  Hectares', 'C of O (Certificate of Occupancy)', 'Mass Housing', 'Gude, FCT-Abuja', 'Fifteen Billion Naira (N15, 000,000,000.00) only.', '15.jpg', '1.jpg', '2.jpg', '3.jpg', '4.jpg', 'Very easy to locate and  quick acces to the road', 'Approved', '', 'December-09-2020 14: 15: ', 'January/25/2021 19: 19: 5');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) NOT NULL,
  `userID` varchar(100) NOT NULL,
  `propID` varchar(50) NOT NULL,
  `landID` varchar(100) NOT NULL,
  `orderID` varchar(50) NOT NULL,
  `invoiceID` varchar(50) NOT NULL,
  `qty` varchar(25) NOT NULL,
  `propName` varchar(200) NOT NULL,
  `propL` varchar(200) NOT NULL,
  `landTitle` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `landPrice` varchar(100) NOT NULL,
  `landLocation` varchar(200) NOT NULL,
  `description` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `vat` varchar(100) NOT NULL,
  `subTotal` varchar(100) NOT NULL,
  `total` varchar(50) NOT NULL,
  `compName` varchar(100) NOT NULL,
  `compAddress` varchar(250) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `approved` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `userID`, `propID`, `landID`, `orderID`, `invoiceID`, `qty`, `propName`, `propL`, `landTitle`, `purpose`, `landPrice`, `landLocation`, `description`, `amount`, `discount`, `vat`, `subTotal`, `total`, `compName`, `compAddress`, `contact`, `status`, `approved`, `date`) VALUES
(42, 'Diasporana-468575239', '', '1', '421288829', '#471453846', '1', '', '', 'C of O (Certificate of Occupancy)', '', 'Fifteen Billion Naira (N15, 000,000,000.00) only.', 'Gude, FCT-Abuja', 'Sent for approval', '', '', '', '', '', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Approved', 'Approved', 'December/21/2020 10: 19: 22:'),
(43, 'Diasporana-468575239', '', '1', '1167067600', '#1049958050', '1', '', '', 'C of O (Certificate of Occupancy)', '', 'Fifteen Billion Naira (N15, 000,000,000.00) only.', 'Gude, FCT-Abuja', 'Sent for approval', '', '', '', '', '', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Approved', 'Approved', 'December/21/2020 10: 26: 07:'),
(44, 'Diasporana-468575239', '35', '', '423317250', '#2102613220', '1', '8Bed Room', 'Gozape Abuja', '', '', '', '', 'Sent for approval', '655,4440000000', '', '66', '655', '655', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'December/29/2020 11: 45: 59:'),
(45, 'Diasporana-1081709041', '33', '', '258893630', '#784300681', '1', '2 Bedroom', 'Airport Road, FHA, Lugbe Abuja.', '', '', '', '', 'Sent for approval', '1,000.000.000.00', '', '12', '1', '1', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'January/07/2021 16: 16: 17:'),
(46, 'Diasporana-468575239', '33', '', '574192365', '#1148996501', '1', '2 Bedroom', 'Airport Road, FHA, Lugbe Abuja.', '', '', '', '', 'Sent for approval', '1,000.000.000.00', '', '12', '1', '1', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'January/11/2021 22: 58: 13:'),
(47, 'Diasporana-468575239', '33', '', '229969710', '#2140818324', '1', '2 Bedroom', 'Airport Road, FHA, Lugbe Abuja.', '', '', '', '', 'Sent for approval', '1,000.000.000.00', '', '12', '1', '1', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'February/25/2021 13: 18: 19:'),
(48, 'Diasporana-1081709041', '33', '', '1873752273', '#731658793', '1', '2 Bedroom', 'Airport Road, FHA, Lugbe Abuja.', '', '', '', '', 'Sent for approval', '1,000.000.000.00', '', '12', '1', '1', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'February/25/2021 15: 49: 06:');

-- --------------------------------------------------------

--
-- Table structure for table `landrequest`
--

CREATE TABLE `landrequest` (
  `id` int(10) NOT NULL,
  `uID` varchar(10) NOT NULL,
  `userID` varchar(150) NOT NULL,
  `landID` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `price` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `contactNo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'Pending',
  `requestDate` varchar(25) NOT NULL,
  `approveDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landrequest`
--

INSERT INTO `landrequest` (`id`, `uID`, `userID`, `landID`, `title`, `price`, `purpose`, `contactNo`, `email`, `status`, `requestDate`, `approveDate`) VALUES
(19, '19', 'Diasporana-468575239', '1', 'C of O (Certificate of Occupancy)', 'Fifteen Billion Naira (N15, 000,000,000.00) only.', 'Mass Housing', '080000000033', 'testuser@gmail.com', 'Approved', 'December/21/2020 10: 26: ', 'January/25/2021 19: 19: 5');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(10) NOT NULL,
  `userID` varchar(25) NOT NULL,
  `propID` varchar(25) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `notification` varchar(500) NOT NULL,
  `image` varchar(25) NOT NULL,
  `created_at` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `propertID` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Processing',
  `purchaseDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(10) NOT NULL,
  `uID` varchar(10) NOT NULL,
  `propID` varchar(25) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `propName` varchar(100) NOT NULL,
  `subscribed` varchar(10) NOT NULL,
  `subscribeDate` varchar(50) NOT NULL,
  `approveDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `uID`, `propID`, `userID`, `email`, `phone`, `name`, `propName`, `subscribed`, `subscribeDate`, `approveDate`) VALUES
(15, '19', '1', 'Diasporana-468575239', 'testuser@gmail.com', '080000000033', 'Daniel', 'C of O (Certificate of Occupancy)', 'Approved', 'January/05/2021 11: 48: 50:', 'February/24/2021 13: 24: ');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` varchar(50) NOT NULL,
  `vat` varchar(100) NOT NULL,
  `currency` varchar(10) NOT NULL,
  `addDate` varchar(50) NOT NULL,
  `addBy` varchar(100) NOT NULL,
  `propLocation` varchar(500) NOT NULL,
  `sqf` varchar(100) NOT NULL,
  `bedroom` varchar(100) NOT NULL,
  `pspace` varchar(100) NOT NULL,
  `garages` varchar(100) NOT NULL,
  `fsale` varchar(50) NOT NULL,
  `frent` varchar(50) NOT NULL,
  `verified` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `otherInfo` varchar(200) NOT NULL,
  `propImage` varchar(200) NOT NULL,
  `image1` varchar(100) NOT NULL,
  `image2` varchar(100) NOT NULL,
  `image3` varchar(100) NOT NULL,
  `image4` varchar(100) NOT NULL,
  `image5` varchar(100) NOT NULL,
  `image6` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `name`, `price`, `vat`, `currency`, `addDate`, `addBy`, `propLocation`, `sqf`, `bedroom`, `pspace`, `garages`, `fsale`, `frent`, `verified`, `description`, `otherInfo`, `propImage`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `status`) VALUES
(33, '2 Bedroom', '1,000.000.000.00', '12', '&#8358;', 'November-19-2020 17: 21: 31:', 'Salamat', 'Airport Road, FHA, Lugbe Abuja.', '105', '2', '1', '', 'No', 'Yes', 'Processing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb', '', '15.jpg', '1.jpg', '2.jpg', '3.jpg', '4.jpg', '', '', 'Available'),
(34, '1BHK Alexander Lugbe Abuja', '6554440000000', '', '&#8358;', 'November-19-2020 17: 34: 24:', 'Salamat', 'Maitama Abuja', '6', '', '2', '1', 'Yes', 'No', 'Processing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb', '', 'thumb-1.jpg', 'thumb-3.jpg', 'thumb-2.jpg', 'thumb-5.jpg', 'thumb-6.jpg', '', '', 'Sold'),
(35, '8Bed Room', '655,4440000000', '66', '&#8358;', 'November-26-2020 14: 27: 19:', 'Salamat', 'Gozape Abuja', '205', '8', '1', '1', 'Yes', 'No', 'Processing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit Aliquam gravida magna et fringilla convallis. Pellentesque habitant morb', '', 'blog-page-1.jpg', 'blog-page-4.jpg', 'blog-page-3.jpg', '12-img.jpg', '11-img.jpg', '', '', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `propertyrequest`
--

CREATE TABLE `propertyrequest` (
  `id` int(10) NOT NULL,
  `uID` varchar(10) NOT NULL,
  `userID` varchar(250) NOT NULL,
  `propID` varchar(50) NOT NULL,
  `propName` varchar(250) NOT NULL,
  `price` varchar(50) NOT NULL,
  `contactNo` varchar(100) NOT NULL,
  `contactEmail` varchar(150) NOT NULL,
  `requestDate` varchar(50) NOT NULL,
  `approvedDate` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertyrequest`
--

INSERT INTO `propertyrequest` (`id`, `uID`, `userID`, `propID`, `propName`, `price`, `contactNo`, `contactEmail`, `requestDate`, `approvedDate`, `status`) VALUES
(1, '19', 'Diasporana-468575239', '33', '2 Bedroom', '1,000.000.000.00', '080000000033', 'testuser@gmail.com', 'December-02-2020 16: 35: 30:', 'December-14-2020 16: 35: 30:', 'Approved'),
(41, '19', 'Diasporana-468575239', '33', '2 Bedroom', '1,000.000.000.00', '080000000033', 'testuser@gmail.com', 'February/25/2021 13: 18: 19:', '', 'Pending'),
(42, '21', 'Diasporana-1081709041', '33', '2 Bedroom', '1,000.000.000.00', '09034113062', 'daniel@salamat.ng', 'February/25/2021 15: 49: 06:', '', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(10) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `propID` varchar(25) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  `image1` varchar(50) NOT NULL,
  `image2` varchar(50) NOT NULL,
  `image3` varchar(50) NOT NULL,
  `image4` varchar(50) NOT NULL,
  `addDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `userID`, `propID`, `subject`, `content`, `status`, `image`, `image1`, `image2`, `image3`, `image4`, `addDate`) VALUES
(1, 'Diasporana-468575239', '34', 'dfjkmygfhfjjf', 'Type here....mrgg,', 'unread', '', '', '', '', '', 'January/08/2021 13: 05: 31:'),
(5, 'Diasporana-468575239', '34', ';lkjhgfdsfgh', 'Type here....jhbhygvutgftft', 'unread', '', '', '', '', '', 'January/11/2021 16: 52: 19:'),
(6, 'Diasporana-468575239', '34', 'test noti', 'Type here....testing', 'unread', '', '', '', '', '', 'January/11/2021 17: 01: 20:'),
(7, 'Diasporana-468575239', '34', 'csgfhjnrfjnrf', 'Type here....xfghnsrf', 'unread', '', '', '', '', '', 'January/25/2021 19: 17: 48:');

-- --------------------------------------------------------

--
-- Table structure for table `soldproperties`
--

CREATE TABLE `soldproperties` (
  `propertyID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `soldDate` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `propID` varchar(50) NOT NULL,
  `landID` varchar(1000) NOT NULL,
  `orderID` varchar(100) NOT NULL,
  `invoiceID` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `compName` varchar(100) NOT NULL,
  `compAddress` varchar(250) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'Pending',
  `approved` varchar(50) NOT NULL,
  `tDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `userID`, `propID`, `landID`, `orderID`, `invoiceID`, `description`, `compName`, `compAddress`, `contact`, `status`, `approved`, `tDate`) VALUES
(40, 'Diasporana-468575239', '', '1', '421288829', '#471453846', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', 'Pending', 'December/21/2020 10: 19: 22:'),
(41, 'Diasporana-468575239', '', '1', '1167067600', '#1049958050', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', '', '', 'December/21/2020 10: 26: 07:'),
(42, 'Diasporana-468575239', '35', '', '423317250', '#2102613220', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'December/29/2020 11: 45: 59:'),
(43, 'Diasporana-1081709041', '33', '', '258893630', '#784300681', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'January/07/2021 16: 16: 17:'),
(44, 'Diasporana-468575239', '33', '', '574192365', '#1148996501', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'January/11/2021 22: 58: 13:'),
(45, 'Diasporana-468575239', '33', '', '229969710', '#2140818324', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'February/25/2021 13: 18: 19:'),
(46, 'Diasporana-1081709041', '33', '', '1873752273', '#731658793', 'Sent for approval', 'Salamat Group Ltd.', '5th Floor, Merit House, Plot 22, Aguiyi Ironsi Street, Maitama, Abuja.', '07025004795', 'Pending', '', 'February/25/2021 15: 49: 06:');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `package` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `profilePix` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `regDate` varchar(50) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `updateStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userID`, `email`, `password`, `role`, `firstName`, `lastName`, `package`, `dob`, `gender`, `status`, `profilePix`, `country`, `city`, `phone`, `address`, `regDate`, `about`, `updateStatus`) VALUES
(18, '', 'admin@diasporana.com', '$2y$10$5HFVBWLYt2QA0qjBBV3Rm.YCZdWwX7yqverAa1GL0/TBPqehQOcYm', 'admin', 'Salamat', 'Diasporana', '', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Diasporana-468575239', 'testuser@gmail.com', '$2y$10$TKcLsiV36B/YuJ.8GWry0u9CqvHp4Jt1ROR481x/eo/E0r.JWTarK', 'user', 'Daniel', 'Adasho', 'Diasporana', '2020-09-01', 'Male', 'Active', 'assets/images/userprofile/Dani.jpeg', 'Nigeria', 'Abuja', '080000000033', 'Merit House Maitama, Abuja NIgeria', '', '', 'Completed'),
(21, 'Diasporana-1081709041', 'daniel@salamat.ng', '$2y$10$bI7HfIm28wjwwUoRAi4YMut2gd9ognl8UdjtW3diBIP2Ga6NLw31C', 'user', 'Diasporana', 'Salamat', '', '2021-03-26', 'Male', 'Active', 'assets/images/userprofile/80044400.jpeg', '', 'Jos', '09034113062', 'Plot 13, by total coner shops FHA Lugbe Abuja', '2021-01-07 15:48:41', '', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `id` int(10) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `activitiesOnSite` varchar(500) NOT NULL,
  `login_time` varchar(50) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`id`, `userID`, `activitiesOnSite`, `login_time`) VALUES
(43, 'Diasporana-468575239', ' update profile recently', '2020-11-09 22:26:07'),
(44, 'Diasporana-468575239', 'Daniel update profile recently', '2020-11-09 22:32:24'),
(45, 'Diasporana-468575239', 'Daniel update password recently', '2020-11-10 10:43:26'),
(46, 'Diasporana-468575239', 'Daniel update password recently', '2020-11-10 10:52:01'),
(47, 'Diasporana-468575239', 'Daniel update password recently', '2020-11-10 10:59:40'),
(48, 'Diasporana-468575239', 'Daniel update password recently', '2020-11-10 11:10:37'),
(49, 'Diasporana-468575239', 'Daniel update password recently', '2020-11-10 11:45:31'),
(50, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 10:42:22'),
(51, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 12:50:31'),
(52, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 16:18:46'),
(53, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 17:04:02'),
(54, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 17:06:49'),
(55, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-11 21:16:20'),
(56, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-12 14:18:20'),
(57, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-12 14:20:02'),
(58, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-12 14:22:49'),
(59, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-11-12 14:24:48'),
(60, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-12-02 09:54:37'),
(61, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-12-02 09:56:52'),
(62, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-12-02 09:59:54'),
(63, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-12-02 10:07:46'),
(64, 'Diasporana-468575239', 'Daniel upload profile picture recently', '2020-12-02 10:12:30'),
(65, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December-02-2020 16: 57: 38:'),
(66, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December-04-2020 08: 43: 36:'),
(67, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 07: 31:'),
(68, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 08: 57:'),
(69, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 12: 05:'),
(70, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 12: 10:'),
(71, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 35: 09:'),
(72, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 35: 15:'),
(73, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 36: 54:'),
(74, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 37: 05:'),
(75, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 38: 46:'),
(76, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/04/2020 10: 38: 52:'),
(77, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 10: 50: 32:'),
(78, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 10: 50: 38:'),
(79, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 10: 53: 03:'),
(80, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 10: 53: 12:'),
(81, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 03: 29:'),
(82, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 03: 37:'),
(83, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 22: 24:'),
(84, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 45: 37:'),
(85, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 45: 44:'),
(86, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 46: 24:'),
(87, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 46: 31:'),
(88, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 11: 47: 40:'),
(89, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 12: 07: 43:'),
(90, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 12: 12: 48:'),
(91, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'December/04/2020 12: 15: 18:'),
(92, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/14/2020 10: 05: 49:'),
(93, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/14/2020 11: 46: 33:'),
(94, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/14/2020 15: 07: 24:'),
(95, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/14/2020 15: 08: 33:'),
(96, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/14/2020 15: 09: 14:'),
(97, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/16/2020 13: 13: 02:'),
(98, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/18/2020 12: 24: 32:'),
(99, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/18/2020 15: 34: 54:'),
(100, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/18/2020 15: 36: 45:'),
(101, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/18/2020 15: 40: 41:'),
(102, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/18/2020 15: 43: 36:'),
(103, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/18/2020 15: 44: 30:'),
(104, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/21/2020 10: 19: 22:'),
(105, 'Diasporana-468575239', 'Daniel Adasho has requested to buy a freshland C of O (Certificate of Occupancy)', 'December/21/2020 10: 26: 07:'),
(106, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 8Bed Room', 'December/29/2020 11: 45: 59:'),
(107, 'Diasporana-1081709041', ' upload profile picture recently', '2021-01-07 16:11:24'),
(108, 'Diasporana-1081709041', ' update profile recently', '2021-01-07 16:13:58'),
(109, 'Diasporana-1081709041', 'Daniel  Salamat has requested to buy property 2 Bedroom', 'January/07/2021 16: 16: 17:'),
(110, 'Diasporana-468575239', ' update profile recently', '2021-01-11 14:12:55'),
(111, 'Diasporana-1081709041', 'Diasporana update profile recently', '2021-01-11 14:18:23'),
(112, 'Diasporana-1081709041', 'Diasporana update profile recently', '2021-01-11 14:23:54'),
(113, 'Diasporana-1081709041', 'Diasporana update profile recently', '2021-01-11 14:28:54'),
(114, 'Diasporana-1081709041', 'Diasporana update profile recently', '2021-01-11 14:30:14'),
(115, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'January/11/2021 22: 58: 13:'),
(116, 'Diasporana-468575239', 'Daniel Adasho has requested to buy property 2 Bedroom', 'February/25/2021 13: 18: 19:'),
(117, 'Diasporana-1081709041', 'Diasporana Salamat has requested to buy property 2 Bedroom', 'February/25/2021 15: 49: 06:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diasporaplus`
--
ALTER TABLE `diasporaplus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freshland`
--
ALTER TABLE `freshland`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landrequest`
--
ALTER TABLE `landrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `propertyrequest`
--
ALTER TABLE `propertyrequest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soldproperties`
--
ALTER TABLE `soldproperties`
  ADD PRIMARY KEY (`propertyID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diasporaplus`
--
ALTER TABLE `diasporaplus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `freshland`
--
ALTER TABLE `freshland`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `landrequest`
--
ALTER TABLE `landrequest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `propertyrequest`
--
ALTER TABLE `propertyrequest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `soldproperties`
--
ALTER TABLE `soldproperties`
  MODIFY `propertyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
