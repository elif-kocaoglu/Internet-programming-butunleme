-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 02:51 PM
-- Server version: 8.0.28
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eticaret`
--

-- --------------------------------------------------------

--
-- Table structure for table `ayar_tablosu`
--

CREATE TABLE `ayar_tablosu` (
  `ayar_id` int NOT NULL,
  `ayar_baslik` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `ayar_desciription` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_instagram` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_github` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_linkedln` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_msunucu` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mport` int NOT NULL,
  `ayar_mkadi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_msifre` varchar(20) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar_tablosu`
--

INSERT INTO `ayar_tablosu` (`ayar_id`, `ayar_baslik`, `ayar_desciription`, `ayar_keywords`, `ayar_instagram`, `ayar_github`, `ayar_linkedln`, `ayar_msunucu`, `ayar_mport`, `ayar_mkadi`, `ayar_msifre`) VALUES
(1, 'Web Tekstil   ', 'web tekstil sitem için admin sayfası yapıyorum       ', 'php, mysql, html, web_tekstil       ', '       ', '       ', '       ', 'smtp.gmail.com       ', 1234, 'amaya.com       ', '1234       ');

-- --------------------------------------------------------

--
-- Table structure for table `urun`
--

CREATE TABLE `urun` (
  `urun_id` int NOT NULL,
  `urun_adi` varchar(150) NOT NULL,
  `urun_aciklama` text NOT NULL,
  `urun_fiyat` double NOT NULL,
  `urun_indirim` int NOT NULL,
  `urun_stok` int NOT NULL,
  `urun_vitrin` tinyint NOT NULL,
  `urun_eklenmetarihi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `urun_kategori_id` int NOT NULL,
  `urun_renk` varchar(200) NOT NULL,
  `urun_beden` varchar(200) NOT NULL,
  `urun_marka` varchar(50) NOT NULL,
  `urun_gosterilme` int NOT NULL,
  `urun_resim` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `urun`
--

INSERT INTO `urun` (`urun_id`, `urun_adi`, `urun_aciklama`, `urun_fiyat`, `urun_indirim`, `urun_stok`, `urun_vitrin`, `urun_eklenmetarihi`, `urun_kategori_id`, `urun_renk`, `urun_beden`, `urun_marka`, `urun_gosterilme`, `urun_resim`) VALUES
(1, 'tişört', 'açıklama', 45, 7, 5, 0, '2023-01-16 11:09:21', 1, 'turuncu', 'xl /xs', 'marka', 0, 'https://static.zara.net/photos///2023/V/0/1/p/2969/257/700/18/w/500/2969257700_1_1_1.jpg?ts=1672331219732'),
(2, 'deneme2', 'açıklama', 598, 1, 70, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 3, ''),
(3, 'deneme3', 'açıklama', 144, 25, 10, 1, '2023-01-16 11:09:21', 1, 'mavi', 's /xl', 'marka', 0, ''),
(4, 'deneme4', 'açıklama', 58, 1, 5, 1, '2023-01-16 11:09:21', 1, 'siyah', 'xl', 'marka', 0, ''),
(5, 'deneme5', 'açıklama', 9852, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, ''),
(6, 'deneme6', 'açıklama', 74, 5, 50, 1, '2023-01-16 11:09:21', 1, 'yeşil', 'xl', 'marka', 0, ''),
(7, 'deneme7', 'açıklama', 5115, 1, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 0, ''),
(8, 'deneme8', 'açıklama', 421, 1, 5, 0, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, ''),
(9, 'deneme9', 'açıklama', 74, 50, 5, 1, '2023-01-16 11:09:21', 1, 'pembe', 'xl', 'marka', 0, ''),
(10, 'deneme10', 'açıklama', 98, 24, 5, 0, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 1, ''),
(11, 'deneme11', 'açıklama', 78, 1, 5, 1, '2023-01-16 11:09:21', 1, 'sarı', 'xl', 'marka', 1, ''),
(12, 'deneme12', 'açıklama', 96, 11, 5, 1, '2023-01-16 11:09:21', 1, 'mavi', 'xl', 'marka', 2, 'https://static.zara.net/photos///2022/I/0/1/p/5039/220/800/2/w/282/5039220800_1_1_1.jpg?ts=1661265158677');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ayar_tablosu`
--
ALTER TABLE `ayar_tablosu`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`urun_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ayar_tablosu`
--
ALTER TABLE `ayar_tablosu`
  MODIFY `ayar_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `urun`
--
ALTER TABLE `urun`
  MODIFY `urun_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
