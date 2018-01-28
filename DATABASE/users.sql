-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: shareddb-g.hosting.stackcp.net
-- Generation Time: Jan 28, 2018 at 04:42 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `expertise` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `mobile`, `address`, `type`, `status`, `expertise`) VALUES
(1, 'Shawshank Redemption', 'pandeyshashank152@gmail.com', '767b216448174d66d15efeacd709f87f7aeb296972343f65b36f1bee2911e8b0fbb404cbaa7480eb7e6fc5784990a8a647661edcba0429ce8886009a89b67567', '8299805309', 'Potheri, Chennai, Tamil Nadu', 2, 1, 'REHABILITATION COUNSELORS'),
(8, 'Siddhartha Dhar Choudhury', 'sdharchou@gmail.com', 'b109f3bbbc244eb82441917ed06d618b9008dd09b3befd1b5e07394c706a8bb980b1d7785e5976ec049b46df5f1326af5a2ea6d103fd07c95385ffab0cacbc86', '8428253312', 'SRM Institute of Science and Technology, SRM Nagar, Kattankulathur, Chennai, Tamil Nadu', 2, 1, 'SCHOOL COUNSELORS'),
(9, 'Dhairya Jain', 'djdhairya.dj@gmail.com', '00bada865848ff208f53f6dd3598c5796e88d9aedda955ce2f8e4cc0ec32f1578b4a5603efd8b79b51e1ad9afc004f52f41939028231be204fedc922df98ac71', '9950538992', 'Chennai', 2, 0, 'MENTAL HEALTH COUNSELORS'),
(10, 'Shaique Solanki', 'shaique_solanki13@gmail.com', '6cb52b86f3a58e82aa9a79ef12267e422e20513693783265ff080445f73e6b2c2c04f402ba025240a4437270dee64347af73a264e6b8708509dad69296421cd0', '9984576215', 'Pune', 2, 0, ''),
(11, 'Shruti Mehta', 'shrumehta@gmail.com', '6cb52b86f3a58e82aa9a79ef12267e422e20513693783265ff080445f73e6b2c2c04f402ba025240a4437270dee64347af73a264e6b8708509dad69296421cd0', '9652145879', 'Tarapur, Maharashtra', 2, 0, ''),
(12, 'Sandeep Singh', 'kakke.singh@gmail.com', '6cb52b86f3a58e82aa9a79ef12267e422e20513693783265ff080445f73e6b2c2c04f402ba025240a4437270dee64347af73a264e6b8708509dad69296421cd0', '7458625981', 'Raipur, Chhattisgarh', 2, 0, ''),
(13, 'shashankKiGf', 'shashank@gmail.com', 'f429ebd276ba59ed693aa4f271b7406c9c0850f42817a76463628cbd38435f9c6e41c73e24218fee98e9826c4a807c6cf96a5fb1a1c8b9542ec2847ee5c8afb8', '9876543210', 'potheri', 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
