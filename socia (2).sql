-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Mai 2016 à 15:19
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `socia`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_sport`
--

CREATE TABLE IF NOT EXISTS `categorie_sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Contenu de la table `categorie_sport`
--

INSERT INTO `categorie_sport` (`id`, `nom`) VALUES
(1, 'Sports Mecaniques'),
(2, 'Sports de balle/ballon'),
(3, 'Sports de combat'),
(4, 'Sports animaliers'),
(5, 'Sports de glisse'),
(6, 'Sports de detente'),
(7, 'Sports Chorégraphiques'),
(8, 'Sports de montagne'),
(9, 'Sports de cible'),
(10, 'Sports de précision '),
(11, 'Sports extrêmes');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE IF NOT EXISTS `departement` (
  `id_departement` char(2) NOT NULL DEFAULT '',
  `departement` varchar(50) NOT NULL DEFAULT '',
  `id_region` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_departement`),
  KEY `id_region` (`id_region`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `departement`
--

INSERT INTO `departement` (`id_departement`, `departement`, `id_region`) VALUES
('01', 'Ain', 22),
('02', 'Aisne', 19),
('03', 'Allier', 3),
('04', 'Alpes-de-Haute-Provence', 21),
('05', 'Hautes-Alpes', 21),
('06', 'Alpes-Maritimes', 21),
('07', 'Ardèche', 22),
('08', 'Ardennes', 8),
('09', 'Ariège', 16),
('10', 'Aube', 8),
('11', 'Aude', 13),
('12', 'Aveyron', 16),
('13', 'Bouches-du-Rhône', 21),
('14', 'Calvados', 4),
('15', 'Cantal', 3),
('16', 'Charente', 20),
('17', 'Charente-Maritime', 20),
('18', 'Cher', 7),
('19', 'Corrèze', 14),
('21', 'Côte-d''Or', 5),
('22', 'Côtes-d''Armor', 6),
('23', 'Creuse', 14),
('24', 'Dordogne', 2),
('25', 'Doubs', 10),
('26', 'Drôme', 22),
('27', 'Eure', 11),
('28', 'Eure-et-Loir', 7),
('29', 'Finistère', 6),
('2A', 'Corse-du-Sud', 9),
('2B', 'Haute-Corse', 9),
('30', 'Gard', 13),
('31', 'Haute-Garonne', 16),
('32', 'Gers', 16),
('33', 'Gironde', 2),
('34', 'Hérault', 13),
('35', 'Ille-et-Vilaine', 6),
('36', 'Indre', 7),
('37', 'Indre-et-Loire', 7),
('38', 'Isère', 22),
('39', 'Jura', 10),
('40', 'Landes', 2),
('41', 'Loir-et-Cher', 7),
('42', 'Loire', 22),
('43', 'Haute-Loire', 3),
('44', 'Loire-Atlantique', 18),
('45', 'Loiret', 7),
('46', 'Lot', 16),
('47', 'Lot-et-Garonne', 2),
('48', 'Lozère', 13),
('49', 'Maine-et-Loire', 18),
('50', 'Manche', 4),
('51', 'Marne', 8),
('52', 'Haute-Marne', 8),
('53', 'Mayenne', 18),
('54', 'Meurthe-et-Moselle', 15),
('55', 'Meuse', 15),
('56', 'Morbihan', 6),
('57', 'Moselle', 15),
('58', 'Nièvre', 5),
('59', 'Nord', 17),
('60', 'Oise', 19),
('61', 'Orne', 4),
('62', 'Pas-de-Calais', 17),
('63', 'Puy-de-Dôme', 3),
('64', 'Pyrénées-Atlantiques', 2),
('65', 'Hautes-Pyrénées', 16),
('66', 'Pyrénées-Orientales', 13),
('67', 'Bas-Rhin', 1),
('68', 'Haut-Rhin', 1),
('69', 'Rhône', 22),
('70', 'Haute-Saône', 10),
('71', 'Saône-et-Loire', 5),
('72', 'Sarthe', 18),
('73', 'Savoie', 22),
('74', 'Haute-Savoie', 22),
('75', 'Paris', 12),
('76', 'Seine-Maritime', 11),
('77', 'Seine-et-Marne', 12),
('78', 'Yvelines', 12),
('79', 'Deux-Sèvres', 20),
('80', 'Somme', 19),
('81', 'Tarn', 16),
('82', 'Tarn-et-Garonne', 16),
('83', 'Var', 21),
('84', 'Vaucluse', 21),
('85', 'Vendée', 18),
('86', 'Vienne', 20),
('87', 'Haute-Vienne', 14),
('88', 'Vosges', 15),
('89', 'Yonne', 5),
('90', 'Territoire de Belfort', 10),
('91', 'Essonne', 12),
('92', 'Hauts-de-Seine', 12),
('93', 'Seine-Saint-Denis', 12),
('94', 'Val-de-Marne', 12),
('95', 'Val-d''Oise', 12);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE IF NOT EXISTS `evenement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `dateevent` datetime NOT NULL,
  `club` text NOT NULL,
  `description` text NOT NULL,
  `niveau` varchar(255) NOT NULL,
  `nbremembre` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `sport`, `dateevent`, `club`, `description`, `niveau`, `nbremembre`, `id_groupe`) VALUES
