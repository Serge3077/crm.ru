-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 04 2016 г., 11:14
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `abbvie_crm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(3) NOT NULL,
  `fid` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE IF NOT EXISTS `group` (
  `id` int(3) NOT NULL,
  `gid` int(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `group_info`
--

CREATE TABLE IF NOT EXISTS `group_info` (
  `gid` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `avatar` tinytext,
  `description` tinytext,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(52) NOT NULL,
  `surname` varchar(52) NOT NULL,
  `middlename` varchar(52) NOT NULL,
  `sex` varchar(3) NOT NULL,
  `birth_date` date NOT NULL,
  `city` varchar(52) NOT NULL,
  `position` varchar(100) NOT NULL,
  `subdivision` varchar(100) NOT NULL,
  `avatar` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `middlename`, `sex`, `birth_date`, `city`, `position`, `subdivision`, `avatar`) VALUES
(3, 'Зубери', 'Лумумба', 'Камо', 'муж', '1970-04-03', 'Замбези', 'Медбрат', 'отдел Черных братьев', ''),
(1, 'Витя', 'Крюков', 'Артурович', 'муж', '2016-02-02', 'Оренбург', 'Ведущий тракторист', 'Трактористов', '@web/ava/1.jpg'),
(2, 'Артур', 'Крюков', 'Викторович', 'муж', '2016-02-01', 'Кущелга', 'Главный тракторист', 'Трактористов', '');

-- --------------------------------------------------------

--
-- Структура таблицы `user_desc`
--

CREATE TABLE IF NOT EXISTS `user_desc` (
  `id` int(3) NOT NULL,
  `lang` varchar(52) DEFAULT NULL,
  `langs` tinytext,
  `living_area` tinytext,
  `skills` tinytext,
  `movies` tinytext,
  `music` tinytext,
  `hobbies` tinytext,
  `about_me` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
