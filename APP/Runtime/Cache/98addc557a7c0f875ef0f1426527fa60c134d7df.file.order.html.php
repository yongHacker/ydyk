<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:28:32
         compiled from "./APP/Home/View\center\order.html" */ ?>
<?php /*%%SmartyHeaderCode:42865a799f7082e177-55869500%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98addc557a7c0f875ef0f1426527fa60c134d7df' => 
    array (
      0 => './APP/Home/View\\center\\order.html',
      1 => 1515584716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42865a799f7082e177-55869500',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'i' => 0,
    'goods' => 0,
    'g' => 0,
    'pageurl' => 0,
    'pageUp' => 0,
    'pageDown' => 0,
    'count' => 0,
    'pageNum' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f70a7428',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f70a7428')) {function content_5a799f70a7428($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ("common/commonHeader.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
huiyuan/order.css">
</head>
<body>

	<!-- 首页-产品-xxx -  -->
	<div class='breadcrumb_nav'>
		<div>
			<a href="index.php?m=home&c=index&a=index"><span>首页</span></a>
			<span>></span>
			<a href="index.php?m=home&c=center&a=index"><span>个人中心</span></a>
			<span>></span>
			<a href="#"><span>我的订单</span></a>
		</div>
	</div>


	<div class='layout'>
		<div class='layout_tt'>
			<span style="margin-left: 60px;">我的订单</span>
		</div>
		<div class = 'list'>
			<div class = 'order_table'>
				<div class = 'period'>
					<div class = 'btn'>
						<a href="#"><span>近三个月之内</span></a>
					</div>
					<div class = 'options'>
						<a href="#"><span>近三个月订单</span></a><br>
						<a href="#"><span>三个月之前</span></a>
					</div>
				</div>
				<div class='th'>
					<span>订单总额</span>
				</div>
				<div class='th'>
					<span>下单时间</span>
				</div>
				<div class='th'>
					<span>订单状态</span>
				</div>
				<div class='th'>
					<span>支付方式</span>
				</div>
				<div class='th'>
					<span>操作</span>
				</div>
			</div>
            <div class="dindan-box">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                <div class="dindan-item">
                    <div class="dindan-title">
                        订单编号:<?php echo $_smarty_tpl->tpl_vars['i']->value['ornum'];?>

                    </div>
                    <div class="dindan-content">
                        <div class="shop">
                            <?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value[$_smarty_tpl->tpl_vars['i']->value['orid']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
                            <img src="/Public/upload/<?php echo $_smarty_tpl->tpl_vars['g']->value['img'];?>
" width="65" height="65">
                            <?php } ?>
                        </div>

                        <div class='th price'>
                            <span><?php echo $_smarty_tpl->tpl_vars['i']->value['amount'];?>
元</span>
                        </div>
                        <div class='th date'>
                            <span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</span>
                        </div>
                        <div class='th state'>
                            <span>
                                 <?php if ($_smarty_tpl->tpl_vars['i']->value['state']==0){?>待支付
                                 <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==1){?>已支付
                                 <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==2){?>已发货
                                 <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==3){?>已完成
                                 <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==4){?>已取消
                                 <?php }else{ ?>异常
                                 <?php }?>
                            </span>
                        </div>
                        <div class='th pay'>
                            <span>支付宝</span>
                        </div>
                        <div class='th operation'>
                            <a href="index.php?m=home&c=center&a=order&act=seeOrder&orid=<?php echo $_smarty_tpl->tpl_vars['i']->value['orid'];?>
">查看订单</a> <br>
                            <a href="index.php?m=home&c=center&a=order&act=delOrder&orid=<?php echo $_smarty_tpl->tpl_vars['i']->value['orid'];?>
" style="color: red">[取消订单]</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

			<div id="pager" class="pagebar" style="float:right;">
   				 <span class="f_l" style="margin-right:30px;"><a href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageUp']->value;?>
">上一页</a>&nbsp;&nbsp;&nbsp;&nbsp; <a href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageDown']->value;?>
">下一页</a>&nbsp;&nbsp;总计 | <?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录 | 共 <?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
 页 | 	</span>
    		</div>
		</div>
	</div>

    <div style="clear: both;height: 500px;"></div>
    <?php echo $_smarty_tpl->getSubTemplate ("common/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


</body>
</html>




					
					
					<?php }} ?>