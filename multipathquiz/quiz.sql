-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 dec 2017 om 14:56
-- Serverversie: 10.1.28-MariaDB
-- PHP-versie: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onderstijn_db`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `text` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `yes` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `idk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Gegevens worden geëxporteerd voor tabel `quiz`
--

INSERT INTO `quiz` (`id`, `text`, `yes`, `no`, `idk`) VALUES
(-22, 'gebruik je garantie', 1, 1, 1),
(-16, 'neem je pc mee naar een computerwinkel', 1, 1, 1),
(-14, 'installeer virus scanner en scan', 1, 1, 1),
(-11, 'je hebt een mac, gooi hem maar uit het raam', 1, 1, 1),
(-4, 'gebruik je garantie', 1, 1, 1),
(1, 'zit je op een computer/laptop?', 2, 3, 1),
(2, 'is het een windows computer?', 5, 6, 7),
(3, 'zit je op een tablet?', -4, 9, 1),
(5, 'heb je recent programma\'s geinstalleerd?', -14, 15, -16),
(6, 'heb je een mac?', -11, 3, 1),
(7, 'zie je een flag links onderin?', 5, 6, 1),
(9, 'zit je op een telefoon?', -22, 1, 1),
(15, 'krijg je vaak/soms een blauw scherm?', -16, -16, 1);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
