<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>news-<?php echo ($eninfo["name"]); ?></title>

		<meta itemprop="name" content="<?php echo ($cninfo["name"]); ?>"/>
		<meta name="keywords" content="<?php echo ($cninfo["keywords"]); ?>"/>
		<meta name="description" itemprop="description" content="<?php echo ($cninfo["description"]); ?>"/>
		<meta name="generator" content="千行软件" />
		<!--初始化-->
		<link rel="stylesheet" href="/ruopusuye/Public/css/csh.css" />		
		<!--头部和尾部-->
		<link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/public.css"/>
    <link rel="stylesheet" href="/ruopusuye/Public/css/news.css">
    <link rel="stylesheet" href="/ruopusuye/Public/css/rep.css" />
    <script type="text/javascript" src="/ruopusuye/Public/js/public.js"></script>
    <script src="/ruopusuye/Public/js/jquery-1.8.3/jquery.min.js"></script>
    <script>
        window.onload = function(){
            showen();
        };
       $(document).ready(function () {
           top_1();
       });
    </script>
</head>
<body>
<!--头部开始-->
<div id="header">
    <div class="header w">
        <div class="header_logo floatL"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[0][urlimg]); ?>"></div>
        <div class="header_iphone floatL">
            <p>24 - hour service hotline</p>
            <p class="green bg"><?php echo ($cninfo["phone"]); ?></p>
        </div>
        <div class="header_choose floatL">
            <a href="<?php echo U('Home/Index/index');?>">中文</a>
            <span>/</span>
            <a class="black" href="<?php echo U('Home/English/index');?>">English</a>
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
<div class ="picture">
<img src="/ruopusuye/Public/Uploads/<?php echo ($enfileData[6][urlimg]); ?>" alt="新闻中心">
</div>

<div class="main" id="">
    <div class="box">

        <div class="tab">
            <div class="bigtitle">
                <a href="<?php echo U('Home/English/news');?>">Article navigation</a>
            </div>
            <div class="malltitle">
                <a href="<?php echo U('Home/English/industryNews');?>" >industry news</a>
            </div>
            <div class="malltitle">
                <a href="<?php echo U('Home/English/companyNews');?>" >Contact information</a>
            </div>
             <div class="information">
                <div class="contain">Contact information</div>
                <div><img src="/ruopusuye/Public/Uploads/<?php echo ($enfileData[10][urlimg]); ?>" alt=""></div>
                <div>
                    <p><?php echo ($eninfo["name"]); ?></p>
                    <ul>
                        <li><span>Contact：</span><?php echo ($eninfo["name"]); ?></li>
                        <li><span>Q&nbsp; &nbsp;&nbsp;Q：  </span><?php echo ($eninfo["qq"]); ?></li>
                        <li><span>Telephone：</span><?php echo ($eninfo["phone"]); ?></li>
                        <li><span>WeChat：</span><?php echo ($eninfo["name"]); ?></li>
                        <li><span>Mailbox：</span><?php echo ($eninfo["email"]); ?></li>
                        <li><span>Address：</span><?php echo ($eninfo["address"]); ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="column" id="column">
            <!--<div class="title">公司新闻</div>-->
            <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><div class="news">
                <div class="time"><span class="id"><?php echo ($data[time]); ?></span><br><span class="sj"><?php echo ($data[time]); ?></span></div>
                <div class="textcontent">
                    <div class="newTitle">
                        <a href="<?php echo U('newspage',array('id'=>$data[id]));?>#sign"><?php echo ($data[title]); ?></a>
                    </div>
                    <div class="newcontant">
                        <a href="<?php echo U('newspage',array('id'=>$data[id]));?>#sign"><?php echo ($data[abstracts]); ?></a>
                    </div>
                </div>
            </div><?php endforeach; endif; else: echo "" ;endif; ?>
            <div class="admin-table-page">
                <div class="result page"><?php echo ($page); ?></div>
            </div>

        </div>

    </div>

</div>
<script>
          var times = document.getElementsByClassName("sj");
        for(var i = 0;i<times.length;i++){
        times[i].innerText =  timestampToTime(times[i].innerText)
        //console.log(times[i].innerText);
}
    function timestampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        Y = date.getFullYear() + '/';
        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1);
        //D = date.getDate() + ' ';
        return Y+M;
    }
        var timess = document.getElementsByClassName("id");
        for(var i = 0;i<times.length;i++){
        timess[i].innerText =  timesStampToTime(timess[i].innerText)
        //console.log(times[i].innerText);
}
    function timesStampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        //Y = date.getFullYear() + '/';
        //M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1);
        D = date.getDate() + ' ';
        return D;
    }
</script>
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
        <a id="top_iphone" target=blank href=tencent://message/?uin=<?php echo ($cninfo["qq"]); ?>&Site=im.qq.com&Menu=yes href="#">
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