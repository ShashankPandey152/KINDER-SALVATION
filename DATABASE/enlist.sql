-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-g.hosting.stackcp.net
-- Generation Time: Jan 28, 2018 at 04:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kindersalvation-32379e2b`
--

-- --------------------------------------------------------

--
-- Table structure for table `enlist`
--

CREATE TABLE `enlist` (
  `id` int(11) NOT NULL,
  `enlistor` text NOT NULL,
  `name` text NOT NULL,
  `age` text NOT NULL,
  `address` text NOT NULL,
  `picture` text NOT NULL,
  `sex` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enlist`
--

INSERT INTO `enlist` (`id`, `enlistor`, `name`, `age`, `address`, `picture`, `sex`) VALUES
(1, 'sdharchou@gmail.com', 'Shashank Pandey', '16', 'Street', 'pandey.jpg', 'M');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enlist`
--
ALTER TABLE `enlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enlist`
--
ALTER TABLE `enlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
