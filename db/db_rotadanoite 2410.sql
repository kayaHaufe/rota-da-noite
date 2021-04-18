CREATE DATABASE  IF NOT EXISTS `db_rotadanoite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_rotadanoite`;
-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 25-Out-2018 às 01:40
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_rotadanoite`
--
CREATE DATABASE IF NOT EXISTS `db_rotadanoite` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_rotadanoite`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Extraindo dados da tabela `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `email_address`, `contact`, `gender`, `country`, `datetime`) VALUES
(20, 'Isabella', 'isabella@yahoo.com', '01711000005', 'Female', 'Costa Rica', '2017-08-27 20:11:50'),
(19, 'Sophia', 'sophia@gmail.com', '01711000004', 'Female', 'Belgium', '2017-08-27 20:10:55'),
(18, 'William', 'william@gmail.com', '01711000003', 'Male', 'Brazil', '2017-08-27 20:10:08'),
(16, 'Nahid', 'nahid@yahoo.com', '01711000002', 'Male', 'Bangladesh', '2017-08-27 19:57:35'),
(17, 'Arif', 'arif@gmail.com', '01711000001', 'Male', 'Bangladesh', '2017-08-27 20:04:13'),
(15, 'Md. Rubel', 'rubel@gmail.com', '01712000000', 'Male', 'Bangladesh', '2017-08-27 19:56:20'),
(21, 'Michael', 'michael@gmail.com', '01711000006', 'Male', 'Ecuador', '2017-08-27 20:13:02'),
(22, 'Suman', 'suman@gmail.com', '01711000007', 'Male', 'India', '2017-08-27 20:13:55'),
(23, 'James', 'james@gmail.com', '01711000009', 'Male', 'United Kingdom', '2017-08-27 20:16:05'),
(24, 'Asik', 'asik@gmail.com', '01712000010', 'Male', 'Bangladesh', '2017-08-27 20:19:11');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_bairro`
--

