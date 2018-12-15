function dis() {
    var $left = $(".L_a");
    var $hid = $(".hid");
    var $pic = $(".pic_pic");
   $pic.children("img").mouseover(function () {
        //缩放动画
        $(this).stop().animate({height:'260px', width:'294px',top:'-20px',left:'-20px'},"100");
    });
    $pic.children("img").mouseout(function () {
        $(this).stop().animate({height:'220px',width:'254px',top:'0',left:'0'},"100");
    });
    for($i=0;$i<$left.children("a").length;$i++) {
        $left.children("a").get($i).onclick = function () {
            $hid.children("div").eq($(this).index()).show();
            $hid.children("div").eq($(this).index()).siblings().hide();
        }
    }

}