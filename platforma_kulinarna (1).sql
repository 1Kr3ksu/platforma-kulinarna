-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2024 at 01:22 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `platforma_kulinarna`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przepisy`
--

CREATE TABLE `przepisy` (
  `ID` int(11) NOT NULL,
  `tytul` varchar(64) NOT NULL,
  `opis` text DEFAULT NULL,
  `Składniki` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przepisy`
--

INSERT INTO `przepisy` (`ID`, `tytul`, `opis`, `Składniki`) VALUES
(5, 'Zapiekanka makaronowa z szynka', '300 g makaronu np. penne - waga przed ugotowaniem 200 g ulubionej szynki w plasterkach 100 g sera cheddar lub parmezanu 100 g sera mozzarella w kostce 125 mleka lub śmietanki do zup i sosów - pół szklanki 3 łyżki oleju do smażenia - do 30 ml 1 nieduża papryka np. czerwona - około 220 g 2 małe lub 1 większa cukinia - łącznie około 320 g 1 spora cebula - około 220 g 3 ząbki czosnku - około 15 g 1 łyżka mieszanki przypraw np. gyros kebab - do 15 g', ''),
(20, 'Pizza z Szynką i Salami', 'Ciasto:30 g świeżych drożdży, o temperaturze pokojowej 1 łyżeczka cukru 1 (niepełna) szklanka ciepłej wody 400 g mąki pszennej 1 łyżeczka soli 3 łyżki oliwy z oliwek + do posmarowania blach            ', 'Ciasto:30 g świeżych drożdży, o temperaturze pokojowej 1 łyżeczka cukru 1 (niepełna) szklanka ciepłej wody 400 g mąki pszennej 1 łyżeczka soli 3 łyżki oliwy z oliwek + do posmarowania blach            ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przepisy`
--
ALTER TABLE `przepisy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przepisy`
--
ALTER TABLE `przepisy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
