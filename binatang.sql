-- phpMyAdmin SQL Dump
-- version 3.5.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 25, 2013 at 11:01 AM
-- Server version: 5.5.29
-- PHP Version: 5.3.20

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `internet3`
--

-- --------------------------------------------------------

--
-- Table structure for table `binatang`
--

CREATE TABLE IF NOT EXISTS `binatang` (
  `binatang_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ordo` varchar(20) NOT NULL,
  `habitat` varchar(20) NOT NULL,
  PRIMARY KEY (`binatang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `binatang`
--

INSERT INTO `binatang` (`binatang_id`, `id`, `nama`, `ordo`, `habitat`) VALUES
(16, '23', 'Buaya', 'Reptil', 'Darat'),
(17, '42', 'Bebek', 'Aves', 'Air'),
(18, '44', 'Kecoa', 'Reptil', 'Air'),
(19, '74', 'Ikan', 'Apodes', 'Air');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
