-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2021 at 05:20 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `message` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `emailadderess` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manufacture`
--

CREATE TABLE `manufacture` (
  `id` int(11) NOT NULL,
  `username` varchar(111) NOT NULL,
  `password` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacture`
--

INSERT INTO `manufacture` (`id`, `username`, `password`) VALUES
(1, 'manufacture', 'manufacture');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

CREATE TABLE `productdetails` (
  `id` int(11) NOT NULL,
  `P_name` varchar(225) NOT NULL,
  `P_code` int(11) NOT NULL,
  `M_code` varchar(225) NOT NULL,
  `R_code` int(11) NOT NULL,
  `P_id` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `P_name`, `P_code`, `M_code`, `R_code`, `P_id`) VALUES
(1, 'Fuse', 111, 'EE22', 101, '111EE22101'),
(2, 'Capacitor', 112, 'EE22', 101, '112EE22101'),
(3, 'Switch', 113, 'EE22', 101, '113EE22101'),
(4, 'Capacitor', 112, 'EE22', 102, '112EE22102'),
(5, 'Switch', 113, 'EE22', 102, '113EE22102'),
(6, 'Switch', 113, 'EE22', 102, '113EE22102');

-- --------------------------------------------------------

--
-- Table structure for table `tester`
--

CREATE TABLE `tester` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tester`
--

INSERT INTO `tester` (`id`, `username`, `password`) VALUES
(1, 'tester', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) NOT NULL,
  `T_type` int(11) NOT NULL,
  `P_id` varchar(225) NOT NULL,
  `T_rollnumber` int(11) NOT NULL,
  `T_id` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `T_type`, `P_id`, `T_rollnumber`, `T_id`, `status`) VALUES
(1, 1, '111EE22101', 701, '1111011701', 'Verified'),
(2, 1, '112EE22101', 702, '1121011702', 'Verified'),
(4, 1, '113EE22101', 703, '1131011703', 'Failed'),
(5, 1, '112EE22102', 704, '1121021704', 'Verified'),
(6, 1, '113EE22102', 705, '1131021705', 'Failed');

-- --------------------------------------------------------

--
-- Table structure for table `testingtype`
--

CREATE TABLE `testingtype` (
  `id` int(11) NOT NULL,
  `T_type` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testingtype`
--

INSERT INTO `testingtype` (`id`, `T_type`) VALUES
(1, 'Voltage Test'),
(2, 'Breaking Test'),
(3, 'Continuity Test'),
(4, 'Resistance Test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manufacture`
--
ALTER TABLE `manufacture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `productdetails`
--
ALTER TABLE `productdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tester`
--
ALTER TABLE `tester`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testing_ibfk_1` (`T_type`);

--
-- Indexes for table `testingtype`
--
ALTER TABLE `testingtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacture`
--
ALTER TABLE `manufacture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `productdetails`
--
ALTER TABLE `productdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tester`
--
ALTER TABLE `tester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testingtype`
--
ALTER TABLE `testingtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `testing`
--
ALTER TABLE `testing`
  ADD CONSTRAINT `testing_ibfk_1` FOREIGN KEY (`T_type`) REFERENCES `testingtype` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
