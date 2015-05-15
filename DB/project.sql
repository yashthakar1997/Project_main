-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2015 at 05:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cafes`
--

CREATE TABLE IF NOT EXISTS `cafes` (
  `name` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `location_lat` double NOT NULL,
  `location_lon` double NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cafes`
--

INSERT INTO `cafes` (`name`, `city`, `location_lat`, `location_lon`, `created_at`, `updated_at`) VALUES
('MoMo Café - Courtyard By Marriott', 'ahmedabad', 23.027821, 72.512148, 0, 0),
('Agashiye - The House Of MG\n', 'ahmedabad', 23.027074, 72.581656, 0, 0),
('The Square - Hotel Novotel\n', 'ahmedabad', 23.024155, 72.507073, 0, 0),
('Collage - Hyatt\n', 'ahmedabad', 23.039488, 72.531197, 0, 0),
('Timpani - Radisson Blu\n', 'ahmedabad', 23.023071, 72.557077, 0, 0),
('Nonya - Hyatt\n', 'ahmedabad', 23.039651, 72.530809, 0, 0),
('cozy restursnt', 'visnagar', 23.602567, 72.366762, 0, 0),
('happy hours', 'visnagar', 23.6885195, 72.5457139, 0, 0),
('red chilly', 'visnagar', 23.7119268, 72.546984, 0, 0),
('Vault Café', 'delhi', 28.631152, 77.219817, 0, 0),
('cozy restursnt', 'mehsana', 23.6022502, 72.3687096, 0, 0),
('Udipi Restaurent', 'mehsana', 23.6078147, 72.3746534, 0, 0),
('Shekhar Bhai Tea Store', 'kerva,mehsana', 23.5408132, 72.4385852, 0, 0),
('WelCome Dal Bati', 'mehsana', 23.5649632, 72.4264294, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE IF NOT EXISTS `counter` (
  `hit` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`hit`) VALUES
(574);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `ReEmail` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Conformpassword` varchar(30) NOT NULL,
  `Birthdate` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1132 ;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `Email`, `ReEmail`, `Password`, `Conformpassword`, `Birthdate`, `Location`) VALUES
(1126, 'jaimin', 'jai@abc.com', 'jai@abc.com', 'jai', 'jai', '4-6-1997', 'ahmedabad'),
(1127, 'yash thakar', 'yashthakar1997@gmail.com', 'yashthakar1997@gmail.com', 'yash1997', 'yash1997', '7-1-1997', 'mehsana'),
(1, 'yashthakar', 'yash@gmail.com', 'yash@gmail.com', 'yas', 'yash', '7-1-1997', 'mehsana'),
(1123, 'jaimin', 'jai@abc.com', 'jai@abc.com', 'jai', 'jai', '4-6-1997', 'ahmedabad'),
(1128, 'ket', 'ahsc', 'kbdc', '123456', '123456', 'gkk', 'kjb'),
(1129, 'yash thakar', 'yashthakar1997@gmail.com', 'yashthakar1997@gmail.com', 'yash1997', 'yash1997', '7-1-1997', 'India'),
(1130, 'Dhaval', 'dhavalthakar74@gmail.com', 'dhavalthakar74@gmail.com', 'tuntun', 'tuntun', '10111991', 'Mehsana'),
(1131, 'yash', 'yashthakar1997@gmail.com', 'yashthakar1997@gmail.com', 'yash', 'yash', 'yash', 'India');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
