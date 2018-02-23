<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:28:40
         compiled from "./APP/Home/View\center\seeOrder.html" */ ?>
<?php /*%%SmartyHeaderCode:195695a799f78ef65a4-70866351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5cd05d1026946aa9b7cd4eeba205df6e57000ea' => 
    array (
      0 => './APP/Home/View\\center\\seeOrder.html',
      1 => 1515631078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '195695a799f78ef65a4-70866351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'i' => 0,
    'goods' => 0,
    'g' => 0,
    'address' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f791fa2b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f791fa2b')) {function content_5a799f791fa2b($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ("common/commonHeader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
huiyuan/seeOrder.css">
</head>
<body>
	<!-- 首页-产品-xxx -  -->
	<div class='breadcrumb_nav'>
		<div>
			<a href="index.php?m=home&c=index&a=index"><span>首页</span></a>
			<span>></span>
			<a href="index.php?m=home&c=center&a=index"><span>个人中心</span></a>
			<span>></span>
			<a href="#"><span>订单详情</span></a>
		</div>
	</div>


	<div class='layout'>
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<div class='form_1'>
			<div class='num'>
				<span class='ft1'>订单号：</span>
				<span class='ft2' style="margin-right: 40px;"><?php echo $_smarty_tpl->tpl_vars['i']->value['ornum'];?>
</span>
				<span class='ft1'>下单时间：<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
			</div>

			<div class="tr_h">
            	<span style="padding-left: 10px;width: 400px;text-align: left;">商品</span> 
            	<span style="width:240px; ">属性</span> 
            	<span style="width:132px; ">单价</span> 
            	<span style="width:240px; ">数量</span> 
            	<span style="width:180px; ">小计</span>      
            </div>
            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value['orid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
            <div class='tr'>
				<div class='td' style="width: 400px;text-align: left;">
					<a href="#"><img src="/Public/upload/<?php echo $_smarty_tpl->tpl_vars['g']->value['img'];?>
"></a>
					<a href="#"><?php echo $_smarty_tpl->tpl_vars['g']->value['gname'];?>
</a>
				</div>
				<div class='td' style="width: 240px;line-height: 20px;">
					<span style="display:block;margin:100px auto;">
						<?php echo $_smarty_tpl->tpl_vars['g']->value['norname'];?>
<br>
						<?php echo $_smarty_tpl->tpl_vars['g']->value['weight1'];?>
<br>
						<?php echo $_smarty_tpl->tpl_vars['g']->value['weight2'];?>
<br>
						<?php echo $_smarty_tpl->tpl_vars['g']->value['enclosure'];?>

					</span>
				</div>
				<div class='td' style="width: 132px;">
					<span><?php echo $_smarty_tpl->tpl_vars['g']->value['price'];?>
元</span>
				</div>
				<div class='td' style="width: 240px;">
					<span style="font-weight:bold;"><?php echo $_smarty_tpl->tpl_vars['g']->value['num'];?>
</span>
				</div>
				<div class='td' style="width: 180px;">
					<span><?php echo $_smarty_tpl->tpl_vars['g']->value['num']*$_smarty_tpl->tpl_vars['g']->value['price'];?>
元</span>
				</div>
            </div>
            <?php } ?>
		</div>
        <?php } ?>


		<div class='form_2'>
			<div class="tr_h">
				<span>收货信息</span>
			</div>

			<div class='add'>
				<p style="margin-top: 30px;">配送方式：	送货上门</p>
				<p>收货人地址：<strong><?php echo $_smarty_tpl->tpl_vars['address']->value['city'];?>
 <?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>
</strong></p>
				<p>收货人姓名：<strong><?php echo $_smarty_tpl->tpl_vars['address']->value['uname'];?>
</strong></p>
				<p>收货人手机：	<strong><?php echo $_smarty_tpl->tpl_vars['address']->value['uphone'];?>
</strong></p>
			</div>

		</div>

		<div class = 'form_3'>
			<div class="tr_h">
				<span>支付方式</span>
			</div>
			<div class='pay'>
				<p>支付方式：	支付宝</p>
			</div>
		</div>

		<div class='form_4'>
			<div class="tr_h">
				<span>其他</span>
			</div>
			<div class='other'>
				<p>生日帽：不需要</p>
				<p>生日蜡烛：需要</p>
			</div>
		</div>

		<div class='form_5'>
			<div class='ft_right'>
				<span style="margin-right: 75px;">商品总价：</span>
				<span style="color:#F55A19;"><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
元</span>
				<br>
				<span style="margin-right: 5px;font-size: 22px;">应付款金额：</span>
				<span style="font-size: 22px;color:#F55A19; font-weight: bold;"><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
</span>
				<span style="font-size: 22px;color:#000000;">元</span>
			</div>
		</div>

		<div class='form_6'>
			<button class='btn1' onclick="window.location.href='index.php?m=api&c=index&a=pay&orid=<?php echo $_smarty_tpl->tpl_vars['i']->value['orid'];?>
'">付&nbsp;&nbsp;&nbsp;款</button>
		</div>
	</div>

<div style="clear: both;height: 100px;"></div>
<?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>




					
					
					<?php }} ?>