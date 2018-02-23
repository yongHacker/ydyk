<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:52
         compiled from "./APP/Admin/View\admin\dataBackups.html" */ ?>
<?php /*%%SmartyHeaderCode:122565a799e9431add8-53441504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '142bb6db0959532022f99599056856c74a589f1b' => 
    array (
      0 => './APP/Admin/View\\admin\\dataBackups.html',
      1 => 1514356648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122565a799e9431add8-53441504',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tables' => 0,
    'list' => 0,
    'i' => 0,
    'total' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e944fb5c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e944fb5c')) {function content_5a799e944fb5c($_smarty_tpl) {?><!DOCTYPE html>
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
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
data.js" ></script>
	</head>
	<body>
		<div class="tabs">
			<div class="page-header">
				<h4>数据备份 <small>网站系统数据备份</small></h4>
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
				<span>数据备份功能根据你的选择备份数据，导出的数据文件可用“数据恢复”功能导入。</span>
				<span>对于已经备份的数据，再次备份将会覆盖原备份数据。</span>
			</div>
		</div>
		<!--well end-->
		<div>
			<table class="table table-bordered">
			   <caption>数据库表列表<small>(共<?php echo $_smarty_tpl->tpl_vars['tables']->value;?>
张表)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>数据库表</th>
			         <th>记录条数</th>
			         <th>占用空间</th>
			         <th>编码</th>
			         <th>存储引擎</th>
			         <th>备份状态</th>
			         <th>创建时间</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="8">
			   	  		<button class="btn btn-warning" onclick="dataBackupsTable('all')">一键备份全部</button>
			   	  	</td>
			   	  </tr>
			   	  <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			      <tr class="tableTd">
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['rows'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['size'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['collation'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['engine'];?>
</td>
			         <td id="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['state'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['create_time'];?>
</td>
			         <td>
			         	<button class="btn btn-success" onclick="dataBackupsTable('<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
')">数据备份</button>
			         </td>
			      </tr>
			      <?php } ?>
			      <tr>
			      	<td colspan="8" class="td_2">
			      		<span>共<?php echo $_smarty_tpl->tpl_vars['tables']->value;?>
张表</span>
			      		<span>总大小：<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</span>
			      	</td>
			      </tr>
			   </tbody>
			</table>
		</div>
<!-- 模态声明，show 表示显示 -->
<div class="modal" tabindex="-1" id="myModal">
     <!-- 窗口声明 -->
     <div class="modal-dialog">
        <!-- 内容声明 -->
        <div class="modal-content">
              <!-- 头部 -->
              <div class="modal-header">
                 <button type="button" class="close"
                            data-dismiss="modal" onClick="close_modal()">
                          <span>&times;</span>
                  </button>
                  <h4 class="modal-title">标题</h4>
              </div>
              <!-- 主体 -->
              <div class="modal-body">
                   <p id="modal-body">内容</p>
              </div>
        </div>
     </div>
</div><!--.alert end-->
	</body>
</html>
<?php }} ?>