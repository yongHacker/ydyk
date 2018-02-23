-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2018-01-11 20:25:12

-- MySQL版本: 

-- PHP 版本: 5.6.27



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_auth_group

--



INSERT INTO `my_auth_group` VALUES('2','超级管理员','1','2,3,4,5,6,7,8,9','拥有系统最高权限');

INSERT INTO `my_auth_group` VALUES('3','测试管理员','1','2,4,5,6,7,8','最高权限');

INSERT INTO `my_auth_group` VALUES('4','测试1','1','4,7','客家话');

