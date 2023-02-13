-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Lut 2023, 14:44
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `Id` int(9) NOT NULL,
  `Login` varchar(128) NOT NULL,
  `Haslo` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Login`, `Haslo`, `Email`) VALUES
(1, 'Janmateusz', 'qwerty123', 'janmateusz@gmail.com'),
(2, 'Sandom000', '123456789', 'gonciarz2@wp.pl'),
(3, 'Daniel', 'password', 'daniel@gmail.com'),
(4, 'Agnieszka2005', 'Felek2020', 'agnieszkaw@gmail.com'),
(5, 'KrzysztofKowalski', 'zaq1@WSX', 'krzysztofkowalski@gmail.com'),
(6, 'AdamSocko', 'adam1985', 'adamko2@wp.pl'),
(7, 'Wladyslaw40', 'Wladek5', 'wlodzimierz@wp.pl'),
(8, 'Dobry_Sprzedawca', '1qaz2wsx', 'sprzedazaut@gmail.com'),
(9, 'Szymon_Majewski', 'zaq1@WSX', 'szymonmaj@gmail.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
