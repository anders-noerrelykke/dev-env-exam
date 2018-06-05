-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Vært: 127.0.0.1
-- Genereringstid: 29. 04 2018 kl. 23:24:06
-- Serverversion: 5.7.11
-- PHP-version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websec`
--

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `content` varchar(200) DEFAULT NULL,
  `timestamp` timestamp(2) NULL DEFAULT NULL,
  `Users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `comments`
--

INSERT INTO `comments` (`id`, `content`, `timestamp`, `Users_id`) VALUES
(1, 'fdgfghfh', '2018-04-29 22:57:14.00', 17),
(2, 'dsfdsfsdf', '2018-04-29 22:57:48.00', 19),
(3, 'dfd', '2018-04-29 23:02:34.00', 19),
(4, 'dfdsfsd', '2018-04-29 23:05:35.00', 19),
(5, 'vdfdf', '2018-04-29 23:06:39.00', 19),
(6, 'eree', '2018-04-29 23:07:38.00', 49),
(7, 'dfdgdg', '2018-04-29 23:11:52.00', 49),
(8, 'fdgfdg', '2018-04-29 23:19:19.00', 49),
(9, 'written by user A', '2018-04-29 23:19:39.00', 19),
(10, 'written by user B - the one and only', '2018-04-29 23:20:04.00', 49),
(11, 'I\'m C', '2018-04-29 23:22:25.00', 17);

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `timestamp` timestamp(2) NULL DEFAULT NULL,
  `failcount` tinyint(1) DEFAULT NULL,
  `Users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur-dump for tabellen `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for tabellen `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `firstname`, `lastname`, `role`, `password`) VALUES
(1, 'admin', 'a@a.a', 'admin', 'adminsen', 1, '1234'),
(17, 'c', 'c', 'c', 'c', 0, '$2y$12$MbLwecFznKuDKzfxsj8F8O80uvH3v.uLy1HTF8iGolAzVopFX9SZO'),
(18, 'd', 'd', 'd', 'd', 0, '$2y$12$RRcZo0wWCZYrbmrv/G6px.r2OMdd9AWnHPg2NpIGcBXvWn7GPSn9C'),
(19, 'a', 'a', 'a', 'a', 0, '$2y$12$6e.9XRicHMeRxaeqJkKrPOGNew6upDfbs2ps8hEStbpENIa.RHqmO'),
(38, 'm', 'm', 'm', 'm', 0, '$2y$12$y/WgmJm0EyQ/VyFg8bUpy.DdNeWpLDK8wbWt/9z.Z8JnD7i2w0SIW'),
(45, 'l', 'l', 'l', 'l', 0, '$2y$12$Au.RyTRVhKxpMrGOxdBXs.mUsWuwNXuXm94vNSWHxxDqs8pLtREzW'),
(46, 'v', 'v', 'v', 'v', 0, '$2y$12$h.KbqJLXe7NYHaQNCw.GBee4FodXOIFBIjLgAs2hAPcDwqC9UWivG'),
(49, 'b', 'b', 'b', 'b', 0, '$2y$12$oLTSsjDkj4cJhAeIm/rkCub41FyyrPLDZLYNzTdnOOJY6RPn37wpS'),
(50, 'o', 'o', 'o', 'o', 0, '$2y$12$sbPKn7HbPolSFUD2zdX6T.oaK9dCZpbcE1VKq0ycSBS3z3D.BeTau'),
(51, 'alert(\'x\')', 'alert(\'x\')', 'alert(\'x\')', 'alert(\'x\')', 0, '$2y$12$iHrQjYiwT1.nDwuFUgGxl.n5tYJtTWYHu1XtQXR/418pocyoBjj8K'),
(52, '%5C%22', '%5C%22', '%5C%22', '%5C%22', 0, '$2y$12$HAoi/G5sDKUXdusNVpsK6urCqP9iCy2sfwByAKjWigssdoTZOwLn2'),
(53, '%22', '%22', '%22', '%22', 0, '$2y$12$pncNgDqw5/rTElYSsRs7C..fO.qWey4xw9U8FLgFqrJPi95IgDOdq'),
(54, 'j', 'j', 'j', 'j', 0, '$2y$12$i1hc0..00ulVHyq3/MpivuzrtYR9c2qPhPPn6z.XFpSmwFxekii9y');

--
-- Begrænsninger for dumpede tabeller
--

--
-- Indeks for tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Comments_Users1_idx` (`Users_id`),
  ADD KEY `Users_id` (`Users_id`);

--
-- Indeks for tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Login_Attempts_Users_idx` (`Users_id`);

--
-- Indeks for tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Brug ikke AUTO_INCREMENT for slettede tabeller
--

--
-- Tilføj AUTO_INCREMENT i tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tilføj AUTO_INCREMENT i tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Tilføj AUTO_INCREMENT i tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- Begrænsninger for dumpede tabeller
--

--
-- Begrænsninger for tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_Comments_Users1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Begrænsninger for tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD CONSTRAINT `fk_Login_Attempts_Users` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
