-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2021 at 05:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `MotherName` varchar(255) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `MobileNumber` varchar(50) NOT NULL,
  `PrevSchoolName` varchar(255) NOT NULL,
  `Year` int(40) NOT NULL,
  `Gender` enum('Male','Female','','') NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `EmailAddress`, `FatherName`, `MotherName`, `StudentName`, `MobileNumber`, `PrevSchoolName`, `Year`, `Gender`, `Address`) VALUES
(1, 'nhassan_1990@yahoo.com', 'Naeem Taj Muhammad', 'Gulnaz Naeem', 'Muhammad Hassan Naeem', '03378044346', 'S.T Patrick English High School Karachi', 2021, 'Male', '5/2b, Firdos Colony Nazimabad Karachi'),
(2, 'beautify@gmail.com', 'Name', 'Careful', 'Beautify', '03218384567', 'SChool', 2021, 'Male', '5/2b, Firdos Colony Nazimabad Karachi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `fullName` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `fullName`, `username`, `Email`, `Password`, `gender`, `mobile`, `address`, `type`) VALUES
(1, 'Muhammad Hassan Naeem', 'Muhammad', NULL, NULL, 'hassan@gmaIl.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, ''),
(5, 'Usman', 'Hassan', NULL, NULL, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, ''),
(6, 'Usman', 'Hassan', NULL, NULL, 'nhassan_2000@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, ''),
(10, NULL, NULL, 'Hero Admin', 'hero_adm', 'hero@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', 3232453212, '5/2b, Firdos Colony Nazimabad Karachi', 'employee'),
(11, NULL, NULL, 'Irfan Ahmed', 'Irfan_if', 'Irfan@gmail.com', '25d55ad283aa400af464c76d713c07ad', 'Male', 32123545798, '5/2b, Firdos Colony Nazimabad Karachi', 'employee');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
