-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 17 Kwi 2023, 23:51
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

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
-- Struktura tabeli dla tabeli `kolory`
--

CREATE TABLE `kolory` (
  `Id` int(9) NOT NULL,
  `Kolor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `kolory`
--

INSERT INTO `kolory` (`Id`, `Kolor`) VALUES
(1, 'Beżowy'),
(2, 'Biały'),
(3, 'Błękitny'),
(4, 'Bordowy'),
(5, 'Brązowy'),
(6, 'Czarny'),
(7, 'Czerwony'),
(8, 'Fioletowy'),
(9, 'Granatowy'),
(10, 'Inny'),
(11, 'Niebieski'),
(12, 'Pomarańczowy'),
(13, 'Srebrny'),
(14, 'Szary'),
(15, 'Zielony'),
(16, 'Złoty'),
(17, 'Żółty');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kraje`
--

CREATE TABLE `kraje` (
  `Id` int(9) NOT NULL,
  `Kraj` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `kraje`
--

INSERT INTO `kraje` (`Id`, `Kraj`) VALUES
(1, 'Austria'),
(2, 'Belgia'),
(3, 'Białoruś'),
(4, 'Bułgaria'),
(5, 'Chorwacja'),
(6, 'Czechy'),
(7, 'Dania'),
(8, 'Estonia'),
(9, 'Finlandia'),
(10, 'Francja'),
(11, 'Grecja'),
(12, 'Hiszpania'),
(13, 'Holandia'),
(14, 'Inny'),
(15, 'Irlandia'),
(16, 'Islandia'),
(17, 'Japonia'),
(18, 'Kanada'),
(19, 'Liechtenstein'),
(20, 'Litwa'),
(21, 'Luksemburg'),
(22, 'Łotwa'),
(23, 'Monako'),
(24, 'Niemcy'),
(25, 'Norwegia'),
(26, 'Polska'),
(27, 'Rosja'),
(28, 'Rumunia'),
(29, 'Słowacja'),
(30, 'Słowenia'),
(31, 'Stany Zjednoczone'),
(32, 'Szwajcaria'),
(33, 'Szwecja'),
(34, 'Turcja'),
(35, 'Ukraina'),
(36, 'Węgry'),
(37, 'Wielka Brytania'),
(38, 'Włochy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `marki`
--

CREATE TABLE `marki` (
  `Id` int(9) NOT NULL,
  `Nazwa_marki` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(59, 'Tesla'),
(60, 'Chevrolet'),
(61, 'Chrysler');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `modele`
--

CREATE TABLE `modele` (
  `Id` int(9) NOT NULL,
  `Nazwa_modelu` varchar(128) NOT NULL,
  `Id_marki` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `modele`
--

INSERT INTO `modele` (`Id`, `Nazwa_modelu`, `Id_marki`) VALUES
(2, 'Cruze', 60),
(3, '6', 44),
(4, 'Astra', 12),
(5, 'A3', 2),
(6, 'Pro Cee\'d', 9),
(7, 'X2', 3),
(8, 'Seria 3', 3),
(9, 'X-Trail', 11),
(10, '508', 13),
(11, 'Grand Vitara', 58),
(12, 'Klasa C', 10),
(13, 'EV6', 9),
(14, 'Y', 59),
(15, 'e-tron GT', 2),
(16, 'Highlander', 1),
(17, 'Prius', 1),
(18, 'Fabia', 16),
(19, '300s', 61),
(20, 'Formentor', 25),
(21, 'Bora', 17),
(22, 'Megane', 14),
(23, 'Seria 3', 3),
(24, 'Qashqai', 11);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nadwozia`
--

CREATE TABLE `nadwozia` (
  `Id` int(9) NOT NULL,
  `Nadwozie` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `nadwozia`
--

INSERT INTO `nadwozia` (`Id`, `Nadwozie`) VALUES
(1, 'Małe'),
(2, 'Miejskie'),
(3, 'Coupe'),
(4, 'Kabriolet'),
(5, 'Kombi'),
(6, 'Kompakt'),
(7, 'Minivan'),
(8, 'Sedan'),
(9, 'SUV');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `napedy`
--

CREATE TABLE `napedy` (
  `Id` int(9) NOT NULL,
  `Naped` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `napedy`
--

INSERT INTO `napedy` (`Id`, `Naped`) VALUES
(1, '4x4 automatyczny'),
(2, '4x4 ręczny'),
(3, '4x4 stały'),
(4, 'Na przednie koła'),
(5, 'Na tylne koła');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paliwa`
--

CREATE TABLE `paliwa` (
  `Id` int(9) NOT NULL,
  `Rodzaj_paliwa` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `paliwa`
--

INSERT INTO `paliwa` (`Id`, `Rodzaj_paliwa`) VALUES
(1, 'Benzyna'),
(2, 'Benzyna+CNG'),
(3, 'Benzyna+LPG'),
(4, 'Diesel'),
(5, 'Elektryczny'),
(6, 'Etanol'),
(7, 'Hybryda'),
(8, 'Wodór');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochody`
--

CREATE TABLE `samochody` (
  `Id_s` int(9) NOT NULL,
  `Id_model` int(9) NOT NULL,
  `Cena_zl` int(9) NOT NULL,
  `Rok_produkcji` int(9) NOT NULL,
  `Przebieg_km` int(9) NOT NULL,
  `Pojemnosc_skokowa_cm3` int(9) NOT NULL,
  `Id_paliwo` int(9) NOT NULL,
  `Moc_KM` int(9) NOT NULL,
  `Id_skrzynia_biegow` int(9) NOT NULL,
  `Id_naped` int(9) NOT NULL,
  `Id_nadwozie` int(9) NOT NULL,
  `Liczba_drzwi` int(9) NOT NULL,
  `Liczba_miejsc` int(9) NOT NULL,
  `Id_kolor` int(9) NOT NULL,
  `Id_kraj` int(9) NOT NULL,
  `zdj_1` varchar(128) NOT NULL,
  `zdj_2` varchar(128) NOT NULL,
  `zdj_3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`Id_s`, `Id_model`, `Cena_zl`, `Rok_produkcji`, `Przebieg_km`, `Pojemnosc_skokowa_cm3`, `Id_paliwo`, `Moc_KM`, `Id_skrzynia_biegow`, `Id_naped`, `Id_nadwozie`, `Liczba_drzwi`, `Liczba_miejsc`, `Id_kolor`, `Id_kraj`, `zdj_1`, `zdj_2`, `zdj_3`) VALUES
(1, 2, 34200, 2012, 168000, 1364, 1, 140, 2, 4, 5, 5, 5, 6, 24, 'zdjecia/1_1.webp', 'zdjecia/1_2.webp', 'zdjecia/1_3.webp'),
(2, 3, 63000, 2014, 140000, 2488, 1, 192, 1, 4, 8, 4, 5, 2, 26, 'zdjecia/2_1.webp', 'zdjecia/2_2.webp', 'zdjecia/2_3.webp'),
(3, 4, 124900, 2022, 1, 1199, 1, 130, 1, 4, 6, 5, 5, 16, 26, 'zdjecia/3_1.webp', 'zdjecia/3_2.webp', 'zdjecia/3_3.webp'),
(6, 7, 200855, 2022, 0, 1499, 7, 220, 1, 1, 9, 5, 5, 14, 26, 'zdjecia/6_1.webp', 'zdjecia/6_2.webp', 'zdjecia/6_3.webp'),
(7, 8, 74900, 2017, 145000, 1995, 4, 150, 1, 5, 8, 4, 5, 6, 26, 'zdjecia/7_1.webp', 'zdjecia/7_2.webp', 'zdjecia/7_3.webp'),
(8, 9, 25900, 2007, 289000, 1995, 4, 150, 2, 2, 9, 5, 5, 14, 26, 'zdjecia/8_1.webp', 'zdjecia/8_2.webp', 'zdjecia/8_3.webp'),
(9, 11, 19500, 2007, 154865, 1870, 4, 129, 2, 1, 9, 3, 4, 2, 17, 'zdjecia/9_1.webp', 'zdjecia/9_2.webp', 'zdjecia/9_3.webp'),
(10, 12, 11500, 2017, 12800, 1991, 1, 184, 1, 3, 5, 5, 5, 6, 24, 'zdjecia/10_1.webp', 'zdjecia/10_2.webp', 'zdjecia/10_3.webp'),
(11, 13, 277000, 2022, 6700, 0, 5, 228, 1, 5, 9, 5, 5, 6, 26, 'zdjecia/11_1.webp', 'zdjecia/11_2.webp', 'zdjecia/11_3.webp'),
(12, 14, 285000, 2022, 14000, 0, 5, 534, 1, 3, 9, 5, 5, 6, 24, 'zdjecia/12_1.webp', 'zdjecia/12_2.webp', 'zdjecia/12_3.webp'),
(13, 15, 496000, 2022, 5, 0, 5, 476, 1, 1, 8, 4, 5, 6, 26, 'zdjecia/13_1.webp', 'zdjecia/13_2.webp', 'zdjecia/13_3.webp'),
(14, 16, 219035, 2021, 40825, 2487, 7, 190, 1, 1, 9, 5, 7, 14, 26, 'zdjecia/14_1.webp', 'zdjecia/14_2.webp', 'zdjecia/14_3.webp'),
(15, 17, 34900, 2008, 170000, 1497, 7, 79, 1, 4, 6, 5, 5, 13, 38, 'zdjecia/15_1.webp', 'zdjecia/16_2.webp', 'zdjecia/16_3.webp'),
(16, 18, 65713, 2022, 22000, 999, 3, 80, 2, 4, 1, 5, 5, 2, 26, 'zdjecia/16_1.webp', 'zdjecia/16_2.webp', 'zdjecia/16_3.webp'),
(17, 19, 87500, 2017, 95400, 3600, 3, 305, 1, 1, 8, 5, 5, 6, 37, 'zdjecia/17_1.webp', 'zdjecia/17_2.webp', 'zdjecia/17_3.webp'),
(18, 20, 155448, 2023, 1, 1498, 1, 150, 1, 4, 9, 5, 5, 6, 12, 'zdjecia/18_1.webp', 'zdjecia/18_2.webp', 'zdjecia/18_3.webp'),
(19, 21, 5999, 1999, 296000, 1984, 3, 115, 2, 5, 8, 5, 5, 6, 26, 'zdjecia/19_1.webp', 'zdjecia/19_2.webp', 'zdjecia/19_3.webp'),
(20, 22, 49000, 2016, 63086, 1461, 4, 90, 2, 4, 6, 5, 5, 14, 24, 'zdjecia/20_1.webp', 'zdjecia/20_2.webp', 'zdjecia/20_3.webp'),
(21, 23, 35999, 2010, 214000, 1995, 1, 143, 2, 5, 8, 5, 5, 2, 24, 'zdjecia/21_1.webp', 'zdjecia/21_2.webp', 'zdjecia/21_3.webp'),
(22, 24, 23500, 2007, 282000, 1997, 1, 141, 2, 2, 9, 5, 5, 13, 17, 'zdjecia/22_1.webp', 'zdjecia/22_2.webp', 'zdjecia/22_3.webp');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynie_biegow`
--

CREATE TABLE `skrzynie_biegow` (
  `Id` int(9) NOT NULL,
  `Skrzynia_biegow` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `skrzynie_biegow`
--

INSERT INTO `skrzynie_biegow` (`Id`, `Skrzynia_biegow`) VALUES
(1, 'Automatyczna'),
(2, 'Manualna');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `Id` int(9) NOT NULL,
  `Logd` varchar(128) NOT NULL,
  `Haslo` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`Id`, `Logd`, `Haslo`, `Email`) VALUES
(10, '421bb24412b412b421', '$2y$10$sl..U3Bll9ewLEjxHZXy/ekNy3QxZ6Lg0mIgns/XD.K.ciVtmM31u', 'ADsda@dsadsa.com'),
(11, 'haram', '$2y$10$fgllL2A74E9ZEZfuRsWO7ue4IvpFb2ZHc5iVEo51V0TJe/hFC.Kpe', 'a@a.com'),
(12, 'darek691337', '$2y$10$3U2Hl57Wzabimb9jplvZoeeoYV.QMTbquicToOt30G5ReIUZGW.Ti', 'b@b.com'),
(13, 'gowno123', '$2y$10$VlcOQcE26U.OuRX56md88eJVaT6z/ixEwQ4iLA0mC6wUB6nWcow/a', 'c@c.com');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kolory`
--
ALTER TABLE `kolory`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `kraje`
--
ALTER TABLE `kraje`
  ADD PRIMARY KEY (`Id`);

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
-- Indeksy dla tabeli `nadwozia`
--
ALTER TABLE `nadwozia`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `napedy`
--
ALTER TABLE `napedy`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD PRIMARY KEY (`Id_s`),
  ADD KEY `Id_model` (`Id_model`),
  ADD KEY `Id_paliwo` (`Id_paliwo`),
  ADD KEY `Id_skrzynia_biegow` (`Id_skrzynia_biegow`),
  ADD KEY `Id_naped` (`Id_naped`),
  ADD KEY `Id_nadwozie` (`Id_nadwozie`),
  ADD KEY `Id_kolor` (`Id_kolor`),
  ADD KEY `Id_kraj` (`Id_kraj`);

--
-- Indeksy dla tabeli `skrzynie_biegow`
--
ALTER TABLE `skrzynie_biegow`
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
-- AUTO_INCREMENT dla tabeli `kolory`
--
ALTER TABLE `kolory`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT dla tabeli `kraje`
--
ALTER TABLE `kraje`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT dla tabeli `marki`
--
ALTER TABLE `marki`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT dla tabeli `nadwozia`
--
ALTER TABLE `nadwozia`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `napedy`
--
ALTER TABLE `napedy`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `paliwa`
--
ALTER TABLE `paliwa`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `samochody`
--
ALTER TABLE `samochody`
  MODIFY `Id_s` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `skrzynie_biegow`
--
ALTER TABLE `skrzynie_biegow`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `modele`
--
ALTER TABLE `modele`
  ADD CONSTRAINT `modele_ibfk_1` FOREIGN KEY (`Id_marki`) REFERENCES `marki` (`Id`);

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_2` FOREIGN KEY (`Id_model`) REFERENCES `modele` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_3` FOREIGN KEY (`Id_paliwo`) REFERENCES `paliwa` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_4` FOREIGN KEY (`Id_skrzynia_biegow`) REFERENCES `skrzynie_biegow` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_5` FOREIGN KEY (`Id_naped`) REFERENCES `napedy` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_6` FOREIGN KEY (`Id_nadwozie`) REFERENCES `nadwozia` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_7` FOREIGN KEY (`Id_kolor`) REFERENCES `kolory` (`Id`),
  ADD CONSTRAINT `samochody_ibfk_8` FOREIGN KEY (`Id_kraj`) REFERENCES `kraje` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
