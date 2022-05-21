-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 17 déc. 2021 à 19:01
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cinema_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `bookingtable`
--

DROP TABLE IF EXISTS `bookingtable`;
CREATE TABLE IF NOT EXISTS `bookingtable` (
  `bookingID` int NOT NULL AUTO_INCREMENT,
  `movieName` varchar(100) DEFAULT NULL,
  `bookingTheatre` varchar(100) NOT NULL,
  `bookingType` varchar(100) DEFAULT NULL,
  `bookingDate` varchar(50) NOT NULL,
  `bookingTime` varchar(50) NOT NULL,
  `bookingFName` varchar(100) NOT NULL,
  `bookingLName` varchar(100) DEFAULT NULL,
  `bookingPNumber` varchar(12) NOT NULL,
  PRIMARY KEY (`bookingID`),
  UNIQUE KEY `bookingID` (`bookingID`),
  KEY `bookingID_2` (`bookingID`),
  KEY `bookingID_3` (`bookingID`),
  KEY `bookingID_4` (`bookingID`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bookingtable`
--

INSERT INTO `bookingtable` (`bookingID`, `movieName`, `bookingTheatre`, `bookingType`, `bookingDate`, `bookingTime`, `bookingFName`, `bookingLName`, `bookingPNumber`) VALUES
(19, 'Captain Marvel', 'main-hall', '3d', '13-3', '15-00', 'Ahmed', 'Ismael', '010152658930'),
(22, 'The Lego Movie', 'vip-hall', 'imax', '13-3', '18-00', 'Kareem', 'Ahmed', '01589965');

-- --------------------------------------------------------

--
-- Structure de la table `feedbacktable`
--

DROP TABLE IF EXISTS `feedbacktable`;
CREATE TABLE IF NOT EXISTS `feedbacktable` (
  `msgID` int NOT NULL AUTO_INCREMENT,
  `senderfName` varchar(50) NOT NULL,
  `senderlName` varchar(50) DEFAULT NULL,
  `sendereMail` varchar(100) NOT NULL,
  `senderfeedback` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`msgID`),
  UNIQUE KEY `msgID` (`msgID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `feedbacktable`
--

INSERT INTO `feedbacktable` (`msgID`, `senderfName`, `senderlName`, `sendereMail`, `senderfeedback`) VALUES
(1, 'Ahmed', 'Ali', 'Ahmed@mail.com', 'Hello first'),
(2, 'Ahmed', 'Ali', 'asa@as.com', 'asdas');

-- --------------------------------------------------------

--
-- Structure de la table `movietable`
--

DROP TABLE IF EXISTS `movietable`;
CREATE TABLE IF NOT EXISTS `movietable` (
  `movieID` int NOT NULL AUTO_INCREMENT,
  `movieImg` varchar(150) NOT NULL,
  `movieTitle` varchar(100) NOT NULL,
  `movieGenre` varchar(50) NOT NULL,
  `movieDuration` int NOT NULL,
  `movieRelDate` date NOT NULL,
  `movieDirector` varchar(50) NOT NULL,
  `movieActors` varchar(150) NOT NULL,
  PRIMARY KEY (`movieID`),
  UNIQUE KEY `movieID` (`movieID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `movietable`
--

INSERT INTO `movietable` (`movieID`, `movieImg`, `movieTitle`, `movieGenre`, `movieDuration`, `movieRelDate`, `movieDirector`, `movieActors`) VALUES
(1, 'img/poster-1.jpg', 'Roméo Et Juliette', 'Drama', 120, '2021-01-06', 'Alain Sizey, Vincianne Regattieri', 'Alexandre Bonstein, Guillaume Caubel, Frederic Chevaux'),
(2, 'img/poster-2.jpg', 'Bash', 'Drama', 120, '2020-12-06', 'Neil LaBute', 'Pierre Laville, Sarah Biasini, Benoit Solès'),
(3, 'img/poster-3.jpg', 'Double Show', 'Comedie', 200, '2022-01-26', 'Compagnie d\'improvisation', 'La compagnie d\'improvisation'),
(4, 'img/poster-4.jpg', 'Les Princes', 'Comedie', 120, '2021-01-17', 'Laurent Grima', 'Natacha Moget, Johan Blanchart'),
(5, 'img/poster-5.jpg', 'Mademoiselle Molière', 'Drama', 132, '2022-01-13', 'Gérard Savoisien', 'Anne Bouvier, Christophe de Mareuil'),
(6, 'img/poster-6.jpg', 'Le Mystère de Sait Exupery', 'Drama, Suspense', 150, '2022-01-12', 'Davy Sardou', 'Axel Auriant, Flavie Péan, Pierre Bénézit');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Healthy', 'mail@gmail.com', 'merlin'),
(2, 'Esteban', 'bjr', 'bjr'),
(3, 'UwU', 'uwu@gmail.com', 'uwu'),
(4, 'Lucas', 'lucas@gmail.com', 'lucas');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
