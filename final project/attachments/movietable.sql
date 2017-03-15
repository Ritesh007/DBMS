-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2014 at 12:19 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `movietable`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinifareticket`
--

CREATE TABLE IF NOT EXISTS `cinifareticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinifareticket`
--

INSERT INTO `cinifareticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cinimarketticket`
--

CREATE TABLE IF NOT EXISTS `cinimarketticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinimarketticket`
--

INSERT INTO `cinimarketticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cinimarkticket`
--

CREATE TABLE IF NOT EXISTS `cinimarkticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinimarkticket`
--

INSERT INTO `cinimarkticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 0, 0, 0, 1, 0, 0, 0, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cinipoliceticket`
--

CREATE TABLE IF NOT EXISTS `cinipoliceticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinipoliceticket`
--

INSERT INTO `cinipoliceticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `uname` varchar(20) NOT NULL,
  `upass` varchar(20) NOT NULL,
  `mail` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `phoneno` int(20) NOT NULL,
  `securityQ` varchar(100) NOT NULL,
  `ans` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`uname`, `upass`, `mail`, `address`, `city`, `state`, `country`, `phoneno`, `securityQ`, `ans`, `type`) VALUES
('admin', 'admin1', 'admin@gmail.com', '209 emauel cleaver blvd plaza towers apt # 103', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur School Name', 'name1', 'cust'),
('alkheya', 'user3', 'alk@gmail.com', '209 emauel cleaver blvd plaza towers apt # 100', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur School Name', 'name', 'cust'),
('jeevana', 'maru2', 'jeeju2126@gmail.com', '209 emauel cleaver blvd plaza towers apt # 103', 'kansas', 'missouri', 'missouri', 2147483647, 'What is ur Pet Name', 'doggy', 'cust'),
('keerthi', 'keerthi', 'keer@gmail.com', '209 emauel cleaver blvd plaza towers apt # 105', 'kansas', 'missouri', 'usa', 2032186949, 'What is ur fav thing', 'siddhu', 'cust'),
('manavi', 'manu1', 'manavi@gmail.com', '209 emauel cleaver blvd plaza towers apt # 105', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur School Name', 'modern', 'cust'),
('maruthi', 'jeeju', 'maruthi@gmail.com', '209 emauel cleaver blvd plaza towers apt # 505', 'kansas', 'missouri', 'usa', 2032186949, 'What is ur fav thing', 'jeeju', 'cust'),
('mounica', 'user1', 'mounica@gmail.com', '209 emauel cleaver blvd plaza towers apt # 103', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur fav food', 'everthing', 'cust'),
('ramya', 'user3', 'ramya@gmail.com', '209 emauel cleaver blvd plaza towers apt # 602', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur fav food', 'choco', 'cust'),
('sindhu', 'user1', 'sindhu@gmail.com', '4920 apt #3', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur Pet Name', 'rocky', 'cust'),
('sowmya', 'user2', 'sowmya@gmail.com', 'homes apt#1', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur School Name', 'school', 'cust'),
('sruthi', 'user1', 'sru@gmail.com', '209 emauel cleaver blvd plaza towers apt # 108', 'kansas', 'missouri', 'usa', 2147483647, 'What is ur School Name', 'school', 'cust'),
('sujitha', 'sujitha', 'sujitha@gmail.com', '4920 apt #3', 'kansas', 'missouri', 'usa', 1234567890, 'What is ur Pet Name', 'suji', 'cust');

-- --------------------------------------------------------

--
-- Table structure for table `moviefareticket`
--

CREATE TABLE IF NOT EXISTS `moviefareticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moviefareticket`
--

INSERT INTO `moviefareticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `theater` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `fare` varchar(10) NOT NULL,
  `movie` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `theater`, `area`, `fare`, `movie`) VALUES
(1, 'cinimark', 'kansas', '10', 'gatsby'),
(2, 'cinimarket', 'kansas', '20', 'robocop'),
(3, 'cinipolice', 'kansas', '15', 'noah'),
(4, 'cinimarket', 'kansas', '10', 'spiderman5'),
(5, 'cinimark', 'columbia', '20', 'noah'),
(6, 'cinipolice', 'kansas', '15', '2 states'),
(7, 'cinimark', 'st.louis', '20', 'carrie'),
(8, 'cinimark', 'kansas', '20', 'godzilla'),
(9, 'cinimark', 'kansas', '15', 'capitan american'),
(10, 'cinipolice', 'kansas', '30', 'one by two'),
(11, 'cinimark', 'kansas', '10', 'gatsby'),
(12, 'cinipolice', 'kansas', '15', 'noah'),
(13, 'cinimarket', 'kansas', '20', 'robocop'),
(14, 'cinifare', 'stlouis', '12', 'robocop'),
(15, 'moviefare', 'kansas', '6', 'carrie'),
(16, 'showtime', 'columbia', '10', 'bangbing');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news`, `date`) VALUES
('gatsby movie will be played till sunday', '2014-03-04'),
('spiderman5 will be releasing on may 2', '2014-04-23'),
('goodzilla will be releasing on may 16 ', '2014-04-23'),
('2 sates movie has great openings', '2014-04-16'),
('cinipolice theater closed', '2014-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `uname` varchar(20) NOT NULL,
  `movie` varchar(20) NOT NULL,
  `review` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`uname`, `movie`, `review`, `date`) VALUES
('sujitha', 'gatsby', 'ds', '2014-04-01'),
('sujitha', 'noah', 'good one', '2014-04-24'),
('sindhu', 'noah', 'ok fine,can be watched once', '2014-04-15'),
('sowmya', '2 states', 'average', '2014-04-20'),
('maruthi', '2 states', 'good one', '2014-04-20'),
('keerthi', '2 states', 'good one', '2014-04-21'),
('jeevana', '2 states', 'good one', '2014-04-24'),
('jeevana', 'gatsby', 'average movie', '2014-04-24');

-- --------------------------------------------------------

--
-- Table structure for table `showtimeticket`
--

CREATE TABLE IF NOT EXISTS `showtimeticket` (
  `date` date NOT NULL,
  `time` int(2) NOT NULL,
  `1` int(5) NOT NULL,
  `2` int(5) NOT NULL,
  `3` int(5) NOT NULL,
  `4` int(5) NOT NULL,
  `5` int(5) NOT NULL,
  `6` int(5) NOT NULL,
  `7` int(5) NOT NULL,
  `8` int(5) NOT NULL,
  `9` int(5) NOT NULL,
  `10` int(5) NOT NULL,
  `11` int(5) NOT NULL,
  `12` int(5) NOT NULL,
  `13` int(5) NOT NULL,
  `14` int(5) NOT NULL,
  `15` int(5) NOT NULL,
  `16` int(5) NOT NULL,
  `17` int(5) NOT NULL,
  `18` int(5) NOT NULL,
  `19` int(5) NOT NULL,
  `20` int(5) NOT NULL,
  PRIMARY KEY (`date`,`time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `showtimeticket`
--

INSERT INTO `showtimeticket` (`date`, `time`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`, `10`, `11`, `12`, `13`, `14`, `15`, `16`, `17`, `18`, `19`, `20`) VALUES
('2014-04-28', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-28', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-29', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 6, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 9, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('2014-04-30', 11, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
