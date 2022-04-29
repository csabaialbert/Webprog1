CREATE DATABASE `urlapdb`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `urlapdb`;

CREATE TABLE `request` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `datum` varchar(20) NOT NULL default '',
  `szoveg` varchar(240) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `request` (`id`,`nev`,`datum`,`szoveg`) VALUES 
 (1,'Gipsz Jakab','gipsz.jakab@gmail.com','Iskolában azt mondta, hogy a kutyám megette a házi feladatomat, 
 ezért nagyon szeretnék egy olyan kutyát aki házi feladatokat eszik');