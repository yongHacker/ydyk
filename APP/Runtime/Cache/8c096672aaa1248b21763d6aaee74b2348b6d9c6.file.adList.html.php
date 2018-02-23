<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:51
         compiled from "./APP/Admin/View\admin\adList.html" */ ?>
<?php /*%%SmartyHeaderCode:107235a799e9310f2c2-32318036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c096672aaa1248b21763d6aaee74b2348b6d9c6' => 
    array (
      0 => './APP/Admin/View\\admin\\adList.html',
      1 => 1514463408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107235a799e9310f2c2-32318036',
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
  'unifunc' => 'content_5a799e933ce56',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e933ce56')) {function content_5a799e933ce56($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
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
		<style type="text/css">
		.tableTd>td{
	      line-height:100px !important;
	      white-space: nowrap; 
	 	}
		</style>
	</head>
	<body>
		<div class="tabs">
			<div class="page-header">
				<h4>广告列表 <small>广告管理</small></h4>
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
				<span>只需要点击半透明广告图片即可更换广告.</span>
			</div>
		</div>
		<!--well end-->
		<div>
			<table class="table table-bordered">
			   <caption>广告列表<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>ID</th>
			         <th>广告名称</th>
			         <th>广告图片</th>
			         <th>链接</th>
			         <th>广告位置</th>
			         <th>添加时间</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="7">
			   	  		<a class="btn btnA btn-warning" href="index.php?m=admin&c=ad&a=addAd">添加广告</a>
			   	  	</td>
			   	  </tr>
			   	  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			      <tr class="tableTd">
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['adname'];?>
</td>
			         <td>
			         	<img alt="图片" src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
">
			         </td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
</td>
			         <td>
			         <?php if ($_smarty_tpl->tpl_vars['i']->value['position']==0){?>首页展示
			         <?php }else{ ?>产品轮播
			         <?php }?>
			         </td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
			         <td>
			            <a href="index.php?m=admin&c=ad&a=del&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
">删除</a>
			            <a href="index.php?m=admin&c=ad&a=update&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['aid'];?>
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
</html>
<?php }} ?>