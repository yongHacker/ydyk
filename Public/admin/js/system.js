function pageInit(){
	$('.mywel').find('td').each(function(index){
		if(index%2==0){
			$(this).addClass('tdTitleBg');
		}else{
			$(this).addClass('tdBg');
		}
	});
}
function close_modal(){
	$('#myModal').modal('hide');
	$('#myModal form').addClass('hide');
	$('#submit').removeClass('disabled');
	$('#pwd1').val('');
	$('#pwd2').val('');
}
function modal_show(t,s){
	$('#submit').addClass('disabled');
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
}
function postPwd(){
	var pwd=$('#pwd').val();
	var pwd1=$('#pwd1').val();
	var uid=$('#uid').val();
	if(pwd==pwd1&&uid&&pwd){
		$.ajax({
			type:"post",
			url:"index.php?m=admin&c=system&a=updatePwd",
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
function update(id){
	$('#myModal').modal('show');
	$('#modal-body').text('');
	$('.modal-title').text('修改密码');
	$('#myModal form').removeClass('hide');
	$('#uid').val(id);
}
$(function(){
	pageInit();
});