-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3325
-- Время создания: Май 31 2022 г., 20:19
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zeltas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category_t` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category_t` (`category_id`, `category_name`) VALUES
(1, 'Rings'),
(2, 'Necklaces'),
(3, 'Bracelets'),
(4, 'Sculptures');

-- --------------------------------------------------------

--
-- Структура таблицы `collection`
--

CREATE TABLE `collection_t` (
  `collection_id` int(11) NOT NULL,
  `collection_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `collection`
--

INSERT INTO `collection_t` (`collection_id`, `collection_name`) VALUES
(1, 'Viking gods'),
(2, 'Viking bracelet Asgard'),
(3, 'Viking bracelet Midgard'),
(4, 'Vikings'),
(5, 'Animals'),
(6, 'Maori'),
(7, 'Other'),
(8, 'Slavic bracelet');

-- --------------------------------------------------------

--
-- Структура таблицы `metal`
--

CREATE TABLE `metal_t` (
  `metal_id` int(11) NOT NULL,
  `metal_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `metal`
--

INSERT INTO `metal_t` (`metal_id`, `metal_name`) VALUES
(1, 'Bronze'),
(2, 'Silver'),
(3, 'Pewter'),
(4, 'Golden silver'),
(5, 'Silver plated Bronze');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product_t` (
  `product_id` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_size` varchar(255) NOT NULL,
  `product_weight` varchar(255) NOT NULL,
  `product_price_uah` float NOT NULL,
  `product_price_usd` float NOT NULL,
  `category_id` int(11) NOT NULL,
  `metal_id` int(11) NOT NULL,
  `main_photo_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product_t` (`product_id`, `product_code`, `product_name`, `product_size`, `product_weight`, `product_price_uah`, `product_price_usd`, `category_id`, `metal_id`, `main_photo_id`) VALUES
(1, '001-709', 'Miniature sculpture Owl', '3,1 см х 5,2 см х 1,3 см or 1.22\" x 2.05\" x 0.51', '30g or 1.06oz', 815, 27.9, 4, 1, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `product_photo`
--

CREATE TABLE `product_photo_t` (
  `photo_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `product_photo`
--

INSERT INTO `product_photo_t` (`photo_id`, `photo`, `product_id`) VALUES
(1, 'sculpture_owl.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users_t` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `address` text NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `created_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users_t` (`id`, `email`, `password`, `firstname`, `lastname`, `address`, `mobile`, `created_on`) VALUES
(1, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 'Admin', '', 'UA', '+178565855', '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category_t`
  ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `collection`
--
ALTER TABLE `collection_t`
  ADD PRIMARY KEY (`collection_id`);

--
-- Индексы таблицы `metal`
--
ALTER TABLE `metal_t`
  ADD PRIMARY KEY (`metal_id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product_t`
  ADD PRIMARY KEY (`product_id`);

--
-- Индексы таблицы `product_photo`
--
ALTER TABLE `product_photo_t`
  ADD PRIMARY KEY (`photo_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users_t`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product_t`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `product_photo`
--
ALTER TABLE `product_photo_t`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users_t`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
