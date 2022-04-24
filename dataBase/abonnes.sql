-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 24 avr. 2022 à 04:34
-- Version du serveur :  8.0.28-0ubuntu0.20.04.3
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naiss` date NOT NULL,
  `debut_ab` date NOT NULL,
  `numero` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `abonnes`
--

INSERT INTO `abonnes` (`id`, `nom`, `prenom`, `date_naiss`, `debut_ab`, `numero`, `email`) VALUES
(29, 'ILBOUDO', 'Souleymane', '2001-04-17', '2022-04-14', '55993984', 'ilboudosouleymane4@gmail.coma'),
(30, 'TAGNABOU', 'Sylvain', '1999-11-05', '2022-04-24', '55831383', 'sylvaintagnabou@gmail.com'),
(31, 'Namountougou', 'Boureima', '2022-04-14', '2022-04-20', '58871825', 'naboureimang@gmail.com'),
(32, 'Namountougou', 'Dimanche', '2022-04-21', '2022-04-19', '86548678', 'dimache@gmail.com'),
(33, 'Kabore', 'Safiatou', '1972-10-21', '2014-09-14', '54', 'kamigyqin@mailinator.com'),
(34, 'Etghvbhj', 'Rem ', '2008-09-13', '1986-09-25', '62', 'jevexowuni@mailinator.com'),
(35, 'Souleyma', 'Ilboudo', '2022-03-31', '2022-04-28', '5754578', 'ilboudosouleymane4@gmail.com'),
(36, 'Etquaerat', 'Consequat', '2016-11-08', '2002-11-26', '36', 'pykybov@mailinator.com'),
(37, 'Qborumnequ', 'natus', '2018-11-26', '2005-05-23', '33', 'qomybujaly@mailinator.com'),
(38, 'Irure', 'Facere laboriosam l', '2011-02-22', '1996-01-17', '94', 'gonideza@mailinator.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
