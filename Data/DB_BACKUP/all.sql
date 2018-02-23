-- MySQL database dump


































  `uid` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户表：后台管理员',
  `uname` varchar(20) NOT NULL DEFAULT '' COMMENT '昵称',
  `pwd` varchar(50) NOT NULL COMMENT 'MD5密码',
  `salt` int(11) NOT NULL DEFAULT '1' COMMENT 'MD5盐值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `email` varchar(50) NOT NULL DEFAULT '' COMMENT '电子邮箱',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;


























  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(20) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` varchar(80) NOT NULL DEFAULT '',
  `intro` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
























  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


























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


































  `fid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT ' ID',
  `save_path` varchar(200) NOT NULL COMMENT '文件路径',
  `MD5file` varchar(50) NOT NULL COMMENT 'MD5散列值',
  `addtime` int(11) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `file_size` int(11) NOT NULL COMMENT '文件大小kb',
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




















  `ipid` bigint(20) NOT NULL AUTO_INCREMENT COMMENT 'ip表id',
  `uid` bigint(20) DEFAULT NULL COMMENT '昵称',
  `ip` varchar(15) NOT NULL COMMENT 'ip地址',
  `session_id` varchar(50) NOT NULL DEFAULT '',
  `lastTime` int(11) NOT NULL COMMENT '时间',
  `state` tinyint(2) NOT NULL DEFAULT '0' COMMENT '标记',
  `address` varchar(50) DEFAULT '未知',
  PRIMARY KEY (`ipid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

















