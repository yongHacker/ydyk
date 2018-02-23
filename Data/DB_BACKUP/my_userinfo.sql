-- MySQL database dump

-- Created, Power By JAING. 

--

-- 主机: 

-- 生成日期: 2018-01-11 20:24:14

-- MySQL版本: 

-- PHP 版本: 5.6.27



--

-- 数据库: `myshop`

--

-- -------------------------------------------------------



--

-- 表的结构my_userinfo

--

DROP TABLE IF EXISTS `my_userinfo`;

CREATE TABLE `my_userinfo` (
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



--

-- 转存表中的数据 my_userinfo

--



INSERT INTO `my_userinfo` VALUES('4','2','jiang','13559772556','广东省深圳市罗湖区','大学城','0');

INSERT INTO `my_userinfo` VALUES('5','4','张三','1362548947','上海市上海市郊县','上海市上海市郊县振华1路','0');

INSERT INTO `my_userinfo` VALUES('6','4','张三','110','上海市上海市郊县','1113','0');

INSERT INTO `my_userinfo` VALUES('7','4','张三','110','上海市上海市郊县','111','0');

INSERT INTO `my_userinfo` VALUES('11','4','小明','13602341066','山西省大同市矿区','天堂1号','0');

INSERT INTO `my_userinfo` VALUES('12','4','伊丽莎白·狗剩','520','黑龙江省哈尔滨市道里区','雪乡','1');

INSERT INTO `my_userinfo` VALUES('13','8','皮特·朱特','13131372702','','佛罗里达','0');

INSERT INTO `my_userinfo` VALUES('14','12','小红','1598741256','广东省广州市荔湾区','北京路','1');

INSERT INTO `my_userinfo` VALUES('15','12','马面','444444','湖南省长沙市芙蓉区','地狱街','0');

INSERT INTO `my_userinfo` VALUES('16','12','牛头','44444445555','浙江省杭州市上城区','地狱二路','0');

INSERT INTO `my_userinfo` VALUES('17','13','deng','13113172702','广东省东莞市','东莞理工学院松山湖校区','1');

INSERT INTO `my_userinfo` VALUES('18','13','小海尔','123456789','河北省石家庄市长安区','天安大街','0');

INSERT INTO `my_userinfo` VALUES('19','13','程亚军','13113172702','天津市天津市市辖区和平区','大唐官府','0');

INSERT INTO `my_userinfo` VALUES('20','13','dengx','13113172702','内蒙古自治区呼和浩特市新城区','普陀','0');

INSERT INTO `my_userinfo` VALUES('21','13','deng','13113172702','黑龙江省哈尔滨市道里区','xxxx','0');

INSERT INTO `my_userinfo` VALUES('22','13','dex','13113172702','黑龙江省哈尔滨市道外区','xxx','0');

INSERT INTO `my_userinfo` VALUES('23','14','fdsd','134366955','北京市北京市市辖区东城区','dfdsf','0');

INSERT INTO `my_userinfo` VALUES('24','14','fdsd','134366955','内蒙古自治区呼和浩特市新城区','dfdsfss','0');

INSERT INTO `my_userinfo` VALUES('25','10','邓sir','120','广东省东莞市','松山湖','0');

INSERT INTO `my_userinfo` VALUES('26','14','fdsd','134366955','广东省广州市荔湾区','dfdsf','0');

INSERT INTO `my_userinfo` VALUES('27','14','111','134366955','北京市北京市市辖区东城区','111','0');

