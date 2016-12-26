-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 26 2016 г., 20:46
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `narmin`
--

-- --------------------------------------------------------

--
-- Структура таблицы `accaunts`
--

CREATE TABLE IF NOT EXISTS `accaunts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `phone` tinytext NOT NULL,
  `address` tinytext NOT NULL,
  `data_rod` date NOT NULL,
  `created_at` date NOT NULL,
  `update_at` datetime NOT NULL,
  `picture` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `maintexts`
--

CREATE TABLE IF NOT EXISTS `maintexts` (
  `id` int(11) NOT NULL,
  `name` tinytext NOT NULL,
  `body` text NOT NULL,
  `url` tinytext NOT NULL,
  `leftmenu` enum('0','1') NOT NULL DEFAULT '0',
  `lang` enum('ru','en') NOT NULL DEFAULT 'ru',
  `showhide` enum('show','hide') NOT NULL DEFAULT 'show',
  `putdate` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `maintexts`
--

INSERT INTO `maintexts` (`id`, `name`, `body`, `url`, `leftmenu`, `lang`, `showhide`, `putdate`) VALUES
(1, 'Добро пожаловать на сайт!', 'Гранат, кооператив художественного производства, Турнов имеет более чем 60 – летнюю традицию производства украшений с чешскими гранатами в г. Турнове и в Чешской Республике. Тогдашний кооператив был создан в 1953 году в результате соединения небольших частных фирм ювелиров. В то время мастерские кооператива находились в разных местах близкой и далёкой окрестностей г. Турнова, например, в Чешском Дубе (Českém Dubu), Дольнем Боусове (Dolním Bousově), Ломнице над Попелкой (Lomnici nad Popelkou) и в Ровенску под Тросками (Rovensku pod Troskami).', 'index', '0', 'ru', 'show', '2016-12-16'),
(2, 'История камня', 'Камень гранат в тандеме с ярким золотом 585 пробы или же с холодным загадочным серебром – сочетание удивительно эффектное и заметное. Кольца с этим бразильским самоцветом в нашем каталоге занимают лидирующие позиции по продажам, что неудивительно: эти изделия очень красивы, универсальны, а сам камень готов стать оберегом и помощником для своего нового хозяина', 'history', '0', 'ru', 'show', '2016-12-19'),
(3, 'Контакты', '8(029)578 36 02', 'contact', '1', 'ru', 'show', '2016-12-19'),
(4, 'Информация', 'Сколько мифов, легенд и поверий связано с гранатом – не перечесть! Из-за его кровавого отсвета верили, что камень защищает от ранений. Потому и брали его с собой в бой солдаты всех времен – от античных сражений до современных вооруженных конфликтов на Востоке. Считается также, что если гранат украсть – он погубит вора; если купить – спустя много лет он превратится в талисман; если подарить или передать по наследству – наполнится добрым волшебством. Увы, заверения в особых целебных свойствах граната ни к минералогии, ни тем более к медицине не имеют никакого отношения', 'info', '1', 'ru', 'show', '2016-12-19');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `email` tinytext NOT NULL,
  `login` tinytext NOT NULL,
  `pass` tinytext NOT NULL,
  `datareg` date NOT NULL,
  `lastvisit` datetime NOT NULL,
  `blockunblock` enum('unblock','block') NOT NULL DEFAULT 'unblock'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `email`, `login`, `pass`, `datareg`, `lastvisit`, `blockunblock`) VALUES
(1, 'narmiin_2011', '', '12345', '2016-12-23', '2016-12-23 20:32:40', 'unblock'),
(2, 'dini_345', 'den', '123456', '2016-12-23', '2016-12-23 20:34:18', 'unblock'),
(3, '', 'hjgfjf', '', '2016-12-23', '2016-12-23 21:11:36', 'unblock');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `accaunts`
--
ALTER TABLE `accaunts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `maintexts`
--
ALTER TABLE `maintexts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `accaunts`
--
ALTER TABLE `accaunts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `maintexts`
--
ALTER TABLE `maintexts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
