<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>联系我们-<?php echo ($eninfo["name"]); ?></title>

		<meta itemprop="name" content="<?php echo ($cninfo["name"]); ?>"/>
		<meta name="keywords" content="<?php echo ($cninfo["keywords"]); ?>"/>
		<meta name="description" itemprop="description" content="<?php echo ($cninfo["description"]); ?>"/>
		<meta name="generator" content="千行软件" />
		<!--初始化-->
		<link rel="stylesheet" href="/ruopusuye/Public/css/csh.css" />		
		<!--头部和尾部-->
		<link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/public.css"/>
    <link type="text/css" rel="stylesheet" href="/ruopusuye/Public/css/contact.css">
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=1.3"></script>
    <script src="/ruopusuye/Public/js/jquery-1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="/ruopusuye/Public/js/contact.js"></script>
    <script>
        window.onload = function(){
            showen();
        };
       $(document).ready(function () {
           showout();
           checkTArea();
           top_1();
       });
    </script>
</head>
<body>
<div id="main">
    <!--位置地图-->
<!--头部开始-->
<div id="header">
    <div class="header w">
        <div class="header_logo floatL"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[0][urlimg]); ?>"></div>
        <div class="header_iphone floatL">
            <p>24 - hour service hotline</p>
            <p class="green bg"><?php echo ($cninfo["phone"]); ?></p>
        </div>
        <div class="header_choose floatL">
            <a href="#">中文</a>
            <span>/</span>
            <a class="black" href="#">English</a>
        </div>
    </div>
</div>
<!--导航栏开始-->
<div id="nav" class="bg">
    <ul class="w">
        <li><a href="<?php echo U('Home/English/index');?>">Home</a></li>
        <li><a href="<?php echo U('Home/English/about');?>">Profile</a></li>
        <li><a href="<?php echo U('Home/English/news');?>">News</a></li>
        <li><a href="<?php echo U('Home/English/product');?>">Exhibition</a></li>
        <li><a href="<?php echo U('Home/English/contact');?>">Contact Us</a></li>
        <li class="addWidth">
            <div class="li_input">
            <form action="<?php echo U('Home/English/product');?>"  method="post">
            <div class="li_text"><input type="text" name="keywords" id="keywords" value="" placeholder="Please input keywords." /></div>
            <div class="li_button"><input type="submit" name="" id="" value="search" /></div></form>
            </div>
        </li>
    </ul>
</div>
    <div id="mapCanvas" class="map-canvas no-margin">
        <script type="text/javascript">
            var map = new BMap.Map("mapCanvas"); // 创建Map实例
            var point = new BMap.Point("<?php echo ($eninfo["longitude"]); ?>","<?php echo ($eninfo["latitude"]); ?>"); // 创建点坐标
            map.centerAndZoom(point, 15); // 初始化地图,设置中心点坐标和地图级别。
            map.enableScrollWheelZoom(); //启用滚轮放大缩小
            //添加缩放控件
            map.addControl(new BMap.NavigationControl());
            map.addControl(new BMap.ScaleControl());
            map.addControl(new BMap.OverviewMapControl());

            var marker = new BMap.Marker(point); // 创建标注
            map.addOverlay(marker); // 将标注添加到地图中
            var infoWindow = new BMap.InfoWindow("<?php echo ($eninfo["name"]); ?>"); // 创建信息窗口对象
            marker.openInfoWindow(infoWindow);
        </script>
    </div>
    <div id="content">
        <!--左侧部分-->
        <div id="left">
            <!--左侧标题栏-->
            <span class="le-sp">
                <span class="ch">Contact us</span>
            </span>
            <!--右侧内容切换按钮-->
            <a href="#" id="le-a0" class="show">Contact information</a>
            <a href="#" id="le-a1">Online Message</a>
            <!--<div class="L_pic"><img src="img/contact.jpg"></div>-->
        </div>
        <!--右侧部分-->
        <div class="right">
            <!--右侧头部标题-->
            <div class="r-head">
            <span class="sp-l">
                <span class="ch">Contact us</span>
            </span>
            </div>
            <!--右侧公司信息-->
            <div id="infor">
            <!--公司信息-->
            <div class="about">
                <div class="ab-1">
                <h2><?php echo ($eninfo["name"]); ?></h2>
                <table>
                    <tr><td class="td0">Contact：</td><td class="td1"><?php echo ($eninfo["contacts"]); ?></td></tr>
                    <tr><td class="td0">Telephone：</td><td class="td1"><?php echo ($eninfo["phone"]); ?></td></tr>
                     <tr><td class="td0">Q&nbsp;&nbsp;&nbsp;Q：</td><td class="td1"><?php echo ($eninfo["qq"]); ?></td></tr>
                    <tr><td class="td0">Mailbox:</td><td class="td1"><?php echo ($eninfo["email"]); ?></td></tr>
                    <tr><td class="td0">Adress：</td><td class="td1"><?php echo ($eninfo["address"]); ?></td></tr>
                </table>
                </div>
            </div>
            </div>
            <!--留言部分-->
            <div id="leave">
                <form id="form" class="l-form">
                    <table>
                        <tr><td class="td3">Nickname:</td></tr>
                        <tr><td class="td4">Telephone：</td></tr>
                        <tr><td class="td5">Address：</td></tr>
                        <tr><td class="td6">Mailbox:</td></tr>
                        <tr><td class="td2">Message</td></tr>
                    </table>
                </form>
                <form class="r-form" method="post" action = "<?php echo U('Home/English/addLiuyan');?>">
                    <input type="hidden" name="email" value="<?php echo ($eninfo["email"]); ?>">
                    <div class="hidd">Message</div>
                    <div class="in">
                        <input class="put1  userName" type="text" placeholder="Nickname" id="userName"  onBlur="checkUserName()" name="username">
                        <span id="nameErr">Error</span></div>
                    <div class="in"><input class="put2 userName" type="text" placeholder="Telephone" id="userPhone"  onBlur="checkPhone()" name="userphone"><span id="phone">Error</span></div>
                    <div class="in"><input class="put3" type="text" placeholder="Address" id="userArea" onblur="checkUserArea()" name="userarea"><span id="dizhi">Error</span></div>
                    <div class="in"><input class="put4" type="text" placeholder="Mailbox" id="userEmail" onblur="checkUserEmail()" name="useremail"><span id="emil">Error</span></div>
                    <div class="in-text"><textarea typeof=""  rows="3" cols="25"  id="userText" onblur="checkText()"  name="usertext"></textarea><div class="s0"><span id="area">Error</span></div></div>
                <button class="bg" id="#button">Submit</button>
                </form>
            </div>
        </div>

    </div>
    <!--尾部开始-->
