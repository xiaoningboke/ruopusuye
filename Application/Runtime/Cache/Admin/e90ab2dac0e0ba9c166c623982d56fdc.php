<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
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
<link rel="stylesheet" href="/ruopusuye/Public/css/rep.css" />
 <body>
        <div class="admin-main">
            <fieldset class="layui-elem-field">
                <legend>数据列表</legend>
                <div class="layui-field-box layui-form">
                    <table class="layui-table admin-table" id="admin-table">
                        <thead>
                            <tr>
                                <th>用户名</th>
                                <th>联系电话</th>
                                <th>联系地址</th>
                                <th>操作</th>
                            </tr>
                        </thead>
       <tbody id="content">
          <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                <td><?php echo ($data[username]); ?></td>
                <td><?php echo ($data[userphone]); ?></td>
                <td><?php echo ($data[userarea]); ?></td>

                <td>
                    <a  href="<?php echo U('message',array('id'=>$data[id]));?>" class="layui-btn layui-btn-mini">查看详情</a>
                    <a href="<?php echo U('messdell',array('id'=>$data[id]));?>" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">删除</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            <input type="hidden" name="id" value="<?php echo ($data[id]); ?>">

    </tbody>
  </table>
</div>
            </fieldset>
            <div class="admin-table-page">
                <div class="result page"><?php echo ($page); ?></div>
            </div>
        </div>
    </body>

</html>