-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 02, 2019 at 04:42 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(10) NOT NULL,
  `dept_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(1, 'FINANCE'),
(2, 'MARKETING'),
(3, 'R&D'),
(4, 'DEVELOPERS'),
(5, 'RESOURCES'),
(6, 'DATA ANALYSIS'),
(7, 'UI/UX');

-- --------------------------------------------------------

--
-- Table structure for table `mail_heads`
--

CREATE TABLE `mail_heads` (
  `msg_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mail_heads`
--

INSERT INTO `mail_heads` (`msg_id`, `email`, `message`, `user_id`) VALUES
(1, '', 'message', 103),
(2, 'navrajkhanal61@gmail.com', 'message', 103),
(3, 'navrajkhanal61@gmail.com', 'message', 103),
(4, 'navrajkhanal61@gmail.com', 'message', 103),
(5, 'navrajkhanal61@gmail.com', 'message', 103),
(6, 'navrajkhanal61@gmail.com', 'message', 103),
(7, 'tenzing@mail.com', 'message', 93),
(8, 'navrajkhanal61@gmail.com', 'message', 107),
(9, 'tenzing@mail.com', 'message', 1);

-- --------------------------------------------------------

--
-- Table structure for table `record_staff`
--

CREATE TABLE `record_staff` (
  `staff_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `num` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dept_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record_staff`
--

INSERT INTO `record_staff` (`staff_id`, `user_id`, `name`, `email`, `address`, `num`, `salary`, `position`, `dept_id`) VALUES
(5, 1, 'Santosh Parajuli', 'nav@mail.co', 'Ghattekulo', '9801187654', '10000', 'Full Stack Developer', 2),
(6, 1, 'Karma', 'karma@mail.co', 'swuyambhu', '9846023816', '12500', 'App developer', 2),
(9, 2, 'Navuwa', 'navrajkhanal61@gmail.com', 'Koraline', '98460852136', '21500', 'App developer', 1),
(10, 3, 'NavuwaRaj', 'navrajkhanal61@gmail.com', 'Alabama', '77888555588888', '27500', 'App developer', 3),
(11, 4, 'Miyazaki', 'navrajkhanal61@gmail.com', 'Tokyo', '789789789', '32500', 'Senior developer', 2),
(12, 5, 'Taken Raj', 'navrajkhanal61@gmail.com', 'Torronto', '844665656565', '75250', 'Full Stack Developer', 2),
(13, 7, 'Bijaya Shrestha', 'bijayshrestha@gmail.com', 'Naya Bato', '98789558552', '2500000', 'Web Designer', 0),
(15, 4, 'Hari', 'navrajkhanal61@gmail.com', 'Pepsicola', '98785222222', '7522222', 'Designer', 0);

-- --------------------------------------------------------

--
-- Table structure for table `reg_user`
--

CREATE TABLE `reg_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `vkey` varchar(255) NOT NULL,
  `verified` tinyint(1) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_user`
--

INSERT INTO `reg_user` (`id`, `name`, `email`, `department`, `password`, `vkey`, `verified`, `time`) VALUES
(1, 'Tenzing Dorzee', 'tenzing@mail.com', 'R&amp;D', '22af645d1859cb5ca6da0c484f1f37ea', '0e6a7b2ce6c83b0bcd65a20824bb225f', 1, '2019-09-01 15:51:25.591787'),
(2, 'Animesh Chaudhary', ' animesh@mail.com', 'FINANCE', '22af645d1859cb5ca6da0c484f1f37ea', 'c27b97a6ef40b5730c872b3c4593a55d', 1, '2019-07-23 07:06:04.231892'),
(3, 'Sijan Ghimire', ' sija@mail.com', 'DATA ANALYSIS', '22af645d1859cb5ca6da0c484f1f37ea', '54b065fbf9c7de37dbfa0b46fa72c4c5', 1, '2019-07-23 07:06:17.736947'),
(4, 'Santosh Parajuli', 'santosh@mail.com', 'MARKETING', '22af645d1859cb5ca6da0c484f1f37ea', 'c33d81be1f8f1d71971924d5e1389ecd', 1, '2019-07-23 07:06:56.005874'),
(5, 'Ashim Thapa', 'ashim@mail.com', 'DEVELOPERS', '22af645d1859cb5ca6da0c484f1f37ea', 'e4525168fc0754375b496a15296dbe61', 1, '2019-07-23 07:07:01.738543'),
(6, 'Navraj Khanal', 'navrajkhanal61@gmail.com', 'RESOURCES', '22af645d1859cb5ca6da0c484f1f37ea', '5ca0fdcb8eb523c25e243ce1890b3d97', 1, '2019-07-23 07:07:06.747303'),
(7, 'Ghanashyam Shakya', 'ghana.shakya@gmail.com', 'UI/UX', '22af645d1859cb5ca6da0c484f1f37ea', '655742b9cef1429aaa233cb4fed1e411', 1, '2019-09-01 13:22:52.995381'),
(8, 'Ghanashyam Shakya', 'nav@gmail.com', 'UI/UX', '22af645d1859cb5ca6da0c484f1f37ea', 'b966974441b7f2f95ebe00ed1e43f518', 0, '2019-09-02 02:03:03.286741'),
(9, 'Sijan Ghimire', 'sijan.ghimire29@gmail.com', 'UI/UX', '22af645d1859cb5ca6da0c484f1f37ea', '6f7d4f3d74f34997d31fd96171203bab', 0, '2019-09-02 02:04:10.030222'),
(10, 'Santosh Parajuli', 'navrajkhanal61@gmail.com', 'UI/UX', '22af645d1859cb5ca6da0c484f1f37ea', '041b2f9229483b334b96c079f6c2f508', 0, '2019-09-02 02:13:09.578068');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `mail_heads`
--
ALTER TABLE `mail_heads`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `record_staff`
--
ALTER TABLE `record_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `reg_user`
--
ALTER TABLE `reg_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mail_heads`
--
ALTER TABLE `mail_heads`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `record_staff`
--
ALTER TABLE `record_staff`
  MODIFY `staff_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `reg_user`
--
ALTER TABLE `reg_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
