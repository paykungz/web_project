-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 05, 2019 at 04:45 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(5) UNSIGNED ZEROFILL NOT NULL,
  `name` varchar(20) NOT NULL,
  `last` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `post_code` int(5) NOT NULL,
  `province` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `last`, `email`, `pass`, `gender`, `post_code`, `province`) VALUES
(00010, 'Chanoot', 'Srisarakam', 'epicz.ipayz@gmail.com', '1234', 'male', 10800, 'Bangkok'),
(00011, 'Thitipa', 'Premtong', 'may@mail.com', '263232', 'male', 10800, 'Bangkok'),
(00012, 'Petch', 'ja', 'petch@mail.com', 'abcd', 'male', 10800, 'Bangkok'),
(00013, 'Krit', 'fila', 'Krit@mail.com', 'fila', 'male', 10800, 'Bangkok'),
(00014, 'KUY', 'EIEI', 'EIEI@mail.com', '123456789', 'male', 99999, 'Bangkok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
