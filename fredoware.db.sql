# Host: localhost  (Version 5.5.5-10.1.34-MariaDB)
# Date: 2024-02-18 22:20:30
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "menu_category"
#

INSERT INTO `menu_category` VALUES (1,1,'Frywich',NULL,'Fried Chicken Sandwich'),(2,1,'Chicken Combo',NULL,NULL),(3,1,'Chicken steak madness',NULL,NULL),(4,1,'Sizzlers',NULL,NULL),(5,1,'Finger Foods',NULL,NULL),(6,1,'Flavoured Wings',NULL,NULL),(7,1,'Soup',NULL,NULL),(8,1,'Coffee/Non-Coffee',NULL,NULL),(9,1,'Fresh Fruit Shake',NULL,NULL),(10,1,'Pizza',NULL,NULL),(11,1,'Soft Drinks',NULL,NULL),(12,1,'Liquors',NULL,NULL),(13,1,'Others',NULL,NULL);

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
  `status` varchar(255) DEFAULT 'Available',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "menu_item"
#

INSERT INTO `menu_item` VALUES (1,1,'Frywich Solo',NULL,'frywich1.png',85,'Available'),(2,1,'Pesto frywich Solo',NULL,'frywich1.png',85,'Not Available'),(3,1,'Frywich with Fries and Drinks',NULL,'frywich2.png',145,'Available'),(4,1,'Frywich with Spaghetti and Drinks',NULL,'frywich3.png',195,'Available'),(5,2,'1 piece chicken with rice and drinks\r\n',NULL,'cb1.png',99,'Available'),(6,2,'1 piece chicken with lumpia,  rice and drinks\r\n',NULL,'cb2.png',129,'Available'),(7,2,'2 piece chicken with rice and drinks\r\n',NULL,'cb3.png',159,'Available'),(8,2,'1 piece chicken with fries, rice and drinks\r\n',NULL,'cb4.png',139,'Available'),(9,2,'1 piece chicken with spaghetti and drinks\r\n',NULL,'cb5.png',159,'Available'),(10,2,'4 pieces Fried Chicken\r\n',NULL,'cb6.png',229,'Available'),(11,2,'6 pieces Fried Chicken\r\n',NULL,'cb6.png',349,'Available'),(12,2,'12 pieces Fried Chicken\r\n',NULL,'cb6.png',699,'Available'),(13,3,'1 piece original chicken steak with rice and drinks\r\n',NULL,'cs1.png',99,'Available'),(14,3,'1 piece chicken pesto with rice and drinks\r\n',NULL,'cs1.png',99,'Available'),(15,3,'1 piece chicken ala king with rice and drinks\r\n',NULL,'cs1.png',99,'Available'),(16,3,'2 piece original chicken steak with rice and drinks\r\n',NULL,'cs2.png',159,'Available'),(17,3,'1 piece original chicken steak with lumpia, rice and drinks\r\n',NULL,'cs3.png',129,'Available'),(18,4,'Chicken sisig with rice\r\n',NULL,'csisig.png',119,'Available'),(19,4,'Chicken sisig platter\r\n',NULL,'csisigp.png',169,'Available'),(20,4,'Hungarian with rice\r\n',NULL,'hungrice.png',129,'Available'),(21,4,'Hungarian Platter\r\n',NULL,'hungplatter.png',169,'Available'),(22,4,'Pork sisig with rice\r\n',NULL,'psisig.png',119,'Available'),(23,4,'Pork sisig platter\r\n',NULL,'psisigp.png',169,'Available'),(24,4,'Liempo with rice\r\n',NULL,'liemporice.png',139,'Available'),(25,4,'Pork katsu with rice\r\n',NULL,'katsurice.png',139,'Available'),(26,4,'Fried Paa with Rice\r\n',NULL,'gravylicious-paa.png',139,'Available'),(27,4,'Fried Pecho with rice\r\n',NULL,'gravylicious-pecho.png',139,'Available'),(28,5,'Chicken Finger\r\n',NULL,'cfingers.png',169,'Available'),(29,5,'Chicken Skin\r\n',NULL,'cskin.png',149,'Available'),(30,5,'Lumpia\r\n',NULL,'lumpia.png',109,'Available'),(31,5,'Siomai\r\n',NULL,'siomai.png',49,'Available'),(32,5,'Fries\r\n',NULL,'fries.png',79,'Available'),(33,5,'Nacho Fries\r\n',NULL,'nachos.png',169,'Available'),(34,6,'Wings with rice and drinks\r\n',NULL,'wingsrice.png',169,'Available'),(35,6,'Wings with fries\r\n',NULL,'wingsfries.png',189,'Available'),(36,6,'Wings ala carte\r\n',NULL,'wingsalacarte.png',229,'Available'),(37,7,'Creamy macaroni solo\r\n',NULL,'cmacaroni.png',55,'Available'),(38,7,'Mushroom solo\r\n',NULL,'mushroomsoup.png',55,'Available'),(39,7,'Molo solo\r\n',NULL,'molosoup.png',55,'Available'),(40,7,'Creamy molo solo\r\n',NULL,'creamymolo.png',55,'Available'),(41,7,'Lomi solo\r\n',NULL,'lomi.png',55,'Available'),(42,7,'Creamy macaroni for share\r\n',NULL,'cmacaroni.png',145,'Available'),(43,7,'Mushroom for share\r\n',NULL,'mushroomsoup.png',145,'Available'),(44,7,'Molo for share\r\n',NULL,'molosoup.png',145,'Available'),(45,7,'Creamy molo for share\r\n',NULL,'creamymolo.png',145,'Available'),(46,7,'Lomi for share\r\n',NULL,'lomi.png',145,'Available'),(47,8,'Hot Coffee\r\n',NULL,'hotcoffee.png',25,'Available'),(48,8,'Iced Coffee\r\n',NULL,'icedcoffee.png',65,'Available'),(49,8,'Iced Choco\r\n',NULL,'icedchoco.png',65,'Available'),(50,8,'Choco Shake\r\n',NULL,'chocoshake.png',75,'Available'),(51,8,'Fruit Soda\r\n',NULL,'fruitsoda.png',75,'Available'),(52,8,'Iced Tea Pitcher',NULL,'icedteapitcher.png',45,'Available'),(53,8,'Iced Tea Glass',NULL,'icedteaglass.png',85,'Available'),(54,9,'Mango\r\n',NULL,'mangoshake.png',75,'Available'),(55,9,'Cucumber\r\n',NULL,'cucumbershake.png',75,'Available'),(56,9,'Corn\r\n',NULL,'cornshake.png',75,'Available'),(57,9,'Guyabano\r\n',NULL,'guyabano.png',75,'Available'),(58,9,'Avocado\r\n',NULL,'avocadoshake.png',75,'Available'),(59,9,'Melon\r\n',NULL,'melonshake.png',75,'Available'),(60,10,'All Cheese\r\n',NULL,'cheesepizza.png',99,'Available'),(61,10,'Ham & Cheese\r\n',NULL,'hamcheesepizza.png',129,'Available'),(62,10,'Hawaiian\r\n',NULL,'hawaiianpizza.png',159,'Available'),(63,10,'Peperoni\r\n',NULL,'peperonipizza.png',199,'Available'),(64,10,'Meat Overload',NULL,'meatoverload.png',239,'Available'),(65,11,'Mountain Dew\r\n',NULL,'mountaindew.png',30,'Available'),(66,11,'Coke\r\n',NULL,'coke.png',30,'Available'),(67,11,'Sprite\r\n',NULL,'sprite.png',30,'Available'),(68,12,'Redhorse Litro',NULL,'litro.png',65,'Available'),(69,12,'Stallion',NULL,'stallion.png',65,'Available'),(70,12,'Pilsen\r\n',NULL,'pilsen.png',65,'Available'),(71,12,'San Mig Light',NULL,'sanmiglight.png',65,'Available'),(72,12,'San Mig Apple',NULL,'sanmigapple.png',65,'Available'),(73,12,'Primera Light\r\n',NULL,'primeralight.png',300,'Available'),(74,12,'Tanduay Light',NULL,'tanduaylight.png',300,'Available'),(75,13,'Spaghetti Solo with drinks\r\n',NULL,'spag1.png',119,'Available'),(76,13,'Sizzling Shawarma Rice',NULL,'shawarmarice.png',139,'Available'),(77,13,'Bottled Water\r\n',NULL,'bottledwater.png',20,'Available');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "order_item"
#

