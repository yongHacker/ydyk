<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:45
         compiled from "./APP/Admin/View\admin\admin.html" */ ?>
<?php /*%%SmartyHeaderCode:141705a799e8d63e080-28907127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '748d71ca5ccd8348a1e3ffffa643d882fde617ab' => 
    array (
      0 => './APP/Admin/View\\admin\\admin.html',
      1 => 1514982936,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '141705a799e8d63e080-28907127',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e8d78245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e8d78245')) {function content_5a799e8d78245($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理后台</title>
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
common.css" />
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
admin.css" />
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
admin.js" ></script>
	</head>
<body>
	<!--顶部-->
	<div class="admin_top">
		<nav class="navbar navbar-default" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="javascript:void(0)">后台管理系统</a>
			</div>
			<!--navbar-header end-->
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav" id="topBar">
					<li onclick="changeMainMenu('index',0)">
						<a href="javascript:void(0)">预览</a>
					</li>
					<li onclick="changeMainMenu('system',1)">
						<a href="javascript:void(0)">系统</a>
					</li>
					<li onclick="changeMainMenu('shop',2)">
						<a href="javascript:void(0)">商城</a>
					</li>
					
				</ul>
				
				<div class="navbar-right">
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php" target="_blank">
								<i class="glyphicon glyphicon-home"></i>
								网站首页
							</a>
						</li>
						<li>
							<a href="index.php?m=admin&a=exitAdmin">
								<i class="glyphicon glyphicon-off"></i>
								退出系统
							</a>
						</li>
					</ul>
				</div>
				<!--navbar-right end-->
			</div>
			<!--navbar-collapse end-->
		</nav>
		<table border="1"></table>
	</div>
	<!--顶部结束-->
	<!--内容区-->
	<div class="admin_container">
		<!--左边菜单-->
		<div class="admin_left_menu">
			<div class="nav-tabs nav-tabs1" id="mainMenu">
				
			</div>
			<div class="nav-tabs nav-tabs2" id="miniMenu">
				
			</div>
		</div>
		<!--左边菜单结束-->
		<!--iframe-->
		<div class="admin_contain">
			<iframe id="workspace" width="100%" height="95%"
				frameborder="0" scrolling="yes"
				name="workspace"
				src="">
			</iframe>
		</div>
		<!--iframe end-->
	</div>
	<!--内容区结束-->
</body>
</html>
<?php }} ?>