CREATE TABLE IF NOT EXISTS `tb_bairro` (
  `cd_bairro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_bairro` varchar(45) DEFAULT NULL,
  `cd_cidade` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_bairro`
--

INSERT INTO `tb_bairro` (`cd_bairro`, `nm_bairro`, `cd_cidade`) VALUES
(1, 'Guilhermina', 1),
(2, 'Ocian', 2),
(3, 'Tupi', 3),
(4, 'Tude Bastos', 4),
(5, 'Balneário Maracanã', 5),
(6, 'Boqueirão', NULL),
(7, 'Boqueirão', NULL),
(8, 'Boqueirão', NULL),
(9, 'Boqueirão', NULL),
(10, 'Guilhermina', NULL),
(11, 'Guilhermina', NULL),
(12, 'Guilhermina', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cidade`
--

CREATE TABLE IF NOT EXISTS `tb_cidade` (
  `cd_cidade` int(5) NOT NULL AUTO_INCREMENT,
  `nm_cidade` varchar(45) DEFAULT NULL,
  `cd_uf` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`cd_cidade`, `nm_cidade`, `cd_uf`) VALUES
(1, 'Praia Grande', 1),
(2, 'Santos', 2),
(3, 'Guarujá', 3),
(4, 'São Vicente', 4),
(5, 'São Paulo', 5),
(6, 'Praia Grande', NULL),
(7, 'Praia Grande', NULL),
(8, 'Praia Grande', NULL),
(9, 'Praia Grande', NULL),
(10, 'Praia Grande', NULL),
(11, 'Praia Grande', NULL),
(12, 'Praia Grande', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_cliente`
--

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
  `vl_unico` decimal(16,2) DEFAULT NULL,
  PRIMARY KEY (`cd_cliente`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Extraindo dados da tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_fantasia`, `nm_email`, `cd_senha`, `nm_responsavel`, `ic_tipo`, `cd_pessoa_fisica`, `cd_pessoa_juridica`, `ic_nota`, `vl_unico`) VALUES
(1, 'admin', 'admin', '$1$kvEW9dWI$mNgwFmw9k2Wu8a2ZDnhqO.', 'admin', 'fisica', 1, 0, 'não', NULL),
(2, '', '', '$1$AUsRN1lE$bKn8ceNU3B4kpRQkZok3o/', '', 'juridica', 0, 1, 'não', NULL),
(3, 'sadf', '', '$1$AUsRN1lE$bKn8ceNU3B4kpRQkZok3o/', '', 'juridica', 0, 2, 'não', NULL),
(4, '', 'sadfafs', '$1$RxgLL8gS$KeOpdjiomCzcv.rer/7ES.', '', 'juridica', 0, 3, 'não', NULL),
(8, 'teste', 'teste', '$1$hHUQ1Zjq$RNVN4KxU5VXYuwZXXxmtu.', '', 'fisica', 5, 0, 'sim', NULL),
(7, 'Kayo Haufe', 'kayohaufe@gmail.com', '$1$q4lQxpO5$C66ntu7SATTVZS4uS3l8S0', 'Kayo', 'fisica', 4, 0, 'sim', NULL),
(9, 'Teste', 'Teste', '$1$hHUQ1Zjq$RNVN4KxU5VXYuwZXXxmtu.', '', 'fisica', 6, 0, 'não', NULL),
(10, 'asdf', 'asdf', '$1$i4BniVrW$DrcqmzboRR.hqnbTQcdrn/', 'asdf', 'fisica', 7, 0, 'não', NULL),
(11, 'asdf', 'asdf', '$1$19l2iJ5o$kOqHMYVGCuZ2krb6r19oR1', 'adsf', 'fisica', 8, 0, 'não', NULL),
(12, 'dsf', 'sfd', '$1$gJCOTYM1$QR.dKUna2iG.ipqxU4xal.', 'fds', 'fisica', 9, 0, 'não', NULL),
(13, '98', '798', '$1$9XAFzt08$btZOKZ43lKtY86//qkdJ..', '234', 'fisica', 10, 0, 'não', NULL),
(14, '214', '11234', '$1$IjWYSPZp$EvPGskxdPbH50bvj9Q42l/', '1', 'fisica', 11, 0, 'não', NULL),
(15, 'ae', 'RRRRRJHJJHJJK', '$1$RCrqcnwx$ynVqQCH.gY6ugt6AtiMz/1', 'r', 'fisica', 12, 0, 'não', NULL),
(16, '1234', 'sdfffffffdfdsfsdafasdfds', '$1$dghPgqhn$pfnXmsyWqPHIABVI.Deki1', '1234', 'fisica', 13, 0, 'não', NULL),
(17, 'Ffff', 'ffffffffffff', '$1$6XLSIQOo$jpDiXdP07IquOFcNnoN4..', 'Ffff', 'fisica', 14, 0, 'não', NULL),
(18, 'Ffff', 'ffffffffffff', '$1$TIB7GUzM$jrRKvefj6.VT61TTP77SK.', 'Ffff', 'fisica', 15, 0, 'não', NULL),
(21, '1', 'teste', '$1$Xcb/1fNt$h1wzj7NTUd2KLPl0LrH56/', '1', 'fisica', 18, 0, 'não', NULL),
(22, '1', 'umdois', '$1$mC/RE4yL$vq5oO2XsYvT6xCeSSQlxg/', '1', 'fisica', 19, 0, 'não', NULL),
(23, '1', '21343241', '$1$ZEN0rfI6$OuorWxZRr5SkLxA/J17Je/', '1', 'fisica', 20, 0, 'não', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE IF NOT EXISTS `tb_contato` (
  `cd_contato` int(5) NOT NULL AUTO_INCREMENT,
  `cd_telefone` varchar(15) DEFAULT NULL,
  `cd_celular` varchar(15) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_contato`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

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
(49, '1', '', 23);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_evento`
--

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `tb_evento`
--

INSERT INTO `tb_evento` (`cd_evento`, `nm_evento`, `dt_evento`, `cd_faixa_etaria`, `ds_evento`, `cd_logradouro`, `cd_segmento`, `cd_cliente`, `vl_homem`, `vl_mulher`, `vl_vip`, `vl_unico`) VALUES
(1, 'Turma do Pagode', '2020-02-19', '12', 'Participação especial de fulano', 1, 1, 1, NULL, NULL, NULL, NULL),
(2, 'Rodízio de Pizza', '2020-04-22', 'Livre', 'Pizzas a cada 2 minutos!!', 2, 2, 2, NULL, NULL, NULL, NULL),
(3, 'Dia da bebedeira', '2018-05-11', '18', 'Cansado do trabalho? Descontraia', 3, 3, 3, NULL, NULL, NULL, NULL),
(4, 'Buffet', '2018-02-02', '1', 'Faça seu orçamento já: (13) 982084062', 4, 4, 4, NULL, NULL, NULL, NULL),
(5, 'Festival', '2019-12-16', '18', 'Chame todos os seus amigos, AGORA!', 5, 5, 5, NULL, NULL, NULL, NULL),
(6, 'Rodízio de Pizza', '2020-04-22', 'Livre', 'Pizzas a cada 2 minutos!!', 6, 6, 6, NULL, NULL, NULL, NULL),
(7, 'Dia da bebedeira', '2018-05-11', '18', 'Cansado do trabalho? Descontraia', 7, 7, 7, NULL, NULL, NULL, NULL),
(8, 'q', '0000-00-00', '32', 'sadfasdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'q', '0000-00-00', '32', 'sadfasdf', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'TOOPPER', '0000-00-00', '20', 'TOP DEMAIS', NULL, NULL, NULL, '12.00', '11.00', '10.00', NULL),
(15, 'TOOPPER', '0000-00-00', '20', 'TOP DEMAIS', NULL, NULL, NULL, '12.00', '11.00', '10.00', NULL),
(16, 'TOOPPER', '0000-00-00', '20', 'TOP DEMAIS', NULL, NULL, NULL, '12.00', '11.00', '10.00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_logradouro`
--

CREATE TABLE IF NOT EXISTS `tb_logradouro` (
  `cd_logradouro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_rua` varchar(60) DEFAULT NULL,
  `cd_numero` int(6) DEFAULT NULL,
  `cd_cep` varchar(10) DEFAULT NULL,
  `cd_bairro` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_logradouro`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_logradouro`
--

INSERT INTO `tb_logradouro` (`cd_logradouro`, `nm_rua`, `cd_numero`, `cd_cep`, `cd_bairro`) VALUES
(1, 'João Sampaio', 22, '117020-010', 1),
(2, 'Pedro Álvarez Cabral', 143, '76900032', 2),
(3, 'Avenida Beira Rio', 736, '85705-7598', 3),
(4, 'Sul Alameda', 15, '69905-406', 4),
(5, 'Rua Alaor Garcia Pereira', 9323, '77019-066', 5),
(6, 'Avenida Marechal Mallet', 0, '11701340', NULL),
(7, 'Avenida Marechal Mallet', 0, '11701340', NULL),
(8, 'Avenida Marechal Mallet', 1, '11701340', NULL),
(9, 'Avenida Marechal Mallet', 1, '11701340', NULL),
(10, 'Rua Doutor João Sampaio', 84, '11702010', NULL),
(11, 'Rua Doutor João Sampaio', 84, '11702010', NULL),
(12, 'Rua Doutor João Sampaio', 84, '11702010', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa_fisica`
--

CREATE TABLE IF NOT EXISTS `tb_pessoa_fisica` (
  `cd_pessoa_fisica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cpf` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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
(20, '44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa_juridica`
--

CREATE TABLE IF NOT EXISTS `tb_pessoa_juridica` (
  `cd_pessoa_juridica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cnpj` varchar(18) DEFAULT NULL,
  `cd_inscricao_estadual` varchar(15) DEFAULT NULL,
  `cd_situacao` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_juridica`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_pessoa_juridica`
--

INSERT INTO `tb_pessoa_juridica` (`cd_pessoa_juridica`, `cd_cnpj`, `cd_inscricao_estadual`, `cd_situacao`) VALUES
(1, '', '', 1),
(2, '2134', '234', 1),
(3, '2452345', '2344', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_segmento`
--

CREATE TABLE IF NOT EXISTS `tb_segmento` (
  `cd_segmento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_segmento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_segmento`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_segmento`
--

INSERT INTO `tb_segmento` (`cd_segmento`, `nm_segmento`) VALUES
(1, 'Bar'),
(2, 'Restaurante'),
(3, 'Tabacaria'),
(4, 'Buffet'),
(5, 'Pizzaria'),
(6, 'q'),
(7, 'q'),
(8, '1'),
(9, '1'),
(10, 'BAR'),
(11, 'BAR'),
(12, 'BAR');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_situacao`
--

CREATE TABLE IF NOT EXISTS `tb_situacao` (
  `cd_situacao` int(5) NOT NULL AUTO_INCREMENT,
  `nm_situacao` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_situacao`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `tb_situacao`
--

INSERT INTO `tb_situacao` (`cd_situacao`, `nm_situacao`) VALUES
(1, ''),
(2, ''),
(3, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_uf`
--

CREATE TABLE IF NOT EXISTS `tb_uf` (
  `cd_uf` int(5) NOT NULL AUTO_INCREMENT,
  `sg_uf` char(2) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Extraindo dados da tabela `tb_uf`
--

INSERT INTO `tb_uf` (`cd_uf`, `sg_uf`) VALUES
(1, 'SP'),
(2, 'SP'),
(3, 'SP'),
(4, 'SP'),
(5, 'SP'),
(6, 'SP'),
(7, 'SP'),
(8, 'SP'),
(9, 'SP'),
(10, 'SP'),
(11, 'SP'),
(12, 'SP');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_cliente_sp`
--
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
-- Estrutura da tabela `vw_evento_bar`
--
-- em uso(#1356 - View 'db_rotadanoite.vw_evento_bar' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)
-- Error reading data: (#1356 - View 'db_rotadanoite.vw_evento_bar' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_evento_maior`
--
CREATE TABLE IF NOT EXISTS `vw_evento_maior` (
`nm_responsavel` varchar(45)
,`nm_email` varchar(60)
,`nm_evento` varchar(45)
,`dt_evento` date
,`cd_faixa_etaria` varchar(10)
);
-- --------------------------------------------------------

--
-- Estrutura da tabela `vw_evento_tupi`
--
-- em uso(#1356 - View 'db_rotadanoite.vw_evento_tupi' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)
-- Error reading data: (#1356 - View 'db_rotadanoite.vw_evento_tupi' references invalid table(s) or column(s) or function(s) or definer/invoker of view lack rights to use them)

-- --------------------------------------------------------

--
-- Stand-in structure for view `vw_five_views`
--
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

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_cliente_sp` AS select `c`.`nm_fantasia` AS `nm_fantasia`,`c`.`ic_tipo` AS `ic_tipo`,`ct`.`cd_telefone` AS `cd_telefone`,`f`.`cd_cpf` AS `cd_cpf`,`j`.`cd_cnpj` AS `cd_cnpj`,`cd`.`nm_cidade` AS `nm_cidade` from (((((((`tb_cliente` `c` join `tb_contato` `ct` on((`ct`.`cd_cliente` = `c`.`cd_cliente`))) join `tb_pessoa_fisica` `f` on((`c`.`cd_pessoa_fisica` = `f`.`cd_pessoa_fisica`))) join `tb_pessoa_juridica` `j` on((`c`.`cd_pessoa_juridica` = `j`.`cd_pessoa_juridica`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`e`.`cd_logradouro` = `l`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) where (`cd`.`nm_cidade` = 'sao paulo');

-- --------------------------------------------------------

--
-- Structure for view `vw_evento_maior`
--
DROP TABLE IF EXISTS `vw_evento_maior`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_evento_maior` AS select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`e`.`nm_evento` AS `nm_evento`,`e`.`dt_evento` AS `dt_evento`,`e`.`cd_faixa_etaria` AS `cd_faixa_etaria` from (`tb_cliente` `c` join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) where (`e`.`cd_faixa_etaria` >= 18);

-- --------------------------------------------------------

--
-- Structure for view `vw_five_views`
--
DROP TABLE IF EXISTS `vw_five_views`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_five_views` AS select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`ct`.`cd_celular` AS `cd_celular`,`e`.`nm_evento` AS `nm_evento`,`l`.`cd_cep` AS `cd_cep`,`b`.`nm_bairro` AS `nm_bairro`,`cd`.`nm_cidade` AS `nm_cidade`,`uf`.`sg_uf` AS `sg_uf` from ((((((`tb_cliente` `c` join `tb_contato` `ct` on((`c`.`cd_cliente` = `ct`.`cd_cliente`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`l`.`cd_logradouro` = `e`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) join `tb_uf` `uf` on((`cd`.`cd_uf` = `uf`.`cd_uf`)));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
