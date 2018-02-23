<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:28:36
         compiled from "./APP/Home/View\center\center.html" */ ?>
<?php /*%%SmartyHeaderCode:23245a799f74719a08-31628167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79d5f0439d8c15e77eb144685620a332e8dea22' => 
    array (
      0 => './APP/Home/View\\center\\center.html',
      1 => 1515577410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23245a799f74719a08-31628167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f749c15a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f749c15a')) {function content_5a799f749c15a($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ("common/commonHeader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
huiyuan/center.css">
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ("common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<!-- 首页-产品-xxx -  -->
<div style="padding-top: 110px;">
	<div class='breadcrumb_nav'>
		<div>
			<a href="index.php?m=home&c=index&a=index"><span>首页</span></a>
			<span>></span>
			<a href="index.php?m=home&c=center&a=index"><span>个人中心</span></a>
		</div>
	</div>
	<div class="u_info">
		<div class="u_info_1">
			<!-- 头像div -->
			<div class="HPor">
				<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/user.jpg" alt="">
			</div>
			<div class='_info'>
				<!-- ft_1字体1 ft_2字体2 -->
				<span class="ft_1">欢迎回到壹点壹客！</span></br>
				<span class="ft_2"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span></br>
				<div class='item'>
					<div class='item_1'>
						<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/锁.png" width="17" height="17"><a href="index.php?m=home&c=center&a=editPwd">修改密码</a>&nbsp;&nbsp;
						<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/留言.png" width="17" height="17"><a href="index.php?m=home&c=center&a=liuyan">留言</a>
					</div>
					<div class = 'item_2'>
						<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/定位.png" width="17" height="17"><a href="index.php?m=home&c=center&a=address">收货地址</a>&nbsp;&nbsp;
						<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/编辑.png" width="17" height="17"><a href="index.php?m=home&c=center&a=information">编辑资料</a>
					</div>
					<!--<div class='item_3'>
						<span style="color: #000;">完善信息领</span>
						<span style="color: #FF6600;">100</span>
						<span style="color: #000;">红包</span>
					</div>-->
				</div>
			</div>
		</div>
		<div class='u_info_2'>
			<div class='my_gift'>
				<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/订单.png" alt="">
			</div>
			<span style=" font-size: 18px;">我的订单</span>
			<a href="index.php?m=home&c=center&a=order" style="font-size: 16px;">
				<div class='_btn'>
					<span style="color: #F55A19;">查看</span>
				</div>	
			</a>
		</div>
		<div class='u_info_2'>
			<div class='my_gift'>
				<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/礼品.png" alt="">
			</div>
			<span style=" font-size: 18px;">点金</span>&nbsp;
			<span style=" font-size: 20px;color: #F55A19;">0</span>
			<div style="margin-top: 20px;">
				<a href="index.php?m=home&c=center&a=dianjin">[点金说明]</a>
			</div>
		</div>
		<div class='u_info_2'>
			<div class='my_gift'>
				<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/余额.png" alt="">
			</div>
			<span style=" font-size: 18px;">余额</span>&nbsp;
			<span style=" font-size: 20px;color: #F55A19;">0</span>
			<span style=" font-size: 18px;">元</span>
			<div class='_btn'>
				<a href="javascript:void(0);" onclick="putMoney()" style="font-size: 16px;">
					<span style="color: #F55A19;">充值</span>
				</a>
			</div>
		</div>
		<!-- 字体3号 -->
		<div class = 'ft_3'>
			<span>点金兑换优惠券：</span>
		</div>
	</div>
	
	<div class='coupon'>
		<div class='coupon_left'>
			<p style="margin-top:50px;">点金兑换规则：</p>
			<p>1、点金可兑换优惠券</p>
			<p>2、优惠券有效期1年</p>
			<p>3、一张订单仅可使用一张券</p>
			<p>4、优惠券不可与其他优惠同时享受</p>
			<p>5、优惠券适合所有的商品</p>
		</div>
		<div class='coupon_list'>
			<div class='coupon_value'>
				<div class='coupon_value_count'>
					<div style="margin-left: 20px;">
						<span style="color: #FF6600">¥</span>
						<span style="color: #FF6600;font-size: 50px;">10</span>
						<span>元优惠券</span><br/>
						<span>满158可用</span><br/>
						<span>全品类</span>
					</div>
				</div>
				<a href="#">
					<div class="coupon_convert">
						<span>10点金立即兑换</span>
					</div>
				</a>
			</div>
			<div class='coupon_value'>
				<div class='coupon_value_count'>
					<div style="margin-left: 20px;">
						<span style="color: #FF6600">¥</span>
						<span style="color: #FF6600;font-size: 50px;">20</span>
						<span>元优惠券</span><br/>
						<span>满258可用</span><br/>
						<span>全品类</span>
					</div>
				</div>
				<a href="#">
					<div class="coupon_convert">
						<span>20点金立即兑换</span>
					</div>
				</a>
			</div>
			<div class='coupon_value'>
				<div class='coupon_value_count'>
					<div style="margin-left: 20px;">
						<span style="color: #FF6600">¥</span>
						<span style="color: #FF6600;font-size: 50px;">30</span>
						<span>元优惠券</span><br/>
						<span>满358可用</span><br/>
						<span>全品类</span>
					</div>
				</div>
				<a href="#">
					<div class="coupon_convert">
						<span>30点金立即兑换</span>
					</div>
				</a>
			</div>
			<div class='coupon_value'>
				<div class='coupon_value_count'>
					<div style="margin-left: 20px;">
						<span style="color: #FF6600">¥</span>
						<span style="color: #FF6600;font-size: 50px;">40</span>
						<span>元优惠券</span><br/>
						<span>满458可用</span><br/>
						<span>全品类</span>
					</div>
				</div>
				<a href="#">
					<div class="coupon_convert">
						<span>40点金立即兑换</span>
					</div>
				</a>
			</div>
		</div>
	</div>
	<div class='user_id'>
		<span style="font-weight: bold;font-size: 15px;">您当前的身份是: </span>&nbsp;
		<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/会员.png" width="25px" height="25px">&nbsp;
		<span style="font-weight: bold;font-size: 15px;">普通会员 </span>&nbsp;
		<a href="#">[新会员权益]</a>
	</div>
	<div class='lucky'>
		<span style="margin-right: 20px;">您享有的权益:</span>
		<div class="Hv">
			<a href="#">
				<img src="<?php echo @IMAGES_URL;?>
huiyuanImg/权益.png" width="25px" height="25px">
			</a>
			<div class='_qy'>
				<span>享受每月会员日指定蛋糕82折优惠，限会员日配送</span>
				<a href="#">[详情]</a>
			</div>
		</div>
		
	</div>
</div>
	<div style="clear: both"></div>


<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<script>
	function putMoney() {
		alert('亲~~该功能我们的程序员哥哥做不来');
    }
</script>


</body>
</html>



					
					
					<?php }} ?>