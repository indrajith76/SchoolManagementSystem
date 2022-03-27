-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2022 at 07:50 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(350) COLLATE utf8_unicode_ci NOT NULL,
  `guardianmobileno` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `rollno`, `name`, `class`, `address`, `religion`, `dateofbirth`, `gender`, `image`, `guardianmobileno`) VALUES
('220103172614', 27, 'Abdullah Al Maruf', 'Class 6', 'fatickchori', 'Islam', '2010-06-29', 'Male', 'studentpic/apple-touch-icon.png', '01879857463'),
('220108144700', 10, 'Indrajith Goswami', 'Class 10', 'chittagong', 'Sanatan', '2022-01-06', 'Male', 'studentpic/images (1).jfif', '01879857469'),
('220108185830', 15, 'Kashem Mia', 'Class 8', 'fatickchori', 'Islam', '2022-01-08', 'Male', 'studentpic/zz.jpg', '01879857468'),
('220109120748', 1, 'Akib Hossin', 'Class 6', 'Chandpur', 'Islam', '2010-01-26', 'Male', 'studentpic/vec2.jpg', '01879857468');

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `serial_no` int(11) NOT NULL,
  `day` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `second_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `third_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lunch_break` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fourth_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fifth_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sixth_class` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `classname` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`serial_no`, `day`, `first_class`, `second_class`, `third_class`, `lunch_break`, `fourth_class`, `fifth_class`, `sixth_class`, `classname`) VALUES
(1, 'Saturday', 'Math', 'Science', 'Bangla 1st', '1-HOUR Break', 'English 1st', 'Bangladesh_Bishoporicoy', 'Dhormo_Shikha', 'Class 6'),
(2, 'Sunday', 'Math', 'Science', 'Bangla 1st', '1-HOUR Break', 'English 1st', 'Dhormo_Shikha', 'Bangladesh_Bishoporicoy', 'Class 6'),
(3, 'Monday', 'Math', 'Physical Education', 'Bangla 1st', '1-HOUR Break', 'English 1st', 'Krishi Shikkha', 'Bangladesh_Bishoporicoy', 'Class 6'),
(4, 'Tuesday', 'Math', 'Information & Technology', 'English 2nd', '1-HOUR Break', 'Jibon o Kormo', 'Science', 'Carukarushikkha', 'Class 6'),
(5, 'Wednesday', 'Jibon o Kormo', 'Bangla 2nd', 'English 2nd', '1-HOUR Break', 'Science', 'Krishi Shikkha', 'Carukarushikkha', 'Class 6'),
(6, 'Thursday', 'Information & Technology', 'Physical Education', 'Bangla 2nd', '', '', '', '', 'Class 6'),
(7, 'Saturday', 'Bangla 1st', 'Math', 'Science', '1-HOUR Break', 'English 1st', 'Information & Technology', 'Carukarushikkha', 'Class 7'),
(8, 'Sunday', 'Bangla 1st', 'Math', 'Physical Education', '1-HOUR Break', 'English 1st', 'Science', 'Bangladesh_Bishoporicoy', 'Class 7'),
(9, 'Monday', 'Bangla 1st', 'Math', 'Science', '1-HOUR Break', 'English 1st', 'Physical Education', 'Information & Technology', 'Class 7'),
(10, 'Tuesday', 'Bangla 2nd', 'Science', 'Math', '1-HOUR Break', 'Bangladesh_Bishoporicoy', 'Dhormo_Shikha', 'Krishishikkha', 'Class 7'),
(11, 'Wednesday', 'Bangla 2nd', 'English 2nd', 'Bangladesh_Bishoporicoy', '1-HOUR Break', 'Dhormo_Shikha', 'Jibon o Kormo', 'Krishishikkha', 'Class 7'),
(12, 'Thursday', 'Jibon o Kormo', 'English 2nd', 'Bangladesh_Bishoporicoy', '', '', '', '', 'Class 7');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idno` int(10) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `religion` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbirth` date NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobileno` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idno`, `name`, `categories`, `address`, `religion`, `dateofbirth`, `gender`, `image`, `mobileno`) VALUES
(1, 'Asutosh chakroborty', 'Principle', 'Bordarhat', 'Sanatan', '2021-12-14', 'Male', 'employeePic/crackberry iak complete.jpg', '01852649803'),
(2, 'Josna Akter', 'Techer', 'chittagong', 'Islam', '1987-01-11', 'Female', 'studentpic/istockphoto-1268988213-612x612.jpg', '01547859635'),
(3, 'Borhan Uddin', 'Techer', 'chittagong', 'Islam', '1996-01-09', 'Male', 'studentpic/apple-touch-icon.png', '01547859634');

-- --------------------------------------------------------

--
-- Table structure for table `examgrades`
--

