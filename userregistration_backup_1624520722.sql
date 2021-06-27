

CREATE TABLE `usertable` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `datetime` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

INSERT INTO usertable VALUES("admin","admin","admin@yahoo.com","70","583638","admin","2021-06-24 15:44:35");
INSERT INTO usertable VALUES("danijunjun","Danilo@123","danilow@gmail.com","73","405368","notverified","2021-06-23 22:15:34");

