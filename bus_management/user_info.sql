-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 04:57 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus management`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `NAME` varchar(30) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `PHONE` varchar(15) NOT NULL,
  `PASSWORD` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`NAME`, `EMAIL`, `PHONE`, `PASSWORD`) VALUES
('Ahsan Khan', 'ahsankhan@yahoo.com', '01892929299', 'ahsan34'),
('Sharif Khan', 'sharifkhan@gmail.com', '01893211111', 'sharifk'),
('Itz Ahmed A', 'itzzahmed22@gmail.com', '01970000001', 'itzahmed'),
('Iztihad', 'izz@gmail.com', '01979014949', 'onnoy'),
('Imtiaz Adar', 'imtiaz231@gmail.com', '01979554646', 'imtiaz231'),
('Ali Riaz', 'aliriaz@gmail.com', '01993939333', 'aliriaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`PHONE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
