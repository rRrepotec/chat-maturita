-- phpMyAdmin SQL Dump
-- version 2.11.11.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: 11 Giu, 2013 at 08:10 PM
-- Versione MySQL: 5.1.58
-- Versione PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_chatmaturita`
--
CREATE DATABASE `my_chatmaturita` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my_chatmaturita`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Chat`
--

CREATE TABLE IF NOT EXISTS `Chat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` char(20) NOT NULL,
  `Messaggio` char(200) NOT NULL,
  `Data` date NOT NULL,
  `Ora` time NOT NULL,
  `Time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=205 ;

--
-- Dump dei dati per la tabella `Chat`
--

INSERT INTO `Chat` (`id`, `Nome`, `Messaggio`, `Data`, `Ora`, `Time`) VALUES
(204, 'aleksandar', 'weù', '2013-06-11', '18:19:14', 1370967554),
(203, 'aleksandar', 'we', '2013-06-03', '17:06:57', 1370272017),
(202, '', 'wee', '2013-06-03', '17:06:42', 1370272002),
(201, 'sic', 'sono sicci micky', '2013-05-27', '10:43:52', 1369644232),
(200, 'sic', 'abbasso la figa', '2013-05-27', '10:43:48', 1369644228),
(199, 'sic', 'w apple', '2013-05-27', '10:43:46', 1369644226),
(198, 'sic', 'buuuuu', '2013-05-27', '10:43:38', 1369644218),
(197, 'sic', 'brutto questo sito', '2013-05-27', '10:43:36', 1369644216),
(196, 'sic', '8==============================D', '2013-05-27', '10:43:09', 1369644189),
(195, 'sic', 'sono sicci', '2013-05-27', '10:42:38', 1369644158),
(194, 'sic', 'ciao', '2013-05-27', '10:42:34', 1369644154),
(193, 'belzebu', 'porcaccio', '2013-05-23', '10:32:31', 1369297951),
(192, 'ste', 'ajoooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', '2013-05-23', '10:29:52', 1369297792),
(191, 'ste', 'beeella', '2013-05-23', '10:29:30', 1369297770),
(190, 'lollamelo', 'che sbatti', '2013-05-23', '10:17:59', 1369297079),
(189, 'a''', 'we', '2013-05-23', '10:17:12', 1369297032),
(188, 'lollamelo', 'coglione', '2013-05-23', '10:11:53', 1369296713),
(187, 'a''', '&&', '2013-05-21', '15:36:43', 1369143403),
(186, 'a''', 'a''', '2013-05-21', '15:36:20', 1369143380),
(185, 'a''', 'awe', '2013-05-21', '15:36:17', 1369143377),
(184, 'aleksandar', 'we', '2013-05-21', '10:08:06', 1369123686),
(183, 'aleksandar', 'we', '2013-05-21', '10:08:01', 1369123681),
(182, 'aleksandar', '', '2013-05-20', '18:44:14', 1369068254);

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE IF NOT EXISTS `utente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(40) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `tipo` char(1) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `nick`, `mail`, `pass`, `tipo`, `time`) VALUES
(17, 'aleksandar', 'aleks@me.com', '4e48d1b9f8459c5672533fb2c5456cc2', 'a', 1370967549),
(66, 'a''', 'a@me.com', '4517733dbc1ead9809f91cb9115e1b48', 'u', 1369297026),
(60, 'teo', 'teo_il_tecktoniko@hotmail.it', 'e827aa1ed78e96a113182dce12143f9f', 'u', 1369044584),
(64, 'Anonimo', 'odpcjnisdopjcosdp@diocane.it', 'e10adc3949ba59abbe56e057f20f883e', 'u', 0),
(65, 'lollamelo', 'kddk@asda.com', 'e10adc3949ba59abbe56e057f20f883e', 'u', 1369296685),
(67, 'ste', 'ste@ste.ste', 'e10adc3949ba59abbe56e057f20f883e', 'u', 1369297764),
(68, 'belzebu', 'dio@mosca.com', 'd3e863b4c91bff6d3a274e923e9e5968', 'u', 1369297946);
