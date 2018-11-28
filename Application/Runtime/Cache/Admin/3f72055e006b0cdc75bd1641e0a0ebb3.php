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
	<body>
		<div class="admin-main">
			<fieldset class="layui-elem-field">
				<legend>产品分类</legend>
				<div class="layui-field-box layui-form">
				<form class="layui-form" action="<?php echo U('Admin/Index/exitByIdfenlei');?>" enctype="multipart/form-data" method="post">
				
				<div class="layui-form-item">
					<label class="layui-form-label">中文名称</label>
					<div class="layui-input-block">
						<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>">
						<input type="text" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入中文名称" value="<?php echo ($data["name"]); ?>" class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">英文名称</label>
					<div class="layui-input-block">
						<input type="text" name="enname"  lay-verify="title" autocomplete="off" placeholder="请输入英文名称" value="<?php echo ($data["enname"]); ?>" class="layui-input" >
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