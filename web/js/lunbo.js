
function lunbo(){
		//  ==========
		//  = 显示和隐藏 = 
		//  ========== 
		$(function() {
		    //$("#toright").hide();
		    //$("#toleft").hide();
		    $('#toright').hover(function() {
		        $("#toleft").hide()
		    }, function() {
		        $("#toleft").show()
		    })
		    $('#toleft').hover(function() {
		        $("#toright").hide()
		    }, function() {
		        $("#toright").show()
		    })
		})
		//  ========== 
		//  = 自动播放 = 
		//  ========== 
		var t;
		var index = 0;
		var imgs=3;		//图片和和li数量
		t = setInterval(play,3000)
		
		function play() {
		    index++;
		    if (index > imgs) {
		        index = 0
		    }
		    // console.log(index)
		    $("#lunbobox ul li").eq(index).css({
		        "background": "#999",
		        "border": "1px solid #ffffff"
		    }).siblings().css({
		        "background": "#cccccc",
		        "border": ""
		    })
		
		    $(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000);
		};
		
		///点击鼠标 图片切换
		$("#lunbobox ul li").click(function() {
		
		    //添加 移除样式
		    //$(this).addClass("lito").siblings().removeClass("lito"); //给当前鼠标移动到的li增加样式 且其余兄弟元素移除样式   可以在样式中 用hover 来对li 实现
		    $(this).css({
		        "background": "#999",
		        "border": "1px solid #ffffff"
		    }).siblings().css({
		        "background": "#cccccc"
		    })
		    var index = $(this).index(); //获取索引 图片索引与按钮的索引是一一对应的
		    // console.log(index);
		
		    $(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); // siblings  找到 兄弟节点(不包括自己）
		});
		
		/////////////上一张、下一张切换
		$("#toleft").click(function() {
		    index--;
		    if (index <= 0) //判断index<0的情况为：开始点击#toright  index=0时  再点击 #toleft 为负数了 会出错
		    {
		        index = imgs;
		    }
		    console.log(index);
		    $("#lunbobox ul li").eq(index).css({
		        "background": "#999",
		        "border": "1px solid #ffffff"
		    }).siblings().css({
		        "background": "#cccccc"
		    })
		
		    $(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); // siblings  找到 兄弟节点(不包括自己）必须要写
		}); // $("#imgbox a ")获取到的是一个数组集合 。所以可以用index来控制切换
		
		$("#toright").click(function() {
		    index++;
		    if (index > imgs) {
		        index = 0
		    }
		    console.log(index);
		    $(this).css({
		        "opacity": "0.5"
		    })
		    $("#lunbobox ul li").eq(index).css({
		        "background": "#999",
		        "border": "1px solid #ffffff"
		    }).siblings().css({
		        "background": "#cccccc"
		    })
		    $(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000); // siblings  找到 兄弟节点(不包括自己）
		});
		$("#toleft,#toright").hover(function() {
		        $(this).css({
		            "color": "black"
		        })
		    },
		    function() {
		        $(this).css({
		            "opacity": "0.3",
		            "color": ""
		        })
		    })
		///
		
		///////鼠标移进  移出
		$("#lunbobox ul li,.lunbo a img,#toright,#toleft ").hover(
		    ////////鼠标移进
		    function() {
		        $('#toright,#toleft').show()
		        clearInterval(t);
		
		    },
		    ///////鼠标移开
		    function() {
		        //$('#toright,#toleft').hide()
		        //alert('aaa')
		        t = setInterval(play, 3000)
		
		        function play() {
		            index++;
		            if (index > imgs) {
		                index = 0
		            }
		            $("#lunbobox ul li").eq(index).css({
		                "background": "#999",
		                "border": "1px solid #ffffff"
		            }).siblings().css({
		                "background": "#cccccc"
		            })
		            $(".lunbo a ").eq(index).fadeIn(1000).siblings().fadeOut(1000);
		        }
		    })
}
//  ========== 
//  = 无缝滚动 = 
//  ========== 
function scroll(){
		$(function(){
			var oul = $('.main_2_bottom ul');
			var oulHtml = oul.html();
			oul.html(oulHtml+oulHtml)
			var timeId = null;
			var ali = $('.main_2_bottom ul li');
			var aliWidth = ali.eq(0).width();
			var aliSize = ali.size();
			var ulWidth = aliWidth*aliSize;
			oul.width(ulWidth);	
			var speed = 1;
			function slider(){
				if(speed>0){
					if(oul.css('left')=='0px'){
			 		oul.css('left',-ulWidth/2+'px');
				 	}
				 	oul.css('left','+='+speed+'px');
				}
			 	
			 }
			// setInterval()函数的作用是：每隔一段时间，执行该函数里的代码
			 timeId = setInterval(slider,30);
			$('.main_2_bottom').mouseover(function(){
				clearInterval(timeId);	
			});
			$('.main_2_bottom').mouseout(function(){
				timeId = setInterval(slider,30);
			});
		});
}

