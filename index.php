<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

header('content-type:text/html;charset=UTF-8');
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

define('APP_DEBUG',True);

define('APP_PATH','./APP/');

//自定义目录常量
define('AppName','shop');
define('CSS_URL','/Public/css/');
define('Public_URL','/Public/');
define('JS_URL','/Public/js/');
define('IMAGES_URL','/Public/images/');


define('ADMIN_CSS_URL','/Public/admin/css/');
define('ADMIN_JS_URL','/Public/admin/js/');
define('ADMIN_IMAGES_URL','/Public/admin/images/');
define('WebROOT',dirname(__FILE__));

define('DB_BACKUP', WebROOT.'/Data/DB_BACKUP/');

define('upload',dirname(__FILE__).'/Public/upload/');

define('upload_url','/Public/upload/');

require './ThinkPHP/ThinkPHP.php';

?>