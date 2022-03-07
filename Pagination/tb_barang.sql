-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2022 at 02:02 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(200) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok`, `harga`) VALUES
('1001', 'Pena', 20, 30000),
('1002', 'Pensil', 10, 1000),
('1003', 'Buku', 20, 3500),
('1004', 'Barang 1', 5, 15000),
('1005', 'Barang 2', 10, 12000),
('1006', 'Barang 3', 15, 10000),
('1007', 'Barang 4', 5, 5000),
('1008', 'Barang 5', 10, 3000),
('1009', 'Barang 6', 15, 2000),
('1010', 'Barang 7', 5, 20000),
('1011', 'Barang 8', 10, 17000),
('1012', 'Barang 9', 15, 15000),
('1013', 'Barang 10', 5, 12000),
('1014', 'Barang 11', 10, 10000),
('1015', 'Barang 12', 15, 5000),
('1016', 'Barang 13', 5, 3000),
('1017', 'Barang 14', 10, 2000),
('1018', 'Barang 15', 15, 20000),
('1019', 'Barang 16', 5, 17000),
('1020', 'Barang 17', 10, 15000),
('1021', 'Barang 18', 15, 12000),
('1022', 'Barang 19', 5, 10000),
('1023', 'Barang 20', 10, 5000),
('1024', 'Barang 21', 15, 3000),
('1025', 'Barang 22', 5, 2000),
('1026', 'Barang 23', 10, 20000),
('1027', 'Barang 24', 15, 17000),
('1028', 'Barang 25', 5, 15000),
('1029', 'Barang 26', 10, 12000),
('1030', 'Barang 27', 15, 10000),
('1031', 'Barang 28', 5, 5000),
('1032', 'Barang 29', 10, 3000),
('1033', 'Barang 30', 15, 2000),
('1034', 'Barang 31', 5, 20000),
('1035', 'Barang 32', 10, 17000),
('1036', 'Barang 33', 15, 15000),
('1037', 'Barang 34', 5, 12000),
('1038', 'Barang 35', 10, 10000),
('1039', 'Barang 36', 15, 5000),
('1040', 'Barang 37', 5, 3000),
('1041', 'Barang 38', 10, 2000),
('1042', 'Barang 39', 15, 20000),
('1043', 'Barang 40', 5, 17000),
('1044', 'Barang 41', 10, 15000),
('1045', 'Barang 42', 15, 12000),
('1046', 'Barang 43', 5, 10000),
('1047', 'Barang 44', 10, 5000),
('1048', 'Barang 45', 15, 3000),
('1049', 'Barang 46', 5, 2000),
('1050', 'Barang 47', 10, 20000),
('1051', 'Barang 48', 15, 17000),
('1052', 'Barang 49', 5, 15000),
('1053', 'Barang 50', 10, 12000),
('1054', 'Barang 51', 15, 10000),
('1055', 'Barang 52', 5, 5000),
('1056', 'Barang 53', 10, 3000),
('1057', 'Barang 54', 15, 2000),
('1058', 'Barang 55', 5, 20000),
('1059', 'Barang 56', 10, 17000),
('1060', 'Barang 57', 15, 15000),
('1061', 'Barang 58', 5, 12000),
('1062', 'Barang 59', 10, 10000),
('1063', 'Barang 60', 15, 5000),
('1064', 'Barang 61', 5, 3000),
('1065', 'Barang 62', 10, 2000),
('1066', 'Barang 63', 15, 20000),
('1067', 'Barang 64', 5, 17000),
('1068', 'Barang 65', 10, 15000),
('1069', 'Barang 66', 15, 12000),
('1070', 'Barang 67', 5, 10000),
('1071', 'Barang 68', 10, 5000),
('1072', 'Barang 69', 15, 3000),
('1073', 'Barang 70', 5, 2000),
('1074', 'Barang 71', 10, 20000),
('1075', 'Barang 72', 15, 17000),
('1076', 'Barang 73', 5, 15000),
('1077', 'Barang 74', 10, 12000),
('1078', 'Barang 75', 15, 10000),
('1079', 'Barang 76', 5, 5000),
('1080', 'Barang 77', 10, 3000),
('1081', 'Barang 78', 15, 2000),
('1082', 'Barang 79', 5, 20000),
('1083', 'Barang 80', 10, 17000),
('1084', 'Barang 81', 15, 15000),
('1085', 'Barang 82', 5, 12000),
('1086', 'Barang 83', 10, 10000),
('1087', 'Barang 84', 15, 5000),
('1088', 'Barang 85', 5, 3000),
('1089', 'Barang 86', 10, 2000),
('1090', 'Barang 87', 15, 20000),
('1091', 'Barang 88', 5, 17000),
('1092', 'Barang 89', 10, 15000),
('1093', 'Barang 90', 15, 12000),
('1094', 'Barang 91', 5, 10000),
('1095', 'Barang 92', 10, 5000),
('1096', 'Barang 93', 15, 3000),
('1097', 'Barang 94', 5, 2000),
('1098', 'Barang 95', 10, 20000),
('1099', 'Barang 96', 15, 17000),
('1100', 'Barang 97', 5, 15000),
('1101', 'Barang 98', 10, 12000),
('1102', 'Barang 99', 15, 10000),
('1103', 'Barang 100', 5, 5000),
('1104', 'Barang 101', 10, 3000),
('1105', 'Barang 102', 15, 2000),
('1106', 'Barang 103', 5, 20000),
('1107', 'Barang 104', 10, 17000),
('1108', 'Barang 105', 15, 15000),
('1109', 'Barang 106', 5, 12000),
('1110', 'Barang 107', 10, 10000),
('1111', 'Barang 108', 15, 5000),
('1112', 'Barang 109', 5, 3000),
('1113', 'Barang 110', 10, 2000),
('1114', 'Barang 111', 15, 20000),
('1115', 'Barang 112', 5, 17000),
('1116', 'Barang 113', 10, 15000),
('1117', 'Barang 114', 15, 12000),
('1118', 'Barang 115', 5, 10000),
('1119', 'Barang 116', 10, 5000),
('1120', 'Barang 117', 15, 3000),
('1121', 'Barang 118', 5, 2000),
('1122', 'Barang 119', 10, 20000),
('1123', 'Barang 120', 15, 17000),
('1124', 'Barang 121', 5, 15000),
('1125', 'Barang 122', 10, 12000),
('1126', 'Barang 123', 15, 10000),
('1127', 'Barang 124', 5, 5000),
('1128', 'Barang 125', 10, 3000),
('1129', 'Barang 126', 15, 2000),
('1130', 'Barang 127', 5, 20000),
('1131', 'Barang 128', 10, 17000),
('1132', 'Barang 129', 15, 15000),
('BRG04', 'Data Editing', 5, 15000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
