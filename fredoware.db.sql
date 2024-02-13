# Host: localhost  (Version 5.5.5-10.1.34-MariaDB)
# Date: 2024-02-13 22:05:53
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "menu_category"
#

DROP TABLE IF EXISTS `menu_category`;
CREATE TABLE `menu_category` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `storeId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "menu_category"
#

INSERT INTO `menu_category` VALUES (1,1,'Frywich',NULL,'Fried Chicken Sandwich'),(2,1,'Fried Chicken',NULL,NULL);

#
# Structure for table "menu_item"
#

DROP TABLE IF EXISTS `menu_item`;
CREATE TABLE `menu_item` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `menuCategoryId` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text,
  `image` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Active',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "menu_item"
#

INSERT INTO `menu_item` VALUES (1,1,'F1','Solo Burger','friedchicken.jpg',99,'Active');

#
# Structure for table "order_item"
#

DROP TABLE IF EXISTS `order_item`;
CREATE TABLE `order_item` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` varchar(100) DEFAULT NULL,
  `itemId` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT '1',
  `dateAdded` date DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "order_item"
#


#
# Structure for table "order_main"
#

DROP TABLE IF EXISTS `order_main`;
CREATE TABLE `order_main` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Pending',
  `storeId` int(11) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'Dine In',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "order_main"
#


#
# Structure for table "store"
#

DROP TABLE IF EXISTS `store`;
CREATE TABLE `store` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `storeCode` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `theme` varchar(255) DEFAULT 'firy',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "store"
#

INSERT INTO `store` VALUES (1,'wingsxpress','WingsXpress','Fred Garcia','304304304','aa@aa.com','1234','dsfsfdsf','Active','wingsxpress.png','firy');
