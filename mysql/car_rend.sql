-- phpMyAdmin SQL Dump
-- version 4.3.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 03:04 PM
-- Server version: 5.6.23
-- PHP Version: 5.6.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `car_rend`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(10) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `reg_num` varchar(255) NOT NULL,
  `horse_power` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `reg_num`, `horse_power`, `color`) VALUES
(1, 'trabant', 'trabant', 'V123BV', '50', 'grey'),
(2, 'BWM', 'X4', 'V567GQ', '100', 'black'),
(3, 'BWM', 'X3', 'V511BK', '85', 'white'),
(4, 'AUDI', 'A4', 'V167QL', '100', 'white'),
(5, 'skoda', 'skoda', 'V695AP', '50', 'yellow'),
(7, 'Fiat', 'Polo', 'V783QL', '70', 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(10) unsigned NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(3) DEFAULT NULL,
  `license_category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `age`, `license_category`) VALUES
(1, 'George', 'Washintong', 55, 'B'),
(2, 'Nikola', 'Petrov', 15, 'C'),
(3, 'Mihail', 'Danailov', 25, 'B'),
(4, 'Mitko', 'Lubenov', 31, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `clients_cars`
--

CREATE TABLE IF NOT EXISTS `clients_cars` (
  `clients_id` int(10) unsigned NOT NULL,
  `cars_id` int(10) unsigned NOT NULL DEFAULT '0',
  `rent_date` date NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients_cars`
--

INSERT INTO `clients_cars` (`clients_id`, `cars_id`, `rent_date`, `return_date`) VALUES
(1, 1, '2015-02-01', '2015-04-03'),
(1, 2, '2015-02-01', '2015-03-31'),
(1, 3, '2015-03-30', '2015-05-01'),
(1, 4, '2015-04-01', '2015-04-02'),
(2, 7, '2015-01-01', '2016-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients_cars`
--
ALTER TABLE `clients_cars`
  ADD PRIMARY KEY (`clients_id`,`cars_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
