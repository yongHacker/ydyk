
var topBar={
	'index':{
		'all':{
			'icon':"/Public/admin/images/all.png",
			'name':'概览'
		}
	},
	'system':{
		/*
		'set':{
			'icon':'/Public/admin/images/set.png',
			'name':'设置'
		},
		*/
		'user':{
			'icon':'/Public/admin/images/account.png',
			'name':'会员'
		},
		'ad':{
			'icon':'/Public/admin/images/ad.png',
			'name':'广告'
		},
		/*
		'article':{
			'icon':'/Public/admin/images/article.png',
			'name':'文章'
		},
		*/
		'power':{
			'icon':'/Public/admin/images/lock.png',
			'name':'权限'
		},
		'data':{
			'icon':'/Public/admin/images/sql.png',
			'name':'数据'
		}
	},
	'shop':{
		'goods':{
			'icon':"/Public/admin/images/goods.png",
			'name':'商品'
		},
		'order':{
			'icon':"/Public/admin/images/order.png",
			'name':'订单'
		},
		/*
		'sell':{
			'icon':'/Public/admin/images/sell.png',
			'name':'促销'
		},
		
		'charts':{
			'icon':'/Public/admin/images/charts.png',
			'name':'统计'
		}
		*/
	}
};
var miniMenu={
	'all':[
		{
			'name':'系统后台',
			'url':'index.php?m=admin&c=system&a=index'
		}
	],
	/*
	'set':[
		{
			'name':'商城设置',
			'url':'shopSet.html'
		},
		{
			'name':'地区&配送',
			'url':'shopAdress.html'
		},
		{
			'name':'短信模板',
			'url':'shopSMS.html'
		},
		{
			'name':'自定义导航栏',
			'url':'shopBars.html'
		},
		{
			'name':'友情链接',
			'url':'friendLink.html'
		}
	],
	*/
	'user':[
		{
			'name':'会员列表',
			'url':'index.php?m=admin&c=user&a=userList'
		},

		{
			'name':'地址列表',
			'url':'index.php?m=admin&c=userinfo&a=addressList'
		},

	],
	'ad':[
		{
			'name':'广告列表',
			'url':'index.php?m=admin&c=ad&a=adList'
		}
	],
	'article':[
		{
			'name':'文章列表',
			'url':'articleList.html'
		},
		{
			'name':'文章分类',
			'url':'articleSort.html'
		}
	],
	'power':[
		{
			'name':'管理员列表',
			'url':'index.php?m=admin&c=admin&a=adminList'
		},
		{
			'name':'角色管理',
			'url':'index.php?m=admin&c=adminsort&a=sortList'
		},
		{
			'name':'权限资源列表',
			'url':'index.php?m=admin&c=power&a=powerList'
		},
		{
			'name':'登录日志',
			'url':'index.php?m=admin&c=admin&a=getIPs'
		}
	],
	'data':[
		{
			'name':'数据备份',
			'url':'index.php?m=admin&c=Data&a=dataBackups'
		},
		{
			'name':'数据恢复',
			'url':'index.php?m=admin&c=Data&a=dataResume'
		}
	],
	'goods':[
		{
			'name':'商品列表',
			'url':'index.php?m=admin&c=goods&a=goodsList&state=0'
		},
		{
			'name':'商品分类',
			'url':'index.php?m=admin&c=sort&a=sortList'
		},
		{
			'name':'商品规格',
			'url':'index.php?m=admin&c=spec&a=specList'
		}
	],
	'order':[
		{
			'name':'订单列表',
			'url':'index.php?m=admin&c=order&a=orderList&state=all'
		},
		/*
		{
			'name':'退款单',
			'url':'refundList.html'
		},
		{
			'name':'售后退货',
			'url':'orderReturn .html'
		}
		*/
	],
	'sell':[
		{
			'name':'优惠促销',
			'url':'sellList.html'
		},
		{
			'name':'优惠券',
			'url':'couponList.html'
		}
	],
	'charts':[
		{
			'name':'销售情况',
			'url':'sellCharts1.html'
		},
		{
			'name':'销售排行',
			'url':'sellCharts2.html'
		},
		{
			'name':'会员排行',
			'url':'userSellCharts.html'
		},
		{
			'name':'会员统计',
			'url':'userCharts.html'
		}
	]
};

function pageInit(topKey){
	var topMenuKey,MainMenuKey,MiniMenuKey;
	topMenuKey=topKey;
	var arr=Object.keys(topBar[topMenuKey]);
	var MiniKey=arr[0];
	MainMenu=topBar[topMenuKey];
	var leftMenu="",rightMenu="";
	var leftMenuId=Object.keys(MainMenu);
	
	for(var i=0; i<leftMenuId.length;i++){  
		leftMenu=leftMenu+'<a href="javascript:void(0)" onclick="'+"changMiniMenu('"+leftMenuId[i]+"',"+i+")"+'">'+
					'<img src="'+MainMenu[leftMenuId[i]].icon+'" />'+MainMenu[leftMenuId[i]].name+'</a>';
	}
	$('#mainMenu').html(leftMenu);
	changePage(0);
	changMiniMenu(MiniKey,0);
}
function changeMainMenu(id,n){
	$('#topBar li').eq(n).addClass('ul_row_on');
	$('#topBar li').eq(n).siblings().removeClass('ul_row_on');
	pageInit(id);
}

function changMiniMenu(id,j){
	var menu=miniMenu[id],rightMenu='';
	var iframeUrl=menu[0].url;
	for(var i=0; i<menu.length;i++){  
		rightMenu=rightMenu+'<a class="list-group-item" href="'+menu[i].url
			+'" onclick="changePage('+i+')" target="workspace">'+menu[i].name+'</a>';
	}
	$('#miniMenu').html(rightMenu);
	document.getElementById("workspace").src=iframeUrl;
	changePage(0);
	$('#mainMenu a').eq(j).addClass('left1_on');
	$('#mainMenu a').eq(j).siblings().removeClass('left1_on');
}
function changePage(i){
	$('#miniMenu a').eq(i).addClass('left2_on');
	$('#miniMenu a').eq(i).siblings().removeClass('left2_on');
}
$(function(){ 
	pageInit('index');
	$('#topBar li').eq(0).addClass('ul_row_on');
	$('#miniMenu a').eq(0).addClass('left2_on');
});