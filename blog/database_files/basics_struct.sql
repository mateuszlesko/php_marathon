-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Maj 2019, 18:21
-- Wersja serwera: 10.1.34-MariaDB
-- Wersja PHP: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `blog_service`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `IdCategory` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf32_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`IdCategory`, `name`) VALUES
(1, 'lifestyle');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `posts`
--

CREATE TABLE `posts` (
  `IdPost` int(11) NOT NULL,
  `IDUser` int(11) DEFAULT NULL,
  `title` text COLLATE utf32_polish_ci,
  `content` text COLLATE utf32_polish_ci,
  `upload` date DEFAULT NULL,
  `IdCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`IdPost`, `IDUser`, `title`, `content`, `upload`, `IdCategory`) VALUES
(8, 1, 'faew', 'sadw', '2019-05-20', 1),
(9, 1, 'text pls next (edit)', 'something some other than before', '2019-05-21', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `profile_user`
--

CREATE TABLE `profile_user` (
  `IdProfile` int(11) NOT NULL,
  `IdUser` int(11) DEFAULT NULL,
  `IdCategory` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `profile_user`
--

INSERT INTO `profile_user` (`IdProfile`, `IdUser`, `IdCategory`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `IdUser` int(11) NOT NULL,
  `nickname` varchar(25) COLLATE utf32_polish_ci DEFAULT NULL,
  `psswrd` varchar(255) COLLATE utf32_polish_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf32_polish_ci DEFAULT NULL,
  `idProfile` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_polish_ci;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`IdUser`, `nickname`, `psswrd`, `email`, `idProfile`) VALUES
(0, 'rodo23', '4f6c319a947dd46fabe6fd97cad464a1', 'test1@wp.pl', NULL),
(1, 'ham-becon', '3fc0a7acf087f549ac2b266baf94b8b1', 'hambecon@xy.xy', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`IdCategory`);

--
-- Indeksy dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`IdPost`),
  ADD KEY `IDUser` (`IDUser`),
  ADD KEY `IdCategory` (`IdCategory`);

--
-- Indeksy dla tabeli `profile_user`
--
ALTER TABLE `profile_user`
  ADD PRIMARY KEY (`IdProfile`),
  ADD KEY `IdUser` (`IdUser`),
  ADD KEY `IdCategory` (`IdCategory`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `posts`
--
ALTER TABLE `posts`
  MODIFY `IdPost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `profile_user`
--
ALTER TABLE `profile_user`
  MODIFY `IdProfile` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`IDUser`) REFERENCES `users` (`IdUser`),
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`IdCategory`) REFERENCES `categories` (`IdCategory`);

--
-- Ograniczenia dla tabeli `profile_user`
--
ALTER TABLE `profile_user`
  ADD CONSTRAINT `profile_user_ibfk_1` FOREIGN KEY (`IdUser`) REFERENCES `users` (`IdUser`),
  ADD CONSTRAINT `profile_user_ibfk_2` FOREIGN KEY (`IdCategory`) REFERENCES `categories` (`IdCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
