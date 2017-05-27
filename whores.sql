-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 27 2017 г., 21:33
-- Версия сервера: 5.5.50
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `gilrs`
--

-- --------------------------------------------------------

--
-- Структура таблицы `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `photo`
--

INSERT INTO `photo` (`id`, `name`) VALUES
(2, 'img/1495908111e8266ef09430408e7d5b2b8ba0e83f14.png'),
(3, 'img/1495908321dc5c7986daef50c1e02ab09b442ee34f.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;--
-- База данных: `whores`
--

-- --------------------------------------------------------

--
-- Структура таблицы `body_types`
--

CREATE TABLE IF NOT EXISTS `body_types` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `body_types`
--

INSERT INTO `body_types` (`id`, `name`) VALUES
(1, 'Стройное'),
(2, 'Атлетическое'),
(3, 'Полное');

-- --------------------------------------------------------

--
-- Структура таблицы `girls`
--

CREATE TABLE IF NOT EXISTS `girls` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `photo_link` varchar(256) NOT NULL,
  `age` int(4) NOT NULL,
  `height` int(4) NOT NULL,
  `weight` int(4) NOT NULL,
  `boobs` int(4) NOT NULL,
  `hair_color` int(4) NOT NULL,
  `body_type` int(4) NOT NULL,
  `skin_color` int(4) NOT NULL,
  `price` int(11) NOT NULL,
  `quality_category` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `girls`
--

INSERT INTO `girls` (`id`, `name`, `photo_link`, `age`, `height`, `weight`, `boobs`, `hair_color`, `body_type`, `skin_color`, `price`, `quality_category`) VALUES
(1, 'fdskjks', 'none', 0, 234, 234, 234, 1, 2, 1, 435, 1),
(2, 'Анжелика', 'none', 21, 190, 190, 41, 3, 2, 2, 50, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `girls_services`
--

CREATE TABLE IF NOT EXISTS `girls_services` (
  `id` int(11) NOT NULL,
  `id_girl` int(11) NOT NULL,
  `id_service` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `girls_services`
--

INSERT INTO `girls_services` (`id`, `id_girl`, `id_service`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 2),
(4, 2, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `hair_colors`
--

CREATE TABLE IF NOT EXISTS `hair_colors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `hair_colors`
--

INSERT INTO `hair_colors` (`id`, `name`) VALUES
(1, 'Блондинка'),
(2, 'Брюнетка'),
(3, 'Шатенка');

-- --------------------------------------------------------

--
-- Структура таблицы `quality_categories`
--

CREATE TABLE IF NOT EXISTS `quality_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `quality_categories`
--

INSERT INTO `quality_categories` (`id`, `name`) VALUES
(1, 'Эконом'),
(2, 'Премиум'),
(3, 'VIP');

-- --------------------------------------------------------

--
-- Структура таблицы `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
  `id` int(11) NOT NULL,
  `id_girl` int(11) NOT NULL,
  `mark` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Секс классический'),
(2, 'Минет глубокий'),
(3, 'Окончание на грудь'),
(4, 'БДСМ');

-- --------------------------------------------------------

--
-- Структура таблицы `skin_colors`
--

CREATE TABLE IF NOT EXISTS `skin_colors` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `skin_colors`
--

INSERT INTO `skin_colors` (`id`, `name`) VALUES
(1, 'Бледный'),
(2, 'Смуглый');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `body_types`
--
ALTER TABLE `body_types`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `girls`
--
ALTER TABLE `girls`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `girls_services`
--
ALTER TABLE `girls_services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `hair_colors`
--
ALTER TABLE `hair_colors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `quality_categories`
--
ALTER TABLE `quality_categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `skin_colors`
--
ALTER TABLE `skin_colors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `girls`
--
ALTER TABLE `girls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `girls_services`
--
ALTER TABLE `girls_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
