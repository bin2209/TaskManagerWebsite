-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Ven 29 Décembre 2017 à 14:58
-- Version du serveur: 5.6.11
-- Version de PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blog_admin_db`
--
CREATE DATABASE IF NOT EXISTS `blog_admin_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blog_admin_db`;

-- --------------------------------------------------------

--
-- Structure de la table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `imageid` int(11) NOT NULL AUTO_INCREMENT,
  `filename` varchar(200) NOT NULL,
  PRIMARY KEY (`imageid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Contenu de la table `upload`
--

INSERT INTO `upload` (`imageid`, `filename`) VALUES
(43, '1514530144_rose.jpeg'),
(44, '1514530144_sunflower.jpg'),
(45, '1514555322_fb.jpg'),
(46, '1514555593_1514530144_idontknow.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
