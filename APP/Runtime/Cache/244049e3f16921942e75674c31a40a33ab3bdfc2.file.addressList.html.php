<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:49
         compiled from "./APP/Admin/View\address\addressList.html" */ ?>
<?php /*%%SmartyHeaderCode:36025a799e9138f630-46580620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '244049e3f16921942e75674c31a40a33ab3bdfc2' => 
    array (
      0 => './APP/Admin/View\\address\\addressList.html',
      1 => 1515551642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36025a799e9138f630-46580620',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'list' => 0,
    'i' => 0,
    'pageNum' => 0,
    'pageurl' => 0,
    'pageUp' => 0,
    'pageDown' => 0,
    'pageNow' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e91617dc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e91617dc')) {function content_5a799e91617dc($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
common.css" />
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
common.js" ></script>
</head>
<body>
<div class="tabs">
	<div class="page-header">
		<h4>收货地址管理 <small>网站系统收货地址列表  </small></h4>
	</div>
</div>
<!--tabs end-->
<div class="well mywell" id="shopSetWell">
	<h5>操作提示
		<small class="pull-right" onclick="closeWell('shopSetWell')">
			<i class="glyphicon glyphicon-minus"></i>
		</small>
	</h5>
	<div>
		<span>网站系统收货地址,强烈建议对此处谨慎操作。</span>
	</div>
</div>
<!--well end-->
<div>
	<table class="table table-bordered">
		<caption>收货地址<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
		</caption>
		<thead>
		<tr>
			<th>infoid</th>
			<th>会员uid</th>
			<th>收货人姓名</th>
			<th>收货人电话</th>
			<th>收货地址</th>
			<th>状态(flag)</th>
			<th colspan="2">操作</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td colspan="7">
				<a class="btn btnA btn-warning" href="index.php?m=admin&c=userinfo&a=addAddress">添加收货地址</a>
			</td>
		</tr>

		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		<tr class="tableTd">
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['infoid'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['uid'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['uname'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['uphone'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['i']->value['flag']==1){?>默认收货地址<?php }else{ ?>备选收货地址<?php }?></td>
			<td>
				<a href="index.php?m=admin&c=userinfo&a=del&infoid=<?php echo $_smarty_tpl->tpl_vars['i']->value['infoid'];?>
">删除</a>
				<a href="index.php?m=admin&c=userinfo&a=update&infoid=<?php echo $_smarty_tpl->tpl_vars['i']->value['infoid'];?>
">编辑</a>
			</td>
		</tr>
		<?php } ?>
		<tr>
			<td colspan="7" class="td_2">
				<span>共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条</span>
				<span>总页数：<?php echo $_smarty_tpl->tpl_vars['pageNum']->value;?>
</span>
				<span>
			      			<a class="btn btn-xs btn-default btn-success"
							   href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageUp']->value;?>
">上一页</a>
			      		</span>
				<span>
			      			<a class="btn btn-xs btn-default btn-info"
							   href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageDown']->value;?>
">下一页</a>
			      		</span>
				<span>
							<select id="page">
							<?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
							<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["page"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['name'] = "page";
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['pageNum']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["page"]['total']);
?>
								<?php if ($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['pageNow']->value){?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
" selected><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page']['index']+1;?>
</option>
								<?php }else{ ?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value++;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['page']['index']+1;?>
</option>
								<?php }?>
							<?php endfor; endif; ?>
							</select>
						</span>
				<span><button onclick="go()" class="btn btn-primary btn-xs">GO</button></span>
				<span>当前页：<?php echo $_smarty_tpl->tpl_vars['pageNow']->value;?>
</span>
				<span><a href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['pageNow']->value;?>
">刷新页面</a></span>
			</td>
		</tr>
		</tbody>
	</table>
</div>
<script type="text/javascript">
    function go(){
        var page=document.getElementById('page');
        window.location.href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
"+page.value;
    }
</script>
</body>
</html><?php }} ?>