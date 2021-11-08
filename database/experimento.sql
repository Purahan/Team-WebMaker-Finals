-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 08, 2021 at 06:18 PM
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
(1, 'To prove that air possesses mass.', 'gwmq9Ve_7nw', NULL, '586751481'),
(2, 'Differentiate amongst the changes such as folding of paper, tearing of paper and burning of paper.', 'yIJ2qnUOOwQ', '<dl>             <dt class=\"h3\">Aim of the Experiment</dt>             <dd>Differentiate amongst the changes such as folding of paper, tearing of paper and burning of paper.</dd>             <dt class=\"h3 mt-5\">Materials Required</dt>             <dd>Used papers, candle/spirit lamp, match box, steel plate/Petri plate, a pair of tongs.</dd>             <dt class=\"h3\">Procedure</dt>             <dd>                 <b>Step I.</b> Take a used paper and fold it. How many times you were able to fold the paper? Unfold the paper. Do you get the paper in its original shape and size?<br />                 <b>Step II.</b> Take the same paper and tear it into as many pieces as you wish. Now try to get the paper in its original shape and size. Are you successful in doing this? Do you think that in the above two steps any new substance is formed?<br />                 <b>Step  III.</b>  Take  a  few  pieces  of  the  paper  and  burn  them.  Collect  the  product formed in a steel plate or Petri plate. (Be careful while burning the paper). Compare the product formed with the original pieces of paper. What do you observe? Do you think a new substance has been formed in this change?             </dd>             <dt class=\"h3\">Observation</dt>             <dd>                 <b>Step I.</b> On folding the paper, one can fold it 6 to 7 times. On unfolding the paper, it regained its original shape and size.                 <b>Step II.</b> The pieces of paper can be joined with the help of glue. However, one cannot get the paper in its original form. The changes observed in Steps (I) and (II) do not give any new substance/product.                 <b>Step III.</b> On burning the pieces of paper, they turned black, whereas original  paper  pieces  were  white  in  colour.  Smoke  was  also  observed  during burning of the paper pieces. This shows new substances (solid and gaseous) were formed in this change.             </dd>             <dt class=\"h3\">Conclusion</dt>             <dd>                 <ul>                     <li>In Step I and Step II only change in physical state/property was noticed and no new substance is formed. Hence, these are physical changes.</li>                     <li>However, in Step III new substances are formed. Hence, it is a chemical change.</li>                 </ul>             </dd>         </dl>', '594355476'),
(3, 'Observe that air expands on heating', 'ZPErStqSSMk', '<dl>             <dt class=\"h3\">Aim of the Experiment</dt>             <dd>Observe that air expands on heating.</dd>             <dt class=\"h3 mt-5\">Materials Required</dt>             <dd>Two plastic mugs, an empty plastic bottle (1/2 litre or 200 mL), a balloon, cold and hot water.</dd>             <dt class=\"h3 mt-5\">Procedure</dt>             <dd>                 <b>Step I.</b> Inflate the balloon slightly and fix it on the mouth of the bottle tightly with a thread. (It is advisable to inflate and deflate the balloon a few times.)<br />                 <b>Step II.</b> Pour hot water in one mug and cold water in the other mug.<br />                 <b>Step  III.</b> Place the bottle with the balloon in cold water.<br />                 <b>Step  VI.</b> Observe the size of the balloon.<br />                 <b>Step  V.</b> Transfer the bottle now to the mug containing hot water.<br />                 <b>Step  VI.</b> Observe again the size of the balloon.<br />                 <b>Step  VII.</b> Transfer the bottle back to cold water and observe the size of the balloon once again.<br />             </dd>             <dt class=\"h3 mt-5\">Observation</dt>             <dd>                 <b>•  </b> We observe that in cold water, the balloon gets deflated.<br />                 <b>•  </b> We observe that in hot water, the balloon gets inflated.             </dd>             <dt class=\"h3 mt-5\">Conclusion</dt>             <dd>                 •  There is air inside the empty bottles. When the bottle is kept in hot water the air inside it gets heated. It expands and inflates the balloon.<br />                 •  In cold water, the air in the bottle contracts and the balloon is deflated.<br />                 •  In general, air expands on heating and contracts on cooling.<br />             </dd>         </dl>', '593251002'),
(4, 'Show that fuel/substance should be heated to its ignition temperature to make it burn.', 'Pm0sXIW6UFo', '<dl>   <dt class=\"h3\">Aim of the Experiment</dt>   <dd>Show that fuel/substance should be heated to its ignition temperature to make it burn</dd>   <dt class=\"h3 mt-5\">Materials Required</dt>   <dd>Paper, candle, water, match box.</dd>   <dt class=\"h3 mt-5\">Procedure</dt>   <dd>     <b>Step I.</b> Make two paper cones. <br />     <b>Step II.</b> Heat one empty paper cone on the flame of candle and observe. <br />     <b>Step III.</b> Fill the other paper cone one-third with water  and  heat  it  on  the  flame  and  observe.<br />   </dd>   <dt class=\"h3 mt-5\">Observation</dt>   <dd>The empty paper cone starts burning immediately but the paper cone filled water does not burn and water in it becomes hot.</dd>   <dt class=\"h3 mt-5\">Conclusion</dt>   <dd>     <b>• </b> A substance burns when the temperature reaches to its ignition temperature. <br />     <b>• </b> The empty paper cone starts burning immediately because its ignition temperature is reached fast.<br />     <b>• </b> The paper cone filled with water does not burn because the heat is transferred to water and the ignition temperature is not reached.<br />   </dd> </dl>', '592318764'),
(5, 'To understand the concept of net force', 'z506qGc4RlQ', '<dl>   <dt class=\"h3\">Aim of the Experiment</dt>   <dd>To understand the concept of net force.</dd>   <dt class=\"h3 mt-5\">Materials Required</dt>   <dd>A heavy box or an almirah or a heavy table.</dd>   <dt class=\"h3 mt-5\">Procedure</dt>   <dd>     <b>Step I.</b> Choose a partner. <br />     <b>Step II.</b> Push the heavy object alone in any direction, say to the right. (The strength of your effort is shown by red arrow.) Can you move it? <br />     <b>Step III.</b> Ask your partner to help you in pushing the object to the right. (The strength of you partner is shown by blue arrow.)<br />     <b>Step VI.</b> Ask your friend now to push the object from the opposite side to the left.  Has  it  become  easier  or  more difficult to move the object to the right or left? <br />     <b>Step V.</b> Now both of you push the object to the left. Has it become easier to move the object?<br />     <b>Step VI.</b> Observe again the size of the balloon. <br />     <b>Step VII.</b> Now one of you pull it and the other push it in the same direction. <br />   </dd>   <dt class=\"h3 mt-5\">Observation</dt>   <dd>     <b>• </b> We observe that when both of us apply force in the same direction by pulling or pushing as in Fig. 37.2, Fig. 37.4 and Fig. 37.5, the object can be easily moved. When both of us apply force in opposite directions as in Fig. 37.3, it becomes difficult to move the object.<br />     <b>• </b> In fact, it is possible to prevent the object from moving at all by applying equal forces in opposite directions   </dd>   <dt class=\"h3 mt-5\">Conclusion</dt>   <dd>     <b>• </b> When forces are applied in the same direction, the total or net force is said to be equal to the sum of these forces. <br />     <b>• </b> When forces are applied in the opposite directions, the net force is the difference of the two forces and acts in the direction of the larger force.<br />     <b>• </b> When forces applied in opposite directions have equal magnitudes, the net force is zero.<br />   </dd> </dl>', '591690827'),
(6, 'To verify the laws of reflection', 'QZFfm05ZOek', '<dl>\n            <dt class=\"h3\">Aim of the Experiment</dt>\n            <dd>To verify the laws of reflection.</dd>\n            <dt class=\"h3 mt-5\">Materials Required</dt>\n            <dd>A plane mirror strip, a few knitting needles/bicycle spokes, a few sheets of chart paper.</dd>\n            <dt class=\"h3 mt-5\">Procedure</dt>\n            <dd>\n                <b>Step I.</b> Take two small rectangular pieces of thermocole. Make slits in them and fix a plane mirror. Make sure that the mirror is vertical.<br />\n                <b>Step II.</b> Draw a line at an angle of about 450 to the mirror such as AO. Place a knitting needle on this line such that one of its ends touches the mirror.<br />\n                <b>Step III.</b> Look at the image of the knitting needle in the mirror. Place another needle in line with this image. At the end of this needle mark a poin such as B.<br />\n                <b>Step VI.</b> Remove the mirror and the needles and join point B with O.<br />\n                <b>Step V.</b> At O draw a line ON perpendicular to the mirror. This is called the normal  to the mirror.<br />\n                <b>Step VI.</b> Measure angle AON. This is called the angle of incidence.<br />\n                <b>Step VII.</b> Measure angle BON. This is called the angle of reflection. Are they equal?<br />\n                <b>Step VIII.</b> Repeat the activity twice by placing the needle at different angles.\n            </dd>\n            <dt class=\"h3 mt-5\">Observation</dt>\n            <dd>\n                <b>•  </b> We observe that the angle of incidence is equal to the the angle of reflection in each case.\n            </dd>\n            <dt class=\"h3 mt-5\">Conclusion</dt>\n            <dd>\n                •  The knitting  needle placed on the line AO represents the incident ray<br />\n                •  The knitting needle placed on line BO represents the reflected ray.<br />\n                •  Angle of incidence is equal to the angle of reflection.<br />\n            </dd>\n        </dl>', '595989748');

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
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

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
(20, 6, 'False', 'N'),
(21, 7, 'True', 'N'),
(22, 7, 'False', 'Y'),
(23, 8, 'Mixture of gases', 'Y'),
(24, 8, 'Element', 'N'),
(25, 8, 'Compound', 'N'),
(26, 8, 'None of these', 'N'),
(27, 9, 'It is colourful', 'N'),
(28, 9, 'It is white', 'N'),
(29, 9, 'It has no colour', 'Y'),
(30, 9, 'None of these', 'N'),
(31, 10, 'True', 'N'),
(32, 10, 'False', 'Y'),
(33, 11, 'Physical Change', 'N'),
(34, 11, 'Chemical Change', 'Y'),
(35, 11, 'Reversible Change', 'N'),
(36, 12, 'Folding a paper', 'Y'),
(37, 12, 'Cutting a paper', 'Y'),
(38, 12, 'Burning a paper', 'N'),
(39, 13, 'Lowest temperature in which a substance spontaneously ignites in a normal atmosphere without an external source of ignition', 'Y'),
(40, 13, 'Coldest temperature on earth', 'N'),
(41, 13, 'Temperature more than 100 Kelvin', 'N'),
(42, 13, 'Temperature less than 500 Kelvin', 'N'),
(43, 14, 'Process of Burning', 'N'),
(44, 14, 'Rapid chemical combination of a substance with oxygen, involving the production of heat and light', 'N'),
(45, 14, 'Both a and b', 'Y'),
(46, 14, 'None of these', 'N'),
(47, 15, 'True', 'N'),
(48, 15, 'False', 'Y'),
(49, 16, 'True', 'Y'),
(50, 16, 'False', 'N'),
(51, 17, 'Ray of light that is reflected', 'N'),
(52, 17, 'A ray of light that strikes a surface', 'Y'),
(53, 17, 'Ray that is bigger than the other one', 'N'),
(54, 17, 'None of these', 'N'),
(55, 18, 'Angle made by Incident ray', 'N'),
(56, 18, '180° angle', 'N'),
(57, 18, 'Right angle', 'N'),
(58, 18, 'Angle made by Reflected Ray', 'Y');

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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `experiment_id`, `question`) VALUES
(1, 5, 'An Object can move if Net force is 0?'),
(2, 5, 'What would happen if we push with equal force from both sides?'),
(3, 5, 'What is net force?'),
(4, 3, 'Hot air is:'),
(5, 3, 'What happens when we place the bottle with the balloon in hot water?'),
(6, 3, 'Air expands on heating?'),
(7, 1, 'Air has no weight?'),
(8, 1, 'Air is ____________'),
(9, 1, 'We can\'t see air because:'),
(10, 2, 'Chemical changes are temporary changes and can be reversed?'),
(11, 2, 'Burning of a paper is a?'),
(12, 2, 'Example of a Physical change?'),
(13, 4, 'What is ignition temperature?'),
(14, 4, 'What is combustion?'),
(15, 4, 'Can an object burn without oxygen?'),
(16, 6, 'Angle of Incidence = Angle Of Reflection'),
(17, 6, 'What is incident ray?'),
(18, 6, 'What is angle of reflection?');

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
