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
				<legend>公司优势</legend>
				<div class="layui-field-box layui-form">
					<table class="layui-table admin-table">
						<thead>
							<tr style="text-align: center;">
								<th>名称</th>
								<th>图片</th>
								<th>备注</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php if(is_array($data)): foreach($data as $key=>$data): ?><tr style="text-align: center;">
									<td><?php echo ($data["name"]); ?></td>
									<td><img src="/ruopusuye/Public/Uploads/<?php echo ($data["urlimg"]); ?>" style="width: 200px;"></td>
									<td><?php echo ($data["remarks"]); ?></td>
									<td>
										<a href="<?php echo U('Admin/Index/exitadva',array('id'=>$data['id']));?>" data-name="{{ item.name }}" data-opt="edit" class="layui-btn layui-btn-mini">编辑</a>
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