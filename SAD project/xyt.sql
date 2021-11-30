-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2021 at 04:25 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xyt`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_ID` int(10) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Middle_I` varchar(50) NOT NULL,
  `Suffix` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Zip` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EID` int(10) NOT NULL,
  `Firstname` varchar(30) NOT NULL,
  `Middle_l` varchar(60) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Address` varchar(60) NOT NULL,
  `Age` int(3) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Username` varchar(60) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Position` tinyint(10) NOT NULL,
  `Gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EID`, `Firstname`, `Middle_l`, `Lastname`, `Address`, `Age`, `Phone`, `Email`, `Username`, `Password`, `Position`, `Gender`) VALUES
(1, 'Xyril', 'Yee', 'Te', 'Phase 1, block 22, lot 1, Woodridge Davao City', 20, '91342651352', 'XyrilTe@gmail.com', 'Admin', 'Admin123', 1, 'Male'),
(2, 'Bradley', 'Anito', 'Suyko', 'Phase 1, block 22, lot 1, Woodridge Davao City', 20, '91342651352', 'Bradz@gmail.com', 'bradboyz', 'bradboyz', 1, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `logistics`
--

CREATE TABLE `logistics` (
  `Logistic_ID` int(11) NOT NULL,
  `Date_of_Order` date NOT NULL,
  `Courier_Name` varchar(255) NOT NULL,
  `Payment_ID` int(11) NOT NULL,
  `LogCategory_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logistic_category`
--

CREATE TABLE `logistic_category` (
  `LogCategory_ID` int(11) NOT NULL,
  `Logistic_Type` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `Order_No` int(10) NOT NULL,
  `Date_of_Order` date NOT NULL,
  `Order_Details` varchar(50) NOT NULL,
  `Customer_ID` int(10) NOT NULL,
  `ORCategory_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_category`
--

CREATE TABLE `order_category` (
  `ORCategory_ID` int(11) NOT NULL,
  `Order_Type` int(11) NOT NULL,
  `Description` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `OrderDetail_ID` int(10) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `Particular` varchar(50) NOT NULL,
  `Unit_Price` int(20) NOT NULL,
  `Total_Amount` int(20) NOT NULL,
  `Order_No` int(20) NOT NULL,
  `Payment_ID` int(20) NOT NULL,
  `Product_ID` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(20) NOT NULL,
  `Payment_Type` varchar(255) NOT NULL,
  `Other_Details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `ID` int(11) NOT NULL,
  `Position_Name` varchar(50) NOT NULL,
  `Description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(20) NOT NULL,
  `Product_Name` varchar(255) NOT NULL,
  `Product_Description` text NOT NULL,
  `Product_no` varchar(255) NOT NULL,
  `Product_Price` int(20) NOT NULL,
  `Product_Quantity` int(20) NOT NULL,
  `Product_Status` varchar(20) NOT NULL,
  `Supplier` int(20) NOT NULL,
  `ProdCategory` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Product_Name`, `Product_Description`, `Product_no`, `Product_Price`, `Product_Quantity`, `Product_Status`, `Supplier`, `ProdCategory`) VALUES
(1, 'Air Filter', 'High Quality Rubber and Metal', 'AP1000', 500, 100, 'available', 3, 2),
(2, 'Gas Filter', 'High Quality Filter', 'MP1000', 800, 100, 'available', 4, 1),
(3, 'Baygon', 'asdasdasd', 'HS1000', 300, 50, 'available', 1, 1),
(4, 'Side Mirror', 'makakakita ka ng gwapo', 'MP1001', 300, 60, 'available', 3, 1),
(5, 'Spring', 'long lasting spring\r\ntatalbog ka talaga sa kalami', 'HS1001', 20, 35, 'pull-out', 2, 7);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `ProdCategory_ID` int(11) NOT NULL,
  `Product_Type` varchar(255) NOT NULL,
  `category_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`ProdCategory_ID`, `Product_Type`, `category_code`) VALUES
(1, 'Motorcycle Parts', 'MP'),
(2, 'Auto Parts', 'AP'),
(3, 'Furniture Supplies', 'FS'),
(4, 'Lightings', 'LS'),
(5, 'Plastic Wares', 'PW'),
(6, 'Electronic Supplies', 'ES'),
(7, 'Hardware Supplies', 'HS');

-- --------------------------------------------------------

--
-- Table structure for table `product_status`
--

CREATE TABLE `product_status` (
  `ProdStatus_ID` int(11) NOT NULL,
  `Product_Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_status`
--

INSERT INTO `product_status` (`ProdStatus_ID`, `Product_Status`) VALUES
(1, 'Available'),
(2, 'Critical'),
(3, 'unavailable'),
(4, 'pull-out');

-- --------------------------------------------------------

--
-- Table structure for table `sale_reports`
--

CREATE TABLE `sale_reports` (
  `SaleReport_ID` int(11) NOT NULL,
  `Report_Date` date NOT NULL,
  `Report_Details` varchar(255) NOT NULL,
  `Payment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_ID` int(11) NOT NULL,
  `supplier_company` varchar(255) NOT NULL,
  `supplier_detail` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_fax` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_ID`, `supplier_company`, `supplier_detail`, `supplier_address`, `supplier_fax`, `contact_person`, `contact_email`, `contact_number`, `Status`) VALUES
(1, 'KnuLL', 'asdasd', 'awdawd', 'awdawda', 'awdawd', 'aw@gmail.com', '654315351351', 'active'),
(2, 'Mandawe Homes', 'asdasd', 'awdawd', 'awdawda', 'awdawd', 'aw@gmail.com', '654315351351', 'active'),
(3, 'Toyota', 'asdasd', 'awdawd', 'awdawda', 'awdawd', 'aw@gmail.com', '654315351351', 'active'),
(4, 'Kawasaki', 'asdasd', 'awdawd', 'awdawda', 'awdawd', 'aw@gmail.com', '654315351351', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EID`);

--
-- Indexes for table `logistics`
--
ALTER TABLE `logistics`
  ADD PRIMARY KEY (`Logistic_ID`);

--
-- Indexes for table `logistic_category`
--
ALTER TABLE `logistic_category`
  ADD PRIMARY KEY (`LogCategory_ID`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`Order_No`);

--
-- Indexes for table `order_category`
--
ALTER TABLE `order_category`
  ADD PRIMARY KEY (`ORCategory_ID`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`OrderDetail_ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`ProdCategory_ID`);

--
-- Indexes for table `product_status`
--
ALTER TABLE `product_status`
  ADD PRIMARY KEY (`ProdStatus_ID`);

--
-- Indexes for table `sale_reports`
--
ALTER TABLE `sale_reports`
  ADD PRIMARY KEY (`SaleReport_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Customer_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `Order_No` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_category`
--
ALTER TABLE `order_category`
  MODIFY `ORCategory_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `OrderDetail_ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `Payment_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `ProdCategory_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_status`
--
ALTER TABLE `product_status`
  MODIFY `ProdStatus_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
