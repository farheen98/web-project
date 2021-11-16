-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 24, 2019 at 04:39 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heaven_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `beng`
--

CREATE TABLE `beng` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `beng`
--

INSERT INTO `beng` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `bhramin`
--

CREATE TABLE `bhramin` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bhramin`
--

INSERT INTO `bhramin` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(13, 'YTD', '500 - 700', 'Deepa Comforts', 'Lakeview');

-- --------------------------------------------------------

--
-- Table structure for table `christ`
--

CREATE TABLE `christ` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `christ`
--

INSERT INTO `christ` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(13, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `enquire`
--

CREATE TABLE `enquire` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquire`
--

INSERT INTO `enquire` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'asdf', 'fadsf@123.com', 13241324, 'falsdjfgajdsflasd\r\n\r\n'),
(2, 'asdfad', 'asdfa@123.com', 14312341, 'dfadsfasd'),
(3, 'asdfa', 'asdf@123.cp', 123413, 'sdfasdf'),
(4, 'q', 'qer@aa', 1324123, 'asdfasdfa');

-- --------------------------------------------------------

--
-- Table structure for table `guju`
--

CREATE TABLE `guju` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guju`
--

INSERT INTO `guju` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `hindu`
--

CREATE TABLE `hindu` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hindu`
--

INSERT INTO `hindu` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(28, 'Maroon 5', '200 - 400', 'Ocean pearl', 'Lakeview'),
(29, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(30, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(31, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(32, 'Maroon 5', '200 - 400', 'Deepa Comforts', 'Lakeview'),
(33, 'Maroon 5', '500 - 700', 'Deepa Comforts', 'Ceremony Hall'),
(34, 'Maroon 5', '200 - 400', 'Deepa Comforts', 'Lakeview');

-- --------------------------------------------------------

--
-- Table structure for table `marwadi`
--

CREATE TABLE `marwadi` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `marwadi`
--

INSERT INTO `marwadi` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `muslim`
--

CREATE TABLE `muslim` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `muslim`
--

INSERT INTO `muslim` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(4, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(5, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(6, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(7, 'YTD', '800 - 1000', 'Ocean pearl', 'Ceremony Hall'),
(8, 'Jazz Notes', '200 - 400', 'Rahmania', 'Beachside'),
(9, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(11, 'Maroon 5', '0 - 120', 'Rahmania', 'Beachside'),
(12, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `sikh`
--

CREATE TABLE `sikh` (
  `id` int(11) NOT NULL,
  `music` longtext NOT NULL,
  `guests` varchar(30) NOT NULL,
  `food` varchar(30) NOT NULL,
  `ambience` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sikh`
--

INSERT INTO `sikh` (`id`, `music`, `guests`, `food`, `ambience`) VALUES
(1, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside'),
(2, 'Best Bet', '0 - 120', 'Rahmania', 'Beachside');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `usertype` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `usertype`) VALUES
(1, 'mufeed', 'mufeed@gmail.com', 'adam', 'User'),
(3, 'farheen', 'farheenshaikh7498@gmail.com', 'mite', 'User'),
(5, 'sik', 'qre@123.com', '1234', 'User'),
(8, 'admin', 'admin@admin.com', 'admin', 'Admin'),
(9, 'user', 'user@user.com', 'user', 'User'),
(10, 'adsfa', 'sdf@sfdg', '1234', 'User'),
(13, 'asdfa', 'asdf@ads', 'asdf', 'User'),
(14, 'asdfa', 'asdf@ads', 'asdf', 'User'),
(15, 'asdfa', 'adf@adf', '1234', 'User'),
(16, 'asdfa', 'adf@adf', '1234', 'User'),
(18, 'heaven', 'asdf@asd', '12341234', 'User'),
(19, 'adsf', 'asf@adf', '12341234', 'User'),
(20, 'asd', 'ad@234', '00000', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beng`
--
ALTER TABLE `beng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhramin`
--
ALTER TABLE `bhramin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `christ`
--
ALTER TABLE `christ`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquire`
--
ALTER TABLE `enquire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guju`
--
ALTER TABLE `guju`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hindu`
--
ALTER TABLE `hindu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marwadi`
--
ALTER TABLE `marwadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `muslim`
--
ALTER TABLE `muslim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sikh`
--
ALTER TABLE `sikh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beng`
--
ALTER TABLE `beng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bhramin`
--
ALTER TABLE `bhramin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `christ`
--
ALTER TABLE `christ`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enquire`
--
ALTER TABLE `enquire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guju`
--
ALTER TABLE `guju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hindu`
--
ALTER TABLE `hindu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `marwadi`
--
ALTER TABLE `marwadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `muslim`
--
ALTER TABLE `muslim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `sikh`
--
ALTER TABLE `sikh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
