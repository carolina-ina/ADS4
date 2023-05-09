CREATE SCHEMA `login` ;

USE login;


CREATE TABLE `login`.`usuario` (
  `usuario_id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(200) NOT NULL,
  `email`VARCHAR(50) NOT NULL,
  `usuario` VARCHAR(200) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`usuario_id`));

INSERT INTO `login`.`usuario` (`nome`, `email`, `usuario`, `senha`) VALUES ('Administrador', 'adm@gmail.com', 'adm', 'senac');
