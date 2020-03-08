-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 02:07 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barber_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_email` varchar(220) NOT NULL,
  `admin_password` varchar(12) NOT NULL,
  `first_name` varchar(220) DEFAULT NULL,
  `last_name` varchar(220) DEFAULT NULL,
  `admin_phone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_email`, `admin_password`, `first_name`, `last_name`, `admin_phone`) VALUES
('admin@admin.admin', 'admin', '', '', ''),
('suelen@adm.adm', 'Sue123456*', 'Suelen', 'Fiorelo', '0859863592');

-- --------------------------------------------------------

--
-- Table structure for table `barber`
--

CREATE TABLE `barber` (
  `barber_email` varchar(220) NOT NULL,
  `admin_email` varchar(220) DEFAULT NULL,
  `barber_password` varchar(12) NOT NULL,
  `barber_first_name` varchar(220) NOT NULL,
  `barber_last_name` varchar(220) NOT NULL,
  `barber_phone` varchar(12) NOT NULL,
  `barber_area_location` varchar(3) NOT NULL,
  `barber_location` varchar(20) NOT NULL,
  `verify` enum('Y','N') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barber`
--

INSERT INTO `barber` (`barber_email`, `admin_email`, `barber_password`, `barber_first_name`, `barber_last_name`, `barber_phone`, `barber_area_location`, `barber_location`, `verify`) VALUES
('alejandro@gmail.com', NULL, 'Sue123456*', 'Alejandro', 'Zebalos', '09685312 ', 'D16', '96,Knocklyon', 'Y'),
('athur@hotmail.com', NULL, 'Sue123456*', 'Arthur', 'Santos', '0859632568 ', 'D1', '63,Dorset Street Low', 'Y'),
('cleiton@hotmail.com', NULL, 'Sue123456*', 'Carlos', 'Ferreira', '087459863 ', 'D4', '46 Baggot Street Upp', 'Y'),
('felipe@hotmail.com', NULL, 'Sue123456*', 'Felipe', 'Leite', '074589658 ', 'D2', '60,Harcourt St', 'Y'),
('james@hotmail.com', NULL, 'Sue123456*', 'James', 'Campos', '085745692 ', 'D8', '96,Portobello', 'Y'),
('james_arlos@gmail.com', NULL, 'SUe123456*', 'James ', 'Carlos', '096586523 ', 'D14', '30,windy Arbour', 'Y'),
('mario@hotmail.com', NULL, 'Sue123456*', 'Mario', 'Oliveira', '09856325 ', 'D1', '05, Dorset Street Lo', NULL),
('morgan@hotmail.com', NULL, 'Sue123456*', 'Morgan', 'ONeills', '0859865966 ', 'D7', '85,Phibsboro', 'Y'),
('roberto@hotmail.com', NULL, 'Sue123456*', 'Roberto', 'Felipino', '085798563 ', 'D6', '12,Olivemount road', 'Y'),
('rogerio@hotmail.com', NULL, 'Sue123456*', 'Rogerio', 'Santoos', '085986321 ', 'D3', '14,blessitong', 'Y'),
('tiago@gmail.com', NULL, 'Sue123456*', 'Tiago', 'Fracis', '096853269 ', 'D16', '12,Knocklyon', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `admin_email` varchar(220) DEFAULT NULL,
  `barber_email` varchar(220) DEFAULT NULL,
  `customer_email` varchar(220) DEFAULT NULL,
  `booking_date` date DEFAULT NULL,
  `booking_time` time DEFAULT NULL,
  `approved` enum('Y','N') DEFAULT NULL,
  `status_booking` enum('DONE','INCOMPLETE') DEFAULT NULL,
  `complaint` varchar(220) DEFAULT NULL,
  `review` varchar(220) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `admin_email`, `barber_email`, `customer_email`, `booking_date`, `booking_time`, `approved`, `status_booking`, `complaint`, `review`) VALUES
