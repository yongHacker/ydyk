<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:28:09
         compiled from "./APP/Home/View\home\shopcar3.html" */ ?>
<?php /*%%SmartyHeaderCode:112825a799f596f06f4-18497961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80e3be5c86186ca7c7dd5542dc44ce4507bbfaf4' => 
    array (
      0 => './APP/Home/View\\home\\shopcar3.html',
      1 => 1515576926,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112825a799f596f06f4-18497961',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f598a20d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f598a20d')) {function content_5a799f598a20d($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>购物车2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<!-- 引入 Bootstrap -->
	<link href="<?php echo @CSS_URL;?>
bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/Public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
normalize.css">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
ydyk.css">
	<script src="<?php echo @JS_URL;?>
jquery_3.2.1.min.js"></script>
	<!-- 包括所有已编译的插件 -->
	<script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
	<script src="<?php echo @Public_URL;?>
layer/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
shopcar3.css">
	<script type="text/javascript" src="<?php echo @JS_URL;?>
shopcar2.js"></script>
</head>
<body>
<!-- 头部导航条位置 -->
<header id="shopDetailHead" class="shopDetail-nav" style="">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</header>
<!-- 结束 -->

	<div id="cnt">
		<div class="ct-link1"><a href="">首页</a>>订单提交成功</div>
		<div class="ct-top1">
			<div class="ct-t1-txt"><font color="#D2A089">1.加入购物车</font></div>
			<div class="ct-t1-txt"><font color="#D2A089">2.填写核对订单信息</font></div>
			<div class="ct-t1-txt"><font color="#FF5000">3.完成订单</div>
		</div></br>
		<div class="order_finish">

			<div class='tips'>
		    	<img src="<?php echo @IMAGES_URL;?>
shopcar3-2.png" style="">
				<p class="ft18">
	                感谢您订购壹点壹客蛋糕！<br>
	                您的订单已提交成功！
           		 </p>
			</div>

			<div class='order'>
				<span>订单号: <?php echo $_smarty_tpl->tpl_vars['order']->value['ornum'];?>
</span>
				<a href="index.php?m=home&c=center&a=order"><button class='btn1'>查看我的订单</button></a>
				<br>
				<a href="index.php?m=api&c=index&a=pay&orid=<?php echo $_smarty_tpl->tpl_vars['order']->value['orid'];?>
"><button class='btn2'>立即使用支付宝支付</button></a>
				<div class='ft'>
					<span class='ft1'>※温馨提示：</span>
					<span class='ft2'>请收货人保持电话畅通，配送员会在送达前与收货人再次确认交货时间，如果未能接通，可能会导致延误，敬请留意！</span>
				</div>
				<div class='an'>
					<a href="index.php?m=home&c=brand&a=cakeList&id=1"><button class='btn3'>继续购物</button></a>
					<a href="index.php"><button class='btn3'>返回首页</button></a>
				</div>
			</div>
	    </div>
	

	</div>

	<div style="clear: both"></div>

	<footer id="shopDetailFooter" style="margin-top: 20px;">
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</footer>

	<div class="commonModal">
		<?php echo $_smarty_tpl->getSubTemplate ("./modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<script src="<?php echo @JS_URL;?>
ydyk.js"></script>

</body>
</html><?php }} ?>