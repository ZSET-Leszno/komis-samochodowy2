-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Mar 2023, 16:48
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

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
(1, 'Toyota'),
(2, 'Audi'),
(3, 'BMW'),
(4, 'Citroen'),
(5, 'Dacia'),
(6, 'Fiat'),
(7, 'Ford'),
(8, 'Hyundai'),
(9, 'Kia'),
(10, 'Mercedes'),
(11, 'Nissan'),
(12, 'Opel'),
(13, 'Peugeot'),
(14, 'Renault'),
(15, 'SEAT'),
(16, 'Skoda'),
(17, 'Volkswagen'),
(18, 'Volvo'),
(19, 'Abarth'),
(20, 'Alfa Romeo'),
(21, 'Alpina'),
(22, 'Alpine'),
(23, 'Aston Martin'),
(24, 'Bentley'),
(25, 'Cupra'),
(26, 'Dodge'),
(27, 'DS'),
(28, 'Ferrari'),
(29, 'Fuso'),
(30, 'Honda'),
(31, 'Ineos'),
(32, 'Isuzu'),
(33, 'Iveco'),
(34, 'Jaguar'),
(35, 'Jeep'),
(36, 'Kawasaki'),
(37, 'Lamborghini'),
(38, 'Land Rover'),
(39, 'LEVC'),
(40, 'Lexus'),
(41, 'MAN'),
(42, 'Maserati'),
(43, 'Maxus'),
(44, 'Mazda'),
(45, 'McLaren'),
(46, 'MINI'),
(47, 'Mitsubishi'),
(48, 'Piaggio'),
(49, 'Porsche'),
(50, 'RAM'),
(51, 'Renault Trucks'),
(52, 'Rolls-Royce'),
(53, 'Seres'),
(54, 'Skywell'),
(55, 'Smart'),
(56, 'SsangYong'),
(57, 'Subaru'),
(58, 'Suzuki'),
(59, 'Tesla');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `Id` int(9) NOT NULL,
  `Nazwa_modelu` varchar(128) NOT NULL,
  `Id_marki` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

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
