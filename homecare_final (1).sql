-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2019 at 03:34 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homecare1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email1`, `pass`) VALUES
(1, 'shubh@gmail.com', 'shubh');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(10) NOT NULL,
  `specs` varchar(255) NOT NULL,
  `doctorid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `fees` int(10) NOT NULL,
  `date1` date NOT NULL,
  `time1` varchar(255) NOT NULL,
  `userstatus` tinyint(1) NOT NULL,
  `doctorstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `specs`, `doctorid`, `userid`, `fees`, `date1`, `time1`, `userstatus`, `doctorstatus`) VALUES
(1, 'Homeopath', 2, 1, 250, '2019-11-09', '12:30', 1, 1),
(2, 'Dentist', 1, 1, 500, '2019-11-13', '12:15', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) NOT NULL,
  `specilization` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fees` varchar(255) NOT NULL,
  `contactno` double NOT NULL,
  `email1` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `name1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `specilization`, `address`, `fees`, `contactno`, `email1`, `pass`, `name1`) VALUES
(1, 'Dentist', 'New Delhi', '500', 8285703354, 'anuj123@gmail.com', 'anuj', 'Anuj'),
(2, 'Homeopath', 'Lpu', '250', 9543894016, 'rahulji@gmail.com', 'rahul', 'Rahul Gupta'),
(3, 'Dentist', 'ap', '350', 99999999999, 'sai@gmail.com', 'sai', 'sai');

-- --------------------------------------------------------

--
-- Table structure for table `faccat`
--

CREATE TABLE `faccat` (
  `id` int(10) NOT NULL,
  `facility` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faccat`
--

INSERT INTO `faccat` (`id`, `facility`) VALUES
(1, 'Plumber'),
(2, 'Painter');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(10) NOT NULL,
  `name1` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `rate` int(10) NOT NULL,
  `phone` double NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name1`, `cat`, `email`, `pass`, `rate`, `phone`, `address`) VALUES
(1, 'Adarsh Kumar', 'Plumber', 'adarsh@gmail.com', 'adar', 300, 9543894016, 'Lpu'),
(2, 'Rahul Patel', 'Painter', 'rahul@gmail.com', 'rahul', 400, 7894561235, 'lpu'),
(3, 'sai', 'Painter', 'sai1@gmail.com', 'sai1', 350, 2222222222, 'lpu');

-- --------------------------------------------------------

--
-- Table structure for table `fac_appoint`
--

CREATE TABLE `fac_appoint` (
  `id` int(10) NOT NULL,
  `facility` varchar(255) NOT NULL,
  `facid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `fees` int(10) NOT NULL,
  `date1` date NOT NULL,
  `time1` varchar(255) NOT NULL,
  `userstatus` tinyint(1) NOT NULL,
  `facstatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fac_appoint`
--

INSERT INTO `fac_appoint` (`id`, `facility`, `facid`, `userid`, `fees`, `date1`, `time1`, `userstatus`, `facstatus`) VALUES
(1, 'Plumber', 1, 1, 300, '2019-11-14', '09:00', 1, 1),
(2, 'Painter', 2, 1, 400, '2019-11-20', '12:00', 0, 1),
(3, 'Plumber', 1, 1, 300, '2019-11-09', '15:25', 1, 1),
(4, 'Plumber', 1, 1, 300, '2019-11-09', '15:25', 1, 1),
(5, 'Painter', 2, 1, 400, '2019-11-15', '12:15', 1, 1),
(6, 'Painter', 2, 1, 400, '2019-11-22', '23:55', 1, 1),
(7, 'Plumber', 1, 2, 300, '2019-11-16', '15:35', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` int(10) NOT NULL,
  `specilization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `specs`
--

INSERT INTO `specs` (`id`, `specilization`) VALUES
(1, 'Dentist'),
(2, 'Homeopath');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `address`, `fullname`, `city`, `gender`) VALUES
(1, 's@gmail.com', 'abcd', 'lpu', 'shubham', 'jalandhar', 'male'),
(2, 'neha@gmail.com', 'neha', 'lpu', 'neha', 'jalandhar', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faccat`
--
ALTER TABLE `faccat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fac_appoint`
--
ALTER TABLE `fac_appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faccat`
--
ALTER TABLE `faccat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fac_appoint`
--
ALTER TABLE `fac_appoint`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
