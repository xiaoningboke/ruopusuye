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
	<body>
		<div style="margin: 15px;">
			<fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
				<legend>更换图片</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitByIdImg');?>" enctype="multipart/form-data" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">选择图片</label>
					<div class="layui-input-block">
						<input type="file" name="photo"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
				</div>
				<input type="hidden" name = "id" value="<?php echo ($fileData["id"]); ?>">
				<img src="/ruopusuye/Public/Uploads/<?php echo ($fileData["urlimg"]); ?>" style="width: 20%; padding: 20px;">
				<div class="layui-form-item">
					<div class="layui-input-block">
						<input type="submit" value="立即提交" class="layui-btn">
					</div>
				</div>
			</form>

		</div>
	</body>

</html>