-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 18, 2021 at 12:27 PM
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
  `Developpeur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nom du projet` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Region` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Province` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Localite` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500) NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500) NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `energieeolienne`
--

INSERT INTO `energieeolienne` (`Numero`, `Developpeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Avis MEME`, `Observations`) VALUES
(14, 'gggggggggggggggggggggg', 'ggggggggggggggggg', 'Fès - Meknès', '', 'gggggggggggggg', 157, 0, 0, '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(69, 'ggggggggggggggggggggggggggggg', 'gggggggggggggggggggggggggggggg', 'Rabat-Salé-Kénitra', 'Rabat', 'ggggggggggggggggggg', 154, 0, 0, '', '', 0, '0', '', '', '', '', '', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', '', '', ''),
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
(5769, 'dick', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Selectionner Province', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'ggggggggggggggggg', 2147480000, '0', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(4977, 'dick', 'bbbbbbbbbbbb', 'Souss-Massa', 'Tiznit', 'bbbbbbbbbbbbb', 456, 157, 514, 'hydro', 'gggggggggggggg', 1500, 'gggggggggggggggggg', 'gggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggg', 'gggggggggggggggggg', 'test1hhhhhhhhhhhh', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(2222, 'blaba', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 456, 154, 514, 'hydro', 'gggggggggggggg', 1500, 'gggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(2325, 'blaba', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Tinghir', 'bbbbbbbbbbbbb', 456, 157, 157, 'hydro', 'gggggggggggggg', 1500, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', '', '', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(5666, 'dick', 'bbbbbbbbbbbb', 'Casablanca-Settat', 'Médiouna', 'bbbbbbbbbbbbb', 456, 157, 514, 'hydro', 'ggggggggggggggggg', 1500, 'gggggggggggggggggg', 'hhhhhhhh', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', 'ggggggggggg', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(49889, 'baba', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Ouarzazate', 'bbbbbbbbbbbbb', 456, 157, 157, 'hydro', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggggggg', 'gggggggggggggggg', 'gggggg', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(5678, 'blaba', 'bbbbbbbbbbbb', 'Rabat-Salé-Kénitra', 'Salé', 'bbbbbbbbbbbbb', 456, 157, 154, 'hydro', 'hhhhhhhhhhh', 1500, 'ggggggggggg', 'hhhhhhhh', 'gggggggggggggggggggggg', 'ggggggggggggggggggg', '2021-07-17', 'ggggggggggggggggggggggggggggg', 'dick', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(5621, 'dick', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Rehamna', 'bbbbbbbbbbbbb', 514, 157, 514, 'hydro', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg'),
(56788, 'blaba', 'gggggggggggg', 'Guelmim-Oued Noun', 'Tan Tan', 'ggggggggg', 514.078, 514.078, 514.078, 'ggggggggg', 'gggggggggggggg', 1.5, 'ggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'dick', 'gggggggggg', 'gggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `energiehydroelectrique`
--

DROP TABLE IF EXISTS `energiehydroelectrique`;
CREATE TABLE IF NOT EXISTS `energiehydroelectrique` (
  `Numero` int NOT NULL,
  `Demandeur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nom du projet` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Region` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Province` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Localite` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Reponse ONEE en Cas Du 2 Complement` varchar(500) NOT NULL,
  `Depot du 2 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 2 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 3 Complement` varchar(500) NOT NULL,
  `Depot du 3 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 3 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 4 Complement` varchar(500) NOT NULL,
  `Depot du 4 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 4 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Avis de l'ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du dossier au departement eau` varchar(500) NOT NULL,
  `Reponse Departement de l'eau` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du complement du dossier par le developpeur/ABH` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du complement du dossier a l'ABH` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Reponse Departement de l'eau en Cas Du 2 Complement` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du 2 complement du dossier par le developpeur/ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du 2 complement du dossier a l'ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Reponse Departement de l'eau en Cas Du 3 Complement` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du 3 complement du dossier par le developpeur/ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du 3 complement du dossier a l'ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Reponse Departement de l'eau en Cas Du 4 Complement` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du 4 complement du dossier par le developpeur/ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Envoi du 4 complement du dossier a l'ABH` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Avis Agence Bassin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Avis MEME` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Observations` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `energiehydroelectrique`
--

INSERT INTO `energiehydroelectrique` (`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Envoi du dossier au departement eau`, `Reponse Departement de l'eau`, `Depot du complement du dossier par le developpeur/ABH`, `Envoi du complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur/ABH`, `Envoi du 2 complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur/ABH`, `Envoi du 3 complement du dossier a l'ABH`, `Reponse Departement de l'eau en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur/ABH`, `Envoi du 4 complement du dossier a l'ABH`, `Avis Agence Bassin`, `Avis MEME`, `Observations`) VALUES
(22, 'gggggggg', '', 'Marrakech-Safi', 'El Kelaâ des Sraghna', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'gggggggggg', 1500, '', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-17', '2021-07-17', '', '', '', '', '', '', '', '', '', 'bbbbbbbbbbbbbbb', 'ggggg', 'ggggggggggg'),
(498, 'gggggggg', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', 'hhhhhhhhhhh', 'hhhhhhh', '2021-07-17', '2021-07-10', '', '', '', '', '', '', '', '', '', 'hhhhhhhh', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-17', '2021-07-17', '', '', '', '', '', '', '', '', '', 'bbbbbbbbbbbbbbb', 'hhhhhhhh', 'ggggggggggg'),
(666, 'gggggggg', 'bbbbbbbbbbbb', 'Souss-Massa', 'Taroudant', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 0, '2147483647', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'dick', 'ggggg', '2021-07-10', 'bbbbbbbbbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'bbbbbbbbbbbbbbb', 'ggggg', 'ggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `energiesolaire`
--

DROP TABLE IF EXISTS `energiesolaire`;
CREATE TABLE IF NOT EXISTS `energiesolaire` (
  `Numero` int NOT NULL,
  `Demandeur` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Nom du projet` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Region` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Province` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Localite` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Puissance` float NOT NULL,
  `Productible previsionnel` float NOT NULL,
  `Co2 evite TCO2/an` float NOT NULL,
  `Source energie` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Coordonnees Geographique/Coordonnees Lambert` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Investissement du projet` float NOT NULL,
  `Etat avancement` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot a la DEREE` varchar(500) NOT NULL,
  `Envoi du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Depot du complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du complement du dossier a l'ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Reponse ONEE en Cas Du 2 Complement` varchar(500) NOT NULL,
  `Depot du 2 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 2 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 3 Complement` varchar(500) NOT NULL,
  `Depot du 3 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 3 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Reponse ONEE en Cas Du 4 Complement` varchar(500) NOT NULL,
  `Depot du 4 complement du dossier par le developpeur` varchar(500) NOT NULL,
  `Envoi du 4 complement du dossier a l'ONEE` varchar(500) NOT NULL,
  `Avis de l'ONEE` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Avis MEME` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Observations` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`Numero`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `energiesolaire`
