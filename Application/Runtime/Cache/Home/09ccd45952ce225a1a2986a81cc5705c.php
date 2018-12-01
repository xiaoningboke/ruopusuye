<?php if (!defined('THINK_PATH')) exit();?>    <!DOCTYPE html>
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
    <link rel="stylesheet" href="/ruopusuye/Public/css/introduction.css ">
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
        <div class="header_logo floatL"><img src="/ruopusuye/Public/img/logo.jpg"/></div>
        <div class="header_iphone floatL">
            <p>24小时服务热线</p>
            <p class="green bg">053-6521-7508</p>
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

<div class ="picture">
    <img src="/ruopusuye/Public/img/22400858.jpg" alt="">
</div>
<!--头部结束-->
<!--主部开始-->
<div class="main">
    <!--关于我们-->
    <div class="summary" id="aboutUs">
            <div class="box"></div>
            <!--大标题-->
            <div class="title">
                <span class="one">关于我们</span>
                <span class="two">中外合资企业/优质的技术力量/以质量谋发展/薄利多销</span>
            </div>
            <!--内容-->
            <div class="sum-content">
               <?php echo ($data["about"]["content"]); ?>
            </div>
    </div>
    <!--所用技术-->
    <div class="technology">
        <!--大标题-->
        <div class="title">
            <span class="one">所用技术</span>
            <span class="two">强度高/不伸缩/防酸碱/耐高温/抗紫外线/抗老化/防老化</span>
        </div>
        <!--内容-->
        <div class="tec-contact">
            <div class="rgba">
                <div class="w">
                    <!--左边部分图片展示-->
                    <div class="leftsider">
                        <div class="showone">
                            <div class="show"><img src="/ruopusuye/Public/Uploads/<?php echo ($fileDataJishu[0]['urlimg']); ?>" alt=""></div>
                            <div class="show"><img src="/ruopusuye/Public/Uploads/<?php echo ($fileDataJishu[1]['urlimg']); ?>" alt=""></div>
                        </div>
                        <div class="showtwo">
                            <div class="show"><img src="/ruopusuye/Public/Uploads/<?php echo ($fileDataJishu[2]['urlimg']); ?>" alt=""></div>
                            <div class="show"><img src="/ruopusuye/Public/Uploads/<?php echo ($fileDataJishu[3]['urlimg']); ?>" alt=""></div>
                        </div>
                    </div>
                    <!--右边部分文本叙述-->
                    <div class="rightsider">
                        <?php echo ($data["jishu"]["content"]); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--资质认证-->
    <div class="identification">
        <!--大标题-->
        <div class="title">
            <span class="one">资质认证</span>
            <span class="two">中外合资企业/优质的技术力量/以质量谋发展/薄利多销</span>
        </div>
        <!--内容-->
        <div class="iden-contact">
            <?php if(is_array($fileDataZizhi)): foreach($fileDataZizhi as $k=>$vo): ?><div class="price">
                     <img src="/ruopusuye/Public/Uploads/<?php echo ($vo["urlimg"]); ?>" alt="">
                </div><?php endforeach; endif; ?>
            <div class="clear"></div>
        </div>
    </div>
    <!--合作伙伴-->
    <div class="partner">
        <!--大标题-->
        <div class="title">
            <span class="one">合作伙伴</span>
            <span class="two">中外合资企业/优质的技术力量/以质量谋发展/薄利多销</span>
        </div>
        <div class="w">
            <div class="part-contact">
                <?php if(is_array($partnerData)): foreach($partnerData as $k=>$vo): ?><div class="ten">
                        <img src="/ruopusuye/Public/Uploads/<?php echo ($vo["imgurl"]); ?>" alt="">
                        <span><?php echo ($vo["cnname"]); ?></span>
                    </div><?php endforeach; endif; ?>
                <div class="clear"></div>
            </div>
        </div>

    </div>
</div>
<!--主部结束-->

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