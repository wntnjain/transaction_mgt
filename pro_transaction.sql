-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 08:50 PM
-- Server version: 5.7.16-0ubuntu0.16.04.1
-- PHP Version: 7.0.13-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_transaction`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(50) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `amount` float NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `reminder` int(1) NOT NULL,
  `recurring` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `date`, `title`, `type`, `amount`, `comment`, `status`, `reminder`, `recurring`) VALUES
(1, '2016-05-01', 'Testing 1', 'Income', 2000, 'nothing', 0, 0, ''),
(2, '2016-09-14', 'Testing 1', 'Income', 3000, 'for shopping', 1, 0, ''),
(3, '2016-05-12', 'Home page', 'Expenses', 60, 'gv', 0, 0, ''),
(4, '2016-05-12', 'Home page', 'Expenses', 59.65, 'gv', 1, 0, ''),
(5, '2016-05-12', 'Home page', 'Expenses', 59.651, 'gv', 0, 0, ''),
(6, '2016-09-14', 'Home page', 'Expenses', 59.651, 'gv', 1, 0, 'monthly'),
(7, '2016-05-21', 'vsv', 'Income', 1000, 'hello\r\n', 0, 0, ''),
(10, '2016-09-13', 'nitashu', 'Income', 15000, 'fgbn', 0, 1, 'monthly'),
(11, '2016-09-14', 'new', 'Expenses', 10000, 'new', 0, 1, 'monthly'),
(12, '2016-10-13', 'new income', 'Income', 4000, 'tbhv', 0, 1, 'monthly'),
(19, '2016-10-13', 'nitashu', 'Income', 15000, 'fgbn', 0, 1, 'monthly'),
(49, '2016-10-14', 'aaaa', 'Income', 15000, 'new tringgg', 0, 1, 'monthly'),
(244, '2016-10-14', 'Home page', 'Expenses', 59.651, 'gv', 1, 0, 'monthly');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
