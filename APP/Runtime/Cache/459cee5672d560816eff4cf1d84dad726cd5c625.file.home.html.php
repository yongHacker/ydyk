<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:25:35
         compiled from "./APP/Home/View\home\home.html" */ ?>
<?php /*%%SmartyHeaderCode:31515a799ebfc48730-44284402%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '459cee5672d560816eff4cf1d84dad726cd5c625' => 
    array (
      0 => './APP/Home/View\\home\\home.html',
      1 => 1515555136,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31515a799ebfc48730-44284402',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ad' => 0,
    'i' => 0,
    'count' => 0,
    'uname' => 0,
    'goodsad' => 0,
    'goods' => 0,
    'today' => 0,
    'nextday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799ec01f7e5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799ec01f7e5')) {function content_5a799ec01f7e5($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>my壹点壹客</title>
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

</head>
<body>
    <!--大背景轮播-->
    <div id="slideshow">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <img  src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" alt="">
        <?php } ?>
    </div>

    <!--slide-menu-->
    <div class="slide-menu">
        <a href="index.php?m=home&c=shopcar&a=shopcar">
            <i class="fa fa-shopping-cart"></i>
            <p>购物车</p>
            <span class="badge" id="shopCount"><?php echo $_smarty_tpl->tpl_vars['count']->value;?>
</span>
        </a>
        <a href="index.php?m=home&c=login&a=register">
            <i class="slider-icon03"></i>
            <p>新人红包</p>
        </a>
        <a href="javascript:void(0);" id="return-top">
            <i class="fa fa-arrow-circle-o-up"></i>
            <p>回顶部</p>
        </a>
    </div>

    <!--nav-top-->
    <div class="nav-top navbar-fixed-top container-fluid">
        <div class="container clearfix">
            <div class="pull-left">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>深圳</span>
                <span class="caret" style="font-size: 10px"></span>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <i class="fa fa-user-o"></i>
                <span class="user">Hi , 欢迎访问壹点壹客</span>
                <?php if (!$_smarty_tpl->tpl_vars['uname']->value){?>
                [ <a href="javascript:void(0);" id="login" style="color: #DD541B;font-weight: bold">登录</a>&nbsp|&nbsp
                <a href="javascript:void(0);" id="register">注册</a> ] 
                <?php }else{ ?>
                &nbsp;&nbsp;<span style="color: #EE5719"><?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>&nbsp;&nbsp;
                <a href="index.php?m=home&c=center&a=index">[ 会员中心 </a>
                &nbsp|&nbsp<a href="index.php?m=home&c=user&a=del" > 退出登录 </a> ]
                <?php }?>
            </div>
            <div class="pull-right">
                <span class="phone">客服电话：4006-517-217 / 0755-36885360 </span>
                &nbsp;&nbsp;|&nbsp;&nbsp;
                <i class="fa fa-question-circle"></i>
                <a href="index.php?m=home&a=guide"><span>订购指南</span></a>
                <i class="fa fa-navicon"></i>
                <a href="index.php?m=home&a=web"><span>网站导航</span></a>
            </div>
        </div>
    </div>
    <!--nav-top-->

    <!--nav-->
    <nav class="navbar">
        <div class="container">
            <div class="navbar-header">
                <a href="index.html"><img src="<?php echo @IMAGES_URL;?>
logo.png" width="150" height="40" alt="logo"></a>
            </div>
            <div>
                <ul class="nav navbar-nav" id="nav-ul">
                    <li><a href="index.php">HOME<br>首页</a></li>
                    <li><a href="index.php?m=home&c=brand&a=cakeList&id=1">BIRTHDAY CAKE<br>生日蛋糕</a></li>
                    <li><a href="index.php?m=home&c=brand&a=showEtong">BIRTHDAY PARTY<br>儿童生日会</a></li>
                    <li><a href="index.php?m=home&c=brand&a=lipinList&id=6">SURROUNDING<br>生日周边</a></li>
                    <li>
                        <div class="band">
                            <a href="index.php?m=home&c=brand&a=brandStory" class="band-story" id="band-story">BRAND STORY<br>品牌故事</a>
                            <div class="band-body" style="display: none;">
                                <a href="index.php?m=home&c=brand&a=brandStory">品牌介绍</a>
                                <a href="index.php?m=home&c=brand&a=brandIdea">品牌理念</a>
                                <a href="index.php?m=home&c=brand&a=brandTrip">原料之旅</a>
                            </div>
                        </div>
                    </li>
                    <li><div class="garden"><a href="http://www.1date1dream.com/">家庭烘焙教师</a> | <a href="http://www.1date1bouquet.com/">散漫后花园</a></div></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--nav-->

    <!--轮播-->
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goodsad']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
        	<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration']==1){?>
        	<div class="item active">
                <a href="javascript:void(0);">
                	<img src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" alt="photo">
                </a>
            </div>
            <?php }else{ ?>
            <div class="item">
                <a href="javascript:void(0);">
                	<img src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" alt="photo">
                </a>
            </div>
            <?php }?>
        <?php } ?>
        </div>
    </div>
    <!--轮播-->

    <!--cate-->
    <div class="cate">
        <div class="cate-item">
            <img class="cate-img" src="<?php echo @IMAGES_URL;?>
animate-img01.png" alt="">
            <div class="cate-item-text">
                <a href="index.php?m=home&c=brand&a=cakeList&id=1">生日蛋糕</a>
                <p>Birthday Cake</p>
            </div>
        </div>
        <div class="cate-item">
            <img class="cate-img" src="<?php echo @IMAGES_URL;?>
animate-img02.png" alt="">
            <div class="cate-item-text">
                <a href="index.php?m=home&c=brand&a=showEtong">生日派对</a>
                <p>Birthday Party</p>
            </div>
        </div>
        <div class="cate-item">
            <img class="cate-img" src="<?php echo @IMAGES_URL;?>
animate-img03.png" alt="">
            <div class="cate-item-text">
                <a href="index.php?m=home&c=brand&a=lipinList">生日周边</a>
                <p>Birthday Material</p>
            </div>
        </div>
    </div>
    <!--cate-->
	
    <!--products-->
    <div class="products">
        <div class="title">
            <h3>人气经典</h3>
            <p>Popular classic recommend</p>
        </div>
        <div class="container" id="products-group">
        <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['goods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value){
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
            <div class="products-item">
                <a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
">
                	<img src="<?php echo @upload_url;?>
<?php echo $_smarty_tpl->tpl_vars['i']->value['photo'];?>
" width="320px" height="220px" alt="">
                </a>
                <div class="shopInfo">
                    <a href="index.php?m=home&c=goods&a=detail&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
"
                    	 style="color:#885F3F;font-size: 16px;"><?php echo $_smarty_tpl->tpl_vars['i']->value['gname'];?>
</a>
                    <p style="color:#FF6600">配送日期:<?php echo $_smarty_tpl->tpl_vars['today']->value;?>
至<?php echo $_smarty_tpl->tpl_vars['nextday']->value;?>
</p>
                    <p style="color:#A5A5A5"><?php echo $_smarty_tpl->tpl_vars['i']->value['taste'];?>
</p>
                    <button class="addCar btn" onclick="addcar(<?php echo $_smarty_tpl->tpl_vars['i']->value['gid'];?>
)">
                    	<i class="fa fa-shopping-cart"></i> 加入购物车</button>
                </div>
            </div>
        <?php } ?>
          
        </div>
    </div>
    <!--products-->

    <!--footer-->
    <?php echo $_smarty_tpl->getSubTemplate ("./footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <!--footer-->

    <!--modal-->
    <?php echo $_smarty_tpl->getSubTemplate ("./modal.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<script src="<?php echo @JS_URL;?>
ydyk.js"></script>

<script type="text/javascript">

function addcar(id){
	
	$.ajax({
		type:"post",
		url:"index.php?m=home&c=Shopcar&a=addCar",
		data:{
			'gid':id,
			'normid':0,
			'num':1
		},
		async:true,
		dataType: "json",
		success:function(res){
			if(res.num=='1'){
				$('#shopCount').text(res.count);
				modal_show('系统提示',res.msg);
			}else if(res.num=='0'){
				modal_show('系统提示',res.msg);
			}else{
				modal_show('系统提示','加入购物车失败');
			}
		}
	});
}
</script>
</body>
</html>
<?php }} ?>