<div id="footer">
    <div class="footer w">
        <div class="footer_LBox">
            <!--<p>寿光市若普塑业有限责任公司</p>-->
            <img src="/ruopusuye/Public/Uploads/<?php echo ($enfileData[0][urlimg]); ?>"/>
            <!--<p>主要产品：以聚酯切片（PET）为主要原料的PET压膜绳、线，PET船用渔网绳，海上养殖专用用绳，盐场专用绳等一系列行业用绳。</p>-->
            <!--<p>产品特性：此类用绳均采用先进工艺，使得产品具有强度高，不伸缩，防酸碱，耐高温，抗紫外线，施工简便，应用成本低，抗老化、防老化，使用寿命长（自然环境寿命使用15年以上）。</p>-->
            <!--<p>可根据客户需求订制各种不同规格及不同型号专用绳，以此满足客户不同需求。</p>-->
        </div>
        <div class="footer_RBox">
            <ul id="uls">
                <li>
                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_qq.png"/></div>
                    <div class="footer_RBox_span"><span>QQ：<?php echo ($eninfo["qq"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_iPhone.png"/></div>
                    <div class="footer_RBox_span"><span>Telephone：<?php echo ($eninfo["phone"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_email.png"/></div>
                    <div class="footer_RBox_span"><span>Mail box：<?php echo ($eninfo["email"]); ?></span></div>
                </li>
                <li>

                    <div class="footer_RBox_img"><img src="/ruopusuye/Public/img/index_footer_address.png"/></div>
                    <div class="footer_RBox_span"><span>Address：<?php echo ($eninfo["address"]); ?></span></div>
                </li>
                <!--<li>4</li>-->
            </ul>
        </div>
    </div>
</div>
<div id="footer_1" class="bg">
    <div class="footer_1 w">
        @Copyright：<?php echo ($eninfo["name"]); ?>
        <a href="http://www.miitbeian.gov.cn/"><?php echo ($eninfo["record"]); ?></a>
        Technical support：千行软件工作室
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
        <a id="top_iphone" target=blank href=tencent://message/?uin=2234461543&Site=im.qq.com&Menu=yes href="#">
            <img src="/ruopusuye/Public/img/index_fixed_iphone.png" alt="" />
        </a>
        <div id="kongbai_weixin">
            <img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[8]["urlimg"]); ?>" width="220" height="220" alt="">
        </div>
        <div id="kongbai_iphone">
            <h5>Telephone hotline：</h5>
            <p><?php echo ($eninfo["phone"]); ?></p>
        </div>
<div id="kefu">
    <h2 class="tact"><img src="/ruopusuye/Public/img/QQzxkf.jpg"><span id="cancel">×</span></h2>
    <a class="kefu_0"  target="blank" href="tencent://message/?uin=<?php echo ($eninfo["qq"]); ?>&Site=im.qq.com&Menu=yes"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[10]["urlimg"]); ?>" alt=""> </a>
    <h2 class="times">working hours</h2>
    <div id="gzsj">24 - hour service hotline</div>
</div>
<!--小插件结束-->
</body>
</html>