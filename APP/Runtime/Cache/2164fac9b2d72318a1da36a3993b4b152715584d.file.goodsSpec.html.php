<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:56
         compiled from "./APP/Admin/View\admin\goodsSpec.html" */ ?>
<?php /*%%SmartyHeaderCode:271485a799e98b2e482-59664612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2164fac9b2d72318a1da36a3993b4b152715584d' => 
    array (
      0 => './APP/Admin/View\\admin\\goodsSpec.html',
      1 => 1514880246,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271485a799e98b2e482-59664612',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e98d224f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e98d224f')) {function content_5a799e98d224f($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>商品规格</title>
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
				<h4>商品规格  <small>商品规格索引及管理  </small></h4>
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
				<span>商品规格是购买商品时用户可以选择的, 如衣服颜色, 尺寸等.</span>
				<span>添加商品时需要先设置商品规格</span>
			</div>
		</div>
		<!--well end-->
		<div>
			<table class="table table-bordered">
			   <caption>网站规格列表<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>ID</th>
			         <th>规格名称</th>
			         <th>价格</th>
			         <th>图片</th>
			         <th>规格重量</th>
			         <th>实际重量</th>
			         <th>附件</th>
			         <th>创建时间</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="9">
			   	  		<a class="btn btnA btn-warning" href="index.php?m=admin&c=spec&a=add">添加规格</a>
			   	  		<form class="form-inline" role="form" method="post" 
							action="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
						  <div class="form-group">
						    <input type="text" class="form-control" name="contant"
						    required="required" oninvalid="setCustomValidity('请输入搜索内容')"
			         		oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"
						     placeholder="请输入搜索内容" />
						  </div>
						    <select class="form-control" name="where">
						      <option value="id">规格ID</option>
						      <option value="name">规格名称</option>
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
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['normid'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['norname'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['price'];?>
</td>
			         <td>
			         	<img alt="图片" src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
"/>
			         </td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['weight1'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['weight2'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['enclosure'];?>
</td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
			         <td>
			         	<a href="index.php?m=admin&c=spec&a=update&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['normid'];?>
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