-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06/10/2019 às 23:42
-- Versão do servidor: 5.7.11-log
-- Versão do PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mozreceitas`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

DROP TABLE IF EXISTS `receitas`;
CREATE TABLE IF NOT EXISTS `receitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `modo_preparacao` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `receitas`
--

INSERT INTO `receitas` (`id`, `titulo`, `modo_preparacao`) VALUES
(1, 'ssssssssss', ''),
(2, 'ssssssssss', ''),
(3, 'ssssssssss', ''),
(4, 'ssssssssss', ''),
(5, 'ssssssssss', ''),
(6, 'ssssssssss', '           \r\n    yyyyyyyyy'),
(7, 'ssssssssss', '           \r\n    yyyyyyyyy'),
(8, 'www', '           wwwwww\r\n    '),
(9, 'Feijoada', '           \r\n daaaaaa   '),
(10, 'Feijoada', '           \r\n daaaaaa   '),
(11, 'Feijoada', '           \r\n daaaaaa   '),
(12, 'ssssssssss', '           \r\nnbnn'),
(13, 'ssssssssss', '           \r\nnbnn'),
(14, 'ssssssssss', '           \r\nnbnn'),
(15, 'ssssssssss', '           \r\nnbnn'),
(16, 'ssssssssss', '           \r\nnbnn'),
(17, 'ssssssssss', '           \r\nnbnn'),
(18, 'ssssssssss', '           \r\nnbnn'),
(19, 'ssssssssss', '           \r\nnbnn'),
(20, 'ssssssssss', '           \r\nnbnn'),
(21, 'ssssssssss', '           \r\nnbnn'),
(22, 'ssssssssss', '           \r\nnbnn'),
(23, 'ssssssssss', '           \r\nnbnn'),
(24, 'www', '           feijoada\r\n    '),
(25, 'ssssssssss', '           sssss\r\n    '),
(26, 'www', '           \r\n    sssssss'),
(27, 'www', '           \r\n    sssssss'),
(28, 'Pao', '    Farinha       \r\n    '),
(29, 'Feijoada', '           \r\n    pao'),
(30, 'Pao', '    Farinha       \r\n    '),
(31, 'Pao', '    Farinha       \r\n    '),
(32, 'pao', '           peixe\r\n    '),
(33, 'pao', '           \r\n    peiaa'),
(34, 'Feijoada', '           \r\n    Alma'),
(35, 'Feijoada', '           \r\n   aa '),
(36, 'pao', '           \r\n    muito bom'),
(37, 'Caramelo', '           \r\n    Caramelo e carama'),
(38, 'Feijoada', '           w\r\n    '),
(39, 'Feijoada', '           w\r\n    '),
(40, 'Feijoada', '           w\r\n    '),
(41, '', '           \r\n    '),
(42, '', '           \r\n    '),
(43, '', '           \r\n    '),
(44, '', '           \r\n    '),
(45, 'as', '           \r\n    ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `palavra_passe` varchar(30) NOT NULL,
  `sexo` enum('M','F') DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `foto_perfil` varchar(1) DEFAULT NULL,
  `receita_postada` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `receita_postada` (`receita_postada`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `palavra_passe`, `sexo`, `created`, `modified`, `foto_perfil`, `receita_postada`) VALUES
(1, 'calleb', 'joeln@gmail.com', '123456', NULL, '2019-09-20 12:05:29', NULL, NULL, NULL),
(2, '', '', '', NULL, '2019-09-20 12:28:52', NULL, NULL, NULL),
(3, '', 'acalleb@gamc', 'as', NULL, '2019-09-20 12:31:09', NULL, NULL, NULL),
(9, '', 'sa', '21', NULL, '2019-09-20 13:06:30', NULL, NULL, NULL),
(10, 'Cajabo', 'caja@gg.com', '1234', NULL, '2019-09-20 14:07:35', NULL, NULL, NULL),
(12, 'sffsfsd', 'asas@gahs.comn', '2121212', NULL, '2019-09-20 14:14:34', NULL, NULL, NULL),
(13, 'Ana', 'ana@as.ca', '1122', NULL, '2019-09-20 23:58:18', NULL, NULL, NULL),
(14, 'Josue de Jesus Miquissene', 'j@gmail.com', '00000000', NULL, '2019-09-21 00:05:41', NULL, NULL, NULL),
(18, 'Calleb Joel Miquissene', 'callebmiquissene@gmail.com', '123123123', NULL, '2019-09-22 23:31:45', NULL, NULL, NULL),
(32, 'Testeiro Teste', 'teste@tmail.com', '0000', NULL, '2019-09-23 00:44:51', NULL, NULL, NULL),
(42, 'virgilio', 'aaaaa@gmail.com', 'aaaa', NULL, '2019-09-23 07:45:16', NULL, NULL, NULL),
(48, 'Josh Lodloe', 'key@gmail.com', 'kiki123', NULL, '2019-09-23 09:16:19', NULL, NULL, NULL);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`receita_postada`) REFERENCES `receitas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
