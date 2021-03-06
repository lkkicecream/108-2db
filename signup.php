<?php
session_start();
$url = $_SESSION['url'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>登入頁面</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
  <script type="text/javascript" src="login.js"></script>
  <style>
    body {
      background-image: url("下載.png");
      background-size: 100%;
      background-repeat: no-repeat;
    }

    #login_frame {
      width: 30em;
      height: 30em;
      padding: 13px;
      position: absolute;
      left: 55%;
      top: 40%;
      margin-left: -300px;
      margin-top: -200px;
      background-color: rgba(105, 105, 105, 0.7);
      border-radius: 10px;
      text-align: center;
    }

    form p>* {
      display: inline-block;
      vertical-align: middle;
    }

    #image_logo {
      margin-top: 3em;
    }

    .label_input {
      font-size: 14px;
      font-family: 宋體;
      width: 5.5em;
      height: 28px;
      line-height: 28px;
      text-align: center;
      color: white;
      background-color: black;
      border-top-left-radius: 1em;
      border-bottom-left-radius: 1em;
    }

    .text_field {
      width: 15em;
      height: 28px;
      border-top-right-radius: 5px;
      border-bottom-right-radius: 5px;
      border: 0;
    }

    #btn_login {
      font-size: 14px;
      font-family: 宋體;
      width: 5em;
      height: 28px;
      line-height: 28px;
      text-align: center;
      color: white;
      background-color: black;
      border-radius: 6px;
      border: 0;
      margin-left: 0px;
      margin-top: 2em;
    }

    #forget_pwd {
      font-size: 12px;
      color: white;
      text-decoration: none;
      position: relative;
      top: 5px;
      margin-left: 250px;
    }

    #forget_pwd:hover {
      color: blue;
      text-decoration: underline;
    }

    #login_control {
      padding: 0 28px;
    }
  </style>

  <script>
    function login() {
      var username = document.getElementById("username");
      var pass = document.getElementById("password");

      if (username.value == "") {
        alert("請輸入使用者名稱");
        document.myform.action = "signup_hotel.php";
      } else if (pass.value == "") {
        alert("請輸入密碼");
        document.myform.action = "signup_hotel.php";
      } else {
        document.forms["myform"].submit();
      } 
    }
  </script>
  <script language='javascript' type='text/javascript'>
    function return1() {
      window.location.href = "<?php echo $url; ?>";
    }
  </script>
</head>

<body>
  <div id="login_frame">
    <p id="image_logo"><img src="旅遊管理企業.png" style="width: 20em; height: 15em"></p>
    <form method="post" action="login.php" name="myform">
      <p><label class="label_input">使用者名稱</label><input type="text" id="username" name="userName" class="text_field" /></p>
      <p><label class="label_input">密碼</label><input type="password" id="password" name="userPassword" class="text_field" /></p>
      <div id="login_control">
        <input type="button" id="btn_login" value="登入" onclick="login();" />
        <input type="button" id="btn_login" value="返回" onclick="return1();" />
      </div>
    </form>
  </div>
</body>

</html>