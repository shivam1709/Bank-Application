-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 01:16 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbssrdsbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `EmailID` varchar(30) NOT NULL,
  `AccountType` varchar(10) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Sender` varchar(10) NOT NULL,
  `Receiver` varchar(10) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`EmailID`, `AccountType`, `Amount`, `Sender`, `Receiver`, `Date`) VALUES
('user@gmail.com', 'chequing', 500, 'Income', '', '2022-10-07'),
('user@gmail.com', 'chequing', 60, '', 'Shivam', '2022-10-10'),
('user@gmail.com', 'saving', 300, 'Rootul', '', '2022-10-18'),
('user@gmail.com', 'chequing', 150, '', 'Rootul', '2022-10-13'),
('user@gmail.com', 'saving', 260, '', 'Rahul', '2022-10-10'),
('user@gmail.com', 'saving', 2800, 'Savan', '', '2022-10-01'),
('user@gmail.com', 'chequing', 320, 'Income Cos', '', '2022-09-30'),
('user@gmail.com', 'chequing', 320, 'Income', '', '2022-10-05'),
('user@gmail.com', 'chequing', 30, 'Rahul', '', '2022-10-05'),
('user@gmail.com', 'chequing', 20, 'Savan', '', '2022-10-05'),
('user@gmail.com', 'chequing', 20, '', 'Savan', '2022-10-05'),
('user@gmail.com', 'chequing', 125, '', 'Rahul', '2022-10-05'),
('user@gmail.com', 'chequing', 1500, 'Rootul', '', '2022-10-05'),
('user@gmail.com', 'chequing', 60, '', 'Zehrs', '2022-10-03'),
('user@gmail.com', 'chequing', 10, '', 'Walmart', '2022-10-04'),
('user@gmail.com', 'saving', 180, '', 'Shivam', '2022-10-03'),
('user@gmail.com', 'chequing', 15, '', 'Shivam', '2022-10-07'),
('user@gmail.com', 'chequing', 25, '', 'Rootul', '2022-10-11'),
('user@gmail.com', 'chequing', 500, 'Income', '', '2022-10-14'),
('user@gmail.com', 'saving', 500, 'Income', '', '2022-10-14'),
('user@gmail.com', 'saving', 200, '', 'Nayan', '2022-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Name` varchar(10) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `EmailID` varchar(25) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `UserName`, `EmailID`, `Password`) VALUES
('rv', 'uigh', 'juyikh@fghjk.coiuj', 'fghjk123'),
('Rahul', 'Rahul5798', 'rvpael@gmail.com', 'Rahul5798'),
('RV', 'RAHUL8852', 'rvpatel5898@gmail.com', 'rahul5798'),
('Shivam', 'Shivam123', 'shivam123@gmail.com', 'shivam123'),
('User', 'user123', 'user@gmail.com', 'user123'),
('Ra', 'ui123', 'yu@rr.com', 'ioi12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`EmailID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
