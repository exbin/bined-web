-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2025 at 11:19 PM
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
  `module_id` varchar(120) NOT NULL,
  `name` varchar(80) NOT NULL,
  `description` varchar(120) DEFAULT NULL,
  `homepage` varchar(80) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL,
  `icon` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon`
--

INSERT INTO `addon` (`id`, `module_id`, `name`, `description`, `homepage`, `created`, `owner_id`, `icon`) VALUES
(1, 'org.exbin.framework.bined.operation.bouncycastle.BinedOperationBouncycastleModule', 'BinEd Bouncycastle Conversion', 'Support for data conversions using Bouncycastle cryptoraphic library', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(2, 'org.exbin.framework.plugin.darcula_laf.DarculaLafModule', 'Darcula look and feel', 'Module to provide Darcula look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(3, 'org.exbin.framework.plugin.napkin_laf.NapkinLafModule', 'Napkin look and feel', 'Module to provide Napkin look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(4, 'org.exbin.framework.plugin.substance_laf.SubstanceLafModule', 'Substance look and feel', 'Module to provide Substance look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, '');

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

--
-- Dumping data for table `addon_dep`
--

INSERT INTO `addon_dep` (`id`, `addon_id`, `type`, `value`) VALUES
(1, 1, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(2, 1, 0, 'org.exbin.framework.utils.UtilsModule'),
(3, 1, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(4, 1, 0, 'org.exbin.framework.bined.BinedModule'),
(5, 1, 0, 'org.exbin.framework.bined.operation.BinedOperationModule'),
(6, 1, 2, 'org.bouncycastle:bcprov-jdk18on:1.80'),
(7, 2, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(8, 2, 2, 'org.freeplane.bulenkov:darcula:2021.7'),
(9, 3, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(10, 3, 1, 'napkinlaf-1.2.1-SNAPSHOT.jar'),
(11, 4, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(12, 4, 2, 'com.github.insubstantial:substance:7.3'),
(13, 4, 2, 'com.github.insubstantial:laf-plugin:7.3'),
(14, 4, 2, 'com.github.insubstantial:laf-widget:7.3'),
(15, 4, 2, 'com.github.insubstantial:trident:7.3');

-- --------------------------------------------------------

--
-- Table structure for table `addon_rel`
--

CREATE TABLE `addon_rel` (
  `id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `license_id` int(11) DEFAULT NULL,
  `version` varchar(40) NOT NULL,
  `sequence` int(11) NOT NULL,
  `file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon_rel`
--

INSERT INTO `addon_rel` (`id`, `addon_id`, `created`, `license_id`, `version`, `sequence`, `file`) VALUES
(2, 1, '2025-01-21 00:52:17', 1, '0.2.4', 0, 'exbin-framework-bined-operation-bouncycastle-0.2.4.jar'),
(3, 2, '2025-01-21 00:52:17', 1, '0.2.4', 0, 'exbin-framework-darcula-laf-0.2.4.jar'),
(4, 3, '2025-01-21 00:53:22', 1, '0.2.4', 0, 'exbin-framework-napkin-laf-0.2.4.jar'),
(5, 4, '2025-01-21 00:53:22', 1, '0.2.4', 0, 'exbin-framework-substance-laf-0.2.4.jar');

-- --------------------------------------------------------

--
-- Table structure for table `license`
--

CREATE TABLE `license` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `spdx` varchar(64) DEFAULT NULL,
  `file` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `license`
--

INSERT INTO `license` (`id`, `name`, `spdx`, `file`) VALUES
(1, 'Apache License, Version 2.0', 'Apache-2.0', 'Apache-2.0.html'),
(2, 'GNU General Public License v1.0 only', 'GPL-1.0-only', 'GPL-1.0-only.html'),
(3, 'GNU General Public License v1.0 or later', 'GPL-1.0-or-later', 'GPL-1.0-or-later.html'),
(4, 'GNU General Public License v2.0 only', 'GPL-2.0-only', 'GPL-2.0-only.html'),
(5, 'GNU General Public License v2.0 or later', 'GPL-2.0-or-later', 'GPL-2.0-or-later.html'),
(6, 'GNU General Public License v3.0 only', 'GPL-3.0-only', 'GPL-3.0-only.html'),
(7, 'GNU General Public License v3.0 or later', 'GPL-3.0-or-later', 'GPL-3.0-or-later.html');

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
-- Indexes for table `addon_rel`
--
ALTER TABLE `addon_rel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addon_rel_addon` (`addon_id`),
  ADD KEY `fk_addon_rel_license` (`license_id`);

--
-- Indexes for table `license`
--
ALTER TABLE `license`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `addon_dep`
--
ALTER TABLE `addon_dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `addon_rel`
--
ALTER TABLE `addon_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `license`
--
ALTER TABLE `license`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- Constraints for table `addon_rel`
--
ALTER TABLE `addon_rel`
  ADD CONSTRAINT `fk_addon_rel_addon` FOREIGN KEY (`addon_id`) REFERENCES `addon` (`id`),
  ADD CONSTRAINT `fk_addon_rel_license` FOREIGN KEY (`license_id`) REFERENCES `license` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
