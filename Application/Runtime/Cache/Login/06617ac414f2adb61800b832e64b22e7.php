<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/ruopusuye/Public/login/css/bootstrap.css">
    <link rel="stylesheet" href="/ruopusuye/Public/login/css/login.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.css">

    <script src="/ruopusuye/Public/login/j/js/jquery.js"></script>
    <script src="/ruopusuye/Public/login/j/js/bootstrap.js"></script>

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>请登录您的用户</title>
</head>
<body>

    <div>
        <div class="be-content pren">

            <div class="ioc_text">
                <img src="/ruopusuye/Public/login/logo.png" alt="">
                <span>请登录您的用户</span>
            </div>

            <div>
                <form action="<?php echo U('Login/Index/login');?>" method="post">
                    <div class="br-content">

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-user"></i></span>
                             </div>
                             <input type="text" name="username" class="form-control" placeholder="用户名">
                         </div>

                         <div class="input-group mb-4 bootint">
                             <div class="input-group-prepend">
                                 <span class="input-group-text"><i class="fa fa-unlock-alt"></i></span>
                             </div>
                             <input type="password" name="password" class="form-control" placeholder="密码">
                         </div>

                        <div class="br-text">
                        </div>
                        <div style="padding-top: 10px">
                            <input type="submit" class="btn" value="登录">
                        </div>
                        <div class="be-con">
                            <span>Copyright © 2018 - 2019</span>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>

</body>
</html>