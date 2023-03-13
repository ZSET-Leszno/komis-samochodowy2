-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Mar 2023, 14:52
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
-- Baza danych: `baza_danych`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `Id` int(9) NOT NULL,
  `Nazwa_marki` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `marki`
--

INSERT INTO `marki` (`Id`, `Nazwa_marki`) VALUES
(1, 'Toyota');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `Id` int(9) NOT NULL,
  `Nazwa_modelu` varchar(128) NOT NULL,
  `Id_marki` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`Id`, `Nazwa_modelu`, `Id_marki`) VALUES
(1, 'Prius', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paliwa`
--

CREATE TABLE `paliwa` (
  `Id` int(9) NOT NULL,
  `Rodzaj_paliwa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `paliwa`
--

INSERT INTO `paliwa` (`Id`, `Rodzaj_paliwa`) VALUES
(1, 'Diesel'),
(2, 'Benzyna'),
(3, 'Benzyna + gaz'),
(4, 'Elektryczny'),
(5, 'Hybryda');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pojemnosci_skokowe`
--

CREATE TABLE `pojemnosci_skokowe` (
  `Id` int(9) NOT NULL,
  `Pojemnosc_skokowa_cm3` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pojemnosci_skokowe`
--

INSERT INTO `pojemnosci_skokowe` (`Id`, `Pojemnosc_skokowa_cm3`) VALUES
(1, 0.8),
(2, 0.9),
(3, 1),
(4, 1.1),
(5, 1.2),
(6, 1.3),
(7, 1.4),
(8, 1.5),
(9, 1.6),
(10, 1.7),
(11, 1.8),
(12, 1.9),
(13, 2),
(14, 2.1),
(15, 2.2),
(16, 2.3),
(17, 2.4),
(18, 2.5),
(19, 2.6),
(20, 2.7),
(21, 2.8),
(22, 2.9),
(23, 3),
(24, 3.1),
(25, 3.2),
(26, 3.3),
(27, 3.4),
(28, 3.5),
(29, 3.6),
(30, 3.7),
(31, 3.8),
(32, 3.9),
(33, 4),
(34, 4.1),
(35, 4.2),
(36, 4.3),
(37, 4.4),
(38, 4.5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roczniki`
--

CREATE TABLE `roczniki` (
  `Id` int(9) NOT NULL,
  `Rocznik` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `roczniki`
--

INSERT INTO `roczniki` (`Id`, `Rocznik`) VALUES
(1, 1985),
(2, 1986),
(3, 1987),
(4, 1988),
(5, 1989),
(6, 1990),
(7, 1991),
(8, 1992),
(9, 1993),
(10, 1994),
(11, 1995),
(12, 1996),
(13, 1997),
(14, 1998),
(15, 1999),
(16, 2000),
(17, 2001),
(18, 2002),
(19, 2003),
(20, 2004),
(21, 2005),
(22, 2006),
(23, 2007),
(24, 2008),
(25, 2009),
(26, 2010),
(27, 2011),
(28, 2012),
(29, 2013),
(30, 2014),
(31, 2015),
(32, 2016),
(33, 2017),
(34, 2018),
(35, 2019),
(36, 2020),
(37, 2021),
(38, 2022),
(39, 2023);

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
-- Indeksy dla tabeli `marki`
--
ALTER TABLE `marki`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_marki` (`Id_marki`);

--
-- Indeksy dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `pojemnosci_skokowe`
--
ALTER TABLE `pojemnosci_skokowe`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `roczniki`
--
ALTER TABLE `roczniki`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `pojemnosci_skokowe`
--
ALTER TABLE `pojemnosci_skokowe`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT dla tabeli `roczniki`
--
ALTER TABLE `roczniki`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `modele_ibfk_1` FOREIGN KEY (`Id_marki`) REFERENCES `marki` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
