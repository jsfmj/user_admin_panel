-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 05:25 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blah`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Joseph', 'Mathew', 'jokury12@gmail.com', ''),
(2, 'Joseph', 'Mathew', 'jokury12@gmail.com', ''),
(3, 'sfgsg', 'hhh', 'jokury12@gmail.com', ''),
(4, 'sfgsg', 'hhh', 'jokury12@gmail.com', ''),
(5, 'y4h4uh4', 'tr4uu4y', 'jokury12@gmail.com', ''),
(6, 'Joseph', 'Mathew', 'jokury12@gmail.com', ''),
(7, 'riya', 'rj', 'riya@gmail.com', 'riya123'),
(8, 'Joseph', 'Mathew', 'jokury12@gmail.com', 'Cleo@2001'),
(9, 'thomas', 'sam', 'jokury12@gmail.com', 'dheghe'),
(10, 'thomas', 'sam', 'jokury12@gmail.com', 'tht4h'),
(11, 'emin', 'thomson', 'emin@gmail.com', 'emin123'),
(12, 'sona', 'rose', 'sona@gmail.com', 'sona123'),
(13, 'Joseph', 'Mathew', 'jokury12@gmail.com', 'Cleo@2001');

-- --------------------------------------------------------

--
-- Table structure for table `public_login`
--

CREATE TABLE `public_login` (
  `id` int(20) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `public_login`
--

INSERT INTO `public_login` (`id`, `first_name`, `last_name`, `email`, `gender`, `age`, `state`, `status`, `password`) VALUES
(19, 'Joseph', 'Mathew', 'jokury12@gmail.com', 'male', '22', 'kerala', 1, 'Cleo@2001'),
(20, 'Emin', 'Tomson', 'emin@gmail.com', 'female', '22', 'kerala', 1, 'emin123'),
(21, 'Joel', 'Sam', 'joel@gmail.com', 'male', '22', 'kerala', 1, 'joel123'),
(22, 'Thomas', 'Mathew', 'thomas@gmail.com', 'male', '22', 'kerala', 1, 'thomas123'),
(23, 'Riya', 'rj', 'riya@gmail.com', 'female', '19', 'kerala', 1, 'riya123'),
(24, 'Melwin', 'George', 'melwin@gmail.com', 'male', '23', 'kerala', 1, 'melwin123'),
(25, 'Sona', 'Binu', 'sona@gmail.com', 'female', '21', 'kerala', 1, 'sona123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_login`
--
ALTER TABLE `public_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `public_login`
--
ALTER TABLE `public_login`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
