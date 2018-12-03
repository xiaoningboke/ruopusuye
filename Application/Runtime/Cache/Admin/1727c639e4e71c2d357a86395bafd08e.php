<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8">
		<title>若普塑业官网后台管理</title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="format-detection" content="telephone=no">

		<link rel="stylesheet" href="/ruopusuye/Public/Admin/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/ruopusuye/Public/Admin/plugins/font-awesome/css/font-awesome.min.css">
	</head>
</head>
<body>
<div class="margin clearfix">
 <div class="article_style">
  <div style="margin: 15px;">
      <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
        <legend>网站的基本信息</legend>
      </fieldset>

      <form class="layui-form" method="post" action="<?php echo U('Admin/Index/exitpassword');?>" onsubmit = "return checkUser();" id = "userMsg">
        <div class="layui-form-item">
          <label class="layui-form-label">原密码</label>
          <div class="layui-input-block">
            <input type="password" id="oldpassword" name="oldpassword" value="" lay-verify="title" autocomplete="off" class="layui-input">
          </div>
        </div>
          <div class="layui-form-item">
          <label class="layui-form-label">新密码</label>
          <div class="layui-input-block">
            <input type="password" id="password" name="password" value="" lay-verify="title" autocomplete="off" class="layui-input">
          </div>
        </div>
          <div class="layui-form-item">
          <label class="layui-form-label">确认密码</label>
          <div class="layui-input-block">
            <input type="password" id="newpassword" name="newpassword" value="" lay-verify="title" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-form-item">
          <div class="layui-input-block">
            <input type="submit" value="立即提交" class="layui-btn">
          </div>
        </div>
      </form>
    </div>
 </div>
</div>
</body>
</html>
<script>
  function checkUser(){
   var oldpassword = document.getElementById("oldpassword").value;
   var password = document.getElementById("password").value;
   var newpassword = document.getElementById("newpassword").value;

   if(oldpassword == ""  ){
     alert("原密码不能为空");
     return false;
   }

  if(password == ""  ){
     alert("密码不能为空");
     return false;
   }
  if(newpassword == ""  ){
     alert("确认密码不能为空");
     return false;
   }
   if(password!=newpassword){
      alert("两次密码不一致");
     return false;
   }

  //document.getElementById("userMsg").submit();
}
</script>