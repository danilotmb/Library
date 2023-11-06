-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u9
-- http://www.phpmyadmin.net
--
-- Host: mysql.next-data.net
-- Generation Time: Ott 26, 2023 alle 14:05
-- Versione del server: 10.3.31-MariaDB-0+deb10u1
-- PHP Version: 5.6.40-0+deb8u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `www_wpschool_it`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `tambone_libri`
--

CREATE TABLE IF NOT EXISTS `tambone_libri` (
`ID` int(11) NOT NULL,
  `Titolo` varchar(255) NOT NULL,
  `Autore` varchar(255) DEFAULT NULL,
  `Genere` varchar(50) DEFAULT NULL,
  `AnnoPubblicazione` int(11) DEFAULT NULL,
  `ISBN` varchar(13) DEFAULT NULL,
  `AltreInformazioni` text DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `tambone_libri`
--

INSERT INTO `tambone_libri` (`ID`, `Titolo`, `Autore`, `Genere`, `AnnoPubblicazione`, `ISBN`, `AltreInformazioni`) VALUES
(1, 'Ciao', 'Io', 'Prova', 2023, '1234567', 'prova'),
(2, 'Prova', 'Danilo', 'Prova', 2023, '6789', 'Prova secondo libro'),
(3, 'Prova', 'Io', 'Prova', 2002, '13579', 'ciao'),
(4, 'j', 'j', 'h', 999, '9', 'h');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tambone_libri`
--
ALTER TABLE `tambone_libri`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tambone_libri`
--
ALTER TABLE `tambone_libri`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
