-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 27 Mar 2023, 14:37
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
-- Struktura tabeli dla tabeli `kolory`
--

CREATE TABLE `kolory` (
  `Id` int(9) NOT NULL,
  `Kolor` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(59, 'Tesla'),
(60, 'Chevrolet');

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
(2, 'Cruze', 60),
(3, '6', 44),
(4, 'Astra', 12);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nadwozia`
--

CREATE TABLE `nadwozia` (
  `Id` int(9) NOT NULL,
  `Nadwozie` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `Id` int(9) NOT NULL,
  `Id_marka` int(9) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `samochody`
--

INSERT INTO `samochody` (`Id`, `Id_marka`, `Id_model`, `Cena_zl`, `Rok_produkcji`, `Przebieg_km`, `Pojemnosc_skokowa_cm3`, `Id_paliwo`, `Moc_KM`, `Id_skrzynia_biegow`, `Id_naped`, `Id_nadwozie`, `Liczba_drzwi`, `Liczba_miejsc`, `Id_kolor`, `Id_kraj`, `zdj_1`, `zdj_2`, `zdj_3`) VALUES
(1, 60, 2, 34200, 2012, 168000, 1364, 1, 140, 2, 4, 5, 5, 5, 6, 24, 'zdjecia/1_1.webp', 'zdjecia/1_2.webp', 'zdjecia/1_3.webp'),
(2, 44, 3, 63000, 2014, 140000, 2488, 1, 192, 1, 4, 8, 4, 5, 2, 26, 'zdjecia/2_1.webp', 'zdjecia/2_2.webp', 'zdjecia/2_3.webp'),
(3, 12, 4, 124900, 2022, 1, 1199, 1, 130, 1, 4, 6, 5, 5, 16, 26, 'zdjecia/3_1.webp', 'zdjecia/3_2.webp', 'zdjecia/3_3.webp');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skrzynie_biegow`
--

CREATE TABLE `skrzynie_biegow` (
  `Id` int(9) NOT NULL,
  `Skrzynia_biegow` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD PRIMARY KEY (`Id`),
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
-- AUTO_INCREMENT for dumped tables
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
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT dla tabeli `modele`
--
ALTER TABLE `modele`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `skrzynie_biegow`
--
ALTER TABLE `skrzynie_biegow`
  MODIFY `Id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Ograniczenia dla tabeli `samochody`
--
ALTER TABLE `samochody`
  ADD CONSTRAINT `samochody_ibfk_1` FOREIGN KEY (`Id_marka`) REFERENCES `marki` (`Id`),
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