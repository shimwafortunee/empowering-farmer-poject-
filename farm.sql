-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2024 at 09:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `sex`, `dateofbirth`, `email`, `address`, `pin`) VALUES
(234, 'keza', 'lybiam', 'male', '2003-05-21', 'ly@gmail.com', 'bugesera', 'bku'),
(657, 'niyizi', 'orbin', 'female', '2005-08-21', 'orb@gmail.com', 'bumbogo', 'sily'),
(908, 'murenzi', 'petty', 'female', '2014-10-21', 'petty@gmail.com', 'bisima', 'yhtg'),
(3000, 'shimwa', 'onethe', 'female', '2018-10-21', 'on@gmail.com', 'busogo', '546');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmerid` int(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `sex` varchar(20) NOT NULL,
  `dateofbirth` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmerid`, `firstname`, `lastname`, `sex`, `dateofbirth`, `email`, `address`, `password`) VALUES
(201, 'mpano', 'ally', 'male', '2012-03-21', 'mpano@gmail.com', 'kenya', 'type'),
(456, 'sarah', 'mupenzi', 'male', '1984-08-21', 'mup@gmail.com', 'biryogo', 'mup'),
(980, 'mbaraga', 'sano', 'female', '1996-10-21', 'mba@gmail.com', 'murera', 'pink'),
(3000, 'niyizi', 'luxin', 'female', '2023-12-19', 'luxin@gmail.com', 'mugogo', '098');

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

CREATE TABLE `market` (
  `marketid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `contact` int(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`marketid`, `name`, `location`, `gender`, `contact`, `password`) VALUES
(0, 'SHIMWAMUBYEYI FORTUNEE', 'musanze', 'male', 898765455, 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `name` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`name`, `comment`, `phone`) VALUES
('ornella akeza', 'ni byiza uzakomeze', 8976543),
('uwase alise', 'bad', 98765543),
('ange umukundwa', 'perfect, and never give up', 98766543),
('fortunee shimwa', 'you must change the fertiliser because the name is not good', 897654356);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `ID` varchar(20) NOT NULL,
  `emailaddress` varchar(50) NOT NULL,
  `phonenumber` int(11) NOT NULL,
  `farmlocation` varchar(50) NOT NULL,
  `farmerdistrict` varchar(50) NOT NULL,
  `farmersector` varchar(50) NOT NULL,
  `farmsize` int(11) NOT NULL,
  `fertiliser` varchar(50) NOT NULL,
  `typesofmaize` varchar(50) NOT NULL,
  `PIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`firstname`, `lastname`, `ID`, `emailaddress`, `phonenumber`, `farmlocation`, `farmerdistrict`, `farmersector`, `farmsize`, `fertiliser`, `typesofmaize`, `PIN`) VALUES
('shimwa', 'fortunee', '12003700154555555', 'nzabanitajeanbosco@gmail.com', 791821243, 'nyabihu', 'musanze', 'busogo', 10, 'yure', 'maizen', 'fofo'),
('habayimana', 'vincent', '1234567890987', 'cincent@gmail.com', 786543233, 'rutsiro', 'kamonyi', 'rugaba', 45, 'npk', 'Maizoli', '123'),
('mubyey', 'shimwa', '123889007654', 'shimwa@gmail.com', 976432, 'nyamagabe', 'ruhango', 'kivubu', 678, 'dap', 'new 1', 'die'),
('hakuzi', 'silas', '23456789999', 'silas@gmail.com', 787766532, 'kirehe', 'kibogora', 'rutaba', 356, 'dap', 'Maizoli', '123'),
('ikuzwe', 'merci', '39877654562772', 'iku@gmail.com', 2147483647, 'biryogo', 'bigogwe', 'kabatwa', 67, 'dap', 'new 1', '098'),
('umuhoza', 'violete', '8765433228999', 'vio@gmail.com', 789987655, 'bumbogo', 'rutsiro', 'runaba', 54, 'dap', 'Maizoli', 'pink');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmerid`);

--
-- Indexes for table `market`
--
ALTER TABLE `market`
  ADD PRIMARY KEY (`marketid`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
