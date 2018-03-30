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

<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">面板标题</h3>
    </div>
    <div class="panel-body">
        这是一个基本的面板
    </div>
    <table class="table">
        <th><?php echo json_encode($user_info)?></th><th><?php echo json_encode($order_info)?> </th>
        <tr><td>产品 A</td><td>200</td></tr>
        <tr><td>产品 B</td><td>400</td></tr>
    </table>
</div>
<div class="panel panel-default">
    <div class="panel-heading">面板标题</div>
    <table class="table">
        <th>产品</th><th>价格 </th>
        <tr><td>产品 A</td><td>200</td></tr>
        <tr><td>产品 B</td><td>400</td></tr>
    </table>
</div>

<form name="registerForm" class="form-horizontal" role="form" action="" method="post">
    <div class="form-group">
        <label for="firstname" class="col-sm-2 control-label">用户名/手机号</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="firstname"
                   placeholder="手机号" name="reg_phone">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname"
                   placeholder="请输入密码" name="reg_password">
        </div>
    </div>
    <div class="form-group">
        <label for="lastname" class="col-sm-2 control-label">再次确认密码</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="lastname"
                   placeholder="请输入密码" name="password">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button onclick="register()" class="btn btn-default">注册</button>
        </div>
    </div>
</form>

</body>
</html>

<script>
    function register() {
        document.loginForm.action = "register";
        document.loginForm.submit();
    }
</script>