-- ===================================================================
-- Cities-DatabaseBuild
--   This script builds the dbCities database and its table.  It also 
-- inserts data into the tables.
-- ===================================================================

-- -------------------------------------------------------------------
-- Save selected MySQL settings
-- -------------------------------------------------------------------
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -------------------------------------------------------------------
-- Delete and create database
-- -------------------------------------------------------------------
DROP SCHEMA IF EXISTS `dbCities` ;
CREATE SCHEMA IF NOT EXISTS `dbCities` DEFAULT CHARACTER SET utf8;

-- -------------------------------------------------------------------
-- Switch to dbCities database
-- -------------------------------------------------------------------
USE dbCities;

-- -------------------------------------------------------------------
-- Delete and create table `dbCities`.`tbCities`
-- -------------------------------------------------------------------
DROP TABLE IF EXISTS `dbCities`.`tbCities` ;
CREATE TABLE IF NOT EXISTS `dbCities`.`tbCities` (
  `CityID` INT NOT NULL AUTO_INCREMENT,
  `City` VARCHAR(45) NOT NULL,
  `YearFounded` INT NOT NULL,
  PRIMARY KEY (`CityID`))
ENGINE = InnoDB;

-- -------------------------------------------------------------------
-- Insert data into table `dbCities`.`tbCities`
-- -------------------------------------------------------------------
INSERT INTO tbCities (City, YearFounded) VALUES 
  ('Jamestown',	1607),
  ('Plymouth', 1620),
  ('Boston',	1630),
  ('Windsor',	1633),
  ('Green Bay',	1634),
  ('Pittsburgh',	1758),
  ('St. Louis',	1763),
  ('San Diego',	1769),
  ('San Francisco',	1776),
  ('Nashville',	1779),
  ('Cincinnati',	1788),
  ('Charleston',	1788),
  ('Buffalo',	1789),
  ('Knoxville',	1791);
SELECT * FROM tbCities;

-- -----------------------------------------------------
-- Restore saved MySQL settings
-- -----------------------------------------------------
SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
