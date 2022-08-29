-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 09:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sortie`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nomEt` varchar(255) NOT NULL,
  `prenomEt` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `adresse` varchar(100) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nomEt`, `prenomEt`, `date`, `adresse`, `telephone`) VALUES
(1, 'HAMANE', 'ADJI', '2022-08-28', '', ''),
(2, 'MOHAMED', 'ibrahim', '2022-08-28', '', ''),
(3, 'ATTOISSE', 'MOHAMED', '2022-08-28', 'GD DAKAR', '4451741'),
(4, 'MOHAMED', 'IBRAHIM', '2022-08-28', 'CASTOR', '4411741'),
(5, 'moussa', 'ibrahim', '2022-08-28', 'gd dakar', '4411741'),
(6, 'ZAIDOU', 'MOHAMED', '2022-08-28', 'THIES', '1233'),
(7, 'DQSDSQ', 'DQD', '2022-08-28', 'DDQSDS', '432432');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