CREATE TABLE `examgrades` (
  `slno` int(11) NOT NULL,
  `rollno` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `promocls` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `grade` varchar(5) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule`
--

CREATE TABLE `exam_schedule` (
  `slno` int(11) NOT NULL,
  `examname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `subname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exam_schedule`
--

INSERT INTO `exam_schedule` (`slno`, `examname`, `subname`, `class`, `time`, `date`) VALUES
(1, 'Class Test', 'Bangla 1st', 'Class 6', '10:30am - 11:30am', '2022-01-08'),
(2, 'Class Test', 'English 1st', 'Class 7', '10:30am - 11:30am', '2022-01-08'),
(7, 'Class Test', 'Bangla 1st', 'Class 8', '10:30am - 11:30am', '2021-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `salarylist`
--

CREATE TABLE `salarylist` (
  `slno` int(11) NOT NULL,
  `idno` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `month` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `salary` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `salarylist`
--

INSERT INTO `salarylist` (`slno`, `idno`, `name`, `categories`, `month`, `gender`, `date`, `salary`) VALUES
(1, 220106001, 'Asutosh Chakroborty', 'Principle', 'January', 'Male', '2022-01-31', '50,000'),
(2, 220106002, 'Josna Akter', 'Techer', 'January', 'Female', '2022-01-31', '35,000'),
(3, 220106003, 'Abdul Kashem ', 'Others', 'January', 'Male', '2022-01-31', '17,500'),
(4, 220106004, 'Borhan Uddin', 'Techer', 'February', 'Male', '2022-02-28', '35,000'),
(5, 220106002, 'Josna Akter', 'Techer', 'February', 'Female', '2022-02-28', '35,000'),
(6, 220106003, 'Abdul Kashem ', 'Others', 'February', 'Male', '2022-02-28', '17,500'),
(7, 220106001, 'Asutosh chakroborty', 'Principle', 'March', 'Male', '2022-03-28', '50,000'),
(8, 220106005, 'Karim Mia', 'Others', 'January', 'Male', '2022-01-14', '17,500'),
(9, 220106004, 'Borhan Uddin', 'Techer', 'January', 'Male', '2022-01-06', '35,000'),
(12, 0, '', '', '', '', '0000-00-00', ''),
(13, 0, '', '', '', '', '0000-00-00', ''),
(14, 0, '', '', '', '', '0000-00-00', ''),
(15, 0, '', '', '', '', '0000-00-00', ''),
(16, 0, '', '', '', '', '0000-00-00', ''),
(17, 0, '', '', '', '', '0000-00-00', ''),
(18, 0, '', '', '', '', '0000-00-00', ''),
(19, 0, '', '', '', '', '0000-00-00', ''),
(20, 0, '', '', '', '', '0000-00-00', ''),
(21, 0, '', '', '', '', '0000-00-00', ''),
(22, 0, '', '', '', '', '0000-00-00', ''),
(23, 0, '', '', '', '', '0000-00-00', ''),
(24, 0, '', '', '', '', '0000-00-00', ''),
(25, 0, '', '', '', '', '0000-00-00', ''),
(26, 0, '', '', '', '', '0000-00-00', ''),
(27, 0, '', '', '', '', '0000-00-00', ''),
(28, 0, '', '', '', '', '0000-00-00', ''),
(29, 0, '', '', '', '', '0000-00-00', ''),
(30, 0, '', '', '', '', '0000-00-00', ''),
(31, 0, '', '', '', '', '0000-00-00', ''),
(32, 0, '', '', '', '', '0000-00-00', ''),
(33, 0, '', '', '', '', '0000-00-00', ''),
(34, 0, '', '', '', '', '0000-00-00', ''),
(35, 0, '', '', '', '', '0000-00-00', ''),
(36, 0, '', '', '', '', '0000-00-00', ''),
(37, 0, '', '', '', '', '0000-00-00', ''),
(38, 0, '', '', '', '', '0000-00-00', ''),
(39, 0, '', '', '', '', '0000-00-00', ''),
(40, 0, '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `students_fees_record`
--

CREATE TABLE `students_fees_record` (
  `slno` int(11) NOT NULL,
  `id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `rollno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fees_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `payments_status` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateoftransaction` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students_fees_record`
--

INSERT INTO `students_fees_record` (`slno`, `id`, `rollno`, `name`, `class`, `fees_type`, `gender`, `amount`, `payments_status`, `dateoftransaction`) VALUES
(4, '220108144700', '10', 'Indrajith Goswami', 'Class 10', 'Semester Fees', 'Male', 20000, 'Paid', '2022-01-09'),
(5, '220103172614', '27', 'Abdullah Al Maruf', 'Class 6', 'Semester Fees', '', 20000, 'Paid', '2022-01-09');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `vehicleno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `regno` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dateofbuy` date NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`vehicleno`, `regno`, `name`, `color`, `dateofbuy`, `image`) VALUES
('2154', 5487, 'NISSAN', 'Greed', '2021-12-29', 'vehicles/0507101A30170810W03012.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idno`);

--
-- Indexes for table `examgrades`
--
ALTER TABLE `examgrades`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `salarylist`
--
ALTER TABLE `salarylist`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `students_fees_record`
--
ALTER TABLE `students_fees_record`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`vehicleno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_routine`
--
ALTER TABLE `class_routine`
  MODIFY `serial_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `exam_schedule`
--
ALTER TABLE `exam_schedule`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `salarylist`
--
ALTER TABLE `salarylist`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `students_fees_record`
--
ALTER TABLE `students_fees_record`
  MODIFY `slno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
