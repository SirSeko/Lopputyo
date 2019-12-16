-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: 16.12.2019 klo 05:19
-- Palvelimen versio: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kauppa`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `komponentit`
--

CREATE TABLE `komponentit` (
  `id` int(11) NOT NULL,
  `nimi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiedot` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinta` int(11) NOT NULL,
  `alennus` int(11) NOT NULL,
  `kuva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `komponentit`
--

INSERT INTO `komponentit` (`id`, `nimi`, `tiedot`, `hinta`, `alennus`, `kuva`) VALUES
(1, 'RTX 2070', 'Tehokas näytönohjain pelaamiseen!', 600, 550, '/img/rtx.jpg'),
(2, 'Ryzen 7', 'Seuraavan sukupolven prosessori. Pelailuun tai oikeisiin töihin!', 400, 350, '/img/ryzen.jpg'),
(3, 'Intel i5 9900k', 'Tehokas Intelin prosessori kaikilla herkuilla!', 550, 400, '/img/intel.jpg'),
(4, 'Kingston SSD 1tb', 'Uuden sukupolven varastointia, tällä huippunopealla Kingstonin SSD-levyllä!', 100, 80, '/img/kingston.jpg');

-- --------------------------------------------------------

--
-- Rakenne taululle `oheislaitteet`
--

CREATE TABLE `oheislaitteet` (
  `id` int(11) NOT NULL,
  `nimi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiedot` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinta` int(11) NOT NULL,
  `alennus` int(11) NOT NULL,
  `kuva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `oheislaitteet`
--

INSERT INTO `oheislaitteet` (`id`, `nimi`, `tiedot`, `hinta`, `alennus`, `kuva`) VALUES
(1, 'Acer 27 tuuman pelinäyttö', 'QHD-resoluutiolla varusteltu huippunäyttö!', 450, 350, '/img/acer.jpg'),
(2, 'Logitech G402 pelihiiri', 'RGB-valoilla varusteltu pelihiiri säädettävällä DPI:llä', 100, 65, '/img/logitech.jpg'),
(3, 'CoolerMaster näppäimistö', 'Tästä RGB-valoilla varusteltu pelinäppäimistö vihujen pwnaamiseen!', 120, 75, '/img/coolermaster.jpg'),
(4, 'HyperX kuulokkeet', 'HyperX kuulokkeet jotta kuulisin sinut paremmin!', 99, 50, '/img/hyperx.jpg');

-- --------------------------------------------------------

--
-- Rakenne taululle `tietokoneet`
--

CREATE TABLE `tietokoneet` (
  `id` int(11) NOT NULL,
  `nimi` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiedot` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinta` int(11) NOT NULL,
  `alennus` int(11) NOT NULL,
  `kuva` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Vedos taulusta `tietokoneet`
--

INSERT INTO `tietokoneet` (`id`, `nimi`, `tiedot`, `hinta`, `alennus`, `kuva`) VALUES
(1, 'MacBook Pro', 'Tästä turhin läppäri ikinä!', 5000, 4999, '/img/macbook.jpg'),
(2, 'Razer Blade', 'Ohuen ohut Razer Blade läppäri töihin ja pelaamiseen', 2500, 2300, '/img/razer.jpg'),
(3, 'HP Elitebook', 'Tästä tehokas läppäri toimitohommiin!', 1500, 1400, '/img/hpe.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komponentit`
--
ALTER TABLE `komponentit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oheislaitteet`
--
ALTER TABLE `oheislaitteet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tietokoneet`
--
ALTER TABLE `tietokoneet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komponentit`
--
ALTER TABLE `komponentit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oheislaitteet`
--
ALTER TABLE `oheislaitteet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tietokoneet`
--
ALTER TABLE `tietokoneet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
