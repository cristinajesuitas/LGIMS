-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 02:18 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etanayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `cap_barangay`
--

CREATE TABLE `cap_barangay` (
  `id` int(5) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `cap_province_id` int(2) UNSIGNED NOT NULL,
  `cap_municipal_id` int(4) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_barangay`
--

INSERT INTO `cap_barangay` (`id`, `cap_region_id`, `cap_province_id`, `cap_municipal_id`, `name`, `code`) VALUES
(1, 1, 3, 1, 'qwekqwe', '12312'),
(2, 1, 6, 2, 'asdasd', '122'),
(3, 1, 8, 1, 'asdasd', '1232'),
(4, 1, 8, 1, 'saassadas', '123142'),
(5, 2, 14, 2, 'asdasdasd', '12312'),
(6, 1, 19, 1, 'asdsas', '12312');

-- --------------------------------------------------------

--
-- Table structure for table `cap_citizen`
--

CREATE TABLE `cap_citizen` (
  `id` int(6) UNSIGNED NOT NULL,
  `fname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdate` date NOT NULL,
  `cap_civilstatus_id` int(2) UNSIGNED NOT NULL,
  `cap_disability_id` int(2) UNSIGNED NOT NULL,
  `cap_citizenship_id` int(2) UNSIGNED NOT NULL,
  `cap_ethnicity_id` int(2) UNSIGNED NOT NULL,
  `cap_sex_id` int(2) UNSIGNED NOT NULL,
  `cap_occupation_id` int(2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_citizenship`
--

CREATE TABLE `cap_citizenship` (
  `ID` int(3) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_citizenship`
--

INSERT INTO `cap_citizenship` (`ID`, `name`, `code`) VALUES
(1, 'BB BB', '1'),
(2, 'aa aa', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cap_civilstatus`
--

CREATE TABLE `cap_civilstatus` (
  `id` int(1) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_civilstatus`
--

INSERT INTO `cap_civilstatus` (`id`, `name`, `code`) VALUES
(1, 'Single', '1'),
(2, 'Married', '2'),
(3, 'Widowed', '3'),
(4, 'Divorced-Seprated', '4'),
(5, 'Common-law Live in', '5'),
(6, 'Unknown', '6');

-- --------------------------------------------------------

--
-- Table structure for table `cap_designation`
--

CREATE TABLE `cap_designation` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_disability`
--

CREATE TABLE `cap_disability` (
  `id` int(1) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_disability`
--

INSERT INTO `cap_disability` (`id`, `name`, `code`) VALUES
(1, 'Sensory Disability', '1'),
(2, 'Physical Disability', '2'),
(3, 'Mental Disability', '3'),
(4, 'Not reported', '9');

-- --------------------------------------------------------

--
-- Table structure for table `cap_education`
--

CREATE TABLE `cap_education` (
  `ID` int(3) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_education`
--

INSERT INTO `cap_education` (`ID`, `name`, `code`) VALUES
(3, 'jao', '1'),
(4, 'jp', '2'),
(5, 'jaos', 'a'),
(6, 'jaosj', '123'),
(7, 'jaopc', '999'),
(8, 'fgdfsdrwe', '212'),
(9, 'Grade 1 (K to 12)', '410');

-- --------------------------------------------------------

--
-- Table structure for table `cap_ethnicity`
--

CREATE TABLE `cap_ethnicity` (
  `ID` int(3) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_ethnicity`
--

INSERT INTO `cap_ethnicity` (`ID`, `name`, `code`) VALUES
(1, 'Ken', '1'),
(2, 'Ken(Ken)', '999'),
(3, 'Ken-Ken', '8'),
(4, 'nestor ', '111');

-- --------------------------------------------------------

--
-- Table structure for table `cap_landclass`
--

CREATE TABLE `cap_landclass` (
  `id` int(2) UNSIGNED NOT NULL,
  `cap_lgulevel_ID` int(1) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_landclass`
--

INSERT INTO `cap_landclass` (`id`, `cap_lgulevel_ID`, `name`, `code`) VALUES
(1, 1, 'nestor', '1'),
(2, 3, 'jao', '3');

-- --------------------------------------------------------

--
-- Table structure for table `cap_lgucategory`
--

CREATE TABLE `cap_lgucategory` (
  `id` int(2) UNSIGNED NOT NULL,
  `cap_lgulevel_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_lgucategory`
--

INSERT INTO `cap_lgucategory` (`id`, `cap_lgulevel_id`, `name`, `code`) VALUES
(1, 4, 'Urban', '1'),
(2, 4, 'Rural', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cap_lguclass`
--

CREATE TABLE `cap_lguclass` (
  `ID` int(1) UNSIGNED NOT NULL,
  `cap_lgulevel_id` int(1) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_lguclass`
--

INSERT INTO `cap_lguclass` (`ID`, `cap_lgulevel_id`, `name`, `code`) VALUES
(1, 4, 'zzz', '22'),
(2, 4, 'dasmdksa', '121'),
(3, 1, 'First Class', '1'),
(4, 1, 'knnjbjbj', '0909'),
(5, 2, 'hhuhu', '343'),
(6, 2, 'Second Class', '2'),
(7, 3, 'Third Class', '3'),
(8, 4, 'Fourth Class', '4');

-- --------------------------------------------------------

--
-- Table structure for table `cap_lgudistrict`
--

CREATE TABLE `cap_lgudistrict` (
  `id` int(1) UNSIGNED NOT NULL,
  `cap_lgulevel_id` int(1) UNSIGNED NOT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_lgulevel`
--

CREATE TABLE `cap_lgulevel` (
  `ID` int(1) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_lgulevel`
--

INSERT INTO `cap_lgulevel` (`ID`, `name`, `code`) VALUES
(1, 'Province', '1'),
(2, 'City', '2'),
(3, 'Municipal', '3'),
(4, 'Barangay', '4');

-- --------------------------------------------------------

--
-- Table structure for table `cap_lguname`
--

CREATE TABLE `cap_lguname` (
  `ID` int(5) UNSIGNED NOT NULL,
  `cap_lgulevel_id` int(1) UNSIGNED NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_lguprofile`
--

CREATE TABLE `cap_lguprofile` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cap_lguclass_id` int(6) UNSIGNED NOT NULL,
  `cap_lgulevel_id` int(1) UNSIGNED NOT NULL,
  `totalbrgy` int(2) UNSIGNED NOT NULL,
  `landarea` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zipcode` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_lguprofile`
--

INSERT INTO `cap_lguprofile` (`id`, `name`, `website`, `cap_lguclass_id`, `cap_lgulevel_id`, `totalbrgy`, `landarea`, `zipcode`) VALUES
(2, 'Francis', 'fb.com', 1, 1, 17, '1234', '1980');

-- --------------------------------------------------------

--
-- Table structure for table `cap_migration`
--

CREATE TABLE `cap_migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_migration`
--

INSERT INTO `cap_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1512448334),
('m130524_201442_init', 1512448340);

-- --------------------------------------------------------

--
-- Table structure for table `cap_municipal`
--

CREATE TABLE `cap_municipal` (
  `id` int(4) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `cap_province_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_municipal`
--

INSERT INTO `cap_municipal` (`id`, `cap_region_id`, `cap_province_id`, `name`, `code`) VALUES
(1, 1, 3, 'dkhkdhkahajdaddadad', '111232123'),
(2, 1, 4, 'hdfkdhfdshdhj', '102039374');

-- --------------------------------------------------------

--
-- Table structure for table `cap_occupation`
--

CREATE TABLE `cap_occupation` (
  `ID` int(2) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_occupation`
--

INSERT INTO `cap_occupation` (`ID`, `name`, `code`) VALUES
(16, 'q', '91'),
(17, 'cis', '12'),
(18, 'xiss', '22'),
(19, '111', '00'),
(20, 'Special Occupation', '0'),
(21, 'Officials of government and special interest orgs, corporate executive,manager,managing, proprietors, and supervisor ', '1'),
(22, 'Professional', '2'),
(23, 'Technicians and Association Professional', '3'),
(24, 'Clerk', '4'),
(25, 'Service Workers and shop and market sales workers', '5'),
(26, 'Farmers, frostry workers and fishermen', '6'),
(27, 'Craft and related trades workers', '7'),
(28, 'Plant and machine operators and assemblers', '8'),
(29, 'Laborers and unskilled workers', '9'),
(30, 'Other, not elsewhere classified, please specify :', '10');

-- --------------------------------------------------------

--
-- Table structure for table `cap_pic`
--

CREATE TABLE `cap_pic` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cap_province`
--

CREATE TABLE `cap_province` (
  `id` int(2) UNSIGNED NOT NULL,
  `cap_region_id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_province`
--

INSERT INTO `cap_province` (`id`, `cap_region_id`, `name`, `code`) VALUES
(3, 1, ' LA UNION', '013300000'),
(4, 1, ' ILOCOS NORTE', '012800000'),
(5, 1, 'ILOCOS SUR', '012900000'),
(6, 1, ' PANGASINAN', '015500000'),
(7, 2, ' NUEVA VIZCAYA', '025000000'),
(8, 2, 'CAGAYAN', '021500000'),
(11, 2, 'ISABELA', '023100000'),
(12, 2, 'QUIRINO', '025700000'),
(13, 2, 'BATANES', '020900000'),
(14, 3, ' BATAAN', '030800000'),
(15, 3, 'ZAMBALES', '037100000'),
(16, 3, ' TARLAC', '036900000'),
(17, 3, ' PAMPANGA', '035400000'),
(18, 3, 'BULACAN', '031400000'),
(19, 3, 'NUEVA ECIJA', '034900000'),
(20, 3, 'AURORA', '037700000'),
(21, 4, 'RIZAL', '045800000'),
(22, 4, 'CAVITE', '042100000'),
(23, 4, ' LAGUNA', '043400000'),
(24, 4, 'BATANGAS', '041000000'),
(25, 4, 'QUEZON', '045600000'),
(26, 17, 'OCCIDENTAL MINDORO', '175100000'),
(27, 17, 'ORIENTAL MINDORO', '175200000'),
(28, 17, 'ROMBLON', '175900000'),
(29, 17, 'PALAWAN', '175300000'),
(30, 17, 'MARINDUQUE', '174000000'),
(31, 5, 'CATANDUANES', '052000000'),
(32, 5, 'CAMARINES NORTE', '051600000'),
(33, 5, 'SORSOGON', '056200000'),
(34, 5, 'ALBAY', '050500000'),
(35, 5, 'MASBATE', '054100000'),
(36, 5, 'CAMARINES SUR', '051700000'),
(37, 6, 'CAPIZ', '061900000'),
(38, 6, 'AKLAN', '060400000'),
(39, 6, 'ANTIQUE', '060600000'),
(40, 6, 'NEGROS OCCIDENTAL', '064500000'),
(41, 6, 'ILOILO', '063000000'),
(42, 6, 'GUIMARAS', '067900000'),
(43, 7, 'NEGROS ORIENTAL', '074600000'),
(44, 7, 'CEBU', '072200000'),
(45, 7, 'BOHOL', '071200000'),
(46, 7, 'SIQUIJOR', '076100000'),
(47, 8, 'SOUTHERN LEYTE', '086400000'),
(48, 8, 'EASTERN SAMAR', '082600000'),
(49, 8, 'NORTHERN SAMAR', '084800000'),
(50, 8, 'SAMAR (WESTERN SAMAR)', '086000000'),
(51, 8, 'LEYTE', '083700000'),
(52, 8, 'BILIRAN', '087800000'),
(53, 9, 'ZAMBOANGA SIBUGAY', '098300000'),
(54, 9, 'ZAMBOANGA DEL NORTE', '097200000'),
(55, 9, 'ZAMBOANGA DEL SUR', '097300000'),
(56, 10, 'MISAMIS OCCIDENTAL', '104200000'),
(57, 10, 'BUKIDNON', '101300000'),
(58, 10, 'LANAO DEL NORTE', '103500000'),
(59, 10, 'MISAMIS ORIENTAL', '104300000'),
(60, 10, 'CAMIGUIN', '101800000'),
(61, 11, 'DAVAO ORIENTAL', '112500000'),
(62, 11, 'COMPOSTELA VALLEY', '118200000'),
(63, 11, 'DAVAO DEL SUR', '112400000'),
(64, 11, 'DAVAO OCCIDENTAL', '118600000'),
(65, 11, 'DAVAO DEL NORTE', '112300000'),
(66, 12, 'SOUTH COTABATO', '126300000'),
(67, 12, 'SULTAN KUDARAT', '126500000'),
(68, 12, 'COTABATO (NORTH COTABATO)', '124700000'),
(69, 12, 'SARANGANI', '128000000'),
(70, 16, 'AGUSAN DEL NORTE', '160200000'),
(71, 16, 'AGUSAN DEL SUR', '160300000'),
(72, 16, 'SURIGAO DEL SUR', '166800000'),
(73, 16, 'SURIGAO DEL NORTE', '166700000'),
(74, 16, 'DINAGAT ISLANDS', '168500000'),
(75, 15, 'TAWI-TAWI', '157000000'),
(76, 15, 'BASILAN', '150700000'),
(77, 15, 'SULU', '156600000'),
(78, 15, 'MAGUINDANAO', '153800000'),
(79, 15, 'LANAO DEL SUR', '153600000');

-- --------------------------------------------------------

--
-- Table structure for table `cap_region`
--

CREATE TABLE `cap_region` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_region`
--

INSERT INTO `cap_region` (`id`, `name`, `code`) VALUES
(1, 'Region I Ilocos Region', '010000000'),
(2, 'Region lI (Cagayan Valley)', '020000000'),
(3, 'Region III (Central Luzon)', '030000000'),
(4, 'Region IV-A (CALABARZON)', '040000000'),
(5, 'Region V (Bicol Region)', '050000000'),
(6, 'Region VI (Western Visayas)', '060000000'),
(7, 'Region VII (Central Visayas)', '070000000'),
(8, 'Region VIII (Eastern Visayas)', '080000000'),
(9, 'Region IX (Zamboanga Peninsula)', '090000000'),
(10, 'Region X (Northern Mindanao)', '100000000'),
(11, 'Region XI (Davao Region)', '110000000'),
(12, 'Region XII (SOCCSKSARGEN)', '120000000'),
(13, 'NCR', '130000000'),
(14, 'CAR', '140000000'),
(15, 'ARMM', '150000000'),
(16, 'Region XIII (Caraga)', '160000000'),
(17, 'MIMAROPA Region', '170000000'),
(18, 'Negros Island Region (NIR)', '180000000');

-- --------------------------------------------------------

--
-- Table structure for table `cap_relationship`
--

CREATE TABLE `cap_relationship` (
  `ID` int(2) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_relationship`
--

INSERT INTO `cap_relationship` (`ID`, `name`, `code`) VALUES
(8, 'Head', '1'),
(9, 'Spouse', '2'),
(10, 'Son', '3'),
(11, 'Daughter', '4'),
(12, 'Stepson', '5'),
(13, 'Stepdaughter', '6'),
(14, 'Son in Law ', '7'),
(15, 'Daughter in Law ', '8'),
(16, 'Grandson', '9'),
(17, 'Granddaughter ', '10'),
(18, 'Father', '11'),
(19, 'Mother', '12'),
(20, 'Brother', '13'),
(21, 'Sister', '14'),
(22, 'Uncle', '15'),
(23, 'Aunt', '16'),
(24, 'Newphew', '17'),
(25, 'Niece', '18'),
(26, 'Other Relative', '19'),
(27, 'Non Relative', '20'),
(28, 'Boarder ', '21'),
(29, 'Domestic Helper', '22');

-- --------------------------------------------------------

--
-- Table structure for table `cap_religion`
--

CREATE TABLE `cap_religion` (
  `id` int(3) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `code` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cap_religion`
--

INSERT INTO `cap_religion` (`id`, `name`, `code`) VALUES
(1, 'Watch Tower Bible and Tract Society of the Philippines, Incorporated', '1'),
(2, 'Iglesia Evangelista Methodista en Las Islas Filipinas (IEMEL', '2'),
(3, 'tttw', '500');

-- --------------------------------------------------------

--
-- Table structure for table `cap_school`
--

CREATE TABLE `cap_school` (
  `ID` int(3) UNSIGNED NOT NULL,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_school`
--

INSERT INTO `cap_school` (`ID`, `name`, `code`) VALUES
(10, 'Public', '1'),
(12, 'Private', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cap_sex`
--

CREATE TABLE `cap_sex` (
  `ID` int(1) UNSIGNED NOT NULL,
  `name` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_sex`
--

INSERT INTO `cap_sex` (`ID`, `name`, `code`) VALUES
(12, 'Female', '2'),
(13, 'Male', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cap_user`
--

CREATE TABLE `cap_user` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `mname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cap_lguname_ID` int(5) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cap_user`
--

INSERT INTO `cap_user` (`id`, `fname`, `mname`, `lname`, `cap_lguname_ID`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '', '', '', 0, 'cristina.jesuitas', 'T_tcndxQZICiFl3IuYlegfAaZknQYXdU', '$2y$13$gtXmcsbXhDPKhj8lODuaK.MMXdlX2R6QvJzE6cG3WKioC5SIC30Ke', NULL, 'cristina.jesuitas@gmail.com', 10, 1512448391, 1512448391),
(2, '', '', '', 0, 'egeeg', 'PLLrlEIS3Yy_WCHbGLyeqUQPQDIoDv0U', '$2y$13$/8FU1GywEygvQ8nyWiKpfOCD0bElTU7l93SFD7pyS5uAHTpPy1pgK', NULL, 'gregorioegee94@gmail.com', 10, 1512448799, 1512448799),
(3, '', '', '', 0, 'dzcurray04', '3-shFT9N5lIG5vqvVMUITElOqMXFGe-v', '$2y$13$JLTQY9SddMwA8JD3jPmpfeFadLZiuKj/A031fN5za/LGa0bgwQcji', NULL, 'deancurray@gmail.com', 10, 1512450443, 1512450443),
(4, '', '', '', 0, 'dan03', '-g6O7zEZ8vm0Erj68dFsbKTHK_zkKwAH', '$2y$13$hhgU/3tnJrwJ2IKb0q0dYeCBzcXCbjoHuRagVBbn4uyLtfnab369m', NULL, 'der.darian003@gmail.com', 10, 1512450638, 1512450638),
(5, '', '', '', 0, 'matthew', 'THPJ8mAa1J5SP6fjtJoMiruiLfzIB0EI', '$2y$13$aJTfFVQ9qC2zezaRM7p/XOxmgZPM8AbqwtGCCLnN9c7o/RElMNlCa', NULL, 'mateolopez2068@gmail.com', 10, 1512451316, 1512451316),
(6, '', '', '', 0, 'John', 'mWsRX26BSyAXM3_kfToxjcH3ay7ACOdp', '$2y$13$CRwM2gDQgiF1S//lYgOAHeVuw.p6YsZPmWW5ooOkoepianD01.I2m', NULL, 'johnpaul48@gmail.com', 10, 1512451817, 1512451817),
(7, '', '', '', 0, 'invoke21', 'TH_HGHE-WRcy_hUhoKBn9UjUrtuopCoq', '$2y$13$6Li5p4kwmUNuqOPtCt9Y8.MQdyHx4hYjmtR.nKDBb.ao8ap/MX5Ri', NULL, 'jericaragon21@gmail.com', 10, 1512451965, 1512451965),
(8, '', '', '', 0, 'reynaldpotes28', 'IYcBaxzGimX9DSczb4ZWx7WVfY9dDIUB', '$2y$13$yBC.8Pskn9o65D4Swmz2Y.fohQ51dLWf1rIJ8w7WjRbovhKexEcIu', NULL, 'reynaldpotes13@gmail.com', 10, 1512451991, 1512451991),
(9, '', '', '', 0, 'mark', 'j8yD8dpADV0CtVlM7vlriyo179U-Cqbn', '$2y$13$nqCSPw3I0jPtPA4uav0mf.oThYyjV.hysdexUd1mLINxRhDVbWJOK', NULL, 'markanthony1053@gmail.com', 10, 1512453116, 1512453116),
(10, '', '', '', 0, 'nestor', 'foBl3wqfXNEhF3fSRTcLLbHWqLDGpUcz', '$2y$13$qDVOj4B457louqyFkzOcfu3v8x7DFy2hE.lrANUzTpgnA3tn7goya', NULL, 'anestoramadorferrer@gmail.com', 10, 1512520760, 1512520760),
(11, '', '', '', 0, 'kenny', 'cO8CtmtEnzFUYGSyewqmYIJdIz6lpx6q', '$2y$13$QPShWT/N4cEd7EHP6xnxkeYFeGJ6V7aJ7mCmziI6fxoBw8NcL2WiW', NULL, 'kenzkie26@gmail.com', 10, 1513150403, 1513150403),
(12, '', '', '', 0, 'jairo', 'dIfjAzOs14re69LEUINnytB_iaYwTzJs', '$2y$13$fYdHBUNy4CRjAm2ILTK0z.D5xyQUF6SirY6lXo/.g8sn7uLKzKRlW', NULL, 'jlabiste25@gmail.com', 10, 1514353560, 1514353560),
(13, '', '', '', 0, 'Jaobelza', '5mAIlM9aoz4PAm7IkNt3Fl9ojhTiZz4u', '$2y$13$KzqcRj/mPhG1wq.vDZtlDeNqw7MZ4oSmwbv6E.eSYCeCydNrQjmhS', NULL, 'jaobelza@gg.com', 10, 1514353565, 1514353565),
(14, '', '', '', 0, 'MarkRya', '1drtrQP_bq9xmwai48kF_N3B5rjnw9yg', '$2y$13$a3./Nok5..2MLaErDcHU4.gYbFmvH24aEsMfyHT10jJH52/rqv7ey', NULL, 'markryanbulacsao@gmail.com', 10, 1514355507, 1514355507),
(15, '', '', '', 0, 'aljon', '-w6dtgy6_sXDOl1-IrHTqo0S-_dEgr32', '$2y$13$sVfKOcfHK2NbNzGdbscoMejgJN3Z7pyeX99ErFlK6QRBxoIEAkkdK', NULL, 'aljon.competente@gmail.com', 10, 1514422364, 1514422364),
(16, '', '', '', 0, 'alamat', '18DXo5VDyKIXAjM3IHYNRPRpMB_6fDTS', '$2y$13$9GIEcN4ONeTacW4Cz6AKS.P.MsB53Ge5dlqLPaeAor0DdCRaAirt6', NULL, 'anestoramadorferrer@yahoo.com.ph', 10, 1514431456, 1514431456),
(17, '', '', '', 0, 'pulstamina', 'QiFadCTDKAEJhferIRRmzdTqjwWNbSI-', '$2y$13$8q0GxNIeunMH.2Z5vijAt.hvFhB3FirkA0B6OGKL6kDXZwiQa3C6e', NULL, 'jamespatricka17@yahoo.com', 10, 1514941894, 1514941894),
(18, '', '', '', 0, 'pulstaminaee', 'Gtw2oCRBkQfM6v5rGQmLaZd06CZDTHX2', '$2y$13$7K.WoE9NZkSV.XfLdE7BP.V5yP.QfVd9Vi4IwvQLk9sx8ArTOTbGC', NULL, 'jamespatrickaguirre@yahoo.com', 10, 1514942260, 1514942260),
(19, '', '', '', 0, 'Jao', 'Crr5UxohORkvC1S46Sma824i6oR6XHRG', '$2y$13$SV91a4RbW2VCK5l.IGezBedF4J67ncJA7/K4G/c2sIU1H1x/ArrTi', NULL, 'Jaojao@gmail.com', 10, 1514943979, 1514943979);

-- --------------------------------------------------------

--
-- Table structure for table `cap_workstatus`
--

CREATE TABLE `cap_workstatus` (
  `id` int(2) UNSIGNED NOT NULL,
  `name` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cap_workstatus`
--

INSERT INTO `cap_workstatus` (`id`, `name`, `code`) VALUES
(1, 'Private Household', '0'),
(2, 'Private Establishment', '1'),
(3, 'Government Corporation', '2'),
(4, 'Self-Employed', '3'),
(5, 'Employer in own Family - Operated farm or Business', '4'),
(6, 'Works with pay - in Family Operated Farm or Business', '5'),
(7, 'Works without pay in own Family - Operated or Business', '6'),
(8, 'Not Applicable', '99');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cap_region_id` (`cap_region_id`),
  ADD KEY `cap_province_id` (`cap_province_id`),
  ADD KEY `cap_municipal_id` (`cap_municipal_id`);

--
-- Indexes for table `cap_citizen`
--
ALTER TABLE `cap_citizen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cap_civilstatus_id` (`cap_civilstatus_id`),
  ADD KEY `cap_disability_id` (`cap_disability_id`),
  ADD KEY `cap_citizenship_id` (`cap_citizenship_id`),
  ADD KEY `cap_ethnicity_id` (`cap_ethnicity_id`),
  ADD KEY `cap_sex_id` (`cap_sex_id`),
  ADD KEY `cap_occupation_id` (`cap_occupation_id`);

--
-- Indexes for table `cap_citizenship`
--
ALTER TABLE `cap_citizenship`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_civilstatus`
--
ALTER TABLE `cap_civilstatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_designation`
--
ALTER TABLE `cap_designation`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_disability`
--
ALTER TABLE `cap_disability`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_education`
--
ALTER TABLE `cap_education`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_ethnicity`
--
ALTER TABLE `cap_ethnicity`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_landclass`
--
ALTER TABLE `cap_landclass`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_lgulevel_ID` (`cap_lgulevel_ID`);

--
-- Indexes for table `cap_lgucategory`
--
ALTER TABLE `cap_lgucategory`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_lgulevel_id` (`cap_lgulevel_id`);

--
-- Indexes for table `cap_lguclass`
--
ALTER TABLE `cap_lguclass`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_lgulevel_id` (`cap_lgulevel_id`);

--
-- Indexes for table `cap_lgudistrict`
--
ALTER TABLE `cap_lgudistrict`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_lgulevel_id` (`cap_lgulevel_id`);

--
-- Indexes for table `cap_lgulevel`
--
ALTER TABLE `cap_lgulevel`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_lguname`
--
ALTER TABLE `cap_lguname`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `cap_lgulevel_ID` (`cap_lgulevel_id`);

--
-- Indexes for table `cap_lguprofile`
--
ALTER TABLE `cap_lguprofile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `website` (`website`),
  ADD KEY `cap_lguclass_id` (`cap_lguclass_id`),
  ADD KEY `cap_lgulevel_id` (`cap_lgulevel_id`);

--
-- Indexes for table `cap_migration`
--
ALTER TABLE `cap_migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_region_id` (`cap_region_id`),
  ADD KEY `cap_province_id` (`cap_province_id`);

--
-- Indexes for table `cap_occupation`
--
ALTER TABLE `cap_occupation`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_pic`
--
ALTER TABLE `cap_pic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cap_province`
--
ALTER TABLE `cap_province`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `cap_region_id` (`cap_region_id`);

--
-- Indexes for table `cap_region`
--
ALTER TABLE `cap_region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_relationship`
--
ALTER TABLE `cap_relationship`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_religion`
--
ALTER TABLE `cap_religion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_school`
--
ALTER TABLE `cap_school`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_sex`
--
ALTER TABLE `cap_sex`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `cap_user`
--
ALTER TABLE `cap_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Indexes for table `cap_workstatus`
--
ALTER TABLE `cap_workstatus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cap_citizen`
--
ALTER TABLE `cap_citizen`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cap_citizenship`
--
ALTER TABLE `cap_citizenship`
  MODIFY `ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cap_civilstatus`
--
ALTER TABLE `cap_civilstatus`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cap_designation`
--
ALTER TABLE `cap_designation`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cap_disability`
--
ALTER TABLE `cap_disability`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cap_education`
--
ALTER TABLE `cap_education`
  MODIFY `ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cap_ethnicity`
--
ALTER TABLE `cap_ethnicity`
  MODIFY `ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cap_landclass`
--
ALTER TABLE `cap_landclass`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cap_lgucategory`
--
ALTER TABLE `cap_lgucategory`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cap_lguclass`
--
ALTER TABLE `cap_lguclass`
  MODIFY `ID` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cap_lgudistrict`
--
ALTER TABLE `cap_lgudistrict`
  MODIFY `id` int(1) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cap_lgulevel`
--
ALTER TABLE `cap_lgulevel`
  MODIFY `ID` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cap_lguname`
--
ALTER TABLE `cap_lguname`
  MODIFY `ID` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cap_lguprofile`
--
ALTER TABLE `cap_lguprofile`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  MODIFY `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cap_occupation`
--
ALTER TABLE `cap_occupation`
  MODIFY `ID` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cap_pic`
--
ALTER TABLE `cap_pic`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cap_province`
--
ALTER TABLE `cap_province`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `cap_region`
--
ALTER TABLE `cap_region`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cap_relationship`
--
ALTER TABLE `cap_relationship`
  MODIFY `ID` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cap_religion`
--
ALTER TABLE `cap_religion`
  MODIFY `id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cap_school`
--
ALTER TABLE `cap_school`
  MODIFY `ID` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cap_sex`
--
ALTER TABLE `cap_sex`
  MODIFY `ID` int(1) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cap_user`
--
ALTER TABLE `cap_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `cap_workstatus`
--
ALTER TABLE `cap_workstatus`
  MODIFY `id` int(2) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cap_barangay`
--
ALTER TABLE `cap_barangay`
  ADD CONSTRAINT `cap_barangay_cap_municipal_id` FOREIGN KEY (`cap_municipal_id`) REFERENCES `cap_municipal` (`id`),
  ADD CONSTRAINT `cap_barangay_cap_province_id` FOREIGN KEY (`cap_province_id`) REFERENCES `cap_province` (`id`),
  ADD CONSTRAINT `cap_barangay_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

--
-- Constraints for table `cap_citizen`
--
ALTER TABLE `cap_citizen`
  ADD CONSTRAINT `cap_citizen_cap_citizenship_id` FOREIGN KEY (`cap_citizenship_id`) REFERENCES `cap_citizenship` (`ID`),
  ADD CONSTRAINT `cap_citizen_cap_civilstatus_id` FOREIGN KEY (`cap_civilstatus_id`) REFERENCES `cap_civilstatus` (`id`),
  ADD CONSTRAINT `cap_citizen_cap_disability_id` FOREIGN KEY (`cap_disability_id`) REFERENCES `cap_disability` (`id`),
  ADD CONSTRAINT `cap_citizen_cap_ethnicity_id` FOREIGN KEY (`cap_ethnicity_id`) REFERENCES `cap_ethnicity` (`ID`),
  ADD CONSTRAINT `cap_citizen_cap_occupation_id` FOREIGN KEY (`cap_occupation_id`) REFERENCES `cap_occupation` (`ID`),
  ADD CONSTRAINT `cap_citizen_cap_sex_id` FOREIGN KEY (`cap_sex_id`) REFERENCES `cap_sex` (`ID`);

--
-- Constraints for table `cap_landclass`
--
ALTER TABLE `cap_landclass`
  ADD CONSTRAINT `cap_landclass_cap_lgulevel_ID` FOREIGN KEY (`cap_lgulevel_ID`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_lgucategory`
--
ALTER TABLE `cap_lgucategory`
  ADD CONSTRAINT `cap_lgucategory_cap_lgulevel_id` FOREIGN KEY (`cap_lgulevel_id`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_lguclass`
--
ALTER TABLE `cap_lguclass`
  ADD CONSTRAINT `cap_lguclass_cap_lgulevel_id` FOREIGN KEY (`cap_lgulevel_id`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_lgudistrict`
--
ALTER TABLE `cap_lgudistrict`
  ADD CONSTRAINT `cap_lgudistrict_cap_lgulevel_id` FOREIGN KEY (`cap_lgulevel_id`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_lguname`
--
ALTER TABLE `cap_lguname`
  ADD CONSTRAINT `cap_lguname_cap_lgulevel_ID` FOREIGN KEY (`cap_lgulevel_id`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_lguprofile`
--
ALTER TABLE `cap_lguprofile`
  ADD CONSTRAINT `cap_lguprofile_cap_lguclass_id` FOREIGN KEY (`cap_lguclass_id`) REFERENCES `cap_lguclass` (`ID`),
  ADD CONSTRAINT `cap_lguprofile_cap_lgulevel_id` FOREIGN KEY (`cap_lgulevel_id`) REFERENCES `cap_lgulevel` (`ID`);

--
-- Constraints for table `cap_municipal`
--
ALTER TABLE `cap_municipal`
  ADD CONSTRAINT `cap_municipal_cap_province_id` FOREIGN KEY (`cap_province_id`) REFERENCES `cap_province` (`id`),
  ADD CONSTRAINT `cap_municipal_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

--
-- Constraints for table `cap_province`
--
ALTER TABLE `cap_province`
  ADD CONSTRAINT `cap_province_cap_region_id` FOREIGN KEY (`cap_region_id`) REFERENCES `cap_region` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
