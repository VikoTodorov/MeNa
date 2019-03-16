-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2019 at 10:08 PM
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
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `idReceipts` int(11) NOT NULL,
  `receiptContent` text COLLATE utf8_unicode_ci NOT NULL,
  `patientID` int(11) NOT NULL,
  `doctorID` int(11) NOT NULL,
  `dateValidation` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`idReceipts`, `receiptContent`, `patientID`, `doctorID`, `dateValidation`) VALUES
(5, '<p>Receipt:dsdasdas</p>', 2, 3, '0000-00-00'),
(6, '<p>Receipt:dsadadas</p>', 2, 3, '2019-03-20'),
(7, '<p>Receipt:dsadasd</p>', 2, 3, '2019-03-22'),
(8, '<p>Receipt:dasdsadas</p>', 2, 3, '2019-03-25'),
(9, '<p>Receipt:bla bkla pij si analgina i si pij</p>\r\n<p>otrovata za miski</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">adsasdf<strong>adadasda<em>dasdasdas</em></strong><em>adsasdasd</em>sdaa</p>', 8, 5, '2019-02-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`idReceipts`),
  ADD KEY `patientID` (`patientID`),
  ADD KEY `doctorID` (`doctorID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `idReceipts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `receipts`
--
ALTER TABLE `receipts`
  ADD CONSTRAINT `receipts_ibfk_1` FOREIGN KEY (`patientID`) REFERENCES `patients` (`idPatients`),
  ADD CONSTRAINT `receipts_ibfk_2` FOREIGN KEY (`doctorID`) REFERENCES `doctors` (`idDoctors`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
