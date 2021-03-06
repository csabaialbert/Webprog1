CREATE DATABASE `kdbase`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `kdbase`;

CREATE TABLE `felhasznalok` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `csaladi_nev` varchar(45) NOT NULL default '',
  `uto_nev` varchar(45) NOT NULL default '',
  `bejelentkezes` varchar(12) NOT NULL default '',
  `jelszo` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `felhasznalok` (`id`,`csaladi_nev`,`uto_nev`,`bejelentkezes`,`jelszo`) VALUES 
 (1,'Családi_1','Utónév_1','jani',sha1('bácsi')),
 (2,'Családi_2','Utónév_2','Login2',sha1('login2')),
 (3,'Családi_3','Utónév_3','Login3',sha1('login3')),
 (4,'Családi_4','Utónév_4','Login4',sha1('login4')),
 (5,'Családi_5','Utónév_5','Login5',sha1('login5')),
 (6,'Családi_6','Utónév_6','Login6',sha1('login6')),
 (7,'Családi_7','Utónév_7','Login7',sha1('login7')),
 (8,'Családi_8','Utónév_8','Login8',sha1('login8')),
 (9,'Családi_9','Utónév_9','Login9',sha1('login9')),
 (10,'Családi_10','Utónév_10','Login10',sha1('login10')),
 (11,'Családi_11','Utónév_11','Login11',sha1('login11')),
 (12,'Családi_12','Utónév_12','Login12',sha1('login12'));


CREATE TABLE `request` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `datum` varchar(20) NOT NULL default '',
  `email` varchar(50) NOT NULL default '',
  `szoveg` varchar(240) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `request` (`id`,`nev`,`datum`, `email`,`szoveg`) VALUES 
 (1,'Gipsz Jakab','2021/12/12','gipsz.jakab@gmail.com' ,'Iskolában azt mondta, hogy a kutyám megette a házi feladatomat, 
 ezért nagyon szeretnék egy olyan kutyát aki házi feladatokat eszik');