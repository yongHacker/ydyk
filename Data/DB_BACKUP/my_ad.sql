-- MySQL database dump


































  `aid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `adname` varchar(20) NOT NULL COMMENT '广告名称',
  `photo` varchar(100) NOT NULL COMMENT '图片路径',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `position` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

