(1, '0', 'Accrobranche', '2017-06-17 12:15:00', '3rue Bayard', 'test descri test desci', 'Confirmé', 20, 31),
(2, 'Test', 'Accrobranche', '2017-06-17 12:15:00', '3rue Bayard', 'test descri test desci', 'Confirmé', 20, 31),
(3, 'Test', 'Accrobranche', '2017-06-17 12:15:00', '3rue Bayard', 'test descri test desci', 'Confirmé', 20, 31),
(4, 'dgsdg', 'Aerobic sportive', '2016-07-03 17:15:00', '" RUE baYARD', 'RSOTZEPGT', 'intermédiaire', 15, 31);

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE IF NOT EXISTS `groupe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `sport` varchar(255) NOT NULL,
  `nombre_de_membres` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=69 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `sport`, `nombre_de_membres`, `id_region`, `departement`, `description`, `photo`) VALUES
(30, 'Les rugbymans du 03', 'Rugby', 20, 12, 'Hauts-de-Seine', 'Hey what''s up les potes j''ai décidé de créer ce groupe pour organiser des petites rencontres de rugby.Et pourquoi pas allez boire un verre tous ensemble après .', ''),
(34, 'Les skieurs ', 'Ski alpin', 10, 12, 'Hauts-de-Seine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n		    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(39, 'Les footballeur ', 'Football', 13, 12, 'Hauts-de-Seine', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', ''),
(58, 'ISEP', 'Handball', 14, 1, 'Bas-Rhin', 'ancien membre de l''isep', ''),
(60, 'test', 'Agility', 5, 1, 'Haut-Rhin', 'dwef', ''),
(61, 'titites234', 'Rugby', 14, 3, 'Cantal', 'qfojefopezfozefnzoefnezpof', ''),
(62, 'test', 'Accrobranche', 5, 2, 'Gironde', 'oqpds,m', ''),
(68, 'zfaz', 'Accrobranche', 7, 1, 'Bas-Rhin', 'qdvdvd', '');

-- --------------------------------------------------------

--
-- Structure de la table `groupepost`
--

CREATE TABLE IF NOT EXISTS `groupepost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `contenu` text NOT NULL,
  `datepublication` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `groupepost`
--

