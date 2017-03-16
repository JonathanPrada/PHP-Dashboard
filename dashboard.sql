-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 16, 2017 at 07:42 PM
-- Server version: 5.6.35
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `listid` int(11) NOT NULL,
  `listname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`listid`, `listname`) VALUES
(1, 'Cubera'),
(2, 'Horcrux'),
(3, 'Pirates'),
(4, 'test'),
(5, 'Club'),
(6, 'Trains'),
(7, 'Hope'),
(8, 'Beginning'),
(9, 'rwanda'),
(10, 'Handy'),
(11, 'what'),
(12, 'WARP'),
(13, 'Hololens'),
(14, 'magic'),
(15, 'Sorcerey'),
(16, 'comeon'),
(17, 'ths'),
(18, 'wowyers'),
(19, 'Anotherlist'),
(20, 'Gigi'),
(21, 'Close'),
(22, 'Blimey'),
(23, 'Twenty'),
(24, 'one'),
(25, 'Checking'),
(26, 'WORKPLZ'),
(27, 'Miracle'),
(28, 'Lucky'),
(29, 'Wonderful'),
(30, 'Powercup'),
(31, 'Congrats'),
(32, 'Combo'),
(33, 'test'),
(34, 'Saved'),
(35, 'still'),
(36, 'Zurich'),
(37, 'amazeballs'),
(38, 'superpower'),
(39, ''),
(40, 'Checker'),
(41, 'test'),
(42, 'Today'),
(43, 'coffee stuff');

-- --------------------------------------------------------

--
-- Table structure for table `savedlists`
--

CREATE TABLE `savedlists` (
  `listid` int(11) NOT NULL COMMENT 'Turn this into a primary key',
  `taskid` int(11) NOT NULL,
  `taskdescription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `savedlists`
--

INSERT INTO `savedlists` (`listid`, `taskid`, `taskdescription`) VALUES
(31, 1, 'First '),
(31, 2, 'Second '),
(31, 3, 'Third '),
(32, 4, 'First '),
(32, 5, 'Second '),
(32, 6, 'Third '),
(4, 7, 'First '),
(4, 8, 'Second '),
(4, 9, 'Third '),
(34, 10, 'First '),
(34, 11, 'Second '),
(34, 12, 'Third '),
(35, 13, 'First '),
(35, 14, 'Second '),
(35, 15, 'Third '),
(36, 16, 'First '),
(36, 17, 'Second '),
(36, 18, 'Third '),
(37, 19, 'First '),
(37, 20, 'Second '),
(37, 21, 'Third '),
(38, 22, 'First '),
(38, 23, 'Second '),
(38, 24, 'Third '),
(39, 25, 'First '),
(39, 26, 'Mango'),
(39, 27, 'Second '),
(39, 28, 'Third '),
(40, 29, 'First '),
(40, 30, 'Second '),
(40, 31, 'Third '),
(4, 32, 'First '),
(4, 33, 'Second '),
(4, 34, 'Third '),
(42, 35, 'First '),
(42, 36, 'Second '),
(42, 37, 'Read emails'),
(42, 38, 'Third '),
(43, 39, 'First '),
(43, 40, 'Stock on coffee'),
(43, 41, 'Send a report'),
(43, 42, 'Second '),
(43, 43, 'Third ');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `taskid` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskid`, `description`) VALUES
(1, 'Do workshop'),
(2, 'Send a report'),
(3, 'Request a meeting room'),
(4, 'Chair a meeting'),
(5, 'Delegate tasks'),
(6, 'Read emails'),
(7, 'Attend meetings'),
(8, 'Stock on coffee'),
(58, 'First '),
(59, 'Second '),
(60, 'Read emails'),
(61, 'Third '),
(62, 'First '),
(63, 'Stock on coffee'),
(64, 'Send a report'),
(65, 'Second '),
(66, 'Third ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`listid`);

--
-- Indexes for table `savedlists`
--
ALTER TABLE `savedlists`
  ADD PRIMARY KEY (`taskid`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`taskid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `listid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `savedlists`
--
ALTER TABLE `savedlists`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `taskid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
