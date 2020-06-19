

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>註冊</title>
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
      width: 10em;
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

    #font {
      font-size:2em;
      font-family:DFKai-sb;
    }

  </style>
  
  <script>
    function login() {
      var useraccount = document.getElementById("userAccount");
      var username = document.getElementById("name");
      var pass = document.getElementById("password");
      var phone = document.getElementById("phone");
      var mail = document.getElementById("userMail");
      if (useraccount.value == "") {
        alert("請輸入使用者名稱");
      } else if (pass.value == "") {
        alert("請輸入密碼");
      } else if (phone.value == "") {
        alert("請輸入電話");
      } else if (mail.value == "") {
        alert("請輸入信箱");
      } else if (username.value == "") {
        alert("請輸入姓名");
      } else {
        document.forms["myform"].submit();
      }
    }
    
  </script>
</head>

<body>
  
  <div id="login_frame">
    <form method="post" action="counter.php" id="myform">
      <p id="font">註冊</p>
      <p><label class="label_input ">使用者名稱</label><input type="text" id="userAccount" name="userAccount" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">密碼</label><input type="password" id="password" name="userPassword" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">姓名</label><input type="text" id="name" name="userName" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">電話</label><input type="tel" id="phone" name="userPhone" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input ">信箱</label><input type="text" id="userMail" name="userMail" class="text_field " /><span style="color:red;">*必填</span></p>
      <br><br><br>
      <div id="login_control">
        <input type="" id="btn_login" value="提交" onclick="login()"/>
      </div>
    </form>
    
  </div>
</body>

</html>