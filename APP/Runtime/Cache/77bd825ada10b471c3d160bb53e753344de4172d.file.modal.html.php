<?php /* Smarty version Smarty-3.1.6, created on 2018-02-06 20:25:36
         compiled from "E:\PHP\wamp\www\shop\APP\Home\View\home\modal.html" */ ?>
<?php /*%%SmartyHeaderCode:104695a799ec0251be5-06791589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77bd825ada10b471c3d160bb53e753344de4172d' => 
    array (
      0 => 'E:\\PHP\\wamp\\www\\shop\\APP\\Home\\View\\home\\modal.html',
      1 => 1515659104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104695a799ec0251be5-06791589',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_5a799ec0497cf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a799ec0497cf')) {function content_5a799ec0497cf($_smarty_tpl) {?><!--modal-->
<div class="modal fade" id="myLoginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                	<i class="fa fa-close"></i></button>
                <ul id="myTab" class="nav nav-tabs">
                    <!--login_tab-->
                    <li class="active" id="tab-login">
                        <a href="#log" data-toggle="tab" >
                            	账号登录
                        </a>
                    </li>
                    <!--register_tab-->
                    <li id="tab-register"><a href="#reg" data-toggle="tab" >快捷登录(注册)</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <!--login页面-->
                    <div class="tab-pane fade in active" id="log">
                        <form class="form-horizontal loginForm" role="form" onsubmit="return login()">
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <input type="number" class="form-control"
                                    required="required" oninvalid="setCustomValidity('请输入手机号/邮箱/用户名')"
			          				oninput="setCustomValidity('')"
			          				id="uname" placeholder="请输入手机号/用户名">
                                    <span class="help-block pull-right"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <input type="password" class="form-control"
                                    required="required" oninvalid="setCustomValidity('请输入登录密码')"
			          				oninput="setCustomValidity('')"
                                     id="pwd" placeholder="请输入登录密码"/>
                                    <span class="help-block pull-right"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <a href="" class="pull-left">忘记密码</a>
                                    <a href="index.php?m=home&c=login&a=register" 
                                    	class="pull-right">注册新用户</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <button type="submit" class="btn btn-default" onclick="is_phone()">登录</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!--login页面-->
                    <!--registe页面-->
                    <div class="tab-pane fade" id="reg">
                        <form class="form-horizontal registerForm" role="form" onsubmit="return register()">
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <input type="number" class="form-control"
                                    required="required" oninvalid="setCustomValidity('请输入手机号')"
			          				oninput="setCustomValidity('')"
                                     id="uname1" placeholder="请输入手机号">
                                    <span class="help-block pull-right"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <input type="password" class="form-control"
                                    required="required" oninvalid="setCustomValidity('请输入登录密码')"
			          				oninput="setCustomValidity('')"
                                     id="pwd1" placeholder="请输入登录密码"/>
                                    <span class="help-block pull-right"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-4 col-xs-offset-2">
                                    <input type="text" class="form-control" 
                                    required="required" oninvalid="setCustomValidity('请输入验证码')"
			          				oninput="setCustomValidity('')"
                                    id="code" placeholder="请输入图形验证码">
                                    <span class="help-block pull-right"></span>
                                </div>
                                <div class="col-xs-3">
                                    <img src="index.php?m=admin&c=login&a=checkImg" 
						      		onclick="this.src='index.php?m=admin&c=login&a=checkImg&t='+Math.random()"
						      		class="img-responsive" style="height: 37px;" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <a href="index.php?m=home&c=login&a=register"
                                     class="pull-left">注册有礼</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-7 col-xs-offset-2">
                                    <button type="submit" class="btn btn-default">登录</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--registe页面-->
                </div>

            </div><!-- /.modal-body -->

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
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


<script type="text/javascript">
function myclose(){
	$('#myLoginModal').modal('hide');
}
function close_modal(){
	$('#myModal').modal('hide');
}
function modal_show(t,s){
	myclose();
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
}
function login(){
	var uname=$('#uname').val();
	var pwd=$('#pwd').val();
	$.ajax({
		type:"post",
		url:"index.php?m=home&c=user&a=login",
		data:{
			'uname':uname,
			'pwd':pwd
		},
		dataType: "json",
		success:function(res){
			modal_show('系统提示',res.msg);
			if(res.num=='1'){
				window.location.reload();
			}
		}
	});
	return false;
}
function register(){
	var uname=$('#uname1').val();
	var pwd=$('#pwd1').val();
	var check=$('#code').val();
	$.ajax({
		type:"post",
		url:"index.php?m=home&c=user&a=register",
		data:{
			'uname':uname,
			'pwd':pwd,
			'check':check
		},
		dataType: "json",
		success:function(res){
			modal_show('系统提示',res.msg);
			if(res.num=='1'){
				window.location.reload();
			}
		}
	});
	return false;
}

$(function () {

    $('#uname').keyup(function () {
        if($(this).val()==''){
            $(this).next().text('用户名不能为空').css('color','red');
        }
       if($(this).val().length!=11){
           $(this).next().text('手机格式不正确').css('color','red');
       }else{
           $(this).next().text('手机格式正确').css('color','green');
       }
    });
    $('#pwd').keyup(function () {
        if($(this).val().length<6 || $(this).val().length>12){
            $(this).next().text('密码要求6~12位').css('color','red');
        }else{
            $(this).next().text('密码格式正确').css('color','green');
        }
    });

    $('#uname1').keyup(function () {
        console.log($(this).val());
        if($(this).val()==''){
            $(this).next().text('用户名不能为空').css('color','red');
        }
        if($(this).val().length!=11){
            $(this).next().text('手机格式不正确').css('color','red');
        }else{
            $(this).next().text('手机格式正确').css('color','green');
        }
    });
    $('#pwd1').keyup(function () {
        if($(this).val().length<6 || $(this).val().length>12){
            $(this).next().text('密码要求6~12位').css('color','red');
        }else{
            $(this).next().text('密码格式正确').css('color','green');
        }
    });
    $('#code').keyup(function () {
        if($(this).val().length!=3){
            $(this).next().text('请输入3位验证码').css('color','red');
        }else{
            $.ajax({
                type:'post',
                url:'index.php?m=admin&c=login&a=ajax_code',
                data:{code:$('#code').val()},
                success:function (result) {
                    if(result==1){
                        $('#code').next().text('验证码正确').css('color','green');
                    }else{
                        $('#code').next().text('验证码错误').css('color','red');
                    }
                }
            });
            $(this).next().text('');
        }
    });
});

function is_phone() {
    var phone = $("#uname1").val();
    var flag = false;
    var message = "";
    var myreg = /^(((13[0-9]{1})|(14[0-9]{1})|(17[0]{1})|(15[0-3]{1})|(15[5-9]{1})|(18[0-9]{1}))+\d{8})$/;
    if(phone == ''){
        message = "手机号码不能为空！";
    }else if(phone.length !=11){
        message = "请输入有效的手机号码！";
    }else if(!myreg.test(phone)){
        message = "此手机号码无效！";
    }else{
        flag = true;
    }

    if(flag==false){
        alert(message);
        window.history.back();
    }
}
</script>
<?php }} ?>