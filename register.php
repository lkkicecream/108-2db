<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>註冊</title>
  <link rel="stylesheet" type="text/css" href="login.css" />
  <script type="text/javascript" src="login.js"></script>
  <style>
    body {
      background-image: url("水彩背景.jpg");
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
      background-color: rgba(240, 255, 255, 0.5);
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
      width: 10em;
      height: 28px;
      line-height: 28px;
      text-align: center;
      color: white;
      background-color: #3CD8FF;
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
      background-color: #3BD9FF;
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

    #font {
      font-size:2em;
      font-family:DFKai-sb;
    }

  </style>
  
  <script>
    function login() {
      var username = document.getElementById("username");
      var pass = document.getElementById("password");
      if (username.value == "") {
        alert("請輸入使用者名稱");
      } else if (pass.value == "") {
        alert("請輸入密碼");
      } 
    }
  </script>
</head>

<body>
  <div id="login_frame">
    <form method="post" action="regist.php">
      <p id="font">註冊</p>
      <p><label class="label_input ">使用者名稱</label><input type="text" id="username" name="userName" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">密碼</label><input type="password" id="password" name="userPassword" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">電話</label><input type="tel" id="phone" name="userPhone" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">身分證字號</label><input type="text" id="userSsn" name="userSsn" class="text_field " /><span style="color:red;">*必填</span></p>
      <div id="login_control">
        <input type="submit" id="btn_login" value="提交" onclick="login();doCookieSetup(this.form.username.value,this.form.userPassword.value,this.form.userPhone.value,this.form.userSsn.value)" />
      </div>
    </form>
  </div>
</body>

</html>