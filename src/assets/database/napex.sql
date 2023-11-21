-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2023 at 05:52 PM
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
-- Database: `login_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration_data`
--

CREATE TABLE `registration_data` (
  `mobileNumber` int(12) NOT NULL,
  `registrationNumber` varchar(45) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--




CREATE TABLE `death` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `deceased_fname` varchar(255) NOT NULL,
    `deceased_lname` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `gender` varchar(255) NOT NULL,
    `birth_date` date NOT NULL,
    `country_birth` varchar(255) NOT NULL,
    `death_date` date NOT NULL,
    `country_death` varchar(255) NOT NULL,
    `death_place` VARCHAR(255) NOT NULL,
    `birth_place` varchar(255) NOT NULL,
    `funeral_home` varchar(255) NOT NULL,
    `contact_person` varchar(255) NOT NULL,
    `contact_no` int(255) NOT NULL,
    `funeral_service_date` date NOT NULL,
    `funeral_service_time` varchar(255) NOT NULL,
    `funeral_service_location` varchar(255) NOT NULL,
    `worship_name` varchar(255) NOT NULL,
    `burial_date` date NOT NULL,
    `burial_time` varchar(255) NOT NULL,
    `burial_location` VARCHAR(255) NOT NULL,
    `county` varchar(255) NOT NULL,
    `quote` varchar(255) NOT NULL,
    `obiturary_info` varchar(7000) NOT NULL,
    `created` date NOT NULL,
      PRIMARY KEY (id)
);
--
-- Dumping data for table `users`
--



--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--


--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;