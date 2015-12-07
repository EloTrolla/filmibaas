-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2015 at 11:53 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmibaas`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `author` (
  `author_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `begin_date_year` smallint(6) DEFAULT NULL,
  `begin_date_month` smallint(6) DEFAULT NULL,
  `begin_date_day` smallint(6) DEFAULT NULL,
  `end_date_year` smallint(6) DEFAULT NULL,
  `end_date_month` smallint(6) DEFAULT NULL,
  `end_date_day` smallint(6) DEFAULT NULL,
  `country_id` bigint(20) unsigned DEFAULT NULL,
  `gender_id` bigint(20) unsigned DEFAULT NULL,
  `disambiguation` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `author`:
--   `country_id`
--       `country` -> `country_id`
--   `gender_id`
--       `gender` -> `gender_id`
--

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `name`, `begin_date_year`, `begin_date_month`, `begin_date_day`, `end_date_year`, `end_date_month`, `end_date_day`, `country_id`, `gender_id`, `disambiguation`) VALUES
(1, 'Grigori Kromanov', 1926, 3, 8, 1984, 7, 18, 1, 1, ''),
(2, 'Eugene Py', 1859, 5, 19, 1924, 8, 26, 5, 1, ''),
(3, 'P.J.C. Janssen', 1824, 2, 22, 1907, 12, 23, 5, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--
-- Creation: Nov 05, 2015 at 06:56 AM
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` bigint(20) unsigned NOT NULL,
  `iso` char(2) DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `country`:
--

--
-- Dumping data for table `country`
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
-- Table structure for table `film`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS film (
  `film_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `year` smallint(6) DEFAULT NULL,
  `country_id` bigint(20) unsigned DEFAULT NULL,
  `disambiguation` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `film`:
--   `country_id`
--       `country` -> `country_id`
--

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`film_id`, `name`, `year`, `country_id`, `disambiguation`) VALUES
(1, 'Viimne reliikvia', 1969, 4, ''),
(2, 'Passage de Venus', 1874, 5, ''),
(3, 'Carmencita', 1894, 6, ''),
(4, 'Miss Jerry', 1894, 6, ''),
(5, 'Los políticos', 1904, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `gender`:
--

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `name`) VALUES
(1, 'Male'),
(2, 'Female'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genre_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `genre`:
--

--
-- Dumping data for table `genre`
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
-- Table structure for table `l_author_film`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `l_author_film` (
  `id` bigint(20) unsigned NOT NULL,
  `author_id` bigint(20) unsigned DEFAULT NULL,
  `film_id` bigint(20) unsigned DEFAULT NULL,
  `type_id` bigint(20) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `l_author_film`:
--   `author_id`
--       `author` -> `author_id`
--   `film_id`
--       `film` -> `film_id`
--   `type_id`
--       `link_type` -> `type_id`
--

--
-- Dumping data for table `l_author_film`
--


INSERT INTO `l_author_film` (`id`, `author_id`, `film_id`, `type_id`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `l_film_genre`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `l_film_genre` (
  `id` bigint(20) unsigned NOT NULL,
  `genre_id` bigint(20) unsigned DEFAULT NULL,
  `film_id` bigint(20) unsigned DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `l_film_genre`:
--   `genre_id`
--       `genre` -> `genre_id`
--   `film_id`
--       `film` -> `film_id`
--

--
-- Dumping data for table `l_film_genre`
--

INSERT INTO `l_film_genre` (`id`, `genre_id`, `film_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `link_type`
--
-- Creation: Nov 05, 2015 at 06:57 AM
--

CREATE TABLE IF NOT EXISTS `link_type` (
  `type_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- RELATIONS FOR TABLE `link_type`:
--

--
-- Dumping data for table `link_type`
--

INSERT INTO `link_type` (`type_id`, `name`) VALUES
(1, 'Director');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD UNIQUE KEY `author_id` (`author_id`),
  ADD KEY `country_id` (`country_id`),
  ADD KEY `gender_id` (`gender_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD UNIQUE KEY `country_id` (`country_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD UNIQUE KEY `film_id` (`film_id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD UNIQUE KEY `gender_id` (`gender_id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD UNIQUE KEY `genre_id` (`genre_id`);

--
-- Indexes for table `l_author_film`
--
ALTER TABLE `l_author_film`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `genre_id` (`genre_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `link_type`
--
ALTER TABLE `link_type`
  ADD UNIQUE KEY `type_id` (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `film_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genre_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `l_author_film`
--
ALTER TABLE `l_author_film`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `link_type`
--
ALTER TABLE `link_type`
  MODIFY `type_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `author`
--
ALTER TABLE `author`
  ADD CONSTRAINT `author_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `author_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`);

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`);

--
-- Constraints for table `l_author_film`
--
ALTER TABLE `l_author_film`
  ADD CONSTRAINT `l_author_film_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `author` (`author_id`),
  ADD CONSTRAINT `l_author_film_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`),
  ADD CONSTRAINT `l_author_film_ibfk_3` FOREIGN KEY (`type_id`) REFERENCES `link_type` (`type_id`);

--
-- Constraints for table `l_film_genre`
--
ALTER TABLE `l_film_genre`
  ADD CONSTRAINT `l_film_genre_ibfk_1` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`genre_id`),
  ADD CONSTRAINT `l_film_genre_ibfk_2` FOREIGN KEY (`film_id`) REFERENCES `film` (`film_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