(212, NULL, 'athur@hotmail.com', NULL, '2019-01-01', '15:00:00', NULL, NULL, NULL, NULL),
(213, NULL, 'athur@hotmail.com', 'alex@hotmail.com', '2019-02-02', '20:00:00', 'Y', 'DONE', NULL, 'GREAT'),
(214, NULL, 'cleiton@hotmail.com', 'francisco@hotmail.com', '2019-03-01', '18:00:00', NULL, NULL, NULL, NULL),
(215, NULL, 'cleiton@hotmail.com', NULL, '2019-02-19', '15:30:00', NULL, NULL, NULL, NULL),
(216, NULL, 'alejandro@gmail.com', NULL, '2019-01-06', '20:30:00', NULL, NULL, NULL, NULL),
(217, NULL, 'alejandro@gmail.com', 'margareth@hotmail.com', '2019-02-16', '19:00:00', NULL, NULL, NULL, NULL),
(218, NULL, 'felipe@hotmail.com', NULL, '2019-05-20', '09:00:00', NULL, NULL, NULL, NULL),
(219, NULL, 'james@hotmail.com', NULL, '2019-03-03', '16:20:00', NULL, NULL, NULL, NULL),
(220, NULL, 'morgan@hotmail.com', 'francisco@hotmail.com', '2019-05-18', '15:00:00', NULL, NULL, NULL, NULL),
(221, NULL, 'morgan@hotmail.com', NULL, '2019-02-03', '09:00:00', NULL, NULL, NULL, NULL),
(222, NULL, 'roberto@hotmail.com', NULL, '2019-09-03', '16:40:00', NULL, NULL, NULL, NULL),
(223, NULL, 'roberto@hotmail.com', 'reginaldo@hotmail.com', '2019-02-09', '09:50:00', 'Y', 'DONE', 'I DID NOT LIKE IT!', '.'),
(224, NULL, 'rogerio@hotmail.com', 'reginaldo@hotmail.com', '2019-02-03', '09:30:00', 'Y', NULL, NULL, NULL),
(225, NULL, 'rogerio@hotmail.com', NULL, '2019-02-09', '08:00:00', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_email` varchar(220) NOT NULL,
  `admin_emaill` varchar(220) DEFAULT NULL,
  `customer_password` varchar(12) NOT NULL,
  `customer_first_name` varchar(220) NOT NULL,
  `customer_last_name` varchar(220) NOT NULL,
  `customer_phone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_email`, `admin_emaill`, `customer_password`, `customer_first_name`, `customer_last_name`, `customer_phone`) VALUES
('alex@hotmail.com ', NULL, 'Sue123456*', 'Alex', 'Campos', '089856365'),
('francisco@hotmail.com', NULL, 'Sue123456*', 'Franc', 'Miguel', '098636589'),
('margareth@hotmail.com', NULL, 'Sue123456*', 'Margareth', 'Karine', '087459634'),
('reginaldo@hotmail.com', NULL, 'Sue123456*', 'Reginaldo', 'Galiazo', '09863598');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_email`);

--
-- Indexes for table `barber`
--
ALTER TABLE `barber`
  ADD PRIMARY KEY (`barber_email`),
  ADD KEY `admin_email` (`admin_email`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `admin_email` (`admin_email`),
  ADD KEY `barber_email` (`barber_email`),
  ADD KEY `customer_email` (`customer_email`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_email`),
  ADD KEY `admin_emaill` (`admin_emaill`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=226;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barber`
--
ALTER TABLE `barber`
  ADD CONSTRAINT `admin_email` FOREIGN KEY (`admin_email`) REFERENCES `administrator` (`admin_email`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`admin_email`) REFERENCES `administrator` (`admin_email`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`barber_email`) REFERENCES `barber` (`barber_email`),
  ADD CONSTRAINT `booking_ibfk_3` FOREIGN KEY (`customer_email`) REFERENCES `customer` (`customer_email`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `admin_emaill` FOREIGN KEY (`admin_emaill`) REFERENCES `administrator` (`admin_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
