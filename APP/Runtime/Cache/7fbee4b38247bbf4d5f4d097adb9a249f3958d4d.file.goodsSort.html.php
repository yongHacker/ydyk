<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:56
         compiled from "./APP/Admin/View\admin\goodsSort.html" */ ?>
<?php /*%%SmartyHeaderCode:3195a799e98064673-92042682%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fbee4b38247bbf4d5f4d097adb9a249f3958d4d' => 
    array (
      0 => './APP/Admin/View\\admin\\goodsSort.html',
      1 => 1514518414,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3195a799e98064673-92042682',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'url' => 0,
    'c' => 0,
    'list' => 0,
    'i' => 0,
    'up' => 0,
    'u' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e9825c57',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e9825c57')) {function content_5a799e9825c57($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
common.css" />
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
goods.css" />
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
common.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
goods.js" ></script>
	</head>
	<body>
		<div class="tabs">
			<div class="page-header">
				<h4>商品分类管理 <small>网站分类添加与管理  </small></h4>
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
				<span>网站分类添加与管理</span>
				<span>分类排序数字越小，排序越靠前</span>
			</div>
		</div>
		<!--well end-->
		<div>
			<table class="table table-bordered">
			   <caption>网站分类列表<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>ID</th>
			         <th>分类名称(中文)</th>
			         <th>分类名称(英文)</th>
			         <th>上级分类</th>
			         <th>分类级别</th>
			         <th>分类排序</th>
			         <th>创建时间</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="8">
			   	  		<a class="btn btnA btn-warning" href="index.php?m=admin&c=sort&a=add">添加分类</a>
			   	  		<form class="form-inline" role="form" method="post" 
							action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
						  <div class="form-group">
						    <input type="text" class="form-control" name="contant"
						    required="required" oninvalid="setCustomValidity('请输入搜索内容')"
			         		oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"
						     placeholder="请输入搜索内容">
						  </div>
						    <select class="form-control" name="where">
						      <option value="cid">分类ID</option>
						      <option value="cname">分类名称</option>
						    </select>
						  <button type="submit" class="btn btn-info">提交</button>
						</form>
			   	  	</td>
			   	  </tr>
			   	  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			      <tr class="tableTd">
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cid'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cname1'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cname2'];?>
</td>
			         <td>
			         <?php  $_smarty_tpl->tpl_vars['u'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['u']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['up']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['u']->key => $_smarty_tpl->tpl_vars['u']->value){
$_smarty_tpl->tpl_vars['u']->_loop = true;
?>
			         <?php if ($_smarty_tpl->tpl_vars['i']->value['upid']==$_smarty_tpl->tpl_vars['u']->value['cid']){?><?php echo $_smarty_tpl->tpl_vars['u']->value['cname1'];?>
<?php break 1?>
			         <?php }?>
			         <?php } ?>
			         </td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['level'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['sort'];?>
</td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
			         <td>
			         	<a href="index.php?m=admin&c=sort&a=update&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['cid'];?>
">编辑</a>
			         </td>
			      </tr>
			      <?php } ?>
			      
			   </tbody>
			</table>
		</div>
	</body>
</html>
<?php }} ?>