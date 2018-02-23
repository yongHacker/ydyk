<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:27:19
         compiled from "./APP/Home/View\home\shopcar.html" */ ?>
<?php /*%%SmartyHeaderCode:138955a799f273cc3f1-46222316%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9efc8380f9ea798a849876f32050de37208a44f9' => 
    array (
      0 => './APP/Home/View\\home\\shopcar.html',
      1 => 1515576366,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '138955a799f273cc3f1-46222316',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shop' => 0,
    'i' => 0,
    'count' => 0,
    'amount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f279082b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f279082b')) {function content_5a799f279082b($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<title>购物车</title>
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
shopcar1.css">
	<script type="text/javascript" src="<?php echo @JS_URL;?>
shopcar1.js"></script>
</head>
<body>

	<!-- 头部导航条位置 -->
	<header id="shopDetailHead" class="shopDetail-nav" style="padding-top: 35px">
		<?php echo $_smarty_tpl->getSubTemplate ("./nav.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</header>
	<!-- 结束 -->

	<div id="cnt" style="height: 1350px;">
		<div id="ct-link1"><a href="">首页</a>>购物车</div>
		<div id="ct-top1">
			<div class="ct-t1-txt"><font color="#FF5000">1.加入购物车</font></div>
			<div class="ct-t1-txt">2.填写核对订单信息</div>
			<div class="ct-t1-txt">3.完成订单</div>
		</div><br>
		<div id="ct-top2">我的购物车</div>
		<div id="ct-top3">
			<div class="ct-t3-txt1">商品 </div>
			<div class="ct-t3-txt2">属性 </div>
			<div class="ct-t3-txt3">单价</div>
			<div class="ct-t3-txt4">购买数量</div>
			<div class="ct-t3-txt5">小计</div>
			<div class="ct-t3-txt6">操作</div>
		</div>
		<ul>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['shop']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<li id="goods_id<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
" class="goods_id">
				<a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
">
				<img src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['photo'];?>
"
				 title="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gname'];?>
"></a>
				<div class="ct-abox1">
					<a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
"
					 title="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gname'];?>
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
                    <input type="hidden" class="ct-t9-gid" name="gid"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
">
                    <input type="hidden" class="ct-t9-gid noid" name="noid"  value="<?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['normid'];?>
">
				</div>
				<div class="ct-txt8"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['price'];?>
</span>元</div>



				<div class="ct-txt9">
					<div class="ct-t9-leftbtn"></div>
					<input type="text" class="ct-t9-ln-txt nums"
					 value="<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['num'];?>
" />
					<div class="ct-t9-rightbtn"></div>
				</div>
				<div class="ct-txt10"><span><?php echo $_smarty_tpl->tpl_vars['i']->value['norminfo']['price'];?>
</span>元</div>
				<div class="ct-last">
					<div class="page1">
						<div class="ct-lt-cnt">
							<div class="ct-lt-ct-top1">
								<span>提示</span>
								<div class="ct-lt-ct-t1-right"></div>
							</div>
							<div class="ct-lt-ct-top2">
								<span>确定要删除“<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gname'];?>
”吗？</span>
							</div>
							<div class="ct-lt-ct-top3">
								<div class="ct-lt-ct-t3-left">取消</div>
								<div class="ct-lt-ct-t3-right"
								 onclick="del(<?php echo $_smarty_tpl->tpl_vars['i']->value['goodsinfo']['gid'];?>
)">确定</div>
							</div>
						</div>
					</div>
				</div>
			</li>
			<?php } ?>
		</ul>
		<div id='ct-top4'>
			<div id="ct-t4-top">添加免费配件</div>
			<div id="ct-t4-bottom">
				<div id="ct-t4-bm-box1">添加付费配件</div>
				<div class="ct-t4-bm-box2">
					<a href=""><img src="<?php echo @IMAGES_URL;?>
shopcar1-7.jpg"></a>
					<a href="">儿童餐位小包</a>
					<div class="ct-t4-bm-b2-btn1"></div>
					<div class="page1">
						<div class="p1-cnt">
							<div class="p1-ct-top1">
								<span>提醒</span>
								<div class="p1-ct-t1-btn"></div>		
							</div>
							<div class="p1-ct-top2">
								<font size="4">请问您是否需要购买额外儿童餐位小包（一位）？</font>
							</div>
							<div class="p1-ct-top2">请选择规格:</div>
							<div class="p1-ct-top3">
								<div class="p1-ct-t3-btn">一位</div>
							</div>
							<div class="p1-ct-top2">金额： <font color="#F55A19">30元</font></div>
							<div class="p1-ct-top4">
								<div class="p1-ct-t4-btn1">点金购买</div>
								<div class="p1-ct-t4-btn2">现金购买</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ct-t4-bm-box2">
					<a href=""><img src="<?php echo @IMAGES_URL;?>
shopcar1-8.jpg"></a>
					<a href="">生日场景大礼包</a>
					<div class="ct-t4-bm-b2-btn1"></div>
					<div class="page1">
						<div class="p1-cnt">
							<div class="p1-ct-top1">
								<span>提醒</span>
								<div class="p1-ct-t1-btn"></div>		
							</div>
							<div class="p1-ct-top2">
								<font size="4">请问您是否需要购买额外生日场景大礼包（含五套餐位小包）？</font>
							</div>
							<div class="p1-ct-top2">
								<span class="p1-ct-t2-span">请选择布场要求（布场费50元，限时特惠0元）:</span>
								<div class="p1-ct-t2-box">
									<span>不需要布场</span>
									<div class="p1-ct-t2-bx-box">
										<div class="p1-ct-t2-bx-bx-txt">不需要布场</div>
										<div class="p1-ct-t2-bx-bx-txt">需要布场</div>
									</div>
								</div>
							</div>
							<div class="p1-ct-top2">
								<span class="p1-ct-t2-span">请选择寿星年龄（送LED灯数字蜡烛）:</span>
								<div class="p1-ct-t2-box">
									<span>0岁</span>
									<div class="p1-ct-t2-bx-box1">
									</div>
								</div>
							</div>
							<div class="p1-ct-top2">金额：<font color="#F55A19" size="3">220元</font></div>
							<div class="p1-ct-top4">
								<div class="p1-ct-t4-btn1">点金购买</div>
								<div class="p1-ct-t4-btn2">现金购买</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ct-t4-bm-box2">
					<a href=""><img src="<?php echo @IMAGES_URL;?>
shopcar1-9.jpg"></a>
					<a href="">LED数字蜡烛</a>
					<div class="ct-t4-bm-b2-btn1"></div>
					<div class="page1">
						<div class="p1-cnt1">
							<div class="p1-ct-top1">
								<span>提醒</span>
								<div class="p1-ct-t1-btn"></div>		
							</div>
							<div class="p1-ct-top2">
								<font size="4">请问您是否需要购买额外LED数字蜡烛？</font>
							</div>
							<div class="p1-ct-top2">
								<span class="p1-ct-t2-span1">请选择数字:</span>
								<div class="p1-ct-t2-box">
									<span>数字0</span>
									<div class="p1-ct-t2-bx-box1"></div>
								</div></br>
								<div class="p1-ct-top2">
									金额：<font color="#F55A19" size="3">5元</font>
								</div>
							</div>
							<div class="p1-ct-top4">
								<div class="p1-ct-t4-btn1">点金购买</div>
								<div class="p1-ct-t4-btn2">现金购买</div>
							</div>
						</div>
					</div>
				</div>
				<div class="ct-t4-bm-box2">
					<a href=""><img src="<?php echo @IMAGES_URL;?>
shopcar1-10.jpg"></a>
					<a href="">1叉1碟</a>
					<div class="ct-t4-bm-b2-btn1"></div>
					<div class="page1">
						<div class="p1-cnt2">
							<div class="p1-ct-top1">
								<span>提醒</span>
								<div class="p1-ct-t1-btn"></div>		
							</div>
							<div class="p1-ct-top2">
								<font size="4">请问您是否需要购买额外1叉1碟？</font>
							</div>
							<div class="p1-ct-top2">
									金额：<font color="#F55A19" size="3">1元</font>
								</div>
								<div class="p1-ct-top4">
									<div class="p1-ct-t4-btn1">点金购买</div>
									<div class="p1-ct-t4-btn2">现金购买</div>
								</div>	
						</div>
					</div>
				</div>
				<div class="ct-t4-bm-box2">
					<a href=""><img src="<?php echo @IMAGES_URL;?>
shopcar1-11.jpg"></a>
					<a href="">保温包</a>
					<div class="ct-t4-bm-b2-btn1"></div>
				</div>
			</div>
		<div id="ct-top5">※　温馨提示 : 付费配件可以用点金兑换 ;</div>
		<div id="ct-top6">
			<font color="#ccc">(共<span id="shopCount"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>件)</font> 
			商品金额：<span id="amount"><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</span>元
		</div>	
		<div id="ct-top7">总计金额：
			<font size="3" color="#F55A19"><span><?php echo $_smarty_tpl->tpl_vars['amount']->value;?>
</span>元</font>
		</div>
		<div id="ct-top8">
			<div id="ct-t8-box1">
				<span>清空购物车</span>
				<div class="page1">
						<div class="ct-lt-cnt">
							<div class="ct-lt-ct-top1">
								<span>提示</span>
								<div class="ct-lt-ct-t1-right"></div>
							</div>
							<div class="ct-lt-ct-top2">
								<span>确定要清空购物车吗？</span>
							</div>
							<div class="ct-lt-ct-top3">
								<div class="ct-lt-ct-t3-left">取消</div>
								<div class="ct-lt-ct-t3-right">确定</div>
							</div>
						</div>
				</div>
			</div>
			<div id="ct-t8-box2"><a href="javascript:void (0)" onclick="getarray()">开始结算</a></div>
			<div id="ct-t8-box3"><a href="index.php">继续购物</a></div>
		</div>
		<div id="ct-top9">
			<font color="#F55A19" size="3">※ 温馨提示 :</font><br>
			<span>3-5人份： 约13x13cm 1刀+5碟+5叉 英制规格1磅</span><br>
			<span>6-10人份： 约17x17cm 1刀+10碟+10叉 英制规格2磅</span><br>
			<span>11-15人份：约23x23cm 1刀+15碟+15叉 英制规格3磅</span><br>
			<span>16-25人份：约30x30cm 1刀+25碟+25叉 英制规格5磅</span><br>
			<span>订购5磅以上规格的蛋糕请与客服人员联系，订购电话：</span>
			<font color="#F55A19" size="2">4006–517-217</font>
		</div>
	</div>
	</div>

	<div style="clear: both;height: 400px;"></div>

	<footer id="shopDetailFooter">
		<?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</footer>

	<div class="commonModal">
		<?php echo $_smarty_tpl->getSubTemplate ("./modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</div>
	<script src="<?php echo @JS_URL;?>
ydyk.js"></script>
    
    <script>
        function goodsNum(gid,nid,obj){
            var num=$(obj).val();
            console.log(gid+nid+num);
        }

        function getarray() {
            var orderlist=[];
            var i=0;
            $('.goods_id').each(function () {
                var gid=$(this).find('.ct-t9-gid').val();
                var num=$(this).find('.nums').val();
                var noid=$(this).find('.noid').val();
                /*
                orderlist[i]=new Array();
                orderlist[i]['gid']=gid;
                orderlist[i]['num']=num;
                orderlist[i]['normid']=noid;
                i++;
                */
                var order=[];
                order[0]=gid;
                order[1]=noid;
                order[2]=num;
                orderlist[i]=order;
                i++;
            });
            //var json=orderlist;
            orderlist=JSON.stringify(orderlist);
            console.log(orderlist);
            $.ajax({
                type:"post",
                url:"index.php?m=home&c=shopcar&a=shopcar_ajax",
                data:{"orderlist":orderlist},
                dataType: "json",
                success:function(res){
                    if(res.num=='1'){
                        modal_show('系统提示','提交成功');
                        window.location.href="index.php?m=home&c=shopcar&a=confirm";
                    }else{
                        modal_show('系统提示',res.msg);
                    }

                }
            });

        }

        
    </script>
</body>
</html><?php }} ?>