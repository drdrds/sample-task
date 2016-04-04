-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Apr 03, 2016 at 10:42 PM
-- Server version: 5.6.29
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `drdscott_sample`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `depth` tinyint(11) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `parent_id`, `depth`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'Car', '15000.00', '2016-04-02 14:34:30', '2016-04-02 16:06:32'),
(2, 1, 1, 'Wheels', '800.00', '2016-04-02 14:36:29', '2016-04-02 14:55:06'),
(3, 0, 0, 'Airplane', '200000.00', '2016-04-02 14:37:45', '2016-04-02 16:06:45'),
(4, 3, 0, 'Wing', '100000.00', '2016-04-02 14:40:09', '0000-00-00 00:00:00'),
(5, 3, 0, 'Fuselage', '100000.00', '2016-04-02 14:41:22', '2016-04-02 14:42:57'),
(6, 4, 0, 'Winglet', '10000.00', '2016-04-02 14:43:27', '0000-00-00 00:00:00'),
(7, 4, 0, 'Turbine Engine', '500000.00', '2016-04-02 14:43:54', '0000-00-00 00:00:00'),
(8, 4, 0, 'Flaps', '8000.00', '2016-04-02 14:44:29', '0000-00-00 00:00:00'),
(9, 0, 0, 'Yacht', '400000.00', '2016-04-02 14:45:18', '2016-04-02 16:07:08'),
(10, 9, 0, 'Mast', '50000.00', '2016-04-02 14:48:17', '0000-00-00 00:00:00'),
(11, 9, 0, 'Galley', '20000.00', '2016-04-02 14:49:05', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
