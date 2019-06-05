-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 05 Juin 2019 à 20:05
-- Version du serveur :  5.6.26
-- Version de PHP :  5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cnamcp09_nfa083cf1_2018`
--

-- --------------------------------------------------------

--
-- Structure de la table `agence`
--

CREATE TABLE IF NOT EXISTS `agence` (
  `agence_id` int(3) NOT NULL,
  `agence_logo` varchar(255) NOT NULL,
  `agence_secteur` int(5) NOT NULL,
  `agence_lat` varchar(20) NOT NULL,
  `agence_lon` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `agence`
--

INSERT INTO `agence` (`agence_id`, `agence_logo`, `agence_secteur`, `agence_lat`, `agence_lon`) VALUES
(1, 'wordpress', 3, '47.90', '1.88'),
(2, 'drupal', 4, '47.88', '1.86');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `agence`
--
ALTER TABLE `agence`
  ADD PRIMARY KEY (`agence_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `agence`
--
ALTER TABLE `agence`
  MODIFY `agence_id` int(3) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
