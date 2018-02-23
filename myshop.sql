# Host: localhost  (Version: 5.5.53)
# Date: 2018-01-10 20:59:13
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "my_ad"
#

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

#
# Data for table "my_ad"
#

INSERT INTO `my_ad` VALUES (4,'首页','images/20180103/20180103102718_22609.jpg','javascript:void(0);',1514946439,0),(5,'首页大图','images/20180103/20180103102739_71652.jpg','javascript:void(0);',1514946459,0),(6,'首页大图','images/20180103/20180103102755_19915.jpg','javascript:void(0);',1514946475,0),(7,'轮播广告','images/20180103/20180103102936_71688.jpg','javascript:void(0);',1514946576,1),(8,'轮播广告','images/20180103/20180103102958_87989.jpg','javascript:void(0);',1514946598,1),(9,'轮播广告','images/20180103/20180103103022_68548.jpg','javascript:void(0);',1514946622,1),(10,'sho','images/20180103/20180103102657_31659.png','javascript:void(0);',1515061013,0);

#
# Structure for table "my_adminuser"
#

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

#
# Data for table "my_adminuser"
#

INSERT INTO `my_adminuser` VALUES (2,'jiangzhi','7c079091f10cd68b01de8cec169c539c',74690,1513925964,'1395585523@qq.com'),(5,'jiang','ef2d200a735428a26ff61906bde14744',69087,1514276222,'1395585523@qq.com'),(7,'test','904c0c9edb06b01d2c89df7384ccc38e',17805,1514278846,'1395585523@qq.com'),(8,'admin','06cb6acd8cc5e413767d0a1fab175599',89109,1514462026,'1395585523@qq.com');

#
# Structure for table "my_auth_group"
#

DROP TABLE IF EXISTS `my_auth_group`;
CREATE TABLE `my_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(80) NOT NULL DEFAULT '',
  `intro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Data for table "my_auth_group"
#

INSERT INTO `my_auth_group` VALUES (2,'超级管理员',1,'2,3,4,5,6,7,8,9','拥有系统最高权限'),(3,'测试管理员',1,'2,4,5,6,7,8','最高权限');

#
# Structure for table "my_auth_group_access"
#

DROP TABLE IF EXISTS `my_auth_group_access`;
CREATE TABLE `my_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "my_auth_group_access"
#

INSERT INTO `my_auth_group_access` VALUES (2,2),(5,2),(7,3),(8,2);

#
# Structure for table "my_auth_rule"
#

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

#
# Data for table "my_auth_rule"
#

INSERT INTO `my_auth_rule` VALUES (2,'admin/update','修改管理员信息',1,1,'','修改所有管理员账号和密码'),(3,'test/test','测试',1,1,'','测试权限'),(4,'admin/addGoods','添加商品',1,1,'','添加商品所有信息'),(5,'admin/removeGoods','下架商品',1,1,'','下架商品'),(6,'admin/updateGoods','编辑商品信息',1,1,'','编辑商品的所有信息'),(7,'ad/add','添加广告',1,1,'','添加广告信息'),(8,'ad/update','编辑广告信息',1,1,'','编辑广告信息');

#
# Structure for table "my_classify"
#

DROP TABLE IF EXISTS `my_classify`;
CREATE TABLE `my_classify` (
  `cid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `cname1` varchar(30) NOT NULL COMMENT '中文名称',
  `cname2` varchar(50) NOT NULL COMMENT '英文名称',
  `sort` tinyint(2) NOT NULL DEFAULT '0' COMMENT '排序',
  `level` tinyint(2) NOT NULL DEFAULT '1' COMMENT '分类级别',
  `upid` bigint(20) DEFAULT NULL COMMENT '上级分类id',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '广告状态',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "my_classify"
#

INSERT INTO `my_classify` VALUES (1,'生日蛋糕','BIRTHDAY CAKE',0,1,0,1514513257,0),(2,'新品上市','',1,2,1,1514514136,0),(3,'应季明星','',1,2,1,1514950235,0),(4,'人气经典','',1,2,1,1514950316,0),(5,'大师作品','',1,2,1,1514950383,0),(6,'生日周边','SURROUNDING',1,1,0,1515121412,0),(7,' 派对物料','',1,2,6,1515121800,0),(8,'派对甜品','',1,2,6,1515121825,0),(9,'生日礼品','',1,2,6,1515121845,0),(10,'生日鲜花','',1,2,6,1515121870,0);

#
# Structure for table "my_file"
#

