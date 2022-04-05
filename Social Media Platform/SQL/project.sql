-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 07:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `content_comment` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `user_id`, `name`, `content_comment`, `image`, `created`) VALUES
(25, '16', '10', 'Shrek The Great', 'I will help you find your dog if you find my donkey.', 'upload/Shrek.jpg', '1617939842'),
(26, '16', '11', 'Donkey The G.O.A.T', 'Why are you trying to look for me? Give me some SPACE!', 'upload/donkey.jpg', '1617940027'),
(27, '22', '10', 'Shrek The Great', 'have*', 'upload/Shrek.jpg', '1617940600'),
(28, '23', '9', 'Jonathan Wick', 'I am here to find my dog. ', 'upload/wick.jpg', '1617940801'),
(29, '24', '9', 'Jonathan Wick', 'Haha let me bring out my pencil.', 'upload/wick.jpg', '1617995297'),
(30, '24', '19', 'Diana of Themyscira', 'Hah! You are nothing against me!', 'upload/diana.jpg', '1618011120'),
(31, '25', '20', 'Thomas Jackson', 'Meow back', 'upload/cat.jpg', '1618011359'),
(35, '23', '27', 'Thomas Thomas', 'Meow.', 'upload/cat.jpg', '1618012934');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(100) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `recipient` varchar(50) NOT NULL,
  `text` text NOT NULL,
  `sent` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `content` varchar(500) NOT NULL,
  `created` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `content`, `created`) VALUES
(16, '9', 'Where is my dog?', '1617939562'),
(22, '11', 'Alright, nobody move! I havee got a dragon here, and I am not afraid to use it!', '1617940533'),
(23, '10', 'What are you doing in my swamp!?', '1617940591'),
(24, '12', 'I AM...INEVITABLE.', '1617994829');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `username2` varchar(100) NOT NULL,
  `birthday` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email2` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password2` varchar(100) NOT NULL,
  `profile_picture` varchar(100) NOT NULL,
  `account_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `username`, `username2`, `birthday`, `gender`, `number`, `email`, `email2`, `password`, `password2`, `profile_picture`, `account_created`) VALUES
(9, 'Jonathan', 'Wick', 'Babayaga', 'Babayaga', '1993-03-03', 'Male', '204', 'dog@gmail.com', 'dog@gmail.com', '12345', '12345', 'upload/wick.jpg', '2021-04-09 16:43:15'),
(10, 'Shrek', 'The Great', 'Ogre', 'Ogre', '1/January/1901', 'male', '204', 'ogre@gmail.com', 'ogre@gmail.com', '12345', '12345', 'upload/Shrek.jpg', '2021-04-09 16:43:15'),
(11, 'Donkey', 'The G.O.A.T', 'fatherofdragon', 'fatherofdragon', '6/May/1907', 'male', '222', 'donkey@gmail.com', 'donkey@gmail.com', '12345', '12345', 'upload/donkey.jpg', '2021-04-09 16:43:15'),
(12, 'Thanos', 'The Mad Titan', 'snap', 'snap', '6/August/1930', 'male', '294', 'titan@gmail.com', 'titan@gmail.com', '12345', '12345', 'upload/thanos.jpg', '2021-04-09 16:43:15'),
(13, 'admin', 'admin', 'admin', 'admin', '1/January/1901', 'male', '2', 'admin@admin.com', 'admin@admin.com', 'admin', 'admin', '', '2021-04-09 16:43:15'),
(19, 'Diana', 'of Themyscira', 'Wonder Woman', 'Wonder Woman', '13/September/1971', 'female', '294432', 'diana@gmail.com', 'diana@gmail.com', '12345', '12345', 'upload/diana.jpg', '2021-04-09 19:28:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
