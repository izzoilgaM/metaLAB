-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 01, 2013 at 10:15 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `metalab_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `cid` int(6) NOT NULL AUTO_INCREMENT,
  `pid` int(6) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `ctext` longtext NOT NULL,
  PRIMARY KEY (`cid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `pid` int(6) NOT NULL AUTO_INCREMENT,
  `uid` int(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `tstamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`pid`),
  KEY `uid` (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`pid`, `uid`, `title`, `content`, `tstamp`) VALUES
(2, 1, 'I like bears', 'Bears are cool.  <a href="index.php">I wonder if this link works.</a>', '2013-03-01 17:50:29'),
(3, 1, 'Another post', 'This is another post, woo hoo.', '2013-03-01 18:11:39'),
(4, 1, 'est', 'test', '2013-03-01 12:00:00'),
(5, 1, 'New post', 'new stuffs', '0000-00-00 00:00:00'),
(6, 1, 'Another new post', 'new', '2013-03-02 00:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
  `tid` int(6) NOT NULL AUTO_INCREMENT,
  `pid` int(6) NOT NULL,
  `content` varchar(255) NOT NULL,
  PRIMARY KEY (`tid`),
  KEY `pid` (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`tid`, `pid`, `content`) VALUES
(1, 2, 'tag1'),
(2, 2, 'tag2'),
(6, 0, 'tag3'),
(7, 0, 'tag4'),
(8, 0, 'tag6'),
(9, 0, 'tag'),
(10, 0, 'tag'),
(11, 0, 'new things'),
(12, 0, 'tags'),
(13, 5, 'tag2'),
(14, 5, 'tag');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `password`) VALUES
(1, 'Alex Hugon', 'alex@metalab.harvard.edu', 'password'),
(2, 'Cristoforo Magliozzi', 'cris@metalab.harvard.edu', 'pass');
