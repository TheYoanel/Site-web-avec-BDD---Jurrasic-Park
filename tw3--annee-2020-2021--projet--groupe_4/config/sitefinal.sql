-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2020 at 03:48 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitefinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinosaures`
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
  `danger` varchar(20) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `descriptionDetaille` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dinosaures`
--

INSERT INTO `dinosaures` (`id`, `nom`, `nomlatin`, `regne`, `taille`, `longueur`, `vitesse`, `description`, `regime`, `danger`, `image`, `descriptionDetaille`) VALUES
(1, 'T-Rex', 'Tyrannosaurus', 'Jurassique', 6, 13, 32.7, 'Les scientifiques pensent que ce puissant prédateur pouvait manger jusqu\'à 230kg de viande en une seule bouchée. Les fossiles de proies de T-Rex, dont des Tricératops et des Edmontosaurus, suggèrent qu\'il brisait et broyait les os en les mangeant.', 'Carnivore', 'HAUT', 'https://www.laprovence.com/media/2020/07/01/1593593195_595993374_1365386130-3e58e91.jpg', 'Tyrannosaurus rex est l\'un des plus grands carnivores ayant vécu sur Terre. Comme chez les autres théropodes, le cou du T. rex forme une courbe en forme de « S » afin de maintenir la tête au-dessus du corps, mais il est particulièrement court et musculeux afin de supporter la tête massive. Les bras sont courts et se terminent par deux doigts. Proportionnellement à la taille du corps, les jambes du T. rex sont parmi les plus longues de tous les théropodes. La queue est longue et massive, constituée parfois de plus de quarante vertèbres, agissant comme un balancier permettant d\'équilibrer la lourde tête et le torse.'),
(2, 'Tricératops', 'Triceratops', 'Crétacé', 3, 8, 32, 'La tête du Tricératops était sa caractéristique la plus imposante.', 'Herbivore', 'BAS', 'https://i.pinimg.com/originals/53/f2/3e/53f23e05bc408e9179aff09f06916917.jpg', ' La caractéristique la plus distinctive est leur large crâne, parmi les plus grands de tous les animaux terrestres ayant vécu sur terre. Il portait une corne sur le museau, au-dessus des narines, et une paire de cornes, d\'une longueur approximative d\'un mètre, réparties au-dessus de chaque œil. À l\'arrière du crâne se dresse une collerette osseuse ornée d\'os époccipitaux chez certaines espèces. La plupart des autres cératopsidés possédaient de larges ouvertures sur leur collerette, contrairement aux tricératops qui avaient de très solides collerettes. La peau du Triceratops est très particulière pour un dinosaure. Des reproductions de la peau d\'un spécimen ont montré que certaines espèces pourraient avoir été couvertes de poils. Chose très rare pour les spécimens crétacien de l\'époque.'),
(3, 'Mosasaure', 'Mosasaurus', 'Crétacé', NULL, 17, NULL, 'Les mosasaures forment une superfamille éteinte de reptiles marins, souvent de grande taille, appartenant à l\'ordre des squamates, donc très proches des lézards et des serpents mais nullement apparenté au dinosaures.', 'Carnivore', 'HAUT', 'https://statics.lesinrocks.com/content/uploads/2015/06/moso.jpg', 'D\'une longueur comprise entre 1 et 17 mètres, les Mosasauridae pouvaient posséder jusqu\'à 150 vertèbres. Comme les baleines et les dauphins actuels, les mosasaures étaient des animaux d\'origine terrestre réadaptés à la vie marine. Leurs grandes dents en forme de poignards semblent indiquer qu\'il s\'agissait de prédateurs opportunistes, se nourrissant surtout de gros poissons, de calmars, et même d\'autres reptiles marins. '),
(4, 'Brachiosaure', 'Brachiosaurus', 'Jurassique Supérieur', 12, 26, 3, 'Brachiosaurus est l’un des plus grands et des plus gros animaux terrestres qui aient jamais existé.', 'Herbivore', 'Bas', 'https://rageworksmediafiles.s3.amazonaws.com/wp-content/uploads/2019/11/15061954/likEISnw-scaled.jpeg', 'La morphologie du Brachiosaurus lui permettait de balancer son cou, de droite à gauche, de bas en haut, jusqu’à la hauteur d’un immeuble de quatre étages. Il pouvait donc brouter les cycas autant qu’atteindre la cime des arbres pour se nourrir. On pense que les brachiosaures se déplaçaient en petits troupeaux, les adultes protégeant les plus jeunes des grands prédateurs théropodes. ');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(40) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `status`) VALUES
(4, 'lecarpentier', '$2y$10$Ej2.1RZsF1Xo8kX0Fw76a.SlUSOwv6yw01sxOPYVvLUFzxJWYISBS', 'lecarpentier@unicaen.fr', 'user'),
(5, 'vanier', '$2y$10$b67ClXID207HLpJg7zf8UO0amwq5NB4g5HFbBCUQHxKwpYLdQBEKy', 'vanier@unicaen.fr', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dinosaures`
--
ALTER TABLE `dinosaures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dinosaures`
--
ALTER TABLE `dinosaures`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(40) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
