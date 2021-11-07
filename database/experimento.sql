-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2021 at 06:45 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `experimento`
--

-- --------------------------------------------------------

--
-- Table structure for table `experiments`
--

DROP TABLE IF EXISTS `experiments`;
CREATE TABLE IF NOT EXISTS `experiments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aim` varchar(255) NOT NULL,
  `video` varchar(20) NOT NULL,
  `doc` text,
  `perform` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `experiments`
--

INSERT INTO `experiments` (`id`, `aim`, `video`, `doc`, `perform`) VALUES
(1, 'To prove that air possesses mass.', 'gwmq9Ve_7nw', '', '586751481'),
(2, 'Differentiate amongst the changes such as folding of paper, tearing of paper and burning of paper.', 'yIJ2qnUOOwQ', '', '594355476'),
(3, 'Observe that air expands on heating', 'ZPErStqSSMk', '', '593251002'),
(4, 'Show that fuel/substance should be heated to its ignition temperature to make it burn.', '', '', '592318764'),
(5, 'To understand the concept of net force', '', '', '591690827'),
(6, 'To verify the laws of reflection', 'QZFfm05ZOek', NULL, '595989748');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(34) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `dob` date NOT NULL,
  `profile_pic` varchar(255) NOT NULL DEFAULT 'assets/img/users/default.jpg',
  `created_on` date NOT NULL,
  `modified_on` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `pwd`, `phone`, `gender`, `dob`, `profile_pic`, `created_on`, `modified_on`) VALUES
(1, 'Purahan Gupta', 'gpurahan@gmail.com', '5d41402abc4b2a76b9719d911017c592', 9878715556, 'm', '2006-11-16', 'assets/img/users/61876cba3dc9a.jpeg', '2021-10-09', '2021-11-07');

-- --------------------------------------------------------

--
-- Table structure for table `user_experiments`
--

DROP TABLE IF EXISTS `user_experiments`;
CREATE TABLE IF NOT EXISTS `user_experiments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `experiment_id` int(11) NOT NULL,
  `type` char(1) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_experiments_unique` (`user_id`,`experiment_id`,`type`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