INSERT INTO `groupepost` (`id`, `id_utilisateur`, `id_groupe`, `contenu`, `datepublication`) VALUES
(32, 18, 39, '<input type=''text''></input>', '2016-05-15 17:16:25'),
(33, 18, 39, '&lt;input type=''text''&gt;&lt;/input&gt;', '2016-05-15 17:18:21'),
(34, 18, 39, 'test<br />\r\ntest<br />\r\ntest<br />\r\n', '2016-05-15 17:19:02'),
(35, 18, 39, 'test\r\ntest\r\ntest\r\n', '2016-05-15 17:19:22'),
(36, 18, 39, '', '2016-05-15 17:20:18'),
(37, 18, 39, 'test', '2016-05-15 17:28:05'),
(38, 18, 39, 'test', '2016-05-15 17:29:16'),
(39, 18, 39, 'test', '2016-05-15 17:29:40'),
(40, 18, 39, 'ceci est un test', '2016-05-15 17:29:48'),
(41, 18, 39, 'test', '2016-05-15 17:31:23'),
(42, 18, 39, 'sgsd', '2016-05-15 17:39:03'),
(43, 18, 39, 'sgsd', '2016-05-15 17:39:52'),
(44, 18, 39, 'tes123', '2016-05-17 09:17:04'),
(45, 18, 39, 'http://localhost/socia/?page=groupe&amp;id=34', '2016-05-17 09:28:42'),
(46, 12, 30, 'blablabla', '2016-05-18 11:09:57'),
(47, 12, 30, 'connard<br />\r\n', '2016-05-18 11:10:15'),
(48, 12, 67, 'test', '2016-05-23 23:07:29'),
(49, 12, 67, 'test<br />\r\n', '2016-05-23 23:07:36'),
(50, 12, 67, 'fdbsf', '2016-05-23 23:09:51'),
(51, 12, 66, 'test', '2016-05-24 09:09:52'),
(52, 12, 66, 'test', '2016-05-24 09:27:57'),
(53, 12, 68, 'testes', '2016-05-24 09:28:48'),
(54, 12, 68, 'test<br />\r\n', '2016-05-24 09:30:51'),
(55, 12, 68, 'test<br />\r\n', '2016-05-24 09:31:25'),
(56, 12, 68, 'test<br />\r\n', '2016-05-24 09:32:34'),
(57, 12, 68, 'test<br />\r\n', '2016-05-24 09:33:14'),
(58, 12, 68, 'test<br />\r\n', '2016-05-24 09:34:20');

-- --------------------------------------------------------

--
-- Structure de la table `groupeuser`
--

CREATE TABLE IF NOT EXISTS `groupeuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  `statut` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Contenu de la table `groupeuser`
--

INSERT INTO `groupeuser` (`id`, `id_membre`, `id_groupe`, `statut`) VALUES
(32, 13, 30, ''),
(33, 13, 34, ''),
(34, 13, 39, ''),
(36, 16, 39, ''),
(37, 16, 58, ''),
(38, 20, 34, ''),
(46, 20, 58, ''),
(47, 12, 0, ''),
(54, 12, 64, 'invite'),
(55, 12, 65, 'admin'),
(56, 12, 66, 'admin'),
(60, 12, 68, 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id_region` tinyint(4) NOT NULL AUTO_INCREMENT,
  `region` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_region`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `region`
--

INSERT INTO `region` (`id_region`, `region`) VALUES
(1, 'Alsace'),
(2, 'Aquitaine'),
(3, 'Auvergne'),
(4, 'Basse-Normandie'),
(5, 'Bourgogne'),
(6, 'Bretagne'),
(7, 'Centre'),
(8, 'Champagne'),
(9, 'Corse'),
(10, 'Franche-Comté'),
(11, 'Haute-Normandie'),
(12, 'Île-de-France'),
(13, 'Languedoc-Roussillon'),
(14, 'Limousin'),
(15, 'Lorraine'),
(16, 'Midi-Pyrénées'),
(17, 'Nord-pas-de-Calais'),
(18, 'Pays de la Loire'),
(19, 'Picardie'),
(20, 'Poitou-Charentes'),
(21, 'Provence-Alpes-Côte-d''Azur'),
(22, 'Rhône-Alpes');

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_categorie` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Contenu de la table `sport`
--

