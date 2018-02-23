$(function () {
	$('.ct-t5-b1-right').click(function () {
		$(this).find(".ct-t5-b1-rt-list").css('display','block');
	})
	$('.ct-t5-b1-rt-lt-txt').each(function () {
		$(this).click(function (event) {
			event.stopPropagation();
			var txt=$(this).text();
			$(this).parent().prev().text(txt);
			$(this).parent().css('display','none');
		})
	})
	$(function () {
		$('.ct-last').each(function () {
			$(this).click(function () {
				$(this).find('.page1').css('display','block');
			})
		})
	})
	$('.ct-lt-ct-t1-right').each(function () {	
		$(this).click(function (event) {
		event.stopPropagation();
		$(this).parent().parent().parent().css('display','none');
		})
	})
	$('.ct-lt-ct-t3-left').each(function () {	
		$(this).click(function (event) {
		event.stopPropagation();
		$(this).parent().parent().parent().css('display','none');
		})
	})
	$('.ct-lt-ct-t3-right').each(function () {	
		$(this).click(function (event) {
		event.stopPropagation();
		location.reload() ;
		})
	})
	$('.ct-t9-leftbtn').each(function () {	
		$(this).click(function (event) {
			var n=$(this).next().val();
			n=parseInt(n);
			if(n<=1)
			{
				alert("已达到最小值");
				return;
			}
			else if(n==2)
			{
				$(this).css('background','url(/Public/images/shopcar1-4.png) no-repeat center');
			}
			n--;
			$(this).next().val(n);
			var prize=$('#prize').val();
			prize=parseFloat(prize);
			var count=$(this).parent().next().find('span').text();
			count=parseFloat(count)-prize;
			$(this).parent().next().find('span').text(count);
			var num=$(".ct-top13>font>span").eq(0).text();
			num=parseInt(num)-1;
			$(".ct-top13>font>span").eq(0).text(num);
			var sum=$(".ct-top13>span").text();
			sum=parseFloat(sum)-prize;	
			$(".ct-top13>span").text(sum);
			$(".ct-top13>font>span").eq(1).text(sum);
		})
	})
	$('.ct-t9-rightbtn').each(function () {	
		$(this).click(function (event) {
			var n=$(this).prev().val();
			n=parseInt(n)+1;
			$(this).prev().val(n);
			var prize=$('#prize').val();
			prize=parseFloat(prize);
			var count=$(this).parent().next().find('span').text();
			count=parseFloat(count)+prize;
			$(this).parent().next().find('span').text(count);
			var num=$(".ct-top13>font>span").eq(0).text();
			num=parseInt(num)+1;
			$(".ct-top13>font>span").eq(0).text(num);
			var sum=$(".ct-top13>span").text();
			sum=parseFloat(sum)+prize;	
			$(".ct-top13>span").text(sum);
			$(".ct-top13>font>span").eq(1).text(sum);
			$(this).prev().prev().css('background','url(/Public/images/shopcar1-5.png) no-repeat center');
		})
	})
	$(".ct-t5-b7-right").click(function () {
		$('.ct-top5').css('display','none');
		$('.ct-top5-1').css('display','block');
		})
	$(".ct-top5-1").click(function () {
		$('.ct-top5').css('display','block');
		$(this).css('display','none');
		})

})