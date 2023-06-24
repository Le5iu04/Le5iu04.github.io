-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Maj 15, 2023 at 02:56 PM
-- Wersja serwera: 10.4.28-MariaDB
-- Wersja PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earthdawn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `przeciwnicy`
--

CREATE TABLE `przeciwnicy` (
  `ID` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Atak` text NOT NULL,
  `Obrazenia` text NOT NULL,
  `Obr_fiz` int(11) NOT NULL,
  `Obr_mag` int(11) NOT NULL,
  `Obr_spol` int(11) NOT NULL,
  `Pancerz` int(11) NOT NULL,
  `Prog_Zycia` int(11) NOT NULL,
  `Prog_Przyt` int(11) NOT NULL,
  `Czary` tinyint(1) NOT NULL,
  `Predkosc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `przeciwnicy`
--

INSERT INTO `przeciwnicy` (`ID`, `Nazwa`, `Atak`, `Obrazenia`, `Obr_fiz`, `Obr_mag`, `Obr_spol`, `Pancerz`, `Prog_Zycia`, `Prog_Przyt`, `Czary`, `Predkosc`) VALUES
(77, 'Tęgi łupieżca', 'k10+k6', '2k6', 7, 6, 7, 5, 37, 19, 0, '150/75'),
(78, 'Pancerny glut', '2k6', 'k20+k4', 12, 12, 5, 6, 67, 34, 1, '100/50'),
(79, 'Ropiejący stawonóg', 'k20+k6', 'k20+k6', 9, 11, 6, 4, 47, 24, 0, '100/50'),
(80, 'Wielogłowy kapitan', 'k20+k6', 'k20+k4', 8, 6, 6, 3, 57, 37, 0, '130/65'),
(81, 'Lodowy obrońca', 'k10+k6', 'k12+k10', 12, 7, 8, 1, 55, 46, 1, '50/25');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `przeciwnicy`
--
ALTER TABLE `przeciwnicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `przeciwnicy`
--
ALTER TABLE `przeciwnicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
