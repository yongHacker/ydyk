-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2018-01-11 20:24:47

-- MySQL版本: 

-- PHP 版本: 5.6.27



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



--

-- 表的结构my_ad

--

DROP TABLE IF EXISTS `my_ad`;

CREATE TABLE `my_ad` (
  `aid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `adname` varchar(20) NOT NULL COMMENT '广告名称',
  `photo` varchar(100) NOT NULL COMMENT '图片路径',
  `url` varchar(100) NOT NULL COMMENT '链接',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `position` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;



--

-- 转存表中的数据 my_ad

--



INSERT INTO `my_ad` VALUES('4','首页','images/20180103/20180103102718_22609.jpg','javascript:void(0);','1514946439','0');

INSERT INTO `my_ad` VALUES('5','首页大图','images/20180103/20180103102739_71652.jpg','javascript:void(0);','1514946459','0');

INSERT INTO `my_ad` VALUES('6','首页大图','images/20180103/20180103102755_19915.jpg','javascript:void(0);','1514946475','0');

INSERT INTO `my_ad` VALUES('7','轮播广告','images/20180103/20180103102936_71688.jpg','javascript:void(0);','1514946576','1');

INSERT INTO `my_ad` VALUES('8','轮播广告','images/20180103/20180103102958_87989.jpg','javascript:void(0);','1514946598','1');

INSERT INTO `my_ad` VALUES('9','轮播广告','images/20180103/20180103103022_68548.jpg','javascript:void(0);','1514946622','1');

INSERT INTO `my_ad` VALUES('10','sho','images/20180103/20180103102657_31659.png','javascript:void(0);','1515061013','0');

