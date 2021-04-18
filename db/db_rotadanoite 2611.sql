CREATE DATABASE  IF NOT EXISTS `db_rotadanoite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_rotadanoite`;
-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 26-Nov-2018 às 18:51
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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_bairro`
--

INSERT INTO `tb_bairro` (`cd_bairro`, `nm_bairro`, `cd_cidade`) VALUES
(3, 'Boqueirão', 3),
(2, 'Boqueirão', 2),
(4, 'Boqueirão', 4),
(5, 'Boqueirão', 5),
(6, 'Boqueirão', 6),
(7, 'Boqueirão', 7),
(8, 'Boqueirão', 8),
(9, 'Boqueirão', 9),
(10, 'Boqueirão', 10),
(11, 'Boqueirão', 11),
(12, 'Boqueirão', 12),
(13, 'Boqueirão', 13),
(14, 'Boqueirão', 14);

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`cd_cidade`, `nm_cidade`, `cd_uf`) VALUES
(3, 'Praia Grande', 3),
(2, 'Praia Grande', 2),
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
(14, 'Praia Grande', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
CREATE TABLE IF NOT EXISTS `tb_cliente` (
  `cd_cliente` int(5) NOT NULL AUTO_INCREMENT,
  `nm_cliente` varchar(45) DEFAULT NULL,
  `nm_email` varchar(60) DEFAULT NULL,
  `cd_senha` varchar(255) DEFAULT NULL,
  `ic_tipo` varchar(8) DEFAULT NULL,
  `cd_pessoa_fisica` int(5) NOT NULL,
  `cd_pessoa_juridica` int(5) NOT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `nm_email`, `cd_senha`, `ic_tipo`, `cd_pessoa_fisica`, `cd_pessoa_juridica`) VALUES
(1, 'Admin', 'admin@admin', '$argon2i$v=19$m=1024,t=2,p=2$aldzYnFuWnpTZ202d3hPeQ$SA3P4Zh+Djx/PL022uYHC4FlE/eWd1cJ1GkG6iZlMhU', 'fisica', 1, 0);

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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`cd_contato`, `cd_telefone`, `cd_celular`, `cd_cliente`) VALUES
(1, '', '', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

DROP TABLE IF EXISTS `tb_evento`;
CREATE TABLE IF NOT EXISTS `tb_evento` (
  `cd_evento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_evento` varchar(50) DEFAULT NULL,
  `cd_faixa_etaria` varchar(10) DEFAULT NULL,
  `ds_evento` varchar(100) DEFAULT NULL,
  `cd_logradouro` int(5) DEFAULT NULL,
  `cd_segmento` int(5) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  `vl_homem` decimal(16,2) DEFAULT NULL,
  `vl_mulher` decimal(16,2) DEFAULT NULL,
  `vl_vip` decimal(16,2) DEFAULT NULL,
  `vl_unico` decimal(16,2) DEFAULT NULL,
  `nm_organizador` varchar(50) DEFAULT NULL,
  `dt_inicio` date DEFAULT NULL,
  `dt_termino` date DEFAULT NULL,
  `hr_inicio` time DEFAULT NULL,
  `hr_termino` time DEFAULT NULL,
  `nm_imagem` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`cd_evento`, `nm_evento`, `cd_faixa_etaria`, `ds_evento`, `cd_logradouro`, `cd_segmento`, `cd_cliente`, `vl_homem`, `vl_mulher`, `vl_vip`, `vl_unico`, `nm_organizador`, `dt_inicio`, `dt_termino`, `hr_inicio`, `hr_termino`, `nm_imagem`) VALUES
(3, 'Teste', '123', 'Teste', 3, 3, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '3img1.jpg'),
(2, 'Teste', '123', 'Teste', 2, 2, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', ''),
(4, 'Teste', '123', 'Teste', 4, 4, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '4img3.jpg'),
(5, 'Teste', '123', 'Teste', 5, 5, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '5img4.jpg'),
(6, 'Teste', '123', 'Teste', 6, 6, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '6img5.jpg'),
(7, 'Teste', '123', 'Teste', 7, 7, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', ''),
(8, 'Teste', '123', 'Teste', 8, 8, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '8img6.jpg'),
(9, 'Teste', '123', 'Teste', 9, 9, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', ''),
(10, 'Teste', '123', 'Teste', 10, 10, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '10img7.jpg'),
(11, 'Teste', '123', 'Teste', 11, 11, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '11imgground.jpg'),
(12, 'Teste', '123', 'Teste', 12, 12, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '12imgoffice.jpg'),
(13, 'Teste', '123', 'Teste', 13, 13, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '13img-login.jpg'),
(14, 'Teste', '123', 'Teste', 14, 14, 1, NULL, NULL, NULL, '12.34', 'Teste', '2018-11-26', '2018-11-26', '12:00:00', '12:00:00', '');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_logradouro`
--

