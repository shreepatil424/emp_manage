-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2021 at 07:07 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emp_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `zipcode` varchar(8) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `avatar` varchar(500) NOT NULL,
  `active_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `fname`, `lname`, `designation`, `birthdate`, `age`, `email`, `mobile`, `address`, `city`, `country`, `zipcode`, `password`, `cpassword`, `avatar`, `active_status`) VALUES
(13, 'Kameko Hatfield', 'Signe Preston', 'Php Developer', '13-11-1991', 30, 'wecup@mailinator.com', '8585858585', '', '', '', '', '7a21f06ab31f3698d1ea224d03cf6a32', '7a21f06ab31f3698d1ea224d03cf6a32', 'http://localhost/emp_manage/uploads/test7.jpg', 1),
(14, 'shreekant', 'jadhav', 'Php Developer', '13-11-1990', 31, 'shree.jadhav@gmail.com', '9595331635', 'the President\'s Inaugural speech. 123 Main Street, New York, NY 10030', 'New York', 'USA', '10030', 'fc09d82c4029e77278e65c437c9a697f', 'fc09d82c4029e77278e65c437c9a697f', 'http://localhost/emp_manage/uploads/test8.jpg', 1),
(15, 'Connor Langley', 'Halee Dennis', 'Dolore quis qui nihi', '10-07-1996', 25, 'cusipufyk@mailinator.com', '7787877878', '', '', '', '', 'e99b9175204085df959c0e56f2011587', 'e99b9175204085df959c0e56f2011587', 'http://localhost/emp_manage/uploads/test9.jpg', 1),
(16, 'Ajit ', 'Langley', 'Dolore quis qui nihi', '14-06-1990', 31, 'ajit@mailinator.com', '7787878787', '', '', '', '', '047ff852e1b44563f919223e37da957d', '047ff852e1b44563f919223e37da957d', 'http://localhost/emp_manage/uploads/test10.jpg', 1),
(17, 'Rahul', 'Shinde', 'Dolore quis qui nihi', '17-07-1974', 47, 'Rahul@mailinator.com', '9595953310', '', '', '', '', 'ce59f8d73cddec53bea6a8d808c3d816', 'ce59f8d73cddec53bea6a8d808c3d816', 'http://localhost/emp_manage/uploads/test11.jpg', 1),
(18, 'ManoJ', 'Shinde', 'PHP DEVELOPER', '15-06-1967', 54, 'ManoJ@mailinator.com', '9595953311', '', '', '', '', 'ce938f4e355904f9abe183aa92aefb86', 'ce938f4e355904f9abe183aa92aefb86', 'http://localhost/emp_manage/uploads/test12.jpg', 1),
(19, 'Steven', 'Jobs', 'PHP DEVELOPER', '15-06-1967', 54, 'Steven@mailinator.com', '9595953311', '', '', '', '', 'ce938f4e355904f9abe183aa92aefb86', 'ce938f4e355904f9abe183aa92aefb86', 'http://localhost/emp_manage/uploads/test13.jpg', 1),
(20, 'Ganesh', 'shende', 'PHP DEVELOPER', '11-06-1957', 64, 'Ganesh@mailinator.com', '9595953313', '', '', '', '', 'ce938f4e355904f9abe183aa92aefb86', 'ce938f4e355904f9abe183aa92aefb86', 'http://localhost/emp_manage/uploads/test14.jpg', 1),
(21, 'Abhijeet', 'Patil', 'PHP DEVELOPER', '11-06-1957', 64, 'Abhijeet@mailinator.com', '9595953333', '', '', '', '', '7eaed652e88b52f6331ea4d343b8036d', '7eaed652e88b52f6331ea4d343b8036d', 'http://localhost/emp_manage/uploads/test15.jpg', 1),
(22, 'Rudhra', 'Patil', 'PHP DEVELOPER', '11-06-1957', 64, 'Rudhra@mailinator.com', '9595953366', 'Sanjeevany Hospital Barshi ', 'Barshi', 'India', '412424', '99df969d5a6baf83bde949d279277f8b', '99df969d5a6baf83bde949d279277f8b', 'http://localhost/emp_manage/uploads/test16.jpg', 1),
(23, 'Viraj', 'Patil', 'PHP DEVELOPER', '23-06-1954', 67, 'Viraj@mailinator.com', '9595953355', 'Solapur Pune Hiway , Shetphal', 'Solapur', 'India', '413414', 'eb3f9f0d046e694660c752292a88bf47', 'eb3f9f0d046e694660c752292a88bf47', 'http://localhost/emp_manage/uploads/test17.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
