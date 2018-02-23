-- MySQL database dump


































  `infoid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '信息id',
  `uid` bigint(20) NOT NULL COMMENT '用户id',
  `uname` varchar(30) NOT NULL COMMENT '姓名',
  `uphone` varchar(20) NOT NULL COMMENT '电话',
  `city` varchar(50) NOT NULL COMMENT '省市区',
  `address` varchar(200) NOT NULL COMMENT '地址',
  `flag` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`infoid`),
  KEY `userinfoFK` (`uid`),
  CONSTRAINT `userinfoFK` FOREIGN KEY (`uid`) REFERENCES `my_user` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;





















































