-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Ápr 05. 15:49
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `thoughtcloud`
--
CREATE DATABASE IF NOT EXISTS `thoughtcloud` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `thoughtcloud`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_header` varchar(50) NOT NULL,
  `blog_text` varchar(1000) NOT NULL,
  `blog_category` varchar(30) NOT NULL,
  `blog_img` varchar(50) DEFAULT NULL,
  `blog_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `blogs`
--

INSERT INTO `blogs` (`blog_id`, `user_id`, `blog_header`, `blog_text`, `blog_category`, `blog_img`, `blog_date`) VALUES
(1, 1, 'Mi az a blog?', 'A blog egy internetes napló, vagy újság, ami általában egy webhelyen részét képezi, vagy saját webhely. A blogok tartalmait általában bejegyzések, azok tartalmait pedig szövegek, képek, videók, hanganyagok, és egyéb tartalmak alkotják. A „blog” szó a „weblog”, tehát „webes napló” rövidítéséből jött létre.', 'Minden', 'blog-img.jpg', '2020-04-03 06:26:38'),
(2, 1, 'Egy tisztességes Blog', 'Returns the portion of string specified by the start and length parameters.', 'Programozás', NULL, '2020-04-03 06:43:13'),
(4, 1, 'A kávé hatalma', 'Ki szereti a kávét? 😋', 'Szabadidő', 'coddeee.jpg', '2020-04-03 06:47:03'),
(5, 1, 'Ide hogy lehetne megoldani az oldalléptetést ?', 'Ádám tűnődik... ', 'Programozás', NULL, '2020-04-03 06:47:58'),
(6, 1, 'A lorem ipsum', 'A Lorem Ipsum részleteinek sok változata elérhetõ, de a legtöbbet megváltoztatták egy kis humorral és véletlenszerûen kiválasztott szavakkal, amik kicsit sem teszik értelmessé. Ha használni készülsz a Lorem Ipsumot, biztosnak kell lenned abban, hogy semmi kínos sincs elrejtve a szöveg közepén. Az összes internetes Lorem Ipsum készítõ igyekszik elõre beállított részleteket ismételni a szükséges mennyiségben, ezzel téve az internet egyetlen igazi Lorem Ipsum generátorává ezt az oldalt. Az oldal kö', 'Minden', NULL, '2020-04-03 07:21:10'),
(7, 1, 'A Lorem Ipsum története', 'A hiedelemmel ellentétben a Lorem Ipsum nem véletlenszerû szöveg. Gyökerei egy Kr. E. 45-ös latin irodalmi klasszikushoz nyúlnak. Richarrd McClintock a virginiai Hampden-Sydney egyetem professzora kikereste az ismeretlenebb latin szavak közül az egyiket (consectetur) egy Lorem Ipsum részletbõl, és a klasszikus irodalmat átkutatva vitathatatlan forrást talált. A Lorem Ipsum az 1.10.32 és 1.10.33-as de Finibus Bonoruem et Malorum részleteibõl származik (A Jó és Rossz határai - Cicero), Kr. E. 45-bõl. A könyv az etika elméletét tanulmányozza, ami nagyon népszerû volt a reneszánsz korban. A Lorem Ipsum elsõ sora, Lorem ipsum dolor sit amet.. a 1.10.32-es bekezdésbõl származik.\r\n\r\nA Lorem Ipsum alaprészlete, amit az 1500-as évek óta használtak, az érdeklõdõk kedvéért lent újra megtekinthetõ. Az 1.10.32 és 1.10.33-as bekezdéseket szintén eredeti formájukban reprodukálták a hozzá tartozó angol változattal az 1914-es fordításból H. Rackhamtól', 'Programozás', NULL, '2020-04-04 07:48:18'),
(8, 1, 'Honnan szerezhető be a Lorem Ipsum?', 'A Lorem Ipsum részleteinek sok változata elérhetõ, de a legtöbbet megváltoztatták egy kis humorral és véletlenszerûen kiválasztott szavakkal, amik kicsit sem teszik értelmessé. Ha használni készülsz a Lorem Ipsumot, biztosnak kell lenned abban, hogy semmi kínos sincs elrejtve a szöveg közepén. Az összes internetes Lorem Ipsum készítõ igyekszik elõre beállított részleteket ismételni a szükséges mennyiségben, ezzel téve az internet egyetlen igazi Lorem Ipsum generátorává ezt az oldalt. Az oldal körülbelül 200 latin szót használ, egy maroknyi modell-mondatszerkezettel így téve a Lorem Ipsumot elfogadhatóvá. Továbbá az elkészült Lorem Ipsum humortól, ismétlõdéstõl vagy értelmetlen szavaktól mentes.', 'Programozás', NULL, '2020-04-04 07:48:50');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `action` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `likes`
--

