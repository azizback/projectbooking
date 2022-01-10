-- check if the database exist an use it


CREATE DATABASE IF NOT EXISTS `localdb` ;
USE `localdb`;


-- creating table 

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(32) NOT NULL auto_increment,
  `UserID` int(32) NOT NULL,
  `HouseNumber` varchar(15) NOT NULL,
  `StartDate` date NOT NULL,
  	`EndDate` date NOT NULL,
	`Approved` BOOLEAN NOT NULL,
	`ToCancel` BOOLEAN NOT NULL,
	`Comment` text DEFAULT NULL,
      PRIMARY KEY (`id`)
);



CREATE TABLE IF NOT EXISTS `loginform` (
  `ID` int(11) NOT NULL auto_increment,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Phone` varchar(25) NOT NULL,
      PRIMARY KEY (`id`)
);