INSERT INTO `sport` (`id`, `Id_categorie`, `nom`, `image`) VALUES
(1, 1, 'Aviation', '<img src=''images/Aviation.png''>'),
(2, 1, 'BMX', '<img src=''images/BMX.png''>'),
(3, 1, 'char à voile', '<img src=''images/char_a_voile.png''>'),
(4, 1, 'Deltaplane', '<img src=''images/Deltaplane.png''>'),
(5, 1, 'Graviation', '<img src=''images/Giraviation.png''>'),
(6, 1, 'Jetski', '<img src=''images/Jetski.png''>'),
(7, 1, 'Karting', '<img src=''images/Karting.png''>'),
(8, 1, 'Moto-cross', '<img src=''images/Moto-cross.png''>'),
(9, 1, 'Paramoteur', '<img src=''images/Paramoteur.png''>'),
(10, 1, 'Quad', '<img src=''images/Quad.png''>'),
(11, 1, 'Rallye', '<img src=''images/Rallye.png''>'),
(12, 1, 'ULM', '<img src=''images/ULM.png''>'),
(13, 2, 'Beach volley', '<img src=''images/Beach-volley.png''>'),
(14, 2, 'Boule lyonnaise', '<img src=''images/Boule-lyonnaise.png''>'),
(16, 2, 'Handball', '<img src=''images/Handball.png''>'),
(17, 2, 'Football', '<img src=''images/Football.png''>'),
(18, 2, 'Hockey subaquatique', '<img src=''images/Hockey-sub.png''>'),
(19, 2, 'Jockeyball', '<img src=''images/Jockeyball.png''>'),
(20, 2, 'Pétanque', '<img src=''images/Petanque.png''>'),
(21, 2, 'Rugby', '<img src=''images/Rugby.png''>'),
(22, 2, 'Softball', '<img src=''images/Softball.png''>'),
(23, 2, 'Tennis', '<img src=''images/Tennis.png''>'),
(24, 2, 'Volley-ball', '<img src=''images/Volley-ball.png''>'),
(25, 2, 'Water polo', '<img src=''images/Water-polo.png''>'),
(26, 3, 'Aikido', '<img src=''images/Aikido.png''>'),
(27, 3, 'Boxe thailandaise', '<img src=''images/Boxe-thalandaise.png''>'),
(28, 3, 'Boxe française', '<img src=''images/Boxe-Francaise.png''>'),
(29, 3, 'Capoeira', '<img src=''images/Capoeira.png''>'),
(30, 3, 'Escrime', '<img src=''images/Escrime.png''>'),
(31, 3, 'Gouren', '<img src=''images/Gouren.png''>'),
(32, 3, 'Hapkido', '<img src=''images/Hapkido.png''>'),
(33, 3, 'Iaïdo', '<img src=''images/Iaido.png''>'),
(34, 3, 'Jiu-jitsu', '<img src=''images/Jiu-jitsu.png''>'),
(35, 3, 'Judo', '<img src=''images/Judo.png''>'),
(36, 3, 'Karaté', '<img src=''images/Karate.png''>'),
(37, 3, 'Kendo', '<img src=''images/Kendo.png''>'),
(38, 3, 'Krav maga', '<img src=''images/Kravmaga.png''>'),
(39, 3, 'Kung Fu', '<img src=''images/KungFu.png''>'),
(40, 3, 'Lutte gréco-romaine', '<img src=''images/LutteGR.png''>'),
(41, 3, 'Ninjitsu', '<img src=''images/Ninjitsu.png''>'),
(42, 3, 'Self défense', '<img src=''images/Selfdefense.png''>'),
(43, 3, 'Sumo', '<img src=''images/Sumo.png''>'),
(44, 3, 'Taekwondo', '<img src=''images/Taekwondo.png''>'),
(45, 3, 'Viet vo dao', '<img src=''images/Vietvodao.png''>'),
(46, 4, 'Agility', '<img src=''images/Agility.png''>'),
(47, 4, 'Cirque', '<img src=''images/Cirque.png''>'),
(48, 4, 'Equitation', '<img src=''images/Equitation.png''>'),
(49, 4, 'Horse ball', '<img src=''images/Horseball.png''>'),
(50, 4, 'pêche', '<img src=''images/Peche.png''>'),
(51, 4, 'pêche sous-marine', '<img src=''images/Pechesousmarine.png''>'),
(52, 4, 'Randonnées équestre', '<img src=''images/Randonneeequestre.png''>'),
(53, 4, 'Traîneaux', '<img src=''images/Traineau.png''>'),
(54, 5, 'Aviron', '<img src=''images/Aviron.png''>'),
(55, 5, 'Bodyboard', '<img src=''images/Bodyboard.png''>'),
(56, 5, 'Hockey sur glace', '<img src=''images/Hockeyglace.png''>'),
(57, 5, 'Kite surf', '<img src=''images/Kitesurf.png''>'),
(58, 5, 'Luge', '<img src=''images/Luge.png''>'),
(59, 5, 'Mountainboard', '<img src=''images/Mountainboard.png''>'),
(60, 5, 'Planche à voile', '<img src=''images/Planchevoile.png''>'),
(61, 5, 'Roller', '<img src=''images/Roller.png''>'),
(62, 5, 'Ski alpin', '<img src=''images/ski_alpin.png''>'),
(63, 5, 'Ski nautique', '<img src=''images/ski_nautique.png''>'),
(64, 5, 'Voile', '<img src=''images/Voile.png''>'),
(65, 6, 'Accrobranche', '<img src=''images/Accrobranche.png''>'),
(66, 6, 'Baby foot', '<img src=''images/BabyFoot.png''>'),
(67, 6, 'Bowling', '<img src=''images/Bowling.png''>'),
(68, 6, 'Bridge', '<img src=''images/Bridge.png''>'),
(69, 6, 'Cerf-volant', '<img src=''images/Cerf-volant.png''>'),
(71, 6, 'Echec', '<img src=''images/Echec.png''>'),
(72, 6, 'Eveil Corporel', '<img src=''images/EveilCorporel.png''>'),
(73, 6, 'Golf', '<img src=''images/Golf.png''>'),
(74, 6, 'Plongée', '<img src=''images/Plongee.png''>'),
(75, 6, 'Taï chi chuan', '<img src=''images/Taichi.png''>'),
(76, 6, 'trampoline', '<img src=''images/Trampoline.png''>'),
(77, 6, 'Yoga', '<img src=''images/Yoga.png''>'),
(78, 7, 'Aerobic sportive', '<img src=''images/Aerobicsportive.png''>'),
(79, 7, 'Boogie Woogie', '<img src=''images/Boogiewoogie.png''>'),
(80, 7, 'Cheerleading', '<img src=''images/Cheerleading.png''>'),
(81, 7, 'Claquettes', '<img src=''images/Claquettes.png''>'),
(82, 7, 'Danse', '<img src=''images/Danse.png''>'),
(83, 7, 'Fitness', '<img src=''images/Fitness.png''>'),
(85, 7, 'Hip Hop', '<img src=''images/Hiphop.png''>'),
(86, 7, 'Natation synchronisé', '<img src=''images/NatationSynchro.png''>'),
(87, 7, 'Plongeon', '<img src=''images/Plongeon.png''>'),
(88, 7, 'Twirling baton', '<img src=''images/Twirlingbaton.png''>'),
(89, 8, 'Alpinisme', '<img src=''images/Alpinisme.png''>'),
(90, 8, 'Canyonisme', '<img src=''images/Canyonisme.png''>'),
(91, 8, 'Escalade', '<img src=''images/Escalade.png''>'),
(92, 8, 'Randonnée', '<img src=''images/Randonnée.png''>'),
(93, 8, 'Sauvetage', '<img src=''images/Sauvetage.png''>'),
(94, 9, 'Ball trap', '<img src=''images/Balltrap.png''>'),
(95, 9, 'Fléchettes', '<img src=''images/Flechettes.png''>'),
(96, 9, 'Joutes nautiques', '<img src=''images/JoutesNautiques.png''>'),
(97, 9, 'Paintball', '<img src=''images/Paintball.png''>'),
(98, 9, 'Quilles', '<img src=''images/Quilles.png''>'),
(99, 9, 'Tir à l''arc', '<img src=''images/Tiralarc.png''>'),
(100, 9, 'Tir sportif', '<img src=''images/Tirsportif.png''>'),
(101, 10, 'Aéromodélisme', '<img src=''images/Aeromodelisme.png''>'),
(102, 10, 'Billard', '<img src=''images/Billard.png''>'),
(103, 10, 'Modélisme', '<img src=''images/Modelisme.png''>'),
(104, 10, 'Sarbacane', '<img src=''images/Sarbacane.png''>'),
(105, 11, 'Apnée', '<img src=''images/Apnee.png''>'),
(106, 11, 'Moto Vitesse', '<img src=''images/Motovitesse.png''>'),
(107, 11, 'Nage en eau vive', '<img src=''images/Nageeneauvive.png''>'),
(108, 11, 'Parachutisme', '<img src=''images/Parachutisme.png''>'),
(109, 11, 'Ski de vitesse', '<img src=''images/Skivitesse.png''>');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `departement` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `photoprofile` text,
  `sport1` varchar(255) NOT NULL,
  `niveau1` varchar(255) NOT NULL,
  `sport2` varchar(255) NOT NULL,
  `niveau2` varchar(255) NOT NULL,
  `sport3` varchar(255) NOT NULL,
  `niveau3` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `email`, `departement`, `motdepasse`, `sexe`, `nom`, `prenom`, `age`, `photoprofile`, `sport1`, `niveau1`, `sport2`, `niveau2`, `sport3`, `niveau3`) VALUES