--

INSERT INTO `energiesolaire` (`Numero`, `Demandeur`, `Nom du projet`, `Region`, `Province`, `Localite`, `Puissance`, `Productible previsionnel`, `Co2 evite TCO2/an`, `Source energie`, `Coordonnees Geographique/Coordonnees Lambert`, `Investissement du projet`, `Etat avancement`, `Depot a la DEREE`, `Envoi du dossier a l'ONEE`, `Reponse ONEE`, `Depot du complement du dossier par le developpeur`, `Envoi du complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 2 Complement`, `Depot du 2 complement du dossier par le developpeur`, `Envoi du 2 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 3 Complement`, `Depot du 3 complement du dossier par le developpeur`, `Envoi du 3 complement du dossier a l'ONEE`, `Reponse ONEE en Cas Du 4 Complement`, `Depot du 4 complement du dossier par le developpeur`, `Envoi du 4 complement du dossier a l'ONEE`, `Avis de l'ONEE`, `Avis MEME`, `Observations`) VALUES
(16, 'blalababa', 'bbbbbbbbbbbb', 'Oriental', 'Oujda, Angad', 'bbbbbbbbbbbbb', 514, 0, 154, 'bbbbbb', 'gggggggggg', 0, '0', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', 'did', 'did', 'did', '', '', '', '', '', 'dick', 'ggggg', 'ggggg', 'ggggggggggg'),
(79, 'HHHHHHHH', 'HHHHHHHHHHH', 'Souss-Massa', 'Chtouka, Aït Baha', 'HHHHHHHHHHHH', 154, 514, 6154, 'bbbbbb', 'gggggggggg', 2147480000, '', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'HHHHHHHHHHHHHH', 'ggggg', 'ggggggggggg'),
(497, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Tinghir', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', 'hhhhhhhh', 'hhhhhhhhhhh', 'hhhhhhh', '2021-07-17', '2021-07-10', '', '', '', '', '', '', '', '', '', 'hhhhhhhh', 'hhhhhhhh', 'hhhhhhhhh'),
(666, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Midelt', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'hhhhhhhhhhh', 1500, 'gggggggg', '2021-07-10', '2021-07-10', 'bbbbbbbb', '2021-07-10', '2021-07-10', '', '', '', '', '', '', '', '', '', 'ggggg', 'ggggg', 'ggggggggggg'),
(563, 'gggggggg', 'bbbbbbbbbbbb', 'Marrakech-Safi', 'Essaouira', 'bbbbbbbbbbbbb', 514, 154, 154, 'bbbbbb', 'ggggggggggggggggg', 0, 'ggggggggggg', 'gggggggggggg', 'gggggggggggggggggggggg', 'gggggggggggggggggggg', 'gggggggggggggggggggggggggggg', 'ggggggggggggggggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggg', 'gggggggggg', 'gggggggggg'),
(5788, 'gggggggg', 'bbbbbbbbbbbb', 'Drâa-Tafilalet', 'Midelt', 'bbbbbbbbbbbbb', 514, 514, 514, 'bbbbbb', 'ggggggggggggggggg', 1500, 'ggggggggggg', 'gggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggg', 'ggggggggggggggggggggggg', 'gggggggggggggggg', '', '', '', '', '', '', '', '', '', 'ggggggggggggggggggg', 'ggggggggggggggg', 'gggggggggggggggggggg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
