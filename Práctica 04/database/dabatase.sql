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

/*Table structure for table `antecedente` */

DROP TABLE IF EXISTS `antecedente`;

CREATE TABLE `antecedente` (
  `id` int(11) NOT NULL,
  `id_atributo` int(11) NOT NULL,
  PRIMARY KEY (`id`,`id_atributo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `antecedente` */

LOCK TABLES `antecedente` WRITE;

insert  into `antecedente`(`id`,`id_atributo`) values (1,1);
insert  into `antecedente`(`id`,`id_atributo`) values (1,2);
insert  into `antecedente`(`id`,`id_atributo`) values (2,2);
insert  into `antecedente`(`id`,`id_atributo`) values (2,4);
insert  into `antecedente`(`id`,`id_atributo`) values (3,1);
insert  into `antecedente`(`id`,`id_atributo`) values (3,6);

UNLOCK TABLES;

/*Table structure for table `atributo` */

DROP TABLE IF EXISTS `atributo`;

CREATE TABLE `atributo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `atributo` varchar(100) DEFAULT NULL,
  `valor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `atributo` */

LOCK TABLES `atributo` WRITE;

insert  into `atributo`(`id`,`atributo`,`valor`) values (1,'Nublado','si');
insert  into `atributo`(`id`,`atributo`,`valor`) values (2,'Viento','oeste');
insert  into `atributo`(`id`,`atributo`,`valor`) values (3,'Lluvia','si');
insert  into `atributo`(`id`,`atributo`,`valor`) values (4,'Nublado','no');
insert  into `atributo`(`id`,`atributo`,`valor`) values (5,'Sol','si');
insert  into `atributo`(`id`,`atributo`,`valor`) values (6,'Viento','noroeste');
insert  into `atributo`(`id`,`atributo`,`valor`) values (7,'Frio','si');

UNLOCK TABLES;

/*Table structure for table `regla` */

DROP TABLE IF EXISTS `regla`;

CREATE TABLE `regla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_antecedente` int(11) DEFAULT NULL,
  `id_atributo` int(11) DEFAULT NULL,
  `cf` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `regla` */

LOCK TABLES `regla` WRITE;

insert  into `regla`(`id`,`id_antecedente`,`id_atributo`,`cf`) values (1,1,3,1);
insert  into `regla`(`id`,`id_antecedente`,`id_atributo`,`cf`) values (2,2,5,1);
insert  into `regla`(`id`,`id_antecedente`,`id_atributo`,`cf`) values (3,3,3,1);
insert  into `regla`(`id`,`id_antecedente`,`id_atributo`,`cf`) values (4,1,7,1);

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
