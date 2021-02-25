-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 10:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbg34merengue8688`
--

-- --------------------------------------------------------

--
-- Table structure for table `exponentes`
--

CREATE TABLE `exponentes` (
  `id_exponentes` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exponentes`
--

INSERT INTO `exponentes` (`id_exponentes`, `nombre`, `descripcion`, `genero`, `foto`) VALUES
(1, 'Rubby Perez', 'Roberto Antonio Pérez Herrera (Haina, República Dominicana, 8 de marzo de 1956), mejor conocido como Rubby Pérez, es un cantante de merengue dominicano, denominado como \"La voz más alta del merengue\". Ha tomado su nombre y apellido de dos grandes íconos de dicho género musical, Roberto Antonio y Edd', 'Merengue Clasico', 'img/unnamed-3.jpg'),
(2, 'Omega el Fuerte', 'Antonio Peter De la Rosa [a] (nacido el 17 de enero de 1979) más conocido por su nombre artístico Omega \"El Fuerte\" o simplemente Omega , es un cantante y compositor dominicano. Es un artista merengue moderno radicado en Santo Domingo , República Dominicana.', 'Merengue de Calle', 'img/202009091310071.jpeg'),
(3, 'Fefita La Grande', 'Manuela Josefa Cabrera Tavares (San José, Santiago Rodríguez, 18 de septiembre de 1943),1​ conocida como Fefita La Grande, es una acordeonista dominicana y la más reconocida intérprete femenina del merengue típico, una variación más rural del merengue, principal género musical de la República Domini', 'Merengue Tipico', 'img/f21be837cd87289b7ab414a1ba518330_XL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallery`
--

CREATE TABLE `photo_gallery` (
  `id` int(11) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo_gallery`
--

INSERT INTO `photo_gallery` (`id`, `foto`, `descripcion`) VALUES
(1, 'foto/1.jpg', 'baile tipico'),
(2, 'foto/2.jpg', 'baile tipico'),
(3, 'foto/3.jpg', 'Musicos'),
(4, 'foto/4.jpg', 'Musicos'),
(5, 'foto/5.jpg', 'Baile tipico'),
(6, 'foto/6.jpg', 'Baile tipico');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exponentes`
--
ALTER TABLE `exponentes`
  ADD PRIMARY KEY (`id_exponentes`);

--
-- Indexes for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exponentes`
--
ALTER TABLE `exponentes`
  MODIFY `id_exponentes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photo_gallery`
--
ALTER TABLE `photo_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
