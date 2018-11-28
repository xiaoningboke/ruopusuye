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
	    	$("#tututu").hide();
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
				<legend>新闻通知</legend>
			</fieldset>

			<form class="layui-form" action="<?php echo U('Admin/Index/exitNews');?>" enctype="multipart/form-data" method="post">
				<input type="hidden" name="title" value="新闻通知">
				<div class="layui-form-item">
					<label class="layui-form-label">中英文</label>
					<div class="layui-input-block">
						<input type="radio" name="language" value="0" title="中文" checked="checked">
						<input type="radio" name="language" value="1" title="英文"  >
				</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">新闻标题</label>
					<div class="layui-input-block">
						<input type="text" name="name" autocomplete="off" placeholder="请输入新闻标题" class="layui-input" lay-verify="fname">
					</div>
				</div>
					<div class="layui-inline">
						<label class="layui-form-label">发布时间</label>
						<div class="layui-input-block">
							<input type="text" name="time" id="date" placeholder="请选择发布时间" autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
						</div>
					</div>
				<div class="layui-form-item">
					<label class="layui-form-label">首页展示</label>
					<div class="layui-input-block" id="indexShow">
						<input type="radio" name="state" value="1"  title="是" lay-filter="yesno">
						<input type="radio" name="state" value="2"  title="否" lay-filter="yesno" checked="checked">
				</div>
				</div>
				<div class="layui-form-item" id="tututu" >
					<label class="layui-form-label">首页图片</label>
					<div class="layui-input-block">
						<input type="file" name="name"  lay-verify="title" autocomplete="off" placeholder="" class="layui-input">
					</div>
					<div style="text-align: center;">
						<img src="/ruopusuye/Public/Uploads/<?php echo ($data["imgurl"]); ?>" alt="" style="width: 300px;">
					</div>
				</div>
				<div class="layui-form-item">
					<label class="layui-form-label">新闻分类</label>
					<div class="layui-input-block">
						<input type="radio" name="classification" value="1" title="行业新闻">
						<input type="radio" name="classification" value="2" title="公司动态"  checked="checked">
				</div>
				</div>
				  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">内容简介</label>
    <div class="layui-input-block">
      <textarea placeholder="请输入内容" name="abstracts" class="layui-textarea"></textarea>
    </div>
  </div>
				<div class="layui-form-item">
					<label class="layui-form-label">新闻内容</label>
					<div class="layui-input-block">
					<textarea name="content" id="info" style="width:1000px;height:500px;" lay-verify="content"><?php echo ($data["content"]); ?></textarea>
					</div>
				</div>
				<div style="padding: 20px;">
				</div>
				<div class="layui-form-item">
					<div class="layui-input-block">
						<input type="submit" value="立即提交" class="layui-btn"  lay-submit  lay-filter="go">
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

	function divClick(){
       var show="";
       var apm = document.getElementsByName("state");
       for(var i=0;i<apm.length;i++){
       if(apm[i].checked)
        show = apm[i].value;
    	//alert(show)
       }

       switch (show){
           case '1':
               document.getElementById("tututu").style.display="block";
               break;
           case '2':
               document.getElementById("tututu").style.display="none";
               break;
       }
}
		</script>
	</body>
</html>