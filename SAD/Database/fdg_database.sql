-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2018 at 09:05 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fdg_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Admin_id` int(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Admin_id`, `name`, `email`, `password`, `created`) VALUES
(4, 'prince', 'princeneo58@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2018-10-31 20:11:17');

-- --------------------------------------------------------

--
-- Table structure for table `admission_form`
--

CREATE TABLE `admission_form` (
  `Admission_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Fathers_name` varchar(30) NOT NULL,
  `Sex` text NOT NULL,
  `Martial_status` text NOT NULL,
  `Surgery` text NOT NULL,
  `Health` text NOT NULL,
  `Cell` int(15) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Present_address` varchar(50) NOT NULL,
  `Permanent_address` varchar(50) NOT NULL,
  `Height` varchar(15) NOT NULL,
  `Joining_weight` varchar(15) NOT NULL,
  `Present_weight` varchar(15) NOT NULL,
  `Desire_weight` varchar(15) NOT NULL,
  `Joining_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission_form`
--

INSERT INTO `admission_form` (`Admission_id`, `Student_name`, `Fathers_name`, `Sex`, `Martial_status`, `Surgery`, `Health`, `Cell`, `Telephone`, `Present_address`, `Permanent_address`, `Height`, `Joining_weight`, `Present_weight`, `Desire_weight`, `Joining_date`) VALUES
(3, 'Prince', 'Nazrul Islam', 'male', 'Single', 'no', 'good', 1682009300, 0, 'Tongi', 'Gazipur', '5 feet 8 inch', '48', '54', '64', '0000-00-00'),
(4, 'Prince', 'Nazrul Islam', 'male', 'Single', 'no', 'good', 1682009300, 0, 'Tongi', 'Gazipur', '5 feet 8 inch', '48', '54', '64', '0000-00-00'),
(5, 'Prince', 'Nazrul Islam', 'male', 'Single', 'no', 'good', 1682009300, 0, 'Tongi', 'Gazipur', '5 feet 8 inch', '48', '54', '64', '0000-00-00'),
(6, 'Prince', 'Nazrul Islam', 'male', 'Single', 'no', 'good', 1682009300, 0, 'Tongi', 'Gazipur', '5 feet 8 inch', '48', '54', '64', '0000-00-00'),
(7, 'Prince', 'Nazrul Islam', 'male', 'Single', 'no', 'good', 1682009300, 0, 'Tongi', 'Gazipur', '5 feet 8 inch', '48', '54', '64', '0000-00-00'),
(10, 'Messi', 'janina', 'male', 'Single', 'yes', 'good', 126566, 546544, 'Barcelona', 'Argentina', '5 feet 8 inch', '48', '54', '60', '2018-12-04'),
(11, 'Messi', 'janina', 'male', 'Single', 'yes', 'good', 126566, 546544, 'Barcelona', 'Argentina', '5 feet 8 inch', '48', '54', '60', '2018-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_information`
--

CREATE TABLE `contact_information` (
  `Stu_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Cell` int(15) NOT NULL,
  `Telephone` int(15) NOT NULL,
  `Present_address` varchar(50) NOT NULL,
  `Permanent_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_information`
--

INSERT INTO `contact_information` (`Stu_id`, `Student_name`, `Cell`, `Telephone`, `Present_address`, `Permanent_address`) VALUES
(2, 'testuiuy', 1682009300, 4164, 'Tongi', 'Gazipur'),
(3, 'Prince', 15154, 0, 'Tongi', 'Gazipur'),
(4, 'Prince', 1682009300, 0, 'Tongi', 'Gazipur'),
(5, 'Prince', 1682009300, 0, 'Tongi', 'Gazipur'),
(6, 'Prince', 1682009300, 0, 'Tongi', 'Gazipur'),
(7, 'Prince', 1682009300, 0, 'Tongi', 'Gazipur'),
(8, 'Prince', 1682009300, 0, 'Tongi', 'Gazipur'),
(9, 'Messi', 126566, 546544, 'Barcelona', 'Argentina'),
(10, 'Messi', 126566, 546544, 'Barcelona', 'Argentina');

-- --------------------------------------------------------

--
-- Table structure for table `equipment_information`
--

CREATE TABLE `equipment_information` (
  `Equipment_id` int(15) NOT NULL,
  `Equipment_Name` text NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment_information`
--

INSERT INTO `equipment_information` (`Equipment_id`, `Equipment_Name`, `Quantity`, `Availability`) VALUES
(4, 'barble', 4, 'No'),
(5, 'test', 7, 'yes'),
(17, 'cable curl', 2, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `payment_information`
--

CREATE TABLE `payment_information` (
  `Payment_id` int(20) NOT NULL,
  `Stu_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Payment_Date` date NOT NULL,
  `Payment_month` text NOT NULL,
  `Amount` int(30) NOT NULL,
  `Due` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_information`
--

INSERT INTO `payment_information` (`Payment_id`, `Stu_id`, `Student_name`, `Payment_Date`, `Payment_month`, `Amount`, `Due`) VALUES
(1, 1, 'Prince', '2018-12-03', 'October', 500, 0),
(4, 2, 'Prince', '2018-11-27', 'October', 400, 100);

-- --------------------------------------------------------

--
-- Table structure for table `physique_information`
--

CREATE TABLE `physique_information` (
  `Stu_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Height` varchar(10) NOT NULL,
  `Joining_weight` varchar(15) NOT NULL,
  `Present_weight` varchar(15) NOT NULL,
  `Desire_weight` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `physique_information`
--

INSERT INTO `physique_information` (`Stu_id`, `Student_name`, `Height`, `Joining_weight`, `Present_weight`, `Desire_weight`) VALUES
(1, 'testuiuy', '5 feet 8 i', '60', '54', '65'),
(2, 'test', '5 feet 8 i', '48', '54', '64'),
(3, 'Prince', '5 feet 8 i', '48', '54', '64'),
(5, 'Messi', '5 feet 8 i', '48', '54', '60'),
(6, 'Messi', '5 feet 8 i', '48', '54', '60');

-- --------------------------------------------------------

--
-- Table structure for table `student_information`
--

CREATE TABLE `student_information` (
  `Stu_id` int(15) NOT NULL,
  `Student_name` varchar(30) NOT NULL,
  `Fathers_name` varchar(30) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Sex` text NOT NULL,
  `Martial_status` text NOT NULL,
  `Surgery` text NOT NULL,
  `Health` text NOT NULL,
  `Joining_date` date NOT NULL,
  `Exit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_information`
--

INSERT INTO `student_information` (`Stu_id`, `Student_name`, `Fathers_name`, `Date_of_Birth`, `Sex`, `Martial_status`, `Surgery`, `Health`, `Joining_date`, `Exit_date`) VALUES
(1, 'test', 'ft test', '2018-10-23', 'male', 'no', 'no', 'good', '2018-11-03', '0000-00-00'),
(2, 'Prince', 'Nazrul Islam', '2018-11-03', 'male', 'Single', 'no', 'good', '2018-12-03', '0000-00-00'),
(3, 'Prince', 'Nazrul Islam', '0000-00-00', 'male', 'Single', 'no', 'good', '0000-00-00', '0000-00-00'),
(4, 'Prince', 'Nazrul Islam', '0000-00-00', 'male', 'Single', 'no', 'good', '0000-00-00', '0000-00-00'),
(5, 'Prince', 'Nazrul Islam', '0000-00-00', 'male', 'Single', 'no', 'good', '0000-00-00', '0000-00-00'),
(6, 'Prince', 'Nazrul Islam', '2018-12-13', 'male', 'Single', 'yes', 'good', '2018-12-01', '0000-00-00'),
(7, 'Prince', 'Nazrul Islam', '0000-00-00', 'male', 'Single', 'no', 'good', '2018-10-31', '0000-00-00'),
(9, 'Messi', 'janina', '0000-00-00', 'male', 'Single', 'yes', 'good', '2018-12-04', '0000-00-00'),
(10, 'Messi', 'janina', '0000-00-00', 'male', 'Single', 'yes', 'good', '2018-12-04', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Admin_id`);

--
-- Indexes for table `admission_form`
--
ALTER TABLE `admission_form`
  ADD PRIMARY KEY (`Admission_id`);

--
-- Indexes for table `contact_information`
--
ALTER TABLE `contact_information`
  ADD PRIMARY KEY (`Stu_id`);

--
-- Indexes for table `equipment_information`
--
ALTER TABLE `equipment_information`
  ADD PRIMARY KEY (`Equipment_id`);

--
-- Indexes for table `payment_information`
--
ALTER TABLE `payment_information`
  ADD PRIMARY KEY (`Payment_id`);

--
-- Indexes for table `physique_information`
--
ALTER TABLE `physique_information`
  ADD PRIMARY KEY (`Stu_id`);

--
-- Indexes for table `student_information`
--
ALTER TABLE `student_information`
  ADD PRIMARY KEY (`Stu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Admin_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admission_form`
--
ALTER TABLE `admission_form`
  MODIFY `Admission_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_information`
--
ALTER TABLE `contact_information`
  MODIFY `Stu_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `equipment_information`
--
ALTER TABLE `equipment_information`
  MODIFY `Equipment_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment_information`
--
ALTER TABLE `payment_information`
  MODIFY `Payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `physique_information`
--
ALTER TABLE `physique_information`
  MODIFY `Stu_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_information`
--
ALTER TABLE `student_information`
  MODIFY `Stu_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
