-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 10:07 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menadb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `idDoctors` int(11) NOT NULL,
  `emailDoctors` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `nameDoctors` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `passDoctors` longtext COLLATE utf8_unicode_ci NOT NULL,
  `phone` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`idDoctors`, `emailDoctors`, `nameDoctors`, `passDoctors`, `phone`, `isActive`) VALUES
(2, 'trg@gmail.com', 'gosho', '$2y$10$DXVPf/w8wr7X/wp8iRaOt.Gw9oxPhmx8/UU8SYSv9YCjiKsOUu5xK', '0889564895', 0),
(3, 'foc@gmail.com', 'foctor', '$2y$10$.Uk2npoCxV9C5LUiX4IqJuTnY0e1c60.M6Y.lU9Iv6owfTwcxqPa.', '0888596365', 1),
(4, 'goshov@gmai.com', 'gosho goshov', '$2y$10$yPLBvIRU3NFas/YpGT0sTeGeplOXLilb9uZ3f6dgnG/3bfMQ.fR4G', '+359883333424', 0),
(5, 'jhkj@gmail.com', 'Viko', '$2y$10$apo8.sYUp7S5F30QW7OjCesNozfXwa4yHEe0K9Sav7WsllRl9Z8am', '088888888888888', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`idDoctors`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `idDoctors` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
