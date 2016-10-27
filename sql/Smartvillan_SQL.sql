-- MySQL Workbench Synchronization
-- Generated: 2016-09-22 14:55
-- Model: New Model
-- Version: 1.0
-- Project: Name of the project
-- Author: 20131084010075

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

ALTER TABLE `controle_de_estoque`.`item` 
CHANGE COLUMN `valor` `valor` REAL NOT NULL ;

ALTER TABLE `controle_de_estoque`.`animal` 
CHANGE COLUMN `valor_animal` `valor_animal` REAL NULL ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
