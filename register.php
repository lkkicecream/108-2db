

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
      
      var useraccountpattern = "/^[a-zA-Z0-9_]{4,15}$/";
      var usernamepattern "^[\u4e00-\u9fa5]{1,7}";
      var passpattern = "^\W{6,20}$";
      var phonepattern = "/^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)| ([0-9]{3,4}\-))?( [0-9]{7,8})(\-[0-9]+)?$/";
      var mailpattern = "^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$";

      
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
      } else if(!useraccountpattern.test(useraccount.value)) {
        alert("使用者名稱不符合格式");
      } else if(!usernamepattern.test(username.value) ) {
        alert("姓名不符合格式");
      } else if(!passpattern.test(pass.value) ) {
        alert("密碼不符合格式");
      } else if(!phonepattern.test(phone.value)) {
        alert("電話不符合格式");
      } else if(!mailpattern.test(mail.value)) {
        alert("信箱不符合格式");
      } else {
        document.forms["myform"].submit();
      }
    }
      /*else if($useraccount.value != "^[a-zA-Z0-9_]{4,15}$"){
        alert("使用者名稱不符合格式");
      } else if($pass.value != "^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$" ){
        alert("密碼不符合格式");
      } else if($phone.value != "/^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)| ([0-9]{3,4}\-))?( [0-9]{7,8})(\-[0-9]+)?$/" ){
        alert("電話不符合格式");
      } else if($username.value != "^[\u4e00-\u9fa5]{1,7}" ){
        alert("姓名不符合格式");
      } else if($mail.value != "^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$" ){
        alert("信箱不符合格式");
      } */

    
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
        <button id="btn_login" value="提交" onclick="login()" > 提交</button>
      </div>
    </form>
    
  </div>
</body>

</html>