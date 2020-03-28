-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2020 at 04:37 PM
-- Server version: 5.6.45-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdtmozeta_capstone_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds`
--

CREATE TABLE `breeds` (
  `Bre_id` int(11) DEFAULT NULL,
  `Bre_name` varchar(50) DEFAULT NULL,
  `Bre_code` char(3) DEFAULT NULL,
  `image` text,
  `age` int(11) DEFAULT NULL,
  `weight` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `breeds`
--

INSERT INTO `breeds` (`Bre_id`, `Bre_name`, `Bre_code`, `image`, `age`, `weight`) VALUES
(1, 'Labrador Retriever', 'lab', 'lab.jpg', 13, 75),
(2, 'German Shepherd', 'gmn', 'gmn.jpg', 12, 82.5),
(3, 'Golden Retriever', 'gld', 'gld.jpg', 13, 72.5),
(4, 'French Bulldog', 'fbd', 'fbd.jpg', 9, 27),
(5, 'English Bulldog', 'ebd', 'ebd.jpg', 8, 50),
(6, 'Beagle', 'bgl', 'bgl.jpg', 13, 27.5),
(7, 'Poodle', 'pdl', 'pdl.jpg', 12, 67.5),
(8, 'Rottweiler', 'rtw', 'rtw.jpg', 9, 125),
(9, 'German Shorthaired Pointer', 'gsp', 'gsp.jpg', 12, 67.5),
(10, 'Yorkshire Terrier', 'yst', 'yst.jpg', 13, 7),
(11, 'Boxer', 'bxr', 'bxr.jpg', 11, 76.5),
(12, 'Dachshunds', 'dcs', 'dcs.jpg', 13, 26),
(13, 'Pembroke Welsh Corgi', 'pwc', 'pwc.jpg', 13, 28),
(14, 'Siberian Husky', 'sbh', 'sbh.jpg', 13, 56.5),
(15, 'Australian Shepherd', 'aus', 'aus.jpg', 9, 60),
(16, 'Great Dane', 'gtd', 'gtd.jpg', 7, 165),
(17, 'Doberman Pinscher', 'dbp', 'dbp.jpg', 11, 92.5),
(18, 'Cavalier King Charles Spaniel', 'ckc', 'ckc.jpg', 12, 16.5),
(19, 'Miniature Schnauzer', 'mts', 'mts.jpg', 13, 16.5),
(20, 'Shih Tzu', 'sht', 'sht.jpg', 14, 14),
(21, 'Boston Terrier', 'btr', 'btr.jpg', 11, 20),
(22, 'Bernese Mountain Dog', 'bmd', 'bmd.jpg', 8, 107.5),
(23, 'Pomeranian', 'pmr', 'pmr.jpg', 10, 6),
(24, 'Havanese', 'hvn', 'hvn.jpg', 11, 11.5),
(25, 'Shetland Sheepdog', 'ssd', 'ssd.jpg', 13, 22),
(26, 'Brittany', 'brt', 'brt.jpg', 13, 37.5),
(27, 'English Springer Spaniel', 'ess', 'ess.jpg', 12, 50),
(28, 'Pug', 'pug', 'pug.jpg', 11, 17.5),
(29, 'Mastiff', 'msf', 'msf.jpg', 7, 215),
(30, 'Cocker Spaniel', 'cks', 'cks.jpg', 12, 55);

-- --------------------------------------------------------

--
-- Table structure for table `connect_bd`
--

CREATE TABLE `connect_bd` (
  `Bre_id` int(11) DEFAULT NULL,
  `Dis_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `connect_bp`
--

CREATE TABLE `connect_bp` (
  `Bre_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `connect_dp`
--

CREATE TABLE `connect_dp` (
  `Dis_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `connect_ds`
--

CREATE TABLE `connect_ds` (
  `Dis_id` int(11) DEFAULT NULL,
  `Sym_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `connect_sp`
--

CREATE TABLE `connect_sp` (
  `Sym_id` int(11) DEFAULT NULL,
  `Prob_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `Dis_id` int(11) DEFAULT NULL,
  `Dis_name` varchar(50) DEFAULT NULL,
  `Dis_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `Prob_id` int(11) DEFAULT NULL,
  `Prob_name` varchar(50) DEFAULT NULL,
  `Prob_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `Sym_id` int(11) DEFAULT NULL,
  `Sym_name` varchar(50) DEFAULT NULL,
  `Sym_code` char(3) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
