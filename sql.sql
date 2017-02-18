-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 18, 2017 at 09:45 PM
-- Server version: 5.5.54-cll
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manzoors_scoreboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `hfirst` int(11) DEFAULT NULL,
  `hsecond` int(11) DEFAULT NULL,
  `hthird` int(11) DEFAULT NULL,
  `pfirst` varchar(40) DEFAULT NULL,
  `psecond` varchar(40) DEFAULT NULL,
  `pthird` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `hfirst`, `hsecond`, `hthird`, `pfirst`, `psecond`, `pthird`) VALUES
(15, 'FILM REVIEW', 2, 2, 2, 'SREEJITH S NAIR', 'SWARAJ SUGUNAN', 'LUCKOSE WILSON'),
(16, 'SHORT STORY (MALAYALAM)', 4, 3, 2, 'LISHAMIL LUCKOSE', 'AKHILA NELSON', ''),
(17, 'PAPER COLLAGE', 3, 2, 2, 'ARJUN HARIDAS', 'RINU ANTONY', 'SHEFEEK TT'),
(18, 'SHORT STORY(ENGLISH)', 2, 4, 4, 'JOSNA P JOSE', 'SEETHALAKSHMI', 'RANI'),
(19, 'CARTOON DRAWING', 4, 4, 0, 'JERIN ', 'JOMITH DEVASYA', ''),
(20, 'FOLK DANCE(GIRLS)', 4, 2, 0, 'RAGHY A R', 'ASHWATHY RAJENDRAN', ''),
(21, 'FOLK DANCE(BOYS)', 3, 0, 0, 'SUBIN  M K', '', ''),
(22, 'BEST MANAGER', 2, 3, 4, 'VINEETH JAMES', 'BINNU  KURIYAN', 'ATHIRA KIRAN');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('sarang2k16', 'ubnavig');

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

CREATE TABLE IF NOT EXISTS `scoreboard` (
  `id` int(11) NOT NULL,
  `titans` int(11) DEFAULT NULL,
  `arcadians` int(11) DEFAULT NULL,
  `roadians` int(11) DEFAULT NULL,
  `spartans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`id`, `titans`, `arcadians`, `roadians`, `spartans`) VALUES
(1, 188, 121, 164, 178);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('sarang2k16', 'ubnavig');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
