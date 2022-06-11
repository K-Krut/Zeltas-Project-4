-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3325
-- Время создания: Июн 02 2022 г., 15:30
-- Версия сервера: 10.4.24-MariaDB
-- Версия PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `zeltas`
--

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE `category`
(
    `category_id`   int(11)      NOT NULL,
    `category_name` varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name`)
VALUES (1, 'Rings'),
       (2, 'Necklaces'),
       (3, 'Bracelets'),
       (4, 'Sculptures');

-- --------------------------------------------------------

--
-- Структура таблицы `collection`
--

CREATE TABLE `collection`
(
    `collection_id`   int(11)      NOT NULL,
    `collection_name` varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `collection`
--

INSERT INTO `collection` (`collection_id`, `collection_name`)
VALUES (5, 'Animals'),
       (6, 'Maori'),
       (7, 'Other'),
       (8, 'Slavic bracelet'),
       (2, 'Viking bracelet Asgard'),
       (3, 'Viking bracelet Midgard'),
       (1, 'Viking gods'),
       (4, 'Vikings');

-- --------------------------------------------------------

--
-- Структура таблицы `metal`
--

CREATE TABLE `metal`
(
    `metal_id`   int(11)      NOT NULL,
    `metal_name` varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `metal`
--

INSERT INTO `metal` (`metal_id`, `metal_name`)
VALUES (1, 'Bronze'),
       (4, 'Golden silver'),
       (3, 'Pewter'),
       (2, 'Silver'),
       (5, 'Silver plated Bronze');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product`
(
    `product_id`        int(11)      NOT NULL,
    `product_code`      varchar(255) NOT NULL,
    `product_name`      varchar(255) NOT NULL,
    `product_size`      varchar(255) NOT NULL,
    `product_weight`    varchar(255) NOT NULL,
    `product_price_uah` float        NOT NULL,
    `product_price_usd` float        NOT NULL,
    `category_id`       int(11)      NOT NULL,
    `metal_id`          int(11)      NOT NULL,
    `main_photo_id`     varchar(255) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`product_id`, `product_code`, `product_name`, `product_size`, `product_weight`,
                       `product_price_uah`, `product_price_usd`, `category_id`, `metal_id`, `main_photo_id`)
VALUES (1, '001-709', 'Miniature sculpture Owl', '3,1 см х 5,2 см х 1,3 см or 1.22\" x 2.05\" x 0.51', '30g or 1.06oz',
        815, 27.9, 4, 1, '1');

-- --------------------------------------------------------

--
-- Структура таблицы `product_photo`
--

CREATE TABLE `product_photo`
(
    `photo_id`   int(11)      NOT NULL,
    `photo`      varchar(255) NOT NULL,
    `product_id` int(11)      NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `product_photo`
--

INSERT INTO `product_photo` (`photo_id`, `photo`, `product_id`)
VALUES (1, 'sculpture_owl.png', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users`
(
    `id`         int(11)      NOT NULL,
    `username`   varchar(255) DEFAULT NULL,
    `email`      varchar(200) NOT NULL,
    `password`   varchar(60)  NOT NULL,
    `firstname`  varchar(50)  NOT NULL,
    `lastname`   varchar(50)  DEFAULT NULL,
    `address`    text         DEFAULT NULL,
    `mobile`     varchar(15)  DEFAULT NULL,
    `created_on` datetime     DEFAULT current_timestamp()
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `firstname`, `lastname`, `address`, `mobile`, `created_on`)
VALUES (1, NULL, 'admin@admin.com', '$2y$10$8wY63GX/y9Bq780GBMpxCesV9n1H6WyCqcA2hNy2uhC59hEnOpNaS', 'Admin', '', 'UA',
        '+178565855', '0000-00-00 00:00:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `category`
--
ALTER TABLE `category`
    ADD PRIMARY KEY (`category_id`);

--
-- Индексы таблицы `collection`
--
ALTER TABLE `collection`
    ADD PRIMARY KEY (`collection_id`),
    ADD UNIQUE KEY `collection_name` (`collection_name`);

--
-- Индексы таблицы `metal`
--
ALTER TABLE `metal`
    ADD PRIMARY KEY (`metal_id`),
    ADD UNIQUE KEY `metal_name` (`metal_name`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
    ADD PRIMARY KEY (`product_id`),
    ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Индексы таблицы `product_photo`
--
ALTER TABLE `product_photo`
    ADD PRIMARY KEY (`photo_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
    ADD UNIQUE KEY `id` (`id`),
    ADD UNIQUE KEY `email` (`email`),
    ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
    MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT для таблицы `product_photo`
--
ALTER TABLE `product_photo`
    MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
    AUTO_INCREMENT = 2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
