
function close_modal(){
	$('#myModal').modal('hide');
}
function modal_show(t,s){
	$('#myModal').modal('show');
	$('#modal-body').text(s);
	$('.modal-title').text(t);
}
function dataBackupsTable(table){
	modal_show('系统提示','正在备份数据库，请耐心等待');
	$.ajax({
		type:"post",
		url:"index.php?m=admin&c=Data&a=dataBackupsTable",
		data:{
			'table':table
		},
		async:true,
		dataType: "json",
		success:function(res){
			if(res.num=='1'){
				$('#'+table).text('已备份');
			}
			$('#modal-body').html(res.msg);
			$('.modal-title').text('系统提示');
		}
	});
}

function dataResumeTable(table){
	
	modal_show('系统提示','正在还原数据，请耐心等待');
	$.ajax({
		type:"post",
		url:"index.php?m=admin&c=Data&a=dataResumeTable",
		data:{
			'table':table
		},
		async:true,
		dataType: "json",
		success:function(res){
			$('#modal-body').html(res.msg);
			$('.modal-title').text('系统提示');
		}
	});
}