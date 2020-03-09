-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 24 juil. 2019 à 18:06
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `brehat`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `prename` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `prename`, `login`, `pass`, `mail`) VALUES
(1, 'morillon', 'guillaume', 'pseudo', '$2y$10$YeFPkvb/j/93.arZ/LxgheyNNglsC2dmG50d5MTKiZQTXc9vIOJ8i', 'guillaume.morillon@gmx.fr');

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `avis` text NOT NULL,
  `mail` varchar(256) NOT NULL,
  `datejour` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `avis`
--

INSERT INTO `avis` (`id`, `nom`, `prenom`, `avis`, `mail`, `datejour`) VALUES
(14, 'Morillon', 'Guillaume', 'Location très agréable dans une maison typique de Bretagne. Nous avons eu beau temps durant tout le séjour, les températures étaient même très agréables! nous reviendrons l\'année prochaine', 'guill@free.fr', '2019-07-08'),
(19, 'Dubois', 'Jean-Luc', 'La maison est agréable et pratique, je recommande !', 'guillaume.morillon@gmx.fr', '2019-07-24');

-- --------------------------------------------------------

--
-- Structure de la table `avis_buffer`
--

DROP TABLE IF EXISTS `avis_buffer`;
CREATE TABLE IF NOT EXISTS `avis_buffer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `avis` text NOT NULL,
  `mail` varchar(256) NOT NULL,
  `datejour` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `citations_brehat`
--

DROP TABLE IF EXISTS `citations_brehat`;
CREATE TABLE IF NOT EXISTS `citations_brehat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `auteur` varchar(256) NOT NULL,
  `citation` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `citations_brehat`
--

INSERT INTO `citations_brehat` (`id`, `auteur`, `citation`) VALUES
(1, 'Erik Orsenna de l’Académie Française ', ' Bréhat n’est pas qu’une île : un archipel, c’est-à-dire une grande famille d’univers minuscules. Chacun d’entre eux résume le monde. Prenez le temps d’y aborder. Un voyage à Bréhat c’est mille voyages, ouvrez l’œil et freinez l’allure. La récompense est au bout de la lenteur.'),
(2, 'Victor Hugo', 'L’espace est un océan ; les univers sont des îles. Mais il faut des communications entre ces îles. Ces communications se font par les âmes. La mort fait des envois d’esprits d’un monde à l’autre.'),
(4, 'Albert Camus', 'D\'une manière générale, j\'aime toutes les îles. Il est plus facile d\'y régner.'),
(5, 'Tant qu\'il y aura des îles - Jacques Chancel', 'Chacun de nous porte en lui ces propres îles, refuges.'),
(6, 'Patrick Weber', 'J’aime bien les îles. Il n’y a pas moyen de fuir. Quand on est face à un problème.'),
(7, 'Coluche', 'C\'est joli la Bretagne, et puis c\'est pas loin de la France.'),
(8, 'L\'Adieu aux îles (1986) de Hervé Jaouen', 'C\'était la Bretagne et seule cette province leur semblait capable de rivaliser avec la beauté sauvage de leurs îles.'),
(9, 'Lettre, à Emile Schuffenecker, 1888 de Paul Gauguin', 'J\'aime la Bretagne, j\'y trouve le sauvage, le primitif. Quand mes sabots résonnent sur ce sol de granit, j\'entends le son sourd, mat et puissant que je cherche en peinture.'),
(10, 'Ce qui reste du jour (1966-1972), Journal IX (1972) de Julien Green', 'Visite d\'un ami breton, il me parle du grand nombre d\'autonomistes bretons, me dit que ce qui a le plus indigné la Bretagne, c\'est le geste d\'Herriot supprimant à Paris la chaire de breton. L\'âme de la Bretagne, c\'est sa langue.'),
(11, 'Mémoires d\'outre-tombe (1848), Partie 3, Livre 31, Chapitre 1 de François René, vicomte de Chateaubriand', 'Les pieds me brûlaient à Paris, je ne pouvais m\'habituer au ciel gris et triste de la France, ma patrie; qu\'aurais-je donc pensé du ciel de la Bretagne, ma matrie, pour parler grec?'),
(12, 'Extraits historiques de Jules Michelet', 'La pauvre et dure Bretagne, l\'élément résistant de la France, étend ses champs de quartz et de schiste depuis les ardoisières de Châteaulin près Brest jusqu\'aux ardoisières d\'Angers.'),
(13, 'Proverbes Bretons', 'Comme la grêle dans la mer, les Anglais fondent en Bretagne.'),
(14, 'Proverbes Bretons', 'Ô Bretagne ! ô très beau pays ! Bois au milieu, mer à l’entour !'),
(15, 'De Ronan Le Coadic / L\'identité bretonne ', 'Les eaux bretonnes ne sont pas les plus chaudes, mais de là à vouloir les chauffer au fuel régulièrement !');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `message` text NOT NULL,
  `mail` varchar(256) NOT NULL,
  `dateJour` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id`, `nom`, `prenom`, `message`, `mail`, `dateJour`) VALUES
(15, 'Morillon', 'Chloé', 'Pouvez-vous nous contacter ? nous aimeroins louer la maison pour Noël ? merci', 'guillaume.morillon@gmx.fr', '2019-07-24'),
(14, 'Morillon', 'Guillaume', 'Est-il possible de venir avec un chat ?', 'guillaume.morillon@gmx.fr', '2019-07-24');

-- --------------------------------------------------------

--
-- Structure de la table `fichier_client`
--

DROP TABLE IF EXISTS `fichier_client`;
CREATE TABLE IF NOT EXISTS `fichier_client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `adresse` varchar(256) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `ville` varchar(256) NOT NULL,
  `telephone` int(11) NOT NULL,
  `mail` varchar(256) NOT NULL,
  `semaine_resa` int(11) NOT NULL,
  `info_particuliere` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `fichier_client`
