-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2017 at 04:33 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elotl`
--

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `idair` int(11) NOT NULL,
  `nameaira` varchar(300) NOT NULL,
  `nameaire` varchar(300) NOT NULL,
  `deletair` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `ida` int(11) NOT NULL,
  `nameaa` varchar(300) NOT NULL,
  `nameae` varchar(300) NOT NULL,
  `deleta` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `carer`
--

CREATE TABLE `carer` (
  `idr` int(11) NOT NULL,
  `namera` varchar(300) NOT NULL,
  `namere` varchar(300) NOT NULL,
  `deletr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carer`
--

INSERT INTO `carer` (`idr`, `namera`, `namere`, `deletr`) VALUES
(1, 'Ù…Ø¯ÙŠØ± Ø§Ù„ØµÙŠØ§Ù†Ù‡', 'manager', 0),
(2, 'ÙÙ†ÙŠ', 'technical', 0),
(3, 'Ù…Ø³Ø§Ø¹Ø¯ ÙÙ†ÙŠ', 'assist', 0),
(4, 'Ø³Ø§Ø¦Ù‚', 'driver', 0),
(5, 'Ù…Ø¯ÙŠØ± Ø¹Ø§Ù…', 'general manegar', 0),
(6, 'Ø¹Ø§Ù…Ù„', 'Factor', 0),
(7, 'Ù…Ø­Ø§Ø³Ø¨', 'accounting', 0);

-- --------------------------------------------------------

--
-- Table structure for table `castumer`
--

CREATE TABLE `castumer` (
  `idc` int(11) NOT NULL,
  `nameca` varchar(300) NOT NULL,
  `namece` varchar(300) NOT NULL,
  `phonec` varchar(50) NOT NULL,
  `areac` int(11) NOT NULL,
  `deletc` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `idy` int(11) NOT NULL,
  `nameya` varchar(150) NOT NULL,
  `nameye` varchar(150) NOT NULL,
  `delety` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `idcr` int(11) NOT NULL,
  `idmcr` int(11) NOT NULL,
  `pricecr` double NOT NULL,
  `crdate` date NOT NULL,
  `pricetcr` double NOT NULL,
  `paymentcr` int(11) NOT NULL,
  `crpayment` double NOT NULL,
  `bankdate` date NOT NULL,
  `checkno` varchar(250) NOT NULL,
  `bankname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `daten`
--

CREATE TABLE `daten` (
  `idd` int(11) NOT NULL,
  `dated` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `idu` int(11) NOT NULL,
  `kindd` tinyint(1) NOT NULL,
  `idair` int(11) NOT NULL,
  `ida` int(11) NOT NULL,
  `idr` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `idy` int(11) NOT NULL,
  `idcr` int(11) NOT NULL,
  `idv` int(11) NOT NULL,
  `idm` int(11) NOT NULL,
  `idx` int(11) NOT NULL,
  `idi` int(11) NOT NULL,
  `idmark` int(11) NOT NULL,
  `ido` int(11) NOT NULL,
  `idn` int(11) NOT NULL,
  `idserv` int(11) NOT NULL,
  `idp` int(11) NOT NULL,
  `ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `daten`
--

INSERT INTO `daten` (`idd`, `dated`, `idu`, `kindd`, `idair`, `ida`, `idr`, `idc`, `idy`, `idcr`, `idv`, `idm`, `idx`, `idi`, `idmark`, `ido`, `idn`, `idserv`, `idp`, `ids`) VALUES
(1, '2017-06-24 14:32:30', 1, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `device`
--

CREATE TABLE `device` (
  `idv` int(11) NOT NULL,
  `nameva` varchar(300) NOT NULL,
  `nameve` varchar(300) NOT NULL,
  `deletv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idm` int(11) NOT NULL,
  `fnamema` varchar(300) NOT NULL,
  `fnameme` varchar(300) NOT NULL,
  `namema` varchar(30) NOT NULL,
  `nameme` varchar(300) NOT NULL,
  `mobilem` varchar(50) NOT NULL,
  `countrym` int(11) NOT NULL,
  `carerm` int(11) NOT NULL,
  `noborder` varchar(100) NOT NULL,
  `noiqama` varchar(100) NOT NULL,
  `nopassport` varchar(100) NOT NULL,
  `airportm` int(11) NOT NULL,
  `adressm` varchar(300) NOT NULL,
  `telem` varchar(200) NOT NULL,
  `entermsa` date NOT NULL,
  `worktime` date NOT NULL,
  `exiqamam` date NOT NULL,
  `exinsurancem` date NOT NULL,
  `exlincm` date NOT NULL,
  `expassportm` date NOT NULL,
  `premssionm` tinyint(1) NOT NULL,
  `statusm` tinyint(1) NOT NULL,
  `deletm` tinyint(1) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idm`, `fnamema`, `fnameme`, `namema`, `nameme`, `mobilem`, `countrym`, `carerm`, `noborder`, `noiqama`, `nopassport`, `airportm`, `adressm`, `telem`, `entermsa`, `worktime`, `exiqamam`, `exinsurancem`, `exlincm`, `expassportm`, `premssionm`, `statusm`, `deletm`, `password`) VALUES
