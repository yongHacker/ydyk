-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2018-01-11 20:25:03

-- MySQL版本: 

-- PHP 版本: 5.6.27



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



--

-- 表的结构my_adminuser

--

DROP TABLE IF EXISTS `my_adminuser`;

CREATE TABLE `my_adminuser` (
  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表：后台管理员',
  `uname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `pwd` varchar(50) NOT NULL COMMENT 'MD5密码',
  `salt` int(11) NOT NULL DEFAULT '1' COMMENT 'MD5盐值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_adminuser

--



INSERT INTO `my_adminuser` VALUES('2','jiangzhi','7c079091f10cd68b01de8cec169c539c','74690','1513925964','1395585523@qq.com');

INSERT INTO `my_adminuser` VALUES('5','jiang','ef2d200a735428a26ff61906bde14744','69087','1514276222','1395585523@qq.com');

INSERT INTO `my_adminuser` VALUES('7','test','904c0c9edb06b01d2c89df7384ccc38e','17805','1514278846','1395585523@qq.com');

INSERT INTO `my_adminuser` VALUES('8','admin','06cb6acd8cc5e413767d0a1fab175599','89109','1514462026','1395585523@qq.com');

