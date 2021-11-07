-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 07, 2021 at 04:25 PM
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
(4, 'Show that fuel/substance should be heated to its ignition temperature to make it burn.', 'Pm0sXIW6UFo', '', '592318764'),
(5, 'To understand the concept of net force', 'z506qGc4RlQ', '', '591690827'),
(6, 'To verify the laws of reflection', 'QZFfm05ZOek', NULL, '595989748');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

DROP TABLE IF EXISTS `quiz_answers`;
CREATE TABLE IF NOT EXISTS `quiz_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `is_correct` enum('Y','N') NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`id`, `question_id`, `answer`, `is_correct`) VALUES
(1, 1, 'True', 'N'),
(2, 1, 'False', 'Y'),
(3, 2, 'Object will move in forward direction', 'N'),
(4, 2, 'Object won\'t move', 'Y'),
(5, 2, 'Object will disappear', 'N'),
(6, 2, 'Can\'t Determine', 'N'),
(7, 3, 'Sum of forces acting on a particle or object', 'Y'),
(8, 3, 'Force on an object only from right', 'N'),
(9, 3, 'Force on an object only from left', 'N'),
(10, 3, 'None Of These', 'N'),
(11, 4, 'Heavier than cold air', 'N'),
(12, 4, 'Lighter than cold air', 'Y'),
(13, 4, 'Denser than cold air', 'N'),
(14, 4, 'Can\'t Tell', 'N'),
(15, 5, 'Nothing happens', 'N'),
(16, 5, 'Balloon gets filled with hot water', 'N'),
(17, 5, 'Balloon gets filled with air', 'Y'),
(18, 5, 'Bottle gets filled with water', 'N'),
(19, 6, 'True', 'Y'),
(20, 6, 'False', 'N');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

DROP TABLE IF EXISTS `quiz_questions`;
CREATE TABLE IF NOT EXISTS `quiz_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `experiment_id` int(11) NOT NULL,
  `question` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `experiment_id`, `question`) VALUES
(1, 5, 'An Object can move if Net force is 0?'),
(2, 5, 'What would happen if we push with equal force from both sides?'),
(3, 5, 'What is net force?'),
(4, 3, 'Hot air is:'),
(5, 3, 'What happens when we place the bottle with the balloon in hot water?'),
(6, 3, 'Air expands on heating?');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_result`
--

DROP TABLE IF EXISTS `quiz_result`;
CREATE TABLE IF NOT EXISTS `quiz_result` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `experiment_id` int(11) NOT NULL,
  `answers` varchar(100) NOT NULL,
  `correct_answers` int(11) NOT NULL,
  `incorrect_answers` int(11) NOT NULL,
  `total_questions` int(11) NOT NULL,
  `submitted_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
