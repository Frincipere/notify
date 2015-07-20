-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2015 at 11:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `notify`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `post` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `splroll` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fname`, `lname`, `post`, `email`, `password`, `splroll`) VALUES
('krishna', 'varshney', 'admin', 'krishan.varshney708@gmail.com', '7838773560@ny', 'adm-13/022'),
('Rohit', 'Gupta', 'admin', 'rohitguptafe@gmaail.com', 'rohit@12345', 'adm-13/047');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `title` varchar(100) NOT NULL,
  `discription` varchar(500) NOT NULL,
`id` int(10) unsigned NOT NULL,
  `namec` varchar(255) NOT NULL DEFAULT '''untitled''',
  `mimec` varchar(50) NOT NULL DEFAULT '''text/plain''',
  `sizec` bigint(20) unsigned NOT NULL DEFAULT '0',
  `datac` mediumblob,
  `namea` varchar(255) NOT NULL DEFAULT '''untitled''',
  `mimea` varchar(50) NOT NULL DEFAULT '''text/plain''',
  `sizea` bigint(20) NOT NULL DEFAULT '0',
  `dataa` mediumblob,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `validity` int(11) NOT NULL,
  `from` varchar(50) NOT NULL,
  `for1` varchar(50) NOT NULL,
  `for2` varchar(50) DEFAULT NULL,
  `for3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`title`, `discription`, `id`, `namec`, `mimec`, `sizec`, `datac`, `namea`, `mimea`, `sizea`, `dataa`, `created`, `validity`, `from`, `for1`, `for2`, `for3`) VALUES
('tommorrow is holiday', 'dua to occasion of diwali', 25, '''untitled''', '''text/plain''', 0, NULL, '''untitled''', '''text/plain''', 0, NULL, '2015-07-19 10:25:54', 2, 'administration', 'student', 'all', 'all'),
('registration date extended', 'due to technical issue registration date extended to 1.07.2015', 26, '''untitled''', '''text/plain''', 0, NULL, '''untitled''', '''text/plain''', 0, NULL, '2015-07-19 11:48:03', 10, 'administration', 'all', 'all', 'all'),
('assignments completion date', 'complete all assignments before 30th december', 27, '''untitled''', '''text/plain''', 0, NULL, '''untitled''', '''text/plain''', 0, NULL, '2015-07-19 11:57:42', 30, 'cse', 'student', 'btech', 'cse');

-- --------------------------------------------------------

--
-- Table structure for table `user-db`
--

CREATE TABLE IF NOT EXISTS `user-db` (
  `fname` varchar(10) NOT NULL,
  `lname` varchar(10) NOT NULL,
  `course` varchar(10) DEFAULT NULL,
  `branch` varchar(10) DEFAULT NULL,
  `colleger` varchar(10) NOT NULL DEFAULT '',
  `class-roll` int(3) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `who` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user-db`
--

INSERT INTO `user-db` (`fname`, `lname`, `course`, `branch`, `colleger`, `class-roll`, `email`, `pass`, `who`) VALUES
('principle', 'head', 'all', 'all', '1', 1, 'mail.mail.com', '123', 'admin'),
('geeta', 'gupta', NULL, NULL, '533', NULL, 'geeta@mail.com', '123', 'teacher'),
('amita', 'gautam', NULL, NULL, '773', NULL, 'MAITA@satyugmail.com', '1234', 'teacher'),
('janardhan', 'verma', NULL, NULL, '966', NULL, 'varma@jan.com', '123', 'teacher'),
('krishan', 'varshney', 'B.Tech', 'cse', 'cse-13/022', 21, 'krishan.varshney708@gmail.com', '123', 'student'),
('ajay', 'sri', 'PGDM', 'pgdm', 'pgdm-12/1', 1, 'sahhas@mail.com', '123', 'student'),
('rajoitya', 'asas', NULL, NULL, 'thr-10/854', NULL, 'ashishpandeytech@gmail.com', '123', 'teacher');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user-db`
--
ALTER TABLE `user-db`
 ADD PRIMARY KEY (`colleger`), ADD FULLTEXT KEY `course` (`course`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
