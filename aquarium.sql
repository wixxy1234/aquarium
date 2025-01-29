-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 16 2025 г., 09:55
-- Версия сервера: 5.7.39
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `aquarium`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_itemID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `eventCostID` int(11) NOT NULL,
  `counter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `cart_items`
--

INSERT INTO `cart_items` (`cart_itemID`, `userID`, `eventCostID`, `counter`) VALUES
(1, 4, 1, 2),
(2, 4, 3, 1),
(3, 4, 55, 2),
(4, 4, 1, 1),
(5, 4, 2, 2),
(6, 4, 3, 3),
(7, 4, 4, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `category_event`
--

CREATE TABLE `category_event` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(50) NOT NULL,
  `needToStyle` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `category_event`
--

INSERT INTO `category_event` (`idCategory`, `nameCategory`, `needToStyle`) VALUES
(1, 'Водные шоу', 1),
(2, 'Экскурсии', 1),
(3, 'Лекции', 0),
(4, 'Основная экспозиция', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `category_ticket`
--

CREATE TABLE `category_ticket` (
  `idCategory` int(11) NOT NULL,
  `nameCategory` varchar(50) NOT NULL,
  `descCategory` varchar(255) NOT NULL,
  `imgCategory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `category_ticket`
--

INSERT INTO `category_ticket` (`idCategory`, `nameCategory`, `descCategory`, `imgCategory`) VALUES
(1, 'Детский билет', '*до 12 лет включительно', '\\img\\svg\\baby.svg'),
(2, 'Взрослый билет', '', '\\img\\svg\\couple.svg'),
(3, 'Льготный билет', '', '\\img\\svg\\senior.svg'),
(4, 'Семейный билет', '2 взролсых, 1 ребенок', '\\img\\svg\\family.svg');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `idEvent` int(11) NOT NULL,
  `nameEvent` varchar(50) NOT NULL,
  `descriptionEvent` varchar(255) NOT NULL,
  `ticketsEvent` tinyint(1) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `imgEvent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`idEvent`, `nameEvent`, `descriptionEvent`, `ticketsEvent`, `idCategory`, `imgEvent`) VALUES
(1, 'Шоу «Голубая лагуна»', 'Шоу «Голубая лагуна» — это захватывающee шоу о выживании на необитаемом острове, основанный на романе Генри Де Вер Стэкпула.', 1, 1, '\\img\\ticketsPage\\blue_lagoon.jpg'),
(2, 'Шоу «Морские стражи»', 'Захватывающее шоу, которое объединяет искусство, акробатику и водные трюки, демонстрируя невероятную красоту и грацию морских обитателей.', 1, 1, '\\img\\ticketsPage\\sea_guards.jpg\r\n'),
(3, 'Водное шоу «Моана»', 'Это захватывающее представление, основанное на сюжете диснеевского мультфильма. Яркие костюмы, спортивные номера и музыкальное сопровождение делают это шоу незабываемым для зрителей всех возрастов.', 1, 1, '\\img\\ticketsPage\\Moana.jpg\r\n'),
(4, 'Водное шоу «Волшебство глубин»', 'Водное шоу «Волшебство глубин» — это удивительное зрелище, которое подарит вам незабываемые эмоции и ощущение магии. В этом шоу сочетаются искусство, акробатика и невероятные спецэффекты, создавая неповторимую атмосферу.', 1, 1, '\\img\\ticketsPage\\magic_of_the_depths.jpg\r\n'),
(5, 'Шоу «Океанская феерия»', 'Шоу «Океанская феерия» — это захватывающее представление с участием морских животных, акробатов и каскадёров', 1, 1, '\\img\\ticketsPage\\ocean-extravaganza.jpg\r\n'),
(6, 'Шоу «Морские приключения»', 'Увлекательный спектакль, который переносит зрителей в загадочный подводный мир, где они встречаются с морскими обитателями и отправляются в захватывающие приключения.', 1, 1, '\\img\\ticketsPage\\sea_adventures.jpg\r\n'),
(7, '«Загадочный подводный мир»', 'Экскурсия «Загадочный подводный мир» предлагает посетителям познакомиться с удивительными обитателями океанариума и узнать тайны их жизни.', 1, 2, '\\img\\ticketsPage\\mysterious_underwater_world_tour.jpg\r\n'),
(8, '«Погружение в океан»', 'Откройте для себя удивительный подводный мир и насладитесь красотой коралловых рифов, разноцветных рыб и других морских обитателей.', 1, 2, '\\img\\ticketsPage\\ocean_diving_tour.jpg'),
(9, '«Знакомство с морскими жителями»', 'Экскурсия «Знакомство с морскими жителями» предлагает посетителям погрузиться в удивительный подводный мир и познакомиться с разнообразными морскими обитателями. Вас ждут встречи с муреной Марусей, коралловым рифом, рыбами-хирургами и рыбами-клоунами.', 1, 2, '\\img\\ticketsPage\\acquaintance_with_marine_inhabitants_tour.jpg'),
(10, '«Обитатели глубин»', 'Лекция «Обитатели глубин» познакомит слушателей с удивительными созданиями, населяющими морские глубины.', 1, 3, '\\img\\ticketsPage\\lecture_inhabitants_of_the_depths.jpg'),
(11, '«Загадочные существа»', 'Вы познакомитесь с удивительными морскими обитателями, такими как осьминог Дамбо, короткорылый нетопырь, трубкорыл арлекин, краб-йети и другими странными созданиями.', 1, 3, '\\img\\ticketsPage\\lecture_mysterious_creatures.jpg'),
(12, '«Акулы и их родственники»', 'На лекции «Акулы и их родственники» вы изучите разнообразие видов акул, их анатомию, физиологию, образ жизни и экологические особенности.', 1, 3, '\\img\\ticketsPage\\lecture_sharks_and_their_relatives.jpg'),
(13, '«Северный ледовитый»', 'Лекция «Северный Ледовитый океан» посвящена изучению особенностей самого холодного, маленького по площади и глубине среди мировых океанов.', 1, 3, '\\img\\ticketsPage\\lecture_Arctic.jpg'),
(14, 'Основная экспозиция', 'Основная экспозиция океанариума состоит из трёх частей: морей и океанов, рек и озёр, а также тропического леса. Здесь представлены различные виды рыб, кораллов, морских звёзд и других морских обитателей. ', 1, 4, '\\img\\ticketsPage\\main_exhibition.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `event_cost`
--

CREATE TABLE `event_cost` (
  `idEventCost` int(11) NOT NULL,
  `idEvent` int(11) NOT NULL,
  `idTicketType` int(11) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `event_cost`
--

INSERT INTO `event_cost` (`idEventCost`, `idEvent`, `idTicketType`, `cost`) VALUES
(1, 1, 1, 1200),
(2, 1, 2, 1700),
(3, 1, 3, 1400),
(4, 1, 4, 3000),
(5, 2, 1, 900),
(6, 2, 2, 1500),
(7, 2, 3, 1100),
(8, 2, 4, 2500),
(9, 3, 1, 1500),
(10, 3, 2, 2100),
(11, 3, 3, 1700),
(12, 3, 4, 5000),
(13, 4, 1, 1500),
(14, 4, 2, 2000),
(15, 4, 3, 1600),
(16, 4, 4, 4800),
(17, 5, 1, 700),
(18, 5, 2, 1100),
(19, 5, 3, 850),
(20, 5, 4, 3200),
(21, 6, 1, 1000),
(22, 6, 2, 1600),
(23, 6, 3, 1350),
(24, 6, 4, 4900),
(25, 7, 1, 750),
(26, 7, 2, 1000),
(27, 7, 3, 850),
(28, 7, 4, 2300),
(29, 8, 1, 500),
(30, 8, 2, 750),
(31, 8, 3, 600),
(32, 8, 4, 1400),
(33, 9, 1, 850),
(34, 9, 2, 1200),
(35, 9, 3, 1000),
(36, 9, 4, 2600),
(37, 10, 1, 450),
(38, 10, 2, 700),
(39, 10, 3, 590),
(40, 10, 4, 1800),
(41, 11, 1, 500),
(42, 11, 2, 750),
(43, 11, 3, 600),
(44, 11, 4, 1900),
(45, 12, 1, 750),
(46, 12, 2, 990),
(47, 12, 3, 890),
(48, 12, 4, 2100),
(49, 13, 1, 800),
(50, 13, 2, 1100),
(51, 13, 3, 950),
(52, 13, 4, 2600),
(53, 14, 1, 600),
(54, 14, 2, 1000),
(55, 14, 3, 650),
(56, 14, 4, 2100);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `idRole` int(11) NOT NULL,
  `nameRole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`idRole`, `nameRole`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `loginUser` varchar(150) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passUser` varchar(255) NOT NULL,
  `roleUser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`idUser`, `loginUser`, `emailUser`, `passUser`, `roleUser`) VALUES
