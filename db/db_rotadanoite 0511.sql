CREATE DATABASE  IF NOT EXISTS `db_rotadanoite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_rotadanoite`;
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Nov-2018 às 19:47
-- Versão do servidor: 5.7.23
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rotadanoite`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bairro`
--

DROP TABLE IF EXISTS `tb_bairro`;
CREATE TABLE IF NOT EXISTS `tb_bairro` (
  `cd_bairro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_bairro` varchar(45) DEFAULT NULL,
  `cd_cidade` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_bairro`
--

INSERT INTO `tb_bairro` (`cd_bairro`, `nm_bairro`, `cd_cidade`) VALUES
(1, 'Guilhermina', 1),
(2, 'Boqueirão', 2),
(3, 'Guilhermina', 3),
(4, 'Guilhermina', 4),
(5, 'Guilhermina', 5),
(6, 'Guilhermina', 6),
(7, 'Guilhermina', 7),
(8, 'Guilhermina', 8),
(9, 'Guilhermina', 9),
(10, 'Guilhermina', 10),
(11, 'Guilhermina', 11),
(12, 'Guilhermina', 12),
(13, 'Guilhermina', 13),
(14, 'Guilhermina', 14),
(15, 'Guilhermina', 15),
(16, 'Guilhermina', 16),
(17, 'Guilhermina', 17),
(18, 'Guilhermina', 18),
(19, 'Guilhermina', 19),
(20, 'Guilhermina', 20),
(21, 'Guilhermina', 21),
(22, 'Guilhermina', 22),
(23, 'Guilhermina', 23),
(24, 'Guilhermina', 24),
(25, 'Guilhermina', 25),
(26, 'Guilhermina', 26),
(27, 'Guilhermina', 27),
(28, 'Guilhermina', 28),
(29, 'Guilhermina', 29),
(30, 'Guilhermina', 30),
(31, 'Guilhermina', 31),
(32, 'Guilhermina', 32),
(33, 'Guilhermina', 33),
(34, 'Guilhermina', 34),
(35, 'Guilhermina', 35),
(36, 'Guilhermina', 36),
(37, 'Guilhermina', 37),
(38, 'Guilhermina', 38),
(39, 'Guilhermina', 39),
(40, 'Guilhermina', 40),
(41, 'Guilhermina', 41),
(42, 'Guilhermina', 42),
(43, 'Guilhermina', 43),
(44, 'Guilhermina', 44),
(45, 'Mooca', 45),
(46, 'Guilhermina', 46),
(47, 'Guilhermina', 47);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
CREATE TABLE IF NOT EXISTS `tb_cidade` (
  `cd_cidade` int(5) NOT NULL AUTO_INCREMENT,
  `nm_cidade` varchar(45) DEFAULT NULL,
  `cd_uf` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`cd_cidade`, `nm_cidade`, `cd_uf`) VALUES
(1, 'Praia Grande', 1),
(2, 'Curitiba', 2),
(3, 'Praia Grande', 3),
(4, 'Praia Grande', 4),
(5, 'Praia Grande', 5),
(6, 'Praia Grande', 6),
(7, 'Praia Grande', 7),
(8, 'Praia Grande', 8),
(9, 'Praia Grande', 9),
(10, 'Praia Grande', 10),
(11, 'Praia Grande', 11),
(12, 'Praia Grande', 12),
(13, 'Praia Grande', 13),
(14, 'Praia Grande', 14),
(15, 'Praia Grande', 15),
(16, 'Praia Grande', 16),
(17, 'Praia Grande', 17),
(18, 'Praia Grande', 18),
(19, 'Praia Grande', 19),
(20, 'Praia Grande', 20),
(21, 'Praia Grande', 21),
(22, 'Praia Grande', 22),
(23, 'Praia Grande', 23),
(24, 'Praia Grande', 24),
(25, 'Praia Grande', 25),
(26, 'Praia Grande', 26),
(27, 'Praia Grande', 27),
(28, 'Praia Grande', 28),
(29, 'Praia Grande', 29),
(30, 'Praia Grande', 30),
(31, 'Praia Grande', 31),
(32, 'Praia Grande', 32),
(33, 'Praia Grande', 33),
(34, 'Praia Grande', 34),
(35, 'Praia Grande', 35),
(36, 'Praia Grande', 36),
(37, 'Praia Grande', 37),
(38, 'Praia Grande', 38),
(39, 'Praia Grande', 39),
(40, 'Praia Grande', 40),
(41, 'Praia Grande', 41),
(42, 'Praia Grande', 42),
(43, 'Praia Grande', 43),
(44, 'Praia Grande', 44),
(45, 'São Paulo', 45),
(46, 'Praia Grande', 46),
(47, 'Praia Grande', 47);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_cliente` int(5) NOT NULL AUTO_INCREMENT,
  `nm_fantasia` varchar(45) DEFAULT NULL,
  `nm_email` varchar(60) DEFAULT NULL,
  `cd_senha` varchar(45) DEFAULT NULL,
  `nm_responsavel` varchar(45) DEFAULT NULL,
  `ic_tipo` varchar(8) DEFAULT NULL,
  `cd_pessoa_fisica` int(5) NOT NULL,
  `cd_pessoa_juridica` int(5) NOT NULL,
  `ic_nota` char(3) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_fantasia`, `nm_email`, `cd_senha`, `nm_responsavel`, `ic_tipo`, `cd_pessoa_fisica`, `cd_pessoa_juridica`, `ic_nota`) VALUES
(1, 'admin', 'admin', '$1$kvEW9dWI$mNgwFmw9k2Wu8a2ZDnhqO.', 'admin', 'fisica', 1, 0, 'não'),
(2, '', '', '$1$AUsRN1lE$bKn8ceNU3B4kpRQkZok3o/', '', 'juridica', 0, 1, 'não'),
(3, 'sadf', '', '$1$AUsRN1lE$bKn8ceNU3B4kpRQkZok3o/', '', 'juridica', 0, 2, 'não'),
(4, '', 'sadfafs', '$1$RxgLL8gS$KeOpdjiomCzcv.rer/7ES.', '', 'juridica', 0, 3, 'não'),
(8, 'teste', 'teste', '$1$hHUQ1Zjq$RNVN4KxU5VXYuwZXXxmtu.', '', 'fisica', 5, 0, 'sim'),
(7, 'Kayo Haufe', 'kayohaufe@gmail.com', '$1$1TH7VYtG$RORUABh6S9.c71xOutSJj.', 'Kayo', 'fisica', 4, 0, 'sim'),
(9, 'Teste', 'Teste', '$1$hHUQ1Zjq$RNVN4KxU5VXYuwZXXxmtu.', '', 'fisica', 6, 0, 'não'),
(10, 'asdf', 'asdf', '$1$i4BniVrW$DrcqmzboRR.hqnbTQcdrn/', 'asdf', 'fisica', 7, 0, 'não'),
(11, 'asdf', 'asdf', '$1$19l2iJ5o$kOqHMYVGCuZ2krb6r19oR1', 'adsf', 'fisica', 8, 0, 'não'),
(12, 'dsf', 'sfd', '$1$gJCOTYM1$QR.dKUna2iG.ipqxU4xal.', 'fds', 'fisica', 9, 0, 'não'),
(13, '98', '798', '$1$9XAFzt08$btZOKZ43lKtY86//qkdJ..', '234', 'fisica', 10, 0, 'não'),
(14, '214', '11234', '$1$IjWYSPZp$EvPGskxdPbH50bvj9Q42l/', '1', 'fisica', 11, 0, 'não'),
(15, 'ae', 'RRRRRJHJJHJJK', '$1$RCrqcnwx$ynVqQCH.gY6ugt6AtiMz/1', 'r', 'fisica', 12, 0, 'não'),
(16, '1234', 'sdfffffffdfdsfsdafasdfds', '$1$dghPgqhn$pfnXmsyWqPHIABVI.Deki1', '1234', 'fisica', 13, 0, 'não'),
(17, 'Ffff', 'ffffffffffff', '$1$6XLSIQOo$jpDiXdP07IquOFcNnoN4..', 'Ffff', 'fisica', 14, 0, 'não'),
(18, 'Ffff', 'ffffffffffff', '$1$TIB7GUzM$jrRKvefj6.VT61TTP77SK.', 'Ffff', 'fisica', 15, 0, 'não'),
(21, '1', 'teste', '$1$Xcb/1fNt$h1wzj7NTUd2KLPl0LrH56/', '1', 'fisica', 18, 0, 'não'),
(22, '1', 'umdois', '$1$mC/RE4yL$vq5oO2XsYvT6xCeSSQlxg/', '1', 'fisica', 19, 0, 'não'),
(23, '1', '21343241', '$1$ZEN0rfI6$OuorWxZRr5SkLxA/J17Je/', '1', 'fisica', 20, 0, 'não'),
(24, 'Kaya', 'holanda', '$1$hHTwxKiD$NrHMQ.M0dbD299nncfULg/', 'Haufe', 'juridica', 0, 4, 'sim'),
(25, '441234', '222', '$1$Kf4tXcnM$w7nKvvBZIBJT9EMDdv8nf0', '1243', 'fisica', 21, 0, 'não'),
(26, '1', '1', '$1$EY.GICmL$ffAbuaKhRQc1ifLl6orP2/', '1', 'fisica', 22, 0, 'não'),
(27, 'Sdaf', 'r', '$1$9hHaWTIe$ys57ETdSFvAsPP8b4XooY/', 'Asdf', 'juridica', 0, 5, 'não'),
(28, 'Kayã Haufe', 'kayahaufe@gmail.com', '$1$2DMYWKJM$KnD6t01xiLHUQJ3NEKKMn/', 'Kayã', 'fisica', 23, 0, 'sim'),
(29, 'Caroline Andrade', 'carol@gmail.com', '$1$VmiYdm5R$tfO1SIhiMEfAwSABk9SDq/', 'Carol', 'fisica', 24, 0, 'sim'),
(30, '12', '12', '$1$BeFzmUu2$D426iKCt2uqdfjNrYjWEH1', '12', 'fisica', 25, 0, 'não'),
(31, 'Aklj', 'k', '$1$7tiemhsZ$Q0UiAlUmWRR0K/93Qfae./', 'K', 'juridica', 0, 6, 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
CREATE TABLE IF NOT EXISTS `tb_contato` (
  `cd_contato` int(5) NOT NULL AUTO_INCREMENT,
  `cd_telefone` varchar(15) DEFAULT NULL,
  `cd_celular` varchar(15) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_contato`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`cd_contato`, `cd_telefone`, `cd_celular`, `cd_cliente`) VALUES
