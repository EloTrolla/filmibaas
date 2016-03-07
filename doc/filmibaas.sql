-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Loomise aeg: Jaan 11, 2016 kell 10:42 EL
-- Serveri versioon: 10.1.9-MariaDB
-- PHP versioon: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Andmebaas: `filmibaas`
--

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `author`
--

CREATE TABLE `author` (
  `author_id`        BIGINT(20) UNSIGNED NOT NULL,
  `name`             VARCHAR(255)        NOT NULL,
  `begin_date_year`  SMALLINT(6)                  DEFAULT NULL,
  `begin_date_month` SMALLINT(6)                  DEFAULT NULL,
  `begin_date_day`   SMALLINT(6)                  DEFAULT NULL,
  `end_date_year`    SMALLINT(6)                  DEFAULT NULL,
  `end_date_month`   SMALLINT(6)                  DEFAULT NULL,
  `end_date_day`     SMALLINT(6)                  DEFAULT NULL,
  `country_id`       BIGINT(20) UNSIGNED          DEFAULT NULL,
  `gender_id`        BIGINT(20) UNSIGNED          DEFAULT NULL,
  `disambiguation`   VARCHAR(255)        NOT NULL DEFAULT ''
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `author`
--

INSERT INTO `author` (`author_id`, `name`, `begin_date_year`, `begin_date_month`, `begin_date_day`, `end_date_year`, `end_date_month`, `end_date_day`, `country_id`, `gender_id`, `disambiguation`)
VALUES
  (1, 'Grigori Kromanov', 1926, 3, 8, 1984, 7, 18, 1, 1, ''),
  (2, 'Eugene Py', 1859, 5, 19, 1924, 8, 26, 5, 1, ''),
  (3, 'P.J.C. Janssen', 1824, 2, 22, 1907, 12, 23, 5, 1, '');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `country`
--

CREATE TABLE `country` (
  `country_id` BIGINT(20) UNSIGNED NOT NULL,
  `iso`        CHAR(2) DEFAULT NULL,
  `name`       VARCHAR(255)        NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `country`
--

INSERT INTO `country` (`country_id`, `iso`, `name`) VALUES
  (1, 'EE', 'Estonia'),
  (2, 'LV', 'Latvia'),
  (3, 'LT', 'Lithuania'),
  (4, 'SU', 'Soviet Union'),
  (5, 'FR', 'Prantsusmaa'),
  (6, 'US', 'United States of America'),
  (7, 'DE', 'Germany'),
  (8, 'UK', 'United Kingdom'),
  (9, 'JP', 'Japan'),
  (10, 'AR', 'Argentina');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `film`
--

CREATE TABLE `film` (
  `film_id`        BIGINT(20) UNSIGNED NOT NULL,
  `name`           VARCHAR(255)        NOT NULL,
  `year`           SMALLINT(6)                  DEFAULT NULL,
  `country_id`     BIGINT(20) UNSIGNED          DEFAULT NULL,
  `disambiguation` VARCHAR(255)        NOT NULL DEFAULT '',
  `image`          TEXT                NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `film`
--

INSERT INTO `film` (`film_id`, `name`, `year`, `country_id`, `disambiguation`, `image`) VALUES
  (1, 'Viimne reliikvia', 1969, 4, '',
   'https://upload.wikimedia.org/wikipedia/en/thumb/6/6f/Viimne-reliikvia.jpg/220px-Viimne-reliikvia.jpg'),
  (2, 'Passage de Venus', 1874, 5, '', 'http://www.mp3alive.com/no_photo.jpg'),
  (3, 'Carmencita', 1894, 6, '', 'https://upload.wikimedia.org/wikipedia/commons/f/f4/Carmencita.jpg'),
  (4, 'Miss Jerry', 1894, 6, '', 'http://www.mp3alive.com/no_photo.jpg'),
  (5, 'Los políticos', 1904, 10, '', 'http://www.mp3alive.com/no_photo.jpg');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `gender`
--

CREATE TABLE `gender` (
  `gender_id` BIGINT(20) UNSIGNED NOT NULL,
  `name`      VARCHAR(255)        NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `gender`
--

INSERT INTO `gender` (`gender_id`, `name`) VALUES
  (1, 'Male'),
  (2, 'Female'),
  (3, 'Other');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `genre`
--

CREATE TABLE `genre` (
  `genre_id` BIGINT(20) UNSIGNED NOT NULL,
  `name`     VARCHAR(255)        NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `genre`
--

INSERT INTO `genre` (`genre_id`, `name`) VALUES
  (1, 'Adventure'),
  (2, 'Documentary'),
  (3, 'No genre\n\n'),
  (4, 'Action'),
  (5, 'Comedy'),
  (6, 'Drama'),
  (7, 'Crime'),
  (8, 'Romance');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `link_type`
--

CREATE TABLE `link_type` (
  `type_id` BIGINT(20) UNSIGNED NOT NULL,
  `name`    VARCHAR(255)        NOT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `link_type`
--

INSERT INTO `link_type` (`type_id`, `name`) VALUES
  (1, 'Director');

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `l_author_film`
--

CREATE TABLE `l_author_film` (
  `id`        BIGINT(20) UNSIGNED NOT NULL,
  `author_id` BIGINT(20) UNSIGNED DEFAULT NULL,
  `film_id`   BIGINT(20) UNSIGNED DEFAULT NULL,
  `type_id`   BIGINT(20) UNSIGNED DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `l_author_film`
--

INSERT INTO `l_author_film` (`id`, `author_id`, `film_id`, `type_id`) VALUES
  (1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `l_film_genre`
--

CREATE TABLE `l_film_genre` (
  `id`       BIGINT(20) UNSIGNED NOT NULL,
  `genre_id` BIGINT(20) UNSIGNED DEFAULT NULL,
  `film_id`  BIGINT(20) UNSIGNED DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `l_film_genre`
--

INSERT INTO `l_film_genre` (`id`, `genre_id`, `film_id`) VALUES
  (1, 1, 1);

-- --------------------------------------------------------

--
-- Tabeli struktuur tabelile `products`
--



CREATE TABLE `products` (
  `films`   VARCHAR(255) NOT NULL,
  `price`   VARCHAR(15)  NOT NULL,
  `FORMAT`  VARCHAR(255) NOT NULL,
  `copies`  VARCHAR(255) NOT NULL,
  `film_id` BIGINT(20) UNSIGNED DEFAULT NULL
)
  ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Andmete tõmmistamine tabelile `products`
--

INSERT INTO `products` (`films`, `price`, `FORMAT`, `copies`, `film_id`) VALUES
  ('Carmencita', '8 EUR', 'DVD', '3', 3),
  ('Los politicos', '7 EUR', 'DVD', '3', 5),
  ('Miss Jerry  ', '7 EUR', 'DVD', '4', 4),
  ('Passage de venus', '5 EUR', 'DVD', '3', 2),
  ('Viimne reliikvia    ', '10 EUR\r\n', 'DVD', '5', 1);

--
-- Indeksid tõmmistatud tabelitele
--

--
-- Indeksid tabelile `author`
--
ALTER TABLE `author`
ADD UNIQUE KEY `author_id` (`author_id`),
ADD KEY `country_id` (`country_id`),
ADD KEY `gender_id` (`gender_id`);

--
-- Indeksid tabelile `country`
--
ALTER TABLE `country`
ADD UNIQUE KEY `country_id` (`country_id`);

--
-- Indeksid tabelile `film`
--
ALTER TABLE `film`
ADD UNIQUE KEY `film_id` (`film_id`),
ADD KEY `country_id` (`country_id`);

--
-- Indeksid tabelile `gender`
--
ALTER TABLE `gender`
ADD UNIQUE KEY `gender_id` (`gender_id`);

--
-- Indeksid tabelile `genre`
--
ALTER TABLE `genre`
ADD UNIQUE KEY `genre_id` (`genre_id`);

--
-- Indeksid tabelile `link_type`
--
ALTER TABLE `link_type`
ADD UNIQUE KEY `type_id` (`type_id`);

--
-- Indeksid tabelile `l_author_film`
--
ALTER TABLE `l_author_film`
ADD UNIQUE KEY `id` (`id`),
ADD KEY `author_id` (`author_id`),
ADD KEY `film_id` (`film_id`),
ADD KEY `type_id` (`type_id`);

--
-- Indeksid tabelile `l_film_genre`
--
ALTER TABLE `l_film_genre`
ADD UNIQUE KEY `id` (`id`),
ADD KEY `genre_id` (`genre_id`),
ADD KEY `film_id` (`film_id`);

--
-- AUTO_INCREMENT tõmmistatud tabelitele
--

--
-- AUTO_INCREMENT tabelile `author`
--
ALTER TABLE `author`
MODIFY `author_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;
--
-- AUTO_INCREMENT tabelile `country`
--
ALTER TABLE `country`
MODIFY `country_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 11;
--
-- AUTO_INCREMENT tabelile `film`
--
ALTER TABLE `film`
MODIFY `film_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 6;
--
-- AUTO_INCREMENT tabelile `gender`
--
ALTER TABLE `gender`
MODIFY `gender_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 4;
--
-- AUTO_INCREMENT tabelile `genre`
--
ALTER TABLE `genre`
MODIFY `genre_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 9;
--
-- AUTO_INCREMENT tabelile `link_type`
--
ALTER TABLE `link_type`
MODIFY `type_id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT tabelile `l_author_film`
--
ALTER TABLE `l_author_film`
MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
--
-- AUTO_INCREMENT tabelile `l_film_genre`
--
ALTER TABLE `l_film_genre`
MODIFY `id` BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT = 2;
--
-- Tõmmistatud tabelite piirangud
--

--
-- Piirangud tabelile `author`
--
ALTER TABLE `author`
ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
ADD CONSTRAINT `author_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`);

--
-- Piirangud tabelile `film`
--
ALTER TABLE `film`
ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Piirangud tabelile `l_author_film`
--
ALTER TABLE `l_author_film`
ADD CONSTRAINT `l_author_film_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
ADD CONSTRAINT `l_author_film_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`),
ADD CONSTRAINT `l_author_film_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `link_type` (`type_id`);

--
-- Piirangud tabelile `l_film_genre`
--
ALTER TABLE `l_film_genre`
ADD CONSTRAINT `l_film_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
ADD CONSTRAINT `l_film_genre_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`);

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;


ALTER TABLE author ADD image TEXT;

