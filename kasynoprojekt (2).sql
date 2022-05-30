-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Maj 2022, 20:24
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
-- Baza danych: `kasynoprojekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `finanse`
--

CREATE TABLE `finanse` (
  `idtransakcji` int(11) NOT NULL,
  `kwota` float NOT NULL,
  `operacja` enum('wplata','wyplata') COLLATE utf8mb4_polish_ci NOT NULL,
  `dataoperacji` datetime NOT NULL,
  `login` varchar(32) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `finanse`
--

INSERT INTO `finanse` (`idtransakcji`, `kwota`, `operacja`, `dataoperacji`, `login`) VALUES
(2, 1000, 'wplata', '2022-05-27 19:08:59', 'user'),
(3, 123, 'wplata', '2022-05-27 09:17:23', 'user'),
(4, 123, 'wplata', '2022-05-27 09:17:42', 'user'),
(5, 123, 'wplata', '2022-05-27 09:19:13', 'user'),
(6, 123, 'wplata', '2022-05-27 09:19:49', 'user'),
(7, 1000, 'wplata', '2022-05-27 09:19:54', 'user'),
(8, 1, 'wplata', '2022-05-27 09:29:15', 'user'),
(9, 2, 'wplata', '2022-05-27 09:29:37', 'user'),
(10, 2, 'wplata', '2022-05-27 09:33:52', 'user'),
(11, 700, 'wplata', '2022-05-27 09:34:00', 'user'),
(12, 10, 'wplata', '2022-05-27 09:34:10', 'user'),
(13, 700, 'wplata', '2022-05-27 09:35:26', 'user'),
(14, 500, 'wplata', '2022-05-27 09:35:31', 'user'),
(15, 1, 'wplata', '2022-05-27 09:35:36', 'user'),
(16, 3, 'wplata', '2022-05-27 09:35:47', 'user'),
(17, 4, 'wplata', '2022-05-27 09:36:05', 'user'),
(18, 4, 'wplata', '2022-05-27 09:36:27', 'user'),
(19, 4, 'wplata', '2022-05-27 09:36:33', 'user'),
(20, 4, 'wplata', '2022-05-27 09:36:36', 'user'),
(21, 10, 'wplata', '2022-05-27 09:36:39', 'user'),
(22, 10, 'wplata', '2022-05-27 09:36:58', 'user'),
(23, 10, 'wplata', '2022-05-27 09:37:04', 'user'),
(24, 20, 'wplata', '2022-05-27 09:37:07', 'user'),
(25, 11, 'wplata', '2022-05-27 09:38:19', 'user'),
(26, 1, 'wplata', '2022-05-27 09:38:24', 'user'),
(27, 111, 'wplata', '2022-05-27 09:39:03', 'user'),
(28, 111, 'wplata', '2022-05-27 09:39:21', 'user'),
(29, 1, 'wplata', '2022-05-27 09:40:00', 'user'),
(30, 100, 'wplata', '2022-05-27 09:40:04', 'user'),
(31, 111, 'wplata', '2022-05-27 09:40:35', 'user'),
(32, 111, 'wplata', '2022-05-27 09:40:40', 'user'),
(33, 100, 'wplata', '2022-05-27 09:40:44', 'user'),
(34, 100, 'wplata', '2022-05-27 09:40:50', 'user'),
(35, 111, 'wplata', '2022-05-27 09:41:12', 'user'),
(36, 100, 'wplata', '2022-05-27 09:41:15', 'user'),
(37, 100, 'wplata', '2022-05-27 09:41:22', 'user'),
(38, 100, 'wplata', '2022-05-27 09:41:37', 'user'),
(39, 100, 'wplata', '2022-05-27 09:41:41', 'user'),
(40, 100, 'wplata', '2022-05-27 09:42:20', 'user'),
(41, 100, 'wplata', '2022-05-27 09:42:39', 'user'),
(42, 100, 'wplata', '2022-05-27 09:43:01', 'user'),
(43, 100, 'wplata', '2022-05-27 09:44:06', 'user'),
(44, 100, 'wplata', '2022-05-27 09:44:31', 'user'),
(45, 100, 'wplata', '2022-05-27 09:44:32', 'user'),
(46, 100, 'wplata', '2022-05-27 09:44:32', 'user'),
(47, 100, 'wplata', '2022-05-27 09:44:32', 'user'),
(48, 100, 'wplata', '2022-05-27 09:45:30', 'user'),
(49, 100, 'wplata', '2022-05-27 09:46:13', 'user'),
(50, 100, 'wplata', '2022-05-27 09:46:45', 'user'),
(51, 100, 'wplata', '2022-05-27 09:47:02', 'user'),
(52, 100, 'wplata', '2022-05-27 09:47:05', 'user'),
(53, 200, 'wplata', '2022-05-27 09:47:09', 'user'),
(54, 500, 'wplata', '2022-05-27 09:47:13', 'user'),
(55, 1, 'wplata', '2022-05-27 09:47:16', 'user'),
(56, 32, 'wplata', '2022-05-27 21:54:39', 'user'),
(57, 33, 'wplata', '2022-05-27 21:56:58', 'user'),
(58, 3, 'wplata', '2022-05-27 21:57:22', 'user'),
(59, 3, 'wplata', '2022-05-27 21:57:26', 'user'),
(60, 100, 'wplata', '2022-05-28 18:10:19', 'user'),
(61, 100, 'wyplata', '2022-05-28 18:14:30', 'user'),
(62, 11, 'wyplata', '2022-05-28 18:14:33', 'user'),
(63, 1000, 'wyplata', '2022-05-28 18:14:38', 'user'),
(64, 62, 'wyplata', '2022-05-28 18:14:47', 'user'),
(65, 1000, 'wplata', '2022-05-28 18:14:50', 'user'),
(66, 1000, 'wplata', '2022-05-29 17:32:58', 'user'),
(67, 2000, 'wyplata', '2022-05-29 17:33:01', 'user'),
(68, 100, 'wplata', '2022-05-29 17:33:09', 'user'),
(69, 133, 'wplata', '2022-05-29 19:38:54', 'user'),
(70, 3333, 'wplata', '2022-05-29 19:44:30', 'user'),
(71, 1000, 'wplata', '2022-05-29 22:00:13', 'user'),
(72, 111111, 'wplata', '2022-05-29 23:29:12', 'user'),
(73, 10000, 'wyplata', '2022-05-30 00:07:52', 'user'),
(74, 10000, 'wyplata', '2022-05-30 00:07:58', 'user'),
(75, 10000, 'wyplata', '2022-05-30 00:08:02', 'user'),
(76, 847141, 'wyplata', '2022-05-30 00:08:05', 'user'),
(77, 1000, 'wplata', '2022-05-30 13:53:55', 'user'),
(78, 1000, 'wplata', '2022-05-30 16:56:19', 'admin'),
(79, 1000, 'wplata', '2022-05-30 16:56:19', 'admin'),
(80, 1000, 'wplata', '2022-05-30 13:53:55', 'user'),
(81, 1000, 'wplata', '2022-05-30 16:56:19', 'admin'),
(82, 1000, 'wplata', '2022-05-30 16:56:19', 'admin'),
(83, 123, 'wplata', '2022-05-30 19:53:20', 'JAN');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logs`
--

