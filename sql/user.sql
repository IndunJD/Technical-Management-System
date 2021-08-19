-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2021 at 03:26 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `fname`, `lname`, `contact`, `email`, `code`) VALUES
(1, 'admin ', '', '', 'admin@webdamn.com', 'admin'),
(2, 'janani ', 'dissanayake', '0712345678', 'abc@gmail.com', '123'),
(3, 'enuki ', 'yunaya', '0771234567', '123@gmail.com', 'abc'),
(4, 'senuli ', 'apsara', '0781234567', 'sen@gmail.com', 'asd'),
(5, 'john ', 'doe', '0731234567', 'jh@gmail.com', '1234'),
(6, 'user ', 'oficial', '0111234567', 'official@gmail.com', 'admin'),
(7, 'user ', 'oficial', '0111234567', 'official@gmail.com', 'admin'),
(8, 'user2 ', 'official2', '0121234567', 'off2@gmail.com', 'asdf'),
(9, 'Induni ', 'Dulanjalee', '0231234567', 'induni@gmail.com', 'induni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
