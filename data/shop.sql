-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 25 2019 г., 13:51
-- Версия сервера: 5.7.23
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `product_id`, `quantity`) VALUES
(20, 'knf5srmd9nbp28pcrq483nti2rf5p9a3', 5, 2),
(98, 'm55973801ucsh70k3k9khggv96uldrvo', 1, 1),
(99, 'm55973801ucsh70k3k9khggv96uldrvo', 8, 2),
(102, 'm55973801ucsh70k3k9khggv96uldrvo', 2, 2),
(103, 'm55973801ucsh70k3k9khggv96uldrvo', 3, 3),
(104, 'm69hi2c6ssknr2j3ah6eu35lp5habp5p', 1, 4),
(105, 'm69hi2c6ssknr2j3ah6eu35lp5habp5p', 2, 2),
(106, 'm69hi2c6ssknr2j3ah6eu35lp5habp5p', 3, 1),
(108, 'm69hi2c6ssknr2j3ah6eu35lp5habp5p', 8, 1),
(116, '77us8o99uea4dv7gdc5kkq7063hv11m2', 1, 1),
(117, '77us8o99uea4dv7gdc5kkq7063hv11m2', 4, 1),
(153, '77us8o99uea4dv7gdc5kkq7063hv11m2', 4, 1),
(154, '77us8o99uea4dv7gdc5kkq7063hv11m2', 1, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `session` text NOT NULL,
  `phone` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `session`, `phone`, `status`) VALUES
(1, 'm55973801ucsh70k3k9khggv96uldrvo', 1234567890, 'finished'),
(10, 'm69hi2c6ssknr2j3ah6eu35lp5habp5p', 987654321, 'transit');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL,
  `image_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image_name`) VALUES
(1, 'Товар 1', '720', 'Классная футболка. Вам очень идет!', 'card1-img.jpg'),
(2, 'Товар 2', '60', 'Классическая рубашка. Снова в моде!', 'card2-img.jpg'),
(3, 'Товар 3', '30', 'Крутая кепка. Круто, клёво, молодёжно!', 'card3-img.jpg'),
(4, 'Товар 4', '40', 'Ремень кожаный. Для настоящих мужчин!', 'card4-img.jpg'),
(5, 'Товар 5', '21700', 'Штаны красные. Ультра современные.', 'card5-img.jpg'),
(6, 'Товар 6', '500', 'Очень интересный товар', 'card6-img.jpg'),
(7, 'Товар 7', '500', 'Очень интересный товар', 'card7-img.jpg'),
(8, 'Товар 8', '500', 'Очень интересный товар', 'card8-img.jpg'),
(9, 'Товар 9', '14900', 'Очень интересный товар', '09.jpg'),
(10, 'Товар 10', '500', 'Очень интересный товар', '10.jpg'),
(11, 'Товар 11', '500', 'Очень интересный товар', '11.jpg'),
(12, 'Товар 12', '500', 'Очень интересный товар', '12.jpg'),
(13, 'Товар 13', '500', 'Очень интересный товар', '13.jpg'),
(14, 'Товар 14', '500', 'Очень интересный товар', '14.jpg'),
(15, 'Товар 15', '500', 'Очень интересный товар', '15.jpg'),
(306, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL,
  `hash` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', '123', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=307;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
