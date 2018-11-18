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
				<legend>网站的基本信息</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitInformation');?>" method="post">
				<div class="layui-form-item">
					<label class="layui-form-label">公司名称</label>
					<div class="layui-input-block">
						<input type="text" name="name" value="<?php echo ($data["name"]); ?>" lay-verify="title" autocomplete="off" placeholder="请输入公司名称" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">联系人</label>
					<div class="layui-input-block">
						<input type="text" name="contacts" value="<?php echo ($data["contacts"]); ?>" lay-verify="required" placeholder="请输入联系人" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">QQ</label>
					<div class="layui-input-block">
						<input type="text" name="qq" value="<?php echo ($data["qq"]); ?>" lay-verify="required" placeholder="请输入QQ" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">手机</label>
					<div class="layui-input-inline">
						<input type="tel" name="phone" lay-verify="phone" value="<?php echo ($data["phone"]); ?>"  placeholder="请输入手机号"  autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">微信</label>
					<div class="layui-input-block">
						<input type="text" name="wechat" value="<?php echo ($data["wechat"]); ?>" lay-verify="required" placeholder="请输入微信" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">邮箱</label>
					<div class="layui-input-inline">
						<input type="text" name="email" value="<?php echo ($data["email"]); ?>" placeholder="请输入邮箱" lay-verify="email" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">地址</label>
					<div class="layui-input-block">
						<input type="text" name="longitude" value="<?php echo ($data["longitude"]); ?>" lay-verify="required" placeholder="请输入地址" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">经度</label>
					<div class="layui-input-block">
						<input type="text" name="address" value="<?php echo ($data["address"]); ?>" lay-verify="required" placeholder="请输入经度" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">纬度</label>
					<div class="layui-input-block">
						<input type="text" name="latitude" value="<?php echo ($data["latitude"]); ?>" lay-verify="required" placeholder="请输入纬度" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">关键字（SEO）</label>
					<div class="layui-input-block">
						<input type="text" name="keywords" value="<?php echo ($data["keywords"]); ?>" lay-verify="required" placeholder="请输入网站关键字用‘,’隔开" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">网站描述（SEO）</label>
					<div class="layui-input-block">
						<input type="text" name="description" value="<?php echo ($data["description"]); ?>" lay-verify="required" placeholder="请输入网站的描述" autocomplete="off" class="layui-input">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">备案号</label>
					<div class="layui-input-block">
						<input type="text" name="record" value="<?php echo ($data["record"]); ?>" lay-verify="required" placeholder="请输入网站的备案号" autocomplete="off" class="layui-input">
					</div>
				</div>
				
				<div class="layui-form-item">
					<div class="layui-input-block">
						<input type="submit" value="立即提交" class="layui-btn">
					</div>
				</div>
			</form>
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
							return '标题至少得1个字符啊';
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
	</body>

</html>