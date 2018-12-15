function showout() {
    //点击按钮，按钮属性改变
    var $lea0 = $("#le-a0");
    var $lea1 = $("#le-a1");
    var $infor = $("#infor");
    var $leave = $("#leave");
    var $main = $("#main");
    var $content = $("#content");
    var $ra0 = $("#r-a0");
    $lea0.click(function () {
        //按钮样式切换
        $lea0.addClass("show");
        $lea1.removeClass("show");
        //右侧留言及信息内容切换
        $infor.css("display", "block");
        $leave.css("display", "none");
    });
    $lea1.click(function () {
        $lea1.addClass("show");
        $lea0.removeClass("show");
        $infor.css("display", "none");
        $leave.css("display", "block");
        $main.css("height", "1600");
        $content.css("height", "700");
    });
}
//留言提示文字点击隐藏
function checkTArea() {
    $textArea = $("textarea");
    $hidd = $(".hidd");
    $textArea.click(function () {
        $hidd.hide();
    });
}
//验证手机号
function checkPhone(){
    var userphone = document.getElementById('userPhone');
    var phonrErr = document.getElementById('phone');
    var pattern = /^1[34578]\d{9}$/; //验证手机号正则表达式
    var pat = /^[^ ]{6,16}$/;
    if(pattern.test(userphone.value)){
        phonrErr.innerHTML="OK";
        phonrErr.className="success";
        return true;
    }
    else if(userphone.value.length == 0){
        console.log(1);
        phonrErr.innerHTML="电话号码不能为空";
        phonrErr.className="error";
        return false;
    }
    else if(pat.test(userphone.value)){
        phonrErr.innerHTML="手机号码不能包含空格";
        phonrErr.className="error";
        return false;
    }
  else {
        phonrErr.innerHTML="手机号码不合规范";
        phonrErr.className="error";
        return false;
    }
}
//验证用户名
function checkUserName(){
    var username = document.getElementById('userName');
    var errname = document.getElementById('nameErr');
    var pat = /^[^ ]{6,16}$/;
    if(username.value.length == 0){
        console.log(1);
        errname.innerHTML="用户名不能为空";
        errname.className="error";
        return false;
    }
    else if(pat.test(username.value)){
        phonrErr.innerHTML="姓名输入不能包含空格";
        phonrErr.className="error";
        return false;
    }
    else{
        errname.innerHTML="OK";
        errname.className="success";
        return true;
    }
}
//验证地址
function checkUserArea() {
    var userArea = document.getElementById('userArea');
    var dizhierr= document.getElementById('dizhi');
    if(userArea.value.length == 0){
        console.log(1);
        dizhierr.innerHTML="地址不能为空";
       dizhierr.className="error";
        return false;
    }
    else{
        dizhierr.innerHTML="OK";
        dizhierr.className="success";
        return true;
    }
}
//检查邮箱
function checkUserEmail() {
    var userEmail = document.getElementById('userEmail');
    var emilerr= document.getElementById('emil');
    if(userEmail.value.length == 0){
        console.log(1);
        emilerr.innerHTML="邮箱不能为空";
        emilerr.className="error";
        return false;
    }
    else{
        emilerr.innerHTML="OK";
        emilerr.className="success";
        return true;
    }
}
// 验证留言
function checkText() {
    var userText = document.getElementById('userText');
    var areaerr= document.getElementById('area');
    if(userText.value.length == 0){
        areaerr.innerHTML="留言不能为空";
        areaerr.className="error";
        return false;
    }
    else{
       areaerr.innerHTML="OK";
       areaerr.className="success";
        return true;
    }
}