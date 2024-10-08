-- MySQL dump 10.19  Distrib 10.3.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: kumaars1_cowshala
-- ------------------------------------------------------
-- Server version	10.3.32-MariaDB-cll-lve

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razorpay_payment_id` text NOT NULL,
  `merchant_order_id` text NOT NULL,
  `merchant_trans_id` text NOT NULL,
  `merchant_product_info_id` text NOT NULL,
  `card_holder_name_id` varchar(50) NOT NULL,
  `merchant_amount` text NOT NULL,
  `merchant_total` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `order`
--

LOCK TABLES `order` WRITE;
/*!40000 ALTER TABLE `order` DISABLE KEYS */;
INSERT INTO `order` VALUES (1,'pay_GN9rBqrqsyNf5x','20210109092501','20210109092501','Paneer','YOGESH BHATIA','72','7200','yogesh.bhatia0607@gmail.com','YOGESH BHATIA','9999900929','2021-01-09 03:26:33');
/*!40000 ALTER TABLE `order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `slug` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'Home','Cowshala','home'),(2,'About Us','About','about-us'),(3,'Why Us','why us','why-us'),(4,'Products','Products','product'),(5,'Contact Us','Contact us','contact-us'),(6,'Our Plans','Our Plans','our-plan'),(7,'Subscription Plans','Subcription','subscription-plan');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `razorpay_payment_id` text NOT NULL,
  `merchant_order_id` text NOT NULL,
  `merchant_trans_id` text NOT NULL,
  `merchant_product_info_id` text NOT NULL,
  `card_holder_name_id` varchar(50) NOT NULL,
  `merchant_amount` text NOT NULL,
  `merchant_total` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'0','20210105184301','20210105184301','1','Suraj Kumar','3000','300000','surajrobert420@gmail.com','Suraj Kumar','0987654321','2021-01-05 12:43:15'),(2,'pay_GLjTjMNB16KqWq','20210105185755','20210105185755','1','Suraj Kumar','3000','300000','modifiercrazy@gmail.com','Suraj Kumar','8604026123','2021-01-05 12:58:14'),(3,'pay_GLjVkX9xTBxfAY','20210105185952','20210105185952','1','Suraj','3000','300000','modifiercrazy@gmail.com','Suraj','8604026123','2021-01-05 13:00:08'),(4,'pay_GLjdj5neYJdK46','20210105190725','20210105190725','1','Suraj Kumar','3000','300000','surajrobert420@gmail.com','Suraj Kumar','8604026123','2021-01-05 13:07:41'),(5,'pay_GN9rBqrqsyNf5x','20210109092501','20210109092501','Paneer','YOGESH BHATIA','72','7200','yogesh.bhatia0607@gmail.com','YOGESH BHATIA','9999900929','2021-01-09 03:26:32');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(11) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `date_mod` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `content` text NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `price_tags`
--

DROP TABLE IF EXISTS `price_tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `price_tags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `price` text NOT NULL,
  `qty` text NOT NULL,
  `scale` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `price_tags`
--

