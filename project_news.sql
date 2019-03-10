-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2019 at 08:25 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `username`, `comments`) VALUES
(1, 'anandcheerla', 'Good news today'),
(2, 'anandcheerla', 'It is a good website');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `Heading` text NOT NULL,
  `news` text NOT NULL,
  `file` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uploader` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `Heading`, `news`, `file`, `date`, `uploader`) VALUES
(5, 'Avengers 4 Trailer will be out soon!', 'The much awaited film for the marvel fans is avengers 4.Fans are eagerly waiting for the trailer.some sources confirms that the avengers trailer will be out very shortly within the end of this month.', 'qzhlstty4qzn9oxypinf.jpg', '0000-00-00 00:00:00', 'anandcheerla'),
(6, 'Match abandoned!', 'The second t20 between india and australia is abondoned due to rain.', 'cricket-aus-ind-t20_afb7ebac-ee5e-11e8-b312-d5ded9c11306.jpg', '0000-00-00 00:00:00', 'uday34'),
(18, 'this is heading test', 'this is news test', 'maxresdefault.jpg', '0000-00-00 00:00:00', 'akc'),
(19, 'Avengers End Game second teaser is out', 'Recently the super bowl avengers teaser is out which awes the fans and they are excited to watch the film and know the plot.', 'Avengers-Endgame-Tony-Stark-Ultron-Thanos.jpg', '0000-00-00 00:00:00', 'anandcheerla'),
(20, 'This is the demo  of heading', 'This is the sample news', '1avengers1_758975.jpg', '0000-00-00 00:00:00', 'lokesh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobilenumber` bigint(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `email`, `mobilenumber`, `date`) VALUES
('anand', 'kumar', 'anandcheerla', 'anandcheerla', 'anandcheerla999@gmai', 9959051344, '2018-09-02 18:44:54'),
('gopal', 'allu', 'gopal', 'gopalallu', 'gopal@gmail.com', 9652141422, '2018-11-23 19:39:08'),
('lokesh', 'cheerla', 'lokesh', 'lokeshcheerla', 'lokesh@gmail.com', 9963588139, '2019-02-13 08:25:57'),
('rahul sai', 'allu', 'rahulsai', 'rahulsai', 'rahul@gmail.com', 9848920904, '2018-11-23 19:32:11'),
('sai shankar', 'addanki', 'shankar', 'saishankar', 'shannu@gmail.com', 9885909031, '2018-11-06 11:19:12'),
('uday kiran', 'dakavarapu', 'uday34', 'udaykiran', 'udaykiran@gmail.com', 8888888888, '2018-11-23 13:28:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