CREATE TABLE `logs` (
  `idlog` int(11) NOT NULL,
  `idosoby` int(11) NOT NULL,
  `action` int(11) NOT NULL,
  `data` int(11) NOT NULL,
  `poprzedniawatosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoby`
--

CREATE TABLE `osoby` (
  `idosoby` int(11) NOT NULL,
  `imie` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `pesel` int(11) NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `miejscowosc` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `ulica` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `nrdomu` varchar(10) COLLATE utf8mb4_polish_ci NOT NULL,
  `nrmieszkania` varchar(10) COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `kodpocztowy` varchar(10) COLLATE utf8mb4_polish_ci NOT NULL,
  `dostepnakwota` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `osoby`
--

INSERT INTO `osoby` (`idosoby`, `imie`, `nazwisko`, `pesel`, `login`, `haslo`, `miejscowosc`, `ulica`, `nrdomu`, `nrmieszkania`, `kodpocztowy`, `dostepnakwota`) VALUES
(1, '123', '123', 321323221, 'user', 'user', 'uer321', 'es31', '22', '2', '00-000', 1000),
(10, 'admin', 'admin', 11, 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 'admin', 2234),
(14, 'JAN', 'JAN', 123, 'JAN', 'JAN', 'JAN', 'JAN', 'JAN', 'JAN', 'JAN', 123);

--
-- Wyzwalacze `osoby`
--
DELIMITER $$
CREATE TRIGGER `addRoleUSER` AFTER INSERT ON `osoby` FOR EACH ROW INSERT INTO `role_osoby_katalog` (`idosoby`, `idroli`) VALUES (NEW.idosoby, '2')
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE `role` (
  `idroli` int(11) NOT NULL,
  `nazwaroli` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `aktywna` tinyint(1) NOT NULL,
  `datautworzenia` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`idroli`, `nazwaroli`, `aktywna`, `datautworzenia`) VALUES
(1, 'ADMIN', 1, '2022-05-22 17:59:09'),
(2, 'GRACZ', 1, '2022-05-23 13:47:04');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `role_osoby_katalog`
--

CREATE TABLE `role_osoby_katalog` (
  `idosoby` int(11) NOT NULL,
  `idroli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `role_osoby_katalog`
--

INSERT INTO `role_osoby_katalog` (`idosoby`, `idroli`) VALUES
(1, 1),
(14, 2);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `finanse`
--
ALTER TABLE `finanse`
  ADD PRIMARY KEY (`idtransakcji`),
  ADD KEY `idosoby` (`login`);

--
-- Indeksy dla tabeli `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`idosoby`),
  ADD UNIQUE KEY `loginuniq` (`login`);

--
-- Indeksy dla tabeli `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`idroli`);

--
-- Indeksy dla tabeli `role_osoby_katalog`
--
ALTER TABLE `role_osoby_katalog`
  ADD KEY `idosoby` (`idosoby`),
  ADD KEY `idroli` (`idroli`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `finanse`
--
ALTER TABLE `finanse`
  MODIFY `idtransakcji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT dla tabeli `osoby`
--
ALTER TABLE `osoby`
  MODIFY `idosoby` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `role`
--
ALTER TABLE `role`
  MODIFY `idroli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `finanse`
--
ALTER TABLE `finanse`
  ADD CONSTRAINT `finanse_ibfk_1` FOREIGN KEY (`login`) REFERENCES `osoby` (`login`);

--
-- Ograniczenia dla tabeli `role_osoby_katalog`
--
ALTER TABLE `role_osoby_katalog`
  ADD CONSTRAINT `role_osoby_katalog_ibfk_1` FOREIGN KEY (`idosoby`) REFERENCES `osoby` (`idosoby`),
  ADD CONSTRAINT `role_osoby_katalog_ibfk_2` FOREIGN KEY (`idroli`) REFERENCES `role` (`idroli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
