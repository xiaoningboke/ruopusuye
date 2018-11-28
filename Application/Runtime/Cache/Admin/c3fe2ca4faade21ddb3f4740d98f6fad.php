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
				<form class="layui-form" action="<?php echo U('Admin/Index/addversion');?>" enctype="multipart/form-data" method="post">
				<input type="hidden" name="product_id" value="<?php echo ($id); ?>">
				<div class="layui-form-item">
					<label class="layui-form-label">产品型号</label>
					<div class="layui-input-block">
						<input type="text" name="xinghao"  lay-verify="title" autocomplete="off" placeholder="请输入产品型号"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">产品价格</label>
					<div class="layui-input-block">
						<input type="text" name="price"  lay-verify="title" autocomplete="off" placeholder="请输入产品价格"  class="layui-input" >
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">选择图片</label>
					<div class="layui-input-block">
						<input type="file" name="photo"  lay-verify="title" autocomplete="off"  class="layui-input" >
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
					<table class="layui-table admin-table">
						<thead>
							<tr style="text-align: center;">
								<th>型号</th>
								<th>图片</th>
								<th>价格</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr style="text-align: center;">
									<td><?php echo ($vo["xinghao"]); ?></td>
									<td><img src="/ruopusuye/Public/Uploads/<?php echo ($vo["imgurl"]); ?>" style="width: 200px;"></td>
									<td><?php echo ($vo["price"]); ?></td>
									<td>
										<a href="<?php echo U('Admin/Index/exitfenlei',array('id'=>$vo['id']));?>" data-name="{{ item.name }}" data-opt="edit" class="layui-btn layui-btn-mini">编辑</a>
										<a href="<?php echo U('Admin/Index/delfenlei',array('id'=>$vo['id']));?>" data-name="{{ item.name }}" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">删除</a> 
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