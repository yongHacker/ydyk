-- MySQL database dump


































  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表：后台管理员',
  `uname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `pwd` varchar(50) NOT NULL COMMENT 'MD5密码',
  `salt` int(11) NOT NULL DEFAULT '1' COMMENT 'MD5盐值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



















