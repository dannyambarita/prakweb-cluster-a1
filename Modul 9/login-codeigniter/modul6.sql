-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 05:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul6`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(128) NOT NULL,
  `artikel` text NOT NULL,
  `username` varchar(128) NOT NULL,
  `id_role` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `artikel`, `username`, `id_role`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis facilisis sed arcu eu pellentesque. Quisque tempor molestie dolor, nec consequat velit eleifend ut. Nulla fermentum turpis sit amet blandit tincidunt. Curabitur tincidunt malesuada volutpat. Morbi vel ornare sem. Maecenas vitae urna bibendum, hendrerit felis eu, sollicitudin leo. Nam eu arcu nec augue elementum venenatis. Sed ultrices est eget lectus bibendum efficitur.\r\n\r\nProin vitae ligula gravida, lobortis purus a, mattis libero. Curabitur aliquam nunc id neque gravida, ut varius nibh dapibus. Morbi euismod nunc ac nunc cursus faucibus. Mauris id augue non purus dapibus gravida a dignissim augue. Sed libero mi, placerat eu pulvinar sed, cursus ut ante. Vivamus non iaculis sem. Vestibulum vel gravida justo. Proin vehicula interdum tortor at pulvinar. In non nibh et nibh vulputate congue.', 'user1', 2),
(9, 'asdasdad', 'admin', 1),
(11, 'HoHo', 'user2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL,
  `id` int(128) NOT NULL,
  `role` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `fname`, `id`, `role`, `active`) VALUES
('admin', 'admin', 'Administrator', 1, 1, 1),
('user1', 'user1', 'User Pertama', 2, 2, 1),
('user2', 'user2', 'User Kedua', 3, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
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
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
