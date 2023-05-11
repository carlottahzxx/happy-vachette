-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 10, 2023 at 08:58 AM
-- Server version: 5.7.24
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
-- Database: `happy_vachette`
--

-- --------------------------------------------------------

--
-- Table structure for table `capteur`
--

CREATE TABLE `capteur` (
  `IdCapteur` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Valeur` float NOT NULL,
  `IdCollier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `collier`
--

CREATE TABLE `collier` (
  `IdCollier` int(11) NOT NULL,
  `IdGrange` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `IdFaq` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `granges`
--

CREATE TABLE `granges` (
  `IdGrange` int(11) NOT NULL,
  `lieu` text NOT NULL,
  `nom` text NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `IdItem` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Description` text NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `IdNotif` int(11) NOT NULL,
  `Alerte` text NOT NULL,
  `Message` text NOT NULL,
  `Lue` tinyint(1) NOT NULL,
  `Date` date NOT NULL,
  `IdUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `role` text NOT NULL,
  `name` text NOT NULL,
  `familyName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capteur`
--
ALTER TABLE `capteur`
  ADD PRIMARY KEY (`IdCapteur`),
  ADD KEY `capteur_constraint` (`IdCollier`);

--
-- Indexes for table `collier`
--
ALTER TABLE `collier`
  ADD PRIMARY KEY (`IdCollier`),
  ADD KEY `collier_constraint` (`IdGrange`);

--
-- Indexes for table `granges`
--
ALTER TABLE `granges`
  ADD PRIMARY KEY (`IdGrange`),
  ADD KEY `grange_constraint` (`IdUser`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`IdItem`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`IdNotif`),
  ADD KEY `notif_constraint` (`IdUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capteur`
--
ALTER TABLE `capteur`
  ADD CONSTRAINT `capteur_constraint` FOREIGN KEY (`IdCollier`) REFERENCES `collier` (`IdCollier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `collier`
--
ALTER TABLE `collier`
  ADD CONSTRAINT `collier_constraint` FOREIGN KEY (`IdGrange`) REFERENCES `granges` (`IdGrange`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `granges`
--
ALTER TABLE `granges`
  ADD CONSTRAINT `grange_constraint` FOREIGN KEY (`IdUser`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `notif`
--
ALTER TABLE `notif`
  ADD CONSTRAINT `notif_constraint` FOREIGN KEY (`IdUser`) REFERENCES `user` (`userId`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
