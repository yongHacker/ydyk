<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:48
         compiled from "./APP/Admin/View\admin\userList.html" */ ?>
<?php /*%%SmartyHeaderCode:147495a799e90106b09-05701916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50654c02ec16104903f33bc91bf5d938f3dd4aa' => 
    array (
      0 => './APP/Admin/View\\admin\\userList.html',
      1 => 1515402212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147495a799e90106b09-05701916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'c' => 0,
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
  'unifunc' => 'content_5a799e90494e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e90494e5')) {function content_5a799e90494e5($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
	</head>
<body>
		<div class="tabs">
			<div class="page-header">
				<h4>会员列表 <small>会员管理</small></h4>
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
				<span>通过会员管理，你可以进行查看、编辑会员资料等操作.</span>
				<span>你可以根据条件搜索会员，然后选择相应的操作.</span>
			</div>
		</div>
		<!--well end-->	
		<table class="table table-bordered">
			   <caption>会员列表<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>ID</th>
			         <th>会员名</th>
			         <th>手机号码</th>
			         <th>电子邮箱</th>
			         <th>生日</th>
			         <th>注册时间</th>
			         <th>账号状态</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="7">
			   	  		<form class="form-inline" role="form" method="post" 
							action="index.php?m=admin&c=user&a=search">
						  <div class="form-group">
						    <input type="text" class="form-control" name="contant"
						    required="required" oninvalid="setCustomValidity('请输入搜索内容')"
			         		oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"
						    placeholder="请输入搜索内容" />
						  </div>
						    <select class="form-control" name="where">
						      <option value="id">用户ID</option>
						      <option value="name">会员名称</option>
						      <option value="phone">手机号码</option>
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
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['uid'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['uname'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['phone'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['birthday'],'%Y-%m-%d');?>
</td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
			         <td id="state<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
">
			         <?php if ($_smarty_tpl->tpl_vars['i']->value['state']==0){?>账号正常
			         <?php }else{ ?>账号异常
			         <?php }?>
			         </td>
			         <td><a href="javascript:void(0);" onclick="updatePwd(<?php echo $_smarty_tpl->tpl_vars['i']->value['uid'];?>
)">修改密码</a></td>
			      </tr>
			      <?php } ?>
			      <?php if (!$_smarty_tpl->tpl_vars['c']->value){?>
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
			      <?php }?>
			   </tbody>
			</table>	
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
<script type="text/javascript">
function close_modal(){
	$('#myModal').modal('hide');
	$('#submit').removeClass('disabled');
}
function modal_show(t,s){
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
	$('#submit').addClass('disabled');
}
function updatePwd(id){
	$('#myModal').modal('show');
	$('#modal-body').text('');
	$('.modal-title').text('修改密码');
	$('#myModal form').removeClass('hide');
	$('#uid').val(id);
}
function postPwd(){
	var pwd=$('#pwd').val();
	var pwd1=$('#pwd1').val();
	var uid=$('#uid').val();
	if(pwd==pwd1&&uid&&pwd){
		$.ajax({
			type:"post",
			url:"index.php?m=admin&c=user&a=updatePwd",
			data:{
				'uid':uid,
				'pwd':pwd
			},
			async:true,
			dataType: "json",
			success:function(res){
				$('#myModal form').addClass('hide');
				$('#modal-body').text(res.msg);
				$('.modal-title').text('系统提示');
			}
		});
	}else{
		$('#modal-body').text('密码不一致');
	}
	return false;
}
</script>
</body>
</html>
<?php }} ?>