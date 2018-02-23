function closeWell(id){
	//console.log(id);
	var span=$('#'+id).children('div');
	if(span.is(':visible')){
		//span.hide('');
		$('#'+id+' i').removeClass('glyphicon-minus');
		$('#'+id+' i').addClass('glyphicon-plus');
	}else{
		//span.show('');
		$('#'+id+' i').addClass('glyphicon-minus');
		$('#'+id+' i').removeClass('glyphicon-plus');
	}
	span.toggle(800);
}

function reimg(){
	var img = document.getElementById("img");  
    img.src = "index.php?m=admin&c=login&a=checkImg?rnd=" + Math.random();  
}   

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

function updateAdminCheck(){
	var uname=$.trim($('#uname').val());
	var email=$.trim($('#email').val());
	var pwd=$('#pwd').val();
	var pwd1=$('#pwd1').val();
	if(uname==''){
		modal_show('系统提示','请输入用户名');
		return false;
	}else if(email==''){
		modal_show('系统提示','请输入电子邮箱');
		return false;
	}else if(pwd==''){
		modal_show('系统提示','请输入密码');
		return false;
	}else if(pwd1==''){
		modal_show('系统提示','请输入确认密码');
		return false;
	}else if(pwd!=pwd1){
		modal_show('系统提示','两次输入密码不一致');
		return false;
	}
	
	return true;
}


function loginCheck(){
	var uname=$.trim($('#uname').val());
	var check=$.trim($('#check').val());
	var pwd=$('#pwd').val();
	if(uname==''){
		modal_show('系统提示','请输入用户名');
		return false;
	}else if(pwd==''){
		modal_show('系统提示','请输入密码');
		return false;
	}else if(check==''){
		modal_show('系统提示','请输入验证码');
		return false;
	}
	return true;
}