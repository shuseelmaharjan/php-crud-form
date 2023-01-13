-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 07:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `input`
--

CREATE TABLE `input` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `gender` enum('male','female','other','') NOT NULL,
  `phone` int(11) NOT NULL,
  `language` varchar(50) NOT NULL,
  `zip` int(11) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `input`
--

INSERT INTO `input` (`id`, `name`, `email`, `pwd`, `gender`, `phone`, `language`, `zip`, `about`) VALUES
(17, 'Aubrey Keith', 'zezobuxen@mailinator.com', 'Pa$$w0rd!', 'female', 74, 'english', 29258, 'At id animi consect'),
(18, 'Travis Hall', 'felupypu@mailinator.com', 'Pa$$w0rd!', 'other', 96, 'select language', 14121, 'Neque aspernatur sus'),
(19, 'Blythe Glover', 'visihow@mailinator.com', 'Pa$$w0rd!', 'other', 17, 'english', 58060, 'Quis qui et nobis in'),
(20, 'Colton Howard', 'fufatytam@mailinator.com', 'Pa$$w0rd!', 'male', 26, 'nepali', 52182, 'Quos velit sed debi'),
(21, 'September Mann', 'ravyk@mailinator.com', 'Pa$$w0rd!', 'female', 83, 'select language', 50957, 'Update changed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `input`
--
ALTER TABLE `input`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `input`
--
ALTER TABLE `input`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
