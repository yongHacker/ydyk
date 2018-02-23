<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:27:19
         compiled from "E:\PHP\wamp\www\shop\APP\Home\View\home\nav.html" */ ?>
<?php /*%%SmartyHeaderCode:282765a799f27917cb8-77893742%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '509f6d24d76f768540a75553315a4d773361608d' => 
    array (
      0 => 'E:\\PHP\\wamp\\www\\shop\\APP\\Home\\View\\home\\nav.html',
      1 => 1515655656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '282765a799f27917cb8-77893742',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'uname' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799f27bb3cd',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799f27bb3cd')) {function content_5a799f27bb3cd($_smarty_tpl) {?>
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

<div id="kefu" style="display: none;z-index: 100">
    <div id=left>
        <div id="left1">
            <div id="left11" class="wenwen">
                <img src="<?php echo @IMAGES_URL;?>
pingjia.png" alt="" class="jianjian2">
            </div>

            <div id="left12">
                <img src="<?php echo @IMAGES_URL;?>
jianhao.png" alt="" class="jianjian1">
            </div>
        </div>

        <div id="left2">
            <div class="yongguang">&nbsp&nbsp您好，小点很高兴为您服务，因咨询人数较多，请您耐心等候，如未及时回复，请留下您的联系方式，我们会尽快回复您，谢谢！</div>
        </div><br>
        <div id="left3">
            <div class="shunjin1"><img src="<?php echo @IMAGES_URL;?>
xiao.png" alt=""></div>
            <div class="shunjin2"><img src="<?php echo @IMAGES_URL;?>
tupian.png" alt=""></div>
            <div class="shunjin3"><img src="<?php echo @IMAGES_URL;?>
wenjian.png" alt=""></div>
        </div>

        <div id="left4">
            <textarea  class="jianjian" name=""  cols="34" rows="4" style="border:0px"  placeholder="输入消息..."></textarea>
        </div>
        <div id="left5">
            <span class="sent">发送</span>
        </div>
        <div id="left6">
            <a href="https://qiyukf.com/"><img src="<?php echo @IMAGES_URL;?>
yu.png" alt=""></a>
        </div>
    </div>
    <div id="jianwen">
        <div id="jianwen1">
        </div>
        <span id="jianwen2">感谢您的咨询，请对我们的服务做出评价</span>
        <div id="jianwen3">
            <form action="get">
                <input type="radio" checked="checked" name="pingjia" value="pingjia">非常满意<br>
                <input type="radio" name="pingjia" value="pingjia1">满意<br>
                <input type="radio" name="pingjia" value="pingjia2">一般<br>
                <input type="radio" name="pingjia" value="pingjia3">不满意<br>
                <input type="radio" name="pingjia" value="pingjia4">非常不满意
            </form>

            <textarea name="" id="" cols="32" rows="2" placeholder="备注(选填)"></textarea>
            <div id="jianwen4">
                <span>确定</span>
            </div>
        </div>
        <div id="box1"></div>
    </div>
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
            <a href="index.php?m=home&c=center">[ 会员中心 </a>
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
<!--nav-->
 
 <script>
     // 登录/注册
     $(function () {
         // modal框居中
         var clientHeight = $('.modal').height();
         $('.modal-dialog').css({
             "marginTop":clientHeight/2-150
         });
         // 点击事件
         $('#login').click(function () {
             $('#tab-login').addClass('active').siblings().removeClass('active');
             $('#reg').removeClass('in active').prev().addClass('in active');
             $('#myLoginModal').modal({
                 keyboard:true
             });
             $('#myLoginModal').on('hidden.bs.modal',
                 function() {
                     $('#tab-login').addClass('active').siblings().removeClass('active');
                 });

         });
         $('#register').click(function () {
             $('#tab-register').addClass('active').siblings().removeClass('active');
             $('#log').removeClass('in active').next().addClass('in active');
             $('#myLoginModal').modal({
                 keyboard:true
             });
             $('#myLoginModal').on('hidden.bs.modal',
                 function() {
                     $('#tab-register').addClass('active').siblings().removeClass('active');
                 });
         });
     });
      // 导航栏
      $(function () {
          $('.band').mouseenter(function () {
              $('.band').css({
                  "border":"1px solid #fff",
              });
              $('.band-body').show();
          });
          $('.band').mouseleave(function () {
              $('.band').css({
                  "border":"0",
              });
              $('.band-body').hide();
          });

      });
      //在线客服
     $(function () {
        $('#zxkf').click(function () {
            $('#kefu').show().css({
                "position":"absolute"
            });
        });

     });
      //回到顶部
      $(function () {
          $('#return-top').click(function () {
              $('html,body').animate({scrollTop:0},500);
          });
      });
  </script>

<script>
    $(function(){
        $('.jianjian1').click(function()
        {
            $('#kefu').css('display','none');
        })
    });
    $(function(){
        $('.jianjian2').click(function(){
            $('#jianwen').css('display','block');
            $('#left').css('opacity','0.6');

        });
        $(function(){
            $('#jianwen #jianwen1').click(function(){
                $('#jianwen').css('display','none');
                $('#left').css('opacity','1.0')
            })
        })
    });
    function fs(){
        document.getElementById('yongguang').blur();
    }
    $(function () {
        $('.sent').click(function () {
            var txt=$('.jianjian').val();
            var width=txt.length*12+20;
            var str='<div class="messagebox-right">'+txt+'</div><div id="box"></div>';
            // alert(str)
            $(".yongguang").append(str);
            // alert("ljdflk")
            if(width>200)
            {
                $('.messagebox-right:last').css('width',"200px");
            }
            else
            {
                $('.messagebox-right:last').css('width',width);
            }
        })
    });

</script>
 <?php }} ?>