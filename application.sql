-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Nov 18, 2018 alle 10:11
-- Versione del server: 10.1.21-MariaDB
-- Versione PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `application`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `feedback` varchar(100) DEFAULT NULL,
  `firm` int(11) NOT NULL,
  `until` int(11) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `firm`
--

CREATE TABLE `firm` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `importance` int(1) NOT NULL,
  `location` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `nametype`
--

CREATE TABLE `nametype` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `idApplication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `type`
--

INSERT INTO `type` (`id`, `type`, `idApplication`) VALUES
(1, 'mandatoCV', 2),
(2, 'mandatoCV', 3),
(3, 'mandatoCV', 5),
(4, 'mandatoCV', 6),
(5, 'compito', 2),
(6, 'mandatoCV', 7),
(7, 'skype', 7),
(8, 'skype', 7),
(9, 'skype', 7),
(10, 'skype', 7),
(11, 'compito', 2),
(12, 'inLoco', 2),
(13, 'mandatoCV', 8),
(14, 'mandatoCV', 9),
(15, 'mandatoCV', 8),
(16, 'mandatoCV', 10),
(17, 'mandatoCV', 9),
(18, 'mandatoCV', 6),
(19, 'mandatoCV', 9),
(20, 'mandatoCV', 11),
(21, 'mandatoCV', 11);

-- --------------------------------------------------------

--
-- Struttura della tabella `until`
--

CREATE TABLE `until` (
  `id` int(11) NOT NULL,
  `type` varchar(20) DEFAULT NULL,
  `idApplication` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`),
  ADD KEY `firm` (`firm`);

--
-- Indici per le tabelle `firm`
--
ALTER TABLE `firm`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `nametype`
--
ALTER TABLE `nametype`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `until`
--
ALTER TABLE `until`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `firm`
--
ALTER TABLE `firm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT per la tabella `nametype`
--
ALTER TABLE `nametype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT per la tabella `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT per la tabella `until`
--
ALTER TABLE `until`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `firm` FOREIGN KEY (`firm`) REFERENCES `firm` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
