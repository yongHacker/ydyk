
function close_modal(){
	$('#myModal').modal('hide');
}
function modal_show(t,s){
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
}
function changeRule(id,obj){
	
	$.ajax({
		type:"post",
		url:"index.php?m=admin&c=power&a=changeStatus",
		data:{
			'id':id
		},
		async:true,
		dataType: "json",
		success:function(res){
			if(res.num=='1'){
				if(res.status=='1'){
					$('#rule'+id).text('已开启');
					$(obj).text('关闭权限');
				}else{
					$('#rule'+id).text('已关闭');
					$(obj).text('开启权限');
				}
			}
			modal_show('系统提示',res.msg);
		}
	});
}
