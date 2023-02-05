USE fourhouse_db;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


DROP TABLE IF EXISTS `administrador`;
CREATE TABLE `administrador` (
  `idAdministrador` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(225) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`idAdministrador`)
);



DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE `agendamento` (
  `idAgendamento` INT NOT NULL AUTO_INCREMENT,
  `dataAgendamento` date NOT NULL,
  `horaAgendamento` time NOT NULL,
  `statusServico` varchar(11) DEFAULT NULL,
  `idUser` INT NOT NULL ,
  `idEndereco` INT NOT NULL ,
  `idTecnico` INT NOT NULL ,
  `idServico` INT NOT NULL ,
  PRIMARY KEY (`idAgendamento`)
);

DROP TABLE IF EXISTS `atendente`;
CREATE TABLE `atendente` (
  `idAtendente` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(225) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`idAtendente`)
);

DROP TABLE IF EXISTS `endereco`;
CREATE TABLE `endereco` (
  `idEndereco` INT NOT NULL AUTO_INCREMENT,
  `endereco` varchar(255) NOT NULL,
  `numero` varchar(7) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `bairro` varchar(225) DEFAULT NULL,
  `cidade` varchar(225) DEFAULT NULL,
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idEndereco`)
) ;

DROP TABLE IF EXISTS `servico`;
CREATE TABLE `servico` (
  `idServico` INT NOT NULL AUTO_INCREMENT,
  `nomeServico` varchar(225) DEFAULT NULL,
  `urlServico` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idServico`)
);

INSERT INTO `servico` (nomeServico,urlServico) VALUES ('Portão Elétrico','portao-eletrico'),('Ambientação','ambientacao'),('Sensor de Proximidade','sensor-proximidade'),('Sensor de Fumaça','sensor-fumaca'),('Controle de TV','controle-de-tv'),('Som','som'),('Cortinas','cortinas'),('Ar Condicionado','ar-condicionado'),('Controle de Camêras','controle-cameras'),('Alarmes','alarmes'),('Fechadura Eletrônica','fechadura-eletronica'),('Áudio e Vídeo (Cinema em casa)','audio-video');

DROP TABLE IF EXISTS `tecnico`;
CREATE TABLE `tecnico` (
  `idTecnico` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`idTecnico`)
);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `dataNasc` date NOT NULL,
  `sexo` varchar(9) NOT NULL,
  `telefone1` varchar(15) NOT NULL,
  `telefone2` varchar(15) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `dataCriacaoConta` datetime DEFAULT NULL,
  `ultimoAcesso` datetime DEFAULT NULL,
  PRIMARY KEY (`idUser`)
);

--
-- Dumping routines for database 'heroku_acd6119eb0eb682'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17 11:23:20