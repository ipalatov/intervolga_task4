-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `intervolga_task4` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `intervolga_task4`;

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `abb_name` varchar(3) NOT NULL,
  `population` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `countries` (`id`, `name`, `abb_name`, `population`) VALUES
(1,	'Russian Federation',	'RUS',	146745098),
(2,	'United States of America',	'USA',	329210630),
(3,	'Federal Republic of Germany',	'GER',	83149300),
(4,	'United Kingdom',	'UK',	60800000),
(5,	'French Republic',	'FR',	67081000),
(6,	'Japan',	'JP',	125960000);

-- 2020-08-15 15:29:14
