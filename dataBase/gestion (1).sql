-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 02, 2022 at 10:40 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestion`
--

-- --------------------------------------------------------

--
-- Table structure for table `abonnes`
--

CREATE TABLE `abonnes` (
  `id` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `date_naiss` date NOT NULL,
  `debut_ab` date NOT NULL,
  `numero` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `abonnes`
--

INSERT INTO `abonnes` (`id`, `nom`, `prenom`, `date_naiss`, `debut_ab`, `numero`, `email`) VALUES
(32, 'Namountougou', 'Dimanche', '2022-04-21', '2022-04-19', '86548678', 'dimache@gmail.com'),
(33, 'Kabore', 'Safiatou', '1972-10-21', '2014-09-14', '544784645', 'kamigyqin@mailinator.com'),
(35, 'Souleyma', 'Ilboudo', '2022-03-31', '2022-04-28', '5754578', 'ilboudosouleymane4@gmail.com'),
(39, 'Kam', 'Sami', '2022-03-31', '2022-04-11', '55889965', 'hulquio@gmail.comp'),
(41, 'Souleymane', 'Ilboudo', '2022-04-20', '2022-04-20', '8654684', 'ilboudosouleymane4@gmail.com'),
(44, 'Aphro', 'Chaleur', '2022-04-20', '2022-04-20', '56', 'cynthiavalea@gmail.com'),
(45, 'Souleymane', 'Ilboudo', '2022-04-28', '2022-04-20', '4351564', 'ilboudosouleymane4@gmajhil.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nom`, `prenom`, `email`, `password`) VALUES
('Souleymane', 'Ilboudo', 'ilboudosouleymane4@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abonnes`
--
ALTER TABLE `abonnes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abonnes`
--
ALTER TABLE `abonnes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
