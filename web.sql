-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2018 at 08:22 PM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 5.6.36-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `empid` int(11) NOT NULL,
  `empname` varchar(255) NOT NULL,
  `emailid` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `dob` date NOT NULL,
  `is_deleted` enum('0','1') NOT NULL,
  `createddate` datetime NOT NULL,
  `updateddate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`empid`, `empname`, `emailid`, `phone`, `dob`, `is_deleted`, `createddate`, `updateddate`) VALUES
(1, 'testsybrant', 'test@gmail.com', 8888888888, '2018-10-04', '0', '2018-10-04 18:17:34', '2018-10-04 18:17:34'),
(2, 'testsybrant', 'dsfsdfsd@gmail.com', 324324324234, '2018-10-04', '0', '2018-10-04 15:41:13', '2018-10-04 18:14:00'),
(3, 'sample', 'sampdffgle@gmail.com', 8888888888, '2018-10-17', '1', '2018-10-04 18:16:59', '2018-10-04 18:17:41'),
(4, 'red', 'test@gmail.com', 777777777, '2018-10-01', '0', '2018-10-04 18:18:00', '2018-10-04 18:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`empid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `empid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