(1, '1', '1', NULL),
(2, '1', '1', 1),
(3, '13982084063', '', NULL),
(4, '', '', 2),
(5, '', '', 2),
(6, '', '', 4),
(7, '123442', '12341243', NULL),
(8, '123442', '12341243', 5),
(9, '123442', '12341243', NULL),
(10, '123442', '12341243', 5),
(11, '234', '123442', NULL),
(12, '234', '123442', 7),
(13, '', '', NULL),
(14, '', '', 8),
(15, '', '', NULL),
(16, '', '', 8),
(17, 'asdf', 'sdf', NULL),
(18, 'asdf', 'sdf', 10),
(19, 'asdf', 'asdf', NULL),
(20, 'asdf', 'asdf', 10),
(21, 'dsf', 'fds', NULL),
(22, 'dsf', 'fds', 12),
(23, '87', '98', NULL),
(24, '87', '98', 13),
(25, '234', '1234', NULL),
(26, '234', '1234', 14),
(27, 'r', 'r', NULL),
(28, 'r', 'r', 15),
(29, '134', '1234', NULL),
(30, '134', '1234', 16),
(31, '1234', '2134', NULL),
(32, '1234', '2134', 17),
(33, '1234', '2134', NULL),
(34, '1234', '2134', 17),
(35, '1', '1', NULL),
(36, '1', '1', 1),
(37, '1', '1', NULL),
(38, '1', '1', 1),
(39, '1', '1', NULL),
(40, '1', '1', 8),
(41, '12', '1', NULL),
(42, '12', '1', 8),
(43, '12', '1', NULL),
(44, '12', '1', 8),
(45, '1', '1', NULL),
(46, '1', '1', NULL),
(47, '1', '1', 22),
(48, '1', '', NULL),
(49, '1', '', 23),
(50, '2134', '1234', 24),
(51, '1234', '1324', NULL),
(52, '12412', '4124', NULL),
(53, '12412', '4124', 25),
(54, '1', '1', NULL),
(55, '1', '1', 26),
(56, 'adf', '1234', 27),
(57, '13982084063', '13982084063', NULL),
(58, '13982084063', '13982084063', 28),
(59, '2134981239048', '192834719208347', NULL),
(60, '2134981239048', '192834719208347', 29),
(61, '2983129834', '98123749140', NULL),
(62, '12', '', NULL),
(63, '12', '', 30),
(64, 'k', 'k', 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

DROP TABLE IF EXISTS `tb_evento`;
CREATE TABLE IF NOT EXISTS `tb_evento` (
  `cd_evento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_evento` varchar(45) DEFAULT NULL,
  `dt_evento` date DEFAULT NULL,
  `cd_faixa_etaria` varchar(10) DEFAULT NULL,
  `ds_evento` varchar(60) DEFAULT NULL,
  `cd_logradouro` int(5) DEFAULT NULL,
  `cd_segmento` int(5) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  `vl_homem` decimal(16,2) DEFAULT NULL,
  `vl_mulher` decimal(16,2) DEFAULT NULL,
  `vl_vip` decimal(16,2) DEFAULT NULL,
  `vl_unico` decimal(16,2) DEFAULT NULL,
  PRIMARY KEY (`cd_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`cd_evento`, `nm_evento`, `dt_evento`, `cd_faixa_etaria`, `ds_evento`, `cd_logradouro`, `cd_segmento`, `cd_cliente`, `vl_homem`, `vl_mulher`, `vl_vip`, `vl_unico`) VALUES
(1, 'Maktub', '2017-10-30', '18', 'Proibido entrada de bebidas', 1, 1, 7, NULL, NULL, NULL, '10.00'),
(2, 'Teste', '2000-12-20', '10', 'Testando', 2, 2, 1, NULL, NULL, NULL, '10.00'),
(3, 'teste', '2018-10-20', '11', 'teste', 3, 3, 7, '12.00', '11.00', '111.00', NULL),
(4, 'Kartódromo', '2018-11-20', '11', 'Presença especial de atores famosos!!', 4, 4, 1, NULL, NULL, NULL, '12.00'),
(6, 'Teste', '2000-12-20', '18', 'Teste', 6, 6, 1, NULL, NULL, NULL, '0.00'),
(7, 'Teste', '2000-12-20', '12', 'Sdf', 7, 7, 1, NULL, NULL, NULL, '0.00'),
(8, 'Top', '1970-01-01', '19', 'Dsafsadfasdfasdfasdddddddddddddddddddddddddddddddddddddddddd', 10, 10, 1, NULL, NULL, NULL, '-12.00'),
(9, 'Teste', '1222-12-12', '234', 'Sadfs', 12, 12, 1, '1234.00', '23.00', '23.00', NULL),
(10, 'Teste', '1222-12-12', '234', 'Sadfs', 13, 13, 1, '1234.00', '23.00', '23.00', NULL),
(11, 'Teste', '1222-12-12', '234', 'Sadfs', 14, 14, 1, '1234.00', '23.00', '23.00', NULL),
(12, 'Teste', '1222-12-12', '234', 'Sadfs', 15, 15, 1, '1234.00', '23.00', '-23.00', NULL),
(13, 'Rodízio De Pizza', '2019-11-10', '0', 'Proibido Entrada De Suprimentos', 16, 16, 28, NULL, NULL, NULL, '15.00'),
(14, 'Rodízio De Pizza', '2018-11-04', '1', 'Refrigerante 10 Reais', 17, 17, 28, NULL, NULL, NULL, '15.00'),
(15, 'Rodízio De Pizza', '2018-11-04', '0', 'Refrigerante 10 Reais', 18, 18, 28, NULL, NULL, NULL, '15.00'),
(16, 'Rodízio De Pizza', '2018-11-04', '0', 'Refrigerante 10 Reais', 19, 19, 28, NULL, NULL, NULL, '15.99'),
(17, 'Teste', '1970-01-01', '1', '1', 24, 24, 28, NULL, NULL, NULL, '15.11'),
(18, '1', '1222-12-12', '1', '1234', 26, 26, 28, NULL, NULL, NULL, '11.11'),
(19, '1', '1222-12-12', '1', '1234', 27, 27, 28, NULL, NULL, NULL, '11.11'),
(20, '1', '1222-12-12', '3', 'Asfdasdf', 28, 28, 28, NULL, NULL, NULL, '234.12'),
(21, 'Teste', '1222-12-12', '12', '1', 42, 42, 28, NULL, NULL, NULL, '12.12'),
(22, 'Teste', '1222-12-12', '12', '1', 43, 43, 28, NULL, NULL, NULL, '12.12'),
(23, 'Teste', '1222-12-12', '12', '1', 44, 44, 28, NULL, NULL, NULL, '112.00'),
(24, 'Maktub', '2018-11-04', '18', 'Proibido Entrada De Menores', 45, 45, 28, NULL, NULL, NULL, '10.00'),
(25, 'Teste', '1222-12-12', '12', 'Top', 46, 46, 29, NULL, NULL, NULL, '12.00'),
(26, 'Teste', '2000-12-12', '212222222', 'Fsdfa', 47, 47, 29, NULL, NULL, NULL, '12.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_logradouro`
--

DROP TABLE IF EXISTS `tb_logradouro`;
CREATE TABLE IF NOT EXISTS `tb_logradouro` (
  `cd_logradouro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_rua` varchar(60) DEFAULT NULL,
  `cd_numero` int(6) DEFAULT NULL,
  `cd_cep` varchar(10) DEFAULT NULL,
  `cd_bairro` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_logradouro`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_logradouro`
--

INSERT INTO `tb_logradouro` (`cd_logradouro`, `nm_rua`, `cd_numero`, `cd_cep`, `cd_bairro`) VALUES
(1, 'Rua Doutor João Sampaio', 10, '11702010', 1),
(2, 'Rua 25 de Agosto', 122, '81670200', 2),
(3, 'Rua Doutor João Sampaio', 82, '11702010', 3),
(4, 'Rua Doutor João Sampaio', 99, '11702010', 4),
(5, 'Rua Doutor João Sampaio', 21, '11702010', 5),
(6, 'Rua Doutor João Sampaio', 80, '11702010', 6),
(7, 'Rua Doutor João Sampaio', 21, '11702010', 7),
(8, 'Rua Doutor João Sampaio', 122341243, '11702010', 8),
(9, 'Rua Doutor João Sampaio', 1234, '11702010', 9),
(10, 'Rua Doutor João Sampaio', 1234, '11702010', 10),
(11, 'Rua Doutor João Sampaio', 12, '11702010', 11),
(12, 'Rua Doutor João Sampaio', 12, '11702010', 12),
(13, 'Rua Doutor João Sampaio', -12, '11702010', 13),
(14, 'Rua Doutor João Sampaio', -12, '11702010', 14),
(15, 'Rua Doutor João Sampaio', -12, '11702010', 15),
(16, 'Rua Doutor João Sampaio', 84, '11702010', 16),
(17, 'Rua Doutor João Sampaio', 84, '11702010', 17),
(18, 'Rua Doutor João Sampaio', 84, '11702010', 18),
(19, 'Rua Doutor João Sampaio', 84, '11702010', 19),
(20, 'Rua Doutor João Sampaio', 84, '11702010', 20),
(21, 'Rua Doutor João Sampaio', 84, '11702010', 21),
(22, 'Rua Doutor João Sampaio', 84, '11702010', 22),
(23, 'Rua Doutor João Sampaio', 1, '11702010', 23),
(24, 'Rua Doutor João Sampaio', 1, '11702010', 24),
(25, 'Rua Doutor João Sampaio', 1, '11702010', 25),
(26, 'Rua Doutor João Sampaio', 11, '11702010', 26),
(27, 'Rua Doutor João Sampaio', 11, '11702010', 27),
(28, 'Rua Doutor João Sampaio', 44, '11702010', 28),
(29, 'Rua Doutor João Sampaio', 44, '11702010', 29),
(30, 'Rua Doutor João Sampaio', 44, '11702010', 30),
(31, 'Rua Doutor João Sampaio', 44, '11702010', 31),
(32, 'Rua Doutor João Sampaio', 44, '11702010', 32),
(33, 'Rua Doutor João Sampaio', 23, '11702010', 33),
(34, 'Rua Doutor João Sampaio', 32, '11702010', 34),
(35, 'Rua Doutor João Sampaio', 32, '11702010', 35),
(36, 'Rua Doutor João Sampaio', 12, '11702010', 36),
(37, 'Rua Doutor João Sampaio', 12, '11702010', 37),
(38, 'Rua Doutor João Sampaio', 12, '11702010', 38),
(39, 'Rua Doutor João Sampaio', 12, '11702010', 39),
(40, 'Rua Doutor João Sampaio', 12, '11702010', 40),
(41, 'Rua Doutor João Sampaio', 1, '11702010', 41),
(42, 'Rua Doutor João Sampaio', 1, '11702010', 42),
(43, 'Rua Doutor João Sampaio', 1, '11702010', 43),
(44, 'Rua Doutor João Sampaio', 1, '11702010', 44),
(45, 'Rua Ipanema', 686, '03164200', 45),
(46, 'Rua Doutor João Sampaio', 84, '11702010', 46),
(47, 'Rua Doutor João Sampaio', 44444, '11702010', 47);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa_fisica`
--

DROP TABLE IF EXISTS `tb_pessoa_fisica`;
CREATE TABLE IF NOT EXISTS `tb_pessoa_fisica` (
  `cd_pessoa_fisica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cpf` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoa_fisica`
--

INSERT INTO `tb_pessoa_fisica` (`cd_pessoa_fisica`, `cd_cpf`) VALUES
(1, '1'),
(2, '3453245'),
(3, '345324534234'),
(4, '234234'),
(5, '2342134'),
(6, '23234'),
(7, ''),
(8, '234'),
(9, '2134'),
(10, '23412342143'),
(11, '1234'),
(12, '21341234'),
(13, '12341'),
(14, '12341234'),
(15, '12341234x'),
(16, '345'),
(17, '3451'),
(18, '123412341234'),
(19, '12'),
(20, '44'),
(21, '4444444444'),
(22, '2314'),
(23, '50316561827'),
(24, '5031656182'),
(25, '122');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa_juridica`
--

DROP TABLE IF EXISTS `tb_pessoa_juridica`;
CREATE TABLE IF NOT EXISTS `tb_pessoa_juridica` (
  `cd_pessoa_juridica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cnpj` varchar(18) DEFAULT NULL,
  `cd_inscricao_estadual` varchar(15) DEFAULT NULL,
  `cd_situacao` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_juridica`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoa_juridica`
--

INSERT INTO `tb_pessoa_juridica` (`cd_pessoa_juridica`, `cd_cnpj`, `cd_inscricao_estadual`, `cd_situacao`) VALUES
(1, '', '', 1),
(2, '2134', '234', 1),
(3, '2452345', '2344', 1),
(4, '1234', '12344213', 4),
(5, '10', '10', 5),
(6, '21893470492', '1209843724', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_segmento`
--

DROP TABLE IF EXISTS `tb_segmento`;
CREATE TABLE IF NOT EXISTS `tb_segmento` (
  `cd_segmento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_segmento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_segmento`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_segmento`
--

INSERT INTO `tb_segmento` (`cd_segmento`, `nm_segmento`) VALUES
(1, 'Tabacaria'),
(2, 'Teste'),
(3, 'teste'),
(4, 'Entretenimento'),
(5, 'Restaurante'),
(6, 'Bar'),
(7, 'Toasidfj'),
(8, 'Aifdhs'),
(9, 'Sadf'),
(10, 'Topzera'),
(11, 'Topzera'),
(12, 'Topzera'),
(13, 'Topzera'),
(14, 'Topzera'),
(15, 'Topzera'),
(16, 'Restaurante'),
(17, 'Restaurante'),
(18, 'Restaurante'),
(19, 'Restaurante'),
(20, 'Restaurante'),
(21, 'Restaurante'),
(22, 'Restaurante'),
(23, '1'),
(24, '1'),
(25, '1'),
(26, '11'),
(27, '11'),
(28, '1'),
(29, '1'),
(30, '1'),
(31, '1'),
(32, '23'),
(33, '1'),
(34, 'Topzera'),
(35, 'Topzera'),
(36, '1'),
(37, '1'),
(38, '1'),
(39, 'Restaurante'),
(40, 'Restaurante'),
(41, '1'),
(42, '1'),
(43, '1'),
(44, '1'),
(45, 'Tabacaria'),
(46, 'Bar'),
(47, 'Teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

DROP TABLE IF EXISTS `tb_situacao`;
CREATE TABLE IF NOT EXISTS `tb_situacao` (
  `cd_situacao` int(5) NOT NULL AUTO_INCREMENT,
  `nm_situacao` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_situacao`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`cd_situacao`, `nm_situacao`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, 'inapta'),
(5, 'ativa'),
(6, 'inapta');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
CREATE TABLE IF NOT EXISTS `tb_uf` (
  `cd_uf` int(5) NOT NULL AUTO_INCREMENT,
  `sg_uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_uf`
--

INSERT INTO `tb_uf` (`cd_uf`, `sg_uf`) VALUES
(1, 'SP'),
(2, 'PR'),
(3, 'SP'),
(4, 'SP'),
(5, 'SP'),
(6, 'SP'),
(7, 'SP'),
(8, 'SP'),
(9, 'SP'),
(10, 'SP'),
(11, 'SP'),
(12, 'SP'),
(13, 'SP'),
(14, 'SP'),
(15, 'SP'),
(16, 'SP'),
(17, 'SP'),
(18, 'SP'),
(19, 'SP'),
(20, 'SP'),
(21, 'SP'),
(22, 'SP'),
(23, 'SP'),
(24, 'SP'),
(25, 'SP'),
(26, 'SP'),
(27, 'SP'),
(28, 'SP'),
(29, 'SP'),
(30, 'SP'),
(31, 'SP'),
(32, 'SP'),
(33, 'SP'),
(34, 'SP'),
(35, 'SP'),
(36, 'SP'),
(37, 'SP'),
(38, 'SP'),
(39, 'SP'),
(40, 'SP'),
(41, 'SP'),
(42, 'SP'),
(43, 'SP'),
(44, 'SP'),
(45, 'SP'),
(46, 'SP'),
(47, 'SP');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_cliente_sp`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_cliente_sp`;
CREATE TABLE IF NOT EXISTS `vw_cliente_sp` (
`nm_fantasia` varchar(45)
,`ic_tipo` varchar(8)
,`cd_telefone` varchar(15)
,`cd_cpf` varchar(12)
,`cd_cnpj` varchar(18)
,`nm_cidade` varchar(45)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_evento_maior`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_evento_maior`;
CREATE TABLE IF NOT EXISTS `vw_evento_maior` (
`nm_responsavel` varchar(45)
,`nm_email` varchar(60)
,`nm_evento` varchar(45)
,`dt_evento` date
,`cd_faixa_etaria` varchar(10)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_five_views`
-- (See below for the actual view)
--
DROP VIEW IF EXISTS `vw_five_views`;
CREATE TABLE IF NOT EXISTS `vw_five_views` (
`nm_responsavel` varchar(45)
,`nm_email` varchar(60)
,`cd_celular` varchar(15)
,`nm_evento` varchar(45)
,`cd_cep` varchar(10)
,`nm_bairro` varchar(45)
,`nm_cidade` varchar(45)
,`sg_uf` char(2)
);

-- --------------------------------------------------------

--
-- Structure for view `vw_cliente_sp`
--
DROP TABLE IF EXISTS `vw_cliente_sp`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cliente_sp`  AS  select `c`.`nm_fantasia` AS `nm_fantasia`,`c`.`ic_tipo` AS `ic_tipo`,`ct`.`cd_telefone` AS `cd_telefone`,`f`.`cd_cpf` AS `cd_cpf`,`j`.`cd_cnpj` AS `cd_cnpj`,`cd`.`nm_cidade` AS `nm_cidade` from (((((((`tb_cliente` `c` join `tb_contato` `ct` on((`ct`.`cd_cliente` = `c`.`cd_cliente`))) join `tb_pessoa_fisica` `f` on((`c`.`cd_pessoa_fisica` = `f`.`cd_pessoa_fisica`))) join `tb_pessoa_juridica` `j` on((`c`.`cd_pessoa_juridica` = `j`.`cd_pessoa_juridica`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`e`.`cd_logradouro` = `l`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) where (`cd`.`nm_cidade` = 'sao paulo') ;

-- --------------------------------------------------------

--
-- Structure for view `vw_evento_maior`
--
DROP TABLE IF EXISTS `vw_evento_maior`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_evento_maior`  AS  select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`e`.`nm_evento` AS `nm_evento`,`e`.`dt_evento` AS `dt_evento`,`e`.`cd_faixa_etaria` AS `cd_faixa_etaria` from (`tb_cliente` `c` join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) where (`e`.`cd_faixa_etaria` >= 18) ;

-- --------------------------------------------------------

--
-- Structure for view `vw_five_views`
--
DROP TABLE IF EXISTS `vw_five_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_five_views`  AS  select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`ct`.`cd_celular` AS `cd_celular`,`e`.`nm_evento` AS `nm_evento`,`l`.`cd_cep` AS `cd_cep`,`b`.`nm_bairro` AS `nm_bairro`,`cd`.`nm_cidade` AS `nm_cidade`,`uf`.`sg_uf` AS `sg_uf` from ((((((`tb_cliente` `c` join `tb_contato` `ct` on((`c`.`cd_cliente` = `ct`.`cd_cliente`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`l`.`cd_logradouro` = `e`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) join `tb_uf` `uf` on((`cd`.`cd_uf` = `uf`.`cd_uf`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
