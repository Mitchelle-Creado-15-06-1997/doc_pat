-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2017 at 07:49 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rail`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `source` varchar(30) NOT NULL,
  `dest` varchar(30) NOT NULL,
  `timee` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`fname`, `lname`, `email`, `source`, `dest`, `timee`) VALUES
('mitchelle', 'creado', 'creadomitchellee@gma', '', '', ''),
('mitchelle', 'creado', 'creadomitchellee@gma', '', '', ''),
('mitchelle', 'creado', 'creadomitchellee@gma', '', '', ''),
('mitchelle', 'creado', 'creadomitchellee@gma', 'santacruz', 'churchgate', '12-56'),
('mitchelle', 'creado', 'creadomitchellee@gma', 'santacruz', 'churchgate', '12-56'),
('mitchelle', 'mm', 'jnjkbhj@ggvjhv', 'santacruz', 'churchgate', '12-56'),
('mfgt', 'vjgj', 'vhjvh@hgfyj.hii', 'santacruz', 'churchgate', '12-56'),
('', '', '', 'santacruz', 'churchgate', '12-56'),
('', '', '', 'santacruz', 'churchgate', '12-56');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `phone`, `message`) VALUES
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('mitchelle', 'creadomitchellee@gma', 987654321, 'jkbjkbjhb'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('mitchelle', 'mmm@mmm', 987654321, 'bvghcgyjcjgchjgchgchgc\r\n'),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('', '', 0, ''),
('mitchelle', 'creadomitchellee@gma', 987654321, 'hjvjv\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `membe`
--

CREATE TABLE `membe` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhar` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membe`
--

INSERT INTO `membe` (`fname`, `lname`, `email`, `adhar`, `pass`, `cpass`) VALUES
('mitchellee', 'creado', 'mi@mi', '123', 'mmm', 'mmm'),
('mitchelle', 'creado', 'creadomitchellee@gma', '', '', ''),
('mitchelle', 'creado', 'bjhb@hvjhvj', '', 'vjhv', 'vjhv'),
('sarah', 'creado', 'mmm@mmm', '', 'mmm', 'mmm'),
('fedw', 'hj', 'bnb@nmn', '', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `adhar` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `cpass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fname`, `lname`, `email`, `adhar`, `pass`, `cpass`) VALUES
('mitchelle', 'creado', 'mi@mi', '123456', 'mi', 'mi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
