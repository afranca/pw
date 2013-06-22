/*
SQLyog Professional v8.71 
MySQL - 5.1.53-community : Database - 016601
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`016601` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `016601`;


CREATE TABLE `antecedente` (
  `id_antecedente` int(11) NOT NULL,
  `id_atr-val` int(11) NOT NULL,
  PRIMARY KEY (`id_antecedente`,`id_atr-val`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



CREATE TABLE `atr-val` (
  `id` int(11) NOT NULL,
  `atributo` varchar(100) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `regla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_antecedente` int(11) DEFAULT NULL,
  `id_atributo` int(11) DEFAULT NULL,
  `cf` float DEFAULT NULL,
  PRIMARY KEY (`id`)
)
