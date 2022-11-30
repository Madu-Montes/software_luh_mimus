-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para luh_mimus
DROP DATABASE IF EXISTS `luh_mimus`;
CREATE DATABASE IF NOT EXISTS `luh_mimus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `luh_mimus`;

-- Copiando estrutura para tabela luh_mimus.anuncios
DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id_anuncios` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_categorias` bigint(20) DEFAULT NULL,
  `nome_anuncios` char(50) NOT NULL,
  `valor_anuncios` decimal(6,2) NOT NULL DEFAULT '0.00',
  `desc_anuncios` varchar(1000) NOT NULL,
  `img_anuncios` varchar(50) NOT NULL,
  PRIMARY KEY (`id_anuncios`),
  KEY `id_categorias` (`id_categorias`),
  CONSTRAINT `anuncios_ibfk_1` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id_categorias`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.anuncios: ~0 rows (aproximadamente)
DELETE FROM `anuncios`;
/*!40000 ALTER TABLE `anuncios` DISABLE KEYS */;
INSERT INTO `anuncios` (`id_anuncios`, `id_categorias`, `nome_anuncios`, `valor_anuncios`, `desc_anuncios`, `img_anuncios`) VALUES
	(1, NULL, 'bolo', 20.00, 'mds', 'sla'),
	(2, NULL, 'bruga', 10.00, 'ikfjldkjf', 'avatar/bruga.jpg'),
	(3, NULL, 'bolinhoo', 10.00, 'meu deus funciona', 'avatar/bolinhoo.png'),
	(4, NULL, 'cenoura', 100.00, 'pega plmd', 'avatar/cenoura.jpg'),
	(5, NULL, 'Beijinho', 20.00, 'bii', 'avatar/Beijinho.jpg');
/*!40000 ALTER TABLE `anuncios` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.categorias
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categorias` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome_categorias` char(50) NOT NULL,
  `desc_categorias` varchar(1000) NOT NULL,
  PRIMARY KEY (`id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.categorias: ~2 rows (aproximadamente)
DELETE FROM `categorias`;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` (`id_categorias`, `nome_categorias`, `desc_categorias`) VALUES
	(3, 'doces', 'doces sa~gaod');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.encomenda
DROP TABLE IF EXISTS `encomenda`;
CREATE TABLE IF NOT EXISTS `encomenda` (
  `id_encomenda` bigint(20) NOT NULL AUTO_INCREMENT,
  `peso_encomenda` decimal(2,1) NOT NULL DEFAULT '0.0',
  `massa_encomendas` char(1) NOT NULL,
  `recheio_encomenda` char(1) NOT NULL,
  `tema_encomenda` char(1) NOT NULL,
  `data_encomenda` date NOT NULL,
  `id_anuncio` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`id_encomenda`),
  KEY `id_anuncio` (`id_anuncio`),
  CONSTRAINT `id_anuncio` FOREIGN KEY (`id_anuncio`) REFERENCES `anuncios` (`id_anuncios`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.encomenda: ~0 rows (aproximadamente)
DELETE FROM `encomenda`;
/*!40000 ALTER TABLE `encomenda` DISABLE KEYS */;
/*!40000 ALTER TABLE `encomenda` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.estoque
DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `id_estoque` bigint(20) NOT NULL AUTO_INCREMENT,
  `fk_id_anuncio` bigint(20) NOT NULL DEFAULT '0',
  `qtd_estoque` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estoque`),
  KEY `fk_id_anuncio` (`fk_id_anuncio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.estoque: ~0 rows (aproximadamente)
DELETE FROM `estoque`;
/*!40000 ALTER TABLE `estoque` DISABLE KEYS */;
/*!40000 ALTER TABLE `estoque` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.user_cdst_site
DROP TABLE IF EXISTS `user_cdst_site`;
CREATE TABLE IF NOT EXISTS `user_cdst_site` (
  `id_UserCdstSite` smallint(6) NOT NULL AUTO_INCREMENT,
  `email_UserCdstSite` varchar(50) NOT NULL,
  `senha_UserCdstSite` varchar(50) NOT NULL,
  `nome_UserCdstSite` varchar(50) NOT NULL,
  `celular_UserCdstSite` varchar(50) NOT NULL,
  `cpf_UserCdstSite` varchar(50) NOT NULL,
  `dtn_UserCdstSite` varchar(50) NOT NULL,
  `cep_UserCdstSite` varchar(50) NOT NULL,
  `rua_UserCdstSite` varchar(140) NOT NULL,
  `numero_UserCdstSite` smallint(6) NOT NULL,
  `comeplemento_UserCdstSite` varchar(50) NOT NULL,
  `bairro_UserCdstSite` varchar(50) NOT NULL,
  PRIMARY KEY (`id_UserCdstSite`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.user_cdst_site: ~0 rows (aproximadamente)
DELETE FROM `user_cdst_site`;
/*!40000 ALTER TABLE `user_cdst_site` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_cdst_site` ENABLE KEYS */;

-- Copiando estrutura para tabela luh_mimus.user_cdst_software
DROP TABLE IF EXISTS `user_cdst_software`;
CREATE TABLE IF NOT EXISTS `user_cdst_software` (
  `cdst_sftw_id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cdst_sftw_email` varchar(50) NOT NULL,
  `cdst_sftw_senha` varchar(50) NOT NULL,
  `cdst_sftw_nome` varchar(50) NOT NULL,
  `cdst_sftw_user` varchar(50) NOT NULL,
  `cdst_sftw_cargo` varchar(50) NOT NULL,
  PRIMARY KEY (`cdst_sftw_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela luh_mimus.user_cdst_software: ~0 rows (aproximadamente)
DELETE FROM `user_cdst_software`;
/*!40000 ALTER TABLE `user_cdst_software` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_cdst_software` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
