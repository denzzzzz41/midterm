

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

INSERT INTO usertable VALUES("robbie123","robbie123","robbie123@yahoo.com","69","0","admin","2021-06-17 22:13:15");
INSERT INTO usertable VALUES("admin","admin","admin@yahoo.com","70","678574","admin","2021-06-23 22:38:27");
INSERT INTO usertable VALUES("ruvsen1234","Detablan♠123","detablanr@gmail.com","72","282427","verified","2021-06-17 22:24:05");
INSERT INTO usertable VALUES("danijunjun","Danilo@123","danilow@gmail.com","73","405368","notverified","2021-06-23 22:15:34");

