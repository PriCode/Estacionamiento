SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `miraflorespark` ;
CREATE SCHEMA IF NOT EXISTS `miraflorespark` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `miraflorespark` ;

-- -----------------------------------------------------
-- Table `miraflorespark`.`marca`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`marca` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`marca` (
  `id_marca` INT NOT NULL AUTO_INCREMENT,
  `nombre_marca` VARCHAR(45) NULL,
  PRIMARY KEY (`id_marca`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`tipo_vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`tipo_vehiculo` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`tipo_vehiculo` (
  `id_tipo` INT NOT NULL AUTO_INCREMENT,
  `nombre_tipo` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tipo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`conductor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`conductor` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`conductor` (
  `id_conductor` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(200) NULL,
  `edad` INT NULL,
  `DNI` VARCHAR(10) NULL,
  `direccion` VARCHAR(200) NULL,
  PRIMARY KEY (`id_conductor`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`vehiculo` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`vehiculo` (
  `id_vehiculo` INT NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(7) NULL,
  `color` VARCHAR(45) NULL,
  `id_marca` INT NOT NULL,
  `id_tipo` INT NOT NULL,
  `id_conductor` INT NOT NULL,
  PRIMARY KEY (`id_vehiculo`),
  UNIQUE INDEX `placa_UNIQUE` (`placa` ASC),
  INDEX `fk_vehiculo_marca_idx` (`id_marca` ASC),
  INDEX `fk_vehiculo_tipo_vehiculo1_idx` (`id_tipo` ASC),
  INDEX `fk_vehiculo_conductor1_idx` (`id_conductor` ASC),
  CONSTRAINT `fk_vehiculo_marca`
    FOREIGN KEY (`id_marca`)
    REFERENCES `miraflorespark`.`marca` (`id_marca`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vehiculo_tipo_vehiculo1`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `miraflorespark`.`tipo_vehiculo` (`id_tipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_vehiculo_conductor1`
    FOREIGN KEY (`id_conductor`)
    REFERENCES `miraflorespark`.`conductor` (`id_conductor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`tarifa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`tarifa` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`tarifa` (
  `id_tarifa` INT NOT NULL AUTO_INCREMENT,
  `tarifa` FLOAT NOT NULL,
  `id_tipo` INT NOT NULL,
  PRIMARY KEY (`id_tarifa`),
  INDEX `fk_tarifa_tipo_vehiculo1_idx` (`id_tipo` ASC),
  CONSTRAINT `fk_tarifa_tipo_vehiculo1`
    FOREIGN KEY (`id_tipo`)
    REFERENCES `miraflorespark`.`tipo_vehiculo` (`id_tipo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`ticket`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`ticket` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`ticket` (
  `id_ticket` INT NOT NULL AUTO_INCREMENT,
  `hora_llegada` TIMESTAMP NULL,
  `hora_salida` TIMESTAMP NULL,
  `monto` VARCHAR(45) NULL,
  `id_vehiculo` INT NOT NULL,
  PRIMARY KEY (`id_ticket`),
  INDEX `fk_visita_vehiculo1_idx` (`id_vehiculo` ASC),
  CONSTRAINT `fk_visita_vehiculo1`
    FOREIGN KEY (`id_vehiculo`)
    REFERENCES `miraflorespark`.`vehiculo` (`id_vehiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`contratos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`contratos` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`contratos` (
  `idContrato` INT PRIMARY KEY AUTO_INCREMENT,
  `nombres` varchar(80) NULL,
  `apellidos` varchar(120) NULL,
  `placa` VARCHAR(7) NULL,
  `marca` varchar(45)  NULL,
  `modelo` VARCHAR(45) NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
