-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2022 at 07:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `cards`
--
CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

INSERT INTO `admin` (`sno`, `email`, `password`) VALUES
(01, 'admin@gmail.com', 'lewandoski')


CREATE TABLE `cards` (
  `sno` int(11) NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`sno`, `name`, `level`, `mat_no`,  `dept`, `email`, `phone`, `student`, `dob`,  `exp_date`, `password`, `idid`,  `image`) VALUES
(01, 'John Doe', 400, '18/183145001','Computer Science', 'john@gmail.com', '08051022573', 'Degree', '2000-12-12', '2023-11-01 09:49:30', '2026-11-01', '', '','assets/uploads/student2m.jpg'),
(02, 'Ezekiel Emmanuel', 300, '18/183145002', 'Computer Science', 'ezekiel@gmail.com', '08083570746', 'Degree', '1995-10-09', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student3m.jpg'),
(03, 'Cytnthia Johnson', 200, '18/183145003', 'Computer Science', 'cynthia@gmail.com', '08123456789', 'Degree', '1996-11-01', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student1f.jpg'),
(04, 'Emmanuel Edet', 100, '18/183145004', 'Computer Science', 'emmanuel@gmail.com', '09087654321', 'Degree', '1999-01-12', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student5m.jpg'),
(05, 'Paul Bisong', 400, '18/183145005', 'Computer Science', 'paul@gmail.com', '08923456778', 'Degree','1997-08-09', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student7m.jpg'),
(06, 'Charles Effiong', 300, '18/183145006', 'Computer Science', 'charles@gmail.com', '07054387667', 'Degree', '1998-03-20', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student8m.jpg'),
(07, 'Martha Audu', 200, '18/183145007', 'Computer Science', 'martha@gmail.com', '08012367889', 'Degree', '1999-07-25', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student4f.jpg'),
(08, 'Veronica Thompson', 400, '18/183145008', 'Computer Science', 'veronica@gmail.com', '09045678322', 'Degree', '1995-05-19', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student6f.jpg'),
(09, 'Delight Archibong', 100, '18/183145009', 'Computer Science', 'delight@gmail.com', '0804456739', 'Degree', '2000-11-24', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student9f.jpg'),
(010, 'Salama Peace', 300, '18/183145010', 'Computer Science', 'salama@gmail.com', '0812567789', 'Degree', '1996-06-26', '2023-11-01 09:49:30', '2026-11-01', 'assets/uploads/student10f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=724;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
