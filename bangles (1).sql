-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 01:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangles`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'heta shah', 'Heta@2003'),
(2, 'durva patel', 'Durva@2003'),
(3, 'kresha shah', 'Kresha@2003');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `choice` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `choice`) VALUES
(1, 'good'),
(2, 'good'),
(3, 'bad'),
(4, 'excellent'),
(5, 'excellent'),
(6, 'excellent'),
(7, 'good'),
(8, 'good'),
(9, 'bad'),
(10, 'bad'),
(11, ''),
(12, 'excellent'),
(13, 'bad'),
(14, 'good'),
(15, 'good'),
(16, 'good'),
(17, 'good'),
(18, 'excellent'),
(19, 'excellent'),
(20, 'excellent'),
(21, 'bad');

-- --------------------------------------------------------

--
-- Table structure for table `customize`
--

CREATE TABLE `customize` (
  `id` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `length` varchar(20) NOT NULL,
  `size` varchar(20) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customize`
--

INSERT INTO `customize` (`id`, `fname`, `lname`, `email`, `phone`, `length`, `size`, `color`) VALUES
(1, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.8 inch', ''),
(2, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.8 inch', ''),
(3, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue'),
(4, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue'),
(5, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue'),
(6, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue'),
(7, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue'),
(8, 'Durva', 'Patel', 'durva.patel2003@gmai', '9833454487', 'Short (12-18 Bangles', '2.10 inch', 'Blue');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` int(20) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fname`, `lname`, `email`, `mobile`, `feedback`) VALUES
('Durva', 'Patel', 'durva.patel2003', 21472222, 'Thank you for your service'),
('Durva', 'Patel', 'durva.patel2003@gmail.com', 2147483647, 'asdfghjkl'),
('Durva', 'Patel', 'durva.patel2003@gmail.com', 2147483647, 'asdfghjkl');

-- --------------------------------------------------------

--
-- Table structure for table `jhumkibangles`
--

CREATE TABLE `jhumkibangles` (
  `id` int(10) NOT NULL,
  `code` int(15) NOT NULL,
  `price` double NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jhumkibangles`
--

INSERT INTO `jhumkibangles` (`id`, `code`, `price`, `img`) VALUES
(1, 7891, 300, 'j1.jpg'),
(3, 7863, 200, 'j3.jpg'),
(4, 7864, 170, 'j4.jpg'),
(5, 7865, 155, 'j5.jpg'),
(6, 7866, 200, 'j6.jpg'),
(7, 7867, 170, 'j7.jpg'),
(8, 7868, 180, 'j8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paatla`
--

CREATE TABLE `paatla` (
  `id` int(11) NOT NULL,
  `code` int(15) NOT NULL,
  `price` int(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paatla`
--

INSERT INTO `paatla` (`id`, `code`, `price`, `img`) VALUES
(1, 2221, 380, 'p1.jpg'),
(2, 2222, 399, 'p2.jpg'),
(3, 2223, 299, 'p3.jpg'),
(4, 2224, 349, 'p4.jpg'),
(5, 2225, 389, 'p5.jpg'),
(6, 2226, 269, 'p6.jpg'),
(7, 2227, 298, 'p7.jpg'),
(8, 2228, 289, 'p8.jpg'),
(9, 2229, 279, 'p9.jpg'),
(10, 2230, 289, 'p10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `street` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `zip` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `street`, `city`, `state`, `zip`) VALUES
(1, 'asd', 'sdfg', 'asdf', 401202),
(2, 'asd', 'sdfg', 'asdf', 401202),
(3, 'asd', 'sdfg', 'asdf', 401202),
(4, 'qwe', 'qwe', 'qwe', 123),
(5, 'qwe', 'qwe', 'qwe', 123),
(6, 'asd', 'sdfg', 'asdf', 401202),
(7, 'asd', 'sdfg', 'asdf', 401202),
(8, 'asd', 'sdfg', 'asdf', 401202);

-- --------------------------------------------------------

--
-- Table structure for table `pearlbangles`
--

CREATE TABLE `pearlbangles` (
  `id` int(10) NOT NULL,
  `code` int(15) NOT NULL,
  `price` float NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pearlbangles`
--

INSERT INTO `pearlbangles` (`id`, `code`, `price`, `img`) VALUES
(1, 9678, 300, 'm1.jpg'),
(2, 9879, 155, 'm2.jpg'),
(3, 9680, 130, 'm3.jpg'),
(4, 9679, 70, 'm4.jpg'),
(5, 9860, 110, 'm5.jpg'),
(6, 9805, 170, 'm6.jpg'),
(7, 9880, 150, 'm7.jpg'),
(8, 9677, 120, 'm8.jpg'),
(9, 9045, 90, 'm9.jpg'),
(10, 9106, 100, 'm10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `setbangles`
--

CREATE TABLE `setbangles` (
  `id` int(11) NOT NULL,
  `code` int(15) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setbangles`
--

INSERT INTO `setbangles` (`id`, `code`, `img`, `price`) VALUES
(1, 6021, 's1.jpg', 190),
(2, 6022, 's2.jpg', 200),
(3, 6023, 's3.jpg', 140),
(4, 6024, 's4.jpg', 200),
(5, 6025, 's5.jpg', 130),
(6, 6026, 's6.jpg', 160),
(7, 6027, 's7.jpg', 145),
(8, 6028, 's8.jpg', 170),
(9, 6029, 's9.jpg', 210),
(10, 6030, 's10.jpg', 170);

-- --------------------------------------------------------

--
-- Table structure for table `threadbangles`
--

CREATE TABLE `threadbangles` (
  `id` int(11) NOT NULL,
  `code` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `threadbangles`
--

INSERT INTO `threadbangles` (`id`, `code`, `img`, `price`) VALUES
(3, 1911, 'th3.jpg', 40),
(4, 1904, 'th4.jpg', 70),
(5, 1905, 'th5.jpg', 80),
(6, 1906, 'th6.jpg', 90),
(7, 1907, 'th7.jpg', 300),
(8, 1908, 'th8.jpg', 499),
(9, 1909, 'th9.jpg', 499),
(10, 1910, 'th10.jpg', 399);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `password`, `date`, `image`) VALUES
(1, 'Durva', 'Patel', 'user', 'durva.patel2003@gmail.com', '$2y$04$1mPu/AiTwpUHziCmVgfsTOWCHNolGIuzr/Gpm1EOGCoGAvbIJDeSe', '2022-06-18', ''),
(2, 'Heta', 'Shah', 'hetaaaa', 'shahheta2209@gmail.com', '$2y$04$eNJ8qYUt0/2UZSMsKDlxSOa/L/Qpm3hGxTOx71A8kekGqdnnfKi22', '2022-06-18', ''),
(3, 'Durva', 'Patel', 'demo', 'Demo22@gmail.com', '$2y$04$q2YS8J6JEvpxK9eMYnSPZ.rzc8GqNCY.9/HkPwCA3s2753M78DjUy', '2022-06-19', '');

-- --------------------------------------------------------

--
-- Table structure for table `velvetbangles`
--

CREATE TABLE `velvetbangles` (
  `id` int(11) NOT NULL,
  `code` int(10) NOT NULL,
  `price` int(11) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `velvetbangles`
--

INSERT INTO `velvetbangles` (`id`, `code`, `price`, `img`) VALUES
(1, 9851, 300, 'v1.jpg'),
(2, 9852, 210, 'v2.jpg'),
(3, 9853, 170, 'v3.jpg'),
(4, 9854, 110, 'v4.jpg'),
(5, 210, 9855, 'v5.jpg'),
(6, 9856, 145, 'v6.jpg'),
(7, 9857, 170, 'v7.jpg'),
(8, 9858, 155, 'v8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customize`
--
ALTER TABLE `customize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jhumkibangles`
--
ALTER TABLE `jhumkibangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paatla`
--
ALTER TABLE `paatla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pearlbangles`
--
ALTER TABLE `pearlbangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setbangles`
--
ALTER TABLE `setbangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threadbangles`
--
ALTER TABLE `threadbangles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `velvetbangles`
--
ALTER TABLE `velvetbangles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customize`
--
ALTER TABLE `customize`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `jhumkibangles`
--
ALTER TABLE `jhumkibangles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `paatla`
--
ALTER TABLE `paatla`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pearlbangles`
--
ALTER TABLE `pearlbangles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `setbangles`
--
ALTER TABLE `setbangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `threadbangles`
--
ALTER TABLE `threadbangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `velvetbangles`
--
ALTER TABLE `velvetbangles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
