-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 24 2020 г., 17:24
-- Версия сервера: 8.0.19
-- Версия PHP: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `action`
--

CREATE TABLE `action` (
  `id` int NOT NULL,
  `action` varchar(20) NOT NULL,
  `description_action` text CHARACTER SET utf8 COLLATE utf8_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `action`
--

INSERT INTO `action` (`id`, `action`, `description_action`) VALUES
(1, 'Удалить', NULL),
(2, 'Добавить', NULL),
(4, 'Изменить', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `action_types_sw`
--

CREATE TABLE `action_types_sw` (
  `id` int NOT NULL,
  `id_action` int NOT NULL,
  `id_tsw` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `auditories`
--

CREATE TABLE `auditories` (
  `id` int NOT NULL,
  `id_build` int NOT NULL,
  `name_audit` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auditories`
--

INSERT INTO `auditories` (`id`, `id_build`, `name_audit`) VALUES
(1, 1, 'А111'),
(2, 1, 'А231'),
(3, 1, 'А321'),
(4, 1, 'А412'),
(5, 1, 'А508'),
(6, 2, 'Б123'),
(7, 2, 'Б110'),
(8, 2, 'Б213'),
(9, 2, 'Б210'),
(10, 2, 'Б214'),
(11, 3, 'В101'),
(12, 3, 'В112'),
(13, 3, 'В213'),
(14, 3, 'В221'),
(15, 4, 'Г106'),
(16, 4, 'Г203'),
(17, 4, 'Г213'),
(18, 4, 'Г309'),
(19, 4, 'Г310'),
(20, 5, 'Д110'),
(21, 5, 'Д121'),
(22, 5, 'Д201'),
(23, 5, 'Д221'),
(24, 5, 'Д309'),
(25, 5, 'Д312'),
(26, 5, 'Д408'),
(27, 5, 'Д415'),
(28, 5, 'Д508'),
(29, 5, 'Д505'),
(30, 5, 'Д506'),
(31, 5, 'Д614'),
(32, 5, 'Д609'),
(33, 5, 'Д708'),
(34, 5, 'Д706'),
(35, 5, 'Д509');

-- --------------------------------------------------------

--
-- Структура таблицы `building`
--

CREATE TABLE `building` (
  `id` int NOT NULL,
  `name_build` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `building`
--

INSERT INTO `building` (`id`, `name_build`) VALUES
(1, 'Корпус А'),
(2, 'Корпус Б'),
(3, 'Корпус В'),
(4, 'Корпус Г'),
(5, 'Корпус Д'),
(6, 'Корпус Е');

-- --------------------------------------------------------

--
-- Структура таблицы `log`
--

CREATE TABLE `log` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_action` int NOT NULL,
  `id_swit` int NOT NULL,
  `old_inf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log`
--

INSERT INTO `log` (`id`, `id_user`, `id_action`, `id_swit`, `old_inf`) VALUES
(1, 1, 2, 4, 'То не мертво что вечность охраняет'),
(2, 2, 1, 3, 'Что то с чем то'),
(3, 1, 3, 1, 'Почему бы и нет'),
(4, 1, 2, 2, 'Просто вернули полуостров'),
(5, 2, 3, 3, 'Зачем и почему');

-- --------------------------------------------------------

--
-- Структура таблицы `log_pak`
--

CREATE TABLE `log_pak` (
  `id` int NOT NULL,
  `user` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `switch` varchar(50) NOT NULL,
  `old_inf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `log_pak`
--

INSERT INTO `log_pak` (`id`, `user`, `action`, `switch`, `old_inf`) VALUES
(1, 'Сафонов', 'Удалить', '4', '3;2;11;3;25365;K 05;12/03/2020'),
(2, 'Миронов', 'Изменить', '3', '4;4;20;1;74856;K 33;06/03/2020'),
(3, 'Миронов', 'Изменить', '5', '2;5;6;5;13156;K 26;03/02/2020'),
(4, 'Сафонов', 'Удалить', '16', '4;1;31;3;96854;K 55;09/04/2020');

-- --------------------------------------------------------

--
-- Структура таблицы `rack`
--

CREATE TABLE `rack` (
  `id` int NOT NULL,
  `id_audit` int NOT NULL,
  `rack` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rack`
--

INSERT INTO `rack` (`id`, `id_audit`, `rack`) VALUES
(1, 5, '1'),
(2, 5, '2'),
(3, 5, '3'),
(4, 5, '5'),
(5, 5, '2'),
(6, 35, '5'),
(7, 35, '2'),
(8, 35, '4'),
(9, 35, '2'),
(10, 35, '6'),
(11, 35, '2');

-- --------------------------------------------------------

--
-- Структура таблицы `switch`
--

CREATE TABLE `switch` (
  `id` int NOT NULL,
  `id_rack` int NOT NULL,
  `id_tsw` int NOT NULL,
  `id_audit` int NOT NULL,
  `place_pack` varchar(3) NOT NULL,
  `port_sw` varchar(5) NOT NULL,
  `port_audit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `switch`
--

INSERT INTO `switch` (`id`, `id_rack`, `id_tsw`, `id_audit`, `place_pack`, `port_sw`, `port_audit`) VALUES
(1, 3, 2, 11, '3', '25365', 'K 56'),
(2, 1, 2, 5, '2', '85964', 'K 11'),
(3, 4, 3, 6, '4', '46135', 'K 06'),
(4, 1, 5, 26, '3', '13795', 'K 23');

-- --------------------------------------------------------

--
-- Структура таблицы `types_switches`
--

CREATE TABLE `types_switches` (
  `id` int NOT NULL,
  `name_switch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `types_switches`
--

INSERT INTO `types_switches` (`id`, `name_switch`) VALUES
(1, 'Cisco WS-C3560V2-48PS-S'),
(2, 'Cisco WS-C2960-48PST-S'),
(3, 'Cisco WS-C3548-XL'),
(4, 'Cisco WS-C2948'),
(5, 'Cisco WS-C2950T-24'),
(6, 'D-link DES-3200-28P');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `surname` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `login`, `password`) VALUES
(1, 'Сергей', 'Сафонов', 'saff', '1111'),
(2, 'Дмитрий', 'Миронов', 'mir', '2222');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `action_types_sw`
--
ALTER TABLE `action_types_sw`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `auditories`
--
ALTER TABLE `auditories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `log_pak`
--
ALTER TABLE `log_pak`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rack`
--
ALTER TABLE `rack`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `switch`
--
ALTER TABLE `switch`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `types_switches`
--
ALTER TABLE `types_switches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `action`
--
ALTER TABLE `action`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `action_types_sw`
--
ALTER TABLE `action_types_sw`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `auditories`
--
ALTER TABLE `auditories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `building`
--
ALTER TABLE `building`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `log`
--
ALTER TABLE `log`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `log_pak`
--
ALTER TABLE `log_pak`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `rack`
--
ALTER TABLE `rack`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `switch`
--
ALTER TABLE `switch`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `types_switches`
--
ALTER TABLE `types_switches`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
