<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:28:36
         compiled from "./APP/Home/View\common\Header.html" */ ?>
<?php /*%%SmartyHeaderCode:96615a799f749d8ca3-16992756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a061c81b9bf115af8b7a2368bcf5bf6834effa1' => 
    array (
      0 => './APP/Home/View\\common\\Header.html',
      1 => 1515577650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96615a799f749d8ca3-16992756',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'uname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f74a944d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f74a944d')) {function content_5a799f74a944d($_smarty_tpl) {?>

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
            [ <a href="javascript:void(0);" id="login" style="color: #DD541B;font-weight: bold">登录</a>&nbsp|&nbsp<a href="javascript:void(0);" id="register">注册</a> ] <a href="<?php echo U('Center/index');?>
">[ 会员中心 ]</a>
            <?php }else{ ?>
             &nbsp; &nbsp;<a href="javascript:void(0);" style="color: #DD541B;font-weight: bold"> <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
 </a>&nbsp|&nbsp<a href="<?php echo U('User/del');?>
" > 退出登录 </a> ] <a href="<?php echo U('Center/index');?>
"> 设置 </a>
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
            <a href="index.php"><img src="/Public/images/logo.png" width="150" height="40" alt="logo" id="nav-logo"></a>
        </div>
        <div>
            <ul class="nav navbar-nav" id="nav-ul">
                <li><a href="index.php">HOME<br>首页</a></li>
                <li><a href="index.php?m=home&c=brand&a=cakeList&id=1">BIRTHDAY CAKE<br>生日蛋糕</a></li>
                <li><a href="index.php?m=home&c=brand&a=showEtong">BIRTHDAY PARTY<br>儿童生日会</a></li>
                <li><a href="index.php?m=home&c=brand&a=lipinList">SURROUNDING<br>生日周边</a></li>
                <li>
                    <div class="band" style="position:relative;z-index: 200">
                        <a href="index.php?m=home&c=brand&a=brandStory"
                           class="band-story" id="band-story">BRAND STORY<br>品牌故事</a>
                        <div class="band-body" style="display: none;position: relative;">
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
<!--nav--><?php }} ?>