CREATE DATABASE  IF NOT EXISTS `db_rotadanoite` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_rotadanoite`;
-- MySQL dump 10.13  Distrib 5.7.21, for Linux (x86_64)
--
-- Host: localhost    Database: db_rotadanoite
-- ------------------------------------------------------
-- Server version	5.7.21-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tb_bairro`
--

DROP TABLE IF EXISTS `tb_bairro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_bairro` (
  `cd_bairro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_bairro` varchar(45) DEFAULT NULL,
  `cd_cidade` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_bairro`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_bairro`
--

LOCK TABLES `tb_bairro` WRITE;
/*!40000 ALTER TABLE `tb_bairro` DISABLE KEYS */;
INSERT INTO `tb_bairro` VALUES (1,'Guilhermina',1),(2,'Ocian',2),(3,'Tupi',3),(4,'Tude Bastos',4),(5,'Balneário Maracanã',5);
/*!40000 ALTER TABLE `tb_bairro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cidade`
--

DROP TABLE IF EXISTS `tb_cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cidade` (
  `cd_cidade` int(5) NOT NULL AUTO_INCREMENT,
  `nm_cidade` varchar(45) DEFAULT NULL,
  `cd_uf` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_cidade`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cidade`
--

LOCK TABLES `tb_cidade` WRITE;
/*!40000 ALTER TABLE `tb_cidade` DISABLE KEYS */;
INSERT INTO `tb_cidade` VALUES (1,'Praia Grande',1),(2,'Santos',2),(3,'Guarujá',3),(4,'São Vicente',4),(5,'São Paulo',5);
/*!40000 ALTER TABLE `tb_cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_cliente`
--

DROP TABLE IF EXISTS `tb_cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_cliente` (
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
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_cliente`
--

LOCK TABLES `tb_cliente` WRITE;
/*!40000 ALTER TABLE `tb_cliente` DISABLE KEYS */;
INSERT INTO `tb_cliente` VALUES (1,'Empresa 1','empresaltda@gmail.com','senhadaempresa','Caetano da Silva','j',1,1,NULL),(2,'Empresa 2','empresa2ltda@gmail.com','senhadaempresa2','João','j',2,2,NULL),(3,'Empresa 3','empresa3ltda@gmail.com','senhadaempresa3','Gabriel','j',3,3,NULL),(4,'Empresa 4','empresa4ltda@gmail.com','senhadaempresa4','Pedro','f',4,4,NULL),(5,'Empresa 5','empresa5ltda@gmail.com','senhadaempresa5','Leonardo','f',5,5,NULL),(6,'$nm_fantasia','$email','$senha','$responsavel','$tipo',0,0,'$na'),(7,'Google','joao@gmail.com','joao','joão','juridica',0,0,'não'),(8,'','','','','juridica',0,0,'não'),(9,'','','','','juridica',0,0,'não'),(10,'teste','','','','juridica',0,0,'não'),(11,'google','','','google','juridica',0,0,'não'),(12,'aa','','','a','juridica',0,0,'não'),(13,'aa','','','aaaa','juridica',0,0,'não'),(14,'ee','','','ee','juridica',0,0,'não'),(15,'','','','','juridica',0,0,'não'),(16,'','','','','juridica',0,0,'não'),(17,'','','','','juridica',0,0,'não'),(18,'','','','','juridica',0,0,'não'),(19,'','','','','juridica',0,0,'não'),(20,'','','','','juridica',0,0,'não'),(21,'','','','','juridica',0,0,'não'),(22,'','','','','juridica',0,0,'não'),(23,'','','','','juridica',0,0,'não'),(24,'','','','','juridica',0,0,'não'),(25,'','','','','fisica',0,0,'não'),(26,'','','','','fisica',0,0,'não'),(27,'','','','','fisica',0,0,'não'),(28,'','','','','fisica',0,0,'não'),(29,'','','','','juridica',0,0,'não'),(30,'','','','','fisica',0,0,'não'),(31,'','','','','juridica',0,0,'não'),(32,'Kayã Haufe','teste@gmail.com','123','','fisica',0,0,'não'),(33,'teste','1','1','','fisica',0,0,'não'),(34,'Cannabis','caroline@gmail.com','123','Carol','fisica',0,0,'não'),(35,'Cannabis','caroline@gmail.com','123','Carol','fisica',0,0,'não'),(36,'Cannabis','caroline@gmail.com','123','Carol','fisica',0,0,'não');
/*!40000 ALTER TABLE `tb_cliente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contato`
--

DROP TABLE IF EXISTS `tb_contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_contato` (
  `cd_contato` int(5) NOT NULL AUTO_INCREMENT,
  `cd_telefone` varchar(15) DEFAULT NULL,
  `cd_celular` varchar(15) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_contato`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contato`
--

LOCK TABLES `tb_contato` WRITE;
/*!40000 ALTER TABLE `tb_contato` DISABLE KEYS */;
INSERT INTO `tb_contato` VALUES (1,'131234567890','110987654321',1),(2,'132233445','113344556',2),(3,'116677889','117788990',3),(4,'138899001','139900112',4),(5,'112345678','112345234',5),(6,'$tcomercial','$tcelular',NULL),(7,'129834720','192834710',NULL),(8,'','',NULL),(9,'','',NULL),(10,'','',NULL),(11,'','',NULL),(12,'','',NULL),(13,'','',NULL),(14,'','',NULL),(15,'','',NULL),(16,'','',NULL),(17,'','',NULL),(18,'','',NULL),(19,'','',NULL),(20,'','',NULL),(21,'','',NULL),(22,'','',NULL),(23,'','',NULL),(24,'','',NULL),(25,'','',NULL),(26,'','',NULL),(27,'','',NULL),(28,'','',NULL),(29,'','',NULL),(30,'','',NULL),(31,'','',NULL),(32,'','',NULL),(33,'','',NULL),(34,'12341234','12341234',NULL),(35,'12341234','12341234',NULL),(36,'12341234','12341234',NULL);
/*!40000 ALTER TABLE `tb_contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_evento`
--

DROP TABLE IF EXISTS `tb_evento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_evento` (
  `cd_evento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_evento` varchar(45) DEFAULT NULL,
  `dt_evento` date DEFAULT NULL,
  `vl_evento` decimal(16,2) DEFAULT NULL,
  `cd_faixa_etaria` varchar(10) DEFAULT NULL,
  `ds_evento` varchar(60) DEFAULT NULL,
  `cd_logradouro` int(5) DEFAULT NULL,
  `cd_segmento` int(5) DEFAULT NULL,
  `cd_cliente` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_evento`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_evento`
--

LOCK TABLES `tb_evento` WRITE;
/*!40000 ALTER TABLE `tb_evento` DISABLE KEYS */;
INSERT INTO `tb_evento` VALUES (1,'Turma do Pagode','2020-02-19',20.00,'12','Participação especial de fulano',1,1,1),(2,'Rodízio de Pizza','2020-04-22',15.00,'Livre','Pizzas a cada 2 minutos!!',2,2,2),(3,'Dia da bebedeira','2018-05-11',10.00,'18','Cansado do trabalho? Descontraia',3,3,3),(4,'Buffet','2018-02-02',1000.00,'1','Faça seu orçamento já: (13) 982084062',4,4,4),(5,'Festival','2019-12-16',60.00,'18','Chame todos os seus amigos, AGORA!',5,5,5),(6,'Rodízio de Pizza','2020-04-22',15.00,'Livre','Pizzas a cada 2 minutos!!',6,6,6),(7,'Dia da bebedeira','2018-05-11',10.00,'18','Cansado do trabalho? Descontraia',7,7,7);
/*!40000 ALTER TABLE `tb_evento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_logradouro`
--

DROP TABLE IF EXISTS `tb_logradouro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_logradouro` (
  `cd_logradouro` int(5) NOT NULL AUTO_INCREMENT,
  `nm_rua` varchar(60) DEFAULT NULL,
  `cd_numero` int(6) DEFAULT NULL,
  `cd_cep` varchar(10) DEFAULT NULL,
  `cd_bairro` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_logradouro`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_logradouro`
--

LOCK TABLES `tb_logradouro` WRITE;
/*!40000 ALTER TABLE `tb_logradouro` DISABLE KEYS */;
INSERT INTO `tb_logradouro` VALUES (1,'João Sampaio',22,'117020-010',1),(2,'Pedro Álvarez Cabral',143,'76900032',2),(3,'Avenida Beira Rio',736,'85705-7598',3),(4,'Sul Alameda',15,'69905-406',4),(5,'Rua Alaor Garcia Pereira',9323,'77019-066',5);
/*!40000 ALTER TABLE `tb_logradouro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_fisica`
--

DROP TABLE IF EXISTS `tb_pessoa_fisica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa_fisica` (
  `cd_pessoa_fisica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cpf` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_fisica`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_fisica`
--

LOCK TABLES `tb_pessoa_fisica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_fisica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_fisica` VALUES (1,'0'),(2,'0'),(3,'0'),(4,'50316561827'),(5,'12345678901'),(6,'$cpf'),(7,''),(8,''),(9,''),(10,''),(11,''),(12,''),(13,''),(14,'2342142'),(15,'2342142'),(16,'2342142');
/*!40000 ALTER TABLE `tb_pessoa_fisica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_pessoa_juridica`
--

DROP TABLE IF EXISTS `tb_pessoa_juridica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_pessoa_juridica` (
  `cd_pessoa_juridica` int(5) NOT NULL AUTO_INCREMENT,
  `cd_cnpj` varchar(18) DEFAULT NULL,
  `cd_inscricao_estadual` varchar(15) DEFAULT NULL,
  `nm_razao_social` varchar(30) DEFAULT NULL,
  `cd_situacao` int(5) DEFAULT NULL,
  PRIMARY KEY (`cd_pessoa_juridica`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_pessoa_juridica`
--

LOCK TABLES `tb_pessoa_juridica` WRITE;
/*!40000 ALTER TABLE `tb_pessoa_juridica` DISABLE KEYS */;
INSERT INTO `tb_pessoa_juridica` VALUES (1,'38.024.655.0001-94','847.831.699.982','Empresa 1',1),(2,'38.024.655.0001-94','847.831.699.982','Empresa 2',2),(3,'48.964.524/0001-29','245.893.006.991','Empresa 3',3),(4,'0','0','0',4),(5,'0','0','0',5),(6,'','',NULL,NULL),(7,'','',NULL,NULL),(8,'','',NULL,NULL),(9,'','',NULL,NULL),(10,'','',NULL,NULL),(11,'','',NULL,NULL),(12,'','',NULL,NULL),(13,'','',NULL,NULL),(14,'','',NULL,NULL),(15,'','',NULL,NULL),(16,'','',NULL,NULL),(17,'','',NULL,NULL),(18,'','',NULL,NULL),(19,'','',NULL,NULL),(20,'','',NULL,NULL),(21,'','',NULL,NULL),(22,'','',NULL,NULL),(23,'','',NULL,NULL),(24,'','',NULL,NULL),(25,'','',NULL,NULL);
/*!40000 ALTER TABLE `tb_pessoa_juridica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_segmento`
--

DROP TABLE IF EXISTS `tb_segmento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_segmento` (
  `cd_segmento` int(5) NOT NULL AUTO_INCREMENT,
  `nm_segmento` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_segmento`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_segmento`
--

LOCK TABLES `tb_segmento` WRITE;
/*!40000 ALTER TABLE `tb_segmento` DISABLE KEYS */;
INSERT INTO `tb_segmento` VALUES (1,'Bar'),(2,'Restaurante'),(3,'Tabacaria'),(4,'Buffet'),(5,'Pizzaria');
/*!40000 ALTER TABLE `tb_segmento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_situacao`
--

DROP TABLE IF EXISTS `tb_situacao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_situacao` (
  `cd_situacao` int(5) NOT NULL AUTO_INCREMENT,
  `nm_situacao` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`cd_situacao`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_situacao`
--

LOCK TABLES `tb_situacao` WRITE;
/*!40000 ALTER TABLE `tb_situacao` DISABLE KEYS */;
INSERT INTO `tb_situacao` VALUES (1,'ativa'),(2,'passiva'),(3,'inapta'),(4,'suspensa'),(5,'baixada'),(6,'nula'),(7,'ativa'),(8,''),(9,''),(10,''),(11,''),(12,''),(13,''),(14,''),(15,''),(16,''),(17,''),(18,''),(19,''),(20,''),(21,''),(22,''),(23,''),(24,''),(25,''),(26,''),(27,'');
/*!40000 ALTER TABLE `tb_situacao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_uf`
--

DROP TABLE IF EXISTS `tb_uf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tb_uf` (
  `cd_uf` int(5) NOT NULL AUTO_INCREMENT,
  `sg_uf` char(2) DEFAULT NULL,
  `nm_uf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`cd_uf`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_uf`
--

LOCK TABLES `tb_uf` WRITE;
/*!40000 ALTER TABLE `tb_uf` DISABLE KEYS */;
INSERT INTO `tb_uf` VALUES (1,'SP','São Paulo'),(2,'SP','São Paulo'),(3,'SP','São Paulo'),(4,'SP','São Paulo'),(5,'SP','São Paulo');
/*!40000 ALTER TABLE `tb_uf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `vw_cliente_sp`
--

DROP TABLE IF EXISTS `vw_cliente_sp`;
/*!50001 DROP VIEW IF EXISTS `vw_cliente_sp`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_cliente_sp` AS SELECT 
 1 AS `nm_fantasia`,
 1 AS `ic_tipo`,
 1 AS `cd_telefone`,
 1 AS `cd_cpf`,
 1 AS `cd_cnpj`,
 1 AS `nm_cidade`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_evento_bar`
--

DROP TABLE IF EXISTS `vw_evento_bar`;
/*!50001 DROP VIEW IF EXISTS `vw_evento_bar`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_evento_bar` AS SELECT 
 1 AS `nm_evento`,
 1 AS `dt_evento`,
 1 AS `vl_evento`,
 1 AS `nm_rua`,
 1 AS `cd_numero`,
 1 AS `cd_cep`,
 1 AS `nm_bairro`,
 1 AS `nm_segmento`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_evento_maior`
--

DROP TABLE IF EXISTS `vw_evento_maior`;
/*!50001 DROP VIEW IF EXISTS `vw_evento_maior`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_evento_maior` AS SELECT 
 1 AS `nm_responsavel`,
 1 AS `nm_email`,
 1 AS `nm_evento`,
 1 AS `dt_evento`,
 1 AS `cd_faixa_etaria`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_evento_tupi`
--

DROP TABLE IF EXISTS `vw_evento_tupi`;
/*!50001 DROP VIEW IF EXISTS `vw_evento_tupi`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_evento_tupi` AS SELECT 
 1 AS `nm_evento`,
 1 AS `dt_evento`,
 1 AS `vl_evento`,
 1 AS `cd_faixa_etaria`,
 1 AS `ds_evento`,
 1 AS `nm_bairro`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `vw_five_views`
--

DROP TABLE IF EXISTS `vw_five_views`;
/*!50001 DROP VIEW IF EXISTS `vw_five_views`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `vw_five_views` AS SELECT 
 1 AS `nm_responsavel`,
 1 AS `nm_email`,
 1 AS `cd_celular`,
 1 AS `nm_evento`,
 1 AS `cd_cep`,
 1 AS `nm_bairro`,
 1 AS `nm_cidade`,
 1 AS `sg_uf`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping events for database 'db_rotadanoite'
--

--
-- Dumping routines for database 'db_rotadanoite'
--

--
-- Final view structure for view `vw_cliente_sp`
--

/*!50001 DROP VIEW IF EXISTS `vw_cliente_sp`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_cliente_sp` AS select `c`.`nm_fantasia` AS `nm_fantasia`,`c`.`ic_tipo` AS `ic_tipo`,`ct`.`cd_telefone` AS `cd_telefone`,`f`.`cd_cpf` AS `cd_cpf`,`j`.`cd_cnpj` AS `cd_cnpj`,`cd`.`nm_cidade` AS `nm_cidade` from (((((((`tb_cliente` `c` join `tb_contato` `ct` on((`ct`.`cd_cliente` = `c`.`cd_cliente`))) join `tb_pessoa_fisica` `f` on((`c`.`cd_pessoa_fisica` = `f`.`cd_pessoa_fisica`))) join `tb_pessoa_juridica` `j` on((`c`.`cd_pessoa_juridica` = `j`.`cd_pessoa_juridica`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`e`.`cd_logradouro` = `l`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) where (`cd`.`nm_cidade` = 'sao paulo') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_evento_bar`
--

/*!50001 DROP VIEW IF EXISTS `vw_evento_bar`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_evento_bar` AS select `e`.`nm_evento` AS `nm_evento`,`e`.`dt_evento` AS `dt_evento`,`e`.`vl_evento` AS `vl_evento`,`l`.`nm_rua` AS `nm_rua`,`l`.`cd_numero` AS `cd_numero`,`l`.`cd_cep` AS `cd_cep`,`b`.`nm_bairro` AS `nm_bairro`,`s`.`nm_segmento` AS `nm_segmento` from (((`tb_evento` `e` join `tb_logradouro` `l` on((`e`.`cd_logradouro` = `l`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_segmento` `s` on((`e`.`cd_segmento` = `s`.`cd_segmento`))) where (`s`.`nm_segmento` = 'bar') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_evento_maior`
--

/*!50001 DROP VIEW IF EXISTS `vw_evento_maior`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_evento_maior` AS select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`e`.`nm_evento` AS `nm_evento`,`e`.`dt_evento` AS `dt_evento`,`e`.`cd_faixa_etaria` AS `cd_faixa_etaria` from (`tb_cliente` `c` join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) where (`e`.`cd_faixa_etaria` >= 18) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_evento_tupi`
--

/*!50001 DROP VIEW IF EXISTS `vw_evento_tupi`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_evento_tupi` AS select `e`.`nm_evento` AS `nm_evento`,`e`.`dt_evento` AS `dt_evento`,`e`.`vl_evento` AS `vl_evento`,`e`.`cd_faixa_etaria` AS `cd_faixa_etaria`,`e`.`ds_evento` AS `ds_evento`,`b`.`nm_bairro` AS `nm_bairro` from ((`tb_evento` `e` join `tb_logradouro` `l` on((`l`.`cd_logradouro` = `e`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) where (`b`.`nm_bairro` = 'tupi') */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `vw_five_views`
--

/*!50001 DROP VIEW IF EXISTS `vw_five_views`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8 */;
/*!50001 SET character_set_results     = utf8 */;
/*!50001 SET collation_connection      = utf8_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `vw_five_views` AS select `c`.`nm_responsavel` AS `nm_responsavel`,`c`.`nm_email` AS `nm_email`,`ct`.`cd_celular` AS `cd_celular`,`e`.`nm_evento` AS `nm_evento`,`l`.`cd_cep` AS `cd_cep`,`b`.`nm_bairro` AS `nm_bairro`,`cd`.`nm_cidade` AS `nm_cidade`,`uf`.`sg_uf` AS `sg_uf` from ((((((`tb_cliente` `c` join `tb_contato` `ct` on((`c`.`cd_cliente` = `ct`.`cd_cliente`))) join `tb_evento` `e` on((`c`.`cd_cliente` = `e`.`cd_cliente`))) join `tb_logradouro` `l` on((`l`.`cd_logradouro` = `e`.`cd_logradouro`))) join `tb_bairro` `b` on((`l`.`cd_bairro` = `b`.`cd_bairro`))) join `tb_cidade` `cd` on((`b`.`cd_cidade` = `cd`.`cd_cidade`))) join `tb_uf` `uf` on((`cd`.`cd_uf` = `uf`.`cd_uf`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-10-16 17:34:21
