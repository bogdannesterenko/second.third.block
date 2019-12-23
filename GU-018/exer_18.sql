-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 22 2019 г., 20:24
-- Версия сервера: 5.6.31
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `exer_18`
--

-- --------------------------------------------------------

--
-- Структура таблицы `product_list`
--

CREATE TABLE IF NOT EXISTS `product_list` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product_list`
--

INSERT INTO `product_list` (`id`, `user_id`, `title`, `price`, `description`) VALUES
(1, 10, 'thin', 10, 'Some good thing'),
(2, 2, 'hoover', 100, 'A 750 W vacuum cleaner is able to thoroughly and efficiently clean rooms from dust and dirt. It has 2 degrees of filtration. Polluted air enters the dust collector at high speed and moves in a spiral.'),
(3, 4, 'air ticket', 150, 'He is better than I am familiar with the Bernoulli principle, which explains why airplanes are kept in the air; he knows perfectly well that in the ?miracle? of aircraft flight'),
(4, 5, 'cigars', 50, 'Cigar smoking is very different from cigarette smoking and is like a kind of ritual. It is known that Winston Churchill was a big fan of cigars, and smoked at least 15 pieces daily.');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday_date` date NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`first_name`, `last_name`, `birthday_date`, `id`) VALUES
('John', 'Snow', '1985-10-15', 1),
('Steve', 'Angelo', '1980-07-12', 2),
('Michal', 'Jackson', '1960-12-11', 3),
('James', 'Brown', '1955-10-15', 4),
('Johnny', 'Depp', '1963-10-09', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `user_likes`
--

CREATE TABLE IF NOT EXISTS `user_likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_like_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user_likes`
--

INSERT INTO `user_likes` (`id`, `user_id`, `product_like_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 3, 1);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `product_list`
--
ALTER TABLE `product_list`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_likes`
--
ALTER TABLE `user_likes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product_list`
--
ALTER TABLE `product_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `user_likes`
--
ALTER TABLE `user_likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
