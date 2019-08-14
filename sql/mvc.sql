-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 06 2019 г., 10:41
-- Версия сервера: 10.3.13-MariaDB
-- Версия PHP: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `image_content` text NOT NULL,
  `description_image` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `image`
--

INSERT INTO `image` (`id_image`, `image_name`, `image_content`, `description_image`, `price`) VALUES
(1, 'Омега (м. Киевская)', '-', '1', 1500),
(2, 'Почта Банк (м.Смоленская)', '2', '2', 1500),
(3, 'Космодамианка (м. Новокузнецкая)', '3', '3', 1500),
(4, 'Кутуза (м. Кутузовская)', '4', '4', 1500),
(5, 'Полянка (м. Полянка)', '5', '5', 1500),
(6, 'Арбат (м. Арбатская)', '6', '6', 1500),
(7, 'Стелла (м. Киевская)', '7', '7', 1500),
(8, 'Дом на ножках (м. ВДНХ)', '8', '8', 1500),
(9, 'Земляной Вал (м. Курская)', '9', '9', 1500),
(10, 'Спортивная (м. Спортивная)', '-0', '10', 1500),
(11, 'Краснопресненская Набережная', '--', '11', 1500),
(12, 'Добрынинская (м. Добрынинская)', '-2', '12', 1500),
(13, 'Южнопортовая (м. Кожуховская)', '3', '13', 1500),
(14, 'Католический собор (м. Барикадная)', '4', '14', 1500),
(15, 'Берниковская (м. Курская)', '5', '15', 1500),
(16, 'Сыромятинский (м. Курская)', '6', '16', 1500),
(17, 'Овчинниковская (м. Новокузнецка)', '7', '17', 1500),
(18, 'Шаболовка (м. Шаболовская)', '8', '18', 1500),
(19, 'Ленинский (м. Октябрьская)', '9', '19', 1500),
(20, 'Якиманка (м. Октябрьская)', '0', '20', 1500),
(21, 'Сухаревская (м. Сухаревская)', '2', '21', 1500),
(22, 'Цветной бульвар', '2', '22', 1500);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int(10) NOT NULL,
  `item` varchar(24) NOT NULL,
  `link` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `item`, `link`) VALUES
(1, 'главная', '/main/'),
(2, 'ответы на вопросы', '/question/'),
(3, 'карта', '/map/'),
(4, 'фотографии', '/photo/'),
(5, 'отзывы ', '/comments/'),
(6, 'контакты', '/contact/');

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_payment` datetime DEFAULT NULL,
  `date_modification` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comment` text NOT NULL,
  `user_ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `portfolio`
--

CREATE TABLE `portfolio` (
  `year` int(12) NOT NULL,
  `site` varchar(124) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `portfolio`
--

INSERT INTO `portfolio` (`year`, `site`, `description`) VALUES
(1, '11', '');

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id_question` int(11) NOT NULL,
  `issue` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_question`, `issue`, `answer`) VALUES
(1, '-', '-'),
(2, '2', '2'),
(3, '3', '3'),
(4, '4', '4'),
(5, '5', '5'),
(6, '6', '6'),
(7, '7', '7'),
(8, '8', '8');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1373;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
