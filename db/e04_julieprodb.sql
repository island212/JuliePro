-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2014 at 09:58 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `e04_julieprodb`
--
CREATE DATABASE IF NOT EXISTS `e04_julieprodb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `e04_julieprodb`;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `telephone` char(10) NOT NULL,
  `cellulaire` char(10) NOT NULL,
  `adresse` varchar(45) NOT NULL,
  `ville` varchar(45) NOT NULL,
  `cp` char(6) NOT NULL,
  `dateNaissance` date NOT NULL,
  `dateInscription` date NOT NULL,
  `courriel` varchar(45) NOT NULL,
  `Personne_idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idClient`,`Personne_idPersonne`),
  KEY `fk_Client_Personne1_idx` (`Personne_idPersonne`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`idClient`, `telephone`, `cellulaire`, `adresse`, `ville`, `cp`, `dateNaissance`, `dateInscription`, `courriel`, `Personne_idPersonne`) VALUES
(1, '3603601337', '3603601337', '420 Blazeit St.', 'SnoopTown', 'D6D6D6', '1996-01-20', '2014-12-04', 'modonoob@erileduc.zip', 3);

-- --------------------------------------------------------

--
-- Table structure for table `entraineur_client`
--

DROP TABLE IF EXISTS `entraineur_client`;
CREATE TABLE IF NOT EXISTS `entraineur_client` (
  `idEntraineur_Client` int(11) NOT NULL,
  `Personne_idPersonne` int(11) NOT NULL,
  `Client_idClient` int(11) NOT NULL,
  PRIMARY KEY (`idEntraineur_Client`,`Personne_idPersonne`,`Client_idClient`),
  KEY `fk_Entraineur_Client_Personne1_idx` (`Personne_idPersonne`),
  KEY `fk_Entraineur_Client_Client1_idx` (`Client_idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `entraineur_client`
--

INSERT INTO `entraineur_client` (`idEntraineur_Client`, `Personne_idPersonne`, `Client_idClient`) VALUES
(0, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(24) NOT NULL,
  `password` varchar(16) NOT NULL,
  `firstName` varchar(24) NOT NULL,
  `lastName` varchar(24) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`idPersonne`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `personne`
--

INSERT INTO `personne` (`idPersonne`, `username`, `password`, `firstName`, `lastName`, `type`) VALUES
(1, 'JVoiselle', '1234', 'Julie', 'Voiselle', 0),
(2, 'ELeduc', '1234', 'Eric', 'Leduc', 1),
(3, 'LALevac', '1337', 'Louis-Alexandre', 'Levac', 2),
(4, 'CGiguere', '1234', 'Charles', 'Giguere', 1),
(5, 'MOBelisle', '1234', 'Marc-Olivier', 'Bélisle', 2),
(6, 'DTalbot', '1234', 'Denis', 'Talbot', 2),
(7, 'NBeaudet', '1234', 'Nicolas', 'Beaudet', 2),
(8, 'CGagnier', '1234', 'Christophe', 'Gagnier', 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `fk_Client_Personne1` FOREIGN KEY (`Personne_idPersonne`) REFERENCES `personne` (`idPersonne`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `entraineur_client`
--
ALTER TABLE `entraineur_client`
  ADD CONSTRAINT `fk_Entraineur_Client_Personne1` FOREIGN KEY (`Personne_idPersonne`) REFERENCES `personne` (`idPersonne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Entraineur_Client_Client1` FOREIGN KEY (`Client_idClient`) REFERENCES `client` (`idClient`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'admin'@'%' IDENTIFIED BY '***';GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%' IDENTIFIED BY '***' WITH GRANT OPTION MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;GRANT ALL PRIVILEGES ON `e04_julieprodb`.* TO 'admin'@'%';
