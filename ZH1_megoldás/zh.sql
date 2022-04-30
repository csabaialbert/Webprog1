CREATE DATABASE `aruhaz`
CHARACTER SET utf8 COLLATE utf8_general_ci;

USE `aruhaz`;

CREATE TABLE `rendeles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `nev` varchar(45) NOT NULL default '',
  `email` varchar(45) NOT NULL default '',
  `nap` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`id`)
)
ENGINE = MYISAM
CHARACTER SET utf8 COLLATE utf8_general_ci;

INSERT INTO `rendeles` (`id`,`nev`,`email`,`nap`) VALUES 
 (1,'Kiss Péter','kiss.peter@gmail.com','hétfő');
