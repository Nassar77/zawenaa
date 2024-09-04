-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2024 at 12:10 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zwena`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv.(company)`
--

CREATE TABLE `cv.(company)` (
  `User Name` varchar(255) NOT NULL,
  `Email Address` varchar(255) NOT NULL,
  `Password` char(8) NOT NULL,
  `Confirm Password` char(8) NOT NULL,
  ` Company Name` varchar(255) NOT NULL,
  `Business Tybe` varchar(255) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `CR Number` bigint(20) UNSIGNED NOT NULL,
  `Other Information` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cv.(employee)`
--

CREATE TABLE `cv.(employee)` (
  `User Name` varchar(255) NOT NULL,
  `date of birth` date NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` char(15) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `id` char(14) NOT NULL,
  `Services card` char(16) NOT NULL,
  `Disability` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Training` varchar(255) DEFAULT NULL,
  `courses` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cv.(employee)`
--

INSERT INTO `cv.(employee)` (`User Name`, `date of birth`, `Email`, `Phone`, `Address`, `id`, `Services card`, `Disability`, `Qualification`, `Training`, `courses`, `photo`) VALUES
('Kareem Gomaa Ibrahim ', '0000-00-00', 'kareemmohamedahmed@gmail.com', '01129144315', 'ASWAN ', '30204052800551', '1226464356997555', 'مشاكس ', 'نظم معلومات الاعمال ', 'HR SPECIALIST ', 'HR Deploma', 'hhgkkgk'),
('Kareem Gomaa ', '2024-03-05', 'kareem123@gmail.com ', '0129144315', 'aswan ', '30201459782324', '1235469875321456', 'pppp', 'business information ', 'HR SPECIALIST ', 'HR DEPLOMAA', 'HGKSSHF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cv.(company)`
--
ALTER TABLE `cv.(company)`
  ADD UNIQUE KEY `CR Number` (`CR Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cv.(company)`
--
ALTER TABLE `cv.(company)`
  MODIFY `CR Number` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
