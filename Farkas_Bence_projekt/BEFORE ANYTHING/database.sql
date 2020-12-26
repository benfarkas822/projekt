-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 25. 17:24
-- Kiszolgáló verziója: 10.4.17-MariaDB
-- PHP verzió: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `farkas_bence_projekt`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `mpaf`
--

CREATE TABLE `mpaf` (
  `Id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `col` int(11) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `mpaf`
--

INSERT INTO `mpaf` (`Id`, `name`, `col`, `position`) VALUES
(1, 'dog', 1, 6),
(2, 'cat', 2, 5),
(3, 'frog', 2, 6),
(4, 'cow', 2, 4),
(5, 'sheep', 1, 2),
(6, 'lion', 2, 3),
(7, 'pound', 2, 1),
(8, 'fish', 2, 2),
(9, 'foot', 1, 3),
(10, 'milk', 1, 4),
(11, 'super', 1, 5),
(12, 'heart', 1, 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`usersId`, `usersUid`, `usersPwd`) VALUES
(1, 'admin', '$2y$10$BK0ecAQiSnE.DOS0JaBXjurrXzJksixHmYPCqpTaU1KFmO.92ikeu');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `mpaf`
--
ALTER TABLE `mpaf`
  ADD PRIMARY KEY (`Id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `mpaf`
--
ALTER TABLE `mpaf`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
