function rightbtn(obj) {
	    var val=$(obj).prev().val();
		if(val=='1')
		{	
			$(obj).prev().prev().css('background','url(/Public/images/shopcar1-5.png) no-repeat center');
		}	
		val=parseInt(val)+1;
		$(obj).prev().val(val);
		var prize=$(obj).parent().prev().find('span').html();
		prize=parseFloat(prize);
		val=val*prize;
		$(obj).parent().next().find('span').text(val);
		var txt=$('#ct-top6 font span').text();
		txt=parseInt(txt)+1;
		$('#ct-top6 font span').text(txt);
		var val1=$('#ct-top6>span').text();
		val1=parseFloat(val1);
		val1=val1+prize;
		$('#ct-top6>span').text(val1);
		$('#ct-top7 font span').text(val1);
		
}
function leftbtn(obj) 
{
	var val=$(obj).next().val();
	if(val=='2')
	{	
		$(obj).css('background','url(/Public/images/shopcar1-4.png) no-repeat center');
	}
	else if(val=='1'){
		return;
	}	
	val=parseInt(val)-1;
	$(obj).next().val(val);
	var prize=$(obj).parent().prev().find('span').html();
	prize=parseFloat(prize);
	val=val*prize;
	$(obj).parent().next().find('span').text(val);
	var val1=$('#ct-top6>span').text();
	val1=parseFloat(val1);
	val1=val1-prize;
	$('#ct-top6>span').text(val1);
	$('#ct-top7 font span').text(val1);
	val1=$('#ct-top6 font span').text();
	val1=parseInt(val1)-1;
	$('#ct-top6 font span').text(val1);
	
}
function blurbtn(obj) 
{
	var val=$(obj).val();
	val=parseInt(val);
	if(val>1)
	{
		$(obj).prev().css('background','url(/Public/images/shopcar1-5.png) no-repeat center');
	}
	else if(val<1)
	{
		alert("最小值为1！");
		$(obj).val(1);
		$(obj).prev().css('background','url(/Public/images/shopcar1-4.png) no-repeat center');
	}
	else
	{
		$(obj).prev().css('background','url(/Public/images/shopcar1-4.png) no-repeat center');
	}
	val=$(obj).val();
	val=parseInt(val);
	var prize=$(obj).parent().prev().find('span').text();
		prize=parseFloat(prize);
		val=val*prize;
		$(obj).parent().next().find('span').text(val);
	var count=0;
	var count1=0;
	$('.ct-t9-ln-txt').each(function() {
		var num1=$(this).val();
		var prize=$(this).parent().prev().find('span').text();
		prize=parseFloat(prize);
		num1=parseInt(num1);
		count+=num1;
		count1=count1+prize*num1;
	});
	$('#ct-top6 font span').text(count);
	$('#ct-top6>span').text(count1);
	$('#ct-top7 font span').text(count1);
}

