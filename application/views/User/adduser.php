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
            margin-right: 8%;
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
</head>
<body>

<form name="registerForm" class="form-horizontal" role="form" action="" method="post">
    <div class="mycenter">
        <div class="mysign">
            <div class="form-group">
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="firstname"
                           placeholder="手机号" name="phone">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="button" onclick="register()" class="btn btn-success col-lg-12">添加</button>
                </div>
            </div>
        </div>
    </div>
</form>

</body>
</html>

<script>
    function register() {
        document.registerForm.action = "/AddUser?flag=1&gid=<?php echo $gid?>";
        document.registerForm.submit();
    }
</script>