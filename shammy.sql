-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 09:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shammy`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `Name` text NOT NULL,
  `Number` varchar(11) NOT NULL,
  `E-mail` varchar(20) NOT NULL,
  `Message` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`Name`, `Number`, `E-mail`, `Message`) VALUES
('saymaabdulkader@gmail.com', 'saymaabdulk', '808', 'uiop;l,kmnfdszasdfgnm,.,mnb'),
('Siema ', '808', 'saymaabdulkader@gmai', 'uiop;l,kmnfdszasdfgnm,.,mnb'),
('Siema ', '808', 'saymaabdulkader@gmai', 'uiop;l,kmnfdszasdfgnm,.,mnb'),
('Siema ', '808', 'saymaabdulkader@gmai', 'uiop;l,kmnfdszasdfgnm,.,mnb'),
('Siema ', '01306744469', 'saymaabdulkader@gmai', 'sofsdjighfgjerjgerjgho[jerg[eg'),
('Tasfia Bhuiyan', '808', 'iamamanfromctg@gmail', 'dgrgerrjherjhghrgh'),
('Siema ', '01091392389', 'saymaabdulkader@gmai', 'lelfekfikefkekjkd'),
('Siema ', '123455676', 'saymaabdulkader@gmai', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `user_id`, `image_url`, `title`, `date`) VALUES
(3, 3, 'Media/p3.jpg', 'koi', '2023-06-06'),
(5, 5, 'Media/hijabi.jpg', 'Hijabi', '0000-00-00'),
(8, 3, 'Media/p3.jpg', 'Alia', '2023-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` int(20) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `NAME`, `Department`, `Semester`) VALUES
(221276, 'Siema', 'CSE', '5th'),
(221277, 'Nayma jannat', 'CSE', '5th'),
(221278, 'Sumaiya sana', 'CSE', '5th'),
(221279, 'Mina akter', 'CSE', '5th'),
(221280, 'Mariam amin', 'CSE', '5th');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`) VALUES
(1, 'Amy_white ', 'AMyt4th', 'Amy white'),
(2, 'Bobby_Mendes ', 'bobbletoki324', 'Bobby Mendes'),
(3, 'alara', '123456', 'amy\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
