<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:25:30
         compiled from "./APP/Admin/View\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:8095a799ebab07002-08034296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9f968587a65305a02a6083a5c8431f17bbb8694' => 
    array (
      0 => './APP/Admin/View\\admin\\login.html',
      1 => 1513820288,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8095a799ebab07002-08034296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'pwd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799ebace77f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799ebace77f')) {function content_5a799ebace77f($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录页面</title>
		<link rel="stylesheet" href="<?php echo @ADMIN_CSS_URL;?>
bootstrap.min.css" />
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
bootstrap.min.js" ></script>
		<script type="text/javascript" src="<?php echo @ADMIN_JS_URL;?>
common.js" ></script>
		<style>
			.myform{
				border: 2px solid whitesmoke;
				border-radius: 10px;
				width: 100%;
				height: auto;
				padding: 20px 30px 0px 30px;
				margin-top: 150px;
				color: white;
			}
			.control-label{
				text-align: center;
				padding: 0px !important;
			}
			.control-label img{
				height: 30px;
				width: 30px;
				
			}
			.checkbox a{
				color: white;
			}
			h3{
				width: 100%;
				display: block;
				text-align: center;
			}
			body{
				background: url(<?php echo @ADMIN_IMAGES_URL;?>
banner_1.jpg) no-repeat;
				background-size: cover;
			    width: 100%;
			    height: 100%;
			}
			hr{
				width: 90%;
				height: 1px;
				margin: 15px auto;
				background: white;
			}
			.btn{
				background-color: rgba(2,91,195,0.5);
			}
		</style>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class=" col-xs-offset-1 col-xs-10 col-sm-6 col-sm-offset-6 col-md-5">
					<div class="myform">
						<h3>管理系统登录</h3>
						<hr />
						<form class="form-horizontal" role="form" method="post"
							action="index.php?m=admin&c=login&a=login" onsubmit="return loginCheck()">
						   <div class="form-group">
						      <label for="uname" class="col-sm-2 control-label">
						      	<img src="<?php echo @ADMIN_IMAGES_URL;?>
user.png" />
						      </label>
						      <div class="col-sm-9">
						         <input type="text" class="form-control" id="uname" name="uname" oninput="setCustomValidity('')"
						           value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" placeholder="请输入账号" required="required" oninvalid="setCustomValidity('用户账号不能为空')"/>
						      </div>
						   </div>
						   <div class="form-group">
						      <label for="pwd" class="col-sm-2 control-label">
						      	<img src="<?php echo @ADMIN_IMAGES_URL;?>
lock.png" />
						      </label>
						      <div class="col-sm-9">
						         <input type="password" class="form-control" id="pwd" name="pwd" oninput="setCustomValidity('')"
						          value="<?php echo $_smarty_tpl->tpl_vars['pwd']->value;?>
"  placeholder="请输入密码" required="required" oninvalid="setCustomValidity('密码不能为空')"/>
						      </div>
						   </div>
						   <div class="form-group">
						      <label for="check" class="col-sm-2 control-label">
						      	<img src="<?php echo @ADMIN_IMAGES_URL;?>
check.png" />
						      </label>
						      <div class="col-sm-5">
						         <input type="text" class="form-control" id="check" name="check" oninput="setCustomValidity('')"
						            placeholder="请输入验证码" required="required"oninvalid="setCustomValidity('验证码不能为空')"/>
						      </div>
						      <div class="col-sm-4">
						      	<img src="index.php?m=admin&c=login&a=checkImg" 
						      	onclick="this.src='index.php?m=admin&c=login&a=checkImg&t='+Math.random()"
						      		class="img-responsive" style="height: 37px;" />
						      </div>
						   </div>
						   <div class="form-group">
						      <div class="col-sm-offset-2 col-sm-9">
						         <div class="checkbox">
						            <label>
						               <input type="checkbox" name="remember" value="1"> 请记住我
						            </label>
						            <a href="index.php?m=admin&c=email&a=sendEmail" class="pull-right">忘记密码？</a>
						         </div>
						         
						      </div>
						   </div>
						   <div class="form-group">
						      <div class="col-sm-offset-2 col-sm-9">
						         <button type="submit" id="submit" class="btn btn-success btn-lg btn-block">登录</button>
						      </div>
						      
						   </div>
						</form>
					</div>
				</div>
			</div>
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
		              <div class="modal-footer">
			            <button type="button" class="btn btn-default" onClick="close_modal()"
			               data-dismiss="modal">关闭
			            </button>
			         </div>
		        </div>
		     </div>
		</div><!--.alert end-->
	</body>
</html>
<?php }} ?>