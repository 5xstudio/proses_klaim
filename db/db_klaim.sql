-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2019 at 10:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klaim`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_ban`
--

CREATE TABLE `db_ban` (
  `id` int(20) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `grup` enum('PCR','MC') NOT NULL,
  `alur_ban` varchar(10) NOT NULL,
  `pattern` varchar(100) NOT NULL,
  `brand` enum('Achilles','Corsa') NOT NULL,
  `type` enum('Tubeless','Tubetipe') NOT NULL,
  `harga` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_ban`
--

INSERT INTO `db_ban` (`id`, `kode`, `ukuran`, `grup`, `alur_ban`, `pattern`, `brand`, `type`, `harga`) VALUES
(1, 'S01709014TT', '70/90 - 14 M/C 34P Corsa S01 (Tube type)', 'MC', '4,3', 'S 01', 'Corsa', 'Tubetipe', '130000'),
(2, 'S01809014TT', '80/90 - 14 M/C 40P Corsa S01 (Tube type)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubetipe', '156000'),
(3, 'S01909014TT', '90/90-14 46P Corsa S01 (Tube type)', 'MC', '5,8', 'S 01', 'Corsa', 'Tubetipe', '190000'),
(4, 'S01709017TT', '70/90 - 17 M/C 38P Corsa S01 (Tube type)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubetipe', '156000'),
(5, 'S01808017TT', '80/80 - 17 M/C 41P Corsa S01 (Tube type)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubetipe', '175000'),
(6, 'S01809017TT', '80/90 - 17 M/C 44P Corsa S01 (Tube type)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubetipe', '193000'),
(7, 'S01908017TT', '90/80 - 17 M/C 46P CORSA S01 (Tube type)', 'MC', '5,8', 'S 01', 'Corsa', 'Tubetipe', '219000'),
(8, 'S33709017TT', '70/90-17 M/C 38P Corsa S33 T/T (Tube Type)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubetipe', '156000'),
(9, 'S33808017TT', '80/80-17 M/C 41P Corsa S33 T/T (Tube Type)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubetipe', '175000'),
(10, 'S33809017TT', '80/90-17 M/C 44P Corsa S33 T/T (Tube Type)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubetipe', '193000'),
(11, 'S33908017TT', '90/80-17 M/C 46P Corsa S33 T/T (Tube Type)', 'MC', '5,8', 'S 33', 'Corsa', 'Tubetipe', '219000'),
(12, 'S22709014TT', '70/90-14 M/C 34P Corsa S22 T/T (Tube Type)', 'MC', '4,3', 'S22', 'Corsa', 'Tubetipe', '130000'),
(13, 'S22809014TT', '80/90-14 M/C 40P Corsa S22 T/T (Tube Type)', 'MC', '4,8', 'S22', 'Corsa', 'Tubetipe', '156000'),
(14, 'S22909014TT', '90/90-14 M/C 46P Corsa S22 T/T (Tube Type)', 'MC', '5,8', 'S22', 'Corsa', 'Tubetipe', '190000'),
(15, 'S22709017TT', '70/90-17 M/C 38P Corsa S22 T/T (Tube Type)', 'MC', '4,3', 'S88', 'Corsa', 'Tubetipe', '156000'),
(16, 'S22809017TT', '80/90-17 M/C 44P Corsa S22 T/T (Tube Type)', 'MC', '4,8', 'S88', 'Corsa', 'Tubetipe', '193000'),
(17, 'SS09T25018TT', '2.50 - 18 40L Corsa SS09T (Tube type)', 'MC', '4,8', 'SS 09T', 'Corsa', 'Tubetipe', '166000'),
(18, 'SS09T27518TT', '2.75 - 18 42P Corsa SS09T (Tube type)', 'MC', '4,8', 'SS 09T', 'Corsa', 'Tubetipe', '209000'),
(19, 'SS09T30018TT', '3.00 - 18 47S Corsa SS09T (Tube type)', 'MC', '4,8', 'SS 09T', 'Corsa', 'Tubetipe', '242000'),
(20, 'SS18608017TT', '60/80 - 17 M/C 27P Corsa SS18 (Tube type)', 'MC', '4,4', 'SS 18', 'Corsa', 'Tubetipe', '131000'),
(21, 'SS18708017TT', '70/80 - 17 M/C 35P Corsa SS18 (Tube type)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubetipe', '139000'),
(22, 'SS18709017TT', '70/90 - 17 M/C 38P CORSA SS18 (Tube type)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubetipe', '156000'),
(23, 'SS18808017TT', '80/80 - 17 M/C 41P Corsa SS18 (Tube type)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubetipe', '175000'),
(24, 'SS18809017TT', '80/90 - 17 M/C 44P CORSA SS18 (Tube type)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubetipe', '193000'),
(25, 'SS18908017TT', '90/80 - 17 M/C 46P Corsa SS18 (Tube type)', 'MC', '5,8', 'SS 18', 'Corsa', 'Tubetipe', '219000'),
(26, 'ST0822517TT', '2.25 - 17 33L Corsa ST08 (Tube type)', 'MC', '4,6', 'ST 08', 'Corsa', 'Tubetipe', '124000'),
(27, 'ST0825017TT', '2.50 - 17 38L Corsa ST08 (Tube type)', 'MC', '4,8', 'ST 08', 'Corsa', 'Tubetipe', '151000'),
(28, 'ST0827517TT', '2.75 - 17 41P Corsa ST08 (Tube type)', 'MC', '4,8', 'ST 08', 'Corsa', 'Tubetipe', '189000'),
(29, 'TER709017TT', '70/90-17 M/C 38P CORSA Terminat 012 (Tube type)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubetipe', '156000'),
(30, 'TER808017TT', '80/80-17 M/C 41P CORSA Terminat 012 (Tube type)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubetipe', '175000'),
(31, 'TER809017TT', '80/90-17 M/C 44P CORSA Terminat 012 (Tube type)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubetipe', '193000'),
(32, 'TER908017TT', '90/80-17 M/C 46P CORSA Terminat 012 (Tube type)', 'MC', '5,8', 'TERMINAT 012', 'Corsa', 'Tubetipe', '219000'),
(33, 'AT27517TT', '2.75-17 M/C 41P Corsa AT-007 T/T (Tube type)', 'MC', '7,7', 'AT 007', 'Corsa', 'Tubetipe', '187000'),
(34, 'AT30017TT', '300-17 M/C 45S Corsa AT-007 T/T (Tube type)', 'MC', '7,9', 'AT 007', 'Corsa', 'Tubetipe', '224000'),
(35, 'AT00730018TT', '300-18 M/C 47S Corsa AT-007 T/T (Tube type)', 'MC', '7,9', 'AT 007', 'Corsa', 'Tubetipe', '247000'),
(36, 'AT0125017TT', '2.50-17 38L Corsa AT01 T/T (Tube type)', 'MC', '5,8', 'AT 01', 'Corsa', 'Tubetipe', '151000'),
(37, 'AT027517TT', '2.75-17 41P Corsa AT02 T/T (Tube type)', 'MC', '5,8', 'AT 02', 'Corsa', 'Tubetipe', '187000'),
(38, 'S01709014TL', '70/90 - 14 M/C 34P Corsa S01 TL (Tubeless)', 'MC', '4,3', 'S 01', 'Corsa', 'Tubeless', '162000'),
(39, 'S01809014TL', '80/90 - 14 M/C 4OP Corsa S01 TL (Tubeless)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubeless', '185000'),
(40, 'S01909014TL', '90/90 - 14 M/C 46P Corsa S01 TL (Tubeless)', 'MC', '5,8', 'S 01', 'Corsa', 'Tubeless', '223000'),
(41, 'S01709017TL', '70/90 - 17 M/C 38P Corsa S01 TL (Tubeless)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubeless', '189000'),
(42, 'S01808017TL', '80/80 -17 M/C 41P Corsa S01 (Tubeless)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubeless', '219000'),
(43, 'S01809017TL', '80/90 - 17 M/C 44P Corsa S01 TL (Tubeless)', 'MC', '4,8', 'S 01', 'Corsa', 'Tubeless', '227000'),
(44, 'S01908017TL', '90/80 -17 M/C 46P Corsa S01 (Tubeless)', 'MC', '5,8', 'S 01', 'Corsa', 'Tubeless', '278000'),
(45, 'S011008017TL', '100/80 - 17 M/C 52S CORSA S01 T/L', 'MC', '6,0', 'S 01', 'Corsa', 'Tubeless', '331000'),
(46, 'S22709016TL', '70/90-16 36P Corsa S 22 (Tubeless)', 'MC', '4,8', 'S 22', 'Corsa', 'Tubeless', '195000'),
(47, 'S22809016TL', '80/90-16 43P Corsa S 22 (Tubeless)', 'MC', '4,8', 'S 22', 'Corsa', 'Tubeless', '230000'),
(48, 'S33808014TL', '80/80 - 14 M/C 38P Corsa S33 TL (Tubeless)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubeless', '183000'),
(49, 'S33908014TL', '90/80 - 14 M/C 43P Corsa S33 TL (Tubeless)', 'MC', '5,8', 'S 33', 'Corsa', 'Tubeless', '219000'),
(50, 'S331008014TL', '100/80 - 14 M/C 48S Corsa S33 TL (Tubeless)', 'MC', '6,0', 'S 33', 'Corsa', 'Tubeless', '262000'),
(51, 'S331108014TL', '110/80 - 14 M/C 53S Corsa S33 TL (Tubeless)', 'MC', '6,0', 'S 33', 'Corsa', 'Tubeless', '295000'),
(52, 'S33709017TL', '70/90-17 M/C 38P Corsa S33 T/L (Tubeless)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubeless', '189000'),
(53, 'S33808017TL', '80/80-17 M/C 41P Corsa S33 T/L (Tubeless)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubeless', '219000'),
(54, 'S33809017TL', '80/90-17 M/C 44P Corsa S33 T/L (Tubeless)', 'MC', '4,8', 'S 33', 'Corsa', 'Tubeless', '227000'),
(55, 'S33908017TL', '90/80-17 M/C 46P Corsa S33 T/L (Tubeless)', 'MC', '5,8', 'S 33', 'Corsa', 'Tubeless', '278000'),
(56, 'S331108017TL', '110/80 - 17 M/C 57S Corsa S33 T/L (Tubeless)', 'MC', '6,2', 'S 33', 'Corsa', 'Tubeless', '368000'),
(57, 'S331307017TL', '130/70 - 17 M/C 62S Corsa S33 T/L (Tubeless)', 'MC', '6,7', 'S 33', 'Corsa', 'Tubeless', '492000'),
(58, 'S22709014TL', '70/90-14 M/C 34P Corsa S22 T/L (Tubeless)', 'MC', '4,3', 'S22', 'Corsa', 'Tubeless', '162000'),
(59, 'S22809014TL', '80/90-14 40P Corsa S 22 (Tubeless)', 'MC', '4,8', 'S22', 'Corsa', 'Tubeless', '185000'),
(60, 'S22909014TL', '90/90-14 46P Corsa S 22 (Tubeless)', 'MC', '5,8', 'S22', 'Corsa', 'Tubeless', '223000'),
(61, 'S88808014TL', '80/80 - 14 43P CORSA S88 TL (Tubeless)', 'MC', '4,8', 'S88', 'Corsa', 'Tubeless', '183000'),
(62, 'S88908014TL', '90/80 - 14 43P CORSA S88 TL (Tubeless)', 'MC', '5,3', 'S88', 'Corsa', 'Tubeless', '219000'),
(63, 'S881108014TL', '110/80 - 14 53S CORSA S88 TL (Tubeless)', 'MC', '5,8', 'S88', 'Corsa', 'Tubeless', '262000'),
(64, 'S881008014TL', '100/80 - 14 48S CORSA S88 TL (Tubeless)', 'MC', '5,8', 'S88', 'Corsa', 'Tubeless', '295000'),
(65, 'S88709017TL', '70/90-17 M/C 44P Corsa S88 TL (Tubeless)', 'MC', '4,3', 'S88', 'Corsa', 'Tubeless', '189000'),
(66, 'S88809017TL', '80/90-17 M/C 44P Corsa S88 TL (Tubeless)', 'MC', '4,8', 'S88', 'Corsa', 'Tubeless', '227000'),
(67, 'S88909017TL', '90/90-17 M/C 44P Corsa S88 TL (Tubeless)', 'MC', '5,3', 'S88', 'Corsa', 'Tubeless', '269000'),
(68, 'SPR1008014TL', '100/80-14 M/C 48S Corsa Sport Rain T/L (Tubeless)', 'MC', '6,2', 'SPORT RAIN', 'Corsa', 'Tubeless', '262000'),
(69, 'SPR1207014TL', '120/70 - 14 M/C 55S Corsa Sport Rain TL (Tubeless)', 'MC', '6,2', 'SPORT RAIN', 'Corsa', 'Tubeless', '316000'),
(70, 'SPR709017TL', '70/90-17 M/C 38P Corsa Sport Rain T/L (Tubeless)', 'MC', '4,3', 'SPORT RAIN', 'Corsa', 'Tubeless', '189000'),
(71, 'SPR809017TL', '80/90-17 M/C 44P Corsa Sport Rain T/L (Tubeless)', 'MC', '4,8', 'SPORT RAIN', 'Corsa', 'Tubeless', '227000'),
(72, 'SPR908017TL', '90/80-17 M/C 46S Corsa SPORT RAIN T/L (Tubeless)', 'MC', '5,6', 'SPORT RAIN', 'Corsa', 'Tubeless', '278000'),
(73, 'SPR1008017TL', '100/80-17 M/C 46P Corsa SPORT RAIN T/L (Tubeless)', 'MC', '5,8', 'SPORT RAIN', 'Corsa', 'Tubeless', '331000'),
(74, 'SS18709014TL', '70/90 - 14 M/C 34P Corsa SS18 TL (Tubeless)', 'MC', '4,3', 'SS 18', 'Corsa', 'Tubeless', '162000'),
(75, 'SS18809014TL', '80/90 - 14 M/C 40P Corsa SS18 TL (Tubeless)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubeless', '185000'),
(76, 'SS18909014TL', '90/90 - 14 M/C 46P Corsa SS18 TL (Tubeless)', 'MC', '5,8', 'SS 18', 'Corsa', 'Tubeless', '223000'),
(77, 'SS18808017TL', '80/80 - 17 M/C 41P Corsa SS18 TL (Tubeless)', 'MC', '4,8', 'SS 18', 'Corsa', 'Tubeless', '219000'),
(78, 'SS18908017TL', '90/80 - 17 M/C 46P Corsa SS18 TL (Tubeless)', 'MC', '5,8', 'SS 18', 'Corsa', 'Tubeless', '278000'),
(79, 'SS181008017TL', '100/80-17 M/C 52S Corsa SS18 TL', 'MC', '6,0', 'SS 18', 'Corsa', 'Tubeless', '331000'),
(80, 'SS181208017TL', '120/80-17 M/C 61S Corsa SS18 TL', 'MC', '6,5', 'SS 18', 'Corsa', 'Tubeless', '424000'),
(81, 'S123709017TL', '70/90-17 M/C 38P Corsa S123 TL (Tubeless)', 'MC', '4,8', 'S 123', 'Corsa', 'Tubeless', '189000'),
(82, 'S123809017TL', '80/90-17 M/C 44P Corsa S123 TL (Tubeless)', 'MC', '4,8', 'S 123', 'Corsa', 'Tubeless', '227000'),
(83, 'S123907017TL', '90/70 - 17 M/C 45S Corsa S123 TL (Tubeless)', 'MC', '5,8', 'S 123', 'Corsa', 'Tubeless', '270000'),
(84, 'S123909017TL', '90/90-17 M/C 49P Corsa S123 T/L (Tubeless)', 'MC', '5,8', 'S 123', 'Corsa', 'Tubeless', '269000'),
(85, 'S1231007017HTL', '100/70 - 17 M/C 49H Corsa S123 TL (Tubeless)', 'MC', '6,0', 'S 123', 'Corsa', 'Tubeless', '328000'),
(86, 'S1231009017TL', '100/90-17 M/C 55P CORSA S123 T/L', 'MC', '6,0', 'S 123', 'Corsa', 'Tubeless', '331000'),
(87, 'S1231107017TL', '110/70 - 17 M/C 54S Corsa S123 TL (Tubeless)', 'MC', '6,2', 'S 123', 'Corsa', 'Tubeless', '372000'),
(88, 'S1231108017TL', '110/80-17 M/C 57S CORSA S123 T/L', 'MC', '6,0', 'S 123', 'Corsa', 'Tubeless', '368000'),
(89, 'S1231207017TL', '120/70 - 17 M/C 58S Corsa S123 TL (Tubeless)', 'MC', '6,5', 'S 123', 'Corsa', 'Tubeless', '410000'),
(90, 'S1231208017TL', '120/80 - 17 M/C 61S CORSA S123 T/L', 'MC', '6,5', 'S 123', 'Corsa', 'Tubeless', '424000'),
(91, 'S1231307017TL', '130/70 - 17 M/C 62S Corsa S123 TL (Tubeless)', 'MC', '6,7', 'S 123', 'Corsa', 'Tubeless', '492000'),
(92, 'S1231506017TL', '150/60-17 M/C 66S Corsa S123 T/L (Tubeless)', 'MC', '6,7', 'S 123', 'Corsa', 'Tubeless', '577000'),
(93, 'S123909018TL', '90/90-18 M/C 51P CORSA S123 T/L', 'MC', '5,8', 'S 123', 'Corsa', 'Tubeless', '313000'),
(94, 'S1231008018TL', '100/80 - 18 M/C 53S Corsa S123 TL (Tubeless)', 'MC', '6,0', 'S 123', 'Corsa', 'Tubeless', '372000'),
(95, 'S1231108018TL', '110/80 - 18 M/C 58S Corsa S123 TL (Tubeless)', 'MC', '6,2', 'S 123', 'Corsa', 'Tubeless', '413000'),
(96, 'TER709014TL', '70/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)', 'MC', '4,3', 'TERMINAT 012', 'Corsa', 'Tubeless', '162000'),
(97, 'TER809014TL', '80/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubeless', '185000'),
(98, 'TER909014TL', '90/90-14 M/C 34P CORSA Terminat 012 T/L (Tubeless)', 'MC', '5,3', 'TERMINAT 012', 'Corsa', 'Tubeless', '223000'),
(99, 'TER709017TL', '70/90-17 M/C 38P CORSA Terminat 012 T/L (Tubeless)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubeless', '189000'),
(100, 'TER808017TL', '80/80-17 M/C 41P CORSA Terminat 012 T/L (Tubeless)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubeless', '219000'),
(101, 'TER809017TL', '80/90-17 M/C 48P CORSA Terminat 012 T/L (Tubeless)', 'MC', '4,8', 'TERMINAT 012', 'Corsa', 'Tubeless', '227000'),
(102, 'TER908017TL', '90/80-17 M/C 46P CORSA Terminat 012 T/L (Tubeless)', 'MC', '5,8', 'TERMINAT 012', 'Corsa', 'Tubeless', '278000'),
(103, 'MT00725017TT', '2.50 - 17 38L Corsa MT007 (Tube type)', 'MC', '5,8', 'MT 007', 'Corsa', 'Tubetipe', '148000'),
(104, 'MT00727517TT', '2.75 - 17 41P Corsa MT007 (Tube type)', 'MC', '5,8', 'MT 007', 'Corsa', 'Tubetipe', '181000'),
(105, 'MTC25017TT', '2.50-17 M/C 38M Corsa MT-Cross T/T (Tube type)', 'MC', '9,1', 'MT CROSS', 'Corsa', 'Tubetipe', '153000'),
(106, 'MTC27517TT', '2.75-17 M/C 41M Corsa MT-Cross T/T (Tube type)', 'MC', '9,6', 'MT CROSS', 'Corsa', 'Tubetipe', '185000'),
(107, 'MTC30017TT', '300-17 M/C 45M Corsa MT CROSS (Tube type)', 'MC', '10,1', 'MT CROSS', 'Corsa', 'Tubetipe', '221000'),
(108, 'MTX7010014TT', '70/100 - 14 M/C 49M Corsa MT-Cross X (Tube Type)', 'MC', '10,1', 'MT Cross-X', 'Corsa', 'Tubetipe', '320000'),
(109, 'MTX9010014TT', '90/100 - 14 M/C 49M Corsa MT-Cross X (Tube Type)', 'MC', '10,1', 'MT Cross-X', 'Corsa', 'Tubetipe', '355000'),
(110, 'MTX9010016TT', '90/100 - 16 M/C 51M Corsa MT-Cross X (Tube Type)', 'MC', '13,4', 'MT Cross-X', 'Corsa', 'Tubetipe', '400000'),
(111, 'MTX8010017TT', '80/100 - 17 46 M Corsa MT-Cross X TT (Tube Type)', 'MC', '12,0', 'MT Cross-X', 'Corsa', 'Tubetipe', '328000'),
(112, 'MTX9010017TT', '90/100 - 17 M/C 53M Corsa MT-Cross X (Tube Type)', 'MC', '13,4', 'MT Cross-X', 'Corsa', 'Tubetipe', '337000'),
(113, 'MTX10010018TT', '100/100 - 18 M/C 59M Corsa MT-Cross X (Tube Type)', 'MC', '15,8', 'MT Cross-X', 'Corsa', 'Tubetipe', '508000'),
(114, 'MTX7010019TT', '70/100 - 19 42 M Corsa MT-Cross X TT (Tube Type)', 'MC', '8,6', 'MT Cross-X', 'Corsa', 'Tubetipe', '380000'),
(115, 'MTR1109019TT', '110/90 - 19 62 M Corsa MT-Cross R TT (Tube Type)', 'MC', '15,8', 'MT Cross-X', 'Corsa', 'Tubetipe', '608000'),
(116, 'MTR11010018TT', '110/100 - 18 64 M Corsa MT-Cross R TT (Tube Type)', 'MC', '15,8', 'MT Cross-R', 'Corsa', 'Tubetipe', '563000'),
(117, 'MTR1109019TT', '110/90 - 19 62 M Corsa MT-Cross R TT (Tube Type)', 'MC', '15,8', 'MT Cross-R', 'Corsa', 'Tubetipe', '587000'),
(118, 'MTR8010021TT', '80/100 - 21 59M Corsa MT-Cross R (Tube Type)', 'MC', '12,0', 'MT Cross-R', 'Corsa', 'Tubetipe', '405000'),
(119, 'D01509017TT', '50/90-17 M/C 21S Corsa D 01 (Tube type)', 'MC', '2,9', 'D 01', 'Corsa', 'Tubetipe', '165000'),
(120, 'D01608017TT', '60/80-17 M/C 27S Corsa D 01 (Tube type)', 'MC', '2,9', 'D 01', 'Corsa', 'Tubetipe', '219000'),
(121, 'R46808014TL', '80/80-14 M/C 43S Corsa R46 T/L (Tubeless)', 'MC', '3,1', 'R 46', 'Corsa', 'Tubeless', '250000'),
(122, 'R46908014TL', '90/80-14 M/C 43S Corsa R46 T/L (Tubeless)', 'MC', '3,4', 'R 46', 'Corsa', 'Tubeless', '284000'),
(123, 'R461008014TL', '100/80-14 M/C 43S Corsa R46 T/L (Tubeless)', 'MC', '3,5', 'R 46', 'Corsa', 'Tubeless', '310000'),
(124, 'R46908017TL', '90/80-17 M/C 46S Corsa R 46 T/L (Tubeless)', 'MC', '3,1', 'R 46', 'Corsa', 'Tubeless', '364000'),
(125, 'R461206017TL', '120/60 - 17 M/C 55S Corsa R 46 T/L (Tubeless)', 'MC', '3,8', 'R 46', 'Corsa', 'Tubeless', '660000'),
(126, 'R461506017TL', '150/60 - 17 M/C 66S Corsa R 46 T/L (Tubeless)', 'MC', '4,4', 'R 46', 'Corsa', 'Tubeless', '860000'),
(127, 'R26808014TL', '80/80 - 14 38S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,8', 'R26', 'Corsa', 'Tubeless', '186000'),
(128, 'R26908014TL', '90/80 - 14 43S Corsa Platinum R26 TL (Tubeless)', 'MC', '5,3', 'R26', 'Corsa', 'Tubeless', '232000'),
(129, 'R261008014TL', '100/80 - 14 48S Corsa Platinum R26 TL (Tubeless)', 'MC', '5,8', 'R26', 'Corsa', 'Tubeless', '273000'),
(130, 'R26708017TL', '70/80 - 17 35S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,3', 'R26', 'Corsa', 'Tubeless', '185000'),
(131, 'R26808017TL', '80/80 - 17 41S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,8', 'R26', 'Corsa', 'Tubeless', '228000'),
(132, 'R26908017TL', '90/80 - 17 46S Corsa Platinum R26 TL (Tubeless)', 'MC', '5,3', 'R26', 'Corsa', 'Tubeless', '289000'),
(133, 'R2610070-17TL', '100/70-17 49S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,8', 'R26', 'Corsa', 'Tubeless', '340000'),
(134, 'R261008017TL', '100/80 - 17 52S Corsa Platinum R26 TL (Tubeless)', 'MC', '5,8', 'R26', 'Corsa', 'Tubeless', '340000'),
(135, 'R261107017TL', '110/70-17 54S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,8', 'R26', 'Corsa', 'Tubeless', '377000'),
(136, 'R261108017TL', '110/80-17 57S Corsa Platinum R26 TL (Tubeless)', 'MC', '5,8', 'R26', 'Corsa', 'Tubeless', '379000'),
(137, 'R261207017TL', '120/70-17 58S Corsa Platinum R26 TL (Tubeless)', 'MC', '6,2', 'R26', 'Corsa', 'Tubeless', '432000'),
(138, 'R261307017TL', '130/70-17 62S Corsa Platinum R26 TL (Tubeless)', 'MC', '6,2', 'R26', 'Corsa', 'Tubeless', '507000'),
(139, 'R931107017TL', '110/70-17 54S Corsa Platinum R26 TL (Tubeless)', 'MC', '4,8', 'R93', 'Corsa', 'Tubeless', '530000'),
(140, 'R931206017TL', '120/60 - 17 55H Corsa Platinum R93 TL (Tubeless)', 'MC', '4,0', 'R93', 'Corsa', 'Tubeless', '580000'),
(141, 'R931307017TL', '130/70-17 M/C 62H Corsa Platinum R93 (Tubeless)', 'MC', '6,2', 'R93', 'Corsa', 'Tubeless', '660000'),
(142, 'R931506017TL', '150/60 - 17 66H Corsa Platinum R93 TL (Tubeless)', 'MC', '5,6', 'R93', 'Corsa', 'Tubeless', '817000'),
(143, 'R931606017TL', '160/60 - 17 69H Corsa Platinum R93 TL (Tubeless)', 'MC', '6,3', 'R93', 'Corsa', 'Tubeless', '900000'),
(144, 'R99808014TL', '80/80 - 14 38S Corsa Platinum R99 TL (Tubeless)', 'MC', '4,8', 'R99', 'Corsa', 'Tubeless', '189000'),
(145, 'R99908014TL', '90/80 - 14 43S Corsa Platinum R99 TL (Tubeless)', 'MC', '5,3', 'R99', 'Corsa', 'Tubeless', '232000'),
(146, 'R991008014TL', '100/80 - 14 48S Corsa Platinum R99 TL (Tubeless)', 'MC', '5,8', 'R99', 'Corsa', 'Tubeless', '273000'),
(147, 'R991108014TL', '110/80 - 14 53S Corsa Platinum R99 TL (Tubeless)', 'MC', '5,8', 'R99', 'Corsa', 'Tubeless', '311000'),
(148, 'R991207014TL', '120/70 - 14 55S Corsa Platinum R99 TL (Tubeless)', 'MC', '6,2', 'R99', 'Corsa', 'Tubeless', '336000'),
(149, 'R99908017TL', '90/80 - 17 46S Corsa Platinum R99 TL (Tubeless)', 'MC', '5,3', 'R99', 'Corsa', 'Tubeless', '289000'),
(150, 'R991008017TL', '100/80 - 17 52S Corsa Platinum R99 TL (Tubeless)', 'MC', '5,8', 'R99', 'Corsa', 'Tubeless', '357000'),
(151, 'R991107017TL', '110/70 - 17 54S Corsa Platinum R99 TL (Tubeless)', 'MC', '6,2', 'R99', 'Corsa', 'Tubeless', '396000'),
(152, 'R991307017TL', '130/70 - 17 62S Corsa Platinum R99 TL (Tubeless)', 'MC', '6,2', 'R99', 'Corsa', 'Tubeless', '521000'),
(153, 'V22709014TL', '70/90-14 34P Corsa Platinum V22 TL (Tubeless)', 'MC', '4,8', 'V22', 'Corsa', 'Tubeless', '177000'),
(154, 'V22809014TL', '80/90 - 14 40P Corsa Platinum V22 TL (Tubeless)', 'MC', '5,3', 'V22', 'Corsa', 'Tubeless', '204000'),
(155, 'V22909014TL', '90/90 - 14 46P Corsa Platinum V22 TL (Tubeless)', 'MC', '5,8', 'V22', 'Corsa', 'Tubeless', '236000'),
(156, 'V22709017TL', '70/90-17 38P Corsa Platinum V22 TL (Tubeless)', 'MC', '4,8', 'V22', 'Corsa', 'Tubeless', '199000'),
(157, 'V22809017TL', '80/90 - 17 44P Corsa Platinum V22 TL (Tubeless)', 'MC', '5,8', 'V22', 'Corsa', 'Tubeless', '238000'),
(158, 'V33709014TT', '70/90-14 34P Corsa Platinum V33 TL (Tube Type)', 'MC', '4,8', 'V33', 'Corsa', 'Tubetipe', '143000'),
(159, 'V33809014TT', '80/90-14 40P Corsa Platinum V33 TL (Tube Type)', 'MC', '5,3', 'V33', 'Corsa', 'Tubetipe', '175000'),
(160, 'V33909014TT', '90/90-14 46P Corsa Platinum V33 TL (Tube Type)', 'MC', '5,8', 'V33', 'Corsa', 'Tubetipe', '211000'),
(161, 'V33709017TT', '70/90-17 38P Corsa Platinum V33 TL (Tube Type)', 'MC', '4,8', 'V33', 'Corsa', 'Tubetipe', '164000'),
(162, 'V33809017TT', '80/90-17 44P Corsa Platinum V22 TL (Tube Type)', 'MC', '5,8', 'V33', 'Corsa', 'Tubetipe', '211000'),
(163, 'CRS1107013TL', '110/70-13 48P Corsa Platinum Cross S TL (Tubeless)', 'MC', '4,8', 'Cross S', 'Corsa', 'Tubeless', '285000'),
(164, 'CRS1207013TL', '120/70-13 53S Corsa Platinum Cross S TL (Tubeless)', 'MC', '4,8', 'Cross S', 'Corsa', 'Tubeless', '325000'),
(165, 'CRS1307013TL', '130/70-13 57S Corsa Platinum Cross S TL (Tubeless)', 'MC', '5,8', 'Cross S', 'Corsa', 'Tubeless', '350000'),
(166, 'CRS1407013TL', '140/70-13 61S Corsa Platinum Cross S TL (Tubeless)', 'MC', '5,8', 'Cross S', 'Corsa', 'Tubeless', '390000'),
(167, 'CRS809014TL', '80/90 - 14 40P Corsa Platinum Cross S TL (Tubeless)', 'MC', '5,6', 'Cross S', 'Corsa', 'Tubeless', '201000'),
(168, 'CRS909014TL', '90/90 - 14 46P Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,0', 'Cross S', 'Corsa', 'Tubeless', '230000'),
(169, 'CRS908014TL', '90/80 - 14 43P Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,0', 'Cross S', 'Corsa', 'Tubeless', '240000'),
(170, 'CRS1008014TL', '100/80-14 48P Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,2', 'Cross S', 'Corsa', 'Tubeless', '272000'),
(171, 'CRS1108014TL', '110/80-14 53P Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,5', 'Cross S', 'Corsa', 'Tubeless', '313000'),
(172, 'CRS709017TL', '70/90 - 17 38P Corsa Platinum Cross S TL (Tubeless)', 'MC', '4,8', 'Cross S', 'Corsa', 'Tubeless', '197000'),
(173, 'CRS809017TL', '80/90-17 44P Corsa Platinum Cross S TL (Tubeless)', 'MC', '5,8', 'Cross S', 'Corsa', 'Tubeless', '239000'),
(174, 'CRS909017TL', '90/90 - 17 49P Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,0', 'Cross S', 'Corsa', 'Tubeless', '286000'),
(175, 'CRS1008017TL', '100/80-17 52S Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,2', 'Cross S', 'Corsa', 'Tubeless', '340000'),
(176, 'CRS1108017TL', '110/80-17 57S Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,5', 'Cross S', 'Corsa', 'Tubeless', '378000'),
(177, 'CRS1208017TL', '120/80-17 61S Corsa Platinum Cross S TL (Tubeless)', 'MC', '7,2', 'Cross S', 'Corsa', 'Tubeless', '432000'),
(178, 'CRS1308017TL', '130/80-17 65S Corsa Platinum Cross S TL (Tubeless)', 'MC', '8,2', 'Cross S', 'Corsa', 'Tubeless', '527000'),
(179, 'CRS1408017TL', '140/80-17 69S Corsa Platinum Cross S TL (Tubeless)', 'MC', '8,4', 'Cross S', 'Corsa', 'Tubeless', '610000'),
(180, 'CRS1108019TL', '110/80-19 69S Corsa Platinum Cross S TL (Tubeless)', 'MC', '6,5', 'Cross S', 'Corsa', 'Tubeless', '750000'),
(181, 'M51107013TL', '110/70-13 48P Corsa Platinum M5 (Tubeless)', 'MC', '4,8', 'M5', 'Corsa', 'Tubeless', '270000'),
(182, 'M51207013TL', '120/70-13 53S Corsa Platinum M5 (Tubeless)', 'MC', '4,8', 'M5', 'Corsa', 'Tubeless', '325000'),
(183, 'M51307013TL', '130/70-13 57S Corsa Platinum M5 (Tubeless)', 'MC', '5,8', 'M5', 'Corsa', 'Tubeless', '350000'),
(184, 'M51407013TL', '140/70-13 61S Corsa Platinum M5 (Tubeless)', 'MC', '5,8', 'M5', 'Corsa', 'Tubeless', '390000'),
(185, 'M51506013TL', '150/60-13 61S Corsa Platinum M5 (Tubeless)', 'MC', '5,8', 'M5', 'Corsa', 'Tubeless', '420000');

-- --------------------------------------------------------

--
-- Table structure for table `db_distributor`
--

CREATE TABLE `db_distributor` (
  `id_distributor` int(200) NOT NULL,
  `kode_distributor` varchar(100) NOT NULL,
  `nama_distributor` varchar(100) NOT NULL,
  `grup` enum('Internasional','Lokal') NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `area` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_distributor`
--

INSERT INTO `db_distributor` (`id_distributor`, `kode_distributor`, `nama_distributor`, `grup`, `alamat`, `area`, `kota`, `telepon`) VALUES
(3, 'L0004', 'fasgasgas1', 'Lokal', 'gasghrrh', 'indonesia', 'hsjjuru', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `db_karyawan`
--

CREATE TABLE `db_karyawan` (
  `id_karyawan` int(50) NOT NULL,
  `NIK` int(50) NOT NULL,
  `nama_karyawan` varchar(100) NOT NULL,
  `departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_karyawan`
--

INSERT INTO `db_karyawan` (`id_karyawan`, `NIK`, `nama_karyawan`, `departemen`) VALUES
(1, 123142141, 'M. Sulkan Arif', 'TS'),
(3, 2147483647, 'Reny', 'TS');

-- --------------------------------------------------------

--
-- Table structure for table `db_kerusakan`
--

CREATE TABLE `db_kerusakan` (
  `id_kerusakan` int(11) NOT NULL,
  `kode_kerusakan` varchar(20) NOT NULL,
  `nama_kerusakan` varchar(100) NOT NULL,
  `sebab` enum('Pabrik','Pemakai') NOT NULL,
  `disposisi` enum('Ganti','Tolak') NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_kerusakan`
--

INSERT INTO `db_kerusakan` (`id_kerusakan`, `kode_kerusakan`, `nama_kerusakan`, `sebab`, `disposisi`, `keterangan`) VALUES
(5, 'T002', 'Sidewall Separation', 'Pabrik', 'Ganti', 'Factory'),
(12, 'A002', 'SCP', 'Pemakai', 'Tolak', 'Bego Lo'),
(13, 'A002', 'S CBU', 'Pabrik', 'Ganti', '-'),
(14, 'A001', 'TCP', 'Pemakai', 'Tolak', 'Bego Lo'),
(15, 'A003', 'BTB K', 'Pemakai', 'Ganti', 'fasfsafe'),
(16, 'A001', 'LCU', 'Pabrik', 'Ganti', 'Bego Lo');

-- --------------------------------------------------------

--
-- Table structure for table `db_toko`
--

CREATE TABLE `db_toko` (
  `id_toko` int(11) NOT NULL,
  `kode_toko` varchar(50) NOT NULL,
  `nama_toko` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `telepon` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_toko`
--

INSERT INTO `db_toko` (`id_toko`, `kode_toko`, `nama_toko`, `alamat`, `kota`, `telepon`) VALUES
(1, 'T001', 'maju motor', 'buntu', 'makasar', 86721),
(2, 'T001', 'vsvdsv', 'sini', 'kendari', 857253213);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_ban`
--
ALTER TABLE `db_ban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_distributor`
--
ALTER TABLE `db_distributor`
  ADD PRIMARY KEY (`id_distributor`);

--
-- Indexes for table `db_karyawan`
--
ALTER TABLE `db_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `db_kerusakan`
--
ALTER TABLE `db_kerusakan`
  ADD PRIMARY KEY (`id_kerusakan`);

--
-- Indexes for table `db_toko`
--
ALTER TABLE `db_toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_ban`
--
ALTER TABLE `db_ban`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `db_distributor`
--
ALTER TABLE `db_distributor`
  MODIFY `id_distributor` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_karyawan`
--
ALTER TABLE `db_karyawan`
  MODIFY `id_karyawan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `db_kerusakan`
--
ALTER TABLE `db_kerusakan`
  MODIFY `id_kerusakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `db_toko`
--
ALTER TABLE `db_toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
