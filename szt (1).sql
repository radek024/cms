-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Lis 2016, 22:13
-- Wersja serwera: 10.1.13-MariaDB
-- Wersja PHP: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `szt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `id_art` bigint(20) UNSIGNED NOT NULL,
  `tytul` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `autor` int(11) NOT NULL,
  `data` date NOT NULL,
  `kategoria` int(11) DEFAULT '1',
  `tresc` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `artykuly`
--

INSERT INTO `artykuly` (`id_art`, `tytul`, `autor`, `data`, `kategoria`, `tresc`) VALUES
(5, 'Inni grajÄ…', 2, '2016-11-12', 11, 'moim losem/ja milczÄ™ jak pies'),
(7, '2222', 12, '2016-11-15', 1, '113'),
(8, 'asdsa', 12, '2016-11-01', 12, ''),
(9, 'Test kategorii', 1, '2015-11-02', 0, 'Czy zaÅ¼Ã³Å‚cenie gÄ™Å›lej jaÅºni wpÅ‚ynie na kategorie?'),
(10, 'ZaÅ¼Ã³Å‚Ä‡ gÄ™Å›lÄ… jaÅºÅ„', 1, '2016-11-20', 0, 'Test'),
(11, 'kattsss', 1, '2016-11-25', 11, '');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `autor`
--

CREATE TABLE `autor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pseduo` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `login` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `haslo` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kategorie`
--

CREATE TABLE `kategorie` (
  `id_kat` bigint(20) UNSIGNED NOT NULL,
  `nazwa` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `opis` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Zrzut danych tabeli `kategorie`
--

INSERT INTO `kategorie` (`id_kat`, `nazwa`, `opis`) VALUES
(1, 'Nie okreÅ›lono', 'nie wiadomo, co to jest'),
(11, 'JavaScript', 'teessttow'),
(12, 'Muzyka', 'Dobry beat to podstawa');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `artykuly`
--
ALTER TABLE `artykuly`
  ADD UNIQUE KEY `id` (`id_art`);

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `kategorie`
--
ALTER TABLE `kategorie`
  ADD UNIQUE KEY `id` (`id_kat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `id_art` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT dla tabeli `autor`
--
ALTER TABLE `autor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT dla tabeli `kategorie`
--
ALTER TABLE `kategorie`
  MODIFY `id_kat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
