-- SQLBook: Code
-- MySQL Script generated by MySQL Workbench
-- Thu Sep  5 13:33:11 2024
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema IF_livros
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema IF_livros
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `IF_livros` ;
USE `IF_livros` ;

-- -----------------------------------------------------
-- Table `IF_livros`.`livro`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IF_livros`.`livro` (
  `idlivros` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `genero` VARCHAR(45) NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `autor` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idlivros`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IF_livros`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IF_livros`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` VARCHAR(15) NOT NULL,
  `telefone` VARCHAR(20) NULL,
  `email` VARCHAR(100) NULL,
  `data_de_nascimento` DATE NOT NULL,
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IF_livros`.`funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IF_livros`.`funcionario` (
  `idfuncionario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `data_de_nascimento` DATE NOT NULL,
  `funcao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idfuncionario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IF_livros`.`emprestimo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IF_livros`.`emprestimo` (
  `emprestimo` INT NOT NULL AUTO_INCREMENT,
  `data_de_devolucao` DATE NOT NULL,
  `data_de_emprestimo` DATE NOT NULL,
  `funcionario_idfuncionario` INT NOT NULL,
  `livro_idlivros` INT NOT NULL,
  `cliente_idcliente` INT NOT NULL,
  PRIMARY KEY (`emprestimo`),
  INDEX `fk_emprestimo_funcionario1_idx` (`funcionario_idfuncionario` ASC) VISIBLE,
  INDEX `fk_emprestimo_livro1_idx` (`livro_idlivros` ASC) VISIBLE,
  INDEX `fk_emprestimo_cliente1_idx` (`cliente_idcliente` ASC) VISIBLE,
  CONSTRAINT `fk_emprestimo_funcionario1`
    FOREIGN KEY (`funcionario_idfuncionario`)
    REFERENCES `IF_livros`.`funcionario` (`idfuncionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_emprestimo_livro1`
    FOREIGN KEY (`livro_idlivros`)
    REFERENCES `IF_livros`.`livro` (`idlivros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_emprestimo_cliente1`
    FOREIGN KEY (`cliente_idcliente`)
    REFERENCES `IF_livros`.`cliente` (`idcliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `IF_livros`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `IF_livros`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(120) NOT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;



-- SQLBook: Code
INSERT INTO cliente (nome, cpf, telefone, email, data_de_nascimento) VALUES
('Ana Silva', '123.456.789-01', '(11) 98765-4321', 'ana.silva@example.com', '1990-01-15'),
('Bruno Costa', '234.567.890-12', '(21) 91234-5678', 'bruno.costa@example.com', '1985-05-22'),
('Carla Mendes', '345.678.901-23', '(31) 99876-5432', 'carla.mendes@example.com', '1992-03-10'),
('Diego Oliveira', '456.789.012-34', '(41) 98765-4321', 'diego.oliveira@example.com', '1988-07-19'),
('Elisa Santos', '567.890.123-45', '(51) 91234-5678', 'elisa.santos@example.com', '1995-12-25'),
('Felipe Souza', '678.901.234-56', '(61) 99876-5432', 'felipe.souza@example.com', '1993-11-01'),
('Gabriela Lima', '789.012.345-67', '(71) 98765-4321', 'gabriela.lima@example.com', '1987-04-14'),
('Hugo Pereira', '890.123.456-78', '(81) 91234-5678', 'hugo.pereira@example.com', '1991-06-30'),
('Isabela Rocha', '901.234.567-89', '(91) 99876-5432', 'isabela.rocha@example.com', '1989-09-20'),
('João Almeida', '012.345.678-90', '(31) 98765-4321', 'joao.almeida@example.com', '1994-10-05'),
('Larissa Fernandes', '123.456.789-01', '(41) 91234-5678', 'larissa.fernandes@example.com', '1996-02-18'),
('Marcelo Azevedo', '234.567.890-12', '(51) 99876-5432', 'marcelo.azevedo@example.com', '1983-08-27'),
('Natalia Martins', '345.678.901-23', '(61) 98765-4321', 'natalia.martins@example.com', '1997-01-12'),
('Otavio Ramos', '456.789.012-34', '(71) 91234-5678', 'otavio.ramos@example.com', '1986-03-25'),
('Paula Barros', '567.890.123-45', '(81) 99876-5432', 'paula.barros@example.com', '1990-05-10'),
('Rafael Vieira', '678.901.234-56', '(91) 98765-4321', 'rafael.vieira@example.com', '1992-07-22'),
('Sofia Freitas', '789.012.345-67', '(31) 91234-5678', 'sofia.freitas@example.com', '1984-11-09'),
('Tiago Correia', '890.123.456-78', '(41) 99876-5432', 'tiago.correia@example.com', '1988-09-15'),
('Ursula Reis', '901.234.567-89', '(51) 91234-5678', 'ursula.reis@example.com', '1993-04-01'),
('Vinicius Cardoso', '012.345.678-90', '(61) 99876-5432', 'vinicius.cardoso@example.com', '1995-12-20');

-- SQLBook: Code
INSERT INTO livro (nome, genero, status, autor) VALUES
('A Garota no Trem', 'Suspense', 'Disponível', 'Paula Hawkins'),
('O Sol é Para Todos', 'Drama', 'Disponível', 'Harper Lee'),
('A Vida Invisível de Addie LaRue', 'Fantasia', 'Disponível', 'V.E. Schwab'),
('A Garota que Roubava Livros', 'Drama', 'Disponível', 'Markus Zusak'),
('O Nome do Vento', 'Fantasia', 'Disponível', 'Patrick Rothfuss'),
('O Sol Também é Uma Estrela', 'Romance', 'Disponível', 'Nicola Yoon'),
('A Sombra do Vento', 'Suspense', 'Disponível', 'Carlos Ruiz Zafón'),
('O Ceifador', 'Fantasia', 'Disponível', 'Neal Shusterman'),
('A Casa dos Espíritos', 'Romance', 'Disponível', 'Isabel Allende'),
('Os Homens Que Não Amavam as Mulheres', 'Suspense', 'Disponível', 'Stieg Larsson'),
('A Garota do Trem', 'Suspense', 'Disponível', 'Paula Hawkins'),
('O Lobo de Wall Street', 'Memórias', 'Disponível', 'Jordan Belfort'),
('A Hospedeira', 'Ficção Científica', 'Disponível', 'Stephenie Meyer'),
('A Revolução dos Bichos', 'Fábula', 'Disponível', 'George Orwell'),
('O Homem de Areia', 'Terror', 'Disponível', 'Fritz Lieber'),
('A Coluna de Fogo', 'Histórico', 'Disponível', 'Ken Follett'),
('O Andar do Bêbado', 'Ciência', 'Disponível', 'Leonard Mlodinow'),
('A Última Nota', 'Drama', 'Disponível', 'A.J. Banner'),
('O Leitor', 'Drama', 'Disponível', 'Bernhard Schlink'),
('A Cidade do Sol', 'Drama', 'Disponível', 'Khaled Hosseini');

-- SQLBook: Code
INSERT INTO `IF_livros`.`funcionario` (`nome`, `cpf`, `telefone`, `data_de_nascimento`, `funcao`) VALUES
('João Silva', '123.456.789-01', '(11) 98765-4341', '1985-01-15', 'Gerente'),
('Maria Oliveira', '234.567.890-12', '(11) 98765-4342', '1990-02-20', 'Atendente'),
('Carlos Souza', '345.678.901-23', '(11) 98765-4343', '1988-03-25', 'Bibliotecário'),
('Ana Costa', '456.789.012-34', '(11) 98765-4344', '1992-04-30', 'Assistente de Biblioteca'),
('Lucas Pereira', '567.890.123-45', '(11) 98765-4345', '1995-05-10', 'Técnico de Informação'),
('Mariana Lima', '678.901.234-56', '(11) 98765-4346', '1983-06-15', 'Catalogador'),
('Rafael Mendes', '789.012.345-67', '(11) 98765-4347', '1987-07-20', 'Auxiliar de Serviços Gerais'),
('Fernanda Rocha', '890.123.456-78', '(11) 98765-4348', '1991-08-25', 'Gerente'),
('Gustavo Ferreira', '901.234.567-89', '(11) 98765-4349', '1989-09-30', 'Especialista em Multimídia'),
('Isabela Duarte', '012.345.678-90', '(11) 98765-4350', '1993-10-05', 'Atendente'),
('Pedro Almeida', '123.456.789-11', '(11) 98765-4351', '1986-11-10', 'Coordenador de Programas'),
('Juliana Barros', '234.567.890-13', '(11) 98765-4352', '1990-12-15', 'Assistente de Biblioteca'),
('Ricardo Santos', '345.678.901-24', '(11) 98765-4353', '1988-01-20', 'Técnico de Informação'),
('Beatriz Gonçalves', '456.789.012-35', '(11) 98765-4354', '1992-02-25', 'Catalogador'),
('Felipe Araújo', '567.890.123-46', '(11) 98765-4355', '1995-03-30', 'Auxiliar de Serviços Gerais'),
('Larissa Martins', '678.901.234-57', '(11) 98765-4356', '1983-04-05', 'Especialista em Multimídia'),
('Thiago Ribeiro', '789.012.345-68', '(11) 98765-4357', '1987-05-10', 'Gerente'),
('Patrícia Silva', '890.123.456-79', '(11) 98765-4358', '1991-06-15', 'Bibliotecário'),
('Bruno Lima', '901.234.567-80', '(11) 98765-4359', '1989-07-20', 'Coordenador de Programas'),
('Carolina Ferreira', '012.345.678-91', '(11) 98765-4360', '1993-08-25', 'Atendente');


-- SQLBook: Code
INSERT INTO `IF_livros`.`emprestimo` (`data_de_devolucao`, `data_de_emprestimo`, `funcionario_idfuncionario`, `livro_idlivros`, `cliente_idcliente`) VALUES
('2024-07-15', '2024-07-01', 7, 13, 19),
('2024-07-16', '2024-07-02', 5, 2, 9),
('2024-07-17', '2024-07-03', 18, 6, 1),
('2024-07-18', '2024-07-04', 10, 12, 16),
('2024-07-19', '2024-07-05', 2, 3, 20),
('2024-07-20', '2024-07-06', 12, 15, 14),
('2024-07-21', '2024-07-07', 20, 5, 11),
('2024-07-22', '2024-07-08', 13, 18, 3),
('2024-07-23', '2024-07-09', 11, 1, 4),
('2024-07-24', '2024-07-10', 4, 7, 12),
('2024-07-25', '2024-07-11', 6, 19, 17),
('2024-07-26', '2024-07-12', 14, 9, 13),
('2024-07-27', '2024-07-13', 15, 8, 6),
('2024-07-28', '2024-07-14', 8, 10, 5),
('2024-07-29', '2024-07-15', 17, 16, 8),
('2024-07-30', '2024-07-16', 19, 4, 7),
('2024-07-31', '2024-07-17', 1, 11, 18),
('2024-08-01', '2024-07-18', 16, 14, 15),
('2024-08-02', '2024-07-19', 3, 17, 2),
('2024-08-03', '2024-07-20', 9, 20, 10);
