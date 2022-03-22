-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema esof
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema esof
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `esof` DEFAULT CHARACTER SET utf8 ;
USE `esof` ;

-- -----------------------------------------------------
-- Table `esof`.`Produto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `esof`.`Produto` (
  `idproduto` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `quantidade` INT NOT NULL,
  `preco_venda` FLOAT(3,2) NOT NULL,
  `preco_custo` FLOAT(3,2) NOT NULL,
  PRIMARY KEY (`idproduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esof`.`Venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `esof`.`Venda` (
  `idVenda` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`idVenda`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esof`.`Compras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `esof`.`Compras` (
  `idCompra` INT NOT NULL,
  `data` DATE NOT NULL,
  PRIMARY KEY (`idCompra`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esof`.`Produto_has_Venda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `esof`.`Produto_has_Venda` (
  `idProduto_has_Venda` INT NOT NULL,
  `idproduto` INT NOT NULL,
  `idVenda` INT NOT NULL,
  `quantidade` INT NOT NULL,
  `valor` FLOAT(4,2) NOT NULL,
  INDEX `fk_Produto_has_Venda_Venda1_idx` (`idVenda` ASC)  ,
  INDEX `fk_Produto_has_Venda_Produto_idx` (`idproduto` ASC)  ,
  PRIMARY KEY (`idProduto_has_Venda`),
  CONSTRAINT `fk_Produto_has_Venda_Produto`
    FOREIGN KEY (`idproduto`)
    REFERENCES `esof`.`Produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_has_Venda_Venda1`
    FOREIGN KEY (`idVenda`)
    REFERENCES `esof`.`Venda` (`idVenda`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `esof`.`Produto_has_Compra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `esof`.`Produto_has_Compra` (
  `idProduto_has_Compra` INT NOT NULL,
  `idproduto` INT NOT NULL,
  `idCompra` INT NOT NULL,
  `quantidade` INT NOT NULL,
  `valor` FLOAT(4,2) NOT NULL,
  INDEX `fk_Produto_has_Compra_Compra1_idx` (`idCompra` ASC)  ,
  INDEX `fk_Produto_has_Compra_Produto1_idx` (`idproduto` ASC)  ,
  PRIMARY KEY (`idProduto_has_Compra`),
  CONSTRAINT `fk_Produto_has_Compra_Produto1`
    FOREIGN KEY (`idproduto`)
    REFERENCES `esof`.`Produto` (`idproduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Produto_has_Compra_Compra1`
    FOREIGN KEY (`idCompra`)
    REFERENCES `esof`.`Compras` (`idCompra`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