--

INSERT INTO `fichier_client` (`id`, `nom`, `prenom`, `adresse`, `code_postal`, `ville`, `telephone`, `mail`, `semaine_resa`, `info_particuliere`) VALUES
(1, 'Morillon', 'Guillaume', 'L\'ancienne Gare', 35310, 'Saint-thurial', 611153406, 'guillaumemorillon@free.fr', 45, 'J\'aime les chats'),
(6, 'Dubois', 'Jean-Luc', 'Ricourtel', 56800, 'Ploërmel', 611153406, 'jldubois@free.fr', 46, '2 personnes dans la maison');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_avis`
--

DROP TABLE IF EXISTS `reponse_avis`;
CREATE TABLE IF NOT EXISTS `reponse_avis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_avis` int(11) NOT NULL,
  `auteur` varchar(256) NOT NULL,
  `reponse` text NOT NULL,
  `date_reponse` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse_avis`
--

INSERT INTO `reponse_avis` (`id`, `id_avis`, `auteur`, `reponse`, `date_reponse`) VALUES
(1, 3, 'Guillaume', 'ceci est une réponse à un avis', '2019-07-08'),
(2, 3, 'ooooooooooooooo', 'ooooooooooooooooooo', '2019-07-08'),
(3, 3, 'jjjjjjj', 'jjjjjjj', '2019-07-08'),
(4, 3, 'kkkkkkkkkk', 'kkkkkkkkkkk', '2019-07-08'),
(5, 14, 'Violaine Quéré ', 'merci pour ces remarques', '2019-07-08'),
(13, 19, 'Violaine Quéré', 'Merci pour ces remarques !            ', '2019-07-24'),
(7, 3, 'violaine', 'commentaire de violaine', '2019-07-09');

-- --------------------------------------------------------

--
-- Structure de la table `reponse_contact`
--

DROP TABLE IF EXISTS `reponse_contact`;
CREATE TABLE IF NOT EXISTS `reponse_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_contact` int(11) NOT NULL,
  `nom` varchar(256) NOT NULL,
  `prenom` varchar(256) NOT NULL,
  `reponse` text NOT NULL,
  `email_demandeur` varchar(256) NOT NULL,
  `date_reponse` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reponse_contact`
--

INSERT INTO `reponse_contact` (`id`, `id_contact`, `nom`, `prenom`, `reponse`, `email_demandeur`, `date_reponse`) VALUES
(1, 1, 'Quéré', 'Violaine', 'Voici la réponse du message de Guillaume Morillon', 'guillaume.morillon@gmx.fr', '2019-07-18'),
(5, 14, 'Quéré ', 'Violaine', 'Bonjour, Malheureusement pour des questions d\'hygiène, nous n\'acceptons pas les animaux.cordialement', 'guillaume.morillon@gmx.fr', '2019-07-24'),
(6, 15, 'Quéré Violaine', 'Violaine', 'Bonjour,\r\nVous pouvez sans problème louer la maison cette semaine.\r\n Je vous recontacte la semaine prochaine pour finaliser la réservation.\r\ncordialement,', 'guillaume.morillon@gmx.fr', '2019-07-24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
