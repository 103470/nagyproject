-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Nov 29. 23:37
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `nagyproject`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `answers`
--

CREATE TABLE `answers` (
  `id` int(255) NOT NULL,
  `qid` int(255) NOT NULL,
  `answer` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `answers`
--

INSERT INTO `answers` (`id`, `qid`, `answer`) VALUES
(215, 62, '9'),
(216, 62, '10'),
(217, 62, '11'),
(218, 62, '12'),
(223, 92, '2 × 5 perc'),
(224, 92, '2 × 10 perc'),
(225, 92, '2 × 15 perc '),
(226, 92, '2 × 30 perc'),
(227, 10, '1'),
(228, 10, '2'),
(229, 10, '3'),
(230, 10, '4'),
(231, 44, '2 × 45'),
(232, 44, '2 × 90'),
(233, 44, '3 × 15'),
(234, 44, '3 × 20'),
(235, 29, '1'),
(236, 29, '3'),
(237, 29, '2'),
(238, 29, '4'),
(239, 5, '6'),
(240, 5, '7'),
(241, 5, '9'),
(242, 5, '11'),
(243, 76, 'Nemzetközi Labdarúgó-Szövetség'),
(244, 76, 'Európai Labdarúgó-Szövetség'),
(245, 76, 'Angol Labdarúgó-Szövetség'),
(246, 76, 'Olasz Labdarúgó-Szövetség');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `prediction`
--

CREATE TABLE `prediction` (
  `id` int(255) NOT NULL,
  `question` varchar(65) NOT NULL,
  `sn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `prediction`
--

INSERT INTO `prediction` (`id`, `question`, `sn`) VALUES
(3, 'Mit gondolsz, melyik nemzet nyeri meg a világbajnokságot?', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `qid` int(255) NOT NULL,
  `questions` varchar(65) NOT NULL,
  `choice` int(255) NOT NULL,
  `sn` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `questions`
--

INSERT INTO `questions` (`id`, `qid`, `questions`, `choice`, `sn`) VALUES
(74, 62, 'Hány mezőnyjátékos játszik egyszerre a fociban?', 4, 1),
(76, 92, 'Döntetlennél mennyi a hosszabbítás?', 4, 2),
(77, 10, 'Hány partjelző van?', 4, 3),
(78, 44, 'Mennyi a játékidő normál esetben?', 4, 4),
(79, 29, 'Hány sárgalapot kaphat egy meccsen egy játékos?', 4, 5),
(80, 5, 'Hány méterről rúgják a büntetőt a fociban?', 4, 6),
(81, 76, 'Minek a rövidítése a FIFA?', 4, 7);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `result`
--

CREATE TABLE `result` (
  `id` int(255) NOT NULL,
  `question` varchar(65) NOT NULL,
  `answer` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `result`
--

INSERT INTO `result` (`id`, `question`, `answer`) VALUES
(1, '', ''),
(2, '', ''),
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', ''),
(11, '', ''),
(12, 'Array', ''),
(13, 'Array', ''),
(14, 'Array', ''),
(15, '', ''),
(16, '', ''),
(17, '', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `useranswer`
--

CREATE TABLE `useranswer` (
  `id` int(255) NOT NULL,
  `question` varchar(65) NOT NULL,
  `answer` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `useranswer`
--

INSERT INTO `useranswer` (`id`, `question`, `answer`) VALUES
(20, 'Hány mezőnyjátékos játszik egyszerre a fociban? ', '10'),
(21, 'Döntetlennél mennyi a hosszabbítás? ', '2 × 15 perc '),
(22, 'Hány partjelző van? ', '2'),
(23, 'Mennyi a játékidő normál esetben? ', '2 × 45'),
(24, 'Hány sárgalapot kaphat egy meccsen egy játékos? ', '2'),
(25, 'Hány méterről rúgják a büntetőt a fociban? ', '11'),
(26, 'Minek a rövidítése a FIFA? ', 'Nemzetközi Labdarúgó-Szövetség'),
(27, 'Hány mezőnyjátékos játszik egyszerre a fociban? ', '10'),
(28, 'Döntetlennél mennyi a hosszabbítás? ', '2 × 15 perc '),
(29, 'Hány partjelző van? ', '2'),
(30, 'Mennyi a játékidő normál esetben? ', '2 × 45'),
(31, 'Hány sárgalapot kaphat egy meccsen egy játékos? ', '2'),
(32, 'Hány méterről rúgják a büntetőt a fociban? ', '9'),
(33, 'Minek a rövidítése a FIFA? ', 'Olasz Labdarúgó-Szövetség'),
(34, 'Minek a rövidítése a FIFA? ', 'Olasz Labdarúgó-Szövetség');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `userprediction`
--

CREATE TABLE `userprediction` (
  `id` int(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `userprediction`
--

INSERT INTO `userprediction` (`id`, `question`, `answer`) VALUES
(5, 'Mit gondolsz, melyik nemzet nyeri meg a világbajnokságot? ', 'Argentína'),
(6, 'Mit gondolsz, melyik nemzet nyeri meg a világbajnokságot? ', 'Magyar');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` int(255) NOT NULL,
  `password_2` int(255) NOT NULL,
  `email` varchar(65) NOT NULL,
  `name` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `password_2`, `email`, `name`) VALUES
(1, 'admin', 21232, 0, 'admin@admin.com', 'Admin');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `prediction`
--
ALTER TABLE `prediction`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `useranswer`
--
ALTER TABLE `useranswer`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `userprediction`
--
ALTER TABLE `userprediction`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT a táblához `prediction`
--
ALTER TABLE `prediction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT a táblához `result`
--
ALTER TABLE `result`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT a táblához `useranswer`
--
ALTER TABLE `useranswer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `userprediction`
--
ALTER TABLE `userprediction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
