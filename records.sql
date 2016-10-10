-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2016 at 08:25 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `records`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `title` varchar(50) NOT NULL,
  `artist` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `year` varchar(4) NOT NULL,
  `company` varchar(50) NOT NULL,
  `producer` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`title`, `artist`, `genre`, `year`, `company`, `producer`) VALUES
('Benis', 'Rane ja kollit', 'humppa', '1999', 'Ei ollut kaljaa Oy', 'Veli Bro'),
('Ei ollu', 'Kaljamiehet', 'grindcore', '2005', 'Dat Beer Oy', 'No hoe'),
('Oispa kaljaa', 'Matti Nykänen', 'hyppylaulut', '1998', 'Kaljaa AB', 'Mervi Tapola'),
('Tanssilaulu', 'Matti&Teppo', 'iskelmä', '1985', 'Oh bro AB', 'That Bro');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(2) NOT NULL,
  `fname` varchar(15) COLLATE utf8_bin NOT NULL,
  `lname` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `fname`, `lname`) VALUES
(1, 'Pekka', 'Pampula'),
(2, 'Jorma', 'Joutomies'),
(3, 'Tahvo', 'Tampio'),
(4, 'Ismo', 'Intoilija'),
(5, 'Tomppa', 'Tampio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`title`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
