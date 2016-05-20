-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 01 Mai 2016 à 20:19
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id`, `nom`, `sport`, `nombre_de_membres`, `id_region`, `departement`, `description`) VALUES
(29, 'Les footeux de boulogne', 'Foot', 12, 12, 'Haut de seine', 'Salut à tous, \nCe groupe a pour but de permettre aux sportifs de se donner rendez-vous dans les haut de Seine pour des petits matchs le week-end.'),
(30, 'Les rugbymans du 03', 'Rugby', 20, 3, 'Allier', 'Hey what''s up les potes j''ai décidé de créer ce groupe pour organiser des petites rencontres de rugby.Et pourquoi pas allez boire un verre tous ensemble après .'),
(31, 'Handballeur de Vaureal', 'Handball', 10, 12, 'Val-d''Oise', 'C''est l''association de tous ceux qui font parti de la grande famille du handball . Le but est de vulgariser le hand et permettre à se sport de retrouver son lustre datant.'),
(34, 'Les skieurs ', 'Ski alpin', 10, 2, 'Gironde', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\n		    	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(39, 'ski', 'Football', 13, 3, 'Cantal', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n		    	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\n		    	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\n		    	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\n		    	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(40, 'bobo', 'foot', 22, 3, 'Haute-Loire', 'hey what''s up les potes\r\ndfsdfwx\r\ndfsdfd\r\ndf'),
(41, 'rrrrrrr', 'handball', 13, 5, 'Cï¿½te-d''Or', 'rttetetete'),
(42, 'seffr', 'rugby', 8, 4, 'Manche', 'efinefqefqs\r\nefqsfqs\r\nf\r\nqsfsq\r\nfsq\r\nfs\r\nfs\r\nf'),
(43, 'SSD', 'foot', 4, 1, 'Bas-Rhin', 'DXQCDC'),
(44, 'SSD', 'foot', 4, 6, 'Cï¿½tes-d''Armor', 'DXQCDC'),
(45, 'SSD', 'foot', 4, 1, 'Bas-Rhin', 'DXQCDC'),
(46, 'SSD', 'foot', 4, 2, '----Departement-----', 'DXQCDC'),
(47, 'test', 'foot', 9, 1, 'Bas-Rhin', 'heysqfsqfqfqc\r\ndsqqsfsq\r\nsqfsq'),
(48, 'bob', 'foot', 14, 2, 'Dordogne', 'salut test'),
(49, 'Test2', 'foot', 8, 3, 'Cantal', 'tatata'),
(50, 'tataland', 'handball', 8, 2, 'Dordogne', 'taland'),
(51, 'ti', 'foot', 8, 2, 'Dordogne', 'rtgsdgeztg'),
(52, 'tim', 'Aviation', 5, 5, 'Niï¿½vre', 'pilote'),
(53, 'test', 'Ski alpin', 4, 1, 'Haut-Rhin', 'rstesdt');

-- --------------------------------------------------------

--
-- Structure de la table `groupeuser`
--

CREATE TABLE IF NOT EXISTS `groupeuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membre` int(11) NOT NULL,
  `id_groupe` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `groupeuser`
--

INSERT INTO `groupeuser` (`id`, `id_membre`, `id_groupe`) VALUES
(1, 2, 34),
(2, 2, 31),
(3, 0, 46),
(4, 1, 6),
(7, 1, 39),
(8, 1, 34),
(10, 1, 31);

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
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `photoprofile` text NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `pseudo` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `ville`, `motdepasse`, `age`, `photoprofile`, `sexe`, `pseudo`) VALUES
(1, 'delmas', 'timothee', 'tim280@hotmail.fr', 'issy', 'tamtam', 22, '', '', 'titouille'),
(3, 'titouille', '', '', '', '', 0, '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
