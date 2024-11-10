-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 02:43 AM
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
-- Database: `bilanggo`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminn`
--

CREATE TABLE `adminn` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminn`
--

INSERT INTO `adminn` (`id`, `uname`, `pword`, `firstname`, `middlename`, `lastname`, `email`, `date_create`) VALUES
(8, 'Mirai', '$2y$10$5FhjrTOVXcIByZPOu.tqV.sJuwgk4EpamJk4YT.xZ5R', 'Mirai', 'M', 'Kuriyama', 'mkuriyama246@gmail.com', '2023-12-03 18:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `cell`
--

CREATE TABLE `cell` (
  `cell_id` int(11) NOT NULL,
  `cell_name` varchar(50) NOT NULL,
  `cell_status` tinyint(4) NOT NULL DEFAULT 1,
  `prisonid` int(11) NOT NULL,
  `cell_date_create` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cell`
--

INSERT INTO `cell` (`cell_id`, `cell_name`, `cell_status`, `prisonid`, `cell_date_create`) VALUES
(2, 'Neww', 1, 2, '2023-11-30 19:46:36'),
(3, 'Lock Ups', 1, 2, '2023-11-22 11:29:02'),
(8, 'Code 111', 1, 9, '2023-12-03 14:40:17'),
(9, 'bagong bago', 0, 15, '2023-12-03 21:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `inmate`
--

CREATE TABLE `inmate` (
  `inmate_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `statuss` varchar(50) NOT NULL,
  `street` varchar(50) NOT NULL,
  `barangay` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `prison_code` int(50) NOT NULL,
  `cellname` int(11) NOT NULL,
  `crime` varchar(50) NOT NULL,
  `sentence` varchar(50) NOT NULL,
  `tds` date NOT NULL,
  `tde` date NOT NULL,
  `in_date_create` datetime NOT NULL DEFAULT current_timestamp(),
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `prisonname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inmate`
--

INSERT INTO `inmate` (`inmate_id`, `lastname`, `firstname`, `middlename`, `bday`, `gender`, `statuss`, `street`, `barangay`, `municipality`, `province`, `country`, `prison_code`, `cellname`, `crime`, `sentence`, `tds`, `tde`, `in_date_create`, `file_name`, `file_path`, `prisonname`) VALUES
(2, 'Higashiyamaa', 'Erisa', 'H', '2023-11-01', 'Female', 'Single', 'Purok 3', 'San Jose Apunan', 'Lubao', 'Pampanga', 'Philippines', 12314241, 8, 'Murder', '10 Years', '2020-02-21', '2030-01-09', '2023-11-21 05:07:37', '', '', 2),
(3, 'Kuri', 'Miraiiii', 'Kuro', '2023-10-30', 'Male', 'Single', 'Purok 45', 'San Jose Apunan', 'Lubao', 'Pampanga', 'Philippines', 10101010, 3, 'Murder', '1 Year', '2020-02-19', '2023-11-23', '2023-11-21 07:40:46', '', '', 3),
(4, 'Boyce', 'Edith', 'Graciela', '2023-11-01', 'Male', '', 'Purok 451', 'Sto Domingo', 'Florida', 'Bataan', 'America', 21314, 2, 'Murder, Robbery', '5 Days', '2023-11-29', '2023-12-04', '2023-11-21 08:14:42', '', '', 3),
(6, 'Perayra', 'Laurence', 'Dasco', '2023-11-01', 'Male', '', 'Purok 255', 'San Nicolas', 'Sto Tomas', 'San Fernando', 'Philippines', 120412, 2, 'Murder', '10 years', '2023-11-01', '2023-12-01', '2023-11-21 13:39:56', '', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `jailer`
--

CREATE TABLE `jailer` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jailer`
--

INSERT INTO `jailer` (`id`, `uname`, `pword`, `firstname`, `middlename`, `lastname`, `email`, `date_create`) VALUES
(1, 'BEGGG', 'r8+K\'@P', 'Edith', 'Graciela', 'Boyceee', 'jafugreuddemme-4847@yopmail.com', '2023-11-20 10:55:45'),
(3, 'Admin', '$2y$10$anDCQdVIHfH9gILwrUa4Fun8Wqn/HoOA9Sl6I4vLdWH', 'Erisa', 'H', 'Higashiyama', 'erisa@gmail.com', '2023-12-03 17:12:53'),
(4, 'admin', '$2y$10$GQTj70Hi8HSJI/q19kJ2EOOmvkD/OL8o2OcxuaEm6yO', 'Nathen', 'Jajuan', 'Pelletier', 'fubeugadeive-6560@yopmail.com', '2023-12-03 17:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `officer`
--

CREATE TABLE `officer` (
  `id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pword` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `officer`
--

INSERT INTO `officer` (`id`, `uname`, `pword`, `firstname`, `middlename`, `lastname`, `email`, `date_create`) VALUES
(3, 'mirai', '$2y$10$Xcgxw/3/BPuZ2ZmUUaZQMOMMycdg5elhzfdP.qsVeoY', 'Mirai', 'M', 'Kuriyama', 'mkuriyama246@gmail.com', '2023-12-03 17:08:09'),
(4, 'mirai', '$2y$10$CaxWhPpTTB2Ou0OfN4ToIeKevfx0g7cM3zDpYeGXsyr', 'Edith', 'Graciela', 'Boyce', 'jafugreuddemme-4847@yopmail.com', '2023-12-03 17:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `prison`
--

CREATE TABLE `prison` (
  `prison_id` int(11) NOT NULL,
  `prison_name` varchar(50) NOT NULL,
  `prison_status` tinyint(20) NOT NULL DEFAULT 1,
  `date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prison`
--

INSERT INTO `prison` (`prison_id`, `prison_name`, `prison_status`, `date_create`) VALUES
(2, 'Male', 0, '2023-11-19 17:30:45'),
(3, 'Female', 1, '2023-11-19 19:26:48'),
(4, 'Iron Gate Max Security Prison', 1, '2023-11-20 09:55:13'),
(8, 'New File', 1, '2023-12-03 09:31:40'),
(9, 'Ghost', 0, '2023-12-03 10:04:01'),
(10, 'Ozama', 0, '2023-12-03 10:04:29'),
(11, 'East Blue', 0, '2023-12-03 10:04:57'),
(13, 'pass', 1, '2023-12-03 10:05:15'),
(14, 'soon', 1, '2023-12-03 10:38:56'),
(15, 'Female New', 0, '2023-12-03 21:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `vi_last` varchar(50) NOT NULL,
  `vi_first` varchar(50) NOT NULL,
  `vi_middle` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `inmateid` int(11) NOT NULL,
  `vi_date_create` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `vi_last`, `vi_first`, `vi_middle`, `relationship`, `contact`, `inmateid`, `vi_date_create`) VALUES
(1, 'Kuriyama', 'Mirai', 'm', 'sister', 9925355316, 12314241, '2023-11-21 13:58:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminn`
--
ALTER TABLE `adminn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cell`
--
ALTER TABLE `cell`
  ADD PRIMARY KEY (`cell_id`);

--
-- Indexes for table `inmate`
--
ALTER TABLE `inmate`
  ADD PRIMARY KEY (`inmate_id`);

--
-- Indexes for table `jailer`
--
ALTER TABLE `jailer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `officer`
--
ALTER TABLE `officer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prison`
--
ALTER TABLE `prison`
  ADD PRIMARY KEY (`prison_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminn`
--
ALTER TABLE `adminn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cell`
--
ALTER TABLE `cell`
  MODIFY `cell_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `inmate`
--
ALTER TABLE `inmate`
  MODIFY `inmate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jailer`
--
ALTER TABLE `jailer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `officer`
--
ALTER TABLE `officer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `prison`
--
ALTER TABLE `prison`
  MODIFY `prison_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
