<!DOCTYPE html>
<html>
<head>
    <style>
        .mycenter{
            margin-top: 100px;
            margin-left: auto;
            margin-right: auto;
            height: 350px;
            width:500px;
            padding: 5%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .mycenter mysign{
            width: 440px;
        }
        .mycenter input,checkbox,button{
            margin-top:2%;
            margin-left: 22%;
            margin-right: 10%;
        }
        .mycheckbox{
            margin-top:10px;
            margin-left: 40px;
            margin-bottom: 10px;
            height: 10px;
        }
    </style>
    <meta charset="utf-8">
    <title>welcome soss</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://www.meicanstatic.com/preorder/static/landing.123c8dae.css" rel="stylesheet">
</head>
<body>

<form name="loginForm" class="form-horizontal" role="form" action="welcome" method="post">
    <div class="mycenter">
        <div class="mysign">
    <div class="form-group">
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"
                   placeholder="请输入手机号" name="phone">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname"
                   placeholder="请输入密码" name="password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button onclick="login()" class="btn btn-success col-lg-12">登录</button>
        </div>
    </div>
        </div>
    </div>
</form>

</body>
<div class="footer">
    <div class="title">美餐网 by dly</div>
    <div class="hr"></div>
</div>
</html>

<script>
    function login() {
        document.loginForm.action = "welcome";
        document.loginForm.submit();
    }
    function register() {
        document.loginForm.action = "register";
        document.loginForm.submit();
    }
</script>