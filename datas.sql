-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 27 2021 г., 19:06
-- Версия сервера: 8.0.19
-- Версия PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `datas`
--

CREATE TABLE `datas` (
  `id` int NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `datas`
--

INSERT INTO `datas` (`id`, `firstname`, `location`) VALUES
(1, 'Ibrohim', 'Uzbekistan'),
(2, 'Dilnoza', 'Uzbekistan'),
(3, 'Mohina', 'Uzbekistan'),
(5, 'Nodira', 'Uzbekistan'),
(26, 'Sevinch', 'Uzbekistan'),
(38, 'abbibr', 'Uzbekistan');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `datas`
--
ALTER TABLE `datas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `datas`
--
ALTER TABLE `datas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
