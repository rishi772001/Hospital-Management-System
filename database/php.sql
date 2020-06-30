-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:33
-- Generation Time: Jun 30, 2020 at 02:44 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` text NOT NULL,
  `username` varchar(100) NOT NULL,
  `doctorname` text NOT NULL,
  `disease` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `date`, `time`, `username`, `doctorname`, `disease`) VALUES
(1, '2019-04-24', '11-1', 'rishi', 'rishi', 'mild'),
(2, '2019-04-26', '6-8', 'rishi', 'rishi', 'emergency'),
(3, '2019-04-26', '8-10', 'rishikumar', 'vikkram', 'serious'),
(4, '2019-05-11', '6-8', 'rishikumar', 'vikkram', 'emergency'),
(5, '2019-05-11', '9-11', 'susa', 'rishi', 'serious'),
(6, '2019-08-24', '6-8', 'sridevi', 'sridevi', 'serious'),
(7, '2019-11-21', '8-10', 'neetesh', 'rishi', 'emergency'),
(8, '2020-06-30', '9-11', 'rishi', 'rishi', 'mild');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `mail` text NOT NULL,
  `docid` int(11) NOT NULL,
  `address` text NOT NULL,
  `phno` varchar(15) NOT NULL,
  `qualification` text NOT NULL,
  `department` text NOT NULL,
  `uname` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`name`, `dob`, `mail`, `docid`, `address`, `phno`, `qualification`, `department`, `uname`, `pass`) VALUES
('rishi', '2019-04-02', 'rishi@gmail.com', 1, 'v nagar', '2147483647', 'mbbs', 'neurology', 'rishi', 'rishi'),
('rishi kumar', '2019-04-10', 'rishikumar@gmail.com', 0, 'mambalam', '2147483647', 'mbbs', 'heart', 'rishikumar', 'rishikumar'),
('vikkram', '2019-04-05', 'vikkram@gmail.com', 7, 'mambalam', '2147483647', 'mbbs', 'ortho', 'vikkram', 'vikkram'),
('susa', '2019-05-10', 'susa@gmail.com', 3, 'd nagar', '9847562585', 'mbbs', 'medical', 'susa', 'susa'),
('sridevi', '2019-08-16', 'sridevi@gmail.com', 14, 'chennai', '9962628272', 'mbbs', 'mind', 'sridevi', 'sridevi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `feedback`) VALUES
('rishi', 'good'),
('jaishree', 'awesome');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `mail` text NOT NULL,
  `uname` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`name`, `dob`, `mail`, `uname`, `password`) VALUES
('rishi', '2019-04-03', 'rishi@gmail.com', 'rishi', 'rishi'),
('rishi kumar', '2019-04-17', 'rishikumar@gmail.com', 'rishikumar', 'rishikumar'),
('susa', '2019-05-22', 'susa@gmail.com', 'susa', 'susa'),
('sridevi', '2019-08-15', 'sridevi@gmail.com', 'sridevi', 'sridevi'),
('Neetesh', '2019-11-18', 'neetesh@gmail.com', 'neetesh', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE `prescription` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `filename` varchar(1000) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prescription`
--
ALTER TABLE `prescription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `prescription`
--
ALTER TABLE `prescription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
