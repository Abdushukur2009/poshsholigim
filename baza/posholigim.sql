-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 07 2022 г., 12:28
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `posholigim`
--

-- --------------------------------------------------------

--
-- Структура таблицы `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `title1` varchar(200) NOT NULL,
  `title2` varchar(200) NOT NULL,
  `yoshi` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  `vaqti` varchar(200) NOT NULL,
  `narxi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class`
--

INSERT INTO `class` (`id`, `img_src`, `title1`, `title2`, `yoshi`, `total`, `vaqti`, `narxi`) VALUES
(1, 'image/1661925822.jpg', 'gurug-1', 'jnngkdngkndkgnkdngkdngkdngkdngkdngkdngnkdngkdgndkng', '1-6', '40-set', '8-15', '100000'),
(2, 'image/1661969081.jpg', 'gurug-1', 'zsxdcfbhnjmk,l.;xdcmk,sxcdr,l', '1-6', '40-set', '8-15', '100000');

-- --------------------------------------------------------

--
-- Структура таблицы `class_catyyy`
--

CREATE TABLE `class_catyyy` (
  `id` int(11) NOT NULL,
  `img` varchar(200) NOT NULL,
  `ism` varchar(200) NOT NULL,
  `fam` varchar(200) NOT NULL,
  `guruh` varchar(200) NOT NULL,
  `jins` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `class_catyyy`
--

INSERT INTO `class_catyyy` (`id`, `img`, `ism`, `fam`, `guruh`, `jins`) VALUES
(1, '', ':rrrrrrrrrrrr', ':4', '', ''),
(2, '', ':tttttttttttt', ':4', '', ''),
(3, '', 'Abdushukur', 'Yusupov', '', '1'),
(4, '', 'Abdushukur', 'Yusupov', '', '1'),
(5, '', 'Abdushukur', 'Yusupov', 'gurug-1', '1'),
(6, '', 'Abdushukur', 'Yusupov', 'gurug-1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `malumotlar`
--

CREATE TABLE `malumotlar` (
  `id` int(11) NOT NULL,
  `ismingiz` varchar(200) NOT NULL,
  `familyangiz` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img_src` varchar(200) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `malumotlar`
--

INSERT INTO `malumotlar` (`id`, `ismingiz`, `familyangiz`, `email`, `password`, `img_src`, `text`) VALUES
(7, 'Jorabek', 'Yusupov', 'A12@gmail.com', 'eeeeeeeee', 'image/1662184273.jpg', 'izoh:qwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww\r\n                    '),
(8, '', '', 'A125@gmail.com', '12345', 'image/1662261201.jpg', 'izoh:eqwwwwwwwwwwwwwwwwwwwwwwwwww\r\n                    '),
(9, '', '', 'A125@gmail.com', '12345', 'image/1662261249.jpg', 'izoh:eqwwwwwwwwwwwwwwwwwwwwwwwwww\r\n                    '),
(10, '', '', 'A25@gmail.com', '12345678', 'image/1662261290.jpg', 'izoh:\r\n                    '),
(11, '', '', 'A25@gmail.com', '12345678', 'image/1662261307.jpg', 'izoh:\r\n                    '),
(12, '', '', 'A25@gmail.com', '12345678', 'image/1662261454.jpg', 'izoh:\r\n                    '),
(13, '', '', 'A25@gmail.com', '12345678', 'image/1662261496.jpg', 'izoh:\r\n                    '),
(14, '', '', 'A123@gmail.com', 'werfghj', 'image/1662261541.jpg', 'izoh:ent nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(15, '', '', 'A123@gmail.com', 'werfghj', 'image/1662261650.jpg', 'izoh:ent nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(16, '', '', 'A123@gmail.com', 'ddddddddddddddddddddd', 'image/1662261660.jpg', 'izoh:ent nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(17, '', '', 'A123@gmail.com', 'ddddddddddddddddddddd', 'image/1662261824.jpg', 'izoh:ent nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(18, '', '', 'A123@gmail.com', 'ddddddddddddddddddddd', 'image/1662261830.jpg', 'izoh:ent nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn'),
(20, 'Jorabek', 'Yusupov', 'A2@gmail.com', 'wwwwwwwwwwww', 'image/1662261877.jpg', 'izoh:rttrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\r\n                    '),
(21, 'Jorabek', 'Yusupov', 'A2@gmail.com', 'wwwwwwwwwwww', 'image/1662261918.jpg', 'izoh:rttrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr\r\n                    '),
(26, ':A127@gmail.com', ':4', ':55555555555555555555555555\n', '', '', ''),
(27, ':A27@gmail.com', ':4', ':\n', '', '', ''),
(28, 'Jorabek', 'Yusupov', 'A42@gmail.com', 'fffffffffff', '', '\n'),
(29, 'Jorabek', 'Yusupov', 'A127@gmail.com', 'bbbbbbbb', '', '\n'),
(30, 'Jorabek', 'Yusupov', 'A127o@gmail.com', 'kkkkkkkkkk', '', '\n'),
(31, 'Jorabek', 'Yusupov', 'Ajj2@gmail.com', 'wertyhjkl;', '', '\n');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `class_catyyy`
--
ALTER TABLE `class_catyyy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `malumotlar`
--
ALTER TABLE `malumotlar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `class_catyyy`
--
ALTER TABLE `class_catyyy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `malumotlar`
--
ALTER TABLE `malumotlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
