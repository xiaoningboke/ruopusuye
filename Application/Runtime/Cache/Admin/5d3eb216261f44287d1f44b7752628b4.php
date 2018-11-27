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
				<legend>合作伙伴</legend>
				<div class="layui-field-box layui-form">
				<form class="layui-form" action="<?php echo U('Admin/Index/addpartner');?>" enctype="multipart/form-data" method="post">
				
				<div class="layui-form-item">
					<label class="layui-form-label">中文名称</label>
					<div class="layui-input-block">
						<input type="text" name="cnname"  lay-verify="title" autocomplete="off" placeholder="请输入中文名称"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">英文名称</label>
					<div class="layui-input-block">
						<input type="text" name="enname"  lay-verify="title" autocomplete="off" placeholder="请输入英文名称"  class="layui-input" >
					</div>
				</div>
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
							<tr style="text-align: center;">
								<th>中文名称</th>
								<th>英文名称</th>
								<th>图标</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr style="text-align: center;">
									<td><?php echo ($vo["cnname"]); ?></td>
									<td><?php echo ($vo["enname"]); ?></td>
									<td><img src="/ruopusuye/Public/Uploads/<?php echo ($vo["imgurl"]); ?>" style="width: 300px;"></td>
									<td>
										<a href="<?php echo U('Admin/Index/exitpartner',array('id'=>$vo['id']));?>" data-name="{{ item.name }}" data-opt="edit" class="layui-btn layui-btn-mini">编辑</a>
										<a href="<?php echo U('Admin/Index/delpartner',array('id'=>$vo['id']));?>" data-name="{{ item.name }}" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">删除</a> 
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