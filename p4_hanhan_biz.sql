-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 23, 2014 at 11:54 PM
-- Server version: 5.1.72-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hanhanbi_p2_hanhan_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `post_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`post_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Table to store user posts' AUTO_INCREMENT=21 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `created`, `modified`, `user_id`, `content`) VALUES
(1, 1383000396, 1383000396, 1, 'My first post.'),
(2, 1383001343, 1383001343, 1, 'My second post.'),
(3, 1383001489, 1383001489, 1, 'My third post.'),
(4, 1383005410, 1383005410, 3, 'Iorek Byrnison''s first post.'),
(5, 1383005423, 1383005423, 3, 'Iorek Byrnison''s second post.'),
(6, 1383005472, 1383005472, 2, 'Roger Parslow''s first post.'),
(8, 1383092406, 1383092406, 6, 'Lee Scoresby''s first post.'),
(9, 1383093024, 1383093024, 6, 'Lee Scoresby''s next post.'),
(13, 1383104092, 1383104092, 1, 'Yet another post from Lyra Silvertongue.'),
(15, 1383194489, 1383194489, 1, '「你好！」'),
(17, 1383265636, 1383265636, 1, 'How many posts since last login?'),
(18, 1384788779, 1384788779, 7, ''),
(19, 1384788782, 1384788782, 7, ''),
(20, 1384788806, 1384788806, 7, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL DEFAULT '2',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `created`, `modified`, `token`, `password`, `last_login`, `timezone`, `first_name`, `last_name`, `email`, `role`, `status`) VALUES
(1, 1382493295, 1382493295, '5c2176165ae1ceef2b492104f373c374932b7a1b', '4d47e2beb30a115ff1d3ba30b19a1dac964c6d52', 1390537036, 0, 'Lyra', 'Silvertongue', 'l.silvertongue@example.com', 0, 0),
(2, 1383005117, 1383005117, 'f78ea49e36a7f85b67ce5c6e79dfb07ad031d7f5', '4d47e2beb30a115ff1d3ba30b19a1dac964c6d52', 0, 0, 'Roger', 'Parslow', 'r.parslow@example.com', 2, 0),
(3, 1383005195, 1383005195, 'c97226ea07a4dbe8780e825363fb67adfd1671e4', '4d47e2beb30a115ff1d3ba30b19a1dac964c6d52', 1385023274, 0, 'Iorek', 'Byrnison', 'i.byrnison@example.com', 1, 0),
(4, 1383005240, 1383005240, 'db62cd595432a5e66e47e3ec3060333aef1e25b6', '4d47e2beb30a115ff1d3ba30b19a1dac964c6d52', 0, 0, 'Iofur', 'Raknison', 'i.raknison@example.com', 2, 0),
(6, 1383016419, 1383016419, '8fe3ee2a17dfb55dc03202e1b7a9adfb736ecf29', '4d47e2beb30a115ff1d3ba30b19a1dac964c6d52', 1383534746, 0, 'Lee', 'Scoresby', 'l.scoresby@example.com', 2, 0),
(7, 1384788750, 1384788750, 'f74ceb9fd50df3859469be20a1cb6674134f3557', '4386692ee5e35ce145c98934bd9b8623b85589f6', 1384788833, 0, '12345', '1324', '1234@gmail.com', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_users`
--

CREATE TABLE IF NOT EXISTS `users_users` (
  `user_user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'FK Follower',
  `user_id_followed` int(11) NOT NULL COMMENT 'FK Followed',
  PRIMARY KEY (`user_user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `users_users`
--

INSERT INTO `users_users` (`user_user_id`, `created`, `user_id`, `user_id_followed`) VALUES
(4, 1383008982, 2, 1),
(5, 1383008998, 3, 1),
(6, 1383009003, 3, 3),
(10, 1383011833, 2, 2),
(19, 1383092198, 1, 1),
(21, 1383093031, 6, 6),
(22, 1383093211, 6, 1),
(23, 1383093492, 1, 4),
(24, 1383093492, 1, 2),
(28, 1383102840, 1, 6),
(29, 1383102842, 1, 3),
(36, 1383105057, 1, 10),
(37, 1384788769, 7, 7),
(38, 1384788770, 7, 3),
(39, 1384788771, 7, 2);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users_users`
--
ALTER TABLE `users_users`
  ADD CONSTRAINT `users_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
