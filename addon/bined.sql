-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 07, 2025 at 10:04 PM
-- Server version: 10.11.8-MariaDB-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bined`
--

-- --------------------------------------------------------

--
-- Table structure for table `addon`
--

CREATE TABLE `addon` (
  `id` int(11) NOT NULL,
  `module_id` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` varchar(120) DEFAULT NULL,
  `homepage` varchar(80) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `icon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon`
--

INSERT INTO `addon` (`id`, `module_id`, `name`, `description`, `homepage`, `created`, `owner_id`, `icon`) VALUES
(1, 'Test', 'Test', NULL, NULL, '2025-01-07 18:57:43', 1, ''),
(2, 'org.exbin.framework.plugin.flatlaf_laf.FlatLafLafModule', 'FlatLaf look and feel plugin', 'Module to provide FlatLaf look and feel', 'https://exbin.org', '2025-01-07 21:41:43', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `addon_dep`
--

CREATE TABLE `addon_dep` (
  `id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `value` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `addon_rev`
--

CREATE TABLE `addon_rev` (
  `id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `revision` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `version` varchar(40) NOT NULL,
  `file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon_rev`
--

INSERT INTO `addon_rev` (`id`, `addon_id`, `revision`, `created`, `version`, `file`) VALUES
(1, 2, 1, '2025-01-07 22:45:37', '0.2.4-SNAPSHOT', 'exbin-framework-flatlaf-laf-fat-0.2.4-SNAPSHOT.jar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`) VALUES
(1, 'ExBin Project');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addon`
--
ALTER TABLE `addon`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addon_owner` (`owner_id`);

--
-- Indexes for table `addon_dep`
--
ALTER TABLE `addon_dep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addon_dep_addon` (`addon_id`);

--
-- Indexes for table `addon_rev`
--
ALTER TABLE `addon_rev`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addon_rev_addon` (`addon_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addon`
--
ALTER TABLE `addon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `addon_dep`
--
ALTER TABLE `addon_dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `addon_rev`
--
ALTER TABLE `addon_rev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addon`
--
ALTER TABLE `addon`
  ADD CONSTRAINT `fk_addon_owner` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `addon_dep`
--
ALTER TABLE `addon_dep`
  ADD CONSTRAINT `fk_addon_dep_addon` FOREIGN KEY (`addon_id`) REFERENCES `addon` (`id`);

--
-- Constraints for table `addon_rev`
--
ALTER TABLE `addon_rev`
  ADD CONSTRAINT `fk_addon_rev_addon` FOREIGN KEY (`addon_id`) REFERENCES `addon` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
