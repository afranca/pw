/*
SQLyog Professional v8.71 
MySQL - 5.1.53-community : Database - pw
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`016601` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `016601`;

/*Table structure for table `antecedent` */

DROP TABLE IF EXISTS `antecedent`;

CREATE TABLE `antecedent` (
  `rul_id` int(11) NOT NULL,
  `att_id` int(11) NOT NULL,
  PRIMARY KEY (`rul_id`,`att_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `antecedent` */

LOCK TABLES `antecedent` WRITE;

UNLOCK TABLES;

/*Table structure for table `attribute` */

DROP TABLE IF EXISTS `attribute`;

CREATE TABLE `attribute` (
  `id` int(11) NOT NULL,
  `desc` varchar(100) DEFAULT NULL,
  `value` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `attribute` */

LOCK TABLES `attribute` WRITE;

UNLOCK TABLES;

/*Table structure for table `rule` */

DROP TABLE IF EXISTS `rule`;

CREATE TABLE `rule` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ant_id` int(11) DEFAULT NULL,
  `att_id` int(11) DEFAULT NULL,
  `cf` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `rule` */

LOCK TABLES `rule` WRITE;

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
