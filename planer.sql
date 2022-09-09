-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Kwi 2021, 23:02
-- Wersja serwera: 10.4.18-MariaDB
-- Wersja PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `planer`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `planer`
--

CREATE TABLE `planer` (
  `ID` int(11) NOT NULL,
  `Data` date NOT NULL,
  `Godzina` time NOT NULL,
  `Miejsce` text COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `Opis` text COLLATE utf8mb4_polish_ci NOT NULL,
  `Kategoria` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `planer`
--

INSERT INTO `planer` (`ID`, `Data`, `Godzina`, `Miejsce`, `Opis`, `Kategoria`) VALUES
(1, '2021-04-08', '11:50:00', 'Kasprzak on-line', 'Lekcja PA', 'Lekcja'),
(3, '2021-04-28', '22:00:00', 'Kasprzak', 'Bruce Lee', 'Spotkanie'),
(5, '2021-04-23', '12:32:00', 'Dom', 'Imieniny', 'Spotkanie'),
(6, '2021-03-29', '23:59:00', 'Kasprzak on-line', 'Zaległa matma', 'Zadanie'),
(7, '2021-04-15', '22:22:00', '', 'Dodatkowe programowanie', 'Lekcja');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `planer`
--
ALTER TABLE `planer`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `planer`
--
ALTER TABLE `planer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
