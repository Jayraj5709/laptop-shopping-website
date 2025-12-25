-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2025 at 01:46 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(3) NOT NULL,
  `a_email` varchar(255) NOT NULL,
  `a_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_email`, `a_pass`) VALUES
(1, 'dangarjayraj5709@gmail.com', '5709');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(3) NOT NULL,
  `pid` int(3) NOT NULL,
  `uid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `pid`, `uid`) VALUES
(14, 10, 2),
(15, 8, 2),
(16, 1, 0),
(17, 1, 0),
(18, 2, 0),
(30, 1, 0),
(31, 2, 1),
(32, 1, 1),
(33, 1, 1),
(34, 2, 1),
(35, 6, 0),
(36, 15, 0),
(37, 2, 0),
(39, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cid` int(3) NOT NULL,
  `cname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `cname`) VALUES
(1, 'Gaming laptops'),
(2, 'Student Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cuid` int(3) NOT NULL,
  `cuname` varchar(255) NOT NULL,
  `cuemail` varchar(255) NOT NULL,
  `cunum` bigint(10) NOT NULL,
  `cusub` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cuid`, `cuname`, `cuemail`, `cunum`, `cusub`) VALUES
(1, 'jayraj', 'dangarjayraj5709@gmail.com', 9537070584, 'loading issue');

-- --------------------------------------------------------

--
-- Table structure for table `insert`
--

CREATE TABLE `insert` (
  `cid` int(3) NOT NULL,
  `glaptop` varchar(255) NOT NULL,
  `slaptop` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `oid` int(3) NOT NULL,
  `uid` int(3) NOT NULL,
  `pid` int(3) NOT NULL,
  `shiping` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `pmode` varchar(255) NOT NULL,
  `ost` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`oid`, `uid`, `pid`, `shiping`, `address`, `contact`, `pmode`, `ost`) VALUES
(5, 2, 3, 'jayraj', 'osjdkdjkdj', 9824517716, 'Online', 'received'),
(6, 2, 2, 'jayraj', 'osjdkdjkdj', 9824517716, 'Online', 'received'),
(7, 2, 7, 'jayraj', 'osjdkdjkdj', 9824517716, 'Online', 'received'),
(8, 2, 11, 'jayraj', 'osjdkdjkdj', 9824517716, 'Online', 'received'),
(14, 1, 3, 'Jayraj', 'Ahir boarding , bhaktinagar , rajkot ', 9537070584, 'Online', 'received'),
(15, 1, 11, 'ashish', 'limda, bhavnagar ,364740', 9824517716, 'COD', 'received'),
(16, 1, 5, 'jayraj', 'adsdfd', 989896465465, 'Online', 'received'),
(17, 1, 18, 'jayraj', 'adsdfd', 989896465465, 'Online', 'received'),
(18, 1, 18, 'jayraj', 'adsdfd', 989896465465, 'Online', 'received'),
(19, 1, 1, 'jayraj', 'adsdfd', 989896465465, 'Online', 'received');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(3) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `cid` int(3) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pmrp` varchar(255) NOT NULL,
  `pd` varchar(255) NOT NULL,
  `pphoto1` blob NOT NULL,
  `pphoto2` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `cid`, `pprice`, `pmrp`, `pd`, `pphoto1`, `pphoto2`) VALUES
