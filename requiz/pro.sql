-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2017 at 01:04 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL auto_increment,
  `qid` int(11) NOT NULL,
  `question` text NOT NULL,
  `opt1` text NOT NULL,
  `opt2` text NOT NULL,
  `opt3` text NOT NULL,
  `opt4` text NOT NULL,
  `ans` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `qid`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `ans`) VALUES
(1, 1, 'Name of Book you red', ' kjkj ', 'm kjm ', 'kcmkc', 'jncmkdj', 1),
(2, 1, 'njckjdnckjndkjcd', 'djncjkdc', 'jcnjdc', 'mckdcm', 'kdcmkdmck', 2);

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `qid` int(11) NOT NULL auto_increment,
  `qname` text NOT NULL,
  PRIMARY KEY  (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`qid`, `qname`) VALUES
(1, 'digital eclectronics');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `regno` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mob` bigint(10) NOT NULL,
  `name` text NOT NULL,
  `dob` date NOT NULL,
  `nation` text NOT NULL,
  `program` text NOT NULL,
  `branch` text NOT NULL,
  `semester` int(11) NOT NULL,
  `image` text NOT NULL,
  `spi` float NOT NULL,
  PRIMARY KEY  (`regno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`regno`, `email`, `password`, `mob`, `name`, `dob`, `nation`, `program`, `branch`, `semester`, `image`, `spi`) VALUES
(20155044, 'DPNSHU95@GMAIL.COM', 'password', 9412840603, 'DEEPANSHU', '0000-00-00', '', '', '', 0, '', 0),
(20155081, 'sachin1mnnit@gamil.com', '123', 9451170544, 'sachin gupta', '1997-02-22', 'india', 'b.tech', 'ece', 4, '16k_material_dark_green-wallpaper-7680x4320.jpg', 8.3),
(20165469, 'FT@GMAIL.COM', '123', 9305080416, 'KAJ', '0000-00-00', '', '', '', 0, '', 0);
