[H[2J
Welcome to CakePHP v1.3.0 Console
---------------------------------------------------------------
App : app
Path: /var/www/staple/app
---------------------------------------------------------------
Cake Schema Shell
---------------------------------------------------------------
#Pp sql generated on: 2010-05-20 14:29:09 : 1274333349

DROP TABLE IF EXISTS `posts`;


CREATE TABLE `posts` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`title` varchar(50) DEFAULT NULL,
	`body` text DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,	PRIMARY KEY  (`id`))	DEFAULT CHARSET=utf8,
	COLLATE=utf8_general_ci,
	ENGINE=InnoDB;


