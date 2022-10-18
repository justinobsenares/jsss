-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 07:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `datetbl`
--

CREATE TABLE `datetbl` (
  `recid` int(25) NOT NULL,
  `date` date NOT NULL,
  `month` int(25) NOT NULL,
  `year` year(4) NOT NULL,
  `datetype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datetbl`
--

INSERT INTO `datetbl` (`recid`, `date`, `month`, `year`, `datetype`) VALUES
(1, '0000-00-00', 1, 2021, 'F');

-- --------------------------------------------------------

--
-- Table structure for table `employeefile`
--

CREATE TABLE `employeefile` (
  `recid` bigint(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `civilstat` varchar(100) NOT NULL,
  `contactnum` varchar(100) NOT NULL,
  `salary` decimal(65,0) NOT NULL,
  `isactive` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeefile`
--

INSERT INTO `employeefile` (`recid`, `fullname`, `address`, `birthdate`, `age`, `gender`, `civilstat`, `contactnum`, `salary`, `isactive`) VALUES
(3, 'Justin Obsenaress', 'Caloocan', '2022-10-12', 21, 'Male', 'Married', '09310719773', '5232', 'Active'),
(4, 'Ogie Sanchez', 'Mindanao', '2022-10-13', 25, 'Male', 'Married', '0914185768762', '6132', 'Inactive'),
(5, 'Nico Cahalne', 'Malabon', '2022-10-04', 31, 'Female', 'Widowed', '091111111111', '1125', 'Active'),
(6, 'Kim Traya', 'Valenzuela', '2022-10-19', 20, 'Male', 'Separated', '095726847234', '8723', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datetbl`
--
ALTER TABLE `datetbl`
  ADD PRIMARY KEY (`recid`);

--
-- Indexes for table `employeefile`
--
ALTER TABLE `employeefile`
  ADD UNIQUE KEY `recid` (`recid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datetbl`
--
ALTER TABLE `datetbl`
  MODIFY `recid` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employeefile`
--
ALTER TABLE `employeefile`
  MODIFY `recid` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
