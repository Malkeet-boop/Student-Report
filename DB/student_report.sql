-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 04:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(255) NOT NULL COMMENT 'Student ID',
  `first_name` varchar(50) NOT NULL COMMENT 'First Name',
  `last_name` varchar(50) NOT NULL COMMENT 'Last Name',
  `class` varchar(10) NOT NULL COMMENT 'Batch/Class',
  `email` varchar(100) NOT NULL COMMENT 'Email',
  `English` decimal(30,2) NOT NULL,
  `Hindi` decimal(30,2) NOT NULL,
  `Maths` decimal(30,2) NOT NULL,
  `Science` decimal(30,2) NOT NULL,
  `History` decimal(30,2) NOT NULL,
  `Geography` decimal(30,2) NOT NULL,
  `eng_remarks` varchar(150) NOT NULL COMMENT 'Remarks',
  `hindi_remarks` varchar(150) NOT NULL,
  `maths_remarks` varchar(150) NOT NULL,
  `science_remarks` varchar(150) NOT NULL,
  `history_remarks` varchar(150) NOT NULL,
  `geo_remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT COMMENT 'Student ID';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
