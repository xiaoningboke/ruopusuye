<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title><?php echo ($data[name]); ?>-<?php echo ($cninfo["name"]); ?></title>

		<meta itemprop="name" content="<?php echo ($cninfo["name"]); ?>"/>
		<meta name="keywords" content="<?php echo ($cninfo["keywords"]); ?>"/>
		<meta name="description" itemprop="description" content="<?php echo ($cninfo["description"]); ?>"/>
		<meta name="generator" content="千行软件" />
		<!--初始化-->
		<link rel="stylesheet" href="/ruopusuye/Public/css/csh.css" />		
		<!--头部和尾部-->
		<link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/public.css"/>
    <link type="text/css" rel="stylesheet" href="/ruopusuye/Public/css/details.css">
    <script type="text/javascript" src="/ruopusuye/Public/js/public.js"></script>
    <script src="/ruopusuye/Public/js/jquery-1.8.3/jquery.min.js"></script>
<!--     <script src="/ruopusuye/Public/js/details.js"></script> -->
    <script>
        window.onload = function(){
            showen();
            dis();
        };
       $(document).ready(function () {
           top_1();
           changce();
       });
    </script>
</head>
<body>
<!--头部开始-->
<div id="header">
    <div class="header w">
        <div class="header_logo floatL"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[0][urlimg]); ?>"></div>
        <div class="header_iphone floatL">
            <p>24小时服务热线</p>
            <p class="green bg"><?php echo ($cninfo["phone"]); ?></p>
        </div>
        <div class="header_choose floatL">
            <a class="black" href="<?php echo U('Home/Index/index');?>">中文</a>
            <span>/</span>
            <a href="<?php echo U('Home/English/index');?>">英文</a>
        </div>
    </div>
</div>
<!--导航栏开始-->
<div id="nav" class="bg">
    <ul class="w">
        <li><a href="<?php echo U('Home/Index/index');?>">首页</a></li>
        <li><a href="<?php echo U('Home/Index/about');?>">公司简介</a></li>
        <li><a href="<?php echo U('Home/Index/news');?>">新闻中心</a></li>
        <li><a href="<?php echo U('Home/Index/product');?>">产品展示</a></li>
        <li><a href="<?php echo U('Home/Index/contact');?>">联系我们</a></li>
        <li class="addWidth">
            <div class="li_input">
            <form action="<?php echo U('Home/Index/product');?>"  method="post">
            <div class="li_text"><input type="text" name="keywords" id="keywords" value="" placeholder="请输入关键词" /></div>
            <div class="li_button"><input type="submit" name="" id="" value="搜索" /></div></form>
            </div>
        </li>
    </ul>
</div>
    <div class="content">
        <div class="left">
            <div id="small" class="pic_L"><?php if(is_array($imgurl)): $i = 0; $__LIST__ = $imgurl;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$imgurl): $mod = ($i % 2 );++$i;?><img src="/ruopusuye/Public/Uploads/<?php echo ($imgurl); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
            <div id="mask" class="mask"></div>
            </div>
            <!--//鼠标跟随-->
        </div>
        <div class="right">
            <div id="hidr">
                <img src="">
            </div>
            <div class="r_head"><h2><?php echo ($data[name]); ?></h2><a class="a0" href="<?php echo U('Home/Index/product');?>">查看其他产品>></a></div>
            <div class="prise"><?php if(is_array($price)): $i = 0; $__LIST__ = $price;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$price): $mod = ($i % 2 );++$i;?><input type="hidden" name="pri" class="pri" value="<?php echo ($price); ?>"><?php endforeach; endif; else: echo "" ;endif; ?>
            <span class="prise0"></span><span class="prise1">￥<span class="jqsp"></span>/吨</span>
            </div>
            <div class="yanse">
               <div class="yanse0">型号分类</div>
                <div class="yanse1">
                <?php if(is_array($xinghao)): $i = 0; $__LIST__ = $xinghao;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xinghao): $mod = ($i % 2 );++$i;?><span  class="ys0"><?php echo ($xinghao); ?></span><?php endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="clea0"></div>
            </div>
            <div class="r_a0">
                <a class="r_a1"  target="blank" href="tencent://message/?uin=<?php echo ($cninfo["qq"]); ?>&Site=im.qq.com&Menu=yes">询问底价</a>
                <a class="r_a2" href="<?php echo U('Home/Index/contact');?>#">在线留言</a>
            </div>
            <div class="in_p">
            <?php echo ($data[content]); ?>
            </div>
        </div>
        <div class="clea"></div>
    </div>
    <script>
        //通过切换产品型号，修改展示图片
