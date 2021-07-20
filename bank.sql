-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2021 at 01:59 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Id` int(3) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Balance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Murphy', 'murf@gmail.com', 119700),
(2, 'Kushal', 'k@gmail.com', 147000),
(3, 'Himesh', 'h@gmail.com', 644000),
(4, 'Lavisha', 'l@gmail.com', 101000),
(5, 'Raj', 'r@gmail.com', 50900),
(6, 'Nush', 'n@gmail.com', 61300),
(7, 'Sapna', 's@gmail.com', 800000),
(8, 'Rachna', 'rs@gmail.com', 729750),
(9, 'Akku', 'ak@gmail.com', 47750),
(10, 'Stuti', 'st@gmail.com', 78550),
(11, 'Punit', 'p@gmail.com', 120000),
(12, 'Agrima', 'a@gmail.com', 420550),
(13, 'Mridula', 'm@gmail.com', 480500),
(14, 'Purvi', 'pr@gmail.com', 32000),
(15, 'Manas', 'ma@gmail.com', 400000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Id` int(3) NOT NULL,
  `Sender` varchar(80) NOT NULL,
  `Receiver` varchar(80) NOT NULL,
  `Amount` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Id`, `Sender`, `Receiver`, `Amount`) VALUES
(1, 'Murphy', 'Kushal', 30000),
(2, 'Himesh', 'Murphy', 100000),
(3, 'Himesh', 'Stuti', 91000),
(4, 'Nush', 'Akku', 5200),
(5, 'Sapna', 'Rachna', 70000),
(6, 'Rachna', 'Kushal', 120000),
(7, 'Raj', 'Nush', 6600),
(8, 'Kushal', 'Raj', 11000),
(9, 'Sapna', 'Himesh', 35000),
(10, 'Akku', 'Stuti', 77550),
(11, 'Rachna', 'Akku', 50000),
(12, 'Stuti', 'Agrima', 200000),
(13, 'Mridula', 'Stuti', 20000),
(14, 'Purvi', 'Agrima', 20000),
(15, 'Nush', 'Akku', 50),
(16, 'Rachna', 'Agrima', 500),
(17, 'Murphy', 'Rachna', 50),
(18, 'Murphy', 'Agrima', 50),
(19, 'Manas', 'Himesh', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `Id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
