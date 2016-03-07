-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2016 at 02:35 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `boards`
--

CREATE TABLE IF NOT EXISTS `boards` (
  `board_id` int(11) NOT NULL,
  `board_name` varchar(255) NOT NULL,
  `board_desc` varchar(510) NOT NULL,
  `board_groups` text NOT NULL,
  `board_category` int(11) NOT NULL,
  `board_posts` int(11) NOT NULL,
  `board_visits` int(11) NOT NULL,
  `board_last_post` int(11) NOT NULL,
  `board_last_post_title` varchar(255) NOT NULL,
  `board_last_poster` int(11) NOT NULL,
  `board_last_post_date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boards`
--

INSERT INTO `boards` (`board_id`, `board_name`, `board_desc`, `board_groups`, `board_category`, `board_posts`, `board_visits`, `board_last_post`, `board_last_post_title`, `board_last_poster`, `board_last_post_date`) VALUES
(1, 'Test board', 'One test board', '', 1, 0, 0, 0, 'Thread title', 1, 0),
(2, 'Test board', '', '', 1, 0, 0, 0, 'Test thread', 1, 0),
(3, 'Test board', 'Another one', '', 2, 0, 0, 0, 'Kifla neka', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_desc` varchar(255) NOT NULL,
  `category_subforum` int(11) NOT NULL,
  `category_groups` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_desc`, `category_subforum`, `category_groups`) VALUES
(1, 'HyperBB Development', 'Just a random category passing through', 0, ''),
(2, 'HyperBB Development', 'Just a random category passing through', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE IF NOT EXISTS `threads` (
  `thread_id` int(11) NOT NULL,
  `thread_title` varchar(255) NOT NULL,
  `thread_text` text NOT NULL,
  `thread_time` int(11) NOT NULL,
  `thread_poster` int(11) NOT NULL,
  `thread_board` int(11) NOT NULL,
  `thread_icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `hbbid` varchar(100) NOT NULL,
  `name` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `member_group` tinyint(3) NOT NULL,
  `notifications` tinyint(3) NOT NULL,
  `register_date` int(11) NOT NULL,
  `last_login` int(11) NOT NULL,
  `theme` varchar(80) NOT NULL,
  `language` varchar(80) NOT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `hbbid`, `name`, `password`, `email`, `avatar`, `cover`, `member_group`, `notifications`, `register_date`, `last_login`, `theme`, `language`, `salt`) VALUES
(1, 'e35f42d6950bf3e9e1627cd9828fbc5b', 'Champa', '$2y$09$uurmE2dQiX23hZx9IPZ6C.s4WD0Y7qhtjrP/9MpJ60vMGxeJeEfde', 'woodengaming3@gmail.com', 'https://scontent-frt3-1.xx.fbcdn.net/hprofile-xpf1/v/t1.0-1/p160x160/10253943_214580025558744_1022146339866829669_n.jpg?oh=08c6f9c562b9c83629084516aafbc273&oe=576E5BD9', '', 1, 0, 1456411876, 0, '', '', 'ºêægP‰}·…œ} özu.[•„O'),
(2, '308a45785c5291054b63d2d23cb1ad5e', 'Champa', '$2y$09$/y9FLyKklClH1l3CNopReOdQSJrYKnLSqgdfGU5QWaQ.Jg5qVWOhC', 'haha@gmail.com', '', '', 3, 0, 1456604527, 0, '', '', 'ÿ/E/"¤”)GÖ]Â6ŠQyÿô©H'),
(3, '22734f45e46b1d0ffc2c00e82ed2e193', 'Champa', '$2y$09$SKc4D6bS7pJ7zy3fLvtY0.ymo9YLxNzVgt4O0kr5YxHkiqUEuZyOa', 'hahaha@gmail.com', '', '', 3, 0, 1456609557, 0, '', '', 'H§8¦Òî’{Ï-ß.ûXÐx? úS'),
(4, 'a545c23cd2235a414d9d683c05966250', 'Champa', '$2y$09$edNwjntx62gFBOB3v4v8hO7DHUu61ndBmIijpRRHZUmwjYbu.2n4G', 'hahahaa@gmail.com', '', '', 3, 0, 1456609568, 0, '', '', 'yÓpŽ{qëhàw¿‹ü…<ˆŽÈ	'),
(5, '75106b13094eccc47204ddc6b40a29ce', 'Brat', '$2y$09$PqtwT.JaNpz0.WSe/zlpP.KnFgrrWaAh/GPudXHyKa4YiA4xCcVwi', 'neko@gmail.com', '', '', 3, 0, 1456609826, 0, '', '', '>«pOâZ6œôùdžÿ9i<Í°ëÊ\r`');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boards`
--
ALTER TABLE `boards`
  ADD PRIMARY KEY (`board_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`thread_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boards`
--
ALTER TABLE `boards`
  MODIFY `board_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `thread_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
