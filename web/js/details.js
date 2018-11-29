//通过切换产品型号，修改展示图片
function changce() {
      var $ys = $(".yanse1");
      var $picl = $(".pic_L");
      var $price = [1100,2000,3000,4000,5000];
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
            console.log($picl.children("img").eq($(this).index()).attr("src"));
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