(1, 'HP Victus', 1, '74990', '96136', ' Power meets performance in the HP Victus. Designed for gamers and creators, it features high-speed processors, immersive graphics, and a smooth FHD display. Perfect for work, play, and everything in between.         ', 0x696d672f4850205669637475732041492e6a7067, 0x696d672f),
(2, 'DELL G15', 1, '78990', '106331', 'DELL G15 Intel Core i7 13th Gen 13650HX - (16 GB/512 GB SSD/Windows 11 Home/6 GB Graphics/NVIDIA GeForce RTX 3050/120 Hz) 5530 Gaming Laptop  (15.6 Inch, Dark Shadow Gray With Black Thermal Shelf, 2.65 Kg, With MS Office)  ', 0x696d672f64656c6c20672d31352e6a7067, 0x696d672f),
(3, 'DELL Intel', 1, '81990', '162377', ' DELL AMD Ryzen 7 Octa Core AMD R7-6800H - (16 GB/512 GB SSD/Windows 11 Home/6 GB Graphics/NVIDIA GeForce RTX 3060/120 Hz) G15-5525 Gaming Laptop  (14.9 inch, Phantom Grey With Speckles, 2.51 Kg, With MS Office)   ', 0x696d672f44656c6c20414d442e6a7067, 0x696d672f),
(4, 'Lenovo LOQ ', 1, '72990 ', '104490', '  Lenovo Intel Core i5 12th Gen 12450HX - (16 GB/512 GB SSD/Windows 11 Home/6 GB Graphics/NVIDIA GeForce RTX 3050/144 Hz) 83GS00PJIN 2 in 1 Gaming Laptop  (15.6 inch, Luna Grey, 2.38 kg, With MS Office)  ', 0x696d672f6c656e6f766f206c6f712e6a7067, 0x696d672f),
(5, 'ASUS Gaming A15 ', 1, '52990', '70990', ' ASUS TUF Gaming A15 AMD Ryzen 7 Octa Core 7435HS - (8 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce RTX 2050) FA566NFR-HN260W Gaming Laptop  (15.6 inch, Graphite Black, 2.30 Kg)   ', 0x696d672f61737573206131352e6a7067, 0x696d672f),
(6, 'Acer Nitro', 1, '71990', '89999', ' Acer Nitro V AMD Ryzen 7 Octa Core 7735HS - (16 GB/512 GB SSD/Windows 11 Home/6 GB Graphics/NVIDIA GeForce RTX 3050) ANV15-41 Gaming Laptop  (15.6 Inch, Obsidian Black, 2.1 Kg)  ', 0x696d672f61636572206e6974726f2e6a7067, 0x696d672f),
(7, 'HP 255 G10', 1, '25990', '31990', ' HP 255 G10 (2024) AMD Ryzen 3 Quad Core 7320U - (8 GB/512 GB SSD/Windows 11 Home) 250 G10 Thin and Light Laptop  (15.6 inch, Silver, 1.35 kg)  ', 0x696d672f4870203235352e6a7067, 0x696d672f),
(8, 'HP AMD', 1, '41650', '60999', ' HP AMD Ryzen 5 Hexa Core 5500U - (8 GB/512 GB SSD/Windows 11 Home) 15s- eq2144au Thin and Light Laptop  (15.6 inch, Natural Silver, 1.69 kg, With MS Office) ', 0x696d672f687020616d642e6a7067, 0x696d672f),
(9, 'DELL Latitude', 1, '32490', '70990', ' DELL Latitude 3540 (2024) Intel Core i3 12th Gen 1215U - (8 GB/512 GB SSD/Windows 11 Pro) Latitude 3540 Business Laptop  (15.6 inch, Smoky Black, 1.6 kg) ', 0x696d672f64656c6c206c617469747564652e6a7067, 0x696d672f),
(10, 'DELL G15 i5', 1, '79990', '106331', ' DELL G15 Intel Core i5 13th Gen 13450HX - (16 GB/1 TB SSD/Windows 11 Home/6 GB Graphics/NVIDIA GeForce RTX 3050/120 Hz) 5530 Gaming Laptop  (15.6 inch, Dark Shadow Gray With Black Thermal Shelf, 2.65 Kg, With MS Office)   ', 0x696d672f64656c6c20672d31352e6a7067, 0x696d672f),
(11, 'DELL Inspiron 14', 1, '110000 ', '115000', ' DELL Inspiron 14 7430 Intel Core i7 13th Gen 1355U - (16 GB/1 TB SSD/Windows 11 Home) IC7430JR4VY001ORS1 2 in 1 Laptop  (14 inch, Platinum Silver, With MS Office) ', 0x696d672f44454c4c20496e737069726f6e2031342e6a7067, 0x696d672f),
(12, 'Lenovo LOQ i5', 1, '57990', '80090', ' Lenovo LOQ Intel Core i5 12th Gen 12450HX - (12 GB/512 GB SSD/Windows 11 Home/4 GB Graphics/NVIDIA GeForce RTX 2050) LOQ 15IAX9D1 Gaming Laptop  (15.6 inch, Luna Grey, 2.38 kg) ', 0x696d672f6c656e6f766f206c6f712069352e6a7067, 0x696d672f),
(13, 'DELL vostro', 2, '34990', '48529', ' DELL Vostro AMD Ryzen 3 Quad Core 5425U - (8 GB/256 GB SSD/Windows 11 Home) Vostro 3425 Thin and Light Laptop  (14 Inch, Carbon Black, 1.48 Kg, With MS Office) ', 0x696d672f64656c6c20766f7374726f2e6a7067, 0x696d672f),
(14, 'HP Pavilion  ', 2, '75990', '93261', ' HP Pavilion Intel Core i7 12th Gen 1255U - (16 GB/1 TB SSD/Windows 11 Home) 14-dv2015TU Thin and Light Laptop  (14 inch, Natural Silver, 1.41 Kg, With MS Office) ', 0x696d672f687020706176696c696f6e2e6a7067, 0x696d672f687020706176696c696f6e20322e6a7067),
(15, 'SAMSUNG Book4 ', 2, '37990', '57499', ' SAMSUNG Galaxy Book4 Metal Intel Core i3 13th Gen 1315U - (8 GB/512 GB SSD/Windows 11 Home) NP750XGJ-LG4IN Thin and Light Laptop  (15.6 Inch, Gray, 1.55 Kg, With MS Office) ', 0x696d672f73616d73756e6720626f6f6b342e6a7067, 0x696d672f),
(16, 'DELL Inspiron 15', 2, ' 46990', '65104', ' DELL Inspiron Intel Core i5 12th Gen 1235U - (8 GB/512 GB SSD/Windows 11 Home) Inspiron 3520 Thin and Light Laptop  (15.6 Inch, Dark Green Speckle, 1.65 Kg, With MS Office)  ', 0x696d672f64656c6c20696e737069726f6e2e6a7067, 0x696d672f64656c6c20696e737069726f6e2069332e6a7067),
(17, 'Apple MacBook ', 2, ' 83990', '109900', ' Apple MacBook Air Apple M4 - (16 GB/256 GB SSD/macOS Sequoia) MC6T4HN/A  (13.6 inch, Sky Blue, 1.24 kg)  ', 0x696d672f6d6163626f6f6b206d322e6a7067, 0x696d672f6170706c65206d3220322e6a7067),
(18, 'DELL Inspiron i3', 2, '36890 ', '58890', ' DELL i3 12th Gen Intel Core i3 11th Gen 1215U - (8 GB/512 GB SSD/8 GB EMMC Storage/Windows 11 Home) New Inspiron Notebook  (15.6 inch, Platinum Silver, 1.8 kg, With MS Office) ', 0x696d672f64656c6c20696e737069726f6e2069332e6a7067, 0x696d672f),
(19, 'DELL Intel', 2, '37300', '47869', ' DELL Intel Core i3 13th Gen - (8 GB/512 GB SSD/Windows 11 Home) 3530 Thin and Light Laptop  (15.6 inch, Carbon Black, With MS Office) ', 0x696d672f64656c6c20696e74656c20696e737069726f6e2e6a7067, 0x696d672f64656c6c20696e74656c2e6a7067),
(20, 'DELL 15 AMD ', 2, '34990', '38747', ' DELL AMD Ryzen 3 Quad Core 7320U - (8 GB/512 GB SSD/Windows 11 Home) Inspiron 3535 Thin and Light Laptop  (15.6 Inch, Platinum Silver, 1.67 Kg, With MS Office) ', 0x696d672f64656c6c20313520616d642e6a7067, 0x696d672f64656c6c2031352e6a7067),
(21, 'ASUS Vivobook 15', 2, '39990', '54990', ' ASUS Vivobook 15 Intel Core i3 12th Gen 1215U - (16 GB/512 GB SSD/Windows 11 Home) X1504ZA-NJ342WS Thin and Light Laptop  (15.6 Inch, Cool Silver, 1.70 Kg, With MS Office) ', 0x696d672f61737573207669766f626f6f6b2031352069332e6a7067, 0x696d672f61737573207669766f626f6f6b2e6a7067),
(22, 'HP 15s AMD ', 2, '38080', '55990', ' HP 15s AMD Ryzen 5 Quad Core 7520U - (16 GB/512 GB SSD/Windows 11 Home) 15-fc0030AU Thin and Light Laptop  (15.6 Inch, Natural Silver, 1.75 Kg, With MS Office) ', 0x696d672f68703135732e6a7067, 0x696d672f6870203135732072797a656e2e6a7067),
(23, 'ASUS Vivobook S ', 2, '70390', '89990', ' ASUS Vivobook S 15 OLED Intel EVO H-Series Intel Core i5 13th Gen 13500H - (16 GB/512 GB SSD/Windows 11 Home) S5504VA-MA541WS Thin and Light Laptop  (15.6 Inch, Solar Blue, 1.70 Kg, With MS Office) ', 0x696d672f61737573207669766f626f6f6b20732e6a7067, 0x696d672f61737573207669766f626f6f6b732e6a7067),
(24, 'ASUS Go 15', 2, '46990', '65104', ' ASUS Vivobook Go 15 OLED AMD Ryzen 3 Quad Core 7320U - (8 GB/512 GB SSD/Windows 11 Home) E1504FA-LK322WS Thin and Light Laptop  (15.6 Inch, Mixed Black, 1.63 Kg, With MS Office)   ', 0x696d672f6173757320676f2031352e6a7067, 0x696d672f61737573207669766f626f6f6b20676f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(3) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `uemail` varchar(255) NOT NULL,
  `upass` varchar(255) NOT NULL,
  `ucontact` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `uemail`, `upass`, `ucontact`) VALUES
(1, 'Jayraj', 'dangarjayraj5709@gmail.com', '5709', 9537070584),
(2, 'ashish', 'ashish5555@gmail.com', 'ashu@385', 7016385985),
(3, 'ashish', 'ashish5555@gmail.com', 'ashu@385', 7016385985);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cuid`);

--
-- Indexes for table `insert`
--
ALTER TABLE `insert`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cuid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `insert`
--
ALTER TABLE `insert`
  MODIFY `cid` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `oid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
