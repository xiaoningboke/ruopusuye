
//  ========== 
//  = 无缝滚动 = 
//  ========== 
function pro(){
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


//  ==========
//  = 产品展示触碰变暗 = 
//  ========== 
function main(){	
			$(".main_2_bottom").mouseenter(function(event){
		        $(this).find('a').fadeIn(500);
		        $(this).find('h4').fadeIn(500);
		        $(this).find('img').css("opacity", "0.3");
		    });
		   
		    $(".main_2_bottom").mouseleave(function(event) {
		        $(this).find('a').fadeOut(300);
		        $(this).find('h4').fadeOut(300);
		        $(this).find('img').css("opacity", "");
		    })
}
//  ========== 
//  = 小插件 = 
//  ========== 
function top_1(){
		$(function() {
		     $(window).scroll(function() {
		         if ($(window).scrollTop() > 400) {
		             $('#top_1').fadeIn(1000);
		             $('#top_2').fadeIn(1000);
		             $('#top_3').fadeIn(1000);
		             
		         } else {
		             $("#top_1").fadeOut(100);
		             $("#top_2").fadeOut(100);
		             $("#top_3").fadeOut(100);
		         }
		     });
		 })
}
//  ========== 
//  = 二维码隐藏和显示 = 
//  ========== 
function top_2(){
	var weixin=document.getElementById("top_2");
	var kongbai=document.getElementById("kongbai_1");
//	console.log(weixin);
	weixin.onmouseover=function(){
		kongbai.style.display="block";
	}
	weixin.onmouseout=function(){
		kongbai.style.display="none";
	}
}
