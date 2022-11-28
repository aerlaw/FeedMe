-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 28 nov. 2022 à 23:00
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `feed_me`
--

-- --------------------------------------------------------

--
-- Structure de la table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `poids` int(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_recette`
--

DROP TABLE IF EXISTS `ingredient_recette`;
CREATE TABLE IF NOT EXISTS `ingredient_recette` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `id_recette` int(11) NOT NULL,
  `id_ingredient` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_recette` (`id_recette`),
  KEY `id_ingredient` (`id_ingredient`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

DROP TABLE IF EXISTS `recette`;
CREATE TABLE IF NOT EXISTS `recette` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `pays` varchar(255) DEFAULT NULL,
  `ingredients` text NOT NULL,
  `etape` text NOT NULL,
  `prix` int(5) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `couvert` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `name`, `pays`, `ingredients`, `etape`, `prix`, `categorie`, `couvert`) VALUES
(4, 'croque monsieur', 'France', '4 tranches de pain de mie, sauce tomate, 2 tranches de jambon,2 tranches de cheddar', 'PrÃ©chauffer le four Ã  180 degrÃ©s et pendant ce temps lÃ , Ã©taler de la sauce tomate (ou du ketchup pour les Ã©tudiants) sur une tranche de pain de mie puis y disposer une tranche de jambon et une tranche de cheddar. Recouvrir avec une tranche de pain de mie et enfournez de 10 Ã  15 min (selon votre envie) dans le four.', 4, 'aperitif', 2),
(6, 'salade caprese', 'Italie', '3 tomates, 2 mozzarella, basilic, origan, huile d\'olive', 'Couper les mozzarella et les tomates en tranches puis les disposer, en alternant, dans une assiette. Y ajouter un filet d\'huile d\'olive, du sel, du poivre, un peu de basilic et d\'origan. Servir frais.', 8, 'entree', 2),
(7, 'jambon beurre', 'France', '2 tranches pain de mie, 1 tranche de jambon, beurre', 'Etaler le beurre, puis y disposer la tranche de jambon et recouvrir avec la tranche de pain de mie.', 4, 'aperitif', 1),
(8, 'sauce fond de veau', 'France', 'fond de veau, eau, herbes aromatiques', 'Faire rÃ©duire dans un volume d\'eau votre fond de veau avec des herbes aromatiques, ainsi que poivrez lÃ©gÃ¨rement.', 3, 'sauce', 2),
(10, 'mousse au chocolat', 'France', '500 g de chocolat noir (80%), 10 oeufs, sucre, sel', 'Faites fondre le chocolat noir dans un bain marie et pendant ce temps sÃ©parer le blanc des jaunes puis monter en neige Ã  l\'aide d\'une pincÃ©e de sel les blancs. DÃ¨s que le chocolat en fondue, laissez-le refroidir puis y mÃ©langer les jaunes. Enfin, Ajouter le sucre dans le chocolat puis incorporez dÃ©licatement l\'appareil aux blancs.\r\nPour finir, mettez le au frigo une bonne nuit pour que la mousse prenne une belle consistance.', 12, 'dessert', 5),
(16, 'Lasagnes', 'Italie', 'Pate lasagnes, sauce tomate, steak hachÃ©', 'Plongez vos lasagnes dans de la sauce bÃ©chamel, puis y ajouter le steak hachÃ© et les recouvrir avec de la sauce tomate...', 12, 'plat', 3);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `firstname`, `email`, `password`) VALUES
(1, 'De La VillardiÃ¨re', 'Bernard', 'jaiunequestion@hotmail.com', 'ane'),
(23, 'Jean', 'Pierre', 'Jean.pierre', 'Liku123@!'),
(22, 'Jean', 'Pierre', 'jean.pierre@gmail.com', 'Liku123@!'),
(21, 'ely', 'ely', 'ely.ely@ely.ely', 'MDR12345@a'),
(20, 'pijaze', 'aÃ´zoeok', 'caca@gmail.com', 'Ok124578'),
(19, 'De La VillardiÃ¨re', 'Bernard', 'jaiunequestion@hotmail.com', 'Mpoikl75'),
(18, 'JACKIE', 'TUNING', 'jacki99@gmail.com', 'pOoiaze654');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
