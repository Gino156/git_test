-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2024 at 12:00 PM
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
-- Database: `brgyuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `fullname`, `username`, `password`) VALUES
(0, 'ginoreyes1151@gmail.com', 'Gino P. Reyes', 'gino', '$2y$10$lpBiEITZUqawFzqH.0KL1O119TqGBhT4e0NP60KVwcis45/M8uZTG'),
(0, 'ginoreyes1151@gmail.com', 'Gino P. Reyes', 'gino', '$2y$10$4ET5trSq3kw3VBgjBPAiVe0DgFyaEJhcNb1f1lIDhj6FGDLPivflS'),
(0, 'ginoreyes1151@gmail.com', 'Gino P. Reyes', 'gino', '$2y$10$4KYD3c4ZQcdTiFXdNwbEKuDo614MQRD9zx42qjD9mTCChJUnGI8Oe'),
(0, 'ginoreyes1151@gmail.com', 'Gino P. Reyes', 'gino', '$2y$10$BRH3mLu7UpOIWzB3b3eIjO09lxi/qDZTAq5pdVTlM2WOmfuHx5zF6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
