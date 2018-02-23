// 大背景轮播
function slideSwitch() {
    var $active = $('#slideshow img.active');
    if ($active.length == 0){
        $active = $('#slideshow img:last');
    }
    var $next = $active.next().length ? $active.next() : $('#slideshow img:first');
    $active.addClass('last-active');
    $next.css('opacity',0).addClass('active').animate({
        opacity:1
    },4000,function () {
        $active.removeClass('active last-active');
    });
}
$(window).resize(function () {
    var bgHeight=$('#slideshow').height();
    $('#myCarousel').stop().animate({marginTop:bgHeight-100},500);
}).trigger("resize");

slideSwitch();
$(function () {
    setInterval("slideSwitch()",4000) ;
});


/*// 弹层-页面层
layer.open({
    type: 1,
    area: ['500px', '400px'],
    shadeClose: true, //点击遮罩关闭
    title:false,
    content: "<div class='layerBox'><h2 class='layer-title'>壹点壹客欢迎您的到来！</h2><p style='font-size: 18px'>请选择城市:</p><button class='btn btn-default '>深圳市</button><br><button class='btn btn-default'>深圳市</button><a href='#' class='more-city'>更多城市</a></div>"
});*/

// 轮播
$('.carousel').carousel({
    interval: 3000
});

// 导航栏
$(function () {
    $('.band-story').hover(function () {
       $('.band').css('border','1px solid #fff');
       $('.band-body').show();
    },function () {
        $('.band').mouseleave(function () {
            $('.band').css('border','none');
            $('.band-body').hide();
        });
    });
});

// cate
$(function () {
   $('.cate-item').hover(function () {
      $(this).find('.cate-img').stop().animate({marginTop:"30px"},100);
   },function () {
       $(this).find('.cate-img').stop().animate({marginTop:"40px"},100);
   });
});

// addCar
$(function () {
    // hover
   $('.addCar').hover(function () {
      $(this).find('.fa-shopping-cart').show(500);
   },function () {
       $(this).find('.fa-shopping-cart').hide(500);
    });
   // click
    $('.addCar').click(function () {
        layer.open({
            type:1,
            title:"提醒",
            closeBtn:1,
            area: ['740px', '400px'],
            shadeClose:false,
            content:"\n" +
            "    <div class=\"shopCar-content \">\n" +
            "        <div class=\"col-xs-2\">\n" +
            "            <p  style=\"text-align: right\">请选择商品属性:</p>\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-4\">\n" +
            "            <img  src=\"imgs/size.jpg\" alt=\"\">\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-6\">\n" +
            "            <p ><img src=\"imgs/attr_icon_1.jpg\" alt=\"\">英制规格2磅</p>\n" +
            "            <p ><img src=\"imgs/attr_icon_2.jpg\" alt=\"\"> 908g（实重2磅）</p>\n" +
            "            <p><img src=\"imgs/attr_icon_3.jpg\" alt=\"\">含10套餐具1盒蜡烛</p>\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-offset-2 col-xs-10\" style=\"margin-top: 15px\">\n" +
            "            <p>重量</p>\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-offset-2 col-xs-10\">\n" +
            "            <div class=\"chose\">\n" +
            "                6~10人份\n" +
            "                <i class=\"triangle\"></i>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-offset-2 col-xs-10\">\n" +
            "            <div class=\"nums\">\n" +
            "                <i class=\"fa fa-minus-circle\" id=\"minus\"></i>\n" +
            "\n" +
            "                <input class=\"num\" id=\"num\" type=\"text\" size=\"2\" value=\"1\" data-price=\"198\">\n" +
            "\n" +
            "                <i class=\"fa fa-plus-circle\" id=\"plus\"></i>\n" +
            "            </div>\n" +
            "        </div>\n" +
            "        <div class=\"col-xs-offset-2 col-xs-10\">\n" +
            "            <div class=\"sum\" id=\"sum\">\n" +
            "               <i class=\"fa fa-cny\"></i>\n" +
            "                <span id=\"allsum\">198</span>元\n" +
            "            </div>\n" +
            "        </div>\n" +
            "    </div>\n"+
                "<script>" +
            "$(function () {\n" +
            "    var sum = parseInt($('#allsum').text());\n" +
            "    var price = parseInt($('#num').attr('data-price'));\n" +
            "    var num =  parseInt($('#num').val());\n" +
            "    // 初始总价格\n" +
            "    sum = price * num;\n" +
            "    $('#allsum').text(sum);\n" +
            "    // 手工输入数量时总价格\n" +
            "    $('#num').keyup(function () {\n" +
            "        var input = parseInt($('#num').val());\n" +
            "        sum = price;\n" +
            "        if(!isNaN(input)){\n" +
            "            sum = price * input;\n" +
            "            $('#allsum').text(sum);\n" +
            "            if(sum<=0){\n" +
            "                $('#allsum').text(price);\n" +
            "                $('#num').val(1);\n" +
            "            }\n" +
            "        }else {\n" +
            "            alert('请输入购买数量');\n" +
            "        }\n" +
            "    });\n" +
            "    // 点击加号时总价格\n" +
            "    $('#plus').click(function () {\n" +
            "        var nums =  parseInt($('#num').val());\n" +
            "        nums++;\n" +
            "        sum = sum + price;\n" +
            "        $('#allsum').text(sum);\n" +
            "        $('#num').val(nums);\n" +
            "    });\n" +
            "    // 点击减号时总价格\n" +
            "    $('#minus').click(function () {\n" +
            "        var nums =  parseInt($('#num').val());\n" +
            "        if(nums>1){\n" +
            "            nums--;\n" +
            "            sum = sum - price;\n" +
            "            $('#allsum').text(sum);\n" +
            "            $('#num').val(nums);\n" +
            "        }else{\n" +
            "            sum = price;\n" +
            "            $('#allsum').text(sum);\n" +
            "        }\n" +
            "\n" +
            "    });\n" +
            "});" +
            "</script>"
        });
    });
});

// login&register
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

// 加载更多
$(function () {
    $('.more-products').click(function () {
            $('#products-group').append(" <div class='products-item'>"+
            "<a href=''><img src='imgs/uploads/513_thumb_G_1510882972812.jpg' width='220' height='220' alt=''></a>"+
                "<div class='shopInfo'>"+
                "<a href='#' style='color:#885F3F;font-size: 16px;'>提拉米苏抹茶颂</a>"+
                "<p style='color:#FF6600'>198</p>"+
                "<p style='color:#FF6600'>配送日期:2017-12-09至2017-12-31</p>"+
            "<p style='color:#A5A5A5'>抹茶可可双重风味蛋糕</p>"+
                "<button type='button' class='addCar btn'><i class='fa fa-shopping-cart' style='display: none'></i> 加入购物车</button>"+
                "</div>"+
                "</div>");
    });
});

//回到顶部
$(function () {
   $('#return-top').click(function () {
      $('html,body').animate({scrollTop:0},500);
   });
});