(1, 'rtrt', 'rtrt', 'rtrt', 2),
(3, 'test', 'sigma@ee', '098f6bcd4621d373cade4e832627b4f6', 2),
(4, 'piska', 'piska@piska.ru', '9963df155621b69ea1e02a99c757b4f3', 2),
(5, 'asdasd', '', 'a94f9c7bfea7ad6a5bb8e26775bb949b', 2);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_itemID`),
  ADD KEY `userID_cart_items` (`userID`,`eventCostID`),
  ADD KEY `eventCostID_cart_items` (`eventCostID`);

--
-- Индексы таблицы `category_event`
--
ALTER TABLE `category_event`
  ADD PRIMARY KEY (`idCategory`);

--
-- Индексы таблицы `category_ticket`
--
ALTER TABLE `category_ticket`
  ADD PRIMARY KEY (`idCategory`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`idEvent`),
  ADD KEY `category_event` (`idCategory`),
  ADD KEY `category_event_id` (`idCategory`),
  ADD KEY `id_category` (`idCategory`);

--
-- Индексы таблицы `event_cost`
--
ALTER TABLE `event_cost`
  ADD PRIMARY KEY (`idEventCost`),
  ADD KEY `idEvent` (`idEvent`,`idTicketType`),
  ADD KEY `idTicketType` (`idTicketType`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`idRole`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `roleUser` (`roleUser`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_itemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `category_event`
--
ALTER TABLE `category_event`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `category_ticket`
--
ALTER TABLE `category_ticket`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `idEvent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `event_cost`
--
ALTER TABLE `event_cost`
  MODIFY `idEventCost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `idRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`idUser`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`eventCostID`) REFERENCES `event_cost` (`idEventCost`);

--
-- Ограничения внешнего ключа таблицы `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `category_event` (`idCategory`);

--
-- Ограничения внешнего ключа таблицы `event_cost`
--
ALTER TABLE `event_cost`
  ADD CONSTRAINT `event_cost_ibfk_1` FOREIGN KEY (`idEvent`) REFERENCES `events` (`idEvent`),
  ADD CONSTRAINT `event_cost_ibfk_2` FOREIGN KEY (`idTicketType`) REFERENCES `category_ticket` (`idCategory`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`roleUser`) REFERENCES `roles` (`idRole`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
