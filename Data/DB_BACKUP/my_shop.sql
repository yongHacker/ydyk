-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2018-01-12 10:16:31

-- MySQL版本: 

-- PHP 版本: 5.6.27



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



--

-- 表的结构my_shop

--

DROP TABLE IF EXISTS `my_shop`;

CREATE TABLE `my_shop` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '商品名称',
  `product` varchar(255) NOT NULL DEFAULT '' COMMENT '产品描述',
  `cate_id` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '分类',
  `price` float(11,2) NOT NULL DEFAULT '0.00' COMMENT '一口价格',
  `user_id` int(11) NOT NULL DEFAULT '0' COMMENT '用户id',
  `phone` int(11) DEFAULT NULL COMMENT '手机号',
  `weixin` varchar(50) DEFAULT NULL COMMENT '微信号',
  `qq` int(11) DEFAULT NULL COMMENT 'qq号',
  `desc` varchar(255) DEFAULT NULL COMMENT '商品描述',
  `desc_img` varchar(255) DEFAULT NULL COMMENT '商品详情图',
  `picture` varchar(255) DEFAULT NULL COMMENT '商品展示图',
  `addtime` varchar(255) DEFAULT '' COMMENT '添加时间',
  `endtime` varchar(255) DEFAULT NULL COMMENT '结束时间',
  `status` int(11) DEFAULT NULL COMMENT '商品状态',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='商品表';



--

-- 转存表中的数据 my_shop

--



INSERT INTO `my_shop` VALUES('1','1','1','1','1.00','1','1','1','1','1','1','1','1','1','1');

