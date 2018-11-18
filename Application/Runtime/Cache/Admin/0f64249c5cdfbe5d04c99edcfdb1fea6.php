<?php if (!defined('THINK_PATH')) exit();?>	<!DOCTYPE html>
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
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="/ruopusuye/Public/Ueditor/ueditor.config.js"></script>  
	<script type="text/javascript" src="/ruopusuye/Public/Ueditor/ueditor.all.min.js"></script>  
	<script type="text/javascript" src="/ruopusuye/Public/Ueditor/lang/zh-cn/zh-cn.js"></script>  
	<script type="text/javascript" charset="utf-8">  
	   window.UEDITOR_HOME_URL = "/ruopusuye/Public/Ueditor/";  
	    $(document).ready(function () {  
	      UE.getEditor('info', {  
	      initialFrameHeight: 500,  
	      initialFrameWidth: 800,  
	      serverUrl: "<?php echo U(MODULE_NAME.'/Index/save_info');?>"  
	    });  
	  });    
	</script>
	<body>
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend>网站的基本信息</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitInformation');?>" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">公司图片</label>
					<div class="layui-input-block">
						<input type="file" name="name" value="<?php echo ($data["name"]); ?>" lay-verify="title" autocomplete="off" placeholder="请输入公司名称" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">公司图片</label>
					<div class="layui-input-block">
					<textarea name="info" id="info" style="width:1000px;height:500px;"></textarea>  
					</div>
				</div>
				<div style="padding: 20px;">
				</div>

			</form>
		</div>
	</body>

</html>