-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2025 at 02:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblrequest`
--

CREATE TABLE `tblrequest` (
  `request_no` int(11) NOT NULL,
  `request_id` varchar(50) NOT NULL,
  `accountname` varchar(255) NOT NULL,
  `requestdate` date NOT NULL,
  `amount` varchar(50) NOT NULL,
  `transactiontype` varchar(50) NOT NULL,
  `description` varchar(255) NOT NULL,
  `regionrequest` int(11) NOT NULL,
  `requeststatus` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblrequest`
--

INSERT INTO `tblrequest` (`request_no`, `request_id`, `accountname`, `requestdate`, `amount`, `transactiontype`, `description`, `regionrequest`, `requeststatus`, `time`) VALUES
(1, '123456', 'Marvin Batitay', '2025-07-29', '100.00', 'Funding', 'Funding on July 30, 2025 transactions.', 1, 'Received', '2025-07-30 08:48:26'),
(2, '123455', 'Batitay, Marvin B.', '2025-07-30', '250.00', 'Cash Advance', 'for payment july 30, 2025.', 1, 'Request', '2025-08-01 06:31:05'),
(4, '123453', 'Vina R. Teves', '2025-07-30', '1,000.00', 'Funding', 'Funding for palit budbud.', 1, 'Request', '2025-07-30 06:30:30'),
(5, '123457', 'Marvin Batitay', '2025-07-31', '125.00', 'Funding', 'Funding pang palit santol ey.', 1, 'Received', '2025-07-31 10:48:18'),
(10, '123454', 'MARVIN BATITAY', '2025-08-05', '1,000.00', 'Funding', 'Funding on August 5 transaction.', 1, 'Request', '2025-08-05 06:10:03'),
(11, '123458', 'BATITAY, MAARVIN B.', '2025-08-06', '123.00', 'Funding', 'Sample description ey.', 1, 'Request', '2025-08-06 06:31:33'),
(12, '123459', 'Marvin B. Batitay', '2025-08-06', '12.00', 'Funding', 'Funding on August 6 transaction.', 1, 'Received', '2025-08-06 06:32:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblrequest`
--
ALTER TABLE `tblrequest`
  ADD PRIMARY KEY (`request_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblrequest`
--
ALTER TABLE `tblrequest`
  MODIFY `request_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
