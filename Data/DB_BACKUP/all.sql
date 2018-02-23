-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2017-12-27 16:13:04

-- MySQL版本: 

-- PHP 版本: 5.4.45



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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_adminuser

--



INSERT INTO `my_adminuser` VALUES('2','jiangzhi','941fea370ae34673cc78aba2db932a05','84165','1513925964','1395585523@qq.com');

INSERT INTO `my_adminuser` VALUES('5','jiang','ef2d200a735428a26ff61906bde14744','69087','1514276222','1395585523@qq.com');

INSERT INTO `my_adminuser` VALUES('7','test','904c0c9edb06b01d2c89df7384ccc38e','17805','1514278846','1395585523@qq.com');

--

-- 表的结构my_auth_group

--

DROP TABLE IF EXISTS `my_auth_group`;

CREATE TABLE `my_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(80) NOT NULL DEFAULT '',
  `intro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_auth_group

--



INSERT INTO `my_auth_group` VALUES('2','超级管理员','1','2,3,4,5,6,7,8,9','拥有系统最高权限');

INSERT INTO `my_auth_group` VALUES('3','测试管理员','1','2,4,5,6,7,8','最高权限');

--

-- 表的结构my_auth_group_access

--

DROP TABLE IF EXISTS `my_auth_group_access`;

CREATE TABLE `my_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_auth_group_access

--



INSERT INTO `my_auth_group_access` VALUES('2','2');

INSERT INTO `my_auth_group_access` VALUES('5','2');

INSERT INTO `my_auth_group_access` VALUES('7','3');

--

-- 表的结构my_auth_rule

--

DROP TABLE IF EXISTS `my_auth_rule`;

CREATE TABLE `my_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL DEFAULT '',
  `title` varchar(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  `intro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_auth_rule

--



INSERT INTO `my_auth_rule` VALUES('2','admin/update','修改管理员信息','1','1','','修改所有管理员账号和密码');

INSERT INTO `my_auth_rule` VALUES('3','test/test','测试','1','1','','测试权限');

INSERT INTO `my_auth_rule` VALUES('4','admin/addGoods','添加商品','1','1','','添加商品所有信息');

INSERT INTO `my_auth_rule` VALUES('5','admin/removeGoods','下架商品','1','1','','下架商品');

INSERT INTO `my_auth_rule` VALUES('6','admin/updateGoods','编辑商品信息','1','1','','编辑商品的所有信息');

INSERT INTO `my_auth_rule` VALUES('7','ad/add','添加广告','1','1','','添加广告信息');

INSERT INTO `my_auth_rule` VALUES('8','ad/update','编辑广告信息','1','1','','编辑广告信息');

--

-- 表的结构my_file

--

DROP TABLE IF EXISTS `my_file`;

CREATE TABLE `my_file` (
  `fid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `save_path` varchar(200) NOT NULL COMMENT '文件路径',
  `MD5file` varchar(50) NOT NULL COMMENT 'MD5散列值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `file_size` int(11) NOT NULL COMMENT '文件大小kb',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_file

--



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