INSERT INTO `likes` (`like_id`, `user_id`, `post_id`, `action`) VALUES
(6, 1, 30, 'like'),
(7, 1, 1, 'like'),
(12, 2, 1, 'like'),
(15, 2, 31, 'like'),
(17, 2, 32, 'like'),
(18, 1, 31, 'like'),
(29, 1, 33, 'like'),
(30, 2, 33, 'like'),
(31, 2, 19, 'like'),
(32, 2, 29, 'like'),
(33, 1, 19, 'like'),
(34, 1, 34, 'like');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_text` varchar(500) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `posts`
--

INSERT INTO `posts` (`post_id`, `post_text`, `user_id`, `post_date`) VALUES
(1, 'Sziasztok!', 1, '2020-04-02 04:57:34'),
(19, 'Üdvözlök mindenkit! ', 2, '2020-04-02 05:38:21'),
(29, 'Na sziasztok, megjöttem énis!', 3, '2020-04-02 07:36:24'),
(33, 'Nézzétek a blogot 💩', 1, '2020-04-03 07:24:10'),
(34, 'Nem tudom, mi baja a kereséses sql lekérdezésmnek, miért nem query-zik, és miért dob mysqli hibát amikor a phpmyadminba lefutattható az sql', 1, '2020-04-04 08:40:06'),
(35, 'Milyen funkciókat lehetne még beletenni az oldalba', 1, '2020-04-05 10:45:31');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(30) NOT NULL,
  `user_second_name` varchar(30) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_bio` varchar(500) NOT NULL DEFAULT 'A felhasználó még nem írt magáról.',
  `user_work_place` varchar(50) NOT NULL DEFAULT 'A felhasználó még nem adott meg munkahelyet.',
  `user_school` varchar(50) NOT NULL DEFAULT 'A felhasználó még nem adott meg tanulmányt',
  `user_profile_puc` varchar(30) NOT NULL DEFAULT 'user-profile.jpg',
  `user_bg_pic` varchar(50) NOT NULL DEFAULT 'basicbackground.jpg',
  `user_city` varchar(30) NOT NULL,
  `user_county` varchar(30) NOT NULL,
  `user_zipcode` int(5) NOT NULL,
  `user_regdate` datetime NOT NULL,
  `user_last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`user_id`, `user_first_name`, `user_second_name`, `user_password`, `user_email`, `user_bio`, `user_work_place`, `user_school`, `user_profile_puc`, `user_bg_pic`, `user_city`, `user_county`, `user_zipcode`, `user_regdate`, `user_last_login`) VALUES
(1, 'Török', 'Ádám', 'teszt', 'woltery99@outlook.hu', '', '', 'Vasvári Pál', '5.jpg', 'cyberpunk-sci-fi-art-38-4k.jpg', 'Szentes', 'Csongrád', 6600, '2020-04-01 05:02:40', '0000-00-00 00:00:00'),
(2, 'Teszt', 'Elek', 'teszt', 'tesztelek@teszter.hu', 'A felhasználó még nem írt magáról.', 'A felhasználó még nem adott meg munkahelyet.', 'A felhasználó még nem adott meg tanulmányt', 'asdfsadf.PNG', 'fadsfadsf.PNG', 'Szentes', 'Csongrád', 6600, '2020-04-02 05:11:40', '0000-00-00 00:00:00'),
(3, 'Teszt', 'Laci', 'teszter', 'tesztlaszlo@teszt.hu', '', '', 'Még nincs', 'user-profile.jpg', 'basicbackground.jpg', 'Szeged', 'Csongrád', 6725, '2020-04-02 07:35:29', '0000-00-00 00:00:00');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`);

--
-- A tábla indexei `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- A tábla indexei `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `post_text` (`post_text`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT a táblához `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT a táblához `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
