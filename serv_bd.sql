-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 16 2021 г., 02:18
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
-- База данных: `serv_bd`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auditories`
--

CREATE TABLE `auditories` (
  `id` int NOT NULL,
  `id_building` int NOT NULL COMMENT 'Корпус',
  `name` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Название',
  `amount` int UNSIGNED DEFAULT NULL COMMENT 'Макс. кол-во мест',
  `is_comps` tinyint UNSIGNED DEFAULT NULL COMMENT 'Кол-во компьютеров',
  `dep_id` int DEFAULT NULL COMMENT 'Подразделение',
  `id_type` int NOT NULL COMMENT 'Тип помещения',
  `id_floor` int DEFAULT NULL COMMENT 'Этаж аудитории',
  `comm` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'Комментарии',
  `info` text CHARACTER SET utf8 COLLATE utf8_general_ci COMMENT 'Доп. информация',
  `umu_id` int DEFAULT NULL COMMENT 'Номер в УМУ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `auditories`
--

INSERT INTO `auditories` (`id`, `id_building`, `name`, `amount`, `is_comps`, `dep_id`, `id_type`, `id_floor`, `comm`, `info`, `umu_id`) VALUES
(1, 1, 'А508', NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL),
(2, 5, 'Д508', NULL, NULL, NULL, 9, NULL, NULL, NULL, NULL),
(3, 2, 'Б201', NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `aud_types`
--

CREATE TABLE `aud_types` (
  `id` int NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aud_types`
--

INSERT INTO `aud_types` (`id`, `name`) VALUES
(1, 'аудитория'),
(2, 'лестница'),
(3, 'лифт'),
(4, 'туалет Ж'),
(5, 'туалет М'),
(6, 'кабинет'),
(7, 'лаборатория'),
(8, 'комната в общежитии'),
(9, 'Серверная');

-- --------------------------------------------------------

--
-- Структура таблицы `building`
--

CREATE TABLE `building` (
  `id` int NOT NULL,
  `name_build` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
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

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auditories`
--
ALTER TABLE `auditories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_building` (`id_building`),
  ADD KEY `id_type` (`id_type`);

--
-- Индексы таблицы `aud_types`
--
ALTER TABLE `aud_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `building`
--
ALTER TABLE `building`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `auditories`
--
ALTER TABLE `auditories`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `aud_types`
--
ALTER TABLE `aud_types`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `building`
--
ALTER TABLE `building`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auditories`
--
ALTER TABLE `auditories`
  ADD CONSTRAINT `auditories_ibfk_1` FOREIGN KEY (`id_building`) REFERENCES `building` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `auditories_ibfk_2` FOREIGN KEY (`id_type`) REFERENCES `aud_types` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
