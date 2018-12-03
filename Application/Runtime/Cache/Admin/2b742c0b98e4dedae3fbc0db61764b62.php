<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>团队介绍</title>
    <link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/csh.css">
    <link rel="stylesheet" type="text/css" href="/ruopusuye/Public/css/fengye.css">
</head>
<body>
<div class="container">
    <div class="main">
        <div class="main1">开发团队</div>
        <div class="main2">千行软件工作室</div>
        <div class="main3">系统信息</div>
        <div class="main4">
        <!-- 系统名称 -->
            <div class="tow1">
            操作环境<br>
            运行环境<br>
            PHP版本<br>
            PHP运行方式<br>
             MYSQL版本<br>
             上传附件限制<br>
             执行时间限制<br>
             剩余空间</div>
             <!-- 系统参数 -->
            <div class="tow1">
            <?PHP echo PHP_OS; ?><br>
            microsoft-lls/7.5<br>
            <?PHP echo PHP_VERSION; ?> <br>
            cgi-fcgi<br>
            <?php echo ($mysqlMess); ?><br>
            <?PHP echo get_cfg_var ("upload_max_filesize")?get_cfg_var ("upload_max_filesize"):"不允许上传附件"; ?> <br>
            <?PHP echo get_cfg_var("max_execution_time")."秒 "; ?> <br>
            <?PHP echo get_cfg_var ("memory_limit")?get_cfg_var("memory_limit"):"无" ?>
            </div>
        </div>
        
    </div>
</div>
</body>
</html>