DROP TABLE IF EXISTS `my_file`;
CREATE TABLE `my_file` (
  `fid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `save_path` varchar(200) NOT NULL COMMENT '文件路径',
  `MD5file` varchar(50) NOT NULL COMMENT 'MD5散列值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `file_size` int(11) NOT NULL COMMENT '文件大小kb',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=utf8;

#
# Data for table "my_file"
#

INSERT INTO `my_file` VALUES (1,'images/20171228/20171228164427_53838.png','3668728c3d37a67a6c7984d906e62c51',1514450667,52),(2,'images/20171228/20171228173435_82487.jpg','1e5686558b5ecb4fcdce32dd535c2855',1514453675,10),(3,'images/20171228/20171228173908_48839.jpg','c5148a449928a2ef7f8d06ce5c17533b',1514453948,12),(4,'images/20171228/20171228173924_62871.jpg','31c65becdab5ddc878f7c3d43b65d94d',1514453964,11),(5,'images/20171229/20171229154708_88178.jpg','b2b6af47057f9ec989552ee9dd8d7fd9',1514533628,15),(6,'images/20180102/20180102144642_20085.jpg','5d273cce56c64958c881d1ba9165ba74',1514875602,16),(7,'images/20180102/20180102144805_31096.jpg','9d1f39f649a0be06761920bdf7a8d086',1514875685,17),(8,'images/20180102/20180102155656_37474.jpg','f7afef096dd162e89e11634327b55531',1514879816,170),(9,'images/20180102/20180102155756_30610.jpg','4ec0484f820c979174d0f1b3709007b8',1514879876,36),(10,'images/20180102/20180102155819_17934.jpg','135390cf86045f40f88b8af2fcb75f58',1514879899,241),(11,'images/20180102/20180102155829_52401.jpg','044a434ed48969ae1ddc51a707099d6b',1514879909,38),(12,'images/20180102/20180102155838_33507.jpg','e1e21d52ef7dbcde57b37c55f3131841',1514879918,185),(13,'images/20180102/20180102155848_53934.jpg','468c995704bf74816120d284fd13a2a4',1514879928,35),(14,'images/20180102/20180102155857_23373.jpg','4636dd8c4a4edccb31aa93d3bed17a2b',1514879937,185),(15,'images/20180102/20180102155905_65794.jpg','c1be49b76320d7f12f676b9adbaf52d9',1514879945,27),(16,'images/20180102/20180102155913_81397.jpg','962de248aaa125f0b90973929926f747',1514879953,118),(17,'images/20180102/20180102155922_59504.jpg','a10ecebcc305c442d972162acdb0b224',1514879962,26),(18,'images/20180102/20180102155930_73635.jpg','c2800bb2027bd5c9cd1ebec6aee8e416',1514879970,172),(19,'images/20180102/20180102155934_15026.jpg','d2930c4cf8e39351738d36229d84d28d',1514879974,228),(20,'images/20180103/20180103102657_31659.png','8e79efd9fcfbd2f185e8d761650c7569',1514946417,990),(21,'images/20180103/20180103102718_22609.jpg','c272c1fd23177b4ae59c049af9009e64',1514946439,819),(22,'images/20180103/20180103102739_71652.jpg','1459e14e28ad7c9e5bcd140d1da66860',1514946459,376),(23,'images/20180103/20180103102755_19915.jpg','9394123422fd02df523d44a72f224a83',1514946475,899),(24,'images/20180103/20180103102936_71688.jpg','b347bf17efda3aa4174d41f05c53fbf9',1514946576,225),(25,'images/20180103/20180103102958_87989.jpg','4e0740192402ecb4cba00c24f8dd8542',1514946598,404),(26,'images/20180103/20180103103022_68548.jpg','63e47de23adc8f17a045b348913b6543',1514946622,297),(27,'images/20180103/20180103161953_49037.jpg','08bdb4e32b0700b7d972f40408d7c058',1514967593,250),(28,'images/20180103/20180103162002_73176.jpg','2c4c6e5d85da6f62d62caae1ca046f3d',1514967602,204),(29,'images/20180103/20180103162021_76123.jpg','56345ead74ac228d439b62d430836f29',1514967621,33),(30,'images/20180103/20180103162028_24699.jpg','583540799fdaba4f126c20ecafbf12b8',1514967628,453),(31,'images/20180103/20180103162035_59924.jpg','3ad26e084fcf6b20ea887b795cc7a467',1514967635,20),(32,'images/20180103/20180103162043_50534.jpg','0b600f8211ea42a8a5d99eea005ae37b',1514967643,371),(33,'images/20180103/20180103162050_66181.jpg','e3e6cbfdd70856c6b6931b4bf5c7e5a6',1514967650,19),(34,'images/20180103/20180103162056_26578.jpg','f049bc9fcaf7add5859a1fed050b4749',1514967657,238),(35,'images/20180103/20180103164320_35996.jpg','3ea0e139627f556d1a425490848b1c85',1514969000,239),(36,'images/20180103/20180103164326_63607.jpg','1c0be0ed6f66563d82c654481470d0a0',1514969006,232),(37,'images/20180103/20180103164333_17467.jpg','bf1f190726a634fcd263798be6612071',1514969013,224),(38,'images/20180103/20180103164346_38070.jpg','834f9d32853f133d37e01ad74489f3f6',1514969026,235),(39,'images/20180103/20180103164354_26669.jpg','0923abe34dfd62d41cefc4d82fdde7f6',1514969034,441),(40,'images/20180103/20180103164400_87546.jpg','31b4ae68751bad84b6c2caa7130dcd18',1514969040,220),(41,'images/20180103/20180103164821_13010.jpg','648379deb3b434f6a18cbc7172890e4d',1514969301,153),(42,'images/20180103/20180103164827_90774.jpg','4e51665a98645319ac0b5e79aa826378',1514969307,218),(43,'images/20180103/20180103164833_38141.jpg','f3a833335ec1cdc5d82e7d56c095f998',1514969313,21),(44,'images/20180103/20180103164840_20390.jpg','0ca3b96cb35cf4113ee8655253271477',1514969320,106),(45,'images/20180103/20180103164847_30357.jpg','d73582c98e110f5ecdbe0c656fb5d21a',1514969327,26),(46,'images/20180103/20180103164853_74767.jpg','d4f8526a76627dbba7526876d6f63333',1514969333,115),(47,'images/20180103/20180103164900_53994.jpg','f72912cd03970ce4d70408d4243c2eb7',1514969340,19),(48,'images/20180103/20180103164906_66521.jpg','60076d11c091d1bad32233bd9e45d562',1514969346,155),(49,'images/20180103/20180103165222_67823.jpg','c221c97e2d81846ca900c8c82e97eb9b',1514969542,81),(50,'images/20180103/20180103165237_62168.jpg','4a531024ec49a98987b08f5113072fe5',1514969557,138),(51,'images/20180103/20180103165245_12469.jpg','2390757c3919e4966e0d5ba04e55ca75',1514969565,23),(52,'images/20180103/20180103165252_27578.jpg','4ce5d8269378bf0a3e2a6090e17eb401',1514969572,89),(53,'images/20180103/20180103165259_69922.jpg','e66980b90525cdbe699869ef6fd8f893',1514969579,33),(54,'images/20180103/20180103165306_71517.jpg','7c00a9ae9eb4cbf31da1ddd770793cd2',1514969586,78),(55,'images/20180103/20180103165313_69674.jpg','deddc2d0f4ec3cb27a1b0b0ba6be1833',1514969593,18),(56,'images/20180103/20180103165319_58636.jpg','5117527de3a30ce55d7a9a0d1cbde2fc',1514969599,84),(57,'images/20180103/20180103165328_18407.jpg','c141935be2f0543c8a36729601e88b65',1514969608,110),(58,'images/20180103/20180103165334_87019.jpg','d5395cceee960e1e85bb2219891a8905',1514969614,74),(59,'images/20180103/20180103165605_42676.jpg','6d5c5e9cbb88324b1e38939b9032bc51',1514969765,68),(60,'images/20180103/20180103165611_71693.jpg','a9684b517625e8415a2a10731e06a506',1514969771,103),(61,'images/20180103/20180103165618_88835.jpg','d19123eef06d427fd6ecf674ffa14395',1514969778,87),(62,'images/20180103/20180103165625_77093.jpg','eddd05056341eab1f8226a618cad6e0c',1514969785,84),(63,'images/20180103/20180103165635_50223.jpg','2e385f0941b52049f210322208de6e0f',1514969795,116),(64,'images/20180103/20180103165841_77486.jpg','7a123ebcf835881e021f8c09a6ee3278',1514969921,399),(65,'images/20180103/20180103165850_15690.jpg','c2dc96216ddc4ca291bcc5681e2a5767',1514969930,251),(66,'images/20180103/20180103165857_90466.jpg','baf0a51e58600264c31456a582fe8c53',1514969937,332),(67,'images/20180103/20180103165903_72111.jpg','6fe96e35970faccd3415207a632441b1',1514969943,346),(68,'images/20180103/20180103165910_10590.jpg','cc52c06e7c2c578c4737c9d7400033e7',1514969950,36),(69,'images/20180103/20180103165917_19678.jpg','b50745308bd0ef317da70f040dfee086',1514969958,269),(70,'images/20180103/20180103165924_58287.jpg','8f490ffb10fcdc82f25cf3b2683be4e2',1514969964,227),(71,'images/20180103/20180103170424_24326.jpg','614fbe64cd6717d3df914eb7a9a214f0',1514970264,217),(72,'images/20180103/20180103170438_30459.jpg','e8d0451774d47c76c2ba3655f40ed385',1514970278,264),(73,'images/20180103/20180103170445_45062.jpg','dea3e2543bd00e405f8505317c43050c',1514970285,251),(74,'images/20180103/20180103170452_21071.jpg','e7fe8070d72d981e6b860cc876140c1f',1514970292,220),(75,'images/20180103/20180103170459_25853.jpg','98626372002f65d6db55da1fd69635db',1514970299,71),(76,'images/20180103/20180103170506_90038.jpg','91f56bd071f4da7fbdd6b78759fdb7d0',1514970306,161),(77,'images/20180103/20180103170513_19783.jpg','71dd76c8c6f872254e2cbd667789581d',1514970313,225),(78,'images/20180103/20180103170521_83726.jpg','bcf35753caa65f012e854830e8dbf18e',1514970321,205),(79,'images/20180103/20180103170525_20876.jpg','e6bb0ddd486f60d0ea67b3e0ebb7229a',1514970325,166),(80,'images/20180103/20180103170818_35230.jpg','48f15f557c1e2539c76227b80ec76192',1514970498,496),(81,'images/20180103/20180103170825_68675.jpg','d7941ffaf4bda9ecfac1fa8dc3279a88',1514970505,111),(82,'images/20180103/20180103170839_56538.jpg','d94c390e7377e9c599ab0e4a7334fce1',1514970519,259),(83,'images/20180103/20180103170846_99057.jpg','090a9cd3a5d9e82776c652a63aee6033',1514970526,220),(84,'images/20180103/20180103170857_29813.jpg','8fd09d4ba8d0daad31cb04472f6123a9',1514970537,283),(85,'images/20180103/20180103170859_46427.jpg','593a3e2323400ecb9400c7078ff196d8',1514970539,161),(86,'images/20180103/20180103171059_14419.jpg','f8ce122ff8b6055c5bac066a70d6b3f6',1514970659,425),(87,'images/20180103/20180103171105_29198.jpg','7f417cd35746f0aa4cccad463e523da9',1514970665,114),(88,'images/20180103/20180103171155_24367.jpg','3e6dc07f1c009850757702e17d050b88',1514970715,285),(89,'images/20180103/20180103171202_47606.jpg','7c1852e55efe1289970e5585251baaf7',1514970722,139),(90,'images/20180103/20180103171209_53607.jpg','8101717588aa5fdf9bee5953f09d6791',1514970729,151),(91,'images/20180104/20180104181917_24057.jpg','f02e08fdcba60899f5d57eea73c36fae',1515061157,120),(92,'images/20180105/20180105111325_18517.jpg','ec3e1323d14472ab5b9c6d6cbb313982',1515122005,185),(93,'images/20180105/20180105111332_42744.jpg','f77898913695e75b7007e4d7100920be',1515122012,29),(94,'images/20180105/20180105111339_10271.jpg','83eeeb5a0dd001edb2bacda2e52e959e',1515122019,167),(95,'images/20180105/20180105111347_13076.jpg','26ef1817f9e50ff0ea68dab115a5fc00',1515122027,48),(96,'images/20180105/20180105111355_64209.jpg','d3eb02a39a0f374aec67e8154d95d89d',1515122035,388),(97,'images/20180105/20180105111402_33812.jpg','0d0420b639c70c0aa234e38b359bb95f',1515122042,59),(98,'images/20180105/20180105111406_54821.jpg','9e26ec8ef61ec89d4cf7bf60717d27db',1515122046,284),(99,'images/20180105/20180105111658_64994.jpg','05df0be3c4276882b617ed0c6ef055a6',1515122218,276),(100,'images/20180105/20180105111706_54747.jpg','9817dbd2a8d9aa4cc36bd2c10ff359c6',1515122226,44),(101,'images/20180105/20180105111713_55738.jpg','b48c142f595f191f36079056f8659af9',1515122233,389),(102,'images/20180105/20180105111720_72407.jpg','5699b07df9dad34f0e384802ea7ba7f7',1515122240,39),(103,'images/20180105/20180105111727_26048.jpg','38125f009f234680e3f49780ba4dbc79',1515122247,280),(104,'images/20180105/20180105111737_45200.jpg','7aa230ee0daba067cb157b410adfdfee',1515122257,378),(105,'images/20180105/20180105111740_78227.jpg','5bd969408424aef9dfa3a70309b8b30a',1515122260,128),(106,'images/20180105/20180105111904_54335.jpg','68450ceb8190ce04b2f8cd94d62fb6f5',1515122344,186),(107,'images/20180105/20180105111911_64269.jpg','c07cc4bd9eff2b4778b4b56aa7d00b0f',1515122351,17),(108,'images/20180105/20180105111918_76961.jpg','8397cb519a3c84102903b06764bcb389',1515122358,162),(109,'images/20180105/20180105111926_13353.jpg','72ed136cd3278ee7defaaa944bd8da1c',1515122366,14),(110,'images/20180105/20180105111932_53665.jpg','78d276569f9ca653afe14d6fa7a1e701',1515122372,300),(111,'images/20180105/20180105111941_19346.jpg','fe4adbe13d3ab445405a51945ea2839d',1515122381,16),(112,'images/20180105/20180105111943_45969.jpg','77d958e1129608e82c0f2b6f5260f5c4',1515122383,96);

#
# Structure for table "my_goods"
#

DROP TABLE IF EXISTS `my_goods`;
CREATE TABLE `my_goods` (
  `gid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `gname` varchar(30) NOT NULL COMMENT '名称',
  `taste` varchar(20) DEFAULT '0',
  `intro` varchar(150) NOT NULL COMMENT '介绍',
  `photo` varchar(300) NOT NULL COMMENT '图片',
  `infos` text NOT NULL COMMENT '详情',
  `wine` varchar(30) NOT NULL COMMENT '调味酒',
  `scene` varchar(50) NOT NULL COMMENT '场景',
  `fresh` varchar(50) NOT NULL COMMENT '保鲜条件',
  `material` varchar(100) NOT NULL COMMENT '材料',
  `normids` varchar(30) NOT NULL COMMENT '材料',
  `cid` bigint(20) NOT NULL COMMENT '分类id',
  `addtime` int(11) NOT NULL COMMENT '创建日期',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`gid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "my_goods"
#

INSERT INTO `my_goods` VALUES (1,'提拉米苏抹茶颂','抹茶可可双重风味蛋糕','你喜欢东方茶文化的清新，还是西方艺术的甜蜜？提拉米苏抹茶颂，双重满足你独爱美食的味蕾。 抹茶相思慕斯，保留1年仅15天新鲜茶味的宇治抹茶，微涩略苦，回甘随行； 提拉米苏，松软细腻的意大利马斯卡彭芝士，混合意式特浓咖啡，辅以意大利杏仁利口酒和法国可可粉， 诠释着古老誓言：带我走！','images/20180102/20180102155934_15026.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155656_37474.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155756_30610.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155819_17934.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155829_52401.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155838_33507.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155848_53934.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155857_23373.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155905_65794.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155913_81397.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155922_59504.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180102/20180102155930_73635.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;/div&gt;&lt;/div&gt;','含少量调味酒，3小时即挥发','生日、下午茶、聚餐、约会、派对','请放入冰箱冷藏(0℃-4℃)，为保最佳风味请于当天食用完。','白巧克力（法国）/总统牌稀奶油（法国）/宇治抹茶粉（日本）/红豆（日本）/马斯卡彭软芝士(意大利)/手指饼干（意大利）/杏仁利口酒（意大利）/可可粉（法国）/特浓咖啡（意大利）','1,2,3',1,1514879975,1),(2,'抹茶相思慕斯','抹茶口味蛋糕','壹点壹客人气回归之作，精选经过天然石磨研磨的1年仅15天产期的宇治抹茶粉，结合日本进口红豆的软甜，跃于舌尖之上，口感细腻绵长，茶香清新浓郁，入口先略苦涩，后觉甘甜，唇齿留香。','images/20180103/20180103162002_73176.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103161953_49037.jpg&quot; style=&quot;max-width: 100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162021_76123.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162028_24699.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162035_59924.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162043_50534.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162050_66181.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103162056_26578.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','无','生日、下午茶、聚餐、约会、派对','请放入冰箱冷藏(0℃-4℃)，为保最佳风味请于当天食用完。','白巧克力（法国）、总统牌稀奶油（法国）、宇治抹茶粉（日本）、红豆（日本）','1,2',1,1514882817,1),(3,'草莓公主','奶油草莓口味蛋糕','精选依然饱满通红的草莓，小心细切；鲜奶油的乳香，混入草莓果茸与草莓利口酒，只余果味清新，呈现自然淡粉，搭配海绵蛋糕，正好托起这口轻柔。','images/20180103/20180103164320_35996.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164320_35996.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164326_63607.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164333_17467.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164346_38070.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164354_26669.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164400_87546.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','含少量调味酒，3小时即挥发','生日 下午茶 结婚纪念日 情人约会 同学会 派对 宴会 产品说明会 座谈会',' 请放入冰箱冷藏(0℃-4℃)，为保最佳风味请于当天食用完。','新鲜草莓、总统牌稀奶油、草莓果泥、覆盆子果泥、草莓利口酒','1,2,3',1,1514969045,1),(4,'初生','芒果奶油口味','生日，人之初的纪念日 人，生而简单，生而纯粹 正如这款蛋糕 让原料回归最纯粹的口味，让色彩回归最纯粹的暖 期望这款简单的生日蛋糕，陪你回到最初纯粹的自己','images/20180103/20180103164821_13010.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164827_90774.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164833_38141.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164840_20390.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164847_30357.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164853_74767.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164900_53994.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103164906_66521.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','无','生日，下午茶','请放入冰箱冷藏(0℃-4℃)，为保最佳风味请于当天食用完。','新鲜芒果肉（越南），芒果果茸（法国），总统牌稀奶油（法国），装饰黑巧克力薄片（法国）','1,2,3',1,1514969350,1),(5,'Gelato双子星冰淇淋蛋糕','芒果椰子口味冰激凌蛋糕','Gelato来自意大利的“国粹”冰淇淋！炎炎夏日，当清凉的Gelato遇上浓香的蛋糕，入口即化的冰凉，沁人心脾的浓香，绵密醇厚在唇间跳跃，果香清甜在舌尖回荡。这个夏季，Gelato冰淇淋蛋糕将演绎一场精妙无比的冰爽之旅！','images/20180103/20180103165222_67823.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165222_67823.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165237_62168.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165245_12469.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165252_27578.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165259_69922.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165306_71517.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165313_69674.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165319_58636.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165328_18407.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165334_87019.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','生日 下午茶 结婚纪念日 情人约会 同学会 派对 领导生日 宴会','请放入冰箱冷冻保存(-15℃至-18℃)，为保最佳风味请于当天食用完。','总统牌稀奶油（法国）、芒果Gelato、椰子Gelato、海绵蛋糕坯','1,2,3',1,1514969618,1),(6,'亲亲小黄','水果、轻芝士混合口味','这是一只懂得爱与感恩的亲亲小黄，有着一个温暖的故事。每个小朋友在过生日的那一天，都会先亲一下她，然后再亲自己的妈妈，传递对妈妈的爱。鲜黄的芒果淋面，丰富的芒果粒与菠萝粒藏于其中，裹着营养价值更高的芝士，多重美味，勾勒出一个缤纷多彩的童年。','images/20180103/20180103165605_42676.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165611_71693.jpg&quot; style=&quot;max-width: 100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165618_88835.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165625_77093.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165635_50223.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;/div&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','无','宝贝生日 同学会 派对 宴会','请放入冰箱冷藏(0℃-4℃)，为保最佳风味请于当天食用完。','芒果淋面，芝士，芒果粒&amp;菠萝粒，蛋糕胚','1,2,3',1,1514969798,1),(7,'Gelato榴莲冰淇淋蛋糕','榴莲冰淇淋口味','号称水果之王的泰国金枕头榴莲 和意大利国粹GELATO冰淇淋的强强组合 演绎出的味觉盛宴 只有尝过的人才能真正体会','images/20180103/20180103165841_77486.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165841_77486.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165850_15690.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165857_90466.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165903_72111.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165910_10590.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165917_19678.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103165924_58287.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','生日 下午茶 结婚纪念日 情人约会 同学会 派对 领导生日 宴会','请放入冰箱冷冻保存(-15℃至-18℃)，为保最佳风味请于当天食用完。','白巧克力（法国）、意大利榴莲GELATO、榴莲芝士、蛋糕胚','1,2,3',1,1514969967,1),(8,'琉璃之心Red Glaze','榴莲、混合水果口味','法国MOF西点大师Jean-Jacques BORNE亲手献礼 将看似冲突的榴莲、栗子与草莓等食材融合出无与伦比的美好滋味 这是法国MOF西点师的深厚实力，更是一份名为「红」的隆重 蛋糕底在普通蛋糕底基础上加入了扁桃仁粉颗粒 细细品尝，口齿中有颗粒的质感和扁桃仁的果仁香气','images/20180103/20180103170525_20876.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170424_24326.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170438_30459.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170445_45062.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170452_21071.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170459_25853.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170506_90038.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170513_19783.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170521_83726.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','含少量调味酒，3小时即挥发','朋友生日 结婚纪念日 情人约会 同学会 派对 宴会 相亲 产品说明会 领导生日 座谈会','请放入冰箱冷藏（0℃－4℃），到货3小时内食用最佳，保质期为1天','总统牌稀奶油(法国)、草莓果茸（法国）、新鲜榴莲肉（泰国）、栗子泥（瑞士）、鸡蛋、白砂糖、黑醋栗果泥（法国）、扁桃仁粉（美国）、桑莓果果茸（法国）','1,2,3',1,1514970325,1),(9,'榴芒双拼DURIAN &amp; MANGO','榴莲芒果复合口味','你是“小清新”还是“重口味”？ 2011年，壹点壹客首创“榴芒双拼”，一客满足你两种想象。 清新芒果慕斯，最当季的鲜芒果粒，颗颗明黄灿烂过南国阳光； 霸道榴莲忘返，甜软果肉融合淡奶油、白巧，柔情蜜意让你欲罢不能。','images/20180103/20180103170859_46427.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170818_35230.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170825_68675.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170459_25853.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170839_56538.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170846_99057.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170857_29813.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','平日','请放入冰箱冷藏（0℃－4℃），到货3小时内食用最佳，保质期为1天','总统牌稀奶油（法国）、白巧克力（法国）、芒果果茸（法国）、榴莲（泰国）、芒果（台湾、海南、澳洲）','1,2,3',1,1514970539,1),(10,'芒果慕斯MANGO','芒果口味','芒果慕斯与偶像明星郑凯同台共演，诠释青春的骚动与肆意。那一抹明黄身影，是故事里最贴切的甜意。谁是炎炎盛夏里最受爱戴的水果明星，当非芒果莫属！妍媚透亮奔放的香，丰腴得饱满欲滴的甜，新鲜清爽的酸、绵细软糯的口感，让人仿佛置身于阳光、沙滩、椰树、芒果飘香的热带风情里。','images/20180103/20180103171209_53607.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103171059_14419.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103171105_29198.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103170459_25853.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103171155_24367.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180103/20180103171202_47606.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;','无','儿童生日会 下午茶 聚会 欢乐派对','请放入冰箱冷藏（0℃－4℃），到货3小时内食用最佳，保质期为1天','芒果果茸(法国)、总统牌稀奶油(法国)、新鲜芒果（澳洲、菲律宾、台湾）、巧克力（法国）','1,2,3',1,1514970729,1),(11,'儿童餐位小包（一位）','无','专供生日主角、给孩子具有仪式感的特别礼遇。 一套氛围浓郁、富有设计感的生日专属餐具， 以最亲切简单的方式，让主人公在所有人中脱颖而出， 让这份惊喜伴随童年的金色时光。 每一个生日，都值得被珍视！','images/20180105/20180105111406_54821.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111325_18517.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111332_42744.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111339_10271.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111347_13076.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111355_64209.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111402_33812.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','无','无','无','5',6,1515122046,1),(12,'生日场景大礼包','无','气球、金粉吊旗、亮片桌旗、亮闪闪的LED烛灯…… 营造出高级、欢乐的派对氛围； 每位小嘉宾都有自己的专属餐具， 被尊重的感觉，让每一位小嘉宾都感受到派对的礼仪与礼遇。','images/20180105/20180105111740_78227.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111658_64994.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111706_54747.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111713_55738.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111720_72407.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111727_26048.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111737_45200.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','无','无','无','6',6,1515122260,1),(13,'LED数字蜡烛','无','蜡烛赋予生日充满仪式感的神圣氛围，是生日现场装饰品的不二之选 壹点壹客用创新型数字LED蜡烛，组合精致的可燃蜡烛。让温暖的烛光与变幻的色彩相互辉映，给生日更加缤纷的色彩','images/20180105/20180105111943_45969.jpg','&lt;div id=&quot;info2&quot;&gt;&lt;/div&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111904_54335.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111911_64269.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111918_76961.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111926_13353.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111932_53665.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Public/upload/images/20180105/20180105111941_19346.jpg&quot; style=&quot;max-width:100%;&quot;&gt;&lt;br&gt;&lt;/p&gt;','无','无','无','无','4',6,1515122383,1);

#
# Structure for table "my_ip"
#

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "my_ip"
#

INSERT INTO `my_ip` VALUES (2,0,'123.125.114.144','',1513669307,0,'中国-北京-北京'),(3,0,'119.29.79.62','',1513673698,0,'中国-广东-广州'),(4,2,'127.0.0.1','41i9probnil6l4o9lmji97far7',1514853315,1,NULL),(5,5,'127.0.0.1','vov9v08isnne4qc4qbvisduu94',1515458334,1,NULL),(6,7,'127.0.0.1','342r52e02btrohtgl325r6e306',1515584343,1,NULL);

#
# Structure for table "my_norms"
#

DROP TABLE IF EXISTS `my_norms`;
CREATE TABLE `my_norms` (
  `normid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `norname` varchar(30) NOT NULL COMMENT '名称',
  `price` decimal(5,2) NOT NULL DEFAULT '0.00' COMMENT '价格',
  `photo` varchar(50) NOT NULL COMMENT '图片',
  `weight1` varchar(30) NOT NULL DEFAULT '0' COMMENT '规格重量',
  `weight2` varchar(30) NOT NULL DEFAULT '0' COMMENT '实际重量',
  `enclosure` varchar(30) NOT NULL DEFAULT '0' COMMENT '附件',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '广告状态',
  PRIMARY KEY (`normid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

#
# Data for table "my_norms"
#

INSERT INTO `my_norms` VALUES (1,'3~5人份',100.00,'images/20171229/20171229154708_88178.jpg','英制规格1磅','454g（实重1磅）','含5套餐具1盒蜡烛',1514533628,0),(2,'6~10人份',150.00,'images/20180102/20180102144642_20085.jpg','英制规格2磅',' 908g（实重2磅）','含10套餐具1盒蜡烛',1514875602,0),(3,'11~15人份',200.00,'images/20180102/20180102144805_31096.jpg','英制规格3磅','1362g（实重3磅）','含15套餐具1盒蜡烛',1514875685,0),(4,'LED数字蜡烛',5.00,'images/20180105/20180105111904_54335.jpg','无','无','无',1515374589,0),(5,'儿童餐位小包',50.00,'images/20180105/20180105111402_33812.jpg','无','无','无',1515374765,0),(6,'生日场景大礼包',100.00,'images/20180105/20180105111658_64994.jpg','无','无','无',1515374849,0);

#
# Structure for table "my_order"
#

DROP TABLE IF EXISTS `my_order`;
CREATE TABLE `my_order` (
  `orid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `ornum` bigint(20) NOT NULL COMMENT '订单编号',
  `uid` bigint(20) NOT NULL COMMENT '用户id',
  `infoid` bigint(20) NOT NULL COMMENT '用户信息id',
  `amount` decimal(8,2) NOT NULL COMMENT '订单金额',
  `info` text COMMENT '订单留言',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`orid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

#
# Data for table "my_order"
#

INSERT INTO `my_order` VALUES (1,1515422091,2,4,100.00,'123',1515422091,1),(2,1515422388,2,4,100.00,'',1515422388,0),(3,1515422456,2,4,200.00,'',1515422456,0),(4,1515480183,4,0,200.00,'',1515480183,0),(8,1515480762,5,8,100.00,'',1515480762,0),(11,1515480967,5,10,100.00,'',1515480967,0),(13,1515481132,5,8,100.00,'',1515481132,0),(15,1515489237,4,5,300.00,'',1515489237,0),(16,1515502570,4,12,400.00,'',1515502570,0),(27,1515566258,12,14,100.00,'',1515566258,1),(28,1515566959,12,14,100.00,'',1515566959,1),(29,1515567993,12,14,100.00,'',1515567993,1),(36,1515588097,13,17,400.00,'',1515588097,0),(37,1515588628,13,17,400.00,'',1515588628,1);

#
# Structure for table "my_orderinfo"
#

DROP TABLE IF EXISTS `my_orderinfo`;
CREATE TABLE `my_orderinfo` (
  `oid` bigint(20) NOT NULL AUTO_INCREMENT,
  `gid` bigint(20) NOT NULL COMMENT '商品id',
  `orid` bigint(20) NOT NULL COMMENT '订单id',
  `num` int(11) NOT NULL COMMENT '数量',
  `normid` varchar(20) NOT NULL COMMENT '规格id',
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

#
# Data for table "my_orderinfo"
#

INSERT INTO `my_orderinfo` VALUES (1,1,1,1,'1'),(3,1,2,1,'1'),(5,3,3,1,'1'),(6,6,3,1,'1'),(7,4,4,1,'1'),(8,5,4,1,'1'),(9,2,8,1,'1'),(10,3,11,1,'1'),(11,2,13,1,'1'),(12,5,15,1,'1'),(13,6,15,1,'1'),(14,3,15,1,'1'),(15,1,16,1,'1'),(16,2,16,1,'1'),(17,3,16,1,'1'),(18,4,16,1,'1'),(19,2,17,1,'1'),(20,1,18,1,'1'),(21,3,19,1,'1'),(22,4,20,1,'1'),(23,5,22,1,'1'),(24,1,23,1,'1'),(25,1,24,1,'1'),(26,1,25,1,'1'),(27,1,26,1,'1'),(28,2,27,1,'1'),(29,3,28,1,'1'),(30,4,29,1,'1'),(31,6,30,2,'1'),(32,3,30,1,'1'),(33,1,31,2,'1'),(34,1,32,1,'1'),(35,3,33,2,'1'),(36,2,33,3,'1'),(37,5,34,1,'1'),(38,2,35,3,'1'),(39,3,35,1,'1'),(40,1,35,2,'1'),(41,2,36,4,'1'),(42,2,37,4,'1');

#
# Structure for table "my_shop"
#

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

#
# Data for table "my_shop"
#

INSERT INTO `my_shop` VALUES (1,'1','1',1,1.00,1,1,'1',1,'1','1','1','1','1',1);

#
# Structure for table "my_shop_cate"
#

DROP TABLE IF EXISTS `my_shop_cate`;
CREATE TABLE `my_shop_cate` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `cname` varchar(55) NOT NULL DEFAULT 'null' COMMENT '类别名称',
  `cpicture` varchar(255) DEFAULT '' COMMENT '类别封面图',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '添加时间',
  `sort` smallint(5) unsigned DEFAULT NULL,
  `position` smallint(5) unsigned DEFAULT '0',
  `state` tinyint(3) unsigned DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

#
# Data for table "my_shop_cate"
#

INSERT INTO `my_shop_cate` VALUES (2,'233xxxbbaa','',1515032854,65535,0,1),(4,'1111','',1514966703,2,0,0),(5,'222','',1514966855,2,0,0),(6,'222','',1514967220,2,0,0),(7,'111121','',1514967345,1,0,0),(8,'A','',1514967377,4,0,0),(9,'99','',1514967422,5,0,0),(10,'1111','',1514967489,5,0,0),(11,'777','',1515030286,777,0,0);

#
# Structure for table "my_shop_spec"
#

DROP TABLE IF EXISTS `my_shop_spec`;
CREATE TABLE `my_shop_spec` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `specname` varchar(30) NOT NULL DEFAULT '' COMMENT '规格名称',
  `price` decimal(7,2) unsigned NOT NULL DEFAULT '0.00' COMMENT '产品价格',
  `specphoto` varchar(255) NOT NULL DEFAULT '' COMMENT '规格图片',
  `weight` varchar(30) NOT NULL DEFAULT '0' COMMENT '规格重量',
  `trueweight` varchar(30) NOT NULL DEFAULT '0' COMMENT '实际重量',
  `present` varchar(30) NOT NULL DEFAULT '无' COMMENT '赠品',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='商品规格表';

#
# Data for table "my_shop_spec"
#

INSERT INTO `my_shop_spec` VALUES (1,'s1',111.00,'s1','111','111','s1');

#
# Structure for table "my_user"
#

DROP TABLE IF EXISTS `my_user`;
CREATE TABLE `my_user` (
  `uid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `uname` varchar(30) NOT NULL DEFAULT '' COMMENT '用户名',
  `pwd` varchar(50) NOT NULL DEFAULT '' COMMENT 'MD5密码',
  `salt` int(11) NOT NULL DEFAULT '0' COMMENT 'MD5盐值',
  `nickname` varchar(20) DEFAULT NULL COMMENT '昵称',
  `sex` varchar(10) DEFAULT '保密' COMMENT '性别',
  `phone` varchar(15) NOT NULL COMMENT '手机',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `birthday` int(11) DEFAULT '0' COMMENT '生日',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '状态',
  `wechat` varchar(25) DEFAULT NULL COMMENT '微信号',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "my_user"
#

INSERT INTO `my_user` VALUES (2,'136','',0,'张三','female','13602341066','123456@gmail.com',1516118400,1515152841,0,'69999'),(4,'test','198761f80bec622405cadde15fa62500',33244,'张三3','female','13602341066','123456@gmail.com',1516118400,1515154972,1,'69999'),(5,'123','dd4c893f937c941d59fef936046c049f',61785,'张三','female','13602341066','123456@gmail.com',1516118400,1515155067,1,'69999'),(8,'193','c60996f7a5258877f73a9a5484b93ac6',78013,'张三','female','13602341066','123456@gmail.com',1516118400,1515155067,1,'69999'),(9,'911','ec6cddf6d0bb135e24ee809e3ea6059f',78130,'张三','female','13602341066','123456@gmail.com',1516118400,1515396299,1,'69999'),(10,'13113172702','776ce7b8f08349ae7dfe4ca0ebc8c92f',27813,NULL,'保密','13113172702','',0,1515553235,1,NULL),(11,'130268','237fbcef809ae379382cc4c0f8278c9d',73370,NULL,'保密','130268','',0,1515553627,0,NULL),(12,'130267','8416248bf80bf10523f7975486545c9d',34342,'晴朗的下雨天','male','15999','754@qq.com',1515686400,1515553965,1,'噢520'),(13,'13559775149','95885022e4a2e60cf05f55e08a1985f6',11945,NULL,'保密','13559775149','',0,1515569165,0,NULL);

#
# Structure for table "my_userinfo"
#

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Data for table "my_userinfo"
#

INSERT INTO `my_userinfo` VALUES (4,2,'jiang','13559772556','广东省深圳市罗湖区','大学城',0),(5,4,'张三','1362548947','上海市上海市郊县','上海市上海市郊县振华1路',0),(6,4,'张三','110','上海市上海市郊县','1113',0),(7,4,'张三','110','上海市上海市郊县','111',0),(11,4,'小明','13602341066','山西省大同市矿区','天堂1号',0),(12,4,'伊丽莎白·狗剩','520','黑龙江省哈尔滨市道里区','雪乡',1),(13,8,'皮特·朱特','13131372702','','佛罗里达',0),(14,12,'小红','1598741256','广东省广州市荔湾区','北京路',1),(15,12,'马面','444444','湖南省长沙市芙蓉区','地狱街',0),(16,12,'牛头','44444445555','浙江省杭州市上城区','地狱二路',0),(17,13,'deng','13113172702','广东省东莞市','东莞理工学院松山湖校区',1),(18,13,'小海尔','123456789','河北省石家庄市长安区','天安大街',0),(19,13,'程亚军','13113172702','天津市天津市市辖区和平区','大唐官府',0),(20,13,'dengx','13113172702','内蒙古自治区呼和浩特市新城区','普陀',0),(21,13,'deng','13113172702','黑龙江省哈尔滨市道里区','xxxx',0),(22,13,'dex','13113172702','黑龙江省哈尔滨市道外区','xxx',0);
