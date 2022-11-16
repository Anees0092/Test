-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:01 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees_info`
--

CREATE TABLE `employees_info` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `joining_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees_info`
--

INSERT INTO `employees_info` (`id`, `first_name`, `last_name`, `Name`, `designation`, `email`, `address`, `joining_date`) VALUES
(1, 'Anees', 'Khan', 'Anees Khan21', 'Developer software', 'ak0011@hotmail.com', 'Rwp', '09/22/22'),
(2, 'Anees11', 'Raj', 'AneesRaj11', 'Developer', 'ak0011@hotmail.com', 'Pak', '09/22/22'),
(3, 'Ahmed', 'Khan', 'Muhammad Ahmed Raja', 'CLERK', 'a@gmail.com', 'Pak', '01/09/22'),
(4, 'Yusaf', 'Khan', 'Yousaf Khan', 'Software Developer', 'yousaf@gmail.com', 'Rwp', '01/11/2023'),
(5, 'Anwar', 'Raj', 'AnwarRaj', 'Developer', 'admin1@gmail.com', 'Rwp', '01/09/22'),
(6, 'Bilal', 'Khan', 'Bilal', 'Developer', 'bilal@gmail.com', 'Rwp', '01/11/2023'),
(7, 'Anees', 'Khan', 'Anees Khan', 'Developer software', 'ak0011@hotmail.com', 'Rawalpindi', '09/09/22'),
(8, 'Anees', 'Khan', 'Anees Khan1112', 'Developer', 'admin@gmail.com', 'Rawalpindi', '09/22/22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees_info`
--
ALTER TABLE `employees_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees_info`
--
ALTER TABLE `employees_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
