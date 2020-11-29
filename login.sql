DROP DATABASE IF EXISTS login;
CREATE DATABASE login;
USE login;

--
-- Table structure for table `Returning Customers`
--

DROP TABLE IF EXISTS `returning_customers`;
CREATE TABLE `returning_customers` (
  `email_address` text(60) NOT NULL,
  `password` varchar(10) NOT NULL,
);
