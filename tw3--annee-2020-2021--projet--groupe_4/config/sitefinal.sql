-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 27 Octobre 2020 à 19:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `sitefinal`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` varchar(50) NOT NULL,
  `mdp` varchar(50) NOT NULL,
  `pseudo` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `mdp`, `pseudo`, `email`) VALUES
('ChrisPratt', 'blue', 'OwenGrady', 'jurrasic@gmail.com'),
('Yoanel', 'triceratops', 'LefebvreNelson', 'nelsonyoanel@gmail.com');

--
-- Structure de la table `dinosaures`
--

CREATE TABLE `dinosaures` (
  `id` int(4) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `nomlatin` varchar(50) DEFAULT NULL,
  `regne` varchar(50) DEFAULT NULL,
  `taille` int(20) DEFAULT NULL,
  `longueur` int(20) DEFAULT NULL,
  `vitesse` float DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `regime` varchar(20) DEFAULT NULL,
  `danger` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `dinosaures`
--

INSERT INTO `dinosaures` (`id`, `nom`, `nomlatin`, `regne`, `taille`, `longueur`, `vitesse`, `description`, `regime`, `danger`) VALUES
(1, 'T-Rex', 'Tyrannosaurus', 'Jurassique', 6, 13, 32.7, 'Les scientifiques pensent que ce puissant prédateur pouvait manger jusqu\'à 230kg de viande en une seule bouchée. Les fossiles de proies de T-Rex, dont des Tricératops et des Edmontosaurus, suggèrent qu\'il brisait et broyait les os en les mangeant.', 'Carnivore', 'HAUT'),
(2, 'Tricératops', 'Triceratops', 'Crétacé', 3, 8, 32, 'La tête du Tricératops était sa caractéristique la plus imposante.', 'Herbivore', 'BAS');

--
-- Index pour la table `dinosaures`
--
ALTER TABLE `dinosaures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour la table `dinosaures`
--
ALTER TABLE `dinosaures`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
