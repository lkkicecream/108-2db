<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>首頁</title>

  <script src="https://kit.fontawesome.com/66a625edde.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>首頁</title>

  <!-- 字型 -->
  <link rel="stylesheet" href="css/teko.css">

  <!-- 主體CSS -->
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/hover.css">

  <style>
    body {
      background-color: #E0E0E0;
    }
    #login_frame {
      width: 30em;
      height: 30em;
      padding: 13px;
      position: absolute;
      left: 55%;
      top: 45%;
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
      width: 7.5em;
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
      height: 36px;
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

    #carouselbody {
      /* 主要頁面 */
      margin-top: 30px;
      background-color: #8E8E8E;
    }

    .carousel .carousel-item {
      height: 400px;
    }

    .carousel .carousel-item img {
      align-items: center;
      max-width: 800px;
      margin: auto;
    }

    .header-navigation-box {
      display: -webkit-flex;
      display: flex;
      -webkit-align-items: center;
      align-items: center;
      -webkit-justify-content: center;
      justify-content: center;
      flex-direction: column;
      width: 30%;
      height: 100vh;
      position: fixed;
      margin-left: 1000px;
      z-index: 100;
      font-size: 0;
      top: -110%;
      background-color: rgba(0, 0, 0, 0.9);
      transition: all .4s linear;
    }
  </style>
  <script language = 'javascript' type = 'text/javascript'>
    function search() {
      var search1 = document.getElementById("search1");
      var select1 = document.getElementById("select1");
      if (search1.value == "" && select1.options[select1.selectedIndex].value == 0) {
        alert("請輸入關鍵字");
        document.myform.action ="sights_search.php";
      }
    }
  </script>
</head>

<body>   
  <!-- Header -->
  <header id="header-fixed" class="header-fixed-open">
    <!-- Logo -->
    <section class="header-logo-box">
      <a href="home.php">
        <img src="logo.png" alt="鬼谷網頁設計公司" width="200px" height="50px">
      </a>
    </section>
    <!-- Logo END -->

    <!-- Menu -->
    <section class="header-menu-box">
    <nav class="header-menu-box-list navbar navbar-expand-lg">
        <ul class="header-menu-class navbar-nav mr-auto">
          <li class="header-menu-list">
            <a href="/#index-contact" onclick="menu_scrollTo(2);return false;">
              <span class="header-menu-en-title">Contact</span>
              <span class="header-menu-ch-title">聯絡我們</span>
            </a>
          </li>
          <li class="header-menu-list">
            <a href="hotel_search.php">
              <span class="header-menu-en-title">Hotel</span>
              <span class="header-menu-ch-title">飯店</span>
            </a>
          </li>
          <li class="header-menu-list">
            <a href="sights_search.php">
              <span class="header-menu-en-title">Sight</span>
              <span class="header-menu-ch-title">景點</span>
            </a>
          </li>
          <?php
          $account_en = $_SESSION['account_en'];
          $account = $_SESSION['account'];

          $login_en = $_SESSION["login_en"];
          $login = $_SESSION["login"];
          if ($login) {
            echo "
              <li class=\"header-menu-list\">
              <a href=\"\">
                <span class=\"header-menu-en-title\"> $account_en </span>
                <span class=\"header-menu-ch-title\"> $account </span>
              </a>
              </li>
              <li class=\"header-menu-list\">
                <a href=\"logout.php\">
                  <span class=\"header-menu-en-title\"> $login_en </span>
                  <span class=\"header-menu-ch-title\"> $login </span>
                </a>
              </li>
              ";
          }
          ?>
          <?php
          if (!$login)
            echo "<li class=\"header-menu-list\">
              <a href=\"signup_sight.php\">
                <span class=\"header-menu-en-title\">login</span>
                <span class=\"header-menu-ch-title\">登入</span>
              </a>
              </li>
              <li class=\"header-menu-list\">
                <a href=\"register.php\">
                  <span class=\"header-menu-en-title\">regist</span>
                  <span class=\"header-menu-ch-title\">註冊</span>
                </a>
              </li>
              ";

          ?>

        </ul>
      </nav>
    </section>
    <!-- Menu END -->

    <!-- 導覽  -->
    <section class="header-menu-rwd-btn-box">
      <div class="header-menu-rwd-btn-border" id="header-navigation-border">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </section>
    <!-- 導覽 END -->

    <!-- 展開視窗 -->
    <section class="header-navigation-box" id="header-navigation-box">
      <nav class="header-navigation-menu-box">
        <ul class="header-navigation-menu">
          <li>
            <a href="personal.php">
              <span class="header-navigation-ch-title">Personal</span>
              <span class="header-navigation-en-title" style="font-size: 20px;">修改個人資料</span>
            </a>
          </li>
          <li>
            <a href="myfavorite.php">
              <span class="header-navigation-en-title" style="font-size: 25px;">我的最愛</span>
              <span class="header-navigation-ch-title" style="font-size: 25px;">Myfavorite</span>
            </a>
          </li>
          <li>
            <a href="" onclick="maintain()">
              <span class="header-navigation-en-title" style="font-size: 25px;">關於我們</span>
              <span class="header-navigation-ch-title">About</span>
            </a>
          </li>
          <li>
            <a href="" onclick="maintain()">
              <span class="header-navigation-en-title" style="font-size: 25px;">文章專區</span>
              <span class="header-navigation-ch-title">Article</span>
            </a>
          </li>
        </ul>
        <dl class="header-navigation-summary-block">
          <dt class="header-navigation-summary-title">Tel：</dt>
          <dd class="header-navigation-summary-description">
            <a href="tel:0423157956" title="鬼谷聯絡電話" rel="noopener">
              04-23157956
            </a>
          </dd>
        </dl>
        <dl class="header-navigation-summary-block">
          <dt class="header-navigation-summary-title">E-mail：</dt>
          <dd class="header-navigation-summary-description">
            <a href="mailto:service@great-good.tw" title="鬼谷服務信箱" rel="noopener">
              service@great-good.tw
            </a>
          </dd>
        </dl>
        <p class="header-copyright">
          © 2018 GD Web Design.<small> All Rights Reserved.</small>
        </p>
        </div>
      </nav>
      <div class="header-mask" id="header-navigation-mask"></div>
    </section>
  </header>
  <div id="login_frame">
    <form method="post">
      <p id="font">個人資料</p>
      <br>
      <p><label class="label_input">使用者名稱</label><input type="text" id="userAccount" name="userAccount" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input">密碼</label><input type="password" id="password" name="userPassword" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input">姓名</label><input type="text" id="name" name="userName" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input">電話</label><input type="tel" id="phone" name="userPhone" class="text_field " /><span style="color:red;">*必填</span></p>
      <p><label class="label_input">信箱</label><input type="text" id="userMail" name="userMail" class="text_field " /><span style="color:red;">*必填</span></p>
      <br>
      <div id="login_control">
        <input type="submit" id="btn_login" value="修改" onclick="login();"/>
      </div>
    </form>
    </div>
</body>
<!-- zenscroll -->
<script type="text/javascript" src="js/zenscroll.js" async=""></script>
  <!-- zenscroll END -->

  <!-- 共用 JS -->
  <script src="js/shared.js" type="text/javascript" async=""></script>
  <!-- 共用 JS END -->
  <!-- Footer END-->
  <script type="text/javascript" src="js/articles.js" charset="utf-8" async=""></script>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>