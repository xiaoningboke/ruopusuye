<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8">
		<title>若普塑业后台管理系统</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<link rel="stylesheet" href="/ruopusuye/Public/Admin/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/ruopusuye/Public/Admin/css/global.css" media="all">
		<link rel="stylesheet" href="/ruopusuye/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">

	</head>

	<body>
		<div class="layui-layout layui-layout-admin" style="border-bottom: solid 5px #1aa094;">
			<div class="layui-header header header-demo">
				<div class="layui-main">
					<div class="admin-login-box">
						<a class="logo" style="left: 0;" href="http://beginner.zhengjinfan.cn/demo/beginner_admin/">
							<span style="font-size: 22px;">若普塑业</span>
						</a>
						<div class="admin-side-toggle">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</div>
						<div class="admin-side-full">
							<i class="fa fa-life-bouy" aria-hidden="true"></i>
						</div>
					</div>
					<ul class="layui-nav admin-header-item">
						<li class="layui-nav-item">
							<a href="javascript:;" class="admin-header-user">
								<img src="/ruopusuye/Public/Admin/images/0.jpg" />
								<span>你好</span>
							</a>
							<dl class="layui-nav-child">
								<dd>
									<a href="<?php echo U('Login/Index/quit');?>"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
								</dd>
							</dl>
						</li>
					</ul>
					<ul class="layui-nav admin-header-item-mobile">
						<li class="layui-nav-item">
							<a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="layui-side layui-bg-black" id="admin-side">
				<div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side"></div>
			</div>
			<div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
				<div class="layui-tab admin-nav-card layui-tab-brief" lay-filter="admin-tab">
					<ul class="layui-tab-title">
						<li class="layui-this">
							<i class="fa fa-dashboard" aria-hidden="true"></i>
							<cite>控制面板</cite>
						</li>
					</ul>
					<div class="layui-tab-content" style="min-height: 150px; padding: 5px 0 0 0;">
						<div class="layui-tab-item layui-show">
							<iframe src="<?php echo U('Admin/Index/home');?>"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="layui-footer footer footer-demo" id="admin-footer">
				<div class="layui-main">
					<p>2018 &copy;
						技术支持：千行软件工作室
					</p>
				</div>
			</div>
			<div class="site-tree-mobile layui-hide">
				<i class="layui-icon">&#xe602;</i>
			</div>
			<div class="site-mobile-shade"></div>
			

			
			<script type="text/javascript" src="/ruopusuye/Public/Admin/plugins/layui/layui.js"></script>
		
			<script src="/ruopusuye/Public/Admin/js/index.js"></script>
			<script>
				layui.use('layer', function() {
					var $ = layui.jquery,
						layer = layui.layer;

					$('#video1').on('click', function() {
						layer.open({
							title: 'YouTube',
							maxmin: true,
							type: 2,
							content: 'video.html',
							area: ['800px', '500px']
						});
                    });
                    $('#pay').on('click', function () {
                        layer.open({
                            title: false,
                            type: 1,
                            content: '<img src="images/xx.png" />',
                            area: ['500px', '250px'],
                            shadeClose: true
                        });
                    });


				});
			</script>
		</div>
	</body>

</html>

<script>
	
var tab;

