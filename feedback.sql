-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2018 at 12:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `pro_Des`
--

CREATE TABLE `pro_Des` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `Des` longtext NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pro_Des`
--

INSERT INTO `pro_Des` (`id`, `name`, `Des`, `image`) VALUES
('ap_1', 'apple', ' rqdfsfsfs', 0x57686963682d4170706c652d50726f64756374732d53686f756c642d596f752d4275792d676561722d706174726f6c2d4970686f6e652d582e6a7067),
('cam_32', 'camera', ' model : iphone\r\ncolor : black\r\ninfinity display', ''),
('wt_1', 'smart watch', ' model : iphone\r\ncolor : black\r\ninfinity display', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `admin` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`email`, `name`, `password`, `admin`) VALUES
('abc@gmail.com', 'abc', 'abc', 'null'),
('bcd@gmail.com', 'bcd', 'bdfgrt', 'null'),
('admin@gmail.com', 'admin', 'admin', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `username` varchar(30) NOT NULL,
  `id` varchar(10) NOT NULL,
  `rating` int(5) NOT NULL,
  `Des` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pro_Des`
--
ALTER TABLE `pro_Des`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
