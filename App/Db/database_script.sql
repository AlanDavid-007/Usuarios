CREATE DATABASE `cursos`;



CREATE TABLE `usuarios`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `sobrenome` varchar(255) DEFAULT NULL,
  `idade` INT DEFAULT NULL,
  `cpf` BIGINT DEFAULT NULL,
  `descricao` text,
   `sexo` enum('f','m','i') DEFAULT NULL,
  `ordem` INT DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
    PRIMARY KEY (`id`)
);

