-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 08:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id_card`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(2, 'admin@gmail.com', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mat_no` varchar(15) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `dept` varchar(40) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `student` varchar(100) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `exp_date` varchar(20) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `idid` varchar(20) DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`id`, `name`, `mat_no`, `level`, `dept`, `dob`, `student`, `email`, `exp_date`, `phone`, `password`, `idid`, `image`) VALUES
(1, 'chioma chisom', '18/183145008', '100', 'forestry', '1999-11-02', 'Degree', 'leguriase98@gmail.com', '2026-11-02', '08083570746', NULL, 'UC/77547', 'assets/uploads/student1f.jpg'),
(2, 'Leonard Ovigue Eguriase', '18/183145009', '200', 'Computer Science', '2007-10-16', 'Degree', 'eguriasel98@yahoo.com', '2026-10-20', '08083570746', NULL, 'UC/48231', 'assets/uploads/student2m.jpg'),
(3, 'Chris Ballsy', '16/185145011TR', '400', 'Computer Science', '1999-02-09', 'Degree', 'ballsychris@gmail.com', '', '08106290851', NULL, 'UC/93017', 'assets/uploads/student8m.jpg'),
(4, 'somto samson', '18/183145010', '300', 'physics', '2000-06-03', 'Degree', 'samson98@gmail.com', NULL, '0801234567', NULL, 'UC/47116', 'assets/uploads/student5m.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
