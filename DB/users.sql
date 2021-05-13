-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:43 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `CIN` int(8) NOT NULL,
  `FullName` varchar(50) NOT NULL,
  `Age` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `isActive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`CIN`, `FullName`, `Age`, `Email`, `Password`, `isActive`) VALUES
(14, '456', 20, 'test@test.com', '1234mÃ¹KJgoff', 1),
(15, '456', 20, 'test@test.com', '1234mÃ¹KJgoff', 1),
(18, '454uiyiuyiyu', 20, 'test@test.com', '1234mÃ¹KJgoff', 0),
(19, '456', 20, 'test@test.com', '1234mÃ¹KJgoff', 1),
(20, '456', 30, 'test@test.com', '132mÃ¹Lkghgf', 0),
(23, 'uri', 45, 'open@gmail.com', '1326mÃ¹Ljlh', 1),
(24, 'open', 44, 'test@test.com', '1324mlkÃ¹JH', 0),
(25, 'fghgf', 44, 'min@gmail.com', '1234ml%jjkgK', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`CIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `CIN` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
