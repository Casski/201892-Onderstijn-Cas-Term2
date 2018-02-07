-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 06 dec 2017 om 23:53
-- Serverversie: 10.2.7-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onderstijn_DB`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `notes_notes`
--

CREATE TABLE `notes_notes` (
  `ID` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Note_text` text NOT NULL,
  `Title` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `notes_notes`
--

INSERT INTO `notes_notes` (`ID`, `Date`, `Note_text`, `Title`) VALUES
(21, '2017-12-06', 'hallo ik ben Casski', 'Birthday9123421'),
(22, '2017-12-06', 'hallo ik ben aniela', 'Birthday221'),
(23, '2017-12-19', 'hallo ik ben aniela', 'Birthday22'),
(24, '2017-12-06', 'hallo ik ben kevin', 'Birthday00001'),
(25, '2017-11-01', 'YAAAAAAAAAAAAAAAY', 'editing works'),
(26, '2017-11-11', 'adasdasdasdasd', 'testtesttest223'),
(27, '2017-12-06', '', ''),
(28, '2017-12-06', 'hier cas iets met hello er in', 'hello');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `notes_notes`
--
ALTER TABLE `notes_notes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `notes_notes`
--
ALTER TABLE `notes_notes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
