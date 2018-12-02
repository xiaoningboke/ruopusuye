<?php if (!defined('THINK_PATH')) exit();?>		<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>若普塑业</title>
		<!-- SEO -->
		<meta name="description" itemprop="description" content="寿光市若普塑业有限责任公司,PET压膜绳、线，PET船用渔网绳，海上养殖专用用绳，盐场专用绳"/>
		<meta itemprop="name" content="寿光市若普塑业有限责任公司"/>
		<meta name="keywords" content="寿光市若普塑业有限责任公司,PET压膜绳、线，PET船用渔网绳，海上养殖专用用绳，盐场专用绳"/>
		<meta name="generator" content="千行软件" />
		<!--初始化-->
		<link rel="stylesheet" href="/ruopusuye/Public/css/csh.css" />		
		<!--头部和尾部-->
		<link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/public.css"/>
		<!--首页页面-->
		<link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/index.css"/>
		<!--首页-->
		<script type="text/javascript" src="/ruopusuye/Public/js/public.js"></script>
		<script type="text/javascript" src="/ruopusuye/Public/js/lunbo.js"></script>
		<script src="/ruopusuye/Public/js/jquery-1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    window.onload = function(){
        showen();
    };
	$(document).ready(function () {
            scroll();
			top_1();
			lunbo();
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
            <a class="black" href="#">中文</a>
            <span>/</span>
            <a href="#">英文</a>
        </div>
    </div>
</div>
<!--导航栏开始-->
<div id="nav" class="bg">
    <ul class="w">
        <li><a href="./index.html">首页</a></li>
        <li><a href="./introduction.html">公司简介</a></li>
        <li><a href="./news.html">新闻中心</a></li>
        <li><a href="./product.html">产品展示</a></li>
        <li><a href="./contact.html">联系我们</a></li>
        <li class="addWidth">
            <div class="li_input">
                <div class="li_text"><input type="text" name="" id="" value="" /></div>
                <div class="li_button"><input type="button" name="" id="" value="搜索" /></div>
            </div>
        </li>
    </ul>
</div>
<!--轮播图开始-->
		<div id="lunbobox">
		        <div id="toleft">&lt;</div>
		        <div class="lunbo">
		                <a href="#"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[2][urlimg]); ?>"></a>
		                <a href="#"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[3][urlimg]); ?>"></a>
		                <a href="#"><img src="/ruopusuye/Public/Uploads/<?php echo ($cnfileData[4 ][urlimg]); ?>"></a>
		        </div>
		        <div id="toright">&gt;</div>
		        <ul>
		            <li></li>
		            <li></li>
		            <li></li>
		        </ul>
		        <span></span>
    </div>
<!--轮播图结束-->

<!--内容开始-->
		<div id="main" class="w">
			<ul class="w">
			<!--公司简介-->
				<li class="main_1 w">
					<div class="main_1_top">
						<img src="/ruopusuye/Public/img/index_main_1.png"/>
						<p>公司简介</p>
					</div>
					<div class="main_1_bottom w">
						<div class="main_1_bottom_LBox">
							<img src="/ruopusuye/Public/Uploads/<?php echo ($about["imgurl"]); ?>"/>
						</div>
						<div class="main_1_bottom_RBox">
							<h1><?php echo ($cninfo["name"]); ?></h1>
							<div style="max-height: 400px;overflow: hidden;text-overflow: ellipsis;" ><?php echo ($about["content"]); ?></div>
							
							<a class="more" href="<?php echo U('Home/Index/about');?>">查看更多</a>
						</div>
					</div>
				</li>
			<!--产品展示-->
				<li class="main_2 w">
					<div class="main_2_top">
						<img class="box" src="/ruopusuye/Public/img/index_main_2.png"/>
						<p>产品展示</p>
					</div>
					<div class="main_2_bottom w">
						<ul>
						   <?php if(is_array($productdata)): foreach($productdata as $key=>$vo): ?><li class="liss">
						    	<img src="/ruopusuye/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["name"]); ?>">
						    	<h4><?php echo ($vo["name"]); ?></h4>
						    	<a href="<?php echo U('Home/Index/details',array('id'=>$vo[id]));?>">查看详情</a>
						    	
						    </li><?php endforeach; endif; ?>
						</ul>
						
					</div>
				</li>
			<!--新闻资讯-->
				<li class="main_4 w">
					<div class="main_2_top w">
						<img src="/ruopusuye/Public/img/index_main_3.png"/>
						<p>新闻资讯</p>
					</div>
					<div class="main_4_center w">
						
						<?php if(is_array($newsData)): foreach($newsData as $key=>$vo): ?><a class="main_4_center_Box w" href="<?php echo U('Home/Index/newspage',array('id'=>$data[id]));?>#sign">
							<img src="/ruopusuye/Public/Uploads/<?php echo ($vo["picture"]); ?>" alt="<?php echo ($vo["title"]); ?>" />
							<h6><?php echo ($vo["title"]); ?></h6>
							<p><?php echo ($vo["content"]); ?></p>
						</a><?php endforeach; endif; ?>
					</div>
					<div class="main_4_bottom">
						<a class="more" href="news.html">更多新闻</a>
					</div>

					
				</li>
			<!--企业优势-->
				<li class="main_3 w">
					<div class="main_2_top">
						<img src="/ruopusuye/Public/img/index_main_4.png"/>
						<p>企业优势</p>
					</div>
					<div class="main_3_bottom w">
						<div class="main_3_bottom_Box">
							<img src="/ruopusuye/Public/img/优势_1.jpg"/>
							<p>图片：（350-380）*（200-300）</p>
						</div>
						<div class="main_3_bottom_Box">
							<img src="/ruopusuye/Public/img/优势_3.jpg"/>
							
							<p>图片：（350-380）*（200-300）</p>
						</div>
						<div class="main_3_bottom_Box">
							<img src="/ruopusuye/Public/img/优势_2.jpg"/>
							<p>图片：（350-380）*（200-300）</p>
						</div>
						
					</div>
				</li>
			
			</ul>
		</div>
<!--内容结束-->
<!--尾部开始-->
<div id="footer">
    <div class="footer w">
        <div class="footer_LBox">
            <!--<p>寿光市若普塑业有限责任公司</p>-->
            <img src="/ruopusuye/Public/img/logo_1.png"/>
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
		<a id="top_iphone" target=blank href=tencent://message/?uin=2234461543&Site=im.qq.com&Menu=yes href="#">
			<img src="/ruopusuye/Public/img/index_fixed_iphone.png" alt="" />
		</a>
		<div id="kongbai_weixin"></div>
		<div id="kongbai_iphone">
			<h5>电话热线：</h5>
			<p>053-6521-7508</p>
			<h5>手机号：</h5>
			<p>15263647456</p>
		</div>
<div id="kefu">
    <h2 class="tact"><img src="/ruopusuye/Public/img/QQzxkf.jpg"><span id="cancel">×</span></h2>
    <a class="kefu_0"  target="blank" href="tencent://message/?uin=2234461543&Site=im.qq.com&Menu=yes"><img src="/ruopusuye/Public/img/kefu_11.jpg"></a>
    <h2 class="times">工作时间</h2>
    <div id="gzsj">7*24小时全天在线</div>
</div>
<!--小插件结束-->
</body>
</html>