layui.config({
    base: '/ruopusuye/Public/admin/js/',
    version: new Date().getTime()
}).use(['element', 'layer', 'navbar', 'tab'], function () {
    var element = layui.element(),
        $ = layui.jquery,
        layer = layui.layer,
        navbar = layui.navbar();
    tab = layui.tab({
        elem: '.admin-nav-card' //设置选项卡容器
        ,
        //maxSetting: {
        //	max: 5,
        //	tipMsg: '只能开5个哇，不能再开了。真的。'
        //},
        contextMenu: true,
        onSwitch: function (data) {
            console.log(data.id); //当前Tab的Id
            console.log(data.index); //得到当前Tab的所在下标
            console.log(data.elem); //得到当前的Tab大容器

            console.log(tab.getCurrentTabId())
        },
        closeBefore: function (obj) { //tab 关闭之前触发的事件
            console.log(obj);
            //obj.title  -- 标题
            //obj.url    -- 链接地址
            //obj.id     -- id
            //obj.tabId  -- lay-id
            if (obj.title === 'BTable') {
                layer.confirm('确定要关闭' + obj.title + '吗?', { icon: 3, title: '系统提示' }, function (index) {
                    //因为confirm是非阻塞的，所以这里关闭当前tab需要调用一下deleteTab方法
                    tab.deleteTab(obj.tabId);
                    layer.close(index);
                });
                //返回true会直接关闭当前tab
                return false;
            }else if(obj.title==='表单'){
                layer.confirm('未保存的数据可能会丢失哦，确定要关闭吗?', { icon: 3, title: '系统提示' }, function (index) {
                    tab.deleteTab(obj.tabId);
                    layer.close(index);
                });
                return false;
            }
            return true;
        }
    });
    //iframe自适应
    $(window).on('resize', function () {
        var $content = $('.admin-nav-card .layui-tab-content');
        $content.height($(this).height() - 147);
        $content.find('iframe').each(function () {
            $(this).height($content.height());
        });
    }).resize();

    //设置navbar
    navbar.set({
        spreadOne: true,
        elem: '#admin-navbar-side',
        cached: true,
        data: navs
		/*cached:true,
		url: 'datas/nav.json'*/
    });
    //渲染navbar
    navbar.render();
    //监听点击事件
    navbar.on('click(side)', function (data) {
        tab.tabAdd(data.field);
    });
    //清除缓存
    $('#clearCached').on('click', function () {
        navbar.cleanCached();
        layer.alert('清除完成!', { icon: 1, title: '系统提示' }, function () {
            location.reload();//刷新
        });
    });

    $('.admin-side-toggle').on('click', function () {
        var sideWidth = $('#admin-side').width();
        if (sideWidth === 200) {
            $('#admin-body').animate({
                left: '0'
            }); //admin-footer
            $('#admin-footer').animate({
                left: '0'
            });
            $('#admin-side').animate({
                width: '0'
            });
        } else {
            $('#admin-body').animate({
                left: '200px'
            });
            $('#admin-footer').animate({
                left: '200px'
            });
            $('#admin-side').animate({
                width: '200px'
            });
        }
    });
    $('.admin-side-full').on('click', function () {
        var docElm = document.documentElement;
        //W3C  
        if (docElm.requestFullscreen) {
            docElm.requestFullscreen();
        }
        //FireFox  
        else if (docElm.mozRequestFullScreen) {
            docElm.mozRequestFullScreen();
        }
        //Chrome等  
        else if (docElm.webkitRequestFullScreen) {
            docElm.webkitRequestFullScreen();
        }
        //IE11
        else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        }
        layer.msg('按Esc即可退出全屏');
    });

    $('#setting').on('click', function () {
        tab.tabAdd({
            href: '/Manage/Account/Setting/',
            icon: 'fa-gear',
            title: '设置'
        });
    });

    //锁屏
    $(document).on('keydown', function () {
        var e = window.event;
        if (e.keyCode === 76 && e.altKey) {
            //alert("你按下了alt+l");
            lock($, layer);
        }
    });
    $('#lock').on('click', function () {
        lock($, layer);
    });

    //手机设备的简单适配
    var treeMobile = $('.site-tree-mobile'),
        shadeMobile = $('.site-mobile-shade');
    treeMobile.on('click', function () {
        $('body').addClass('site-mobile');
    });
    shadeMobile.on('click', function () {
        $('body').removeClass('site-mobile');
    });
});


var navs = [{
    "title": "基本配置",
    "icon": "fa-cubes",
    "spread": false,
    "children": [ {
        "title": "网站信息(中文)",
        "icon": "&#xe63c;",
        "href": "<?php echo U('Admin/Index/chInformation',array('language'=>0));?>"
    }, {
        "title": "网站信息(英文)",
        "icon": "&#xe63c;",
        "href": "<?php echo U('Admin/Index/chInformation',array('language'=>1));?>"
    },
    {
        "title": "关于我们（中文）",
        "icon": "&#xe63c;",
        "href": "<?php echo U('Admin/Index/about',array('language'=>0));?>"
    }, {
        "title": "关于我们（英文）",
        "icon": "&#xe609;",
        "href":"<?php echo U('Admin/Index/about',array('language'=>1));?>"
    }, {
        "title": "先进技术（中文）",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/technology',array('language'=>0));?>"
    },{
        "title": "先进技术（英文）",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/technology',array('language'=>1));?>"
    }
    ,{
        "title": "资质认证",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/qualifications');?>"
    }
    ,{
        "title": "合作伙伴",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/partner');?>"
    }
    ,{
        "title": "图片配置",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/picture');?>"
    }
    ,{
        "title": "公司优势(中文)",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/advantage',array('state'=>6));?>"
    }
    ,{
        "title": "公司优势(英文)",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/advantage',array('state'=>7));?>"
    },{
        "title": "修改密码",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/dispassword');?>"
    }

    ]
}, {
    "title": "公司产品",
    "icon": "fa-cogs",
    "spread": false,
    "children": [{
        "title": "产品分类",
        "icon": "fa-table",
        "href": "<?php echo U('Admin/Index/fenlei');?>"
    }, {
        "title": "添加产品",
        "icon": "fa-navicon",
        "href": "<?php echo U('Admin/Index/addproduct');?>"
    }, {
        "title": "产品列表",
        "icon": "&#xe62a;",
        "href": "<?php echo U('Admin/Index/product');?>"
    }]
}, {
    "title": "公司新闻",
    "icon": "&#x1002;",
    "spread": false,
    "children": [{
        "title": "新闻发布",
        "icon": "&#xe609;",
        "href": "<?php echo U('Admin/Index/news');?>"
    }, {
        "title": "新闻列表(中文)",
        "icon": "&#xe609;",
        "href": "<?php echo U('Admin/Index/newslist',array('language'=>0));?>"
    },  {
        "title": "新闻列表(英文)",
        "icon": "&#xe609;",
        "href": "<?php echo U('Admin/Index/newslist',array('language'=>1));?>"
    },
]
}, {
    "title": "留言",
    "icon": "fa-address-book",
    "href": "",
    "spread": false,
    "children": [{
        "title": "查看留言",
        "icon": "&#xe60c;",
        "href": "<?php echo U('Admin/Index/messlist');?>"
    }
]
}];
</script>