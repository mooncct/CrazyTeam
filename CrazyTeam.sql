/*
SQLyog Trial v11.01 (32 bit)
MySQL - 5.7.17 : Database - crazyteam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`crazyteam` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crazyteam`;

/*Table structure for table `detailed_users_finance` */

DROP TABLE IF EXISTS `detailed_users_finance`;

CREATE TABLE `detailed_users_finance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `finance_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `money` float unsigned NOT NULL,
  `state` tinyint(3) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `detailed_users_finance` */

insert  into `detailed_users_finance`(`id`,`finance_id`,`users_id`,`money`,`state`) values (29,23,1,33.5,1),(30,23,2,33.5,1),(31,23,3,33.5,1),(32,24,1,67.3,1),(33,24,2,67.3,1),(34,24,3,67.3,1),(35,25,1,22,1),(36,25,2,22,1),(37,25,3,22,1),(38,26,2,16.6,1),(39,26,3,16.6,1);

/*Table structure for table `finance` */

DROP TABLE IF EXISTS `finance`;

CREATE TABLE `finance` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'The new consumer',
  `amount` float DEFAULT NULL,
  `users` tinyint(4) DEFAULT '0',
  `describe` text COLLATE utf8mb4_unicode_ci,
  `start` timestamp NULL DEFAULT NULL,
  `end` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `finance` */

insert  into `finance`(`id`,`name`,`amount`,`users`,`describe`,`start`,`end`,`created_at`,`updated_at`) values (23,'shucai',100.5,0,NULL,'2017-06-06 06:58:07','2017-06-30 22:00:01','2017-06-06 02:06:08','2017-06-06 02:06:08'),(24,'rou',202,0,NULL,'2017-06-06 06:09:08','2017-06-30 22:00:01','2017-06-06 02:06:08','2017-06-06 02:06:08'),(25,'jiaju',66,0,NULL,'2017-06-06 06:22:08','2017-06-30 22:00:01','2017-06-06 02:06:08','2017-06-06 02:06:08'),(26,'The new consumer',50,0,NULL,'2017-06-06 06:11:46','2017-06-30 22:00:01','2017-06-06 05:06:46','2017-06-06 05:06:46');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_06_01_072433_create_finance_table',2),(4,'2017_06_01_075211_create_relate_users_finance_table',2),(5,'2017_06_02_084259_change_finance_table',3),(6,'2017_06_01_075211_create_detailed_users_finance_table',4),(7,'2017_06_05_030104_create_finance_table',5);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'catho','mooncct@qq.com','$2y$10$V0CerJl0D/wiYxHCNaS2HeCP59nDm5N.d95UY6ZFPAEeUvtq8w26C','cMmvbBS2kddGK5JaWbC9rKfmAplQatsSgh846DhSmFyAT43sIVN15cLDFIBa','2017-06-01 03:03:23','2017-06-01 03:03:23'),(2,'jojo','jojo@b.c','$2y$10$Vuf8.yQSQz9tyvdgrFsSg.NjvPQyJcgviOWvzJLFW9dNFhIc/WrPW','KcsK0ycZfRaK2VW9r7xlyub8pTImDF3tzv53A3wrQWFDGgcfOHidlupU3oK7','2017-06-05 03:38:59','2017-06-05 03:38:59'),(3,'madeline','madeline@b.c','$2y$10$rmqygbi2lcgV3MuEj/HD0.Twc9ir1zIYnI4FjnlGlF8tNzQptqJGW',NULL,'2017-06-05 03:39:26','2017-06-05 03:39:26');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
