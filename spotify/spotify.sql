-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Värd: localhost
-- Tid vid skapande: 12 maj 2017 kl 10:04
-- Serverversion: 10.1.23-MariaDB
-- PHP-version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `spotify`
--
CREATE DATABASE IF NOT EXISTS `spotify` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `spotify`;

-- --------------------------------------------------------

--
-- Tabellstruktur `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE `albums` (
  `id` int(11) UNSIGNED NOT NULL,
  `artist_id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `releaseYear` int(10) UNSIGNED DEFAULT NULL,
  `coverPhoto` text,
  `recordLabel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `albums`
--

INSERT INTO `albums` (`id`, `artist_id`, `name`, `releaseYear`, `coverPhoto`, `recordLabel`) VALUES
(1, 1, 'Metallica', 1991, NULL, ''),
(2, 1, 'Master of Puppets', 1986, NULL, ''),
(3, 2, 'Nevermind', 1991, NULL, ''),
(4, 2, 'MTV Unplugged in New York', 1994, NULL, '');

-- --------------------------------------------------------

--
-- Tabellstruktur `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE `artists` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `artists`
--

INSERT INTO `artists` (`id`, `name`) VALUES
(1, 'Metallica'),
(2, 'Nirvana');

-- --------------------------------------------------------

--
-- Tabellstruktur `tracks`
--

DROP TABLE IF EXISTS `tracks`;
CREATE TABLE `tracks` (
  `id` int(11) UNSIGNED NOT NULL,
  `artist_id` int(11) UNSIGNED NOT NULL,
  `album_id` int(11) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `url` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `tracks`
--

INSERT INTO `tracks` (`id`, `artist_id`, `album_id`, `name`, `url`) VALUES
(1, 1, 1, 'Nothing Else Matters', NULL),
(2, 1, 1, 'Enter Sandman', NULL),
(3, 1, 2, 'Master of Puppets', NULL),
(4, 2, 3, 'Smells Like Teen Spirit', NULL),
(5, 2, 3, 'In Bloom', NULL),
(6, 2, 3, 'Come as You Are', NULL),
(7, 2, 4, 'The Man Who Sold The World', NULL);

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `artists`
--
ALTER TABLE `artists`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT för tabell `artists`
--
ALTER TABLE `artists`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT för tabell `tracks`
--
ALTER TABLE `tracks`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
