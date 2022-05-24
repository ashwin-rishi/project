-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2022 at 05:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `donatingusers`
--

CREATE TABLE `donatingusers` (
  `id` int(11) NOT NULL,
  `donarName` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `contactNumber` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `termsCondition` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registeredusers`
--

CREATE TABLE `registeredusers` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `secondName` varchar(100) NOT NULL,
  `parentName` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postalCode` varchar(100) NOT NULL,
  `termsCondition` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registeredusers`
--

INSERT INTO `registeredusers` (`id`, `firstName`, `secondName`, `parentName`, `age`, `reason`, `phoneNumber`, `address`, `postalCode`, `termsCondition`) VALUES
(1, 'Kermit', 'Hewitt', 'Donovan Morales', 'Est voluptas aliquid', 'Qui sit culpa in re', '+1 (186) 554-3559', 'Reiciendis fugiat h', 'Velit omnis molestia', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donatingusers`
--
ALTER TABLE `donatingusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeredusers`
--
ALTER TABLE `registeredusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donatingusers`
--
ALTER TABLE `donatingusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeredusers`
--
ALTER TABLE `registeredusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
