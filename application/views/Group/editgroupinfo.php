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
    <link href="css/landing.123c8dae.css" rel="stylesheet">
    <link href="css/login_111.css" rel="stylesheet">
    <link href="css/login_222.css" rel="stylesheet">
</head>
<body>
<div id="root" style="height: 100%">
    <div data-reactroot="" style="height: 100%;">
        <div>
            <header class="Header__block___DsXtq">
                <div class="Header__inner____spgD">
          <span>
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">美餐</font></font>
            <span class="Header__splitter___1qlVi">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">|</font></font>
            </span>
            <span>
              <!-- react-text: 10 -->
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">您好，</font></font>
                <!-- /react-text -->
                <!-- react-text: 11 -->
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">请输入修改的信息</font></font>
                <!-- /react-text --></span>
          </span>
                </div>
            </header>
            <div class="Login__block___FHANx">
                <div class="Login__container___FL5lV">
                    <form name="loginForm" role="form" action="welcome" method="post">
                        <div class="Login__header___12Rnk">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">修改信息</font>
                            </font>
                        </div>
                        <div class="Input__inputGroup___2_TNL">
                            <label class="Input__label___1zkjm undefined Input__isTwoLine___1qSB9">
                                 <span class="Input__labelText___3690B">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">企业名称</font>
                                    </font>
                                 </span>
                                <input type="text" class="Input__textInput___13McV" value="" name="gname"></label>
                        </div>
                        <div class="Input__inputGroup___2_TNL">
                            <label class="Input__label___1zkjm undefined Input__isTwoLine___1qSB9">
                                 <span class="Input__labelText___3690B">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">地址</font>
                                    </font>
                                 </span>
                                <input type="text" class="Input__textInput___13McV" value="" name="address"></label>
                        </div>
                        <div class="Input__inputGroup___2_TNL">
                            <label class="Input__label___1zkjm undefined Input__isTwoLine___1qSB9">
                                 <span class="Input__labelText___3690B">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">联系方式</font>
                                    </font>
                                 </span>
                                <input type="text" class="Input__textInput___13McV" value="" name="phone"></label>
                        </div>
                        <div class="Input__inputGroup___2_TNL" style="text-align: center;">
                            <div class="Input__inputButtonGroup___MuHZ3">
                                <label class="Input__label___1zkjm">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            <input type="button"  onclick="login()" class="Input__buttonInput___2tH_z Input__isPrimary___31SHE Input__isBig___1ESLM" value="修改"></font>
                                    </font>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <footer class="Footer__block___3Axpw">
        <span>
          <!-- react-text: 32 -->
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">dly @</font></font>
            <!-- /react-text -->
            <!-- react-text: 33 -->
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">2018</font></font>
            <!-- /react-text -->
            <!-- react-text: 34 -->
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">dly。</font>
            <font style="vertical-align: inherit;">dly。</font></font>
            <!-- /react-text --></span>
                <span class="Footer__customer___2Vc10">
          <!-- react-text: 36 -->
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">客服电话：</font>
            <span class="Footer__phone___6jc0z">
              <font style="vertical-align: inherit;">dly</font></span>
          </font>
                    <!-- /react-text -->
          <span class="Footer__phone___6jc0z">
            <font style="vertical-align: inherit;"></font>
          </span>
        </span>
            </footer>
            <!-- react-empty: 38 --></div>
    </div>
</div>
</body>
</html>

<script>
    function login() {
        document.loginForm.action = "EditGroupInfo?flag=1&usertype=3&uid=<?php echo $uid ?>";
        document.loginForm.submit();
    }
    function register() {
        document.loginForm.action = "register";
        document.loginForm.submit();
    }
</script>