LOCK TABLES `price_tags` WRITE;
/*!40000 ALTER TABLE `price_tags` DISABLE KEYS */;
INSERT INTO `price_tags` VALUES (1,2,'240','100','ml'),(2,2,'550','250','ml'),(3,2,'1100','500','ml'),(4,4,'110','100','ml'),(5,4,'275','250','ml'),(6,4,'550','500','ml'),(7,3,'72','200','gms');
/*!40000 ALTER TABLE `price_tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `add_date` datetime NOT NULL DEFAULT current_timestamp(),
  `mod_date` datetime NOT NULL DEFAULT current_timestamp(),
  `price` double NOT NULL,
  `slug` text NOT NULL,
  `measerment` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'A2 Milk','milk-bottle.png','<div>\r\n            <h4>What is A2 milk?</h4>\r\n            <p>The milk is primarily of two different types A1 and A2. This difference is on the basis of protein the milk contains. A1 milk contains beta-casein protein while this protein in absent in A2 milk. Studies suggest that beta-casein protein in milk causes digestive discomforts on consumption. These include bloating, abdominal pain, diarrhea and gas. The absence of beta-casein protein in A2 milk makes it the most healthy option. <br> A1 milk is mostly produced by exotic breeds like Jersey and Holstein Friesian and can be availed in abundance. While the A2 milk is produced by mostly the desi breeds and has limited availability. Interesting fact is all the mammals including human being produce A2 milk only. The availability of A1 milk is high in the market as compared to A2 milk, because its production can be managed as per demand by developing A1 protein, which is not possible with A2 protein.  </p>\r\n            <h4>Why you should switch to A2 milk?</h4>\r\n            <ul>\r\n                <li>\r\n                    According to researchers, A2 milk is the better option when it comes to daily consumption. A hypothesis available on the website of Indian Journal of Endocrinology and Metabolism recommends A2 milk owing to its better digestive properties as compared to A1 milk. </li>\r\n                <li>\r\n                    A2 milk can be considered the purest and most nutritious form of milk. Reason being, the cows which produce this milk are nurtured very well. They are given fresh fodder, clean water and good environment.                     \r\n                </li>\r\n                <li>\r\n                    A2 milk does not cause any gastrointestinal discomfort. Even those who have are lactose intolerance (a condition when body is unable to produce enzyme lactase needed to digest the simple sugar present in milk) can have it and get the benefits of milk.\r\n                </li>\r\n                <li>\r\n                    A2 milk contains good protein and all the essential vitamins and minerals for developing strong immunity.\r\n                </li>\r\n                <li>\r\n                     A2 milk producing cows are not given growth hormones or antibiotics to increase the milk supply. While with cows which produce A1 milk, this is a common practice.    \r\n                </li>\r\n            </ul>\r\n        </div>','2020-12-12 00:12:57','2020-12-12 00:12:57',100,'a2-milk','liter'),(2,'Bilona Ghee','ghee.png','<p>Ghee or clarified butter has been a part of Indian food for ages. This relishing milk product has multiple benefits on health. Taking at least a spoonful of Ghee daily is recommended for good digestion, strong immunity, glowing skin and healthy hair. \r\n</p>\r\n                  <p>  \r\nCowshala has come up with Desi Ghee made by the vedic bilona process. Bilona customarily refers to the traditional method of making ghee. In this elaborate process, milk is boiled, cooled and stored in earthen pot. Then a little amount of curd is added to it and kept at room temperature overnight. The curd is then churned manually to extract butter from it. In the last step, the butter is boiled so that excess water is evaporated and pure ghee can be extracted.</p>\r\n                  <p> \r\nThis extensive process of making Ghee is considered the best one. It helps to retain the goodness and purity of Ghee. The Ghee which is readily available in the market and claims to be super healthy are far inferior in quality than the ghee made by bilona process. The bilona method enhances the medicinal properties of ghee.</p>','2020-12-12 00:12:57','2020-12-12 00:12:57',240,'bilona-ghee','100 ml'),(3,'Paneer','paneer.png','<p> We know how much Paneer is loved by the people, especially the vegetarians. Indians are so fond of this dairy product that,  it is prepared in different forms in homes and restaurants. Owing to its huge demand, the market is inundated with adulterated paneer which can adversely affect your health. Cowshala offers Paneer made from A2 milk. Now, you can relish the taste of Paneer without compromising with the quality.\r\n</p>','2020-12-12 00:12:57','2020-12-12 00:12:57',72,'paneer','200 gram'),(4,'Non Bilona Ghee','non-bilona-ghee.png','<p>We also provide pure Ghee made from A2 milk without using the bilona method. In this we use the regular technique of making ghee.  A2 milk is known for its great digestive properties, so the Ghee made from it carries on the same characteristics. Ghee made from this milk has natural healing capacity without any side-effects. It boosts your metabolism and is also a source of instant energy. </p>','2020-12-26 09:09:30','2020-12-26 09:09:30',110,'non-bilona-ghee','100 ml');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `queries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `rights` varchar(50) NOT NULL DEFAULT 'subscriber',
  `date_add` datetime NOT NULL DEFAULT current_timestamp(),
  `date_mod` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `profile` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (3,'modifiercrazy@gmail.com','5fe1f42f90075','Suraj Kumar','8604026123','subscriber','2020-12-22 07:27:11','2020-12-22 07:27:11',''),(4,'marketingwithmohini@gmail.com','5fe2074b028a8','mohini','9711161152','subscriber','2020-12-22 08:48:43','2020-12-22 08:48:43',''),(5,'admin@example.com','2e9064914b997bc1131fbad4db0246bb','Admin','7894561230','subscriber','2020-12-22 12:06:06','2020-12-24 06:52:38',''),(6,'namanchopra74@gmail.com','36d9daf0ed444d8099156e12c2bce4c3','Naman Chopra','8076443653','subscriber','2020-12-22 12:35:09','2020-12-22 12:35:09',''),(7,'yogesh.bhatia0607@gmail.com','722ab2058cb75d728a496fbfc3aa77c3','Yogesh Bhatia','8130754758','subscriber','2021-01-05 02:30:55','2021-01-05 02:30:55',''),(8,'adlakha.ankit@yahoo.in','12035644b98b5c3c3c91be23beac3907','ANKIT ADLAKHA','8851861988','subscriber','2021-01-05 03:09:33','2021-01-05 03:09:33',''),(9,'architadlakha@yahoo.com','d2f24772bf7c359739e9c5b5f563c5be','Archit Adlakha','7011276123','subscriber','2021-01-05 03:12:35','2021-01-05 03:12:35',''),(10,'ankurbhale@gmail.com','c4570cc486a04f56b6dfc2473776384e','Ankur Rao','9711014710','subscriber','2021-01-07 09:43:59','2021-01-07 09:43:59','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'kumaars1_cowshala'
--

--
-- Dumping routines for database 'kumaars1_cowshala'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-12-05  4:26:49
