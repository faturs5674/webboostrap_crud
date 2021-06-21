-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 08:13 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_webbootstrap`
--
CREATE DATABASE IF NOT EXISTS `db_webbootstrap` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_webbootstrap`;

-- --------------------------------------------------------

--
-- Table structure for table `t_tabel`
--

CREATE TABLE IF NOT EXISTS `t_tabel` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `jkelamin` varchar(1) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nohp` int(12) DEFAULT NULL,
  `pesan` text NOT NULL,
  `tgl` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `t_tabel`
--

INSERT INTO `t_tabel` (`no`, `nama`, `jkelamin`, `email`, `nohp`, `pesan`, `tgl`) VALUES
(1, 'sdas', 'L', 'asd@sad.con', 9787, 'asd ', '2020-12-22'),
(3, 'sadrina manasikana', 'L', 'sadrina@gmail.com', 2147483647, 'bertamu ', '2020-12-30'),
(5, 'sad', 'P', 'asd@sad.con', 2147483647, 'sadsd dfrtfb', '2021-01-07'),
(6, 'fa', 'L', 'qwe@sad.com', 87543, 'asdfdgf', '2021-01-11'),
(7, 'faturfde', 'P', 'sadrina@gmail.com', 1233467657, 'sadsd ghcv', '2021-01-13'),
(8, 'aderrrrrrr', 'P', 'sda@ad.comjbkj', 2147483647, 'jalan ', '2021-01-14');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