(1, 'Ù…Ø­Ù…Ø¯ Ø¹Ù„ÙŠ Ø§Ù„Ø±Ø¨ÙŠØ¹', 'mohamed ali al rabie', 'Ù…Ø­Ù…Ø¯ Ø¹Ù„ÙŠ Ø§Ù„Ø±Ø¨ÙŠØ¹', 'mohamed ali al rabie', '0504982633', 0, 5, '', '5252525252', '', 0, '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', 1, 0, 0, '20f41bd0bf04f9577c85f04b17f88fa0');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `idex` int(11) NOT NULL,
  `idem` int(11) NOT NULL,
  `billex` varchar(255) NOT NULL,
  `dateex` date NOT NULL,
  `priceex` int(11) NOT NULL,
  `discountex` int(11) NOT NULL,
  `totalex` int(11) NOT NULL,
  `notsex` text NOT NULL,
  `deletex` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invcredite`
--

CREATE TABLE `invcredite` (
  `idinvcredit` int(11) NOT NULL,
  `idicre` int(11) NOT NULL,
  `idcrdite` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `idi` int(11) NOT NULL,
  `bill` varchar(100) NOT NULL,
  `idate` date NOT NULL,
  `price` double NOT NULL,
  `discount` double NOT NULL,
  `expenses` double NOT NULL,
  `totalc` double NOT NULL,
  `percent` double NOT NULL,
  `totalm` double NOT NULL,
  `payment` int(11) NOT NULL,
  `note` text NOT NULL,
  `orderid` int(11) NOT NULL,
  `credit` double NOT NULL,
  `creditid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mark`
--

CREATE TABLE `mark` (
  `idmark` int(11) NOT NULL,
  `namemarka` varchar(300) NOT NULL,
  `namemarke` varchar(300) NOT NULL,
  `deletmark` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ordero`
--

