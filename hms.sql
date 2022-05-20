-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2021 at 07:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hms`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `adminno` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `adminno`, `name`, `phone`, `address`, `email`, `password`) VALUES
(1, 'a01', 'saad', 12345, 'h#1 st#1', 'saad@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bloodbank`
--

CREATE TABLE `bloodbank` (
  `id` int(11) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbank`
--

INSERT INTO `bloodbank` (`id`, `bloodgroup`, `quantity`) VALUES
(1, 'B+', 2),
(2, 'A -ive', 3),
(3, 'a+', 1),
(4, 'b-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `dataentryoperator`
--

CREATE TABLE `dataentryoperator` (
  `id` int(11) NOT NULL,
  `operatorid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `hintanswer` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataentryoperator`
--

INSERT INTO `dataentryoperator` (`id`, `operatorid`, `name`, `email`, `phone`, `address`, `hintanswer`, `password`) VALUES
(1, 'o01', 'operator', 'operator@gmail.com', 2222, 'h#2 St#2', 'operator', '1111'),
(2, 'o02', 'operator2', 'operator2@gmail.com', 3333333, 'h#13 St#23', 'operator2', '321123'),
(3, 'o03', 'operator3', 'operator3@gmail.com', 0, 'h#03 St#23', 'operator3', 'operator3'),
(10, 'o04', 'operator4', 'operator4@hotmail.com', 2222, 'h#1 St#23', 'operator', '3333');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `doctorid` varchar(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `hintanswer` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `doctorid`, `name`, `phone`, `address`, `email`, `department`, `hintanswer`, `password`) VALUES
(1, 'd01', 'doctor1', 1111, 'h#1 St#2', 'doctor@gmail.com', 'cardiology', 'doctor', '1111'),
(2, 'd02', 'doctor2', 43216654, 'h#23 St#24', 'doctor2@hotmail.com', 'laboratery', 'doctor2', '55555'),
(3, 'd03', 'doctor3', 3333322, 'h#3 St#9', 'doctor3@hotmail.com', 'cardiology', 'doctor3', 'doctor3');

-- --------------------------------------------------------

--
-- Table structure for table `doners`
--

CREATE TABLE `doners` (
  `id` int(11) NOT NULL,
  `donerid` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doners`
--

INSERT INTO `doners` (`id`, `donerid`, `name`, `phone`, `bloodgroup`, `date`) VALUES
(1, 'd01', 'doner1', 3342, 'A -ive', '2021-02-05'),
(3, 'd02', 'doner2', 987766, 'b+', '2021-02-05'),
(4, 'd03', 'doner3', 3333, 'a+', '2021-02-06'),
(5, 'd04', 'doner4', 44444, 'b-', '2021-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `paitent`
--

CREATE TABLE `paitent` (
  `id` int(11) NOT NULL,
  `paitentno` varchar(11) NOT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `paitenttype` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hintanswer` varchar(50) NOT NULL,
  `dignosdetails` varchar(500) NOT NULL,
  `fee` int(11) NOT NULL,
  `testadvise` varchar(50) NOT NULL,
  `testresult` varchar(100) NOT NULL,
  `medicines` varchar(100) NOT NULL,
  `dietadvice` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paitent`
--

INSERT INTO `paitent` (`id`, `paitentno`, `date`, `name`, `paitenttype`, `phone`, `address`, `email`, `password`, `hintanswer`, `dignosdetails`, `fee`, `testadvise`, `testresult`, `medicines`, `dietadvice`) VALUES
(1, 'p01', NULL, 'paitent1', '', 123456, 'h#13 st#14', 'paitent@gmail.com', '1212', 'paitent', 'okok', 0, 'no test', '', '', ''),
(2, 'p02', NULL, 'paitent2', '200', 11111111, 'h#2 St#2', 'paitent2@hotmail.com', '321', 'paitent', 'abc,\r\nxyz', 200, 'x-ray, blood', 'Ok\r\nOk\r\n', 'a,\r\nb,\r\nc', 'no need'),
(4, 'p03', '2021-02-05', 'paitent003', '', 123999, 'h#23 St#23', 'paitent3@hotmail.com', 'paitent', 'same', '', 0, '', '', '', ''),
(5, 'p04', '2021-02-06', 'paitent4', '', 54545454, 'h#13 st#144', 'paitent4@hotmail.com', 'pppp', 'pppp', 'trewnv', 0, '', 'vdvdfvds', 'f,d,s.v', 'dddddd'),
(6, 'p05', '2021-02-13', 'paitent5', '', 55555, 'h#24 St#25', 'paitent5@hotmail.com', '54321', '12345', '', 0, '', '', '', ''),
(7, 'p06', '2021-02-16', 'paitent6', '', 66666, 'h#13 st#146', 'paitent6@gmail.com', '111111', 'paitent6', '', 0, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bloodbank`
--
ALTER TABLE `bloodbank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dataentryoperator`
--
ALTER TABLE `dataentryoperator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doners`
--
ALTER TABLE `doners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paitent`
--
ALTER TABLE `paitent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bloodbank`
--
ALTER TABLE `bloodbank`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dataentryoperator`
--
ALTER TABLE `dataentryoperator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `doners`
--
ALTER TABLE `doners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paitent`
--
ALTER TABLE `paitent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
