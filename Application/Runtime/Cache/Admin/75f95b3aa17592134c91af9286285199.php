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
				<legend>图片配置</legend>
				<div class="layui-field-box layui-form">
<!-- 				<form class="layui-form" action="<?php echo U('Admin/Index/addpicture');?>" enctype="multipart/form-data" method="post">
<div class="layui-form-item">
	<label class="layui-form-label">文件名称</label>
	<div class="layui-input-block">
		<input type="text" name="name"  lay-verify="title" autocomplete="off" placeholder="请输入文件名称"  class="layui-input" >
	</div>
</div>
<div class="layui-form-item">
	<label class="layui-form-label">语言</label>
	<div class="layui-input-block">
		<input type="radio" name="state" value="4"  title="中文" lay-filter="yesno">
		<input type="radio" name="state" value="5"  title="英文" lay-filter="yesno" >
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
			</form> -->
					<table class="layui-table admin-table">
						<thead>
							<tr style="text-align: center;">
								<th>名称</th>
								<th>图标</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody id="content">
							<?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr style="text-align: center;">
									<td><?php echo ($vo["name"]); ?></td>
									<td><img src="/ruopusuye/Public/Uploads/<?php echo ($vo["urlimg"]); ?>" style="width: 300px;"></td>
									<td>
										<a href="<?php echo U('Admin/Index/exitImg',array('id'=>$vo['id']));?>" data-name="{{ item.name }}" data-opt="edit" class="layui-btn layui-btn-mini">更换</a>
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
		
		<script type="text/javascript" src="/ruopusuye/Public/Admin/plugins/layui/layui.js"></script>
		<script>

			layui.use(['form', 'layedit', 'laydate'], function() {
				var form = layui.form(),
					layer = layui.layer,
					layedit = layui.layedit,
					laydate = layui.laydate;
			form.on('radio(yesno)', function (data) {
                if ($('#indexShow input[name="state"]:checked ').val() == "2") {
                    $("#tututu").hide();
                }
                else {
                    $("#tututu").show();
                }
                form.render();
            });

				//创建一个编辑器
				var editIndex = layedit.build('LAY_demo_editor');
				//自定义验证规则
				form.verify({
                    fname: function(value){
                        if(value.length < 1){
                            return '标题不为空';
                        }
                    },
                    content: function(value){
                        if(value.length < 1){
                            return '内容不为空';
                        }
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