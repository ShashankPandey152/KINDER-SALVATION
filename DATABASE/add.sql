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
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `question` text NOT NULL,
  `details` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add`
--

INSERT INTO `add` (`id`, `title`, `question`, `details`, `uid`) VALUES
(2, 'Sexual Abuse', 'Thin finger like marks were found on the forearms on a small child.', 'The child was deeply disturbed after the event.', 1),
(3, 'Cyber bullying', 'I was harrassed on tinder', 'I was right swiping all girls, no one ever accepted my request but suddenly someone right swiped me and then bullied me online.', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add`
--
ALTER TABLE `add`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
