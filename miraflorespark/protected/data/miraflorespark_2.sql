SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `miraflorespark` ;
CREATE SCHEMA IF NOT EXISTS `miraflorespark` DEFAULT CHARACTER SET utf8 ;
USE `miraflorespark` ;

-- -----------------------------------------------------
-- Table `miraflorespark`.`tarifa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`tarifa` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`tarifa` (
  `id_tarifa` INT(11) NOT NULL AUTO_INCREMENT,
  `por_minuto` DECIMAL(5,3) NULL,
  `por_mes` DECIMAL(5,3) NULL,
  `tipo_cliente` VARCHAR(45) NULL,
  PRIMARY KEY (`id_tarifa`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `miraflorespark`.`parking`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`parking` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`parking` (
  `id_parking` INT NOT NULL,
  `codigo` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `sensor` VARCHAR(45) NULL,
  PRIMARY KEY (`id_parking`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`tarjeta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`tarjeta` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`tarjeta` (
  `id_tarjeta` INT(11) NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tarjeta`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `miraflorespark`.`vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`vehiculo` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`vehiculo` (
  `id_vehiculo` INT(11) NOT NULL AUTO_INCREMENT,
  `placa` VARCHAR(7) NULL DEFAULT NULL,
  `color` VARCHAR(45) NULL DEFAULT NULL,
  `modelo` VARCHAR(45) NULL,
  `condicion` VARCHAR(45) NULL,
  `id_tarjeta` INT(11) NULL,
  PRIMARY KEY (`id_vehiculo`),
  CONSTRAINT `fk_vehiculo_tarjeta1`
    FOREIGN KEY (`id_tarjeta`)
    REFERENCES `miraflorespark`.`tarjeta` (`id_tarjeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE UNIQUE INDEX `placa_UNIQUE` ON `miraflorespark`.`vehiculo` (`placa` ASC);

CREATE INDEX `fk_vehiculo_tarjeta1_idx` ON `miraflorespark`.`vehiculo` (`id_tarjeta` ASC);


-- -----------------------------------------------------
-- Table `miraflorespark`.`ticket`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`ticket` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`ticket` (
  `id_ticket` INT NOT NULL AUTO_INCREMENT,
  `hora_salida` TIME NULL DEFAULT NULL,
  `hora_llegada` TIME NULL DEFAULT NULL,
  `fecha` DATE NULL,
  `id_parking` INT NOT NULL,
  `id_vehiculo` INT(11) NOT NULL,
  PRIMARY KEY (`id_ticket`),
  CONSTRAINT `fk_ticket_parking`
    FOREIGN KEY (`id_parking`)
    REFERENCES `miraflorespark`.`parking` (`id_parking`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ticket_vehiculo1`
    FOREIGN KEY (`id_vehiculo`)
    REFERENCES `miraflorespark`.`vehiculo` (`id_vehiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

CREATE INDEX `fk_ticket_parking_idx` ON `miraflorespark`.`ticket` (`id_parking` ASC);

CREATE INDEX `fk_ticket_vehiculo1_idx` ON `miraflorespark`.`ticket` (`id_vehiculo` ASC);


-- -----------------------------------------------------
-- Table `miraflorespark`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`cliente` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`cliente` (
  `id_cliente` INT NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `ape_materno` VARCHAR(45) NULL,
  `ape_paterno` VARCHAR(45) NULL,
  `tipo_persona` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `miraflorespark`.`contrato`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`contrato` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`contrato` (
  `id_contrato` INT NOT NULL,
  `fecha` VARCHAR(45) NULL,
  `cantidad_meses` VARCHAR(45) NULL,
  `id_cliente` INT NOT NULL,
  `id_tarifa` INT(11) NOT NULL,
  `id_tarjeta` INT(11) NOT NULL,
  PRIMARY KEY (`id_contrato`),
  CONSTRAINT `fk_contrato_cliente1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `miraflorespark`.`cliente` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contrato_tarifa1`
    FOREIGN KEY (`id_tarifa`)
    REFERENCES `miraflorespark`.`tarifa` (`id_tarifa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contrato_tarjeta1`
    FOREIGN KEY (`id_tarjeta`)
    REFERENCES `miraflorespark`.`tarjeta` (`id_tarjeta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_contrato_cliente1_idx` ON `miraflorespark`.`contrato` (`id_cliente` ASC);

CREATE INDEX `fk_contrato_tarifa1_idx` ON `miraflorespark`.`contrato` (`id_tarifa` ASC);

CREATE INDEX `fk_contrato_tarjeta1_idx` ON `miraflorespark`.`contrato` (`id_tarjeta` ASC);


-- -----------------------------------------------------
-- Table `miraflorespark`.`contrato_vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `miraflorespark`.`contrato_vehiculo` ;

CREATE TABLE IF NOT EXISTS `miraflorespark`.`contrato_vehiculo` (
  `id_contrato` INT NOT NULL,
  `id_vehiculo` INT(11) NOT NULL,
  PRIMARY KEY (`id_contrato`, `id_vehiculo`),
  CONSTRAINT `fk_contrato_vehiculo_contrato1`
    FOREIGN KEY (`id_contrato`)
    REFERENCES `miraflorespark`.`contrato` (`id_contrato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contrato_vehiculo_vehiculo1`
    FOREIGN KEY (`id_vehiculo`)
    REFERENCES `miraflorespark`.`vehiculo` (`id_vehiculo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE INDEX `fk_contrato_vehiculo_contrato1_idx` ON `miraflorespark`.`contrato_vehiculo` (`id_contrato` ASC);

CREATE INDEX `fk_contrato_vehiculo_vehiculo1_idx` ON `miraflorespark`.`contrato_vehiculo` (`id_vehiculo` ASC);


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
