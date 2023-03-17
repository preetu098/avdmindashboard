-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2023 at 11:32 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(15) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `date`) VALUES
(1, 'admin@gmail.com', 'admin123', '2021-02-27');

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
-- Table structure for table `recharge_details`
--

CREATE TABLE `recharge_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recharge_amount` decimal(32,2) NOT NULL,
  `upi` varchar(255) NOT NULL,
  `transaction_number` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recharge_details`
--

INSERT INTO `recharge_details` (`id`, `user_id`, `recharge_amount`, `upi`, `transaction_number`, `status`, `updated_at`) VALUES
(1, 1, '500.00', 'asifdev5@hdfcok', '545656767678', -2, '2023-03-16 09:52:12'),
(2, 5, '1985.40', 'asifdev5@hdfcok', '562329877777', 3, '2023-03-16 13:24:20'),
(3, 5, '500.00', 'asifdev5@hdfcok', '562329877777', 2, '2023-03-16 13:49:35'),
(4, 5, '1000.00', 'asifdev5@hdfcok', '562326756767', 2, '2023-03-16 14:25:24');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `password`, `otp`, `status`, `updated_on`) VALUES
(1, 'Arsh', '9589642080', 'Ars@3sss', 'ds', 1, '0000-00-00 00:00:00'),
(3, 'Radha', '9876543210', '1234', 'ds', 1, '2023-03-04 00:00:00'),
(5, 'aasif ahmed', '8878326802', 'Almas2a', '978', 1, '2023-03-14 06:11:48'),
(6, 'brijlal pawar', '8224939597', '4482', '6353', 1, '2023-03-16 12:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_bank_details`
--

CREATE TABLE `user_bank_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `ifsc` varchar(255) NOT NULL,
  `account` varchar(255) NOT NULL,
  `upi` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_bank_details`
--

INSERT INTO `user_bank_details` (`id`, `user_id`, `name`, `bank`, `ifsc`, `account`, `upi`, `state`, `city`, `address`, `mobile`, `email`, `updated_at`) VALUES
(1, 0, 'aasif ahmed', 'hdfc', 'indb0000011', '5454', 'asifdev5@hdfcok', 'mp', 'indore', 'azad nagar indore 452001', '5465434534', 'ankita@hotmail.com', '2023-03-16 12:08:52'),
(2, 0, 'aasif', 'hdfc', 'indb0000011', '545345453543544545343434343434343434343434343434343434', 'asifdev5@hdfcok', 'mp', 'indore', 'azad nagar indore 452001', '543535', 'aasifdev5@gmail.com', '2023-03-16 13:53:56'),
(3, 0, 'aasif ahmed', 'hdfc', 'indb0000011', '23424', 'asifdev5@hdfcok', 'mp', 'indore', 'azad nagar indore 452001', '32423432434', 'aasifdev5@gmail.com', '2023-03-16 13:55:58'),
(4, 5, 'ankita', 'hdfc', 'hdfc00015', '34', 'arsh@hdfc', 'mp', 'indore', 'azad nagar indore 452001', '3434343', 'aasifdev5@gmail.com', '2023-03-16 14:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `withdraw_details`
--

CREATE TABLE `withdraw_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `acid` int(11) NOT NULL,
  `user_amount` decimal(32,2) NOT NULL,
  `withdraw_fees` decimal(32,2) NOT NULL,
  `withdraw_amount` decimal(32,2) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdraw_details`
--

INSERT INTO `withdraw_details` (`id`, `user_id`, `acid`, `user_amount`, `withdraw_fees`, `withdraw_amount`, `status`, `updated_on`) VALUES
(1, 5, 4, '567.00', '0.00', '538.65', -2, '2023-03-17 10:29:46'),
(3, 5, 4, '534.00', '26.70', '507.30', 2, '2023-03-17 10:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `amount_setup`
--
ALTER TABLE `amount_setup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recharge_details`
--
ALTER TABLE `recharge_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upi_details`
--
ALTER TABLE `upi_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_bank_details`
--
ALTER TABLE `user_bank_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `withdraw_details`
--
ALTER TABLE `withdraw_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `amount_setup`
--
ALTER TABLE `amount_setup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recharge_details`
--
ALTER TABLE `recharge_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `upi_details`
--
ALTER TABLE `upi_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_bank_details`
--
ALTER TABLE `user_bank_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `withdraw_details`
--
ALTER TABLE `withdraw_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
