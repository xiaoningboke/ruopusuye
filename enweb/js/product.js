function dis() {
    var $left = $("#left");
    var $hid = $(".hid");
    var $pic = $(".pic_pic");
    $pic.children("img").mouseover(function () {
        //缩放动画
        $(this).stop().animate({height:'260px', width:'294px',top:'-20px',left:'-20px'},"100");
    $pic.children("img").mouseout(function () {
        $(this).stop().animate({height:'220px',width:'254px',top:'0',left:'0'},"100");
    });
    $left.children("a").click(function () {
        //点击相应按钮产品展示内容切换
        $hid.children("div").eq($(this).index()-1).show();
        $hid.children("div").eq($(this).index()-1).siblings().hide();
        }
    );
});
}