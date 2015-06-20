-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2014 at 04:01 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ruetcafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `Name` varchar(50) default NULL,
  `Email` text,
  `Comments` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Comments`) VALUES
('akash', 'nahiduzzaman@gmail.com', 'HRY UP'),
('akash', 'nahiduzzaman@gmail.com', 'HRY UP'),
('', '', ''),
('', '', ''),
('tendulkar', 'HASINA@gmail.com', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj'),
('aaaaaaaaaaaax', 'xxxxxxxxxxx', 'xxxxxxxxxxxxxxrrrrrrrrrrrrrrrrrrrr');

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE IF NOT EXISTS `customerorder` (
  `Date` varchar(50) NOT NULL,
  `Time` varchar(50) NOT NULL,
  `Name` text NOT NULL,
  `Address` varchar(250) NOT NULL,
  `ProductID` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `RoomNo` varchar(255) NOT NULL,
  `Mobile` varchar(50) NOT NULL,
  `Hall` varchar(255) NOT NULL,
  `Extras` text NOT NULL,
  `Foods` varchar(255) NOT NULL,
  `Bmobile` varchar(50) NOT NULL,
  `TrxID` varchar(50) NOT NULL,
  `Bill` varchar(50) NOT NULL,
  `NOP` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='For Customer Order details';

--
-- Dumping data for table `customerorder`
--

INSERT INTO `customerorder` (`Date`, `Time`, `Name`, `Address`, `ProductID`, `Email`, `RoomNo`, `Mobile`, `Hall`, `Extras`, `Foods`, `Bmobile`, `TrxID`, `Bill`, `NOP`) VALUES
('2014-02-01', '18:10:00', '', '', 'Example: B1,L1,W3 etc.', '', '', '', '', '', '', '', '', '', ''),
('2014-01-30', '23:48:53', 'Nahiduzzaman Rose', 'terokhadia,uttorpara', 'l1l2l6', 'nahiduzzaman@gmail.com', '', '01736675869', 'others', 'catalog', 'Lunch', '0184568898', '6000000000', '60', '3'),
('2014-01-30', '23:39:38', 'asique', 'laxmipur\r\ncnb more\r\nhouse no: 667/4', 'b1b3', 'asique@yahoo.com', '', '01745634256', 'selim', 'giftwrap', 'Breakfast', '01878766766', '8787665467665', '59', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(25) NOT NULL auto_increment,
  `Username` varchar(65) NOT NULL,
  `Password` varchar(32) NOT NULL,
  `EmailAddress` varchar(255) NOT NULL,
  PRIMARY KEY  (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Password`, `EmailAddress`) VALUES
(1, 'tendulkar', '81dc9bdb52d04dc20036dbd8313ed055', 'rose@yahoo.com');
