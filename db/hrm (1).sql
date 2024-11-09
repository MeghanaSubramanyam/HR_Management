-- phpMyAdmin SQL Dump
-- version 5.2.1deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 18, 2023 at 05:15 AM
-- Server version: 10.11.5-MariaDB-3
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityId` int(11) NOT NULL,
  `StateId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityId`, `StateId`, `Name`) VALUES
(26, 7, 'Ongloe'),
(27, 7, 'Vizag'),
(28, 7, 'Tirupati');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryId`, `Name`) VALUES
(11, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `dailyworkload`
--

CREATE TABLE `dailyworkload` (
  `DailyWorkLoadId` bigint(20) NOT NULL,
  `EmpId` varchar(50) NOT NULL,
  `LoginDate` datetime DEFAULT NULL,
  `LogoutDate` datetime DEFAULT NULL,
  `DailyWorkingminutes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dailyworkload`
--

INSERT INTO `dailyworkload` (`DailyWorkLoadId`, `EmpId`, `LoginDate`, `LogoutDate`, `DailyWorkingminutes`) VALUES
(1, '190154', '2023-11-08 17:35:09', NULL, NULL),
(2, '190154', '2023-11-10 09:50:07', '2023-11-10 10:25:45', 36),
(3, '1', '2023-11-10 18:14:18', NULL, NULL),
(4, '190154', '2023-11-11 14:47:26', NULL, NULL),
(5, '190154', '2023-11-12 13:35:57', NULL, NULL),
(6, '190154', '2023-11-13 13:17:51', NULL, NULL),
(7, '190154', '2023-11-14 11:05:10', NULL, NULL),
(8, '190154', '2023-11-21 15:26:11', NULL, NULL),
(9, '190154', '2023-11-22 10:04:47', '2023-11-22 10:44:10', 39),
(10, '190154', '2023-11-23 22:24:30', NULL, NULL),
(11, '190154', '2023-11-24 14:17:19', '2023-11-24 15:13:27', 56),
(12, '190154', '2023-11-25 08:14:34', NULL, NULL),
(13, '190154', '2023-11-29 14:20:09', NULL, NULL),
(14, '190154', '2023-12-01 08:52:21', NULL, NULL),
(15, '111', '2023-12-01 13:53:02', '2023-12-01 16:54:06', 181),
(16, '190154', '2023-12-02 09:12:35', '2023-12-02 09:28:50', 28358159),
(17, '190154', '2023-12-15 06:00:29', NULL, NULL),
(18, '190154', '2023-12-18 09:44:38', '2023-12-18 09:48:13', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpId` bigint(20) NOT NULL,
  `EmployeeId` varchar(11) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `MiddleName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` int(10) NOT NULL,
  `Address1` varchar(500) NOT NULL,
  `Address2` varchar(500) NOT NULL,
  `Address3` varchar(500) NOT NULL,
  `CityId` int(11) NOT NULL,
  `Mobile` decimal(10,0) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `AadharNumber` varchar(25) NOT NULL,
  `MaritalStatus` int(11) NOT NULL,
  `PositionId` int(11) NOT NULL,
  `CreatedBy` bigint(20) NOT NULL,
  `CreatedDate` datetime NOT NULL,
  `ModifiedBy` bigint(20) DEFAULT NULL,
  `ModifiedDate` datetime DEFAULT NULL,
  `JoinDate` date NOT NULL,
  `LeaveDate` date DEFAULT NULL,
  `LastLogin` datetime DEFAULT NULL,
  `LastLogout` datetime DEFAULT NULL,
  `StatusId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `ImageName` varchar(1000) DEFAULT NULL,
  `MacAddress` varchar(25) NOT NULL,
  `project_name` varchar(50) DEFAULT NULL,
  `project_details` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `EmployeeId`, `FirstName`, `MiddleName`, `LastName`, `Birthdate`, `Gender`, `Address1`, `Address2`, `Address3`, `CityId`, `Mobile`, `Email`, `Password`, `AadharNumber`, `MaritalStatus`, `PositionId`, `CreatedBy`, `CreatedDate`, `ModifiedBy`, `ModifiedDate`, `JoinDate`, `LeaveDate`, `LastLogin`, `LastLogout`, `StatusId`, `RoleId`, `ImageName`, `MacAddress`, `project_name`, `project_details`) VALUES
(1, '1', 'admin', 'admin', 'admin', '1994-10-09', 1, 'address1', 'address2', 'address3', 1, 9999999999, 'admin@gmail.com', 'admin#123', '12354658496', 2, 1, 1, '2017-01-01 00:00:00', 1, '2017-01-31 10:33:33', '2017-01-11', '2017-01-18', '2023-11-10 18:18:45', '2017-02-09 15:12:09', 1, 1, 'images (2).jpg', '', NULL, NULL),
(2, '6231415', 'Mark', 'D', 'Cooper', '2022-10-10', 1, 'Sample Address 101', 'Sample Address 102', '', 22, 912345678, 'mcooper@mail.com', 'mcooper#123', '', 1, 2, 1, '2022-10-10 08:01:43', 1, '2022-10-10 08:05:39', '2022-10-10', '0000-00-00', '2022-10-10 08:55:27', '2022-10-10 08:55:05', 1, 3, '33615user.png', '', NULL, NULL),
(3, '190', 'admin', 'admin', 'admin', '2004-09-15', 1, 'M.R.O OFFICE ROAD', 'Bestavaripeta', 'PRAKASAM', 523334, 9390374748, 'resource.rgukt.123@gmail.com', '123456789', '676107869775', 1, 1, 2, '2023-09-14 10:27:58', 23, '2023-09-18 15:57:58', '2023-09-05', '2023-09-11', '2023-12-18 10:34:45', '2023-12-18 09:44:31', 2, 1, '33615user.png', '189.23.40.0', 'Hello', NULL),
(4, '1234', 'M', 'qe', 'we', '2023-09-07', 1, 'qw', 'qw', 'qw', 24, 1234567890, 'lakshmi@gmail.com', '12345', '', 1, 3, 1, '2023-09-16 10:17:00', 1, '2023-11-06 06:39:04', '2023-09-08', '2023-09-05', NULL, NULL, 2, 3, '33615user.png', '', NULL, NULL),
(5, '190154', 'Malyadri', 'Lakshmi', 'Muppuri', '2015-06-10', 1, 'Bestavaripeta', 'Prakasam', 'Andhrapredash', 22, 9390374748, 'employee.rgukt.123@gmail.com', '123456789', '', 2, 3, 1, '2023-11-08 05:32:19', NULL, NULL, '2023-11-08', '2023-11-08', '2023-12-18 10:38:13', '2023-12-18 09:48:13', 1, 3, '33615user.png', '', NULL, NULL),
(6, '111', 'Employee', '1', '1', '2023-11-13', 2, 'qw', 'qer', 'qwe', 26, 9293848123, 'muppuri4748@gmail.com', '1234', '', 1, 3, 1, '2023-11-13 09:11:20', NULL, NULL, '2023-11-13', '2023-11-13', '2023-12-01 16:49:58', '2023-12-01 16:54:06', 1, 3, '33615user.png', '', 'Human Resource', 1),
(7, '112', 'Employee', '1', '2', '2023-11-03', 2, 'asdflkas', 'a;lsdjf', ';lkajsdkf;j', 26, 1234567898, 'two@gmail.com', '123456', '', 2, 1, 1, '2023-11-13 09:12:49', NULL, NULL, '2023-11-13', '2023-11-13', NULL, NULL, 1, 3, '33615user.png', '', 'Human Resource', NULL),
(8, '113', 'Employee', '1', '3', '2023-11-01', 2, 'alkdjf', 'a;sdjf;', ';alsjdf;', 26, 9988776655, 'three@gmail.com', '12345678', '', 1, 1, 1, '2023-11-13 09:14:04', NULL, NULL, '2023-11-13', '2023-11-13', NULL, NULL, 1, 3, '33615user.png', '', 'Human Resource', NULL),
(9, '114', 'Employee', '1', '4', '2023-11-13', 2, 'fdfaf', 'sdfgfdg', 'dfgsd', 28, 1122334455, 'four@gmail.com', '1234567', '', 1, 3, 1, '2023-11-13 09:15:16', NULL, NULL, '2023-11-13', '2023-11-13', NULL, NULL, 1, 3, '33615user.png', '', 'Human Resource', NULL),
(10, '115', 'Employee', '1', '5', '2023-11-13', 2, 'asdfads', 'asdf', 'adsfd', 28, 1122332211, 'five@gmail.com', '12345', '', 1, 2, 1, '2023-11-13 09:16:22', NULL, NULL, '2023-11-13', '2023-11-13', NULL, NULL, 1, 3, '33615user.png', '', 'Human Resource', NULL),
(11, '116', 'Employee', '1', '6', '2023-11-07', 1, 'qw', 'qer', 'qwe', 28, 9390737428, 'six@gmail.com', '123456', '', 1, 1, 1, '2023-11-13 09:17:18', NULL, NULL, '2023-11-13', '2023-11-13', NULL, NULL, 1, 3, '33615user.png', '', 'Human Resource', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `GenderId` int(11) NOT NULL,
  `Name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`GenderId`, `Name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `leavedays`
--

CREATE TABLE `leavedays` (
  `LeaveDayId` bigint(20) NOT NULL,
  `LeaveDay` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leavedays`
--

INSERT INTO `leavedays` (`LeaveDayId`, `LeaveDay`) VALUES
(1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `leavedetails`
--

CREATE TABLE `leavedetails` (
  `Detail_Id` bigint(20) NOT NULL,
  `EmpId` bigint(20) NOT NULL,
  `TypesLeaveId` int(10) NOT NULL,
  `Reason` varchar(500) NOT NULL,
  `StateDate` date NOT NULL,
  `EndDate` date NOT NULL,
  `LeaveStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `leavedetails`
--

INSERT INTO `leavedetails` (`Detail_Id`, `EmpId`, `TypesLeaveId`, `Reason`, `StateDate`, `EndDate`, `LeaveStatus`) VALUES
(1, 6231415, 3, 'Sample Reason', '2022-10-12', '2022-10-14', 'Accept'),
(2, 190154, 1, 'sfdsf', '2023-11-24', '2023-11-02', 'Accept'),
(3, 190154, 3, 'I am was late', '2024-03-11', '2023-11-01', 'Accept'),
(4, 190154, 1, 'asdadsf', '2023-11-01', '2023-11-03', 'Accept'),
(5, 190154, 1, 'alsdfj', '2023-11-08', '2023-11-09', 'Denied'),
(6, 190154, 3, 'sdda', '2023-11-23', '2024-07-25', 'Denied'),
(7, 190154, 4, 'akldfh', '2023-11-01', '2023-11-02', 'Denied'),
(8, 190154, 4, 'fdsf', '2023-11-02', '2023-11-03', 'Denied'),
(9, 190154, 3, 'sadfdsf', '2023-11-02', '2023-11-17', 'Denied'),
(10, 190154, 3, 'asf', '2023-11-01', '2023-11-02', 'Denied'),
(11, 190154, 3, 'hello how are you', '2023-11-09', '2023-11-10', 'Accept'),
(12, 190154, 3, 'hello how are you', '2023-11-09', '2023-11-10', 'Accept'),
(13, 190154, 4, 'asdf', '2023-11-09', '2023-11-10', 'Accept'),
(14, 190154, 4, 'asdkfjakljfdskf', '2023-11-29', '2023-10-31', 'Pending'),
(15, 190154, 3, 'al;sdjflksajf', '2023-11-15', '2023-11-03', 'Pending'),
(16, 190, 1, 'forlajdf', '2023-12-05', '2023-12-08', 'Pending'),
(17, 190154, 3, 'Medical Leave', '2025-04-01', '2023-12-02', 'Pending'),
(18, 190154, 3, 'adfd', '2023-12-01', '2023-12-02', 'Pending'),
(19, 190154, 3, 'asdf', '2023-12-06', '2023-12-08', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `maritalstatus`
--

CREATE TABLE `maritalstatus` (
  `MaritalId` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `maritalstatus`
--

INSERT INTO `maritalstatus` (`MaritalId`, `Name`) VALUES
(1, 'Married'),
(2, 'Unmarried');

-- --------------------------------------------------------

--
-- Table structure for table `OTP`
--

CREATE TABLE `OTP` (
  `email` varchar(50) DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `OTP`
--

INSERT INTO `OTP` (`email`, `otp`, `id`) VALUES
('malyadri6761@gmail.com', 680693, 1),
('muppurimalyadri4748@gmail.com', 248529, 2);

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `PositinId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `position`
--

INSERT INTO `position` (`PositinId`, `Name`) VALUES
(1, 'HR'),
(2, 'Web Developer'),
(3, 'Fullstack PHP Developer');

-- --------------------------------------------------------

--
-- Table structure for table `projectinfo`
--

CREATE TABLE `projectinfo` (
  `projectname` varchar(50) DEFAULT NULL,
  `Emp1` varchar(15) DEFAULT NULL,
  `Emp2` varchar(15) DEFAULT NULL,
  `Emp3` varchar(15) DEFAULT NULL,
  `Emp4` varchar(15) DEFAULT NULL,
  `Emp5` varchar(15) DEFAULT NULL,
  `Emp6` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projectinfo`
--

INSERT INTO `projectinfo` (`projectname`, `Emp1`, `Emp2`, `Emp3`, `Emp4`, `Emp5`, `Emp6`) VALUES
('Hello', '111', '112', '113', '114', '115', '116'),
('Human Resource', '111', '112', '113', '114', '115', '116');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `RoleId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`RoleId`, `Name`) VALUES
(1, 'admin'),
(2, 'admin-hr'),
(3, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `StateId` int(11) NOT NULL,
  `CountryId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`StateId`, `CountryId`, `Name`) VALUES
(7, 11, 'Andhra Predash');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `StatusId` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`StatusId`, `Name`) VALUES
(1, 'active'),
(2, 'inactive');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_leave`
--

CREATE TABLE `type_of_leave` (
  `LeaveId` bigint(20) NOT NULL,
  `Type_of_Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `type_of_leave`
--

INSERT INTO `type_of_leave` (`LeaveId`, `Type_of_Name`) VALUES
(1, 'sick leave'),
(3, 'casual leave'),
(4, 'privilege leave'),
(5, 'half day leave');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `dailyworkload`
--
ALTER TABLE `dailyworkload`
  ADD PRIMARY KEY (`DailyWorkLoadId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpId`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `EmployeeId` (`EmployeeId`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`GenderId`);

--
-- Indexes for table `leavedays`
--
ALTER TABLE `leavedays`
  ADD PRIMARY KEY (`LeaveDayId`);

--
-- Indexes for table `leavedetails`
--
ALTER TABLE `leavedetails`
  ADD PRIMARY KEY (`Detail_Id`);

--
-- Indexes for table `maritalstatus`
--
ALTER TABLE `maritalstatus`
  ADD PRIMARY KEY (`MaritalId`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`PositinId`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`RoleId`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`StateId`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`StatusId`);

--
-- Indexes for table `type_of_leave`
--
ALTER TABLE `type_of_leave`
  ADD PRIMARY KEY (`LeaveId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dailyworkload`
--
ALTER TABLE `dailyworkload`
  MODIFY `DailyWorkLoadId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `GenderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leavedays`
--
ALTER TABLE `leavedays`
  MODIFY `LeaveDayId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `leavedetails`
--
ALTER TABLE `leavedetails`
  MODIFY `Detail_Id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `PositinId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `StateId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type_of_leave`
--
ALTER TABLE `type_of_leave`
  MODIFY `LeaveId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