INSERT INTO `tb_logradouro` (`cd_logradouro`, `nm_rua`, `cd_numero`, `cd_cep`, `cd_bairro`) VALUES
(3, 'Praça A Tribuna', 11, '11701315', 3),
(2, 'Praça A Tribuna', 11, '11701315', 2),
(4, 'Praça A Tribuna', 11, '11701315', 4),
(5, 'Praça A Tribuna', 11, '11701315', 5),
(6, 'Praça A Tribuna', 11, '11701315', 6),
(7, 'Praça A Tribuna', 11, '11701315', 7),
(8, 'Praça A Tribuna', 11, '11701315', 8),
(9, 'Praça A Tribuna', 11, '11701315', 9),
(10, 'Praça A Tribuna', 11, '11701315', 10),
(11, 'Praça A Tribuna', 11, '11701315', 11),
(12, 'Praça A Tribuna', 11, '11701315', 12),
(13, 'Praça A Tribuna', 11, '11701315', 13),
(14, 'Praça A Tribuna', 11, '11701315', 14);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa_fisica`
--

DROP TABLE IF EXISTS `tb_pessoa_fisica`;
CREATE TABLE IF NOT EXISTS `tb_pessoa_fisica` (
  `cd_pessoa_fisica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cpf` varchar(14) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_pessoa_fisica`
--

INSERT INTO `tb_pessoa_fisica` (`cd_pessoa_fisica`, `cd_cpf`) VALUES
(1, '1');

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
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_segmento`
--

DROP TABLE IF EXISTS `tb_segmento`;
CREATE TABLE IF NOT EXISTS `tb_segmento` (
  `cd_segmento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_segmento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_segmento`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_segmento`
--

INSERT INTO `tb_segmento` (`cd_segmento`, `nm_segmento`) VALUES
(3, 'Cinema ou teatro'),
(2, 'Cinema ou teatro'),
(4, 'Cinema ou teatro'),
(5, 'Cinema ou teatro'),
(6, 'Cinema ou teatro'),
(7, 'Cinema ou teatro'),
(8, 'Cinema ou teatro'),
(9, 'Cinema ou teatro'),
(10, 'Cinema ou teatro'),
(11, 'Cinema ou teatro'),
(12, 'Cinema ou teatro'),
(13, 'Cinema ou teatro'),
(14, 'Cinema ou teatro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

DROP TABLE IF EXISTS `tb_situacao`;
CREATE TABLE IF NOT EXISTS `tb_situacao` (
  `cd_situacao` int(5) NOT NULL AUTO_INCREMENT,
  `nm_situacao` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_situacao`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
CREATE TABLE IF NOT EXISTS `tb_uf` (
  `cd_uf` int(5) NOT NULL AUTO_INCREMENT,
  `sg_uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_uf`
--

INSERT INTO `tb_uf` (`cd_uf`, `sg_uf`) VALUES
(3, 'SP'),
(2, 'SP'),
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
(14, 'SP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
