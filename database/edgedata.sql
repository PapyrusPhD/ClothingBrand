-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.16-log


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema edgedata


CREATE DATABASE /*!32312 IF NOT EXISTS*/ edgedata;
USE edgedata;

--
-- Table structure for table `edgedata`.`admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(500) NOT NULL DEFAULT '',
  `admin_password` varchar(500) NOT NULL DEFAULT '',
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edgedata`.`admin`
--

/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`admin_id`,`admin_username`,`admin_password`) VALUES 
 (1,'dffrnt','admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


--
-- Table structure for table `edgedata`.`items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `item_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `item_name` varchar(5000) NOT NULL DEFAULT '',
  `item_price` double DEFAULT NULL,
  `item_image` varchar(5000) NOT NULL DEFAULT '',
  `item_color` varchar(50) NOT NULL DEFAULT '',
  `item_size` varchar(10) NOT NULL DEFAULT '',  -- Add the item_size column
  `item_quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `item_date` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;


--
-- Dumping data for table `edgedata`.`items`
--

/*!40000 ALTER TABLE `items` DISABLE KEYS */;
INSERT INTO `items` (`item_id`, `item_name`, `item_price`, `item_image`,`item_color`,`item_size`,`item_quantity`, `item_date`) VALUES
(5, 'DFFRNT Be Like No Other', 550, 'DFFRNT APPAREL.jpg', 'BLACK', 'Small','3', '2023-11-10'),
(6, 'DFFRNT BLAST OFF', 450, 'DFFRNT BLAST OFF.jpg', 'BLUE', 'Small', '4','2023-11-10'),
(7, 'DFFRNT GEAR 5th', 560, 'DFFRNT GEARTH 5th.webp', 'CREAM', 'Small', '8','2023-11-10'),
(8, 'DFFRNT MUGIWARA', 355, 'DFFRNT MUGIWARA.webp', 'WHITE', 'Small', '7','2023-11-10'),
(9, 'DFFRNT THERAPY', 590, 'DFFRNT THERAPY.webp', 'BROWN', 'Small', '5','2023-11-10');

 
/*!40000 ALTER TABLE `items` ENABLE KEYS */;

--
-- Table structure for table `edgedata`.`users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(1000) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `user_firstname` varchar(1000) NOT NULL CHECK (user_firstname REGEXP '^[A-Za-z]+$'),
  `user_lastname` varchar(1000) NOT NULL CHECK (user_lastname REGEXP '^[A-Za-z]+$'),
  `user_address` varchar(1000) NOT NULL,
  `user_contactnumber` varchar(11) NOT NULL,
  `user_payment` varchar(13) NOT NULL,
  `user_region` varchar(1000) NOT NULL,
  `user_city` varchar(1000) NOT NULL,
  `verification_code` varchar(1000) NOT NULL,
  `email_verified_at` varchar(1000) NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edgedata`.`users`
--

-- /*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`,`user_email`,`user_password`,`user_firstname`,`user_lastname`,`user_address`,`user_contactnumber`, `user_payment`,  `user_region`, `user_city`) VALUES 
 (1,'gebb.freelancer@gmail.com','gebbz03','Gebb','Ebero','Badas','1234567890', '3245679856783', 'NCR', 'QC', "1000"),
 (3,'gebb.sage@gmail.com','gebbz03','sdffs','adad','ssad','9876543210','4013082497052', 'Region III',  'Bulacan', "2000"),
 (4,'mik@gmail.com','mik','Gebb','Ebero','Badas','5555555555', '5678432198761','NCR', 'Makati', "3000");


--
-- Table structure for table `edgedata`.`orderdetails`
--

DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE `orderdetails` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `order_name` varchar(1000) NOT NULL DEFAULT '',
  `order_price` double NOT NULL DEFAULT '0',
  `order_image` varchar(5000) NOT NULL DEFAULT '',
  `order_color` varchar(50) NOT NULL DEFAULT '',
  `order_quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `order_size` varchar(10) NOT NULL DEFAULT '', -- Use VARCHAR to store size as text
  `order_total` double NOT NULL DEFAULT '0',
  `order_status` varchar(45) NOT NULL DEFAULT '',
  `order_payment` varchar(13) NOT NULL DEFAULT '',
  `order_date` date NOT NULL DEFAULT '0000-00-00',
  
  

  PRIMARY KEY (`order_id`),
  KEY `FK_orderdetails_1` (`user_id`),
  CONSTRAINT `FK_orderdetails_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `edgedata`.`orderdetails`
--

/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` (`order_id`, `user_id`, `order_name`, `order_price`, `order_image`, `order_color`, `order_quantity`, `order_size`, `order_total`, `order_status`, `order_date`, `order_payment`) VALUES
 (20, 4, 'Item2', 100, '109635.jpg', 'Black', 2, 'Medium', 200, 'Ordered_Finished', '2016-11-14', '3245678965432'),
 (23, 4, 'Item2', 100, '463791.jpg', 'White', 3, 'Large', 300, 'Ordered_Finished', '2016-11-14', '3245679856785'),
 (30, 4, 'Item2', 100, '521032.jpg', 'Blue', 1, 'Small', 100, 'Ordered', '2016-11-15', '4013082497058'),
 (32, 4, 'Item4', 60, '659427.jpg', 'Cream', 2, 'XL', 120, 'Ordered', '2016-11-15', '5678432198768');





/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;



/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