INSERT INTO `order_item` VALUES (1,'1708113659',4,3,'2024-02-17'),(2,'1708113659',1,6,'2024-02-17'),(3,'1708113764',1,3,'2024-02-17'),(4,'1708114205',1,3,'2024-02-17'),(5,'1708114225',1,4,'2024-02-17'),(6,'1708114389',5,5,'2024-02-17'),(7,'1708114718',5,1,'2024-02-17'),(8,'1708114718',2,3,'2024-02-17'),(9,'1708146912',1,3,'2024-02-17'),(10,'1708146912',2,3,'2024-02-17'),(11,'1708147062',1,1,'2024-02-17'),(12,'1708147062',3,1,'2024-02-17'),(13,'1708149118',1,2,'2024-02-17'),(14,'1708149118',2,2,'2024-02-17'),(15,'1708149118',4,1,'2024-02-17'),(16,'1708149143',1,1,'2024-02-17'),(17,'1708240574',11,2,'2024-02-18'),(18,'1708240574',1,1,'2024-02-18'),(19,'1708265707',5,2,'2024-02-18');

#
# Structure for table "order_main"
#

DROP TABLE IF EXISTS `order_main`;
CREATE TABLE `order_main` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `status` varchar(255) DEFAULT 'Pending',
  `storeCode` varchar(100) DEFAULT NULL,
  `type` varchar(255) DEFAULT 'Dine In',
  `customer` varchar(255) DEFAULT NULL,
  `notes` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

#
# Data for table "order_main"
#

INSERT INTO `order_main` VALUES (1,'1708113659','2024-02-17','Canceled','wingsxpress','Dine In','fred',NULL),(2,'1708113764','2024-02-17','Canceled','wingsxpress','Dine In','fred',NULL),(3,'1708114205','2024-02-17','Canceled','wingsxpress','Dine In','FDred',NULL),(4,'1708114225','2024-02-17','Canceled','wingsxpress','Dine In','FDred',NULL),(5,'1708114389','2024-02-17','Delivered','wingsxpress','Dine In','FDred',NULL),(6,'1708114718','2024-02-17','Canceled','wingsxpress','Dine In','FDred',NULL),(7,'1708146912','2024-02-17','Delivered','wingsxpress','Dine In','Fred',NULL),(8,'1708147062','2024-02-17','Canceled','wingsxpress','Dine In','Fred','noting'),(9,'1708149118','2024-02-17','Canceled','wingsxpress','Dine In','Fred',''),(10,'1708149143','2024-02-17','Canceled','wingsxpress','Dine In','Fred',''),(11,'1708240574','2024-02-18','Confirmed','wingsxpress','Dine In','fred',''),(12,'1708265707','2024-02-18','Delivered','wingsxpress','Dine In','RT','');

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
