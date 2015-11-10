-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2015 at 03:00 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autocomplete`
--

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `firstname`, `lastname`) VALUES
(1, 'Jeff', 'Tagen'),
(2, 'Travis', 'Thurston'),
(3, 'Kyle', 'Lysobey'),
(4, 'Patrick', 'Rice'),
(5, 'Craig', 'Nelson'),
(6, 'Deana', 'Marzocchi'),
(7, 'Frank', 'Tweedie'),
(8, 'Nick', 'LaManna'),
(9, 'Julie', 'Tagliaferie');
