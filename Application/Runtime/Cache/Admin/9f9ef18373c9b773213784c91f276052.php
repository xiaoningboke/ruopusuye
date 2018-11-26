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
				<legend>先进技术</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitTechnology');?>" enctype="multipart/form-data" method="post">
				<input type="text" name="id" value="<?php echo ($language); ?>">
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="photo[]"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="photo[]"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="photo[]"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="photo[]"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
				</div>
				<div style="width: 100%; text-align: center;">
					
					<?php if(is_array($fileData)): foreach($fileData as $key=>$vo): ?><div style="width: 20%; display: inline;">
							<img src="/ruopusuye/Public/Uploads/<?php echo ($vo["urlimg"]); ?>" style="width: 20%; padding: 20px;">
						</div><?php endforeach; endif; ?>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
					<textarea name="content" id="info" style="width:1000px;height:500px;"><?php echo ($conData["content"]); ?></textarea>  
					</div>
				</div>
				<div style="padding: 20px;">
				</div>
				<div class="layui-form-item">
					<div class="layui-input-block">
						<input type="submit" value="立即提交" class="layui-btn">
					</div>
				</div>
			</form>

		</div>
	</body>

</html>