function del(id){
	//modal_show('系统提示',id);
	$.ajax({
		type:"post",
		url:"index.php?m=home&c=Shopcar&a=del",
		data:{
			'id':id
		},
		async:true,
		dataType: "json",
		success:function(res){
			if(res.num=='1'){
				location.reload() ;
			}else{
				modal_show('系统提示','删除失败');
			}
		}
	});
}
$(function () {
	$('.ct-last').each(function () {
		$(this).click(function () {
			$(this).find('.page1').css('display','block');
		})
	});
	$('.ct-lt-ct-t3-right').each(function () {
		$(this).click(function () {
			var n=$('.ct-lt-ct-t3-right').index($(this));
			var m=$('.ct-lt-ct-t3-right').length-1;
			if(n==m)
			{
				 
				 $.ajax({
	            		type:"post",
	            		url:"index.php?m=home&c=Shopcar&a=delAll",
	            		async:true,
	            		dataType: "json",
	            		success:function(res){
	            			console.log(res);
                            location.reload() ;
	            			if(res.num=='1'){
	            				$('#shopCount').text(res.count);
	            				modal_show('系统提示',res.msg);

	            			}else{
	            				modal_show('系统提示','清空购物车失败');
	            			}
	            		}
	            	});
			}
			else
			{
				//$obj=$(this).parent().parent().parent().parent();
				//removebtn($obj);
			}
			
		})
	});
	
	$('.ct-t9-rightbtn').each(function () {
		$(this).click(function () {
			rightbtn(this);

		})
	});
	$('.ct-t9-leftbtn').each(function () {
		$(this).click(function () {
			leftbtn(this);
		})
	});
	$('.ct-t9-ln-txt').each(function () {
		$(this).blur(function () {
			blurbtn(this);
		})
	});
})
$(function () {
	var str="";
	for (var i = 0; i < 30; i++) {
		str=str+'<div class="p1-ct-t2-bx-bx-txt">'+i+'岁</div>';
	}
	str="";
	for (var i = 0; i < 100; i++) {
		str=str+'<div class="p1-ct-t2-bx-bx-txt">数字'+i+'</div>';
	}
	$('.p1-ct-t2-bx-box1').html(str);
	$('.p1-ct-t2-box').eq(0).click(function () {
		$(this).children().eq(1).css('display','block');
		$('.p1-ct-t2-box').eq(1).css('display','none');
	})
	$('.p1-ct-t2-box').eq(1).click(function () {
		$(this).children().eq(1).css('display','block');
	})
	$('.p1-ct-t2-box').eq(2).click(function () {
		$(this).children().eq(1).css('display','block');
	})
	$('.p1-ct-t2-bx-bx-txt').each(function () {
		$(this).click(function (e) {
			e.stopPropagation();
			var txt=$(this).text();
			$(this).parent().prev().text(txt);
			$(this).parent().css('display','none');	
			$('.p1-ct-t2-box').eq(1).css('display','block');			
		})
	})
	$('.p1-ct-t3-btn').eq(1).click(function () {
		$(this).css('background','url(/Public/images/page1-2.png) no-repeat left center');
		$('.p1-ct-t3-btn1').css('background','url(/Public/images/page1-4.png) no-repeat left center');
		$(this).parent().next().find('font').text('20元');
	})
	$('.p1-ct-t3-btn1').click(function () {
		$(this).css('background','url(/Public/images/page1-2.png) no-repeat left center');
		$(this).parent().next().find('font').text('40元');
		$('.p1-ct-t3-btn').eq(1).css('background','url(/Public/images/page1-4.png) no-repeat left center');
	})
	$('.ct-t4-bm-b2-btn1').each(function () {
		$(this).click(function () {
			$(this).next().css('display','block');
		})
	})
	$('.ct-lt-ct-t1-right').each(function () {
		$(this).click(function (event) {
			$(this).parent().parent().parent().css('display','none');
			  event.stopPropagation();
		})
		
	})
	$('.ct-lt-ct-t3-left').each(function () {
		$(this).click(function (event) {
			$(this).parent().parent().parent().css('display','none');
			  event.stopPropagation();
		})
		
	})
	$('#ct-t8-box1').click(function () {
		$(this).find('.page1').css('display','block');
	})
	$('.p1-ct-t4-btn2').each(function () {
		$(this).click(function () {
			var n=$('.p1-ct-t4-btn2').index($(this));
			var flag=0;
			for (var i = 0; i < $('li>#goods_id').length; i++) 
			{
				var n1=$('li>#goods_id').eq(i).val();
				n1=parseInt(n1);
				if(n1<5)
				{
					
					flag=1;
					break;
				}
			}
			if(flag==0)
			{
				addbtn(n,this);
			}
			else
			{
				    var prize=$('li>.ct-txt8>sapn').eq(i).text();
					prize=parseFloat(prize);
					var val=$('li>.ct-txt9>.ct-t9-ln-txt').eq(i).val();
					val=parseInt(val)+1;
					var sum=$('li>.ct-txt10>sapn').eq(i).text();
					sum=parseFloat(sum)+prize;
					$('li>.ct-txt10>sapn').eq(i).text(sum);
					$('li>.ct-txt9>.ct-t9-ln-txt').eq(i).val(val);
					$('li>.ct-txt9>.ct-t9-leftbtn').eq(i).css('background','url(/Public/images/shopcar1-5.png) no-repeat center');
			}

			$(this).parent().parent().parent().css('display','none');
		})
		
	})
	
	$('.p1-ct-t1-btn').each(function () {
		$(this).click(function (event) {
			$(this).parent().parent().parent().css('display','none');
			  event.stopPropagation();
		})
		
	});




})