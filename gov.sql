-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2021 at 02:35 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gov`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `energieeolienne`
--

DROP TABLE IF EXISTS `energieeolienne`;
CREATE TABLE IF NOT EXISTS `energieeolienne` (
  `Numero` int NOT NULL,
  `Developpeur` varchar(500)   NOT NULL,
  `Nom du projet` varchar(500)  NOT NULL,
  `Region` varchar(500)  NOT NULL,
  `Province` varchar(500)  NOT NULL,
  `Localite` varchar(500)  NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500) NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500)   NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(100)   NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500) NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500)  NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500)   NOT NULL,
  `Reponse ONEE en Cas Du 2 Complement` varchar(500) NOT NULL,
  `Depot du 2 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 2 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 3 Complement` varchar(500) NOT NULL,
  `Depot du 3 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 3 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 4 Complement` varchar(500) NOT NULL,
  `Depot du 4 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 4 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Avis de l'ONEE` varchar(500) NOT NULL,
  `Avis MEME` varchar(500) NOT NULL,
  `Observations` varchar(500) NOT NULL,
  PRIMARY KEY (`Numero`)
)  ;

--
-- Dumping data for table `energieeolienne`
--

INSERT INTO `energieeolienne` (`Numero`, `Developpeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Avis MEME`, `Observations`) VALUES
(14, 'gggggggggggggggggggggg', 'ggggggggggggggggg', 'Fès - Meknès', '', 'gggggggggggggg', 157, 0, 0, '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 'ggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggg', 'Rabat-Salé-Kénitra', 'Rabat', 'ggggggggggggggggggg', 154, 0, 0, '', '', 0, '0', '', '', '', '', '', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '', '', ''),
(72, 'blalababa', 'bbbbbbbbbbbb', 'Rabat-Salé-Kénitra', 'Sidi Kacem', 'bbbbbbbbbbbbb', 514, 0, 0, '', '', 0, 'GGGGGGGGGGGGGGGGGGGGG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(78, 'blalababa', 'bbbbbbbbbbbb', 'Rabat-Salé-Kénitra', 'Skhirate, Témara', 'bbbbbbbbbbbbb', 514, 0, 0, '', '', 1545540, 'GGGGGGGGGGGGGGGG', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(56, 'blalababa', 'bbbbbbbbbbbb', 'Souss-Massa', 'Inezgane, Aït Melloul', 'bbbbbbbbbbbbb', 514, 0, 0, '', '', 2147480000, 'gggggggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'blalababa', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'El Kelaâ des Sraghna', 'bbbbbbbbbbbbb', 514, 0, 0, '', '', 2147480000, 'gggggggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'blalababa', 'bbbbbbbbbbbb', 'Guelmim-Oued Noun', 'Assa-Zag', 'bbbbbbbbbbbbb', 514, 0, 0, '', '', 1500, 'gggggggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(498, 'blalababa', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Rehamna', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'gggggggggg', 1500, 'gggggggg', 'hhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhh', 'hhhhhhh', 'hhhhhhhhh', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'hhhhhhhhh'),
(497, 'blalababa', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Selectionner province', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', 'hhhhhhhhhhh', 'hhhhhhh', '2021-07-17', '2021-07-10', '', '', '', '', '', '', '', '', '', 'hhhhhhhh', 'hhhhhhhh', 'hhhhhhhhh'),
(496, 'blalababa', 'bbbbbbbbbbbb', 'Souss-Massa', 'Tiznit', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'ggggggggggg'),
(666, '', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'El Kelaâ des Sraghna', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'ggggggggggg'),
(578, '', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Essaouira', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'ggggggggggg'),
(49779, '', 'gggggggggggg', 'Drâa-Tafilalet', 'Midelt', 'ggggggggg', 514, 154, 154, 'ggggggggg', 'gggggggggggggg', 0, 'gggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggggggg', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(5788, 'baba', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Selectionner Province', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'ggggggggggggggggg', 0, '2147483647', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(5769, 'test', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Selectionner Province', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'ggggggggggggggggg', 2147480000, '0', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(4977, 'test', 'bbbbbbbbbbbb', 'Souss-Massa', 'Tiznit', 'bbbbbbbbbbbbb', 456, 157, 514, 'hydro', 'gggggggggggggg', 1500, 'gggggggggggggggggg', 'gggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggg', 'gggggggggggggggggg', 'test1hhhhhhhhhhhh', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(2222, 'blaba', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 456, 154, 514, 'hydro', 'gggggggggggggg', 1500, 'gggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(2325, 'blaba', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Tinghir', 'bbbbbbbbbbbbb', 456, 157, 157, 'hydro', 'gggggggggggggg', 1500, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(5666, 'test', 'bbbbbbbbbbbb', 'Casablanca-Settat', 'Médiouna', 'bbbbbbbbbbbbb', 456, 157, 514, 'hydro', 'ggggggggggggggggg', 1500, 'gggggggggggggggggg', 'hhhhhhhh', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', 'ggggggggggg', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(49889, 'baba', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Ouarzazate', 'bbbbbbbbbbbbb', 456, 157, 157, 'hydro', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggggggg', 'gggggggggggggggg', 'gggggg', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(5678, 'blaba', 'bbbbbbbbbbbb', 'Rabat-Salé-Kénitra', 'Salé', 'bbbbbbbbbbbbb', 456, 157, 154, 'hydro', 'hhhhhhhhhhh', 1500, 'ggggggggggg', 'hhhhhhhh', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', '2021-07-17', 'ggggggggggggggggggggggggggggg', 'test', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(5621, 'test', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Rehamna', 'bbbbbbbbbbbbb', 514, 157, 514, 'hydro', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(56788, 'blaba', 'gggggggggggg', 'Guelmim-Oued Noun', 'Tan Tan', 'ggggggggg', 514.078, 514.078, 514.078, 'ggggggggg', 'gggggggggggggg', 1.5, 'ggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'test', 'gggggggggg', 'gggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `energiehydroelectrique`
--

DROP TABLE IF EXISTS `energiehydroelectrique`;
CREATE TABLE IF NOT EXISTS `energiehydroelectrique` (
  `Numero` int NOT NULL,
  `Demandeur` varchar(500)  NOT NULL,
  `Nom du projet` varchar(500)  NOT NULL,
  `Region` varchar(500)  NOT NULL,
  `Province` varchar(500)  NOT NULL,
  `Localite` varchar(500)  NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500)  NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500)  NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(500)  NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500)  NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500)  NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500)  NOT NULL,
  `Reponse ONEE en Cas Du 2 Complement` varchar(500) NOT NULL,
  `Depot du 2 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 2 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 3 Complement` varchar(500) NOT NULL,
  `Depot du 3 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 3 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 4 Complement` varchar(500) NOT NULL,
  `Depot du 4 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 4 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Avis de l'ONEE` varchar(500)  NOT NULL,
  `Envoi du dossier au departement eau` varchar(500) NOT NULL,
  `Reponse Departement de l'eau` varchar(500)  NOT NULL,
  `Depot du complement du dossier par le developpeur/ABH` varchar(500)  NOT NULL,
  `Envoi du complement du dossier a l'ABH` varchar(500)  NOT NULL,
  `Reponse Departement de l'eau en Cas Du 2 Complement` varchar(100)  NOT NULL,
  `Depot du 2 complement du dossier par le developpeur/ABH` varchar(100)  NOT NULL,
  `Envoi du 2 complement du dossier a l'ABH` varchar(100)  NOT NULL,
  `Reponse Departement de l'eau en Cas Du 3 Complement` varchar(100)  NOT NULL,
  `Depot du 3 complement du dossier par le developpeur/ABH` varchar(100)  NOT NULL,
  `Envoi du 3 complement du dossier a l'ABH` varchar(100)  NOT NULL,
  `Reponse Departement de l'eau en Cas Du 4 Complement` varchar(100)  NOT NULL,
  `Depot du 4 complement du dossier par le developpeur/ABH` varchar(100)  NOT NULL,
  `Envoi du 4 complement du dossier a l'ABH` varchar(100)  NOT NULL,
  `Avis Agence Bassin` varchar(500)  NOT NULL,
  `Avis MEME` varchar(500)  NOT NULL,
  `Observations` varchar(500)  NOT NULL,
  PRIMARY KEY (`Numero`)
) ;

--
-- Dumping data for table `energiehydroelectrique`
--

INSERT INTO `energiehydroelectrique` (`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Envoi du dossier au departement eau`, `Reponse Departement de l'eau`, `Depot du complement du dossier par le developpeur/ABH`, `Envoi du complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur/ABH`, `Envoi du 2 complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur/ABH`, `Envoi du 3 complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur/ABH`, `Envoi du 4 complement du dossier a l'ABH`, `Avis Agence Bassin`, `Avis MEME`, `Observations`) VALUES
(22, 'gggggggg', '', 'Marrakech-Safi', 'El Kelaâ des Sraghna', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'gggggggggg', 0, '1500', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', '17-11-2014', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-17', '2021-07-17', '', '', '', '', '', '', '', '', '', '12-12-2017', 'Autorisation', 'ggggggggggg'),
(498, 'gggggggg', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', 'hhhhhhhhhhh', 'hhhhhhh', '2021-07-17', '2021-07-10', '', '', '', '', '', '', '', '', '', '17-11-2014', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-17', '2021-07-17', '', '', '', '', '', '', '', '', '', '12-12-2017', '', 'ggggggggggg'),
(666, 'gggggggg', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 0, '2147483647', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', 'test', '17-11-2014', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', '12-12-2017', '', 'ggggggggggg'),
(27, 'AIC', 'Oum ER Rbia 1', 'Béni Mellal-Khénifra', 'Khénifra', '', 541, 4.6, 0, 'hydro', '', 0, '', '18-09-2014\r\nlettre n°9888/A', '', '', '26/11/2014 \r\nlettre n°105/14', 'Complément du dossier lettre n°3/DI/100/2014 du 26 décembre 2014', '', '05 /02/2015 lettre n°487/DE/DEREE', '', '', '', '', '', '', '', '', '', '', '26 /11/2014 \r\nlettre n°104/14', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(28, 'AIC', 'Oum ER Rbia 2', 'Béni Mellal-Khénifra', 'Khénifra', '', 1042, 9, 0, 'hydro', '', 0, '', '18-09-2014\r\nlettre n°9888/A', '', '', '07/11/2014 \r\nlettre n°3535/DE', 'Complément du dossier lettre n°3/DI/100/2014 du 26 décembre 2014', '', '05 /02/2015 \r\nlettre n°488/DE/DEREE', '', '', '', '', '', '', '', '', '', '', '26 /11/2014 \r\nlettre n°102/14', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'PLATINIUM POWER', 'Tafrent', 'Fès - Meknès', 'Taounate', '', 12, 0, 0, 'hydro', '', 0, '', '04-08-2014\r\n\r\nlettre n°8721/A', '', '', '15/08/2014 \r\nlettre n°2801/DE', '', 'avis favorable sur le plan technique: lettre n°3/DI/CTR/087/2014 du 24/11/2014', '', '', 'avis favorable sur le plan technique: lettre n°3/DI/CTR/087/2014 du 24/11/2014\r\n', '15 /08/2014 lettre n°2802/DE', '', '', '', '', 'Demande refusée lettre N°4612 DRPE/CM du 17-11-2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'refus de la demande: lettre n°475/DE du 5 février 2015', ''),
(24, 'PLATINIUM POWER', 'Rhafsai', 'Fès - Meknès', 'Taounate', '', 12, 0, 0, 'hydro', '', 0, '', '04-08-2014\r\nlettre n°87/A', '', '', '15/08/2014 \r\nlettre n°2799/DE', '', 'avis favorable sur le plan technique: lettre n°3/DI/CTR/087/2014 du 24/11/2014', '', '', 'avis favorable sur le plan technique: lettre n°3/DI/CTR/087/2014 du 24/11/2014', '15 /08/2014 \r\nlettre n°2800/DE', '', '', '', '', 'Demande refusée lettre N°4612 DRPE/CM du 17-11-2014', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'refus de la demande: lettre n°/DE du 5 février 2015', ''),
(71, 'PLATINIUM POWER', 'Melloul 1', '', '', '', 24, 0, 0, 'hydro', '', 0, '', '30-03-2017\r\nlettre n°3209/A   ', 'lettre n°1807/DEREE/DER du 24 avril 2017', '', 'Lettre n°3/DI/CTR/DOS/33/2017 du 24 mai 2017', 'Lettre n°2432/DEREE/DER du 02 juin 2017', 'lettre n°8060/A du 25/07/2017', 'Lettre n°8684/DEREE/DE du 28/08/2017', '', '', '', '', '', '', '', 'Avis favorable lettre n°3/DI/CTR/074/2017 du 20-11-2017', 'lettre n°1809/DEREE/DER du 24 avril 2017', '', '', '', '', '', '', '', '', '', '', '', '', 'Accord de principe lettre n° 5589/DRPE/DABH du 12-12-2017', 'Autorisation n°26/DEREE/MEMDD du 1er février 2018', 'le développeur a déposé des dossiers de demande de modification de capacité de 30 à 24 MW/le développeur a déposé un engagement (n°3208/A du 30/03/2017 qui a été transmis à l\'ONEE (lettre n°1865 du 28/04/2017)'),
(72, 'PLATINIUM POWER', 'Melloul 2', '', '', '', 24, 0, 0, 'hydro', '', 0, '', '30-03-2017\r\nlettre n°3210/A', 'lettre n°1810/DEREE/DER du 24 avril 2017', '', 'Lettre n°3/DI/CTR/DOS/33/2017 du 24 mai 2017', 'Lettre n°2432/DEREE/DER du 02 juin 2017', 'lettre n°8060/A du 25/07/2017', 'Lettre n°8684/DEREE/DE du 28/08/2017', '', '', '', '', '', '', '', 'Avis favorable lettre n°3/DI/CTR/074/2017 du 20-11-2017', 'lettre n°1811/DEREE/DER du 24 avril 2017', '', '', '', '', '', '', '', '', '', '', '', '', 'Accord de principe lettre n° 5591/DRPE/DABH du 12-12-2017', 'Autorisation n°27/DEREE/MEMDD du 1er février 2018', 'le développeur a déposé des dossiers de demande de modification de capacité de 30 à 24 MW/le développeur a déposé un engagement (n°3208/A du 30/03/2017 qui a été transmis à l\'ONEE (lettre n°1865 du 28/04/2017)'),
(5669, 'ggggggggggg', 'bbbbbbbbbbbb', 'Casablanca-Settat', 'Médiouna', 'bbbbbbbbbbbbb', 456, 514, 514, 'hydro', 'ggggggggggggggggg', 1500, 'ggggggggggg', '30-03-2017', 'gggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(22325, 'gggggggg', 'bbbbbbbbbbbb', 'Béni Mellal-Khénifra', 'Azilal', '', 0, 0, 0, '', '', 0, '', '30-03-2017', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Autorisation', '');

-- --------------------------------------------------------

--
-- Table structure for table `energiesolaire`
--

DROP TABLE IF EXISTS `energiesolaire`;
CREATE TABLE IF NOT EXISTS `energiesolaire` (
  `Numero` int NOT NULL,
  `Demandeur` varchar(500)  NOT NULL,
  `Nom du projet` varchar(500)  NOT NULL,
  `Region` varchar(500)  NOT NULL,
  `Province` varchar(500)  NOT NULL,
  `Localite` varchar(500)  NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500)  NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500)  NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(500)  NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500)  NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500)  NOT NULL,
  `Reponse ONEE en Cas Du 2 Complement` varchar(500) NOT NULL,
  `Depot du 2 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 2 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 3 Complement` varchar(500) NOT NULL,
  `Depot du 3 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 3 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 4 Complement` varchar(500) NOT NULL,
  `Depot du 4 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 4 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Avis de l'ONEE` varchar(500)  NOT NULL,
  `Avis MEME` varchar(500)  NOT NULL,
  `Observations` varchar(500)  NOT NULL,
  PRIMARY KEY (`Numero`)
) ;

--
-- Dumping data for table `energiesolaire`
--

INSERT INTO `energiesolaire` (`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Avis MEME`, `Observations`) VALUES
(16, 'blalababa', 'bbbbbbbbbbbb', 'Oriental', 'Oujda, Angad', 'bbbbbbbbbbbbb', 514, 0, 154, 'bbbbbb', 'gggggggggg', 0, '0', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', 'did', 'did', 'did', '', '', '', '', '', 'test', 'ggggg', 'ggggg', 'ggggggggggg'),
(79, 'HHHHHHHH', 'HHHHHHHHHHH', 'Souss-Massa', 'Chtouka, Aït Baha', 'HHHHHHHHHHHH', 154, 514, 6154, 'bbbbbb', 'gggggggggg', 2147480000, '', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'HHHHHHHHHHHHHH', 'ggggg', 'ggggggggggg'),
(497, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Tinghir', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', 'hhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhh', '2021-07-17', '2021-07-10', '', '', '', '', '', '', '', '', '', 'hhhhhhhh', 'hhhhhhhh', 'hhhhhhhhh'),
(666, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Midelt', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'ggggggggggg'),
(563, 'gggggggg', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Essaouira', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(5788, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Midelt', 'bbbbbbbbbbbbb', 514, 514, 514, 'bbbbbb', 'ggggggggggggggggg', 1500, 'ggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggggggg', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `region_eo_auto`
--

DROP TABLE IF EXISTS `region_eo_auto`;
CREATE TABLE IF NOT EXISTS `region_eo_auto` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_eo_auto`
--

INSERT INTO `region_eo_auto` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 0),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_eo_cours`
--

DROP TABLE IF EXISTS `region_eo_cours`;
CREATE TABLE IF NOT EXISTS `region_eo_cours` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_eo_cours`
--

INSERT INTO `region_eo_cours` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 1),
('Rabat-Salé-Kénitra', 4),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 1),
('Marrakech-Safi', 5),
('Drâa-Tafilalet', 6),
('Souss-Massa', 4),
('Guelmim-Oued Noun', 2),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_eo_refus`
--

DROP TABLE IF EXISTS `region_eo_refus`;
CREATE TABLE IF NOT EXISTS `region_eo_refus` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_eo_refus`
--

INSERT INTO `region_eo_refus` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 0),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_hyd_auto`
--

DROP TABLE IF EXISTS `region_hyd_auto`;
CREATE TABLE IF NOT EXISTS `region_hyd_auto` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_hyd_auto`
--

INSERT INTO `region_hyd_auto` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 1),
('Casablanca-Settat', 0),
('Marrakech-Safi', 1),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_hyd_cours`
--

DROP TABLE IF EXISTS `region_hyd_cours`;
CREATE TABLE IF NOT EXISTS `region_hyd_cours` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_hyd_cours`
--

INSERT INTO `region_hyd_cours` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 2),
('Casablanca-Settat', 1),
('Marrakech-Safi', 1),
('Drâa-Tafilalet', 0),
('Souss-Massa', 2),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_hyd_refus`
--

DROP TABLE IF EXISTS `region_hyd_refus`;
CREATE TABLE IF NOT EXISTS `region_hyd_refus` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_hyd_refus`
--

INSERT INTO `region_hyd_refus` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 2),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 0),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_sol_auto`
--

DROP TABLE IF EXISTS `region_sol_auto`;
CREATE TABLE IF NOT EXISTS `region_sol_auto` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_sol_auto`
--

INSERT INTO `region_sol_auto` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 0),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_sol_cours`
--

DROP TABLE IF EXISTS `region_sol_cours`;
CREATE TABLE IF NOT EXISTS `region_sol_cours` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_sol_cours`
--

INSERT INTO `region_sol_cours` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 1),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 1),
('Drâa-Tafilalet', 3),
('Souss-Massa', 1),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);

-- --------------------------------------------------------

--
-- Table structure for table `region_sol_refus`
--

DROP TABLE IF EXISTS `region_sol_refus`;
CREATE TABLE IF NOT EXISTS `region_sol_refus` (
  `nom` varchar(50) NOT NULL,
  `nbr` int NOT NULL,
  PRIMARY KEY (`nom`)
) ;

--
-- Dumping data for table `region_sol_refus`
--

INSERT INTO `region_sol_refus` (`nom`, `nbr`) VALUES
('Tanger – Tétouan – Al Hoceima', 0),
('Oriental', 0),
('Fès - Meknès', 0),
('Rabat-Salé-Kénitra', 0),
('Béni Mellal-Khénifra', 0),
('Casablanca-Settat', 0),
('Marrakech-Safi', 0),
('Drâa-Tafilalet', 0),
('Souss-Massa', 0),
('Guelmim-Oued Noun', 0),
('Laâyoune-Sakia El Hamra', 0),
('Dakhla-Oued Ed Dahab', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
