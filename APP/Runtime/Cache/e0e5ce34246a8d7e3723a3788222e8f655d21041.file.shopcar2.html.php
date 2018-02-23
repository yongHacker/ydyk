<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:27:29
         compiled from "./APP/Home/View\home\shopcar2.html" */ ?>
<?php /*%%SmartyHeaderCode:39975a799f319dd5a3-34629532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0e5ce34246a8d7e3723a3788222e8f655d21041' => 
    array (
      0 => './APP/Home/View\\home\\shopcar2.html',
      1 => 1515631678,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '39975a799f319dd5a3-34629532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info_one' => 0,
    'info_all' => 0,
    'vo' => 0,
    'shop' => 0,
    'i' => 0,
    'count' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f31e0bba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f31e0bba')) {function content_5a799f31e0bba($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>购物车2</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8">
	<!-- 引入 Bootstrap -->
	<link href="<?php echo @CSS_URL;?>
bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo @Public_URL;?>
fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
normalize.css">
	<link rel="stylesheet" href="<?php echo @CSS_URL;?>
ydyk.css">
	<script src="<?php echo @JS_URL;?>
jquery_3.2.1.min.js"></script>
	<!-- 包括所有已编译的插件 -->
	<script src="<?php echo @JS_URL;?>
bootstrap.min.js"></script>
	<script src="<?php echo @Public_URL;?>
layer/layer/layer.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
shopcar2.css">
	<script type="text/javascript" src="<?php echo @JS_URL;?>
shopcar2.js"></script>
	
	<script src="<?php echo @JS_URL;?>
js/distpicker.data.js"></script>
	  <script src="<?php echo @JS_URL;?>
js/distpicker.js"></script>
	  <script src="<?php echo @JS_URL;?>
js/main.js"></script>
</head>
<body>
<!-- 头部导航条位置 -->
<header id="shopDetailHead" class="shopDetail-nav" style="">
	<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</header>
<!-- 结束 -->

	<div id="cnt">
		<div class="ct-link1"><a href="">首页</a>>购物车</div>
		<div class="ct-top1">
			<div class="ct-t1-txt"><font color="#D2A089">1.加入购物车</font></div>
			<div class="ct-t1-txt"><font color="#FF5000">2.填写核对订单信息</font></div>
			<div class="ct-t1-txt">3.完成订单</div>
		</div></br>
		<div class="ct-top2">配货信息</div>
		<div class="ct-top3"> 
			<span class="ct-t3-span">配送方式 ：</span>
			<div class="ct-t3-left">送货上门</div>
		</div>
		<div class="ct-top4">
			<font color="#FF5000">※温馨提示：</font> 
			修改地址请提前6小时来电，如临时修改地址可能会产生额外的费用。
		</div>

		<div class="ct-top2">收货地址 &nbsp;&nbsp;&nbsp;<button onclick="showAddress()" class="btn btn-warning btn-sm" style="padding: 2px 5px;">添加收货地址</button></div>

		<div class="ct-top5" id="addAdress" style="display: none">
            <button class="close" style="position: relative;top: -20px;right: -20px;">X</button>
			<label class="control-label">选择地区</label>
			<form class="form-inline">
		      <div id="distpicker1">
		        <div class="form-group">
		          <label class="sr-only" for="province4">Province</label>
		          <select class="form-control" id="province4"></select>
		        </div>
		        <div class="form-group">
		          <label class="sr-only" for="city4">City</label>
		          <select class="form-control" id="city4"></select>
		        </div>
		        <div class="form-group">
		          <label class="sr-only" for="district4">District</label>
		          <select class="form-control" id="district4"></select>
		        </div>
		      </div>
		    </form>

			<form class="form-horizontal" role="form" onsubmit="return postInfo()"
				style="margin-top: 10px;">
				<div class="form-group">
				  <label for="address" class="col-sm-3 control-label">地址</label>
				  <div class="col-sm-8">
						<input type="text" required="required" class="form-control"
								  oninvalid="setCustomValidity('请输入详细地址')"
								oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['info_one']->value['address'];?>
"
								placeholder="输入小区或者大夏名" id="address" >
						
				  </div>
			   </div>
			   <div class="form-group">
				  <label for="uname" class="col-sm-3 control-label">收货人姓名</label>
				  <div class="col-sm-8">
						<input type="text" required="required" class="form-control"
								  oninvalid="setCustomValidity('请输入收货人姓名')"
								oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['info_one']->value['uname'];?>
"
								placeholder="输入收货人姓名" id="uname" >
				  </div>
			   </div>
			   <div class="form-group">
				  <label for="uphone" class="col-sm-3 control-label">收货人电话</label>
				  <div class="col-sm-8">
						<input type="number" required="required" class="form-control"
								  oninvalid="setCustomValidity('请输入收货人电话')"
								oninput="setCustomValidity('')" value="<?php echo $_smarty_tpl->tpl_vars['info_one']->value['uphone'];?>
"
								placeholder="输入收货人姓名" id="uphone" >
				  </div>
			   </div>

			   <div class="form-group">
				 <div class="checkbox col-sm-8 col-sm-offset-3">
				  <button type="submit" class="btn btn-warning btn-block btn-md" onclick="hideAddress()">确定</button>
				 </div>
			   </div>
			</form>
		
		</div>

		<div class="ct-top11-1" style="height:auto;padding:10px;font-size: 14px;">
            <?php  $_smarty_tpl->tpl_vars['vo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['info_all']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vo']->key => $_smarty_tpl->tpl_vars['vo']->value){
$_smarty_tpl->tpl_vars['vo']->_loop = true;
?>
                 <div style="margin-bottom: 10px;">
                     <input type="radio" name="flag" onchange="changeid(<?php echo $_smarty_tpl->tpl_vars['vo']->value['infoid'];?>
)"
                      <?php if ($_smarty_tpl->tpl_vars['vo']->value['flag']==1){?> value="<?php echo $_smarty_tpl->tpl_vars['vo']->value['infoid'];?>
" checked <?php }else{ ?>value="0" <?php }?>><strong><?php echo $_smarty_tpl->tpl_vars['vo']->value['city'];?>
 <?php echo $_smarty_tpl->tpl_vars['vo']->value['address'];?>
</strong>
                     <p>&nbsp;&nbsp;&nbsp;<span>收货人姓名：<?php echo $_smarty_tpl->tpl_vars['vo']->value['uname'];?>
</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span>收货人电话：<?php echo $_smarty_tpl->tpl_vars['vo']->value['uphone'];?>
</span></p>
                 </div>
            <?php } ?>
            <input type="hidden" id="infoid" value="<?php echo $_smarty_tpl->tpl_vars['info_all']->value[0]['infoid'];?>
"/>
        </div>

		<div class="ct-top8">商品信息</div>
		<div class="ct-top9">
			<div class="ct-t9-txt1">商品</div>
			<div class="ct-t9-txt2">属性</div>
			<div class="ct-t9-txt3">购买数量</div>	
			<div class="ct-t9-txt4">小计</div>
		</div>
		<ul>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<li>
				<a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
">
					<img src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['photo'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gname'];?>
 ">
				</a>
				<div class="ct-abox1">
					<a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gname'];?>
</a>
				</div>
				 <div class="ct-txt7">
					<?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['norname'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['weight1'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['weight2'];?>
<br>
					<?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['enclosure'];?>
<br>
				</div>	
				<div class="ct-txt9">
					<input type="text" class="ct-t9-ln-txt" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['num'];?>
" readonly="true">
				</div>
				<div class="ct-txt10"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['num']*$_smarty_tpl->tpl_vars['i']->value['norminfo']['price'];?>
</span>元</div>
			</li>
		<?php } ?>
		</ul>
		<div class="ct-top10">留言</div>
		<div class="ct-top11-1">
		</div>
		<textarea class="ct-top11" id="myinfo"></textarea>
		<div class="ct-top8">付款信息</div>
		<div class="ct-top11-1"></div>
		<div class="ct-top12">支付宝</div>
		<div class="ct-top11-1"></div>
		<div class="ct-top13">
			<font color="#D0CCD0">(共 <span><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>件)</font> 商品金额：
			<span><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</span>元</br>
			总计金额：
			<font color="#F55A19"><span><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</span>元</font>
		</div>
		<div class="ct-top14">
			<div class="ct-t14-btn" onclick="postOrder()">付款</div>
		</div>
	</div>

	<div style="clear: both"></div>

	<footer id="shopDetailFooter" style="margin-top: 20px;">
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</footer>

	<div class="commonModal">
		<?php echo $_smarty_tpl->getSubTemplate ("./modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<script src="<?php echo @JS_URL;?>
ydyk.js"></script>
	<script type="text/javascript">
	function changeid(obj){
		
		console.log(obj);
		$('#infoid').val(obj);
	}
	function postInfo(){
		var uname=$('#uname').val();
		var uphone=$('#uphone').val();
		var address=$('#address').val();
		var province4=$('#province4').val();
		var city4=$('#city4').val();
		var flag=0;
		var infoid=$('#infoid').val();
		var district4=$('#district4').val();
		var city=province4+city4+district4;
		$.ajax({
			type:"post",
			url:"index.php?m=home&c=order&a=postInfo",
			data:{
				'uname':uname,
				'address':address,
				'city':city,
				'uphone':uphone,
				'flag':flag,
				'id':infoid
			},
			dataType: "json",
			success:function(res){
				if(res.num=='1'){
					$('#infoid').val(res.id)
					modal_show('系统提示','提交成功');
				}else{
					modal_show('系统提示',res.msg);
				}
				
			}
		});
		return false;
	}
	function postOrder(){
		modal_show('系统提示','正在提交订单，请稍稍等待！');
		var infoid=$('#infoid').val();
		var myinfo=$('#myinfo').val();
		$.ajax({
			type:"post",
			url:"index.php?m=home&c=order&a=postOrder",
			data:{
				'id':infoid,
				'myinfo':myinfo
			},
			dataType: "json",
			success:function(res){
				if(res.num=='1'){
					modal_show('系统提示','提交成功');
					window.location.href="index.php?m=home&c=order&a=payOrder";
				}else{
					modal_show('系统提示',res.msg);
				}
				
			}
		});
	}

	function hideAddress() {
        $('#addAdress').hide(200);
        window.location.href='index.php?m=home&c=shopcar&a=confirm';
    }
    function showAddress() {
        $('#addAdress').show(200);
    }
    $('.close').click(function () {
        $('#addAdress').hide(200);
    });
	</script>
</body>
</html><?php }} ?>