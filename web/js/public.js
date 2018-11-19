//  ========== 
//  = 小插件 = 
//  ========== 
function top_1(){
		//二维码隐藏和显示
			var weixin=document.getElementById("top_weixin");
			var iphone=document.getElementById("top_iphone");
			var kongbai=document.getElementById("kongbai_weixin");
			var kongbai1=document.getElementById("kongbai_iphone");
			
			weixin.onmouseover=function(){
				kongbai.style.display="block";
			}
			weixin.onmouseout=function(){
			kongbai.style.display="none";
			}
			iphone.onmouseover=function(){
				kongbai1.style.display="block";
			}
			iphone.onmouseout=function(){
			kongbai1.style.display="none";
			}
		//三个图标滑出
			$(function() {
			     $(window).scroll(function() {
			         if ($(window).scrollTop() > 100) {
			             $('#top_top').fadeIn(1000);
			             $('#top_weixin').fadeIn(1000);
			             $('#top_iphone').fadeIn(1000);
			             
			         } else {
			             $("#top_top").fadeOut(100);
			             $("#top_weixin").fadeOut(100);
			             $("#top_iphone").fadeOut(100);
			         }
			     });
			 })
		//客服聊天
			var $kefu = $(".kefu");
    		var $cancel = $(".cancel");
    		$cancel.click(function () {
      			  $kefu.hide();
  			});
}


