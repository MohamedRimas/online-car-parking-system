-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2021 at 05:53 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `automated_parking`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `Location_Id` int(10) NOT NULL,
  `Location_Name` char(50) NOT NULL,
  `Description` char(100) NOT NULL,
  `Hourly_Price` int(11) NOT NULL,
  `Monthly_Price` int(11) NOT NULL,
  `Image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`Location_Id`, `Location_Name`, `Description`, `Hourly_Price`, `Monthly_Price`, `Image`) VALUES
(17, ' Mall Car Park', 'Narahenpita Road Colombo 800m away', 450, 2500, 'park3.jfif '),
(20, 'Nugedoda', 'High Level Road,Nugegoda', 100, 1000, ''),
(21, 'Parking Lot CRS 7HR', 'Nugegoda Shopping Center', 250, 1500, ''),
(22, ' Parking Lot WFH 7HR', 'Kirulapana Market Car park750m away', 350, 3500, '');





-- --------------------------------------------------------

--
-- Table structure for table `registered_payment`
--

CREATE TABLE `registered_payment` (
  `pay_idR` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL,
  `card` enum('Visa','Mastercard','PayPal','Discover') NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_payment`
--

INSERT INTO `registered_payment` (`pay_idR`, `email`, `password`, `card`, `payment_date`) VALUES
(1, 'vinu@gmail.com', 'qwerty', 'Visa', '2021-10-10 20:08:15'),
(2, 'dinuka@yahoo.com', 'poiu5y6', 'Visa', '2021-10-10 20:09:39'),
(3, 'carrie@gmail.com', 'asd3f2g', 'Mastercard', '2021-10-10 21:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `unregistered_payment`
--

CREATE TABLE `unregistered_payment` (
  `pay_id` int(11) NOT NULL,
  `fullname` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenum` bigint(10) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `card` enum('Visa','Mastercard','PayPal','Discover') NOT NULL,
  `payment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `unregistered_payment`
--

INSERT INTO `unregistered_payment` (`pay_id`, `fullname`, `email`, `phonenum`, `postalcode`, `card`, `payment_date`) VALUES
(1, 'Sam Perera', 'sam@yahoo.com', 778888888, 12345, 'Visa', '2021-10-10 19:52:36'),
(2, 'Dan Green', 'dangreen@gmail.com', 717777777, 54321, 'Mastercard', '2021-10-10 20:04:51'),
(3, 'Milan De Silva', 'milandesilva@hotmail.com', 723456788, 11111, 'PayPal', '2021-10-10 20:07:05'),
(4, 'Vinuka Dias', 'vinuka@yahoo.com', 766666666, 11111, 'Visa', '2021-10-10 21:11:20'),
(5, 'Nimali Weerakoon', 'nimali@gmail.com', 717777777, 12222, 'Visa', '2021-10-10 21:14:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`Location_Id`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_payment`
--
ALTER TABLE `registered_payment`
  ADD PRIMARY KEY (`pay_idR`);

--
-- Indexes for table `unregistered_payment`
--
ALTER TABLE `unregistered_payment`
  ADD PRIMARY KEY (`pay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `Location_Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `registered_payment`
--
ALTER TABLE `registered_payment`
  MODIFY `pay_idR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `unregistered_payment`
--
ALTER TABLE `unregistered_payment`
  MODIFY `pay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
