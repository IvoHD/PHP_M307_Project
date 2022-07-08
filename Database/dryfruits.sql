-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 02:38 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dryfruits`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`) VALUES
(1, 'Ananas'),
(2, 'Äpfel'),
(3, 'Aprikosen'),
(4, 'Avocado'),
(5, 'Bananen'),
(6, 'Birnen'),
(7, 'Blondorangen'),
(8, 'Blutorangen'),
(9, 'Brombeeren'),
(10, 'Clementinen'),
(11, 'Erdbeeren'),
(12, 'Feigen frisch'),
(13, 'Grapefruits'),
(14, 'Heidelbeeren'),
(15, 'Himbeeren'),
(16, 'Johannisbeeren'),
(17, 'Kaki'),
(18, 'Kirschen'),
(19, 'Kiwi'),
(20, 'Kiwi Bio Schweiz'),
(21, 'Limetten'),
(22, 'Litschis'),
(23, 'Mango'),
(24, 'Melonen'),
(25, 'Mirabellen'),
(26, 'Nektarinen'),
(27, 'Papaya'),
(28, 'Pfirsiche'),
(29, 'Pflaumen'),
(30, 'Preiselbeeren'),
(31, 'Quitten'),
(32, 'Stachelbeeren'),
(33, 'Trauben'),
(34, 'Kirschen'),
(35, 'Zwetschgen');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(25) DEFAULT NULL,
  `category` int(5) DEFAULT NULL,
  `isdried` tinyint(1) DEFAULT NULL,
  `elapseddays` int(20) DEFAULT NULL,
  `fruitid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `tel`, `category`, `isdried`, `elapseddays`, `fruitid`) VALUES
(1, 'Hans', 'hans@muster.ch', '0111111111', 0, 1, 3, 29),
(2, 'Pop', 'pop@muster.ch', '0222222222', 1, 0, 6, 9),
(3, 'Duck', 'duck@muster.ch', '0333333333', 2, 0, 15, 15),
(4, 'Bob', 'bob@muster.ch', '0444444444', 3, 1, 17, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fruitid` (`fruitid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`fruitid`) REFERENCES `fruits` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
