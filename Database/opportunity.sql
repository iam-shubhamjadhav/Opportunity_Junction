-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3310
-- Generation Time: Feb 18, 2024 at 10:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `opportunity`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE `anouncement` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `desc` varchar(5000) NOT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `anouncement`
--

INSERT INTO `anouncement` (`id`, `date`, `desc`, `link`) VALUES
(1, '2024-02-01', 'Intership shall Start form the next Month', NULL),
(10, '2024-02-13', 'Microsoft hiring ', 'https://jobs.careers.microsoft.com/global/en/job/1681514/Software-Engineer'),
(19, '2024-02-18', 'Opening :Software Engineer \r\nMicrosoft\r\nlink:https://jobs.careers.microsoft.com/global/en/job/1681514/Software-Engineer', NULL),
(22, '2024-02-18', 'New Hirring Student', 'https://jobs.careers.microsoft.com/global/en/job/1681514/Software-Engineer');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('divyallone@gmail.com', '009c522241026cef7025b959ad291266803d3de070', '2022-01-10 15:00:40'),
('shubhamjadhav7781@gmail.com', 'b603515db668319ad4882542eccf7facb6ba44c7e7', '2022-01-11 21:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `filename`, `date_uploaded`) VALUES
(1, 'NAME.pdf', '2024-02-18 09:48:38');

-- --------------------------------------------------------

--
-- Table structure for table `stureg`
--

CREATE TABLE `stureg` (
  `rollno` int(20) NOT NULL,
  `stuname` text NOT NULL,
  `fname` text NOT NULL,
  `dob` date NOT NULL,
  `contno` bigint(40) NOT NULL,
  `email` varchar(20) NOT NULL,
  `strm` text NOT NULL,
  `course` text NOT NULL,
  `score` float NOT NULL,
  `ten` float NOT NULL,
  `twelve` float NOT NULL,
  `backlog` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stureg`
--

INSERT INTO `stureg` (`rollno`, `stuname`, `fname`, `dob`, `contno`, `email`, `strm`, `course`, `score`, `ten`, `twelve`, `backlog`) VALUES
(43, 'rohit', 'sanjay', '2000-04-06', 6570894539, 'rohit@gmail.com', 'Business Administration', 'BBA', 8, 88, 79, 'No'),
(18, 'divyal', 'manoher', '2021-12-06', 8275075076, 'divyal@gmail.com', 'Science', 'BCA', 8, 90, 78, 'No'),
(32, 'Lalit', 'Lahe', '2022-01-10', 7653429234, 'lalit@gmail.com', 'Science', 'B.Sc.', 7.9, 90, 76, 'No'),
(11, 'Shubam', 'jadhav', '2014-02-20', 9787493374, 'shubham@gmail.com', 'Commerce', 'BCA', 7.9, 70, 76, 'NO'),
(111, 'Omkar', 'Jadhav', '2002-12-16', 9854782434, 'omkar@gmail.com', 'Comp Science', 'BCA', 7, 78, 69, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`email`, `password`) VALUES
('rohit@gmail.com', 'rohit10'),
('nachiket@gmail.com', 'nachiket30'),
('divyal@gmail.com', 'divyal20'),
('lalit@gmail.com', 'lalit'),
('amay@gmail.com', 'amay'),
('divyallone@gmail.com', 'divyal'),
('lalit@gmail.com', 'lalit10'),
('shubhamjadhav7781@gm', 'shubham12'),
('omkar@gmail.com', 'omkar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
