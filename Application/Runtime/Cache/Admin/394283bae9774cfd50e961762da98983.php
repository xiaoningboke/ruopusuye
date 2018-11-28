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
<link rel="stylesheet" href="/ruopusuye/Public/Admin/css/rep.css" />
 <body>
        <div class="admin-main">
            <fieldset class="layui-elem-field">
                <legend>产品列表</legend>
                <div class="layui-field-box layui-form">
                    <table class="layui-table admin-table" id="admin-table">
                        <thead>
                            <tr>
                                <th>产品名称</th>
                                <th>英文名称</th>
                                <th>分类</th>
                                <th>操作</th>
                            </tr>
                        </thead>
                       <tbody id="content">
                          <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
                                <td><?php echo ($vo["pname"]); ?></td>
                                <td><?php echo ($vo["enname"]); ?></td>
                                <td><?php echo ($vo["name"]); ?></td>
                                <td>
                                    <a href="<?php echo U('Admin/Index/version',array('id'=>$vo[id]));?>" class="layui-btn layui-btn-normal layui-btn-mini">添加型号</a>
                                    <a  href="<?php echo U('Admin/Index/exitproduct',array('id'=>$vo[id]));?>" class="layui-btn layui-btn-mini">修改</a>
                                    <a href="<?php echo U('Admin/Index/delproduct',array('id'=>$vo[id]));?>" data-id="1" data-opt="del" class="layui-btn layui-btn-danger layui-btn-mini">删除</a>
                                </td>
                            </tr><?php endforeach; endif; ?>
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
    <script>
    var stateArr = document.getElementsByClassName("classification");
for(var i = 0;i<stateArr.length;i++){
    if(stateArr[i].innerText==="1"){
          stateArr[i].innerText= "行业新闻";
    }else{
        stateArr[i].innerText= "公司动态";
    }
}
        var times = document.getElementsByClassName("sj");
        for(var i = 0;i<times.length;i++){
        times[i].innerText =  timestampToTime(times[i].innerText)
        //console.log(times[i].innerText);
}
    function timestampToTime(timestamp) {
        var date = new Date(timestamp * 1000);//时间戳为10位需*1000，时间戳为13位的话不需乘1000
        Y = date.getFullYear() + '-';
        M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
        D = date.getDate() + ' ';
        return Y+M+D;
    }
    </script>

</html>