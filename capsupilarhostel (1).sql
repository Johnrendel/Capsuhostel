-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 03:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `capsupilarhostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp_login`
--

CREATE TABLE `emp_login` (
  `empid` int(100) NOT NULL,
  `Emp_Email` varchar(50) NOT NULL,
  `Emp_Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp_login`
--

INSERT INTO `emp_login` (`empid`, `Emp_Email`, `Emp_Password`) VALUES
(5, 'capsuhostel@email.com', 'capsuhostel2023');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(30) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `NoofRoom` int(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `noofdays` int(30) NOT NULL,
  `roomtotal` double(8,2) NOT NULL,
  `bedtotal` double(8,2) NOT NULL,
  `meal` varchar(30) NOT NULL,
  `mealtotal` double(8,2) NOT NULL,
  `finaltotal` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `Name`, `Email`, `RoomType`, `Bed`, `NoofRoom`, `cin`, `cout`, `noofdays`, `roomtotal`, `bedtotal`, `meal`, `mealtotal`, `finaltotal`) VALUES
(95, 'Mark L. Bendecio', 'linggaming2020@gmail.com', 'Presidential Suites', 'King', 1, '2023-11-28', '2023-11-30', 2, 6000.00, 240.00, 'Full Board', 960.00, 7200.00),
(96, 'Justin Lance O. Catalan', 'justincatalan05@gmail.com', 'Presidential Suites', 'King', 1, '2023-11-28', '2023-11-29', 1, 3000.00, 120.00, 'Full Board', 480.00, 3600.00),
(97, 'Jerome C. Bito-on', 'aldenrichard69@gmail.com', 'Presidential Suites', 'King', 1, '2023-11-28', '2023-12-01', 3, 9000.00, 360.00, 'Half Board', 1080.00, 10440.00),
(100, 'Angel Billiones', 'angel8billiones@gmail.com', 'Presidential Suites', 'Queen', 2, '2023-11-29', '2023-12-02', 3, 18000.00, 270.00, 'Full Board', 1080.00, 19350.00);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(30) NOT NULL,
  `type` varchar(50) NOT NULL,
  `bedding` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`) VALUES
(57, 'Twin Room', 'Single'),
(60, 'Presidential Suites', 'Single'),
(61, 'Presidential Suites', 'Double'),
(62, 'Presidential Suites', 'Queen'),
(63, 'Presidential Suites', 'King'),
(64, 'Twin Room', 'Double'),
(65, 'Twin Room', 'Queen'),
(66, 'Twin Room', 'King'),
(67, 'Single Room', 'Single'),
(68, 'Single Room', 'Double'),
(69, 'Single Room', 'Queen'),
(70, 'Single Room', 'King');

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ref_no` int(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `Meal` varchar(30) NOT NULL,
  `NoofRoom` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Name`, `Email`, `Ref_no`, `Phone`, `RoomType`, `Bed`, `Meal`, `NoofRoom`, `cin`, `cout`, `nodays`, `stat`) VALUES
(95, 'Mark L. Bendecio', 'linggaming2020@gmail.com', 0, '09618898801', 'Presidential Suites', 'King', 'Full Board', '1', '2023-11-28', '2023-11-30', 2, 'Confirm'),
(96, 'Justin Lance O. Catalan', 'justincatalan05@gmail.com', 0, '09814956760', 'Presidential Suites', 'King', 'Full Board', '1', '2023-11-28', '2023-11-29', 1, 'Confirm'),
(97, 'Jerome C. Bito-on', 'aldenrichard69@gmail.com', 0, '09123456789', 'Presidential Suites', 'King', 'Half Board', '1', '2023-11-28', '2023-12-01', 3, 'Confirm'),
(98, 'John Rendel F. Jumayag', 'jumayagrendel563@gmail.com', 0, '0951 321 5336', 'Presidential Suites', 'Single', 'Room Only', '1', '2023-11-28', '2023-11-29', 1, 'NotConfirm'),
(99, 'Ma. Paula V. Arroyo', 'arroyomapaula@gmail.com', 0, '0951 321 5336', 'Single Rooms', 'Single', 'Half Board', '1', '2023-11-29', '2023-12-01', 2, 'NotConfirm'),
(100, 'Angel Billiones', 'angel8billiones@gmail.com', 0, '09465589212', 'Presidential Suites', 'Queen', 'Full Board', '2', '2023-11-29', '2023-12-02', 3, 'Confirm'),
(101, 'Marc John Arevalo ', 'arevalomarcjohn@gmail.com', 0, '09564429490', 'Single Rooms', 'Single', 'Room Only', '1', '2023-05-12', '2023-12-07', 209, 'Confirm'),
(102, 'John Rendel F. Jumayag', 'rendeljumayag@gmail.com', 0, '0951 321 5336', 'Presidential Suites', 'Single', 'Room Only', '1', '2023-11-29', '2023-11-30', 1, 'NotConfirm'),
(103, 'John Rendel F. Jumayag', 'rendeljumayag@gmail.com', 0, '09123456789', 'Presidential Suites', 'King', 'Half Board', '2', '2023-12-02', '2023-12-03', 1, 'NotConfirm');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `UserID` int(100) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`UserID`, `Username`, `Email`, `Password`) VALUES
(1, 'Tushar Pankhaniya', 'tusharpankhaniya2202@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `work` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `work`) VALUES
(14, 'Marc L. Bendecio', 'Manager'),
(15, 'Marc L. Bendecio', 'Cook'),
(16, 'Marc L. Bendecio', 'Helper'),
(17, 'Marc L. Bendecio', 'cleaner');

-- --------------------------------------------------------

--
-- Table structure for table `webbooking`
--

CREATE TABLE `webbooking` (
  `id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ref_no` int(30) NOT NULL,
  `Phone` varchar(30) NOT NULL,
  `RoomType` varchar(30) NOT NULL,
  `Bed` varchar(30) NOT NULL,
  `Meal` varchar(30) NOT NULL,
  `NoofRoom` varchar(30) NOT NULL,
  `cin` date NOT NULL,
  `cout` date NOT NULL,
  `nodays` int(50) NOT NULL,
  `stat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `webbooking`
--

INSERT INTO `webbooking` (`id`, `Name`, `Email`, `Ref_no`, `Phone`, `RoomType`, `Bed`, `Meal`, `NoofRoom`, `cin`, `cout`, `nodays`, `stat`) VALUES
(40, 'Mark L. Bendecio', 'linggaming2020@gmail.com', 0, '09618898801', 'Presidential Suites', 'King', 'Full Board', '1', '2023-11-28', '2023-11-30', 2, 'Confirm'),
(41, 'Justin Lance O. Catalan', 'justincatalan05@gmail.com', 0, '09814956760', 'Presidential Suites', 'King', 'Full Board', '1', '2023-11-28', '2023-11-29', 1, 'Confirm'),
(44, 'Jerome C. Bito-on', 'aldenrichard69@gmail.com', 0, '09123456789', 'Presidential Suites', 'King', 'Half Board', '1', '2023-11-28', '2023-12-01', 3, 'Confirm'),
(96, 'John Rendel F. Jumayag', 'jumayagrendel563@gmail.com', 0, '0951 321 5336', 'Presidential Suites', 'Single', 'Room Only', '1', '2023-11-28', '2023-11-29', 1, 'NotConfirm'),
(98, 'Ma. Paula V. Arroyo', 'arroyomapaula@gmail.com', 0, '0951 321 5336', 'Single Rooms', 'Single', 'Half Board', '1', '2023-11-29', '2023-12-01', 2, 'Confirm'),
(99, 'Angel Billiones', 'angel8billiones@gmail.com', 0, '09465589212', 'Presidential Suites', 'Queen', 'Full Board', '2', '2023-11-29', '2023-12-02', 3, 'Confirm'),
(100, 'Marc John Arevalo ', 'arevalomarcjohn@gmail.com', 0, '09564429490', 'Single Rooms', 'Single', 'Room Only', '1', '2023-05-12', '2023-12-07', 209, 'Confirm'),
(101, 'John Rendel F. Jumayag', 'rendeljumayag@gmail.com', 0, '0951 321 5336', 'Presidential Suites', 'Single', 'Room Only', '1', '2023-11-29', '2023-11-30', 1, 'Confirm'),
(118, 'John Rendel F. Jumayag', 'rendeljumayag@gmail.com', 0, '09618898801', 'Twin Rooms', 'Queen', 'Room Only', '2', '2023-12-02', '2023-12-10', 8, 'NotConfirm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp_login`
--
ALTER TABLE `emp_login`
  ADD PRIMARY KEY (`empid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webbooking`
--
ALTER TABLE `webbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp_login`
--
ALTER TABLE `emp_login`
  MODIFY `empid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `UserID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `webbooking`
--
ALTER TABLE `webbooking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
