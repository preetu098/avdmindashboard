-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2023 at 07:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aviator`
--

-- --------------------------------------------------------

--
-- Table structure for table `amount_setup`
--

CREATE TABLE `amount_setup` (
  `id` int(11) NOT NULL,
  `mra` decimal(32,2) NOT NULL,
  `mwa` decimal(32,2) NOT NULL,
  `ib` decimal(32,2) NOT NULL,
  `rb` decimal(32,2) NOT NULL,
  `level1` int(11) NOT NULL,
  `level2` int(11) NOT NULL,
  `level3` int(11) NOT NULL,
  `wagar` int(11) NOT NULL,
  `regbonus` int(11) NOT NULL,
  `withdrawal_status` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amount_setup`
--

INSERT INTO `amount_setup` (`id`, `mra`, `mwa`, `ib`, `rb`, `level1`, `level2`, `level3`, `wagar`, `regbonus`, `withdrawal_status`, `updated_at`) VALUES
(1, '7568.00', '356.00', '356.00', '4.00', 3, 2, 5, 5, 356, 'on', '2023-03-16 07:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `upi_details`
--

CREATE TABLE `upi_details` (
  `id` int(11) NOT NULL,
  `upi` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upi_details`
--

INSERT INTO `upi_details` (`id`, `upi`, `updated_at`) VALUES
(1, 'asifdev5@hdfcok', '2023-03-16 07:54:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount_setup`
--
ALTER TABLE `amount_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upi_details`
--
ALTER TABLE `upi_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amount_setup`
--
ALTER TABLE `amount_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upi_details`
--
ALTER TABLE `upi_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
