-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 27, 2025 at 08:32 PM
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
(1, 'org.exbin.framework.bined.operation.bouncycastle.BinedOperationBouncycastleModule', 'BinEd Bouncycastle Support', 'Support for data conversions using Bouncycastle cryptographic library', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(2, 'org.exbin.framework.plugin.darcula_laf.DarculaLafModule', 'Darcula look and feel', 'Module to provide Darcula look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(3, 'org.exbin.framework.plugin.napkin_laf.NapkinLafModule', 'Napkin look and feel', 'Module to provide Napkin look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(4, 'org.exbin.framework.plugin.substance_laf.SubstanceLafModule', 'Substance look and feel', 'Module to provide Substance look and feel', 'https://exbin.org', '2025-01-22 12:00:00', 1, ''),
(5, 'org.exbin.framework.plugin.language.it_IT.LanguageItItModule', 'Italian language', 'Italian language plugin', 'https://exbin.org', '2025-01-24 18:21:13', 1, 'language-it.png'),
(6, 'org.exbin.framework.plugin.language.fi_FI.LanguageFiFiModule', 'Finnish language', 'Finnish language plugin', 'https://exbin.org', '2025-01-24 18:21:13', 1, 'language-fi.png'),
(7, 'org.exbin.framework.plugin.language.sv_SE.LanguageSvSeModule', 'Swedish language', 'Swedish language plugin', 'https://exbin.org', '2025-01-24 18:23:00', 1, 'language-se.png'),
(8, 'org.exbin.framework.plugin.language.ru_RU.LanguageRuRuModule', 'Russian language', 'Russian language plugin', 'https://exbin.org', '2025-01-24 18:23:00', 1, 'language-ru.png'),
(9, 'org.exbin.framework.plugin.language.in_ID.LanguageInIdModule', 'Indonesian language', 'Indonesian language plugin', 'https://exbin.org', '2025-01-25 17:05:44', 1, 'language-id.png'),
(10, 'org.exbin.framework.plugin.language.pl_PL.LanguagePlPlModule', 'Polish language', 'Polish language plugin', 'https://exbin.org', '2025-01-25 17:05:44', 1, 'language-pl.png'),
(11, 'org.exbin.framework.plugin.language.pt_PT.LanguagePtPtModule', 'Portuguese language', 'Portuguese language plugin', 'https://exbin.org', '2025-01-25 17:07:06', 1, 'language-pt.png'),
(12, 'org.exbin.framework.plugin.language.vi_VN.LanguageViVnModule', 'Vietnamese language', 'Vietnamese language plugin', 'https://exbin.org', '2025-01-25 17:07:06', 1, 'language-vn.png'),
(13, 'org.exbin.framework.plugin.tinylaf_laf.TinyLafLafModule', 'TinyLaf look and feel', 'Module to provide TinyLaf look and feel', 'https://exbin.org', '2025-01-25 21:57:55', 1, ''),
(14, 'org.exbin.framework.plugin.vaqua_laf.VAquaLafModule', 'VAqua look and feel', 'Module to provide VAqua look and feel', 'https://exbin.org', '2025-01-26 22:21:13', 1, ''),
(15, 'org.exbin.framework.addon.manager.AddonManagerModule', 'Addon Manager', 'Module to manage addons', 'https://exbin.org', '2025-01-27 18:54:55', 1, ''),
(16, 'org.exbin.framework.utils.UtilsModule', 'Utilities Module', 'Module to provide various utilities', 'https://exbin.org', '2025-01-27 19:58:17', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `addon_dep`
--

CREATE TABLE `addon_dep` (
  `id` int(11) NOT NULL,
  `addon_rel_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `value` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon_dep`
--

INSERT INTO `addon_dep` (`id`, `addon_rel_id`, `type`, `value`) VALUES
(1, 2, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(2, 2, 0, 'org.exbin.framework.utils.UtilsModule'),
(3, 2, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(4, 2, 0, 'org.exbin.framework.bined.BinedModule'),
(5, 2, 0, 'org.exbin.framework.bined.operation.BinedOperationModule'),
(6, 2, 2, 'org.bouncycastle:bcprov-jdk18on:1.80'),
(7, 3, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(8, 3, 2, 'org.freeplane.bulenkov:darcula:2021.7'),
(9, 4, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(10, 4, 1, 'napkinlaf-1.2.1-SNAPSHOT.jar'),
(11, 5, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(12, 5, 2, 'com.github.insubstantial:substance:7.3'),
(13, 5, 2, 'com.github.insubstantial:laf-plugin:7.3'),
(14, 5, 2, 'com.github.insubstantial:laf-widget:7.3'),
(15, 5, 2, 'com.github.insubstantial:trident:7.3'),
(16, 6, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(17, 7, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(18, 8, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(19, 9, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(20, 10, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(21, 11, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(22, 12, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(23, 13, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(24, 14, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(25, 14, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(26, 14, 0, 'org.exbin.framework.preferences.api.PreferencesModuleApi'),
(27, 14, 2, 'net.sf.tinylaf:tinylaf:1.4.0'),
(28, 15, 0, 'org.exbin.framework.ui.api.UiModuleApi'),
(29, 15, 2, 'org.violetlib:vaqua:13'),
(30, 15, 2, 'org.violetlib:vappearances:4'),
(31, 15, 2, 'org.violetlib:jnr:14'),
(32, 16, 0, 'org.exbin.framework.action.api.ActionModuleApi'),
(33, 16, 0, 'org.exbin.framework.action.popup.api.ActionPopupModuleApi'),
(34, 16, 0, 'org.exbin.framework.window.api.WindowModuleApi'),
(35, 16, 0, 'org.exbin.framework.options.api.OptionsModuleApi'),
(36, 16, 0, 'org.exbin.framework.preferences.api.PreferencesModuleApi'),
(37, 16, 0, 'org.exbin.framework.language.api.LanguageModuleApi'),
(38, 16, 0, 'org.exbin.framework.utils.UtilsModule');

-- --------------------------------------------------------

--
-- Table structure for table `addon_rel`
--

CREATE TABLE `addon_rel` (
  `id` int(11) NOT NULL,
  `addon_id` int(11) NOT NULL,
  `sequence` int(11) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `file` varchar(80) NOT NULL,
  `license_id` int(11) DEFAULT NULL,
  `version` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addon_rel`
--

INSERT INTO `addon_rel` (`id`, `addon_id`, `sequence`, `created`, `file`, `license_id`, `version`) VALUES
(2, 1, 0, '2025-01-21 00:52:17', 'exbin-framework-bined-operation-bouncycastle-0.2.4.jar', 1, '0.2.4'),
(3, 2, 0, '2025-01-21 00:52:17', 'exbin-framework-darcula-laf-0.2.4.jar', 1, '0.2.4'),
(4, 3, 0, '2025-01-21 00:53:22', 'exbin-framework-napkin-laf-0.2.4.jar', 1, '0.2.4'),
(5, 4, 0, '2025-01-21 00:53:22', 'exbin-framework-substance-laf-0.2.4.jar', 1, '0.2.4'),
(6, 5, 0, '2025-01-24 19:26:24', 'exbin-framework-language-it_IT-0.2.4.jar', 1, '0.2.4'),
(7, 6, 0, '2025-01-24 19:26:24', 'exbin-framework-language-fi_FI-0.2.4.jar', 1, '0.2.4'),
(8, 7, 0, '2025-01-24 19:27:05', 'exbin-framework-language-sv_SE-0.2.4.jar', 1, '0.2.4'),
(9, 8, 0, '2025-01-24 19:27:05', 'exbin-framework-language-ru_RU-0.2.4.jar', 1, '0.2.4'),
(10, 9, 0, '2025-01-25 18:10:05', 'exbin-framework-language-in_ID-0.2.4.jar', 1, '0.2.4'),
(11, 10, 0, '2025-01-25 18:10:05', 'exbin-framework-language-pl_PL-0.2.4.jar', 1, '0.2.4'),
(12, 11, 0, '2025-01-25 18:10:37', 'exbin-framework-language-pt_PT-0.2.4.jar', 1, '0.2.4'),
(13, 12, 0, '2025-01-25 18:10:37', 'exbin-framework-language-vi_VN-0.2.4.jar', 1, '0.2.4'),
(14, 13, 0, '2025-01-25 22:59:35', 'exbin-framework-tinylaf-laf-0.2.4.jar', 1, '0.2.4'),
(15, 14, 0, '2025-01-26 23:22:56', 'exbin-framework-vaqua-laf-0.2.4.1.jar', 1, '0.2.4.1'),
(16, 15, 0, '2025-01-27 20:00:20', 'exbin-framework-addon-manager-0.3.0-SNAPSHOT.1.jar', 1, '0.3.0-SNAPSHOT.1'),
(17, 16, 0, '2025-01-27 20:58:49', 'exbin-framework-utils-0.3.0-SNAPSHOT.1.jar', 1, '0.3.0-SNAPSHOT.1');

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
  ADD KEY `fk_addon_rel_dep_addon` (`addon_rel_id`);

--
-- Indexes for table `addon_rel`
--
ALTER TABLE `addon_rel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ui_addon_rel_sequence` (`addon_id`,`sequence`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `addon_dep`
--
ALTER TABLE `addon_dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `addon_rel`
--
ALTER TABLE `addon_rel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `fk_addon_rel_dep_addon` FOREIGN KEY (`addon_rel_id`) REFERENCES `addon_rel` (`id`);

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
