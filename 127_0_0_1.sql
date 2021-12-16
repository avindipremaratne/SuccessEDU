-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 02:03 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `success_edu`
--
CREATE DATABASE IF NOT EXISTS `success_edu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `success_edu`;

-- --------------------------------------------------------

--
-- Table structure for table `administrators`
--

CREATE TABLE `administrators` (
  `User_ID` int(10) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrators`
--

INSERT INTO `administrators` (`User_ID`, `Username`, `Password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `Assignment_No` varchar(10) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Module` varchar(50) NOT NULL,
  `Batch_Index` varchar(20) NOT NULL,
  `Assignment_Name` varchar(50) NOT NULL,
  `Date_of_issue` varchar(12) NOT NULL,
  `Date_of_submit` varchar(12) NOT NULL,
  `file` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`Assignment_No`, `Course`, `Module`, `Batch_Index`, `Assignment_Name`, `Date_of_issue`, `Date_of_submit`, `file`) VALUES
('', 'HND in BM', 'System Analysis and Design', 'HND BM 12', '', '', '', '../Batch/HND BM 12/System Analysis and Design/'),
('AA0010', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 12', 'ASFG', '01/07/02', '07/08/09', '../Batch/HND IT 12/ Computer Systems/Task 02.docx'),
('AA002', 'HND in BM', ' Computer Systems', 'HND BM 12', 'CM', '01/07/05', '02/06/09', '../Batch/HND BM 12/ Computer Systems/Task 02.docx'),
('AA005', 'HND in Software Engineering and Computing Systems', 'Fundamentals in Networking - Commerce', 'HND BM 12', 'Networking', '01/07/02/', '07/08/09', '../Batch/HND BM 12/Fundamentals in Networking - Commerce/Task 02.docx'),
('AS0014', 'HND in Software Engineering and Computing Systems', ' Fundamentals in Networking - Commerce', 'HND IT 10', 'JKL', '01/02/06', '01/02/06', '../Batch/HND IT 10/ Fundamentals in Networking - Commerce/Task 02.docx'),
('AS0012', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 10', 'JKL', '01/02/06', '01/02/06', '../Batch/HND IT 10/ Computer Systems/Task 02.docx'),
('AS0013', 'HND in Software Engineering and Computing Systems', ' Fundamentals in Networking - Commerce', 'HND IT 10', 'JKL', '01/02/06', '01/02/06', '../Batch/HND IT 10/ Fundamentals in Networking - Commerce/'),
('AS122', 'HND in Business Management ( Finance, Marketing, HRM)', 'ABC', 'HND BM 12', 'ABC Assign', '01/01/17', '12/01/17', '../Batch/HND BM 12/ABC/Dear Sir.docx'),
('AE003', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 12', 'ASDF', '02/01/07', '03/01/02', '../Batch/HND IT 12/ Computer Systems/Task 02.docx');

-- --------------------------------------------------------

--
-- Table structure for table `assignments_submit`
--

CREATE TABLE `assignments_submit` (
  `Assignment_No` varchar(10) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Module` varchar(50) NOT NULL,
  `Batch_Index` varchar(25) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Date_of_issue` varchar(15) NOT NULL,
  `Date_of_submit` varchar(15) NOT NULL,
  `File` text NOT NULL,
  `Student_NIC` varchar(12) NOT NULL,
  `Student_Name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assignments_submit`
--

INSERT INTO `assignments_submit` (`Assignment_No`, `Course`, `Module`, `Batch_Index`, `Name`, `Date_of_issue`, `Date_of_submit`, `File`, `Student_NIC`, `Student_Name`) VALUES
('tyty', 'HND in Software Engineering and Computing Systems', '', 'HND BM 12', 'bcbc', '', '', '../Assignments/', '', ''),
('34566', 'HND in Business Management ( Finance, Marketing, HRM)', '', 'HND BM 12', '', '', '', '../Assignments/', '996261441V', ''),
('34567', 'HND in Business Management ( Finance, Marketing, HRM)', '', 'HND BM 12', 'asd', '01/01/01', '1/1/1', '../Assignments/', '123456789v', 'asdfg'),
('3456611', 'HND in Business Management ( Finance, Marketing, HRM)', 'Computer Systems', 'HND BM 12', 'asdf', '02/01/06', '03/06/05', '../Assignments/', '1234569', 'vbg'),
('34577', 'HND in Business Management ( Finance, Marketing, HRM)', 'qwef', 'HND BM 12', 'qwe', '1/1/1', '1/1/1', '../Assignments/Dear Sir.docx', '1234567890v', 'we'),
('34777', 'HND in Business Management ( Finance, Marketing, HRM)', 'qwe', 'HND BM 12', 'qwe', '1/1/1', '1/1/1', '../Assignments/Dear Sir.docx', '1234567890v', 'qwe'),
('24566', 'HND in Business Management ( Finance, Marketing, HRM)', 'qwe', 'HND BM 12', 'qwerer', '1/1/1', '1/1/1', '../Assignments/Dear Sir.docx', '1234567890v', 'werfg'),
('22220', 'HND in Business Management ( Finance, Marketing, HRM)', 'Module1', 'HND BM 12', 'Assignment 1', '1/1/1', '1/1/1', '../Assignments/Dear Sir.docx', '1234567890v', 'Avindi'),
('AA0010', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 12', 'ASFG', '01/07/02', '07/08/09', '../Assignments/', '996261441V', 'Avindi'),
('AA0011', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 12', 'ASFG', '01/07/02', '07/08/09', '../Assignments/Task 02.docx', '996261441v', 'Avindi'),
('AA003', 'HND in BM', ' Computer Systems', 'HND IT 10', 'CM', '01/07/05', '02/06/09', '../Assignments/Task 02.docx', '7788', 'avindi'),
('AS0014', 'HND in Software Engineering and Computing Systems', ' Fundamentals in Networking - Commerce', 'HND IT 10', 'JKL', '01/02/06', '01/02/06', '../Assignments/Task 02.docx', '7788', 'avindi'),
('AS0012', 'HND in Software Engineering and Computing Systems', ' Computer Systems', 'HND IT 10', 'JKL', '01/02/06', '01/02/06', '../Assignments/Task 02.docx', '996261441V', 'avindi');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `Batch_Index` varchar(10) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`Batch_Index`, `Name`) VALUES
('HND BM 12', 'HND in Business Management ( Finance, Marketing, HRM)'),
('HND BM 18', 'HND in Business Management ( Finance, Marketing, HRM)'),
('HND IT 12', 'HND in Software Engineering and Computing Systems'),
('HND IT 21', 'HND in Software Engineering and Computing Systems'),
('HND IT 10', 'HND in Software Engineering and Computing Systems');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `Course_ID` varchar(10) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Modules` text NOT NULL,
  `B_Index` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`Course_ID`, `Name`, `Modules`, `B_Index`) VALUES
('SE001', 'HND in Software Engineering and Computing Systems', 'System Analysis and Design, Computer Systems, Fundamentals in Networking - Commerce, Introduction to Computer Programming,Database Design and Development Network Security, Introduction to Object Oriented Programming, Windows Application Development, Programming in PHP', 'ITi'),
('SE002', 'HND in Business Management ( Finance, Marketing, HRM)', '  ', 'BM'),
('SE003', 'HND in Quantity Surveying & Built Environment', '', ''),
('SE004', 'HND in Civil Engineering', ' Module 1, Module 2', 'Civil'),
('SE005', 'HND in Net', 'Module 1, Module 2', 'IT'),
('', 'HND in BM', 'Module 1, Modle 2', '');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `Registration_No` varchar(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Date_of_birth` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `NIC_No` varchar(15) NOT NULL,
  `Course` varchar(100) NOT NULL,
  `Batch` int(10) NOT NULL,
  `Batch_Index` varchar(20) NOT NULL,
  `Mobile_No` int(12) NOT NULL,
  `Home_No` int(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(32) CHARACTER SET macce COLLATE macce_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`Registration_No`, `Name`, `Gender`, `Date_of_birth`, `Address`, `NIC_No`, `Course`, `Batch`, `Batch_Index`, `Mobile_No`, `Home_No`, `Email`, `Username`, `Password`) VALUES
('7788', 'Nimal', 'Male', '1/1/1', 'alle', '753357v', 'HND in Business Management ( Finance, Marketing, HRM)', 2, 'HND IT', 123, 1245, 'a', '7788', '202cb962ac59075b964b07152d234b70'),
('7789', 'Nimal', 'Male', '1/1/1', 'alle', '555555555v', 'HND in Business Management ( Finance, Marketing, HRM)', 2, 'HND IT', 123, 1245, 'a', 'Nimal', '202cb962ac59075b964b07152d234b70'),
('ST/HNDCOM/19/15', 'Avindi Premaratne', 'Female', '05/05/1999', 'No.23, Hakmana road, Matara', '996261441V', 'HND in Software Engineering and Computing Systems', 19, 'HND IT 19', 77123456, 41123456, 'avindi.premaratne@gmail.com', 'ST/HNDCOM/19/15', '123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(10) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `Name`, `Type`, `Username`, `Password`) VALUES
(101, 'Avindi Premaratane', 'Administrator', 'admin1', '123'),
(102, 'Yasara  Wijesinghe', 'Student', 'yasara', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`Assignment_No`),
  ADD KEY `Batch_Index` (`Batch_Index`);

--
-- Indexes for table `assignments_submit`
--
ALTER TABLE `assignments_submit`
  ADD PRIMARY KEY (`Assignment_No`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`Batch_Index`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`Course_ID`,`Name`),
  ADD UNIQUE KEY `Name_2` (`Name`),
  ADD KEY `Name` (`Name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`Registration_No`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`),
  ADD KEY `Name` (`Name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
