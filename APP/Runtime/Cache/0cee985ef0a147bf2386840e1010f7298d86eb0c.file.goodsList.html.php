<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:24:55
         compiled from "./APP/Admin/View\admin\goodsList.html" */ ?>
<?php /*%%SmartyHeaderCode:310705a799e97440854-71267365%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cee985ef0a147bf2386840e1010f7298d86eb0c' => 
    array (
      0 => './APP/Admin/View\\admin\\goodsList.html',
      1 => 1514944718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310705a799e97440854-71267365',
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
    'state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799e978632c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799e978632c')) {function content_5a799e978632c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'E:\\PHP\\wamp\\www\\shop\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
		<style type="text/css">
		.tableTd td{
	      overflow: hidden; 
	      text-overflow:ellipsis;  
	      white-space: nowrap; 
		  max-width: 300px;
		  line-height:100px !important;	
		  text-align: center;
	 	}
	 	.dropdown-menu {
	 		position: absolute;
		    top: 100%;
		    right: 0px !important;
	 		left: inherit !important;
	 	}
	 	#myModal form{
			display: block;
    		margin-top: 0em;
	 		margin-left: 0px;
	 	}
		</style>
	</head>
	<body>
		    <div class="tabs">
				<ul class="nav nav-tabs" id="tabs">
					<li>
						<h4>商品列表  <small>商城所有商品索引及管理</small></h4></li>
					<li>
						<a href="index.php?m=admin&c=goods&a=goodsList&state=0" >所有商品</a>
					</li>
					<li>
						<a href="index.php?m=admin&c=goods&a=goodsList&state=1" >等待审核</a>
					</li>
					<li>
						<a href="index.php?m=admin&c=goods&a=goodsList&state=2" >审核通过</a>
					</li>
					<li>
						<a href="index.php?m=admin&c=goods&a=goodsList&state=3" >下架产品</a>
					</li>
					<li>
						<a href="index.php?m=admin&c=goods&a=goodsList&state=4" >审核失败</a>
					</li>
				</ul>
			</div>
			
			<div class="well mywell" id="shopSetWell">
				<h5>操作提示
					<small class="pull-right" onclick="closeWell('shopSetWell')">
						<i class="glyphicon glyphicon-minus"></i>
					</small>
				</h5> 
				<div>
					<span>平台可以强制下架商家违规的产品，对于商家发布的商品需要审核。</span>
					<span>上架，当商品处于非上架状态时，前台将不能浏览该商品，可控制商品上架状态。</span>
					<span>违规下架，当商品处于违规下架状态时，前台将不能购买该商品，只有管理员可控制商品违规下架状态，并且商品只有重新编辑后才能上架。</span>
				</div>
			</div>
			<!--well end-->
			<table class="table table-bordered">
			   <caption>商品列表<small>(共<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
条记录)</small>
			   </caption>
			   <thead>
			      <tr>
			         <th>商品ID</th>
			         <th>商品图片</th>
			         <th>商品名称</th>
			         <th>商品介绍</th>
			         <th>所属分类</th>
			         <th>添加时间</th>
			         <th>审核状态</th>
			         <th>操作</th>
			      </tr>
			   </thead>
			   <tbody>
			   	  <tr>
			   	  	<td colspan="10">
			   	  		<a class="btn btnA btn-warning" href="index.php?m=admin&c=goods&a=addGoods">添加产品</a>
			   	  		<form class="form-inline" role="form" method="post" 
							action="index.php?m=admin&c=goods&a=search">
						  <div class="form-group">
						    <input type="text" class="form-control" name="contant"
						    required="required" oninvalid="setCustomValidity('请输入搜索内容')"
			         		oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['c']->value;?>
"
						    placeholder="请输入搜索内容" />
						  </div>
						    <select class="form-control" name="where">
						      <option value="id">商品ID</option>
						      <option value="name">商品名称</option>
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
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
</td>
			         <td>
			         	<img alt="图片" src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
">
			         </td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['gname'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['intro'];?>
</td>
			         <td><?php echo $_smarty_tpl->tpl_vars['i']->value['cname1'];?>
</td>
			         <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['i']->value['addtime'],'%Y-%m-%d %H:%M:%S');?>
</td>
			         <td id="state<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
">
			         <?php if ($_smarty_tpl->tpl_vars['i']->value['state']==0){?>待审核
			         <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==1){?>审核通过
			         <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==2){?>已下架
			         <?php }elseif($_smarty_tpl->tpl_vars['i']->value['state']==3){?>审核失败
			         <?php }?>
			         </td>
			         <td>
			            <a href="index.php?m=admin&c=goods&a=update&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
">修改信息</a>
						<a href="javascript:void(0);" onclick="update('<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
')">修改状态</a>
			         </td>
			      </tr>
			      <?php } ?>
			      <?php if (!$_smarty_tpl->tpl_vars['c']->value){?>
			      <tr>
			      	<td colspan="10" class="td_2">
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
                   <form class="form form-horizontal hide" role="form" onsubmit="return postState()">
					   <div class="form-group">
					      <div class="col-sm-10">
					          <select class="form-control" name="state" id="state">
						         <option value="0">待审核</option>
						         <option value="1">审核通过</option>
						         <option value="2">下架产品</option>
						         <option value="3">审核失败</option>
						      </select>
						      <input type="hidden" name="id" id="gid" value=""/>
					      </div>
					   </div>
					   <div class="modal-footer">
				            <button type="button" class="btn btn-default" 
				               data-dismiss="modal" onClick="close_modal()">关闭
				            </button>
				            <button type="submit" id="submit" class="btn btn-primary">
				               	提交更改
				            </button>
				         </div><!--.footer end-->
					</form>
              </div>
        </div>
     </div>
</div><!--.alert end-->
<script type="text/javascript">

var index=<?php echo $_smarty_tpl->tpl_vars['state']->value;?>
;
changeTab(index);
function go(){
	var page=document.getElementById('page');
	window.location.href="<?php echo $_smarty_tpl->tpl_vars['pageurl']->value;?>
"+page.value; 
}
 
function changeTab(index){
	$('#tabs li').eq(index).addClass('active');
	$('#tabs li').eq(index).siblings().removeClass('active');
}
function close_modal(){
	$('#myModal').modal('hide');
	$('#myModal form').addClass('hide');
	$('#modal-body').text('');
	$('#submit').removeClass('disabled');
}
function modal_show(t,s){
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
}
function update(id){
	$('#myModal form').removeClass('hide');
	$('#gid').val(id);
	modal_show('修改商品状态','');
}
function postState(){
	var state=$('#state').val();
	var id=$('#gid').val();
	$('#myModal form').addClass('hide');
	$.ajax({
		type:"post",
		url:"index.php?m=admin&c=goods&a=changeState",
		data:{
			'id':id,
			'state':state
		},
		async:true,
		dataType: "json",
		success:function(res){
			if(res.num=='1'){
				$('#state'+id).html(res.state);
			}
			$('#modal-body').text(res.msg);
			$('.modal-title').text('系统提示');
		}
	});
	return false;
}
</script>
 
	</body>
</html>
<?php }} ?>