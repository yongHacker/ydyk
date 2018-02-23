<?php
return array(
    //'配置项'=>'配置值'
    'SHOW_PAGE_TRACE'=>true,
    'DEFAULT_TIMEZONE'      => 'PRC',        // 默认时区
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',     // 数据库类型
    'DB_HOST'               =>  'localhost', // 服务器地址
    'DB_NAME'               =>  'myshop',          // 数据库名
    'DB_USER'               =>  'root',      // 用户名
    'DB_PWD'                =>  '',          // 密码
    'DB_PREFIX'             =>  'my_',    // 数据库表前缀
    'DB_FIELDS_CACHE'       =>  true,        // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',      // 数据库编码默认采用utf8
    
    // 布局设置
    'TMPL_ENGINE_TYPE'      =>  'Smarty',     // 默认模板引擎 以下设置仅对使用Think模板引擎有效
);
?>