(12, 'Titouille1.0', 'tim280@hotmail.fr', 'Hauts-de-Seine', '$2y$10$PfPPeANlRS57WKxqsfVNPu6mF3/6w7biDeUjYDTwrFS.sCPN6jv4y', 'Homme', 'Delmas', 'Timothee', 22, NULL, '', '', '', '', '', ''),
(13, 'Gonzague', 'gdemons@free.fr', 'Hauts-de-Seine', 'gonz', 'Autre', 'De monts', 'Gonzague', NULL, NULL, '', '', '', '', '', ''),
(14, 'alex', 'alexandre.121095@gmail.com', 'Hauts-de-Seine', 'alex', 'Homme', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(15, 'Louis', 'louispetit@gmail.fr', 'Aisne', 'tamtam', 'Homme', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(16, 'titouille', 'tim240@hotmail.fr', 'Hauts-de-Seine', 'tamtam', 'Homme', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(17, 't', 'ti@hot.fr', 'Aisne', '$2y$10$O8jX6atL7w0LDgmz2gf2n.5aQouDsjvd/VQUSuht5cjiigFdAjC8i', 'Femme', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(18, 'ti', 'a@at.fr', 'Ain', '$2y$10$PfPPeANlRS57WKxqsfVNPu6mF3/6w7biDeUjYDTwrFS.sCPN6jv4y', 'Homme', NULL, NULL, NULL, 'test', '', '', '', '', '', ''),
(19, 'titstou', 'a@hotmail.fr', 'Alpes-de-Haute-Provence', '$2y$10$ISqTmudj0oRq5IxlqSHkO.pAKaQxxLWMh1k5DsLUnBQdxj4oSxHp6', 'Homme', NULL, NULL, NULL, NULL, '', '', '', '', '', ''),
(20, 'tim280', 'timotheedelmas@hotm.fr', 'Ain', '$2y$10$aX/WmKiyLrzBw2PpD.ET2.346tsdzOvDYg8wyQ2CCMaXS91n3pH4i', 'Homme', NULL, NULL, NULL, NULL, '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
