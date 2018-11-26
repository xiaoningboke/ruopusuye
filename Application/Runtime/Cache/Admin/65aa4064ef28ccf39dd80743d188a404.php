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
				<legend>先进技术</legend>
				<div class="layui-field-box layui-form">
				<form class="layui-form" action="<?php echo U('Admin/Index/addqualifications');?>" enctype="multipart/form-data" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">选择图片</label>
					<div class="layui-input-block">
						<input type="file" name="photo"  lay-verify="title" autocomplete="off"  class="layui-input" >
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
					<table class="layui-table admin-table">
						<thead>
							<tr>
								<th>名称</th>
								<th>图片</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
									<td><?php echo ($vo["name"]); ?></td>
									<td><img src="/ruopusuye/Public/Uploads/<?php echo ($vo["urlimg"]); ?>" style="width: 300px;"></td>
									<td>
										<a href="<?php echo U('Admin/Index/delImg',array('id'=>$vo['id']));?>" class="layui-btn layui-btn-danger layui-btn-mini">删除</a>  
									</td>
								</tr><?php endforeach; endif; ?>
						</tbody>
					</table>
				</div>


			</fieldset>
			<div class="admin-table-page">
				<div id="paged" class="page">
				</div>
			</div>
		</div>