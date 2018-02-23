<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:45
         compiled from "./APP/Admin/View\admin\system.html" */ ?>
<?php /*%%SmartyHeaderCode:116595a799e8d9c0850-25948123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64bd5aee63d6324028d6c1c6589410d5663a0e0a' => 
    array (
      0 => './APP/Admin/View\\admin\\system.html',
      1 => 1513925784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116595a799e8d9c0850-25948123',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'list' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e8dca6c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e8dca6c0')) {function content_5a799e8dca6c0($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" />
	<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
system.css" />
	
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
system.js" ></script>
</head>
<body>
	<div class="page-header">
		<h4>管理中心</h4>
	</div>
	<div class="myrow">
		<div class="bgcolor1 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
order.png" class="center-block" />
				<span>今日新增订单</span>
				<span>0</span>
			</a>
		</div>
		<div class="bgcolor2 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
account.png" class="center-block" />
				<span>今日新增用户</span>
				<span>0</span>
			</a>
		</div>
		<div class="bgcolor3 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
article.png" class="center-block" />
				<span>今日待审评论数</span>
				<span>0</span>
			</a>
		</div>
		<div class="bgcolor4 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
foot.png" class="center-block" />
				<span>今日访问量</span>
				<span>0</span>
			</a>
		</div>
		<div class="bgcolor5 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
goods.png" class="center-block" />
				<span>商品数量</span>
				<span>0</span>
			</a>
		</div>
		<div class="bgcolor6 rowItem center-block">
			<a href="#">
				<img src="<?php echo @ADMIN_IMAGES_URL;?>
article.png" class="center-block" />
				<span>文章数量</span>
				<span>0</span>
			</a>
		</div>
	</div>
	<div class="well syswel">
		<h4>登录日志</h4>
		<table class="table table-bordered table-striped">
		   <thead>
		   	<tr>
		   		<th>用户ID</th>
		   		<th>用户账号</th>
		   		<th>登录IP</th>
		   		<th>登录地址</th>
		   		<th>登录时间</th>
		   		<th>操作</th>
		   	</tr>
		   </thead>
		   <tbody>
		   <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		      <tr>
		         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['uid'];?>
</td>
		         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['uname'];?>
</td>
		         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</td>
		         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['address'];?>
</td>
		         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['lasttime'],'%Y-%m-%d %H:%M:%S');?>
</td>
		         <td>
		         	<a class="btn btn-success" 
		         		href="javascript:void(0)" onclick="update(<?php echo $_smarty_tpl->tpl_vars['i']->value['uid'];?>
)">修改密码</a>
		         	</td>
		         </td>
		      </tr>
		   <?php } ?>
		      
		   </tbody>
		</table>
	</div>
	<div class="well syswel mywel">
		<h4>版本信息</h4>
		<table class="table table-bordered">
		   <tbody>
		      <tr>
		         <td>程序版本</td>
		         <td>TPshop v2.0.1</td>
		         <td>更新时间</td>
		         <td>2017-12-14</td>
		      </tr>
		      <tr>
		         <td>程序开发</td>
		         <td>Jiang</td>
		         <td>版权所有</td>
		         <td>Jiang</td>
		      </tr>
		      
		   </tbody>
		</table>
	</div>
	<div class="well syswel mywel">
		<h4>系统信息</h4>
		<table class="table table-bordered">
		   <tbody>
		      <tr>
		         <td>服务器操作系统</td>
		         <td>Linux</td>
		         <td>服务器域名/IP</td>
		         <td>demo6.tp-shop.cn [ 116.10.187.27 ]</td>
		      </tr>
		      <tr>
		         <td>服务器环境</td>
		         <td>nginx/1.10.2</td>
		         <td>PHP 版本</td>
		         <td>5.6.30</td>
		      </tr>
		      <tr>
		         <td>MySql 版本</td>
		         <td>5.6.35</td>
		         <td>文件上传限制</td>
		         <td>2M</td>
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
                   <form class="form-horizontal hide" role="form" onsubmit="return postPwd()"
                   action="#" method="get">
					   <div class="form-group">
					      <label for="pwd" class="col-sm-2 control-label">密码</label>
					      <div class="col-sm-10">
					         <input type="password" class="form-control" id="pwd" required="required"
					         	oninvalid="setCustomValidity('密码不能为空')" oninput="setCustomValidity('')"
					            placeholder="请输入密码">
					      </div>
					   </div>
					   <div class="form-group">
					      <label for="pwd1" class="col-sm-2 control-label">确认密码</label>
					      <div class="col-sm-10">
					         <input type="password" class="form-control" id="pwd1" required="required"
					         	oninvalid="setCustomValidity('确认密码不能为空')" oninput="setCustomValidity('')"
					            placeholder="请输入确认密码">
					         <input type="hidden" name="uid" value="" id="uid"/>
					      </div>
					   </div>
					   <div class="modal-footer">
				            <button type="button" class="btn btn-default" 
				               data-dismiss="modal" onClick="close_modal()">关闭
				            </button>
				            <button type="submit" class="btn btn-primary">
				               	提交更改
				            </button>
				         </div><!--.footer end-->
					</form>
              </div>
        </div>
     </div>
</div><!--.alert end-->
</body>
</html>
<?php }} ?>