-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2017-12-27 10:50:29

-- MySQL版本: 

-- PHP 版本: 5.4.45



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



--

-- 表的结构my_ip

--

DROP TABLE IF EXISTS `my_ip`;

CREATE TABLE `my_ip` (
  `ipid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ip表id',
  `uid` bigint(20) DEFAULT NULL COMMENT '昵称',
  `ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `session_id` varchar(50) NOT NULL DEFAULT '',
  `lastTime` int(11) NOT NULL COMMENT '时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '标记',
  `address` varchar(50) DEFAULT '未知',
  PRIMARY KEY (`ipid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_ip

--



INSERT INTO `my_ip` VALUES('2','0','123.125.114.144','','1513669307','0','中国-北京-北京');

INSERT INTO `my_ip` VALUES('3','0','119.29.79.62','','1513673698','0','中国-广东-广州');

INSERT INTO `my_ip` VALUES('4','2','127.0.0.1','4ntvhckelvthne13omi87efs50','1514334553','1','');

