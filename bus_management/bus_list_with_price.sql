-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2021 at 12:50 PM
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
-- Table structure for table `bus_list_with_price`
--

CREATE TABLE `bus_list_with_price` (
  `BUS_ID` varchar(30) NOT NULL,
  `BRAND` varchar(30) NOT NULL,
  `STATUS` varchar(50) NOT NULL,
  `TOTAL_SEATS` int(15) NOT NULL,
  `PRICE` int(20) NOT NULL,
  `DESTINATION` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus_list_with_price`
--

INSERT INTO `bus_list_with_price` (`BUS_ID`, `BRAND`, `STATUS`, `TOTAL_SEATS`, `PRICE`, `DESTINATION`) VALUES
('e101', 'Ena', 'AC', 40, 400, 'DHAKA-CHATTOGRAM'),
('e102', 'Ena', 'AC', 30, 300, 'DHAKA-SHLHET'),
('e103', 'Ena', 'NON-AC', 50, 800, 'DHAKA-COXS BAZAR'),
('e104', 'Ena', 'NON-AC', 60, 1200, 'COXS BAZAR-SYLHET'),
('e105', 'Ena', 'AC', 50, 500, 'CHATTOGRAM-COXS BAZAR'),
('e106', 'Ena', 'AC', 60, 600, 'CHATTOGRAM-DHAKA'),
('e107', 'Ena', 'AC', 40, 400, 'DHAKA-FENI'),
('e108', 'Ena', 'AC', 50, 400, 'FENI-CHATTOGRAM'),
('e109', 'Ena', 'AC', 60, 800, 'FENI-COXS BAZAR'),
('e110', 'Ena', 'NON-AC', 40, 300, 'FENI-DHAKA'),
('e111', 'Ena', 'NON-AC', 50, 800, 'COXS BAZAR-DHAKA'),
('e112', 'Ena', 'NON-AC', 60, 850, 'COXS BAZAR-FENI'),
('e113', 'Ena', 'NON-AC', 40, 400, 'COXS BAZAR-CHATTOGRAM'),
('g101', 'Green Line', 'AC', 40, 600, 'DHAKA-SYLHET'),
('g102', 'Green Line', 'AC', 50, 700, 'DHAKA-CHATTOGRAM'),
('g103', 'Green Line', 'AC', 40, 1000, 'DHAKA-SAJEK'),
('g104', 'Green Line', 'AC', 60, 1200, 'DHAKA-COXS BAZAR'),
('g105', 'Green Line', 'AC', 45, 600, 'COXS BAZAR-DHAKA'),
('g106', 'Green Line', 'AC', 40, 400, 'CHATTOGRAM-DHAKA'),
('g107', 'Green Line', 'AC', 55, 900, 'SAJEK-DHAKA'),
('g108', 'Green Line', 'AC', 54, 1200, 'SYLHET-DHAKA'),
('h101', 'Hanif', 'AC', 40, 400, 'DHAKA-CHATTOGRAM'),
('h102', 'Hanif', 'AC', 30, 300, 'DHAKA-SHLHET'),
('h103', 'Hanif', 'NON-AC', 50, 350, 'DHAKA-COXS BAZAR'),
('h104', 'Hanif', 'NON-AC', 60, 550, 'COXS BAZAR-SYLHET'),
('h105', 'Hanif', 'AC', 50, 500, 'CHATTOGRAM-COXS BAZAR'),
('h106', 'Hanif', 'AC', 60, 600, 'JESSORE-DHAKA'),
('h107', 'Hanif', 'AC', 55, 800, 'COXS BAZAR-DHAKA'),
('h108', 'Hanif', 'AC', 40, 400, 'CHATTOGRAM-DHAKA'),
('h109', 'Hanif', 'AC', 30, 300, 'JESSORE-DHAKA'),
('s101', 'Star Line', 'AC', 40, 400, 'DHAKA-FENI'),
('s102', 'Star Line', 'AC', 50, 400, 'FENI-CHATTOGRAM'),
('s103', 'Star Line', 'AC', 60, 800, 'FENI-COXS BAZAR'),
('s104', 'Star Line', 'NON-AC', 40, 300, 'FENI-DHAKA'),
('s105', 'Star Line', 'NON-AC', 50, 400, 'FENI-CHATTOGRAM'),
('s106', 'Star Line', 'NON-AC', 30, 750, 'FENI-COXS BAZAR'),
('s110', 'Star Line', 'NON-AC', 40, 300, 'DHAKA-FENI'),
('s111', 'Star Line', 'NON-AC', 50, 400, 'DHAKA-CHATTOGRAM'),
('s112', 'Star Line', 'NON-AC', 40, 800, 'DHAKA-COXS BAZAR'),
('s113', 'Star Line', 'AC', 50, 450, 'DHAKA-CHATTOGRAM'),
('s114', 'Star Line', 'NON-AC', 40, 800, 'DHAKA-COXS BAZAR'),
('s115', 'Star Line', 'NON-AC', 50, 400, 'DHAKA-CHATTOGRAM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus_list_with_price`
--
ALTER TABLE `bus_list_with_price`
  ADD PRIMARY KEY (`BUS_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
