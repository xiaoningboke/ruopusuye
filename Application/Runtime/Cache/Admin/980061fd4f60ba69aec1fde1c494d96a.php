<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
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
	  $(document).ready(function () {  
	      UE.getEditor('infos', {  
	      initialFrameHeight: 500,  
	      initialFrameWidth: 800,  
	      serverUrl: "<?php echo U(MODULE_NAME.'/Index/save_info');?>"  
	    });  
	  });  
	</script>
	<body>
		<div class="admin-main">
			<fieldset class="layui-elem-field">
				<legend>产品分类</legend>
				<div class="layui-field-box layui-form">
				<form class="layui-form" action="<?php echo U('Admin/Index/exitproductBy');?>" enctype="multipart/form-data" method="post">
				<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
				<div class="layui-form-item">
					<label class="layui-form-label">中文名称</label>
					<div class="layui-input-block">
						<input type="text" name="name" value="<?php echo ($data["name"]); ?>"  lay-verify="title" autocomplete="off" placeholder="请输入中文名称"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">英文名称</label>
					<div class="layui-input-block">
						<input type="text" name="enname" value="<?php echo ($data["enname"]); ?>"  lay-verify="title" autocomplete="off" placeholder="请输入英文名称"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">图片</label>
					<div class="layui-input-block">
						<input type="file" name="enname" value="<?php echo ($data["enname"]); ?>"  lay-verify="title" autocomplete="off" placeholder="请输入图片"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">中文简介</label>
					<div class="layui-input-block">
						<textarea name="content" id="info" style="width:1000px;height:500px;"><?php echo ($data["content"]); ?></textarea>
					</div>
				</div>
				 <div class="layui-form-item">
					<label class="layui-form-label">英文简介</label>
					<div class="layui-input-block">
						<textarea name="encontent" id="infos" style="width:1000px;height:500px;"><?php echo ($data["encontent"]); ?></textarea>
					</div>
				</div>
				<div style="padding: 10px;">
				</div>
				<div class="layui-form-item">
					<div class="layui-input-block">
						<input type="submit" value="立即提交" class="layui-btn">
					</div>
				</div>
			</form>
				</div>


			</fieldset>
			<div class="admin-table-page">
				<div id="paged" class="page">
				</div>
			</div>
		</div>
		<script type="text/javascript" src="/ruopusuye/Public/Admin/plugins/layui/layui.js"></script>
		<script>
			layui.use(['form', 'layedit', 'laydate'], function() {
				var form = layui.form(),
					layer = layui.layer,
					layedit = layui.layedit,
					laydate = layui.laydate;

				//创建一个编辑器
				var editIndex = layedit.build('LAY_demo_editor');
				//自定义验证规则
				form.verify({
					title: function(value) {
						if(value.length < 1) {
							return '不能为空';
						}
					},
					pass: [/(.+){6,12}$/, '密码必须6到12位'],
					content: function(value) {
						layedit.sync(editIndex);
					}
				});

				//监听提交
				form.on('submit(demo1)', function(data) {
					layer.alert(JSON.stringify(data.field), {
						title: '最终的提交信息'
					})
					return false;
				});
			});
		</script>