function changce() {
      var $ys = $(".yanse1");
      var $picl = $(".pic_L");
      var $price =<?php echo ($price); ?>;
      var $jqsp = $(".jqsp");
      $jqsp.text($price[0]);
      $hidr = $("#hidr img");
      var $loat = $picl.children("img").eq(0).attr("src");
      $hidr.attr("src",$loat);
    $ys.children("span").click(function () {
            //点击相应按钮产品展示内容切换
            $picl.children("img").eq($(this).index()).show();
            $picl.children("img").eq($(this).index()).siblings().hide();
            $jqsp.text($price[$(this).index()]);
            var $url = $picl.children("img").eq($(this).index()).attr("src");
            $hidr.attr("src",$url);
        }
    );
}
//产品展示放大镜效果
function dis() {
    var small = document.getElementById("small");
    var mask = document.getElementById("mask");
    var hidr = document.getElementById("hidr");
    var hidimg = hidr.getElementsByTagName("img");
    small.onmouseenter=function(){
       mask.style.display = "block";
       hidr.style.display = "block";
    };
    small.onmouseleave=function(){
        mask.style.display = "none";
        hidr.style.display = "none";
    };
    small.onmousemove = function (event) {
        event = event || window.event;
        var pagex = event.pageX || scroll().left + event.clientX;
        var pagey = event.pageY || scroll().top + event.clientY;
        var x = pagex - small.offsetLeft - mask.offsetWidth/2;
        var y = pagey - small.offsetTop - mask.offsetHeight/2;
        // var x=window.pageXOffset+event.clientX-small.offsetLeft-mask.offsetWidth/2;
        // var y=window.pageYOffset+event.clientY-small.offsetTop-mask.offsetHeight/2;
        if(x<0){
            x = 0;
        }
        if(x>small.offsetWidth-mask.offsetWidth){
            x = small.offsetWidth-mask.offsetWidth;
        }
        if(y<0){
            y = 0;
        }
        if(y>small.offsetHeight-mask.offsetHeight){
            y = small.offsetHeight-mask.offsetHeight;
        }
        mask.style.left = x + "px";
        mask.style.top = y + "px";
        var bili = hidimg[0].offsetWidth/small.offsetWidth;
        var xx = bili*x;
        var yy = bili*y;
        hidimg[0].style.marginTop = -yy+"px";
        hidimg[0].style.marginLeft = -xx+"px";
    };
}
    </script>
 <!--尾部开始-->
<div id="footer">
    <div class="footer w">
        <div class="footer_LBox">
            <!--<p>寿光市若普塑业有限责任公司</p>-->
            <img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[0][urlimg]); ?>"/>
            <!--<p>主要产品：以聚酯切片（PET）为主要原料的PET压膜绳、线，PET船用渔网绳，海上养殖专用用绳，盐场专用绳等一系列行业用绳。</p>-->
            <!--<p>产品特性：此类用绳均采用先进工艺，使得产品具有强度高，不伸缩，防酸碱，耐高温，抗紫外线，施工简便，应用成本低，抗老化、防老化，使用寿命长（自然环境寿命使用15年以上）。</p>-->
            <!--<p>可根据客户需求订制各种不同规格及不同型号专用绳，以此满足客户不同需求。</p>-->
        </div>
        <div class="footer_RBox">
            <ul id="uls">
                <li>
                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_qq.png"/></div>
                    <div class="footer_RBox_span"><span>联系QQ：<?php echo ($cninfo["qq"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_iPhone.png"/></div>
                    <div class="footer_RBox_span"><span>联系电话：<?php echo ($cninfo["phone"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_email.png"/></div>
                    <div class="footer_RBox_span"><span>联系邮箱：<?php echo ($cninfo["email"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_address.png"/></div>
                    <div class="footer_RBox_span"><span>联系地址：<?php echo ($cninfo["address"]); ?></span></div>
                </li>
                <!--<li>4</li>-->
            </ul>
        </div>
    </div>
</div>
<div id="footer_1" class="bg">
    <div class="footer_1 w">
        @版权所有：<?php echo ($cninfo["name"]); ?>
        <a href="http://www.miitbeian.gov.cn/"><?php echo ($cninfo["record"]); ?></a>
    	技术支持：千行软件工作室
	</div>
</div>
<!--尾部结束-->
<!--小插件-->
		<a id="top_top" href="#">
			<img src="/ruopusuye/Public/img/index_fixed_top.png" alt="" />
		</a>
		<a id="top_weixin" href="#">
			<img src="/ruopusuye/Public/img/index_fixed_weixin.png" alt="" />
		</a>
		<a id="top_iphone" target=blank href=tencent://message/?uin=<?php echo ($cninfo["qq"]); ?>&Site=im.qq.com&Menu=yes href="#">
			<img src="/ruopusuye/Public/img/index_fixed_iphone.png" alt="" />
		</a>
		<div id="kongbai_weixin">
            <img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[8]["urlimg"]); ?>" width="220" height="220" alt="">      
        </div>
		<div id="kongbai_iphone">
			<h5>电话热线：</h5>
			<p><?php echo ($cninfo["phone"]); ?></p>
		</div>
<div id="kefu">
    <h2 class="tact"><img src="/ruopusuye/Public/img/QQzxkf.jpg"><span id="cancel">×</span></h2>
    <a class="kefu_0"  target="blank" href="tencent://message/?uin=<?php echo ($cninfo["qq"]); ?>&Site=im.qq.com&Menu=yes"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[10]["urlimg"]); ?>" alt=""> </a>
    <h2 class="times">工作时间</h2>
    <div id="gzsj">7*24小时全天在线</div>
</div>
<!--小插件结束-->
</body>
</html>