<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:27:00
         compiled from "./APP/Admin/View\admin\tips.html" */ ?>
<?php /*%%SmartyHeaderCode:282645a799f145cf908-34741599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ada1f17b27049fd1cfdcd92380cd60903442fc' => 
    array (
      0 => './APP/Admin/View\\admin\\tips.html',
      1 => 1513599868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282645a799f145cf908-34741599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'contant' => 0,
    'url' => 0,
    'time' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f146a283',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f146a283')) {function content_5a799f146a283($_smarty_tpl) {?><!doctype html>
<html lang="zh-CN">
<head>
<title>系统信息</title>
<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" type="text/css"/>
</head>
<body style="min-width:500px;">
<div class="container" style="margin-top:50px; max-width:500px;">
	<div class="panel panel-default">
	   <div class="panel-heading">
	      <h4> <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </h4> 
	   </div>
	   <div class="panel-body">
	      <span><?php echo $_smarty_tpl->tpl_vars['contant']->value;?>
 </span><br/>  
	   </div>
	   <div class="panel-footer">
	      <span>页面自动 <a id="href" href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">跳转</a> 等待时间： <b id="wait"><?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</b></span> 
	   </div>
	</div>
</div>

<script type="text/javascript">
(function(){
var wait = document.getElementById('wait'),href = document.getElementById('href').href;
var interval = setInterval(function(){
	var time = --wait.innerHTML;
	if(time <= 0) {
		location.href = href;
		clearInterval(interval);
	};
}, 1000);
})();
</script>

</body>
</html><?php }} ?>