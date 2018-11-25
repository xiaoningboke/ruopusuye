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
				<legend>公司简介</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitContent');?>" enctype="multipart/form-data" method="post">
				<?php if($data["language"] == 0 ): ?><input type="hidden" name="id" value="1">
				    <?php else: ?> 
					<input type="hidden" name="id" value="2"><?php endif; ?>
				<input type="hidden" name="title" value="公司简介">
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
					<div style="text-align: center;">
						<img src="/ruopusuye/Public/Uploads/<?php echo ($data["imgurl"]); ?>" alt="" style="width: 300px;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
					<div style="text-align: center;">
						<img src="/ruopusuye/Public/Uploads/<?php echo ($data["imgurl"]); ?>" alt="" style="width: 300px;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
					<div style="text-align: center;">
						<img src="/ruopusuye/Public/Uploads/<?php echo ($data["imgurl"]); ?>" alt="" style="width: 300px;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
						<input type="file" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入先进技术" class="layui-input" >
					</div>
					<div style="text-align: center;">
						<img src="/ruopusuye/Public/Uploads/<?php echo ($data["imgurl"]); ?>" alt="" style="width: 300px;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">先进技术</label>
					<div class="layui-input-block">
					<textarea name="content" id="info" style="width:1000px;height:500px;"><?php echo ($data["content"]); ?></textarea>  
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