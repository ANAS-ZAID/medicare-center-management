-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 22 أكتوبر 2024 الساعة 17:33
-- إصدار الخادم: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `center_mohammed_sinan`
--

-- --------------------------------------------------------

--
-- بنية الجدول `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `isAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `isSupAdmin` tinyint(1) NOT NULL DEFAULT 0,
  `debtor` float NOT NULL DEFAULT 0,
  `creditor` float NOT NULL DEFAULT 0,
  `palance` float NOT NULL DEFAULT 0,
  `registerStatus` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `isAdmin`, `isSupAdmin`, `debtor`, `creditor`, `palance`, `registerStatus`) VALUES
(1, 'hamood', 'hamood@admin', '573a59d832ac1febfc3b54eba3e1be70b7c8bde5', 1, 0, 0, 0, 0, 1),
(2, 'ali', 'ali@supAdmin', 'f20bd09eb4c1b643d5ff1f3efe245233090a2613', 0, 1, 0, 0, 0, 0),
(3, 'ali', 'alosss', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 0, 1, 0, 0, 0, 1),
(4, 'fffff', 'deeeee', '9062ff4fb860c9c664ac7380b471f2a44c038238', 0, 0, 0, 0, 0, 0),
(5, 'mohammed', 'aaaaaaaa', '7e240de74fb1ed08fa08d38063f6a6a91462a815', 1, 0, 0, 0, 0, 1),
(6, 'aaaaaa', '2a@aa', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, 0, 0, 0, 0, 0),
(7, 'qq', 'w', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', 0, 0, 0, 0, 0, 0),
(8, 'qqq', 'qq', 'bed4eb698c6eeea7f1ddf5397d480d3f2c0fb938', 0, 0, 0, 0, 0, 1),
(9, 'qqq', 'qqqq', 'bed4eb698c6eeea7f1ddf5397d480d3f2c0fb938', 0, 0, 0, 0, 0, 0),
(10, 'qqq2', 'qq22', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 1, 0, 0, 0, 0, 1),
(11, '22', '223', '12c6fc06c99a462375eeb3f43dfd832b08ca9e17', 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `dates_of_time`
--

CREATE TABLE `dates_of_time` (
  `id` int(11) NOT NULL,
  `fromDay` text NOT NULL,
  `toDay` text NOT NULL,
  `fromHour` text NOT NULL,
  `toHour` text NOT NULL,
  `idEmployee` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `saivi` text NOT NULL,
  `image` text NOT NULL,
  `address` text NOT NULL,
  `visibility` tinyint(1) NOT NULL DEFAULT 0,
  `ordering` int(11) NOT NULL DEFAULT 0,
  `creditor` float NOT NULL DEFAULT 0,
  `debtor` float NOT NULL DEFAULT 0,
  `palance` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `employees`
--

INSERT INTO `employees` (`id`, `id_dep`, `name`, `phone`, `saivi`, `image`, `address`, `visibility`, `ordering`, `creditor`, `debtor`, `palance`) VALUES
(1, 1, 'hamooss', '4444', ' ssssssss d        ', '7368024-09-17-01-12-09.png', 'asx', 1, 45, 0, 0, 0),
(3, 1, 'hamoodw', '44433', 'ssss       ', '3148654322.png', 'aaa', 0, 2, 0, 0, 0),
(5, 1, 'aaaa', '3333', ' aaaaaaaa ', '5488654322.png', 'ssssssssss', 1, 1, 0, 0, 0),
(6, 1, 'aaaaaaaaq', '2222', ' aaaa        ', '466624-09-17-01-26-09.png', '11', 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `employment_department`
--

CREATE TABLE `employment_department` (
  `id` int(11) NOT NULL,
  `employmentDepartment` text NOT NULL,
  `image` text NOT NULL,
  `discription` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `employment_department`
--

INSERT INTO `employment_department` (`id`, `employmentDepartment`, `image`, `discription`) VALUES
(1, 'doctors', '66593.png', ' aaaaaaaaaa');

-- --------------------------------------------------------

--
-- بنية الجدول `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `phone` text NOT NULL,
  `debtor` float NOT NULL DEFAULT 0,
  `creditor` float NOT NULL DEFAULT 0,
  `palance` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `patients`
--

INSERT INTO `patients` (`id`, `name`, `phone`, `debtor`, `creditor`, `palance`) VALUES
(16, 'hamood', '123456789', 0, 0, 0);

-- --------------------------------------------------------

--
-- بنية الجدول `qualifications`
--

CREATE TABLE `qualifications` (
  `id` int(11) NOT NULL,
  `idEmployee` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- بنية الجدول `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `patientId` int(11) NOT NULL,
  `doctorId` int(11) NOT NULL,
  `patientName` text NOT NULL,
  `reservationType` text NOT NULL,
  `status` text NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `reservations`
--

INSERT INTO `reservations` (`id`, `userId`, `patientId`, `doctorId`, `patientName`, `reservationType`, `status`, `createdAt`, `date`) VALUES
(4, 1, 16, 6, '', 'local', ' aaaaaaa  ', '2024-09-17 00:28:52', '2024-09-29'),
(5, 1, 16, 5, '', 'local', ' aaaaaaaaaaaaaaa  ', '2024-09-17 09:30:00', '2024-09-10'),
(6, 1, 16, 6, '', 'local', '  ssssss ', '2024-09-17 00:33:18', '2024-09-18');

-- --------------------------------------------------------

--
-- بنية الجدول `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service` text NOT NULL,
  `discription` text NOT NULL,
  `allowAds` tinyint(1) NOT NULL DEFAULT 0,
  `visibility` int(1) NOT NULL DEFAULT 0,
  `image` text NOT NULL,
  `ordering` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `services`
--

INSERT INTO `services` (`id`, `service`, `discription`, `allowAds`, `visibility`, `image`, `ordering`) VALUES
(8, 'hamoodw', ' hhhhhhhhw', 0, 0, '4017624-09-17-01-28-09.png', 420);

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `registerStatus` tinyint(1) NOT NULL DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `registerStatus`, `createdAt`) VALUES
(10, 'hamood', 'hamood@hamood', '7b52009b64fd0a2a49e6d8a939753077792b0554', 0, '2024-09-16 22:16:06'),
(11, 'qq1', '2qq', '17ba0791499db908433b80f37c5fbc89b870084b', 0, '2024-09-16 23:00:41');

-- --------------------------------------------------------

--
-- بنية الجدول `_paragraphs_services`
--

CREATE TABLE `_paragraphs_services` (
  `id` int(11) NOT NULL,
  `idServices` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates_of_time`
--
ALTER TABLE `dates_of_time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employment_department`
--
ALTER TABLE `employment_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FKPatientId` (`patientId`),
  ADD KEY `idAdminFk` (`userId`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_paragraphs_services`
--
ALTER TABLE `_paragraphs_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dates_of_time`
--
ALTER TABLE `dates_of_time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employment_department`
--
ALTER TABLE `employment_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `_paragraphs_services`
--
ALTER TABLE `_paragraphs_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- قيود الجداول المُلقاة.
--

--
-- قيود الجداول `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `FKPatientId` FOREIGN KEY (`patientId`) REFERENCES `patients` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idAdminFk` FOREIGN KEY (`userId`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
