<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>welcome soss</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<form name="loginForm" class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户名/手机号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"
                   placeholder="请输入用户名/手机号">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="lastname"
                   placeholder="请输入密码">
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
            <button onclick="login()" class="btn btn-default">登录</button><button onclick="register()" class="btn btn-default">注册</button>
        </div>
    </div>
</form>

</body>
</html>

<script>
    function login() {
        document.loginForm.action = "http://www.baidu.com";
        document.loginForm.submit();
    }
    function register() {
        document.loginForm.action = "http://www.google.com";
        document.loginForm.submit();
    }
</script>