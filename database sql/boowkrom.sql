-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:36 PM
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
-- Database: `bookworm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `email`, `firstname`, `lastname`, `gender`, `age`, `username`, `password`) VALUES
(1, 'harith2312@gmail.com', 'Harith', 'Azmi', 'Male', 20, 'hrthazm', 'Hrthimrn2001');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(10) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `author_email`) VALUES
(1, 'Sadik Sigaraga', 'sadiksigaraga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `bookTitle` varchar(255) NOT NULL,
  `bookAuthor` varchar(255) NOT NULL,
  `bookGenre` varchar(255) NOT NULL,
  `bookYear` date NOT NULL,
  `bookPrice` varchar(100) NOT NULL,
  `bookPublisher` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookTitle`, `bookAuthor`, `bookGenre`, `bookYear`, `bookPrice`, `bookPublisher`) VALUES
(1, 'Tokyo Ueono Station', 'Yu Miri', 'Fiction', '2021-06-23', 'RM16.00', 'Riverhead Books'),
(2, 'Colorless Tsukuru Tazaki & His Years of Pilgrimage', 'Haruki Murakami', 'Fiction', '2013-04-01', 'RM20.00', 'Fixi'),
(3, 'Looking For Alaska', 'John Green', 'Teen & Young Adult Fiction', '2019-09-24', 'RM24.99', 'Penguin Books'),
(4, 'Tokyo Ghoul', 'Sui Ishida', 'Fiction', '2011-09-08', 'RM55.00', 'Ghoul Viz Media'),
(5, 'The Selection', 'Kiera Cass', 'Fiction', '2012-04-24', 'RM8.93', 'HarperTeen');

-- --------------------------------------------------------

--
-- Table structure for table `bookstores`
--

CREATE TABLE `bookstores` (
  `bookstore_id` int(10) NOT NULL,
  `bookstore_name` varchar(500) NOT NULL,
  `bookstore_location` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookstores`
--

INSERT INTO `bookstores` (`bookstore_id`, `bookstore_name`, `bookstore_location`) VALUES
(1, 'Kinokuniya', 'KLCC nyah');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `firstname`, `lastname`, `gender`, `age`, `username`, `password`) VALUES
(1, 'harith2312@gmail.com', 'Harith', 'Azmi', 'Male', 20, 'hrthazm', 'Hrthimrn2001'),
(2, 'muhdharithazm@gmail.com', 'Harith', 'Azmi', 'Male', 20, 'hrth', 'Hrthimrn2001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `bookstores`
--
ALTER TABLE `bookstores`
  ADD PRIMARY KEY (`bookstore_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
