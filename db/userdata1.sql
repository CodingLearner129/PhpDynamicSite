-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2021 at 06:57 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `userinfodata`
--

CREATE TABLE `userinfodata` (
  `id` int(255) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `comment` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfodata`
--

INSERT INTO `userinfodata` (`id`, `name`, `email`, `mobile`, `comment`) VALUES
(1, 'Dummy', 'dummy@dummy.com', '9897969594', 'Comment of Dummy                                                                                                                                                                                                                        '),
(2, 'Dummybhai', 'dummybhai@dummy.com', '9888786858', 'Comment of Dummybhai'),
(3, 'Dummyben', 'dummyben@dummy.com', '8979695949', 'Comment of Dummyben'),
(4, 'Dummybhau', 'dummybhau@dummy.com', '7623894518', 'Comment of Dummybhau');

-- --------------------------------------------------------

--
-- Table structure for table `usersign`
--

CREATE TABLE `usersign` (
  `id` int(255) NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `mobile` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_nopad_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersign`
--

INSERT INTO `usersign` (`id`, `username`, `email`, `mobile`, `password`) VALUES
(1, 'Dummy', 'dummy123@dummy.com', '9897969594', 'Dummy@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userinfodata`
--
ALTER TABLE `userinfodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersign`
--
ALTER TABLE `usersign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userinfodata`
--
ALTER TABLE `userinfodata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersign`
--
ALTER TABLE `usersign`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
