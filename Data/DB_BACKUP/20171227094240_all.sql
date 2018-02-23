-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2017-12-27 09:42:39

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

;



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

;



--

-- 转存表中的数据 my_auth_group

--



INSERT INTO `my_auth_group` VALUES('2','超级管理员','1','2,3,4,5,6,7,8,9','拥有系统最高权限');

INSERT INTO `my_auth_group` VALUES('3','测试管理员','1','2,4,5,6,7,8','最高权限');

--

-- 表的结构my_auth_group_access

--

DROP TABLE IF EXISTS `my_auth_group_access`;

;



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

;



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

;



--

-- 转存表中的数据 my_file

--



--

-- 表的结构my_ip

--

DROP TABLE IF EXISTS `my_ip`;

;



--

-- 转存表中的数据 my_ip

--



INSERT INTO `my_ip` VALUES('2','0','123.125.114.144','','1513669307','0','中国-北京-北京');

INSERT INTO `my_ip` VALUES('3','0','119.29.79.62','','1513673698','0','中国-广东-广州');

INSERT INTO `my_ip` VALUES('4','2','127.0.0.1','4ntvhckelvthne13omi87efs50','1514334553','1','');

