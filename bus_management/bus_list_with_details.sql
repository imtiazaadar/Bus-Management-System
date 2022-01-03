-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2022 at 05:26 PM
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
-- Table structure for table `bus_list_with_details`
--

CREATE TABLE `bus_list_with_details` (
  `BUS_ID` varchar(30) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `TOTAL_SEATS` int(15) NOT NULL,
  `AVAILABLE_SEATS` int(15) NOT NULL,
  `PRICE` int(20) NOT NULL,
  `DESTINATION` varchar(70) NOT NULL,
  `START_TIME` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_list_with_details`
--

INSERT INTO `bus_list_with_details` (`BUS_ID`, `BRAND`, `STATUS`, `TOTAL_SEATS`, `AVAILABLE_SEATS`, `PRICE`, `DESTINATION`, `START_TIME`) VALUES
('e101', 'Ena', 'AC', 40, 26, 400, 'DHAKA-CHATTOGRAM', '13:30:00'),
('e102', 'Ena', 'AC', 30, 20, 300, 'DHAKA-SHLHET', '06:30:00'),
('e103', 'Ena', 'NON-AC', 50, 50, 800, 'DHAKA-COXS BAZAR', '02:45:00'),
('e104', 'Ena', 'NON-AC', 60, 60, 1200, 'COXS BAZAR-SYLHET', '14:20:00'),
('e105', 'Ena', 'AC', 50, 49, 500, 'CHATTOGRAM-COXS BAZAR', '15:10:00'),
('e106', 'Ena', 'AC', 60, 59, 600, 'CHATTOGRAM-DHAKA', '07:50:00'),
('e107', 'Ena', 'AC', 40, 40, 400, 'DHAKA-FENI', '20:30:00'),
('e108', 'Ena', 'AC', 50, 50, 400, 'FENI-CHATTOGRAM', '15:50:00'),
('e109', 'Ena', 'AC', 60, 60, 800, 'FENI-COXS BAZAR', '23:30:00'),
('e110', 'Ena', 'NON-AC', 40, 40, 300, 'FENI-DHAKA', '23:45:00'),
('e111', 'Ena', 'NON-AC', 50, 50, 800, 'COXS BAZAR-DHAKA', '00:10:00'),
('e112', 'Ena', 'NON-AC', 60, 60, 850, 'COXS BAZAR-FENI', '00:25:00'),
('e113', 'Ena', 'NON-AC', 40, 40, 400, 'COXS BAZAR-CHATTOGRAM', '01:10:00'),
('g101', 'Green Line', 'AC', 40, 40, 600, 'DHAKA-SYLHET', '07:40:00'),
('g102', 'Green Line', 'AC', 50, 50, 700, 'DHAKA-CHATTOGRAM', '07:35:00'),
('g103', 'Green Line', 'AC', 40, 40, 1000, 'DHAKA-SAJEK', '08:45:00'),
('g104', 'Green Line', 'AC', 60, 60, 1200, 'DHAKA-COXS BAZAR', '09:00:00'),
('g105', 'Green Line', 'AC', 45, 45, 600, 'COXS BAZAR-DHAKA', '10:20:00'),
('g106', 'Green Line', 'AC', 40, 40, 400, 'CHATTOGRAM-DHAKA', '10:40:00'),
('g107', 'Green Line', 'AC', 55, 55, 900, 'SAJEK-DHAKA', '11:10:00'),
('g108', 'Green Line', 'AC', 54, 54, 1200, 'SYLHET-DHAKA', '12:40:00'),
('h101', 'Hanif', 'AC', 40, 40, 400, 'DHAKA-CHATTOGRAM', '13:35:00'),
('h102', 'Hanif', 'AC', 30, 30, 300, 'DHAKA-SHLHET', '14:25:00'),
('h103', 'Hanif', 'NON-AC', 50, 50, 350, 'DHAKA-COXS BAZAR', '14:15:00'),
('h104', 'Hanif', 'NON-AC', 60, 60, 550, 'COXS BAZAR-SYLHET', '19:30:00'),
('h105', 'Hanif', 'AC', 50, 50, 500, 'CHATTOGRAM-COXS BAZAR', '16:28:00'),
('h106', 'Hanif', 'AC', 60, 60, 600, 'JESSORE-DHAKA', '15:52:00'),
('h107', 'Hanif', 'AC', 55, 55, 800, 'COXS BAZAR-DHAKA', '17:00:00'),
('h108', 'Hanif', 'AC', 40, 40, 400, 'CHATTOGRAM-DHAKA', '17:05:00'),
('h109', 'Hanif', 'AC', 30, 30, 300, 'JESSORE-DHAKA', '17:15:00'),
('s101', 'Star Line', 'AC', 40, 40, 400, 'DHAKA-FENI', '18:36:00'),
('s102', 'Star Line', 'AC', 50, 50, 400, 'FENI-CHATTOGRAM', '18:40:00'),
('s103', 'Star Line', 'AC', 60, 60, 800, 'FENI-COXS BAZAR', '18:55:00'),
('s104', 'Star Line', 'NON-AC', 40, 40, 300, 'FENI-DHAKA', '19:23:00'),
('s105', 'Star Line', 'NON-AC', 50, 50, 400, 'FENI-CHATTOGRAM', '20:14:00'),
('s106', 'Star Line', 'NON-AC', 30, 30, 750, 'FENI-COXS BAZAR', '20:56:00'),
('s110', 'Star Line', 'NON-AC', 40, 40, 300, 'DHAKA-FENI', '21:12:00'),
('s111', 'Star Line', 'NON-AC', 50, 50, 400, 'DHAKA-CHATTOGRAM', '21:25:00'),
('s112', 'Star Line', 'NON-AC', 40, 40, 800, 'DHAKA-COXS BAZAR', '21:58:00'),
('s113', 'Star Line', 'AC', 50, 50, 450, 'DHAKA-CHATTOGRAM', '22:22:00'),
('s114', 'Star Line', 'NON-AC', 40, 40, 800, 'DHAKA-COXS BAZAR', '22:38:00'),
('s115', 'Star Line', 'NON-AC', 50, 50, 400, 'DHAKA-CHATTOGRAM', '23:01:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
