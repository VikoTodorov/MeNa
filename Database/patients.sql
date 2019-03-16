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
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `idPatients` int(11) NOT NULL,
  `pid` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `emailPatients` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `passPatients` longtext COLLATE utf8_unicode_ci NOT NULL,
  `namePatients` tinytext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`idPatients`, `pid`, `emailPatients`, `passPatients`, `namePatients`) VALUES
(1, '21', 'veselin.angelov02@gmail.com', '$2y$10$KdNL6tl7WBhV6XbhFnvwh.XvyvGps7i8g2nNbxDhjA3FSwbeiIkLu', 'vesko'),
(2, '0249146268', 'veskbg@gmail.com', '$2y$10$SMMBZ743TFTqKTGpfMUsuOSw7rbW3Y9d.wOCWpxdUa0x2JDIZx2Vu', 'Fas'),
(3, '0251296441', 'alex.uzunov2002@gmail.com', '$2y$10$cNXUXJyYNf4waoQ96WCwhurRUBtGJjtphvw/8v3hxt9bxhOzzElV2', 'sashko'),
(4, '0251186523', 'gabo@gmail.com', '$2y$10$hV6XWIDpbLO0IIhNKddg9.C1vEAEPXKYhn1ilHtybX3hSmj.3Vkly', 'Gabo Gabov'),
(5, '0214318855', 'viko@gmail.com', '$2y$10$ojwqwT0E2wPuNng3d7082edTVPEK.xP7OifWKJ9khyyhWTMxgXefC', 'viko'),
(6, '0233556484', 'gosho@gmail.com', '$2y$10$84/WaptXrGnXhV6vguLhC.qfEpp7n8Xg/kovAqbu7JoR.0TYRr4uW', 'Gosho Malkiq'),
(8, '0123456789', 'hjkl@abv.en', '$2y$10$RpBTgxOM7j0MpcwL.3IPPO.IoMBrDrC5igdj5BLB6OJuOpaiHmvs6', 'Viko'),
(9, '0123456788', 'hkhj@abv.en', '$2y$10$yO.7PoRtn816vIF43wMg9uTXgB2G1U1jXFR.3s/1eaeiNO2FsJopy', 'Viko'),
(10, '0251104488', 'donev.konstantin@gmail.com', '$2y$10$nOq8y47TVEekgZPLOp3CUO.0I.lY/TKMSUm2gJLPiFdTBpBHRC37C', 'Kotse master');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`idPatients`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `idPatients` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