CREATE TABLE `ordero` (
  `ido` int(11) NOT NULL,
  `castumerid` int(11) NOT NULL,
  `areaid` int(11) NOT NULL,
  `phoneo` varchar(300) NOT NULL,
  `areatransid` int(11) NOT NULL,
  `deviceid` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `timeo` int(11) NOT NULL,
  `timing` varchar(100) NOT NULL,
  `mdn` varchar(250) NOT NULL,
  `sn` varchar(250) NOT NULL,
  `note` text NOT NULL,
  `process` tinyint(1) NOT NULL,
  `idservo` int(11) NOT NULL,
  `idservows` int(11) NOT NULL,
  `idmark` int(11) NOT NULL,
  `poseplt` varchar(250) NOT NULL,
  `dftime` int(11) NOT NULL,
  `odatews` date NOT NULL,
  `odatefs` date NOT NULL,
  `odatedp` date NOT NULL,
  `timingdp` varchar(20) NOT NULL,
  `timodp` int(11) NOT NULL,
  `resono` int(11) NOT NULL,
  `deleto` tinyint(1) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `employeeidws` int(11) NOT NULL,
  `employeeiddp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `part`
--

CREATE TABLE `part` (
  `idpart` int(11) NOT NULL,
  `companyparta` varchar(300) NOT NULL,
  `companyparte` varchar(300) NOT NULL,
  `billnumberpart` varchar(100) NOT NULL,
  `datebillpart` date NOT NULL,
  `namepcsparta` varchar(300) NOT NULL,
  `namepcsparte` varchar(300) NOT NULL,
  `nopart` varchar(300) NOT NULL,
  `pricepart` int(11) NOT NULL,
  `discountpart` int(11) NOT NULL,
  `totalpart` int(11) NOT NULL,
  `notspart` text NOT NULL,
  `idopart` int(11) NOT NULL,
  `deletepart` tinyint(1) NOT NULL,
  `enterdatepart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `reson`
--

CREATE TABLE `reson` (
  `idn` int(11) NOT NULL,
  `namena` varchar(300) NOT NULL,
  `namene` varchar(300) NOT NULL,
  `deletn` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idserv` int(11) NOT NULL,
  `nservicea` varchar(300) NOT NULL,
  `nservicee` varchar(300) NOT NULL,
  `coast` int(11) NOT NULL,
  `deletserv` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idserv`, `nservicea`, `nservicee`, `coast`, `deletserv`) VALUES
(1, 'ÙƒØ´Ù', 'check', 50, 0),
(2, 'ØºØ³ÙŠÙ„', 'CLEAN', 300, 0),
(3, 'Ù†Ù‚Ù„', 'transfer', 500, 0),
(4, 'ØªØ±ÙƒÙŠØ¨ Ø¬Ø¯ÙŠØ¯', 'Install New', 350, 0),
(5, 'ØªØ±ÙƒÙŠØ¨', 'install', 350, 0),
(6, 'ØªÙ…Ø¯ÙŠØ¯ Ù…ÙˆØ§Ø³ÙŠØ±', 'Extension of pipes', 50, 0),
(7, 'ØªØ±ÙƒÙŠØ¨ Ø¨ÙŠØ±ÙŠÙ†Ø¬Ø§Øª', 'berengat install', 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `serviceorder`
--

CREATE TABLE `serviceorder` (
  `idserviceorder` int(11) NOT NULL,
  `serviceido` int(11) NOT NULL,
  `idoservice` int(11) NOT NULL,
  `kindserido` varchar(200) NOT NULL,
  `deletservido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `ids` int(11) NOT NULL,
  `tech` int(11) NOT NULL,
  `asist` int(11) NOT NULL,
  `driver` int(11) NOT NULL,
  `staffdate` date NOT NULL,
  `defults` tinyint(1) NOT NULL,
  `delets` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `wayofpayment`
--

CREATE TABLE `wayofpayment` (
  `idp` int(11) NOT NULL,
  `namepa` varchar(300) NOT NULL,
  `namepe` varchar(300) NOT NULL,
  `numberp` double NOT NULL,
  `deletp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wayofpayment`
--

INSERT INTO `wayofpayment` (`idp`, `namepa`, `namepe`, `numberp`, `deletp`) VALUES
(1, 'Ù†Ù‚Ø¯ÙŠ', 'cash', 0, 0),
(2, 'Ù…Ø¯Ù‰', 'mada', 0.4, 0),
(3, 'ÙÙŠØ²Ø§', 'visa', 2, 0),
(4, 'Ù…Ø§Ø³ØªØ± ÙƒØ§Ø±Ø¯', 'master card', 2.5, 0),
(5, 'Ø¢Ø¬Ù„', 'credit', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`idair`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`ida`);

--
-- Indexes for table `carer`
--
ALTER TABLE `carer`
  ADD PRIMARY KEY (`idr`);

--
-- Indexes for table `castumer`
--
ALTER TABLE `castumer`
  ADD PRIMARY KEY (`idc`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`idy`);

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`idcr`);

--
-- Indexes for table `daten`
--
ALTER TABLE `daten`
  ADD PRIMARY KEY (`idd`);

--
-- Indexes for table `device`
--
ALTER TABLE `device`
  ADD PRIMARY KEY (`idv`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`idex`);

--
-- Indexes for table `invcredite`
--
ALTER TABLE `invcredite`
  ADD PRIMARY KEY (`idinvcredit`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`idi`);

--
-- Indexes for table `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`idmark`);

--
-- Indexes for table `ordero`
--
ALTER TABLE `ordero`
  ADD PRIMARY KEY (`ido`);

--
-- Indexes for table `part`
--
ALTER TABLE `part`
  ADD PRIMARY KEY (`idpart`);

--
-- Indexes for table `reson`
--
ALTER TABLE `reson`
  ADD PRIMARY KEY (`idn`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idserv`);

--
-- Indexes for table `serviceorder`
--
ALTER TABLE `serviceorder`
  ADD PRIMARY KEY (`idserviceorder`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `wayofpayment`
--
ALTER TABLE `wayofpayment`
  ADD PRIMARY KEY (`idp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `idair` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `ida` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carer`
--
ALTER TABLE `carer`
  MODIFY `idr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `castumer`
--
ALTER TABLE `castumer`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `idy` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `idcr` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `daten`
--
ALTER TABLE `daten`
  MODIFY `idd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `device`
--
ALTER TABLE `device`
  MODIFY `idv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `idex` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invcredite`
--
ALTER TABLE `invcredite`
  MODIFY `idinvcredit` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `idi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mark`
--
ALTER TABLE `mark`
  MODIFY `idmark` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordero`
--
ALTER TABLE `ordero`
  MODIFY `ido` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `part`
--
ALTER TABLE `part`
  MODIFY `idpart` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `reson`
--
ALTER TABLE `reson`
  MODIFY `idn` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idserv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `serviceorder`
--
ALTER TABLE `serviceorder`
  MODIFY `idserviceorder` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `wayofpayment`
--
ALTER TABLE `wayofpayment`
  MODIFY `idp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
